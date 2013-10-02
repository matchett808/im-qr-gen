<?php 
$url = $_GET['url'];
$host = str_replace('tools.', '', $_SERVER['HTTP_HOST']);
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
include "./qrlib.php";  
$fname = md5($url . time());
QRcode::png($url, './temp/' . $fname .'.png', QR_ECLEVEL_H, 10); 
header('location: http://' . $host . '' . $uri . '/temp/' . $fname . '.png');
?> 