<?php
include_once("head.php");

if(!empty($_POST["user_id"])){
	$id=$_POST["user_id"];
	$pw=$_POST["user_pw"];
	
	$sql="select * from admin where id='$id' and pw='$pw'";
	$ro=mysqli_query($link,$sql);
	$cnt=mysqli_num_rows($ro);
if($cnt>0){
		header("location:admin_main.php");} 
	else { 
		header("location:index.php");}	
}
	
	
?>

<html>
	<head>
		<title>Alesso music studio</title>
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
									<a href="#menu" class="menuToggle"><span>Member Centre</span></a>
									<div id="menu">
										<ul>
											<div class="fields">
							<form method="post">
								<div class="field">
									  <label for="textfield">帳號</label>
									  <input type="text" name="user_id"/>
								</div>
								<div class="field">
									  <label for="textfield2">密碼</label>
									  <input type="password" name="user_pw"/>
								</div>
								<div class="field">
									<ul class="actions"><br><br>
									  <li><input type="submit" value="登入"/></li> 
									  <li><button type="button" onclick="window.location='admin_add.php'">註冊</button></li>
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