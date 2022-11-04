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
                                RSEP Insurance
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




<script>
    function comparetest(){
        var pids = [];
        var price = [];
                    var $checkboxes = jQuery('.compare input[type="checkbox"]');

            $checkboxes.change(function(e){
//            e.preventDefault();
                var pid =  jQuery(this).attr('data-pid');
                var product_id =  jQuery(this).attr('data-productid');
                var price_plan = jQuery(this).val();

                $checkboxes.attr("disabled", false);
                var countCheckedCheckboxes = $checkboxes.filter(':checked').length;
                console.log(countCheckedCheckboxes);
                if (countCheckedCheckboxes == 1){
                    jQuery('.compare_header_top').show();
                    jQuery('.two_select').hide();
                    jQuery('.one_select').show();
                }else if(countCheckedCheckboxes == 2 || countCheckedCheckboxes == 3){
                    jQuery('.compare_header_top').show();
                    jQuery('.two_select').show();
                    jQuery('.one_select').hide();
                    //$checkboxes.attr("disabled", true);
                    //$checkboxes.filter(':checked').attr("disabled", false);
                }else if(countCheckedCheckboxes >= 4){
                    jQuery('.compare_header_top').show();
                    jQuery('.two_select').show();
                    jQuery('.one_select').hide();
                    $checkboxes.attr("disabled", true);
                    $checkboxes.filter(':checked').attr("disabled", false);
                    
                }
                // else if(countCheckedCheckboxes == 3){
                    // $checkboxes.attr("disabled", true);
                    // $checkboxes.filter(':checked').attr("disabled", false);
                // }
                else{
                    jQuery('.compare_header_top').hide();
                }
                
                
                if (jQuery(this).is(":checked")== false) {
                     pids.splice(pids.indexOf(pid), 1);
                     price.splice(price.indexOf(price_plan), 1);
                }else{
                    pids.push(pid);
                    price.push(price_plan);
               }
               
               
               
                var url = window.location.href; 
                var arr=url.split('?')[1];
                var slider1 = localStorage.getItem("default_value");
                var slider2 = localStorage.getItem("price_value");
                
                jQuery("#new_window").click(function(){
                    var planId = jQuery.unique(pids);
                    var main_price = jQuery.unique(price);
                    var compareUrl = "http://lifeadvice.ca/quote/compare_page.php?product_id=" + product_id + '&ids=' + planId + '&'+arr+'&default_value='+slider1+'&price_value='+slider2+'&rate='+main_price;                 
                    
                    if (compareUrl.indexOf("#") > -1) {
                        var myUrl = compareUrl.replace(/\#/g, '');
                        var newUrl = jQuery(".two_select a").prop("href",myUrl);
                    }else{
                        var newUrl = jQuery(".two_select a").prop("href",compareUrl);
                    }
                     
                     
                     var newwindow = window.open($(this).prop("href"), '', 'height=800,width=1024');
                     
                     if (window.focus) {newwindow.focus()}
                     return false;
                        
                });

            });
            
             jQuery("#clear").click(function(){
                  $(".hidden1").prop("checked", false);
                  $(".hidden1").prop("disabled", false);
                  $(".two_select a").removeAttr("href");
                  pids = [];
                  price = [];
                  jQuery('.compare_header_top').hide();
               });
    }
</script>
<style>
            .compare_header_top {
                background: rgb(249, 249, 249) none repeat scroll 0% 0%;padding: 10px;position: fixed;top: 0px;width: 100%;
                display:none;
            }
        </style>
        <div class="compare_header_top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 text-center">
                    <h3 style="margin-bottom: 10px;font-weight: bold;">Select &amp; Compare Plans</h3>
                    </div>
                </div>  
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="one_select">
                           <i class="fa fa-warning text-warning"></i> Select one more plan to compare
                        </div>
                        <div class="two_select">
                            <a href="#" class="btn btn-primary" id="new_window"><i class="fa fa-server"></i> Compare</a>
                            <i class="icon"></i>
                            <a href="#" class="btn btn-default" id="clear"><i class="fa fa-refresh"></i> Clear all</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>