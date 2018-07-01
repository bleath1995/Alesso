<?php
session_start();
$link = mysqli_connect("localhost","root","","phphw2");
mysqli_query($link , 'SET NAMES UTF8');

?>
<style>
.word{
	font-size: 24px;
	font-family: '微軟正黑體';
	color: #333;
}
#oo{
	background-image: url(a04.jpg); 
	background-color: #FFF; 
	width: 114px;
	height: 111px;
	background-size:100% 100%;"
} 
</style>
<form action="b_b.php" method="post" name = "nigga">
<table width="1024" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="100" height="50" align="center" valign="middle"><span class="word">帳號</span></td>
    <td align="center" valign="middle">
      <input name="my_id" type="text" id="my_id" size="100" />
    </td>
  </tr>
  <tr>
    <td height="50" align="center" valign="middle"><span class="word">密碼</span></td>
    <td align="center" valign="middle">
      <input name="my_pw" type="password" id="my_pw" size="100" />
    </td>
  </tr>
  <tr>
    <td height="50" align="center" valign="middle"><span class="word">姓名</span></td>
    <td align="center" valign="middle">
      <input name="my_name" type="text" id="my_name" size="100" />
    </td>
  </tr>
  <tr>
    <td height="50" align="center" valign="middle"><span class="word">電話</span></td>
    <td align="center" valign="middle">
      <input name="my_tel" type="text" id="my_tel" size="100" />
    </td>
  </tr>
  <tr>
    <td height="50" align="center" valign="middle"><span class="word">地址</span></td>
    <td align="center" valign="middle">
      <input name="my_con" type="text" id="my_con" size="100" />
    </td>
  </tr>
  <tr>
    <td height="150" colspan="2" align="center" valign="middle">
	      <div id="oo"></div>
		  
      <div style="background-image: url(); background-color: #FFF; width: 114px; height: 111px;background-size:100% 100%;" onclick="xxx();"></div>
      <input type="submit" style="border-left-style: none; border-bottom-style: none; border-right-style: none; border-top-style: none; background-image: url(); background-color: #FFF; width: 114px; height: 111px;background-size:100% 100%;"/>
    </td>
  </tr>
</table>
</form>
<script>
	function xxx(){
			document.nigga.submit();		//指定的form的名稱(name = nigga) 執行submit; 打中文不行;name在地12行
		}		
		document.getElementById("oo").onclick=function(){
			xxx();
		}		
</script>