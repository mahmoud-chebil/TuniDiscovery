<?php

// Update the path below to your autoload.php,
// see https://getcomposer.org/doc/01-basic-usage.md
require_once '/path/to/vendor/autoload.php';

use Twilio\Rest\Client;

// Find your Account SID and Auth Token at twilio.com/console
// and set the environment variables. See http://twil.io/secure
$sid = getenv("ACce4a6004da89e849c35cb572d52572fc");
$token = getenv("c187ee85dd7e556b5a2e45374b830c7d");
$twilio = new Client($sid, $token);

$message = $twilio->messages
                  ->create("+19127328233", // to
                           [
                               "body" => "This is the ship that made the Kessel Run in fourteen parsecs?",
                               "to" => "+216 56140361"
                           ]
                  );

print($message->sid);