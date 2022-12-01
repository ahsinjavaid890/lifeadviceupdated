<footer class="footer-top-area footer-top-area-five pt-100 pb-70">
<div class="container-homepage">
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="single-widget">
                <a href="index.php">
                        <img src="{{ url('public/images') }}/{{ Cmf::get_store_value('footer_logo') }}" alt="Logo">
                    </a>
                    <p class="text-white">Life Insurance Insurance has been a trusted name in insurance for more than 10 years. Today, we proudly serve insurance provincewide.</p>
            </div>
            <div class="footer-icon">
                <ul class="d-flex" style="color: #06346e">
                    <li><a href="#"><i class="fa fa-twitter mr-2 favicon"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram mr-2 favicon"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook mr-2 favicon"></i></a></li>
                </ul>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="single-widget">
                <h3 class="text-white">Get Insurance<br><hr class="hr-footer"></h3>

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
            <div class="single-widget">
                <h3 class="text-white">Useful Links<br><hr class="hr-footer"></h3>

                <ul>
                    <li>
                        <a href="{{ url('index')}}">
                                Home
                            </a>
                    </li>
                    <li>
                        <a href="#">
                                About Life Advice
                            </a>
                    </li>
                    <li>
                        <a href="{{ url('faq')}}">
                                FAQ
                            </a>
                    </li>
                    <li>
                        <a href="blogs.php">
                                Blogs
                            </a>
                    </li>
                    <li>
                        <a href="{{ url('privacypolicy')}}">
                                Privacy Policy
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
                <h3 class="text-white">Contact Details<br><hr class="hr-footer"></h3>

                <ul>

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
                        <a href="/cdn-cgi/l/email-protection#98f0fdf4f4f7d8ebedeafdece1b6fbf7f5">
                                <i class="flaticon-email"></i>
                                <p><span>Email:</span><span class="__cf_email__" data-cfemail="cea6aba2a2a18ebdbbbcabbab7e0ada1a3"> {{ Cmf::get_store_value('site_email') }}</span></p>
                            </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</footer>
<div class="go-top go-top-five">
 <i class='bx bx-chevrons-up'></i>
 <i class='bx bx-chevrons-up'></i>
</div>