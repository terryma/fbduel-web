<?php
require_once 'config.php';
require_once 'person.php';
function getFriends($facebook) {
	$friends = $facebook->api('/me/friends');
	$friends = $friends['data'];

	$num_friends = count($friends);
	$indices = array(rand(0, $num_friends), rand(0, $num_friends));
	while ($indices[0] == $indices[1]) {
		$indices[1] = rand(0, $num_friends);
	}
	// check to make sure left != right
	$candidates = array();
	foreach ($indices as $i) {
		//	$data = $facebook->api("/${friends[$i]['id']}");
		$p = new Person;
		$p->id = $friends[$i]['id'];
		$p->name = $friends[$i]['name'];
		$p->pic = "http://graph.facebook.com/{$friends[$i]['id']}/picture?type=large";

		//	$albums = $facebook->api("/{$friends[$i]['id']}/albums");
		//
		//foreach($albums['data'] as $album)
		//{
		//	// get all photos for album
		//	$photos = $facebook->api("/{$album['id']}/photos");
		//
		//	foreach($photos['data'] as $photo)
		//	{
		//		$p->pic = $photo['source'];
		//		echo "<img src='{$photo['source']}' />", "<br />";
		//
		//	}
		//}
		array_push($candidates, $p);
	}
	return $candidates;
}
