$(function() {

	$(document).on('click', '#bryan', function() {
		$('#post').fadeOut(200);
		$.get('/posts/posts', function(data) {
			$("#content").html(data);
			$('#posts').hide().fadeIn(200);
		});
	});

	$(document).on('click', '.post-title', function() {
		$('#posts').fadeOut(200);
		$.get('/posts/view/' + $(this).attr('data-id'), function(data) {
			$("#content").html(data);
			$('#post').fadeIn(200);
		});
	});

});