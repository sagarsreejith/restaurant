<?php

	$pages = $this->Pages_model->getPages();

	$body_class = '';
	if ($this->uri->rsegment(1) === 'menus') {
		$body_class = 'menus-page';
	}
?>
    <?php echo get_doctype(); ?>
        <html xmlns="http://www.w3.org/1999/xhtml" lang="en">

        <head>
            <?php echo get_metas(); ?>
                <?php if ($favicon = get_theme_options('favicon')) { ?>
                    <link href="<?php echo image_url($favicon); ?>" rel="shortcut icon" type="image/ico">
                    <?php } else { ?>
                        <?php echo get_favicon(); ?>
                            <?php } ?>
                                <title>
                                    <?php echo sprintf(lang('site_title'), get_title(), config_item('site_name')); ?>
                                </title>
                                <?php echo get_style_tags(); ?>
                                    <?php echo get_active_styles(); ?>
                                        <?php echo get_script_tags(); ?>
                                            <?php echo get_theme_options('ga_tracking_code'); ?>
                                                <script type="text/javascript">
                                                    var alert_close = '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';

                                                    var js_site_url = function(str) {
                                                        var strTmp = "<?php echo rtrim(site_url(), '/').'/'; ?>" + str;
                                                        return strTmp;
                                                    };

                                                    var js_base_url = function(str) {
                                                        var strTmp = "<?php echo base_url(); ?>" + str;
                                                        return strTmp;
                                                    };

                                                    var pageHeight = $(window).height();

                                                    $(document).ready(function() {
                                                        if ($('#notification > p').length > 0) {
                                                            setTimeout(function() {
                                                                $('#notification > p').slideUp(function() {
                                                                    $('#notification').empty();
                                                                });
                                                            }, 3000);
                                                        }

                                                        $('.alert').alert();
                                                        $('.dropdown-toggle').dropdown();
                                                        $('a[title], i[title]').tooltip({
                                                            placement: 'bottom'
                                                        });
                                                        $('select.form-control').select2({
                                                            placeholder: 'Select an Area'
                                                        });
                                                    });
                                                </script>
                                                <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
                                                <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
                                                <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
                                                <?php $custom_script = get_theme_options('custom_script'); ?>
                                                    <?php if (!empty($custom_script['head'])) { echo '<script type="text/javascript">'.$custom_script['head'].'</script>'; }; ?>
                                                        <link href="https://fonts.googleapis.com/css?family=Cabin&display=swap" rel="stylesheet">
                                                      
        </head>

        <body class="<?php echo $body_class; ?>">
            <div id="opaclayer" onclick="closeReviewBox();"></div>
            
                                
            <header class="header" >
			<!-- Header Inner -->
			<div class="main-menu">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-3 col-xs-12">						
							<!-- Logo -->
							<div class="logo">
                                    <a class="" href="<?php echo rtrim(site_url(), '/').'/'; ?>">
                                        <?php if (get_theme_options( 'logo_image')) { ?>
                                        <img alt="<?php echo $this->config->item('site_name'); ?>" src="<?php echo image_url(get_theme_options('logo_image')) ?>" >

                                        <?php } else if (get_theme_options( 'logo_text')) { ?>
                                        <?php echo get_theme_options( 'logo_text'); ?>
                                        <?php } else if ($this->config->item('site_logo') === 'data/no_photo.png') { ?>
                                        <?php echo $this->config->item('site_name'); ?>
                                        <?php } else { ?>
                                        <img alt="<?php echo $this->config->item('site_name'); ?>" src="<?php echo image_url($this->config->item('site_logo')) ?>" >
                                        <?php } ?>
                                    </a>
                                </div>
							<!--/ End Logo -->
							<div class="mobile-nav"></div>
						</div>
						<div class="col-md-9 col-sm-9">
							<nav class="navbar menu navbar-default">
								<div class="collapse navbar-collapse">
									<!-- <ul id="nav" class="nav mobile-menu navbar-nav">
										<li class="active"><a href="#hero-area">Home</a></li>
										<li><a href="#features">Features</a></li>
										<li><a href="#screenshot-area">Screenshots</a></li>
										<li><a href="#team">Team</a></li>
										<li><a href="#pricing">Pricing</a></li>
										<li><a href="#faq">Faq</a></li>
										<li><a href="#blog">News</a></li>
										<li><a href="#contact">Contact</a></li>
                                    </ul> -->
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class=""><a role="presentation" href="<?php echo site_url(''); ?>" active "#">Home</a>
                                        </li>
                                        <li class=""><a href="<?php echo site_url('#about'); ?>">About</a>
                                        </li>
                                        <li><a href="<?php echo site_url('#gallery'); ?>">Gallery</a>
                                        </li>

                                        <?php if ($this->config->item('reservation_mode') === '1') { ?>
                                        <li class="">
                                            <a href="<?php echo site_url('reservation'); ?>">
                                                <?php echo lang( 'menu_reservation'); ?>
                                            </a>
                                        </li>
                                        <?php } ?>

                                        <?php if ($this->customer->isLogged()) { ?>

                                        <li class="dropdown">
                                            <a class="dropdown-toggle clickable" data-toggle="dropdown" id="dropdownLabel1">
                                                <?php echo lang( 'menu_my_account'); ?> <span class="caret"></span>
                                            </a>
                                            <ul class="dropdown-menu " role="menu" aria-labelledby="dropdownLabel1">
                                                <div class="top-arrow"></div>
                                                <li class="hidden">
                                                    <a href="#page-top"></a>
                                                </li>
                                                <li>
                                                    <a role="presentation" href="<?php echo site_url('account/orders'); ?>">
                                                        <?php echo lang( 'menu_recent_order1'); ?>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a role="presentation" href="<?php echo site_url('account/account'); ?>">
                                                        <?php echo lang( 'menu_my_account'); ?>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a role="presentation" href="<?php echo site_url('account/address'); ?>">
                                                        <?php echo lang( 'menu_address'); ?>
                                                    </a>
                                                </li>

                                                <?php if ($this->config->item('reservation_mode') === '1') { ?>
                                                <li>
                                                    <a role="presentation" href="<?php echo site_url('account/reservations'); ?>">
                                                        <?php echo lang( 'menu_recent_reservation'); ?>
                                                    </a>
                                                </li>
                                                <?php } ?>

                                                <li>
                                                    <a role="presentation" href="<?php echo site_url('account/logout'); ?>">
                                                        <?php echo lang( 'menu_logout'); ?>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <?php } else { ?>

                                        <li class="">
                                            <a href="<?php echo site_url('local/all'); ?>">
                                                <?php echo lang( 'menu_locations'); ?>
                                            </a>
                                        </li>
                                        <li>
                                                <a href="<?php echo site_url('account/login'); ?>">
                                                                    <?php echo lang('menu_login'); ?>
                                                </a>
                                        </li>
                                        <li>
                                                <a data-toggle="modal" data-target="#exampleModal"> login2</a>
                                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    

                                                                <?php if ($this->alert->get('', 'alert')) { ?>
                                    <div id="notification">
                                        <?php echo $this->alert->display('', 'alert'); ?>
                                    </div>
                                    <?php } ?>
                                        <form method="POST" accept-charset="utf-8" action="<?php echo current_url(); ?>" role="form">
                                            <fieldset>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input type="text" name="email" id="login-email" class="form-control input-lg" placeholder="<?php echo lang('label_email'); ?>" autofocus="" />
                                                        <span class="input-group-addon">@</span>
                                                    </div>
                                                    <?php echo form_error('email', '<span class="text-danger">', '</span>'); ?>
                                                </div>

                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input type="password" name="password" id="login-password" class="form-control input-lg" placeholder="<?php echo lang('label_password'); ?>" />
                                                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                                    </div>
                                                    <?php echo form_error('password', '<span class="text-danger">', '</span>'); ?>
                                                </div>

                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <button type="submit" class="btn btn-primary btn-block btn-lg">
                                                                <?php echo lang('button_login'); ?>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <a class="forgot_btn1  " href="<?php echo $reset_url; ?>">
                                                                <?php echo lang('text_forgot'); ?>
                                                            </a>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <a class=" reg_btn1 text-right" style="" href="<?php echo $register_url; ?>">
                                                                <?php echo lang('button_register'); ?>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </fieldset>
                                        </form>
                                                                    

                                                                </div>
                                                                <!-- <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                                </div> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                               
                                        </li>
                                        <!-- <li><a href="<?php echo site_url('contact'); ?>">Contact</a>
                                        </li> -->
                                        <!--<li><a href="<?php echo site_url('account/register'); ?>"><?php echo lang('menu_register'); ?></a></li>-->

                                        <?php } ?>

                                    </ul>
								</div> 
							</nav>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Inner -->
		</header>

               
   


                <div id="page-wrapper" class="content-area">
                    <?php if (get_theme_options('display_crumbs') === '1' AND ($breadcrumbs = get_breadcrumbs()) !== '') { ?>
                        <div id="breadcrumb">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <?php echo $breadcrumbs; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>

                        <?php if ($page_heading = get_heading()) { ?>
                            <div id="heading">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="heading-content">
                                                <h2><?php echo $page_heading; ?></h2>
                                            </div>
                                        </div>
                                    </div>
                                  
                                </div>
                                <div class="pattern">
                                    <img alt="" src="assets/images/white-pattern.png">
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                   



                                <script>
                                    $(document).ready(function(){
                                        $(document).on('click', function (e){
                                                /* bootstrap collapse js adds "in" class to your collapsible element*/
                                                var menu_opened = $('#main-header-menu-collapse').hasClass('in');
                                            
                                                if(!$(e.target).closest('main-header-menu-collapse').length &&
                                                    !$(e.target).is('#main-header-menu-collapse') &&
                                                    menu_opened === true){
                                                        $('#main-header-menu-collapse').collapse('toggle');
                                                }
                                                $('.toggle').on('click', function() {
  $('.container').stop().addClass('active');
});

$('.close').on('click', function() {
  $('.container').stop().removeClass('active');
});

                                        });
                                    });    
                                    $(function() {
                                        $('#main-header-menu-collapse a').filter(function() {
                                            return this.href == location.href
                                        }).parent().addClass('active').siblings().removeClass('active');

                                        $('#main-header-menu-collapse a').click(function() {
                                            $(this).parent().addClass('active').siblings().removeClass('active')
                                        });
                                    });

                                    $(function() {
                                        $('.navbar-nav li a').click(function() {
                                            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                                                var target = $(this.hash);
                                                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                                                if (target.length) {
                                                    $('html,body').animate({
                                                        scrollTop: target.offset().top - 80
                                                    }, 1500);
                                                    return false;
                                                }
                                            }
                                        });

                                    });

                                  

                                </script>