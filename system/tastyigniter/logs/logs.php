ERROR - 2019-08-20 10:10:12 --> Could not find the language line "label_customer"
ERROR - 2019-08-20 10:59:44 --> Severity: Error --> Call to undefined method Locations_model::getLocations() D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 900
ERROR - 2019-08-20 10:59:55 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 902
ERROR - 2019-08-20 10:59:58 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 902
ERROR - 2019-08-20 11:05:55 --> 404 Page Not Found: 
ERROR - 2019-08-20 11:06:23 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\out-rest\main\views\themes\tastyigniter-orange\partials\locations_filter.php 21
ERROR - 2019-08-20 11:06:56 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\out-rest\main\views\themes\tastyigniter-orange\partials\locations_filter.php 21
ERROR - 2019-08-20 11:15:26 --> Severity: Warning --> Division by zero D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\TI_Pagination.php 94
ERROR - 2019-08-20 11:15:46 --> Severity: Warning --> Division by zero D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\TI_Pagination.php 94
ERROR - 2019-08-20 11:15:50 --> Severity: Warning --> Division by zero D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\TI_Pagination.php 94
ERROR - 2019-08-20 11:19:01 --> Severity: Error --> Call to undefined method Local::filter() D:\xampp\htdocs\out-rest\main\controllers\Local.php 389
ERROR - 2019-08-20 11:19:23 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\out-rest\main\views\themes\tastyigniter-orange\partials\locations_filter.php 21
ERROR - 2019-08-20 11:34:02 --> Query error: Not unique table/alias: 'dw2rtzns5_locations' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM (
SELECT *
FROM `dw2rtzns5_locations`, `dw2rtzns5_locations`
WHERE `location_name` LIKE '%Sharq%' ESCAPE '!'
OR  `location_city` LIKE '%Sharq%' ESCAPE '!'
OR  `location_state` LIKE '%Sharq%' ESCAPE '!'
OR  `location_postcode` LIKE '%Sharq%' ESCAPE '!'
AND `location_status` = '1'
 LIMIT 20
) CI_count_all_results
ERROR - 2019-08-20 11:34:02 --> Severity: Error --> Call to a member function num_rows() on boolean D:\xampp\htdocs\out-rest\system\database\DB_query_builder.php 1424
ERROR - 2019-08-20 21:51:23 --> Severity: Error --> Call to undefined function typof() D:\xampp\htdocs\out-rest\system\tastyigniter\models\Locations_model.php 49
ERROR - 2019-08-20 22:39:44 --> Query error: Unknown column 'location-email' in 'where clause' - Invalid query: SELECT *
FROM `dw2rtzns5_locations`
WHERE `location-email` = 1
 LIMIT 20
ERROR - 2019-08-20 22:39:44 --> Severity: Error --> Call to a member function num_rows() on boolean D:\xampp\htdocs\out-rest\system\tastyigniter\models\Locations_model.php 77
ERROR - 2019-08-20 22:39:48 --> Query error: Unknown column 'location-email' in 'where clause' - Invalid query: SELECT *
FROM `dw2rtzns5_locations`
WHERE `location-email` = 1
 LIMIT 20
ERROR - 2019-08-20 22:39:48 --> Severity: Error --> Call to a member function num_rows() on boolean D:\xampp\htdocs\out-rest\system\tastyigniter\models\Locations_model.php 77
ERROR - 2019-08-20 22:39:55 --> Query error: Unknown column 'location-email' in 'where clause' - Invalid query: SELECT *
FROM `dw2rtzns5_locations`
WHERE `location-email` = 1
 LIMIT 20
ERROR - 2019-08-20 22:39:55 --> Severity: Error --> Call to a member function num_rows() on boolean D:\xampp\htdocs\out-rest\system\tastyigniter\models\Locations_model.php 77
ERROR - 2019-08-20 22:39:56 --> Query error: Unknown column 'location-email' in 'where clause' - Invalid query: SELECT *
FROM `dw2rtzns5_locations`
WHERE `location-email` = 1
 LIMIT 20
ERROR - 2019-08-20 22:39:56 --> Severity: Error --> Call to a member function num_rows() on boolean D:\xampp\htdocs\out-rest\system\tastyigniter\models\Locations_model.php 77
ERROR - 2019-08-20 22:45:52 --> Severity: Compile Error --> Cannot use isset() on the result of a function call (you can use "null !== func()" instead) D:\xampp\htdocs\out-rest\system\tastyigniter\models\Locations_model.php 71
ERROR - 2019-08-20 23:14:17 --> Could not find the language line "label_customer"
