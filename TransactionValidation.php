<?php
        include_once('KipochiPaymentGateway.php');  
       
        $apiKey="APIKEY";//Merchant's API KEY
        
        $username="USERNAME"; //Merchant's API USERNAME'
		
	$transId="TRANSACTION_CODE";//transaction ID to query
      
        $gway = new KPG();
       
        $response = $gway->validatePayment($apiKey, $username, $transId);
       
        echo $response;
       

?>
