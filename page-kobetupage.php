<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/websaite#">

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <!-- viewport-extra 必ず[viewport]の直下に記述 -->
    <script src="https://cdn.jsdelivr.net/npm/viewport-extra@1.0.2/dist/viewport-extra.min.js"></script>
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">

    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo content_url() ?>/themes/association/assets/img/favicon.ico">

    <!-- FontAwesome -->
    <link href="https://use.fontawesome.com/releases/v5.12.0/css/all.css" rel="stylesheet">
    <!-- GoogleFonts -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700" rel="stylesheet">
    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />


    <script>
        // iphone5対応
        new ViewportExtra(375);
    </script>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-P54ZS6P');
    </script>
    <!-- End Google Tag Manager -->

    <?php wp_head(); ?>
    <!-- cssファイル -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/kobetupage/css/admin_import.css">

</head>

<body <?php body_class(); ?> id="pr-class-body">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P54ZS6P" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- メイン -->
    <div class="site-header-wrapper">
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
    </div>
    <!--site-header-wrapper -->


    <main>
        <article class="ly_article">

            <section class="un_MV">
                <div class="un_MV_top">
                    <div class="ly_contXl">
                        <p class="un_MV_top_txt">現在、笹木郁乃/LITAが実施している<br class="md_hidden"><span class="el_dotTxt js_dotTxt">特別なご案内ページ</span>となります。</p>
                    </div>
                    <!-- /.ly_contXl -->
                </div>
                <!-- /.un_MV_top -->
                <div class="un_MV_body">
                    <p class="un_MV_label"><img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/txt/mv_online.png" alt="完全オンライン"></p>
                    <div class="ly_contM">
                        <div class="un_MV_inner">
                            <div class="un_MV_txt">
                                <h1 class="un_MV_catch">
                                    <picture>
                                        <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/txt/mv_catch.png 1x,<?php echo get_template_directory_uri(); ?>/kobetupage/img/txt/mv_catch@2x.png 2x">
                                        <source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/txt/mv_catch_sp.png 1x,<?php echo get_template_directory_uri(); ?>/kobetupage/img/txt/mv_catch_sp@2x.png 2x">
                                        <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/txt/mv_catch.png 1x" alt="在宅でも「一生求められ続ける」0円PR 完全オンライン OJT式PR塾">
                                    </picture>
                                </h1>
                                <div class="un_MV_desc">
                                    <picture>
                                        <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/txt/mv_txt.png 1x,<?php echo get_template_directory_uri(); ?>/kobetupage/img/txt/mv_txt@2x.png 2x">
                                        <source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/txt/mv_txt_sp.png 1x,<?php echo get_template_directory_uri(); ?>/kobetupage/img/txt/mv_txt_sp@2x.png 2x">
                                        <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/txt/mv_txt.png 1x" alt="90日以内にスキルを身につけ、結果を出す自分に。180日以内にPRの仕事で月収30万円。360日以内にPRの仕事で月収50万円以上が未経験からでも安定的に。">
                                    </picture>
                                </div>
                            </div>
                            <!-- /.un_MV_txt -->
                            <div class="un_MV_ojt">
                                <picture>
                                    <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/mv_ojt.png 1x,<?php echo get_template_directory_uri(); ?>/kobetupage/img/mv_ojt@2x.png 2x">
                                    <source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/mv_ojt_sp.png 1x,<?php echo get_template_directory_uri(); ?>/kobetupage/img/mv_ojt_sp@2x.png 2x">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/mv_ojt.png 1x" alt="笹木郁乃/三木佳世子直伝・OJT式。時間がない・未経験のあなたも安心">
                                </picture>
                            </div>
                            <div class="un_MV_achive">
                                <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/mv_achive.png" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/mv_achive.png 1x,
                        <?php echo get_template_directory_uri(); ?>/kobetupage/img/mv_achive@2x.png 2x" alt="17期連続満席 3000名指導実績 メディア掲載多数">
                            </div>
                            <!-- /.un_MV_achive -->
                        </div>
                        <!-- /.un_MV_inner -->
                    </div>
                    <!-- /.ly_contM -->
                </div>
                <!-- /.un_MV_body -->
            </section>
            <!-- メインビジュアル 終わり -->

            <div class="un_stickBtn js_stickBtn">
                <a href="https://prjuku.com/p/r/CBAtKKHn">
                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/icn/counseling_w.png" alt="">
                    <span>まずは動画講座に<br>無料で登録する</span>
                </a>
            </div>
            <!-- /.un_stickBtn -->

            <div class="un_smStickBtn">
                <a href="https://prjuku.com/p/r/CBAtKKHn">
                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/icn/counseling_w_sp.png" alt="">
                    <span>まずは動画講座に無料で登録する</span>
                </a>
            </div>
            <!-- /.un_smStickBtn -->

            <!-- CTA2 -->
            <section class="bl_cta2">
                <div class="ly_contM">
                    <div class="bl_cta_inner bl_cta2_inner">
                        <form action="https://prjuku.com/p/r/CBAtKKHn" enctype="multipart/form-data" id="UserItemForm" class="myForm" method="post" accept-charset="utf-8">
                            <input type="hidden" name="_method" value="POST" />
                            <div class="ly_contS">
                                <p class="el_txtXl">【<span class="el_dotTxt el_dotTxt__red">PR塾へ興味がある方へ</span>】
                                </p>
                                <h2 class="bl_cta_ttl el_cta2_ttl">まずは<span class="el_ttl_strongS hp_colorRed">無料動画講座</span><br class="md_hidden">にご登録ください。
                                </h2>
                                <div class="bl_cta2_label">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/cat2-txt.png" class="pc" alt="今すぐ行動できる0円PR術。1時間講座*3本+特別動画1本">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/cat2-txt_sp.png" class="sp" alt="今すぐ行動できる0円PR術。1時間講座*3本+特別動画1本">
                                </div>
                                <div class="bl_cta2_img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/cta2-mov.png" class="pc" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/cta2-mov_sp.png" class="sp" alt="">
                                </div>
                                <p class="bl_cta2_subttl">
                                    < 登録後すぐに１本目の動画が届きます。>
                                </p>
                                <p class="bl_cta2_txt">
                                    無料動画講座のご視聴後に、<span class="underline">PR塾のご案内</span>をお送りします。
                                </p>
                                <div class="bl_cta2_inputWrap">
                                    <div class="bl_cta2_label">
                                        <label for="Usermail">メールアドレス</label>
                                    </div>
                                    <div class="bl_cta2_input">
                                        <input name="data[User][mail]" id="Usermail" value="" type="text" required="required" placeholder="メールアドレスをご入力ください。" />
                                    </div>
                                </div>
                            </div>
                            <div class="bl_cta_btn bl_cta2_btn">
                                <input type="submit" class="el_cta" value="無料動画講座から始める" />
                            </div>
                            <input type="hidden" id="server_url" value="https://prjuku.com/" />

                            <input type="hidden" name="data[User][referer_form_url]" value="" class="UserRefererFormUrl" />
                            <input type="hidden" name="data[User][referer_url]" value="" class="UserRefererUrl" />

                            <!-- ▼リファラ -->
                            <input type="hidden" name="data[User][referer_form_url]" value="" class="UserRefererFormUrl" />
                            <input type="hidden" name="data[User][referer_url]" value="" class="UserRefererUrl" />
                            <!-- ▲リファラ -->

                        </form>
                    </div>
                    <!-- /.bl_cta_inner -->
                </div>
                <!-- /.ly_contM -->
            </section>
            <!-- CTA2 終わり -->

            <div class="ly_contM hp_spaceM">
                <picture>
                    <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/photo.jpg 1x,<?php echo get_template_directory_uri(); ?>/kobetupage/img/photo@2x.jpg 2x">
                    <source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/photo_sp.png 1x,<?php echo get_template_directory_uri(); ?>/kobetupage/img/photo_sp@2x.png 2x">
                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/photo.png 1x" alt="">
                </picture>
            </div>
            <!-- /.ly_contM -->

            <section class="un_intro bl_sect">
                <h2 class="el_lv2Ttl">皆様のおかげで<br class="md_hidden"><span class="el_lv2Ttl_strong">選ばれてきた</span>PR塾</h2>

                <div class="ly_contXl">
                    <ol class="un_intro_topList pc_mb90">
                        <li>
                            <p class="un_intro_topList_num">1</p>
                            <h3 class="un_intro_topList_catch"><span class="hp_txtBorder">PR塾メソッドが書籍に。</span><br class="md_hidden">日経BP社より発売中。</h3>
                            <p class="un_intro_topList_desc">PR塾のエッセンスが、１冊の書籍「0円PR」となり日経BP社より発売。<br class="sm_hidden">即重版。アマゾンランキング３部門カテゴリー1位。<br class="sm_hidden">※SNS入門書、eコマース、広告・宣伝部門で獲得。</p>
                            <figure class="un_intro_topList_img un_intro_topList_img__pr">
                                <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/intro_book.png" alt="0円PR">
                            </figure>
                        </li>
                        <li>
                            <p class="un_intro_topList_num">2</p>
                            <h3 class="un_intro_topList_catch">メディアでも<span class="hp_txtBorder">多数紹介。</span></h3>
                            <p class="un_intro_topList_desc">PR塾のコンテンツ凝縮の「0円PR」メソッドは多くのメディアで紹介。<br class="sm_hidden">「経済界」「プレジデント」「日経トップリーダー」「日経ビジネスオンライン」「日経ARIA」「@DIME」「創業手帳」他多数。</p>
                            <picture class="un_intro_topList_img un_intro_topList_img___media">
                                <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/intro_media.jpg">
                                <source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/intro_media_sp.png">
                                <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/intro_media.jpg" alt="「日経トップリーダー」「経済界]」">
                            </picture>
                        </li>
                        <li>
                            <p class="un_intro_topList_num">3</p>
                            <h3 class="un_intro_topList_catch">これまで<span class="hp_txtBorder">毎回全て満席講演。</span></h3>
                            <p class="un_intro_topList_desc">PR塾長期講座はこれまで、広告無し、SNS・口コミのみで、4年間満席開講。合計544名が長期受講頂きました。</p>
                            <figure class="un_intro_topList_img un_intro_topList_img__lecture">
                                <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/intro_lecture.jpg" alt="">
                            </figure>
                        </li>
                    </ol>

                    <h3 class="el_sectTtl"><span class="hp_mr1em">「0円PR」著者</span>笹木郁乃は、<br><span class="el_sectTtl_strong">多数のメディア</span>でも<br class="md_hidden">紹介されています。</h3>
                </div>
                <!-- /.ly_contXl -->

                <!-- /.ly_contXl -->
                <ul class="un_intro_slider js_intro_slider">
                    <li>
                        <picture>
                            <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/brand.png">
                            <source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/brand_sp.png">
                            <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/brand.png" alt="">
                        </picture>
                    </li>
                    <li>
                        <picture>
                            <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/brand.png">
                            <source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/brand_sp.png">
                            <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/brand.png" alt="">
                        </picture>
                    </li>
                </ul>
                <div class="ly_contL pc_mb80 sm_mb15">
                    <div class="un_intro_img">
                        <picture>
                            <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/media.png 1x,<?php echo get_template_directory_uri(); ?>/kobetupage/img/media@2x.png 2x">
                            <source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/media_sp.png 1x,<?php echo get_template_directory_uri(); ?>/kobetupage/img/media_sp@2x.png 2x">
                            <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/media.png 1x" alt="">
                        </picture>
                    </div>
                    <!-- /.un_intro_img -->
                </div>
                <!-- /.ly_contL -->
                <div class="ly_contM">
                    <div class="un_intro_listWrapper pc_mb80 sm_mb50">
                        <ul class="un_intro_list">
                            <li>『所さんの学校では教えてくれないそこんトコロ！』</li>
                            <li>（テレビ東京）ゴールデン特番で20分密着紹介</li>
                            <li>『プレジデント』 4ページのPRコラム掲載。</li>
                            <li>『日経トップリーダー』にて11回連載。</li>
                            <li>『日経ビジネスオンライン』にて4回連載。</li>
                            <li>『日経ARIA』にて 3回連載。</li>
                            <li>『経済界』にて 2ページ特集記事</li>
                            <li>『経済界WEB』にて 3回記事紹介。</li>
                            <li>『月刊誌 致知』にて「3ページ記事紹介。</li>
                        </ul>
                        <ul class="un_intro_list">
                            <li>幻冬舎『ゲーテweb』にて12回連載。</li>
                            <li>『@DIME』にて記事掲載。</li>
                            <li>『WIT Magazine』にて3回連載。</li>
                            <li>『創業手帳』にて4回連載。</li>
                            <li>『綜合ユニコム』にて20回以上コラム連載中。</li>
                            <li>日本テレビ系列中京テレビで2回密着紹介。</li>
                            <li>中日新聞</li>
                            <li>中部経済新聞</li>
                            <li class="hp_txtRight">他多数</li>
                        </ul>
                    </div>
                    <!-- /.un_intro_listWrapper -->
                    <div class="un_intro_book">
                        <p class="un_intro_book_txt">笹木郁乃PRメソッドは、1冊の書籍<br class="sm_hidden">「0円PR」となり日経BP社から発売されました。</p>
                        <figure class="un_intro_book_img">
                            <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/book.png" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/book.png 1x,
                    <?php echo get_template_directory_uri(); ?>/kobetupage/img/book@2x.png 2x" alt="0円PR">
                        </figure>
                    </div>
                    <!-- /.un_intro_book -->
                </div>
                <!-- /.ly_contM -->
            </section>
            <!-- 紹介 終わり -->

            <section class="un_problem bl_sect hp_bgLightblue">
                <div class="ly_contM bl_boxWrapper">
                    <div class="bl_box">
                        <div class="ly_contS hp_fontItalic">
                            <div class="pc_mb40 sm_mb20">
                                <h2 class="un_problem_quote">いくら素晴らしいものをつくっても、<span class="hp_txtBorder hp_txtBorder__bold">伝えなければ無いのと同じ。</span></h2>
                                <p class="un_problem_author">by スティーブ・ジョブズ</p>
                            </div>
                            <!-- /.pc_mb40 -->
                            <div class="un_problem_desc">
                                <p>こんにちは、笹木郁乃です。<br>このページを見て頂き、ありがとうございます。</p>
                                <p>私は、これまで、PR未経験者、主婦、会社員、経営者、PRフリーランスと、<br><span class="hp_txtBorder">3000名以上の方々にPRスキルをお伝えしてきました。</span></p>
                                <p>こうして改めて思うことは、<br class="sm_hidden">PRは全てのビジネスをする方なら<br class="sm_hidden"><span class="hp_txtMarkerBlue">「個人」も「企業」の方も学んでおくべき必須スキル</span>ということです。</p>
                                <p>なぜなら、私たちは現在、膨大な情報があふれる時代の中に生きています。<br>そんな中で、自分や、自分が応援したい企業、サービスを、世の中に「的確に」<span class="hp_txtBorder">伝えていく人材。</span>つまり、「PRパーソン」の需要が急増中です。<br>だからこそ、PRは、<br class="sm_hidden">ビジネスをする”あらゆる人”が手に入れるべきスキルだと考えています。</p>
                                <p>PRスキルを手に入れて、<br class="sm_hidden"><span class="hp_txtBorder">想いのあるサービスを沢山の方に届け、</span><br class="sm_hidden"><span class="hp_txtMarkerBlue">更に大きな未来を、あなたの手で作っていきましょう。</span></p>
                            </div>
                            <!-- /.un_problem_desc -->
                            <figure class="hp_boxShadow">
                                <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/team-lita.jpg" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/team-lita.jpg 1x,
                        <?php echo get_template_directory_uri(); ?>/kobetupage/img/team-lita@2x.jpg 2x" alt="">
                            </figure>
                        </div>
                        <!-- /.ly_contS -->
                    </div>
                    <!-- /.bl_box -->
                    <div class="bl_box">
                        <div class="ly_contS">
                            <h2 class="el_ttl el_ttl__l el_ttl__sec un_problem_ttl">求められる高収入職種<br class="md_hidden"><span class="un_problem_number">No1</span>PR 職業※<br><span class="el_txtStrong">在宅でも年収1000万円。</span></h2>
                            <div class="un_problem_desc">
                                <p>現在は、世の中は不況で、大変な時代です。</p>
                                <p>そんな中、<span class="hp_txtBorder">お金をかけないPR</span>は需要大。<br>そして、PRフリーランスの世界は<span class="hp_txtBorder">チャンス到来</span>。</p>
                                <p>大手PR会社に月額80万円〜100万は出せないので、<br class="sm_hidden">PRフリーランスへの依頼にチェンジする企業多数。</p>
                                <p><span class="hp_txtMarkerBlue hp_lineheightM">PRフリーランスへ月額３０万〜４０万をお支払いするのは、企業がお支払いする、実際の平均価格です。</span></p>
                                <p><span class="hp_txtMarkerBlue hp_lineheightM">つまり、月３０万円以上から一社から安定。<br>基本、半年契約からのスタートです。<br>３社受注できると、年収１０００万円</span></p>
                                <p>それが<span class="hp_txtBorder">在宅でできてしまいます</span>。</p>
                            </div>
                            <!-- /.un_problem_desc -->
                            <div class="ly_col ly_col__2 pc_mb30 sm_mb15">
                                <figure>
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/letter_03.jpg" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/letter_03.jpg 1x,
                            <?php echo get_template_directory_uri(); ?>/kobetupage/img/letter_03@2x.jpg 2x" alt="">
                                </figure>
                                <figure>
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/online.jpg" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/online.jpg 1x,
                            <?php echo get_template_directory_uri(); ?>/kobetupage/img/online@2x.jpg 2x" alt="">
                                </figure>
                            </div>
                            <!-- /.bl_horizImgList -->
                            <p class="el_txtS">※CARRY <span class="hp_mr1em">ME</span><span class="hp_mr1em">調査</span><span class="hp_mr1em">2020年3〜9月</span>制約職種実績割合データ</p>
                        </div>
                        <!-- /.ly_contS -->
                    </div>
                    <!-- /.bl_box -->
                </div>
                <!-- /.ly_contM -->
            </section>

            <section class="un_merit">
                <h2 class="el_lv2Ttl"><span class="el_lv2Ttl_strong">「一生使える」</span>PR力を身につけ、<br>あなた自身の力で、<span class="el_lv2Ttl_strong">世にヒットを生み出す</span></h2>
                <div class="ly_contM">
                    <ul class="un_merit_list">
                        <li class="un_merit_item">
                            <figure class="un_merit_item_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/merit01.png" alt="">
                            </figure>
                            <h3 class="un_merit_item_lead">
                                <picture>
                                    <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/txt/merit_lead01.png">
                                    <source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/txt/merit_lead01_sp.png">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/txt/merit_lead01.png" alt="メリット1 手に職をつけることができる">
                                </picture>
                            </h3>
                            <p class="un_merit_item_desc">PRスキルによって周りの<br>認知拡大をサポート</p>
                        </li>
                        <li class="un_merit_item">
                            <figure class="un_merit_item_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/merit02.png" alt="">
                            </figure>
                            <h3 class="un_merit_item_lead">
                                <picture>
                                    <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/txt/merit_lead02.png">
                                    <source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/txt/merit_lead02_sp.png">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/txt/merit_lead02.png" alt="メリット2 自分・自社にも使える">
                                </picture>
                            </h3>
                            <p class="un_merit_item_desc">自分・自社の信頼・認知を<br>上げ、売上拡大を</p>
                        </li>
                        <li class="un_merit_item">
                            <figure class="un_merit_item_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/merit03.png" alt="">
                            </figure>
                            <h3 class="un_merit_item_lead">
                                <picture>
                                    <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/txt/merit_lead03.png">
                                    <source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/txt/merit_lead03_sp.png">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/txt/merit_lead03.png" alt="メリット2 自由な働き方を実現する">
                                </picture>
                            </h3>
                            <p class="un_merit_item_desc">自宅でできるPR活動。<br>地方、子育て中でも需要大</p>
                        </li>
                    </ul>
                </div>
                <!-- /.ly_contM -->
            </section>
            <!-- メリット -->

            <!-- CTA2 -->
            <section class="bl_cta2">
                <div class="ly_contM">
                    <div class="bl_cta_inner bl_cta2_inner">
                        <form action="https://prjuku.com/p/r/CBAtKKHn" enctype="multipart/form-data" id="UserItemForm" class="myForm" method="post" accept-charset="utf-8">
                            <input type="hidden" name="_method" value="POST" />
                            <div class="ly_contS">
                                <p class="el_txtXl">【<span class="el_dotTxt el_dotTxt__red">PR塾へ興味がある方へ</span>】
                                </p>
                                <h2 class="bl_cta_ttl el_cta2_ttl">まずは<span class="el_ttl_strongS hp_colorRed">無料動画講座</span><br class="md_hidden">にご登録ください。
                                </h2>
                                <div class="bl_cta2_label">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/cat2-txt.png" class="pc" alt="今すぐ行動できる0円PR術。1時間講座*3本+特別動画1本">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/cat2-txt_sp.png" class="sp" alt="今すぐ行動できる0円PR術。1時間講座*3本+特別動画1本">
                                </div>
                                <div class="bl_cta2_img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/cta2-mov.png" class="pc" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/cta2-mov_sp.png" class="sp" alt="">
                                </div>
                                <p class="bl_cta2_subttl">
                                    < 登録後すぐに１本目の動画が届きます。>
                                </p>
                                <p class="bl_cta2_txt">
                                    無料動画講座のご視聴後に、<span class="underline">PR塾のご案内</span>をお送りします。
                                </p>
                                <div class="bl_cta2_inputWrap">
                                    <div class="bl_cta2_label">
                                        <label for="Usermail">メールアドレス</label>
                                    </div>
                                    <div class="bl_cta2_input">
                                        <input name="data[User][mail]" id="Usermail" value="" type="text" required="required" placeholder="メールアドレスをご入力ください。" />
                                    </div>
                                </div>
                            </div>
                            <div class="bl_cta_btn bl_cta2_btn">
                                <input type="submit" class="el_cta" value="無料動画講座から始める" />
                            </div>
                            <input type="hidden" id="server_url" value="https://prjuku.com/" />

                            <input type="hidden" name="data[User][referer_form_url]" value="" class="UserRefererFormUrl" />
                            <input type="hidden" name="data[User][referer_url]" value="" class="UserRefererUrl" />

                            <!-- ▼リファラ -->
                            <input type="hidden" name="data[User][referer_form_url]" value="" class="UserRefererFormUrl" />
                            <input type="hidden" name="data[User][referer_url]" value="" class="UserRefererUrl" />
                        </form>
                    </div>
                    <!-- /.bl_cta_inner -->
                </div>
                <!-- /.ly_contM -->
            </section>
            <!-- CTA2 終わり -->

            <section class="un_voice bl_sect">
                <h2 class="el_lv2Ttl">未経験から学んだ<span class="el_lv2Ttl_strong">PR塾生の変化</span></h2>

                <div class="ly_contM">
                    <div class="bl_voiceWrapper">
                        <div class="bl_voice">
                            <div class="bl_voice_header">
                                <div class="bl_voice_imgWrapper">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/syoji.png" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/syoji.png 1x,
                            <?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/syoji@2x.png 2x" alt="">
                                    <p class="bl_voice_label">Voice!</p>
                                </div>
                                <!-- /.bl_voice_imgWrapper -->
                                <div class="bl_voice_txt">
                                    <h3 class="bl_voice_ttl">「攻めの広報」を実践したことで、<span class="bl_voice_ttl_strong hp_txtMarkerRed">８社から取材依頼</span>がありました。信頼性も生まれて、<span class="bl_voice_ttl_strong hp_txtMarkerRed">売り上げは前月の2.4倍、来客数は3倍</span>に！！講座受講後にスタートした<span class="bl_voice_ttl_strong hp_txtMarkerRed">副業でも既に2社とPR契約中。</span></h3>
                                    <p class="bl_voice_name">庄子恵理さん（仙台在住 会社員）</p>
                                </div>
                                <!-- /.bl_voice_txt -->
                            </div>
                            <!-- /.bl_voice_header -->
                            <div class="bl_voice_body">
                                <p>私は地方の中小企業の広報を担当しています。会社の広報を強化と、将来的にフリーのPRプロデューサーとしても活動したいと思い、PR塾を受講しました。<br>今までの会社の広報は代理店経由の業務がメイン。リリースを書いて送っても、先方の返事待つだけでした。<span class="hp_colorRed">しかし、講座で学んだことを活かして、リリースにお手紙を付けたり、メディアのWEBサイトのお問い合わせ欄にメッセージを送るなど、「攻めの広報」をしたことで、いきなり8社から取材依頼をいただいたんです！</span>正直、こんなに立て続けに取材が来るとは思っていませんでした。しかも、今回の取材は今まで出してきた広告と比べられないくらい結果に繋がりました。広告と違ってメディアは第三者視点で会社を紹介してくださるので、広告よりも信頼性が生まれました。<span class="hp_colorRed">売上は前月の2.4倍、来客数は3倍に伸び、来客の方も多くがメディアを見て来店くださっています。</span></p>
                                <p>今では講座受講後にスタートした副業でも既に2社と契約しています。地元の仙台や東北にはまだまだPRが根付いてないと感じております。これからもっと地域貢献活動に力をいれていきたいです。</p>
                            </div>
                            <!-- /.bl_voice_body -->
                        </div>
                        <!-- /.bl_voice -->
                        <div class="bl_voice">
                            <div class="bl_voice_header">
                                <div class="bl_voice_imgWrapper">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/moriike.png" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/moriike.png 1x,
                            <?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/moriike@2x.png 2x" alt="">
                                    <p class="bl_voice_label">Voice!</p>
                                </div>
                                <!-- /.bl_voice_imgWrapper -->
                                <div class="bl_voice_txt">
                                    <h3 class="bl_voice_ttl"><span class="bl_voice_ttl_strong hp_txtMarkerRed">PR経験0から、自社を8社のメディアに</span>掲載。<br><span class="bl_voice_ttl_strong hp_txtMarkerRed">コロナでも、結果的に2,000万円の売り上げ</span>に貢献！今後<span class="bl_voice_ttl_strong hp_txtMarkerRed">広報部長も兼任</span>します</h3>
                                    <p class="bl_voice_name">森池信也さん（会社員 営業部長）</p>
                                </div>
                                <!-- /.bl_voice_txt -->
                            </div>
                            <!-- /.bl_voice_header -->
                            <div class="bl_voice_body">
                                <p>私はIT機器の商社で部長職をしています。僕の場合は、会社研修として社長から「（PR塾に）行ってきて」と言われ、入塾したんです。会社としてはじめての広報としてPR塾で3ヶ月で学びました。<span class="hp_colorRed">その3ヶ月の中で会社の商品がウェブメディアに掲載され、それがきっかけとなって、10件問い合わせがありました。結果的に２千万円の売り上げになったんです。その後は8社のメディアに掲載されました。</span><br>元々は会社として、PRに全く力を入れていませんでした。しかし、3ヶ月で8社のメディアに掲載されたことで、営業先を一件ずつ回るよりも効率的にお客様に知っていただいた実感があります。<br>今では、PRでより多くのお客様にお問い合わせを獲得するに、重点を置いています。プレスリリースを書くのは、初めはハードルの高さを感じるかもしれませんが、最初の一本だけ頑張れば、あとはもういくらでも書ける。経験を積むことが大切です。</p>
                            </div>
                            <!-- /.bl_voice_body -->
                        </div>
                        <!-- /.bl_voice -->
                        <div class="bl_voice">
                            <div class="bl_voice_header">
                                <div class="bl_voice_imgWrapper">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/nakatani.png" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/nakatani.png 1x,
                            <?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/nakatani@2x.png 2x" alt="">
                                    <p class="bl_voice_label">Voice!</p>
                                </div>
                                <!-- /.bl_voice_imgWrapper -->
                                <div class="bl_voice_txt">
                                    <h3 class="bl_voice_ttl">一枚のプレリリースにより、<span class="bl_voice_ttl_strong hp_txtMarkerRed">９社のメディアからの取材依頼</span>獲得！その後、18年勤めた会社を退職し、PRプロデューサーとして独立。<span class="bl_voice_ttl_strong hp_txtMarkerRed">企業と3社PR契約中。</span></h3>
                                    <p class="bl_voice_name">中谷早織さん（フリーランス企業PR）</p>
                                </div>
                                <!-- /.bl_voice_txt -->
                            </div>
                            <!-- /.bl_voice_header -->
                            <div class="bl_voice_body">
                                <p>私は専門商社で18年間広報全般を担当していました。主にWebを利用した販促活動の仕事をしていたのですが、ある日社長から「会社の社会貢献活動でメディアPRをやってみたい」と言われたことをきっかけに、PR塾へ入りました。</p>
                                <p><span class="hp_colorRed">取材0の状態だったのにも関わらず、プレスリリース1枚で、広島県内のテレビ５社、新聞２社、雑誌１社、タウン誌、経済レポート誌がイベントの取材に来てくださり、Yahooニュースにも転載されました。また、PR塾で学んだSNSを使ったPRを実践したところ、複数企業からオファーをいただきました。</p>
                                <p>その後、Web×PRプロデューサーに転身。今はふたりの子どもを育てながら、広島県内の企業を複数サポートして、やりがいある毎日を過ごしています。</p>
                            </div>
                            <!-- /.bl_voice_body -->
                        </div>
                        <!-- /.bl_voice -->
                        <div class="bl_voice">
                            <div class="bl_voice_header">
                                <div class="bl_voice_imgWrapper">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/ueda.png" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/ueda.png 1x,
                            <?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/ueda@2x.png 2x" alt="">
                                    <p class="bl_voice_label">Voice!</p>
                                </div>
                                <!-- /.bl_voice_imgWrapper -->
                                <div class="bl_voice_txt">
                                    <h3 class="bl_voice_ttl">PR経験０から、<span class="bl_voice_ttl_strong hp_txtMarkerRed">PRが事業の柱に成長し、法人3社と契約。</span>サポート中の会社が、新聞4紙への掲載を獲得。その後も、続々とテレビなどでメディア露出。<span class="bl_voice_ttl_strong hp_txtMarkerRed">大きなブームに</span>なりました。</h3>
                                    <p class="bl_voice_name">植田雄一さん（株式会社プランティア代表取締役・PR/Webマーケッター）</p>
                                </div>
                                <!-- /.bl_voice_txt -->
                            </div>
                            <!-- /.bl_voice_header -->
                            <div class="bl_voice_body">
                                <p>私は通販会社を経営しており、広告やPRは外部の会社に委託していました。しかし、 PR塾でPRを学んだことで、なんと自分自身がPRを依頼される側になったんです。</p>
                                <p><span class="hp_colorRed">サポート中の法人1社は新聞4紙への掲載を獲得。翌日から問い合わせが殺到し、件数は50件以上にものぼりました。さらに掲載の反響から、読売新聞やNHKの生中継、静岡第一テレビ、NHK静岡、テレビ静岡、SBSラジオなどのメディアに出演。多くの取材依頼を受け、大きなブームになりました。</span>PRの力を実感した出来事でした。今ではPRスタッフの雇用も検討しているほど、新規のPRサポートが好調な事業に成長しました。</p>
                            </div>
                            <!-- /.bl_voice_body -->
                        </div>
                        <!-- /.bl_voice -->
                        <div class="bl_voice">
                            <div class="bl_voice_header">
                                <div class="bl_voice_imgWrapper">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/kamijo.png" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/kamijo.png 1x,
                            <?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/kamijo@2x.png 2x" alt="">
                                    <p class="bl_voice_label">Voice!</p>
                                </div>
                                <!-- /.bl_voice_imgWrapper -->
                                <div class="bl_voice_txt">
                                    <h3 class="bl_voice_ttl">専業主婦だった私がPRを学び、子育て支援団体を立ち上げ後すぐに、<span class="bl_voice_ttl_strong hp_txtMarkerRed">NHKや毎日新聞、中日新聞、LINEニュースやYahoo!ニュース、㈱光文社VERYwebなど10社以上のメディアから取材</span>されたことで事業が加速し<span class="bl_voice_ttl_strong hp_txtMarkerRed">１年で法人化</span>しました！</h3>
                                    <p class="bl_voice_name">上条厚子さん（NPO法人ママライフバランス代表理事表）</p>
                                </div>
                                <!-- /.bl_voice_txt -->
                            </div>
                            <!-- /.bl_voice_header -->
                            <div class="bl_voice_body">
                                <p>元々、専業主婦生活を7年間送っていました。起業して自己流のSNS運用でのPRや集客がうまくいかず、勇気を振り絞ってPR塾へ入塾しました。卒業後は学んだことを活かしてNPO法人ママライフバランスの代表を務め広報も兼任しています。PR塾で学んだPR戦略は効果絶大！<span class="hp_colorRed">PR戦略から逆算して、企画を立ち上げることができたので、NHKや毎日新聞、中日新聞から取材依頼があり、LINEニュースやYahoo!ニュース、㈱光文社VERYwebなど１0社以上のメディア露出を実現できました。</span>今では自治体や企業と一緒に仕事ができたり、想像以上の仕事のステージアップになっています。</p>
                            </div>
                            <!-- /.bl_voice_body -->
                        </div>
                        <!-- /.bl_voice -->
                        <div class="bl_voice">
                            <div class="bl_voice_header">
                                <div class="bl_voice_imgWrapper">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/tanaka.png" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/tanaka.png 1x,
                            <?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/tanaka@2x.png 2x" alt="">
                                    <p class="bl_voice_label">Voice!</p>
                                </div>
                                <!-- /.bl_voice_imgWrapper -->
                                <div class="bl_voice_txt">
                                    <h3 class="bl_voice_ttl">声を失ったダウン症の息子についての講演活動をスタート。スタート直後から、PRにより、<span class="bl_voice_ttl_strong hp_txtMarkerRed">NHK放送・FBS福岡放送、朝日新聞、読売新聞、佐賀新聞、Yahoo!ニュース</span>に続々と掲載！ ブログも開始15日で累計1万PVを獲得できました！</h3>
                                    <p class="bl_voice_name">田中伸一さん（プロコーチ、人材育成コンサルタント）</p>
                                </div>
                                <!-- /.bl_voice_txt -->
                            </div>
                            <!-- /.bl_voice_header -->
                            <div class="bl_voice_body">
                                <p>私がPR塾に入ったのは、声を失ったダウン症の息子からの学びや気づきを本にして、世の中に伝えていきたいと思っていたからです。しかし、無名の個人の体験談の本は売れないから、と出版はすぐには決まりませんでした。出版をするためには、認知度も必要だと言われ、講演活動を始めることにし、同時にPR塾に入りました。 PR塾ではSNSについても学ぶことができました。Facebookの友達が7月末から8月中旬までの間に1300人から3000人に増え、「いいね」の数は普通で200、多いときには400を超える時も。 さらに、PR塾を受講中にプレスリリースの添削を受け、メディアに送ったところ、<span class="hp_colorRed">毎日新聞社の取材獲得できました。その後、NHK放送・FBS福岡放送、朝日新聞、読売新聞、佐賀新聞、ヤフーニュースに掲載されたんです。</span>声を失ったダウン症の息子との学びや気づきを綴ったブログも、<span class="hp_colorRed">開始15日で累計１万PV獲得し、ブログランキング「ダウン症児育児」カテゴリー1位、2位を獲得できました。</span>今では全国で講演活動を展開しています。</p>
                            </div>
                            <!-- /.bl_voice_body -->
                        </div>
                        <!-- /.bl_voice -->
                        <div class="bl_voice">
                            <div class="bl_voice_header">
                                <div class="bl_voice_imgWrapper">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/tango.png" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/tango.png 1x,
                            <?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/tango@2x.png 2x" alt="">
                                    <p class="bl_voice_label">Voice!</p>
                                </div>
                                <!-- /.bl_voice_imgWrapper -->
                                <div class="bl_voice_txt">
                                    <h3 class="bl_voice_ttl">日経ウーマンや、『致知』からも取材を受け、<span class="bl_voice_ttl_strong hp_txtMarkerRed">日経WOMAN主催ウーマン・オブ・ザ・イヤー2019新・事業承継モデル賞を受賞！</span>2020年３月からは、<span class="bl_voice_ttl_strong hp_txtMarkerRed">伊勢丹新宿店本館5階タオル売り場で常設</span>の販売がスタートしました！</h3>
                                    <p class="bl_voice_name">丹後 佳代さん（株式会社丹後取締役）</p>
                                </div>
                                <!-- /.bl_voice_txt -->
                            </div>
                            <!-- /.bl_voice_header -->
                            <div class="bl_voice_body">
                                <p>私は地元の今治で90年以上続くタオル工場の取締役を務めています。「いい商品だ」という確信はあったものの、全てがぜロの状態でスタートでした。</p>
                                <p>しかし、PR塾の講義の中で「まずは自分の地域を大切にしましょう」と笹木さんからアドバイスいただいたことをきっかけに、<span class="hp_colorRed">まず、地元の記者クラブへプレスリリースを送ったところ、早速、愛媛新聞に掲載されたんです。その記事を見て、講演のご依頼をいただきました。そこからはどんどんとメディアに掲載されるように。</span>催事のお声がけをしていた百貨店などからも、向こうからお声がけをいただけるようになり、さらには2020年の3月から伊勢丹新宿本館5階タオル売り場で常設の販売がスタートしました。</p>
                                <p>今ではしあわせを織りなすという意味を持つオリジナルのブランドタオル「OLSIA［オルシア］」が日経ウーマンや、『致知』に見開きページに取材記事が掲載されたり、「VERY」からコラボのお話を頂くまでに！<span class="hp_colorRed">さらに、日経WOMAN主催ウーマン・オブ・ザ・イヤー2019新・事業承継モデル賞を受賞しました。</span></p>
                            </div>
                            <!-- /.bl_voice_body -->
                        </div>
                        <!-- /.bl_voice -->
                        <div class="bl_voice">
                            <div class="bl_voice_header">
                                <div class="bl_voice_imgWrapper">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/matsumoto.png" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/matsumoto.png 1x,
                            <?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/matsumoto@2x.png 2x" alt="">
                                    <p class="bl_voice_label">Voice!</p>
                                </div>
                                <!-- /.bl_voice_imgWrapper -->
                                <div class="bl_voice_txt">
                                    <h3 class="bl_voice_ttl"><span class="bl_voice_ttl_strong hp_txtMarkerRed">受講中に個人4件、法人名義4件契約を頂き、</span>PRの仕事を獲得するという目標を達成できました。今は受注見込み企業3件もあり、<span class="bl_voice_ttl_strong hp_txtMarkerRed">チームでプロジェクトを進める</span>仕組みづくりをしています。プレスリリースの添削やアドバイスも的確で、自信を持てました。</h3>
                                    <p class="bl_voice_name">松本恵理子（セールスブランディングコンサルタント）</p>
                                </div>
                                <!-- /.bl_voice_txt -->
                            </div>
                            <!-- /.bl_voice_header -->
                            <div class="bl_voice_body">
                                <p>講座の中ではいつも優しく的確にアドバイス頂けて安心してリリースにも取り組めましたし、三木さんの笑顔に私も元気をもらっていました。笹木さんと三木さんのコンビもすごく良くて憧れます。また。他のスタッフさんの仕事の速さやきめ細やかさにいつも尊敬していました。優しく温かく見守ってくださり、一緒になって喜んでもらえてほんとに幸せです。</p>
                                <p>憧れだった笹木さんに大丈夫！と背中を押してもらったおかげでPRの仕事を受講中に受けることができ、<span class="hp_colorRed">個人・法人様に4件ずつ契約をいただきました。PRのお仕事はこれからも増えていきそうで、「受講中に仕事できるように」という目標も叶いました。今後は見込み企業も3件あります。</span>また、夢だったLITAでの仕事で夢が叶い、毎日が楽しいです。自分の仕事を通じて、LITAやPR塾にとってもいいPRや影響を与えられるような存在になって恩返ししていきたいです。人生を変えてくださり有難うございます。これからも宜しくお願いします！</p>
                            </div>
                            <!-- /.bl_voice_body -->
                        </div>
                        <!-- /.bl_voice -->
                        <div class="bl_voice">
                            <div class="bl_voice_header">
                                <div class="bl_voice_imgWrapper">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/terao.png" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/terao.png 1x,
                            <?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/terao@2x.png 2x" alt="">
                                    <p class="bl_voice_label">Voice!</p>
                                </div>
                                <!-- /.bl_voice_imgWrapper -->
                                <div class="bl_voice_txt">
                                    <h3 class="bl_voice_ttl">PR未経験から、<span class="bl_voice_ttl_strong hp_txtMarkerRed">今ではチームを作ってPRの仕事</span>もスタート！サポート中の出版社の<span class="bl_voice_ttl_strong hp_txtMarkerRed">書籍が2ヶ月半で1万4千部を突破。</span>NHKなどのテレビ局からの取材依頼多数。<span class="bl_voice_ttl_strong hp_txtMarkerRed">合計３７媒体でメディア露出を獲得</span>しました。今はPRの仕事が面白くて仕方ありません。お客様と喜び合える瞬間が一番の幸せです。</h3>
                                    <p class="bl_voice_name">寺尾祐子さん（PRプロデューサー）</p>
                                </div>
                                <!-- /.bl_voice_txt -->
                            </div>
                            <!-- /.bl_voice_header -->
                            <div class="bl_voice_body">
                                <p>PR塾に通い始めてから、PRのお仕事をいただき、ありがたいことに途切れたことはありません。あるお客さまは、<span class="hp_colorRed">出版されてから10ヶ月で、NHK、フジテレビ、日テレ、TBSなどのテレビ局各社やラジオ局（先日は3時間も！）に出演し、日経新聞、読売新聞、朝日新聞、東京新聞、日経トレンディ、クロワッサンなど、のべ70以上でメディア露出がありました。</span></p>
                                <p>お客さまが、さまざまなメディアに出ることで、企業からの仕事が増えたり、さらなる出版の話があったりして、PRの威力を感じています。</p>
                                <p>そもそも、PR塾に入ったきっかけは、友人の薦めと、5年前に尊敬する方からPRが向いていると言われたことを思い出したから。受講しているうちに「これは面白い。PRを仕事にしよう！」と決意。PRの仕事は、アイデアと、情熱さえあれば、どこでもできる仕事です。しかも、PRすることで、影響力のあるメディアの力を借りて、世の中に役立つ情報が届けられるのは、大きな喜びにつながっています。</p>
                                <p> 現在、『３つの原則で結果を出す！結果の文章塾』という講座やコンサルティングを続けながら、PRはチームを作って仕事をしています。どちらも、いいモノ（人やサービス）をもっともっと世の中に広げたいから。5年前はPRの仕事にピンとこなかった私が、PR塾のおかげでPRの魅力を知ることができました。出会えたこと、教えていただいたことに、心から感謝しています。</p>
                            </div>
                            <!-- /.bl_voice_body -->
                        </div>
                        <!-- /.bl_voice -->
                        <div class="bl_voice">
                            <div class="bl_voice_header">
                                <div class="bl_voice_imgWrapper">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/ando.png" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/ando.png 1x,
                            <?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/ando@2x.png 2x" alt="">
                                    <p class="bl_voice_label">Voice!</p>
                                </div>
                                <!-- /.bl_voice_imgWrapper -->
                                <div class="bl_voice_txt">
                                    <h3 class="bl_voice_ttl">PR塾で作成した企画書がきっかけで、<span class="bl_voice_ttl_strong hp_txtMarkerRed">著作を出版。</span><br><span class="bl_voice_ttl_strong hp_txtMarkerRed">大手企業主催のセミナー登壇や、テレビ、ラジオ、雑誌への掲載を多数獲得</span>できました！</h3>
                                    <p class="bl_voice_name">安藤 新之助さん（不動産賃貸経営コンサルタント / 株式会社サクセスアーキテクト代表取締役）</p>
                                </div>
                                <!-- /.bl_voice_txt -->
                            </div>
                            <!-- /.bl_voice_header -->
                            <div class="bl_voice_body">
                                <p>私は不動産賃貸経営コンサルタントをしています。副業が一般化していく中で、サラリーマンの方にも不動産投資に参入してもらいたい。その告知のために、PRを戦略的に学びたいと考えている時に、中部経済新聞に掲載されていた笹木さんのインタビュー記事を目にしたんです。「これは！」と思いました。</p>
                                <p>PR塾を卒業後は本を出版しましたが、それは笹木さんの「安藤さんは、次は本ですね」という一言がきっかけでした。たまたま編集者を紹介してもらえる機会があり、PR塾ですでに企画書を作成していたので、とんとん拍子で話が進みました。</p>
                                <p><span class="hp_colorRed">個人で著作を出すのは「上場」に匹敵するくらいのインパクトがあるので、注目度、信頼度も段違いに変わります。本をご覧になった方からの取材依頼も増えて、どんどん自分がブランディングになりました。</span></p>
                                <p>今では、取材だけでなく、出版後は有名企業からのセミナーオファーや、テレビ、ラジオ、雑誌への掲載依頼もあり、コンサルティングへのお問い合わせも増えています。</p>
                            </div>
                            <!-- /.bl_voice_body -->
                        </div>
                        <!-- /.bl_voice -->
                    </div>
                    <!-- /.bl_voiceWrapper -->
                </div>
                <!-- /.ly_contM -->
            </section>
            <!-- 声 終わり -->

            <section class="un_recommend bl_sect">
                <h2 class="el_lv2Ttl">PR塾は<span class="el_lv2Ttl_strong">こんな方にオススメ</span>です！</h2>

                <div class="ly_contM">
                    <div class="bl_box">
                        <ul class="bl_checklist pc_mb50 sm_mb25">
                            <li>未経験だけど周りに喜んでもらう<span class="bl_checklist_strong">PRを身につけたい方</span></li>
                            <li>認知、売上拡大したい<span class="bl_checklist_strong">起業家、経営者の方</span></li>
                            <li><span class="bl_checklist_strong">広報PR、マーケティング、プロモーション職の方</span></li>
                            <li>独立、転職等、<span class="bl_checklist_strong">キャリアチェンジしたい方</span></li>
                            <li>自社サービスを更に認知させたい<span class="bl_checklist_strong">技術者、商品開発者、営業、様々な職種の方</span></li>
                            <li>採用を強化したい<span class="bl_checklist_strong">人事職の方</span></li>
                        </ul>
                        <ul class="un_recommend_itemWrapper">
                            <li class="un_recommend_item">
                                <p class="un_recommend_item_txt">自社・<br class="sm_hidden">自分自身に</p>
                                <figure class="un_recommend_item_img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/icn/graph.png" alt="">
                                </figure>
                                <p class="un_recommend_item_catch"><span class="hp_txtMarkerRed">売上拡大！<br>選ばれるブランドへ</span></p>
                            </li>
                            <li class="un_recommend_item">
                                <p class="un_recommend_item_txt">周りの企業・<br class="sm_hidden">人をサポート</p>
                                <figure class="un_recommend_item_img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/icn/support.png" alt="">
                                </figure>
                                <p class="un_recommend_item_catch"><span class="hp_txtMarkerRed">ニーズが高い！<br class="sm_hidden">著者、<br class="md_hidden">起業家から大企業まで</span></p>
                            </li>
                        </ul>
                        <div class="el_arrow pc_mb20 sm_mb10"><img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/icn/arrow.png" alt=""></div>
                        <!-- /.el_arrow -->
                        <p class="un_recommend_txt">PRとは、<br><span class="el_txtStrong">第三者との関係・信頼を作る活動です！</span></p>
                    </div>
                    <!-- /.bl_box -->
                </div>
                <!-- /.ly_contM -->
            </section>
            <!-- おすすめ 終わり -->

            <!-- CTA2 -->
            <section class="bl_cta2">
                <div class="ly_contM">
                    <div class="bl_cta_inner bl_cta2_inner">
                        <form action="https://prjuku.com/p/r/CBAtKKHn" enctype="multipart/form-data" id="UserItemForm" class="myForm" method="post" accept-charset="utf-8">
                            <input type="hidden" name="_method" value="POST" />
                            <div class="ly_contS">
                                <p class="el_txtXl">【<span class="el_dotTxt el_dotTxt__red">PR塾へ興味がある方へ</span>】
                                </p>
                                <h2 class="bl_cta_ttl el_cta2_ttl">まずは<span class="el_ttl_strongS hp_colorRed">無料動画講座</span><br class="md_hidden">にご登録ください。
                                </h2>
                                <div class="bl_cta2_label">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/cat2-txt.png" class="pc" alt="今すぐ行動できる0円PR術。1時間講座*3本+特別動画1本">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/cat2-txt_sp.png" class="sp" alt="今すぐ行動できる0円PR術。1時間講座*3本+特別動画1本">
                                </div>
                                <div class="bl_cta2_img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/cta2-mov.png" class="pc" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/cta2-mov_sp.png" class="sp" alt="">
                                </div>
                                <p class="bl_cta2_subttl">
                                    < 登録後すぐに１本目の動画が届きます。>
                                </p>
                                <p class="bl_cta2_txt">
                                    無料動画講座のご視聴後に、<span class="underline">PR塾のご案内</span>をお送りします。
                                </p>
                                <div class="bl_cta2_inputWrap">
                                    <div class="bl_cta2_label">
                                        <label for="Usermail">メールアドレス</label>
                                    </div>
                                    <div class="bl_cta2_input">
                                        <input name="data[User][mail]" id="Usermail" value="" type="text" required="required" placeholder="メールアドレスをご入力ください。" />
                                    </div>
                                </div>
                            </div>
                            <div class="bl_cta_btn bl_cta2_btn">
                                <input type="submit" class="el_cta" value="無料動画講座から始める" />
                            </div>
                            <input type="hidden" id="server_url" value="https://prjuku.com/" />

                            <input type="hidden" name="data[User][referer_form_url]" value="" class="UserRefererFormUrl" />
                            <input type="hidden" name="data[User][referer_url]" value="" class="UserRefererUrl" />

                            <!-- ▼リファラ -->
                            <input type="hidden" name="data[User][referer_form_url]" value="" class="UserRefererFormUrl" />
                            <input type="hidden" name="data[User][referer_url]" value="" class="UserRefererUrl" />
                        </form>
                    </div>
                    <!-- /.bl_cta_inner -->
                </div>
                <!-- /.ly_contM -->
            </section>
            <!-- CTA2 終わり -->

            <section class="un_skill">
                <div class="ly_contM">
                    <h2 class="el_sectTtl hp_colorBlue">これからの広報に<br><span class="el_sectTtl_strong">求められるスキル</span>とは？</h2>
                    <p class="el_sectTxt">まだ続くと予想されているコロナ渦において<br>企業から求められるPRスキルとは…</p>
                    <picture class="un_skill_img">
                        <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/skill.png 1x,<?php echo get_template_directory_uri(); ?>/kobetupage/img/skill@2x.png 2x">
                        <source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/skill_sp.png 1x,<?php echo get_template_directory_uri(); ?>/kobetupage/img/skill_sp@2x.png 2x">
                        <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/skill.png 1x" alt="">
                    </picture>
                    <div class="el_arrow pc_mb40 sm_mb20"><img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/icn/arrow.png" alt=""></div>
                    <!-- /.el_arrow -->
                    <p class="pc_mb60 sm_mb30"><span class="el_txtStrong el_txtStrong__s">全て、OJT式PR塾では、<br>カリキュラムの中に入っています。</span></p>
                    <p class="un_skill_desc">ほとんどの、広報塾は、<br class="md_hidden">メディアPR力のみにしか指導していません。<br>PR塾は、必要な全てのPRスキルが、身につきます。</p>
                </div>
                <!-- /.ly_contM -->
            </section>
            <!-- スキル 終わり -->

            <section class="un_goodPoint">
                <h2 class="el_lv2Ttl pc_mb90">なぜ、<span class="el_lv2Ttl_strong">結果を出す</span>ことができるのか？<br>答えは、<span class="el_lv2Ttl_strong">受講生の生の声を</span>ご覧ください。</h2>
                <div class="ly_contM">
                    <h3 class="el_sectTtl pc_mb90 sm_mb45">PR塾<br><span class="el_sectTtl_strong">「ここが良かった！」</span><br><span class="el_ttl_strongL">「ここがすごい！」</span></h3>
                    <ul class="un_goodPoint_itemList">
                        <li class="un_goodPoint_item">
                            <p class="un_goodPoint_label"><img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/txt/good_contents.png" alt=""></p>
                            <figure class="un_goodPoint_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/icn/crown.png" alt="コンテンツ">
                            </figure>
                            <p class="un_goodPoint_ttl">圧倒的情報量<span class="el_dot"></span>テキスト<span class="el_dot"></span><br>最後に資格が取れる！</p>
                            <p class="el_txtS un_goodPoint_desc">「非常に分かりやすかった。」「初心者だがすぐできるようになった。」「テキスト300ページが財産！どの参考書よりもすごい情報量」「最新の情報を惜しみなく全出ししてくれる」</p>
                        </li>
                        <li class="un_goodPoint_item">
                            <p class="un_goodPoint_label"><img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/txt/good_environment.png" alt="環境"></p>
                            <figure class="un_goodPoint_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/icn/crown.png" alt="">
                            </figure>
                            <p class="un_goodPoint_ttl">一生涯の高め合う<br>仲間との出会い。</p>
                            <p class="el_txtS un_goodPoint_desc">同期でチーム結成。<br>ぶっちゃけの関係。ポジティブでマインドが上がり自分の意識が変われる。</p>
                        </li>
                        <li class="un_goodPoint_item">
                            <p class="un_goodPoint_label"><img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/txt/good_work-support.png" alt="実践ワーク＆個別サポート"></p>
                            <figure class="un_goodPoint_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/icn/crown.png" alt="お仕事斡旋">
                            </figure>
                            <p class="un_goodPoint_ttl">一人一人にあった<br>不安がすぐに解消。</p>
                            <p class="el_txtS un_goodPoint_desc">個別アドバイスが講師からもらえる。企画書をすぐに添削してもらえる。実践ワークで、講座中に成果物や資料が完成できる！</p>
                        </li>
                        <li class="un_goodPoint_item">
                            <p class="un_goodPoint_label"><img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/txt/good_ mediation2.png" alt=""></p>
                            <figure class="un_goodPoint_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/icn/crown.png" alt="笹木郁乃&LITAからの刺激">
                            </figure>
                            <p class="un_goodPoint_ttl">毎月2〜3社<br>　</p>
                            <p class="el_txtS un_goodPoint_desc">ＬＩＴＡはPR会社のため、お仕事の依頼が多数。その中で、PR塾生にぴったりというお仕事があれば、ご紹介。塾生の中で相互でお仕事の依頼も盛んに行われており、お仕事経験を積みやすい環境に。</p>
                        </li>
                        <li class="un_goodPoint_item">
                            <p class="un_goodPoint_label"><img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/txt/good_ stimulus.png" alt=""></p>
                            <figure class="un_goodPoint_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/icn/crown.png" alt="">
                            </figure>
                            <p class="un_goodPoint_ttl">お手本、尊敬となる<br>在り方を学べる</p>
                            <p class="el_txtS un_goodPoint_desc">「経営者、一人の人として在り方考え方を笹木郁乃より学べた。刺激になり目標の存在に思えた」「LITAのチームワークが素晴らしく、チームづくりの参考になった。」</p>
                        </li>
                    </ul>
                </div>
                <!-- /.ly_contM -->
            </section>
            <!-- 良い点 終わり -->

            <section class="un_skillList bl_sect">
                <h2 class="el_lv2Ttl"><span class="el_lv2Ttl_strong">充実</span>コンテンツ・<br class="md_hidden"><span class="el_lv2Ttl_strong">学べるPRスキル</span>一覧</h2>
                <div class="ly_contM">
                    <p class="el_sectTxt">まだ続くと予想されているコロナ渦において<br>企業から求められるPRスキルとは…</p>
                    <div class="bl_horizTable hp_mb20">
                        <table>
                            <tbody>
                                <tr>
                                    <th>PR設計</th>
                                    <td>
                                        <ul>
                                            <li>PRってそもそもなに？</li>
                                            <li>PR設計（商品マーケティング）
                                                <ul>
                                                    <li>PR設計①どんなサービス？</li>
                                                    <li>PR設計②お客様に「選ばれる理由」</li>
                                                    <li>PR設計③お客様の未来例（声）</li>
                                                    <li>PR設計④実績作り</li>
                                                    <li>PR設計⑤ストーリーの作り方</li>
                                                    <li>PR設計⑥利用ステップ</li>
                                                </ul>
                                            </li>
                                            <li>PR設計の見える化</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th>メディア設計</th>
                                    <td>
                                        <ul>
                                            <li>メディアへの掲載率が高まるプレスリリースの作り方と作成実践</li>
                                            <li>メディアへの長尺獲得に有効な自社紹介資料の作り方と作成実践</li>
                                            <li>テレビ、新聞、雑誌、WEB 各媒体ごとのメディアアプローチ方法</li>
                                            <li>掲載確率を高めるメディア記者のリサーチ術と実践選定練習</li>
                                            <li>掲載確率を高めるメディアへの電話アプローチ</li>
                                            <li>魅力を100％伝えるための取材対応術と実践練習</li>
                                            <li>掲載確率高めるメディアアプローチ応用術（電話・企画書）</li>
                                            <li>ベストセラーを狙うための出版 PR戦略</li>
                                            <li>狙いたいテレビで紹介されるための企画書作成</li>
                                            <li>売上拡大のためのメディア戦略考え方と構築法</li>
                                            <li>自宅でも取材を獲得できるメディアアプローチ方法</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th>SNS設計</th>
                                    <td>
                                        <ul>
                                            <li>SNS活用の前提</li>
                                            <li>SNSのビジネス活用</li>
                                            <li>ファンが増えるSNSプロデュース</li>
                                            <li><span class="hp_mr1em">各SNSツールのポイント</span>Facebook</li>
                                            <li><span class="hp_mr1em">各SNSツールのポイント</span>Instagram</li>
                                            <li><span class="hp_mr1em">各SNSツールのポイント</span>Twitter</li>
                                            <li><span class="hp_mr1em">各SNSツールのポイント</span>メルマガ</li>
                                            <li><span class="hp_mr1em">各SNSツールのポイント</span>LINE</li>
                                            <li><span class="hp_mr1em">SNS集客</span>SNSだけで月100～1000万円を目指すステップ</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th>法人・行政<br class="md_hidden">PR</th>
                                    <td>
                                        <ul>
                                            <li>企画書づくり</li>
                                            <li>法人向け提案企画書の作り方</li>
                                            <li>法人向け提案企画書の送り方</li>
                                            <li>掲載確率高めるメディアへのプレゼン術</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th>PRの仕事の<br class="md_hidden">進め方＆提案</th>
                                    <td>
                                        <ul>
                                            <li>企業へのPR案件の獲得方法</li>
                                            <li>企業へのPR案件の金額提案</li>
                                            <li>PRの仕事の進め方</li>
                                            <li>PR戦略構築</li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.bl_horizTable -->
                    <div class="el_arrow pc_mb20 sm_mb10"><img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/icn/arrow.png" alt=""></div>
                    <!-- /.el_arrow -->
                    <p class="un_skillList_desc">充実の、<span class="hp_ttlMarker">全30以上のコンテンツ</span>をご提供！</p>
                </div>
                <!-- /.ly_contM -->
            </section>
            <!-- スキル一覧 終わり -->

            <section class="un_support">
                <div class="ly_contM">
                    <h2 class="un_support_ttl">
                        <span class="hp_mr1em">OJT式</span>PR塾は<br class="md_hidden"><span class="un_support_ttl_strong">完全オンライン対応！</span><br>オンラインでも<br class="md_hidden"><span class="un_support_ttl_strong">結果の出る充実のサポート</span>
                    </h2>
                    <div class="pc_mb50 sm_mb25">
                        <ul class="bl_txtCardList bl_txtCardList__col3">
                            <li class="bl_txtCard">
                                <p>毎月１回<br class="sm_hidden">笹木郁乃講義<br class="sm_hidden">（4時間/1回）</p>
                            </li>
                            <li class="bl_txtCard">
                                <p>30本以上の動画<br class="sm_hidden">コンテンツ見放題<br class="sm_hidden">（全コンテンツ収録）</p>
                            </li>
                            <li class="bl_txtCard">
                                <p>笹木郁乃<br class="sm_hidden">個別コンサル<br class="sm_hidden">1回（30分）</p>
                            </li>
                            <li class="bl_txtCard">
                                <p>お仕事紹介有り<br class="sm_hidden">毎月2〜3社</p>
                            </li>
                            <li class="bl_txtCard">
                                <p>毎月１回<br class="sm_hidden">アウトプット練習会<br class="sm_hidden">（60〜90分/１回）</p>
                            </li>
                            <li class="bl_txtCard">
                                <p>毎月1回<br class="sm_hidden">現役メディアの方をお呼びした<br class="sm_hidden">勉強会＆プレゼン大会<br class="sm_hidden">（90分/1回）</p>
                            </li>
                            <li class="bl_txtCard">
                                <p>いつでも質問<br class="sm_hidden">添削スレッド<br class="sm_hidden">24時間サポート<br class="sm_hidden"></p>
                            </li>
                            <li class="bl_txtCard">
                                <p>6ヶ月に１度<br class="sm_hidden">認定試験実施<br class="sm_hidden"></p>
                            </li>
                            <li class="bl_txtCard">
                                <p>PR塾完全オリジナル<br class="sm_hidden">最新テキスト4冊を<br class="sm_hidden">ご自宅にお届け。<br><span class="bl_txtCard_note">（卒業後もPR活動をお助けマニュアル）</span></p>
                            </li>
                            <li class="bl_txtCard">
                                <p>自由参加！毎月1回<br>笹木郁乃/三木佳世子の<br class="sm_hidden">相談・雑談zoom会<br><span class="bl_txtCard_note">（90〜150分）</span></p>
                            </li>
                            <li class="bl_txtCard">
                                <p>3ヶ月に1回<br class="sm_hidden">対面の懇親会開催<br><span class="bl_txtCard_note">（自由参加。都内で集合）</span></p>
                            </li>
                            <li class="bl_txtCard">
                                <p>PR塾専任のサポート<br class="sm_hidden">スタッフ多数。<br class="md_hidden">オンラインでも<br class="sm_hidden">安心のサポート体制。</p>
                            </li>
                        </ul>
                    </div>
                    <!-- /.pc_mb50 -->
                    <ul class="un_support_imgList">
                        <li>
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/support01.jpg" alt="">
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/support02.jpg" alt="">
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/support03.jpg" alt="">
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/support04.jpg" alt="">
                            </figure>
                        </li>
                    </ul>
                </div>
                <!-- /.ly_contM -->
            </section>
            <!-- サポート 終わり -->

            <section class="un_msg">
                <div class="ly_contS">
                    <div class="el_txtL">
                        <p class="pc_mb50 sm_mb25">あなたが必要なカリキュラムやサポートを、自由に選んで受けましょう。</p>
                        <p class="pc_mb90 sm_mb45"><span class="hp_txtMarkerBlue">受講の仕方は無限大。<br>あなたの性格・環境・時間に合わせて、<br>充実のカリキュラムを組み合わせてください。</span></p>
                        <p class="pc_mb90 sm_mb45">カリキュラムの組み合わせは、<br>無料個別カウンセリング時にもご相談可能です。</p>
                        <p class="pc_mb80 sm_mb40">受講時期は、<span class="hp_txtBorder">あなたに合わせていつからでもスタートができます！</span></p>
                        <ul class="ly_col ly_col__2">
                            <li>
                                <figure>
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/online02.jpg" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/online02.jpg 1x,
                            <?php echo get_template_directory_uri(); ?>/kobetupage/img/online02@2x.jpg 2x" alt="">
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/online03.jpg" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/online03.jpg 1x,
                            <?php echo get_template_directory_uri(); ?>/kobetupage/img/online03@2x.jpg 2x" alt="">
                                </figure>
                            </li>
                        </ul>
                        <!-- /.ly_col ly_col__2 -->
                    </div>
                    <!-- /.el_txtL -->
                </div>
                <!-- /.ly_contS -->
            </section>
            <!-- メッセージ 終わり -->

            <!-- CTA2 -->
            <section class="bl_cta2">
                <div class="ly_contM">
                    <div class="bl_cta_inner bl_cta2_inner">
                        <form action="https://prjuku.com/p/r/CBAtKKHn" enctype="multipart/form-data" id="UserItemForm" class="myForm" method="post" accept-charset="utf-8">
                            <input type="hidden" name="_method" value="POST" />
                            <div class="ly_contS">
                                <p class="el_txtXl">【<span class="el_dotTxt el_dotTxt__red">PR塾へ興味がある方へ</span>】
                                </p>
                                <h2 class="bl_cta_ttl el_cta2_ttl">まずは<span class="el_ttl_strongS hp_colorRed">無料動画講座</span><br class="md_hidden">にご登録ください。
                                </h2>
                                <div class="bl_cta2_label">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/cat2-txt.png" class="pc" alt="今すぐ行動できる0円PR術。1時間講座*3本+特別動画1本">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/cat2-txt_sp.png" class="sp" alt="今すぐ行動できる0円PR術。1時間講座*3本+特別動画1本">
                                </div>
                                <div class="bl_cta2_img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/cta2-mov.png" class="pc" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/cta2-mov_sp.png" class="sp" alt="">
                                </div>
                                <p class="bl_cta2_subttl">
                                    < 登録後すぐに１本目の動画が届きます。>
                                </p>
                                <p class="bl_cta2_txt">
                                    無料動画講座のご視聴後に、<span class="underline">PR塾のご案内</span>をお送りします。
                                </p>
                                <div class="bl_cta2_inputWrap">
                                    <div class="bl_cta2_label">
                                        <label for="Usermail">メールアドレス</label>
                                    </div>
                                    <div class="bl_cta2_input">
                                        <input name="data[User][mail]" id="Usermail" value="" type="text" required="required" placeholder="メールアドレスをご入力ください。" />
                                    </div>
                                </div>
                            </div>
                            <div class="bl_cta_btn bl_cta2_btn">
                                <input type="submit" class="el_cta" value="無料動画講座から始める" />
                            </div>
                            <input type="hidden" id="server_url" value="https://prjuku.com/" />

                            <input type="hidden" name="data[User][referer_form_url]" value="" class="UserRefererFormUrl" />
                            <input type="hidden" name="data[User][referer_url]" value="" class="UserRefererUrl" />

                            <!-- ▼リファラ -->
                            <input type="hidden" name="data[User][referer_form_url]" value="" class="UserRefererFormUrl" />
                            <input type="hidden" name="data[User][referer_url]" value="" class="UserRefererUrl" />
                        </form>
                    </div>
                    <!-- /.bl_cta_inner -->
                </div>
                <!-- /.ly_contM -->
            </section>
            <!-- CTA2 終わり -->

            <section class="un_profile hp_bgLightblue bl_sect">
                <div class="ly_contM">
                    <p class="un_profile_ttl">PROFILE</p>
                    <div class="un_profile_item">
                        <div class="un_profile_top">
                            <picture class="un_profile_img">
                                <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/profile_sasaki.jpg 1x,<?php echo get_template_directory_uri(); ?>/kobetupage/img/profile_sasaki@2x.jpg 2x">
                                <source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/profile_sasaki_sp.jpg 1x,<?php echo get_template_directory_uri(); ?>/kobetupage/img/profile_sasaki_sp@2x.jpg 2x">
                                <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/profile_sasaki.jpg 1x" alt="">
                            </picture>
                            <div class="un_profile_name">
                                <h2 class="un_profile_name_name">笹木郁乃<span>Ikuno Sasaki</span></h2>
                                <ul class="un_profile_titleList">
                                    <li>株式会社LITA 代表取締役</li>
                                    <li><span class="hp_mr1em">一般社団法人PRプロフェッショナル協会</span>代表理事</li>
                                </ul>
                            </div>
                            <!-- /.un_profile_name -->
                        </div>
                        <!-- /.un_profile_top -->
                        <div class="un_profile_desc">
                            <p>「PRをより身近に、PRの力で人生に感動を」を信念に活動を続けるPRプロデューサー。PR/マーケティング支援で認知・売り上げ拡大をサポートする株式会社LITAの代表を務める。企業30社以上の長期間のPR支援を行う。</p>
                            <p>寝具メーカー「株式会社エアウィーヴ」に在籍中、営業・マーケティング・PRを兼務。PRの力で年間売上1億円の会社を5年で115億円という成果を出し、会社の急成長に貢献。その後、10億円規模の鍋メーカー「愛知ドビー株式会社」へ転職し、PR・マーケティング職を担当。自身が構築したPR戦略によりわずか1年でバーミキュラを0ヶ月待ちから12ヶ月待ちの予約殺到商品へと成長させ、11億円から2年後44億円の売上実績を作る。その後、独立し、株式会社LITAを立ち上げる。</p>
                            <p>著書である日経BP社『0円PRお金をかけずに顧客に愛されて売上を伸ばす方法』は発売5日で重版が決定。アマゾン3ジャンルベストセラーを獲得するなど、反響を呼ぶ。</p>
                            <p>PR講師としては、4年で3000名以上の経営者・起業家へPRを指導。PR塾の受講生は、メディア出演多数、PRフリーランスとして仕事獲得という実績を続々と作っている。これまで口コミ中心で、毎期が満席となり、これまでに533名がPR塾長期講座を受講している。</p>
                        </div>
                        <!-- /.un_profile_desc -->
                    </div>
                    <div class="un_profile_item un_profile_item__rev">
                        <div class="un_profile_top">
                            <picture class="un_profile_img">
                                <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/profile_miki.jpg 1x,<?php echo get_template_directory_uri(); ?>/kobetupage/img/profile_miki@2x.jpg 2x">
                                <source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/profile_miki_sp.jpg 1x,<?php echo get_template_directory_uri(); ?>/kobetupage/img/profile_miki_sp@2x.jpg 2x">
                                <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/profile_miki.jpg 1x" alt="">
                            </picture>
                            <div class="un_profile_name">
                                <h2 class="un_profile_name_name">三木佳世子<span>Kayoko Miki</span></h2>
                                <ul class="un_profile_titleList">
                                    <li>元NHKディレクター</li>
                                    <li>（株）LITA CHO </li>
                                    <li>一般社団法人PRプロフェッショナル協会代表理事</li>
                                </ul>
                            </div>
                            <!-- /.un_profile_name -->
                        </div>
                        <!-- /.un_profile_top -->
                        <div class="un_profile_desc">
                            <p>慶應義塾大学総合政策学部卒業後、NHKに入局。報道番組のディレクターとして12年間に渡って、有名無名問わず2000人以上を取材。「NHKスペシャル」や「クローズアップ現代」「おはよう日本」「あさイチ」「目撃！日本列島」等、100本以上の番組を制作し、2014年には、NHKスペシャル「認知症行方不明者１万人〜知られざる徘徊の実態〜」で、菊池寛賞・NHK会長賞など受賞。幻冬舎から書籍も出版。<br>息子出産後、時短で復職するも、仕事と育児の両立に葛藤を抱えるようになり、天職だと思っていたテレビディレクターの仕事を離れる決意をする。<br>2018年、サイボウズ株式会社へ転職し、企業の組織開発コンサルティング、学校向けチームワーク授業を担当。同時に、個人で起業。MiraiE PR代表として、PRプロデュース、セミナー講師、Webのライターなどの仕事を並行して行う、パラレルキャリアを邁進する。メディアPRのコンサルでは、NHKの経験から「どのような要素があれば取材されやすいか？」の具体的なアドバイスに定評。</p>
                            <p>社会の流れやタイミングに合わせた、メディア視点の戦略立案・プレスリリースの作成代行でクライアントの取材を獲得。（NHKおはよう日本、テレビ埼玉「ニュース930」、神奈川新聞、AbemaTVなど）動画撮影とインタビューメソッドで「対面で伝える力」を磨く講座はFacebookの告知だけで毎回満席。<br>早稲田大学社会人向け講座でも開催、年齢性別問わずご参加いただき好評を得る。パラレルキャリア実践者として、講演会やトークイベントへの登壇や取材多数。</p>
                            <p>2020年4月から、株式会社LITAのCHO/PR事業部責任者に就任。<br>今の目標は、女性がライフステージの変化に合わせて、自発的にキャリアを選び、人生を創っていける学びや気づきの場創り。そして、PRの力・発信力を使って、良いものが沢山の人に知られる世の中を作ること。</p>
                        </div>
                        <!-- /.un_profile_desc -->
                    </div>
                </div>
                <!-- /.ly_contM -->
            </section>
            <!-- プロフィール 終わり -->

            <section class="un_voice bl_sect">
                <h2 class="el_lv2Ttl">様々なジャンルの方が<span class="el_lv2Ttl_strong">成果を出しています！</span></h2>

                <div class="ly_contM">
                    <div class="bl_voiceWrapper">
                        <div class="bl_voice">
                            <div class="bl_voice_header">
                                <div class="bl_voice_imgWrapper">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/yahata.png" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/yahata.png 1x,
                            <?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/yahata@2x.png 2x" alt="">
                                    <p class="bl_voice_label">Voice!</p>
                                </div>
                                <!-- /.bl_voice_imgWrapper -->
                                <div class="bl_voice_txt">
                                    <h3 class="bl_voice_ttl">PR素人がPR塾により、会社を退職し、フリーランスのPRプランナーに転身。<span class="bl_voice_ttl_strong hp_txtMarkerRed">北海道在住ながら、法人5社と契約！PRという天職に</span>出逢えました！！</h3>
                                    <p class="bl_voice_name">八幡英子さん（フリーランスPRプランナー）</p>
                                </div>
                                <!-- /.bl_voice_txt -->
                            </div>
                            <!-- /.bl_voice_header -->
                            <div class="bl_voice_body">
                                <p>新しい会社で広報部を立ち上げるため、PR塾へ入塾。PR素人の私でしたが、PR塾では「楽しい！」を思いながら学ぶことができ、自分でPRの仕事をやろうと決断。ずっとやっていきたい仕事を見つけられた、という感覚でした。</p>
                                <p>卒業後1ヶ月でプレスリリース1件で7メディアに掲載を獲得。今では、北海道の企業を支援するために動き回っています。PR塾で学んだSNSや学んだスキルを活かして、企業の認知向上の支援。<span class="hp_colorRed">紹介だけでも5社とサポート契約。北海道新聞・毎日新聞・朝日新聞・札幌経済新聞、Yahooニュースへの掲載や、札幌テレビ、ラジオFMノースウェーブでの放送を獲得できました！</span>コロナ禍でもPRの仕事で忙しくしているなんて、自分でも驚きです。</p>
                            </div>
                            <!-- /.bl_voice_body -->
                        </div>
                        <!-- /.bl_voice -->
                        <div class="bl_voice">
                            <div class="bl_voice_header">
                                <div class="bl_voice_imgWrapper">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/shiroki.png" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/shiroki.png 1x,
                            <?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/shiroki@2x.png 2x" alt="">
                                    <p class="bl_voice_label">Voice!</p>
                                </div>
                                <!-- /.bl_voice_imgWrapper -->
                                <div class="bl_voice_txt">
                                    <h3 class="bl_voice_ttl">30歳間近のキャリアチェンジで、PRの道に進んだ私。<br><span class="bl_voice_ttl_strong hp_txtMarkerRed">子育てをしながら、法人4社と契約し、取締役も務めています。</span></h3>
                                    <p class="bl_voice_name">白木賀南子さん（企業・出版PR担当者）</p>
                                </div>
                                <!-- /.bl_voice_txt -->
                            </div>
                            <!-- /.bl_voice_header -->
                            <div class="bl_voice_body">
                                <p>私は元々、日系IT企業で、ヘルプデスクやインストラクター、業務改善のプロジェクトマネージャーをしていました。30歳くらいになる頃に、「一生この会社にいるのかな」ってふと思い、明確なビジョンがないまま会社を退職したんです。その後、いろいろな職種を経験したのですが、出版プロデュースの仕事で、デンマークの企業と直接契約して、マーケティングとユーザーサポート全般に関わったのをきっかけに、PRの道に進みました。PR塾に入ったのも、PRを自分の軸にしたい、という想いがあったからです。PRを学んだおかげで、元々のIT企業アドバイザーの仕事でもサービスのローンチタイミングでのPRやマーケティング全般を任せてもらえるようになり、仕事の幅が広がりました。<span class="hp_colorRed">今では、子育てをしながら、SNSの代行やメディアPRをメインに、法人4社と契約。そのうち一社の取締役を務めるまでになりました。</span></p>
                                <p>PRの仕事は時間に融通がききながらも、世の中に影響を与えられるダイナミックさもある。両方のいいとこ取りができる仕事です。</p>
                            </div>
                            <!-- /.bl_voice_body -->
                        </div>
                        <!-- /.bl_voice -->
                        <div class="bl_voice">
                            <div class="bl_voice_header">
                                <div class="bl_voice_imgWrapper">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/kuboyama.png" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/kuboyama.png 1x,
                            <?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/kuboyama@2x.png 2x" alt="">
                                    <p class="bl_voice_label">Voice!</p>
                                </div>
                                <!-- /.bl_voice_imgWrapper -->
                                <div class="bl_voice_txt">
                                    <h3 class="bl_voice_ttl">自社の2020年上期SNSきっかけの来店・お問合せが、<span class="bl_voice_ttl_strong hp_txtMarkerRed">コロナにも関わらず2019年下期の4倍に！</span><br>はじめて書いたプレスリリースで、<span class="bl_voice_ttl_strong hp_txtMarkerRed">新聞記者の方から取材依頼も！SNSの運用を見て、企業から個人へSNS講師の依頼！</span>PRを学び資格を取ってから、見られ方・仕事の幅が変わったのを実感しています！</h3>
                                    <p class="bl_voice_name">久保山紘子さん(会社員/SNSマーケター)</p>
                                </div>
                                <!-- /.bl_voice_txt -->
                            </div>
                            <!-- /.bl_voice_header -->
                            <div class="bl_voice_body">
                                <p>PRを本格的に学びたいと思っていた時に笹木さんのメルマガに出会い、今回在宅PR塾を開くときいて、直感で応募しました。充実した講座の内容に加え、ワークから即行動できるまで力を付けることが出来ました！おかげで自分のだしたプレスリリース1枚で、新聞記者さんから取材依頼の連絡をいただくことが出来ました。オンラインでも、愛のあるサポートをたくさん受け、オンラインでも丁寧なお仕事や想いは伝わるのだと体感することが出来ましたし、<span class="hp_colorRed">地方在住の私でもたくさんの可能性を感じることが出来ました。これからはPRフリーランスとしてお仕事ができるように行動を重ねていきます。</span></p>
                            </div>
                            <!-- /.bl_voice_body -->
                        </div>
                        <!-- /.bl_voice -->
                        <div class="bl_voice">
                            <div class="bl_voice_header">
                                <div class="bl_voice_imgWrapper">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/sakuragi.png" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/sakuragi.png 1x,
                            <?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/sakuragi@2x.png 2x" alt="">
                                    <p class="bl_voice_label">Voice!</p>
                                </div>
                                <!-- /.bl_voice_imgWrapper -->
                                <div class="bl_voice_txt">
                                    <h3 class="bl_voice_ttl">新商品のメディア向け試食会で<span class="bl_voice_ttl_strong hp_txtMarkerRed">6本の取材を獲得。</span>さらに、個別面談でのアドバイスを踏まえたアプローチで、<span class="bl_voice_ttl_strong hp_txtMarkerRed">10分以上の密着取材も獲得</span>することができました。企画力とＰＲ力を掛け合わせることで認知を広げ、集客にも大きく貢献できる。<span class="bl_voice_ttl_strong hp_txtMarkerRed">PR塾でも学びは、私の宝</span>になりました！</h3>
                                    <p class="bl_voice_name">櫻木潔さん(株式会社イートジョイ・フードサービス 専務執行役員)</p>
                                </div>
                                <!-- /.bl_voice_txt -->
                            </div>
                            <!-- /.bl_voice_header -->
                            <div class="bl_voice_body">
                                <p>コロナ禍でフードビジネス業界は非常に厳しい状況にありますが、「そういうときだからこそ、できることがある。引くのではなく、このタイミングで押せる戦略を考えたい」という思いで、ＰＲ塾に入塾しました。塾ではリリースの書き方、メディアへのアプローチのやり方を学ぶだけではなく、個別面談でＰＲ設計の組み立て方も学ばせていただき、それを実践したところ、メディアの方々の反応が大きく変わりました。</p>
                                <p><span class="hp_colorRed">新商品のメディア向けの試食会を実施したところ、夕方のニュースでの特集や、タレントさんが取材するグルメコーナーでの獲得など、6本の取材を獲得。さらに、コロナ禍での新商品開発に関する長尺での密着取材も1本獲得することができました。</span></p>
                                <p>時節に合わせたインパクトの企画をつくることはこれまでも得意としていましたが、今回のＰＲ塾での学びにより、それをメディアの力を借りながら「伝える」「広げる」という視点を学ぶことができました。PR塾で学んだ事は宝です！これからも引き続き細かくアプローチし、我々のチェーンのみならず業界全体を盛り上げていきたいと考えています。</p>
                                <p>ありがとうございました。</p>
                            </div>
                            <!-- /.bl_voice_body -->
                        </div>
                        <!-- /.bl_voice -->
                        <div class="bl_voice">
                            <div class="bl_voice_header">
                                <div class="bl_voice_imgWrapper">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/ogawa.png" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/ogawa.png 1x,
                            <?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/ogawa@2x.png 2x" alt="">
                                    <p class="bl_voice_label">Voice!</p>
                                </div>
                                <!-- /.bl_voice_imgWrapper -->
                                <div class="bl_voice_txt">
                                    <h3 class="bl_voice_ttl"><span class="bl_voice_ttl_strong hp_txtMarkerRed">PR未経験から、PRプロデューサーへ転身。</span>今では、クライアントさんをTBS系列の<span class="bl_voice_ttl_strong hp_txtMarkerRed">大人気番組『マツコの知らない世界』への出演のきっかけを作る他、日本テレビ系列『バゲット』、光文社『Mart』、『VERY』など続々とメディアの取材を獲得</span>しています。</h3>
                                    <p class="bl_voice_name">小川 祐子さん（PRプロモーター / 翻訳 / ライター）</p>
                                </div>
                                <!-- /.bl_voice_txt -->
                            </div>
                            <!-- /.bl_voice_header -->
                            <div class="bl_voice_body">
                                <p>元々、翻訳者であり、ライターだった私ですが、<span class="hp_colorRed">PR塾でPRを学び、1ヶ月後には3人のクライアントと契約するPRプロモーターに転身しました。</span></p>
                                <p>マスコミ100社向けのプレスリリースを作成し、<span class="hp_colorRed">クライアントの夢であったTBS系列の大人気番組『マツコの知らない世界』への出演をきっかけを作ることができました！他にも、光文社『Mart』での取材記事掲載や、日経新聞オンライン版からの取材以来、日本テレビ系列『バゲット』で全国的に放送されるなど、続々とテレビ出演や記事掲載を獲得。</span>他のクライアントも、商品が日刊水産経済新聞に掲載されたりするなど、結果が着実に出ています。</p>
                                <p>PR塾で学んだことを行動に移す勇気があれば、必ず結果に結びつきます。</p>
                            </div>
                            <!-- /.bl_voice_body -->
                        </div>
                        <!-- /.bl_voice -->
                        <div class="bl_voice">
                            <div class="bl_voice_header">
                                <div class="bl_voice_imgWrapper">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/sasaki.png" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/sasaki.png 1x,
                            <?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/sasaki@2x.png 2x" alt="">
                                    <p class="bl_voice_label">Voice!</p>
                                </div>
                                <!-- /.bl_voice_imgWrapper -->
                                <div class="bl_voice_txt">
                                    <h3 class="bl_voice_ttl"><span class="bl_voice_ttl_strong hp_txtMarkerRed">エステシャンから飲食店９店舗広報へ。<br>Webアクセス４０倍</span>にもなり、クリック率もアップ。コロナ禍でも安定した PRが実現できています。</h3>
                                    <p class="bl_voice_name">佐々木沙織さん（飲食店PRプロデユーサー）</p>
                                </div>
                                <!-- /.bl_voice_txt -->
                            </div>
                            <!-- /.bl_voice_header -->
                            <div class="bl_voice_body">
                                <p>私は飲食店のPRプロデュースをしています。今年、コロナの影響で事業形態を変えることを考えて、飲食店のPR事業を立ち上げることになり、もう１回基礎を見直す目的で、3年前に卒業したPR塾を再受講。3年前はプロフェッショナルコースでしたが、今回は在宅PR塾のお仕事コースを選択。3年の間にWebサイトを作ったり、SEOやマーケティングを学びましが、PR塾のテキストには私が３年間で勉強したことがすごく分かりやすくまとめられていて、自分の売りたい商品のPR設計ができるようになりました。<span class="hp_colorRed">Webの作り込みやPRに集中したことで、再受講中にWebアクセス４０倍にもなり、PR塾で学んだ設計を入れて、クリック率も格段に変わりました。</span></p>
                                <p>コロナの影響で福岡・中洲の飲食店は売り上げが約70%落ちるほど、大きな打撃を受けていますが、PR塾で学んだように、実績やマーケティング手法を打ち出していて、数字にも明確に現れてきました。広告が打てない現状だからこそ、PRが力になっています。</p>
                            </div>
                            <!-- /.bl_voice_body -->
                        </div>
                        <!-- /.bl_voice -->
                        <div class="bl_voice">
                            <div class="bl_voice_header">
                                <div class="bl_voice_imgWrapper">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/niki.png" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/niki.png 1x,
                            <?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/niki@2x.png 2x" alt="">
                                    <p class="bl_voice_label">Voice!</p>
                                </div>
                                <!-- /.bl_voice_imgWrapper -->
                                <div class="bl_voice_txt">
                                    <h3 class="bl_voice_ttl">PR塾で学ぶ中で「PRスキルをで地元企業を支援したい」という想いが芽生え、<span class="bl_voice_ttl_strong hp_txtMarkerRed">島根で10社以上もPR支援を任されるPRプロデューサー</span>に成長。地元経済誌にも<span class="bl_voice_ttl_strong hp_txtMarkerRed">インタビューが掲載</span>されました！</h3>
                                    <p class="bl_voice_name">二木 春香さん（株式会社COME TREES 代表取締役 / ファインディング・ノート起業塾主宰）</p>
                                </div>
                                <!-- /.bl_voice_txt -->
                            </div>
                            <!-- /.bl_voice_header -->
                            <div class="bl_voice_body">
                                <p>私は第一子の育休中に東日本大震災がきっかけで、東京から地元島根にUターン。そこで料理教室を7年主宰していましたが、ビジネスとして成り立たず、辛い想いをしていました。その後、自分と同じように”人の役に立ちたい”という想いを持っている女性を助けたいと考えて、起業塾を立ち上げ、クライアントのさらなる活躍をサポートするために、PR塾に入りました。</p>
                                <p><span class="hp_colorRed">PR塾で学ぶ中で「PRスキルをで地元企業を支援したい」という想いが芽生え、PR塾で得た資格で中小企業庁専門家派遣事業のミラサポに専門家登録。</span>まずは実績を作るところから始め、<span class="hp_colorRed">今では島根で10社以上のPR支援を請け負い、地元経済誌にもインタビューが掲載されました。</span></p>
                                <p>PR塾で学んだ知識やスキルは、自分自身もクライアントも、両方に活かせるのが魅力だと思っています。</p>
                            </div>
                            <!-- /.bl_voice_body -->
                        </div>
                        <!-- /.bl_voice -->
                        <div class="bl_voice">
                            <div class="bl_voice_header">
                                <div class="bl_voice_imgWrapper">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/tanaka-akemi.png" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/tanaka-akemi.png 1x,
                            <?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/tanaka-akemi@2x.png 2x" alt="">
                                    <p class="bl_voice_label">Voice!</p>
                                </div>
                                <!-- /.bl_voice_imgWrapper -->
                                <div class="bl_voice_txt">
                                    <h3 class="bl_voice_ttl">受講中の<span class="bl_voice_ttl_strong hp_txtMarkerRed">2ヶ月で5件のPR案件を獲得</span>することができました！</h3>
                                    <p class="bl_voice_name">田中昭美さん<br>（OTOKUNIレザミ 代表/地域密着子育て情報誌「ママパスポート長岡京」代表兼編集長）</p>
                                </div>
                                <!-- /.bl_voice_txt -->
                            </div>
                            <!-- /.bl_voice_header -->
                            <div class="bl_voice_body">
                                <p>私は元々、営業職をやっていて、広報の世界に飛び込みました。PRは社会貢献的な活動だったり、その人の想いだったりを伝えることによって共感を得るというのが、PRと営業トークの違いだとPR塾を受講して感じました。</p>
                                <p><span class="hp_colorRed">受講期間中に早速プレスリリースを書きました。在宅PR塾のテキストにお手本となるプレスリリースがのているので、まずはそれをマネして書きました。在宅PR塾はFacebookグループでプレスリリースを添削してくれるサービスがあるので、すぐに投稿をしたら、的確なアドバイスをもらえた</span>んです。そこから改訂を繰り返しました。なので、すぐにプレスリリースをNHKなどにも送れたし、可能性が大きく広がりました。</p>
                                <p><span class="hp_colorRed">受講中の2ヶ月で、5件のPR案件を獲得できました。</span>失敗を恐れずに行動した結果です。</p>
                            </div>
                            <!-- /.bl_voice_body -->
                        </div>
                        <!-- /.bl_voice -->
                        <div class="bl_voice">
                            <div class="bl_voice_header">
                                <div class="bl_voice_imgWrapper">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/matsukubo.png" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/matsukubo.png 1x,
                            <?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/matsukubo@2x.png 2x" alt="">
                                    <p class="bl_voice_label">Voice!</p>
                                </div>
                                <!-- /.bl_voice_imgWrapper -->
                                <div class="bl_voice_txt">
                                    <h3 class="bl_voice_ttl">PR塾のノウハウで<span class="bl_voice_ttl_strong hp_txtMarkerRed">月に50件程度だった案件が月平均70件に増加！月商も1,500万の大台を突破</span>しました。今まで手の出し方が分からなかったPR方法ができるようになり、早くても10年後だと思っていた新しいプロジェクトもスタート。さらなる顧客数増加も見込んでいます。</h3>
                                    <p class="bl_voice_name">松久保 正義さん（和工房株式会社 代表取締役 不動産投資コンサルタント）</p>
                                </div>
                                <!-- /.bl_voice_txt -->
                            </div>
                            <!-- /.bl_voice_header -->
                            <div class="bl_voice_body">
                                <p>新しい集客方法を模索していた時に、笹木さんのブログを通じてPR塾に入塾しました。受講を通して、改めて企業マインドの大切さや、それを伝える方法が大事だという事に気づかされ、再構築するきっかけとなりました。 また、メディアへの露出の仕方など、今まで手の出し方が解らなかった分野へのPR方法を学ぶことができ、それがきっかけで、早くても10年後だと思っていたプロジェクトに本格的に乗り出す決意ができました。 これが一番大きな収穫でした。<span class="hp_colorRed">PR塾で学んだノウハウのおかげで、月に50件程度だった案件が月平均70件に増加し、月商も1,500万の大台を突破しました。</span>また、新聞の取材依頼も取り付け、さらなる顧客数増加が見込める予定です。</p>
                            </div>
                            <!-- /.bl_voice_body -->
                        </div>
                        <!-- /.bl_voice -->
                        <div class="bl_voice">
                            <div class="bl_voice_header">
                                <div class="bl_voice_imgWrapper">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/irie.png" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/irie.png 1x,
                            <?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/irie@2x.png 2x" alt="">
                                    <p class="bl_voice_label">Voice!</p>
                                </div>
                                <!-- /.bl_voice_imgWrapper -->
                                <div class="bl_voice_txt">
                                    <h3 class="bl_voice_ttl">今までプレスリリースは自己流で書いていました。しかし、講座で<span class="bl_voice_ttl_strong hp_txtMarkerRed">書き方のメソッドを学び、リリースで取材が決定</span>しました。今では<span class="bl_voice_ttl_strong hp_txtMarkerRed">3社と定期的な契約</span>を結べています。PRを学ぶ前と後では、考え方が根本から変わりました。</h3>
                                    <p class="bl_voice_name">入江恭子さん（株式会社ベイコレクション 代表取締役/ジュエリーデザイナー）</p>
                                </div>
                                <!-- /.bl_voice_txt -->
                            </div>
                            <!-- /.bl_voice_header -->
                            <div class="bl_voice_body">
                                <p>PR塾で学んだPRを知る前と後では、別人のように考え方が違います。PR塾を通して自分が探していたものはPRだったんだと確信することが出来ました！笹木さんが会社経営をしているPRの方だからか、すごく心あるPRを学べたなと思います。笹木さんは講義の中でもすごく愛というか心あることをご指南くださり、何もひっかかりなく、すべてのお話がストンと入ってきました。また、三木さんのリリース添削もすごく簡潔なのに分かりやすく、そしてここにも愛を感じられました。受け取る側を長くされてきた方のお話としても、とても説得力があり本当に良い講座に出会えていたんだなぁと本当に感謝しています。</p>
                                <p><span class="hp_colorRed">今は定期的なPRのお仕事は3社でさせていただいています。PR塾で出来ることが増えたので、しばらくは数を増やさず、単価をあげたいと思っています。また、プレスリリースを書いて、その初リリースで取材が決定しました！</span>今はまだ自社のことで手一杯ですが、いずれは他社さんのPRも今以上に受けるのかもしれないなと思います。</p>
                                <p>本当にありがとうございました。LITA号の大航海をこれからもめちゃくちゃ応援しています！</p>
                            </div>
                            <!-- /.bl_voice_body -->
                        </div>
                        <!-- /.bl_voice -->
                        <div class="bl_voice">
                            <div class="bl_voice_header">
                                <div class="bl_voice_imgWrapper">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/kizaki.png" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/kizaki.png 1x,
                            <?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/kizaki@2x.png 2x" alt="">
                                    <p class="bl_voice_label">Voice!</p>
                                </div>
                                <!-- /.bl_voice_imgWrapper -->
                                <div class="bl_voice_txt">
                                    <h3 class="bl_voice_ttl">講座受講中にプレスリリースがきっかけで、朝日新聞や埼玉新聞の2紙への掲載を獲得！<span class="bl_voice_ttl_strong hp_txtMarkerRed">市との繋がりもできて、大手鉄道会社さんからもお仕事依頼</span>がありました。</h3>
                                    <p class="bl_voice_name">木崎 祐子さん（婚礼衣裳・着物レンタル「ふじや衣裳」代表）</p>
                                </div>
                                <!-- /.bl_voice_txt -->
                            </div>
                            <!-- /.bl_voice_header -->
                            <div class="bl_voice_body">
                                <p>私は婚礼衣裳・着物レンタルの会社の代表をしています。会社の実績や活動を、地域のみなさんや世の中にどう伝えていけばいいのかわからなくて。チラシやDMは費用に対してすごく効果があるというわけではないですし、別の方法を模索するためにPR塾に入りました。</p>
                                <p><span class="hp_colorRed">講座受講中にプレスリリースを添削してもらった途端、朝日新聞や埼玉新聞の2紙に掲載されたんです！新聞を見てすぐにお申し込みがありました。地域のFMラジオから取材依頼があり、放送で取り上げていただきました。</span>今では市とも繋がりもできて、そのご縁で、大手鉄道会社さんからもお仕事依頼がありました。お店の視察に来てくださったり、その会社さんの地域版WEBページと冊子にうちの店を紹介してくださいました。自分でもこんなに早くPRの効果があるなんて驚いています。</p>
                            </div>
                            <!-- /.bl_voice_body -->
                        </div>
                        <!-- /.bl_voice -->
                        <div class="bl_voice">
                            <div class="bl_voice_header">
                                <div class="bl_voice_imgWrapper">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/kawazu.png" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/kawazu.png 1x,
                            <?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/kawazu@2x.png 2x" alt="">
                                    <p class="bl_voice_label">Voice!</p>
                                </div>
                                <!-- /.bl_voice_imgWrapper -->
                                <div class="bl_voice_txt">
                                    <h3 class="bl_voice_ttl">PR塾での学びを生かしてSNS発信やメディアPRに挑戦。レスリリースの配信で、西日本新聞にも掲載され、新規顧客0から、SNSでのPRで月平均3件獲得できました。<span class="bl_voice_ttl_strong hp_txtMarkerRed">お客様からの信頼もアップし、経営も上向いています</span></h3>
                                    <p class="bl_voice_name">河津 良枝さん（有限会社カワヅオート広報担当）</p>
                                </div>
                                <!-- /.bl_voice_txt -->
                            </div>
                            <!-- /.bl_voice_header -->
                            <div class="bl_voice_body">
                                <p>父が始めた自動車整備の会社で、事務員兼広報担当として働いています。自社の業績がなかなか伸びず、今、何か動かなければいけないと思った時に、PR塾を知り、受講を決意しました。PR塾を受講して自社の強みは「温もり」や「アットホーム感」だと気づくことができました。PR塾がきっかけで偏見があったSNS発信にチャレンジ。じわじわと認知を広げています。また、PRのノウハウを活かして作成した申請書のおかげで、超難関の補助金300万円申請を突破することが出来ました。さらにプレスリリースの配信で、<span class="hp_colorRed">西日本新聞にも掲載</span>され、お客様からの信頼もアップ。新規<span class="hp_colorRed">顧客0から、SNSでのPRで月平均3件獲得できました！</span>次の目標としては、PR塾入塾時の目標だった、テレビに出ることです。子どもにも「「お母さん出てるよ」と言われたいですね！PR塾での学びを生かして、もっとたくさんの人にカワヅオートのことを知ってもらいたいです。</p>
                            </div>
                            <!-- /.bl_voice_body -->
                        </div>
                        <!-- /.bl_voice -->
                        <div class="bl_voice">
                            <div class="bl_voice_header">
                                <div class="bl_voice_imgWrapper">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/naito.png" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/naito.png 1x,
                            <?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/naito@2x.png 2x" alt="">
                                    <p class="bl_voice_label">Voice!</p>
                                </div>
                                <!-- /.bl_voice_imgWrapper -->
                                <div class="bl_voice_txt">
                                    <h3 class="bl_voice_ttl">入塾時は副業としての起業でしたが、PR塾で今まで知らなかった戦略的な行動について学び、実践。結果的に、<span class="bl_voice_ttl_strong hp_txtMarkerRed">副業収入が、会社員のお給料を超え、念願の独立ができました。</span>独立後も子育てと両立させながら、<span class="bl_voice_ttl_strong hp_txtMarkerRed">順調にご依頼件数を伸ばす</span>ことができています。</h3>
                                    <p class="bl_voice_name">内藤 しおりさん（上質資料クリエイター）</p>
                                </div>
                                <!-- /.bl_voice_txt -->
                            </div>
                            <!-- /.bl_voice_header -->
                            <div class="bl_voice_body">
                                <p>笹木さんの圧倒的な実績はもちろん、気さくな人柄に魅かれ、この方のお手伝いができたら最高に幸せ！と思っていたところ、資料をご依頼頂きPR塾にも入塾させて頂きました。入塾時は、会社員の副業としての起業でした。家庭・3人の育児と仕事のバランスをうまくとり、時間や場所にしばられずに生きたい！と強く思っていましたが、どこまで自分の力でやっていけるのか自信を持てませんでした。しかし、PR塾で今まで知らなかった戦略的な行動について学び、実際にお客様からお申込みを頂く、という実績を積めたことで大きな自信を得られました。また、<span class="hp_colorRed">入塾前には副業として2万円弱だった売上だったのが、8月に初めて本格的に起業がスタートし、入塾直後にお申込みが立て込みました。結果的に、副業収入が、会社員のお給料を超え、念願の独立ができました。ご依頼件数は、塾中の3ヶ月で16件、その後も12件のご依頼を頂いております。</span>笹木さんとの出逢いが私の人生の大きな転換点となったことは間違いないです。</p>
                            </div>
                            <!-- /.bl_voice_body -->
                        </div>
                        <!-- /.bl_voice -->
                        <div class="bl_voice">
                            <div class="bl_voice_header">
                                <div class="bl_voice_imgWrapper">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/naha.png" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/naha.png 1x,
                            <?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/naha@2x.png 2x" alt="">
                                    <p class="bl_voice_label">Voice!</p>
                                </div>
                                <!-- /.bl_voice_imgWrapper -->
                                <div class="bl_voice_txt">
                                    <h3 class="bl_voice_ttl">PR塾のおかげで、メディア出演を獲得。<br><span class="bl_voice_ttl_strong hp_txtMarkerRed">今では依頼の90%が口コミでの紹介</span>です。</h3>
                                    <p class="bl_voice_name">那波佑香さん（PRを生かしたWebプロデューサー）</p>
                                </div>
                                <!-- /.bl_voice_txt -->
                            </div>
                            <!-- /.bl_voice_header -->
                            <div class="bl_voice_body">
                                <p>PR塾は私にとってのターニングポイントです。今までは自分の経験値頼りだったのが、PR塾でロジカルに学んだことで、論理的に落とし込めて、自信を持ってお客様に仕事ができるようになりました。</p>
                                <p>クライアントのHPも私がプロデュースさせていただき、集客率アップにも繋がっています。メディア出演を獲得できたりと、成果が出るようになったのはPR塾のおかげです。<span class="hp_colorRed">今では、毎月、仕事の90%が口コミの紹介で埋まっていて、コロナの状況でもありがたいことに収入に影響を受けずに、お客様に喜んでいただけています。</span></p>
                                <p>新しいことを始めるときには「うまくいかないんじゃないか？」と不安や迷いが出てくる方も多いと思います。でも。最初は上手くいかないのは当たり前ですよね。女性は自分が生きてきた道が、未来の仕事のスタイルにつながっていくと思うんです。悩む時間がもったいないですよね。</p>
                            </div>
                            <!-- /.bl_voice_body -->
                        </div>
                        <!-- /.bl_voice -->
                        <div class="bl_voice">
                            <div class="bl_voice_header">
                                <div class="bl_voice_imgWrapper">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/shibuya.png" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/shibuya.png 1x,
                            <?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/shibuya@2x.png 2x" alt="">
                                    <p class="bl_voice_label">Voice!</p>
                                </div>
                                <!-- /.bl_voice_imgWrapper -->
                                <div class="bl_voice_txt">
                                    <h3 class="bl_voice_ttl">PR塾で効果的なPR方法を学び、大手マンションディベロッパーから大型案件の契約を受注。いつの間にか<span class="bl_voice_ttl_strong hp_txtMarkerRed">億近くの成果</span>をあげられました。<span class="bl_voice_ttl_strong hp_txtMarkerRed">広告費だけ無為に使っていた日々から抜け出すことができた</span>のは、PR塾のおかげです！</h3>
                                    <p class="bl_voice_name">渋谷 拓朗（日本ウォーター株式会社 代表 兼 最高執行責任者）</p>
                                </div>
                                <!-- /.bl_voice_txt -->
                            </div>
                            <!-- /.bl_voice_header -->
                            <div class="bl_voice_body">
                                <p>父の代から「セントラル浄水器」という家の元栓につける浄水器のメーカーとして25年、約4万台の販売実績を出している会社の経営をしています。 私はおよそ2年前から、インターネット市場と代理店販売の新たな市場へとシフトをしてきました。しかし、広告費等で資金がどんどん流れ出て行ってしまっていたことが原因で、なかなか思うような結果がでず、途方に暮れていました。そんな中、たまたまFacebookで見つけた笹木さんを通して、PRセミナー、個別コンサル、PR塾という流れで受講しました。すると、<span class="hp_colorRed">いつの間にか大手マンションディベロッパーから大型案件の契約を受注。いつの間にか億近くの成果をあげられました。</span>広告費だけ無為に使っていた日々から抜け出すことができたのは、PR塾のおかげです！</p>
                            </div>
                            <!-- /.bl_voice_body -->
                        </div>
                        <!-- /.bl_voice -->
                        <div class="bl_voice">
                            <div class="bl_voice_header">
                                <div class="bl_voice_imgWrapper">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/kano.png" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/kano.png 1x,
                            <?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/kano@2x.png 2x" alt="">
                                    <p class="bl_voice_label">Voice!</p>
                                </div>
                                <!-- /.bl_voice_imgWrapper -->
                                <div class="bl_voice_txt">
                                    <h3 class="bl_voice_ttl">PR塾卒業後、山陰最大の地方新聞紙にカラー版で大々的に取り上げられ新規予約も増えました！<br>その後、団体を立ち上げ、その取組みを<span class="bl_voice_ttl_strong hp_txtMarkerRed">鳥取県知事から表彰</span>も受けました！</h3>
                                    <p class="bl_voice_name">加納千恵美さん（団体代表）</p>
                                </div>
                                <!-- /.bl_voice_txt -->
                            </div>
                            <!-- /.bl_voice_header -->
                            <div class="bl_voice_body">
                                <p>私は夫が経営する歯科医院で21年間託児の仕事をしています。元々は歯科医院のPRをしようと思ってPR塾に参加しましたが、医療法等もあり歯科医院のPRは難しく悩んでいたんです。</p>
                                <p>しかし、<span class="hp_colorRed">PR塾でPRノウハウを学び、山陰最大の地方新聞紙にカラー版で大々的に取り上げられて、新規予約も増えました。</span></p>
                                <p>PR塾に入った3年前はSNSは全くだめでしたが、今では歯科医院のHPを作成したり、ママさんたちの雇用を生み出すことにも取り組みました。その後『歯っぴいほっとスマイル』という団体を立ち上げ、<span class="hp_colorRed">鳥取県知事から表彰されるまでになりました。</span>子どもが仕上げ磨きを嫌がらないよう「仕上げ磨まくら」を開発し販売を開始したところです。</p>
                                <p>何かに挑戦するのに、年齢は関係ないなと思います。何歳からでもチャレンジする気持ちがあれば、世界は広がります。</p>
                            </div>
                            <!-- /.bl_voice_body -->
                        </div>
                        <!-- /.bl_voice -->
                        <div class="bl_voice">
                            <div class="bl_voice_header">
                                <div class="bl_voice_imgWrapper">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/ishii.png" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/ishii.png 1x,
                            <?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/ishii@2x.png 2x" alt="">
                                    <p class="bl_voice_label">Voice!</p>
                                </div>
                                <!-- /.bl_voice_imgWrapper -->
                                <div class="bl_voice_txt">
                                    <h3 class="bl_voice_ttl">PR塾で一方通行のコミュニケーションではなく、お客様との双方向のコミュニケーションができるようになりました。おかげさまで<span class="bl_voice_ttl_strong hp_txtMarkerRed">日経新聞、千葉日報、日経エコノミスト、週刊東洋経済などへの掲載を獲得。</span>プレスリリースで日経新聞への掲載率も100%を記録できました。</h3>
                                    <p class="bl_voice_name">石井 貴美子さん（幕張PLAY株式会社　取締役／広報・PRプロデューサー）</p>
                                </div>
                                <!-- /.bl_voice_txt -->
                            </div>
                            <!-- /.bl_voice_header -->
                            <div class="bl_voice_body">
                                <p>個人が無料で情報発信できる時代。私も「PRスキルも」身に付けたいと思い受講を決めました。もともとは広告営業をしていたので、「この商品いいですよ～！」と一方通行コミュニケーションとして伝えるのは得意でしたが、これからの時代はファンが必須な時代。自分以外の第三者に「いいね！」と言ってもらえる、PRスキルを習得したいと思いすぐに受講を決めました。プレスリリースから<span class="hp_colorRed">日経新聞、千葉日報、日経エコノミスト、週刊東洋経済などへ取り上げていただきました。</span></p>
                                <p>弊社はクラウドファンディングFAAVO千葉幕張というエリアオーナーを運営しています。プロジェクトスタートサポートとしてプレスリリースを必ず発行しています。今の所、メディア掲載率は日経新聞100％です。</p>
                            </div>
                            <!-- /.bl_voice_body -->
                        </div>
                        <!-- /.bl_voice -->
                        <div class="bl_voice">
                            <div class="bl_voice_header">
                                <div class="bl_voice_imgWrapper">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/inoue.png" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/inoue.png 1x,
                            <?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/inoue@2x.png 2x" alt="">
                                    <p class="bl_voice_label">Voice!</p>
                                </div>
                                <!-- /.bl_voice_imgWrapper -->
                                <div class="bl_voice_txt">
                                    <h3 class="bl_voice_ttl">広告費ゼロ円で行列のできる人気店に成長！プレオープン時には、<span class="bl_voice_ttl_strong hp_txtMarkerRed">ＮＨＫをはじめ、日テレ、フジテレビ、新聞、地元情報誌からメディアから取材を受け、</span>PR塾の受講以前と受講後で、<span class="bl_voice_ttl_strong hp_txtMarkerRed">月刊売上額を500万円上乗せ</span>できました！</h3>
                                    <p class="bl_voice_name">伊之上 隼さん（株式会社ファーストストラテジー 代表取締役）</p>
                                </div>
                                <!-- /.bl_voice_txt -->
                            </div>
                            <!-- /.bl_voice_header -->
                            <div class="bl_voice_body">
                                <p>私は法人向けの集客支援を行っている会社を経営しています。DMやセールスページやウェブページの作成や、SEO対策、ウェブ広告について対応しています。事業運営の中でもともとPRの力はすごく感じていたのですが、メディアへのアプローチ方法を身につければ、今後PRを弊社のもうひとつの核の事業にできるのではと思い、PR塾へ参加しました。PR塾では笹木さんが非常に論理的にお話ししてくださり、テキストも丁寧で分かりやすかったです。店舗のプレオープン時には<span class="hp_colorRed">NHKやフジテレビ、新聞や地元情報誌といったメディアから取材を受けました。</span>また、PR塾で学んだことを自身で開催しているセミナーや、お客様用資料に展開させたところ、<span class="hp_colorRed">月間の売上が、これまでの最高額を約500万円ほど更新しました。</span>その後の月々の売上も、<span class="hp_colorRed">受講前と比べて100万円以上は上乗せされている状況です。PR塾のおかげで</span>広告費0円で人気店に成長させることができました。</p>
                            </div>
                            <!-- /.bl_voice_body -->
                        </div>
                        <!-- /.bl_voice -->
                        <div class="bl_voice">
                            <div class="bl_voice_header">
                                <div class="bl_voice_imgWrapper">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/kito.png" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/kito.png 1x,
                            <?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/kito@2x.png 2x" alt="">
                                    <p class="bl_voice_label">Voice!</p>
                                </div>
                                <!-- /.bl_voice_imgWrapper -->
                                <div class="bl_voice_txt">
                                    <h3 class="bl_voice_ttl">入塾前は撮影件数0件/月商0円から、入塾後に撮影件数50件を突破しました。<span class="bl_voice_ttl_strong hp_txtMarkerRed">常に仕事の予定でいっぱいです。</span>人脈もない、自信もない状態だった私が、派遣社員の時よりも好きなことで稼げて、趣味だった写真を仕事にできました。</h3>
                                    <p class="bl_voice_name">鬼頭 望さん（トータルサポートフォトグラファー）</p>
                                </div>
                                <!-- /.bl_voice_txt -->
                            </div>
                            <!-- /.bl_voice_header -->
                            <div class="bl_voice_body">
                                <p>趣味だった「写真」を本格的に学んだことで、これを仕事にしたいと思いました。しかしメニューもない、人脈も ない、自信もない、何をどうしたらいいのかわからない、「ないない状態」でした。 そんな不安の中、偶然知った笹木さんのセミナーに参加し、PRの力と笹木 さんの人柄に惚れ込んだ私は、PR塾への入塾を決めました。入塾を通して、<span class="hp_colorRed">他にはない《本格撮影・受付・プロモーション》のセミナートータルサポートプランが誕生し、入塾前は撮影件数0件/月商0円だった状態から、入塾後には撮影件数50件を突破しました。</span>今は常に仕事の予定でいっぱいです。人脈もない、自信もない状態だった私が、派遣社員の時よりも好きなことで稼げて、趣味だった写真を仕事にできました。</p>
                                <p>笹木さんはソフトな印象で、一人ひとりに寄り添ってくださりながらも、道筋はしっかりと明確に 示し、後ろからさりげなく背中を押し、困ったときは振り返れば隣に来て笑顔で相談 に乗ってくださいます。ゼロからのスタートだった私が今、「好きなことで」「お客様から喜んでいただきながら」「自分自身楽しく」お仕事をさせていただけているのは、間違いなく、笹木さんのおかげだと思っています。</p>
                            </div>
                            <!-- /.bl_voice_body -->
                        </div>
                        <!-- /.bl_voice -->
                        <div class="bl_voice">
                            <div class="bl_voice_header">
                                <div class="bl_voice_imgWrapper">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/kume.png" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/kume.png 1x,
                            <?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/kume@2x.png 2x" alt="">
                                    <p class="bl_voice_label">Voice!</p>
                                </div>
                                <!-- /.bl_voice_imgWrapper -->
                                <div class="bl_voice_txt">
                                    <h3 class="bl_voice_ttl">PR塾で資格をとったことで、PRのスキルをオンラインのお仕事にも活かせるという確信をもつことができ、<span class="bl_voice_ttl_strong hp_txtMarkerRed">お仕事を積極的に引き受ける</span>ようになりました！<span class="bl_voice_ttl_strong hp_txtMarkerRed">2、3日に一回の稼働頻度で、時間にして20~30分の在宅ワークですが、月10万円以上</span>の収入になっています。短期間でも効率よく結果が出るので、余裕を持って稼ぐことができています。</h3>
                                    <p class="bl_voice_name">粂 ひとみさん</p>
                                </div>
                                <!-- /.bl_voice_txt -->
                            </div>
                            <!-- /.bl_voice_header -->
                            <div class="bl_voice_body">
                                <p>2年前に起業し、動物業界の企業さまの営業サポートやイベント支援などをしていました。私は動物業界専門でお仕事をしているため、仕事依頼は紹介が多く、新しく活動を広げていくために、PR塾で学ぶことにしました。オンラインで受講しましたが、自分のペースで学べたり、移動時間が省けたので思ったよりも効率的。受講したおかげで、<span class="hp_colorRed">月に10万円以上のお仕事を、1日の稼働時間20〜30分ほど（稼働頻度は2.3日に一回）の効率で、家で他のお仕事をこなしつつ、余裕を持って稼ぐことができています。</span>また、ＳＮＳのプロジェクト内容が海外からも注目されたり、インフルエンサーからご紹介されるなど、成果に繋がり、企業様からも非常に喜んでいただけております。</p>
                            </div>
                            <!-- /.bl_voice_body -->
                        </div>
                        <!-- /.bl_voice -->
                        <div class="bl_voice">
                            <div class="bl_voice_header">
                                <div class="bl_voice_imgWrapper">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/kato.png" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/kato.png 1x,
                            <?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/kato@2x.png 2x" alt="">
                                    <p class="bl_voice_label">Voice!</p>
                                </div>
                                <!-- /.bl_voice_imgWrapper -->
                                <div class="bl_voice_txt">
                                    <h3 class="bl_voice_ttl">PR塾受講中に<span class="bl_voice_ttl_strong hp_txtMarkerRed">中日新聞に４回掲載</span>されたことがきっかけで、大手企業から定期的なセミナー講師依頼を獲得。本業＋副業という形で仕事をしていましたが、PRを学んだことで、<span class="bl_voice_ttl_strong hp_txtMarkerRed">副業の売り上げが月商80万を突破。</span>塾期間中に開業しました。</h3>
                                    <p class="bl_voice_name">加藤 仁美さん（ファイナンシャルプランナー）</p>
                                </div>
                                <!-- /.bl_voice_txt -->
                            </div>
                            <!-- /.bl_voice_header -->
                            <div class="bl_voice_body">
                                <p>私は3期と6期の二回受講させていただきました。PR塾期間中に、<span class="hp_colorRed">中日新聞に4回掲載され、そのことがきっかけで、大手企業から定期的なセミナー講師依頼</span>をいただきました。入塾前は、副業という形で仕事をしていましたが、卒業時は副業の売り上げが月商80万、本業と合わせると月商200万を超えました。起業してもやっていける自信がつき、<span class="hp_colorRed">塾期間中に退職を決意し、『じんFP事務所』を開業</span>しました。受講したことを通して、仕事の取り組み方やマインド面も変わっていきました。現在は、WEBメディア媒体で特集を組んでいただいたり、大好きな企業のエージェントになれたりと仕事の幅が広がり、FP事務所の開業もでき、好きを仕事にできている毎日が本当に楽しいです。募集がはじまると即満席になってしまうPR塾。なかなか会えない存在になりつつある笹木さんですが、もし会えるタイミングやチャンスがあったら、勇気を出して会いにいってほしいです。</p>
                            </div>
                            <!-- /.bl_voice_body -->
                        </div>
                        <!-- /.bl_voice -->
                        <div class="bl_voice">
                            <div class="bl_voice_header">
                                <div class="bl_voice_imgWrapper">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/oomura.png" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/oomura.png 1x,
                            <?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/oomura@2x.png 2x" alt="">
                                    <p class="bl_voice_label">Voice!</p>
                                </div>
                                <!-- /.bl_voice_imgWrapper -->
                                <div class="bl_voice_txt">
                                    <h3 class="bl_voice_ttl">PR経験ゼロからのスタートでしたが、今では<span class="bl_voice_ttl_strong hp_txtMarkerRed">企業PRコンサル契約1件、出版PR 1件、企業PRコンサル契約1件、新聞掲載1件獲得</span>という実績を作ることができました。<br>日々の子育てと両立して、自分もモチベーション高く仕事に取り組めています。</h3>
                                    <p class="bl_voice_name">大村 拡衣さん（株式会社granDeclic 代表取締役）</p>
                                </div>
                                <!-- /.bl_voice_txt -->
                            </div>
                            <!-- /.bl_voice_header -->
                            <div class="bl_voice_body">
                                <p>ＰＲ塾中、同時進行のお仕事が多く、睡眠時間も、子育てもままならない日々で大変でした。ですがいつも一生懸命情熱と耳を傾けてくださる笹木さん、サポートスタッフのみなさん、同期の皆様のおかげでモチベーションを上げながら頑張れました。今では<span class="hp_colorRed">企業PRコンサル契約1件、出版PR 1件、企業PRコンサル契約1件、新聞掲載1件獲得</span>という実績を作ることができました。さらに、<span class="hp_colorRed">講座集客は3倍、講師依頼も1件獲得するなど、着実に成長できています。</span>今後はお仕事に思いを載せて多くの方に届けていけるよう頑張ります。PR塾のおかげで翼をもてました！</p>
                            </div>
                            <!-- /.bl_voice_body -->
                        </div>
                        <!-- /.bl_voice -->
                        <div class="bl_voice">
                            <div class="bl_voice_header">
                                <div class="bl_voice_imgWrapper">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/hukuoka.png" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/hukuoka.png 1x,
                            <?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/hukuoka@2x.png 2x" alt="">
                                    <p class="bl_voice_label">Voice!</p>
                                </div>
                                <!-- /.bl_voice_imgWrapper -->
                                <div class="bl_voice_txt">
                                    <h3 class="bl_voice_ttl">PR初心者でしたが、受講後、<span class="bl_voice_ttl_strong hp_txtMarkerRed">秋田北羽新聞、足立読売新聞、足立朝日新聞の3紙に掲載</span>いただきました。PRは商品やサービス、人の素敵なところを見つけて社会に繋ぐ、本当に価値のある仕事です。PRは地道だけど、必ず結果に繋がります。</h3>
                                    <p class="bl_voice_name">福岡すみれさん（irodori Branding 広報）</p>
                                </div>
                                <!-- /.bl_voice_txt -->
                            </div>
                            <!-- /.bl_voice_header -->
                            <div class="bl_voice_body">
                                <p>惜しみないコンテンツはもちろんのこと、笹木さん・三木さんの在り方にとても学ばせていただきました。PRって地道だけど、必ず結果につながる。信じる力、行動する力、続ける力…。前を見て行動する力を見習って、これからアウトプットにつなげていきたいです。また、ぶっちゃけの関係やお互い自立しつつも支えあえる参加者皆さんの雰囲気が本当に居心地よかったです。</p>
                                <p>講座のおかげで<span class="hp_colorRed">PR初心者ながらも新聞社3社に自分の記事を掲載</span>していただきました。また、PRのお手伝いをした方に、「自分の可能性を知った」「これからやろうとしていることに自信を持てた」「プロはすごい」など、嬉しいお言葉をたくさんいただきました。誰かの素敵なところを見つけて社会につなぐ、<span class="hp_colorRed">本当に価値あることが仕事としてできることが本当に幸せ</span>です。</p>
                            </div>
                            <!-- /.bl_voice_body -->
                        </div>
                        <!-- /.bl_voice -->
                        <div class="bl_voice">
                            <div class="bl_voice_header">
                                <div class="bl_voice_imgWrapper">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/nitta.png" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/nitta.png 1x,
                            <?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/nitta@2x.png 2x" alt="">
                                    <p class="bl_voice_label">Voice!</p>
                                </div>
                                <!-- /.bl_voice_imgWrapper -->
                                <div class="bl_voice_txt">
                                    <h3 class="bl_voice_ttl">以前は自分の仕事についてSNSで発信することに躊躇している自分がいました。しかし、SNSでの<span class="bl_voice_ttl_strong hp_txtMarkerRed">PRの大切さを学んでから、積極的に発信</span>できています。今では友人の団体のPR設計とSNS発信に携わっています。</h3>
                                    <p class="bl_voice_name">新田真由子さん（PRディレクター、フォトグラファー 、地域コーディネーター）</p>
                                </div>
                                <!-- /.bl_voice_txt -->
                            </div>
                            <!-- /.bl_voice_header -->
                            <div class="bl_voice_body">
                                <p>今までいろんなことをしてきて、自分の好きなこと・楽しいこと・できることをどう仕事につなげていくのか悩んでいました。ですが、<span class="hp_colorRed">PR塾のおかげで自分の中に「PR」という軸・基盤ができ、自信につなげることが出来ました。</span>また、行動にも移すことができ、知人にプレスリリースやPRの方法を教えたり、実際に企画からプレスリリースまで任せてもらえたりしています。</p>
                                <p>三木さんのお話を聞いて、自分の過去の経験から誰かに向き合い、伴奏し、サポートするというPRのお仕事が自分にしっくりきました。だから、PRをやっていこう！と改めて決意することが出来ました。LITAという素晴らしい会社で学べたことがすごく幸せだなと感じています。まだまだ未熟ですが、学びを実践で生かしていきたいと思っています。</p>
                            </div>
                            <!-- /.bl_voice_body -->
                        </div>
                        <!-- /.bl_voice -->
                        <div class="bl_voice">
                            <div class="bl_voice_header">
                                <div class="bl_voice_imgWrapper">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/iwahashi.png" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/iwahashi.png 1x,
                            <?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/iwahashi@2x.png 2x" alt="">
                                    <p class="bl_voice_label">Voice!</p>
                                </div>
                                <!-- /.bl_voice_imgWrapper -->
                                <div class="bl_voice_txt">
                                    <h3 class="bl_voice_ttl">PR経験もメディア掲載実績もほとんどゼロでしたが、PR塾で実践的な学びを得ることができ、プレスリリースがきっかけで、<span class="bl_voice_ttl_strong hp_txtMarkerRed">西日本新聞やRKBラジオ、KBCラジオ</span>で取り上げられました。その後は<span class="bl_voice_ttl_strong hp_txtMarkerRed">Oggiや日経WOMAN、東洋経済Wなど、続々とメディアへの掲載</span>が続いています！</h3>
                                    <p class="bl_voice_name">岩橋 ひかりさん（株式会社MYコンパス 代表取締役 / キャリアコンサルタント）</p>
                                </div>
                                <!-- /.bl_voice_txt -->
                            </div>
                            <!-- /.bl_voice_header -->
                            <div class="bl_voice_body">
                                <p>PRなんて何も知らない、メディア掲載実績もほぼ無い状態で入塾しました。PR勉強会ではいつも、笹木さんの経験を踏まえた事例や最新情報を出し惜しみなく教えてくださって、実践的な学びを得ることができました。プレスリリースの書き方はもちろん、初対面の方への自己紹介の方法など、実際に使用している資料等もデータ共有してくださったり、普段仕事で忙しい私達のためにその場で書類を完成できるように勉強会を設計してくださっていたりと、太っ腹であり、細やかな配慮にいつも感動していました。学んだノウハウのおかげで、<span class="hp_colorRed">読売新聞の全国版、日刊工業新聞への記事掲載につながりました！</span></p>
                                <p>笹木さん、講師、LITAのみなさん１年間ありがとうございました！</p>
                            </div>
                            <!-- /.bl_voice_body -->
                        </div>
                        <!-- /.bl_voice -->
                        <div class="bl_voice">
                            <div class="bl_voice_header">
                                <div class="bl_voice_imgWrapper">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/nakane.png" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/nakane.png 1x,
                            <?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/nakane@2x.png 2x" alt="">
                                    <p class="bl_voice_label">Voice!</p>
                                </div>
                                <!-- /.bl_voice_imgWrapper -->
                                <div class="bl_voice_txt">
                                    <h3 class="bl_voice_ttl"><span class="bl_voice_ttl_strong hp_txtMarkerRed">入塾前のお客様は２名。しかし、入塾後は50名に増えました。</span>起業1ヶ月でPRを学び、卒業直後に<span class="bl_voice_ttl_strong hp_txtMarkerRed">ananから取材依頼とユニクロからの仕事依頼</span>がありました。さらに、法人2件からお声がけいただきました！</h3>
                                    <p class="bl_voice_name">中根 菜穂子さん（ランジェリースタイリスト）</p>
                                </div>
                                <!-- /.bl_voice_txt -->
                            </div>
                            <!-- /.bl_voice_header -->
                            <div class="bl_voice_body">
                                <p>ＳＮＳ起業については独学で学び、仕組みを知ってはいましたが、ＳＮＳの中だけではなく、もっと幅広く世の中に向けて発信していきたい！と思い入塾を決めました。</p>
                                <p>私の入塾した７期は、すでに活躍している塾生が多く、大変刺激を受けました。その様な仲間と共に３か月学ぶ事で<span class="hp_colorRed">視点が変わり、見える世界が広がりました。</span>入塾前では考えられなかったお仕事を頂き、更に高い目標を設定する事ができました。そんな素晴らしい方々が集まるのも郁乃さんの実力と人望だと思います。また、特に印象深い出来事は塾初日の＜実績を書き出すワーク＞での出来事。</p>
                                <p>私は販売員としては実績を出していましたが、その実績が独立後にも役に立つとは思わず「実績はまだ何もない」と考えていました。そんな私に「なおこは実績があるから大丈夫！！」と声を掛けて下さった郁乃さん。</p>
                                <p>「ランジェリーはビジネスとして難しい」と何人もの人に言われてきましたが郁乃さんはそんな事は一言も言わず、私のやりたい事や目指すものを信じて「なおこは大丈夫」と言い続けて下さいました。</p>
                                <p>そんな<span class="hp_colorRed">郁乃さんと独立初期に出会えた事は、私にとって宝物</span>です。</p>
                            </div>
                            <!-- /.bl_voice_body -->
                        </div>
                        <!-- /.bl_voice -->
                        <div class="bl_voice">
                            <div class="bl_voice_header">
                                <div class="bl_voice_imgWrapper">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/maehara.png" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/maehara.png 1x,
                            <?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/maehara@2x.png 2x" alt="">
                                    <p class="bl_voice_label">Voice!</p>
                                </div>
                                <!-- /.bl_voice_imgWrapper -->
                                <div class="bl_voice_txt">
                                    <h3 class="bl_voice_ttl">PR塾で学んだメディアPR方法を実践したら、なんと<span class="bl_voice_ttl_strong hp_txtMarkerRed">地上波テレビの特集コーナーでの取材撮影オファーを獲得！</span>行政や大手企業とも取引し、新しい世界が開けています。目標だった売上2倍を、<span class="bl_voice_ttl_strong hp_txtMarkerRed">入塾わずか2ヶ月後に達成</span>できました！</h3>
                                    <p class="bl_voice_name">前原ゆりさん（キャンドル教室Lilys(リリーズ) オーナー/キャンドルアーティスト/キャンドル作家・講師）</p>
                                </div>
                                <!-- /.bl_voice_txt -->
                            </div>
                            <!-- /.bl_voice_header -->
                            <div class="bl_voice_body">
                                <p>PR塾での笹木さんのアドバイスは本当にどれも的確で助けられ、たくさんのことを学べました。PR塾で学んだメディアPR方法を実践したら、<span class="hp_colorRed">地上波テレビの特集コーナーでの取材撮影オファーを獲得</span>しました！また、今まで集客に時間がかかっていた11期アーティスト養成コースの募集が、なんと5分で満席になりました。今は行政や大手企業との商談・打合せもスムーズに進み、今まで見えない世界が開いてきています。目標だった<span class="hp_colorRed">売上２倍を、入塾わずか2ヶ月後に達成</span>できました！PRの楽しさを感じて、これからも実践していこうと思いました。キャンドルの魅力、伝えていきます！！</p>
                            </div>
                            <!-- /.bl_voice_body -->
                        </div>
                        <!-- /.bl_voice -->
                        <div class="bl_voice">
                            <div class="bl_voice_header">
                                <div class="bl_voice_imgWrapper">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/rikoya.png" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/rikoya.png 1x,
                            <?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/rikoya@2x.png 2x" alt="">
                                    <p class="bl_voice_label">Voice!</p>
                                </div>
                                <!-- /.bl_voice_imgWrapper -->
                                <div class="bl_voice_txt">
                                    <h3 class="bl_voice_ttl">入塾後に地上波テレビ番組出演し、４００人に向けた講演依頼をいただきました。東京、大阪、名古屋の３都市で開催したセミナーは<span class="bl_voice_ttl_strong hp_txtMarkerRed">合計91名の申込みを獲得。</span>さらに、<span class="bl_voice_ttl_strong hp_txtMarkerRed">中共テレビのスポンサーの講師に推薦</span>されました！</h3>
                                    <p class="bl_voice_name">利隆屋 あやのさん（ヒロイントレーニング 代表）</p>
                                </div>
                                <!-- /.bl_voice_txt -->
                            </div>
                            <!-- /.bl_voice_header -->
                            <div class="bl_voice_body">
                                <p>事業を通して、継続的にビジネスをして夢を叶える大人を増やしたい。そのためにヒロイントレーニングのメソッドをきちんとブランディングすることで、社会的な信頼をつけ、活動の場を広げたい。そんな思いを抱えて、PR塾に入塾しました。PR塾では笹木さんとのフラットな関係性を基に、PRを学べるだけでなく、自分の良さを自覚し、存分に発揮できる場所。そして、人に任せることが苦手な私に、ビジネスを拡大させていくために、チームを作り、人に任せることを当たり前にできるように、思い込みを外してくれた塾でした。<span class="hp_colorRed">入塾後に地上波テレビ番組出演し、４００人に向けた講演依頼をいただきました。また、東京、大阪、名古屋の３都市で開催したセミナーは合計91名の申込みを獲得。さらに、中共テレビのスポンサーの講師に推薦されました！</span>笹木さんのPR力と人間力は本物です。きっと、世界が、可能性がもっと広がります。ぜひ、迷わずに笹木さんに会ってみてください。</p>
                            </div>
                            <!-- /.bl_voice_body -->
                        </div>
                        <!-- /.bl_voice -->
                        <div class="bl_voice">
                            <div class="bl_voice_header">
                                <div class="bl_voice_imgWrapper">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/sakamoto.png" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/sakamoto.png 1x,
                            <?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/sakamoto@2x.png 2x" alt="">
                                    <p class="bl_voice_label">Voice!</p>
                                </div>
                                <!-- /.bl_voice_imgWrapper -->
                                <div class="bl_voice_txt">
                                    <h3 class="bl_voice_ttl">料理雑誌や女性誌向けにプレスリリースを配信し、<span class="bl_voice_ttl_strong hp_txtMarkerRed">『天然生活』に特集掲載</span>されました。独立後も安定的に集客できており、全国からのお客様にお越しいただけるようになりました。<span class="bl_voice_ttl_strong hp_txtMarkerRed">独立後4ヶ月で最高月商は330万円を達成</span>しました。</h3>
                                    <p class="bl_voice_name">阪本 三穂さん（週末料理教室こころキッチン主宰 こころキッチンプランナー）</p>
                                </div>
                                <!-- /.bl_voice_txt -->
                            </div>
                            <!-- /.bl_voice_header -->
                            <div class="bl_voice_body">
                                <p>「お母さんが家庭のお医者さんになる。そんな社会を作りたい」そのために、「全国でこころキッチンの認知を高めたい」という思いから、勢いと直感で笹木さんの継続個人コンサルに申し込みしました。コンサルでは主にメディア向けPRについてアドバイスをして頂き、最初に出したプレスリリースでは、なんと<span class="hp_colorRed">全国誌5P掲載(広告費に換算すると500万円相当)もいただくなど、自分自身も驚くほどの成果を得ることができました。</span>週末起業から独立後も毎月集客できていて、全国からのお客様も多数獲得できるようになり、独立後4ヶ月で最高月商は330万円を達成しました。これからも笹木さんに教えていただいたことを存分に活かして、こころキッチンの輪を全国へ広げていきたいと思います。</p>
                            </div>
                            <!-- /.bl_voice_body -->
                        </div>
                        <!-- /.bl_voice -->
                        <div class="bl_voice">
                            <div class="bl_voice_header">
                                <div class="bl_voice_imgWrapper">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/hoshina.png" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/hoshina.png 1x,
                            <?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/hoshina@2x.png 2x" alt="">
                                    <p class="bl_voice_label">Voice!</p>
                                </div>
                                <!-- /.bl_voice_imgWrapper -->
                                <div class="bl_voice_txt">
                                    <h3 class="bl_voice_ttl">PR塾での学びを実践しただけで、<span class="bl_voice_ttl_strong hp_txtMarkerRed">Webメディアでのコラム連載、企業とのコラボ企画がスタート。</span>行政とのプロモーション活動、企業のPR代行契約、テレビ取材の獲得など成果が出て、一人だけだった生徒を今では満席にすることができました！</h3>
                                    <p class="bl_voice_name">星名 亜紀さん（英語コーチ/PRプランナー）</p>
                                </div>
                                <!-- /.bl_voice_txt -->
                            </div>
                            <!-- /.bl_voice_header -->
                            <div class="bl_voice_body">
                                <p>入塾前は継続の生徒様がお一人だったのが現在は９名満席（完全マンツーマンなので人数に限りがありますが、満席とすることができました！）そして、４ヶ月前は体験セッションの集客すら苦戦していたのが、先月は三日で満席、今月はその当日に満席になりました！！</p>
                                <p>この塾で教えていただいたことをただ実行しただけで、<span class="hp_colorRed">webメディアでのコラム連載、企業とのコラボ企画、行政と英語でシティプロモーション活動、企業のPR代行、テレビ取材決定など</span>本当にたくさんのことが動き出しました。</p>
                                <p>４ヶ月前までは想像すらできなかったことです。</p>
                                <p>マインド面でも大きな変化がありました。「成功する覚悟、知られる覚悟」ができ、周りの活躍している起業家さんたちにも刺激を受けてとりあえずやってみよう！！ととにかくいろいろ行動するようになりました。</p>
                                <p>これまで点でしかなかったことが、この４ヶ月で点と点がだんだんと線に見えてきて、これから私がやりたいこともクリアになってきたと思います。</p>
                            </div>
                            <!-- /.bl_voice_body -->
                        </div>
                        <!-- /.bl_voice -->
                        <div class="bl_voice">
                            <div class="bl_voice_header">
                                <div class="bl_voice_imgWrapper">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/shiroyama.png" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/shiroyama.png 1x,
                            <?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/shiroyama@2x.png 2x" alt="">
                                    <p class="bl_voice_label">Voice!</p>
                                </div>
                                <!-- /.bl_voice_imgWrapper -->
                                <div class="bl_voice_txt">
                                    <h3 class="bl_voice_ttl">PR塾受講期間中にメディアアプローチの手法を学び、<span class="bl_voice_ttl_strong hp_txtMarkerRed">新聞への記事掲載が実現！</span>写真付きで大きく取り上げていただき、記者との繋がりもできました。自分の事業ををどうPRすべきか整理できたので、<span class="bl_voice_ttl_strong hp_txtMarkerRed">大手企業とも提携の話が進んでいます。</span></h3>
                                    <p class="bl_voice_name">城山 珂奈見さん（Plié body fitness ディレクター/オーナー Studio Vivant代表）</p>
                                </div>
                                <!-- /.bl_voice_txt -->
                            </div>
                            <!-- /.bl_voice_header -->
                            <div class="bl_voice_body">
                                <p>まず、自分の何をPRすべきか、整理できたのは、私にとって大きな変化となりました。</p>
                                <p>初めての方とお会いした時に完結に成果や特徴をお伝えできるようになったことで、お仕事のご縁がグッと広がりました。</p>
                                <p>交流会などで、予期せず大手企業様と提携のお話が進むようにもなりました。(間も無くご一緒させていただくサービスがスタートします。)これまでのBtoCだけでなくBtoBへの展開の可能性を感じています。</p>
                                <p>それも、PR塾で自分自身や、自身の事業のPRすべき点を明確にしていけたからだと思います。又、自分からメディアへアプローチする手法を学び、その結果、<span class="hp_colorRed">講座期間中に新聞への記事掲載が実現しました。</span>写真付きで大きく取り上げていただき、記者さんとの繋がりも作ることができました。今後もこれぞ、というリリースの際は、こちらからしっかりと手を打ちに行きたいと思っています。</p>
                            </div>
                            <!-- /.bl_voice_body -->
                        </div>
                        <!-- /.bl_voice -->
                        <div class="bl_voice">
                            <div class="bl_voice_header">
                                <div class="bl_voice_imgWrapper">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/iizuka.png" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/iizuka.png 1x,
                            <?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/iizuka@2x.png 2x" alt="">
                                    <p class="bl_voice_label">Voice!</p>
                                </div>
                                <!-- /.bl_voice_imgWrapper -->
                                <div class="bl_voice_txt">
                                    <h3 class="bl_voice_ttl">年商がー年前の２〜３倍に。<span class="bl_voice_ttl_strong hp_txtMarkerRed">予想の４倍以上</span>の成果です。開業以来最悪だった売り上げと比較して、<span class="bl_voice_ttl_strong hp_txtMarkerRed">倍以上の売上げを記録するなど、PRの成果に驚いています。</span>短期間の告知でも3〜4倍の集客ができるノウハウを学べました！</h3>
                                    <p class="bl_voice_name">飯塚みゆきさん<br>(一度で違いを感じるブライダルエステ オーナーエステティシャン/サロンマネージャー(コンサルタント))</p>
                                </div>
                                <!-- /.bl_voice_txt -->
                            </div>
                            <!-- /.bl_voice_header -->
                            <div class="bl_voice_body">
                                <p>成果は<span class="hp_colorRed">予想の約4倍。月商も一年前の2～3倍に。</span>行動のマインドもPRの方法も手に入れた塾となりました。今後、自分がなりたい姿、やろうと思っていること、出来ることをもっと明確にすることができて、どういう順番で、どう進めるべきかをしっかり形にすることが出来ました。頭でかなり考えてからじゃないと行動できなかった私ですが凄く良い空気や応援や皆様の頑張りもあって、何とか苦手なりに行動し、自分との約束は塾の中で果たせた気がしています。郁ちゃんの質問会での、『行動してみないと修正点がわからないから、完璧に仕上る前に行動してみて。』という言葉を意識して動き、反省、修正、ブラッシュアップを考えることが出来ました。嫌な出来事で落ち込み、開業以来最悪の売上だった2017年2月と比較し、PR塾のため少し予約制限しつつもいそがしく倍の月商。何とか盛り返した2017年の3月と今月の売上を比較したら2.3倍くらいの月商！！PR塾中はブログの更新は半分以下に落ちてしまったのですが、売上や熱い温度感のお客様が増えました。郁ちゃんのヒントから行った告知では、<span class="hp_colorRed">思い立って6日しかない短期間での準備でしたが、想定の3～4倍の集客を達成しました。</span></p>
                            </div>
                            <!-- /.bl_voice_body -->
                        </div>
                        <!-- /.bl_voice -->
                        <div class="bl_voice">
                            <div class="bl_voice_header">
                                <div class="bl_voice_imgWrapper">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/sasaki-makiko.png" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/sasaki-makiko.png 1x,
                            <?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/sasaki-makiko@2x.png 2x" alt="">
                                    <p class="bl_voice_label">Voice!</p>
                                </div>
                                <!-- /.bl_voice_imgWrapper -->
                                <div class="bl_voice_txt">
                                    <h3 class="bl_voice_ttl">講座の中では学ぶだけでなくその場でやる、そして行動に移すという流れがワンセットになっているので、自分から行動できるようになりました。<span class="bl_voice_ttl_strong hp_txtMarkerRed">PR未経験の私でしたが、プロボノとしてプレスリリースとSNS運用を手伝うことに。</span>PRの良さをもっと知りたいとモチベーションも上がっています！</h3>
                                    <p class="bl_voice_name">佐々木真紀子さん（PRディレクター）</p>
                                </div>
                                <!-- /.bl_voice_txt -->
                            </div>
                            <!-- /.bl_voice_header -->
                            <div class="bl_voice_body">
                                <p>講座を通して、学ぶだけでなくその場でやる、そして行動に移すという流れがワンセットになっているので、とてもわかりやすく自分から行動できるようになりました。おかげで、PR未経験の状態から<span class="hp_colorRed">プレスリリースを書き、SNSの改善を提案することまで出来るように</span>なりました。今後はPRプロボノとして、プレスリリースとSNS運用のお手伝いをしたり、<span class="hp_colorRed">PRメインで知り合いの企業様とお仕事</span>をさせていただく予定です。PRの良さを知り、もっとやりたい！と思わせていただき本当にありがとうございました！</p>
                            </div>
                            <!-- /.bl_voice_body -->
                        </div>
                        <!-- /.bl_voice -->
                        <div class="bl_voice">
                            <div class="bl_voice_header">
                                <div class="bl_voice_imgWrapper">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/hujita.png" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/hujita.png 1x,
                            <?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/hujita@2x.png 2x" alt="">
                                    <p class="bl_voice_label">Voice!</p>
                                </div>
                                <!-- /.bl_voice_imgWrapper -->
                                <div class="bl_voice_txt">
                                    <h3 class="bl_voice_ttl">PR塾のおかげで<span class="bl_voice_ttl_strong hp_txtMarkerRed">レッスンの人数が20人から、40〜50人になり、地元新聞・ラジオテレビに出演することができ、売上も3倍にアップ</span>しました。<br>笹木さんや塾生のメンバーと出会えた事が、人生の宝になりました。</h3>
                                    <p class="bl_voice_name">藤田 亜由未さん（一般社団法人 日本ナチュラル美爪協会　代表理事）</p>
                                </div>
                                <!-- /.bl_voice_txt -->
                            </div>
                            <!-- /.bl_voice_header -->
                            <div class="bl_voice_body">
                                <p>新しく設立した協会のPRのために入塾しましたが、それ以上に今現在のサービスに焦点を当て、より具体的にお客様に届けるためのスキルを学ぶ事が出来ました。出会った頃、ジェルネイルをしていた郁ちゃんが、ももいろネイルを始めてくれたこと、塾生や、塾生のサービスを心から応援してくれる姿にとても感動しました。また、「郁ちゃんの在り方」そのもの自体が、これからチームを作っていく私にとって、とても学びが多く、参考にさせていただく事がたくさんありました。PR塾のおかげでレッスンの人数が<span class="hp_colorRed">20人から、40〜50人になり、地元新聞・ラジオテレビに出演することができ、売上も3倍にアップ</span>しました。笹木さんと出会った事、そして笹木さんの周りに集まる塾生のメンバーと出会えた事が、人生の宝になりました。</p>
                            </div>
                            <!-- /.bl_voice_body -->
                        </div>
                        <!-- /.bl_voice -->
                        <div class="bl_voice">
                            <div class="bl_voice_header">
                                <div class="bl_voice_imgWrapper">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/kuwako.png" srcset="<?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/kuwako.png 1x,
                            <?php echo get_template_directory_uri(); ?>/kobetupage/img/voice/kuwako@2x.png 2x" alt="">
                                    <p class="bl_voice_label">Voice!</p>
                                </div>
                                <!-- /.bl_voice_imgWrapper -->
                                <div class="bl_voice_txt">
                                    <h3 class="bl_voice_ttl">PR塾で学んだことをコツコツ反映していったら、お問い合わせが連日来るようになり、<span class="bl_voice_ttl_strong hp_txtMarkerRed">今までの７〜８倍に!</span>またPRプロデューサーの資格を取得したことをSNSで紹介すると、<span class="bl_voice_ttl_strong hp_txtMarkerRed">今まで響かなかった法人からもお申し込みがくるように</span>なりました。</h3>
                                    <p class="bl_voice_name">桑子和佳絵さん（一般社団法人Niccot Partners代表理事）</p>
                                </div>
                                <!-- /.bl_voice_txt -->
                            </div>
                            <!-- /.bl_voice_header -->
                            <div class="bl_voice_body">
                                <p>笹木さんが今まで培ってきたノウハウやコツ、技術や方法を惜しみなく提供してくれる講座だったので、これは遠慮してたら損だ！と思って全力参加できました。また、経営者としての姿勢や視点としても勉強になり、PRスキル以外の学びを得ることもできました。また、三木さんはメディア目線から、添削やフォローしてくれるという安心感も本当に大きかったです！講座を通じて事業の見直しや今後の体制づくりそのものを再構成する機会になり、事業の根幹が強くなりました。その結果、<span class="hp_colorRed">問い合わせが連日入るようになり、今までの7〜８倍</span>に。また、既存のお客様からこれもお願いできる？と依頼が増え、<span class="hp_colorRed">顧客との信頼関係がぐっと深まった</span>ことを実感します。そしてもう一つ大きかったのが、<span class="hp_colorRed">仲間が得られた</span>こと。お互い惜しみなくコーチしあえる仲間の存在が本当にありがたく、これは一生もののご縁だな、と感じています。さらに、この中から私の事業のPRのサポートをしてくれる仲間もえられたので、100人力です！</p>
                            </div>
                            <!-- /.bl_voice_body -->
                        </div>
                        <!-- /.bl_voice -->
                    </div>
                    <!-- /.bl_voiceWrapper -->
                </div>
                <!-- /.ly_contM -->
            </section>
            <!-- 声 終わり -->

            <!-- CTA2 -->
            <section class="bl_cta2">
                <div class="ly_contM">
                    <div class="bl_cta_inner bl_cta2_inner">
                        <form action="https://prjuku.com/p/r/CBAtKKHn" enctype="multipart/form-data" id="UserItemForm" class="myForm" method="post" accept-charset="utf-8">
                            <input type="hidden" name="_method" value="POST" />
                            <div class="ly_contS">
                                <p class="el_txtXl">【<span class="el_dotTxt el_dotTxt__red">PR塾へ興味がある方へ</span>】
                                </p>
                                <h2 class="bl_cta_ttl el_cta2_ttl">まずは<span class="el_ttl_strongS hp_colorRed">無料動画講座</span><br class="md_hidden">にご登録ください。
                                </h2>
                                <div class="bl_cta2_label">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/cat2-txt.png" class="pc" alt="今すぐ行動できる0円PR術。1時間講座*3本+特別動画1本">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/cat2-txt_sp.png" class="sp" alt="今すぐ行動できる0円PR術。1時間講座*3本+特別動画1本">
                                </div>
                                <div class="bl_cta2_img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/cta2-mov.png" class="pc" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/cta2-mov_sp.png" class="sp" alt="">
                                </div>
                                <p class="bl_cta2_subttl">
                                    < 登録後すぐに１本目の動画が届きます。>
                                </p>
                                <p class="bl_cta2_txt">
                                    無料動画講座のご視聴後に、<span class="underline">PR塾のご案内</span>をお送りします。
                                </p>
                                <div class="bl_cta2_inputWrap">
                                    <div class="bl_cta2_label">
                                        <label for="Usermail">メールアドレス</label>
                                    </div>
                                    <div class="bl_cta2_input">
                                        <input name="data[User][mail]" id="Usermail" value="" type="text" required="required" placeholder="メールアドレスをご入力ください。" />
                                    </div>
                                </div>
                            </div>
                            <div class="bl_cta_btn bl_cta2_btn">
                                <input type="submit" class="el_cta" value="無料動画講座から始める" />
                            </div>
                            <input type="hidden" id="server_url" value="https://prjuku.com/" />

                            <input type="hidden" name="data[User][referer_form_url]" value="" class="UserRefererFormUrl" />
                            <input type="hidden" name="data[User][referer_url]" value="" class="UserRefererUrl" />

                            <!-- ▼リファラ -->
                            <input type="hidden" name="data[User][referer_form_url]" value="" class="UserRefererFormUrl" />
                            <input type="hidden" name="data[User][referer_url]" value="" class="UserRefererUrl" />
                        </form>
                    </div>
                    <!-- /.bl_cta_inner -->
                </div>
                <!-- /.ly_contM -->
            </section>
            <!-- CTA2 終わり -->

            <section class="un_faq">
                <h2 class="el_lv2Ttl pc_mb90 sm_mb40">よくある<span class="el_lv2Ttl_strong">ご質問</span></h2>
                <div class="ly_contM">
                    <dl class="bl_faq">
                        <div class="bl_faq_item">
                            <dt class="bl_faq_q js_faq_q">
                                <span class="bl_faq_icon">Q</span>
                                <span class="bl_faq_q_txt">個別カウンセリングはどのように行いますか？</span>
                                <button type="button" class="bl_faq_btn js_faq_btn"></button>
                            </dt>
                            <dd class="bl_faq_a js_faq_a">
                                <span class="bl_faq_icon">A</span>
                                <div class="bl_faq_a_body">
                                    <p class="bl_faq_a_txt">ZOOMを利用して行います！ご予約頂いた日にZOOMのURLもお送り致します。また、個別カウンセリングの3日前・前日にもZOOMのURLをお送りするので、ぜひスケジュールにも入れておいてくださいね。</p>
                                </div>
                                <!-- /.bl_faq_a_body -->
                            </dd>
                        </div>
                        <!-- /.bl_faq_item -->
                        <div class="bl_faq_item">
                            <dt class="bl_faq_q js_faq_q">
                                <span class="bl_faq_icon">Q</span>
                                <span class="bl_faq_q_txt">ZOOMを使ったことがないのでうまくお話できるか不安なのですが、設定など難しいのでしょうか？</span>
                                <button type="button" class="bl_faq_btn js_faq_btn"></button>
                            </dt>
                            <dd class="bl_faq_a js_faq_a">
                                <span class="bl_faq_icon">A</span>
                                <div class="bl_faq_a_body">
                                    <p class="bl_faq_a_txt">ZOOMは弊社からURLをお送りしますのでそのURLをクリックしていただければ、すぐに通話を開始することができます。もし、うまくいかなくてもしっかりとサポートさせていただきますので安心してくださいね。</p>
                                </div>
                                <!-- /.bl_faq_a_body -->
                            </dd>
                        </div>
                        <!-- /.bl_faq_item -->
                        <div class="bl_faq_item">
                            <dt class="bl_faq_q js_faq_q">
                                <span class="bl_faq_icon">Q</span>
                                <span class="bl_faq_q_txt">個別カウンセリングはどのくらいのお時間で行うのでしょうか？</span>
                                <button type="button" class="bl_faq_btn js_faq_btn"></button>
                            </dt>
                            <dd class="bl_faq_a js_faq_a">
                                <span class="bl_faq_icon">A</span>
                                <div class="bl_faq_a_body">
                                    <p class="bl_faq_a_txt">約90分のお時間でOJT式PR塾の特徴についてやご質問にお答えしております！しっかり、疑問やご質問にお答えしたいので、お時間の取れる日程でご予約くださいね。</p>
                                </div>
                                <!-- /.bl_faq_a_body -->
                            </dd>
                        </div>
                        <!-- /.bl_faq_item -->
                        <div class="bl_faq_item">
                            <dt class="bl_faq_q js_faq_q">
                                <span class="bl_faq_icon">Q</span>
                                <span class="bl_faq_q_txt">個別カウンセリングでは、何か資料など頂けるのでしょうか？</span>
                                <button type="button" class="bl_faq_btn js_faq_btn"></button>
                            </dt>
                            <dd class="bl_faq_a js_faq_a">
                                <span class="bl_faq_icon">A</span>
                                <div class="bl_faq_a_body">
                                    <p class="bl_faq_a_txt">資料のお渡しはしておりません。そのため、当日、しっかりお時間を使っていただき、確認したいことなどを担当者にお伝えください。</p>
                                </div>
                                <!-- /.bl_faq_a_body -->
                            </dd>
                        </div>
                        <!-- /.bl_faq_item -->
                        <div class="bl_faq_item">
                            <dt class="bl_faq_q js_faq_q">
                                <span class="bl_faq_icon">Q</span>
                                <span class="bl_faq_q_txt">個別カウンセリングで強引なセールスをされるのではないかと不安なのです</span>
                                <button type="button" class="bl_faq_btn js_faq_btn"></button>
                            </dt>
                            <dd class="bl_faq_a js_faq_a">
                                <span class="bl_faq_icon">A</span>
                                <div class="bl_faq_a_body">
                                    <p class="bl_faq_a_txt">仮に強引にセールスをして無理やりお申し込みいただいたとしても、ご本人にやる気がなければ結果は出ませんので、強引にご案内することに何のメリットもありません。カウンセラーもお一人お一人に全力で向き合うため、かなりのエネルギーをこの仕事に注いでいます。そのため、逆にお客様が講座を受けたいと言ってくださったとしても、こちらで成果を保証できないような状態であれば、こちらからお断りさせていただく場合もございますのでご了承ください。</p>
                                </div>
                                <!-- /.bl_faq_a_body -->
                            </dd>
                        </div>
                        <!-- /.bl_faq_item -->
                        <div class="bl_faq_item">
                            <dt class="bl_faq_q js_faq_q">
                                <span class="bl_faq_icon">Q</span>
                                <span class="bl_faq_q_txt">個別カウンセリングではPRの講義をしてくれるのでしょうか？</span>
                                <button type="button" class="bl_faq_btn js_faq_btn"></button>
                            </dt>
                            <dd class="bl_faq_a js_faq_a">
                                <span class="bl_faq_icon">A</span>
                                <div class="bl_faq_a_body">
                                    <p class="bl_faq_a_txt">こちらの個別カウンセリングでは、「どんな講座の流れか詳細を知りたい」そんな方のためのお時間になります。そのため、PRの具体的なご相談の場ではなく、また講義も行っておりませんのでご了承ください。</p>
                                </div>
                                <!-- /.bl_faq_a_body -->
                            </dd>
                        </div>
                        <!-- /.bl_faq_item -->
                        <div class="bl_faq_item">
                            <dt class="bl_faq_q js_faq_q">
                                <span class="bl_faq_icon">Q</span>
                                <span class="bl_faq_q_txt">PRに携わる事が未経験ですが、参加しても大丈夫でしょうか？</span>
                                <button type="button" class="bl_faq_btn js_faq_btn"></button>
                            </dt>
                            <dd class="bl_faq_a js_faq_a">
                                <span class="bl_faq_icon">A</span>
                                <div class="bl_faq_a_body">
                                    <p class="bl_faq_a_txt">もちろん、大丈夫です。未経験の方でもステップをふんでいただきながら、知識を身につけて頂きます。またアウトプットの場も設けているので、すぐに身につきやすい環境を整えています。実際に活動がスタートした場合でも、ご受講中の場合は、例えば、プレスリリース添削やメディアリレーションのコツなどもサポートいたします。</p>
                                </div>
                                <!-- /.bl_faq_a_body -->
                            </dd>
                        </div>
                        <!-- /.bl_faq_item -->
                        <div class="bl_faq_item">
                            <dt class="bl_faq_q js_faq_q">
                                <span class="bl_faq_icon">Q</span>
                                <span class="bl_faq_q_txt">どのような方におすすめですか？</span>
                                <button type="button" class="bl_faq_btn js_faq_btn"></button>
                            </dt>
                            <dd class="bl_faq_a js_faq_a">
                                <span class="bl_faq_icon">A</span>
                                <div class="bl_faq_a_body">
                                    <p class="bl_faq_a_txt">過去PR塾でもこうした方々にご参加頂き、実際に結果を出されてきました。<br>様々な方にお役立ちできると思っております。</p>
                                    <ul>
                                        <li>未経験だけど周りに喜んでもらうPRを身につけたい方</li>
                                        <li>認知、売上拡大したい起業家、経営者の方</li>
                                        <li>広報PR、マーケティング、プロモーション職の方</li>
                                        <li>独立、転職等、キャリアチェンジしたい方</li>
                                        <li>自社サービスを更に認知させたい技術者、商品開発者、 営業、様々な職種の方</li>
                                        <li>採用を強化したい人事職の方</li>
                                    </ul>
                                </div>
                                <!-- /.bl_faq_a_body -->
                            </dd>
                        </div>
                        <!-- /.bl_faq_item -->
                        <div class="bl_faq_item">
                            <dt class="bl_faq_q js_faq_q">
                                <span class="bl_faq_icon">Q</span>
                                <span class="bl_faq_q_txt">企業研修として社員を参加させることはできますか？</span>
                                <button type="button" class="bl_faq_btn js_faq_btn"></button>
                            </dt>
                            <dd class="bl_faq_a js_faq_a">
                                <span class="bl_faq_icon">A</span>
                                <div class="bl_faq_a_body">
                                    <p class="bl_faq_a_txt">企業様の社内研修としてもご活用いただけます。詳しくはオンライン説明会でご相談ください。</p>
                                </div>
                                <!-- /.bl_faq_a_body -->
                            </dd>
                        </div>
                        <!-- /.bl_faq_item -->
                        <div class="bl_faq_item">
                            <dt class="bl_faq_q js_faq_q">
                                <span class="bl_faq_icon">Q</span>
                                <span class="bl_faq_q_txt">地方に住んでいるのですが、受講に問題ないでしょうか？</span>
                                <button type="button" class="bl_faq_btn js_faq_btn"></button>
                            </dt>
                            <dd class="bl_faq_a js_faq_a">
                                <span class="bl_faq_icon">A</span>
                                <div class="bl_faq_a_body">
                                    <p class="bl_faq_a_txt">もちろん、大丈夫です。講座は全てオンラインで行うので、住む場所に関係なく、ご受講いただけます。</p>
                                </div>
                                <!-- /.bl_faq_a_body -->
                            </dd>
                        </div>
                        <!-- /.bl_faq_item -->
                        <div class="bl_faq_item">
                            <dt class="bl_faq_q js_faq_q">
                                <span class="bl_faq_icon">Q</span>
                                <span class="bl_faq_q_txt">普段仕事をしているので、参加できない場合もあります</span>
                                <button type="button" class="bl_faq_btn js_faq_btn"></button>
                            </dt>
                            <dd class="bl_faq_a js_faq_a">
                                <span class="bl_faq_icon">A</span>
                                <div class="bl_faq_a_body">
                                    <p class="bl_faq_a_txt">リアルタイムでご受講頂くZOOM講座は録画もしておりますので、何度も見返して頂くことが可能です。また、Slackグループで質問し放題になりますので、ご不明な点などございます場合は、ぜひご活用くださいね。</p>
                                </div>
                                <!-- /.bl_faq_a_body -->
                            </dd>
                        </div>
                        <!-- /.bl_faq_item -->
                    </dl>
                    <!-- /.bl_faq -->
                </div>
                <!-- /.ly_contM -->
            </section>

            <!-- CTA2 -->
            <section class="bl_cta2">
                <div class="ly_contM">
                    <div class="bl_cta_inner bl_cta2_inner">
                        <form action="https://prjuku.com/p/r/CBAtKKHn" enctype="multipart/form-data" id="UserItemForm" class="myForm" method="post" accept-charset="utf-8">
                            <input type="hidden" name="_method" value="POST" />
                            <div class="ly_contS">
                                <p class="el_txtXl">【<span class="el_dotTxt el_dotTxt__red">PR塾へ興味がある方へ</span>】
                                </p>
                                <h2 class="bl_cta_ttl el_cta2_ttl">まずは<span class="el_ttl_strongS hp_colorRed">無料動画講座</span><br class="md_hidden">にご登録ください。
                                </h2>
                                <div class="bl_cta2_label">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/cat2-txt.png" class="pc" alt="今すぐ行動できる0円PR術。1時間講座*3本+特別動画1本">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/cat2-txt_sp.png" class="sp" alt="今すぐ行動できる0円PR術。1時間講座*3本+特別動画1本">
                                </div>
                                <div class="bl_cta2_img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/cta2-mov.png" class="pc" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/kobetupage/img/cta2-mov_sp.png" class="sp" alt="">
                                </div>
                                <p class="bl_cta2_subttl">
                                    < 登録後すぐに１本目の動画が届きます。>
                                </p>
                                <p class="bl_cta2_txt">
                                    無料動画講座のご視聴後に、<span class="underline">PR塾のご案内</span>をお送りします。
                                </p>
                                <div class="bl_cta2_inputWrap">
                                    <div class="bl_cta2_label">
                                        <label for="Usermail">メールアドレス</label>
                                    </div>
                                    <div class="bl_cta2_input">
                                        <input name="data[User][mail]" id="Usermail" value="" type="text" required="required" placeholder="メールアドレスをご入力ください。" />
                                    </div>
                                </div>
                            </div>
                            <div class="bl_cta_btn bl_cta2_btn">
                                <input type="submit" class="el_cta" value="無料動画講座から始める" />
                            </div>
                            <input type="hidden" id="server_url" value="https://prjuku.com/" />

                            <input type="hidden" name="data[User][referer_form_url]" value="" class="UserRefererFormUrl" />
                            <input type="hidden" name="data[User][referer_url]" value="" class="UserRefererUrl" />

                            <!-- ▼リファラ -->
                            <input type="hidden" name="data[User][referer_form_url]" value="" class="UserRefererFormUrl" />
                            <input type="hidden" name="data[User][referer_url]" value="" class="UserRefererUrl" />
                        </form>
                    </div>
                    <!-- /.bl_cta_inner -->
                </div>
                <!-- /.ly_contM -->
            </section>
            <!-- CTA2 終わり -->

        </article>
    </main>


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

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <!-- jquery.easingファイル読み込み -->
    <script src="<?php echo get_template_directory_uri(); ?>/kobetupage/js/jquery.easing.1.3.js"></script>
    <!-- object-fit-images //IE対応 object-fit -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/object-fit-images/3.2.4/ofi.js"></script>
    <script>
        objectFitImages();
    </script>
    <!-- picturefill.min.js //IE対応 pictureタグ -->
    <script src="<?php echo get_template_directory_uri(); ?>/kobetupage/js/picturefill.min.js" async></script>
    <!-- slick -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <!-- main.js -->
    <script src="<?php echo get_template_directory_uri(); ?>/kobetupage/js/main.js"></script>
</body>

</html>