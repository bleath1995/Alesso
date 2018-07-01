<!DOCTYPE HTML>
<?php
session_start();
$link = mysqli_connect("localhost","root","","phphw2");
mysqli_query($link , 'SET NAMES UTF8');

$tt = strtotime("+6hour");
$tt2 = date("Y-m-d H:i:s",$tt);
$t5min = strtotime("+6hour-5min");
$t5min2 = date("Y-m-d H:i:s",$t5min);
$ip = $_SERVER["REMOTE_ADDR"]; 

$sql = "select * from close_list where b_l_ip = '".$ip."' and 	b_l_t2 >= '".$tt2."'";
$bb = mysqli_query($link,$sql);
$bbb = mysqli_num_rows($bb);
	
if($bbb >= 1){
	$bt = mysqli_fetch_assoc($bb);
echo "已封鎖你帳號，封鎖剩餘時間:".$bt["b_l_t2"];
	exit();
}
								

if(!empty($_POST["my_id"])){

	$my_id = $_POST["my_id"];
	$my_pw = ($_POST["my_pw"]);
	$sql = "select * from login where lo_id = '".$my_id."' and lo_pw ='".$my_pw."'";
	$rr = mysqli_query($link,$sql);
	$rrr = mysqli_num_rows($rr);
	
			if($rrr == 1 ){
				while($row = mysqli_fetch_array($result))
				$rrrr = $row["lo_type"];
				

				$_SESSION['uid'] = $my_id;
				$sql = "insert into situation value(null,'$my_id','0','$tt2','$ip')";
				mysqli_query($link,$sql);
				
				if($rrrr == '1' ){
					header("location:loginin.php");
				}else{
					header("location:loginin.php");
				}
				
				
								
			}else{
				$sql = "insert into situation value(null,'$my_id','1','$tt2','$ip')";
				mysqli_query($link,$sql);
				echo "帳號密碼錯誤";

			}
			
				$s91="select * from situation where l_time > '$t5min2' and l_ip = '$ip' order by l_seq desc limit 3";
	$nn = mysqli_query($link,$s91);
	$nnn = mysqli_fetch_assoc($nn);
	$now_error = 0;				//計算失敗次數的變數，起始值是0
	do{
		$now_error = $now_error + $nnn["l_bo"];  //計算失敗次數的變數		
	}while($nnn = mysqli_fetch_assoc($nn));
	
	if($now_error >= 3){
		$t30min = strtotime("+6hour+30min");
		$t30min2 = date("Y-m-d H:i:s",$t30min);
		$sql = "insert into close_list value(null,'$ip','$tt2','$t30min2')";			//table名稱
		mysqli_query($link,$sql);
		header("location:index.php");		
		exit();		
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
		<link rel="shortcut icon" href="images/favicon.ico"/>
		<link rel="bookmark" href="images/favicon.ico"/>
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
									  <input type="text" name="my_id" id="my_id" />
								</div>
								<div class="field">
									  <label for="textfield2">密碼</label>
									  <input type="password" name="my_pw" id="my_pw"/>
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
							
							<a href="http://html5up.net"></a></p>
							<ul class="actions special">
								
							</ul>
						</div>
						<a href="#one" class="more scrolly">Learn More</a>
					</section>

				<!-- One -->
					<section id="one" class="wrapper style1 special">
						<div class="inner">
							<header class="major">
								<h2>ALESSANDRO LINDBLAD<br />
								</h2>
								<p>The great swedish DJ and producer Alesso come from taiwan in this summer!
</p>
							</header>
							<ul class="icons major">
								<li><span class="icon fa-diamond major style1"><span class="label">Lorem</span></span></li>
								<li><span class="icon fa-heart-o major style2"><span class="label">Ipsum</span></span></li>
								<li><span class="icon fa-code major style3"><span class="label">Dolor</span></span></li>
							</ul>
						</div>
					</section>

				<!-- Two -->
					<section id="two" class="wrapper alt style2">
						<section class="spotlight">
							<div class="image"><img src="images/pic01.jpg" alt="" /></div><div class="content">
								<h2>Mr. DJ Alesso, at the Spring Wave 2013 party and last year Road to Ultra: Taiwan
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
								<h2>Arcue ut vel commodo</h2>
								<p>Aliquam ut ex ut augue consectetur interdum endrerit imperdiet amet eleifend fringilla.</p>
							</header>
							<ul class="actions stacked">
								<li><a href="#" class="button fit primary">Activate</a></li>
								<li><a href="#" class="button fit">Learn More</a></li>
							</ul>
						</div>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
							
						</ul>
						<ul class="copyright">
							<li></li><li>Design:李育叡</a></li>
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