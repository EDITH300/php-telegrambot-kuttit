<?
if (!defined('test')) { exit; }

global $config;
$config['db']['host'] = 'localhost';                // Database Host
$config['db']['user'] = 'mrmmgir_userkuttit';      //  Database Username
$config['db']['pass'] = 'FLiv6}50R_B.X5T*Py';     //   Database Password
$config['db']['name'] = 'mrmmgir_kuttitbot';     //    Dababase Name

$config['api']['kutt'] = 'U7vD4CdWH7rLWIT8vKDSxuJa3XghM0S1vNlt5sfG';           // Kutt.it API Key
$config['api']['telegram'] = '814358071:AAF8X4mn2O0FO6Xxt_blhYiSmMo5Gdlb3nM'; //  Telegram Bot API Key

$config['admin']['owner'] = '242974307';  //Super Admin Telegram ID
//Admins Telegram ID
$config['admin']['other'] = array(
  'admin1' => '334673986',
  'admin2' => '104886185',
);