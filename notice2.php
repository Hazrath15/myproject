<?php
require_once("config.php");
$qq="SELECT * FROM notice";
$ss=mysqli_query($connection,$qq);

 ?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
<title>News &amp Events</title>
<link href="tooplate_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script src="js/jssor.slider-27.1.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_SlideoTransitions = [
              [{b:0,d:600,y:-290,e:{y:27}}],
              [{b:0,d:1000,y:185},{b:1000,d:500,o:-1},{b:1500,d:500,o:1},{b:2000,d:1500,r:360},{b:3500,d:1000,rX:30},{b:4500,d:500,rX:-30},{b:5000,d:1000,rY:30},{b:6000,d:500,rY:-30},{b:6500,d:500,sX:1},{b:7000,d:500,sX:-1},{b:7500,d:500,sY:1},{b:8000,d:500,sY:-1},{b:8500,d:500,kX:30},{b:9000,d:500,kX:-30},{b:9500,d:500,kY:30},{b:10000,d:500,kY:-30},{b:10500,d:500,c:{x:125.00,t:-125.00}},{b:11000,d:500,c:{x:-125.00,t:125.00}}],
              [{b:0,d:600,x:535,e:{x:27}}],
              [{b:-1,d:1,o:-1},{b:0,d:600,o:1,e:{o:5}}],
              [{b:-1,d:1,c:{x:250.0,t:-250.0}},{b:0,d:800,c:{x:-250.0,t:250.0},e:{c:{x:7,t:7}}}],
              [{b:-1,d:1,o:-1},{b:0,d:600,x:-570,o:1,e:{x:6}}],
              [{b:-1,d:1,o:-1,r:-180},{b:0,d:800,o:1,r:180,e:{r:7}}],
              [{b:0,d:1000,y:80,e:{y:24}},{b:1000,d:1100,x:570,y:170,o:-1,r:30,sX:9,sY:9,e:{x:2,y:6,r:1,sX:5,sY:5}}],
              [{b:2000,d:600,rY:30}],
              [{b:0,d:500,x:-105},{b:500,d:500,x:230},{b:1000,d:500,y:-120},{b:1500,d:500,x:-70,y:120},{b:2600,d:500,y:-80},{b:3100,d:900,y:160,e:{y:24}}],
              [{b:0,d:1000,o:-0.4,rX:2,rY:1},{b:1000,d:1000,rY:1},{b:2000,d:1000,rX:-1},{b:3000,d:1000,rY:-1},{b:4000,d:1000,o:0.4,rX:-1,rY:-1}]
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $Idle: 2000,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions,
                $Breaks: [
                  [{d:2000,b:1000}]
                ]
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 980;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
		<link href="https://fonts.googleapis.com/css?family=Oswald:200,300,regular,500,600,700&subset=latin-ext,vietnamese,latin,cyrillic" rel="stylesheet" type="text/css" />
		    <style>
		        /*jssor slider loading skin spin css*/
		        .jssorl-009-spin img {
		            animation-name: jssorl-009-spin;
		            animation-duration: 1.6s;
		            animation-iteration-count: infinite;
		            animation-timing-function: linear;
		        }

		        @keyframes jssorl-009-spin {
		            from { transform: rotate(0deg); }
		            to { transform: rotate(360deg); }
		        }

		        /*jssor slider bullet skin 052 css*/
		        .jssorb052 .i {position:absolute;cursor:pointer;}
		        .jssorb052 .i .b {fill:#000;fill-opacity:0.3;}
		        .jssorb052 .i:hover .b {fill-opacity:.7;}
		        .jssorb052 .iav .b {fill-opacity: 1;}
		        .jssorb052 .i.idn {opacity:.3;}

		        /*jssor slider arrow skin 053 css*/
		        .jssora053 {display:block;position:absolute;cursor:pointer;}
		        .jssora053 .a {fill:none;stroke:#fff;stroke-width:640;stroke-miterlimit:10;}
		        .jssora053:hover {opacity:.8;}
		        .jssora053.jssora053dn {opacity:.5;}
		        .jssora053.jssora053ds {opacity:.3;pointer-events:none;}
		    </style>
</head>
<body class="homepage">
		<div id="tooplate_header">
<img src="images/ruetlogo.png" alt="">
<h4><i>Heaven's Light is Our Guide</i></h4>
<a href="#"><h3>Rajshahi University of Engineering &amp Technology</h3></a>
	    </div>
<div id="tooplate_wrapper">
    <div id="tooplate_menu">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="About.php">About</a></li>
            <li><a href="notice.php"class="current">News</a></li>
            <li class="last"><a href="http://www.ruet.ac.bd/">Contact</a></li>
        </ul>

        <div class="cleaner"></div>
    </div> <!-- end of tooplate_menu -->

		<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
            <div data-p="170.00">
                <img data-u="image" src="img/ruetgate.jpg" />
                <div data-u="caption" data-t="0" style="position:absolute;top:320px;left:30px;width:500px;height:40px;background-color:rgba(255,188,5,0.8);font-family:Oswald,sans-serif;font-size:32px;font-weight:200;line-height:1.2;text-align:center;">RUET Main Gate.</div>
            </div>
            <div data-p="170.00">
                <img data-u="image" src="img/ruetcampus.jpeg" />
                <div data-u="caption" data-t="1" style="position:absolute;top:-50px;left:125px;width:500px;height:40px;background-color:rgba(255,188,5,0.8);font-family:Oswald,sans-serif;font-size:32px;font-weight:200;line-height:1.2;text-align:center;">RUET Campus</div>
            </div>
            <div data-p="170.00">
                <img data-u="image" src="img/administrative.jpg" />
                <div data-u="caption" data-t="2" style="position:absolute;top:30px;left:-505px;width:500px;height:40px;background-color:rgba(255,188,5,0.8);font-family:Oswald,sans-serif;font-size:32px;font-weight:200;line-height:1.2;text-align:center;">RUET Administrative Building</div>
            </div>
            <div data-p="170.00">
                <img data-u="image" src="img/academic1.jpg" />
                <div data-u="caption" data-t="3" style="position:absolute;top:30px;left:30px;width:500px;height:40px;background-color:rgba(255,188,5,0.8);font-family:Oswald,sans-serif;font-size:32px;font-weight:200;line-height:1.2;text-align:center;">RUET Academic Building-1</div>
            </div>
            <div data-p="170.00">
                <img data-u="image" src="img/academic2.jpeg" />
                <div data-u="caption" data-t="4" style="position:absolute;top:30px;left:30px;width:500px;height:40px;background-color:rgba(255,188,5,0.8);font-family:Oswald,sans-serif;font-size:32px;font-weight:200;line-height:1.2;text-align:center;">RUET Academic Building-2</div>
            </div>
            <div data-p="170.00">
                <img data-u="image" src="img/academic3.jpg" />
                <div data-u="caption" data-t="5" style="position:absolute;top:30px;left:600px;width:500px;height:40px;background-color:rgba(255,188,5,0.8);font-family:Oswald,sans-serif;font-size:32px;font-weight:200;line-height:1.2;text-align:center;">RUET Academic Building-3</div>
            </div>
            <div data-p="170.00">
                <img data-u="image" src="img/ruetlibrary.jpg" />
                <div data-u="caption" data-t="6" style="position:absolute;top:30px;left:30px;width:500px;height:40px;background-color:rgba(255,188,5,0.8);font-family:Oswald,sans-serif;font-size:32px;font-weight:200;line-height:1.2;text-align:center;">RUET Central Library</div>
            </div>
            <div data-b="0" data-p="170.00">
                <img data-u="image" src="img/ruetguest.jpeg" />
                <div data-u="caption" data-t="7" style="position:absolute;top:-50px;left:30px;width:500px;height:40px;background-color:rgba(255,188,5,0.8);font-family:Oswald,sans-serif;font-size:32px;font-weight:200;line-height:1.2;text-align:center;">RUET Guest House</div>
            </div>
            <div data-p="170.00">
                <img data-u="image" src="img/ruetcampus2.jpeg" />
                <div data-u="caption" data-t="8" style="position:absolute;top:25px;left:150px;width:250px;height:250px;background-color:rgba(40,177,255,0.6);overflow:hidden;">
                    <div data-u="caption" data-t="9" style="position:absolute;top:100px;left:25px;width:200px;height:50px;font-family:Oswald,sans-serif;font-size:24px;font-weight:200;line-height:2.08;">RUET Green Campus</div>
                </div>
            </div>
            <div data-p="170.00">
                <img data-u="image" src="img/ruetminar.jpeg" />
                <div data-u="caption" data-t="10" style="position:absolute;top:25px;left:100px;width:300px;height:60px;background-color:rgba(255,188,5,0.8);font-family:Oswald,sans-serif;font-size:24px;font-weight:200;line-height:1.25;padding:15px 15px 15px 15px;box-sizing:border-box;">RUET Shahid Minar.
                </div>
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb052" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora053" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora053" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
       <div class="mar">
				 <marquee direction="left" onmouseover="this.stop();" onmouseout="this.start();">
																 <p><a href="#"><span style="text-decoration: none;font-size: 20px;color: #ffff00;"><strong><span class="glyphicon glyphicon-th-large"><span style="font-family: 'Open Sans','Helvetica Neue',Helvetica,'Noto Sans Bengali',Arial,sans-serif;"><span style="color:#338A7B">Prof. Dr. Rafiqul Islam Sheikh has joined as Vice-Chancellor at RUET.&nbsp;</span></span></span></strong></span>
																	 <span style="text-decoration: none;font-size: 20px; color: #338A7B;"><strong><span class="glyphicon glyphicon-th-large"><span style="font-family: 'Open Sans','Helvetica Neue',Helvetica,'Noto Sans Bengali',Arial,sans-serif;"><span style="color: #338A7B;"> All kinds of Academic Activities will be postponed on the occasion of Eid-Ul-Azha from 18-26 August. </span></span></span></strong></span>
																	 <span style="text-decoration: none;font-size: 20px; color: #ffff00;"><strong><span class="glyphicon glyphicon-th-large"><span style="font-family: 'Open Sans','Helvetica Neue',Helvetica,'Noto Sans Bengali',Arial,sans-serif;"><span style="color:#338A7B;"> Postgraduate Admission Notice 2017-2018. </span></span></span></strong></span>
																 </a></p>

				 </marquee>
       </div>
    <div id="tooplate_main">

    <div class="col_w960 col_w960_last">
        <h2>Notice Board</h2>
        <hr>
        <?php
        while($row=mysqli_fetch_array($ss))
        {
          echo "$row[SL] $row[about]<br><a href='$row[path]'>Download</a><br>";
        }
         ?>

      </div>

    	<div class="col_w960 col_w960_last">
        	<h2>Facility</h2>
          <hr>
            <div class="lp_box">
                <h6>Medical Center</h6>
                <a href="#"><img style="height:100px;width:100;" src="images/medical.jpg" alt="Medical Center" /></a>
                <p>Service Time :<br>Saturday-Thursday: 07:30AM to 10:00PM, Lunch Break: 1:30PM to 3:00PM.<br>Friday: Off Day.</p>

                    <div class="cleaner"></div>
        	</div>

            <div class="lp_box">
                <h6>Central Mosque</h6>
                <a href="#"><img style="height:100px;width:100;" src="images/mosque.jpg" alt="Central Mosque" /></a>
              	<p> It is a compact building with limited built-in facilities to provide teaching aides such as reading facility, borrowing of books, journals etc. to the students and teachers of RUET.</p>

                    <div class="cleaner"></div>
        	</div>

			<div class="lp_box lp_box_last">
                <h6>Gymnasium</h6>
                <a href="#"><img style="height:100px;width:50;" src="images/gymnesium.jpg" alt="Gymnasium" /></a>
				<p>The athletic club of the university provides multi-purpose sports facilities to the students to acquire physical fitness indispensable for a healthy mind and body.</p>

                <div class="cleaner"></div>
            </div>

            <div class="cleaner"></div>
        </div>

        <div class="cleaner"></div>
    </div> <!-- end of main -->

</div> <!-- end of wrapper -->

<div id="tooplate_cr_wrapper">
	<div id="tooplate_cr">
	<p>Copyright &copy; 2018 Rajshahi University of Engineering &amp Technology. All rights reserved. Designed By: <a href="https://www.facebook.com/mdhazrath.ali.9">HAZRATH</a>.</p>

    </div> <!-- end of footer wrapper -->
</div> <!-- end of footer -->

</body>
</html>
