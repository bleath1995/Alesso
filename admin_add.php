<?php
include_once("head.php");

if(!empty($_POST["user_id"])){
	$id=$_POST["user_id"];
	$pw=$_POST["user_pw"];
	
	$sql="select * from admin where id='$id'";
	$ro=mysqli_query($link,$sql);
	$cnt=mysqli_num_rows($ro); 
	
	if ($cnt>0){ ?><script> alert("帳號已存在,不可重覆新增!"); </script><?php  } 
  else     
    { $sql="insert into admin values ('$id','$pw')"; 
      mysqli_query($link,$sql );       
      ?><script> alert("新增成功!"); </script><?php  
      header('location:index.php');
     }  
}
?>
<html>
	<head>
		<title>Alesso studio - Member Centre registered</title>		
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">						
						<nav id="nav">
							<ul>
								<li class="special">
									
									<div id="menu">
										<ul>
											<li><a href="index.html">Home</a></li>
											<li><a href="generic.html">Generic</a></li>
											<li><a href="elements.html">Elements</a></li>
											<li><a href="#">Sign Up</a></li>
											<li><a href="#">Log In</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<article id="main">
						<header>
							<h2>Alesso studio - Member Centre registered</h2>
							<p></p>
						</header>
						<section class="wrapper style5">
							<div class="inner">

<form method="post"> 
會員註冊<br><br><br><br>    
  帳號: <input type="text" name="user_id" ><br> 
  密碼: <input type="text" name="user_pw" ><br><br>  
  <input type="submit" value="新增">
  <input type="button" value="回上頁" onclick="location.href='index.php'">  
</form>
								

								

								<hr />

								<h4></h4>
								<p></p>

								<p></p>

							</div>
						</section>
					</article>

				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
							<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
						</ul>
						<ul class="copyright">
							<li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
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

