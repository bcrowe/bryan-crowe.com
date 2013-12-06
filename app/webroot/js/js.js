$(function() {

	$(document).on('click', '#bryan', function() {
		$('#post, #comments').fadeOut(200, 'swing');
		$('video').removeClass('blurred');
		$.get('/posts/posts', function(data) {
			$("#content").html(data);
			$('#posts').hide().fadeIn(200, 'swing');
		});
	});

	$(document).on('click', '.post-title', function() {
		$('#posts').fadeOut(200);
		$('video').addClass('blurred');
		$.get('/posts/view/' + $(this).attr('data-id'), function(data) {
			$("#content").html(data);
			$('#post').fadeIn(200, 'swing');
			Rainbow.color();
		});
	});

	$(document).on('keydown', 'textarea', function(e) {
		var keyCode = e.keyCode || e.which;

		if (keyCode == 9) {
			e.preventDefault();
			var start = $(this).get(0).selectionStart;
			var end = $(this).get(0).selectionEnd;

			$(this).val($(this).val().substring(0, start)
			+ '\t'
			+ $(this).val().substring(end));

			$(this).get(0).selectionStart =
			$(this).get(0).selectionEnd = start + 1;
		}
	});

});