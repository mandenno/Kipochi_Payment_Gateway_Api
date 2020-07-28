<?php
        include_once('KipochiPaymentGateway.php');  
       
        $apiKey="API_KEY";//Merchant's API KEY
        
        $username="USERNAME"; //Merchant's API USERNAME'
        
        $shortcode="";//Leave empty if you're using Kipochi Paybill
		
        $startDate="START_DATE";//format YYYY-MM-DD
    		
    	  $endDate="END_DATE";// format YYYY-MM-DD
    		
    	  $count="100";
        //The number of transaction results you would like for this query. Must be > 1 and < 1,000
    		
        $gway = new KPG();
       
        $response = $gway->transanctionList($apiKey, $username, $startDate, $endDate, $shortcode, $count);
       
        echo $response;
       
?>
