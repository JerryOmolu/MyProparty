<?php ob_start(); ?>
<?php include "includes/db.php"; ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>My Proparty - Agent Sign Up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="facebook-domain-verification" content="bwoolgh9u96y61joozxd18oznbqciz" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
    
<!--    Login Css-->
   <link rel="stylesheet" href="css/login_styles.css"> 
<!--    Favicons-->
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="icon" href="images/favicon.ico">


<!--Facebook Pixel-->
<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '157666373827947');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=157666373827947&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->

<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '210495758325985');
fbq('track', 'PageView');
fbq('track', 'Lead');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=210495758325985&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
  </head>
  <body>
<?php include "includes/topbar.php"; ?>    
<?php include "includes/navigation.php"; ?>
<?php include "includes/functions.php"; ?>

<section class="ftco-section testimony-section bg-light" style="color:green;">
<!--    	<div class="overlay"></div>-->
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
            <h2 style="color:green;">Agent Sign Up Form</h2></div>
        </div>
          <hr>
          <h4 align="justify"><b>This is for those who want to take their involvement with My Proparty to the next level. Small Business Owners, Office Managers, and Cyber Cafe Owners can apply as Agents of My Proparty. Agents are like supervisors, overseeing a group of operators (Up to 20 operators) and ensuring all operations run smoothly. They can earn even more money and have a larger impact on their community, providing a vital service that truly makes a difference.  </b></h4><br>
         <h5 align="justify" style="color:blue;"><b> <a href="Information%20Guide.pdf" target="_blank">Click here to Read our Information Guide</a></b></h5>
          <hr>
          <br>
          <br>
 <?php 
session_start();
include 'includes/db.php';

		use PHPMailer\PHPMailer\PHPMailer;
		use PHPMailer\PHPMailer\SMTP;
		use PHPMailer\PHPMailer\Exception;

		require 'vendor/autoload.php';

		function sendemail_verify($fullname,$email,$verify_token){
		$mail = new PHPMailer(true);

		$mail->isSMTP(); 
		$mail->SMTPAuth   = true; 
		$mail->Host       = 'myproparty.com.ng'; 
		$mail->Username   = 'no-reply@myproparty.com.ng';                     //SMTP username
		$mail->Password   = 'emesomhi247';
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
		$mail->Port       = 465; 
		$mail->setFrom('no-reply@myproparty.com.ng', 'My Proparty');
		$mail->addAddress($email); 
		$mail->isHTML(true);
		$mail->Subject = 'Sign Up Confirmation Email from My Proparty';

		$email_template = "
        <!DOCTYPE html>
<html lang='en' xmlns='http://www.w3.org/1999/xhtml' xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office'>
<head>
    <meta charset='utf-8'> <!-- utf-8 works for most cases -->
    <meta name='viewport' content='width=device-width'> <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv='X-UA-Compatible' content='IE=edge'> <!-- Use the latest (edge) version of IE rendering engine -->
    <meta name='x-apple-disable-message-reformatting'>  <!-- Disable auto-scale in iOS 10 Mail entirely -->
    <title></title> <!-- The title tag shows in email notifications, like Android 4.4. -->

    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet'>

    <!-- CSS Reset : BEGIN -->
    <style>

        /* What it does: Remove spaces around the email design added by some email clients. */
        /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
        html,
body {
    margin: 0 auto !important;
    padding: 0 !important;
    height: 100% !important;
    width: 100% !important;
    background: #f1f1f1;
}

/* What it does: Stops email clients resizing small text. */
* {
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}

/* What it does: Centers email on Android 4.4 */
div[style*='margin: 16px 0'] {
    margin: 0 !important;
}

/* What it does: Stops Outlook from adding extra spacing to tables. */
table,
td {
    mso-table-lspace: 0pt !important;
    mso-table-rspace: 0pt !important;
}

/* What it does: Fixes webkit padding issue. */
table {
    border-spacing: 0 !important;
    border-collapse: collapse !important;
    table-layout: fixed !important;
    margin: 0 auto !important;
}

/* What it does: Uses a better rendering method when resizing images in IE. */
img {
    -ms-interpolation-mode:bicubic;
}

/* What it does: Prevents Windows 10 Mail from underlining links despite inline CSS. Styles for underlined links should be inline. */
a {
    text-decoration: none;
}

/* What it does: A work-around for email clients meddling in triggered links. */
*[x-apple-data-detectors],  /* iOS */
.unstyle-auto-detected-links *,
.aBn {
    border-bottom: 0 !important;
    cursor: default !important;
    color: inherit !important;
    text-decoration: none !important;
    font-size: inherit !important;
    font-family: inherit !important;
    font-weight: inherit !important;
    line-height: inherit !important;
}

/* What it does: Prevents Gmail from displaying a download button on large, non-linked images. */
.a6S {
    display: none !important;
    opacity: 0.01 !important;
}

/* What it does: Prevents Gmail from changing the text color in conversation threads. */
.im {
    color: inherit !important;
}

/* If the above doesn't work, add a .g-img class to any image in question. */
img.g-img + div {
    display: none !important;
}

/* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */
/* Create one of these media queries for each additional viewport size you'd like to fix */

/* iPhone 4, 4S, 5, 5S, 5C, and 5SE */
@media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
    u ~ div .email-container {
        min-width: 320px !important;
    }
}
/* iPhone 6, 6S, 7, 8, and X */
@media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
    u ~ div .email-container {
        min-width: 375px !important;
    }
}
/* iPhone 6+, 7+, and 8+ */
@media only screen and (min-device-width: 414px) {
    u ~ div .email-container {
        min-width: 414px !important;
    }
}

    </style>

    <!-- CSS Reset : END -->

    <!-- Progressive Enhancements : BEGIN -->
    <style>

	    .primary{
	background: #30e3ca;
}
.bg_white{
	background: #ffffff;
}
.bg_light{
	background: #fafafa;
}
.bg_black{
	background: #000000;
}
.bg_dark{
	background: rgba(0,0,0,.8);
}
.email-section{
	padding:2.5em;
}

/*BUTTON*/
.btn{
	padding: 10px 15px;
	display: inline-block;
}
.btn.btn-primary{
	border-radius: 5px;
	background: #30e3ca;
	color: #ffffff;
}
.btn.btn-white{
	border-radius: 5px;
	background: #ffffff;
	color: #000000;
}
.btn.btn-white-outline{
	border-radius: 5px;
	background: transparent;
	border: 1px solid #fff;
	color: #fff;
}
.btn.btn-black-outline{
	border-radius: 0px;
	background: transparent;
	border: 2px solid #000;
	color: #000;
	font-weight: 700;
}

h1,h2,h3,h4,h5,h6{
	font-family: 'Lato', sans-serif;
	color: #000000;
	margin-top: 0;
	font-weight: 400;
}

body{
	font-family: 'Lato', sans-serif;
	font-weight: 400;
	font-size: 15px;
	line-height: 1.8;
	color: rgba(0,0,0,.4);
}

a{
	color: #30e3ca;
}

table{
}
/*LOGO*/

.logo h1{
	margin: 0;
}
.logo h1 a{
	color: #30e3ca;
	font-size: 24px;
	font-weight: 700;
	font-family: 'Lato', sans-serif;
}

/*HERO*/
.hero{
	position: relative;
	z-index: 0;
}

.hero .text{
	color: rgba(0,0,0,.3);
}
.hero .text h2{
	color: #000;
	font-size: 40px;
	margin-bottom: 0;
	font-weight: 400;
	line-height: 1.4;
}
.hero .text h3{
	font-size: 24px;
	font-weight: 300;
}
.hero .text h2 span{
	font-weight: 600;
	color: #30e3ca;
}


/*HEADING SECTION*/
.heading-section{
}
.heading-section h2{
	color: #000000;
	font-size: 28px;
	margin-top: 0;
	line-height: 1.4;
	font-weight: 400;
}
.heading-section .subheading{
	margin-bottom: 20px !important;
	display: inline-block;
	font-size: 13px;
	text-transform: uppercase;
	letter-spacing: 2px;
	color: rgba(0,0,0,.4);
	position: relative;
}
.heading-section .subheading::after{
	position: absolute;
	left: 0;
	right: 0;
	bottom: -10px;
	content: '';
	width: 100%;
	height: 2px;
	background: #30e3ca;
	margin: 0 auto;
}

.heading-section-white{
	color: rgba(255,255,255,.8);
}
.heading-section-white h2{
	font-family: 
	line-height: 1;
	padding-bottom: 0;
}
.heading-section-white h2{
	color: #ffffff;
}
.heading-section-white .subheading{
	margin-bottom: 0;
	display: inline-block;
	font-size: 13px;
	text-transform: uppercase;
	letter-spacing: 2px;
	color: rgba(255,255,255,.4);
}


ul.social{
	padding: 0;
}
ul.social li{
	display: inline-block;
	margin-right: 10px;
}

/*FOOTER*/

.footer{
	border-top: 1px solid rgba(0,0,0,.05);
	color: rgba(0,0,0,.5);
}
.footer .heading{
	color: #000;
	font-size: 20px;
}
.footer ul{
	margin: 0;
	padding: 0;
}
.footer ul li{
	list-style: none;
	margin-bottom: 10px;
}
.footer ul li a{
	color: rgba(0,0,0,1);
}


@media screen and (max-width: 500px) {


}


    </style>


</head>

<body width='100%' style='margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f1f1f1;'>
	<center style='width: 100%; background-color: #f1f1f1;'>
    <div style='display: none; font-size: 1px;max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;'>
      &zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
    </div>
    <div style='max-width: 600px; margin: 0 auto;' class='email-container'>
    	<!-- BEGIN BODY -->
      <table align='center' role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%' style='margin: auto;'>
      	<tr>
          <td valign='top' class='bg_white' style='padding: 1em 2.5em 0 2.5em;'>
          	<table role='presentation' border='0' cellpadding='0' cellspacing='0' width='100%'>
          		<tr>
          			<td class='logo' style='text-align: center;'>
			            <h1><a href='#'>My Proparty e-Confirmation</a></h1>
			          </td>
          		</tr>
          	</table>
          </td>
	      </tr><!-- end tr -->
				<tr>
          <td valign='middle' class='hero bg_white' style='padding: 2em 0 4em 0;'>
            <table>
            	<tr>
            		<td>
            			<div class='text' style='padding: 0 2.5em; text-align: center;'>
            				<h2>Congratulations! $fullname </h2>
            				<h3>You have successfully signed up with My Proparty as an Agent. My Proparty Team will contact you soon via email or phone call for further directives. Thank You!</h3>
            			</div>
            		</td>
            	</tr>
            </table>
          </td>
	      </tr><!-- end tr -->
          <tr>
          <td valign='middle' class='hero bg_white' style='padding: 2em 0 4em 0;'>
            <table>
            	<tr>
            		<td>
            			<div class='text' style='padding: 0 2.5em; text-align: center;'>
            			
            				<h3>Cheers, My Proparty Team</h3>
            			</div>
            		</td>
            	</tr>
            </table>
          </td>
	      </tr><!-- end tr -->
      <!-- 1 Column Text + Button : END -->
      </table>

    </div>
  </center>
</body>
</html>
";
		$mail->Body    = $email_template;
		$mail->send();
		}
					
    if(isset($_POST['agent_signup'])){
        $title = mysqli_real_escape_string($connection,$_POST['title']);
        $fullname = mysqli_real_escape_string($connection,$_POST['fullname']);
        $gender = mysqli_real_escape_string($connection,$_POST['gender']);
        $date_of_birth = mysqli_real_escape_string($connection,$_POST['date_of_birth']);
        $phone = mysqli_real_escape_string($connection,$_POST['phone']);
        $email = mysqli_real_escape_string($connection,$_POST['email']);
        $state = mysqli_real_escape_string($connection,$_POST['state']);       
        $lga = mysqli_real_escape_string($connection,$_POST['lga']);       
        $state_of_interest =mysqli_real_escape_string($connection,$_POST['state_of_interest']); 
        $area = mysqli_real_escape_string($connection,$_POST['area']);       
        $city = mysqli_real_escape_string($connection,$_POST['city']);       
        $address = mysqli_real_escape_string($connection,$_POST['address']);       $verify_token = md5(rand());

		$errors = array();
        
        $a = "SELECT email FROM operator_signup WHERE email = '$email'LIMIT 1";
        $aa = mysqli_query($connection,$a);
        if(mysqli_num_rows($aa) > 0){
         $errors['a'] = "Email already exists for an Operator";   
        }
        
        $f = "SELECT phone FROM operator_signup WHERE phone = '$phone'LIMIT 1";
        $ff = mysqli_query($connection,$f);
        if(mysqli_num_rows($ff) > 0){
         $errors['f'] = "Phone Number already exists for an Operator";   
        }
        
        $a = "SELECT email FROM super_agent_signup WHERE email = '$email'LIMIT 1";
        $aa = mysqli_query($connection,$a);
        if(mysqli_num_rows($aa) > 0){
         $errors['m'] = "Email already exists for a Super Agent";   
        }
        
        $f = "SELECT phone FROM super_agent_signup WHERE phone = '$phone'LIMIT 1";
        $ff = mysqli_query($connection,$f);
        if(mysqli_num_rows($ff) > 0){
         $errors['t'] = "Phone Number already exists for a Super Agent";   
        }
        
    
        $e = "SELECT email FROM agent_signup	WHERE email = '$email' LIMIT 1";
        $ee = mysqli_query($connection,$e);
    
        if(empty($email)){
            $errors['e'] = "Email Cannot be Empty, Please Enter email address";
        }else if(mysqli_num_rows($ee) > 0){
            $errors['e'] = "Email already exists for another User";
        }
		
		$p = "SELECT phone FROM agent_signup WHERE phone = '$phone' LIMIT 1";
        $pp = mysqli_query($connection,$p);
    
        if(empty($phone)){
            $errors['p'] = "Phone Number Cannot be Empty, Please Enter a Phone Number";
        }else if(mysqli_num_rows($pp) > 0){
            $errors['p'] = "Phone Number Already Exists";
        }
						
		
		if(count($errors)==0 && !empty ($title) && !empty ($fullname) && !empty ($gender) && !empty ($date_of_birth) && !empty ($phone) && !empty ($email) && !empty ($state) && !empty ($lga) && !empty ($state_of_interest) && !empty ($area) && !empty ($city) && !empty ($address)){

	$query = "INSERT INTO agent_signup (title,fullname,gender,date_of_birth,phone,email,state,lga,state_of_interest,area,city,address,signup_date,verify_token)VALUES('{$title}','{$fullname}','{$gender}','{$date_of_birth}','{$phone}','{$email}','{$state}','{$lga}','{$state_of_interest}','{$area}','{$city}','{$address}',now(),'{$verify_token}')";
                        
    $operator_signup = mysqli_query($connection, $query);
	
		if($operator_signup){
			
			sendemail_verify("$fullname","$email","$verify_token");
			
            $_SESSION['head'] = "Thank You!";
            $_SESSION['status'] = "Your signup form is submitted successfully. Check your email '$email' for confirmation and further information";
            $_SESSION['status_code'] = "success";
            }
            else{
            $_SESSION['head'] = "Error!";
            $_SESSION['status'] = "Something Went Wrong";
            $_SESSION['status_code'] = "error";
            header('Location:serviceReview.php');
            }
     
                    }
					}
                ?>        
          
          
          
        
          
<form action="" enctype="multipart/form-data" class="row align-items-center justify-content-center" method="post">
  <div class="col-md-4 form-group">
      <label for="title"><b>Title</b></label>
      <select name='title' id='' class='form-control' value="<?php echo isset($_POST['title']) ? $_POST['title'] : '' ?>" required>
                            <option value=''>--Your Title--</option>
                            <option value='Mr'>Mr.</option>
                            <option value='Mrs'>Mrs.</option>
                            <option value='Miss'>Miss.</option>
                            <option value='Mr &amp; Mrs'>Mr. &amp; Mrs.</option>
                        </select>
    </div>  
     <div class="col-md-8 form-group">
      <label for="Your Name"><b>Your Name</b></label>
      <input type="text" name="fullname" placeholder="Your Full Name" id="fullname" class="form-control" value="<?php echo isset($_POST['fullname']) ? $_POST['fullname'] : '' ?>" autocomplete="off" required>
    </div> 
    <div class="col-md-6 form-group">
      <label for="gender"><b>Gender</b></label>
      <select name='gender' id='' class='form-control' required>
                            <option value=''>--Select Gender--</option>
                            <option value='Male'>Male</option>
                            <option value='Female'>Female</option>
                        </select>
    </div>  
     <div class="col-md-6 form-group">
      <label for="birth"><b>Date of Birth</b></label>
      <input type='date' name='date_of_birth' class='form-control' value="<?php echo isset($_POST['date_of_birth']) ? $_POST['date_of_birth'] : '' ?>" required>
    </div>
    <div class="col-md-6 form-group">
      <label for="phone"><b>Phone Number</b></label>
      <input type='text' name='phone' class='form-control' placeholder="Your Phone Number" autocomplete="off" maxlength="11" value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : '' ?>" required>
    <b><p class="text-danger"><?php if(isset($errors['p']))echo $errors['p']; ?></p></b>
    <b><p class="text-danger"><?php if(isset($errors['f']))echo $errors['f']; ?></p></b>
    <b><p class="text-danger"><?php if(isset($errors['t']))echo $errors['t']; ?></p></b>
    </div>
    <div class="col-md-6 form-group">
      <label for="email"><b>Email Address</b></label>
      <input type='email' name='email' class='form-control' placeholder="Your Email" autocomplete="off" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>" required>
    <b><p class="text-danger"><?php if(isset($errors['e']))echo $errors['e']; ?></p></b>
    <b><p class="text-danger"><?php if(isset($errors['a']))echo $errors['a']; ?></p></b>
    <b><p class="text-danger"><?php if(isset($errors['m']))echo $errors['m']; ?></p></b>
    </div>
    <div class="col-md-6 form-group">
      <label for="State"><b>State of Origin</b></label>
      <select onchange='toggleLGA(this);' name='state' id='state' class='form-control' value="<?php echo isset($_POST['state']) ? $_POST['state'] : '' ?>" required>
                            <option value='' selected='selected'>-Select State-</option>
                            <option value='Abia'>Abia</option>
                            <option value='Adamawa'>Adamawa</option>
                            <option value='AkwaIbom'>AkwaIbom</option>
                            <option value='Anambra'>Anambra</option>
                            <option value='Bauchi'>Bauchi</option>
                            <option value='Bayelsa'>Bayelsa</option>
                            <option value='Benue'>Benue</option>
                            <option value='Borno'>Borno</option>
                            <option value='Cross River'>Cross River</option>
                            <option value='Delta'>Delta</option>
                            <option value='Ebonyi'>Ebonyi</option>
                            <option value='Edo'>Edo</option>
                            <option value='Ekiti'>Ekiti</option>
                            <option value='Enugu'>Enugu</option>
                            <option value='FCT'>FCT</option>
                            <option value='Gombe'>Gombe</option>
                            <option value='Imo'>Imo</option>
                            <option value='Jigawa'>Jigawa</option>
                            <option value='Kaduna'>Kaduna</option>
                            <option value='Kano'>Kano</option>
                            <option value='Katsina'>Katsina</option>
                            <option value='Kebbi'>Kebbi</option>
                            <option value='Kogi'>Kogi</option>
                            <option value='Kwara'>Kwara</option>
                            <option value='Lagos'>Lagos</option>
                            <option value='Nasarawa'>Nasarawa</option>
                            <option value='Niger'>Niger</option>
                            <option value='Ogun'>Ogun</option>
                            <option value='Ondo'>Ondo</option>
                            <option value='Osun'>Osun</option>
                            <option value='Oyo'>Oyo</option>
                            <option value='Plateau'>Plateau</option>
                            <option value='Rivers'>Rivers</option>
                            <option value='Sokoto'>Sokoto</option>
                            <option value='Taraba'>Taraba</option>
                            <option value='Yobe'>Yobe</option>
                            <option value='Zamfara'>Zamafara</option>
                        </select>
    </div>
    <div class="col-md-6 form-group">
      <label for="lga"><b>LG of Origin</b></label>
      <select name='lga' id='lga' class='form-control select-lga' value="<?php echo isset($_POST['lga']) ? $_POST['lga'] : '' ?>" required>
                        </select>
    </div>
    <div class="col-md-6 form-group">
      <label for="lga"><b>State of Interest</b></label>
      <select  name='state_of_interest' class='form-control' value="<?php echo isset($_POST['state']) ? $_POST['state'] : '' ?>" required>
                            <option value='' selected='selected'>-Select State of Interest-</option>
                            <option value='Abia'>Abia</option>
                            <option value='Adamawa'>Adamawa</option>
                            <option value='AkwaIbom'>AkwaIbom</option>
                            <option value='Anambra'>Anambra</option>
                            <option value='Bauchi'>Bauchi</option>
                            <option value='Bayelsa'>Bayelsa</option>
                            <option value='Benue'>Benue</option>
                            <option value='Borno'>Borno</option>
                            <option value='Cross River'>Cross River</option>
                            <option value='Delta'>Delta</option>
                            <option value='Ebonyi'>Ebonyi</option>
                            <option value='Edo'>Edo</option>
                            <option value='Ekiti'>Ekiti</option>
                            <option value='Enugu'>Enugu</option>
                            <option value='FCT'>FCT</option>
                            <option value='Gombe'>Gombe</option>
                            <option value='Imo'>Imo</option>
                            <option value='Jigawa'>Jigawa</option>
                            <option value='Kaduna'>Kaduna</option>
                            <option value='Kano'>Kano</option>
                            <option value='Katsina'>Katsina</option>
                            <option value='Kebbi'>Kebbi</option>
                            <option value='Kogi'>Kogi</option>
                            <option value='Kwara'>Kwara</option>
                            <option value='Lagos'>Lagos</option>
                            <option value='Nasarawa'>Nasarawa</option>
                            <option value='Niger'>Niger</option>
                            <option value='Ogun'>Ogun</option>
                            <option value='Ondo'>Ondo</option>
                            <option value='Osun'>Osun</option>
                            <option value='Oyo'>Oyo</option>
                            <option value='Plateau'>Plateau</option>
                            <option value='Rivers'>Rivers</option>
                            <option value='Sokoto'>Sokoto</option>
                            <option value='Taraba'>Taraba</option>
                            <option value='Yobe'>Yobe</option>
                            <option value='Zamfara'>Zamafara</option>
                        </select>
    </div>
      <div class="col-md-6 form-group">
      <label for="area"><b>Area/Zone of Interest</b></label>
      <input type='text' name='area' class='form-control' placeholder="Your Area/Zone of Interest" autocomplete="off" value="<?php echo isset($_POST['area']) ? $_POST['area'] : '' ?>" required>
    </div>
    <div class="col-md-6 form-group">
      <label for="city"><b>City</b></label>
      <input type='text' name='city' class='form-control' placeholder="Your Current City" autocomplete="off" value="<?php echo isset($_POST['city']) ? $_POST['city'] : '' ?>" required>
    </div>
    <div class="col-md-6 form-group">
      <label for="address"><b>Contact Address</b></label>
      <input type='text' name='address' class='form-control' placeholder="Your Contact Address" value="<?php echo isset($_POST['address']) ? $_POST['address'] : '' ?>" required>
    </div>
    <br>
    <br>
    <br>
    <hr>
     <div class="col-md-6 form-group">
        <button type='submit'  name='agent_signup' class='btn btn-block btn-primary'>
                      Submit
         </button></div>
</form>
    </div>
    </section>

<?php include "includes/footer.php";?>