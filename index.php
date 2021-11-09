<?php

// Include Files
require "include/functions.php"; // Telegram API Method
require "include/config.php"; // Bot and Administrator datas
require "include/keyboards.php"; // Keyboards
require "include/connect.php"; // DataBase Connect
require "include/varibles.php"; // Variables [php://input]

// Ini Set [Turn off Display errors and reports]
ini_set('error_reporting', 'off');
ini_set('display_errors', 'off');
ini_set('display_startup_errors', 'off');

// Time [Asia/Tashkent]
date_default_timezone_set('Asia/Tashkent');
$time = date('H:i');
$date = date('d.m.Y');

echo "Hello World!";

?>