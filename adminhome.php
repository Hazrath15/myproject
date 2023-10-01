<?php
require_once("config.php");
$query="select * from complain";
$send=mysqli_query($connection,$query);
$query1="select * from payment";
$send1=mysqli_query($connection,$query1);
$query2="select * from apply";
$send2=mysqli_query($connection,$query2);
$row = $send2->fetch_assoc();
$path=$row['path'];

 ?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Residential Hall RUET</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"> <img src="images/ruetlogo.png" alt="logo of ruet"><a href="index.php">
				</a></div>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="adminhome.php">Home</a></li>
					<li><a href="payment.php">Payment</a></li>
					<li><a href="address.php">Upload</a></li>
					<li><a href="notice.php">News &amp Events
             <marquee direction="left" onmouseover="this.stop();" onmouseout="this.start();">
                                     <p><span style="text-decoration: none; color: #ffff00;"><strong><span class="glyphicon glyphicon-th-large"><span style="font-family: 'Open Sans','Helvetica Neue',Helvetica,'Noto Sans Bengali',Arial,sans-serif;"><span style="color:#338A7B">md hazrath ali&nbsp;</span></span></span></strong></span>
																			  <span style="text-decoration: none; color: #338A7B;"><strong><span class="glyphicon glyphicon-th-large"><span style="font-family: 'Open Sans','Helvetica Neue',Helvetica,'Noto Sans Bengali',Arial,sans-serif;"><span style="color: #338A7B;"> rajshahi university of engineeringand technology </span></span></span></strong></span>
																				<span style="text-decoration: none; color: #ffff00;"><strong><span class="glyphicon glyphicon-th-large"><span style="font-family: 'Open Sans','Helvetica Neue',Helvetica,'Noto Sans Bengali',Arial,sans-serif;"><span style="color:#338A7B;"> Postgraduate Admission Notice 2017-2018. </span></span></span></strong></span>
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
					<li><a href="payment.php">Payment</a></li>
					<li><a href="Signup.php">Registration</a></li>
				</ul>
			</nav>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<header>
						<h1>Residential Area</h1>
						<p>Welcome to Rajshahi University of Engineering &amp Technology.<br />রাজশাহী প্রকৌশল ও প্রযুক্তি বিশ্ববিদ্যালয় </p>
					</header>
					<a href="Signup.php" class="button big scrolly">Registration</a>
				</div>
			</section>

		<!-- Main -->
			<div id="main">

				<!-- Section -->
        <section class="wrapper style1">
          <div class="inner">
            <h1>Student's Applications</h1>
                <div class="table-wrapper">
                  <table class="alt">
                    <thead>
                      <tr>
                        <th>Stude ID</th>
                        <th>Full Name</th>
                        <th>Nick Name</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Parmanent Address</th>
                        <th>Present Address</th>
                        <th>Department</th>
                        <th>Gender</th>
                        <th>Blood</th>
                        <th>Image</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
while ($row=mysqli_fetch_array($send2))

{

  echo "<tr>
    <td>$row[id]</td>
    <td>$row[full_name]</td>
    <td>$row[nick_name]</td>
    <td>$row[contact]</td>
    <td>$row[email]</td>
    <td>$row[parmanent_address]</td>
    <td>$row[address]</td>
    <td>$row[dept]</td>
    <td>$row[gender]</td>
    <td>$row[blood]</td>
    <td> <img alt='User Pic' src='<?php echo($path); ?>'class='img-circle img-responsive'/></td>
  </tr>";

}
    ?>

                    </tbody>
                    <tfoot>
                    </tfoot>
                  </table>
                </div>


          </div>
        </section>

				<!-- Section -->
					<section class="wrapper style1">
						<div class="inner">
							<h1>Student's Complains</h1>
									<div class="table-wrapper">
										<table class="alt">
											<thead>
												<tr>
													<th>SL</th>
													<th>Name</th>
													<th>Room No</th>
													<th>Hall Name</th>
													<th>Complain</th>
												</tr>
											</thead>
											<tbody>
												<?php
while ($row=mysqli_fetch_array($send))

	{

		echo "<tr>
			<td>$row[SL]</td>
			<td>$row[name]</td>
			<td>$row[room_no]</td>
			<td>$row[hall_name]</td>
			<td>$row[complain]</td>
		</tr>";

 }
			?>

											</tbody>
											<tfoot>
											</tfoot>
										</table>
									</div>


						</div>
					</section>

				<!-- Section -->
				<section class="wrapper style1">
					<div class="inner">
						<h1>Student's Payment</h1>
								<div class="table-wrapper">
									<table class="alt">
										<thead>
											<tr>
												<th>Recipt No</th>
												<th>ID</th>
												<th>Account No</th>
												<th>Amount</th>
												<th>Pay Date</th>
											</tr>
										</thead>
										<tbody>
											<?php
while ($row=mysqli_fetch_array($send1))

{

	echo "<tr>
		<td>$row[recipt_no]</td>
		<td>$row[id]</td>
		<td>$row[account_no]</td>
		<td>$row[amount]</td>
		<td>$row[pay_date]</td>
	</tr>";

}
		?>

										</tbody>
										<tfoot>
										</tfoot>
									</table>
								</div>


					</div>
				</section>
					<!-- Section -->
						<section class="wrapper style2">
							<div class="inner">
								<header class="align-center">
									<h2>Residential hall of RUET</h2>
									<p>Welcome to Rajshahi University of Engineering &amp Technology.</p>
								</header>
								<div class="flex flex-3">
									<div class="col align-center">
										<div class="image round fit"title="hamid hall">
											<img src="images/hall13.jpg" alt="hamid hall" />
										</div>
										<p> Shahid Abdul Hamid Hall <br>Provost:Prof. Dr. Md. Robiul Awall<br>contact: +880-721 750742 Ext (183),+880-721 750034, 01711302330 </p>
										<a href="hamidhall.php" class="button">Learn More</a>
									</div>
									<div class="col align-center">
										<div class="image round fit"title="Tinshed hall">
											<img src="images/hall12.jpg" alt="tinshed hall" />
										</div>
										<p>Tin Shed Hall (Extension) <br>Provost:Md. Mohibul Islam(Astt. Provost)<br>contact:+880-721 750742 Ext (187),<br>+8801918802600</p>
										<a href="tinshedhall.php" class="button">Learn More</a>
									</div>
									<div class="col align-center">
										<div class="image round fit"title="Seikh Hasina Hall">
											<img src="images/hall11.JPG" alt="sheikh hasina hall" />
										</div>
										<p>Deshratna Sheikh Hasina Hall <br>Provost:Prof. Dr. Engr. M. N. I Mondal<br>contact:+880-721 750742 Ext (189),+01720662278, +8801912744327 </p>
										<a href="hasinahall.php" class="button">Learn More</a>
									</div>
								</div>
							</div>
						</section>


			</div>

		<!-- Footer -->
			<footer id="footer">
				<div class="copyright">
					<h4 title="ruet.ac.bd">Rajshahi University of Engineering and Technology,Kazla,Rajshahi-6204,Bangladesh.</h4><br>
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"title="Twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"title="Facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"title="Instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-snapchat"title="Snapchat"><span class="label">Snapchat</span></a></li>
					</ul>
					<p>Copyright &copy; 2018 Rajshahi University of Engineering &amp Technology. All rights reserved. Designed By: <a href="https://www.facebook.com/mdhazrath.ali.9">HAZRATH</a>.</p>
				</div>

			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
 </form>
	</body>
</html>
