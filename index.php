<?php
// this line loads the library

require_once 'Twilio/autoload.php';
//require ('Twilio.php');
use Twilio\Rest\Client;

echo "Hello \n";

$sid    = "ACba3bf5ed690fa8365ed49f99ac29c0b4";
$token  = "0661f05d98e6fee38ab62e54e73baee2";
$twilio = new Client($sid, $token);


$message = $twilio->messages
    ->create("+12019854884", // to
        array(
            "from" => "+19292039232",
            "body" => "Your message"
        )
    );

print($message->sid);
