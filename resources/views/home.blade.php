<!-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection  -->
<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Taxi</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/jquery-ui.css">			
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>	
			  <header id="header">
		  		<div class="header-top">
				</div>
			    <div class="container main-menu">
			    	<div class="row align-items-center justify-content-between d-flex">
			    		<!-- <img src="img/logo.png" alt="" title="" />		 -->
						<nav id="nav-menu-container">
							<ul class="nav-menu">
							  <li class="menu-active"><a href="{{ url('/home') }}">Home</a></li>
							  <li><a href="{{ url('/about') }}">About</a></li>
							  <li><a href="{{ url('/service') }}">Services</a></li>
							  <li><a href="{{ url('/gallery') }}">Gallery</a></li>
							  							  			          	          
							  <li><a href="{{ url('/contact') }}">Contact</a></li>
							  <li><a href="{{ url('/reserver') }}">Votre Reservation</a></li>
							  
                              <li class="nav-item dropdown float-end">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            	</li>
							</ul>
						</nav><!-- #nav-menu-container -->		
			    	</div>
			    </div>
			  </header><!-- #header -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-between">
						<div class="banner-content col-lg-6 col-md-6 ">
							<h6 class="text-white ">Need a ride? just call</h6>
							<h1 class="text-uppercase">
								911 999 911				
							</h1>
							<p class="pt-10 pb-10 text-white">
								Whether you enjoy city breaks or extended holidays in the sun, you can always improve your travel experiences by staying in a small.
							</p>
							
						</div>
																
					</div>
				</div>					
			</section>
			<!-- End banner Area -->	

			<!-- Start home-about Area -->
			<section class="home-about-area section-gap">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 about-left">
							<img class="img-fluid" src="img/about-img.jpg" alt="">
						</div>
						<div class="col-lg-6 about-right">
							<h1>Globally Connected
							by Large Network</h1>
							<h4>We are here to listen from you deliver exellence</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.								
							</p>
							<a class="text-uppercase primary-btn" href="#">Get Details</a>
						</div>
					</div>
				</div>	
			</section>
			<!-- End home-about Area -->
			
			<!-- Start services Area -->
			<section class="services-area pb-120">
				<div class="container">
					<div class="row section-title">
						<h1>Voici nos reservations !!!</h1>
					
					</div>
					<div class="row">
                        @foreach ($trajets as $trajet)
						<div class="col-lg-4 single-service">
							<span class="lnr lnr-car"></span>
							<a href="/reserver?depart={{$trajet->Depart}}&arriver={{$trajet->Arriver}}&heure={{$trajet->Heure}}&prix={{$trajet->Prix}}"><h4>Reserver</h4></a>
							<p>
                               <th>DEPART : {{$trajet->Depart}}</th></br>
                                <th>ARRIVER : {{$trajet->Arriver}}</th></br>
                                <th>HEURE : {{$trajet->Heure}}</th></br>
                                <th>PRIX : {{$trajet->Prix}}</th>
							</p>
						</div>
                        @endforeach
                        
						<!-- <div class="col-lg-4 single-service">
							<span class="lnr lnr-briefcase"></span>
							<a href="#"><h4>Office Pick-ups</h4></a>
							<p>
								Usage of the Internet is becoming more common due to rapid advancement of technology and power.
							</p>
						</div> -->
						<!-- <div class="col-lg-4 single-service">
							<span class="lnr lnr-bus"></span>
							<a href="#"><h4>Event Transportation</h4></a>
							<p>
								Usage of the Internet is becoming more common due to rapid advancement of technology and power.
							</p>
						</div>												 -->
					</div>	
				</div>	
			</section>
           
			<!-- End services Area -->
			
			<!-- Start image-gallery Area -->
			
			<!-- End image-gallery Area -->
			
			<!-- Start reviews Area -->
			<section class="reviews-area section-gap">
				<div class="container">
					<div class="row section-title">
						<h1>Choisissez votre Chauffeur ici !!</h1>
						
					</div>					
					<div class="row">
                    @foreach ($chauffeurs as $chauffeur)
						<div class="col-lg-4 col-md-6">
							<div class="single-review">
								<h4>{{$chauffeur->prenom}}</h4>
								<p>
                                    <th> {{$chauffeur->nom}}</th></br>
                                    <th>{{$chauffeur->tel}}</th></br>
                                    <th> {{$chauffeur->adresse}}</th>
								</p>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
                            @endforeach
						</div>	
																																			
					</div>
				</div>	
			</section>
			<!-- End reviews Area -->
							
			<!-- Start home-calltoaction Area -->
			<section class="home-calltoaction-area relative">
				<div class="container">
					<div class="overlay overlay-bg"></div>
					<div class="row align-items-center section-gap">
						<div class="col-lg-8">
							<h1>Experience Great Support</h1>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
							</p>
						</div>
						<div class="col-lg-4 btn-left">
							<a href="#" class="primary-btn">Reach Our Support Team</a>
						</div>
					</div>
				</div>	
			</section>
			<!-- End home-calltoaction Area -->
			
			<!-- Start latest-blog Area -->
			<section class="latest-blog-area section-gap">
				<div class="container">
					<div class="row section-title">
						<h1>Latest News from our Blog</h1>
						<p>Who are in extremely love with eco friendly system.</p>
					</div>						
					<div class="row">
						<div class="col-lg-6">
							<div class="single-latest-blog">
								<div class="thumb">
									<img class="img-fluid" src="img/b1.jpg" alt="">
								</div>
								<ul class="tags">
									<li><a href="#">Travel</a></li>
									<li><a href="#">Life Style</a></li>
								</ul>
								<a href="#">
									<h4>Portable latest Fashion for young women</h4>
								</a>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore.
								</p>
								<p class="date">31st January, 2018</p>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="single-latest-blog">
								<div class="thumb">
									<img class="img-fluid" src="img/b2.jpg" alt="">
								</div>
								<ul class="tags">
									<li><a href="#">Travel</a></li>
									<li><a href="#">Life Style</a></li>
								</ul>
								<a href="#">
									<h4>Portable latest Fashion for young women</h4>
								</a>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore.
								</p>
								<p class="date">31st January, 2018</p>
							</div>
						</div>						
					</div>
				</div>	
			</section>
			<!-- End latest-blog Area -->
			
			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Quick links</h6>
								<ul>
									<li><a href="#">Jobs</a></li>
									<li><a href="#">Brand Assets</a></li>
									<li><a href="#">Investor Relations</a></li>
									<li><a href="#">Terms of Service</a></li>
								</ul>								
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Features</h6>
								<ul>
									<li><a href="#">Jobs</a></li>
									<li><a href="#">Brand Assets</a></li>
									<li><a href="#">Investor Relations</a></li>
									<li><a href="#">Terms of Service</a></li>
								</ul>								
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Resources</h6>
								<ul>
									<li><a href="#">Guides</a></li>
									<li><a href="#">Research</a></li>
									<li><a href="#">Experts</a></li>
									<li><a href="#">Agencies</a></li>
								</ul>								
							</div>
						</div>												
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<p>Let us be social</p>
								<div class="footer-social d-flex align-items-center">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-dribbble"></i></a>
									<a href="#"><i class="fa fa-behance"></i></a>
								</div>
							</div>
						</div>							
						<div class="col-lg-4  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>Stay update with our latest</p>
								<div class="" id="mc_embed_signup">
									<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
										<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
			                            	<button class="click-btn btn btn-default"><span class="lnr lnr-arrow-right"></span></button>
			                            	<div style="position: absolute; left: -5000px;">
												<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
											</div>

										<div class="info"></div>
									</form>
								</div>
							</div>
						</div>	
						<p class="mt-80 mx-auto footer-text col-lg-12">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>											
					</div>
				</div>
				<img class="footer-bottom" src="img/footer-bottom.png" alt="">
			</footer>	
			<!-- End footer Area -->	

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
 			<script src="js/jquery-ui.js"></script>								
			<script src="js/jquery.nice-select.min.js"></script>							
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>
