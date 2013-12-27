$(function() {

	$(document).on('click', '#photo a', function() {
		$('#post, #disqus-wrapper').fadeOut(200, 'swing');
		$('video').removeClass('blurred');
		$.get('/posts/posts', function(data) {
			$("#content").html(data);
			$('#posts').hide().fadeIn(200, 'swing');
		});
	});

	$(document).on('click', 'a.post-title', function(e) {
		$('#posts').fadeOut(200);
		$('video').addClass('blurred');
		var href = $(this).attr('href');
		loadContent(href);
		history.pushState('', 'New URL: ' + href, href);
		e.preventDefault();
	});

	window.onpopstate = function(event) {
		loadContent(location.pathname);
		$('video').removeClass('blurred');
	};

	function loadContent(url){
		$.get(url, function(data) {
			$("#content").html(data);
			$('#post, #disqus-wrapper').hide().fadeIn(200, 'swing');
			Rainbow.color();
		});
	}

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