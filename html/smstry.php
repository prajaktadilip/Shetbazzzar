Choose your language
POST GET
<?php
// Account details
$apiKey = urlencode("IgjZhaRIRCc-yJMYR0hEU1qRJkffDWYkc0PwYrXsR5");
// Message details
$numbers = array(918123456789, 918987654321);
$sender = urlencode(‘TXTLCL’);
$message = rawurlencode(‘This is your message’);

$numbers = implode(‘,’, $numbers);

// Prepare data for POST request
$data = array(‘apikey’ => $apiKey, ‘numbers’ => $numbers, “sender” => $sender, “message” => $message);
// Send the POST request with cURL
$ch = curl_init(‘https://api.textlocal.in/send/’);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
// Process your response here
echo $response;
?>
