<?php

require 'vender/autoload.php' ;

define('SITE_URL', 'http://tutorial.dev:8000/paypal');

$paypal = new \PayPal\Rest\ApiContext (

    new \PayPal\Auth\OAuthTokenCredential('AWxAvR1Q4J9U8JZaTVLFz1hI4PN8RUFgoC5oW0YLpHUlphH_WrfYjgyDdbPqa9Dp_dkoWp6wZbo8hkm4',
    	'EKHkZ03e1c4EBcL2pZUjPSMeU-xPQNb5vPsXaA6d6ofW9bIZqLaHsSFiSQT5_yO0fxHKRJv0G8FVIoJl')
);