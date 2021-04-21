<!-- お知らせ一覧のアーカイブ -->
<?php
get_header();
?>

	<div class="announcement-page">
		<div class="content-area">
			<main class="site-main">
				<section class="sec announcement">
					<div class="sec-inner">
						<div class="heading2-wrapper">
							<h2 class="heading2">お知らせ</h2>
							<div class="heading2-borderbtm"></div>
						</div>
						<div class="announcement-wrapper horizontal">
							<article class="announcement-list-wrapper">
								<ul>
									<?php global $post;
                                    $args = array(
                                        'post_type' => 'post',
                                        'no_found_rows' => true,
                                        'posts_per_page' => -1,
                                    );
                                    $myposts = get_posts($args);
                                    foreach ($myposts as $post) {
                                        setup_postdata($post);
                                        $post = get_page($page_id); ?>
										<li class="announcement-list horizontal" id="<?php echo $post->post_name; ?>">
											<time class="day"><?php echo the_time('Y.m.d'); ?></time>
											<div class="title-img-wrapper">
												<div class="posttitle"><?php the_title(); ?></div>
												<?php the_content(); ?>
											</div>
										</li>
									<?php
                                    }
                                    wp_reset_postdata();
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
