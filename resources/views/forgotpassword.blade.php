@extends('layout.Master')

@section('title','Home')

@push('css')

@endpush

@section('content')
<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Forgot Password			
							</h1>	
							<p class="text-white link-nav"><a href="{{url('/')}}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{url('/login/forgotpassword')}}"> Forgot Password</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

        <div class="container col-md-6 mt-5 p-3 signup">
            <form>
            @csrf
            <hr class="hr"/>
                <h3 class="h3">Forgot Password</h3>
            <hr class="hr"/>  
            <div class="form-group mt-3">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control"  aria-describedby="emailHelp" placeholder="Enter email" name="email">
            </div>
            
                <h4 class="h4 mt-3">Or</h4>

            <div class="form-group mt-3">
                <label for="exampleInputEmail1">Mobile Number</label>
                <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Enter mobile number" name="mobilenumber">
            </div>
            <button type="submit" class="btn btn-outline-danger mt-3 submit">Send Password</button>
            
            </form>	
        </div>
@endsection

@push('js')

@endpush

