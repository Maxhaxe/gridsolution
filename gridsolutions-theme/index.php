<?php
/**
 * The main template file
 */

get_header();
?>

<main id="content">
  <div class="container section">
    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();
    ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="section-head text-left mb-xl">
              <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            </header>
            <div class="entry-content">
              <?php the_excerpt(); ?>
            </div>
          </article>
    <?php
        endwhile;
    else :
        echo '<p>Geen inhoud gevonden.</p>';
    endif;
    ?>
  </div>
</main>

<?php
get_footer();
