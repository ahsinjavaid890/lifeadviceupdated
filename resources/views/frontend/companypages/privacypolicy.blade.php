@extends('frontend.layouts.main')
@include('frontend.companypages.includes.mettatittle')
@section('content')
@include('frontend.companypages.includes.mainblog')
@php
    $url = request()->segment(count(request()->segments()));
    $page = DB::table('travelpages')->where('url' , $url)->get()->first();
@endphp
<div class="container-fluid py-5">
    <div class="container policy">
        <div class="row pb-2">
            {!! $page->privacy_two_heading !!}
        </div>
    </div>
</div>
@endsection