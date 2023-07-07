@extends('admin.layouts.main-layout')
@section('title', 'My Profile')
@section('content')

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class=" container ">
                @include('alerts.index')
                @if (session()->has('errorsecurity'))
                    <div class="alert alert-danger alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        {{ session()->get('errorsecurity') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                @endif
                <div class="row">
                    <div class="col-xl-4 col-lg-5">
                        <div class="card text-center">
                            <div class="card-body">
                                <img width="150" height="150"
                                    src="{{ url('public/images') }}/{{ Auth::user()->profileimage }}"
                                    class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">

                                <h4 class="mb-0 mt-2">{{ Auth::user()->name }}</h4>
                                <p class="text-muted font-14">Admin</p>

                                <div class="text-left mt-3">
                                    <h4 class="font-13 text-uppercase">About Me :</h4>
                                    <p class="text-muted font-13 mb-3">
                                        {{ Auth::user()->about_me }}
                                    </p>
                                    <p class="text-muted mb-2 font-13"><strong>Full Name :</strong> <span
                                            class="ml-2">{{ Auth::user()->name }}</span></p>

                                    <p class="text-muted mb-2 font-13"><strong>Mobile :</strong><span
                                            class="ml-2">{{ Auth::user()->phonenumber }}</span></p>

                                    <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span
                                            class="ml-2 ">{{ Auth::user()->email }}</span></p>

                                </div>
                            </div> <!-- end card-body -->
                        </div> <!-- end card -->

                        <!-- Messages-->

                    </div> <!-- end col-->

                    <div class="col-xl-8 col-lg-7">
                        <div class="card">
                            <div class="card-body">
                                <form enctype="multipart/form-data" method="POST"
                                    action="{{ url('/admin/updateuserprofile') }}">
                                    {{ csrf_field() }}
                                    <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle mr-1"></i> Personal
                                        Info</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="firstname">Name</label>
                                                <input type="text" value="{{ Auth::user()->name }}" class="form-control"
                                                    placeholder="First Name" name="name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="firstname">Email</label>
                                                <input readonly="" type="text" value="{{ Auth::user()->email }}"
                                                    class="form-control" placeholder="Email" name="email">
                                            </div>
                                        </div> <!-- end col -->
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="lastname">Contact Number</label>
                                                <input type="text" value="{{ Auth::user()->phonenumber }}"
                                                    class="form-control" placeholder="Phone No" name="phonenumber">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="lastname">Profile Image</label>
                                                <input type="file" class="form-control" placeholder="Phone No"
                                                    name="profileimage">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="lastname">About {{ Auth::user()->name }}</label>
                                                <textarea rows="7" class="form-control" name="about">{{ Auth::user()->about_me }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-success mt-2"><i
                                                class="mdi mdi-content-save"></i> Save</button>
                                    </div>
                                </form>

                            </div> <!-- end card body -->
                        </div> <!-- end card -->
                        <br>
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="{{ url('/admin/updateusersecurity') }}">
                                    {{ csrf_field() }}
                                    <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle mr-1"></i> Security
                                        Settings</h5>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="firstname">Old Password</label>
                                                <input type="password" class="form-control" name="oldpassword"
                                                    placeholder="Enter Old Password">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="lastname">New Password</label>
                                                <input type="password" class="form-control" name="newpassword"
                                                    placeholder="Enter New Password">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="firstname">Conferm Password</label>
                                                <input type="password" class="form-control" name="password_confirmed"
                                                    placeholder="Enter Old Password">
                                            </div>
                                        </div>
                                        <!-- end col -->
                                    </div> <!-- end row -->
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-success mt-2"><i
                                                class="mdi mdi-content-save"></i> Save</button>
                                    </div>
                                </form>

                            </div> <!-- end card body -->
                        </div> <!-- end card -->
                    </div> <!-- end col -->
                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
    <!--end::Content-->

    <!-- Modal-->
@endsection
