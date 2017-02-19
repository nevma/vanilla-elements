<?php

    /**
     * Vanilla elements slideshow element template.
     */
    
?>

<?php global $layout; ?>

<?php if ( ! empty ( $layout['slideshow'] ) ) : ?>
    <div class = "responsiville-slideshow">
        <?php foreach ( $layout['slideshow'] as $slide ) : ?>
            <div class = "responsiville-slide">
                <?php if ( ! empty ( $slide['slide_title'] ) ) : ?>
                    <div class="slide-title"><?php echo $slide['slide_title']; ?></div>
                <?php endif; ?>
                <?php if ( ! empty ( $slide['slide_content'] ) ) : ?>
                    <div class="slide-content"><?php echo $slide['slide_content']; ?></div>
                <?php endif; ?>
                <?php if ( ! empty ( $slide['slide_image'] ) ) : ?>
                    <?php echo wp_get_attachment_image( $slide['slide_image'], 'original' ); ?>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>