@extends('layout.Master')

@section('title','Trainer')

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
								Trainers				
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="trainers.html"> Trainers</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start trainer Area -->
			<section class="trainer-section spad">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="section-title">
							<div class="title text-center">
								<h1 class="mb-10">Our Experienced Trainers</h1>
								<p>As you pour the first glass of your favorite Chianti.</p>
							</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="single-trainer-item">
								<img src="img/trainer/trainer-1.jpg" alt="img/trainer/trainer-1">
								<div class="trainer-text">
									<h5>Patrick Cortez</h5>
									<span>Leader</span>
									<p>Most senioure and most expiriance leader </p>
									<p>this is certify by world's best fitness association.also 2 time winner in trainers ceremany</p>
									<div class="trainer-social">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-instagram"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-pinterest"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-trainer-item">
								<img src="img/trainer/trainer-2.jpg" alt="img/trainer/trainer-2">
								<div class="trainer-text">
									<h5>Gregory Powers</h5>
									<span>Gym coach</span>
									<p>hightly successful person in this feild and take more than 90% positive replay</p>
									<div class="trainer-social">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-instagram"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-pinterest"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-trainer-item">
								<img src="img/trainer/trainer-3.jpg" alt="img/trainer/trainer-3">
								<div class="trainer-text">
									<h5>Walter Wagner</h5>
									<span>Yoga trainer</span>
									<p>From last two year that contain winner award in World yoga day..</p>
									<div class="trainer-social">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-instagram"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-pinterest"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End trainer Area -->

			<!-- Start cta Area -->
			<section class="cta-area">
				<div class="container-fluid">
					<div class="row no-padding">
						<div class="col-lg-6 single-cta cta1 no-padding section-gap relative">
							<div class="overlay overlay-bg"></div>
							<h6 class=text-uppercase>Book an appointment</h6>
							<h1>Get into shape now</h1>
							<a href="#" class="primary-btn">Book Now</a>
						</div>
						<div class="col-lg-6 single-cta cta2 no-padding section-gap relative">
							<div class="overlay overlay-bg"></div>
							<h6 class=text-uppercase>Book an appointment</h6>
							<h1>Get into shape now</h1>
							<a href="#" class="primary-btn">Book Now</a>			
		
						</div>
					</div>
				</div>	
			</section>
			<!-- End cta Area -->	
@endsection

@push('js')

@endpush