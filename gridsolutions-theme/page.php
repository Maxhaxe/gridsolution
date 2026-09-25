<?php
/**
 * The template for displaying all pages
 */

get_header();
?>

<main id="content">
  <div class="container section">
    <?php
    while (have_posts()) :
        the_post();
    ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="section-head text-left mb-xl">
          <h1><?php the_title(); ?></h1>
        </header>

        <div class="entry-content">
          <?php the_content(); ?>
        </div>
      </article>
    <?php
    endwhile;
    ?>
  </div>
</main>

<?php
get_footer();
