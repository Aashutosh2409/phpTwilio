<?php
// this line loads the library

require_once 'Twilio/autoload.php';
//require ('Twilio.php');
use Twilio\Rest\Client;

//Using Twilio Account authentication and token
$sid    = "AXXXXXXXXXXXXXXXXXXXXXXXX";
$token  = "0XXXXXXXXXXXXXXXXXXXXXXXX";
$twilio = new Client($sid, $token);

//Detail Information
echo "<strong>----- SMS Details: -----</strong> </br> ";
echo "<strong>Sender:</strong> +19292039232 </br>";
echo "<strong>Recipient:</strong> +19173490168 </br>";
echo "<strong>Message:</strong> Hello from AASHUTOSH SINGH CS 643 Fall 2018 </br>";

$message = $twilio->messages
    ->create("+19173490168", // to
        array(
            "from" => "+19292039232",
            "body" => "Hello from AASHUTOSH SINGH CS 643 Fall 2018"
        )
    );

print($message->sid);
