<div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
    <!--begin::Container-->
    <div class="container-xxl d-flex flex-grow-1 flex-stack">
        <!--begin::Header Logo-->
        <div class="d-flex align-items-center me-5">
            <!--begin::Heaeder menu toggle-->
            <div class="d-lg-none btn btn-icon btn-active-color-primary w-30px h-30px ms-n2 me-3" id="kt_header_menu_toggle">
                <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                <span class="svg-icon svg-icon-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
                        <path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </div>
            <!--end::Heaeder menu toggle-->
            <a href="{{ route('home') }}">
                <img alt="Logo" src="assets/media/logos/logo.svg" class="h-20px h-lg-30px" />
            </a>
        </div>
        <!--end::Header Logo-->
        <!--begin::Topbar-->
        <div class="d-flex align-items-center">
            <!--begin::Topbar-->
            <div class="d-flex align-items-center flex-shrink-0">
                <!-- if this page was included in optimus-pro.blade.php -->
                @if (Route::currentRouteName() == 'optimus-pro')
                <!--begin::Chat-->
                <div class="d-flex align-items-center ms-3 ms-lg-4">
                    <!--begin::Drawer wrapper-->
                    <!-- <div class="btn btn-icon btn-primary position-relative w-30px h-30px w-lg-40px h-lg-40px" id="kt_drawer_chat_toggle">{{count($messages)}} -->
                    <div class="btn btn-icon btn-dark btn-active-color-primary btn-outline btn-outline-secondary w-30px h-30px w-lg-40px h-lg-40px" id="kt_drawer_chat_toggle">
                        <!--begin::Svg Icon | path: assets/media/icons/duotune/communication/com007.svg-->
                        <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path opacity="0.3" d="M8 8C8 7.4 8.4 7 9 7H16V3C16 2.4 15.6 2 15 2H3C2.4 2 2 2.4 2 3V13C2 13.6 2.4 14 3 14H5V16.1C5 16.8 5.79999 17.1 6.29999 16.6L8 14.9V8Z" fill="black"></path>
                            <path d="M22 8V18C22 18.6 21.6 19 21 19H19V21.1C19 21.8 18.2 22.1 17.7 21.6L15 18.9H9C8.4 18.9 8 18.5 8 17.9V7.90002C8 7.30002 8.4 6.90002 9 6.90002H21C21.6 7.00002 22 7.4 22 8ZM19 11C19 10.4 18.6 10 18 10H12C11.4 10 11 10.4 11 11C11 11.6 11.4 12 12 12H18C18.6 12 19 11.6 19 11ZM17 15C17 14.4 16.6 14 16 14H12C11.4 14 11 14.4 11 15C11 15.6 11.4 16 12 16H16C16.6 16 17 15.6 17 15Z" fill="black"></path>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <!--begin::Bullet-->
                        <span class="d-none bullet bullet-dot bg-danger h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink"></span>
                        <!--end::Bullet-->
                    </div>
                    <!--end::Drawer wrapper-->
                </div>
                <!--end::Chat-->
                @endif
                <!--begin::User-->
                <div class="d-flex align-items-center ms-3 ms-lg-4" id="kt_header_user_menu_toggle">
                    <!--begin::Menu- wrapper-->
                    <!--begin::User icon(remove this button to use user avatar as menu toggle)-->
                    <div class="btn btn-icon btn-color-gray-700 btn-active-color-primary btn-outline btn-outline-secondary w-30px h-30px w-lg-40px h-lg-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                        <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="black" />
                                <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::User icon-->
                    <!--begin::Menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <div class="menu-content d-flex align-items-center px-3">
                                <!--begin::Username-->
                                <div class="d-flex flex-column">
                                    <div class="fw-bolder d-flex align-items-center fs-5">{{ Auth::user()->name }}
                                        <span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Pro</span>
                                    </div>
                                    <a href="#" class="fw-bold text-muted text-hover-primary fs-7">{{ Auth::user()->email }}</a>
                                </div>
                                <!--end::Username-->
                            </div>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu separator-->
                        <div class="separator my-2"></div>
                        <!--end::Menu separator-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <a href="#" class="menu-link px-5">My Profile</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5 my-1">
                            <a href="#" class="menu-link px-5">Account Billing</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); 
                                        this.closest('form').submit();" class="menu-link px-5">Sign Out</a>
                            </form>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu separator-->
                        <div class="separator my-2"></div>
                        <!--end::Menu separator-->
                        <!--begin::Menu item-->
                        <!-- <div class="menu-item px-5">
                            <div class="menu-content px-5">
                                <label class="form-check form-switch form-check-custom form-check-solid pulse pulse-success" for="kt_user_menu_dark_mode_toggle">
                                    <input class="form-check-input w-30px h-20px" type="checkbox" value="1" name="mode" id="kt_user_menu_dark_mode_toggle" />
                                    <span class="pulse-ring ms-n1"></span>
                                    <span class="form-check-label text-gray-600 fs-7">Dark Mode</span>
                                </label>
                            </div>
                        </div> -->
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu-->
                    <!--end::Menu wrapper-->
                </div>
                <!--end::User -->
                <!--begin::Sidebar Toggler-->
                <!--end::Sidebar Toggler-->
            </div>
            <!--end::Topbar-->
        </div>
        <!--end::Topbar-->
    </div>
    <!--end::Container-->
    <!--begin::Separator-->
    <div class="separator"></div>
    <!--end::Separator-->
    <!--begin::Container-->
    <div class="header-menu-container container-xxl d-flex flex-stack h-lg-75px" id="kt_header_nav">
        <!--begin::Menu wrapper-->
        <div class="header-menu flex-column flex-lg-row" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
            <!--begin::Menu-->
            <div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch flex-grow-1" id="#kt_header_menu" data-kt-menu="true">
                <div class="menu-item here show menu-lg-down-accordion me-lg-1">
                    <a class="menu-link py-3 {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                        <span class="menu-title">Dashboard</span>
                        <span class="menu-arrow d-lg-none"></span>
                    </a>
                </div>
                <div class="menu-item menu-lg-down-accordion me-lg-1">
                    <a class="menu-link py-3 {{ request()->routeIs('optimus-pro') ? 'active' : '' }}" href="{{ route('optimus-pro') }}">
                        <!-- TODO use chart SVG as menu-icon -->
                        <span class="menu-title">OptimusPro Analyzer</span>
                        <span class="menu-arrow d-lg-none"></span>
                    </a>
                </div>
                <div class="menu-item menu-lg-down-accordion me-lg-1">
                    <a class="menu-link py-3 {{ request()->routeIs('get-funded') ? 'active' : '' }}" href="{{ route('get-funded') }}">
                        <span class="menu-title">Get Funded</span>
                        <span class="menu-arrow d-lg-none"></span>
                    </a>
                </div>
                @if(Auth::user()->role == 'admin')
                <div class="menu-item menu-lg-down-accordion me-lg-1">
                    <a class="menu-link py-3 {{ request()->routeIs('administraight') ? 'active' : '' }}" href="{{ route('administraight') }}">
                        <span class="menu-title">Administration</span>
                        <span class="menu-arrow d-lg-none"></span>
                    </a>
                </div>
                @endif
                @if(Auth::user()->role == 'admin' || Auth::user()->role == 'staff')
                <div class="menu-item menu-lg-down-accordion me-lg-1">
                    <a class="menu-link py-3" target="_blank" rel="noopener noreferrer" href="{{ route('adminer-mail') }}">
                        <span class="menu-title">Webmail</span>
                        <span class="menu-arrow d-lg-none"></span>
                    </a>
                </div>
                @endif
            </div>
            <!--end::Menu-->
        </div>
        <!--end::Menu wrapper-->
    </div>
    <!--end::Container-->
</div>