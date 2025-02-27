

<?php get_header(); ?>

<?php do_action( 'bloghash_before_container' ); ?>

<div class="bloghash-container">

	<?php do_action( 'bloghash_before_content_area', 'before_post_archive' ); ?>
	
	<div id="primary" class="content-area m-auto">

		<?php do_action( 'bloghash_before_content' ); ?>

		<main id="content" class="site-content" role="main"<?php bloghash_schema_markup( 'main' ); ?>>

			<?php do_action( 'bloghash_content' ); ?>

		</main><!-- #content .site-content -->

		<?php do_action( 'bloghash_after_content' ); ?>

	</div><!-- #primary .content-area -->

	<?php do_action( 'bloghash_sidebar' ); ?>

	<?php do_action( 'bloghash_after_content_area' ); ?>
	
</div><!-- END .bloghash-container -->

<?php do_action( 'bloghash_after_container' ); ?>

<?php
get_footer();
