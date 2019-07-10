<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-07-08 09:18:27 --> Unable to connect to the database
ERROR - 2019-07-08 09:18:27 --> Unable to connect to the database
ERROR - 2019-07-08 09:18:27 --> Unable to connect to the database
ERROR - 2019-07-08 09:18:27 --> Unable to connect to the database
ERROR - 2019-07-08 09:18:42 --> Unable to connect to the database
ERROR - 2019-07-08 09:18:42 --> Unable to connect to the database
ERROR - 2019-07-08 09:18:42 --> Unable to connect to the database
ERROR - 2019-07-08 09:18:43 --> Unable to connect to the database
ERROR - 2019-07-08 09:18:46 --> Unable to connect to the database
ERROR - 2019-07-08 09:18:46 --> Unable to connect to the database
ERROR - 2019-07-08 09:18:46 --> Unable to connect to the database
ERROR - 2019-07-08 09:18:46 --> Unable to connect to the database
ERROR - 2019-07-08 09:19:55 --> Unable to connect to the database
ERROR - 2019-07-08 09:19:55 --> Unable to connect to the database
ERROR - 2019-07-08 09:21:00 --> Severity: Error --> Maximum execution time of 30 seconds exceeded D:\xampp\htdocs\out-rest\system\database\drivers\mysqli\mysqli_driver.php 296
ERROR - 2019-07-08 09:22:49 --> Query error: Duplicate column name 'status' - Invalid query: ALTER TABLE `dw2rtzns5_extensions`
	ADD status TINYINT(1) NOT NULL
ERROR - 2019-07-08 09:22:49 --> Query error: Duplicate column name 'title' - Invalid query: ALTER TABLE `dw2rtzns5_extensions`
	ADD title VARCHAR(255) NOT NULL
ERROR - 2019-07-08 09:22:49 --> Query error: Duplicate column name 'status' - Invalid query: ALTER TABLE `dw2rtzns5_working_hours`
	ADD status TINYINT(1) NOT NULL
ERROR - 2019-07-08 09:22:49 --> Query error: Duplicate column name 'parent_id' - Invalid query: ALTER TABLE `dw2rtzns5_categories`
	ADD parent_id INT(11) NOT NULL
ERROR - 2019-07-08 09:22:49 --> Query error: Duplicate column name 'priority' - Invalid query: ALTER TABLE `dw2rtzns5_categories`
	ADD priority INT(11) NOT NULL
ERROR - 2019-07-08 09:22:49 --> Query error: Duplicate column name 'image' - Invalid query: ALTER TABLE `dw2rtzns5_categories`
	ADD image VARCHAR(255) NOT NULL
ERROR - 2019-07-08 09:22:49 --> Query error: Duplicate entry '10971' for key 'PRIMARY' - Invalid query: INSERT INTO dw2rtzns5_settings (`setting_id`, `sort`, `item`, `value`, `serialized`) VALUES (10971, 'prefs', 'default_themes', 'a:2:{s:5:"admin";s:18:"tastyigniter-blue/";s:4:"main";s:20:"tastyigniter-orange/";}', 1);
ERROR - 2019-07-08 09:22:49 --> Query error: Duplicate key name 'uniqueSlug' - Invalid query: ALTER TABLE dw2rtzns5_permalinks ADD UNIQUE INDEX `uniqueSlug` (`slug`, `controller`);
ERROR - 2019-07-08 09:22:49 --> Query error: Unknown column 'order_id' in 'dw2rtzns5_reviews' - Invalid query: ALTER TABLE dw2rtzns5_reviews CHANGE `order_id` `sale_id` INT(11)  NOT NULL;
ERROR - 2019-07-08 09:22:49 --> Query error: Duplicate column name 'sale_type' - Invalid query: ALTER TABLE dw2rtzns5_reviews ADD `sale_type` VARCHAR(32)  NULL  DEFAULT NULL  AFTER `sale_id`;
ERROR - 2019-07-08 09:22:49 --> Query error: Can't DROP 'covered_area'; check that column/key exists - Invalid query: ALTER TABLE `dw2rtzns5_locations` DROP COLUMN `covered_area`
ERROR - 2019-07-08 09:22:49 --> Query error: Duplicate column name 'status_color' - Invalid query: ALTER TABLE `dw2rtzns5_statuses`
	ADD status_color VARCHAR(32) NOT NULL
ERROR - 2019-07-08 09:22:49 --> Query error: Duplicate column name 'assignee_id' - Invalid query: ALTER TABLE `dw2rtzns5_orders`
	ADD assignee_id INT(11) NOT NULL
ERROR - 2019-07-08 09:22:49 --> Query error: Table 'rest.dw2rtzns5_customers_activity' doesn't exist - Invalid query: ALTER TABLE dw2rtzns5_customers_activity RENAME dw2rtzns5_customers_online;
ERROR - 2019-07-08 09:22:49 --> Query error: Duplicate column name 'user_agent' - Invalid query: ALTER TABLE `dw2rtzns5_customers_online`
	ADD user_agent TEXT NOT NULL
ERROR - 2019-07-08 09:22:49 --> Query error: Table 'dw2rtzns5_notifications' already exists - Invalid query: CREATE TABLE `dw2rtzns5_notifications` (
	notification_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	action VARCHAR(255) NOT NULL,
	object VARCHAR(255) NOT NULL,
	suffix VARCHAR(255) NOT NULL,
	object_id INT(11) NOT NULL,
	actor_id INT(11) NOT NULL,
	subject_id INT(11) NOT NULL,
	status TINYINT(4) NOT NULL,
	date_added DATETIME NOT NULL
) DEFAULT CHARACTER SET = utf8 COLLATE = utf8_general_ci
ERROR - 2019-07-08 09:23:13 --> Severity: Error --> Call to a member function addSetting() on null D:\xampp\htdocs\out-rest\system\tastyigniter\models\Locations_model.php 465
ERROR - 2019-07-08 09:26:12 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\out-rest\extensions\cart_module\controllers\Admin_cart_module.php 86
ERROR - 2019-07-08 09:27:44 --> Could not find the language line "label_site_url"
ERROR - 2019-07-08 09:27:44 --> Could not find the language line "help_maps_api_key"
ERROR - 2019-07-08 09:35:32 --> Severity: Error --> Call to undefined method Security_questions_model::dropdown() D:\xampp\htdocs\out-rest\main\controllers\account\Register.php 40
ERROR - 2019-07-08 09:37:18 --> Could not find the language line "label_site_url"
ERROR - 2019-07-08 09:37:18 --> Could not find the language line "help_maps_api_key"
ERROR - 2019-07-08 09:38:41 --> Could not find the language line "label_site_url"
ERROR - 2019-07-08 09:38:41 --> Could not find the language line "help_maps_api_key"
ERROR - 2019-07-08 09:40:36 --> Could not find the language line "label_site_url"
ERROR - 2019-07-08 09:40:36 --> Could not find the language line "help_maps_api_key"
ERROR - 2019-07-08 11:41:00 --> Could not find the language line "label_site_url"
ERROR - 2019-07-08 11:41:00 --> Could not find the language line "help_maps_api_key"
ERROR - 2019-07-08 11:41:10 --> Could not find the language line "label_site_url"
ERROR - 2019-07-08 11:41:10 --> Could not find the language line "help_maps_api_key"
ERROR - 2019-07-08 11:44:29 --> cURL: Error --> 22: The requested URL returned error: 404 Not Found https://api.tastyigniter.com/v1/core/version/2.1.2/5.6.31/5.6.44
ERROR - 2019-07-08 11:45:13 --> Could not find the language line "label_site_url"
ERROR - 2019-07-08 11:45:13 --> Could not find the language line "help_maps_api_key"
ERROR - 2019-07-08 11:51:52 --> Could not find the language line "label_site_url"
ERROR - 2019-07-08 11:51:52 --> Could not find the language line "help_maps_api_key"
ERROR - 2019-07-08 11:54:03 --> Could not find the language line "label_site_url"
ERROR - 2019-07-08 11:54:03 --> Could not find the language line "help_maps_api_key"
ERROR - 2019-07-08 12:20:26 --> Could not find the language line "label_site_url"
ERROR - 2019-07-08 12:20:26 --> Could not find the language line "help_maps_api_key"
ERROR - 2019-07-08 12:21:37 --> Could not find the language line "label_site_url"
ERROR - 2019-07-08 12:21:37 --> Could not find the language line "help_maps_api_key"
ERROR - 2019-07-08 12:22:05 --> Could not find the language line "label_site_url"
ERROR - 2019-07-08 12:22:05 --> Could not find the language line "help_maps_api_key"
ERROR - 2019-07-08 12:40:36 --> Could not find the language line "label_site_url"
ERROR - 2019-07-08 12:40:36 --> Could not find the language line "help_maps_api_key"
ERROR - 2019-07-08 12:40:40 --> Could not find the language line "text_filter_search"
ERROR - 2019-07-08 12:40:40 --> Could not find the language line "text_filter_status"
ERROR - 2019-07-08 12:42:15 --> Could not find the language line "label_site_url"
ERROR - 2019-07-08 12:42:15 --> Could not find the language line "help_maps_api_key"
ERROR - 2019-07-08 12:42:46 --> Could not find the language line "label_site_url"
ERROR - 2019-07-08 12:42:46 --> Could not find the language line "help_maps_api_key"
ERROR - 2019-07-08 12:42:48 --> Could not find the language line "label_site_url"
ERROR - 2019-07-08 12:42:48 --> Could not find the language line "help_maps_api_key"
ERROR - 2019-07-08 12:42:50 --> Could not find the language line "label_site_url"
ERROR - 2019-07-08 12:42:50 --> Could not find the language line "help_maps_api_key"
ERROR - 2019-07-08 12:43:15 --> Could not find the language line "label_site_url"
ERROR - 2019-07-08 12:43:15 --> Could not find the language line "help_maps_api_key"
ERROR - 2019-07-08 12:44:38 --> Could not find the language line "text_filter_search"
ERROR - 2019-07-08 12:44:38 --> Could not find the language line "text_filter_status"
ERROR - 2019-07-08 12:48:03 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() D:\xampp\htdocs\out-rest\system\libraries\Email.php 1888
ERROR - 2019-07-08 12:48:03 --> Unable to send email using PHP mail(). Your server might not be configured to send mail using this method.<br /><pre>Date: Mon, 8 Jul 2019 12:48:02 +0300
From: &quot;lugma&quot; &lt;sreejith.sagarz@gmail.com&gt;
Return-Path: &lt;sreejith.sagarz@gmail.com&gt;
Reply-To: &lt;sreejith.sagarz@gmail.com&gt;
User-Agent: TastyIgniter
X-Sender: sreejith.sagarz@gmail.com
X-Mailer: TastyIgniter
X-Priority: 3 (Normal)
Message-ID: &lt;5d231152e23c9@gmail.com&gt;
Mime-Version: 1.0
Content-Type: multipart/alternative; boundary=&quot;B_ALT_5d231152e23dc&quot;
</pre>
ERROR - 2019-07-08 12:48:04 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() D:\xampp\htdocs\out-rest\system\libraries\Email.php 1888
ERROR - 2019-07-08 12:48:04 --> Unable to send email using PHP mail(). Your server might not be configured to send mail using this method.<br /><pre>Date: Mon, 8 Jul 2019 12:48:03 +0300
From: &quot;lugma&quot; &lt;sreejith.sagarz@gmail.com&gt;
Return-Path: &lt;sreejith.sagarz@gmail.com&gt;
Reply-To: &lt;sreejith.sagarz@gmail.com&gt;
User-Agent: TastyIgniter
X-Sender: sreejith.sagarz@gmail.com
X-Mailer: TastyIgniter
X-Priority: 3 (Normal)
Message-ID: &lt;5d231153ee1ca@gmail.com&gt;
Mime-Version: 1.0
Content-Type: multipart/alternative; boundary=&quot;B_ALT_5d231153ee1e2&quot;
</pre>
ERROR - 2019-07-08 12:58:19 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() D:\xampp\htdocs\out-rest\system\libraries\Email.php 1888
ERROR - 2019-07-08 12:58:19 --> Unable to send email using PHP mail(). Your server might not be configured to send mail using this method.<br /><pre>Date: Mon, 8 Jul 2019 12:58:18 +0300
From: &quot;lugma&quot; &lt;sreejith.sagarz@gmail.com&gt;
Return-Path: &lt;sreejith.sagarz@gmail.com&gt;
Reply-To: &lt;sreejith.sagarz@gmail.com&gt;
User-Agent: TastyIgniter
X-Sender: sreejith.sagarz@gmail.com
X-Mailer: TastyIgniter
X-Priority: 3 (Normal)
Message-ID: &lt;5d2313ba52ef4@gmail.com&gt;
Mime-Version: 1.0
Content-Type: multipart/alternative; boundary=&quot;B_ALT_5d2313ba52f07&quot;
</pre>
ERROR - 2019-07-08 12:58:20 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() D:\xampp\htdocs\out-rest\system\libraries\Email.php 1888
ERROR - 2019-07-08 12:58:20 --> Unable to send email using PHP mail(). Your server might not be configured to send mail using this method.<br /><pre>Date: Mon, 8 Jul 2019 12:58:19 +0300
From: &quot;lugma&quot; &lt;sreejith.sagarz@gmail.com&gt;
Return-Path: &lt;sreejith.sagarz@gmail.com&gt;
Reply-To: &lt;sreejith.sagarz@gmail.com&gt;
User-Agent: TastyIgniter
X-Sender: sreejith.sagarz@gmail.com
X-Mailer: TastyIgniter
X-Priority: 3 (Normal)
Message-ID: &lt;5d2313bb55d4e@gmail.com&gt;
Mime-Version: 1.0
Content-Type: multipart/alternative; boundary=&quot;B_ALT_5d2313bb55d68&quot;
</pre>
ERROR - 2019-07-08 13:00:08 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() D:\xampp\htdocs\out-rest\system\libraries\Email.php 1888
ERROR - 2019-07-08 13:00:08 --> Unable to send email using PHP mail(). Your server might not be configured to send mail using this method.<br /><pre>Date: Mon, 8 Jul 2019 13:00:07 +0300
From: &quot;lugma&quot; &lt;sreejith.sagarz@gmail.com&gt;
Return-Path: &lt;sreejith.sagarz@gmail.com&gt;
Reply-To: &lt;sreejith.sagarz@gmail.com&gt;
User-Agent: TastyIgniter
X-Sender: sreejith.sagarz@gmail.com
X-Mailer: TastyIgniter
X-Priority: 3 (Normal)
Message-ID: &lt;5d231427d6ebc@gmail.com&gt;
Mime-Version: 1.0
Content-Type: multipart/alternative; boundary=&quot;B_ALT_5d231427d6ecf&quot;
</pre>
ERROR - 2019-07-08 13:00:09 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() D:\xampp\htdocs\out-rest\system\libraries\Email.php 1888
ERROR - 2019-07-08 13:00:09 --> Unable to send email using PHP mail(). Your server might not be configured to send mail using this method.<br /><pre>Date: Mon, 8 Jul 2019 13:00:08 +0300
From: &quot;lugma&quot; &lt;sreejith.sagarz@gmail.com&gt;
Return-Path: &lt;sreejith.sagarz@gmail.com&gt;
Reply-To: &lt;sreejith.sagarz@gmail.com&gt;
User-Agent: TastyIgniter
X-Sender: sreejith.sagarz@gmail.com
X-Mailer: TastyIgniter
X-Priority: 3 (Normal)
Message-ID: &lt;5d231428d97db@gmail.com&gt;
Mime-Version: 1.0
Content-Type: multipart/alternative; boundary=&quot;B_ALT_5d231428d97ed&quot;
</pre>
ERROR - 2019-07-08 16:05:47 --> Could not find the language line "label_site_url"
ERROR - 2019-07-08 16:05:47 --> Could not find the language line "help_maps_api_key"
ERROR - 2019-07-08 16:06:24 --> Could not find the language line "text_delivery"
ERROR - 2019-07-08 16:15:23 --> Severity: Error --> Call to undefined method Security_questions_model::dropdown() D:\xampp\htdocs\out-rest\main\controllers\account\Register.php 40
ERROR - 2019-07-08 16:16:43 --> Could not find the language line "label_site_url"
ERROR - 2019-07-08 16:16:43 --> Could not find the language line "help_maps_api_key"
ERROR - 2019-07-08 16:17:29 --> Could not find the language line "label_site_url"
ERROR - 2019-07-08 16:17:29 --> Could not find the language line "help_maps_api_key"
ERROR - 2019-07-08 16:18:44 --> Could not find the language line "label_site_url"
ERROR - 2019-07-08 16:18:44 --> Could not find the language line "help_maps_api_key"
ERROR - 2019-07-08 16:33:39 --> Could not find the language line "label_site_url"
ERROR - 2019-07-08 16:33:39 --> Could not find the language line "help_maps_api_key"
ERROR - 2019-07-08 16:34:01 --> Could not find the language line "label_site_url"
ERROR - 2019-07-08 16:34:01 --> Could not find the language line "help_maps_api_key"
ERROR - 2019-07-08 16:39:15 --> Severity: Error --> Call to undefined method Security_questions_model::dropdown() D:\xampp\htdocs\out-rest\main\controllers\account\Register.php 40
ERROR - 2019-07-08 16:39:26 --> Could not find the language line "label_site_url"
ERROR - 2019-07-08 16:39:26 --> Could not find the language line "help_maps_api_key"
ERROR - 2019-07-08 16:43:43 --> cURL: Error --> 22: The requested URL returned error: 404 Not Found https://api.tastyigniter.com/v1/core/version/2.1.2/5.6.31/5.6.44
ERROR - 2019-07-08 17:57:39 --> Severity: Error --> Call to undefined method Security_questions_model::dropdown() D:\xampp\htdocs\out-rest\main\controllers\account\Register.php 40
ERROR - 2019-07-09 08:23:14 --> Could not find the language line "label_site_url"
ERROR - 2019-07-09 08:23:14 --> Could not find the language line "help_maps_api_key"
ERROR - 2019-07-09 08:23:37 --> Could not find the language line "label_site_url"
ERROR - 2019-07-09 08:23:37 --> Could not find the language line "help_maps_api_key"
ERROR - 2019-07-09 08:24:49 --> Could not find the language line "label_site_url"
ERROR - 2019-07-09 08:24:49 --> Could not find the language line "help_maps_api_key"
ERROR - 2019-07-09 08:26:08 --> Could not find the language line "label_site_url"
ERROR - 2019-07-09 08:26:08 --> Could not find the language line "help_maps_api_key"
ERROR - 2019-07-09 08:27:15 --> Could not find the language line "label_site_url"
ERROR - 2019-07-09 08:27:15 --> Could not find the language line "help_maps_api_key"
ERROR - 2019-07-09 08:30:52 --> Could not find the language line "label_site_url"
ERROR - 2019-07-09 08:30:52 --> Could not find the language line "help_maps_api_key"
ERROR - 2019-07-09 08:33:59 --> Could not find the language line "label_site_url"
ERROR - 2019-07-09 08:33:59 --> Could not find the language line "help_maps_api_key"
ERROR - 2019-07-09 08:38:10 --> Severity: Error --> Call to undefined method Security_questions_model::dropdown() D:\xampp\htdocs\out-rest\main\controllers\account\Register.php 40
ERROR - 2019-07-09 08:38:31 --> Severity: Error --> Call to undefined method Security_questions_model::dropdown() D:\xampp\htdocs\out-rest\main\controllers\account\Register.php 40
ERROR - 2019-07-09 08:39:17 --> Could not find the language line "label_site_url"
ERROR - 2019-07-09 08:39:17 --> Could not find the language line "help_maps_api_key"
ERROR - 2019-07-09 08:49:24 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() D:\xampp\htdocs\out-rest\system\libraries\Email.php 1888
ERROR - 2019-07-09 08:49:25 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() D:\xampp\htdocs\out-rest\system\libraries\Email.php 1888
ERROR - 2019-07-09 08:53:36 --> Could not find the language line "label_site_url"
ERROR - 2019-07-09 08:53:36 --> Could not find the language line "help_maps_api_key"
ERROR - 2019-07-09 08:53:57 --> Could not find the language line "label_site_url"
ERROR - 2019-07-09 08:53:57 --> Could not find the language line "help_maps_api_key"
ERROR - 2019-07-09 08:56:18 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() D:\xampp\htdocs\out-rest\system\libraries\Email.php 1888
ERROR - 2019-07-09 08:56:19 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() D:\xampp\htdocs\out-rest\system\libraries\Email.php 1888
ERROR - 2019-07-09 08:59:42 --> Could not find the language line "label_site_url"
ERROR - 2019-07-09 08:59:42 --> Could not find the language line "help_maps_api_key"
ERROR - 2019-07-09 09:00:22 --> Could not find the language line "label_site_url"
ERROR - 2019-07-09 09:00:22 --> Could not find the language line "help_maps_api_key"
ERROR - 2019-07-09 09:01:55 --> Could not find the language line "label_site_url"
ERROR - 2019-07-09 09:01:55 --> Could not find the language line "help_maps_api_key"
ERROR - 2019-07-09 09:02:04 --> Could not find the language line "label_site_url"
ERROR - 2019-07-09 09:02:04 --> Could not find the language line "help_maps_api_key"
ERROR - 2019-07-09 09:09:17 --> Could not find the language line "text_filter_search"
ERROR - 2019-07-09 09:09:17 --> Could not find the language line "text_filter_status"
ERROR - 2019-07-09 09:12:17 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() D:\xampp\htdocs\out-rest\system\libraries\Email.php 1888
ERROR - 2019-07-09 09:12:17 --> Unable to send email using PHP mail(). Your server might not be configured to send mail using this method.<br /><pre>Date: Tue, 9 Jul 2019 09:12:16 +0300
From: &quot;lugma&quot; &lt;sreejith.sagar@gmail.com&gt;
Return-Path: &lt;sreejith.sagar@gmail.com&gt;
Reply-To: &lt;sreejith.sagar@gmail.com&gt;
User-Agent: TastyIgniter
X-Sender: sreejith.sagar@gmail.com
X-Mailer: TastyIgniter
X-Priority: 3 (Normal)
Message-ID: &lt;5d24304098624@gmail.com&gt;
Mime-Version: 1.0
Content-Type: multipart/alternative; boundary=&quot;B_ALT_5d24304098639&quot;
</pre>
ERROR - 2019-07-09 09:12:18 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() D:\xampp\htdocs\out-rest\system\libraries\Email.php 1888
ERROR - 2019-07-09 09:12:18 --> Unable to send email using PHP mail(). Your server might not be configured to send mail using this method.<br /><pre>Date: Tue, 9 Jul 2019 09:12:17 +0300
From: &quot;lugma&quot; &lt;sreejith.sagar@gmail.com&gt;
Return-Path: &lt;sreejith.sagar@gmail.com&gt;
Reply-To: &lt;sreejith.sagar@gmail.com&gt;
User-Agent: TastyIgniter
X-Sender: sreejith.sagar@gmail.com
X-Mailer: TastyIgniter
X-Priority: 3 (Normal)
Message-ID: &lt;5d2430419daf7@gmail.com&gt;
Mime-Version: 1.0
Content-Type: multipart/alternative; boundary=&quot;B_ALT_5d2430419db1c&quot;
</pre>
ERROR - 2019-07-09 10:18:33 --> Could not find the language line "label_site_url"
ERROR - 2019-07-09 10:18:33 --> Could not find the language line "help_maps_api_key"
