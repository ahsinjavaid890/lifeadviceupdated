@extends('frontend.layouts.main')
@section('tittle')
    <title>Customer Portal</title>
    <link rel="canonical" href="{{Request::url()}}">
@endsection
@section('content')
    <style type="text/css">
        body {
            background-color: rgb(246 248 251);
        }

        .card {
            background: #fff;
            border: 1px solid #cfd9e8;
            box-shadow: 0 10px 24px rgba(87, 106, 134, .2);
            padding: 32px 24px;
            border-radius: 16px;

        }

        .col-md-9 .card {
            border-left: 5px solid #2b3481;
        }

        .heading-2 {
            color: #2b3481 !important;
            font-weight: 800;
            font-size: 3rem;
            line-height: 3.5rem;
            margin-bottom: 48px;
        }

        .justify-content {
            justify-content: space-between;
        }

        .col-md-9 .card .card-footer {
            background-color: white;
            border-top: none;
        }

        .justify-content .badge {
            height: 19px;
            padding: 0 9px;
            height: 23px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 600;
            line-height: 23px;
            text-transform: capitalize;
            color: #fff;
        }

        .justify-content .badge-danger {
            background: #fff;
            border: 1px solid #eb5658;
            color: #eb5658;
        }

        .justify-content .badge-warning {
            background: #fff;
            border: 1px solid #ffc107;
            color: #ffc107;
        }

        .justify-content h3 {
            color: #2b3481;
        }

        .date span {
            color: #3f3e81;
            font-weight: 900;
        }

        .policyid span {
            padding: 4px 7px;
            color: #2b3481;
            background-color: #edf5fc;
            border-radius: 3px;
            margin-top: 15px;
            font-size: 14px;
            font-weight: 600;
            line-height: 24px;
        }

        .policyid a {
            padding: 4px 7px;
            color: #2b3481;
            background-color: #edf5fc;
            border-radius: 3px;
            margin-top: 15px;
            font-size: 14px;
            font-weight: 600;
            line-height: 24px;
        }

        .activenav {
            background-color: #8cc53f;
            color: white;
            border-bottom-right-radius: 4px;
            border-bottom-left-radius: 5px;
        }

        .divider {
            border-top: 1px solid #cfd9e8;
            margin: 20px -24px;
        }

        .hthreeforextralinks {
            display: block;
            margin-bottom: 24px;
            line-height: 20px;
            color: #2b3481 !important;
        }

        .helpfulllinks {
            font-size: 15px;
            line-height: 19px;
            color: #1b8fe4;
            font-weight: 700;
            margin-bottom: 1rem !important;
        }

        .box {
            /* display: flex; */
            /* align-items: center;
                    justify-content: center; */
            background: #fff;
            border: 1px solid #8cc53f;
            box-shadow: 0 10px 24px rgba(87, 106, 134, .2);
            margin: 20px 0;
            padding: 40px 40px;
            width: 100%;
            min-height: 200px;
            border-radius: 16px;
        }

        .nav-tabs {
            border-bottom: none
        }
        .dropdown-menu{
            width: 300px;
        }
        .detail:hover{
            color: #77aa34
        }
        .activenav:hover{
            color: white;
        }
        a{
            color: black;
        }
    </style>


    <div class="container">
        <div class="row" style="margin-top: 100px">
            <div class="col-md-12">
                <div class="heading-wrapper ">
                    <h1 style="font-size: 35px;margin-bottom:20px" class="heading-2 text-md-left">My Account</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <ul class="nav flex-column justify-content-start">
            <li class="nav-item">
                <a class="nav-link activenav" href="{{ url('profile') }}">Purchased Policies</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('requests') }}">Requests</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign
                    Out</a>
            </li>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle " data-toggle="dropdown" href="#" role="button"
                    aria-haspopup="true" aria-expanded="false">Helpful Links</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item helpfulllinks" href="{{ url('faq') }}"> Frequently Asked Questions</a>
                    <a class="dropdown-item helpfulllinks" href="{{ url('privacypolicy') }}">Privacy Policy </a>
                    <a class="dropdown-item helpfulllinks" href="{{ url('contactus') }}">Contact Us</a>
                    <a class="dropdown-item helpfulllinks" href="{{ url('claim') }}">Claim Form</a>
                </div>
            </li>
        </ul>


    </div>



    <div class="container" style="margin-top: 2rem">
        <div class="row">
            @foreach ($sales as $r)
                <div class="col-md-6">
                    <div class="box">
                        <div class="d-flex">

                            <h3 style="color: #2b3481">{{ DB::Table('traveler_sale_informations')->where('id', $r->id)->first()->f_name }}
                                {{ DB::Table('traveler_sale_informations')->where('id', $r->id)->first()->l_name }}</h3>
                            @if ($r->status == 'pending')
                                <span class="badge badge-warning">{{ $r->status }}</span>
                            @endif
                            @if ($r->status == 'rejected')
                                <span class="badge badge-danger">{{ $r->status }}</span>
                            @endif
                            @if ($r->status == 'Approved')
                                <span class="badge badge-success">{{ $r->status }}</span>
                            @endif

                        </div>


                        <div style="color: #3f3e81;font-weight: 900;">
                            {{ DB::table('wp_dh_products')->where('pro_id', $r->product_id)->first()->pro_name }}</div>
                        <div class="d-flex">
                            <div style="color: #77aa34" class="date pr-2">
                                <span> Effective : </span>{{ Cmf::date_format($r->start_date) }}
                            </div>
                            <div style="color: #77aa34" class="date">
                                <span> To : </span>{{ Cmf::date_format($r->end_date) }}
                            </div>
                        </div>
                        <div class="d-flex policyid justify-content">
                            <span>Reffrence Id: {{ $r->reffrence_number }} </span>
                            <a class="detail" href="{{ url('policydetail') }}/{{ $r->id }}">View Details</a>
                        </div>


                    </div>
                </div>
            @endforeach

        </div>
    </div>


    
@endsection
