<!DOCTYPE html>
<html <?php language_attributes(); ?><?php bloghash_schema_markup('html'); ?> <?php echo bloghash_option('dark_mode') ? 'data-darkmode="dark"' : ''; ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php wp_body_open(); ?>

	<?php do_action('bloghash_before_page_wrapper'); ?>
	<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e('Skip to content', 'bloghash'); ?></a>

		<?php
		if (get_header_image()) {
			the_custom_header_markup();
		}
		?>

		<?php do_action('bloghash_before_masthead', 'before_header'); ?>

		<header id="masthead" class="site-header" role="banner" <?php bloghash_masthead_atts(); ?><?php bloghash_schema_markup('header'); ?>>
			<?php do_action('bloghash_header'); ?>
			<?php do_action('bloghash_page_header'); ?>

			<?php do_action('bloghash_after_masthead', 'after_header'); ?>

			<?php do_action('bloghash_before_main'); ?>
			<div id="main" class="site-main">

				<?php do_action('bloghash_main_start'); ?>


                <div class="live-rooms-container">
    <?php
    $args = array('post_type' => 'live_room', 'posts_per_page' => 10);
    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            $live_url = get_post_meta(get_the_ID(), '_live_url', true);
    ?>
            <div class="live-room">
                <h2><?php the_title(); ?></h2>
                <p><?php the_excerpt(); ?></p>
                <a href="<?php echo esc_url($live_url); ?>" target="_blank">Watch Live</a>
            </div>
    <?php
        endwhile;
        wp_reset_postdata();
    else :
        echo '<p>No live rooms available.</p>';
    endif;
    ?>
</div>