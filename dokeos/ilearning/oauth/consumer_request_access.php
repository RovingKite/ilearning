<?php
include_once "library/OAuthServer.php";
include_once "config.php";
$store   = OAuthStore::instance('MySQL', $dboptions);
$server = new OAuthServer();
$access_token=$server->accessToken();
?>
