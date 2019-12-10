<?php
echo 'above all';
ini_set('display_errors', '1');

include('env.php');
require_once('config.php');
echo $_SERVER["HTTP_HOST"];


if (isset($_GET['logout'])) { // logout: destroy token
    unset($_SESSION['accessToken']);
	die('Logged out.');
}
// if(session_status() == PHP_SESSION_ACTIVE)
// {
//     session_regenerate_id();
// }


echo 'before is set get code';
if (isset($_GET['code'])) { // we received the positive auth callback, get the token and store it in session
    // $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->authenticate($_GET['code']);
    // $access_token = $client->getAccessToken();


    $_SESSION['accessToken'] = $client->getAccessToken();
    
        echo '<pre>';
    var_dump($_SESSION);
    echo '</pre>';
}

echo 'before isset accesstoken';
if (isset($_SESSION['accessToken'])) { // extract token from session and configure client
    $token = $_SESSION['accessToken'];
    $client->setAccessToken($token);
    echo 'inside if isset session token';
}

if (!$client->getAccessToken()) { // auth call to google
   
    header("Location: {$pathValue}/login.php");
    exit();
}


echo '...............now print google oauth';
$google_oauth = new Google_Service_Oauth2($client);


echo '<pre>';
    // var_dump($client);
    echo '</pre>';
echo 'after google oauth';
$datas = $google_oauth->userinfo->get()->email;

echo '..................Now print value in data';

var_dump($datas);
$emailid = $datas;
echo 'after getting email';

if (strpos($emailid, '@indiamart.com') === false) {
    echo 'false - not im id';
    header("Location: {$pathValue}/login.php");
 
}else{
    echo 'true - im id';
    header("Location: {$pathValue}/extentReport-index.php");
}
exit();
?>