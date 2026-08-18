/**
 * Category sidebar tab switching for the "Other Solutions" admin page.
 *
 * Ported from wt-woocommerce-related-products (wt-crp-os-* → wt-uiew-os-*).
 *
 * @package Users_Customers_Import_Export_For_Wp_Woocommerce
 */
( function ( $ ) {
	'use strict';

	$( document ).ready( function () {
		var $links    = $( '.wt-uiew-os-cat-link' );
		var $panels   = $( '.wt-uiew-os-category-panel' );
		var $title    = $( '#wt-uiew-os-cat-title' );
		var $subtitle = $( '#wt-uiew-os-cat-subtitle' );

		/**
		 * Equalize card heights per row within the active panel.
		 *
		 * Grid uses align-items: start so an expanded card grows independently,
		 * but that also lets collapsed cards vary in height (worse at browser zoom).
		 * This pass groups cards by their offsetTop and sets each row's cards to
		 * the tallest natural height in that row.
		 */
		function equalizeCardHeights() {
			var $panel = $panels.filter( '.active' );
			if ( ! $panel.length ) {
				return;
			}
			var $cards = $panel.find( '.wt-uiew-os-card' );
			if ( ! $cards.length ) {
				return;
			}

			$cards.css( 'min-height', '' );

			var rows = {};
			$cards.each( function () {
				var top = Math.round( $( this ).position().top );
				if ( ! rows[ top ] ) {
					rows[ top ] = [];
				}
				rows[ top ].push( this );
			} );

			$.each( rows, function ( top, cards ) {
				var maxHeight = 0;
				$( cards ).each( function () {
					var h = $( this ).outerHeight();
					if ( h > maxHeight ) {
						maxHeight = h;
					}
				} );
				$( cards ).css( 'min-height', maxHeight + 'px' );
			} );
		}

		equalizeCardHeights();

		var resizeTimer;
		$( window ).on( 'resize', function () {
			clearTimeout( resizeTimer );
			resizeTimer = setTimeout( equalizeCardHeights, 150 );
		} );

		$links.on( 'click', function ( e ) {
			e.preventDefault();

			var category = $( this ).data( 'category' );

			$links.removeClass( 'active' );
			$( this ).addClass( 'active' );

			$panels.removeClass( 'active' );
			var $panel = $( '#wt-uiew-os-panel-' + category );
			$panel.addClass( 'active' );

			$title.text( $panel.data( 'title' ) );
			$subtitle.text( $panel.data( 'subtitle' ) );

			setTimeout( equalizeCardHeights, 50 );
		} );

		/* Show More / Show Less toggle for card feature lists (>3 features). */
		$( '.wt-uiew-os-show-more' ).on( 'click', function ( e ) {
			e.preventDefault();
			var $link   = $( this );
			var $toggle = $link.closest( '.wt-uiew-os-show-more-less' );
			var $list   = $toggle.prev( '.wt-uiew-os-card-features--collapsible' );
			$link.hide();
			$toggle.find( '.wt-uiew-os-show-less' ).show();
			$list.find( 'li:nth-of-type(n+4)' ).slideDown( 250 );
		} );

		$( '.wt-uiew-os-show-less' ).on( 'click', function ( e ) {
			e.preventDefault();
			var $link   = $( this );
			var $toggle = $link.closest( '.wt-uiew-os-show-more-less' );
			var $list   = $toggle.prev( '.wt-uiew-os-card-features--collapsible' );
			$link.hide();
			$toggle.find( '.wt-uiew-os-show-more' ).show();
			$list.find( 'li:nth-of-type(n+4)' ).slideUp( 250 );
		} );
	} );
}( jQuery ) );
