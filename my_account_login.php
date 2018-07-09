<?php 
//header("Refresh:0");
session_start();
$ip=$_SERVER["REMOTE_ADDR"]; 
$link=mysqli_connect("localhost","root","","phphw2"); 
mysqli_query($link,'SET NAMES UTF8');  
$myDate=date("Y-m-d H:i:s",strtotime("+6hour")); 

//check if login successfully 
if (!empty($_SESSION["userid"])){
   if ($_SESSION["admin"]){              
      header("location:my_account_admin.php");} 
    else {
      header("location:my_account_user.php"); }
}    
 
?> 

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title> 
</head>

<body>
<br><br><br>
<form id="form1" name="form1" method="post" action="">
<table width="500" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="200" height="50" align="center" valign="middle">帳號</td>
    <td width="300" height="50" align="center" valign="middle">
          <input name="userid" type="text" id="userid" size="20" />
    </td>
  </tr>
  <tr>
    <td height="50" align="center" valign="middle">
    	密碼</td>
    <td height="50" align="center" valign="middle">
    	<input name="pwd" type="text" id="pwd" size="20" />
    </td>
    
  </tr>
  <tr>
    <td height="50" colspan="2" align="center" valign="middle">
    <input name="submit" type="submit" id="submit" value="登入" />
    <a href="my_account_add.php"> 新會員註冊   </a>
    </td>
  </tr>
</table>
</form>

</body>
</html>

<?php 
if (!empty($_POST["userid"])){    	
	$id=$_POST["userid"]; 
	$pwd=$_POST["pwd"]; 
	$sql = "select * from my_account where userid='$id' and pwd='$pwd'" ; 
	$ro=mysqli_query($link,$sql); 
 	$cnt=mysqli_num_rows($ro); 
  $row=mysqli_fetch_assoc($ro);
	
	if ($cnt>=1){ 
		echo "登入成功！"; 
    //get user infromation
      $_SESSION["userid"]=$row["userid"] ; 
      $_SESSION["seq"]=$row["a_seq"] ;   
      $_SESSION["name"]=$row["name"] ;  
      $_SESSION["admin"]=$row["admin"];       

		//insert into login_log; 
		  $sql = "Insert into login_log values(null,'$id','$ip','$myDate',0)" ; 
		  mysqli_query($link,$sql);   
    //header to welcome page
      if ($_SESSION["admin"]==1){              
          header("location:my_account_admin.php");} 
      else {
          header("location:my_account_user.php"); }
     	} 
	else { 
	
		echo "登入失敗！帳號密碼錯誤!"; 
		//insert into login_log;
		$sql = "Insert into login_log values(null,'$id','$ip','$myDate',1)" ; 
		mysqli_query($link,$sql); 
       
		//檢查此IP帳密錯誤3次(5分鍾內) 
		$blockTime= date("Y-m-d H:i:s",strtotime("+6hour-5min"));
		$sql="select * from login_log where ll_ip='$ip' and ll_date>='$blockTime' order by ll_date desc limit 3"  ; 
		$ro=mysqli_query($link,$sql); 
	  //echo $sql; 
		$totcnt=0; 
      
   	while (!empty($row=mysqli_fetch_assoc($ro))){ 
				$totcnt=$totcnt+$row["ll_flag"]; 			
			   }
			//帳密錯誤3次則鎖定user 30分鍾  
      
			if ($totcnt==3){ 
				$blockNextTime=date("Y-m-d H:i:s",strtotime("+6hour+30min")); 
				$sql="insert into login_block values (null,'$ip','$myDate','$blockNextTime')"  ; 
				mysqli_query($link,$sql); 
				header("location:my_account_block.php");
				exit();
			}  						
		}
 				
}  

?>

