<?php
require_once 'library/facebook.php';
require_once 'secret.php';

$app_id = "101194839958049";
$app_secret = getAppSecret();

$facebook = new Facebook(array(
	'appId' => $app_id,
	'secret' => $app_secret,
	'cookie' => true
));

if(is_null($facebook->getUser()))
{
	header("Location:{$facebook->getLoginUrl(array('req_perms' => 'user_status,publish_stream,user_photos,friends_photos'))}");
	exit;
}