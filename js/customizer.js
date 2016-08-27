/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */


jQuery(document).ready(function($){

  $("#owl-demo").owlCarousel({
 
      navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true,
 	  pagination: false,
 	  navigationText: ['<i class="fa fa-caret-left" aria-hidden="true"></i>','<i class="fa fa-caret-right" aria-hidden="true"></i>']	
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
 	
  });

  $('p.title-acc').click(function(){
    $(this).next().slideToggle("slow");
  })
  $('.read-more-acc').click(function(){
    $(this).prev().toggle('slow',function(){
      if ($(this).is(':visible'))
        $(this).css('display','inline');
    });
  })
});




// ( function( $ ) {

// 	// Site title and description.
// 	wp.customize( 'blogname', function( value ) {
// 		value.bind( function( to ) {
// 			$( '.site-title a' ).text( to );
// 		} );
// 	} );
// 	wp.customize( 'blogdescription', function( value ) {
// 		value.bind( function( to ) {
// 			$( '.site-description' ).text( to );
// 		} );
// 	} );

// 	// Header text color.
// 	wp.customize( 'header_textcolor', function( value ) {
// 		value.bind( function( to ) {
// 			if ( 'blank' === to ) {
// 				$( '.site-title a, .site-description' ).css( {
// 					'clip': 'rect(1px, 1px, 1px, 1px)',
// 					'position': 'absolute'
// 				} );
// 			} else {
// 				$( '.site-title a, .site-description' ).css( {
// 					'clip': 'auto',
// 					'position': 'relative'
// 				} );
// 				$( '.site-title a, .site-description' ).css( {
// 					'color': to
// 				} );
// 			}
// 		} );
// 	} );
// } )( jQuery );

