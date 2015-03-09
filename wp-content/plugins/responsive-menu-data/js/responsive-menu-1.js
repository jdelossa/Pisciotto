var $RMjQuery = jQuery.noConflict();
$RMjQuery( document ).ready( function( ){
	function openRM(){$RMjQuery( 'body' ).addClass( 'RMPushOpen' );
	$RMjQuery( '#content').addClass( 'RMPushSlide' );
	$RMjQuery( '#content, .footer' ).animate({top: "170px"}, 500, 'linear' );
	$RMjQuery( '#responsive-menu' ).css( 'display', 'block' );
	$RMjQuery( '#responsive-menu' ).stop().animate({bottom: "0"}, 500, 'linear', function(){})}
	function closeRM(){$RMjQuery( '#content, .footer' ).animate({top: "0"}, 500, 'linear' );
	$RMjQuery( '#responsive-menu' ).animate({right: "0"}, 0, 'linear', function(){$RMjQuery( 'body' ).removeClass( 'RMPushOpen' );
		$RMjQuery( '#content, .footer' ).removeClass( 'RMPushSlide' );$RMjQuery( '#responsive-menu' ).css( 'display', 'none' )})}isOpen = false;
	$RMjQuery( '#click-menu' ).click( function(){if( !isOpen ){openRM();
		isOpen = true}else{closeRM();
			isOpen = false}});
	$RMjQuery( window ).resize( function(){if( $RMjQuery( window ).width() > 767 ){
		if( $RMjQuery( '#responsive-menu' ).css( 'top' ) != '-1%' ){closeRM()}}});
	clickLink = '<span class="appendLink">&#9660;</span>';
	$RMjQuery( '#responsive-menu .responsive-menu .sub-menu' ).css( 'display', 'none' );
	$RMjQuery( '#responsive-menu .responsive-menu .menu-item-has-children' ).prepend( clickLink );
	$RMjQuery( '.appendLink' ).on( 'click', function(){$RMjQuery( this ).nextAll( 'ul.sub-menu' ).toggle();
		if( $RMjQuery( this ).html() == '▼' ){$RMjQuery( this ).html( '&#9650;' )}else{$RMjQuery( this ).html( '&#9660;' )}})});