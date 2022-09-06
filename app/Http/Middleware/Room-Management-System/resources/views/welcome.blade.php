<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Room Management Application</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('public/fontend/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/fontend/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('public/fontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/fontend/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/fontend/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('public/fontend/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('public/fontend/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('public/fontend/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('public/fontend/css/jquery.timepicker.css')}}">

    
    <link rel="stylesheet" href="{{asset('public/fontend/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('public/fontend/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('public/fontend/css/style.css')}}">

	
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Room Management Application</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="" class="nav-link">Rooms</a></li>
	          
	          <li class="nav-item"><a href="" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="" class="nav-link">Contact</a></li>
			  <li class="nav-item"><a href="" class="nav-link">Cart</a></li>
	        </ul>
	      </div>
	    </div>
	</nav>
    <!-- END nav -->
	
	<div class="hero">
			<div class="container-wrap d-flex justify-content-end align-items-end">
				<a href="" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
					<span class="ion-ios-play play"></span>
				</a>
			</div>
	    <section class="home-slider owl-carousel">
	      <div class="slider-item" style="background-image:url({{('public/fontend/images/bg_1.jpg')}})">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text align-items-center">
	          <div class="col-md-8 ftco-animate">
	          	<div class="text mb-5 pb-5">
		            <h1 class="mb-3">Room Management</h1>
		            <h2>More than a room... an experience</h2>
	            </div>
	          </div>
	        </div>
	        </div>
	      </div>

	      <div class="slider-item" style="background-image:url(images/bg_2.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text align-items-center">
	          <div class="col-md-8 ftco-animate">
	          	<div class="text mb-5 pb-5">
		            <h1 class="mb-3">Experience Epic Beauty</h1>
		            <h2>Room Management &amp; </h2>
	            </div>
	          </div>
	        </div>
	        </div>
	      </div>
	    </section>
	</div>
    <section class="ftco-booking ftco-section ftco-no-pt ftco-no-pb">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-12 pr-1 aside-stretch">
    				<form action="#" class="booking-form">
	        		<div class="row">
	        			<div class="col-md d-flex py-md-4">
	        				<div class="form-group align-self-stretch d-flex align-items-end">
	        					<div class="wrap bg-white align-self-stretch py-3 px-4">
				    					<label for="#">Check-in Date</label>
				    					<input type="text" class="form-control checkin_date" placeholder="Check-in date">
			    					</div>
			    				</div>
	        			</div>
	        			<div class="col-md d-flex py-md-4">
	        				<div class="form-group align-self-stretch d-flex align-items-end">
	        					<div class="wrap bg-white align-self-stretch py-3 px-4">
				    					<label for="#">Check-out Date</label>
				    					<input type="text" class="form-control checkout_date" placeholder="Check-out date">
			    					</div>
			    				</div>
	        			</div>
	        			<div class="col-md d-flex py-md-4">
	        				<div class="form-group align-self-stretch d-flex align-items-end">
	        					<div class="wrap bg-white align-self-stretch py-3 px-4">
			      					<label for="#">Room Category</label>
			      					<div class="form-field">
									  
			        					<div class="select-wrap">
			                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
											
			                                <select name="" id="" class="form-control input-sm m-bot15">
																		                												
												<option value=""><a href=""></a></option>									                              	                	                  		                			                     
											
                                            </select>																				
                                        </div>										
				                    </div>
				                </div>
		                    </div>
	        			</div>
	        			<div class="col-md d-flex py-md-4">
	        				<div class="form-group align-self-stretch d-flex align-items-end">
	        					<div class="wrap bg-white align-self-stretch py-3 px-4">
			      					<label for="#">District</label>
			      					<div class="form-field">
			        					<div class="select-wrap">
			                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
											
			                                <select name="" id="" class="form-control">
											
			                    	            <option value=""><a href=""></a></option>
											
			                                </select>
											
			                            </div>
										
				                    </div>
				                </div>
		                    </div>
	        			</div>
	        			<div class="col-md d-flex">
	        				<div class="form-group d-flex align-self-stretch">
			              <a href="" class="btn btn-black py-5 py-md-3 px-4 align-self-stretch d-block"><span>Check Availability <small>Best Price Guaranteed!</small></span></a>
			            </div>
	        			</div>
	        		</div>
	        	</form>
	    		</div>
    		</div>
    	</div>
    </section>


    @yield('content')


    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Room Management Application</h2>
              <p></p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Useful Links</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Blog</a></li>
                <li><a href="#" class="py-2 d-block">Rooms</a></li>
                <li><a href="#" class="py-2 d-block">Service</a></li>
                <li><a href="#" class="py-2 d-block">Special Offer</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Privacy</h2>
              <ul class="list-unstyled">
                
                <li><a href="#" class="py-2 d-block">About Us</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
                <li><a href="#" class="py-2 d-block">Services</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Mỹ Đình 2, Nam Từ Liêm, Hà Nội</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+363 529 211</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text"> From Group4</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>
  Copyright &copy; All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Group4
            </p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{asset('public/fontend/js/jquery.min.js')}}"></script>
  <script src="{{asset('public/fontend/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('public/fontend/js/popper.min.js')}}"></script>
  <script src="{{asset('public/fontend/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('public/fontend/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('public/fontend/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('public/fontend/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('public/fontend/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('public/fontend/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('public/fontend/js/aos.js')}}"></script>
  <script src="{{asset('public/fontend/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('public/fontend/js/jquery.mb.YTPlayer.min.js')}}"></script>
  <script src="{{asset('public/fontend/js/bootstrap-datepicker.js')}}"></script>
   <!--<script src="js/jquery.timepicker.min.js"></script> -->
  <script src="{{asset('public/fontend/js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{asset('public/fontend/js/google-map.js')}}"></script>
  <script src="{{asset('public/fontend/js/main.js')}}"></script>
    
  </body>
</html>