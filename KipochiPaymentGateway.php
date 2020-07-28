
<?php

  class KPG {
      
	  //send STK push
    public function sendSTKpushRequest($apiKey, $username, $accountName, $amount, $phoneNumber, $extra1, $extra2) {
      $curl_post_data = array( 
        'apiKey'      => $apiKey, 
        'username'   => $username,
        'amount'      => $amount, 
        'phoneNumber' => $phoneNumber,
        'accountName' => $accountName,
        'extra1'=>$extra1,
        'extra2'=>$extra2
        ); 
        
        
       //Kipochi paymentgateway Url
        $ch = curl_init("https://hela.kipochi.io/api/v1/stk_request/processRequest.php");
        $data = http_build_query($curl_post_data);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        // curl_setopt($ch, CURLOPT_TIMEOUT, 80);
        
         
        $response = curl_exec($ch);
        if(curl_error($ch)){
        $error=curl_error($ch);
        $error_response='{"status":"error", "message":"'.$error.'"}';
        return $error_response;
        }
        else
        {
        return $response;
        }
         
        curl_close($ch);
    }
	
	
	//validate transaction ID
	 public function validatePayment($apiKey, $username, $transId) {
      $curl_post_data = array( 
        'apiKey'      => $apiKey, 
        'username'   => $username,
        'transId'      => $transId
        ); 
        
        
       //Kipochi paymentgateway Url
        $ch = curl_init("https://hela.kipochi.io/api/v1/query/validatePayment.php");
        $data = http_build_query($curl_post_data);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        // curl_setopt($ch, CURLOPT_TIMEOUT, 80);
        
         
        $response = curl_exec($ch);
        if(curl_error($ch)){
        $error=curl_error($ch);
        $error_response='{"status":"error", "message":"'.$error.'"}';
        return $error_response;
        }
        else
        {
        return $response;
        }
         
        curl_close($ch);
    }
    
	//query payment list
	 public function transanctionList($apiKey, $username, $startDate, $endDate, $shortcode, $count) {
   
      $curl_post_data = array( 
        'apiKey'      => $apiKey, 
        'username'   => $username,
    		'startDate'=> $startDate,
    		'endDate'=> $endDate,
        'shortcode'=>$shortcode,
    		'count'=> $count
        ); 
        
        
       //Kipochi paymentgateway Url
        $ch = curl_init("https://hela.kipochi.io/api/v1/query/queryList.php");
        $data = http_build_query($curl_post_data);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        // curl_setopt($ch, CURLOPT_TIMEOUT, 80);
        
         
        $response = curl_exec($ch);
        if(curl_error($ch)){
        $error=curl_error($ch);
        $error_response='{"status":"error", "message":"'.$error.'"}';
        return $error_response;
        }
        else
        {
        return $response;
        }
         
        curl_close($ch);
    }
    
    
}

?>
