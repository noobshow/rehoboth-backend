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
				<!--begin::Container-->
				<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
					<!--begin::Post-->
					<div class="content flex-row-fluid" id="kt_content">
						<!--begin::Row-->
						<div class="row g-5 g-xxl-8">
							<!--begin::Col-->
							<div class="col-xxl-12">
								<!--begin::Row-->
								<div class="row gx-5 gx-xl-8 mb-5 mb-xl-8">
									<div class="col-xxl-12">
										<!--begin::Tiles Widget 4-->
										<div class="card card-xxl-stretch">
											<!--begin::Body-->
											<div class="card-body d-flex align-items-center flex-wrap bg-light-primary rounded border-primary border border-dashed">
												<!--begin::Icon-->
												<!--begin::Svg Icon | path: icons/duotune/coding/cod004.svg-->
												<span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black" />
														<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
												<!--end::Icon-->
												<div class="me-2">
													<h2 class="fw-bolder text-gray-800 mb-3">Welcome to your Trade Room, {{ explode(' ', Auth::user()->name)[0] }}!</h2>
													<!-- Access trade signals, analytical dashboard, and more powerful tools for informed decision-making. -->
													<div class="text-muted fw-bold fs-6">Access trade signals, analytical dashboard, and more powerful tools.</div>
												</div>
											</div>
											<!--end::Body-->
										</div>
										<!--end::Tiles Widget 4-->
									</div>
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								<div class="row gx-5 gx-xl-8 mb-5 mb-xl-8">
									<!--begin::Col-->
									<div><!-- TODO  class="col-xxl-6" -->
										<!--begin::Tiles Widget 2-->
										<div class="card h-175px bgi-no-repeat bgi-size-cover card-xxl-stretch mb-5 mb-xl-8" style="background-color: #663259; background-position: calc(100% + 0.5rem) 100%;background-size: 100% auto;background-image:url('assets/media/svg/misc/taieri.svg')">
											<!--begin::Body-->
											<div class="card-body d-flex flex-column justify-content-between">
												<!--begin::Title-->
												<!-- Increase Your Trading Probability -->
												<h3 class="text-white fw-bolder line-height-lg mb-5">Want to Supercharge
													<br />Your Trading Portfolio?
												</h3>
												<!--end::Title-->
												<!--begin::Action-->
												<div class="m-0">
													<!-- OptimusPro Analyzer -->
													@if ($is_valid_optimus_user)
													<a href="{{ route('optimus-pro') }}" class="btn btn-success fw-bold px-6 py-3">Check this out</a>
													@else
													<a href="#" class="btn btn-success fw-bold px-6 py-3" data-bs-toggle="modal" data-bs-target="#modal_purchase_optimus_pro">Check this out</a>
													@endif
												</div>
												<!--begin::Action-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Tiles Widget 2-->
										<div class="row gx-5 gx-xl-8">
											<!--begin::Col-->
											<div class="col-xxl-6">
												<!--begin::Tiles Widget 5-->
												<a 
												class="card bg-primary card-xxl-stretch"
											@if ($is_funded_account)
												href="{{ route('get-funded') }}" 
											@else
												href="#" data-bs-toggle="modal" data-bs-target="#get_funded_modal"
											@endif
												>
													<!--begin::Body-->
													<div class="card-body">
														<!--begin::Svg Icon | path: icons/duotune/general/gen002.svg-->
														<span class="svg-icon svg-icon-white svg-icon-2hx ms-n1">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M4.05424 15.1982C8.34524 7.76818 13.5782 3.26318 20.9282 2.01418C21.0729 1.98837 21.2216 1.99789 21.3618 2.04193C21.502 2.08597 21.6294 2.16323 21.7333 2.26712C21.8372 2.37101 21.9144 2.49846 21.9585 2.63863C22.0025 2.7788 22.012 2.92754 21.9862 3.07218C20.7372 10.4222 16.2322 15.6552 8.80224 19.9462L4.05424 15.1982ZM3.81924 17.3372L2.63324 20.4482C2.58427 20.5765 2.5735 20.7163 2.6022 20.8507C2.63091 20.9851 2.69788 21.1082 2.79503 21.2054C2.89218 21.3025 3.01536 21.3695 3.14972 21.3982C3.28408 21.4269 3.42387 21.4161 3.55224 21.3672L6.66524 20.1802L3.81924 17.3372ZM16.5002 5.99818C16.2036 5.99818 15.9136 6.08615 15.6669 6.25097C15.4202 6.41579 15.228 6.65006 15.1144 6.92415C15.0009 7.19824 14.9712 7.49984 15.0291 7.79081C15.0869 8.08178 15.2298 8.34906 15.4396 8.55884C15.6494 8.76862 15.9166 8.91148 16.2076 8.96935C16.4986 9.02723 16.8002 8.99753 17.0743 8.884C17.3484 8.77046 17.5826 8.5782 17.7474 8.33153C17.9123 8.08486 18.0002 7.79485 18.0002 7.49818C18.0002 7.10035 17.8422 6.71882 17.5609 6.43752C17.2796 6.15621 16.8981 5.99818 16.5002 5.99818Z" fill="black" />
																<path d="M4.05423 15.1982L2.24723 13.3912C2.15505 13.299 2.08547 13.1867 2.04395 13.0632C2.00243 12.9396 1.9901 12.8081 2.00793 12.679C2.02575 12.5498 2.07325 12.4266 2.14669 12.3189C2.22013 12.2112 2.31752 12.1219 2.43123 12.0582L9.15323 8.28918C7.17353 10.3717 5.4607 12.6926 4.05423 15.1982ZM8.80023 19.9442L10.6072 21.7512C10.6994 21.8434 10.8117 21.9129 10.9352 21.9545C11.0588 21.996 11.1903 22.0083 11.3195 21.9905C11.4486 21.9727 11.5718 21.9252 11.6795 21.8517C11.7872 21.7783 11.8765 21.6809 11.9402 21.5672L15.7092 14.8442C13.6269 16.8245 11.3061 18.5377 8.80023 19.9442ZM7.04023 18.1832L12.5832 12.6402C12.7381 12.4759 12.8228 12.2577 12.8195 12.032C12.8161 11.8063 12.725 11.5907 12.5653 11.4311C12.4057 11.2714 12.1901 11.1803 11.9644 11.1769C11.7387 11.1736 11.5205 11.2583 11.3562 11.4132L5.81323 16.9562L7.04023 18.1832Z" fill="black" />
															</svg>
														</span>
														<!--end::Svg Icon-->
														<div class="text-inverse-primary fw-bolder fs-1 mb-2 mt-5" data-kt-countup="true" data-kt-countup-value="2" data-kt-countup-suffix="m+" data-kt-countup-prefix="$">$2m+</div>
														<div class="fw-bold text-inverse-primary fs-6">Risk-free Capital</div>
													</div>
													<!--end::Body-->
												</a>
												<!--end::Tiles Widget 5-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-xxl-6">
												<!--begin::Tiles Widget 5-->
												@if ($is_valid_optimus_user)
												<a href="{{ route('optimus-pro') }}" class="card bg-bg-body card-xxl-stretch">
													@else
													<a href="#" data-bs-toggle="modal" data-bs-target="#modal_purchase_optimus_pro" class="card bg-bg-body card-xxl-stretch">
														@endif
														<!--begin::Body-->
														<div class="card-body border border-primary border-active active rounded">
															<!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
															<span class="svg-icon svg-icon-success svg-icon-2hx ms-n1">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="black" />
																	<path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="black" />
																</svg>
															</span>
															<!--end::Svg Icon-->
															<div class="text-inverse-bg-body fw-bolder fs-1 mb-2 mt-5" data-kt-countup="true" data-kt-countup-value="3650" data-kt-countup-suffix="+ <span class='fw-lighter fs-6'>Pips</span>">3,650+ <span class="fw-lighter fs-6">Pips</span></div>
															<div class="fw-bold text-inverse-bg-body fs-6">Profitable Signals</div>
														</div>
														<!--end::Body-->
													</a>
													<!--end::Tiles Widget 5-->
											</div>
											<!--end::Col-->
										</div>
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
							</div>
							<!--end::Col-->
						</div>
						<!--end::Row-->
					</div>
					<!--end::Post-->
				</div>
				<!--end::Container-->
				<!--begin::Container-->
				<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
					<!--begin::Post-->
					<div class="content flex-row-fluid" id="kt_content">
						<!--begin::Row-->
						<div class="row gy-0 gx-10">
							<!--begin::Col-->
							<div class="col-xl">
								<!--begin::General Widget 1-->
								<div class="mb-10">
									<!--begin::Tables Widget 2-->
									<div class="card card-xl-stretch mb-5 mb-xl-8">
										<!--begin::Header-->
										<div class="card-header border-0 pt-5">
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bolder fs-3 mb-1">Trade Blotter</span>
												<span class="text-muted mt-1 fw-bold fs-7">Keep track of executed trades</span>
											</h3>
											<div class="card-toolbar">
												<!--begin::Menu-->
												<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary disabled" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
													<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
													<span class="svg-icon svg-icon-2">
														<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: none;">
																<rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #e8e6e3;"></rect>
																<rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #e8e6e3;"></rect>
																<rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #e8e6e3;"></rect>
																<rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #e8e6e3;"></rect>
															</g>
														</svg>
													</span>
													<!--end::Svg Icon-->
												</button>
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
														<tr class="fw-bolder bg-light-success">
															<th class="fs-7 fw-bolder">Assets</th>
															<th class="fs-7 fw-bolder">Time</th>
															<th class="fs-7 fw-bolder">Size</th>
															<th class="fs-7 fw-bolder">Price</th>
															<th class="fs-7 fw-bolder">S/L</th>
															<th class="fs-7 fw-bolder">TP</th>
															<th class="fs-7 fw-bolder">P/L</th>
														</tr>
													</thead>
													<!--end::Table head-->
													<!--begin::Table body-->
													<tbody id="optimus_pro_trade_blotters">
														<tr id="optimus_pro_trade_blotters_placeholder" class="d-none">
															<td id="placeholder_trade_blotters_asset" class="fw-bold"></td>
															<td>
																<span id="placeholder_trade_blotters_time" class="fs-7 fw-bolder"></span>
															</td>
															<td>
																<span id="placeholder_trade_blotters_size" style="color: dark;" class="fs-7 fw-bolder"></span>
															</td>
															<td>
																<span id="placeholder_trade_blotters_price" class="fs-7 fw-bolder"></span>
															</td>
															<td>
																<span id="placeholder_trade_blotters_sl" class="fs-7 fw-bolder"></span>
															</td>
															<td>
																<span id="placeholder_trade_blotters_tp" class="fs-7 fw-bolder"></span>
															</td>
															<td>
																<span id="placeholder_trade_blotters_pl" style="color: dark;" class="fs-7 fw-bolder"></span>
															</td>
														</tr>
														@foreach($trade_blotter_data as $trade)
														<tr>
															<td class="fw-bold">
																{{ $trade->asset }}
															</td>
															<td>
																<span class="fs-7 fw-bolder">{{ $trade->time }}</span>
															</td>
															<td>
																<span style="color: {{ $trade->size_clr }};" class="fs-7 fw-bolder">{{ $trade->size }}</span>
															</td>
															<td>
																<span class="fs-7 fw-bolder">{{ $trade->price }}</span>
															</td>
															<td>
																<span class="fs-7 fw-bolder">{{ $trade->sl }}</span>
															</td>
															<td>
																<span class="fs-7 fw-bolder">{{ $trade->tp }}</span>
															</td>
															<td>
																<span style="color: {{ $trade->pl_clr }};" class="fs-7 fw-bolder">{{ $trade->pl }}</span>
															</td>
														</tr>
														@endforeach
													</tbody>
													<!--end::Table body-->
												</table>
											</div>
											<!--end::Table container-->
										</div>
										<!--begin::Body-->
									</div>
									<!--end::Tables Widget 2-->
								</div>
								<!--end::General Widget 1-->
								<!--begin::General Widget 1-->
								<div class="mb-10">
									<!--begin::Tables Widget 2-->
									<div class="card card-xl-stretch mb-5 mb-xl-8">
										<!--begin::Header-->
										<div class="card-header border-0 pt-5">
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bolder fs-3 mb-1">Technical Outlook</span>
												<span class="text-muted mt-1 fw-bold fs-7">AI-assisted Technical Outlook</span>
											</h3>
											<div class="card-toolbar">
												<!--begin::Menu-->
												<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary disabled" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
													<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
													<span class="svg-icon svg-icon-2">
														<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: none;">
																<rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #e8e6e3;"></rect>
																<rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #e8e6e3;"></rect>
																<rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #e8e6e3;"></rect>
																<rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #e8e6e3;"></rect>
															</g>
														</svg>
													</span>
													<!--end::Svg Icon-->
												</button>
												<!--end::Menu-->
											</div>
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body py-3">
											<!--begin::Row-->
											<div class="row g-5 g-xl-8">
												<!--begin::Col-->
												<div class="col-xl-6">
													<!--begin::Table container-->
													<div class="table-responsive">
														<!--begin::Table-->
														<table class="table align-middle"><!-- gs-0 gy-4 -->
															<!--begin::Table head-->
															<thead>
																<tr class="fw-bolder bg-light-success">
																	<th class="ps-4 text-center">Daily Candle Analysis</th>
																</tr>
															</thead>
															<!--end::Table head-->
															<!--begin::Table body-->
															<tbody id="optimus_pro_candle">
																<tr id="optimus_pro_candle_placeholder" class="d-none">
																	<td id="optimus_pro_candle_td" style="color: dark;" class="fw-bold">
																		<div class="d-flex justify-content-around">
																			<div id="optimus_pro_candle_asset" class="fw-bolder fs-7"></div>
																			<div>
																				<span class="fw-bolder fs-6">===></span>
																			</div>
																			<div id="optimus_pro_candle_signal_text">
																				<span class="fw-bolder fs-6 is-bearish d-none">
																					<span class="svg-icon svg-icon-3 svg-icon-danger">
																						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																							<rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="black"></rect>
																							<path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="black"></path>
																						</svg>
																					</span>Bearish</span>
																				<span class="fw-bolder fs-6 is-bullish d-none">
																					<span class="svg-icon svg-icon-3 svg-icon-success">
																						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																							<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black"></rect>
																							<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black"></path>
																						</svg>
																					</span>Bullish</span>
																			</div>
																		</div>
																	</td>
																</tr>
																@foreach($cdl_and_bias_data as $forecast)
																@if($forecast->cdl)
																<tr>
																	<td style="color: {{ $forecast->cdl_clr ?? 'dark' }};" class="fw-bold">
																		<div class="d-flex justify-content-around">
																			<div class="fw-bolder fs-7">
																				{{ $forecast->cdl }}
																			</div>
																			<div>
																				<span class="fw-bolder fs-6">===></span>
																			</div>
																			<div id="optimus_pro_investors_signal_text">
																				@if($forecast->cdl_clr == 'crimson')
																				<!-- Bearish -->
																				<span class="fw-bolder fs-6 is-bearish">
																					<span class="svg-icon svg-icon-3 svg-icon-danger">
																						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																							<rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="black"></rect>
																							<path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="black"></path>
																						</svg>
																					</span>Bearish</span>
																				@elseif($forecast->cdl_clr == 'forestgreen')
																				<!-- Bullish -->
																				<span class="fw-bolder fs-6 is-bullish">
																					<span class="svg-icon svg-icon-3 svg-icon-success">
																						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																							<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black"></rect>
																							<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black"></path>
																						</svg>
																					</span>Bullish</span>
																				@endif
																			</div>
																		</div>
																	</td>
																</tr>
																@endif
																@endforeach
															</tbody>
															<!--end::Table body-->
														</table>
													</div>
													<!--end::Table container-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-xl-6">
													<!--begin::Table container-->
													<div class="table-responsive">
														<!--begin::Table-->
														<table class="table align-middle"><!-- gs-0 gy-4 -->
															<!--begin::Table head-->
															<thead>
																<tr class="fw-bolder bg-light-success">
																	<th class="ps-4 text-center">Investor's Bias</th>
																</tr>
															</thead>
															<!--end::Table head-->
															<!--begin::Table body-->
															<tbody id="optimus_pro_investors">
																<tr id="optimus_pro_investors_placeholder" class="d-none">
																	<td id="optimus_pro_investors_td" style="color: dark;" class="fw-bold">
																		<div class="d-flex justify-content-around">
																			<div id="optimus_pro_investors_asset" class="fw-bolder fs-7"></div>
																			<div>
																				<span class="fw-bolder fs-6">===></span>
																			</div>
																			<div id="optimus_pro_investors_signal_text">
																				<span class="fw-bolder fs-6 is-neutral d-none">Neutral</span>
																				<span class="fw-bolder fs-6 is-bearish d-none">
																					<span class="svg-icon svg-icon-3 svg-icon-danger">
																						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																							<rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="black"></rect>
																							<path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="black"></path>
																						</svg>
																					</span>Bearish</span>
																				<span class="fw-bolder fs-6 is-bullish d-none">
																					<span class="svg-icon svg-icon-3 svg-icon-success">
																						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																							<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black"></rect>
																							<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black"></path>
																						</svg>
																					</span>Bullish</span>
																			</div>
																		</div>
																	</td>
																</tr>
																@foreach($cdl_and_bias_data as $forecast)
																@if($forecast->bias_clr)
																<tr>
																	<td style="color: {{ $forecast->bias_clr ?? 'dark' }};" class="fw-bold">
																		<div class="d-flex justify-content-around">
																			<div class="fw-bolder fs-7">{{ $forecast->bias }}</div>
																			<div>
																				<span class="fw-bolder fs-6">===></span>
																			</div>
																			<div>
																				@if($forecast->bias_clr == 'lightsalmon')
																				<span class="fw-bolder fs-6">
																					<span class="svg-icon svg-icon-3 svg-icon-danger">
																						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																							<rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="black"></rect>
																							<path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="black"></path>
																						</svg>
																					</span>Bearish</span>
																				@elseif($forecast->bias_clr == 'chartreuse')
																				<span class="fw-bolder fs-6">
																					<span class="svg-icon svg-icon-3 svg-icon-success">
																						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																							<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black"></rect>
																							<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black"></path>
																						</svg>
																					</span>Bullish</span>
																				@else
																				<span class="fw-bolder fs-6">Neutral</span>
																				@endif
																			</div>
																		</div>
																	</td>
																</tr>
																@endif
																@endforeach
															</tbody>
															<!--end::Table body-->
														</table>
													</div>
													<!--end::Table container-->
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
										</div>
										<!--begin::Body-->
									</div>
									<!--end::Tables Widget 2-->
								</div>
								<!--end::General Widget 1-->
							</div>
							<!--end::Col-->
						</div>
						<!--end::Row-->
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
	@if(!$is_valid_optimus_user)
	<!--begin::Modal - OptimusPro Analyzer Plans-->
	<div class="modal fade" id="modal_purchase_optimus_pro" tabindex="-1" aria-hidden="true">
		<!--begin::Modal dialog-->
		<div class="modal-dialog modal-xl">
			<!--begin::Modal content-->
			<div class="modal-content rounded">
				<!--begin::Modal header-->
				<div class="modal-header justify-content-end border-0 pb-0">
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
				<div class="modal-body pt-0 pb-15 px-5 px-xl-20">
					<!--begin::Heading-->
					<div class="mb-5 text-center">
						<h2 class="mb-3">Want to Supercharge your trading Portfolio?</h2>
						<div class="text-muted fw-bold fs-5 mb-2">Click <a href="https://rehobothtraders.com/optimus-pro-analyzer/" class="link-primary fw-bolder">here to learn more...</a></div>
						<div class="fw-bolder fs-5">... or, Select a plan below.</div>
						<!-- <br/> about how OptimusPro Analyzer can help you trade better -->
					</div>
					<!--end::Heading-->
					<!--begin::Plans-->
					<div class="d-flex flex-column">
						<!--begin::Row-->
						<div class="row mt-10">
							<!--begin::Col-->
							<div class="col-lg-6 mb-10 mb-lg-0">
								<!--begin::Tabs-->
								<div class="nav flex-column">
									<!--begin::Tab link-->
									<div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#tab_select_optimus_basic_plan">
										<!--end::Description-->
										<div class="d-flex align-items-center me-2">
											<!--begin::Radio-->
											<div class="form-check form-check-custom form-check-solid form-check-success me-6">
												<input class="form-check-input" type="radio" name="plan" value="optimuspro-weekly" />
											</div>
											<!--end::Radio-->
											<!--begin::Info-->
											<div class="flex-grow-1">
												<h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">Basic</h2>
												<div class="fw-bold opacity-50">Best for beginners</div>
											</div>
											<!--end::Info-->
										</div>
										<!--end::Description-->
										<!--begin::Price-->
										<div class="ms-5">
											<span class="mb-2">$</span>
											<span class="fs-3x fw-bolder" data-kt-plan-price-month="50">50</span>
											<span class="fs-7 opacity-50">/
												<span data-kt-element="period">Week</span></span>
										</div>
										<!--end::Price-->
									</div>
									<!--end::Tab link-->
									<!--begin::Tab link-->
									<div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 active mb-6" data-bs-toggle="tab" data-bs-target="#tab_select_optimus_standard_plan">
										<!--end::Description-->
										<div class="d-flex align-items-center me-2">
											<!--begin::Radio-->
											<div class="form-check form-check-custom form-check-solid form-check-success me-6">
												<input class="form-check-input" type="radio" name="plan" checked="checked" value="optimuspro-monthly" />
											</div>
											<!--end::Radio-->
											<!--begin::Info-->
											<div class="flex-grow-1">
												<h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">Standard
													<span class="badge badge-light-success ms-2 fs-7">Most popular</span>
												</h2>
												<div class="fw-bold opacity-50">Best for regular traders</div>
											</div>
											<!--end::Info-->
										</div>
										<!--end::Description-->
										<!--begin::Price-->
										<div class="ms-5">
											<span class="mb-2">$</span>
											<span class="fs-3x fw-bolder" data-kt-plan-price-month="99">99</span>
											<span class="fs-7 opacity-50">/
												<span data-kt-element="period">Mon</span></span>
										</div>
										<!--end::Price-->
									</div>
									<!--end::Tab link-->
									<!--begin::Tab link-->
									<div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#tab_select_optimus_premium_plan">
										<!--end::Description-->
										<div class="d-flex align-items-center me-2">
											<!--begin::Radio-->
											<div class="form-check form-check-custom form-check-solid form-check-success me-6">
												<input class="form-check-input" type="radio" name="plan" value="optimuspro-bi-annually" />
											</div>
											<!--end::Radio-->
											<!--begin::Info-->
											<div class="flex-grow-1">
												<h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">Premium</h2>
												<div class="fw-bold opacity-50">Best value for professional traders</div>
											</div>
											<!--end::Info-->
										</div>
										<!--end::Description-->
										<!--begin::Price-->
										<div class="ms-5">
											<span class="mb-2">$</span>
											<span class="fs-3x fw-bolder" data-kt-plan-price-month="500">500</span>
											<span class="fs-7 opacity-50">/
												<span data-kt-element="period">6 Mon</span></span>
										</div>
										<!--end::Price-->
									</div>
									<!--end::Tab link-->
								</div>
								<!--end::Tabs-->
							</div>
							<!--end::Col-->
							<!--begin::Col-->
							<div class="col-lg-6">
								<!--begin::Tab content-->
								<div class="tab-content rounded h-100 bg-light p-10">
									<!--begin::Tab Pane-->
									<div class="tab-pane fade" id="tab_select_optimus_basic_plan">
										<!--begin::Heading-->
										<div class="pb-5">
											<h2 class="fw-bolder text-dark">What’s in Basic Plan?</h2>
											<div class="text-muted fw-bold">Optimal for beginner traders</div>
										</div>
										<!--end::Heading-->
										<!--begin::Body-->
										<div class="pt-1">
											<!--begin::Features-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Unlimited OptimusPro access</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
														<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Features-->
											<!--begin::Features-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Real-time Trading Signals</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
														<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Features-->
											<!--begin::Features-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-bold fs-5 text-muted flex-grow-1">Real-time Telegram Signals</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
												<span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
														<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="black" />
														<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Features-->
											<!--begin::Features-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-bold fs-5 text-muted flex-grow-1">24/7 Technical Support</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
												<span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
														<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="black" />
														<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--begin::Features-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-bold fs-5 text-muted flex-grow-1">Major Banks Positions</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
												<span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
														<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="black" />
														<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Features-->

											<!--begin::Features-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-bold fs-5 text-muted flex-grow-1">Bundled Premium tools</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
												<span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
														<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="black" />
														<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Features-->

										</div>
										<!--end::Body-->
									</div>
									<!--end::Tab Pane-->
									<!--begin::Tab Pane-->
									<div class="tab-pane fade show active" id="tab_select_optimus_standard_plan">
										<!--begin::Heading-->
										<div class="pb-5">
											<h2 class="fw-bolder text-dark">What’s in Standard Plan?</h2>
											<div class="text-muted fw-bold">Optimal for regular traders</div>
										</div>
										<!--end::Heading-->
										<!--begin::Body-->
										<div class="pt-1">
											<!--begin::Features-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Unlimited OptimusPro access</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
														<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Features-->
											<!--begin::Features-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Real-time Trading Signals</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
														<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Features-->
											<!--begin::Features-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Real-time Telegram Signals</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
														<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Features-->
											<!--begin::Features-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-bold fs-5 text-gray-700 flex-grow-1">24/7 Technical Support</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
														<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--begin::Features-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-bold fs-5 text-muted flex-grow-1">Major Banks Positions</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
												<span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
														<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="black" />
														<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Features-->

											<!--begin::Features-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-bold fs-5 text-muted flex-grow-1">Bundled Premium tools</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
												<span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
														<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="black" />
														<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Features-->

										</div>
										<!--end::Body-->
									</div>
									<!--end::Tab Pane-->
									<!--begin::Tab Pane-->
									<div class="tab-pane fade" id="tab_select_optimus_premium_plan">
										<!--begin::Heading-->
										<div class="pb-5">
											<h2 class="fw-bolder text-dark">What’s in Premium Plan?</h2>
											<div class="text-muted fw-bold">Optimal for professional traders</div>
										</div>
										<!--end::Heading-->
										<!--begin::Body-->
										<div class="pt-1">
											<!--begin::Features-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Unlimited OptimusPro access</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
														<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Features-->
											<!--begin::Features-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Real-time Trading Signals</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
														<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Features-->
											<!--begin::Features-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Real-time Telegram Signals</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
														<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Features-->
											<!--begin::Features-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-bold fs-5 text-gray-700 flex-grow-1">24/7 Technical Support</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
														<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--begin::Features-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Major Banks Positions</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
														<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Features-->

											<!--begin::Features-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Bundled Premium tools</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
														<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Features-->

										</div>
										<!--end::Body-->
									</div>
									<!--end::Tab Pane-->
								</div>
								<!--end::Tab content-->
							</div>
							<!--end::Col-->
						</div>
						<!--end::Row-->
					</div>
					<!--end::Plans-->
					<!--begin::Actions-->
					<div class="d-flex flex-center flex-row-fluid pt-12">
						<button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Close</button>
						<button type="submit" id="submit_optimuspro_plan" class="btn btn-primary">Select Plan</button>
					</div>
					<!--end::Actions-->
				</div>
				<!--end::Modal body-->
			</div>
			<!--end::Modal content-->
		</div>
		<!--end::Modal dialog-->
	</div>
	<!--end::Modal - OptimusPro Analyzer Plans-->
	<!--begin::Modal - OptimusPro Selected Plans-->
	<div class="modal fade" id="modal_selected_optimus_pro" tabindex="-1" aria-hidden="true">
		<!--begin::Modal dialog-->
		<div class="modal-dialog modal-dialog-centered mw-650px">
			<!--begin::Modal content-->
			<div class="modal-content rounded">
				<!--begin::Modal header-->
				<div class="modal-header justify-content-end border-0 pb-0">
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
				<div class="modal-body pt-0 pb-15 px-5 px-xl-20">
					<!--begin::Heading-->
					<div class="mb-5 text-center">
						<h4 class="mb-3">You are this step away from becoming a Pro!</h4>
						<div class="text-muted fw-bold fs-5 mb-2">Let's get you started!</a></div>
						<div class="fw-bolder fs-5">Select your payment method below</div>
					</div>
					<!--end::Heading-->
					<div class="mt-10">
						<!--begin::Tab-->
						<ul class="nav nav-tabs nav-stretch justify-content-center" id="paymentTab" role="tablist">
							<li class="nav-item" role="presentation">
								<button class="nav-link active" id="creditDebitCardTab" data-bs-toggle="tab" data-bs-target="#creditDebitCard" type="button" role="tab" aria-controls="creditDebitCard" aria-selected="true">Credit/Debit Card</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link" disabled id="paypalTab" data-bs-toggle="tab" data-bs-target="#paypal" type="button" role="tab" aria-controls="paypal" aria-selected="false">Paypal</button>
							</li>
						</ul>

						<!--begin::Tab Content-->
						<div class="tab-content mt-5" id="paymentTabContent">
							<!--begin::Credit/Debit Card Tab Pane-->
							<div class="tab-pane fade show active" id="creditDebitCard" role="tabpanel" aria-labelledby="creditDebitCardTab">
								<!--begin::Form-->
								<form class="form" id="optimus_pro_card_form" method="post" action="/stripe-charge">
									<!--begin::Input group-->
									<div class="d-flex flex-column mb-7 fv-row">
										<!--begin::Label-->
										<label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
											<span class="required">Name On Card</span>
											<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a card holder's name"></i>
										</label>
										<!--end::Label-->
										<input type="text" class="form-control form-control-solid" placeholder="As shown on the card" name="card_name" value="{{ Auth::user()->name }}" />
									</div>
									<!--end::Input group-->
								</form>
								<!--begin::Input group-->
								<div class="d-flex flex-column mb-7 fv-row">
									<!--begin::Label-->
									<label class="required fs-6 fw-bold form-label mb-2">Card Info</label>
									<!--end::Label-->
									<div id="optimus-card-element"></div>
								</div>
								<!--end::Input group-->
								<!--end::Form-->
							</div>
							<!--end::Credit/Debit Card Tab Pane-->

							<!--begin::Paypal Tab Pane-->
							<div class="tab-pane fade" id="paypal" role="tabpanel" aria-labelledby="paypalTab">
								<!-- Add your Paypal form here -->
							</div>
							<!--end::Paypal Tab Pane-->
							<!--begin::Actions-->
							<div class="text-center pt-15">
								<button type="reset" id="optimus_pro_cancel" data-bs-dismiss="modal" class="btn btn-light me-3">Close</button>
								<button type="submit" id="optimus_pro_submit" data-secret="{{ $intent->client_secret }}" class="btn btn-primary">
									<span class="indicator-label">Pay Now</span>
									<span class="indicator-progress">Please wait...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span>
									</span>
								</button>
							</div>
							<!--end::Actions-->
						</div>
						<!--end::Tab Content-->
					</div>
				</div>
				<!--end::Modal body-->
			</div>
			<!--end::Modal content-->
		</div>
		<!--end::Modal dialog-->
	</div>
	<!--end::Modal - OptimusPro Selected Plans-->
	@endif
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
	<script src="https://js.stripe.com/v3/"></script>
	<script>
		const stripe = Stripe("{{ config('cashier.key') }}");

		const elements = stripe.elements();
		const cardElement = elements.create('card');

		//mount card element on tab-pane that is active
		$('#modal_selected_optimus_pro').on('shown.bs.modal', function(e) {
			cardElement.mount('#optimus-card-element');
		})
		//unmount card element on tab-pane that is not active
		$('#modal_selected_optimus_pro').on('hidden.bs.modal', function(e) {
			cardElement.unmount('#optimus-card-element');
		})

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
	<script src="assets/js/custom/modals/select-optimuspro-plan.js"></script>
	@vite(['resources/js/bootstrap.js', 'resources/js/events.js'])

	<!--end::Page Custom Javascript-->
	<!--end::Javascript-->
</body>
<!--end::Body-->
</html>