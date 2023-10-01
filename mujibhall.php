<?php
require_once ("config.php");
session_start();
if (!isset($_SESSION['UN'])) {
   header("Location:Signin.php");
}
if(isset($_POST['submit']))  {
  $name=$_POST['query'];
  $qu="select * from apply where full_name LIKE '%$name%' OR id='$name'";
  $result= mysqli_query($connection,$qu);

}
 ?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Bangabandhu Sheikh Mujibur Rahman Hall-RUET</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
		<header id="header" class="alt">
			<div class="logo"> <img src="images/ruetlogo.png" alt="logo of ruet"><a href="index.php">
			</a></div>
			<a href="#menu"style="color:black;">Menu</a>
		</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Home</a></li>
					<li><a href="generic.html">Token</a></li>
					<li><a href="logout.php">Sign Out</a></li>
				</ul>
			</nav>

		<!-- Main -->
			<div id="main">
				<section class="wrapper style1">
					<div class="inner">

						<header class="align-center">
							<p><i>Heaven's Light is Our Guide.</i></p>
						 <h3>Rajshahi University of Engineering &amp Technology.</h3>
						</header>

						<!-- Elements -->
							<h4 id="elements">Bangabandhu Sheikh Mujibur Rahman Hall</h4>
							<div class="row 200%">
								<div class="6u 12u$(medium)">
										<hr />
										<p><span class="image fit"><img src="images/mujibhall.jpg" alt="" /></span>
											RUET has 7 residential halls (dormitory) for the student for living on-campus and to make the life of student convenience through dissemination the culture, behavior, knowledge, group discussion and other academic and cultural activities within the green campus. Provost is appointed by the Vice-Chancellor in each hall for coordinating the hall activities as per guideline of Vice-Chancellor to ensure the hall with sound environment and convenience for student living. There are assistant provosts for helping to the provost. Each provost appointed for limited time period and hence the name of the provost is frequently changed. Lists of the halls and the contact number of the provost are given in the following table
											Lorem ipsum dolor sit accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum.</p>
										<hr />
										<h3>Token</h3>

										<form method="post" name="listForm" action="mujib.php">
                      <div class="row uniform">
												<div class="6u 12u$(xsmall)">
													<input type="text" name="id" id="id" value="" placeholder="ID" />
												</div>
												<div class="6u 12u$(xsmall)">
													<input type="text" name="recipt" id="recipt" value="" placeholder="Enter Recipt No" />
												</div>
												<div class=" 12u$">
													<input type="text" name="meal" id="meal" value="" placeholder="Time(e.g:1+1,0+1,1+0)" />
												</div>
												<div class="6u 12u$(xsmall)">
													<input type="date" name="date" id="date" value="" placeholder="Date" />
												</div>
												<div class="12u$">
													<input type="checkbox" name="choice" id="choice" value="25" onchange="checkTotal()">
													<label for="choice">দুপুরের খাবার(25)</label><br>
													<input type="checkbox" name="choice" id="choice2" value="25" onchange="checkTotal()">
													<label for="choice2">রাতের খাবার(25)</label><br>
												Total Bill: <input type="text" size="2" name="total" value="0"/>
												</div>
												<!-- Break -->
												<div class="12u$">
													<ul class="actions">
														<li><input type="submit" name="s1" value="Submit" /></li>
														<li><input type="reset" value="Reset" class="alt" /></li>
													</ul>
												</div>
											</div>
										</form>


									<!-- Blockquote -->


								</div>
								<div class="6u$ 12u$(medium)">

									<!-- Box -->
										<h3>Notice</h3>
										<div class="box">
											<marquee direction="up" onmouseover="this.stop();" onmouseout="this.start();">
																							<p><span style="text-decoration: none; color: #ffff00;"><strong><span class="glyphicon glyphicon-th-large"><span style="font-family: 'Open Sans','Helvetica Neue',Helvetica,'Noto Sans Bengali',Arial,sans-serif;"><span style="color:#338A7B"><sup style="text-color:red;">New</sup>All kinds of Academic Activities will be postponed on the occasion of Eid-Ul-Azha from 18-26 August.</span></span></span></strong></span>
																								 <span style="text-decoration: none; color: #338A7B;"><strong><span class="glyphicon glyphicon-th-large"><span style="font-family: 'Open Sans','Helvetica Neue',Helvetica,'Noto Sans Bengali',Arial,sans-serif;"><span style="color: #338A7B;">Prof. Dr. Rafiqul Islam Sheikh has joined as Vice-Chancellor at RUET. </span></span></span></strong></span>
																								 <span style="text-decoration: none; color: #ffff00;"><strong><span class="glyphicon glyphicon-th-large"><span style="font-family: 'Open Sans','Helvetica Neue',Helvetica,'Noto Sans Bengali',Arial,sans-serif;"><span style="color:#338A7B;"> Postgraduate Admission Notice 2017-2018.Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan. </span></span></span></strong></span>
																							 </p>

											</marquee>
										</div>
										<h3>Office</h3>
										<hr/>
										<blockquote>
                      provost:Prof. Director of student welfare (DSW) <br>
											contact:+880-721 750742 Ext (603/693),
                        +880-721 750063, +01789538712, +01856442015 <br>
											Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis.</blockquote>
                     <hr/>
										<h3>Complain</h3>

										<form method="post" action="mujib.php">
											<div class="row uniform">
												<div class="6u 12u$(xsmall)">
													<input type="text" name="name" id="name" value="" placeholder="Name" />
												</div>
												<div class="6u$ 12u$(xsmall)">
													<input type="text" name="room_no" id="room" value="" placeholder="Room No" />
												</div>
                        <div class=" 12u$">
													<input type="text" name="hallname" id="hallname" value="Sheikh Mujibur Hall" placeholder="Hall name" />
												</div>
												<!-- Break -->
												<div class="12u$">
													<textarea name="message" id="message" placeholder="Enter your Complain" rows="6"></textarea>
												</div>
												<!-- Break -->
												<div class="12u$">
													<ul class="actions">
														<li><input type="submit" name="s2" value="Submit Complain" /></li>
														<li><input type="reset" value="Reset" class="alt" /></li>
													</ul>
												</div>
											</div>
										</form>

							</div>
						</div>
						<form method="post" action="mujibhall.php">
							<div class="row uniform">
								<div class="9u 12u$(small)">
									<input type="text" name="query" id="query" value="" placeholder="Enter Name or Roll" />
								</div>
								<div class="3u$ 12u$(small)">
									<input type="submit" name="submit" value="Search" class="fit" />
								</div>
							</div>
						</form>
						<hr/>
						<div class="table-wrapper">
							<table class="alt">
								<thead>
									<tr>
										<th>ID</th>
										<th>Name</th>
										<th>Department</th>
										<th>Room No</th>
                    <th>Contact No</th>
										<th>Blood</th>
									</tr>
								</thead>
								<tbody>
                  <?php
while ($row=mysqli_fetch_array($result))

{

echo "<tr>
<td>$row[id]</td>
<td>$row[full_name]</td>
<td>$row[dept]</td>
<td>$row[address]</td>
<td>$row[contact]</td>
<td>$row[blood]</td>
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
			</div>

		<!-- Footer -->
			<footer id="footer">
				<div class="copyright">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-snapchat"><span class="label">Snapchat</span></a></li>
					</ul>
				<p>Copyright &copy; 2018 Rajshahi University of Engineering &amp Technology. All rights reserved. Designed By: <a href="https://www.facebook.com/mdhazrath.ali.9">HAZRATH</a>.</p>
				</div>
			</footer>
			<script type="text/javascript">
			function checkTotal() {
				document.listForm.total.value = '';
				var sum = 0;
				for (i=0;i<document.listForm.choice.length;i++) {
					if (document.listForm.choice[i].checked) {
						sum = sum + parseInt(document.listForm.choice[i].value);
					}
				}
				document.listForm.total.value = sum;
			}
		</script>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
