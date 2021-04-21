<!-- コラム一覧のアーカイブ -->
<?php
get_header();
?>

<div class="announcement-page">
	<div class="content-area">
		<main class="site-main">
			<section class="sec announcement">
				<div class="sec-inner">
					<div class="heading2-wrapper">
						<?php
						$term = wp_get_object_terms($post->ID, 'column_cat');
						$args = array(
							'post_type' => 'column',
							'taxonomy' => 'column_cat',
							'term' => $term[0]->name,
							'posts_per_page' => 5,
						);
						$custom_query = new WP_Query($args);
						?>
						<?php foreach ($term as $t) : ?>
							<h2 class="heading2"><?php echo esc_html($t->name); ?></h2>
						<?php endforeach; ?>
						<div class="heading2-borderbtm"></div>
					</div>
					<div class="announcement-wrapper horizontal">
						<article class="announcement-list-wrapper">
							<ul>
								<?php
								if ($custom_query->have_posts()) :
									while ($custom_query->have_posts()) :
										$custom_query->the_post();
								?>
										<li class="announcement-list horizontal" id="<?php echo $post->post_name; ?>">
											<time class="day"><?php echo the_time('Y.m.d'); ?></time>
											<div class="title-img-wrapper">
												<a href="<?php the_permalink(); ?>" class="postlink">
													<div class="posttitle"><?php the_title(); ?></div>
													<?php the_excerpt(); ?>
												</a>
											</div>
										</li>
								<?php endwhile;
								endif;
								wp_reset_postdata();
								?>
								<?php
								/* 以下、ページャーの表示 */
								if (function_exists('pagination')) :
									pagination($wp_query->max_num_pages, get_query_var('paged'));
								endif;
								?>
							</ul>
						</article>
					</div>
				</div>
			</section>

		</main><!-- .main -->
	</div><!-- .content-area -->
</div><!-- top-page -->
<?php
get_sidebar();
get_footer();
