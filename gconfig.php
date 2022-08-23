<?php






//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('404537205202-g6decp9p09e2do3ovs4do90liuaope59.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/482/login.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>
