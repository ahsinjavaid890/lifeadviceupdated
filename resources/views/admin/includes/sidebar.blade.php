<!--begin::Aside-->
<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
    <!--begin::Brand-->
    <div class="brand flex-column-auto" id="kt_brand">
        <!--begin::Logo-->
        <a style=" background-color: white; margin-top: 15px; border-radius: 11px; " href="{{url('admin/dashboard')}}">
            <img style=" padding: 5px; width: 100%; " alt="Logo"
                src="{{ url('public/images') }}/{{ Cmf::getwebsite()->header_logo }}" />
        </a>
        <!--end::Logo-->
    </div>
    <!--end::Brand-->
    <!--begin::Aside Menu-->
    <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
        <!--begin::Menu Container-->
        <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1"
            data-menu-dropdown-timeout="500">
            <!--begin::Menu Nav-->
            <ul class="menu-nav">
                <li class="menu-item menu-item-active" aria-haspopup="true">
                    <a href="{{url('admin/dashboard')}}" class="menu-link">
                        <span class="material-symbols-outlined">dashboard</span>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </li>

                <li class="menu-section">
                    <h4 class="menu-text">MENU</h4>
                    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                </li>



                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="material-symbols-outlined">support_agent</span>
                        <span class="menu-text">Manage Agents</span><i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
                                <span class="menu-link"><span class="menu-text">Manage Members</span></span>
                            </li>

                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{ url('admin/users/allusers') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                        class="menu-text">Manage Agents</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{ url('admin/users/addnewuser') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Add
                                        New Agent</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>



                <!-- <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path
                                        d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z"
                                        fill="#000000"
                                    />
                                    <path
                                        d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z"
                                        fill="#000000"
                                        opacity="0.3"
                                    />
                                </g>
                            </svg>
                        </span>
                        <span class="menu-text">Licenses & E&O</span><i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
                                <span class="menu-link"><span class="menu-text">Licenses & E&O</span></span>
                            </li>

                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{ url('admin/document/member-document') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Member Documents</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{ url('admin/document/docreport') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Documents Report</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{ url('admin/document/expiredocs') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Expired Documents Report</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li> -->


                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="material-symbols-outlined">point_of_sale</span>
                        <span class="menu-text">Manage Sales

                            @if(DB::table('sales')->where('newstatus' , 'new')->count() > 0 ||
                        DB::table('sale_change_requests')->where('new_status' , '1')->count() > 0 ||
                        DB::table('sale_extend_requests')->where('new_status' , '1')->count() > 0 ||
                        DB::table('sale_refund_requests')->where('new_status' , '1')->count() > 0 )
                        <span style="margin-left: 25px;" class="badge badge-danger">New</span>
                        @endif
                        </span>
                        
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{ url('admin/sales/allsale') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                        class="menu-text"><span class="menu-text">All Sales
                                            @if(DB::table('sales')->where('newstatus' , 'new')->count() > 0) <span
                                                style="margin-left: 40px;" class="badge badge-danger">{{
                                                DB::table('sales')->where('newstatus' , 'new')->count() }}</span>
                                            @endif</span> </span>
                                </a>
                            </li>

                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{ url('admin/sales/changerequest') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                        class="menu-text">Change Requests
                                        @if(DB::table('sale_change_requests')->where('new_status' , '1')->count() > 0)
                                        <span style="margin-left: 30px;" class="badge badge-danger">{{
                                            DB::table('sale_change_requests')->where('new_status' , '1')->count()
                                            }}</span>
                                        @endif
                                    </span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{ url('admin/sales/extendrequest') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                        class="menu-text">Extend Requests
                                        @if(DB::table('sale_extend_requests')->where('new_status' , '1')->count() > 0)
                                        <span style="margin-left: 40px;" class="badge badge-danger">{{
                                            DB::table('sale_extend_requests')->where('new_status' , '1')->count()
                                            }}</span>
                                        @endif
                                    </span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{ url('admin/sales/refundrequest') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                        class="menu-text">Refund Requests
                                        @if(DB::table('sale_refund_requests')->where('new_status' , '1')->count() > 0)
                                        <span style="margin-left: 37px;" class="badge badge-danger">{{
                                            DB::table('sale_refund_requests')->where('new_status' , '1')->count()
                                            }}</span>
                                        @endif
                                    </span>
                                </a>
                            </li>


                        </ul>
                    </div>
                </li>



                <!-- <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path
                                        d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z"
                                        fill="#000000"
                                    />
                                    <path
                                        d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z"
                                        fill="#000000"
                                        opacity="0.3"
                                    />
                                </g>
                            </svg>
                        </span>
                        <span class="menu-text">Manage Reports</span><i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
                                <span class="menu-link"><span class="menu-text">Manage Reports</span></span>
                            </li>

                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{ url('admin/reports/salesreport') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Sales Reports</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{ url('admin/reports/broker') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Broker Commission Report</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{ url('admin/reports/agent') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Agent Commission Report</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li> -->
                <li class="menu-item">
                    <a href="{{ url('admin/companies/allcompanies') }}" class="menu-link">
                        <span class="material-symbols-outlined">store</span>
                        <span class="menu-text">All Companies</span></i>
                    </a>
                </li>

                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="material-symbols-outlined">inventory</span>
                        <span class="menu-text">Manage Products</span><i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
                                <span class="menu-link"><span class="menu-text">Manage Products</span></span>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{ url('admin/products/productcategories') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">All
                                        Product Categories</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{ url('admin/products/allproducts') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">All
                                        Products</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{ url('admin/products/addnewproduct') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Add
                                        New Products</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="material-symbols-outlined">yard</span>
                        <span class="menu-text">Manage Plans</span><i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
                                <span class="menu-link"><span class="menu-text">Manage Plans</span></span>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{ url('admin/plans/allplans') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                        class="menu-text">Plans</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{ url('admin/plans/planbenifits') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Plan
                                        Benifits</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{ url('admin/plans/planbenifitscategories') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Plan
                                        Benifit Categories</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{ url('admin/plans/lifeplans') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Life
                                        Plans</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{ url('admin/plans/lifeplanbenifits') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Life
                                        Plan Benifits</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="{{ url('admin/quotation/allquotations') }}" class="menu-link menu-toggle">
                        <span class="material-symbols-outlined">format_quote</span>
                        <span class="menu-text">Quotations</span>
                    </a>
                </li>
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="{{ url('admin/contact/messages') }}" class="menu-link menu-toggle">
                        <span class="material-symbols-outlined">business_messages</span>
                        <span class="menu-text">Contact Messages</span>
                    </a>
                </li>
                <li class="menu-section">
                    <h4 class="menu-text">COMPANY</h4>
                    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                </li>


                <li class="menu-item">
                    <a href="{{route('view_news')}}" class="menu-link">
                        <span class="material-symbols-outlined">unsubscribe</span>
                        <span class="menu-text">News Letter</span></i>
                    </a>
                </li>
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="material-symbols-outlined">pages</span>
                        <span class="menu-text">Manage Pages</span><i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
                                <span class="menu-link"><span class="menu-text">Manage Pages</span></span>
                            </li>
                            @foreach(DB::table('travelpages')->get() as $r)
                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{ url('admin/pages/travelpages') }}/{{ $r->id }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">{{
                                        $r->name }}</span>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </li>
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="material-symbols-outlined">help</span>
                        <span class="menu-text">FAQ</span><i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
                                <span class="menu-link"><span class="menu-text">FAQ</span></span>
                            </li>

                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{ url('admin/faq/faqcategories') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">FAQ
                                        Categories</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{ url('admin/faq/allfaq') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">ALL
                                        FAQ</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="material-symbols-outlined">rss_feed</span>
                        <span class="menu-text">Blogs</span><i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
                                <span class="menu-link"><span class="menu-text">Blogs</span></span>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{ url('admin/blogs/blogcategories') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                        class="menu-text">Blogs Categories</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{ url('admin/blogs/allblogs') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">ALL
                                        Blogs</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="material-symbols-outlined">settings</span>
                        <span class="menu-text">Settings</span><i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
                                <span class="menu-link"><span class="menu-text">Settings</span></span>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{ url('admin/website/settings') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                        class="menu-text">Appearance</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{ url('admin/website/emailsettings') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                        class="menu-text">Email Settings</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{ url('admin/website/userpanelsettings') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">User
                                        Panel & Buy Now</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{ url('admin/website/clearcache') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                        class="menu-text">Clear Cache</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{ url('admin/website/server-info') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                        class="menu-text">Server</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-section">
                    <h4 class="menu-text">Profile</h4>
                    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                </li>
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="{{ url('admin/profile') }}" class="menu-link menu-toggle">
                        <span class="material-symbols-outlined">person</span>
                        <span class="menu-text">My Profile</span>
                    </a>
                </li>
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                        href="{{ route('admin.logout') }}" class="menu-link menu-toggle">
                        <span class="material-symbols-outlined">logout</span>
                        <span class="menu-text">Logout</span>
                        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </a>
                </li>
            </ul>
            <!--end::Menu Nav-->
        </div>
        <!--end::Menu Container-->
    </div>
    <!--end::Aside Menu-->
</div>
<!--end::Aside-->