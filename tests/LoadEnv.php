<?php

namespace Kuza\Tests;


$_ENV['DEPLOYMENT'] = "Development";

// URI base path. Empty if it is the document root
$_ENV['URI_BASE_PATH'] = "/";


// JWT Secret token
$_ENV['JWT_SECRET'] = ",zYVzjtV-wpFu!,D29)a9VY5s+yCGN}ZiVBbDplGVJ;*L^O+jK!";

// Database configurations
$_ENV['DB_HOST'] =   "localhost";
$_ENV['DB_NAME']     =   "gmoney";
$_ENV['DB_ENGINE']   =   "mysql";
$_ENV['DB_TYPE']     =   "mysqli";
$_ENV['DB_PORT']     =   "3306";
$_ENV['DB_USER']     =   "root";
$_ENV['DB_PASSWORD'] =   "pass";

// Mail server configurations
$_ENV['MAIL_HOST']       = "";
$_ENV['MAIL_SMTPAUTH']   = "";
$_ENV['MAIL_USERNAME']   = "";
$_ENV['MAIL_PASSWORD']   = "";
$_ENV['MAIL_SMTPSECURE'] = "";
$_ENV['MAIL_PORT']       = "";

// AWS Configs
$_ENV['AWS_ACCESS_KEY']              = "";
$_ENV['AWS_SECRET_KEY']              = "";
$_ENV['S3_BUCKET_NAME']              =   "";
$_ENV['CLOUDFRONT_URL']              =   "";
$_ENV['CLOUDFRONT_KEY_PAIR_ID']      =   "";

$_ENV['FCM_API_ACCESS_KEY'] = "";
$_ENV['FCM_SENDER_ID'] = "";
$_ENV['FCM_WEB_API_KEY'] = "";
$_ENV['FCM_LEGACY_KEY'] = "";

// AFRICA'S TALKING
$_ENV['AFRICAS_TALKING_API_KEY'] = "";
$_ENV['AFRICAS_TALKING_USERNAME'] = "";
$_ENV['AFRICAS_TALKING_SENDER_ID'] = "";