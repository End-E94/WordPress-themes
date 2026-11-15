<?php
/**
 * Title: Hero
 * Slug: demo-block-theme/hero
 * Categories: demo-block-theme
 */
?>
<!-- wp:cover {"dimRatio":60,"overlayColor":"primary","align":"full"} -->
<div class="wp-block-cover alignfull"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-60 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":1,"textColor":"base"} -->
<h1 class="wp-block-heading has-text-align-center has-base-color has-text-color"><?php esc_html_e( 'Welcome to Demo Block Theme', 'demo-block-theme' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"base"} -->
<p class="has-text-align-center has-base-color has-text-color"><?php esc_html_e( 'A flexible, accessible block theme for any website.', 'demo-block-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Learn more', 'demo-block-theme' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->

