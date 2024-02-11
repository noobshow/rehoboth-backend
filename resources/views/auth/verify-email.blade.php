<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="../../">
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
			<!--begin::Authentication - Signup Welcome Message -->
			<div class="d-flex flex-column flex-column-fluid">
				<!--begin::Content-->
				<div class="d-flex flex-column flex-column-fluid text-center p-10 py-lg-15">
					<!--begin::Logo-->
					<a href="{{ route('dashboard') }}">
						<img alt="Logo" src="assets/media/logos/logo.svg" class="h-40px mb-5" />
					</a>
					<!--end::Logo-->
					<!--begin::Wrapper-->
					<div class="pt-lg-10 mb-10">
						<!--begin::Logo-->
						<h1 class="fw-bolder fs-2qx text-gray-800 mb-7">Verify Your Email</h1>
						<!--end::Logo-->
                        @if (session('status') == 'verification-link-sent')
                            <!--begin::Message-->
                            <div class="fs-3 fw-bold text-muted mb-10">We have sent an email to
                            <a href="#" class="link-primary fw-bolder">{{ Auth::user()->email }}</a>
                            <br />please follow the link to verify your email.</div>
                            <!--end::Message-->
                        @else
                            <!--begin::Message-->
                            <div class="fs-3 fw-bold text-muted mb-10">Before proceeding, please check your email for a verification link.</div>
                            <!--end::Message-->
                        @endif
						<!--begin::Action-->
						<div class="fs-5">
							<span class="fw-bold text-gray-700">Didn't receive an email?</span>
                            <form method="POST" action="{{ route('verification.send') }}">
                                @csrf
                                <button type="submit" class="btn link-primary fw-bolder">Resend</a>
                            </form>
						</div>
						<!--end::Action-->
					</div>
					<!--end::Wrapper-->
					<!--begin::Illustration-->
					<div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px" style="background-image: url(assets/media/illustrations/sketchy-1/17.png"></div>
					<!--end::Illustration-->
				</div>
				<!--end::Content-->
				<!--begin::Footer-->
				<div class="d-flex flex-center flex-column-auto p-10">
					<!--begin::Links-->
					<div class="d-flex align-items-center fw-bold fs-6">
						<a href="https://rehobothtraders.com" class="text-muted text-hover-primary px-2">Home</a>
						<a href="mailto:support@rehobothtraders.com" class="text-muted text-hover-primary px-2">Contact Us</a>
					</div>
					<!--end::Links-->
				</div>
				<!--end::Footer-->
			</div>
			<!--end::Authentication - Signup Welcome Message-->
		</div>
		<!--end::Main-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>