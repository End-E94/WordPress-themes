<?php
/**
 * Title: Call to action
 * Slug: demo-block-theme/call-to-action
 * Categories: demo-block-theme
 */
?>
<!-- wp:group {"align":"full","backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Ready to get started?', 'demo-block-theme' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e( 'Tell visitors what you offer and how to reach you.', 'demo-block-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Choose plan', 'demo-block-theme' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Contact us', 'demo-block-theme' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

