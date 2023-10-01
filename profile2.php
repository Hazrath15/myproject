<?php
require_once ("config.php");
session_start();
if (!isset($_SESSION['UN'])) {
   header("Location:Signin.php");
}
else {
  $user=$_SESSION['UN'];
}

$query="select * from info where user_name='$user'";

$result = $connection->query($query);
 $row = $result->fetch_assoc();
$path=$row['photo'];

 ?>
 <!DOCTYPE HTML>

 <html>
 	<head>
 		<title>Profile</title>
 		  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
      <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
     <meta charset="utf-8" />
 		<meta name="viewport" content="width=device-width, initial-scale=1" />
 		<link rel="stylesheet" href="assets/css/main.css" />
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
 					<li><a href="index2.php">Home</a></li>
 					<li><a href="Signin.php">Sign Out</a></li>
          <li><a href="notice2.php">News &amp Events
             <marquee direction="left" onmouseover="this.stop();" onmouseout="this.start();">
                                     <p><span style="text-decoration: none; color: #ffff00;"><strong><span class="glyphicon glyphicon-th-large"><span style="font-family: 'Open Sans','Helvetica Neue',Helvetica,'Noto Sans Bengali',Arial,sans-serif;"><span style="color:#FFFF00"><sup style="text-color:red;">New</sup>Prof. Dr. Rafiqul Islam Sheikh has joined as Vice-Chancellor at RUET.&nbsp;</span></span></span></strong></span>
                                        <span style="text-decoration: none; color: #338A7B;"><strong><span class="glyphicon glyphicon-th-large"><span style="font-family: 'Open Sans','Helvetica Neue',Helvetica,'Noto Sans Bengali',Arial,sans-serif;"><span style="color: #FFFF00;"> <sup style="text-color:red;">New</sup>All kinds of Academic Activities will be postponed on the occasion of Eid-Ul-Azha from 18-26 August. </span></span></span></strong></span>
                                        <span style="text-decoration: none; color: #ffff00;"><strong><span class="glyphicon glyphicon-th-large"><span style="font-family: 'Open Sans','Helvetica Neue',Helvetica,'Noto Sans Bengali',Arial,sans-serif;"><span style="color:#FFFF00;"><sup style="text-color:red;">New</sup> Undegraduate Admission Notice 2018-2019. </span></span></span></strong></span>
                                      </p>

             </marquee>

         </a></li>
         <li><a href="mujibhall.php">Ban. Shei. Mujibur Rahman Hall</a></li>
         <li><a href="shahidulhall.php">Shahid Shahidul Islam Hall</a></li>
         <li><a href="selimhall.php"> Shahid Lt. Selim Hall</a></li>
         <li><a href="ziahall.php">Sh. Pres. Ziaur Rahman Hall</a></li>
         <li><a href="hamidhall.php"> Shahid Abdul Hamid Hall</a></li>
         <li><a href="tinshedhall.php">Tin Shed Hall (Extension)</a></li>
         <li><a href="hasinahall.php">Deshratna Sheikh Hasina Hall</a></li>
 				</ul>
 			</nav>

 		<!-- Main -->

    <div class="container">
          <div class="row">
          <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
               <A href="edit.html" >Edit Profile</A>

            <A href="logout.php" >Sign Out</A>
           <br>
    <p class=" text-info">May 05,2014,03:00 pm </p>
          </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >


              <div class="panel panel-info">
                <div class="panel-heading">
                  <h3 class="panel-title"><?php echo "$row[full_name]"; ?></h3>
                </div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-3 col-lg-3 "> <img alt="User Pic" src="<?php echo($path); ?>"class="img-circle img-responsive"/> </div>

                    <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                      <dl>
                        <dt>DEPARTMENT:</dt>
                        <dd>Administrator</dd>
                        <dt>HIRE DATE</dt>
                        <dd>11/12/2013</dd>
                        <dt>DATE OF BIRTH</dt>
                           <dd>11/12/2013</dd>
                        <dt>GENDER</dt>
                        <dd>Male</dd>
                      </dl>
                    </div>-->
                    <div class=" col-md-9 col-lg-9 ">
                      <table class="table table-user-information">
                        <tbody>
                          <tr>
                            <td>Department:</td>
                            <td>cse</td>
                          </tr>
                          <tr>
                            <td>Date of Birth</td>
                            <td>01/24/1988</td>
                          </tr>


                             <tr>
                                 <tr>
                            <td>Gender</td>
                            <td>male</td>
                          </tr>
                            <tr>
                            <td>Address</td>
                            <td>hamid hall</td>
                          </tr>
                          <tr>
                            <td>Email</td>
                            <td><a href="#"><?php echo "$row[email]"; ?></a></td>

                          </tr>
                            <td>Phone Number</td>
                            <td>09752357</td>
                            <tr>
                       <td>Blood Group</td>
                       <td>b+</td>
                     </tr>

                          </tr>

                        </tbody>
                      </table>

                      <a href="update.php" class="btn btn-primary">Edit Account</a>
                      <a href="hamidhall.php" class="btn btn-primary">Token or Slip</a>
                    </div>
                  </div>
                </div>
                     <div class="panel-footer">
                            <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                            <span class="pull-right">
                                <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                                <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                            </span>
                        </div>

              </div>
            </div>
          </div>
        </div>



 		<!-- Footer -->
 			<footer id="footer">
 				<div class="copyright">
 					<ul class="icons">
 						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
 						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
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
