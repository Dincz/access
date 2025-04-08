<?php
// echo "captcha_helper.php is loaded.";  // Debug message

function verifyRecaptcha($recaptchaResponse)
{
    // echo "called ";
    $secretKey = CAPCTHA_SECRET_KEY;
    $url = "https://www.google.com/recaptcha/api/siteverify";

    // Prepare POST data
    $postData = [
        'secret'   => $secretKey,
        'response' => $recaptchaResponse
    ];

    // Initialize cURL
    $ch = curl_init();
    curl_setopt_array($ch, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => http_build_query($postData), // Convert array to query string
        CURLOPT_HTTPHEADER => [
            "Content-Type: application/x-www-form-urlencoded"
        ]
    ]);

    // Execute request
    $response = curl_exec($ch);
    $error = curl_error($ch);
    curl_close($ch);

    if ($error) {
        error_log("reCAPTCHA cURL Error: " . $error);
        return false;
    }

    // Decode JSON response
    $result = json_decode($response, true);

    // Return true if reCAPTCHA is successful
    return isset($result['success']) && $result['success'] === true;
}
