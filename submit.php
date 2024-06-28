<?php
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process personal details form submission
    if (isset($_POST["start_date"]) && isset($_POST["membership_start"])) {
        // Validate and process personal details
        $start_date = $_POST["start_date"];
        $membership_start = $_POST["membership_start"];
        $title = $_POST["title"];
        $first_name = $_POST["first_name"];
        $surname = $_POST["surname"];
        $dob = $_POST["dob"];
        $mobile = $_POST["mobile"];
        $email = $_POST["email"];
        $confirm_email = $_POST["confirm_email"];
        $receive_emails = isset($_POST["receive_emails"]) ? $_POST["receive_emails"] : "no";
        $receive_sms = isset($_POST["receive_sms"]) ? $_POST["receive_sms"] : "no";

        // Example of validation (you should implement your own)
        if (empty($email) || empty($confirm_email) || $email != $confirm_email) {
            $response = array(
                "status" => "error",
                "message" => "Email addresses do not match."
            );
            echo json_encode($response);
            exit();
        }

        // Assuming successful processing, prepare response
        $response = array(
            "status" => "success",
            "data" => array(
                "first_name" => $first_name,
                "surname" => $surname,
                "email" => $email,
                // Add more fields as needed
            ),
            "code" => generateConfirmationCode() // Generate a confirmation code
        );

        echo json_encode($response);
        exit();
    }

    // Process address details form submission
    // Example: Address details handling (add your own validation)
    if (isset($_POST["postcode"]) && isset($_POST["house_number"])) {
        // Validate and process address details
        $postcode = $_POST["postcode"];
        $house_number = $_POST["house_number"];
        $street_address = $_POST["street_address"];
        $town = $_POST["town"];

        // Assuming successful processing, prepare response
        $response = array(
            "status" => "success",
            "message" => "Address details submitted successfully!"
        );

        echo json_encode($response);
        exit();
    }

    // Process bank details form submission
    // Example: Bank details handling (add your own validation)
    if (isset($_POST["account_name"]) && isset($_POST["account_number"])) {
        // Validate and process bank details
        $account_name = $_POST["account_name"];
        $account_number = $_POST["account_number"];
        $sort_code = $_POST["sort_code"];
        $bank_name = $_POST["bank_name"];

        // Assuming successful processing, prepare response
        $response = array(
            "status" => "success",
            "message" => "Bank details submitted successfully!"
        );

        echo json_encode($response);
        exit();
    }
}

// If none of the conditions match or there's an error
$response = array(
    "status" => "error",
    "message" => "Error: Invalid form submission."
);

echo json_encode($response);

// Function to generate a confirmation code
function generateConfirmationCode() {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $code = '';
    $length = 8;

    for ($i = 0; $i < $length; $i++) {
        $code .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $code;
}
?>
