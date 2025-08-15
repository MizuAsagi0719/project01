<?php 
//PDO SQL資料庫連線程式
$dsn = "mysql:host=localhost;dbname=project01db;charset=utf8";
$user = "sales";
$password = "123456";
$link = new PDO($dsn,$user,$password);
date_default_timezone_set("Asia/Taipei");
// PHP 5.3.6以前版本要再加下面那句
// $link -> exec("set names utf8");
?>