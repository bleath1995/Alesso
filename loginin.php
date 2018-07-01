<?php
//header
session_start();
$ip=$_SEVER["REMOTE_ADDR"];     //抓IP
$link=mysqli_connect("localhost","root","","phphw2");
mysqli_query($link, 'SET NAMES UTF8');
$myDate=date("Y-m-d H:i:s",strtotime("+6hour"));

//check if login success
if (!empty($_SESSION["userid"]))




<?