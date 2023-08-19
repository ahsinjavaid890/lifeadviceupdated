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
            background-color: #2b3481;
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

        /**
     * Article Container
     */
        .article-container {
            padding: 2rem;
        }

        /**
     * Article Block
     */
        .article-block {
            text-align: center;
        }

        .article-block .entry-content>p {
            color: #666;
        }

        /**
     * Tabs Container
     */


        /**
     * Tabs Block
     */
        .tabs-block {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /**
     * Tabs
     */
        .tabs {
            display: flex;
        }

        .tabs>ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            width: 15%;
        }

        .tabs>ul li {
            display: block;
        }

        .tabs>ul li:not(:last-child) {
            border-bottom: 1px solid #ffff;
        }

        .tabs>ul li a,
        .tabs>ul li a:visited {
            display: flex;
            border-bottom: none;
            text-decoration: none;
            background-color: #1bbc9b;
            color: #fff;
            padding: 10px 0px;
            transition: all 0.2s ease-in-out;
            word-wrap: break-word;
        }

        .tabs>ul li a:hover,
        .tabs>ul li a:focus,
        .tabs>ul li a:active {
            border-bottom: none;
            outline: 0;
        }

        .tabs>ul li a.active {
            background-color: #2b3481;
            color: white;
        }

        .tabs>ul li a:hover:not(.active) {
            color: white;
        }

        .tabs>ul li a>span {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .tabs>ul li a>span.tab-label {
            display: none;
        }

        .tabs section {
            width: 85%;
            background-color: #fff;
            padding: 1rem;
            display: none;
            word-wrap: break-word;
        }

        .tabs section>* {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.2s, transform 0.2s;
        }

        .tabs section>*:nth-child(1) {
            transition-delay: 0.2s;
        }

        .tabs section>*:nth-child(2) {
            transition-delay: 0.3s;
        }

        .tabs section>*:nth-child(3) {
            transition-delay: 0.4s;
        }

        .tabs section>*:nth-child(4) {
            transition-delay: 0.5s;
        }

        .tabs section>*:nth-child(5) {
            transition-delay: 0.6s;
        }

        .tabs section>*:nth-child(6) {
            transition-delay: 0.7s;
        }

        .tabs section>*:nth-child(7) {
            transition-delay: 0.8s;
        }

        .tabs section>*:nth-child(8) {
            transition-delay: 0.9s;
        }

        .tabs section>*:nth-child(9) {
            transition-delay: 1s;
        }

        .tabs section>*:nth-child(10) {
            transition-delay: 1.1s;
        }

        .tabs section>*:nth-child(11) {
            transition-delay: 1.2s;
        }

        .tabs section>*:nth-child(12) {
            transition-delay: 1.3s;
        }

        .tabs section>*:nth-child(13) {
            transition-delay: 1.4s;
        }

        .tabs section>*:nth-child(14) {
            transition-delay: 1.5s;
        }

        .tabs section>*:nth-child(15) {
            transition-delay: 1.6s;
        }

        .tabs section>*:nth-child(16) {
            transition-delay: 1.7s;
        }

        .tabs section>*:nth-child(17) {
            transition-delay: 1.8s;
        }

        .tabs section>*:nth-child(18) {
            transition-delay: 1.9s;
        }

        .tabs section>*:nth-child(19) {
            transition-delay: 2s;
        }

        .tabs section>*:nth-child(20) {
            transition-delay: 2.1s;
        }

        .tabs section.active {
            display: block;
        }

        .tabs section.active-content>* {
            opacity: 1;
            transform: translateY(0);
        }

        @media (min-width: 576px) {

            .tabs>ul {
                width: 150px;
            }

            .tabs>ul li a {
                flex-wrap: wrap;
            }

            .tabs>ul li a>span {
                width: 100%;
            }

            .tabs>ul li a>span.tab-label {
                width: 100%;
                display: block;
                margin-top: 0.2rem;
            }

            .tabs section {
                width: calc(100% - 150px);
                padding: 2rem 2rem;
            }
        }

        @media (min-width: 768px) {

            body {
                font-size: 0.9rem;
            }

            .material-icons {
                display: none !important;
            }
        }

        @media (min-width: 992px) {

            .tabs {
                width: 100%;
            }
        }

        .tabs-wrapper {
            padding-top: 0px !important;
        }

        .accordion-wrapper {
            display: flex;
            flex-flow: row wrap;
            width: 100%;
            margin: 0 auto;
        }

        .item {
            width: 100%;
        }

        .active-content h2 {
            font-size: 20px;
            color: #2b3481;
        }

        /* Accordion */

        .accordion {
            list-style-type: none;
            border-top: 1px solid #ddd;
            margin: 0.5rem 0 1rem 0;
            padding-left: 0;
        }

        .accordion li {
            margin-bottom: 10px;
        }

        .accordion-header {
            color: white;
            background-color: #fff;
            border-bottom: 1px solid #ddd;
            cursor: pointer;
            min-height: 3rem;
            line-height: 3rem;
            padding: 0 1rem;

            background: #6c6e74;
            background: -moz-linear-gradient(top, #1bbc9b 0%, #1bbc9b 100%);
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #6c6e74), color-stop(100%, #4b4d51));
            background: -webkit-linear-gradient(top, #1bbc9b 0%, #1bbc9b 100%);
            background: -o-linear-gradient(top, #1bbc9b 0%, #1bbc9b 100%);
            background: -ms-linear-gradient(top, #1bbc9b 0%, #1bbc9b 100%);
            background: linear-gradient(top, #1bbc9b 0%, #1bbc9b 100%);
        }

        .accordion-header:after {
            content: '\02795';
            /* Unicode character for "plus" sign (+) */
            font-size: 0.6rem;
            color: #777;
            float: right;
        }

        .accordion-header.active:after {
            content: "\2796";
            /* Unicode character for "minus" sign (-) */
        }

        .activeaccordin {
            color: white;
            background: #2b3481;
            background: -moz-linear-gradient(top, #2b3481 0%, #2b3481 100%);
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #a5cd4e), color-stop(100%, #6b8f1a));
            background: -webkit-linear-gradient(top, #2b3481 0%, #2b3481 100%);
            background: -o-linear-gradient(top, #2b3481 0%, #2b3481 100%);
            background: -ms-linear-gradient(top, #2b3481 0%, #2b3481 100%);
            background: linear-gradient(top, #2b3481 0%, #2b3481 100%);
        }

        .accordion-body {
            display: none;
            color: #797979;
            background: #e5e5e5;
            padding: 2rem;
            border-bottom: 1px solid #ddd;
        }
        .nav-tabs {
            border-bottom: none
        }
        .activenav:hover{
            color: white;
        }
        a{
            color: black;
        }
    </style>



<div class="container" >
    <div class="row" style="margin-top: 100px">
        <div class="col-md-12">
            <div class="heading-wrapper">
                <h3  style="font-size: 30px;margin-bottom:20px" class="heading-2 text-md-start">All Requests</h3>
            </div>
        </div>

    </div>
    <ul class="nav nav-tabs justify-content-start">
        <li class="nav-item">
            <a class="nav-link " href="{{ url('profile') }}">Purchased Policies</a>
        </li>
        <li class="nav-item">
            <a class="nav-link activenav" href="{{ url('requests') }}">Requests</a>
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




    <div class="container mb-5" >
        
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="site-wrapper">
                    <section class="tabs-wrapper">
                        <div class="tabs-container">
                            <div class="tabs-block">
                                <div id="tabs-section" class="tabs">
                                    <ul class="tab-head">
                                        <li>
                                            <a href="#tab-1" class="tab-link active"> <span
                                                    class="material-icons tab-icon">Change</span> <span
                                                    class="tab-label">Change Requests</span></a>
                                        </li>
                                        <li>
                                            <a href="#tab-2" class="tab-link"> <span
                                                    class="material-icons tab-icon">Refund</span> <span
                                                    class="tab-label">Refund Requests</span></a>
                                        </li>
                                        <li>
                                            <a href="#tab-3" class="tab-link"> <span
                                                    class="material-icons tab-icon">Extend</span> <span
                                                    class="tab-label">Extend Requests</span></a>
                                        </li>
                                    </ul>

                                    <section id="tab-1" class="tab-body entry-content active active-content">
                                        <h2>Change Requests</h2>
                                        <div class="accordion-wrapper">
                                            <div class="item">
                                                <ul class="accordion" data-accordion="close">
                                                    @foreach (DB::table('sale_change_requests')->where('user_id', Auth::user()->id)->orderby('id', 'desc')->get() as $r)
                                                        <li>
                                                            <div class="accordion-header ">RQ-000{{ $r->id }}</div>
                                                            <div class="accordion-body">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label>Request Status</label><br>
                                                                        <a class="badge badge-success"
                                                                            href="javascript:void(0)">{{ $r->request_status }}</a>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label>Reffrence Number</label>
                                                                        <h5>{{ $r->reffrence_number }}</h5>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label>Policy Number</label>
                                                                        <h5>{{ $r->policy_number }}</h5>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label>Policy Start Date</label>
                                                                        <h5>{{ $r->start_date }}</h5>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label>Policy End Date</label>
                                                                        <h5>{{ $r->end_date }}</h5>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label>New Effective Date</label>
                                                                        <h5>{{ $r->new_effective_date }}</h5>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label>New Return Date</label>
                                                                        <h5>{{ Cmf::date_format($r->new_return_date) }}</h5>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label>Document Uploaded</label><br>
                                                                        <a download="" class="btn btn-primary"
                                                                            href="{{ url('public/images') }}/{{ $r->document }}">Download</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </section>

                                    <section id="tab-2" class="tab-body entry-content">
                                        <h2>Refund Requests</h2>
                                        <div class="accordion-wrapper">
                                            <div class="item">
                                                <ul class="accordion" data-accordion="close">
                                                    @foreach (DB::table('sale_refund_requests')->where('user_id', Auth::user()->id)->orderby('id', 'desc')->get() as $r)
                                                        <li>
                                                            <div class="accordion-header ">RQ-000{{ $r->id }}</div>
                                                            <div class="accordion-body">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label>Request Status</label><br>
                                                                        <a class="badge badge-success"
                                                                            href="javascript:void(0)">{{ $r->request_status }}</a>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label>Reffrence Number</label>
                                                                        <h5>{{ $r->reffrence_number }}</h5>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label>Policy Number</label>
                                                                        <h5>{{ $r->policy_number }}</h5>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label>Policy Start Date</label>
                                                                        <h5>{{ $r->start_date }}</h5>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label>Return Date</label>
                                                                        <h5>{{ $r->return_date }}</h5>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label>Refund Form</label><br>
                                                                        <a download="" class="btn btn-primary"
                                                                            href="{{ url('public/images') }}/{{ $r->refund_form }}">Refund
                                                                            Form</a>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label>Proof Of Return</label><br>
                                                                        <a download="" class="btn btn-primary"
                                                                            href="{{ url('public/images') }}/{{ $r->proof_of_return }}">Proof
                                                                            Of Return</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </section>

                                    <section id="tab-3" class="tab-body entry-content">
                                        <h2>Extend Requests</h2>
                                        <div class="accordion-wrapper">
                                            <div class="item">
                                                <ul class="accordion" data-accordion="close">
                                                    @foreach (DB::table('sale_extend_requests')->where('user_id', Auth::user()->id)->orderby('id', 'desc')->get() as $r)
                                                        <li>
                                                            <div class="accordion-header ">RQ-000{{ $r->id }}</div>
                                                            <div class="accordion-body">

                                                            </div>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            
        </div>
    </div>
    <script>
        //
        // Tabs Toggler
        //

        (function($) {
            // Variables
            const $tabLink = $('#tabs-section .tab-link');
            const $tabBody = $('#tabs-section .tab-body');
            let timerOpacity;

            // Toggle Class
            const init = () => {
                // Menu Click
                $tabLink.off('click').on('click', function(e) {
                    // Prevent Default
                    e.preventDefault();
                    e.stopPropagation();

                    // Clear Timers
                    window.clearTimeout(timerOpacity);

                    // Toggle Class Logic
                    // Remove Active Classes
                    $tabLink.removeClass('active ');
                    $tabBody.removeClass('active ');
                    $tabBody.removeClass('active-content');

                    // Add Active Classes
                    $(this).addClass('active');
                    $($(this).attr('href')).addClass('active');

                    // Opacity Transition Class
                    timerOpacity = setTimeout(() => {
                        $($(this).attr('href')).addClass('active-content');
                    }, 50);
                });
            };

            // Document Ready
            $(function() {
                init();
            });
        }(jQuery));
        var accordion = function() {
            // Read out the data attribute for type of accordion
            var data = $(".accordion").attr("data-accordion");

            // start the event Handler
            $(".accordion-header").on("click", function() {
                // Look out for the type of accordion open or close
                if (data === "close") {
                    $(".accordion-body").slideUp();
                    if ($(this).hasClass("activeaccordin")) {
                        $(this).toggleClass("activeaccordin");
                    } else {
                        $(".accordion-header").removeClass("activeaccordin");
                        $(this).toggleClass("activeaccordin");
                    }
                } else {
                    $(this).toggleClass("activeaccordin");
                }
                $(this).next(".accordion-body").not(":animated").slideToggle();
            });
        }

        // Initialize the accordion in your document.ready function
        accordion();
    </script>
@endsection
