<?php
        include_once('KipochiPaymentGateway.php');  
       
         //Create a Merchant account at https://Kipochi.angani.co
    
        $username="Your_Kipochi_username";

        $apiKey = "Your_Kipochi_api"; 
        
        $callbackURL="YOUR_CALLBACK_URL_HERE"; //Callback URL to receive payment response
        
        $amount = "1"; //Amount to be paid
        
        $phoneNumber = "254xxxxxxxxx";//phone number (in internation format) to receive payment request
        $merchant_reference="Merchant_reference_number";
        $gway = new STKPUSH();
       
        $response = $gway->sendSTKpushRequest($apiKey, $username, $amount, $phoneNumber, $callbackURL,         $merchant_reference);
       
        echo $response;
        
        //Handle the JSON response from gateway
        //{"status":"success", "message":"Success. Request accepted for processing"}
        //{"status":"error", "errorMessage":"error message"}
       

?>