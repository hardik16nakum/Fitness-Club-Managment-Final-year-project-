@extends('layout.Master')

@section('title','About')

@push('css')

@endpush

@section('content')
    <!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								About Us				
							</h1>	
							<p class="text-white link-nav"><a href="{{url('/')}}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{url('/gallary')}}"> About Us</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
		
			<!-- Start feature Area -->
			<section class="feature-area section-gap">
				<div class="container">
					<div class="row section-title">
						<h1>Our Topnotch Features</h1>
						<p>The city of southern California, san diego is locally</p>
					</div>						
					<div class="row justify-content-between align-items-center">
						<div class="col-lg-6 feature-right">
						<div class="single-feature">
								<h4>Smart Security</h4>
								<p>
									We are provideing top feature like Scurity to gerented that no any customer security issues in Our Gym.  
								</p>
							</div>
							<div class="single-feature">
								<h4>Expert Trainers</h4>
								<p>
									we providing india's best certified Trainers for giving you best result as your goal.
								</p>
							</div>	
							<div class="single-feature">
								<h4>Endless Support</h4>
								<p>
									From Joining to every moment we will providing you Enless support by Physically and Online in Vedio mode  
								</p>
							</div>
						</div>
						<div class="col-lg-6 feature-right">
							<div class="single-feature">
								<h4>The Video Support</h4>
								<p>
									In any cases we also providing Video for reffer perpose in Gymoline online plateform.
								</p>
							</div>
							<div class="single-feature">
								<h4>diffrent customer diffrent diet </h4>
								<p>
									Our gym is one of the best gym in Diet plannig also that is follow with light burden and easily transfer your body. 
								</p>
							</div>	
							<div class="single-feature">
								<h4>Progress in your pocket now</h4>
								<p>
									we are provide indivial progress woth thier conviniant offer and stretiges.
								</p>
							</div>														
						</div>
					</div>
				</div>	
			</section>
			 
			<!-- Services Section Begin -->
			 <section class="services-section">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-6">
							<div class="services-pic">
								<img src="img/services/service-pic.jpg" alt="">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="service-items">
								<div class="row">
									<div class="col-md-6">
										<div class="services-item bg-gray">
											<h4>Strategies</h4>
											<p>we have Strategies related workout.<br />how to do ?<br/>What to do?<br/>when to do?</p>
										</div>
										<div class="services-item bg-gray pd-b">
											<h4>Workout</h4>
											<p>All workout are in systmatic form and that is under trainers observation with full supportive cast</p>
										</div>
									</div>
									<div class="col-md-6">
										<div class="services-item">
											<h4>Yoga</h4>
											<p>all type of yoga from monday to saturday with laughly atmosphere.</p>
										</div>
										<div class="services-item pd-b">
											<h4>Weight Loss</h4>
											<p>Trainers will provide you all type of deit instruction with enjoyment day(no rules and regulation follow)</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Services Section End -->
			<!-- End feature Area -->
			
			<!-- Start testomial Area -->
			<section class="testomial-area section-gap">
				<div class="container">
					<div class="row section-title">
						<h1>Testimonial from our Clients</h1>
						<p>Las Vegas has more than 100,000 hotel rooms to choose from.</p>
					</div>					
					<div class="row">
						<div class="active-testimonial-carusel">
							<div class="single-testimonial item">
								<img class="mx-auto" src="img/t1.png" alt="">
								<p class="desc">
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
								</p>
								<h4>Helena Phillips</h4>
								<p>
									CEO at Facebook
								</p>
							</div>
							<div class="single-testimonial item">
								<img class="mx-auto" src="img/t2.png" alt="">
								<p class="desc">
									It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction of Virtual Game, it has been achieving great heights so far as its.
								</p>
								<h4>Cordelia Barton</h4>
								<p>
									CEO at Twitter
								</p>
							</div>
							<div class="single-testimonial item">
								<img class="mx-auto" src="img/t3.png" alt="">
								<p class="desc">
									About 64% of all on-line teens say that do things online that they wouldn’t want their parents to know about.   11% of all adult internet users visit dating websites.     	
								</p>
								<h4>Carrie Reese</h4>
								<p>
									CEO at Google
								</p>
							</div>	
							<div class="single-testimonial item">
								<img class="mx-auto" src="img/t1.png" alt="">
								<p class="desc">
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
								</p>
								<h4>Helena Phillips</h4>
								<p>
									CEO at Facebook
								</p>
							</div>
							<div class="single-testimonial item">
								<img class="mx-auto" src="img/t2.png" alt="">
								<p class="desc">
									It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction of Virtual Game, it has been achieving great heights so far as its.
								</p>
								<h4>Cordelia Barton</h4>
								<p>
									CEO at Twitter
								</p>
							</div>
							<div class="single-testimonial item">
								<img class="mx-auto" src="img/t3.png" alt="">
								<p class="desc">
									About 64% of all on-line teens say that do things online that they wouldn’t want their parents to know about.   11% of all adult internet users visit dating websites.     	
								</p>
								<h4>Carrie Reese</h4>
								<p>
									CEO at Google
								</p>
							</div>	
							<div class="single-testimonial item">
								<img class="mx-auto" src="img/t1.png" alt="">
								<p class="desc">
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
								</p>
								<h4>Helena Phillips</h4>
								<p>
									CEO at Facebook
								</p>
							</div>
							<div class="single-testimonial item">
								<img class="mx-auto" src="img/t2.png" alt="">
								<p class="desc">
									It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction of Virtual Game, it has been achieving great heights so far as its.
								</p>
								<h4>Cordelia Barton</h4>
								<p>
									CEO at Twitter
								</p>
							</div>
							<div class="single-testimonial item">
								<img class="mx-auto" src="img/t3.png" alt="">
								<p class="desc">
									About 64% of all on-line teens say that do things online that they wouldn’t want their parents to know about.   11% of all adult internet users visit dating websites.     	
								</p>
								<h4>Carrie Reese</h4>
								<p>
									CEO at Google
								</p>
							</div>																												
						</div>
					</div>
				</div>	
			</section>
			<!-- End testomial Area -->		

			<!-- Start brands Area -->
			<section class="brands-area">
			<div class="container no-padding">
			    <div class="brand-wrap">
			        <div class="row align-items-center active-brand-carusel justify-content-start no-gutters">
			            <div class="col single-brand">
			                <a href="#"><img class="mx-auto" src="img/l1.png" alt=""></a>
			            </div>
			            <div class="col single-brand">
			                <a href="#"><img class="mx-auto" src="img/l2.png" alt=""></a>
			            </div>
			            <div class="col single-brand">
			                <a href="#"><img class="mx-auto" src="img/l3.png" alt=""></a>
			            </div>
			            <div class="col single-brand">
			                <a href="#"><img class="mx-auto" src="img/l4.png" alt=""></a>
			            </div>
			            <div class="col single-brand">
			                <a href="#"><img class="mx-auto" src="img/l5.png" alt=""></a>
			            </div>
			        </div>
			    </div>
			</div>
			</section>
			<!-- End brands Area -->

			<!-- Start callto Area -->
			<section class="callto-area section-gap relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row">
						<div class="call-wrap mx-auto">
							<h1>It's never late to start, join us today!</h1>
							<p>
								Thinking about overseas adventure travel? Have you put any thought into the best places to go when it comes to overseas adventure travel? Nepal is one of the most popular places of all.
							</p>
							<a href="#" class="primary-btn">Become a Member</a>				
						</div>
					</div>
				</div>	
			</section>
			<!-- End callto Area -->							    			
@endsection

@push('js')

@endpush