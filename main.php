<?php
require_once 'config.php';
require_once 'functions.php';
$friends = getFriends($facebook);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<link type="text/css" rel="stylesheet" media="screen" href="css/default.css" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script type="text/javascript" src="js/fbduel.js"></script>
</head>
<body>
<div id="left_pic" class="badge large blue awesome">
	<img  class="badge_img" src='<?php echo $friends[0]->pic?>' />
	<span class="badge_name" ><?php echo $friends[0]->name?></span>
	<span class="hidden"><?php echo $friends[0]->id?></span>
</div>
<div id="right_pic" class="badge large blue awesome">
	<img class="badge_img" src='<?php echo $friends[1]->pic?>' />
	<span class="badge_name" ><?php echo $friends[1]->name?></span>
	<span class="hidden"><?php echo $friends[1]->id?></span>
</div>
<br/>
<div id="removeAll" class="large yellow awesome">Remove all votes</div>
<div id="log"></div>
<div id="votes"></div>
</body>
</html>