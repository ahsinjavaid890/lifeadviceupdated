
<div id="kt_header" class="header bg-white header-fixed">
    <!--begin::Container-->
    <div class="container-fluid d-flex align-items-stretch justify-content-between">
        <!--begin::Left-->
        <div class="d-flex align-items-stretch mr-2">
            <!--begin::Page Title-->
            <h3 class="d-none text-dark d-lg-flex align-items-center mr-10 mb-0">
               Life Advice Admin Dashboard
            </h3>
            <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                <li class="breadcrumb-item">
                    Dashboard
                </li>
                <li class="breadcrumb-item">
                    <a href="all-jobs" class="text-muted"></a>
                </li>
            </ul>
            <!--end::Page Title-->
            <!--begin::Header Menu Wrapper-->
            <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                <!--begin::Header Menu-->
                <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default"></div>
                <!--end::Header Menu-->
            </div>
            <!--end::Header Menu Wrapper-->
        </div>
        <!--end::Left-->
        <!--begin::Topbar-->
        <div class="topbar">
            <!--begin::Notifications-->
            <!--end::Notifications-->
            <div class="dropdown">
                <!--begin::Toggle-->
                <div class="topbar-item" data-toggle="dropdown" data-offset="0px,0px">
                    <div style="border:1px solid;" class="btn btn-icon w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                        <div class="d-flex flex-column text-right pr-3">
                            <span class="text-muted font-weight-bold font-size-base d-none d-md-inline">{{ Auth::user()->name }}</span>
                            <span class="text-dark-75 font-weight-bolder font-size-base d-none d-md-inline">{{ Auth::user()->type }}</span>
                        </div>
                        <!-- High Priority -->
                        <span class="symbol symbol-35 symbol-danger">
                            <span class="symbol-label font-size-h5 font-weight-bold">S</span>
                        </span>

                        <!-- Medium -->
                        <!-- <span class="symbol symbol-35 symbol-warning">
                            <span class="symbol-label font-size-h5 font-weight-bold">S</span>
                        </span> -->

                        <!-- Low -->
                        <!-- <span class="symbol symbol-35 symbol-success">
                            <span class="symbol-label font-size-h5 font-weight-bold">S</span>
                        </span> -->

                    </div>
                </div>
                <!--end::Toggle-->
                <!--begin::Dropdown-->
                <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg p-0">
                    <!--begin::Header-->
                    <div class="d-flex align-items-center p-8 rounded-top">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-md bg-light-primary mr-3 flex-shrink-0">
                            <img src="{{asset('public/admin/assets/media/users/300_21.jpg')}}" alt="" />
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Text-->
                        <div class="text-dark m-0 flex-grow-1 mr-3 font-size-h5">
                            {{ Auth::user()->name }} <br>
                            <small>{{ Auth::user()->type }}</small>
                        </div>
                        <!--end::Text-->
                    </div>
                    <div class="separator separator-solid"></div>
                    <!--end::Header-->
                    <!--begin::Nav-->

                    <div class="navi navi-spacer-x-0 pt-5">
                        <!--begin::Item-->
                        <a href="{{url('admin/profile')}}" class="navi-item px-8">
                            <div class="navi-link">
                                <div class="navi-icon mr-2">
                                    <img src="{{asset('public/admin/assets/media/custom/account-drop.svg')}}">
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold">
                                        My Account
                                    </div>
                                    <div class="text-muted">
                                        Account Settings
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->

                        <!--end::Item-->
                        <!--begin::Item-->

                        <!--end::Item-->
                        <!--begin::Footer-->
                        <div class="navi-separator mt-3"></div>
                        <div class="navi-footer  px-8 py-5">
                            <a href="{{ route('admin.logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" role="button"  class="btn btn-light-primary font-weight-bold">Sign Out</a>
                                                     <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                        </div>
                        <!--end::Footer-->
                    </div>
                    <!--end::Nav-->
                </div>
                <!--end::Dropdown-->
            </div>
            <!--end::User-->
        </div>
        <!--end::Topbar-->
    </div>
    <!--end::Container-->
</div>
<!--end::Header