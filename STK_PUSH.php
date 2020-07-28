<?php
        include_once('KipochiPaymentGateway.php');  
       
        $apiKey="API_KEY";//Merchant's API KEY
        
        $username="API_USERNAME"; //Merchant's API USERNAME
     
        $amount = "10"; //Amount to be paid
        
        $accountName = "ACCOUNT_REFERENCE_NAME"; //set reference name
        
        $phoneNumber = "2547xxxxxxxx";//phone number (in internation format) to receive payment request
        
        $referenceNumber ="xxxx";//set a reference number
        
        $gway = new STKPUSH();
       
        $response = $gway->sendSTKpushRequest($apiKey, $username, $accountName, $amount, $phoneNumber);
       
        echo $response;
        
        //Handle the JSON response from gateway
        //{"status":"success", "message":"Success. Request accepted for processing"}
        //{"status":"error", "errorMessage":"error message"}
       

?>
