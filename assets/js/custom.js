(function ($) {
	'use strict';
	/* ///// Template Helper Function ///// */
	$.fn.hasAttr = function( attribute ) {
		var obj = this;

		if( obj.attr(attribute ) !== undefined ) {
			return true;
		} else {
			return false;
		}
	};
	var WPTheme = {
		init: function() {
			this.menus();
		},
		menus: function(){
			$('.menu-trigger').on('click', function(){
				$('#menu').toggleClass('visible');
				$('#nav').toggleClass('visible');
			});
		}
	}
	$( document ).ready( function () {
		WPTheme.init();
	});
}( jQuery ));