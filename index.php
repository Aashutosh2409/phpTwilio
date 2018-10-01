<?php
// this line loads the library

require_once 'Twilio/autoload.php';
//require ('Twilio.php');
use Twilio\Rest\Client;

echo "Hello ";

$sid    = "ACba3bf5ed690fa8365ed49f99ac29c0b4";
$token  = "0661f05d98e6fee38ab62e54e73baee2";
$twilio = new Client($sid, $token);


$message = $twilio->messages
    ->create("+19173490168", // to
        array(
            "from" => "+19292039232",
            "body" => "Hello from AASHUTOSH SINGH CS 643 Fall 2018"
        )
    );

print($message->sid);
