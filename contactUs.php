<?php ob_start(); ?>
<?php include "includes/db.php"; ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>My Proparty - Contact Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Contact, Complaints, Assistance, Support">
    <meta name="description" content="Contact us for Complaints, Assistance & Support 07038544534    07083242888    support@myproparty.com.ng">
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
fbq('track', 'Contact');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=210495758325985&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
  </head>
  <body>
<?php include "includes/topbar.php"; ?>    
<?php include "includes/navigation.php"; ?>

<section class="ftco-section testimony-section bg-light">
<!--    	<div class="overlay"></div>-->
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
            <h2>Contact</h2>
<!--            <span class="subheading" style="color:red;">Note: Information provided here are confidential </span>-->
            <br>
  <?php 

if(isset($_POST['submit'])){
       
        $to = "support@myproparty.com.ng";
        $subject = wordwrap($_POST['subject'],70);
        $body = $_POST['body'];
        $header = "From: " . $_POST['email'];
        mail($to,$subject,$body);
}

?>
            
            <form role="form" action="" method="post" id="" autocomplete="off">
                       
                        <div class="form-group">
                            <label for="username" class="sr-only">Your Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter Your Email" required>
                        </div>
                         <div class="form-group">
                            <label for="subject" class="sr-only">Subject</label>
                            <input type="text" name="subject" id="subject" class="form-control" placeholder="Enter Your Subject" required>
                        </div>
<!--
                        <div class="form-group">
                            <label for="phone number" class="sr-only">Phone Number</label>
                            <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter Your Phone Number" required maxlength="11">
                        </div>
-->
                         <div class="form-group">
                            <textarea class="form-control" name="body" id="body" cols="50" rows="10" placeholder="Enter Your Message Here" required></textarea>
                        </div>
                
                        <input type="submit" name="submit" id="btn-login" class="btn btn-success btn-lg btn-block" value="Submit">
                    </form>
                    <br>
                    <ul class="ftco-footer-social p-0"> 
		              <li class="ftco-animate">Contact us for Complaints, Assistance &amp; Support</li>
		            </ul>
              <div class="row justify-content-center">
                    <ul class="ftco-footer-social p-0"> 
		              <li class="ftco-animate" style="color:green;"><i class="fa fa-phone" aria-hidden="true"> </i> 07038544534 &nbsp; <i class="fa fa-whatsapp" aria-hidden="true"></i> 07083242888 &nbsp; <i class="fa fa-envelope-o" aria-hidden="true"></i>  support@myproparty.com.ng</li>
		            </ul>
  </div>
          </div>
        </div>

      </div>
    </section>

<?php include "includes/footer.php";?>