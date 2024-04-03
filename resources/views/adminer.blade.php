<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
@include('partials.head')
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
				@include('partials.header')
                <!--end::Header-->
                <!--begin::Toolbar-->
                <div class="toolbar py-5 py-lg-5" id="kt_toolbar">
                    <!--begin::Container-->
                    <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
                        <!--begin::Page title-->
                        <div class="page-title d-flex flex-column me-3">
                            <!--begin::Title-->
                            <h1 class="d-flex text-dark fw-bolder my-1 fs-3">Administrator interface</h1>
                            <!--end::Title-->
							<!--begin::SubTitle-->
							<div class="text-gray-500 fw-bold fs-5 mb-5">Here you can view registered users</div>
							<!--end::SubTitle-->
                        </div>
                        <!--end::Page title-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Toolbar-->
                <!--begin::Container-->
                <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
                    <!--begin::Post-->
                    <div class="content flex-row-fluid" id="kt_content">
                        <!--begin::Card-->
                        <div class="card">
								<!--begin::Card header-->
								<div class="card-header border-0 pt-6">
									<!--begin::Card title-->
									<div class="card-title">
										<!--begin::Search-->
										<div class="d-flex align-items-center position-relative my-1">
											<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
											<span class="svg-icon svg-icon-1 position-absolute ms-6">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
													<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<input type="text" data-kt-subscription-table-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search..." />
										</div>
										<!--end::Search-->
									</div>
									<!--begin::Card title-->
									<!--begin::Card toolbar-->
									<div class="card-toolbar">
										<!--begin::Toolbar-->
										<div class="d-flex justify-content-end" data-kt-subscription-table-toolbar="base">
										</div>
										<!--end::Toolbar-->
										<!--begin::Group actions-->
										<div class="d-flex justify-content-end align-items-center d-none" data-kt-subscription-table-toolbar="selected">
											<div class="fw-bolder me-5">
											<span class="me-2" data-kt-subscription-table-select="selected_count"></span>Selected</div>
											<button type="button" class="btn btn-danger" data-kt-subscription-table-select="delete_selected">Delete Selected</button>
										</div>
										<!--end::Group actions-->
									</div>
									<!--end::Card toolbar-->
								</div>
								<!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Table-->
                                <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_subscriptions_table">
                                    <!--begin::Table head-->
                                    <thead>
                                        <!--begin::Table row-->
                                        <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                            <th class="w-10px pe-2">
                                                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                    <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_subscriptions_table .form-check-input" value="1" />
                                                </div>
                                            </th>
                                            <th class="min-w-125px">Customer</th>
                                            <th class="min-w-125px">Status</th><!-- Email Confirmed? -->
                                            <!-- <th class="min-w-125px">Billing</th> --><!-- TODO card or wallet(Paypal) -->
                                            <th class="min-w-125px">Got Funded?</th>
                                            <th class="min-w-125px">Active OptimusPro?</th>
                                            <th class="min-w-125px">Registration Date</th>
                                            <th class="text-end min-w-70px">Actions</th>
                                        </tr>
                                        <!--end::Table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody class="text-gray-600 fw-bold">
                                        @foreach ($users as $user)
                                        <tr>
                                            <!--begin::Checkbox-->
                                            <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                            </td>
                                            <!--end::Checkbox-->
                                            <!--begin::Customer=-->
                                            <td>
                                                <a href="javascript:void(0)" class="text-gray-800 text-hover-primary mb-1">{{ $user->name }}</a>
                                            </td>
                                            <!--end::Customer=-->
                                            <!--begin::Status=-->
                                            <td>
                                                @if ($user->email_verified_at)
                                                <div class="badge badge-light-success">Email Confirmed</div>
                                                @else
                                                 <div class="badge badge-light">Awaiting Email Confirmation</div>
                                                @endif
                                            </td>
                                            <!--end::Status=-->
                                            <!--begin::Billing=-->
                                            <!-- <td>
                                                <div class="badge badge-light">Auto-debit</div>
                                                <div class="badge badge-light">Manual - Credit Card</div>
                                                <div class="badge badge-light">Manual - Cash</div>
                                                <div class="badge badge-light">Manual - Paypal</div>
                                                <div class="badge badge-light">--</div>
                                            </td> -->
                                            <!--end::Billing=-->
                                            <!--begin::Product=-->
                                            @if($user->fundedAccounts->count() > 0)
                                                @if($user->fundedAccounts->where('active', true)->first())
                                                <td>Yes - ${{ number_format($user->fundedAccounts->where('active', true)->first()->funded_amount) }}</td>
                                                @else
                                                 <td>Waiting to be funded - ${{ number_format($user->fundedAccounts->first()->funded_amount) }}</td>
                                                 @endif
                                            @else
                                                <td>No</td>
                                             @endif
                                            <!--end::Product=-->
                                            <!--begin::Active OptimusPro=-->
                                            @if($user->subscribedToProduct(config('product.product_optimus_pro')))
                                            <td>Yes</td>
                                            @else
                                             <td>No</td>
                                             @endif
                                            <!--end::Active OptimusPro=-->
                                            <!--begin::Date=-->
                                            <td>{{$user->created_at}}</td>
                                            <!--end::Date=-->
                                            <!--begin::Action=-->
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                <span class="svg-icon svg-icon-5 m-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon--></a>
                                                <!--begin::Menu-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                                    @if($user->fundedAccounts->count() > 0)
                                                        @if($user->fundedAccounts->where('active', true)->first())
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a 
                                                                    href="#" 
                                                                    data-bs-toggle="modal" 
                                                                    data-name="{{$user->name}}" 
                                                                    data-email="{{$user->email}}" 
                                                                    data-bs-target="#kt_modal_view_account"
                                                                    class="menu-link px-3 view-account-modal" 
                                                                    data-login="{{$user->fundedAccounts->where('active', true)->first()->mt5_login}}"
                                                                    data-broker="{{$user->fundedAccounts->where('active', true)->first()->mt5_server}}" 
                                                                    data-amount="${{number_format($user->fundedAccounts->where('active', true)->first()->funded_amount)}}"
                                                                    data-password="{{$user->fundedAccounts->where('active', true)->first()->mt5_password}}">
                                                                    View Account
                                                                </a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        @else
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <!-- TODO data-bs-target="#kt_modal_new_account" -->
                                                                <a href="#" class="menu-link px-3" data-bs-toggle="modal">Fund Account</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        @endif
                                                    <!-- else -->
                                                        <!-- TODO -->
                                                        <!--begin::Menu item-->
                                                        <!-- <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_new_account">Activate Account Manually</a>
                                                        </div> -->
                                                        <!--end::Menu item-->
                                                    @endif
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" data-kt-subscriptions-table-filter="delete_row" class="menu-link px-3">Delete</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu-->
                                            </td>
                                            <!--end::Action=-->
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Post-->
                </div>
                <!--end::Container-->
                <!--begin::Footer-->
				@include('partials.footer')
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Root-->
    <!--begin::Modals-->
	<!--begin::Modal - New Account-->
	<div class="modal fade" id="kt_modal_new_account" tabindex="-1" aria-hidden="true">
		<!--begin::Modal dialog-->
		<div class="modal-dialog modal-dialog-centered mw-650px">
			<!--begin::Modal content-->
			<div class="modal-content">
				<!--begin::Modal header-->
				<div class="modal-header">
					<!--begin::Modal title-->
					<h2>Link Account</h2>
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
				<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
					<!--begin::Form-->
					<form id="kt_modal_new_card_form" class="form" action="#">
						<!--begin::Input group-->
						<div class="d-flex flex-column mb-7 fv-row">
							<!--begin::Label-->
							<label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
								<span class="required">Name On Card</span>
								<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a card holder's name"></i>
							</label>
							<!--end::Label-->
							<input type="text" class="form-control form-control-solid" placeholder="" name="card_name" value="Max Doe" />
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="d-flex flex-column mb-7 fv-row">
							<!--begin::Label-->
							<label class="required fs-6 fw-bold form-label mb-2">Card Number</label>
							<!--end::Label-->
							<!--begin::Input wrapper-->
							<div class="position-relative">
								<!--begin::Input-->
								<input type="text" class="form-control form-control-solid" placeholder="Enter card number" name="card_number" value="4111 1111 1111 1111" />
								<!--end::Input-->
								<!--begin::Card logos-->
								<div class="position-absolute translate-middle-y top-50 end-0 me-5">
									<img src="assets/media/svg/card-logos/visa.svg" alt="" class="h-25px" />
									<img src="assets/media/svg/card-logos/mastercard.svg" alt="" class="h-25px" />
									<img src="assets/media/svg/card-logos/american-express.svg" alt="" class="h-25px" />
								</div>
								<!--end::Card logos-->
							</div>
							<!--end::Input wrapper-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="row mb-10">
							<!--begin::Col-->
							<div class="col-md-8 fv-row">
								<!--begin::Label-->
								<label class="required fs-6 fw-bold form-label mb-2">Expiration Date</label>
								<!--end::Label-->
								<!--begin::Row-->
								<div class="row fv-row">
									<!--begin::Col-->
									<div class="col-6">
										<select name="card_expiry_month" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Month">
											<option></option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
										</select>
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<select name="card_expiry_year" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Year">
											<option></option>
											<option value="2021">2021</option>
											<option value="2022">2022</option>
											<option value="2023">2023</option>
											<option value="2024">2024</option>
											<option value="2025">2025</option>
											<option value="2026">2026</option>
											<option value="2027">2027</option>
											<option value="2028">2028</option>
											<option value="2029">2029</option>
											<option value="2030">2030</option>
											<option value="2031">2031</option>
										</select>
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
							</div>
							<!--end::Col-->
							<!--begin::Col-->
							<div class="col-md-4 fv-row">
								<!--begin::Label-->
								<label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
									<span class="required">CVV</span>
									<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Enter a card CVV code"></i>
								</label>
								<!--end::Label-->
								<!--begin::Input wrapper-->
								<div class="position-relative">
									<!--begin::Input-->
									<input type="text" class="form-control form-control-solid" minlength="3" maxlength="4" placeholder="CVV" name="card_cvv" />
									<!--end::Input-->
									<!--begin::CVV icon-->
									<div class="position-absolute translate-middle-y top-50 end-0 me-3">
										<!--begin::Svg Icon | path: icons/duotune/finance/fin002.svg-->
										<span class="svg-icon svg-icon-2hx">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path d="M22 7H2V11H22V7Z" fill="black" />
												<path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19ZM14 14C14 13.4 13.6 13 13 13H5C4.4 13 4 13.4 4 14C4 14.6 4.4 15 5 15H13C13.6 15 14 14.6 14 14ZM16 15.5C16 16.3 16.7 17 17.5 17H18.5C19.3 17 20 16.3 20 15.5C20 14.7 19.3 14 18.5 14H17.5C16.7 14 16 14.7 16 15.5Z" fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
									<!--end::CVV icon-->
								</div>
								<!--end::Input wrapper-->
							</div>
							<!--end::Col-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="d-flex flex-stack">
							<!--begin::Label-->
							<div class="me-5">
								<label class="fs-6 fw-bold form-label">Save Card for further billing?</label>
								<div class="fs-7 fw-bold text-muted">If you need more info, please check budget planning</div>
							</div>
							<!--end::Label-->
							<!--begin::Switch-->
							<label class="form-check form-switch form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" checked="checked" />
								<span class="form-check-label fw-bold text-muted">Save Card</span>
							</label>
							<!--end::Switch-->
						</div>
						<!--end::Input group-->
						<!--begin::Actions-->
						<div class="text-center pt-15">
							<button type="reset" id="kt_modal_new_card_cancel" class="btn btn-light me-3">Discard</button>
							<button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
								<span class="indicator-label">Submit</span>
								<span class="indicator-progress">Please wait...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
							</button>
						</div>
						<!--end::Actions-->
					</form>
					<!--end::Form-->
				</div>
				<!--end::Modal body-->
			</div>
			<!--end::Modal content-->
		</div>
		<!--end::Modal dialog-->
	</div>
	<!--end::Modal - New Account-->
	<!--begin::Modal - View Account-->
	<div class="modal fade" id="kt_modal_view_account" tabindex="-1" aria-hidden="true">
		<!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered">
			<!--begin::Modal content-->
			<div class="modal-content">
				<!--begin::Modal header-->
				<div class="modal-header">
					<!--begin::Modal title-->
					<h2>View Funded Account</h2>
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
				<div class="modal-body">
					<!--begin::Card-->
					<div class="card pt-3 mb-0">
						<!--begin::Card body-->
						<div class="card-body pt-0 fs-6">
							<!--begin::Section-->
							<div class="mb-7">
								<!--begin::Title-->
								<h5 class="mb-3">Name</h5>
								<!--end::Title-->
								<!--begin::Details-->
								<div class="d-flex align-items-center mb-1">
									<!--begin::Name-->
									<a href="#" id="modal-account-name" class="fw-bolder text-gray-800 text-hover-primary me-2"></a>
									<!--end::Name-->
									<!--begin::Status-->
									<span class="badge badge-light-success">Active</span>
									<!--end::Status-->
								</div>
								<!--end::Details-->
								<!--begin::Email-->
								<a href="#" id="modal-account-email" class="fw-bold text-gray-600 text-hover-primary"></a>
								<!--end::Email-->
							</div>
							<!--end::Section-->
							<!--begin::Seperator-->
							<div class="separator separator-dashed mb-7"></div>
							<!--end::Seperator-->
							<!--begin::Section-->
							<div class="mb-7">
								<!--begin::Title-->
								<h5 class="mb-3">Product details</h5>
								<!--end::Title-->
								<!--begin::Details-->
								<div class="mb-0">
									<!--begin::Plan-->
									<span class="badge badge-light-info me-2">Instant Funding</span>
									<!--end::Plan-->
									<!--begin::Price-->
									<span id="modal-account-amount" class="fw-bold text-gray-600"></span>
									<!--end::Price-->
								</div>
								<!--end::Details-->
							</div>
							<!--end::Section-->
							<!--begin::Seperator-->
							<div class="separator separator-dashed mb-7"></div>
							<!--end::Seperator-->
							<!--begin::Section-->
							<div class="mb-10">
								<!--begin::Title-->
								<h5 class="mb-3">Account Details</h5>
								<!--end::Title-->
								<!--begin::Details-->
								<div class="mb-2">
									<!--begin::info Title-->
									<div class="fw-bold d-flex align-items-center">Broker</div>
									<!--end::info Title-->
									<!--begin::Info Details-->
									<div id="modal-account-broker" class="fw-bold text-gray-600"></div>
									<!--end::Info Details-->
								</div>
								<!--end::Details-->
								<!--begin::Details-->
								<div class="mb-2">
									<!--begin::info Title-->
									<div class="fw-bold d-flex align-items-center">Login</div>
									<!--end::info Title-->
									<!--begin::Info Details-->
									<div id="modal-account-login" class="fw-bold text-gray-600"></div>
									<!--end::Info Details-->
								</div>
								<!--end::Details-->
								<!--begin::Details-->
								<div class="mb-2">
									<!--begin::info Title-->
									<div class="fw-bold d-flex align-items-center">Password</div>
									<!--end::info Title-->
									<!--begin::Info Details-->
									<div id="modal-account-password" class="fw-bold text-gray-600"></div>
									<!--end::Info Details-->
								</div>
								<!--end::Details-->
							</div>
							<!--end::Section-->
						</div>
						<!--end::Card body-->
					</div>
					<!--end::Card-->
				</div>
				<!--end::Modal body-->
			</div>
			<!--end::Modal content-->
		</div>
		<!--end::Modal dialog-->
	</div>
	<!--end::Modal - View Account-->
    <!--end::Modals-->
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
	@include('partials.global-scripts')
    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <!--end::Page Vendors Javascript-->
    <script src="assets/js/custom/apps/users/list.js"></script>
    <script>
        $(document).ready(function() {
            $('.view-account-modal').click(function() {
                // Retrieve the data-info attribute value
                var login = $(this).data('login');
                var broker = $(this).data('broker');
                var password = $(this).data('password');
                var name = $(this).data('name');
                var email = $(this).data('email');
                var amount = $(this).data('amount');
                
                console.log("login: " + login + " broker: " + broker + " password: " + password + " name: " + name + " email: " + email + " amount: " + amount);
                // Update the modal content. Assuming you have an element with ID `modalInfo` in your modal where you want to show the data
                $('#modal-account-login').text(login);
                $('#modal-account-broker').text(broker);
                $('#modal-account-password').text(password);
                $('#modal-account-name').text(name);
                $('#modal-account-email').text(email);
                $('#modal-account-amount').text(amount);
            });
            //on modal opened
            // $('#kt_modal_view_account').on('shown.bs.modal', function () {
            //   console.log('kt_modal_view_account is now open');
            // });
        });

    </script>


	@vite(['resources/js/bootstrap.js', 'resources/js/events.js'])
	<!--end::Page Custom Javascript-->
	<!--end::Javascript-->
</body>
<!--end::Body-->
</html>