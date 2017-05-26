<?php
$challenge = $_REQUEST['hub_challenge'];
$verify_token = $_REQUEST['hub_verify_token'];
if($verify_token==='abc123')
	echo $challenge;

$inputJSON = file_get_contents('php://input');
$input = json_decode($inputJSON, true);
error_log(print_r($input, true));

$var1 = 'some_value';
$var2 = $input;

header('Location: http://192.168.64.1:9090/fbtest/getData.jsp?var1='.$var1.'&var2='.$var2);
//exit;
?> 
