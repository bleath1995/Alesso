<?php
	session_start();
	$link=mysqli_connect("localhost","root","","phphw2");
	mysqli_query($link,"SET NAMES UTF8");

	//	checking login
	if(empty($_SESSION['userid'])){
		header("location:my_account_login.php");  exit();	
	}
	//	login user information
	$name=$_SESSION['name'];
	$yn[1]="<span style='color: #F00;'>是</span>";	
	$yn[0]="否";
?>
<html>
<head>
<title>管理員專區</title>
</head> 
                                       
<body>
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <th align="center" scope="col"><table width="800" border="0" cellspacing="0" cellpadding="0">
       <tr>
        <th width="200" align="left" height="50" scope="col">登入管理員：<?php echo $name; ?> </th>
        <th width="600" align="right" height="50" scope="col">管理員專區： 
             <a href="my_account_admin.php" target="main">帳號控制</a><span>　</span>
             <a href="my_account_admin_loglist.php" target="main">後台登入記錄</a><span>　</span>
             <a href="my_account_admin_list.php" target="main">後台操作記錄</a><span>　</span>
             <a href="my_account_logout.php" target="main">登出</a>
        </th>
      </tr>
    </table></th>
  </tr>
  <tr>
    <td width="1000" height="450" align="center" valign="top">
    <!-- php begin -->  
       <table width="700" border="1" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <th colspan="7" height="30"align="center" valign="middle">帳號控制</th>
        </tr>
        <tr>
          <th width="14%" height="30"align="center" valign="middle" scope="col">帳號</th>
          <th width="14%" height="30"align="center" valign="middle" scope="col">姓名</th>
          <th width="14%" height="30"align="center" valign="middle" scope="col">管理者權限</th>
          <th width="14%" height="30"align="center" valign="middle" scope="col">新增權限</th>
          <th width="14%" height="30"align="center" valign="middle" scope="col">修改權限</th>
          <th width="14%" height="30"align="center" valign="middle" scope="col">刪除權限</th>
          <th width="14%" height="30"align="center" valign="middle" scope="col">關閉帳號</th>
        </tr>
        <tr>
<?php			
	$sql = "select * from my_account";
	$ro=mysqli_query($link,$sql);
	while(!empty($row=mysqli_fetch_assoc($ro))){
		$seq = $row["a_seq"];
		$id = $row["userid"];
		$name = $row["name"];
		$admin = $row["admin"];
		$r1 = $row["right1"];
		$r2 = $row["right2"];
		$r3 = $row["right3"];
		$r4 = $row["right4"];
		
	?>	
	
	<td width="14%" height="30"align="center" valign="middle"><?=$id?></td>
    <td width="14%" height="30"align="center" valign="middle"><?=$name?></td>
    <td width="14%" height="30"align="center" valign="middle">
        <a href="my_account_admin_u.php?seq=<?=$seq?>&mid=<?=$id?>&col=admin"><?=$yn[$admin]?></a></td>
    <td width="14%" height="30"align="center" valign="middle">
        <a href="my_account_admin_u.php?seq=<?=$seq?>&mid=<?=$id?>&col=r1"><?=$yn[$r1]?></a></td>
    <td width="14%" height="30"align="center" valign="middle">
        <a href="my_account_admin_u.php?seq=<?=$seq?>&mid=<?=$id?>&col=r2"><?=$yn[$r2]?></a></td>
    <td width="14%" height="30"align="center" valign="middle">
        <a href="my_account_admin_u.php?seq=<?=$seq?>&mid=<?=$id?>&col=r3"><?=$yn[$r3]?></a></td>
    <td width="14%" height="30"align="center" valign="middle">
        <a href="my_account_admin_u.php?seq=<?=$seq?>&mid=<?=$id?>&col=r4"><?=$yn[$r4]?></a></td>
    </tr>
	
	      <?php 
         } ?>
 
       
      </table>
   
    <!-- php end -->       
    </td>
  </tr>
</table>

</body>
</html>

<?php  
$sql = "select * from my_account";
$ro=mysqli_query($link,$sql);

while(!empty($row=mysqli_fetch_assoc($ro))){
    $seq = $row["a_seq"];                                
    $id = $row["userid"];
    $name=$row["name"];
    $admin=$row["admin"];   
    $r1=$row["right1"];          
    $r2=$row["right2"];
    $r3=$row["right3"];
    $r4=$row["right4"];
}

?>	
	