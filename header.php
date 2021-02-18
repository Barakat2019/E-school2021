<?php
define('SCRIPT_ROOT','http://localhost/E-SCHOOL/css/');
define('SCRIPT_ROOT1','http://localhost/E-SCHOOL/css/index/');

?>
<head>
   	   <!-- meta tag -->
   	     <meta charset="utf-8">
        <title>Educavo - Education HTML Template</title>
        <meta name="description" content="">
             <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel="apple-touch-icon" href="image/apple-touch-icon.png">
        <link rel="shortcut icon" type="image/x-icon" href="image/index/fav-orange.png">

         
         <?php 
            // Bootstrap v4.4.1 css 
            echo '<link rel="stylesheet" type="text/css" href="'.SCRIPT_ROOT.'bootstrap.min.css">';
            // animate css
            echo '<link rel="stylesheet" type="text/css" href="'.SCRIPT_ROOT1.'animate.css">';

            // owl.carousel css
            echo '<link rel="stylesheet" type="text/css" href="'.SCRIPT_ROOT1.'owl.carousel.css">';
           // slick css 
           echo '<link rel="stylesheet" type="text/css" href="'.SCRIPT_ROOT1.'slick.css">'; 
         
        

        // off canvas css 
        echo '<link rel="stylesheet" type="text/css" href="'.SCRIPT_ROOT1.'off-canvas.css">'; 
         echo '<link rel="stylesheet" type="text/css" href="'.SCRIPT_ROOT.'font-awesome.min.css">'; 
         echo '<link rel="stylesheet" type="text/css" href="'.SCRIPT_ROOT1.'all.css">'; 
        echo '<link rel="stylesheet" type="text/css" href="'.SCRIPT_ROOT1.'flaticon.css">'; 
     
         // magnific popup css
         echo '<link rel="stylesheet" type="text/css" href="'.SCRIPT_ROOT1.'magnific-popup.css">'; 
        //Main Menu css
         echo '<link rel="stylesheet" type="text/css" href="'.SCRIPT_ROOT1.'rsmenu-main.css">'; 

        

       // spacing css
       
        echo '<link rel="stylesheet" type="text/css" href="'.SCRIPT_ROOT1.'rs-spacing.css">';

         // style css 
         echo '<link rel="stylesheet" type="text/css" href="'.SCRIPT_ROOT1.'style.css">'; // This stylesheet dynamically changed from style.less 
        // responsive css -->
        echo '<link rel="stylesheet" type="text/css" href="'.SCRIPT_ROOT1.'responsive.css">';
        // bootstrap icon-->
        echo '<link rel="stylesheet" type="text/css" href="'.SCRIPT_ROOT1.'bootstrap-icons.css">';
        ?>
   </head>
<!--Full width header Start-->
<div class="full-width-header home8-style4 main-home">
        	 	<!--Header Start-->
        	 	<header id="rs-header" class="rs-header">
        	 		<!-- Menu Start -->
        	 		<div class="menu-area menu-sticky">
        	 			<div class="container">
        	 				<div class="row y-middle">
        	 					<div class="col-lg-2">
        	 						<div class="logo-cat-wrap">
        	 							 <div class="logo-part">
        	 							 	<a href="index.html">
        	 							 		<img class="normal-logo" src="image/index/lite-logo.png" alt="">
                                                <img class="sticky-logo" src="image/index/dark-logo.png" alt="">
        	 							 	</a>
        	 							 </div>
        	 						</div>
        	 					</div>
        	 					<div class="col-lg-8 text-right">
        	 						<div class="rs-menu-area">
        	 							<div class="main-menu">
        	 								<div class="mobile-menu">
        	 									<a class="rs-menu-toggle">
        	 										<i class="fa fa-bars"></i>
        	 									</a>
        	 								</div>
        	 								<nav class="rs-menu">
        	 									<ul class="nav-menu">
        	 										<li class="menu-item-has-children current-menu-item">
        	 											<a href="#">Home</a>
        	 											<ul class="sub-menu">
		        	 										  <li class="active"><a href="index.html">Home One</a> </li>
		                                                      <li><a href="index2.html">Home Two</a> </li>
		                                                      <li><a href="index3.html">Home Three</a> </li>
		                                                      
        	 											</ul>
        	 										</li>
        	 										<li class="menu-item-has-children">
                                                     <a href="#">About</a>
                                                     <ul class="sub-menu">
                                                         <li><a href="about.html">About One</a> </li>
                                                         <li><a href="about2.html">About Two</a> </li>
                                                     </ul>
                                                 </li>

                                                 <li class="menu-item-has-children">
                                                     <a href="#">Courses</a>
                                                     <ul class="sub-menu">
                                                         <li><a href="course.html">Courses One</a> </li>
                                                         <li><a href="course2.html">Courses Two</a> </li>
                                                         <li><a href="course3.html">Courses Three</a> </li>
                                                         <li><a href="course4.html">Courses Four</a> 
                                                         </li>
                                                         <li><a href="course5.html">Courses Five</a> </li>
                                                         <li><a href="course-single.html">Courses Single</a> </li>
                                                     </ul>
                                                 </li>

                                                 <li class="menu-item-has-children">
                                                 	<a href="#">Pages</a>
                                                 	<ul class="sub-menu">
                                                 		<li class="menu-item-has-children">
                                                             <a href="Pages/Student">Student</a>   
                                                         </li>
                                                         <li class="menu-item-has-children">
                                                         	<a href="Pages/Teacher">Teacher</a>
                                                         </li>
                                                         <li class="menu-item-has-children">
                                                         	<a href="">Parent</a>
                                                         </li>
                                                         <li class="menu-item-has-children">
                                                         	<a href="#">Driver</a>
                                                         </li>
                                                         <li class="menu-item-has-children">
                                                         	<a href="Admin.php">Manager</a>
                                                         </li>
                                                        
                                                         <li class="menu-item-has-children">
                                                             <a href="#">Others</a>
                                                             <ul class="sub-menu">
                                                                 <li><a href="faq.html">FAQ</a></li>
                                                                 <li><a href="error.html">404 Page</a></li>
                                                                 <li><a href="login.html">Login</a></li>
                                                                 <li><a href="register.html">Register</a></li>
                                                             </ul>
                                                         </li>
                                                 	</ul>
                                                 </li>
                                                 <li class="menu-item-has-children">
                                                 	<a href="#">Blog</a>
                                                 	 <ul class="sub-menu">
                                                 	 	<li><a href="blog.html">Blog</a></li>
                                                 	 	<li class="menu-item-has-children">
                                                 	 		<a href="#">Blog Sidebar</a>
                                                 	 		<ul class="sub-menu">
                                                                 <li><a href="blog-left.html">Blog Left Sidebar</a></li>
                                                                 <li><a href="blog-right.html">Blog Right Sidebar</a></li>
                                                             </ul>
                                                 	 	</li>
                                                 	 	<li class="menu-item-has-children">
                                                             <a href="#">Single Post</a>
                                                             <ul class="sub-menu">
                                                                 <li><a href="blog-post-left.html">Post Left Sidebar</a></li>
                                                                 <li><a href="blog-post-right.html">Post Right Sidebar</a></li>
                                                                 <li><a href="blog-single.html">Full Width Post</a></li>
                                                             </ul>
                                                         </li>
                                                 	 </ul>
                                                 </li>
                                                 <li class="menu-item-has-children">
                                                     <a href="#">Contact</a>
                                                     <ul class="sub-menu">
                                                        <li><a href="contact.html">Contact One</a> </li>
                                                        <li><a href="contact2.html">Contact Two</a> </li>
                                                        <li><a href="contact3.html">Contact Three</a> </li>
                                                        <li><a href="contact4.html">Contact Four</a> </li>
                                                     </ul>
                                                 </li>

        	 									</ul> <!-- //.nav-menu -->
        	 								</nav>
        	 							</div><!-- //.main-menu -->
        	 						</div>
        	 					</div>

        	 					 <div class="col-lg-2 text-right">
        	 					 	<div class="expand-btn-inner">
        	 					 		<ul>
        	 					 			<li>
        	 					 				<a class="hidden-xs rs-search" data-target=".search-modal" data-toggle="modal" href="#">
                                                  <i class="fas fa-search"></i>
                                                </a>
        	 					 			</li>
        	 					 			<li class="user-icon cart-inner no-border mini-cart-active">
                                                  
        	 					 				<a href=""><i class="fa fa-shopping-bag"></i></a>
                                                  <div class="woocommerce-mini-cart text-left">
                                                    <div class="cart-bottom-part">
                                                        <ul class="cart-icon-product-list">
                                                            <li class="display-flex">
                                                                 <div class="icon-cart">
                                                                      <a href="#"><i class="fa fa-times"></i></a>
                                                                 </div>
                                                                 <div class="product-info">
                                                                    <a href="cart.html">Law Book</a><br>
                                                                    <span class="quantity">1 × $30.00</span>
                                                                </div>
                                                                <div class="product-image">
                                                                    <a href="cart.html"><img src="image/index/shop/1.jpg" alt="Product Image"></a>
                                                                </div>
                                                            </li>
                                                            <li class="display-flex">
                                                                <div class="icon-cart">
                                                                    <a href="#"><i class="fa fa-times"></i></a>
                                                                </div>
                                                                <div class="product-info">
                                                                    <a href="cart.html">Spirit Level</a><br>
                                                                    <span class="quantity">1 × $30.00</span>
                                                                </div>
                                                                <div class="product-image">
                                                                    <a href="cart.html"><img src="image/index/shop/2.jpg" alt="Product Image"></a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <div class="total-price text-center">
                                                            <span class="subtotal">Subtotal:</span>
                                                            <span class="current-price">$85.00</span>
                                                        </div>
                                                        <div class="cart-btn text-center">
                                                            <a class="crt-btn btn1" href="cart.html">View Cart</a>
                                                            <a class="crt-btn btn2" href="checkout.html">Check Out</a>
                                                        </div>

                                                    </div>

                                                  </div>
                                              </li>
                                              <li class="user-icon last-icon">
                                                <a href="Pages/login.php"><i class="fa fa-user" aria-hidden="true"></i></a>
                                            </li>
                                          </ul>
                                          <span>
                                              <a id="nav-expander" class="nav-expander">
                                                  <div class="bar">
                                                     <span class="dot1"></span>
                                                     <span class="dot2"></span>
                                                     <span class="dot3"></span>
                                                  </div>
                                              </a>
                                          </span>
        	 				</div>
        	 			</div>
                     </div>
                     <!-- menu end-->
                     <!-- convas menu start-->
                     <nav class="right_menu_togle hidden-md">
                        <div class="close-btn">
                            <span id="nav-close">
                                <div class="line">
                                    <span class="line1"></span><span class="line2"></span>
                                </div>
                            </span>
                        </div>
                        <div class="canvas-logo">
                            <a href="index.html"><img src="image/index/dark-logo.png" alt="logo"></a>
                        </div>
                        <div class="offcanvas-text">
                            <p>We denounce with righteous indige nationality and dislike men who are so beguiled and demo  by the charms of pleasure of the moment data com so blinded by desire.</p>
                        </div>
                        <div class="offcanvas-gallery">
                            <div class="gallery-img">
                                <a class="image-popup" href="image/index/gallery/1.jpg"><img src="image/index/gallery/1.jpg" alt=""></a>
                            </div>
                            <div class="gallery-img">
                                <a class="image-popup" href="image/index/gallery/2.jpg"><img src="image/index/gallery/2.jpg" alt=""></a>
                            </div>
                            <div class="gallery-img">
                                <a class="image-popup" href="image/index/gallery/3.jpg"><img src="image/index/gallery/3.jpg" alt=""></a>
                            </div>
                            <div class="gallery-img">
                                <a class="image-popup" href="image/index/gallery/4.jpg"><img src="image/index/gallery/4.jpg" alt=""></a>
                            </div>
                            <div class="gallery-img">
                                <a class="image-popup" href="image/index/gallery/5.jpg"><img src="image/index/gallery/5.jpg" alt=""></a>
                            </div>
                            <div class="gallery-img">
                                <a class="image-popup" href="image/index/gallery/6.jpg"><img src="image/index/gallery/6.jpg" alt="6"></a>
                            </div>
                        </div>
                        <div class="map-img">
                            <img src="image/index/map.jpg" alt="">
                        </div>
                        <div class="canvas-contact">
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </nav>
                     <!-- convas menu end-->
        	 	</header><!-- header end-->
             </div>
             <!--Full width header End-->

             
        <!-- modernizr js -->
        <script src="../js/index/modernizr-2.8.3.min.js"></script>
        <!-- jquery latest version -->
        <script src="../js/index/jquery.min.js"></script>
        <!-- Bootstrap v4.4.1 js -->
        <script src="../js/index/bootstrap.min.js"></script>
        <!-- Menu js -->
        <script src="../js/index/index/rsmenu-main.js"></script> 
        <!-- op nav js -->
        <script src="../js/index/jquery.nav.js"></script>
        <!-- owl.carousel js -->
        <script src="../js/index/owl.carousel.min.js"></script>
        <!-- Slick js -->
        <script src="../js/index/slick.min.js"></script>
        <!-- isotope.pkgd.min js -->
        <script src="../js/index/isotope.pkgd.min.js"></script>
        <!-- imagesloaded.pkgd.min js -->
        <script src="../js/index/imagesloaded.pkgd.min.js"></script>
        <!-- wow js -->
        <script src="../js/index/wow.min.js"></script>
        <!-- Skill bar js -->
        <script src="../js/index/skill.bars.jquery.js"></script>
        <script src="../js/index/jquery.counterup.min.js"></script> 
         <!-- counter top js -->
        <script src="../js/index/waypoints.min.js"></script> 
        <!-- video js -->
        <script src="../js/index/jquery.mb.YTPlayer.min.js"></script>
        <!-- magnific popup js -->
        <script src="../js/index/jquery.magnific-popup.min.js"></script>  
        <!-- plugins js -->
        <script src="../js/index/plugins.js"></script> 
        <!-- contact form js -->
        <script src="../js/index/contact.form.js"></script>
        <!-- main js -->
        <script src="../js/index/main.js"></script> 

        <script src="../js/index/fontawesome.js"></script>