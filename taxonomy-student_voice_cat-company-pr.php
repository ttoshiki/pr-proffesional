<?php get_header(); ?>

<div class="voicePage">
  <!-- main -->
  <main>
    <!-- voicePageMv -->
    <div class="voicePageMv">
      <div class="voicePageMv__bg">
        <img src="<?php echo get_template_directory_uri(); ?>/voice/img/voice-mv.jpg" alt="">
      </div>
      <h1 class="voicePageMv__ttl">受講生の声</h1>
      <p class="voicePageMv__txt">
        630名以上の方がPRの力で未来を変えています。<br>
        未経験者から経営者まで、様々な方が成果を出しています。
      </p>
    </div>
    <!-- //voicePageMv -->

    <!-- voicePageHead -->
    <div class="voicePageHead">
      <div class="voicePageInner">
        <p class="voicePageHead__ttl">カテゴリ検索</p>
        <ul class="voicePageHead__termList">
          <li class="voicePageHead__term"><a href="/student_voice">ALL</a></li>
          <li class="voicePageHead__term current"><a href="/student_voice_cat/company-pr">自社をPRしたい</a></li>
          <li class="voicePageHead__term"><a href="/student_voice_cat/career-change">未経験キャリアチェンジしたい</a></li>
          <li class="voicePageHead__term"><a href="/student_voice_cat/skill-up">経験者PRスキル磨きたい</a></li>
        </ul>
      </div>
    </div>
    <!-- //voicePageHead -->

    <!-- voicePageCont -->
    <section class="voicePageCont">
      <div class="voicePageInner">
        <ul class="voicePageList">

          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

              <li class="voicePageItem">
                <span class="voicePageItemLabel">VOICE</span>
                <div class="voicePageItemHead">
                  <div class="voicePageItemHead__txtWrap">
                    <h2 class="voicePageItemHead__ttl">
                      <?php echo nl2br(get_post_meta($post->ID, 'title', true)); ?>
                    </h2>
                    <p class="voicePage__txt">
                      <?php the_field('name'); ?>
                    </p>
                  </div>
                  <div class="voicePageHead__img">
                    <img src=" <?php the_field('profile_image'); ?>" alt="">
                  </div>
                </div>

                <?php if (empty(get_post_meta($post->ID, 'text', true))) : ?>
                <?php else : ?>
                  <p class="voicePageItemDetail">
                    <?php echo nl2br(get_post_meta($post->ID, 'text', true)); ?>
                  </p>
                <?php endif; ?>
              </li>

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
          <?php endif; ?>
        </ul>


        <?php
        if (function_exists('pagination2')) :
          pagination2($wp_query->max_num_pages, get_query_var('paged'));
        endif;
        ?>

      </div>
    </section>
    <!-- //voicePageCont -->


</div>
<!--  //<div class="voicePage__bg"> -->
</main>
<!-- //main -->



<?php get_footer(); ?>