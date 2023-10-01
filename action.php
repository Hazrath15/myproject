<?php
require_once("config.php");
$user_name=$_POST['user'];
$fullname=$_POST['fullname'];
$email=$_POST['inputEmail4'];
$password=$_POST['inputPassword42'];
if($_FILES['image']['name'])
{
$file=$_FILES['image']['name'];
$path="image/".$file;
$tmp=$_FILES['image']['tmp_name'];
move_uploaded_file($tmp,$path);
//echo "$path";
}
else {
  echo "not inserted";
}
$r_password=sha1($password);
$query="insert into info values('$user_name','$fullname','$email','$r_password','$path')";
$send=mysqli_query($connection,$query);
if ($send) {
  //echo "inserted";
  require 'mail/PHPMailerAutoload.php';
       require_once('mail/class.phpmailer.php');





         $mail = new PHPMailer;

        //$mail->SMTPDebug = 2;                               // Enable verbose debug output
         $mail->SMTPOptions = array(
                  'ssl' => array(
                 'verify_peer' => false,
                 'verify_peer_name' => false,
                 'allow_self_signed' => true
          )
         );

         $mail->isSMTP();                                      // Set mailer to use SMTP
         $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
         $mail->SMTPAuth = true;                               // Enable SMTP authentication
         $mail->Username = 'alihazrath85@gmail.com';                 // SMTP username
         $ms=str_rot13('hygvzngrora');
         $mail->Password = '1013114280';                           // SMTP password
         $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
         $mail->Port = 587;                                    // TCP port to connect to


             // Add a recipient
         //$mail->addAddress('ellen@example.com');               // Name is optional
         //$mail->addReplyTo('info@example.com', 'Information');
         //$mail->addCC('cc@example.com');
         //$mail->addBCC('bcc@example.com');

         //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
         //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
         //$mail->isHTML(true);                                  // Set email format to HTML

         //$mail->Subject = 'RUET OJ Contest Alert Test';
         //$mail->Body    = 'This is the Test Message <b>in bold!</b>';
         //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';





         $mail->setFrom('alihazrath85@gmail.com', 'RUET');




            //echo "$em";
            $mail->isHTML(true);

            $mail->addAddress($email,'User');
            $mail->Subject = 'ID Verification';
            $mail->Body    = 'Hi '.$fullname.' , Thank You For Your Registration.<br> Your UserName : '.$user_name.'<br> Password : '.$password.'<br>To Verify please click here:<br><a href="localhost/project2/confirm.php?email=$email">Verify Your Account</a>';
             $mail->AltBody ='Hi '.$fullname.' , Thank You For Your Registration.<br> Your UserName : '.$user_name.'<br> Password : '.$password.'<br>';






          if(!$mail->send()) {
             echo 'Message could not be sent.';
             echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
             echo 'Message has been sent';
            }
            $mail->ClearAddresses();

 //header("Location:Signin.php");
 //echo "Registration successfully";

}
else {
 //echo "not inserted";
}

 ?>
