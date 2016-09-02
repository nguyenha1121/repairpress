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

  $("#testi").owlCarousel({
 
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

  $('.menu-toggle').click(function(){
    $('.menu-res').toggle();
  });

  $('.menu-toggle').text("Menu");

  $('p.title-acc').click(function(){
    $(this).next().slideToggle("slow");
  });
  $('.read-more-acc').click(function(){
    $(this).prev().toggle('slow',function(){
      if ($(this).is(':visible'))
        $(this).css('display','inline');
    });
  });
  $('.counter').counterUp();
  $( "#roundedOne3" ).change(function() {
  if($("#roundedOne3").prop( "checked" )) {
    $(".roundedOne3").css("background","#3baed4");}
   else {
    $(".roundedOne3").css("background","#e4e4e4");
  }
}).change();

  $( "#roundedOne" ).change(function() {
  if($("#roundedOne").prop( "checked" )) {
    $(".roundedOne").css("background","#3baed4");}
   else {
    $(".roundedOne").css("background","#e4e4e4");
  }
}).change();
  $( "#roundedOne2" ).change(function() {
  if($("#roundedOne2").prop( "checked" )) {
    $(".roundedOne2").css("background","#3baed4");}
   else {
    $(".roundedOne2").css("background","#e4e4e4");
  }
}).change();
  $( "#roundedOne1" ).change(function() {
  if($("#roundedOne1").prop( "checked" )) {
    $(".roundedOne1").css("background","#3baed4");}
   else {
    $(".roundedOne1").css("background","#e4e4e4");
  }
}).change();
  $('.item-box:last-child:after').css("display","none");
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

