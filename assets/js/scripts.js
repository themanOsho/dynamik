/**
 * Dynamik Theme - Scripts
 * Handles the mobile menu toggle.
 *
 * @package Dynamik
 */

document.addEventListener(
	"DOMContentLoaded",
	function () {
		const menuToggle = document.querySelector( ".menu-toggle" );
		const navMenu    = document.querySelector( ".nav-menu" );

		if (menuToggle && navMenu) {
			menuToggle.addEventListener(
				"click",
				function () {
					navMenu.classList.toggle( "active" );
					menuToggle.classList.toggle( "open" );
				}
			);
		}
	}
);