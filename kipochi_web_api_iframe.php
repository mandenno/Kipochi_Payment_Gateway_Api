
<?php
    //Create an App in Kipochi merchants to get your API KEY
    
    $username="APP_USERNAME";
    
    $apiKey = "API_KEY"; 
    
    
    $gateway_url = "https://hela.kipochi.io/api/v1/kpg.php";//Kipochi Gateway URL
    
    $amount ="XXX"; //Amount to be transacted
   
    $success_url = "SUCCESS_CALLBACK_URL"; //URL called when the transactio is successful
    
    
    $fail_url = "FAILURE_CALLBACK_URL"; //URL called when the transaction is unsuccessful

    // Set any metadata that you would like to send along with this request.
    // ONLY change the values XXX and YYY.
    
    $extra1="XXX";//Add your own extra data alongside your request
    
    $extra2="YYY";//Add your own extra data alongside your request
    $dataArray = array(
        'username'    =>$username,
        'apikey'      =>$apiKey,
        'amount'      =>$amount,
        'success_url' =>$success_url,
        'fail_url'    =>$fail_url,
        'extra1'   => $extra1,
        'extra2'   => $extra2,
        
        ); 
  
  
     $data = http_build_query($dataArray);
     
     $iframe_src=$gateway_url."?".$data;

    //display Kipochi - iframe and pass iframe_src
 
?>

<!--Place the iframe below inside your body tag-->

    <iframe class="iframe" src="<?php echo $iframe_src;?>" width="100%" height="700px"  scrolling="yes" frameBorder="0">
    	<p>Browser unable to load iFrame</p>
    </iframe>
  
