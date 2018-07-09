<?php
//header
session_start();
$ip=$_SERVER["REMOTE_ADDR"];     //抓IP
$link=mysqli_connect("localhost","root","","phphw2");
mysqli_query($link, 'SET NAMES UTF8');
$myDate=date("Y-m-d H:i:s",strtotime("+6hour"));

//check if login success
if (!empty($_SESSION["userid"])){
	if ($_SESSION["admin"]){
		header("location:my_account_admin.php");}
	else {
		header("location:my_account_user.php");}
}

if(!empty($_POST["userid"])){
		$id=$_POST["userid"];
		$pwd=$_POST["pwd"];	
		$sql = "select * from my_account where userid='$id' and pwd='$pwd'";
		$ro=mysqli_query($link,$sql);
		$cnt=mysqli_num_rows($ro);
		$row=mysqli_fetch_assoc($ro);
		
	echo	$sql;
	if($cnt>=1){
		echo "登入成功！";
	//get user infromation
		$_SESSION["userid"]=$row["userid"];
		$_SESSION["seq"]=$roe["a_seq"];
		$_SESSION["name"]=$row["name"];
		$_SESSION["admin"]=$row["admin"];
		
		
			//insert into login_log;
			  $sql = "Insert into login_log values(null,'$id','$ip','$myDate',0)";
			  mysqli_query($link,$sql);
		//header to welcome page
			if	($_SESSION["admin"]==1){
				header("location:my_account_admin.php");}
			else{
				header("location:my_account_user.php");}	
			}
		else{

			echo "登入失敗！帳號密碼錯誤！";
			//insert into login_log;
			$sql = "Inser into login_log valuse(null,'$id','$ip','$myDate',1)" ;
			mysqli_query($link,$sql);
			
			//檢查此帳號IP帳密錯誤3次(5min內)
			$blockTime= date("Y-m-d H:i:s",strtotime("+6hour-5min"));
			$sql="select * from login_log where ll_ip='$ip' and ll_date>='".$blockTime."' order by ll_date desc limit 3";
			$ro=mysqli_query($link,$sql);
			//echo $sql;
			$totcnt=0;
			
		while (!empty($row=mysqli_fetch_assoc($ro))){
			$totcnt=$totcnt+$row["ll_flag"];
			}	
		//帳密錯誤3次則鎖定user 30min
		
		if ($totcnt==3){	
			$blockNextTime=date("Y-m-d H:i:s",strtotime("+6hour+30min"));
			$sql="insert into login_block valuse (null,'ip','myDate','".$blockNextTime."')";
			mysqli_query($link,$sql); 
			header("location:my_account_block.php");
			exit();
		}	
	}
}

?>
<html>
	<head>
		<title>Alesso music studio</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link rel="shortcut icon" href="images/favicon.ico"/>          <!--圖標語法-->
		<link rel="bookmark" href="images/favicon.ico"/>				<!--圖標語法-->
	</head>
	<body class="landing is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href="index.html">Spectral</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
											<div class="fields">
												<form method="post">
													<div class="field">
														  <label for="textfield">帳號</label>
														  <input type="text" name="userid" id="userid" />
													</div>
													<div class="field">
														  <label for="textfield2">密碼</label>
														  <input type="password" name="pwd" id="pwd"/>
													</div>
													<div class="field">
														<ul class="actions"><br><br>
														  <li><input type="submit" name="button" id="button" value="送出"/></li>
																																  
														  <li><button type="button" name="nigga" id="nigga1" onclick="window.location='add.php'">註冊</button></li>
														 </ul>
													</div>
												</form>
											</div>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<h2>Alesso music studio</h2>
							
							</p><br><br><br>
							<ul class="actions special"><br><br><br>
								
							</ul><br><br>
						</div>
						
					</section>

				<!-- One -->
					

				<!-- Two -->
					<section id="two" class="wrapper alt style2">
						<section class="spotlight">
							<div class="image"><img src="images/pic01.jpg" alt="" /></div><div class="content">
								<h2>Mr. DJ Alesso, at the Spring Wave 2014 party and last year Road to Ultra: Taiwan
								</h2>
								<p></p>
							</div>
						</section>
						<section class="spotlight">
							<div class="image"><img src="images/pic02.jpg" alt="" /></div><div class="content">
								<h2>TAlesso and Tsai performed the single "I Wanna Know"
								</h2>
								<p></p>
							</div>
						</section>
						<section class="spotlight">
							<div class="image"><img src="images/pic03.jpg" alt="" /></div><div class="content">
								<h2>ALESSO is self-taught to become a DJ/producer</h2>
								<p></p>
							</div>
						</section>
					</section>

				
				<!-- CTA -->
					<section id="cta" class="wrapper style4">
						<div class="inner">
							<header>
								<h2>ALESSANDRO LINDBLAD</h2>
								<p>The great swedish DJ and producer Alesso come from taiwan in this summer!</p>
							</header>
							<ul class="actions stacked">
								<li><a href="https://www.facebook.com/AlessoOfficial" class="button fit primary">Alesso FB</a></li>
								<li><a href="https://twitter.com/alesso" class="button fit">Alesso TWITTER</a></li>
							</ul>
						</div>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
							
						</ul>
						<ul class="copyright">
							<li>Design:李育叡</li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
<?php
	if(!empty($_POST["userid"])){
		$id=$_POST["userid"];
		$pwd=$_POST["pwd"];	
		$sql = "select * from my_account where user='$id' and pwd='$pwd'";
		$ro=mysqli_query($link,$sql);
		$cnt=mysqli_num_rows($ro);
		$row=mysqli_fetch_assoc($ro);
	
	if($cnt>=1){
		echo "登入成功！";
	//get user infromation
		$_SESSION["userid"]=$row["userid"];
		$_SESSION["seq"]=$roe["a_seq"];
		$_SESSION["name"]=$row["name"];
		$_SESSION["admin"]=$row["admin"];
		
		
			//insert into login_log;
			  $sql = "Insert into login_log values(null,'$id','$ip','$myDate',0)";
			  mysqli_query($link,$sql);
		//header to welcome page
			if	($_SESSION["admin"]==1){
				header("location:my_account_admin.php");}
			else{
				header("location:my_account_user.php");}	
			}
		else{

			echo "登入失敗！帳號密碼錯誤！";
			//insert into login_log;
			$sql = "Inser into login_log valuse(null,'$id','$ip','$myDate',1)" ;
			mysqli_query($link,$sql);
			
			//檢查此帳號IP帳密錯誤3次(5min內)
			$blockTime= date("Y-m-d H:i:s",strtotime("+6hour-5min"));
			$sql="select * from login_log where ll_ip='$ip' and ll_date>='".$blockTime."' order by ll_date desc limit 3";
			$ro=mysqli_query($link,$sql);
			//echo $sql;
			$totcnt=0;
			
		while (!empty($row=mysqli_fetch_assoc($ro))){
			$totcnt=$totcnt+$row["ll_flag"];
			}	
		//帳密錯誤3次則鎖定user 30min
		
		if ($totcnt==3){	
			$blockNextTime=date("Y-m-d H:i:s",strtotime("+6hour+30min"));
			$sql="insert into login_block valuse (null,'ip','myDate','".$blockNextTime."')";
			mysqli_query($link,$sql); 
			header("location:my_account_block.php");
			exit();
		}	
	}
}
	
	
	
	
?>
