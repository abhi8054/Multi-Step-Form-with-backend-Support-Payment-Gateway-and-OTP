<?php
// Require the bundled autoload file - the path may need to change
// based on where you downloaded and unzipped the SDK
require __DIR__ . '/twilio-php-main/src/Twilio/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;
$mobileno = $_GET['mno'];

$otp = rand(1111,9999);


// Your Account SID and Auth Token from twilio.com/console
$sid = 'AC13ea722acd9e757acd1da4af91bc6e0c';
$token = '9dfad343e519f44a21911b64b493827f';
$client = new Client($sid, $token);

// Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    '+91'.$mobileno,
    [
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+13392185861',
        // the body of the text message you'd like to send
        'body' => "This is your OTP ".$otp,
    ]
);
echo $otp;
?>