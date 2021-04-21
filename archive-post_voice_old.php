<?php
get_header();
?>

<div class="graduate-voice-page">
    <div class="content-area">
        <section class="graduateVoiceHeading">
            <h1 class="graduateVoiceHeading__heading">
                <p class="graduateVoiceHeading__readText">
                    <em class="graduateVoiceHeading__emphasis">330</em>名<span class="graduateVoiceHeading__small">の</span>企業家・経営者<span class="graduateVoiceHeading__small">が</span>受講
                </p>
                <p class="graduateVoiceHeading__text">
                    PR塾卒業生からいただいた、<br class="sp">喜びの声をご紹介。
                </p>
            </h1>
            <img src="<?php echo content_url() ?>/themes/association/assets/img/voice_top.jpg" alt="" class="voice-introduction-img">
        </section>
        <main class="main">
            <section class="sec">
                <div class="article-main-wrapper">
                    <div class="long-interview">
                        <h2 class="heading2"><img
                                src="<?php echo content_url(); ?>/uploads/2019/07/longtitle.jpg"
                                class="longt"></h2>
                        <?php
                                $args = array(
                                    'post_type' => 'post_voice',
                                    'posts_per_page' => -1,
                                    'orderby' => 'date',
                                    'order' => 'DESC',
                                    'tax_query' => array(
                                    array(
                                        'taxonomy' => 'cat_voice',
                                        'field' => 'slug',
                                        'terms' => 'long_interview'
                                    )
                                    )
                                );
                                $the_query = new WP_Query($args); if ($the_query->have_posts()):
                            ?>
                        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
                        <?php $post = get_page($page_id); ?>

                        <article class="article-wrapper" id="<?php echo $post->post_name;?>">
                            <div class="title-wrapper">
                                <?php
                                        $select_movie = get_field('interview_movie');
                                        $checked = get_field('voice_new');
                                        if ($select_movie == 'True') { ?>
                                <div class="graduate-movie-wrapper">
                                    <?php the_post_thumbnail('medium') ?>
                                </div>
                                <?php
                                        } else { ?>
                                <div class="graduate-wrapper">
                                    <div class="graduate-img-wrapper">
                                        <div class="graduate-img-upper">
                                            <?php the_post_thumbnail('thumbnail') ?>
                                            <?php
                                                if ($checked == '1') {
                                                    echo('<span class="graduate-new">NEW</span>');
                                                }
                                            ?>
                                        </div>
                                    </div>
                                    <?php
                                        if (get_field('online_student')) {
                                            echo '<img src="' . content_url() . '/themes/association/assets/img/icon_online-student.png" class="graduate-online_student">';
                                        }
                                    ?>
                                </div>
                                <?php } ?>
                                <div class="graduate-content-wrapper">
                                    <div class="text-wrapper">
                                        <h3 class="heading3"><?php echo get_the_title(); ?></h3>
                                        <?php
                                                if ($select_movie == 'True') {
                                                    echo('<span class="graduate-tag">インタビュー動画あり</span>');
                                                }
                                            ?>
                                        <p class="company-position"><?php the_field('CompanyAndPosition');?></p>
                                        <span class="graduate-name-wrapper"><em
                                                class="graduate-name"><?php the_field('name');?></em>さん</span>
                                    </div>
                                    <img src="<?php echo content_url() ?>/themes/association/assets/img/icon_plus.svg"
                                        alt="" class="graduate-icon" id="icon-plus">
                                    <img src="<?php echo content_url() ?>/themes/association/assets/img/icon_minus.svg"
                                        alt="" class="graduate-icon" id="icon-minus">
                                </div>
                            </div>
                            <div class="body-wrapper">
                                <div class="contents-wrapper">
                                    <div class="graduate-profile">
                                        <p class="company-position"><?php the_field('CompanyAndPosition');?></p>
                                        <span class="graduate-name"><?php the_field('name');?></span>
                                        <span class="article-link-wrapper"><a href="<?php the_field('url1')?>"
                                                class="article-link"><?php the_field('url1')?></a></span>
                                        <?php if (post_custom('url2')): ?>
                                        <span class="article-link-wrapper"><a href="<?php the_field('url2')?>"
                                                class="article-link"><?php the_field('url2');?></a></span>
                                        <?php endif; ?>
                                        <?php if (post_custom('url3')): ?>
                                        <span class="article-link-wrapper"><a href="<?php the_field('url3')?>"
                                                class="article-link"><?php the_field('url3');?></a></span>
                                        <?php endif; ?>
                                    </div>
                                    <?php the_content(); ?>
                                </div>

                                <div class="bio-wrapper">
                                    <h4 class="heading4">- Profile -</h4>
                                    <p class="company-position"><?php the_field('CompanyAndPosition');?></p>
                                    <p class="text name"><?php the_field('name');?></p>
                                    <span class="article-link-wrapper"><a href="<?php the_field('url1')?>"
                                            class="article-link"><?php the_field('url1')?></a></span>
                                    <?php if (post_custom('bio')): ?>
                                    <span class="bio-text"><?php the_field('bio');?></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </article>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                        <?php else: ?>
                        <!-- 投稿が無い場合の処理 -->
                        <?php endif; ?>
                    </div>
                    <div class="short-interview">
                        <h2 class="heading2">卒業生の声</h2>
                        <?php
                                $args = array(
                                    'post_type' => 'post_voice',
                                    'posts_per_page' => -1,
                                    'orderby' => 'date',
                                    'order' => 'DESC',
                                    'tax_query' => array(
                                    array(
                                        'taxonomy' => 'cat_voice',
                                        'field' => 'slug',
                                        'terms' => 'short_interview', // タームスラッグを指定
                                    )
                                    )
                                );
                                    $the_query = new WP_Query($args); if ($the_query->have_posts()):
                            ?>
                        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
                        <?php $post = get_page($page_id); ?>
                        <article class="article-wrapper" id="<?php echo $post->post_name;?>">
                            <div class="title-wrapper">
                                <div class="graduate-img-wrapper">
                                    <?php the_post_thumbnail('thumbnail') ?>
                                    <?php $checked = get_field('voice_new');
                                            if ($checked) {
                                                echo('<span class="graduate-new">NEW</span>');
                                            } ?>
                                    <?php
                                        if (get_field('online_student')) {
                                            echo '<img src="' . content_url() . '/themes/association/assets/img/icon_online-student.png" class="graduate-online_student">';
                                        }
                                    ?>
                                </div>
                                <div class="graduate-content-wrapper">
                                    <div class="graduate-text-wrapper">
                                        <h3 class="heading3"><?php echo get_the_title(); ?></h3>
                                        <p class="company-position"><?php the_field('CompanyAndPosition');?></p>
                                        <span class="graduate-name-wrapper"><em
                                                class="graduate-name"><?php the_field('name');?></em>さん</span>
                                    </div>
                                    <img src="<?php echo content_url() ?>/themes/association/assets/img/icon_plus.svg"
                                        alt="" class="graduate-icon" id="icon-plus">
                                    <img src="<?php echo content_url() ?>/themes/association/assets/img/icon_minus.svg"
                                        alt="" class="graduate-icon" id="icon-minus">
                                </div>
                            </div>
                            <div class="graduate-voice-content-wrapper">
                                <div class="graduate-voice-wrapper">
                                    <div class="horizontal">
                                        <div class="contents-wrapper">
                                            <div class="graduate-profile">
                                                <p class="company-position"><?php the_field('CompanyAndPosition');?></p>
                                                <span class="graduate-name"><?php the_field('name');?></span>
                                                <span class="article-link-wrapper"><a href="<?php the_field('url1')?>"
                                                        class="article-link"><?php the_field('url1')?></a></span>
                                                <?php if (post_custom('url2')): ?>
                                                <span class="article-link-wrapper"><a href="<?php the_field('url2')?>"
                                                        class="article-link"><?php the_field('url2');?></a></span>
                                                <?php endif; ?>
                                                <?php if (post_custom('url3')): ?>
                                                <span class="article-link-wrapper"><a href="<?php the_field('url3')?>"
                                                        class="article-link"><?php the_field('url3');?></a></span>
                                                <?php endif; ?>
                                            </div>
                                            <?php if (post_custom('graduate_voice_1')): ?>
                                            <img src="<?php the_field('graduate_voice_1'); ?>" alt=""
                                                class="graduate-content-img graduate-sp">
                                            <?php endif; ?>
                                            <?php the_content(); ?>
                                        </div>
                                        <div class="graduate-content-img-wrapper">
                                            <?php if (post_custom('graduate_voice_1')): ?>
                                            <img src="<?php the_field('graduate_voice_1'); ?>" alt=""
                                                class="graduate-content-img graduate-pc">
                                            <?php endif; ?>
                                            <?php if (post_custom('graduate_voice_2')): ?>
                                            <img src="<?php the_field('graduate_voice_2'); ?>" alt=""
                                                class="graduate-content-img">
                                            <?php endif; ?>
                                            <?php if (post_custom('graduate_voice_3')): ?>
                                            <img src="<?php the_field('graduate_voice_3'); ?>" alt=""
                                                class="graduate-content-img">
                                            <?php endif; ?>
                                            <?php if (post_custom('graduate_voice_4')): ?>
                                            <img src="<?php the_field('graduate_voice_4'); ?>" alt=""
                                                class="graduate-content-img">
                                            <?php endif; ?>
                                            <?php if (post_custom('graduate_voice_5')): ?>
                                            <img src="<?php the_field('graduate_voice_5'); ?>" alt=""
                                                class="graduate-content-img">
                                            <?php endif; ?>
                                            <?php if (post_custom('graduate_voice_6')): ?>
                                            <img src="<?php the_field('graduate_voice_6'); ?>" alt=""
                                                class="graduate-content-img">
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                        <?php else: ?>
                        <!-- 投稿が無い場合の処理 -->
                        <?php endif; ?>
                    </div>
                </div>
            </section>
            <?php get_template_part('mailMagazine-btn'); ?>
        </main>
    </div>
</div>

<?php
get_sidebar();
get_footer();
