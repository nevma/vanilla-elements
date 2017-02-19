<?php

    /**
     * Vanilla elements card element template.
     */

?>

<?php global $layout; ?>

<div class = "row">
    <?php if ( $layout['card_type'] == 'left' ) : ?>
        <div class = "column-40">
            <?php if ( ! empty ( $layout['card_text'] ) ) : ?>
                <?php echo wp_get_attachment_image( $layout['card_image'], 'original' ); ?>
            <?php endif; ?>
        </div>
        <div class = "column-60">
            <?php if ( ! empty ( $layout['card_title'] ) ) : ?>
                <?php echo $layout['card_title']; ?>
            <?php endif; ?>
            <?php if ( ! empty ( $layout['card_text'] ) ) : ?>
                <?php echo $layout['card_text']; ?>
            <?php endif; ?>
        </div>
    <?php elseif ( $layout['card_type'] == 'right' ) : ?>
        <div class = "column-60">
            <?php if ( ! empty ( $layout['card_title'] ) ) : ?>
                <?php echo $layout['card_title']; ?>
            <?php endif; ?>
            <?php if ( ! empty ( $layout['card_text'] ) ) : ?>
                <?php echo $layout['card_text']; ?>
            <?php endif; ?>
        </div>
        <div class = "column-40">
            <?php if ( ! empty ( $layout['card_text'] ) ) : ?>
                <?php echo wp_get_attachment_image( $layout['card_image'], 'original' ); ?>
            <?php endif; ?>
        </div>
    <?php endif; ?>
</div>