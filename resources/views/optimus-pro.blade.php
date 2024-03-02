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
							<h1 class="d-flex text-dark fw-bolder my-1 fs-3">OptimusPro Analyzer</h1>
							<!--end::Title-->
							<!--begin::SubTitle-->
							@if (Auth::user()->subscribedToPrice(config('product.price_optimus_pro_premium')))
							<div class="text-gray-500 fw-bold fs-5 mb-5">You have an active Bi-Annual subscription</div>
							@elseif (Auth::user()->subscribedToPrice(config('product.price_optimus_pro_standard')))
							<div class="text-gray-500 fw-bold fs-5 mb-5">You have an active Monthly subscription</div>
							@elseif (Auth::user()->subscribedToPrice(config('product.price_optimus_pro_basic')))
							<div class="text-gray-500 fw-bold fs-5 mb-5">You have an active Weekly subscription</div>
							@elseif($is_funded_account)
							<div class="text-gray-500 fw-bold fs-5 mb-5">Your Get Funded subcription is active</div>
							@elseif(Auth::user()->role == 'admin')
							<div class="text-gray-500 fw-bold fs-5 mb-5">You are an admin</div>
							@else
							<div class="text-gray-500 fw-bold fs-5 mb-5">Your subscription is inactive</div>
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
									<!--end::Svg Icon-->Setup</a>
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
						<!--begin::Row-->
						<div class="row g-5 g-xl-8">
							<!--begin::Col-->
							<div class="col-12">
								@if($is_valid_optimus_user)
								<div class="card mb-5 mb-xl-8">
									<!--begin::Header-->
									<div class="card-header border-0 pt-5">
										<h3 class="card-title align-items-start flex-column">
											<span class="card-label fw-bolder fs-3 mb-1">Analysis Dashboard</span>
											<span class="text-muted mt-1 fw-bold fs-7">Combination of Technical, Sentimental & Fundamental Indicators</span>
										</h3>
										<div class="card-toolbar">
											<!--begin::Menu-->
											<button id="zoom-out-btn" type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary me-1">
												<!--begin::Bootstrap Icon | name: zoom-out-->
												<span class="bi bi-zoom-out" style="font-size: 24px;"></span>
												<!--end::Bootstrap Icon-->
											</button>
											<button id="zoom-in-btn" type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary">
												<!--begin::Bootstrap Icon | name: zoom-out-->
												<span class="bi bi-zoom-in" style="font-size: 24px;"></span>
												<!--end::Bootstrap Icon-->
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
											<table id="zoomable-table" class="table table-bordered border-secondary table-rounded border align-middle text-center"><!-- gs-0 gy-4 -->
												<!--begin::Table head-->
												<thead>
													<tr class="fw-bolder bg-light-success">
														<th class="ps-4 rounded-start">Asset</th>
														<th class="">Range</th>
														<th class="">Fundamental</th>
														<th class="">Technical</th>
														<th class="">Sentiment</th>
														<th class="">Strategy</th>
														<!-- <th class="pe-4 rounded-end">Forecast</th> -->
													</tr>
												</thead>
												<!--end::Table head-->
												<!--begin::Table body-->
												<tbody id="optimus_pro_signals">
													@foreach ($optimus_data as $assetData)
													<tr style="cursor: crosshair;" id="optimus_pro_signal_asset_{{ strtolower($assetData->asset) }}">
														<td>
															<div class="d-flex flex-column w-100 me-2">
																<div class="d-flex flex-stack mb-2 ms-2 fw-bolder">
																	{{ strtoupper($assetData->asset) }}
																	<!-- <span class="badge badge-light-success fw-bolder">{{ $assetData->asset }}</span> -->
																</div>
																<div class="progress h-6px w-100">
																	<div class="progress-bar" role="progressbar" id="optimus_pro_signal_{{ strtolower($assetData->asset) }}_progress" @if ($assetData->asset_clr)
																		style="width: 100%; background-color: {{ $assetData->asset_clr }};"
																		@else
																		style="width: 100%;"
																		@endif
																		/>
																	</div>
																</div>
														</td>
														<td>
															<button id="optimus_pro_signal_{{ strtolower($assetData->asset) }}_range" class="btn mb-1 w-100 btn-sm fw-bolder btn-info {{ !empty($assetData->range) ? 'd-block' : 'd-none' }}">
																{{ $assetData->range }}
															</button>
															<!-- class="text-dark fw-bolder text-hover-primary d-block mb-1"></span> -->
														</td>
														<td>
															<button id="optimus_pro_signal_{{ strtolower($assetData->asset) }}_fundamental" class="btn mb-1 w-100 btn-sm fw-bolder {{ $assetData->fundamental == 'Buy' ? 'btn-success' : 'btn-danger' }} {{ !empty($assetData->fundamental) ? 'd-block' : 'd-none' }}">
																{{ $assetData->fundamental }}
															</button>
														</td>
														<td>
															<button id="optimus_pro_signal_{{ strtolower($assetData->asset) }}_technical" class="btn mb-1 w-100 btn-sm fw-bolder {{ $assetData->technical == 'Buy' ? 'btn-success' : 'btn-danger' }} {{ !empty($assetData->technical) ? 'd-block' : 'd-none' }}">
																{{ $assetData->technical }}
															</button>
														</td>
														<td>
															<button id="optimus_pro_signal_{{ strtolower($assetData->asset) }}_sentiment" class="btn mb-1 w-100 btn-sm fw-bolder {{ $assetData->sentiment == 'Buy' ? 'btn-success' : 'btn-danger' }} {{ !empty($assetData->sentiment) ? 'd-block' : 'd-none' }}">
																{{ $assetData->sentiment }}
															</button>
														</td>
														<td>
															<button id="optimus_pro_signal_{{ strtolower($assetData->asset) }}_strategy" class="btn mb-1 w-100 btn-sm fw-bolder {{ $assetData->strategy == 'Buy' ? 'btn-success' : 'btn-danger' }} {{ !empty($assetData->strategy) ? 'd-block' : 'd-none' }}">
																{{ $assetData->strategy }}
															</button>
														</td>
														<!-- <td>
															<span id="optimus_pro_signal_{{ strtolower($assetData->asset) }}_volt" 
															@if ($assetData->volt == 'Big Move' || $assetData->volt == 'Reversal')
																style="color: red;"
															@endif
															class="fw-bolder text-hover-primary d-block mb-1">{{ $assetData->volt }}</span>
														</td> -->
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
								@else
								<!--begin::Card-->
								<div class="card">
									<!--begin::Card body-->
									<div class="card-body pb-0">
										<!--begin::Heading-->
										<div class="card-px text-center pt-20 pb-5">
											<!--begin::Title-->
											<h2 class="fs-2x fw-bolder mb-0">Want to Supercharge your trading Portfolio?</h2>
											<!--end::Title-->
											<!--begin::Description-->
											<p class="text-gray-400 fs-4 fw-bold py-7">Click on the below button to get started</p>
											<!--end::Description-->
											<!--begin::Action-->
											<a href="#" class="btn btn-primary er fs-6 px-8 py-4" data-bs-toggle="modal" data-bs-target="#modal_purchase_optimus_pro">Get Started</a>
											<!--end::Action-->
										</div>
										<!--end::Heading-->
									</div>
									<!--end::Card body-->
								</div>
								<!--end::Card-->
								@endif
							</div>
							<!--end::Col-->
						</div>

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
	<!--begin::Drawers-->
	<!--begin::Chat drawer-->
	@include('partials.chat-drawer')
	<!--end::Chat drawer-->
	<!--begin::Modals-->
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

	<!--end::Drawers-->
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
	<script>
		var hostUrl = "assets/";
	</script>
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
	<script src="assets/js/custom/modals/select-optimuspro-plan.js"></script>
	@vite(['resources/js/bootstrap.js', 'resources/js/events.js'])

	<script>
		// initial zoom
		let zoom = 1;

		// zoom in button
		$('#zoom-in-btn').on('click', function() {
			zoom += 0.1;
			$('#zoomable-table').css('zoom', zoom);
		})

		// zoom out button
		$('#zoom-out-btn').on('click', function() {
			if (zoom > 0.1) { // prevent zoom becoming 0 or negative
				zoom -= 0.1;
				$('#zoomable-table').css('zoom', zoom);
			}
		})
	</script>
	<!--end::Page Custom Javascript-->
	<!--end::Javascript-->
</body>
<!--end::Body-->

</html>