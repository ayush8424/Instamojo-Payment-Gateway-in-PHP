<?php

    $email = 'YOUR_EMAIL'; //To Sent to a notify email whenever a user complete a payment.
    $api_key = 'YOUR_API_KEY';
    $api_secret = 'YOUR_API_SECRET';
    $api_salt = 'YOUR_API_SALT';
    $webhook_url = 'https://YOUR_WEBSITE_URL/webhook.php';
    $redirect_url = 'https://YOUR_WEBSITE_URL/thanks.php';
    $mode = "test"; //You can change it to live by jest replacing it by 'live'

    if($mode == 'live'){
        $mode = 'www';
    }else{
        $mode = 'test';
    }
    
?>
