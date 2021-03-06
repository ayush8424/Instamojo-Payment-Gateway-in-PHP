<?php
include 'config.php';
?>
<!DOCTYPE html>
<html>
<title>Payment Details!</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
<div class="w3-container">
    <h1 class='w3-center'>Your Payment Details! <a href='index.php'>Go back Home</a></h1>
    <p class="w3-center">You can also save all these in Database using simple Insert Query. </p>
    <div class="w3-container w3-center">
  <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-blue w3-hover-blue">
      Click to see the insert Script.</button>

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4">
      <header class="w3-container w3-margin w3-padding"> 
        <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-button w3-blue w3-display-topright">&times;</span>
        <h1 class='w3-center'>Simple Insert Script!</h1>
        <script src="https://gist.github.com/hackerrahul/159a02782fece68b31e6177055a30033.js"></script>
    </div>
  </div>
</div>
    
 <?php

include 'src/instamojo.php';

$api = new Instamojo\Instamojo($api_key, $api_secret,'https://'.$mode.'.instamojo.com/api/1.1/');

$payid = $_GET["payment_request_id"];


try {
    $response = $api->paymentRequestStatus($payid);


    echo "<h4>Payment ID: " . $response['payments'][0]['payment_id'] . "</h4>" ;
    echo "<h4>Payment Name: " . $response['payments'][0]['buyer_name'] . "</h4>" ;
    echo "<h4>Payment Email: " . $response['payments'][0]['buyer_email'] . "</h4>" ;
    echo "<h4>Purpose: " . $response['purpose'] . "</h4>" ;
    echo "<h4>Payment Status: " . $response['status'] . "</h4>" ;
    echo "<h4>Payment Amount: " . $response['amount'] . " ".$response['payments'][0]['currency']."</h4>" ;

  echo "<hr><pre>";
   print_r($response);
echo "</pre>";
    ?>


    <?php
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}



  ?>
 </div>
 </body>
 </html>