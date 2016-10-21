(function($) {
	$(document).ready(function () {
	    $("a[rel^='prettyPhoto[iframes]']").prettyPhoto({
		    animationSpeed: 'normal', /* fast/slow/normal */
		    opacity: 0.80, /* Value between 0 and 1 */
		    showTitle: true, /* true/false */
		    deeplinking: false
		});
	});
})(jQuery);