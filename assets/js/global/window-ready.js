/**
 * File window-ready.js
 *
 * Add a "ready" class to <body> when window is ready.
 *
 * @author Greg Rickaby, Corey Collins
 * @since January 31, 2020
 */
function tvlrWindowReady() {
	document.body.classList.add( 'ready' );
}

if (
	( 'complete' === document.readyState ||
		'loading' !== document.readyState ) &&
	! document.documentElement.doScroll
) {
	tvlrWindowReady();
} else {
	document.addEventListener( 'DOMContentLoaded', tvlrWindowReady );
}
