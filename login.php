<?php
session_start();
require_once 'sso_handler.php';

$CLIENT_ID='b7IzA0Zo3E2KC41C2D8T3ma1VAYlR7F1iJLANdiz';
$CLIENT_SECRET='oC3RyzoO6cj5Ll3EzUrSqG60dzviEpr2SML2YrJcIXbOcvfC4kcKVJhjLcKSKKDx8Ahu3mskgVdnMRywggPSmy9hEz3gHgrK5ou6S51c1GWwiOj2SUE8nwAJFWOkEkNC';
echo "hi";
//$required_fields = array('username', 'email', 'roll_number');
//$state = 'user_login';
$response_type = 'code';
$permissions = 'basic profile ldap';
$REDIRECT_URI = 'https://gymkhana.iitb.ac.in/~ugacademics/ssotest/login.php';
$sso_handler = new SSOHandler($CLIENT_ID, $CLIENT_SECRET);
$required_scopes=array('basic','profile','ldap');
$required_fields = array('username', 'email', 'roll_number');

if ($sso_handler->validate_code($_GET) && $sso_handler->validate_state($_GET)) {
echo "hello";
  $response = $sso_handler->default_execution($_GET, $REDIRECT_URI,$required_scopes,$required_fields);
}
 
 if (!isset($response['error']) && isset($response['access_information']) && isset($response['user_information'])) {
    echo "hello";
	//echo $response['user_information'][0];
echo '<pre>'; print_r($response['access_information']); echo '</pre>';
echo '<pre>'; print_r($response['user_information']); echo '</pre>';

$access_token=$response['access_information']['access_token'];

echo $access_token;
}
?>

