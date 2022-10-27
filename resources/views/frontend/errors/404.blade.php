@extends('frontend.layouts.main')
@section('tittle')
<title>Life Insurance Ontario – Get Tips, Online Quotes for Life Insurance</title>
@endsection
@section('content')
<main style="margin-top:200px;margin-bottom: 100px;" class="main">
    <div class="page-content error-404">
        <div class="container">
            <div class="banner">
                <div class="banner-content text-center">
                	<h1>
                		404 Error
                	</h1>
                    <h2 class="banner-title">
                        <span class="text-secondary">Oops!!!</span> Something Went Wrong Here
                    </h2>
                    <p class="text-light">There may be a misspelling in the URL entered, or the page you are looking for may no longer exist</p>
                    <a href="javascript:history.go(-1)" class="btn btn-dark btn-rounded btn-icon-right"><i class="w-icon-long-arrow-left"></i> Go Back</a>
                    <a href="{{ url('') }}" class="btn btn-dark btn-rounded btn-icon-right">Home Page</a>
                    
                </div>
            </div>
        </div>
    </div>
</main>
@endsection