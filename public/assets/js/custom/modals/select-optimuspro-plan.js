"use strict";

// Class definition
var RTModalSelectOptimusPlan = function () {
    // Private variables
    var modalEl;
    var submitEl;
    var nextModalEl;

    var modal;
    var nextModal;

    var closeBtn;
    var formSubmitButton;

    var changePlanPrices = function (type) {
        var items = [].slice.call(modalEl.querySelectorAll('[data-kt-plan-price-month]'));

        items.map(function (item) {
            var monthPrice = item.getAttribute('data-kt-plan-price-month');

            if (type === 'month') {
                item.innerHTML = monthPrice;
            }
        });
    }

    var handleTabs = function () {
        KTUtil.on(modalEl, '[data-bs-toggle="tab"]', 'click', function () {
            this.querySelector('[type="radio"]').checked = true;
        });
    }

    var resetErrors = function () {
        // Hide loading indication
        formSubmitButton.removeAttribute('data-kt-indicator');

        // Enable button
        formSubmitButton.disabled = false;

        // Enable Close button
        closeBtn.disabled = false;
    }
    // Public methods
    return {
        init: function () {
            // Elements
            submitEl = document.querySelector("#submit_optimuspro_plan");
            modalEl = document.querySelector('#modal_purchase_optimus_pro');
            nextModalEl = document.querySelector("#modal_selected_optimus_pro");

            if (!modalEl) {
                return;
            }

            modal = new bootstrap.Modal(modalEl);
            nextModal = new bootstrap.Modal(nextModalEl);


            changePlanPrices('month');

            // Handlers
            handleTabs();

            if (submitEl) {
                submitEl.addEventListener("click", function (n) {
                    n.preventDefault();
                    // select the radio button with the name plan and the value checked
                    var checkedPlan = modalEl.querySelector('input[name="plan"]:checked');
                    // get the value of the checked radio button
                    var plan = checkedPlan.value;
                    console.log(plan);
                    nextModal.show();
                    modal.hide();
                    formSubmitButton = nextModalEl.querySelector("#optimus_pro_submit");

                    formSubmitButton.addEventListener("click", function (e) {
                        e.preventDefault();

                        // Disable button to avoid multiple click 
                        formSubmitButton.disabled = true;

                        // Show loading indication
                        formSubmitButton.setAttribute('data-kt-indicator', 'on');
                        var card_form = document.querySelector("#optimus_pro_card_form");
                        //Get form data
                        var card_name = card_form.querySelector('input[name="card_name"]');
                        // select the radio button with the name plan and the value checked
                        var plan = modalEl.querySelector('input[name="plan"]:checked');
                        closeBtn = nextModalEl.querySelector("#optimus_pro_cancel");
                        closeBtn.disabled = true;

                        stripe.confirmCardSetup(
                            formSubmitButton.dataset.secret, {
                            payment_method: {
                                card: cardElement,
                                billing_details: {
                                    name: card_name.value
                                }
                            }
                        }
                        ).then(function (result) {
                            const { setupIntent, error } = result;


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
                                    resetErrors();
                                });
                            } else {
                                $.ajax({
                                    url: '/stripe-charge',
                                    method: 'post',
                                    data: {
                                        plan: plan.value,
                                        token: setupIntent.payment_method,
                                    },
                                    success: function (response) {
                                        if (response.status) {
                                            // fire swal to "Check out OptimusPro", onClick goto /optimus-pro
                                            Swal.fire({
                                                icon: "success",
                                                text: response.message,
                                                buttonsStyling: true,
                                                confirmButtonText: "Let's check it out!",
                                                customClass: {
                                                    confirmButton: "btn fw-bold btn-light",
                                                },
                                            }).then(function () {
                                                window.location.href = "/optimus-pro";
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
                    });

                });
            }
        }
    }
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    RTModalSelectOptimusPlan.init();
});
