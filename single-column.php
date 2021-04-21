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
								<?php if (have_posts()) : ?>
									<?php while (have_posts()) : the_post(); ?>
										<article class="entry md_mb70 sm_mb50">
											<header class="entry_head">
												<div class="meta">
													<?php
													$column_terms = get_the_terms( get_the_ID() ,'column_cat');
													$column_term  = $column_terms[0];
													$column_term_name  = $column_term->name;
													?>
													<p class="label"><?= esc_html($column_term_name); ?></p>
													<p class="date"><time datetime="<?= esc_attr(get_the_date('Y-m-d')); ?>"><?= esc_html(get_the_date('Y.m.d')); ?></time></p>
												</div>
												<h1 class="ttl">憧れの日経新聞にも掲載獲得！1858年創業の食品原料卸会社でBtoC向けの自社ブランドの立ち上げをきっかけにPRに関心をもちPR塾へ。－中村拓さん</h1>
												<?php if (has_post_thumbnail()) : ?>
													<figure class="eyecatch">
														<?php the_post_thumbnail(); ?>
													</figure>
												<?php endif; ?>
											</header>
											<div class="entry_body">
												<?php the_content(); ?>
											</div>
											<div class="entry_foot">
												<div class="share">
													<p class="txt">SHARE</p>
													<?php echo do_shortcode('[addtoany]'); ?>
												</div>
											</div>
										</article>
										<div>
											<?php
											$postid = get_the_ID();
											$terms = get_the_terms($postid, 'column_cat');

											$termarray = [];
											foreach ($terms as $data) {
												$termarray[] = $data->slug;
											}

											$args = [
												'post_type'      => 'column',
												'posts_per_page' => 4,
												'exclude'        => $postid,
												'tax_query'      => [
													[
														'taxonomy' => 'column_cat',
														'field'    => 'slug',
														'terms'    => $termarray,
													]
												]
											];

											$the_query = new WP_Query($args);
											if ($the_query->have_posts()) :
											?>
												<h2 class="secTtl">関連記事</h2>
												<div class="md_mb90 sm_mb50">
													<ul class="cardUnit cardUnit__col4">
														<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

															<li class="card smCard">
																<a href="<?php the_permalink(); ?>">
																	<figure class="card_img">
																		<?php if (has_post_thumbnail()) : ?>
																            <?php the_post_thumbnail(); ?>
																        <?php else: ?>
																            <img src="<?= esc_url( get_theme_file_uri() ); ?>/images/noimg.png" alt="No img">
																        <?php endif; ?>
																	</figure>
																	<div class="card_body">
																		<div class="meta">
																			 <span class="date"><time datetime="<?= esc_attr(get_the_date('Y-m-d')); ?>"><?= esc_html(get_the_date('Y.m.d')); ?></time></span>
																		</div>
																		<?php  ?>
																		<?php the_title('<p class="ttl">', '</p>'); ?>
																	</div>
																</a>
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
											<?php endif; wp_reset_postdata(); ?>
										</div>
									<?php endwhile; ?>
								<?php endif; ?>
							</div>
							<div class="col2_side sidebar">
								<div class="sidebar_widget">
									<h4 class="sidebar_ttl">RANKINK</h4>
									<ul class="sidebar_list sidebar_rank">
										<li>
											<a href="" class="sidebar_media">
												<figure class="img">
													<img src="<?= esc_url( get_theme_file_uri() ); ?>/assets/img/appeal_of_PR_school.jpg" alt="">
												</figure>
												<div class="body">
													<p class="ttl">ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト</p>
													<p><time class="date" datetime="2021-01-01">2021.01.01</time></p>
												</div>
											</a>
										</li>
										<li>
											<a href="" class="sidebar_media">
												<figure class="img">
													<img src="<?= esc_url( get_theme_file_uri() ); ?>/assets/img/appeal_of_PR_school.jpg" alt="">
												</figure>
												<div class="body">
													<p class="ttl">ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト</p>
													<p><time class="date" datetime="2021-01-01">2021.01.01</time></p>
												</div>
											</a>
										</li>
										<li>
											<a href="" class="sidebar_media">
												<figure class="img">
													<img src="<?= esc_url( get_theme_file_uri() ); ?>/assets/img/appeal_of_PR_school.jpg" alt="">
												</figure>
												<div class="body">
													<p class="ttl">ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト</p>
													<p><time class="date" datetime="2021-01-01">2021.01.01</time></p>
												</div>
											</a>
										</li>
										<li>
											<a href="" class="sidebar_media">
												<figure class="img">
													<img src="<?= esc_url( get_theme_file_uri() ); ?>/assets/img/appeal_of_PR_school.jpg" alt="">
												</figure>
												<div class="body">
													<p class="ttl">ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト</p>
													<p><time class="date" datetime="2021-01-01">2021.01.01</time></p>
												</div>
											</a>
										</li>
										<li>
											<a href="" class="sidebar_media">
												<figure class="img">
													<img src="<?= esc_url( get_theme_file_uri() ); ?>/assets/img/appeal_of_PR_school.jpg" alt="">
												</figure>
												<div class="body">
													<p class="ttl">ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト</p>
													<p><time class="date" datetime="2021-01-01">2021.01.01</time></p>
												</div>
											</a>
										</li>
									</ul>
								</div>
								<div class="sidebar_widget">
									<h4 class="sidebar_ttl">KEYWORD</h4>
									<ul class="tagcloud">
										<li><a href="#">8月</a></li>
										<li><a href="#">インタビュー</a></li>
										<li><a href="#">メディア対応スキル</a></li>
										<li><a href="#">情報発信</a></li>
										<li><a href="#">ランキング</a></li>
										<li><a href="#">使い方</a></li>
										<li><a href="#">取材対応</a></li>
										<li><a href="#">景品表示法</a></li>
										<li><a href="#">公開前</a></li>
										<li><a href="#">プラン</a></li>
									</ul>
								</div>
								<div class="sidebar_widget">
									<h4 class="sidebar_ttl">CATEGORY</h4>
									<ul class="sidebar_list sidebar_links">
										<li><a href="#">PRコラム</a></li>
										<li><a href="#">PR塾潜入レポート</a></li>
										<li><a href="#">受講者インタビュー</a></li>
										<li><a href="#">活動報告</a></li>
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
