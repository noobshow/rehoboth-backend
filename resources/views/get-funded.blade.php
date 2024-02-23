<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
	<base href="">
	<title>Rehoboth Traders - Awesome tools, get funded to trade</title>
	<meta name="description" content="Discover a suite of powerful tools designed to enhance your trading experience. Get funded to trade and unlock your potential in the forex market. Access advanced analysis, signals, indicators, and strategies to make informed trading decisions. Join Rehoboth Traders and take your trading to the next level." />
	<meta name="keywords" content="forex tools, trading tools, forex funding, get funded to trade, forex trading, forex market, forex analysis, forex signals, forex indicators, forex strategies" />

	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta charset="utf-8" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Rehoboth Traders - Awesome tools, get funded to trade" />
	<meta property="og:url" content="https://rehobothtraders.com" />
	<meta property="og:site_name" content="Rehoboth Traders" />
	<link rel="canonical" href="https://dashboard.rehobothtraders.com/" />
	<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
	<!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Page Vendor Stylesheets(used by this page)-->
	<link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Page Vendor Stylesheets-->
	<!--begin::Global Stylesheets Bundle(used by all pages)-->
	<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Global Stylesheets Bundle-->
	<!-- <meta http-equiv="Content-Security-Policy" content="script-src 'self'  https://js.stripe.com/v3 'unsafe-inline' 'unsafe-eval';"> -->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled">
	<!--begin::Main-->
	<!--begin::Root-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Page-->
		<div class="page d-flex flex-row flex-column-fluid">
			<!--begin::Wrapper-->
			<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
				<!--begin::Header-->
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
							<a href="{{ route('dashboard') }}">
								<img alt="Logo" src="assets/media/logos/logo.svg" class="h-20px h-lg-30px" />
							</a>
						</div>
						<!--end::Header Logo-->
						<!--begin::Topbar-->
						<div class="d-flex align-items-center">
							<!--begin::Topbar-->
							<div class="d-flex align-items-center flex-shrink-0">
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
														<input class="form-check-input w-30px h-20px" type="checkbox" value="1" name="mode" id="kt_user_menu_dark_mode_toggle"/>
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
									<a class="menu-link py-3" href="{{ route('dashboard') }}">
										<span class="menu-title">Dashboard</span>
										<span class="menu-arrow d-lg-none"></span>
									</a>
								</div>
								<div class="menu-item menu-lg-down-accordion me-lg-1">
									<a class="menu-link py-3" href="{{ route('optimus-pro') }}">
										<!-- TODO use chart SVG as menu-icon -->
										<span class="menu-title">OptimusPro Analyzer</span>
										<span class="menu-arrow d-lg-none"></span>
									</a>
								</div>
								<div class="menu-item menu-lg-down-accordion me-lg-1">
									<a class="menu-link active py-3" href="{{ route('get-funded') }}">
										<span class="menu-title">Get Funded</span>
										<span class="menu-arrow d-lg-none"></span>
									</a>
								</div>
							</div>
							<!--end::Menu-->
						</div>
						<!--end::Menu wrapper-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Header-->
					<!--begin::Toolbar-->
					<div class="toolbar py-5 py-lg-5" id="kt_toolbar">
						<!--begin::Container-->
						<div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
							<!--begin::Page title-->
							<div class="page-title d-flex flex-column me-3">
								<!--begin::Title-->
								<h1 class="d-flex text-dark fw-bolder my-1 fs-3">Get Funded</h1>
								<!--end::Title-->
								<!--begin::SubTitle-->
								@if($is_actively_funded)
                                <div class="text-gray-500 fw-bold fs-5 mb-5">You have been funded</div>
								@elseif($is_funded_account)
								<div class="text-gray-500 fw-bold fs-5 mb-5">You funding request is being processed</div>
								@else
                                <div class="text-gray-500 fw-bold fs-5 mb-5">You have not been funded</div>
								@endif
								<!--end::SubTitle-->
							</div>
							<!--end::Page title-->
							<!--begin::Actions-->
							<div class="d-flex align-items-center py-2 py-md-1">
								<!--begin::Wrapper-->
								<div class="me-3">
									<!--begin::Menu-->
									<a href="#" class="btn btn-light-primary fw-bolder disabled" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                                        <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        Upgrade
                                    </a>
									<!--begin::Menu 1-->
									<!-- TODO -->
									<!--end::Menu 1-->
									<!--end::Menu-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Button-->
								<a href="#" class="btn btn-primary fw-bolder disabled" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app" id="kt_toolbar_primary_button">Extend</a>
								<!--end::Button-->
							</div>
							<!--end::Actions-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Toolbar-->
					<!--begin::Container-->
                    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
                        <!--begin::Post-->
                        <div class="content flex-row-fluid" id="kt_content">
							@if($is_actively_funded)
							<!--begin::Row-->
                            <div class="row g-5 g-xl-8">
                                <!--begin::Col-->
                                <div class="col-12">
                                    <div class="card mb-5 mb-xl-8">
                                        <!--begin::Header-->
                                        <div class="card-header border-0 pt-5">
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label fw-bolder fs-3 mb-1">Active Account</span>
                                                <span class="text-muted mt-1 fw-bold fs-7">Information about your funded account</span>
                                            </h3>
                                            <div class="card-toolbar">
                                                <!--begin::Menu-->
                                                <button type="button" class="btn btn-sm btn-icon disabled btn-color-primary btn-active-light-primary"
                                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                                    <span class="svg-icon svg-icon-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                            viewBox="0 0 24 24">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
                                                                data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: none;">
                                                                <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000"
                                                                    data-darkreader-inline-fill=""
                                                                    style="--darkreader-inline-fill: #e8e6e3;"></rect>
                                                                <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3"
                                                                    data-darkreader-inline-fill=""
                                                                    style="--darkreader-inline-fill: #e8e6e3;"></rect>
                                                                <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3"
                                                                    data-darkreader-inline-fill=""
                                                                    style="--darkreader-inline-fill: #e8e6e3;"></rect>
                                                                <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3"
                                                                    data-darkreader-inline-fill=""
                                                                    style="--darkreader-inline-fill: #e8e6e3;"></rect>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </button>
                                                <!--begin::Menu 2-->
												<!-- TODO -->
                                                <!--end::Menu 2-->
                                                <!--end::Menu-->
                                            </div>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="card-body py-3">
                                            <!--begin::Table container-->
                                            <div class="table-responsive">
                                                <!--begin::Table-->
                                                <table class="table align-middle"><!-- gs-0 gy-4 -->
                                                    <!--begin::Table head-->
                                                    <thead>
                                                        <tr class="fw-bolder text-muted bg-light">
                                                            <th class="ps-4  rounded-start">Level</th>
															<th class="min-w-125px">Account Type</th>
															<!-- 'mt5_login', mt5_server', mt5_password', funded_amount', -->
															<th class="min-w-125px">MT5 Login</th>
															<th class="min-w-125px">MT5 Server</th>
															<!-- <th class="min-w-125px">MT5 Password</th> -->
															<th class="min-w-125px">Funded Amount</th>
															<th class="min-w-125px">Status</th>
															<th class="min-w-125px">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <!--end::Table head-->
                                                    <!--begin::Table body-->
                                                    <tbody>
														@foreach($actively_funded as $active_account)
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex flex-column w-100 me-2">
																	<div class="d-flex flex-stack mb-2">
                                                                        <span class="badge badge-secondary fw-bolder fs-6">Level {{ $active_account->level }}</span>
																	</div>
																</div>
                                                            </td>
                                                            <td>
                                                                <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">Instant Funding</a>
                                                            </td>
                                                            <td>
                                                                <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">{{ $active_account->mt5_login }}</a>
                                                            </td>
                                                            <td>
                                                                <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">{{ $active_account->mt5_server }}</a>
                                                            </td>
                                                            <td>
                                                                <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">${{ number_format($active_account->funded_amount) }}</a>
                                                            </td>
                                                            <td>
                                                                <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">Active - Evaluation</a>
                                                            </td>
                                                            <td>
																<a href="javacript:void(0)" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 actively-funded-account"  data-clipboard-text="Login: {{ $active_account->mt5_login }} Password: {{ $active_account->mt5_password }} Server: {{ $active_account->mt5_server }}">  
																	<!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen054.svg-->
																	<span class="svg-icon svg-icon-muted svg-icon-2hx">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<path opacity="0.5" d="M18 2H9C7.34315 2 6 3.34315 6 5H8C8 4.44772 8.44772 4 9 4H18C18.5523 4 19 4.44772 19 5V16C19 16.5523 18.5523 17 18 17V19C19.6569 19 21 17.6569 21 16V5C21 3.34315 19.6569 2 18 2Z" fill="black"/>
																			<path fill-rule="evenodd" clip-rule="evenodd" d="M14.7857 7.125H6.21429C5.62255 7.125 5.14286 7.6007 5.14286 8.1875V18.8125C5.14286 19.3993 5.62255 19.875 6.21429 19.875H14.7857C15.3774 19.875 15.8571 19.3993 15.8571 18.8125V8.1875C15.8571 7.6007 15.3774 7.125 14.7857 7.125ZM6.21429 5C4.43908 5 3 6.42709 3 8.1875V18.8125C3 20.5729 4.43909 22 6.21429 22H14.7857C16.5609 22 18 20.5729 18 18.8125V8.1875C18 6.42709 16.5609 5 14.7857 5H6.21429Z" fill="black"/>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</a>
                                                            </td>
                                                        </tr>
														@endforeach
                                                    </tbody>
                                                    <!--end::Table body-->
                                                </table>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Table container-->
                                        </div>
                                        <!--begin::Body-->
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
							@elseif(!$is_actively_funded && $is_funded_account)
							<!--begin::Card-->
							<div class="card">
								<!--begin::Card body-->
								<div class="card-body pb-0">
									<!--begin::Heading-->
									<div class="card-px text-center pt-20 pb-5">
										<!--begin::Title-->
										<h2 class="fs-2x fw-bolder mb-0">We are processing your request</h2>
										<!--end::Title-->
										<!--begin::Description-->
										<p class="text-gray-400 fs-4 fw-bold py-7">Please, wait while we fund your account</p>
										<p class="text-gray-400 fs-4 fw-bold pb-3">You can check out OptimusPro Analyzer while you wait.</p>
										<!--end::Description-->
										<!--begin::Action-->
										<a href="{{ route('optimus-pro') }}" class="btn btn-primary er fs-6 px-8 py-4">Check out OptimusPro</a>
										<!--end::Action-->
									</div>
									<!--end::Heading-->
									<!--begin::Illustration-->
									<!-- <div class="text-center px-5">
										<img src="assets/media/illustrations/sketchy-1/8.png" alt="" class="mw-100 h-200px h-sm-325px" />
									</div> -->
									<!--end::Illustration-->
								</div>
								<!--end::Card body-->
							</div>
							<!--end::Card-->
							@else
							<div class="card bg-body border border-primary border-dotted h-100 bgi-no-repeat bgi-size-cover card-xxl-stretch mb-5 mb-xl-8">
								<!--begin::Body-->
								<div class="card-body pt-5 mb-xl-9 position-relative">
									<!--begin::Chart-->
									<div class="d-flex flex-center mb-5 mb-xxl-0">
										<div id="get_funded_upto_chart" style="height: 260px"></div>
									</div>
									<!--end::Chart-->
									<!--begin::Content-->
									<div class="text-center position-absolute bottom-0 start-50 translate-middle-x w-100 mb-10">
										<!--begin::Text-->
										<p class="fw-bold fs-4 text-gray-400 mb-7 px-5">Let's take over your risk, so you
											<br />worry less and trade better
										</p>
										<!--end::Text-->
										<!--begin::Action-->
										<div class="m-0">
											@if ($is_funded_account)
											<a href="{{ route('get-funded') }}" class="btn btn-success fw-bold">Get Funded</a>
											@else
											<a href="#" class="btn btn-success fw-bold" data-bs-toggle="modal" data-bs-target="#get_funded_modal">Get Funded</a>
											@endif
										</div>
										<!--ed::Action-->
									</div>
									<!--end::Content-->
								</div>
								<!--end::Body-->
							</div>
							@endif
                        </div>
                        <!--end::Post-->
                    </div>
					<!--end::Container-->
					<!--begin::Footer-->
					<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container-xxl d-flex flex-column flex-md-row align-items-center justify-content-between">
							<!--begin::Copyright-->
							<div class="text-dark order-2 order-md-1">
								<span class="text-muted fw-bold me-1">2024© Rehoboth Traders</span>
							</div>
							<!--end::Copyright-->
							<!--begin::Menu-->
							<ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
								<li class="menu-item">
									<a href="https://rehobothtraders.com" target="_blank" class="menu-link px-2">About</a>
								</li>
								<li class="menu-item">
									<a href="https://rehobothtraders.com/contact-us" target="_blank" class="menu-link px-2">Support</a>
								</li>
							</ul>
							<!--end::Menu-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
		<!--begin::Drawers-->
		<!--begin::Chat drawer-->
		<div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close">
			<!--begin::Messenger-->
			<div class="card w-100 rounded-0" id="kt_drawer_chat_messenger">
				<!--begin::Card header-->
				<div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
					<!--begin::Title-->
					<div class="card-title">
						<!--begin::User-->
						<div class="d-flex justify-content-center flex-column me-3">
							<a href="#" class="fs-4 fw-bolder text-gray-900 text-hover-primary me-1 mb-2 lh-1">Trade room chat</a>
							<!--begin::Info-->
							<div class="mb-0 lh-1">
								<span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
								<span class="fs-7 fw-bold text-muted">Active</span>
							</div>
							<!--end::Info-->
						</div>
						<!--end::User-->
					</div>
					<!--end::Title-->
					<!--begin::Card toolbar-->
					<div class="card-toolbar">
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_chat_close">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
							<span class="svg-icon svg-icon-2">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Close-->
					</div>
					<!--end::Card toolbar-->
				</div>
				<!--end::Card header-->
				<!--begin::Card body-->
				<div class="card-body" id="kt_drawer_chat_messenger_body">
					<!--begin::Messages-->
					<div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer" data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">
						<!--begin::Message(in)-->
						<div class="d-flex justify-content-start mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-start">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Details-->
									<div class="ms-3">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian Cox</a>
										<span class="text-muted fs-7 mb-1">2 mins</span>
									</div>
									<!--end::Details-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start" data-kt-element="message-text">How likely are you to recommend our company to your friends and family ?</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(in)-->
						<!--begin::Message(out)-->
						<div class="d-flex justify-content-end mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-end">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Details-->
									<div class="me-3">
										<span class="text-muted fs-7 mb-1">5 mins</span>
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
									</div>
									<!--end::Details-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end" data-kt-element="message-text">Hey there, we’re just writing to let you know that you’ve been subscribed to a repository on GitHub.</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(out)-->
						<!--begin::Message(in)-->
						<div class="d-flex justify-content-start mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-start">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Details-->
									<div class="ms-3">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian Cox</a>
										<span class="text-muted fs-7 mb-1">1 Hour</span>
									</div>
									<!--end::Details-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start" data-kt-element="message-text">Ok, Understood!</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(in)-->
						<!--begin::Message(out)-->
						<div class="d-flex justify-content-end mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-end">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Details-->
									<div class="me-3">
										<span class="text-muted fs-7 mb-1">2 Hours</span>
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
									</div>
									<!--end::Details-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end" data-kt-element="message-text">You’ll receive notifications for all issues, pull requests!</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(out)-->
						<!--begin::Message(in)-->
						<div class="d-flex justify-content-start mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-start">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Details-->
									<div class="ms-3">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian Cox</a>
										<span class="text-muted fs-7 mb-1">3 Hours</span>
									</div>
									<!--end::Details-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start" data-kt-element="message-text">You can unwatch this repository immediately by clicking here:
								<a href="https://keenthemes.com">Keenthemes.com</a></div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(in)-->
						<!--begin::Message(out)-->
						<div class="d-flex justify-content-end mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-end">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Details-->
									<div class="me-3">
										<span class="text-muted fs-7 mb-1">4 Hours</span>
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
									</div>
									<!--end::Details-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end" data-kt-element="message-text">Most purchased Business courses during this sale!</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(out)-->
						<!--begin::Message(in)-->
						<div class="d-flex justify-content-start mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-start">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Details-->
									<div class="ms-3">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian Cox</a>
										<span class="text-muted fs-7 mb-1">5 Hours</span>
									</div>
									<!--end::Details-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start" data-kt-element="message-text">Company BBQ to celebrate the last quater achievements and goals. Food and drinks provided</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(in)-->
						<!--begin::Message(template for out)-->
						<div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-end">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Details-->
									<div class="me-3">
										<span class="text-muted fs-7 mb-1">Just now</span>
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
									</div>
									<!--end::Details-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end" data-kt-element="message-text"></div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(template for out)-->
						<!--begin::Message(template for in)-->
						<div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-start">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Details-->
									<div class="ms-3">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian Cox</a>
										<span class="text-muted fs-7 mb-1">Just now</span>
									</div>
									<!--end::Details-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start" data-kt-element="message-text">Right before vacation season we have the next Big Deal for you.</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(template for in)-->
					</div>
					<!--end::Messages-->
				</div>
				<!--end::Card body-->
				<!--begin::Card footer-->
				<div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
					<!--begin::Input-->
					<textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input" placeholder="Type a message"></textarea>
					<!--end::Input-->
					<!--begin:Toolbar-->
					<div class="d-flex flex-stack">
						<!--begin::Actions-->
						<div class="d-flex align-items-center me-2">
							<button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
								<i class="bi bi-paperclip fs-3"></i>
							</button>
							<button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
								<i class="bi bi-upload fs-3"></i>
							</button>
						</div>
						<!--end::Actions-->
						<!--begin::Send-->
						<button class="btn btn-primary" type="button" data-kt-element="send">Send</button>
						<!--end::Send-->
					</div>
					<!--end::Toolbar-->
				</div>
				<!--end::Card footer-->
			</div>
			<!--end::Messenger-->
		</div>
		<!--end::Chat drawer-->
		<!--end::Drawers-->
		<!--begin::Modals-->
		@if (!$is_funded_account)
		<div class="modal fade" id="get_funded_modal" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-dialog-centered mw-900px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Modal header-->
					<div class="modal-header">
						<!--begin::Modal title-->
						<h2>Get Funded</h2>
						<!--end::Modal title-->
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
							<span class="svg-icon svg-icon-1">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Close-->
					</div>
					<!--end::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body py-lg-10 px-lg-10">
						<!--begin::Stepper-->
						<div class="stepper stepper-links d-flex flex-column pt-15" id="get_funded_stepper">
							<!--begin::Nav-->
							<div class="stepper-nav mb-5">
								<!--begin::Step 1-->
								<div class="stepper-item current" data-kt-stepper-element="nav">
									<h3 class="stepper-title">Account Type</h3>
								</div>
								<!--end::Step 1-->
								<!--begin::Step 2-->
								<div class="stepper-item" data-kt-stepper-element="nav">
									<h3 class="stepper-title">Account Plan</h3>
								</div>
								<!--end::Step 2-->
								<!--begin::Step 3-->
								<div class="stepper-item" data-kt-stepper-element="nav">
									<h3 class="stepper-title">Account Info</h3>
								</div>
								<!--end::Step 3-->
								<!--begin::Step 4-->
								<div class="stepper-item" data-kt-stepper-element="nav">
									<h3 class="stepper-title">Billing Details</h3>
								</div>
								<!--end::Step 4-->
								<!--begin::Step 5-->
								<div class="stepper-item" data-kt-stepper-element="nav">
									<h3 class="stepper-title">Get Funded</h3>
								</div>
								<!--end::Step 5-->
							</div>
							<!--end::Nav-->
							<!--begin::Form-->
							<div class="mx-auto mw-600px w-100 pt-15 pb-10" novalidate="novalidate" id="get_funded_form">
								<!--begin::Step 1-->
								<div class="current" data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-10 pb-lg-15">
											<!--begin::Title-->
											<h2 class="fw-bolder d-flex align-items-center text-dark">Choose Account Type</h2>
											<!--end::Title-->
											<!--begin::Notice-->
											<div class="text-muted fw-bold fs-6">To learn more, visit <a href="https://rehobothtraders.com/get-funded" class="link-primary fw-bolder">Get Funded
													Homepage</a>.</div>
											<!--end::Notice-->
										</div>
										<!--end::Heading-->
										<!--begin::Input group-->
										<div class="fv-row">
											<!--begin::Row-->
											<div class="row">
												<!--begin::Col-->
												<div class="col-lg-6">
													<!--begin::Option-->
													<input type="radio" class="btn-check" name="account_type" value="evaluation" disabled id="get_funded_account_type_evaluation" />
													<label class="btn btn-outline btn-outline-dashed btn-outline-default p-7 d-flex align-items-center mb-10" for="get_funded_account_type_evaluation">
														<!--begin::Svg Icon | path: assets/media/icons/duotune/abstract/abs019.svg-->
														<span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path d="M18.0002 22H6.00019C5.20019 22 4.8002 21.1 5.2002 20.4L12.0002 12L18.8002 20.4C19.3002 21.1 18.8002 22 18.0002 22Z" fill="black" />
																<path opacity="0.3" d="M18.8002 3.6L12.0002 12L5.20019 3.6C4.70019 3 5.20018 2 6.00018 2H18.0002C18.8002 2 19.3002 2.9 18.8002 3.6Z" fill="black" />
															</svg>
														</span>
														<!--end::Svg Icon-->
														<!--begin::Info-->
														<span class="d-block fw-bold text-start">
															<span class="text-dark fw-bolder d-block fs-4 mb-2 text-decoration-line-through">Evaluation
																Account</span>
															<span class="text-muted text-center fw-bold fs-6">You won't need to be
																evaluated, <b>you get funded instantly</b></span><!--  -->
														</span>
														<!--end::Info-->
													</label>
													<!--end::Option-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-6">
													<!--begin::Option-->
													<input type="radio" class="btn-check" name="account_type" value="instant" checked="checked" id="get_funded_account_type_instant" />
													<label class="btn btn-outline btn-outline-dashed btn-outline-default p-7 d-flex align-items-center" for="get_funded_account_type_instant">
														<!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
														<span class="svg-icon svg-icon-3x me-5">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="black" />
																<path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="black" />
															</svg>
														</span>
														<!--end::Svg Icon-->
														<!--begin::Info-->
														<span class="d-block fw-bold text-start">
															<span class="text-dark fw-bolder d-block fs-4 mb-2">Instant Funding</span>
															<span class="text-muted fw-bold fs-6">You get risk-free funding to trade
																instantly</span>
														</span>
														<!--end::Info-->
													</label>
													<!--end::Option-->
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
										</div>
										<!--end::Input group-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Step 1-->
								<!--begin::Step 2-->
								<div data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-10 pb-lg-15">
											<!--begin::Title-->
											<h2 class="fw-bolder text-dark">Account Plan</h2>
											<!--end::Title-->
											<!--begin::Notice-->
											<div class="text-muted fw-bold fs-6">To learn more, visit <a href="https://rehobothtraders.com/get-funded" class="link-primary fw-bolder">Get Funded
													Homepage</a>.</div>
											<!--end::Notice-->
										</div>
										<!--end::Heading-->
										<!--begin::Input group-->
										<div class="mb-10 fv-row nav nav-tabs d-block">
											<!-- d-block as a display hack -->
											<!--begin::Label-->
											<label class="d-flex align-items-center form-label mb-3">Select Account Plan
												<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="The selected plan determines how much you will be funded"></i></label>
											<!--end::Label-->
											<!--begin::Row-->
											<div class="row mb-2" data-kt-buttons="true">
												<!--begin::Col-->
												<div class="col">
													<!--begin::Option-->
													<label class="btn btn-outline btn-outline-dashed btn-outline-default w-100 p-4 active" data-bs-toggle="tab" data-bs-target="#tab_select_get_funded_80k_plan">
														<input type="radio" class="btn-check" name="account_plan_size" value="get-funded-80k" checked="checked" />
														<span class="fw-bolder fs-3">$80,000</span>
													</label>
													<!--end::Option-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col">
													<!--begin::Option-->
													<label class="btn btn-outline btn-outline-dashed btn-outline-default w-100 p-4" data-bs-toggle="tab" data-bs-target="#tab_select_get_funded_60k_plan">
														<input type="radio" class="btn-check" name="account_plan_size" value="get-funded-60k" />
														<span class="fw-bolder fs-3">$60,000</span>
													</label>
													<!--end::Option-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col">
													<!--begin::Option-->
													<label class="btn btn-outline btn-outline-dashed btn-outline-default w-100 p-4" data-bs-toggle="tab" data-bs-target="#tab_select_get_funded_40k_plan">
														<input type="radio" class="btn-check" name="account_plan_size" value="get-funded-40k" />
														<span class="fw-bolder fs-3">$40,000</span>
													</label>
													<!--end::Option-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col">
													<!--begin::Option-->
													<label class="btn btn-outline btn-outline-dashed btn-outline-default w-100 p-4" data-bs-toggle="tab" data-bs-target="#tab_select_get_funded_20k_plan">
														<input type="radio" class="btn-check" name="account_plan_size" value="get-funded-20k" />
														<span class="fw-bolder fs-3">$20,000</span>
													</label>
													<!--end::Option-->
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
											<!--begin::Hint-->
											<div class="form-text">The selected plan determines how much capital you will be funded</div>
											<!--end::Hint-->
										</div>
										<!--end::Input group-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Step 2-->
								<!--begin::Step 3-->
								<div data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Tab content-->
										<div class="tab-content">
											<!--begin::Tab Pane-->
											<div class="tab-pane fade show active" id="tab_select_get_funded_80k_plan">
												<!--begin::Body-->
												<div class="pt-1">
													<!--begin::Heading-->
													<div class="pb-10 pb-lg-12">
														<!--begin::Title-->
														<h2 class="fw-bolder text-dark">$80,000 Account Info</h2>
														<!--end::Title-->
														<!--begin::Notice-->
														<div class="text-muted fw-bold fs-6">To learn more, visit <a href="https://rehobothtraders.com/get-funded" class="link-primary fw-bolder">Get Funded Homepage</a>.</div>
														<!--end::Notice-->
													</div>
													<!--end::Heading-->
													<!--begin::Scroll-->
													<div class="scroll-y mh-300px me-n7 pe-7">
														<!--begin::Product-->
														<div class="fv-row">
															<!--begin::Feature-->
															<label class="d-flex align-items-center mb-5">
																<!--begin::Description-->
																<span class="d-flex flex-column me-3">
																	<!-- Title -->
																	<span class="fw-bolder">Phase 1 Funding</span>
																	<span class="text-gray-400 fw-bold fs-6">Initial capital you get</span>
																</span>
																<!--end::Description-->
																<!--begin::Pricing-->
																<span class="fw-bolder ms-auto">$20,000</span>
																<!--end::Pricing-->
															</label>
															<!--end::Feature-->
															<!--begin::Feature-->
															<label class="d-flex align-items-center mb-5">
																<!--begin::Description-->
																<span class="d-flex flex-column me-3">
																	<!-- Title -->
																	<span class="fw-bolder">Funded</span>
																	<span class="text-gray-400 fw-bold fs-6">How much capital you get after
																		Phase 1</span>
																</span>
																<!--end::Description-->
																<!--begin::Pricing-->
																<span class="fw-bolder ms-auto">$80,000</span>
																<!--end::Pricing-->
															</label>
															<!--end::Feature-->
															<!--begin::Feature-->
															<label class="d-flex align-items-center mb-5">
																<!--begin::Description-->
																<span class="d-flex flex-column me-3">
																	<!-- Title -->
																	<span class="fw-bolder">Time Limit</span>
																	<span class="text-gray-400 fw-bold fs-6">How long you are required to
																		meet target</span>
																</span>
																<!--end::Description-->
																<!--begin::Pricing-->
																<span class="fw-bolder ms-auto">Unlimited</span>
																<!--end::Pricing-->
															</label>
															<!--end::Feature-->
															<!--begin::Feature-->
															<label class="d-flex align-items-center mb-5">
																<!--begin::Description-->
																<span class="d-flex flex-column me-3">
																	<!-- Title -->
																	<span class="fw-bolder">Minimum Trading Days</span>
																	<span class="text-gray-400 fw-bold fs-6">Minimum Days to trade your
																		account for</span>
																</span>
																<!--end::Description-->
																<!--begin::Pricing-->
																<span class="fw-bolder ms-auto">Not Applicable</span>
																<!--end::Pricing-->
															</label>
															<!--end::Feature-->
															<!--begin::Feature-->
															<label class="d-flex align-items-center mb-5">
																<!--begin::Description-->
																<span class="d-flex flex-column me-3">
																	<!-- Title -->
																	<span class="fw-bolder">Phase 1 Profit Target</span>
																	<span class="text-gray-400 fw-bold fs-6">How much profit target required
																		to be fully funded</span>
																</span>
																<!--end::Description-->
																<!--begin::Pricing-->
																<span class="fw-bolder ms-auto">10%</span>
																<!--end::Pricing-->
															</label>
															<!--end::Feature-->
															<!--begin::Feature-->
															<label class="d-flex align-items-center mb-5">
																<!--begin::Description-->
																<span class="d-flex flex-column me-3">
																	<!-- Title -->
																	<span class="fw-bolder">Funded Profit Target</span>
																	<span class="text-gray-400 fw-bold fs-6">How much profit required before
																		your account get doubled</span>
																</span>
																<!--end::Description-->
																<!--begin::Pricing-->
																<span class="fw-bolder ms-auto">Scaling Plans*</span>
																<!--end::Pricing-->
															</label>
															<!--end::Feature-->
															<!--begin::Feature-->
															<label class="d-flex align-items-center mb-5">
																<!--begin::Description-->
																<span class="d-flex flex-column me-3">
																	<!-- Title -->
																	<span class="fw-bolder">Profit Share</span>
																	<span class="text-gray-400 fw-bold fs-6">How much of profits you
																		get</span>
																</span>
																<!--end::Description-->
																<!--begin::Pricing-->
																<span class="fw-bolder ms-auto">50%</span>
																<!--end::Pricing-->
															</label>
															<!--end::Feature-->
															<!--begin::Feature-->
															<label class="d-flex align-items-center mb-5">
																<!--begin::Description-->
																<span class="d-flex flex-column me-3">
																	<!-- Title -->
																	<span class="fw-bolder">Max Daily Drawdown</span>
																	<span class="text-gray-400 fw-bold fs-6">The maximum drawdown to not
																		exceed</span>
																</span>
																<!--end::Description-->
																<!--begin::Pricing-->
																<span class="fw-bolder ms-auto">Not Applicable</span>
																<!--end::Pricing-->
															</label>
															<!--end::Feature-->
															<!--begin::Feature-->
															<label class="d-flex align-items-center mb-5">
																<!--begin::Description-->
																<span class="d-flex flex-column me-3">
																	<!-- Title -->
																	<span class="fw-bolder">Max Absolute Drawdown</span>
																	<span class="text-gray-400 fw-bold fs-6">The maximum absolute drawdown
																		to not exceed</span>
																</span>
																<!--end::Description-->
																<!--begin::Pricing-->
																<span class="fw-bolder ms-auto">6%</span>
																<!--end::Pricing-->
															</label>
															<!--end::Feature-->
															<!--begin::Feature-->
															<label class="d-flex align-items-center mb-5">
																<!--begin::Description-->
																<span class="d-flex flex-column me-3">
																	<!-- Title -->
																	<span class="fw-bolder">Max Trailing Drawdown</span>
																	<span class="text-gray-400 fw-bold fs-6">The maximum trailing drawdown
																		to not exceed</span>
																</span>
																<!--end::Description-->
																<!--begin::Pricing-->
																<span class="fw-bolder ms-auto">Not Applicable</span>
																<!--end::Pricing-->
															</label>
															<!--end::Feature-->
															<!--begin::Feature-->
															<label class="d-flex align-items-center mb-5">
																<!--begin::Description-->
																<span class="d-flex flex-column me-3">
																	<!-- Title -->
																	<span class="fw-bolder">Drawdown Type</span>
																	<span class="text-gray-400 fw-bold fs-6">How we calculate your
																		drawdown</span>
																</span>
																<!--end::Description-->
																<!--begin::Pricing-->
																<span class="fw-bolder ms-auto">Balance Based</span>
																<!--end::Pricing-->
															</label>
															<!--end::Feature-->
															<!--begin::Feature-->
															<label class="d-flex align-items-center mb-5">
																<!--begin::Description-->
																<span class="d-flex flex-column me-3">
																	<!-- Title -->
																	<span class="fw-bolder">Phase 1 Leverage</span>
																	<span class="text-gray-400 fw-bold fs-6">Initial leverage you get for
																		Phase 1</span>
																</span>
																<!--end::Description-->
																<!--begin::Pricing-->
																<span class="fw-bolder ms-auto">Up to 1:10</span>
																<!--end::Pricing-->
															</label>
															<!--end::Feature-->
															<!--begin::Feature-->
															<label class="d-flex align-items-center mb-5">
																<!--begin::Description-->
																<span class="d-flex flex-column me-3">
																	<!-- Title -->
																	<span class="fw-bolder">Funded Leverage</span>
																	<span class="text-gray-400 fw-bold fs-6">Leverage your account get when
																		fully funded</span>
																</span>
																<!--end::Description-->
																<!--begin::Pricing-->
																<span class="fw-bolder ms-auto">Up to 1:33</span>
																<!--end::Pricing-->
															</label>
															<!--end::Feature-->
														</div>
														<!--end::Input group-->
													</div>
													<!--end::Scroll-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Tab Pane-->
											<!--begin::Tab Pane-->
											<div class="tab-pane fade" id="tab_select_get_funded_60k_plan">
												<!--begin::Body-->
												<div class="pt-1">
													<!--begin::Heading-->
													<div class="pb-10 pb-lg-12">
														<!--begin::Title-->
														<h2 class="fw-bolder text-dark">$60,000 Account Info</h2>
														<!--end::Title-->
														<!--begin::Notice-->
														<div class="text-muted fw-bold fs-6">To learn more, visit <a href="https://rehobothtraders.com/get-funded" class="link-primary fw-bolder">Get Funded Homepage</a>.</div>
														<!--end::Notice-->
													</div>
													<!--end::Heading-->
													<!--begin::Scroll-->
													<div class="scroll-y mh-300px me-n7 pe-7">
														<!--begin::Product-->
														<div class="fv-row">
															<!--begin::Feature-->
															<label class="d-flex align-items-center mb-5">
																<!--begin::Description-->
																<span class="d-flex flex-column me-3">
																	<!-- Title -->
																	<span class="fw-bolder">Phase 1 Funding</span>
																	<span class="text-gray-400 fw-bold fs-6">Initial capital you get</span>
																</span>
																<!--end::Description-->
																<!--begin::Pricing-->
																<span class="fw-bolder ms-auto">$15,000</span>
																<!--end::Pricing-->
															</label>
															<!--end::Feature-->
															<!--begin::Feature-->
															<label class="d-flex align-items-center mb-5">
																<!--begin::Description-->
																<span class="d-flex flex-column me-3">
																	<!-- Title -->
																	<span class="fw-bolder">Funded</span>
																	<span class="text-gray-400 fw-bold fs-6">How much capital you get after
																		Phase 1</span>
																</span>
																<!--end::Description-->
																<!--begin::Pricing-->
																<span class="fw-bolder ms-auto">$60,000</span>
																<!--end::Pricing-->
															</label>
															<!--end::Feature-->
															<!--begin::Feature-->
															<label class="d-flex align-items-center mb-5">
																<!--begin::Description-->
																<span class="d-flex flex-column me-3">
																	<!-- Title -->
																	<span class="fw-bolder">Time Limit</span>
																	<span class="text-gray-400 fw-bold fs-6">How long you are required to
																		meet target</span>
																</span>
																<!--end::Description-->
																<!--begin::Pricing-->
																<span class="fw-bolder ms-auto">Unlimited</span>
																<!--end::Pricing-->
															</label>
															<!--end::Feature-->
															<!--begin::Feature-->
															<label class="d-flex align-items-center mb-5">
																<!--begin::Description-->
																<span class="d-flex flex-column me-3">
																	<!-- Title -->
																	<span class="fw-bolder">Minimum Trading Days</span>
																	<span class="text-gray-400 fw-bold fs-6">Minimum Days to trade your
																		account for</span>
																</span>
																<!--end::Description-->
																<!--begin::Pricing-->
																<span class="fw-bolder ms-auto">Not Applicable</span>
																<!--end::Pricing-->
															</label>
															<!--end::Feature-->
															<!--begin::Feature-->
															<label class="d-flex align-items-center mb-5">
																<!--begin::Description-->
																<span class="d-flex flex-column me-3">
																	<!-- Title -->
																	<span class="fw-bolder">Phase 1 Profit Target</span>
																	<span class="text-gray-400 fw-bold fs-6">How much profit target required
																		to be fully funded</span>
																</span>
																<!--end::Description-->
																<!--begin::Pricing-->
																<span class="fw-bolder ms-auto">10%</span>
																<!--end::Pricing-->
															</label>
															<!--end::Feature-->
															<!--begin::Feature-->
															<label class="d-flex align-items-center mb-5">
																<!--begin::Description-->
																<span class="d-flex flex-column me-3">
																	<!-- Title -->
																	<span class="fw-bolder">Funded Profit Target</span>
																	<span class="text-gray-400 fw-bold fs-6">How much profit required before
																		your account get doubled</span>
																</span>
																<!--end::Description-->
																<!--begin::Pricing-->
																<span class="fw-bolder ms-auto">Scaling Plans*</span>
																<!--end::Pricing-->
															</label>
															<!--end::Feature-->
															<!--begin::Feature-->
															<label class="d-flex align-items-center mb-5">
																<!--begin::Description-->
																<span class="d-flex flex-column me-3">
																	<!-- Title -->
																	<span class="fw-bolder">Profit Share</span>
																	<span class="text-gray-400 fw-bold fs-6">How much of profits you
																		get</span>
																</span>
																<!--end::Description-->
																<!--begin::Pricing-->
																<span class="fw-bolder ms-auto">50%</span>
																<!--end::Pricing-->
															</label>
															<!--end::Feature-->
															<!--begin::Feature-->
															<label class="d-flex align-items-center mb-5">
																<!--begin::Description-->
																<span class="d-flex flex-column me-3">
																	<!-- Title -->
																	<span class="fw-bolder">Max Daily Drawdown</span>
																	<span class="text-gray-400 fw-bold fs-6">The maximum drawdown to not
																		exceed</span>
																</span>
																<!--end::Description-->
																<!--begin::Pricing-->
																<span class="fw-bolder ms-auto">Not Applicable</span>
																<!--end::Pricing-->
															</label>
															<!--end::Feature-->
															<!--begin::Feature-->
															<label class="d-flex align-items-center mb-5">
																<!--begin::Description-->
																<span class="d-flex flex-column me-3">
																	<!-- Title -->
																	<span class="fw-bolder">Max Absolute Drawdown</span>
																	<span class="text-gray-400 fw-bold fs-6">The maximum absolute drawdown
																		to not exceed</span>
																</span>
																<!--end::Description-->
																<!--begin::Pricing-->
																<span class="fw-bolder ms-auto">6%</span>
																<!--end::Pricing-->
															</label>
															<!--end::Feature-->
															<!--begin::Feature-->
															<label class="d-flex align-items-center mb-5">
																<!--begin::Description-->
																<span class="d-flex flex-column me-3">
																	<!-- Title -->
																	<span class="fw-bolder">Max Trailing Drawdown</span>
																	<span class="text-gray-400 fw-bold fs-6">The maximum trailing drawdown
																		to not exceed</span>
																</span>
																<!--end::Description-->
																<!--begin::Pricing-->
																<span class="fw-bolder ms-auto">Not Applicable</span>
																<!--end::Pricing-->
															</label>
															<!--end::Feature-->
															<!--begin::Feature-->
															<label class="d-flex align-items-center mb-5">
																<!--begin::Description-->
																<span class="d-flex flex-column me-3">
																	<!-- Title -->
																	<span class="fw-bolder">Drawdown Type</span>
																	<span class="text-gray-400 fw-bold fs-6">How we calculate your
																		drawdown</span>
																</span>
																<!--end::Description-->
																<!--begin::Pricing-->
																<span class="fw-bolder ms-auto">Balance Based</span>
																<!--end::Pricing-->
															</label>
															<!--end::Feature-->
															<!--begin::Feature-->
															<label class="d-flex align-items-center mb-5">
																<!--begin::Description-->
																<span class="d-flex flex-column me-3">
																	<!-- Title -->
																	<span class="fw-bolder">Phase 1 Leverage</span>
																	<span class="text-gray-400 fw-bold fs-6">Initial leverage you get for
																		Phase 1</span>
																</span>
																<!--end::Description-->
																<!--begin::Pricing-->
																<span class="fw-bolder ms-auto">Up to 1:10</span>
																<!--end::Pricing-->
															</label>
															<!--end::Feature-->
															<!--begin::Feature-->
															<label class="d-flex align-items-center mb-5">
																<!--begin::Description-->
																<span class="d-flex flex-column me-3">
																	<!-- Title -->
																	<span class="fw-bolder">Funded Leverage</span>
																	<span class="text-gray-400 fw-bold fs-6">Leverage your account get when
																		fully funded</span>
																</span>
																<!--end::Description-->
																<!--begin::Pricing-->
																<span class="fw-bolder ms-auto">Up to 1:33</span>
																<!--end::Pricing-->
															</label>
															<!--end::Feature-->
														</div>
														<!--end::Input group-->
													</div>
													<!--end::Scroll-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Tab Pane-->
											<!--begin::Tab Pane-->
											<div class="tab-pane fade" id="tab_select_get_funded_40k_plan">
												<!--begin::Body-->
												<div class="pt-1">
													<!--begin::Heading-->
													<div class="pb-10 pb-lg-12">
														<!--begin::Title-->
														<h2 class="fw-bolder text-dark">$40,000 Account Info</h2>
														<!--end::Title-->
														<!--begin::Notice-->
														<div class="text-muted fw-bold fs-6">To learn more, visit <a href="https://rehobothtraders.com/get-funded" class="link-primary fw-bolder">Get Funded Homepage</a>.</div>
														<!--end::Notice-->
													</div>
													<!--end::Heading-->
													<!--begin::Scroll-->
													<div class="scroll-y mh-300px me-n7 pe-7">
														<!--begin::Product-->
														<div class="fv-row">
															<!--begin::Feature-->
															<label class="d-flex align-items-center mb-5">
																<!--begin::Description-->
																<span class="d-flex flex-column me-3">
																	<!-- Title -->
																	<span class="fw-bolder">Phase 1 Funding</span>
																	<span class="text-gray-400 fw-bold fs-6">Initial capital you get</span>
																</span>
																<!--end::Description-->
																<!--begin::Pricing-->
																<span class="fw-bolder ms-auto">$10,000</span>
																<!--end::Pricing-->
															</label>
															<!--end::Feature-->
															<!--begin::Feature-->
															<label class="d-flex align-items-center mb-5">
																<!--begin::Description-->
																<span class="d-flex flex-column me-3">
																	<!-- Title -->
																	<span class="fw-bolder">Funded</span>
																	<span class="text-gray-400 fw-bold fs-6">How much capital you get after
																		Phase 1</span>
																</span>
																<!--end::Description-->
																<!--begin::Pricing-->
																<span class="fw-bolder ms-auto">$40,000</span>
																<!--end::Pricing-->
															</label>
															<!--end::Feature-->
															<!--begin::Feature-->
															<label class="d-flex align-items-center mb-5">
																<!--begin::Description-->
																<span class="d-flex flex-column me-3">
																	<!-- Title -->
																	<span class="fw-bolder">Time Limit</span>
																	<span class="text-gray-400 fw-bold fs-6">How long you are required to
																		meet target</span>
																</span>
																<!--end::Description-->
																<!--begin::Pricing-->
																<span class="fw-bolder ms-auto">Unlimited</span>
																<!--end::Pricing-->
															</label>
															<!--end::Feature-->
															<!--begin::Feature-->
															<label class="d-flex align-items-center mb-5">
																<!--begin::Description-->
																<span class="d-flex flex-column me-3">
																	<!-- Title -->
																	<span class="fw-bolder">Minimum Trading Days</span>
																	<span class="text-gray-400 fw-bold fs-6">Minimum Days to trade your
																		account for</span>
																</span>
																<!--end::Description-->
																<!--begin::Pricing-->
																<span class="fw-bolder ms-auto">Not Applicable</span>
																<!--end::Pricing-->
															</label>
															<!--end::Feature-->
															<!--begin::Feature-->
															<label class="d-flex align-items-center mb-5">
																<!--begin::Description-->
																<span class="d-flex flex-column me-3">
																	<!-- Title -->
																	<span class="fw-bolder">Phase 1 Profit Target</span>
																	<span class="text-gray-400 fw-bold fs-6">How much profit target required
																		to be fully funded</span>
																</span>
																<!--end::Description-->
																<!--begin::Pricing-->
																<span class="fw-bolder ms-auto">10%</span>
																<!--end::Pricing-->
															</label>
															<!--end::Feature-->
															<!--begin::Feature-->
															<label class="d-flex align-items-center mb-5">
																<!--begin::Description-->
																<span class="d-flex flex-column me-3">
																	<!-- Title -->
																	<span class="fw-bolder">Funded Profit Target</span>
																	<span class="text-gray-400 fw-bold fs-6">How much profit required before
																		your account get doubled</span>
																</span>
																<!--end::Description-->
																<!--begin::Pricing-->
																<span class="fw-bolder ms-auto">Scaling Plans*</span>
																<!--end::Pricing-->
															</label>
															<!--end::Feature-->
															<!--begin::Feature-->
															<label class="d-flex align-items-center mb-5">
																<!--begin::Description-->
																<span class="d-flex flex-column me-3">
																	<!-- Title -->
																	<span class="fw-bolder">Profit Share</span>
																	<span class="text-gray-400 fw-bold fs-6">How much of profits you
																		get</span>
																</span>
																<!--end::Description-->
																<!--begin::Pricing-->
																<span class="fw-bolder ms-auto">50%</span>
																<!--end::Pricing-->
															</label>
															<!--end::Feature-->
															<!--begin::Feature-->
															<label class="d-flex align-items-center mb-5">
																<!--begin::Description-->
																<span class="d-flex flex-column me-3">
																	<!-- Title -->
																	<span class="fw-bolder">Max Daily Drawdown</span>
																	<span class="text-gray-400 fw-bold fs-6">The maximum drawdown to not
																		exceed</span>
																</span>
																<!--end::Description-->
																<!--begin::Pricing-->
																<span class="fw-bolder ms-auto">Not Applicable</span>
																<!--end::Pricing-->
															</label>
															<!--end::Feature-->
															<!--begin::Feature-->
															<label class="d-flex align-items-center mb-5">
																<!--begin::Description-->
																<span class="d-flex flex-column me-3">
																	<!-- Title -->
																	<span class="fw-bolder">Max Absolute Drawdown</span>
																	<span class="text-gray-400 fw-bold fs-6">The maximum absolute drawdown
																		to not exceed</span>
																</span>
																<!--end::Description-->
																<!--begin::Pricing-->
																<span class="fw-bolder ms-auto">6%</span>
																<!--end::Pricing-->
															</label>
															<!--end::Feature-->
															<!--begin::Feature-->
															<label class="d-flex align-items-center mb-5">
																<!--begin::Description-->
																<span class="d-flex flex-column me-3">
																	<!-- Title -->
																	<span class="fw-bolder">Max Trailing Drawdown</span>
																	<span class="text-gray-400 fw-bold fs-6">The maximum trailing drawdown
																		to not exceed</span>
																</span>
																<!--end::Description-->
																<!--begin::Pricing-->
																<span class="fw-bolder ms-auto">Not Applicable</span>
																<!--end::Pricing-->
															</label>
															<!--end::Feature-->
															<!--begin::Feature-->
															<label class="d-flex align-items-center mb-5">
																<!--begin::Description-->
																<span class="d-flex flex-column me-3">
																	<!-- Title -->
																	<span class="fw-bolder">Drawdown Type</span>
																	<span class="text-gray-400 fw-bold fs-6">How we calculate your
																		drawdown</span>
																</span>
																<!--end::Description-->
																<!--begin::Pricing-->
																<span class="fw-bolder ms-auto">Balance Based</span>
																<!--end::Pricing-->
															</label>
															<!--end::Feature-->
															<!--begin::Feature-->
															<label class="d-flex align-items-center mb-5">
																<!--begin::Description-->
																<span class="d-flex flex-column me-3">
																	<!-- Title -->
																	<span class="fw-bolder">Phase 1 Leverage</span>
																	<span class="text-gray-400 fw-bold fs-6">Initial leverage you get for
																		Phase 1</span>
																</span>
																<!--end::Description-->
																<!--begin::Pricing-->
																<span class="fw-bolder ms-auto">Up to 1:10</span>
																<!--end::Pricing-->
															</label>
															<!--end::Feature-->
															<!--begin::Feature-->
															<label class="d-flex align-items-center mb-5">
																<!--begin::Description-->
																<span class="d-flex flex-column me-3">
																	<!-- Title -->
																	<span class="fw-bolder">Funded Leverage</span>
																	<span class="text-gray-400 fw-bold fs-6">Leverage your account get when
																		fully funded</span>
																</span>
																<!--end::Description-->
																<!--begin::Pricing-->
																<span class="fw-bolder ms-auto">Up to 1:33</span>
																<!--end::Pricing-->
															</label>
															<!--end::Feature-->
														</div>
														<!--end::Input group-->
													</div>
													<!--end::Scroll-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Tab Pane-->
											<!--begin::Tab Pane-->
											<div class="tab-pane fade" id="tab_select_get_funded_20k_plan">
												<!--begin::Body-->
												<div class="pt-1">
													<!--begin::Heading-->
													<div class="pb-10 pb-lg-12">
														<!--begin::Title-->
														<h2 class="fw-bolder text-dark">$20,000 Account Info</h2>
														<!--end::Title-->
														<!--begin::Notice-->
														<div class="text-muted fw-bold fs-6">To learn more, visit <a href="https://rehobothtraders.com/get-funded" class="link-primary fw-bolder">Get Funded Homepage</a>.</div>
														<!--end::Notice-->
													</div>
													<!--end::Heading-->
													<!--begin::Scroll-->
													<div class="scroll-y mh-300px me-n7 pe-7">
														<!--begin::Product-->
														<div class="fv-row">
															<!--begin::Feature-->
															<label class="d-flex align-items-center mb-5">
																<!--begin::Description-->
																<span class="d-flex flex-column me-3">
																	<!-- Title -->
																	<span class="fw-bolder">Phase 1 Funding</span>
																	<span class="text-gray-400 fw-bold fs-6">Initial capital you get</span>
																</span>
																<!--end::Description-->
																<!--begin::Pricing-->
																<span class="fw-bolder ms-auto">$5,000</span>
																<!--end::Pricing-->
															</label>
															<!--end::Feature-->
															<!--begin::Feature-->
															<label class="d-flex align-items-center mb-5">
																<!--begin::Description-->
																<span class="d-flex flex-column me-3">
																	<!-- Title -->
																	<span class="fw-bolder">Funded</span>
																	<span class="text-gray-400 fw-bold fs-6">How much capital you get after
																		Phase 1</span>
																</span>
																<!--end::Description-->
																<!--begin::Pricing-->
																<span class="fw-bolder ms-auto">$20,000</span>
																<!--end::Pricing-->
															</label>
															<!--end::Feature-->
															<!--begin::Feature-->
															<label class="d-flex align-items-center mb-5">
																<!--begin::Description-->
																<span class="d-flex flex-column me-3">
																	<!-- Title -->
																	<span class="fw-bolder">Time Limit</span>
																	<span class="text-gray-400 fw-bold fs-6">How long you are required to
																		meet target</span>
																</span>
																<!--end::Description-->
																<!--begin::Pricing-->
																<span class="fw-bolder ms-auto">Unlimited</span>
																<!--end::Pricing-->
															</label>
															<!--end::Feature-->
															<!--begin::Feature-->
															<label class="d-flex align-items-center mb-5">
																<!--begin::Description-->
																<span class="d-flex flex-column me-3">
																	<!-- Title -->
																	<span class="fw-bolder">Minimum Trading Days</span>
																	<span class="text-gray-400 fw-bold fs-6">Minimum Days to trade your
																		account for</span>
																</span>
																<!--end::Description-->
																<!--begin::Pricing-->
																<span class="fw-bolder ms-auto">Not Applicable</span>
																<!--end::Pricing-->
															</label>
															<!--end::Feature-->
															<!--begin::Feature-->
															<label class="d-flex align-items-center mb-5">
																<!--begin::Description-->
																<span class="d-flex flex-column me-3">
																	<!-- Title -->
																	<span class="fw-bolder">Phase 1 Profit Target</span>
																	<span class="text-gray-400 fw-bold fs-6">How much profit target required
																		to be fully funded</span>
																</span>
																<!--end::Description-->
																<!--begin::Pricing-->
																<span class="fw-bolder ms-auto">10%</span>
																<!--end::Pricing-->
															</label>
															<!--end::Feature-->
															<!--begin::Feature-->
															<label class="d-flex align-items-center mb-5">
																<!--begin::Description-->
																<span class="d-flex flex-column me-3">
																	<!-- Title -->
																	<span class="fw-bolder">Funded Profit Target</span>
																	<span class="text-gray-400 fw-bold fs-6">How much profit required before
																		your account get doubled</span>
																</span>
																<!--end::Description-->
																<!--begin::Pricing-->
																<span class="fw-bolder ms-auto">Scaling Plans*</span>
																<!--end::Pricing-->
															</label>
															<!--end::Feature-->
															<!--begin::Feature-->
															<label class="d-flex align-items-center mb-5">
																<!--begin::Description-->
																<span class="d-flex flex-column me-3">
																	<!-- Title -->
																	<span class="fw-bolder">Profit Share</span>
																	<span class="text-gray-400 fw-bold fs-6">How much of profits you
																		get</span>
																</span>
																<!--end::Description-->
																<!--begin::Pricing-->
																<span class="fw-bolder ms-auto">50%</span>
																<!--end::Pricing-->
															</label>
															<!--end::Feature-->
															<!--begin::Feature-->
															<label class="d-flex align-items-center mb-5">
																<!--begin::Description-->
																<span class="d-flex flex-column me-3">
																	<!-- Title -->
																	<span class="fw-bolder">Max Daily Drawdown</span>
																	<span class="text-gray-400 fw-bold fs-6">The maximum drawdown to not
																		exceed</span>
																</span>
																<!--end::Description-->
																<!--begin::Pricing-->
																<span class="fw-bolder ms-auto">Not Applicable</span>
																<!--end::Pricing-->
															</label>
															<!--end::Feature-->
															<!--begin::Feature-->
															<label class="d-flex align-items-center mb-5">
																<!--begin::Description-->
																<span class="d-flex flex-column me-3">
																	<!-- Title -->
																	<span class="fw-bolder">Max Absolute Drawdown</span>
																	<span class="text-gray-400 fw-bold fs-6">The maximum absolute drawdown
																		to not exceed</span>
																</span>
																<!--end::Description-->
																<!--begin::Pricing-->
																<span class="fw-bolder ms-auto">6%</span>
																<!--end::Pricing-->
															</label>
															<!--end::Feature-->
															<!--begin::Feature-->
															<label class="d-flex align-items-center mb-5">
																<!--begin::Description-->
																<span class="d-flex flex-column me-3">
																	<!-- Title -->
																	<span class="fw-bolder">Max Trailing Drawdown</span>
																	<span class="text-gray-400 fw-bold fs-6">The maximum trailing drawdown
																		to not exceed</span>
																</span>
																<!--end::Description-->
																<!--begin::Pricing-->
																<span class="fw-bolder ms-auto">Not Applicable</span>
																<!--end::Pricing-->
															</label>
															<!--end::Feature-->
															<!--begin::Feature-->
															<label class="d-flex align-items-center mb-5">
																<!--begin::Description-->
																<span class="d-flex flex-column me-3">
																	<!-- Title -->
																	<span class="fw-bolder">Drawdown Type</span>
																	<span class="text-gray-400 fw-bold fs-6">How we calculate your
																		drawdown</span>
																</span>
																<!--end::Description-->
																<!--begin::Pricing-->
																<span class="fw-bolder ms-auto">Balance Based</span>
																<!--end::Pricing-->
															</label>
															<!--end::Feature-->
															<!--begin::Feature-->
															<label class="d-flex align-items-center mb-5">
																<!--begin::Description-->
																<span class="d-flex flex-column me-3">
																	<!-- Title -->
																	<span class="fw-bolder">Phase 1 Leverage</span>
																	<span class="text-gray-400 fw-bold fs-6">Initial leverage you get for
																		Phase 1</span>
																</span>
																<!--end::Description-->
																<!--begin::Pricing-->
																<span class="fw-bolder ms-auto">Up to 1:10</span>
																<!--end::Pricing-->
															</label>
															<!--end::Feature-->
															<!--begin::Feature-->
															<label class="d-flex align-items-center mb-5">
																<!--begin::Description-->
																<span class="d-flex flex-column me-3">
																	<!-- Title -->
																	<span class="fw-bolder">Funded Leverage</span>
																	<span class="text-gray-400 fw-bold fs-6">Leverage your account get when
																		fully funded</span>
																</span>
																<!--end::Description-->
																<!--begin::Pricing-->
																<span class="fw-bolder ms-auto">Up to 1:33</span>
																<!--end::Pricing-->
															</label>
															<!--end::Feature-->
														</div>
														<!--end::Input group-->
													</div>
													<!--end::Scroll-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Tab Pane-->
										</div>
										<!--end::Tab content-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Step 3-->
								<!--begin::Step 4-->
								<div data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-10 pb-lg-15">
											<!--begin::Title-->
											<h2 class="fw-bolder text-dark">Billing Details</h2>
											<!--end::Title-->
											<!--begin::Notice-->
											<div class="text-muted fw-bold fs-6">If you need more info, please check out
												<a href="#" class="text-primary fw-bolder">Help Page</a>.
											</div>
											<!--end::Notice-->
										</div>
										<!--end::Heading-->
										<div>
											<!--begin::Tab-->
											<ul class="nav nav-tabs nav-stretch justify-content-center" id="paymentTab" role="tablist">
												<li class="nav-item" role="presentation">
													<button class="nav-link active" id="byCardTab" data-bs-toggle="tab" data-bs-target="#get-funded-byCard" type="button" role="tab" aria-controls="get-funded-byCard" aria-selected="true">Credit/Debit Card</button>
												</li>
												<li class="nav-item" role="presentation">
													<button class="nav-link" disabled id="byPaypalTab" data-bs-toggle="tab" data-bs-target="#byPaypal" type="button" role="tab" aria-controls="byPaypal" aria-selected="false">Paypal</button>
												</li>
											</ul>

											<!--begin::Tab Content-->
											<div class="tab-content mt-5">
												<!--begin::Credit/Debit Card Tab Pane-->
												<div class="tab-pane fade show active" id="creditDebitCard" role="tabpanel" aria-labelledby="creditDebitCardTab">
													<!--begin::Form-->
													<div id="get_funded_card_form">
														<!--begin::Input group-->
														<div class="d-flex flex-column mb-7 fv-row">
															<!--begin::Label-->
															<label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
																<span class="required">Name On Card</span>
																<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a card holder's name"></i>
															</label>
															<!--end::Label-->
															<input type="hidden" name="email" value="{{ Auth::user()->email }}" />
															<input type="text" class="form-control form-control-solid" placeholder="As shown on the card" name="card_name" value="{{ Auth::user()->name }}" />
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="d-flex flex-column mb-7 fv-row">
															<!--begin::Label-->
															<label class="required fs-6 fw-bold form-label mb-2">Card Info</label>
															<!--end::Label-->
															<div id="card-element"></div>
														</div>
														<!--end::Input group-->
													</div>
													<!--end::Form-->
												</div>
												<!--end::Credit/Debit Card Tab Pane-->

												<!--begin::Paypal Tab Pane-->
												<div class="tab-pane fade" id="byPaypal" role="tabpanel" aria-labelledby="byPaypalTab">
													<!-- Add your Paypal form here -->
												</div>
												<!--end::Paypal Tab Pane-->
											</div>
											<!--end::Tab Content-->
										</div>
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Step 4-->
								<!--begin::Step 5-->
								<div data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-8 pb-lg-10">
											<!--begin::Title-->
											<h2 class="fw-bolder text-dark text-center">You Are Ready to go!</h2>
											<!--end::Title-->
										</div>
										<!--end::Heading-->
										<!--begin::Body-->
										<div class="mb-0">
											<!--begin::Alert-->
											<!--begin::Notice-->
											<div class="notice d-flex bg-light-success rounded border-warning border border-dashed p-6">
												<!--begin::Icon-->
												<!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
												<span class="svg-icon svg-icon-2tx svg-icon-success me-4">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
														<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="black" />
														<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
												<!--end::Icon-->
												<!--begin::Wrapper-->
												<div class="d-flex flex-stack flex-grow-1">
													<!--begin::Content-->
													<div class="fw-bold">
														<h4 class="text-gray-900 fw-bolder">You request to Get Funded is successful</h4>
														<h4 class="text-gray-900 fw-bolder">You are automatically subscribed to OptimusPro Analyzer</h4>
														<div class="fs-6 text-gray-700">Your "Funded" account will be ready for usage between 24-72 hours.</div>
														<div class="fs-6 text-gray-700">While you wait, you can start using amazing tools at your disposal.</div>
													</div>
													<!--end::Content-->
												</div>
												<!--end::Wrapper-->
												<!--begin::Wrapper-->
												<div class="d-flex flex-stack flex-grow-1">
													<!--begin::Content-->
													<div class="fw-bold text-center">
													</div>
													<!--end::Content-->
												</div>
												<!--end::Wrapper-->
											</div>
											<!--end::Notice-->
											<!--end::Alert-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Step 5-->
								<!--begin::Actions-->
								<div class="d-flex flex-stack pt-15">
									<!--begin::Wrapper-->
									<div class="mr-2">
										<button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
											<span class="svg-icon svg-icon-4 me-1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="black" />
													<path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->Back</button>
									</div>
									<!--end::Wrapper-->
									<!--begin::Wrapper-->
									<div>
										<button type="button" class="btn btn-lg btn-primary me-3" data-kt-stepper-action="submit">
											<span class="indicator-label">Pay Now
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
												<span class="svg-icon svg-icon-3 ms-2 me-0">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
														<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon--></span>
											<span class="indicator-progress">Please wait...
												<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										</button>
										<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Continue
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
											<span class="svg-icon svg-icon-4 ms-1 me-0">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
													<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon--></button>
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Actions-->
							</div>
							<!--end::Form-->
						</div>
						<!--end::Stepper-->
					</div>
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		@endif
			<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
			<span class="svg-icon">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
					<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
				</svg>
			</span>
			<!--end::Svg Icon-->
		</div>
		<!--end::Scrolltop-->
		<!--end::Main-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="assets/js/custom/widgets.js"></script>
		<script src="assets/js/custom/apps/chat/chat.js"></script>
		<script src="https://js.stripe.com/v3/"></script>
		<script>
			const stripe = Stripe("{{ config('cashier.key') }}");

			const elements = stripe.elements();
			const cardElement = elements.create('card');

			//mount card element on tab-pane that is active
			$('#get_funded_modal').on('shown.bs.modal', function(e) {
				cardElement.mount('#card-element');
			})
			//unmount card element on tab-pane that is not active
			$('#get_funded_modal').on('hidden.bs.modal', function(e) {
				cardElement.unmount('#card-element');
			})
		</script>
		<script src="assets/js/custom/modals/create-get-funded.js"></script>
		<script> 
        KTUtil.each(document.getElementsByClassName('actively-funded-account'), function(table) {
            var clipboard = new ClipboardJS(table);
        
            clipboard.on('success', function(e) {
				//Swal alert
				Swal.fire({
					icon: "success",
					buttonsStyling: false,
					confirmButtonText: "Ok, got it!",
					text: "Account details successfully copied.",
					customClass: {
						confirmButton: "btn btn-primary"
					}
				});
            });
        });
		</script>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>