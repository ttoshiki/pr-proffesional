<?php
get_header();
?>

	<div class="column-page">
		<div class="content-area">
			<main class="main">
				<div class="mv">
					<p>
						<img src="<?= esc_url( get_theme_file_uri() ); ?>/assets/img/mv_column.jpg" alt="LITA MAGAZINE 全ての人・企業の可能性を開花させる PR情報メディア">
					</p>
					<?php
					$args = [
						'post_type'      => 'column',
						'posts_per_page' => 3,
						'tax_query'      => [
							[
								'taxonomy' => 'column_tag',
								'field'    => 'slug',
								'terms'    => ['slider'],
							]
						]
					];

					$the_query = new WP_Query($args);
					if ($the_query->have_posts()) :
					?>
						<div class="slide">
							<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
								<?php
								$column_terms = get_the_terms( get_the_ID() ,'column_cat');
								$column_term  = $column_terms[0];
								$column_term_name  = $column_term->name;
								$column_term_link  = get_term_link($column_term);
								?>
								<li>
									<a href="<?php the_permalink(); ?>" class="inner">
										<figure class="img">
											<?php if (has_post_thumbnail()) : ?>
									            <?php the_post_thumbnail(); ?>
									        <?php else: ?>
									            <img src="<?= esc_url( get_theme_file_uri() ); ?>/images/noimg.png" alt="No img">
									        <?php endif; ?>
										</figure>
										<div class="txtbox">

											<span class="label"><?= esc_html($column_term_name); ?></span>
											<?php the_title('<h3 class="ttl">', '</h3>'); ?>
											<div class="meta">
												<span class="date"><time datetime="<?= esc_attr(get_the_date('Y-m-d')); ?>"><?= esc_html(get_the_date('Y.m.d')); ?></time></span>
											</div>
										</div>
									</a>
								</li>
							<?php endwhile; ?>
						</div>
					<?php endif; wp_reset_postdata(); ?>
				</div>
				<section class="sec">
					<div class="sec-inner">
						<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
						    <?php if(function_exists('bcn_display'))
						    {
						        bcn_display();
						    }?>
						</div>
						<article class="col2">
							<div class="col2_main">

								<?php// 編集部のおすすめ ?>
								<div class="hp_mb65">
									<h2 class="secTtl">編集部のおすすめ</h2>
									<?php
									$args = [
										'post_type'      => 'column',
										'posts_per_page' => 4,
										'tax_query'      => [
											[
												'taxonomy' => 'column_tag',
												'field'    => 'slug',
												'terms'    => ['pickup'],
											]
										]
									];

									$the_query = new WP_Query($args);
									if ($the_query->have_posts()) :
									?>
										<div class="hp_mb50">
											<ul class="cardUnit">
												<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
													<?php

													$column_terms = get_the_terms( get_the_ID() ,'column_cat');
													$column_term  = $column_terms[0];
													$column_term_name  = $column_term->name;
													$column_term_link  = get_term_link($column_term);

													?>

													<li class="card">
													    <a href="<?php the_permalink(); ?>" class="card_img">
													        <?php if (has_post_thumbnail()) : ?>
													            <?php the_post_thumbnail(); ?>
													        <?php else: ?>
													            <img src="<?= esc_url( get_theme_file_uri() ); ?>/images/noimg.png" alt="No img">
													        <?php endif; ?>
													    </a>
													    <div class="card_body">
													        <div class="meta">
													            <?php if ($column_terms) : ?>
													                <p><a href="<?= esc_url($column_term_link); ?>" class="label"><?= esc_html($column_term_name); ?></a></p>
													            <?php endif; ?>
													            <span class="date"><time datetime="<?= esc_attr(get_the_date('Y-m-d')); ?>"><?= esc_html(get_the_date('Y.m.d')); ?></time></span>
													        </div>
													        <a href="<?php the_permalink(); ?>" class="ttl"><?php the_title(); ?></a>
													    </div>
													</li>

												<?php endwhile; ?>
											</ul>
										</div>
										<?php
	                                    $post_max_num = $the_query->post_count;// posts_per_page に指定した数
										$post_num   = $the_query->found_posts;// 指定したタームに属する投稿数

	                                    if ($post_max_num < $post_num):
	                                    ?>
											<p><a href="#" class="btn hp_mAuto">もっと見る</a></p>
										<?php endif; ?>
									<?php else: ?>
										<p class="hp_txtCenter">現在おすすめコラムはありません。</p>
									<?php endif; wp_reset_postdata(); ?>
								</div>

								<?php// 新着記事 ?>
								<div class="hp_mb65">
									<h2 class="secTtl">新着記事</h2>
									<?php
									$args = [
										'post_type'      => 'column',
										'posts_per_page' => 4,
									];

									$the_query = new WP_Query($args);
									if ($the_query->have_posts()) :
									?>
										<div class="hp_mb50">
											<ul class="cardUnit">
												<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
													<?php

													$column_terms = get_the_terms( get_the_ID() ,'column_cat');
													$column_term  = $column_terms[0];
													$column_term_name  = $column_term->name;
													$column_term_link  = get_term_link($column_term);

													?>

													<li class="card">
													    <a href="<?php the_permalink(); ?>" class="card_img">
													        <?php if (has_post_thumbnail()) : ?>
													            <?php the_post_thumbnail(); ?>
													        <?php else: ?>
													            <img src="<?= esc_url( get_theme_file_uri() ); ?>/images/noimg.png" alt="No img">
													        <?php endif; ?>
													    </a>
													    <div class="card_body">
													        <div class="meta">
													            <?php if ($column_terms) : ?>
													                <p><a href="<?= esc_url($column_term_link); ?>" class="label"><?= esc_html($column_term_name); ?></a></p>
													            <?php endif; ?>
													            <span class="date"><time datetime="<?= esc_attr(get_the_date('Y-m-d')); ?>"><?= esc_html(get_the_date('Y.m.d')); ?></time></span>
													        </div>
													        <a href="<?php the_permalink(); ?>" class="ttl"><?php the_title(); ?></a>
													    </div>
													</li>

												<?php endwhile; ?>
											</ul>
										</div>
										<?php
	                                    $post_max_num = $the_query->post_count;// posts_per_page に指定した数
										$post_num   = $the_query->found_posts;// 指定したタームに属する投稿数

	                                    if ($post_max_num < $post_num):
	                                    ?>
											<p><a href="#" class="btn hp_mAuto">もっと見る</a></p>
										<?php endif; ?>
									<?php else: ?>
										<p class="hp_txtCenter">現在投稿はありません。</p>
									<?php endif; wp_reset_postdata(); ?>
								</div>

								<div>
									<h2 class="secTtl">受講生インタビュー</h2>
									<?php
									$args = [
										'post_type'      => 'column',
										'posts_per_page' => 4,
										'tax_query'      => [
											[
												'taxonomy' => 'column_cat',
												'field'    => 'slug',
												'terms'    => ['interview'],
											]
										]
									];

									$the_query = new WP_Query($args);
									if ($the_query->have_posts()) :
									?>
										<div class="hp_mb50">
											<ul class="cardUnit">
												<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
													<?php

													$column_terms = get_the_terms( get_the_ID() ,'column_cat');
													$column_term  = $column_terms[0];
													$column_term_name  = $column_term->name;
													$column_term_link  = get_term_link($column_term);

													?>

													<li class="card">
													    <a href="<?php the_permalink(); ?>" class="card_img">
													        <?php if (has_post_thumbnail()) : ?>
													            <?php the_post_thumbnail(); ?>
													        <?php else: ?>
													            <img src="<?= esc_url( get_theme_file_uri() ); ?>/images/noimg.png" alt="No img">
													        <?php endif; ?>
													    </a>
													    <div class="card_body">
													        <div class="meta">
													            <?php if ($column_terms) : ?>
													                <p><a href="<?= esc_url($column_term_link); ?>" class="label"><?= esc_html($column_term_name); ?></a></p>
													            <?php endif; ?>
													            <span class="date"><time datetime="<?= esc_attr(get_the_date('Y-m-d')); ?>"><?= esc_html(get_the_date('Y.m.d')); ?></time></span>
													        </div>
													        <a href="<?php the_permalink(); ?>" class="ttl"><?php the_title(); ?></a>
													    </div>
													</li>

												<?php endwhile; ?>
											</ul>
										</div>
										<?php
	                                    $post_max_num = $the_query->post_count;// posts_per_page に指定した数
										$post_num   = $the_query->found_posts;// 指定したタームに属する投稿数

	                                    if ($post_max_num < $post_num):
	                                    ?>
											<p><a href="#" class="btn hp_mAuto">もっと見る</a></p>
										<?php endif; ?>
									<?php else: ?>
										<p class="hp_txtCenter">現在投稿はありません。</p>
									<?php endif; wp_reset_postdata(); ?>
								</div>

							</div>

							<div class="col2_side sidebar">
								<div class="sidebar_widget">
									<h4 class="sidebar_ttl">RANKINK</h4>
									<!-- <ul class="sidebar_list sidebar_rank"> -->
										<!-- <li>
											<a href="" class="sidebar_media">
												<figure class="img">
													<img src="<?php// echo esc_url( get_theme_file_uri() ); ?>/assets/img/appeal_of_PR_school.jpg" alt="">
												</figure>
												<div class="body">
													<p class="ttl">ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト</p>
													<p><time class="date" datetime="2021-01-01">2021.01.01</time></p>
												</div>
											</a>
										</li> -->
									<!-- </ul> -->
									<?php echo do_shortcode("[wpp header='Popular Posts']"); ?>
								</div>
								<div class="sidebar_widget">
									<h4 class="sidebar_ttl">KEYWORD</h4>
									<ul class="tagcloud">
										<?php
										$terms = get_terms('column_tag');
										foreach ($terms as $term) {
											if ($term->slug === 'slider') { continue; }
											echo '<li><a href="'. get_term_link($term) .'">'. $term->name .'</a></li>';
										}
										?>
									</ul>
								</div>
								<div class="sidebar_widget">
									<h4 class="sidebar_ttl">CATEGORY</h4>
									<ul class="sidebar_list sidebar_links">
										<?php
										$terms = get_terms('column_cat');
										foreach ($terms as $term) {
											echo '<li><a href="'. get_term_link($term) .'">'. $term->name .'</a></li>';
										}
										?>
									</ul>
								</div>
							</div>
						</article>
					</div><!-- sec-inner -->
				</section>
				<?php get_template_part('mailMagazine-btn'); ?>
			</main><!-- .main -->
		</div><!-- .content-area -->
	</div><!-- top-page -->

<?php
get_sidebar();
get_footer();
