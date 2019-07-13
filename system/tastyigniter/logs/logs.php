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
ERROR - 2019-07-10 18:06:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-10 18:06:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-10 18:06:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-10 18:06:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-10 18:06:17 --> Severity: error --> Exception: [] operator not supported for strings D:\xampp\htdocs\out-rest\main\controllers\Local.php 122
ERROR - 2019-07-10 18:06:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-10 18:06:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-10 18:06:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-10 18:06:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-10 18:06:22 --> Severity: error --> Exception: [] operator not supported for strings D:\xampp\htdocs\out-rest\main\controllers\Local.php 122
ERROR - 2019-07-10 18:06:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-10 18:06:24 --> Severity: error --> Exception: [] operator not supported for strings D:\xampp\htdocs\out-rest\main\controllers\Local.php 122
ERROR - 2019-07-10 18:06:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-10 18:06:25 --> Severity: error --> Exception: [] operator not supported for strings D:\xampp\htdocs\out-rest\main\controllers\Local.php 122
ERROR - 2019-07-10 18:06:30 --> 404 Page Not Found: 
ERROR - 2019-07-10 18:06:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-10 18:06:33 --> Severity: error --> Exception: [] operator not supported for strings D:\xampp\htdocs\out-rest\main\controllers\Local.php 122
ERROR - 2019-07-10 18:06:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-10 18:06:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-10 18:06:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-10 18:06:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-10 18:06:35 --> Severity: error --> Exception: [] operator not supported for strings D:\xampp\htdocs\out-rest\main\controllers\Local.php 122
ERROR - 2019-07-10 18:06:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-10 18:06:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-10 18:06:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-10 18:06:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 10:38:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 10:59:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 11:02:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 11:05:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 11:05:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 11:30:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 11:30:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 11:30:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 11:30:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 11:31:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 11:31:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 11:31:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 11:31:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 11:31:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 11:31:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 11:31:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 11:31:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 11:34:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 11:34:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 11:38:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 11:38:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 11:38:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 11:38:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 11:38:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 11:38:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 11:38:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 11:39:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 11:39:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 11:39:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 11:39:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 11:39:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 11:39:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 11:39:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 11:39:19 --> Severity: error --> Exception: Call to undefined method Security_questions_model::dropdown() D:\xampp\htdocs\out-rest\main\controllers\account\Register.php 40
ERROR - 2019-07-11 11:43:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 11:43:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 11:46:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 11:46:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 11:50:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 11:50:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 11:50:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 11:50:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 11:50:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 12:03:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 12:53:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 13:02:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 13:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 13:02:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 13:05:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 13:05:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 13:05:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 13:13:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 13:19:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 13:19:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 13:19:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 13:19:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 13:19:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 13:19:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 13:22:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 13:22:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 13:22:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 13:22:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 13:22:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 13:22:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 13:22:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 13:23:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 13:24:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 13:24:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 13:24:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 13:24:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 13:29:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 13:29:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 13:37:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 13:38:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 13:45:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 13:45:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 13:47:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 13:53:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 13:53:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 13:55:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 14:08:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 14:10:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 14:10:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 14:11:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 14:11:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 14:13:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 14:14:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 14:18:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 14:18:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 14:18:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 14:24:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 14:29:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 14:31:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 14:33:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 14:33:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 14:34:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 14:35:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 14:36:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 14:37:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 15:17:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 15:17:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 15:18:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 15:18:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 15:19:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 15:19:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 15:37:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 15:38:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 15:40:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 15:43:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 15:46:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 15:48:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 15:48:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 15:48:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 15:48:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 15:48:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 15:48:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 15:49:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 15:50:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 15:50:50 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 15:50:50 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 15:50:50 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 15:50:50 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 15:50:50 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 15:50:50 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 15:50:50 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 15:50:50 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 15:50:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 15:53:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:01:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:17:49 --> Severity: error --> Exception: Call to undefined method Security_questions_model::dropdown() D:\xampp\htdocs\out-rest\main\controllers\account\Register.php 40
ERROR - 2019-07-11 16:17:53 --> Severity: error --> Exception: Call to undefined method Security_questions_model::dropdown() D:\xampp\htdocs\out-rest\main\controllers\account\Register.php 40
ERROR - 2019-07-11 16:17:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:17:59 --> Severity: error --> Exception: Call to undefined method Security_questions_model::dropdown() D:\xampp\htdocs\out-rest\main\controllers\account\Register.php 40
ERROR - 2019-07-11 16:18:03 --> Severity: error --> Exception: Call to undefined method Security_questions_model::dropdown() D:\xampp\htdocs\out-rest\main\controllers\account\Register.php 40
ERROR - 2019-07-11 16:18:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:18:14 --> Severity: error --> Exception: Call to undefined method Security_questions_model::dropdown() D:\xampp\htdocs\out-rest\main\controllers\account\Register.php 40
ERROR - 2019-07-11 16:18:17 --> Severity: error --> Exception: Call to undefined method Security_questions_model::dropdown() D:\xampp\htdocs\out-rest\main\controllers\account\Register.php 40
ERROR - 2019-07-11 16:18:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:18:23 --> Severity: error --> Exception: Call to undefined method Security_questions_model::dropdown() D:\xampp\htdocs\out-rest\main\controllers\account\Register.php 40
ERROR - 2019-07-11 16:18:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:18:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:18:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:18:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:21:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:21:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:21:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:22:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:22:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:22:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:22:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:22:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:22:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:23:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:23:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:23:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:23:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:23:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:23:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:24:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:24:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:24:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:24:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:28:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:28:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:34:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:34:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:34:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:36:54 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 16:36:54 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 16:36:54 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 16:36:54 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 16:36:54 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 16:36:54 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 16:36:54 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 16:36:54 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 16:36:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:36:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:36:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:38:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:38:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:38:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:38:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:38:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:39:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:39:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:39:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:39:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:39:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:39:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:43:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:43:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:43:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:43:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:43:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:43:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:53:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:53:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:53:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:54:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:54:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:54:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:55:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:55:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:55:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:57:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 16:57:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:01:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:01:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:01:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:01:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:01:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:01:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:01:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:01:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:01:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:01:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:01:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:01:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:01:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:02:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:02:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:06:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:06:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:06:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:06:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:06:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:06:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:06:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:09:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:09:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:09:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:09:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:09:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:09:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:10:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:10:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:10:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:10:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:10:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:10:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:15:11 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:15:11 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:15:11 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:15:11 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:15:11 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:15:11 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:15:11 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:15:11 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:15:25 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:15:25 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:15:25 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:15:25 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:15:25 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:15:25 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:15:25 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:15:25 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:17:11 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:17:11 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:17:11 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:17:11 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:17:11 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:17:11 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:17:11 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:17:11 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:17:42 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:17:42 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:17:42 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:17:42 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:17:42 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:17:42 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:17:42 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:17:42 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:17:45 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:17:45 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:17:45 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:17:45 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:17:45 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:17:45 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:17:45 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:17:45 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:18:01 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:18:01 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:18:01 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:18:01 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:18:01 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:18:01 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:18:01 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:18:01 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:18:20 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:18:20 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:18:20 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:18:20 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:18:20 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:18:20 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:18:20 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:18:20 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:18:39 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:18:39 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:18:39 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:18:39 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:18:39 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:18:39 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:18:39 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:18:39 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:22:00 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:22:00 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:22:00 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:22:00 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:22:00 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:22:00 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:22:00 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:22:00 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:22:23 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:22:23 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:22:23 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:22:23 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:22:23 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:22:23 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:22:23 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:22:23 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:23:46 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:23:46 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:23:46 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:23:46 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:23:46 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:23:46 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:23:46 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:23:46 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:24:32 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:24:32 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:24:32 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:24:32 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:24:32 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:24:32 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:24:32 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:24:32 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:24:45 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:24:45 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:24:45 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:24:45 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:24:45 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:24:45 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:24:45 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:24:45 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-11 17:24:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:27:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:27:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:27:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:27:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:27:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:27:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:27:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:27:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:27:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:27:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:27:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:27:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:27:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:27:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:27:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:27:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:27:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:32:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:32:43 --> Severity: error --> Exception: [] operator not supported for strings D:\xampp\htdocs\out-rest\main\controllers\Local.php 122
ERROR - 2019-07-11 17:32:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:32:45 --> Severity: error --> Exception: [] operator not supported for strings D:\xampp\htdocs\out-rest\main\controllers\Local.php 122
ERROR - 2019-07-11 17:32:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:32:47 --> Severity: error --> Exception: [] operator not supported for strings D:\xampp\htdocs\out-rest\main\controllers\Local.php 122
ERROR - 2019-07-11 17:32:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:42:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:42:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:42:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:42:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:42:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:42:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:42:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:42:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:42:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:42:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:42:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:45:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:46:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-11 17:55:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 09:52:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 09:52:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 09:52:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 09:55:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 09:55:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 09:55:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 09:55:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 09:56:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 09:57:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 09:57:39 --> Severity: error --> Exception: Call to undefined method Security_questions_model::dropdown() D:\xampp\htdocs\out-rest\main\controllers\account\Register.php 40
ERROR - 2019-07-13 10:06:28 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:06:29 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:06:29 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:06:29 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:06:29 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:06:29 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:06:29 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:06:29 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:07:50 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:07:50 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:07:50 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:07:50 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:07:50 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:07:50 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:07:50 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:07:50 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:10:43 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:10:43 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:10:43 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:10:43 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:10:43 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:10:43 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:10:43 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:10:43 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:11:29 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:11:29 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:11:29 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:11:29 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:11:29 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:11:29 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:11:29 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:11:29 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:11:30 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:11:30 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:11:30 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:11:30 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:11:30 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:11:30 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:11:30 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:11:30 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:12:57 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:12:57 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:12:57 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:12:57 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:12:57 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:12:57 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:12:57 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:12:57 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:13:39 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:13:39 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:13:39 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:13:39 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:13:39 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:13:39 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:13:39 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:13:39 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:13:50 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:13:50 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:13:50 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:13:50 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:13:50 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:13:50 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:13:50 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:13:50 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:13:51 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:13:51 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:13:52 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:13:52 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:13:52 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:13:52 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:13:52 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:13:52 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:14:10 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:14:10 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:14:10 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:14:10 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:14:10 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:14:10 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:14:10 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:14:10 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:16:26 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:16:26 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:16:26 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:16:26 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:16:26 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:16:26 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:16:26 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:16:26 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:18:03 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:18:03 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:18:03 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:18:03 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:18:03 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:18:03 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:18:03 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:18:03 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:18:05 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:18:05 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:18:05 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:18:05 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:18:05 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:18:05 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:18:05 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:18:05 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:18:07 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:18:07 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:18:07 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:18:07 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:18:07 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:18:07 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:18:07 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:18:07 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:18:11 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:18:11 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:18:11 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:18:11 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:18:11 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:18:11 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:18:11 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:18:11 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:18:12 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:18:12 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:18:12 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:18:12 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:18:12 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:18:12 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:18:12 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:18:12 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:20:10 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:20:10 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:20:10 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:20:10 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:20:10 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:20:10 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:20:10 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:20:10 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:21:24 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:21:24 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:21:24 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:21:24 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:21:24 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:21:24 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:21:24 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:21:24 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:31:48 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:31:48 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:31:48 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:31:48 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:31:48 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:31:48 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:31:48 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:31:48 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:32:25 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:32:25 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:32:25 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:32:25 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:32:25 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:32:25 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:32:25 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:32:25 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:32:44 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:32:44 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:32:44 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:32:44 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:32:44 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:32:44 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:32:44 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:32:44 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:33:17 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:33:17 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:33:17 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:33:17 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:33:17 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:33:17 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:33:17 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:33:17 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:34:19 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:34:19 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:34:19 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:34:19 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:34:19 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:34:19 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:34:19 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:34:19 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:40:21 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:40:21 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:40:21 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:40:21 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:40:21 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:40:21 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:40:21 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:40:21 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:41:25 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:41:25 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:41:25 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:41:25 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:41:25 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:41:25 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:41:25 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:41:25 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:42:42 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:42:42 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:42:42 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:42:42 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:42:42 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:42:42 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:42:42 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:42:42 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:52:07 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:52:07 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:52:07 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:52:07 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:52:07 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:52:07 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:52:07 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:52:07 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:52:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 10:57:49 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:57:49 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:57:49 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:57:49 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:57:49 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:57:49 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:57:49 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:57:49 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:57:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 10:57:53 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:57:53 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:57:53 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:57:53 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:57:53 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:57:53 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:57:53 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:57:53 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 10:57:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:04:27 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:04:27 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:04:27 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:04:27 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:04:27 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:04:27 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:04:27 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:04:27 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:04:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:06:07 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:07 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:07 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:07 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:07 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:07 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:07 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:07 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:06:29 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:29 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:29 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:29 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:29 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:29 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:29 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:29 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:06:32 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:32 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:32 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:32 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:32 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:32 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:32 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:32 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:06:33 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:33 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:33 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:33 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:33 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:33 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:33 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:33 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:06:34 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:34 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:34 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:34 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:34 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:34 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:34 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:34 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:06:51 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:51 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:51 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:51 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:51 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:51 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:51 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:51 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:06:52 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:52 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:52 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:52 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:52 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:52 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:52 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:52 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:06:53 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:53 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:53 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:53 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:53 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:53 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:53 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:53 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:06:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:13:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:14:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:14:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:14:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:14:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:14:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:14:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:14:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:14:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:14:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:14:45 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:14:45 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:14:45 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:14:45 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:14:45 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:14:45 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:14:45 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:14:45 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:14:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:14:50 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:14:50 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:14:50 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:14:50 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:14:50 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:14:50 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:14:50 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:14:50 --> Severity: Warning --> imagettftext(): Could not find/open font D:\xampp\htdocs\out-rest\system\tastyigniter\helpers\TI_captcha_helper.php 270
ERROR - 2019-07-13 11:15:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:19:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:21:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:22:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:22:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:22:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:22:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:22:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:26:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:28:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:31:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:31:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:31:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:31:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:36:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:37:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:37:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:39:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:49:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:49:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:51:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:52:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:52:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:52:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:52:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:52:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:52:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:52:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:52:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:52:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:52:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:52:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:52:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:53:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:54:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:54:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:54:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:54:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:54:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:54:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:54:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:54:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:54:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:54:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:54:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:54:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:54:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:55:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:55:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:55:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 11:59:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 12:03:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 12:05:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 12:05:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 12:05:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 12:06:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 12:06:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 12:06:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 12:06:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 12:06:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 12:06:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 12:06:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 12:06:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 12:06:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 12:07:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 12:07:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 12:08:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 12:16:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 12:24:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 12:24:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 12:24:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 12:24:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 12:26:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 12:26:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 12:26:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 12:27:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 12:27:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 12:28:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 12:32:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 12:32:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 12:32:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 12:32:30 --> Severity: error --> Exception: syntax error, unexpected '?>' D:\xampp\htdocs\out-rest\extensions\local_module\views\local_module.php 8
ERROR - 2019-07-13 12:32:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 12:33:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 12:34:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\xampp\htdocs\out-rest\system\tastyigniter\libraries\Location.php 513
ERROR - 2019-07-13 13:07:48 --> Feed_parser: error --> Exception: String could not be parsed as XML String could not be parsed as XML
ERROR - 2019-07-13 13:08:05 --> Feed_parser: error --> Exception: String could not be parsed as XML String could not be parsed as XML
ERROR - 2019-07-13 13:52:45 --> 404 Page Not Found: 
ERROR - 2019-07-13 13:52:54 --> 404 Page Not Found: 
ERROR - 2019-07-13 13:54:12 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:14:21 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:14:21 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:14:22 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:14:44 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:14:44 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:14:44 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:15:57 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:15:57 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:15:57 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:17:08 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:17:08 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:17:08 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:17:35 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:17:35 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:17:35 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:18:13 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:18:13 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:18:14 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:18:32 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:18:32 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:18:32 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:18:48 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:18:48 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:18:48 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:19:22 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:19:23 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:19:23 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:19:31 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:19:31 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:19:31 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:19:39 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:19:39 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:19:39 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:20:22 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:20:22 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:20:23 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:22:27 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:22:27 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:22:27 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:22:48 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:22:49 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:22:49 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:23:04 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:23:04 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:23:05 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:23:16 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:23:16 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:23:16 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:25:32 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:25:33 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:25:33 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:25:40 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:25:40 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:25:40 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:25:45 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:25:45 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:25:46 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:27:40 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:27:40 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:27:40 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:30:16 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:30:16 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:30:17 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:31:26 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:31:26 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:31:26 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:32:04 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:32:04 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:32:04 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:33:41 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:33:41 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:33:41 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:34:17 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:34:17 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:34:18 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:36:52 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:36:52 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:36:53 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:37:32 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:37:32 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:37:33 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:40:17 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:40:18 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:40:18 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:41:09 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:41:09 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:41:10 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:42:23 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:42:24 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:42:24 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:43:43 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:43:46 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:43:59 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:44:01 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:44:01 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:44:09 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:44:10 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:44:11 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:44:12 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:44:12 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:44:27 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:44:27 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:44:28 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:46:40 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:46:40 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:46:40 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:46:44 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:46:44 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:46:45 --> 404 Page Not Found: 
ERROR - 2019-07-13 14:49:31 --> Severity: Error --> Call to undefined method Security_questions_model::dropdown() D:\xampp\htdocs\out-rest\main\controllers\account\Register.php 40
ERROR - 2019-07-13 15:06:16 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:21:24 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:21:24 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:21:25 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:46:03 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:46:03 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:46:03 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:47:21 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:47:22 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:47:22 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:47:57 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:47:57 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:47:57 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:48:21 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:48:21 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:48:21 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:48:31 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:48:31 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:48:31 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:48:34 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:48:34 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:48:34 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:48:36 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:48:36 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:48:37 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:49:10 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:49:10 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:49:10 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:50:14 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:50:15 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:50:15 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:51:32 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:51:32 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:51:32 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:51:44 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:51:44 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:51:44 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:53:20 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:53:20 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:53:20 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:53:20 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:53:40 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:53:40 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:53:40 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:56:20 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:56:20 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:56:20 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:57:22 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:57:23 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:57:23 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:57:48 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:57:48 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:57:48 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:59:23 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:59:23 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:59:23 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:59:23 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:59:35 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:59:35 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:59:35 --> 404 Page Not Found: 
ERROR - 2019-07-13 15:59:35 --> 404 Page Not Found: 
ERROR - 2019-07-13 16:00:12 --> 404 Page Not Found: 
ERROR - 2019-07-13 16:00:12 --> 404 Page Not Found: 
ERROR - 2019-07-13 16:00:13 --> 404 Page Not Found: 
ERROR - 2019-07-13 16:01:16 --> 404 Page Not Found: 
ERROR - 2019-07-13 16:01:16 --> 404 Page Not Found: 
ERROR - 2019-07-13 16:01:16 --> 404 Page Not Found: 
ERROR - 2019-07-13 16:03:09 --> 404 Page Not Found: 
ERROR - 2019-07-13 16:03:10 --> 404 Page Not Found: 
ERROR - 2019-07-13 16:03:10 --> 404 Page Not Found: 
ERROR - 2019-07-13 16:07:13 --> 404 Page Not Found: 
ERROR - 2019-07-13 16:07:13 --> 404 Page Not Found: 
ERROR - 2019-07-13 16:07:14 --> 404 Page Not Found: 
ERROR - 2019-07-13 16:07:16 --> 404 Page Not Found: 
ERROR - 2019-07-13 16:07:16 --> 404 Page Not Found: 
ERROR - 2019-07-13 16:07:16 --> 404 Page Not Found: 
ERROR - 2019-07-13 16:07:20 --> 404 Page Not Found: 
ERROR - 2019-07-13 16:07:21 --> 404 Page Not Found: 
ERROR - 2019-07-13 16:07:21 --> 404 Page Not Found: 
ERROR - 2019-07-13 16:07:27 --> 404 Page Not Found: 
ERROR - 2019-07-13 16:07:27 --> 404 Page Not Found: 
ERROR - 2019-07-13 16:07:28 --> 404 Page Not Found: 
ERROR - 2019-07-13 16:08:46 --> 404 Page Not Found: 
ERROR - 2019-07-13 16:08:46 --> 404 Page Not Found: 
ERROR - 2019-07-13 16:08:47 --> 404 Page Not Found: 
ERROR - 2019-07-13 16:08:54 --> 404 Page Not Found: 
ERROR - 2019-07-13 16:08:54 --> 404 Page Not Found: 
ERROR - 2019-07-13 16:08:54 --> 404 Page Not Found: 
