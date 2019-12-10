<?php
include('./env.php');
require_once('google-api2/src/Google/autoload.php');
// require_once('./google-api/vendor/autoload.php');

$client = new Google_Client();
// $client->setAuthConfig('./creds.json');
// echo 'client set';
$client->setClientId('64436141311-95ltn246r19d1d85nhpae7di55frd1rd.apps.googleusercontent.com');
$client->setClientSecret('Z69Iak1fotx2vCZDKDuQsMaD');
$currentCookieParams = session_get_cookie_params();

// $rootDomain = '.example.com';
$path = '/';

session_set_cookie_params(
    // $currentCookieParams["lifetime"],
    $currentCookieParams["path"],
    // $rootDomain,
    $currentCookieParams["secure"]
    // $currentCookieParams["httponly"]
);

// session_name('IMrep');
session_start();



$client->addScope(Google_Service_Oauth2::USERINFO_EMAIL);
$redirectURI = "{$pathValue}/callback2.php";
$client->setRedirectUri($redirectURI);
session_start();

?>