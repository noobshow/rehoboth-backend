"use strict";

// Class definition
var KTModalStaffifyAccount = function () {
    return {
        // Public functions
        init: function (submitButtons, action) {
            // Iterate over each submit button to attach click event
            submitButtons.forEach(function (submitButton) {
                submitButton.addEventListener('click', function (e) {
                    // Prevent default button action
                    e.preventDefault();
                    var email = submitButton.getAttribute('data-email');
                    var name = submitButton.getAttribute('data-name');
                    var role = submitButton.getAttribute('data-role');

                    Swal.fire({
                        title: "Are you sure you want to " + action + " " + name + "?",
                        text: name + "'s email is: " + email + " for confirmation.",
                        icon: "warning",
                        backdrop: true,
                        buttonsStyling: false,
                        confirmButtonText: "Yes, I'm sure!",
                        cancelButtonText: "No, cancel!",
                        showCancelButton: true,
                        showLoaderOnConfirm: true,
                        customClass: {
                            confirmButton: "btn btn-light",
                            cancelButton: "btn btn-danger"
                        },
                        preConfirm: async (_) => {
                            return new Promise((resolve, reject) => {
                                // Build FormData
                                var formData = new FormData();
                                formData.append('user', email);
                                formData.append('role', role);

                                // Send ajax request to form action
                                $.ajax({
                                    url: submitButton.getAttribute('data-action'),
                                    method: 'POST',
                                    data: formData,
                                    processData: false,
                                    contentType: false,
                                }).done(function (response) {
                                    resolve(response);
                                }).fail(function (jqXHR, textStatus, errorThrown) {
                                    resolve(jqXHR.responseJSON);
                                });
                            });
                        },
                        allowOutsideClick: () => !Swal.isLoading()
                    }).then(function (result) {
                        if (result.isConfirmed) {
                            var value = result.value;
                            // Show popup confirmation
                            if (value.status && value.status == true) {
                                Swal.fire({
                                    showConfirmButton: false,
                                    showCancelButton: false,
                                    title: "User role updated successfully!",
                                    icon: "success",
                                    timer: 5000
                                });
                                // Remove submit button
                                submitButton.parentNode.removeChild(submitButton);
                            } else {
                                // Show popup error
                                Swal.fire({
                                    text: value.error || "Sorry, looks like there are some errors detected, please try again.",
                                    icon: "error",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn btn-primary"
                                    }
                                });
                            }
                        }

                    });

                });
            });

        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTModalStaffifyAccount.init(document.querySelectorAll('.staffify-account'), "Staffify");
    KTModalStaffifyAccount.init(document.querySelectorAll('.unstaffify-account'), "Un-Staffify");
});