jQuery( function () {

    jQuery( '.vanilla-elements-enable-button, .vanilla-elements-disable-button' ).on( 'click', function () {
    
        jQuery( 'body' ).toggleClass( 'vanilla-elements-enabled' );
        
    });

});