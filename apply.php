<!DOCTYPE HTML>
<!--
	Urban by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Aplication</title>
		  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/bootstrap.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="logo"> <img src="images/ruetlogo.png" alt="logo of ruet"><a href="index.html">
				</a></div>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Home</a></li>
					<li><a href="address.php">Download</a></li>
					<li><a href="Signin.php">Sign In</a></li>
					<li><a href="Signup.php">Sign Up</a></li>
				</ul>
			</nav>

			 <section id="main2">
			 <div class="content">
				   <p>Heaven's Light is Our Guide.</p>
			 		<h6>Welcome to Rajshahi University of Engineering &amp Technology.</h6>
			 </div>
			 </section>

		<section id="main">
			<h3>Application form</h3>
			<div class="container">
				<form class="" action="table.php" method="post" enctype="multipart/form-data">
  <div class="form-row">
		<div class="form-group col-md-6">
			<label>Student ID</label>
			<input type="text" class="form-control" name="St_id" placeholder="Enter Your ID"required>
		</div>
		<div class="form-group col-md-6">
			<label >Full Name</label>
			<input type="text" class="form-control" name="fullname" placeholder="Enter Full Name"required>
		</div>
  </div>
	<div class="form-row">
		<div class="form-group col-md-6">
      <label for="inputname4">Nick Name</label>
      <input type="text" class="form-control" name="inputna4" placeholder="Enter Last Name">
    </div>
		<div class="form-group col-md-6">
			<label for="inputAddress4">Contact No</label>
			<input type="text" class="form-control" name="inputAddress4" placeholder="+880"required>
		</div>
	</div>
  <div class="form-group">
    <label for="inputEmail4">Email</label>
    <input type="email" class="form-control" name="inputEmail4" placeholder="Enter Email"required>
  </div>
  <div class="form-group">
    <label for="inputpasw2">Parmanent Address</label>
    <input type="text" class="form-control" name="inputPassword42" placeholder="Enter Parmanent Address"required>
  </div>
  <div class="form-row">
		<div class="form-group col-md-4">
      <label >Choose Department</label>
      <select name="dept" class="form-control">
        <option selected>Choose...</option>
				<option>Electrical &amp Electronics Engineering</option>
				<option>Computer Science &amp Engineering</option>
				<option>Mechanical Engineering</option>
				<option>Civil Engineering</option>
				<option>Electrical &amp Telecommunication Engineering</option>
        <option>Electrical &amp Computer Engineering</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputGender">Gender</label>
      <select name="gender" id="inputGender" class="form-control">
        <option selected>Choose...</option>
				<option>Male</option>
				<option>Female</option>
        <option>Others</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Hall Name</label>
      <input type="text" class="form-control" id="inputZip" name="hallname">
    </div>
  </div>
	<h6>Blood Group</h6>
	<div class="form-group col-md-10"name="radio">
	<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="A+">
  <label class="form-check-label" for="inlineRadio1">A+</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="B+">
  <label class="form-check-label" for="inlineRadio2">B+</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="A-">
  <label class="form-check-label" for="inlineRadio3">A-</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="B-">
  <label class="form-check-label" for="inlineRadio4">B-</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="AB+">
  <label class="form-check-label" for="inlineRadio5">AB+</label>
</div>
<div class="form-check form-check-inline">
	<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio6" value="O+">
	<label class="form-check-label" for="inlineRadio6">O+</label>
</div>
<div class="form-check form-check-inline">
	<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio7" value="AB-">
	<label class="form-check-label" for="inlineRadio7">AB-</label>
</div>
<div class="form-check form-check-inline">
	<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio8" value="O-">
	<label class="form-check-label" for="inlineRadio8">O-</label>
</div>
</div>
<div class="form-group">
 <label for="image">Upload Photo</label>
 <input type="file" class="form-control-file" name="image">
</div>
  <button type="submit" class="btn btn-primary"name="s1">Submit</button>
</form>
			</div>
			

		</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="copyright">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"title="Twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"title="Facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"title="Instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-snapchat"title="Snapchat"><span class="label">Snapchat</span></a></li>
					</ul>
					<p>Copyright &copy; 2018 Rajshahi University of Engineering &amp Technology. All rights reserved. Designed By: <a href="https://www.facebook.com/mdhazrath.ali.9">HAZRATH</a>.</p>
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
