@extends('frontend.layouts.maintwo')
@include('frontend.companypages.includes.mettatittle')
@section('content')
@include('frontend.companypages.includes.main')
<div style="background-color:#f4f7fa" class="container-homepage">
	<div class="quotationscards">
                      
	</div>
</div>
@include('frontend.companypages.includes.sectiontwo')
@include('frontend.companypages.includes.sectionthree')
@include('frontend.companypages.includes.sectionfour')
@include('frontend.companypages.includes.faqsection')
@include('frontend.companypages.includes.productsection')
@endsection


@section('script')
<script type="text/javascript" src="https://d3a39i8rhcsf8w.cloudfront.net/js/jquery.mask.min.js"></script>
<script type="text/javascript">
   $( document ).ready(function() {
       $('#dateofbirthfull').mask('00/00/0000');
   });
</script>
@endsection