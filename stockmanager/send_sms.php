       <?php
    	// Textlocal account details
    	$username = 'chamrithjay@gmail.com';
    	$hash = '1993Minuwangoda';
    	
    	// Message details
    	$numbers = array(+94716482041);
    	$sender = urlencode('Jims Autos');
    	$message = rawurlencode('This is your message');
     
    	$numbers = implode(',', $numbers);
     
    	// Prepare data for POST request
    	$data = array('username' => $username, 'hash' => $hash, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
     
    	// Send the POST request with cURL
    	$ch = curl_init('http://api.txtlocal.com/send/');
    	curl_setopt($ch, CURLOPT_POST, true);
    	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    	$response = curl_exec($ch);
    	curl_close($ch);
    	
    	// Process your response here
    	echo $response;
    ?>