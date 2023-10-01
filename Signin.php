
<?php
session_start();
require_once ("config.php");
if (isset($_SESSION['ID'])) {

header("Location:profile2.php");
}
 ?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Sign In</title>
		  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/bootstrap.css">
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="logo"> <img src="images/ruetlogo.png" alt="logo of ruet"><a href="index.php">
				</a></div>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Home</a></li>
					<li><a href="Signin.php">Sign In</a></li>
				</ul>
			</nav>

		<!-- Main -->
		<section id="main2">
		<div class="content">
				<p>Heaven's Light is Our Guide.</p>
			 <h6>Welcome to Rajshahi University of Engineering &amp Technology.</h6>
		</div>
		</section>

<section id="main">

          <h2 style="text-align:center;">Sign In Form</h2>
<div class="container">

	<form action="process.php" method="POST">
	  <div class="form-group">

	      <label for="inputid">User Name</label>
	      <input type="text"  class="form-control"  id="st_id" name="user" placeholder="Enter User Name"required>


	  </div>

	  <div class="form-group">
			<label for="inputPassword4">Password</label>
			<input type="password" class="form-control" id="password"  name="password" placeholder="Password"required>
	  </div>
	  <div class="form-group">

	      <input class="form-check-input" type="checkbox" id="gridCheck">
	      <label class="form-check-label" for="gridCheck">
	        Remember Me
	      </label>

	  </div>
	  <button type="submit" class="btn btn-primary">Sign In</button>

	</form>

	</div>

		</section>



		<!-- Footer -->
			<footer id="footer">
				<div class="copyright">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"title="Instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-snapchat"title="Snapchat"><span class="label">Snapchat</span></a></li>
					</ul>
					<p>&copy; Untitled. All rights reserved. Design: <a href="https://www.facebook.com/mdhazrath.ali.9">HAZRATH</a>. Images: <a href="https://unsplash.com">Unsplash</a>.</p>
				</div>
			</footer>

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
