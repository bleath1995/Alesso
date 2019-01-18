<?php
//---connection
session_start();
$link = mysqli_connect("localhost","root","","db02");
mysqli_query($link ,'SET NAMES UTF8');


?>