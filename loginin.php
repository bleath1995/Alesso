<?php
	session_start();
	$link = mysqli_connect("localhost","root","","phphw2");
	mysqli_query($link ,'SET NAMES UTF8');
	$my_id = $_SESSION['uid'];
	
		if(!empty($_POST["lo_name"])){
			$sql="update login set lo_name = '".$_POST["lo_name"]."' where lo_id = '".$my_id."'";
			mysqli_query($link,$sql);
	}
	$sql = "select * from login where lo_id = '".$my_id."'";
	$rr = mysqli_query($link,$sql);
	$rrr = mysqli_fetch_assoc($rr);
	
?>
<form method="post">
	
  帳號:<input name="lo_id" value="<?php echo $rrr["lo_id"]?>"><br>
  姓名:<input name="lo_name" value="<?php echo $rrr["lo_name"]?>"><br>
  電話:<input type="text" name="lo_tel" value="<?php echo $rrr["lo_tel"]?>"><br>
  地址:<input type="text" name="lo_con" value="<?php echo $rrr["lo_con"]?>"><br>
	<input type = "submit" value = "修改"
	</form>