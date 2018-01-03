<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Boilerplate 2.0</title>

	<?php if(true): ?>
	<!-- Livereload (remove or set false for production) -->
	<script src="http://<?php echo $_SERVER['HTTP_HOST'] ?>:35729/livereload.js"></script>
	<!-- End Livereload -->
	<?php endif ?>

	<script src="/js/bundle.js"></script>
	<link rel="stylesheet" type="text/css" href="/css/styles.min.css" />
</head>

<body id="<?php echo $this->params['page_slug'] ?>">
	<div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">GreyBack</p>
        </div>
    </div>
    
        
    <div id="main-wrapper">
	    
<!-- TOP BAR -->
    
        <div class="topbar">

            <div class="header2">
                <div class="container po-relative">
                    <nav class="navbar navbar-expand-lg h2-nav">
                        <a class="navbar-brand" href="#"><img src="images/white-logo.png" alt="wrapkit" /></a>
                        <button class="navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#header2" aria-controls="header2" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="ti-menu"></span>
                        </button>
                        <div class="collapse navbar-collapse hover-dropdown" id="header2">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown mega-dropdown active"> 
	                                <a class="nav-link dropdown-toggle" href="#" id="h6-mega-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                                  About 
	                                </a>
                                </li>
                                <li class="nav-item dropdown mega-dropdown">
	                                <a class="nav-link dropdown-toggle" href="#" id="h6-mega-dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                                  Products
	                                </a>
                                </li>
                                <li class="nav-item dropdown">
	                                <a class="nav-link dropdown-toggle" href="#" id="h6-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                                  Services 
	                                </a>
                                </li>
                                <li class="nav-item dropdown">
	                                <a class="nav-link dropdown-toggle" href="#" id="h6-dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                                  Resources
	                                </a>
                                </li>
                                <li class="nav-item dropdown mega-dropdown">
	                                <a class="nav-link dropdown-toggle" href="#" id="h6-mega-dropdown2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                                  Contact
	                                </a>
                                </li>
                            </ul>
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-comments"></i> Need help?</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Login</a></li>
                                <li class="nav-item m-auto"><a class="btn btn-rounded btn-dark" href="#">Sign up</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        

<!-- Page Wrap -->
        
        <div class="page-wrapper">
            <div class="container-fluid">
                
<!-- Section -->
                
                <div class="static-slider7">
				    <div class="container">
				        <!-- Row  -->
				        <div class="row justify-content-center ">
				            <!-- Column -->
				            <div class="col-md-8 align-self-center text-center" data-aos="fade-right" data-aos-duration="1200">
				                <h1 class="title text-white typewrite" data-period="2000" data-type='[ "Colour", "Wrapkit" ]'></h1>
				                <h4 class="text-white">Awesome Extra Ordinary Flexibility</h4>
				                <a class="btn btn-success-gradiant btn-rounded btn-md btn-arrow m-t-20" data-toggle="collapse" href=""><span>Products <i class="ti-arrow-right"></i></span></a>
				                <a class="btn btn-outline-light btn-rounded btn-md m-t-20" data-toggle="modal" data-target="#static-slide7"  href=""><i class="fa fa-play m-r-10"></i> Intro </a>
				            </div>
				            <!-- Column -->
				            <div class="modal fade" id="static-slide7">
				                <div class="modal-dialog" role="document">
				                    <div class="modal-content">
				                        <div class="modal-header">
				                            <h5 class="modal-title">Watch video</h5>
				                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				                                <span aria-hidden="true">×</span>
				                            </button>
				                        </div>
				                        <div class="modal-body" id="yt-player">
				                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/DDwbjWCgxVM?" frameborder="0" allowfullscreen></iframe>
				                        </div>
				                    </div>
				                </div>
				            </div>
				        </div>
				    </div>
				</div> 
				               
<!-- Section -->
                
                <div class="spacer feature1">
                    <div class="container">
                        
                        <div class="row justify-content-center">
                            <div class="col-md-7 text-center">
                                <h2 class="title font-light">We have tons of new features to build your website faster</h2>
                            </div>
                        </div>
                        
                        <div class="row m-t-40">
                            
                            <div class="col-md-4 wrap-feature1-box">
                                <div class="card" data-aos="fade-right" data-aos-duration="1200">
                                    <div class="card-body text-center">
                                        <div class="icon-space"><i class="text-success-gradiant icon-Car-Wheel"></i></div>
                                        <p class="m-t-20">You can relay on our amazing features list and also our customer services will be great experience.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4 wrap-feature1-box">
                                <div class="card" data-aos="fade-up" data-aos-duration="1200">
                                    <div class="card-body text-center">
                                        <div class="icon-space"><i class="text-success-gradiant icon-Laptop-Phone"></i></div>
                                        <p class="m-t-20">You can relay on our amazing features list and also our customer services will be great experience.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4 wrap-feature1-box">
                                <div class="card" data-aos="fade-left" data-aos-duration="1200">
                                    <div class="card-body text-center">
                                        <div class="icon-space"><i class="text-success-gradiant icon-Sunglasses-Smiley"></i></div>
                                        <p class="m-t-20">You can relay on our amazing features list and also our customer services will be great experience.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
<!-- Section -->

                <div class="spacer feature">
                    <div class="container">
                        
                        <div class="row justify-content-center">
                            <div class="col-md-7 text-center">
                                <h2 class="title font-light">Are you happy with what we offer? Get it now.</h2>
                                <h6 class="subtitle">You can relay on our amazing features list and also our customer services will be great experience for you without doubt and in no-time</h6>
                                <div class="m-t-40">
                                    <a class="btn btn-success-gradiant btn-rounded btn-md btn-arrow m-t-20 m-r-10" href="#"><span>Buy Stuff <i class="ti-arrow-right"></i></span></a>
                                    <a class="btn btn-outline-inverse btn-rounded btn-md btn-arrow m-t-20" href="#"><span>Live Preview <i class="ti-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
<!-- Bak to Top -->

	        <a class="bt-top btn btn-circle btn-lg btn-success" href="#top"><i class="ti-arrow-up"></i></a>
	        
        </div>
      
<!-- Footer -->
        
        <div class="footer4 spacer b-t">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 m-b-30">
                        <h5 class="m-b-20">Address</h5>
                        <p>4412 Nassau, WF, TX 76308</p>
                    </div>
                    <div class="col-lg-3 col-md-6 m-b-30">
                        <h5 class="m-b-20">Phone</h5>
                        <p>Office : +1.806.553.5252
                    </div>
                    <div class="col-lg-3 col-md-6 m-b-30">
                        <h5 class="m-b-20">Email</h5>
                        <p>Office : <a href="#" class="link">info@greyback.net</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="m-b-20">Social</h5>
                        <div class="round-social light">
                            <a href="#" class="link"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="link"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="link"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="link"><i class="fa fa-youtube-play"></i></a>
                            <a href="#" class="link"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="f4-bottom-bar">
                    <div class="row">
                        <div class="col-md-12">
                            <nav class="navbar navbar-expand-lg h1-nav p-l-0 p-r-0">
                                <a class="navbar-brand" href="#"><img src="images/footer-logo.png" alt="wrapkit" width="50" /></a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header1" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="ti-menu"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="header1">
                                    <span class="hidden-lg-down">All Rights Reserved by GreyBack Labs, LP.</span>
                                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                                        <li class="nav-item active"><a class="nav-link" href="#">Home</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Products</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Features</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>