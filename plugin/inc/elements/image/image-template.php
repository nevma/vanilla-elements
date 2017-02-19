<?php

    /**
     * Vanilla elements image element template.
     */
    
    global $layout;
    
?>

<?php echo wp_get_attachment_image( $layout['image'], 'original' ); ?>