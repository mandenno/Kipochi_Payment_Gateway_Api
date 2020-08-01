<?php
        include_once('KipochiPaymentGateway.php');  
       
        $apiKey="API_KEY";//Merchant's API KEY
        
        $username="API_USERNAME"; //Merchant's API USERNAME
     
        $amount = "10"; //Amount to be paid
        $accountName = "ACCOUNT_NAME"; //Paybill account Name
        $extra1 ="1062";//set a reference number 1
        $extra2 ="1063";//set a reference number 2
        
        $phoneNumber = "PHONE_NUMBER";//phone number (in internation format) to receive payment request
      
        $gway = new KPG();
       
        $response = $gway->sendSTKpushRequest($apiKey, $username, $accountName, $amount, $phoneNumber, $extra1, $extra2);
       
        echo $response;
       
       

?>
