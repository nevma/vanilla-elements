<?php

    /**
     * Vanilla elements accordion element template.
     */

?>

<?php global $layout; ?>

<?php if ( ! empty ( $layout['accordion'] ) ) : ?>
    <div class = "responsiville-accordion">
        <?php foreach ( $layout['accordion'] as $panel ) : ?>
            <div class = "responsiville-accordion-panel">
                <?php if ( ! empty ( $panel['panel_header'] ) ) : ?>
                    <div class="responsiville-accordion-header">
                        <?php echo $panel['panel_header']; ?>
                    </div>
                <?php endif; ?>
                <?php if ( ! empty ( $panel['panel_excerpt'] ) ) : ?>
                    <div class="responsiville-accordion-excerpt">
                        <?php echo $panel['panel_excerpt']; ?>
                    </div>
                <?php endif; ?>
                <?php if ( ! empty ( $panel['panel_content'] ) ) : ?>
                    <div class="responsiville-accordion-content">
                        <?php echo $panel['panel_content']; ?>
                    </div>
                <?php endif; ?>
                <?php if ( ! empty ( $panel['panel_footer'] ) ) : ?>
                    <div class="responsiville-accordion-footer">
                        <?php echo $panel['panel_footer']; ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>