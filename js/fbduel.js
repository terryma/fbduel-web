$(document).ready(function(){
	loadVotes();
	
	$('#left_pic').click(function() {
		var left = $('#left_pic').find('span.hidden').text();
		var right = $('#right_pic').find('span.hidden').text();
		$.get('vote.php', {l:left, r:right, w:left}, loadVotes);
		loadNext();
	});
	$('#right_pic').click(function() {
		var left = $('#left_pic').find('span.hidden').text();
		var right = $('#right_pic').find('span.hidden').text();
		$.get('vote.php', {l:left, r:right, w:right}, loadVotes);
		loadNext();
	});
	
	$('#removeAll').click(function() {
		$.get("/fbduel/remove-votes", loadVotes);
	});
});

function loadVotes() {
	$('#votes').fadeOut(function(){
		$.get("/fbduel/get-votes", function(data) {
			$('#votes').html(data).fadeIn();
		});
	})
}

// Get the next two players
function loadNext() {
	var badges = [$('#left_pic'), $('#right_pic')];
	$.getJSON("get-friends.php", function(friends) {
		for (var i = 0; i < friends.length; i++) {
			badges[i].find('img.badge_img').attr('src', friends[i].pic);
			badges[i].find('span.badge_name').text(friends[i].name);
			badges[i].find('span.hidden').text(friends[i].id);
		}
	});
}

function log(line) {
	$('#log').html(line);
}