$(function() {

	$(document).on('click', '#my-name ', function() {
		event.preventDefault();
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
});
