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
								Sign Up				
							</h1>	
							<p class="text-white link-nav"><a href="{{url('/')}}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{url('/signup')}}"> Sign Up</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

        <div class="container col-md-6 mt-5 p-3 signup">
            <form>
            @csrf
            <hr class="hr"/>
                <h3 class="h3">Sign Up Details</h3>
            <hr class="hr"/>   
            <div class="form-input d-flex justify-content-center align-items-center">
            <label class="radio-inline "><input type="radio" name="optradio">&nbsp User</label>&nbsp
            <label class="radio-inline ml-3"><input type="radio" name="optradio">&nbsp Trainer</label>
            </div> 
            <div class="form-group">
                <label for="formGroupExampleInput">First Name</label>
                <input type="text" class="form-control" placeholder="Enter First Name" name="fname">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Last Name</label>
                <input type="text" class="form-control"  placeholder="Enter Last Name" name="lname">
            </div>
            <div class="form-input">
            <label for="exampleInputPassword1">Gender</label>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="gender"  value="option1">
                <label class="form-check-label" for="exampleRadios1">
                    Male
                </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="gender"  value="option1">
                <label class="form-check-label" for="exampleRadios1">
                    Female
                </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="gender"  value="option1">
                <label class="form-check-label" for="exampleRadios1">
                    Other
                </label>
            </div>
            </div>
            <div class="form-group mt-3">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control"  aria-describedby="emailHelp" placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control"  placeholder="Password" name="password">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Re-enter-Password</label>
                <input type="password" class="form-control"  placeholder="Re-enter Password" name="repassword">
            </div>
            <button type="submit" class="btn btn-outline-danger mt-3 submit">Register Details</button>
            
            <p class="form-group mt-2 d-flex justify-content-end align-items-center">i have already account in this.. &nbsp&nbsp  <a href="{{url('/login')}}" class="btn btn-danger btn-sm acc_btn">Login</a></p>
            </form>	
        </div>
@endsection

@push('js')

@endpush