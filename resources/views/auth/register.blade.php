<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
	<base href="../../../">
	<title>Rehoboth Traders - Awesome tools, get funded to trade</title>
	<meta name="description"
		content="Discover a suite of powerful tools designed to enhance your trading experience. Get funded to trade and unlock your potential in the forex market. Access advanced analysis, signals, indicators, and strategies to make informed trading decisions. Join Rehoboth Traders and take your trading to the next level." />
	<meta name="keywords"
		content="forex tools, trading tools, forex funding, get funded to trade, forex trading, forex market, forex analysis, forex signals, forex indicators, forex strategies" />

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
	<!--begin::Global Stylesheets Bundle(used by all pages)-->
	<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="bg-body">
	<!--begin::Main-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Authentication - Sign-up -->
		<div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed"
			style="background-image: url(assets/media/illustrations/sketchy-1/14.png">
			<!--begin::Content-->
			<div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
				<!--begin::Logo-->
				<a href="{{ route('dashboard') }}" class="mb-12">
					<img alt="Logo" src="assets/media/logos/logo.svg" class="h-40px" />
				</a>
				<!--end::Logo-->
				<!--begin::Wrapper-->
				<div class="w-lg-600px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
					<!--begin::Form-->
					<form class="form w-100" novalidate="novalidate" method="post" id="kt_sign_up_form" data-action="{{ route('register.post') }}">
                        @csrf
						<!--begin::Heading-->
						<div class="mb-10 text-center">
							<!--begin::Title-->
							<h1 class="text-dark mb-3">Create Account</h1>
							<!--end::Title-->
							<!--begin::Link-->
							<div class="text-gray-400 fw-bold fs-4">Already have an account?
								<a href="{{ route('login') }}" class="link-primary fw-bolder">Sign in here</a>
							</div>
							<!--end::Link-->
						</div>
						<!--end::Heading-->
						<div class="row fv-row mb-7">
							<!--begin::Col-->
							<div class="col-xl-6">
								<label class="form-label fw-bolder text-dark fs-6">First Name</label>
								<input class="form-control form-control-lg form-control-solid" type="text"
									placeholder="" name="first-name" autocomplete="off" />
							</div>
							<!--end::Col-->
							<!--begin::Col-->
							<div class="col-xl-6">
								<label class="form-label fw-bolder text-dark fs-6">Last Name</label>
								<input class="form-control form-control-lg form-control-solid" type="text"
									placeholder="" name="last-name" autocomplete="off" />
							</div>
							<!--end::Col-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="fv-row mb-7">
							<label class="form-label fw-bolder text-dark fs-6">Email</label>
							<input class="form-control form-control-lg form-control-solid" type="email" placeholder=""
								name="email" autocomplete="off" />
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="mb-10 fv-row" data-kt-password-meter="true">
							<!--begin::Wrapper-->
							<div class="mb-1">
								<!--begin::Label-->
								<label class="form-label fw-bolder text-dark fs-6">Password</label>
								<!--end::Label-->
								<!--begin::Input wrapper-->
								<div class="position-relative mb-3">
									<input class="form-control form-control-lg form-control-solid" type="password"
										placeholder="" name="password" autocomplete="off" />
									<span
										class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
										data-kt-password-meter-control="visibility">
										<i class="bi bi-eye-slash fs-2"></i>
										<i class="bi bi-eye fs-2 d-none"></i>
									</span>
								</div>
								<!--end::Input wrapper-->
								<!--begin::Meter-->
								<div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
									<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
									<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
									<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
									<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
								</div>
								<!--end::Meter-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Hint-->
							<div class="text-muted">Use 8 or more characters with a mix of letters, numbers &amp;
								symbols.</div>
							<!--end::Hint-->
						</div>
						<!--end::Input group=-->
						<!--begin::Input group-->
						<div class="fv-row mb-10">
							<div class="text-muted">By clicking the button below, i agree to the
								<a href="#" class="ms-1 link-primary">Terms & Condition</a>.
							</div>
						</div>
						<!--end::Input group-->
						<!--begin::Actions-->
						<div class="text-center">
							<button type="button" id="kt_sign_up_submit" class="btn btn-lg btn-primary">
								<span class="indicator-label">Submit</span>
								<span class="indicator-progress">Please wait...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
							</button>
						</div>
						<!--end::Actions-->
					</form>
					<!--end::Form-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Content-->
		</div>
		<!--end::Authentication - Sign-up-->
	</div>
	<!--end::Main-->
	<script>var hostUrl = "assets/";</script>
	<!--begin::Javascript-->
	<!--begin::Global Javascript Bundle(used by all pages)-->
	<script src="assets/plugins/global/plugins.bundle.js"></script>
	<script src="assets/js/scripts.bundle.js"></script>
	<!--end::Global Javascript Bundle-->
	<!--begin::Page Custom Javascript(used by this page)-->
	<script src="assets/js/custom/authentication/sign-up/general.js"></script>
	<!--end::Page Custom Javascript-->
	<!--end::Javascript-->
</body>
<!--end::Body-->

</html>