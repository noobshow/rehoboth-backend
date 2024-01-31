"use strict";

// Class definition
var RTCreateFundedAccount = function () {
	// Elements
	var stepper;
	var form;
	var formSubmitButton;
	var formPreviousButton;
	var formContinueButton;

	// Variables
	var stepperObj;
	var validations = [];

	// Private Functions
	var initStepper = function () {
		// Initialize Stepper
		stepperObj = new KTStepper(stepper);

		// Stepper change event
		stepperObj.on('kt.stepper.changed', function (stepper) {
			if (stepperObj.getCurrentStepIndex() === 4) {
				formSubmitButton.classList.remove('d-none');
				formSubmitButton.classList.add('d-inline-block');
				formContinueButton.classList.add('d-none');
			} else if (stepperObj.getCurrentStepIndex() === 5) {
				formSubmitButton.classList.add('d-none');
				formContinueButton.classList.add('d-none');
			} else {
				formSubmitButton.classList.remove('d-inline-block');
				formSubmitButton.classList.remove('d-none');
				formContinueButton.classList.remove('d-none');
			}
		});

		// Validation before going to next page
		stepperObj.on('kt.stepper.next', function (stepper) {
			console.log('stepper.next', stepperObj.getCurrentStepIndex());

			stepper.goNext();
			KTUtil.scrollTop();
		});

		// Prev event
		stepperObj.on('kt.stepper.previous', function (stepper) {
			console.log('stepper.previous');

			stepper.goPrevious();
			KTUtil.scrollTop();
		});
	}

	var resetErrors = function () {
		// Hide loading indication
		formSubmitButton.removeAttribute('data-kt-indicator');

		// Enable button
		formSubmitButton.disabled = false;
		// Show previous button
		formPreviousButton.classList.remove('d-none');
	}

	var handleForm = function () {
		formSubmitButton.addEventListener('click', function (e) {
			// Validate form before change stepper step
			// get validator for last form
			var validator = validations[validations.length - 1];

			validator.validate().then(function (status) {
				console.log('validated!');

				if (status == 'Valid') {
					// Prevent default button action
					e.preventDefault();

					// Disable button to avoid multiple click 
					formSubmitButton.disabled = true;

					// Show loading indication
					formPreviousButton.classList.add('d-none');
					formSubmitButton.setAttribute('data-kt-indicator', 'on');
					var card_form = form.querySelector("#get_funded_card_form");
					//Get form data
					var email = card_form.querySelector('input[name="email"]');
					var card_name = card_form.querySelector('input[name="card_name"]');
					var plan = document.querySelector('input[name="account_plan_size"]:checked');

					stripe.createPaymentMethod(
						'card', cardElement, {
						billing_details: {
							name: card_name.value,
							email: email.value,
						}
					}).then(function (result) {
						const { paymentMethod, error } = result;

						if (error) {
							Swal.fire({
								text: error.message || "Sorry, looks like there are some errors detected, please try again.",
								icon: "error",
								buttonsStyling: true,
								confirmButtonText: "Ok, got it!",
								customClass: {
									confirmButton: "btn btn-light"
								}
							}).then(function () {
								KTUtil.scrollTop();
								resetErrors();
							});
						} else {
							$.ajax({
								url: '/stripe-charge',
								method: 'post',
								data: {
									plan: plan.value,
									token: paymentMethod.id,
								},
								success: function (response) {
									if (response.status) {
										stepperObj.goNext();
										// Change formSubmit to "Check out OptimusPro", onClick goto /optimus-pro
										formSubmitButton.innerHTML = "Check out OptimusPro";
										formSubmitButton.removeAttribute('data-kt-indicator');
										formSubmitButton.removeAttribute('data-kt-stepper-action');
										formSubmitButton.classList.remove('d-none');
										formSubmitButton.disabled = false;
										formSubmitButton.onclick = function () {
											window.location.href = '/optimus-pro';
										}

										// The card has been verified successfully...
										Swal.fire({
											icon: "success",
											text: response.message,
											showCancelButton: false,
											showConfirmButton: false,
										});
									} else {
										Swal.fire({
											text: response.message,
											icon: "error",
											buttonsStyling: true,
											confirmButtonText: "Ok, got it!",
											customClass: {
												confirmButton: "btn fw-bold btn-light",
											},
										}).then(function () {
											KTUtil.scrollTop();
											resetErrors();
											// fire swal to inform user that the page will be reloaded
											Swal.fire({
												text: "Page will be reloaded in 3 seconds, you can try again.",
												icon: "info",
												showConfirmButton: false,
												showCancelButton: false,
												timer: 3000,
											}).then(function () {
												//reload page
												window.location.reload();
											});
										});
									}
								},
								error: function (response) {
									Swal.fire({
										text: response.responseJSON.message,
										icon: "error",
										buttonsStyling: true,
										confirmButtonText: "Ok, got it!",
										customClass: {
											confirmButton: "btn fw-bold btn-light",
										},
									}).then(function () {
										KTUtil.scrollTop();
										resetErrors();
										// fire swal to inform user that the page will be reloaded
										Swal.fire({
											text: "Page will be reloaded in 3 seconds, you can try again.",
											icon: "info",
											showConfirmButton: false,
											showCancelButton: false,
											timer: 3000,
										}).then(function () {
											//reload page
											window.location.reload();
										});
									});
								}
							})
						}
					});
				} else {
					Swal.fire({
						text: "Sorry, looks like there are some errors detected, please try again.",
						icon: "error",
						buttonsStyling: true,
						confirmButtonText: "Ok, got it!",
						customClass: {
							confirmButton: "btn btn-light"
						}
					}).then(function () {
						KTUtil.scrollTop();
						resetErrors();
					});
				}
			});
		});
	}

	var initValidation = function () {
		// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/

		// Step 4
		validations.push(FormValidation.formValidation(
			form,
			{
				fields: {
					'card_name': {
						validators: {
							notEmpty: {
								message: 'Name on card is required'
							}
						}
					},
				},

				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					// Bootstrap Framework Integration
					bootstrap: new FormValidation.plugins.Bootstrap5({
						rowSelector: '.fv-row',
						eleInvalidClass: '',
						eleValidClass: ''
					})
				}
			}
		));
	}

	var handleFormSubmit = function () {

	}

	return {
		// Public Functions
		init: function () {
			// Elements
			stepper = document.querySelector('#get_funded_stepper');
			form = stepper.querySelector('#get_funded_form');
			formSubmitButton = stepper.querySelector('[data-kt-stepper-action="submit"]');
			formContinueButton = stepper.querySelector('[data-kt-stepper-action="next"]');
			formPreviousButton = stepper.querySelector('[data-kt-stepper-action="previous"]');

			initStepper();
			initValidation();
			handleForm();
		}
	};
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
	RTCreateFundedAccount.init();
});