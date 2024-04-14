"use strict";

// Class definition
var KTModalEditAccount = function () {
    var submitButton;
    var form;
    var modal;
    var modalEl;

    // Handle form validation and submittion
    var handleForm = function () {

        // Action buttons
        submitButton.addEventListener('click', function (e) {
            // Prevent default button action
            e.preventDefault();

            // Validate form before submit
            // Show loading indication
            submitButton.setAttribute('data-kt-indicator', 'on');

            // Disable button to avoid multiple click 
            submitButton.disabled = true;

            // set name in form dynamically
            var formData = new FormData(form);
            // Send ajax request to form action
            $.ajax({
                url: form.getAttribute('data-action'),
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
            }).done(function (response) {
                // Show popup confirmation
                Swal.fire({
                    showConfirmButton: false,
                    showCancelButton: false,
                    title: "Account updated successfully!",
                    text: "The new data will be visible after refreshing the page.",
                    icon: "success",
                });
                //Close modal
                modal.hide();
                submitButton.removeAttribute('data-kt-indicator'); // remove loading indication
                submitButton.disabled = false; // enable submit button
            }).fail(function (jqXHR, textStatus, errorThrown) {
                // Show popup error
                Swal.fire({
                    text: jqXHR.responseJSON.error || "Sorry, looks like there are some errors detected, please try again.",
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn btn-primary"
                    }
                });
                submitButton.removeAttribute('data-kt-indicator'); // remove loading indication
                submitButton.disabled = false; // enable submit button
            });

        });
    }

    return {
        // Public functions
        init: function () {
            // Elements
            modalEl = document.querySelector('#kt_modal_edit_account');

            if (!modalEl) {
                return;
            }

            modal = new bootstrap.Modal(modalEl);

            form = document.querySelector('#kt_modal_edit_account_form');
            submitButton = document.getElementById('kt_modal_edit_account_submit');

            handleForm();
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTModalEditAccount.init();
});