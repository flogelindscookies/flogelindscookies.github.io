<?php

// Set email variables
$email_to = 'mrrynngrvllooo@gmail.com';
$email_subject = 'Form submission';

// Set required fields
$required_fields = array('fullname','email','comment');

// set error messages
$error_messages = array(
	'fullname' => 'Please enter a Name to proceed.',
	'email' => 'Please enter a valid Email Address to continue.',
	'comment' => 'Please enter your Message to continue.'
);

// Set form status
$form_complete = FALSE;

// configure validation array
$validation = array();

// check form submittal
if(!empty($_POST)) {
	// Sanitise POST array
	foreach($_POST as $key => $value) $_POST[$key] = remove_email_injection(trim($value));
	
	// Loop into required fields and make sure they match our needs
	foreach($required_fields as $field) {		
		// the field has been submitted?
		if(!array_key_exists($field, $_POST)) array_push($validation, $field);
		
		// check there is information in the field?
		if($_POST[$field] == '') array_push($validation, $field);
		
		// validate the email address supplied
		if($field == 'email') if(!validate_email_address($_POST[$field])) array_push($validation, $field);
	}
	
	// basic validation result
	if(count($validation) == 0) {
		// Prepare our content string
		$email_content = 'New Website Comment: ' . "\n\n";
		
		// simple email content
		foreach($_POST as $key => $value) {
			if($key != 'submit') $email_content .= $key . ': ' . $value . "\n";
		}
		
		// if validation passed ok then send the email
		mail($email_to, $email_subject, $email_content);
		
		// Update form switch
		$form_complete = TRUE;
	}
}

function validate_email_address($email = FALSE) {
	return (preg_match('/^[^@\s]+@([-a-z0-9]+\.)+[a-z]{2,}$/i', $email))? TRUE : FALSE;
}

function remove_email_injection($field = FALSE) {
   return (str_ireplace(array("\r", "\n", "%0a", "%0d", "Content-Type:", "bcc:","to:","cc:"), '', $field));
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Contact Form</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="contact/css/contactform.css" rel="stylesheet" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="Twitter Boostrap/bootstrap 3/css/bootstrap.min.css" />
	<script src="Twitter Boostrap/jquery/jquery-3.3.1.min.js"></script>
	<script src="Twitter Boostrap/bootstrap 3/js/bootstrap.min.js"></script>
    
    
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/mootools/1.3.0/mootools-yui-compressed.js"></script>
	<script type="text/javascript" src="contact/validation/validation.js"></script>  
	<script type="text/javascript">
var nameError = '<?php echo $error_messages['fullname']; ?>';
		var emailError = '<?php echo $error_messages['email']; ?>';
		var commentError = '<?php echo $error_messages['comment']; ?>';
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
    </script>


<style>
#myCarousel {
	margin-top:80px;
}
.carousel-indicators li {
      border-color:#F90F8A;
}
.carousel-indicators li.active {
      background-color:#F90F8A;
}
.navbar {
	margin-bottom:0;
	border-radius:0;
	background-color:#175F73;
	color:#FFF;
	padding:1% 0;
	font-size:1.2em;
	border:0;
	font-family:"century Gothic";
}
.navbar-brand {
	float:left;
	min-height:55px;
	padding:0 15px 5px;	
}
.navbar-inverse .navbar-nav .active a, .navbar-inverse .navbar-nav .active a:focus, .navbar-inverse .navbar-nav .active a:hover {
	color:#FFF;
	background-color:#F9F;
	border-radius:50px;
}
.navbar-inverse .navbar-nav li a {
	color:#D5D5D5;
}	

.container {
	margin:4% auto;
	padding:50px;
	font-family:"century Gothic";
}
p {
	line-height:2;
	text-align:justify;

}
#icon {
	max-width:800px;
	margin:1% auto;
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
}
.button a:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }


footer {
	width:100%;
	background-color:#175F73;
	padding:2%;
	color:#FFF;
	font-family:"century Gothic";
}

.btnconnect img {
	padding:20px;
	height:90px;
	width:90px;
}

@media (max-width:200px) {
	#form {
		max-width:150px;
	}
}


<!--Slide Animation-->
.slideanim {visibility:hidden;}
.slide {
    /* The name of the animation */
    animation-name: slide;
    -webkit-animation-name: slide; 
    /* The duration of the animation */
    animation-duration: 1s; 
    -webkit-animation-duration: 1s;
    /* Make the element visible */
    visibility: visible; 
}

/* Go from 0% to 100% opacity (see-through) and specify the percentage from when to slide in the element along the Y-axis */
@keyframes slide {
    0% {
        opacity: 0;
        -webkit-transform: translateY(70%);
    } 
    100% {
        opacity: 1;
        -webkit-transform: translateY(0%);
    } 
}
@-webkit-keyframes slide {
    0% {
        opacity: 0;
        -webkit-transform: translateY(70%);
    } 
    100% {
        opacity: 1;
        -webkit-transform: translateY(0%);
    }
}
</style>
</head>

<body onload="MM_preloadImages('contact/images/x.png')">

<nav class="navbar navbar-inverse navbar-fixed-top">
    	<div class="container-fluid">
        	<div class="navbar-header">
            
            	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                	<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="homepage.php"><img src="Flogelind's Cookies(images)/logo_xs.png"></a>
                <a class="navbar-brand" href="homepage.php"><img src="Flogelind's Cookies(images)/logoTitle.png"></a>
                
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
            	<ul class="nav navbar-nav navbar-right">
                	<li><a href="homepage.php">Home</a></li>
                    <li><a href="cart.php">Cart</a></li>
                    <li class="active"><a href="contact.php">Contact Us</a></li>
                    <li><a href="login_php/login_here.php">Login</a></li>
                </ul>
            </div>
     	</div>
    </nav>











<div class="row">
        <div class="col-sm-5  slideanim" style="margin-top:115px; padding:20px; border:solid 1px #FCC5D2; border-top-right-radius:30px; border-bottom-right-radius:30px; background-color:#FCC5D2; font-family:'century Gothic';">
      	<p>Contact us and we'll get back to you within 24 hours.</p>
      	<p><span class="glyphicon glyphicon-map-marker"></span>182 J.P. Rizal St. Poblacion 5, Silang, Cavite</p>
      	<p><span class="glyphicon glyphicon-phone"></span>(046) 523 0125</p>
      	<p><span class="glyphicon glyphicon-envelope"></span>flogelinds@gmail.com</p>
      	<p>Free delivery for a minimum purchase of 500 pesos within Silang, Bayan.</p>
            <ul>
                <li>San Miguel 1</li>
                <li>San Miguel 2</li>
                <li>San Vicente 1</li>
                <li>San Vicente 2</li>
                <li>Tubuan 1</li>
                <li>Tubuan 2</li>
                <li>Tubuan 3</li>
                <li>Poblacion Brgy. 1</li>
                <li>Poblacion Brgy. 2</li>
                <li>Poblacion Brgy. 3</li>
                <li>Poblacion Brgy. 4</li>
                <li>Poblacion Brgy. 5</li>
                <li>Sabutan</li>
            </ul>   
    	</div>



<div class="col-sm-7 slideanim">
<div id="formWrap">
<h2>We Appreciate Your Feedback</h2>
<div id="form">
<?php if($form_complete === FALSE): ?>
<form action="contact.php" method="post" id="comments_form">
	<div class="row">
    <div class="label">Your name</div><!--end .label-->
    <div class="input">
    <input type="text" id="fullname" class="detail" name="fullname" value="<?php echo isset($_POST['fullname'])? $_POST['fullname'] : ''; ?>" /><?php if(in_array('fullname', $validation)): ?><span class="error"><?php echo $error_messages['fullname']; ?></span><?php endif; ?>

    </div><!--end .input-->
    <div class="context">e.g. John Smith or Jane Doe</div><!--end .context-->
    </div><!--end .row-->
    
    
    <div class="row">
    <div class="label">Your Email Address</div><!--end .label-->
    <div class="input">
    <input type="text" id="email" class="detail" name="email" value="<?php echo isset($_POST['email'])? $_POST['email'] : ''; ?>
" /><?php if(in_array('email', $validation)): ?><span class="error"><?php echo $error_messages['email']; ?></span><?php endif; ?>

    </div><!--end .input-->
    <div class="context">We will not share your email with anyone or spam you with messages either</div><!--end .context-->
    </div><!--end .row-->
    
    
    <div class="row">
    <div class="label">Your Message</div><!--end .label-->
    <div class="input2">
    <textarea id="comment" name="comment" class="mess"><?php echo isset($_POST['comment'])? $_POST['comment'] : ''; ?>
</textarea><?php if(in_array('comment', $validation)): ?><span class="error"><?php echo $error_messages['comment']; ?></span><?php endif; ?>

    </div><!--end .input-->
    </div><!--end .row-->

	<div class="submit">
    <input type="submit" id="submit" name="submit" value="Send Message" />
    </div><!--end submit-->
    
    </form>
    <?php else: ?>
<p style="font-size:35px; font-family:'century Gothic'; color:#255E67; margin-left:25px;">Thank you for your Message!</p>
<script type="text/javascript">
setTimeout('ourRedirect()', 1000)
function ourRedirect(){
	location.href='homepage.php'
}
</script>
<?php endif; ?>
    
    
</div><!--end #form-->
</div><!--end formWrap-->
</div><!--end content-->

</div>



    <footer class="container-fluid text-center">
    	<div class="row">
        	<div class="col-sm-4">
            	<h3>Contact Us</h3>
                <br>
                <h5>182 J.P. Rizal St. Poblacion 5, Silang, Cavite</h5>
                <h5>(046) 523 0125</h5>
                <br>
            </div>
            <div class="col-sm-4">
            	<h3>Connect</h3>
            	<a href="www.facebook.com/flogelindscookie" class="btnconnect fb"><img src="buttons/btn_fb.png"></a>
                <a href="www.instagram.com/flogelinds_cookies" class="btnconnect"><img src="buttons/btn_ig.png"></a>
                <a href="flogelinds@gmail.com" class="btnconnect"><img src="buttons/btn_gm.png"></a>
            </div>
            <div class="col-sm-4">
            	<a href="homepage.php"><img src="Flogelind's Cookies(images)/logo.png" height="150" width="150" style="margin-top:10px"></a>
            </div>
        </div>
    </footer>


<!--JS for slide animation-->    
<script>
$(window).scroll(function() {
  $(".slideanim").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 600) {
      $(this).addClass("slide");
    }
  });
});
</script>
</body>
</html>
