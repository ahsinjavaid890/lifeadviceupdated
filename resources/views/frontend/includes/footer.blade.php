<style type="text/css">
    .single-widget-li ul li::before {
      content: "\2022";  /* Add content: \2022 is the CSS Code/unicode for a bullet */
      color: #1bbc9b; /* Change the color */
      font-weight: bold; /* If you want it to be bold */
      display: inline-block; /* Needed to add space between the bullet and the text */
      width: 1em; /* Also needed for space (tweak if needed) */
    }
</style>
<footer class="footer-top-area footer-top-area-five" style="padding-top:20px;">
<div class="container-homepage">
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="single-widget">
                <a href="index.php">
                        <img src="{{ url('public/images') }}/{{ Cmf::get_store_value('footer_logo') }}" alt="Logo">
                    </a>
                    <p class="text-white">Life Insurance Insurance has been a trusted name in insurance for more than 10 years. Today, we proudly serve insurance provincewide.</p>
            </div>
            
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="single-widget single-widget-li">
                <h3 style="border-bottom:4px solid #1bbc9b;width: 160px;" class="text-white">Get Insurance</h3>

                <ul>
                    <li>
                        <a href="{{ url('life-insurance')}}">
                                Insurance
                            </a>
                    </li>
                    <li>
                        <a href="{{ url('claim')}}">
                                Claim Insurance
                            </a>
                    </li>
                    <li>
                        <a href="{{ url('resp')}}">
                                RESP Insurance
                            </a>
                    </li>
                    <li>
                        <a href="{{ url('rrsp')}}">
                                RRSP Insurance
                            </a>
                    </li>
                    <li>
                        <a href="{{ url('nonmedical')}}">
                                Non Medical Insurance
                            </a>
                    </li>
                    <li>
                        <a href="{{ url('health-insurance')}}">
                                Health Insurance
                            </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="single-widget single-widget-li">
                <h3 style="border-bottom:4px solid #1bbc9b;width: 160px;" class="text-white">Useful Links</h3>

                <ul>
                    <li>
                        <a href="{{ url('index')}}">
                                Home
                            </a>
                    </li>
                    <li>
                        <a href="{{ url('aboutus') }}">
                                About Life Advice
                            </a>
                    </li>
                    <li>
                        <a href="{{ url('faq')}}">
                                FAQ
                            </a>
                    </li>
                    <li>
                        <a href="{{ url('blogs')}}">
                                Blogs
                            </a>
                    </li>
                    <li>
                        <a href="{{ url('privacypolicy')}}">
                                Privacy Policy
                            </a>
                    </li>
                    <li>
                        <a href="{{ url('terms-and-condition')}}">
                                Terms & Condition
                            </a>
                    </li>
                    <li>
                        <a href="{{ url('contactus') }}">
                                Contact Us
                            </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="single-widget contacts">
                <h3 style="border-bottom:4px solid #1bbc9b;width: 200px;" class="text-white">Contact Details</h3>

                <ul >

                    <li>
                        <i class="flaticon-maps-and-flags"></i>
                       <p><span>Address:</span> {{ Cmf::get_store_value('site_address') }}</p> 
                    </li>
                    <li class="pl-0">
                        <a href="tel:+18555008999">
                                <i class="flaticon-call"></i>
                                <p><span>Phone:</span> 
                               {{ Cmf::get_store_value('site_phonenumber') }}</p>
                                
                            </a>
                    </li>

                    <li class="pl-0">
                        <a href="mailto:{{ Cmf::get_store_value('site_email') }}">
                            <i class="flaticon-email"></i>
                            <p><span>Email:</span>{{ Cmf::get_store_value('site_email') }}</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div style=" border-top: 1px solid #1bbc9b; padding-top: 20px; padding-bottom: 20px;" class="container-homepage">
    <div class="row">
        <div class="col-md-6">
            <div class="footer-icon">
                <ul class="d-flex" style="color: #06346e">
                    <li><a href="#"><i class="fa fa-twitter mr-2 favicon"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram mr-2 favicon"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook mr-2 favicon"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-6 text-right">
            <p>Copyright {{ date('Y') }} © All Rights Reserved.</p>
        </div>
    </div>
    
</div>
</footer>
<div class="go-top go-top-five">
 <i class='bx bx-chevrons-up'></i>
 <i class='bx bx-chevrons-up'></i>
</div>