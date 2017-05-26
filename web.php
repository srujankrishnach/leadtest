<?php
$challenge = $_REQUEST['hub_challenge'];
$verify_token = $_REQUEST['hub_verify_token'];
if($verify_token==='abc123')
	echo $challenge;

$inputJSON = file_get_contents('php://input');
$input = json_decode($inputJSON, true);
error_log(print_r($input, true));

 ob_start();

  $var1 = 'some_value';
  $var2 = 'some_other_value';
 
  ob_end_clean();

  /* 
     Make sure you url-encode your variables so they don't break!
  */
  $location  = 'http://192.168.64.1:9090/fbtest/getData.jsp?';
  $location .= 'var1='.url_encode($var1);
  $location .= '&amp;';
  $location .= 'var2='.url_encode($var2);

  /*
     Redirect to $location, 
     Using a 301 redirect (not 302!), 
     With TRUE to replace default HTTP code with 301 code and redirect.
  */
  header('Location: '.$location, 301, TRUE);
  exit();
?> 
