<?php include ('server.php');?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User registration system using PHP and MySQL</title>
<link rel="stylesheet" type="text/css" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="../Twitter Boostrap/bootstrap 3/css/bootstrap.min.css">
<script src="../Twitter Boostrap/jquery/jquery-3.3.1.min.js"></script>
<script src="../Twitter Boostrap/bootstrap 3/js/bootstrap.min.js"></script>
<style>
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

</style>
</head>

<body>

	<nav class="navbar navbar-inverse navbar-fixed-top">
    	<div class="container-fluid">
        	<div class="navbar-header">
            
            	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                	<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../homepage.php"><img src="../Flogelind's Cookies(images)/logo_xs.png"></a>
                <a class="navbar-brand" href="../homepage.php"><img src="../Flogelind's Cookies(images)/logoTitle.png"></a>
                
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
            	<ul class="nav navbar-nav navbar-right">
                	<li><a href="../homepage.php">Home</a></li>
                    <li><a href="../cart.php">Cart</a></li>
                    <li><a href="../contact.php">Contact Us</a></li>
                    <li class="active"><a href="login_here.php">Login</a></li>
                </ul>
            </div>
     	</div>
    </nav>
    
    <br /><br /><br /><br />
    

	<div class="header">
    	<h2>Login</h2>
    </div> 
    
    <form method="post" action="login_here.php">
      <!--display validation errors here-->
      <?php include('errors.php')?>
      <div class="input-group">
      	<label>Username</label>
        <input type="text" name="username">
      </div>
      <div class="input-group">
      	<label>Password</label>
        <input type="password" name="password">
      </div>
      <div class="input-group">
      	<button type="submit" name="login" class="btn">Login</button>
      </div>
      <p>Not yet a member? <a href="registration.php">Sign up</a></p>
    </form>
    
    
    <br />
    
    
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
            	<a href="www.facebook.com/flogelindscookie" class="btnconnect fb"><img src="../buttons/btn_fb.png"></a>
                <a href="www.instagram.com/flogelinds_cookies" class="btnconnect"><img src="../buttons/btn_ig.png"></a>
                <a href="flogelinds@gmail.com" class="btnconnect"><img src="../buttons/btn_gm.png"></a>
            </div>
            <div class="col-sm-4">
            	<a href="../homepage.php"><img src="../Flogelind's Cookies(images)/logo.png" height="150" width="150" style="margin-top:10px"></a>
            </div>
        </div>
    </footer>    
    
    
</body>
</html>
