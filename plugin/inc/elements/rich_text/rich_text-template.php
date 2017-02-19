<?php

    /**
     * Vanilla elements rich text element template.
     */
    
?>

<?php global $layout; ?>

<?php echo apply_filters( 'the_content', $layout['rich_text'] ); ?>