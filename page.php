<?php
  /**
   * The template for displaying all single posts
   *
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
   *
   * @package Started theme wp
   */
  get_header();
  the_post() ?>

<section class="page">
  <div class="container page-area">
    <div class="text-center">
      <h3 class="sub-title m-0">Subtitle</h3>
      <h1 class="title"><?php the_title(); ?></h1>
    </div>

    <div class="row justify-content-center">
      <div class="col-md-10">
        <img
                onerror="this.style.display='none'"
                src="<?php the_post_thumbnail_url(); ?>"
                class="single-thumbnail my-4"
                alt="<?php the_title(); ?>"
        >
        <article class="p-md-5 p-2">
          <?php the_content(); ?>
        </article>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
