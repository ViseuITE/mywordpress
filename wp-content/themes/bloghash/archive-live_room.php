<?php get_header(); ?>

<h1>Live Rooms</h1>
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

<?php get_footer(); ?>
