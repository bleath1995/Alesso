<?php
	session_start();
	$name=$_SESSION['name'];
	//	checking login
	if(empty($_SESSION["userid"])){
		  header("location:my_account_login.php");  exit();
		
	}
?>
<html >
<head>
<title>一般會員區</title>
</head>
                                           
<body>
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <th align="center" scope="col"><table width="800" border="0" cellspacing="0" cellpadding="0">
       <tr>
        <th width="400" align="left" height="50" scope="col">登入者：<?php echo $name; ?>先生小姐</th>
        <th width="400" align="right" height="50" scope="col">會員專區： 
          <a href="my_account_update.php" target="main">會員資料修改</a><span>　</span>
          <a href="my_account_logout.php" target="main">登出</a>
        </th>
      </tr>
    </table></th>
  </tr>
  <tr>
    <td width="1000" height="450" align="center" valign="top">
    <p style="color: #00F; font-size: 36px;"><br />
      會員活動公告 <br />   
        2018/07/01~ 2810/07/10<br />
            全館滿千送百活動開跑!<br />
            <br />
            <br />    
    </td>
  </tr>
</table>

</body>
</html>