<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Home</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="Twitter Boostrap/bootstrap 3/css/bootstrap.min.css" />
<script src="Twitter Boostrap/jquery/jquery-3.3.1.min.js"></script>
<script src="Twitter Boostrap/bootstrap 3/js/bootstrap.min.js"></script>
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
.thumbnail {
    padding: 0 0 15px 0;
    border:solid none 1px;
    border-radius: 0;
	font-family:papyrus;
	transition: box-shadow 0.5s; 
}

.thumbnail a:hover {
	background-color:transparent;
	box-shadow: 5px 0px 40px rgba(0,0,0, .2);
	transform:scale(1.05);
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

@media (max-width:600px) {
	#icon {
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

<body>
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
                	<li class="active"><a href="homepage.php">Home</a></li>
                    <li><a href="cart.php">Cart</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="login_php/login_here.php">Login</a></li>
                </ul>
            </div>
     	</div>
    </nav>
    
	
        
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <div class="carousel-inner" role="listbox">
     </ol>
     <div class="carousel-inner" role="listbox">
        	<div class="item active">
            <img src="carousel_01.jpg" width="100%" height="400">
            </div> <!--End Active-->
            <div class="item">
            <img src="carousel_02.png" width="100%" height="400">
            </div>
            <div class="item">
            <img src="carousel_03.png" width="100%" height="400">
            </div>
        </div>
        <!--Start Slider Controls-->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
	</div> <!--End Slider-->
	
    <div id="category" class="container text-center">
    	<img src="buttons/bbgg_fc.png" width="100%">
        <div class="row slideanim">
        	<div class="col-sm-4">
            <a class="thumbnail" href="cat_NYfave.php"><img src="buttons/NYfavorite.png"></a>
            </div>
            <div class="col-sm-4">
            <a class="thumbnail" href="cat_desserts.php"><img src="buttons/desserts_btn.png"></a>
            </div>
            <div class="col-sm-4">
            <a class="thumbnail" href="cat_beverages.php"><img src="buttons/beverages_btn.png"></a>
            </div>
        </div>
    </div>


    
    <div class="container alert-danger slideanim">
    	<div class="row">
        	<div class="col-md-6">
            <h2>Our Story</h2>
            <p>New York-themed specialty cafe, Flogelind's Cookies, offers a variety of desserts on their menu, including cookies of 13 different flavors, ranging from the basic favorites, to the chef's specials, which boasts of a rich fusion of ingredients. We have the large bakery-sized cookies, as well as bite-sized ones with full-sized flavors. Our fresh from the oven cookies are baked with love, and made out of our passion for satisfying palates, bringing in happiness in a handful to our customers.</p>
            <p>Let it be known that aside from the cookies we sell, we also have other baked goodies such as muffins, cupcakes, and brownies in our menu. To add to that, we also offer New York favorites such as waffles, pasta dishes, NY burgers and NY hotdog sandwiches. Hot and iced blended beverages, coffee, frappes, and milkshakes are also available in our menu, among other items.</p>
            <p>What makes our patron customers visit us again is the fact that aside from the satisfaction that they get from our products, they also get the most bang of their buck, given our generous serving of our food items.</p>
            <p>So please come by and visit Flogelind’s Cookies in Silang, Cavite, and experience for yourself a wonderful affair you’re sure to remember. Try out all the products in our menu and have a taste of New York in every bite.</p>
            </div>
            <div class="col-md-6">
            <br />
            <br />
            
            <img src="Flogelind's Cookies(images)/home_pic.png" class="img-responsive">
            </div>
        </div>
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
