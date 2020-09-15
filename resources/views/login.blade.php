@extends('layout.Master')

@section('title','Home')

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
								Login				
							</h1>	
							<p class="text-white link-nav"><a href="{{url('/')}}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{url('/login')}}"> Login</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

        <div class="container col-md-6 mt-5 p-3 signup">
            <form>
            @csrf
            <hr class="hr"/>
                <h3 class="h3">Login Details</h3>
            <hr class="hr"/>    
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control"  aria-describedby="emailHelp" placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control"  placeholder="Password" name="password">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Re-enter-Password</label>
                <input type="password" class="form-control"  placeholder="Password" name="repassword">
            </div>
            <button type="submit" class="btn btn-outline-danger submit">Login User</button>
            
            <a href="{{url('/login/forgotpassword')}}" class="mt-2 d-flex justify-content-end align-items-center btn btn-link forgotpass">Forgot password</a>
            <p class="form-group mt-4 d-flex justify-content-end align-items-center">i have not any account in this website go to.. &nbsp&nbsp  <a href="{{url('/signup')}}" class="btn btn-danger btn-sm acc_btn">Sign Up</a></p>
            </form>	
        </div>
@endsection

@push('js')
    
@endpush