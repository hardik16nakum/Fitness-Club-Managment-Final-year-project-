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
								User-Personal Details 				
							</h1>	
							<p class="text-white link-nav"><a href="{{url('/')}}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{url('/userdetail')}}"> User-Personal Details </a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

            <div class="container col-md-6 mt-5 p-3 signup">
            <form>
                @csrf
            <hr class="hr"/>
                <h3 class="h3">User-Personal Details</h3>
            <hr class="hr"/>   
         
            <div class="form-group">
                <label for="formGroupExampleInput">First Name</label>
                <input type="text" class="form-control" placeholder="Enter First Name" name="fname">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Middle Name</label>
                <input type="text" class="form-control"  placeholder="Enter Last Name" name="mname">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Last Name</label>
                <input type="text" class="form-control"  placeholder="Enter Last Name" name="lname">
            </div>
            <div class="form-input">
            <label for="exampleInputPassword1">Gender</label>
                <div class="form-check">
                <label class="radio-inline "><input type="radio" name="gender">&nbsp Male</label>&nbsp
                <label class="radio-inline ml-3"><input type="radio" name="gender">&nbsp Female</label>
                <label class="radio-inline ml-3"><input type="radio" name="gender">&nbsp Other</label>
                </div>
            </div>
            
            <div class="form-row">
                <div class="col-6">
                <label for="formGroupExampleInput">Number</label>
                <input type="text" class="form-control" placeholder="Enter Your Number" name="number">
                </div>
                <div class="col-6">
                <label for="formGroupExampleInput">Age &nbsp &nbsp(Age more than 16) </label>
                <input type="text" class="form-control" placeholder="Enter Your Age" name="age">
                </div>
            </div>

            <div class="form-group mt-2">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control"  aria-describedby="emailHelp" placeholder="Enter email" name="email">
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col">
                    <label  for="inputGroupSelect01">Weight</label>
                    <input type="number" class="form-control" placeholder="Enter weight" name="weight">
                    </div>
                    <div class="col">
                    <label  for="inputGroupSelect01">Height</label>
                    <input type="number" class="form-control" placeholder="Enter Height" name="height">
                    </div>
                </div>
            </div>

            <div class="input-group mt-3">
            <div class="input-group-prepend">
                <label class="btn btn-danger text-white disabled" for="inputGroupSelect01">Choose what you want</label>
            </div>
            <select class="custom-select" id="inputGroupSelect01">
                <option selected>Select Here</option>
                <option value="Weight Gain">Weight Gain</option>
                <option value="weight Loss">weight Loss</option>
                <option value="Muscle Building">Muscle Building</option>
                <option value="Yoga">Yoga</option>
            </select>
            </div>

            <div class="form-group mt-2">
                <label for="formGroupExampleInput">Permanent Address</label>
                <input type="text" class="form-control"  placeholder="Enter Last Name" name="address">
            </div>
            <div class="form-group">
            <div class="form-row">
                <div class="col-5">
                <label for="formGroupExampleInput">City</label>
                <input type="text" class="form-control" placeholder="City">
                </div>
                <div class="col">
                <label for="formGroupExampleInput">State</label>
                <input type="text" class="form-control" placeholder="State">
                </div>
                <div class="col">
                <label for="formGroupExampleInput">Pincode</label>
                <input type="text" class="form-control" placeholder="Pincode">
                </div>
            </div>
            </div>
            <button type="submit" class="btn btn-outline-danger mt-3 submit">Register Details</button>
            
            </form>	
        </div>    
@endsection

@push('js')

@endpush