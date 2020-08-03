$(function () {
	$(window).scroll(function () {
		var scroll = $(window).scrollTop();
		if (scroll >= 80) {
			$("header").addClass('shrink');
		} else {
			$("header").removeClass("shrink");
		}
	});
});
