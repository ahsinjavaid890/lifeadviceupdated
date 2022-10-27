@extends('frontend.layouts.main')
@section('tittle')
<title>Life Insurance Ontario – Get Tips, Online Quotes for Life Insurance</title>
@endsection
@section('content')
<div class="container mb-5" style="margin-top: 100px;">
	<div class="row">
		<div class="col-md-4">
			<div class="card shadow rounded">
				<div class="card-header">
					<h4>Profile Information</h4>
				</div>
				<div class="card-body">
					<div class="text-center">
						<div class="profile_image">
						<img src="{{ asset('public/front/img/images/profile.jpg')}}">
						</div>
						<div class="profile_name mx-4">
							<h5 class="text-dark">Abubakar</h5>
						</div>
					</div>
						<div class="user_about">
							<h5>About</h5>
							<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p>
						</div>
					<ul class="user_detail pt-5">
						<li class="text-dark">Email: <span class="pl-5 text-muted">mailto@gmail.com</span></li>
						<li class="text-dark">Phone: <span class="pl-5 text-muted">031214451654</span></li>
					</ul>
					<ul class="nav nav-tabs card-header-tabs user_list d-block pt-5">
           <li class="nav-item">
                   <a class="nav-link active" data-toggle="tab" href="#tab1">Personal Information</a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link " data-toggle="tab" href="#tab1">Logout</a>
                 </li>
              </ul>
				</div>
			</div>
		</div>
		<div class="col-md-8">
			<div class="tab-pane fade show active" id="tab1">
				<div class="card">
					<div class="card-header">
						<h4>Personal Information</h4>
					</div>
					<div class="card-body">
						<form action="#" method="POST">
							<div class="row">
								<div class="col-md-6">	
									<div class="form-group">
										<label>Name</label>
										<input type="text" name="name" placeholder="Enter Your Name" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Email</label>
										<input type="email" name="email" placeholder="Enter Your Email" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Phone Number</label>
										<input type="number" name="phone" placeholder="Enter Your Phone Number" class=" form-control">
									</div>	
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Profile Image</label>
										<input type="file" name="profile_image" class="form-control">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label>About </label>
										<textarea class="form-control" rows="5"></textarea>
									</div>
								</div>

								<div class="col-md-12 text-right">
										<div class="form-group">
											<input type="submit" name="submit" value="Submit" class=" btn btn-primary">
										</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection