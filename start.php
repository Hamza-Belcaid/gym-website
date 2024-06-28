<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership Registration - FIT CLUB GYM</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/tooplate-gymso-style.css">
    <style>
        /* Adjustments for membership table */
        .table-bordered td, .table-bordered th {
            background-color: #fff; /* White background */
            color: #333; /* Dark text */
        }
        label {
            color: white; /* Set label text color to white */
        }
    </style>
</head>
<body>
    <?php include 'sidebar.php'; ?>

    <div class="container">
        <h2 class="section__header">Select Membership</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">12 Month Premium Membership</h5>
                        <p class="card-text"><strong>Price:</strong> MAD 49.99 per month</p>
                        <button class="btn btn-primary" onclick="selectMembership('12 Month Premium', 49.99)">Select</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">12 Month Standard Membership</h5>
                        <p class="card-text"><strong>Price:</strong> MAD 39.99 per month</p>
                        <button class="btn btn-primary" onclick="selectMembership('12 Month Standard', 39.99)">Select</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Month To Month Premium Membership</h5>
                        <p class="card-text"><strong>Price:</strong> MAD 59.99 per month</p>
                        <button class="btn btn-primary" onclick="selectMembership('Month To Month Premium', 59.99)">Select</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Month To Month Standard Membership</h5>
                        <p class="card-text"><strong>Price:</strong> MAD 49.99 per month</p>
                        <button class="btn btn-primary" onclick="selectMembership('Month To Month Standard', 49.99)">Select</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-4">
            <div class="form-group">
                <label for="promoCode" style="color: white;">Optional Claim Code (if applicable)</label>
                <input type="text" class="form-control" id="promoCode">
            </div>
            <button class="btn btn-primary" onclick="applyPromoCode()">Apply Promo Code</button>
        </div>

        <div id="membershipFormContainer" style="display: none;">
            <h2 class="mb-4" style="color: white;">Membership Registration Form</h2>
            <form id="membershipForm" action="submit.php" method="post">
                <input type="hidden" id="selectedMembership" name="selectedMembership">
                <input type="hidden" id="totalCost" name="totalCost">
                <div id="personalDetails">
                    <div class="mb-3">
                        <label for="start_date" class="form-label">Start Date</label>
                        <input type="date" class="form-control" id="start_date" name="start_date" required>
                    </div>
                    <div class="mb-3">
                        <label for="membership_start" class="form-label">When would you like to start your membership?</label>
                        <input type="text" class="form-control" id="membership_start" name="membership_start" required>
                    </div>
                    <h3 class="mb-4" style="color: white;">Personal Details</h3>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="title" class="form-label">Title</label>
                            <select id="title" class="form-select" name="title" required>
                                <option value="">Select title</option>
                                <option value="Mr">Mr</option>
                                <option value="Mrs">Mrs</option>
                                <option value="Miss">Miss</option>
                                <option value="Ms">Ms</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="first_name" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="surname" class="form-label">Surname</label>
                            <input type="text" class="form-control" id="surname" name="surname" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="dob" class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" id="dob" name="dob" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="mobile" class="form-label">Mobile Telephone</label>
                            <input type="text" class="form-control" id="mobile" name="mobile" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="confirm_email" class="form-label">Confirm Email</label>
                        <input type="email" class="form-control" id="confirm_email" name="confirm_email" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email Preferences</label><br>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="receive_emails" name="receive_emails" value="yes">
                            <label class="form-check-label" for="receive_emails">I wish to receive emails</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="receive_sms" name="receive_sms" value="yes">
                            <label class="form-check-label" for="receive_sms">I wish to receive SMS texts</label>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary next-btn" data-next="addressDetails">Next</button>
                </div>
                <div id="addressDetails" style="display: none;">
                    <h3 class="mb-4" style="color: white;">Address Details</h3>
                    <div class="mb-3">
                        <label for="postcode" class="form-label">Postcode</label>
                        <input type="text" class="form-control" id="postcode" name="postcode" required>
                    </div>
                    <div class="mb-3">
                        <label for="house_number" class="form-label">House no or name</label>
                        <input type="text" class="form-control" id="house_number" name="house_number" required>
                    </div>
                    <div class="mb-3">
                        <label for="street_address" class="form-label">Street Address</label>
                        <input type="text" class="form-control" id="street_address" name="street_address" required>
                    </div>
                    <div class="mb-3">
                        <label for="town" class="form-label">Town</label>
                        <input type="text" class="form-control" id="town" name="town" required>
                    </div>
                    <button type="button" class="btn btn-secondary prev-btn mr-3" data-prev="personalDetails">Previous</button>
                    <button type="button" class="btn btn-primary next-btn" data-next="bankDetails">Next</button>
                </div>
                <div id="bankDetails" style="display: none;">
                    <h3 class="mb-4" style="color: white;">Bank Details</h3>
                    <div class="mb-3">
                        <label for="account_name" class="form-label">Account Name</label>
                        <input type="text" class="form-control" id="account_name" name="account_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="account_number" class="form-label">Account Number</label>
                        <input type="text" class="form-control" id="account_number" name="account_number" required>
                    </div>
                    <div class="mb-3">
                        <label for="sort_code" class="form-label">Sort Code</label>
                        <input type="text" class="form-control" id="sort_code" name="sort_code" required>
                    </div>
                    <div class="mb-3">
                        <label for="bank_name" class="form-label">Bank Name</label>
                        <input type="text" class="form-control" id="bank_name" name="bank_name" required>
                    </div>
                    <button type="button" class="btn btn-secondary prev-btn mr-3" data-prev="addressDetails">Previous</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

        <div id="promoCodeResult" style="display: none;">
            <h3 style="color: white;">Promo Code Application Result</h3>
            <p id="promoCodeMessage"></p>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function selectMembership(selectedMembership, totalCost) {
            $('#selectedMembership').val(selectedMembership);
            $('#totalCost').val(totalCost);
            $('#membershipFormContainer').slideDown();
        }

        function applyPromoCode() {
            var promoCode = $('#promoCode').val();
            // Implement your promo code validation and application logic here
            // For demo purposes, just show a message
            $('#promoCodeMessage').text('Promo code applied successfully!');
            $('#promoCodeResult').slideDown();
        }

        $(document).ready(function () {
            $('.next-btn').click(function () {
                var currentContainer = $(this).closest('div');
                var nextContainerId = $(this).data('next');
                currentContainer.hide();
                $('#' + nextContainerId).fadeIn();
            });

            $('.prev-btn').click(function () {
                var currentContainer = $(this).closest('div');
                var prevContainerId = $(this).data('prev');
                currentContainer.hide();
                $('#' + prevContainerId).fadeIn();
            });

            $('#membershipForm').submit(function (e) {
                e.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: 'submit.php',
                    data: $('#membershipForm').serialize(),
                    success: function (response) {
                        if (response.status === 'success') {
                            // Show modal with confirmation details
                            $('#confirmationModalTitle').text('Membership Registration Successful');
                            $('#confirmationModalBody').html('<p>Thank you for registering!</p>' +
                                '<p><strong>Name:</strong> ' + response.data.first_name + ' ' + response.data.surname + '</p>' +
                                '<p><strong>Email:</strong> ' + response.data.email + '</p>' +
                                '<p><strong>Membership:</strong> ' + response.data.selectedMembership + '</p>' +
                                '<p><strong>Confirmation Code:</strong> ' + response.code + '</p>');
                            $('#confirmationModal').modal('show');

                            // Reset the form after successful submission
                            $('#membershipForm')[0].reset();
                        } else {
                            alert('Error: ' + response.message);
                        }
                    },
                    error: function () {
                        alert('Error: Failed to submit form.');
                    }
                });
            });
        });
    </script>

    <!-- Modal -->
    <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmationModalTitle">Membership Registration Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="confirmationModalBody">
                    <!-- Confirmation details will be inserted here -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
