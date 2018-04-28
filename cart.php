

 <?php   
 session_start();  
 $connect = mysqli_connect("localhost", "root", "123", "flogelinds_cookiesdb");

 if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["id"],  
                     'item_p_name'               =>     $_POST["hidden_p_name"],  
                     'item_price'          =>     $_POST["hidden_price"], 
                     'item_quantity'          =>     $_POST["quantity"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="cart.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id"],  
                'item_p_name'               =>     $_POST["hidden_p_name"],  
                'item_price'          =>     $_POST["hidden_price"], 
                'item_quantity'          =>     $_POST["quantity"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="cart.php"</script>';  
                }  
           }  
      }  
 }   
 ?>  
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Cart</title>
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
                	<li><a href="homepage.php">Home</a></li>
                    <li class="active"><a href="cart.php">Cart</a></li>
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
        <span class="sr-only">Previous</span>
        </a>
	</div> <!--End Slider-->        
           



<!--Start of codes for cart-->
                <div style="clear:both"></div>  
                <br />  
                 
                <div class="table-responsive slideanim" style="margin:50px; font-family:'century Gothic'">  
                <h3>Order Details</h3> 
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="40%">Item Name</th>  
                               <th width="10%">Quantity</th>  
                               <th width="20%">Price</th>  
                               <th width="15%">Total</th>  
                               <th width="5%">Action</th>  
                          </tr>  
                          <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $values["item_p_name"]; ?></td>  
                               <td><?php echo $values["item_quantity"]; ?></td>  
                               <td>Php <?php echo $values["item_price"]; ?></td>  
                               <td>Php <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>  
                               <td><a href="cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>  
                          </tr>  
                          <?php  
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Total</td>  
                               <td align="right">Php <?php echo number_format($total, 2); ?></td>  
                               <td></td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
        
  
  <div class="container-fluid text-center">
  <div class="row">
  	<div class="col-sm-6">
    <button type="button" class="btn btn-info btn-lg btn-block"><a href="homepage.php" style="color:white">Continue Ordering</a></button>
    </div>
    <div class="col-sm-6">
    <button type="button" class="btn btn-info btn-lg btn-block">
    <a href="login_php/registration.php" style="color:white">Checkout</a></button>
    </div>
    <br /><br /><br /><br />
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
