<?php
/**
 * TastyIgniter
 *
 * An open source online ordering, reservation and management system for restaurants.
 *
 * @package   TastyIgniter
 * @author    SamPoyigi
 * @copyright TastyIgniter
 * @link      http://tastyigniter.com
 * @license   http://opensource.org/licenses/GPL-3.0 The GNU GENERAL PUBLIC LICENSE
 * @since     File available since Release 1.0
 */
defined('BASEPATH') or exit('No direct script access allowed');

/* load the HMVC_Loader class */
require IGNITEPATH . 'third_party/MX/Loader.php';

/**
 * TastyIgniter Loader Class
 *
 * @category       Libraries
 * @package        TastyIgniter\Core\TI_Loader.php
 * @link           http://docs.tastyigniter.com
 */
class TI_Loader extends MX_Loader {

    protected $_ci_view_paths =	array(VIEWPATH	=> TRUE, THEMEPATH => TRUE);

    protected $_ci_library_paths =	array(IGNITEPATH, BASEPATH, APPPATH);

    protected $_ci_model_paths =	array(IGNITEPATH, APPPATH);

    protected $_ci_helper_paths =	array(IGNITEPATH, BASEPATH);

    protected $_db_config_loaded =	FALSE;

	/**
     * Initializer
     *
     * @param null $controller
     */
    public function initialize($controller = NULL)
    {
        // Load system configuration from database
        $this->_load_db_config();

        parent::initialize($controller);
    }

    // --------------------------------------------------------------------

    /**
     * Remove later
     * @param $class
     * @param null $params
     * @param null $object_name
     */
    protected function _ci_load_class($class, $params = NULL, $object_name = NULL) {
        return $this->_ci_load_library($class, $params, $object_name);
    }

    // --------------------------------------------------------------------

    /** Load a module view **/
    public function view($view, $vars = array(), $return = FALSE)
    {
        $theme_paths = array(
            $this->config->item(APPDIR, 'default_themes'), $this->config->item(APPDIR.'_parent', 'default_themes')
        );

        foreach (array_filter($theme_paths) as $theme_path) {
            $theme_path = rtrim($theme_path, '/');

            foreach (array('/', '/layouts/', '/partials/') as $folder) {
                $t_view = (pathinfo($view, PATHINFO_EXTENSION)) ? $view : $view.EXT;

                if (file_exists(THEMEPATH . $theme_path . $folder . $t_view)) {
                    $path = THEMEPATH . $theme_path . $folder;
                    $this->_ci_view_paths = array($path => TRUE) + $this->_ci_view_paths;
                    break;
                }
            }
        }

        if (empty($path)) {
            list($path, $_view) = Modules::find($view, $this->_module, 'views/');

            if ($path != FALSE) {
                $this->_ci_view_paths = array($path => TRUE) + $this->_ci_view_paths;
                $view = $_view;
            }
        }

        return $this->_ci_load(array('_ci_view' => $view, '_ci_vars' => $this->_ci_prepare_view_vars($vars), '_ci_return' => $return));
    }

    // --------------------------------------------------------------------

	/**
	 * Model Loader
	 *
	 * Loads and instantiates models.
	 *
	 * @param	string	$model		Model name
	 * @param	string	$name		An optional object name to assign to
	 * @param	bool	$db_conn	An optional database connection configuration to initialize
	 * @return	object
	 */
    public function model($model, $object_name = NULL, $connect = FALSE)
    {
        if (is_array($model)) return $this->models($model);

        ($_alias = $object_name) OR $_alias = basename($model);

        if (in_array($_alias, $this->_ci_models, TRUE))
            return $this;

        /* check module */
        list($path, $_model) = Modules::find(strtolower($model), $this->_module, 'models/');

        if ($path == FALSE)
        {
            /* check application & packages */
            $this->_ci_model($model, $object_name, $connect);
        }
        else
        {
            class_exists('CI_Model', FALSE) OR load_class('Model', 'core');

            if ($connect !== FALSE && ! class_exists('CI_DB', FALSE))
            {
                if ($connect === TRUE) $connect = '';
                $this->database($connect, FALSE, TRUE);
            }

            Modules::load_file($_model, $path);

            $model = ucfirst($_model);
            CI::$APP->$_alias = new $model();

            $this->_ci_models[] = $_alias;
        }

        return $this;
    }

	// --------------------------------------------------------------------

    protected function _ci_model($model, $name = '', $db_conn = FALSE)
    {
        if (empty($model))
        {
            return $this;
        }
        elseif (is_array($model))
        {
            foreach ($model as $key => $value)
            {
                is_int($key) ? $this->model($value, '', $db_conn) : $this->model($key, $value, $db_conn);
            }

            return $this;
        }

        $path = '';

        // Is the model in a sub-folder? If so, parse out the filename and path.
        if (($last_slash = strrpos($model, '/')) !== FALSE)
        {
            // The path is in front of the last slash
            $path = substr($model, 0, ++$last_slash);

            // And the model name behind it
            $model = substr($model, $last_slash);
        }

        if (empty($name))
        {
            $name = $model;
        }

        if (in_array($name, $this->_ci_models, TRUE))
        {
            return $this;
        }

        $CI =& get_instance();
        if (isset($CI->$name))
        {
            throw new RuntimeException('The model name you are loading is the name of a resource that is already being used: '.$name);
        }

        if ($db_conn !== FALSE && ! class_exists('CI_DB', FALSE))
        {
            if ($db_conn === TRUE)
            {
                $db_conn = '';
            }

            $this->database($db_conn, FALSE, TRUE);
        }

        // Note: All of the code under this condition used to be just:
        //
        //       load_class('Model', 'core');
        //
        //       However, load_class() instantiates classes
        //       to cache them for later use and that prevents
        //       MY_Model from being an abstract class and is
        //       sub-optimal otherwise anyway.
        if ( ! class_exists('CI_Model', FALSE))
        {
            $app_path = IGNITEPATH.'core'.DIRECTORY_SEPARATOR;
            if (file_exists($app_path.'Model.php'))
            {
                require_once($app_path.'Model.php');
                if ( ! class_exists('CI_Model', FALSE))
                {
                    throw new RuntimeException($app_path."Model.php exists, but doesn't declare class CI_Model");
                }
            }
            elseif ( ! class_exists('CI_Model', FALSE))
            {
                require_once(BASEPATH.'core'.DIRECTORY_SEPARATOR.'Model.php');
            }

            $class = config_item('subclass_prefix').'Model';
            if (file_exists($app_path.$class.'.php'))
            {
                require_once($app_path.$class.'.php');
                if ( ! class_exists($class, FALSE))
                {
                    throw new RuntimeException($app_path.$class.".php exists, but doesn't declare class ".$class);
                }
            }
        }

        $model = ucfirst($model);
        if ( ! class_exists($model, FALSE))
        {
            foreach ($this->_ci_model_paths as $mod_path)
            {
                if ( ! file_exists($mod_path.'models/'.$path.$model.'.php'))
                {
                    continue;
                }

                require_once($mod_path.'models/'.$path.$model.'.php');
                if ( ! class_exists($model, FALSE))
                {
                    throw new RuntimeException($mod_path."models/".$path.$model.".php exists, but doesn't declare class ".$model);
                }

                break;
            }

            if ( ! class_exists($model, FALSE))
            {
                throw new RuntimeException('Unable to locate the model you have specified: '.$model);
            }
        }
        elseif ( ! is_subclass_of($model, 'CI_Model'))
        {
            throw new RuntimeException("Class ".$model." already exists and doesn't extend CI_Model");
        }

        $this->_ci_models[] = $name;
        $CI->$name = new $model();
        return $this;
    }

    // --------------------------------------------------------------------

	/** Autoload module items *
	 *
	 * @param $autoload
	 */
	public function _autoloader($autoload) {
		parent::_autoloader($autoload);
	}

	// --------------------------------------------------------------------

    /**
     * CI Autoloader
     *
     * Loads component listed in the config/autoload.php file.
     *
     * @used-by CI_Loader::initialize()
     * @return  void
     */
    protected function _ci_autoloader()
    {
        if (file_exists(IGNITEPATH.'config/autoload.php'))
        {
            include(IGNITEPATH.'config/autoload.php');
        }

        if (file_exists(IGNITEPATH.'config/'.ENVIRONMENT.'/autoload.php'))
        {
            include(IGNITEPATH.'config/'.ENVIRONMENT.'/autoload.php');
        }

        if ( ! isset($autoload))
        {
            return;
        }

        // Autoload packages
        if (isset($autoload['packages']))
        {
            foreach ($autoload['packages'] as $package_path)
            {
                $this->add_package_path($package_path);
            }
        }

        // Load any custom config file
        if (count($autoload['config']) > 0)
        {
            foreach ($autoload['config'] as $val)
            {
                $this->config($val);
            }
        }

        // Autoload helpers and languages
        foreach (array('helper', 'language') as $type)
        {
            if (isset($autoload[$type]) && count($autoload[$type]) > 0)
            {
                $this->$type($autoload[$type]);
            }
        }

        // Autoload drivers
        if (isset($autoload['drivers']))
        {
            $this->driver($autoload['drivers']);
        }

        // Load libraries
        if (isset($autoload['libraries']) && count($autoload['libraries']) > 0)
        {
            // Load the database driver.
            if (in_array('database', $autoload['libraries']))
            {
                $this->database();
                $autoload['libraries'] = array_diff($autoload['libraries'], array('database'));
            }

            // Load all other libraries
            $this->library($autoload['libraries']);
        }

        // Autoload models
        if (isset($autoload['model']))
        {
            $this->model($autoload['model']);
        }
    }

    // --------------------------------------------------------------------

	/**
     * Load config from database
     *
     * Fetches the config values from the database and adds them to config array
     *
     */
    protected function _load_db_config() {
        if ($this->_db_config_loaded === TRUE) {
            return;
        }

        $this->database();

        // Make sure the database is connected and settings table exists
        if ($this->db->conn_id !== FALSE AND $this->db->table_exists('settings')) {

            $this->db->query("SET SESSION sql_mode=''");

            $this->db->from('settings');

            $query = $this->db->get();

            if ($query->num_rows() > 0) {
                foreach ($query->result_array() as $setting) {
                    if ( ! empty($setting['serialized'])) {
                        $this->config->set_item($setting['item'], unserialize($setting['value']));
                    } else {
                        $this->config->set_item($setting['item'], $setting['value']);
                    }
                }

                if ($this->config->item('timezone')) {
                    date_default_timezone_set($this->config->item('timezone'));
                }

                if ($url = $this->config->item('site_url')) {
                    $this->config->set_item('base_url', rtrim($url, '/') . '/' . (APPDIR === MAINDIR ? '' : APPDIR));
                }

                $this->_db_config_loaded = TRUE;

                log_message('info', 'Database Config Loaded');
            }
        }
    }
}

/* End of file TI_Loader.php */
/* Location: ./system/tastyigniter/core/TI_Loader.php */