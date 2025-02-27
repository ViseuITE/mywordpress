<?php get_header(); ?>
<?php
    $live_url = get_post_meta(get_the_ID(), '_live_url', true);
    $host_name = get_post_meta(get_the_ID(), '_host_name', true);
?>
<h1><?php the_title(); ?></h1>
<p>Hosted by: <?php echo esc_html($host_name); ?></p>

<?php if ($live_url): ?>
    <iframe width="100%" height="500px" src="<?php echo esc_url($live_url); ?>" frameborder="0" allowfullscreen></iframe>
<?php else: ?>
    <p>No live stream available.</p>
<?php endif; ?>

<?php get_footer(); ?>
