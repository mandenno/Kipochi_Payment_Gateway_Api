<?php
        include_once('KipochiPaymentGateway.php');  
       
        $apiKey="API_KEY";//Merchant's API KEY
        
        $username="API_USERNAME"; //Merchant's API USERNAME
        
        $callbackURL="CALLBACK_URL"; //Callback URL to receive payment response
        
        $amount = "100"; //Amount to be paid
        
        $phoneNumber = "254721XXXXXX";//phone number (in internation format) to receive payment request
      
        $gway = new STKPUSH();
       
        $response = $gway->sendSTKpushRequest($apiKey, $username, $amount, $phoneNumber, $callbackURL);
       
        echo $response;
        
        //Handle the JSON response from gateway
        //{"status":"success", "message":"Success. Request accepted for processing"}
        //{"status":"error", "errorMessage":"error message"}
       

?>
