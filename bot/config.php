<?php
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

date_default_timezone_set('Europe/Sofia');
ini_set("log_errors", "true");
error_reporting(0);


//Your Api key
$apiKey = '7885508304:AAHOy3Cd8ElhEWkzDtkNAnDC88gMgAKEl3I';
//Your bot name
$botUsername = 'NounsClayBot';
//Your domain name
$web_app = 'https://nounsclay.vercel.app';
//Youd database info
$DB = [
'dbname' => 'your_database',
'username' => 'your_database_user',
'password' => 'Your_database_password'
];
//Add numbers only 
$admins_user_id = [
    admin_id_one, admin_id_two_if_is_needed_if_no_delete_this

];