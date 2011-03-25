<?php
require_once 'config.php';
require_once 'functions.php';
// This class is called via ajax after a vote has been casted
// Load all current user's friends and return 2 at random in JSON
$candidates = getFriends($facebook);
$ret = json_encode($candidates);
echo $ret;
?>
