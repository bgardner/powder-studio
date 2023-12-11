<?php
/**
 * Title: Sidebar on pages and posts
 * Slug: powder-studio/sidebar
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"constrained"},"metadata":{"name":"<?php echo esc_html__( 'About', 'powder-studio' ); ?>"}} -->
	<div class="wp-block-group">
		<!-- wp:heading -->
		<h2 class="wp-block-heading"><?php echo esc_html__( 'About', 'powder-studio' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph -->
		<p><?php echo esc_html__( 'Powder Studio revolutionizes how websites are made by embracing the power of WordPress block design.', 'powder-studio' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"constrained"},"metadata":{"name":"<?php echo esc_html__( 'Connect', 'powder-studio' ); ?>"}} -->
	<div class="wp-block-group">	
		<!-- wp:heading -->
		<h2 class="wp-block-heading"><?php echo esc_html__( 'Connect', 'powder-studio' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:social-links {"iconBackgroundColor":"contrast","iconBackgroundColorValue":"#0a0a0a","className":"is-style-default"} -->
		<ul class="wp-block-social-links has-icon-background-color is-style-default">
			<!-- wp:social-link {"url":"https://twitter.com/","service":"twitter"} /-->
			<!-- wp:social-link {"url":"https://instagram.com/","service":"instagram"} /-->
			<!-- wp:social-link {"url":"https://www.linkedin.com/","service":"linkedin"} /-->
			<!-- wp:social-link {"url":"https://www.facebook.com/","service":"facebook"} /-->
			<!-- wp:social-link {"url":"https://www.tiktok.com/","service":"tiktok"} /-->
		</ul>
		<!-- /wp:social-links -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"constrained"},"metadata":{"name":"<?php echo esc_html__( 'Recent', 'powder-studio' ); ?>"}} -->
	<div class="wp-block-group">
		<!-- wp:heading -->
		<h2 class="wp-block-heading"><?php echo esc_html__( 'Recent', 'powder-studio' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:latest-posts /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"constrained"},"metadata":{"name":"<?php echo esc_html__( 'Search', 'powder-studio' ); ?>"}} -->
	<div class="wp-block-group">
		<!-- wp:heading -->
		<h2 class="wp-block-heading"><?php echo esc_html__( 'Search', 'powder-studio' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Enter keywords...","buttonText":"Search"} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
