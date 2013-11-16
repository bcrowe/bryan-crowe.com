$(function() {

	$( "#posts a" ).on('click', function() {
		$('#posts').fadeOut(200);
		$.get('/posts/view/' + $(this).attr('data-id'), function(data) {
			$("#content").html(data);
			$('#post').fadeIn(200);
		});
	});

});