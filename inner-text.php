<?php
/*
Template Name: テキストメインの固定ページテンプレート
*/

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

      <?php if (have_posts()): while (have_posts()):the_post(); ?>

      <h1><?php the_title(); ?></h1>
        <div class="inner-text__inner">
          <p><?php the_content(); ?></p>
        </div>

        <?php endwhile; endif; ?>

		</main><!-- #main -->

<?php
get_sidebar();
get_footer();
