<?php get_header(); ?>

<main class="container mx-auto px-4 py-6">
  <?php if ( have_posts() ) : ?>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
    <div>
        <MenuButton
          class="inline-flex w-full justify-center rounded-md bg-black/20 px-4 py-2 text-sm font-medium text-white hover:bg-black/30 focus:outline-none focus-visible:ring-2 focus-visible:ring-white/75"
        >
          Options
          <ChevronDownIcon
            class="-mr-1 ml-2 h-5 w-5 text-violet-200 hover:text-violet-100"
            aria-hidden="true"
          />
        </MenuButton>
      </div>
      <?php while ( have_posts() ) : the_post(); ?>
        <article class="border p-4">
          <h2 class="text-xl font-semibold">
            <a href="<?php the_permalink(); ?>" class="hover:text-gold">
              <?php the_title(); ?>
            </a>
          </h2>
          <div class="text-sm text-gray-700">
            <?php the_excerpt(); ?>
          </div>
        </article>
      <?php endwhile; ?>
    </div>
  <?php else : ?>
    <p><?php _e('No posts found.', 'demnayhair-tailwind'); ?></p>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
