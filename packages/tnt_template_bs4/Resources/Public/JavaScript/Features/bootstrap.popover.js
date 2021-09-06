$(document).ready(function () {
	$('[data-toggle="popover"]').popover({
		html: true,
		template: '<div class="popover"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body">Test</div><div class="popover-footer"></div></div>'
	});

	// Custom jQuery to hide popover on click of the close button
	$(document).on("click", ".close-btn.btn", function () {
		$(this).parents(".popover").popover('hide');
	});
});