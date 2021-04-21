<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <meta name="google-site-verification" content="UbJlYhmygncZaCHiPXNZQIxrM958EGv0rh29-9Q8h7E" />

  <meta name="google-site-verification" content="HM36XUUr3F6qhGP2P7Fn0DUXRbqDxLGCXSMaCNdXJ10" />
  <link rel="icon" type="image/x-icon" href="<?php echo content_url() ?>/themes/association/assets/img/favicon.ico">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
    </script>

  <?php wp_head(); ?>

  <?php
  wp_enqueue_style('front-style', get_template_directory_uri() . '/front/front.css');
  ?>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
  </script>
  <script src="<?php echo content_url(); ?>/themes/association/front/frontNewsFeed.js" async></script>

  <script src="<?php echo content_url() ?>/themes/association/assets/js/script.js"></script>
</head>

<body <?php body_class(); ?>>


  <div class="frontPage-outerLine">
    <!-- mv -->
    <header class="frontPage-mv fadein">
      <img src="<?php echo get_template_directory_uri(); ?>/front/img/front-mv.jpg" class="pc" alt="OJT式PR塾 あなたのPR力が、未来を変える。">
      <img src="<?php echo get_template_directory_uri(); ?>/front/img/front-mv_sp.jpg" class="sp" alt="OJT式PR塾 あなたのPR力が、未来を変える。">
    </header>
    <!-- //mv -->

    <!-- header -->
      <header class="site-header">
        <div class="site-branding">
          <a href="/"><img src="<?php echo content_url() ?>/uploads/2019/07/logo.png" alt="" class="logo"></a>
        </div><!-- .site-branding -->

        <nav class="site-navigation main-navigation">
          <div class="pc-nav pc">
            <!-- <ul class="nav-upper-wrapper">
          </ul> -->
            <ul class="nav-lower-wrapper">
              <li class="nav-list"><a href="/kobetupage" class="header-link">PR塾</a></li>
              <li class="nav-list"><a href="/column" class="header-link">コラム記事</a></li>
              <li class="nav-list"><a href="/student_voice" class="header-link">受講生の声</a></li>
              <li class="nav-list"><a href="/about-association" class="header-link">協会について</a></li>
              <li class="nav-list">
                <button class="btn-contact" onclick="location.href='/contact'">お問い合わせ</button>
              </li>
              <li class="mail-magazine">
                <a href="/mailmagazine/" class="mailmagazine-link" target="_blank">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="28px" height="23px" class="mail-icon fuwafuwa">
                    <path fill-rule="evenodd" fill="rgb(255, 255, 255)" d="M19.287,10.189 L27.711,2.474 L27.711,21.999 L19.287,10.189 ZM0.234,0.972 L27.643,0.972 L13.938,13.521 L0.234,0.972 ZM0.129,22.050 L0.152,2.462 L8.590,10.189 L0.129,22.050 ZM13.935,15.083 L13.935,15.089 L13.938,15.087 L13.942,15.089 L13.942,15.083 L18.612,10.807 L26.688,22.129 L1.189,22.129 L9.265,10.807 L13.935,15.083 Z" />
                  </svg>
                  <span class="description">無料PR動画講座</span>
                </a>
              </li>
            </ul>
          </div>
          <header class="sp-nav sp">
            <div id="nav-drawer">
              <input id="nav-input" type="checkbox" class="nav-unshown">
              <label id="nav-open" for="nav-input"><span></span></label>
              <label class="nav-unshown" id="nav-close" for="nav-input"></label>
              <div id="nav-content">
                <ul class="sp-nav-wrapper">
                  <li class="nav-list"><a href="/">ホーム</a></li>
                  <li class="nav-list"><a href="/kobetupage" class="header-link">PR塾</a></li>
                  <li class="nav-list"><a href="/column" class="header-link">コラム記事</a></li>
                  <li class="nav-list"><a href="/student_voice">受講生の声</a></li>
                  <li class="nav-list"><a href="/about-association">協会について</a>
                  </li>
                  <div class="nav-contact">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="26px" height="20px" class="mail-icon">
                      <path fill-rule="evenodd" fill="rgb(248, 246, 239)" d="M25.483,19.999 L0.518,19.999 C0.235,19.999 0.005,19.740 0.005,19.418 L0.005,0.574 C0.005,0.253 0.235,-0.005 0.518,-0.005 L25.483,-0.005 C25.765,-0.005 25.995,0.253 25.995,0.574 L25.995,19.418 C25.995,19.740 25.765,19.999 25.483,19.999 ZM24.517,18.837 L16.966,7.732 L13.017,10.725 L9.007,7.692 L1.439,18.837 L24.517,18.837 ZM1.032,17.533 L8.151,7.045 L1.032,1.662 L1.032,17.533 ZM2.210,1.156 L13.001,9.320 L23.791,1.156 L2.210,1.156 ZM17.820,7.083 L24.968,17.596 L24.968,1.663 L17.820,7.083 Z" />
                    </svg>
                    <li class="nav-list"><a href="/contact" class="footer-contact-link">お問い合わせ</a></li>
                  </div>
                </ul>
              </div>
            </div>
          </header>
        </nav><!-- #site-navigation -->
      </header><!-- #masthead -->
    <!-- //header -->

    <!-- main -->
    <main>

      <!-- news  -->
      <section class="frontPage-news fadein">
        <div class="frontPage-inner">
          <h2 class="frontPage-secTtl">お知らせ</h2>
          <p class="frontPage-secTtl--en">NEWS</p>
          <ul class="frontPage-newsList frontNewsFeed">
            <li class="article-loading">読み込み中...</li>
          </ul>
        </div>
      </section>
      <!-- //news  -->

      <!-- message  -->
      <section class="frontPage-message">
        <div class="frontPage-messageInner">
          <h2 class="frontPage-messageTtl fadein">あなたは、今いる世界に<br class="sp">満足していますか？</h2>
          <p class="frontPage-messageTxt fadein">
            届けたい商品があるのに、実現したい想いがあるのに、<br class="pc">
            もどかしさを感じていませんか？
          </p>
          <p class="frontPage-messageTxt fadein">
            あなたにも、あなたの事業にも、<br class="pc">
            今より更に飛躍していける、まだ見ぬ可能性が眠っています。
          </p>
          <p class="frontPage-messageTxt fadein">
            その可能性を開くのが「PR力」です。<br>
            今こそ、「PR」を学びませんか？
          </p>
        </div>
      </section>
      <!-- //message  -->

      <!-- bnr -->
      <aside class="frontPage-bnrWrap fadein">
        <a href="/kobetupage/" class="frontPage-bnr">
          <img src="<?php echo get_template_directory_uri(); ?>/front/img/bnr.png" class="pc" alt="在宅でも「一生求められ続ける」PR.　OJT式PR塾">
          <img src="<?php echo get_template_directory_uri(); ?>/front/img/bnr_sp.png" class="sp" alt="在宅でも「一生求められ続ける」PR.　OJT式PR塾">
        </a>
      </aside>
      <!-- //bnr -->

      <!-- point -->
      <section class="frontPage-point">
        <div class="frontPage-inner">
          <ul class="frontPage-pointList fadein">
            <li class="frontPage-pointItem">
              <span class="frontPage-pointItemHead">POINT</span>
              <p class="frontPage-pointItemNum">1</p>
              <div class="frontPage-pointItemImg frontPage-pointItemImg1">
                <img src="<?php echo get_template_directory_uri(); ?>/front/img/point1.jpg" alt="">
              </div>
              <h2 class="frontPage-pointItemTtl">
                <span class="frontPage-pointMarker">PR塾メソｯドが書籍に。</span><br class="sp">
                <span class="frontPage-pointLine">日経BP社より発売中。</span>
              </h2>
              <p class="frontPage-pointItemTxt">
                PR塾のエッセンスが、１冊の書籍「0円PR」となり日経BP社より発売。即重版。アマゾンランキング３部門カテゴリー１位。<br>
                ※SNS入門書、eコマース、広告・宣伝部門で獲得。
              </p>
            </li>
            <li class="frontPage-pointItem">
              <span class="frontPage-pointItemHead">POINT</span>
              <p class="frontPage-pointItemNum">2</p>
              <div class="frontPage-pointItemImg frontPage-pointItemImg2">
                <img src="<?php echo get_template_directory_uri(); ?>/front/img/point2.jpg" alt="">
              </div>
              <h2 class="frontPage-pointItemTtl">
                <span class="frontPage-pointLine">メディアでも</span><span class="frontPage-pointMarker">多数紹介。</span><br class="pc">　
              </h2>
              <p class="frontPage-pointItemTxt">
                PR塾のコンテンツ凝縮の「0円PR」メソッドは多くのメディアで紹介。「経済界」「プレジデント」「日経トップリーダー」「日経ビジネスオンライン」「日経ARIA」「@DIME」「創業手帳」他多数。
              </p>
            </li>
            <li class="frontPage-pointItem">
              <span class="frontPage-pointItemHead">POINT</span>
              <p class="frontPage-pointItemNum">3</p>
              <div class="frontPage-pointItemImg frontPage-pointItemImg3">
                <img src="<?php echo get_template_directory_uri(); ?>/front/img/point3.jpg" alt="">
              </div>
              <h2 class="frontPage-pointItemTtl">
                <span class="frontPage-pointLine">これまで</span><span class="frontPage-pointMarker">毎回全て<br class="pc">満席開講。</span>
              </h2>
              <p class="frontPage-pointItemTxt">
                PR塾長期講座はこれまで、広告無し、SNS・口コミのみで、4年間満席開講。合計630名が長期受講頂きました。
              </p>
            </li>
          </ul>
        </div>
      </section>
      <!-- //point -->

      <!-- media -->
      <section class="frontPage-media">
        <div class="frontPage-inner frontPage-inner--lg">
          <h2 class="frontPage-secTtl fadein">
            <span class="frontPage-secTtl--md">「0円PR」著者　笹木郁乃は、</span><br><span class="frontPage-marker">多数のメディア</span><span class="frontPage-secTtl--md">でも紹介されています。</span>
          </h2>

          <ul class="frontPage-mediaList fadein">
            <li class="frontPage-mediaItem frontPage-mediaItem1">
              <div class="frontPage-mediaImg media1">
                <img src="<?php echo get_template_directory_uri(); ?>/front/img/media1.jpg" alt="">
              </div>
              <h3 class="frontPage-mediaItemTtl">▲『所さんの学校では教えてくれないそこんトコロ！』
              <br>　（テレビ東京）ゴールデン特番で20分密着紹介</h3>
            </li>
            <li class="frontPage-mediaItem frontPage-mediaItem2">
              <div class="frontPage-mediaImg media2">
                <img src="<?php echo get_template_directory_uri(); ?>/front/img/media2.jpg" alt="">
              </div>
              <h3 class="frontPage-mediaItemTtl">▲日経ビジネス web連載</h3>
            </li>
            <li class="frontPage-mediaItem frontPage-mediaItem3">
              <div class="frontPage-mediaImg media3">
                <img src="<?php echo get_template_directory_uri(); ?>/front/img/media3.jpg" alt="">
              </div>
              <h3 class="frontPage-mediaItemTtl">▲日経ビジネス 野呂さん<br>コラボインタビュー</h3>
            </li>
            <li class="frontPage-mediaItem frontPage-mediaItem4">
              <div class="frontPage-mediaImg media4">
                <img src="<?php echo get_template_directory_uri(); ?>/front/img/media4.jpg" alt="">
              </div>
              <h3 class="frontPage-mediaItemTtl">▲『経済界』にて<br>　2ページ特集記事</h3>
            </li>
            <li class="frontPage-mediaItem frontPage-mediaItem5">
              <div class="frontPage-mediaImg media5">
                <img src="<?php echo get_template_directory_uri(); ?>/front/img/media5.jpg" alt="">
              </div>
              <h3 class="frontPage-mediaItemTtl">▲『Oggi』にて<br>　PR専門家として掲載</h3>
            </li>
            <li class="frontPage-mediaItem frontPage-mediaItem6">
              <div class="frontPage-mediaImg media6">
                <img src="<?php echo get_template_directory_uri(); ?>/front/img/media6.jpg" alt="">
              </div>
              <h3 class="frontPage-mediaItemTtl">▲『経済界』にて<br>　2ページ特集記事</h3>
            </li>
            <li class="frontPage-mediaItem frontPage-mediaItem7">
              <div class="frontPage-mediaImg media7">
                <img src="<?php echo get_template_directory_uri(); ?>/front/img/media7.jpg" alt="">
              </div>
              <h3 class="frontPage-mediaItemTtl">▲『日経トップリーダー』にて<br>　11回連載</h3>
            </li>
            <li class="frontPage-mediaItem frontPage-mediaItem8">
              <div class="frontPage-mediaImg media8">
                <img src="<?php echo get_template_directory_uri(); ?>/front/img/media8.jpg" alt="">
              </div>
              <h3 class="frontPage-mediaItemTtl">▲『日経ARIA』にて 3回連載</h3>
            </li>
            <li class="frontPage-mediaItem frontPage-mediaItem9">
              <div class="frontPage-mediaImg media9">
                <img src="<?php echo get_template_directory_uri(); ?>/front/img/media9.jpg" alt="">
              </div>
              <h3 class="frontPage-mediaItemTtl">▲『日経トップリーダー』にて11回連載</h3>
            </li>
            <li class="frontPage-mediaItem frontPage-mediaItem10">
              <div class="frontPage-mediaImg media10">
                <img src="<?php echo get_template_directory_uri(); ?>/front/img/media10.jpg" alt="">
              </div>
              <h3 class="frontPage-mediaItemTtl">▲『Smiler』にて特集</h3>
            </li>
          </ul>

          <div class="frontPage-mediaListWrap fadein">
            <ul class="frontPage-mediaList2">
              <li>『所さんの学校では教えてくれないそこんトコロ！』</li>
              <li>（テレビ東京）ゴールデン特番で20分密着紹介</li>
              <li>『PRESIDENT 』 4ページのPRコラム掲載。</li>
              <li>『日経トップリーダー』にて11回連載。</li>
              <li>『日経ビジネスオンライン』にて4回連載。</li>
              <li>『日経ビジネスオンライン』にて対談。</li>
              <li>『日経ARIA』にて 3回連載。</li>
              <li>『週刊エコノミスト』にて連載。</li>
              <li>『経済界』にて 2ページ特集記事</li>
              <li>『経済界WEB』にて 3回記事紹介。</li>
              <li>『月刊誌 致知』にて3ページ記事紹介。</li>
            </ul>
            <ul class="frontPage-mediaList2">
              <li>『Oggi』にてPR専門家として掲載。</li>
              <li>『ゲーテweb』にて12回連載。</li>
              <li>『@DIME』にて記事掲載。</li>
              <li>『WIT Magazine』にて3回連載。</li>
              <li>『創業手帳』にて4回連載。</li>
              <li>『綜合ユニコム』にて20回以上コラム連載中。</li>
              <li>&ensp;</li>
              <li>&ensp;日本テレビ系列中京テレビで2回密着紹介。</li>
              <li>&ensp;</li>
              <li class="txtRight">他多数</li>
            </ul>
          </div>
        </div>
      </section>
      <!-- //media -->

      <!-- bnr2 -->
      <aside class="frontPage-bnrWrap2 fadein">
        <a href="/student_voice/" class="frontPage-bnr2">
          <span class="frontPage-bnr2Ttl">PR塾卒業生の150名以上の声<br class="sp">はこちら！</span>
          <span class="frontPage-bnr2Txt">ジャンル別でまとめてご覧になれます ＞</span>
        </a>
      </aside>
      <!-- //bnr2 -->

      <!-- column -->
      <section class="frontPage-column">
        <div class="frontPage-inner">
          <h2 class="frontPage-secTtl fadein">PR塾 コラム記事</h2>
          <p class="frontPage-secTtl--en fadein">COLUMN</p>
          <ul class="frontPage-columnList fadein">

            <?php $args = array(
              'numberposts' => 6, //表示する記事の数
              'post_type' => 'column' //投稿タイプ名
            );
            $customPosts = get_posts($args);
            if ($customPosts) : foreach ($customPosts as $post) : setup_postdata($post);
                $post = get_page($page_id);
            ?>
                <li class="frontPage-columnItem fadein">
                  <a href="<?php the_permalink(); ?>" class="frontPage-columnItemLink">

                    <div class="frontPage-columnItemThumb">
                      <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="frontPage-columnItemBody">
                      <div class="frontPage-columnItemHead">
                        <?php
                        if ($terms = get_the_terms($post->ID, 'column_cat')) {
                          foreach ($terms as $term) {
                        ?>
                            <span class="frontPage-columnItemCat"><?php echo esc_html($term->name); ?></span>
                        <?php
                          }
                        }
                        ?>
                        <span class="frontPage-columnItemTime"><?php the_time('Y.m.d') ?></span>
                      </div>
                      <h3 class="frontPage-columnItemTtl"><?php the_title(); ?></h3>
                      <div class="frontPage-columnItemTxt"><?php the_excerpt(); ?></div>
                      <span class="frontPage-columnItemTxt--sm">SEE MORE ＞</span>
                    </div>
                  </a>
                </li>
              <?php endforeach; ?>
            <?php else : //記事が無い場合
            ?>
              <p>Sorry, no posts matched your criteria.</p>
            <?php endif;
            wp_reset_postdata(); ?>
          </ul>
          <div class="frontPage-btnWrap"><a href="/column" class="frontPage-btn">コラム一覧 ＞</a></div>
        </div>
      </section>
      <!-- //column -->

      <!-- reason -->
      <section class="frontPage-reason fadein">
        <div class="frontPage-inner">
          <h2 class="frontPage-secTtl">
            <span class="frontPage-secTtl--md">なぜ、こんなに</span><br class="sp"><span class="frontPage-marker">成果<span class="frontPage-secTtl--md">がでているの？</span></span>
          </h2>
          <p class="frontPage-reasonTxt">
            PR塾では、１→１００にするためのＰＲ手法を<br>
            笹木郁乃が自ら経験したことを落とし込み、完全公開しています。
          </p><br>
          <p class="frontPage-reasonTxt">
            このPR手法を学ぶと、<br>
            ＊コストをかけずに「認知を広める」<br>
            ＊単に広告のように一方的に認知を広めるだけでなく<br>
            「信頼を作り」「長期的に選ばれる」「安定した売上につなげる」ことができる<br>
            …つまり<br>
            「指名され選ばれるブランド」になります。
          </p>
      </section>
      <!-- //reason -->

      <!-- graph -->
      <section class="frontPage-graph fadein">
        <div class="frontPage-inner">
          <div class="frontPage-graphBox">
            <h2 class="frontPage-graphTtl">協会代表・笹木郁乃が関わったPRと売上連動</h2>
            <div class="frontPage-graphContWrap">
              <div class="frontPage-graphCont">
                <div class="frontPage-graphImg">
                  <img src="<?php echo get_template_directory_uri(); ?>/front/img/graph1.png" alt="">
                </div>
                <p class="frontPage-graphTxt">
                  某寝具メーカー様<br>
                  １億に満たない売上が<span class="frontPage-marker">５年で約115億</span>へと大躍進！
                </p>
              </div>
              <div class="frontPage-graphCont">
                <div class="frontPage-graphImg">
                  <img src="<?php echo get_template_directory_uri(); ?>/front/img/graph2.png" alt="">
                </div>
                <p class="frontPage-graphTxt">
                  某調理器具メーカー様<br>
                  <span class="frontPage-marker">約2年で売上4倍増。</span>注文が殺到し、最大12ヵ月待ちに
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- //graph -->

      <!-- about -->
      <section class="frontPage-about fadein">
        <div class="frontPage-inner">
          <h2 class="frontPage-secTtl frontPage-secTtl--md">PR塾でお伝えするメソッドは</h2>
          <p class="frontPage-aboutTxt">
            ・PR塾の運営会社LITAが、多くの企業のPR支援を現在も手掛けながら、結果を出して行った最新のPR手法<br>
            ・代表 笹木郁乃自身がベンチャー企業2社を売上急拡大したノウハウ<br>
            ・PR塾を5年間運営する中で、未経験でも・無名でも結果を出せるようブラッシュアップしたカリキュラム
            となっています。
          </p>
        </div>
      </section>
      <!-- //about -->

      <!-- work -->
      <section class="frontPage-work fadein">
        <div class="frontPage-inner">
          <h2 class="frontPage-secTtl frontPage-secTtl--md">企業PR支援　取引実績</h2>
          <p class="frontPage-workTxt">
            株式会社エアウィーヴ、株式会社致知出版社、株式会社日経BP、中京テレビ放送株式会社、株式会社経済界、株式会社テンポスホールディングス、ロフテー株式会社、株式会社サンマーク出版、株式会社幻冬舎、明治大学、武蔵コーポレーション株式会社、株式会社四季倶楽部旅、株式会社エスアンドケイ、株式会社インプレッションラーニング、日本高圧電気株式会社、株式会社インラビングメモリー、HAPPY
            WOMAN株式会社、スポーツ庁、株式会社ファニー、一般社団法人日本人グローバル化計画推進協会
            JGPAA、綜合ユニコム株式会社、一般社団法人日本レジャーホテル協会、全国専修学校一般課程各種学校協会、株式会社電通国際情報サービス、ライブコマース推進委員会、株式会社サイトビジット、ピルボックスジャパン株式会社、株式会社FeelWorks、一般社団法人S.E.A、株式会社ランクアップ、株式会社MEコーポレーション、株式会社ウィ・キャン
            他（順不同）
          </p>
        </div>
      </section>
      <!-- //work -->

      <!-- suggest -->
      <section class="frontPage-suggest fadein">
        <div class="frontPage-inner">
          <div class="frontPage-suggestCont">
            <div class="frontPage-suggestTxtWrap">
              <h2 class="frontPage-suggestTtl">あなたもPRプロフェッショナルとして社会で活躍しませんか？</h2>
              <p class="frontPage-suggestTxt">
                PRプロフェッショナル協会認定講座では、世の中のニーズに応えられる、専門的なPRスキルと実践力を習得できます。
              </p>
              <p class="frontPage-suggestTxt">
                専門性の高い複数の講師陣により、メディアPR、出版企画、SNS発信など、今の時代に必要なPRスキルの全てを網羅する充実のコンテンツ内容。常に最新の情報をアップデートし、講座内容に反映しています。
              </p>
              <p class="frontPage-suggestTxt">
                従来のPRと一線を画す、新しい形のPRを学ぶことで、卒業後は即戦力のあるPRプロデューサーとして活躍することが可能です。
              </p>
            </div>
            <div class="frontPage-suggestImgWrap">
              <div class="frontPage-suggestImg frontPage-suggestImg1">
                <img src="<?php echo get_template_directory_uri(); ?>/front/img/suggest1.jpg" class="pc" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/front/img/suggest1_sp.jpg" class="sp" alt="">
              </div>
              <div class="frontPage-suggestImg frontPage-suggestImg2">
                <img src="<?php echo get_template_directory_uri(); ?>/front/img/suggest2.jpg" class="pc" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/front/img/suggest2_sp.jpg" class="sp" alt="">
              </div>
            </div>
          </div>

        </div>
      </section>
      <!-- //suggest -->

      <!-- bnr3 -->
      <aside class="frontPage-bnrWrap3 fadein">
        <a href="/mailmagazine/" class="frontPage-bnr3" target="_blank">
          <img src="<?php echo get_template_directory_uri(); ?>/front/img/bnr2.jpg" alt="SNS時代に必要な｢0円PR術｣を習得し、売上を大幅UP!">
        </a>
      </aside>
      <!-- //bnr3 -->

    </main>
    <!-- //main -->

  </div><!-- /.frontPage-outerLine -->

  <footer class="site-footer">
    <div class="site-footer-main">
      <div class="site-footer-inner">
        <button onclick="location.href='/contact'" class="btn-contact">
          <span class="desc">メールでのお問い合わせ</span>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37.6803 28.9892" class="mail-icon">
            <defs></defs>
            <title>mail_icon</title>
            <path class="mail-icon-path" d="M37.6803,28.9892H0V.01069c12.38857,0,24.99383,0,37.63969-.01069Q37.70061,14.484,37.6803,28.9892Zm-13.009-17.64637-5.88446,3.9458L12.8,11.35582,2.22442,26.90279H35.29605Zm9.17145-9.14928H3.7325L18.78233,13.46694ZM1.81534,2.82241V24.65278l9.85079-14.46769ZM25.80688,10.2442l10.0068,14.501V2.86038Z" />
          </svg>
          <h2 class="btn-title">お問い合わせフォーム</h2>
        </button>
        <div class="footer-text-wrapper">
          <section class="footer-brand">
            <h1 class="brand">
              <div>
                <a href="//pr-professional.jp/"><img src="//pr-professional.jp/wp-content/uploads/2019/07/ft_logo2.png" class="ft_logo"></a>
              </div>
              <!--<span class="institute">一般社団法人</span><br>
              <span class="institute-name">PRプロフェッショナル協会</span>
              </span>-->
            </h1>

            <!--<address class="address">
              〒108-0014 東京都港区芝五丁目27番3号
              MBC-B-76号
            </address>-->
          </section>
          <ul class="nav-link-wrapper">
            <li class="nav-link-list">- <a href="/kobetupage" class="nav-link">PR塾</a></li>
            <li class="nav-link-list">- <a href="/column" class="nav-link">コラム記事</a></li>
            <li class="nav-link-list">- <a href="/student_voice" class="nav-link">受講生の声</a></li>
            <li class="nav-link-list">- <a href="/about-association" class="nav-link">協会について</a></li>
            <li class="nav-link-list">- <a href="/transaction" class="nav-link">特定商取引法に基づく表記</a></li>
          </ul>
          <!-- <small class="cp sp">Copy Right &copy;</small> -->
        </div>
      </div>
    </div>
    <div class="site-footer-bottom">
      <div class="site-footer-bottomInner">
        <a href="https://lita-pr.com/" target="_blank" class="site-footer-company">運営会社　株式会社LITA</a>
        <small class="site-footer-copyright">Copyright &copy; LITA All Rights Reserved.</small>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>

</body>

</html>