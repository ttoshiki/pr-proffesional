<?php
get_header();
?>
<link rel="stylesheet" type="text/css" media="only screen and (max-width: 668px)"
    href="<?php echo content_url() ?>/themes/association/css_common/css/common_sp.css" />
<link rel="stylesheet" type="text/css" media="only screen and (min-width: 669px), print"
    href="<?php echo content_url() ?>/themes/association/css_common/css/common.css" />
<link rel="stylesheet" type="text/css" aria-media="only screen and (max-width: 668px)"
    href="<?php echo content_url() ?>/themes/association/css/styles_sp.css" />
<link rel="stylesheet" type="text/css" media="only screen and (min-width: 669px), print"
    href="<?php echo content_url() ?>/themes/association/css/styles.css" />
<link rel="stylesheet" type="text/css" href="<?php echo content_url() ?>/themes/association/css/style02.css" />
<link rel="stylesheet" type="text/css" media="only screen and (max-width: 668px)"
    href="<?php echo content_url() ?>/themes/association/css/style02_sp.css" />

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Overpass:400,700" rel="stylesheet">
<link rel="shortcut icon" href="/favicon.ico">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $('area[href^=#]').click(function () {
            var speed = 10;
            var href = $(this).attr("href");
            var target = $(href == "#" || href == "" ? 'html' : href);
            var position = target.offset().top;
            $("html, body").animate({ scrollTop: position }, speed, "swing");
            return false;
        });
    });
</script>
<div class="pr-learn">
    <ul class="content-area">
        <div class="fixed-wrapper">
            <a href="#appli-area"><button class="fixed-btn">15期講座申込</button></a>
            <a href="#site-main"><button class="fixed-btn">トップへ</button></a>
        </div>
        <main class="site-main" id="site-main">
            <section class="main-visual">
                <div class="siteMain__catchCopyBand sp">
                    <h1 class="siteMain__catchCopy">結果につながるPR・SNSのノウハウを<br /><em
                            class="siteMain__emphasis">3</em>ヶ月で完全習得</h1>
                </div>
                <img src="<?php echo content_url() ?>/themes/association/assets/img/pr-learn_main_visual.jpg"
                    srcset="<?php echo content_url() ?>/themes/association/assets/img/pr-learn_main_visual@2x.jpg"
                    alt="" class="img pc">
                <img src="<?php echo content_url() ?>/themes/association/assets/img/pr-learn_main_visual_sp.jpg" alt=""
                    class="img sp">
                <div class="siteMain__band">
                    <h2 class="siteMain__heading">&lt;協会になり、さらにバージョンアップ&gt;</h2>
                    <p class="siteMain__day">開催日：4月16日、5月7日、5月27日、6月１7日、7月8日</p>
                </div>
                <img src="<?php echo content_url() ?>/themes/association/assets/img/pr_learn_mainvisual_bookInfo.png"
                    alt="PR塾が１冊の本になり好評発売中！" class="pr-learn__mainVisualBookInfo">
            </section>
            <section class="sec conversion-area">
                <h1 class="conversionArea__heading">年に2回しかない、毎回満席の<br class="sp">プレミアムなPR塾 15期募集開始</h1>
                <?php get_template_part('conversionArea'); ?>
                <h2 class="onlineMovieHeading">>> オンライン講座</h2>
                <p class="onlineMovieParagraph">笹木郁乃による<a data-video-id="owCrZYATdyc" class="youtubeModalOpen onlineMovieLink">説明動画</a>はこちら</p>
                <div class="notice-wrapper">
                    <p class="schedule-link"><a href="#date" class="link-text">>> 15期開催日程および新型コロナウイルスにおける対策はこちら</a></p>
                    <!-- <p><a href="#okane" class="link-text">>> 早期割引お申し込み詳細はこちら</a></p> -->
                </div>
            </section>
            <div class="pr-learn__onlineBanner">
                <p class="pr-learn__onlineBannerParagraph"><strong class="pr-learn__onlineBannerStrong">NEW!</strong>リアルタイムでオンラインで学べる<br class="sp">在宅PR塾はこちら</p>
                <span class="pr-learn__ctaBannerWrapper">
                    <a href="//pr-professional.jp/online/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/online_banner.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/online_banner@2x.png" alt="在宅PR塾バナー" class="pr-learn__ctaBanner pc"></a>
                    <a href="//pr-professional.jp/online/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/online_banner-sp.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/online_banner-sp@2x.png" alt="在宅PR塾バナー" class="pr-learn__ctaBanner sp"></a>
                </span>
            </div>
            <section class="fullThanks">
                <h1 class="fullThanks__heading">PR塾 1期〜14期<b class="fullThanks__enclosure">満員御礼</b></h1>
                <img src="<?php echo content_url() ?>/themes/association/assets/img/fullThanks.jpg" alt="">
            </section>
            <section class="voicetop">
                <p class="first">PR塾は1期〜14期まで開催し、<br class="sp-10th" />
                    <span style="color: #b91617; font-size: 1.3em;font-weight: 600;">330名</span>の方々に<br
                        class="sp-10th" />ご受講いただきました。
                </p>
                <img src="<?php echo content_url() ?>/themes/association/assets/img/icon_movie.png" alt=""
                    class="pr-learn__iconMovie">
                <h1 class="pr-learn__digestMovieHeading">３分で分かるPR塾の魅力</h1>
                <div class="youtube">
                    <a class="youtubeModalOpen youtubeThumbnail" id="appeal_of_prYTPlay" data-video-id="EG2yIGicr2A">
                        <img src="<?php echo content_url() ?>/themes/association/assets/img/appeal_of_PR_school.jpg" alt="3分でわかるPR塾の魅力_Youtubeサムネイル" class="pr-learn__thumbnail-large">
                        <?php echo file_get_contents(get_template_directory() . '/assets/img/logo_youtube.svg'); ?>
                    </a>
                    <div id="appeal_of_pr" class="mobilePlayer"></div>
                </div>
                <div class="voi5">
                    <p class="voi"><img
                            src="<?php echo content_url() ?>/themes/association/images/icon_check.png">大手新聞社、webメディア、専門誌で取り上げられ取材や求人依頼が殺到！
                    </p>
                    <p class="voi"><img
                            src="<?php echo content_url() ?>/themes/association/images/icon_check.png">Yahoo!ニュースなど多数メディア掲載、夢であった書籍出版も実現！
                    </p>
                    <p class="voi"><img
                            src="<?php echo content_url() ?>/themes/association/images/icon_check.png">行政との活動、企業PR、テレビ取材が次々に決定！
                    </p>
                    <p class="voi"><img
                            src="<?php echo content_url() ?>/themes/association/images/icon_check.png">PR事業を新たに始めて、法人3社との契約が決まりました！
                    </p>
                    <p class="voi" style="margin-bottom: 0"><img
                            src="<?php echo content_url() ?>/themes/association/images/icon_check.png">雑誌取材、ラジオ出演、書籍出版決定などメディア掲載で、月商は5倍以上！
                    </p>
                </div>
            </section>
            <section class="sec achievement">
                <div class="achievement-wrapper">
                    <div class="youtube">
                        <a class="youtubeModalOpen youtubeThumbnail" id="kizaki_yukoYTPlay" data-video-id="rruHUduCAQo" width="560" height="315">
                            <img src="<?php echo content_url() ?>/themes/association/assets/img/thumbnail_kizaki_yuko.jpg" alt="ふじや衣裳 木崎祐子さん サムネイル" class="pr-learn__voiceYoutubeThumbnail">
                            <?php echo file_get_contents(get_template_directory() . '/assets/img/logo_youtube.svg'); ?>
                        </a>
                        <div id="kizaki_yukoMovie" class="mobilePlayer"></div>
                    </div>
                    <div class="text-wrapper">
                        <p class="text">
                            PR未経験から朝日新聞一面はじめ、<br>
                            <em class="em">新聞２誌掲載ゲット！</em><br />
                            更に大手鉄道会社からの依頼も！
                        </p>
                        <button onclick="location.href='/post_voice#kizaki_yuko'" class="btn">ロングインタビューはこちら</button>
                    </div>
                </div>
                <div class="achievement-wrapper">
                    <div class="youtube">
                        <a class="youtubeModalOpen youtubeThumbnail" id="ueda_yuichiYTPlay" data-video-id="npMqn9Zowkc">
                            <img src="<?php echo content_url() ?>/themes/association/assets/img/thumbnail_ueda_yuichi.jpg" alt="株式会社プランティア代表 植田雄一さん サムネイル" class="pr-learn__voiceYoutubeThumbnail">
                            <?php echo file_get_contents(get_template_directory() . '/assets/img/logo_youtube.svg'); ?>
                        </a>
                        <div id="ueda_yuichiMovie" class="mobilePlayer"></div>
                    </div>
                    <div class="text-wrapper">
                        <p class="text">
                            PR塾の学びでPR事業を立ち上げ！<br>
                            新聞３誌掲載で、<br>
                            <em class="em">1日50件問合わせ殺到！</em>
                        </p>
                        <button onclick="location.href='/post_voice#ueda_yuichi'" class="btn">ロングインタビューはこちら</button>
                    </div>
                </div>
                <div class="achievement-wrapper">
                    <div class="youtube">
                        <a class="youtubeModalOpen youtubeThumbnail" id="tango_kayoYTPlay" data-video-id="lHubtnnsm2A">
                            <img src="<?php echo content_url() ?>/themes/association/assets/img/thumbnail_tango_kayo.jpg" alt="株式会社 丹後 代表取締役 丹後佳代さん サムネイル" class="pr-learn__voiceYoutubeThumbnail">
                            <?php echo file_get_contents(get_template_directory() . '/assets/img/logo_youtube.svg'); ?>
                        </a>
                        <div id="tango_kayoMovie" class="mobilePlayer"></div>
                    </div>
                    <div class="text-wrapper">
                        <p class="text">
                            <em class="em">
                                愛媛新聞掲載で、<br />
                                地域の認知・信頼UP！
                            </em><br>
                            雑誌VERY掲載や行政の講演依頼、<br />
                            日本橋三越本店で常設販売開始！
                        </p>
                        <button onclick="location.href='/post_voice'" class="btn">ロングインタビューはこちら</button>
                    </div>
                </div>
                <div class="achievement-wrapper">
                    <div class="youtube">
                        <a class="youtubeModalOpen youtubeThumbnail" id="ando_shinnosukeYTPlay" data-video-id="T95egC5uCog">
                            <img src="<?php echo content_url() ?>/themes/association/assets/img/thumbnail_ando_shinnosuke.jpg" alt="株式会社 サクセスアーキテクト　代表取締役　 安藤新之助さん サムネイル" class="pr-learn__voiceYoutubeThumbnail">
                            <?php echo file_get_contents(get_template_directory() . '/assets/img/logo_youtube.svg'); ?>
                        </a>
                        <div id="ando_shinnosukeMovie" class="mobilePlayer"></div>
                    </div>
                    <div class="text-wrapper">
                        <p class="text">
                            出版して自分のブランドを<br>
                            数段階上にステージアップへ。 <br>
                            <em class="em">PR塾で企画書作成し即出版決定！</em>
                        </p>
                        <button onclick="location.href='/post_voice#ando_shinnosuke'" class="btn">ロングインタビューはこちら</button>
                    </div>
                </div>
            </section>
            <?php get_template_part('voiceBanner'); ?>
            <section class="pr-learn__courseStyle">
                <img class="img90" src="<?php echo content_url() ?>/themes/association/assets/img/course_style.jpg">
                <h1 class="pr-learn__courseStyleHeading">
                    < 受講生の声>
                </h1>
                <ul>
                    <li class="pr-learn__courseStyleVoice">
                        <p class="pr-learn__courseStyleSpeechBubble">
                            電話練習、メディアリサーチ練習、プレスリリース完成、など、<br class="pc" />
                            講座中にまさかの全部一緒に実践できるので、<br class="pc" />
                            いざ本番の時に自信を持ってPRでき、それが結果に繋がりました！
                        </p>
                        <span class="pr-learn__courseStyleTriangle"></span>
                        <img src="<?php echo content_url() ?>/themes/association/assets/img/icon_person-silhouette.svg"
                            alt="" class="pr-learn__courseStyleIcon">
                    </li>
                    <li class="pr-learn__courseStyleVoice">
                        <p class="pr-learn__courseStyleSpeechBubble">
                            宿題がないから嬉しい！
                        </p>
                        <span class="pr-learn__courseStyleTriangle"></span>
                        <img src="<?php echo content_url() ?>/themes/association/assets/img/icon_person-silhouette.svg"
                            alt="" class="pr-learn__courseStyleIcon">
                    </li>
                    <li class="pr-learn__courseStyleVoice">
                        <p class="pr-learn__courseStyleSpeechBubble">
                            講義が終わると、すぐメディアへPRできる状態に準備ができているから、<br class="pc" />
                            <span><strong>忙しい私にぴったり</strong>でした！</span>
                        </p>
                        <span class="pr-learn__courseStyleTriangle"></span>
                        <img src="<?php echo content_url() ?>/themes/association/assets/img/icon_person-silhouette.svg"
                            alt="" class="pr-learn__courseStyleIcon">
                    </li>
                </ul>
            </section>
            <section>
                <p class="tit-skill">
                    <img class="sp-10th img90" src="<?php echo content_url() ?>/uploads/2019/07/tit_skill_sp.png"
                        alt="選ばれるあなたになる4つのスキル">
                    <img class="pc-10th" src="<?php echo content_url() ?>/uploads/2019/07/tit_skill_pc.png"
                        alt="選ばれるあなたになる4つのスキル"></p>
                <p class="pic-main">
                    <img src="<?php echo content_url() ?>/uploads/2019/07/pr_learn_skill.png" alt="PR塾で得られる成果">
                </p>
                <div class="list-merit">
                    <ul class="pc-10th">
                        <li class="clear">
                            <p class="pic-merit-li row2"><span>1</span>
                                <br />効果的な
                                <br />PR設計</p>
                            <div class="txt-merit-li">
                                <h2>売れる・選ばれる、あなただけのPR訴求内容の設計</h2>
                                <p>「伝える」PR力を手に入れる前に、「人の心を動かす」ための「伝えるPR内容」を完成させる必要があります。最初に、あなたが伝えるべきPR内容を全て完成させて頂きます。学ぶだけではなく、具体的に、PR訴求内容として落とし込むまでを一緒に設計していきます。
                                </p>
                            </div>
                        </li>
                        <li class="clear">
                            <p class="pic-merit-li"><span>2</span>
                                <br />SNS-PR</p>
                            <div class="txt-merit-li">
                                <h2>多くの人の心を動かし、ビジネスに活かすSNS-PR</h2>
                                <p>年々増え続けるSNSユーザー。今や、SNSを使ったPRは欠かすことはできません。SNSにより、世間も法人企業もメディアの心も動かせます。具体的なファンの増やし方、投稿戦略、集客戦略など、ビジネスの可能性を最大化するSNS-PRの方法を学び、実際に活用して頂きます。
                                </p>
                            </div>
                        </li>
                        <li class="clear">
                            <p class="pic-merit-li"><span>3</span>
                                <br />メディアPR</p>
                            <div class="txt-merit-li">
                                <h2>影響力のあるマスメディアを味方にするメディアPRをマスター</h2>
                                <p>年商1億円以上を目指す個人事業主、企業様には、特にマスメディアを味方につけた信頼と影響力の大きいメディアPRを推奨しています。認知の無いサービスをメディアに取り上げてもらうテクニック、アプローチ法、リリースの具体的な書き方をマスター頂き、自らが自由に翌日からメディアPRできる力を身につけて頂きます。
                                </p>
                            </div>
                        </li>
                        <li class="clear">
                            <p class="pic-merit-li"><span>4</span><br />出版PR</p>
                            <div class="txt-merit-li">
                                <h2>著者としての社会的地位を確立しステージアップできる出版PR</h2>
                                <p>更なるステージアップを目指す経営者、個人事業主様には商業出版に向けて、企画書作成から送付、編集者へのプレゼン資料作成まで、出版PRに必要な全てのノウハウをご提供。SNSでは届かない層に認知を広げ、深めるとともに著者としての社会的地位を確立。これまでよりワンランク上の仕事、人脈につながり、クライアントからの信頼も更に深まります。
                                </p>
                            </div>
                        </li>
                        <li class="clear">
                            <p class="pic-merit-li"><span>5</span><br />法人PR•企画書</p>
                            <div class="txt-merit-li">
                                <h2>ビジネスチャンスを広げる、法人PRノウハウ</h2>
                                <p>法人のお客様とのビジネスを実現するためには、法人向けに最適化されたPRノウハウが必要です。ターゲット企業の選び方、アプローチの仕方、企画提案書の作り方、ビジネスチャンスのつかみ方まで、実例を交えた具体的な方法をお伝えし、すぐに行政・大学・法人へのアプローチができるようになって頂きます。
                                </p>
                            </div>
                        </li>
                    </ul>
                    <ul class="sp-10th merit-li-sp">
                        <li><img src="<?php echo content_url() ?>/themes/association/images/10th/pic_merit_01.jpg"
                                alt="効果的なPR設計"></li>
                        <li><img src="<?php echo content_url() ?>/themes/association/images/10th/pic_merit_02.jpg"
                                alt="SNS-PR"></li>
                        <li><img src="<?php echo content_url() ?>/uploads/2019/07/pic_merit_03.png" alt="法人-PR"></li>
                        <li><img src="<?php echo content_url() ?>/uploads/2019/07/pic_merit_04.png" alt="メディア-PR"></li>
                        <li><img src="<?php echo content_url() ?>/uploads/2019/07/pic_merit_05.png" alt="メディア-PR"></li>
                    </ul>
                </div>
                <div class="renew img90">
                    <img src="<?php echo content_url() ?>/uploads/2019/07/taisyo.png" class="target-user">
                </div>
            </section>
            <section>
                <div class="bg-chara">
                    <h2 class="tit-chara"><img class="sp-10th img90"
                            src="<?php echo content_url() ?>/themes/association/images/10th/5title_sp.png"
                            alt="PRを集中してマスターできる5つの特徴"><img class="pc-10th"
                            src="<?php echo content_url() ?>/themes/association/images/10th/images/5title.png"
                            alt="PRを集中してマスターできる5つの特徴"></h2>
                    <ul class="clear">
                        <li>
                            <p class="num-circle"><img
                                    src="<?php echo content_url() ?>/themes/association/images/10th/images/t1.jpg"></p>
                            <p class="txt-chara">3ヶ月の短期間で、 ビジネスに必要な全てのPR戦略を学びます。即戦力としてすぐに活かせる、再現性の高い、効果的な PRスキルが身につきます。
                            </p>
                        </li>
                        <li>
                            <p class="num-circle"><img
                                    src="<?php echo content_url() ?>/themes/association/images/10th/images/t2.jpg"></p>
                            <p class="txt-chara">
                                惜しみなく情報がつまった全300ページ以上のPRノウハウが詰まった最新テキスト付き。(毎回大幅リニューアル！)<br class="sp-10th" />
                                何度でも繰り返し使える、事業の財産となるPRノウハウが手に入ります。
                            </p>
                        </li>
                        <li>
                            <p class="num-circle"><img
                                    src="<?php echo content_url() ?>/themes/association/images/10th/images/t3.jpg"></p>
                            <p class="txt-chara">
                                講座終了後は、毎回笹木郁乃との個別コンサル（一人15分）を開催。方向性やPR戦略を、PR経験豊富な笹木郁乃に直接個別に相談できます。方向性が固まり、泣く人も続出。</p>
                        </li>
                        <li>
                            <p class="num-circle"><img
                                    src="<?php echo content_url() ?>/themes/association/images/10th/images/t4.jpg"></p>
                            <p class="txt-chara">当日の講座は動画収録を行い、後日受講生に配布します。
                                動画を繰り返し視聴し、復習することで、PRノウハウを確実に落とし込むことができます。
                            </p>
                        </li>
                    </ul>
                    <div class="t5">
                        <p><img class="sp-10th num-circle"
                                src="<?php echo content_url() ?>/uploads/2019/07/t5_sp.png"><img class="pc-10th"
                                src="<?php echo content_url() ?>/uploads/2019/07/t5.png"></p>
                        <p class="txt-chara">
                            困ったときはいつでもオンラインで質問可能。合計3ヶ月間の密着サポートで徹底的に疑問・不安を解消します。笹木郁乃が3ヶ月間、講座生のメンターとして二人三脚いたします。</p>
                    </div>
                    <div class="t5img">
                        <img src="<?php echo content_url() ?>/uploads/2019/07/photo_t5.png">
                    </div>
                    <div class="text2">
                        <p class="copy">＼ 受講生から絶賛の嵐！ ／</p>
                        <p class="copy2">PRノウハウが詰まった<br class="sp">総ページ数 <span
                                style="font-size: 1.4em">485</span>ページのテキスト
                        </p>
                        <p class="mokuzi">PR塾 過去テキストの目次例</p>
                        <p class="ho">PR塾15期テキストは、より結果が出やすいように<br class="sp">ブラッシュアップされる予定のため、<br
                                class="sp">ページ内容が一部変わってきます。<br class="sp">ご期待ください。</p>
                        <div class="flex">
                            <div class="flexc"><img
                                    src="<?php echo content_url() ?>/themes/association/images/text1.png">
                            </div>
                            <div class="flexc"><img
                                    src="<?php echo content_url() ?>/themes/association/images/text2.png">
                            </div>
                            <div class="flexc"><img
                                    src="<?php echo content_url() ?>/themes/association/images/text3.png">
                            </div>
                            <div class="flexc"><img
                                    src="<?php echo content_url() ?>/themes/association/images/text4.png">
                            </div>
                        </div>
                    </div>
                </div>
                <h2 class="onlineMovieHeading onlineLecture">>> オンライン講座</h2>
                <p class="onlineMovieParagraph onlineLecture">笹木郁乃による<a data-video-id="owCrZYATdyc" class="youtubeModalOpen youtubeThumbnailText onlineMovieLink onlineLecture">説明動画</a>はこちら</p>
                <div class="t5img">
                    <img src="<?php echo content_url() ?>/uploads/2019/07/online_img.png">
                </div>
                <div class="ch">
                    <p>※ 講義動画は、講座終了後も含め、<br class="sp">いつでも自由にご視聴いただけます。</p>
                </div>
                <div class="t5img" style="margin-bottom: 100px">
                    <a href="#online"><img
                            src="<?php echo content_url() ?>/themes/association/images/10th/images/btn_online.png"></a>
                </div>
            </section>
            <div class="concept_back">
                <div class="concept-10th mb130">
                    <h2 class="top-concept">3ヶ月の短期間で<span>、</span>即戦力として<br class="sp-10th" />すぐに活かせる<br
                            class="pc-10th" />再現性の高い<span>、</span><br class="sp-10th" />効果的なPRスキルが身につきます。</h2>
                    <div class="clear area-concept">
                        <div class="para-area01 l-height18">
                            <p class="mb30">あなたは、今いる世界に満足していますか？
                                <br>届けたい商品があるのに、実現したい想いがあるのに、
                                <br>限られた範囲から抜け出すことができずに、
                                <br>もどかしさを感じていませんか？</p>
                            <p class="mb30">あなたにも、あなたの事業にも、
                                <br>今より更に活躍していける、世の中に貢献していける
                                <br>まだ見ぬ可能性が眠っています。</p>
                            <p class="mb30 bg-skyblue01">その可能性を開くのが<span>「PR力」</span>です。</p>
                                                       <p class="mb30">
                                大手新聞社、webメディア、専門誌で取り上げられたり、<br>有名企業からコラボのオファーが舞い込んだり、<br>書籍の商業出版が決まり、書籍ランキング上位入りしたり、<br>PR自体が事業となり、依頼を受けるようになったり・・・
                            </p>
                            <p class="mb10">これらは、特別な人だから実現したのではありません。</p>
                            <p class="bg-skyblue02">全て<span>「再現性の高いPRノウハウ」</span>を実践した結果、</p>
                            <p>信頼と大きな認知が築かれ、自然と導き出された成果です。</p>
                            <p class="mb30">
                                あなたの持つ、素晴らしいサービスを
                                <br>広く世の中に届けるために。
                            </p>
                            <p class="bg-skyblue03 mb30">今こそ、あなたの未来への扉を開く
                                <br class="sp-10th" /><span class="bg-skyblue03-01"><span>「PR力」</span>を学びませんか？</span>
                            </p>
                            <p>PR塾は、
                                <br class="sp-10th" />あなたの事業の財産となるPR力を、
                                <br>短期間でマスター頂くための講座です。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pr-learn digestMovie">
                <img src="<?php echo content_url() ?>/themes/association/assets/img/icon_movie.png" alt=""
                    class="pr-learn__iconMovie">
                <h1 class="pr-learn__digestMovieHeading">PR塾ダイジェストムービー</h1>
                <div class="youtube">
                    <a class="youtubeModalOpen youtubeThumbnail" id="digestMovieYTPlay" data-video-id="aMGOlnvkyhA">
                        <img src="<?php echo content_url() ?>/themes/association/assets/img/thumbnail_digestMovie.jpg" alt="ダイジェストムービー" class="pr-learn__thumbnail-large">
                        <?php echo file_get_contents(get_template_directory() . '/assets/img/logo_youtube.svg'); ?>
                    </a>
                    <div id="digestMovie" class="mobilePlayer"></div>
                </div>
            </div>
            <section class="teacherProfile">
                <h1 class="teacherProfile__heading">講師紹介</h1>
                <ul class="teacherProfile__list">
                    <li class="teacherProfile__item">
                        <figure class="teacherProfile__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/president_img.jpg" alt="笹木郁乃" class="pr-learn__teacher pc">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/president_img-sp.jpg" alt="笹木郁乃" class="pr-learn__teacher sp">
                        </figure>
                        <div class="teacherProfile__names sp">
                            <span class="teacherProfile__small">PR塾メイン講師</span>
                            <span class="teacherProfile__name">笹木 郁乃</span>
                        </div>
                        <div class="teacherProfile__text">
                            <div class="teacherProfile__names pc">
                                <span class="teacherProfile__small">PR塾メイン講師</span>
                                <span class="teacherProfile__name">笹木 郁乃</span>
                            </div>
                            <div class="teacherProfile__profile">
                                <p class="teacherProfile__paragraph">株式会社LITA 代表取締役 </p>
                                <p class="teacherProfile__paragraph">PR事業に携わり、10年。 <br>
                                    会社員時代、創業期2社のPRを担当。<br>
                                    株式会社エアウィーヴ 5年で1億→120億<br>
                                    愛知トビー株式会社（バーミキュラ製造販売） <br class="sp-10th" />2年で11億→44億 <br class="pc-10th" />
                                    と、PRの力で急成長に貢献。
                                </p>
                                <p class="teacherProfile__paragraph">その後、企業価値にPRの力を加えることで、会社が劇的に変化するということを多くの経営者に伝えるべく、PR代行事業を立ち上げる。 <br
                                        class="sp-10th" />また、自身の10年間のPR経験より構築した独自のPR理論をコンンテンツとするPR塾を主宰。延べ330人以上の起業家、経営者、PR担当者にPRを指導、14期連続満席にて開催。
                                </p>
                                <p class="teacherProfile__paragraph">その他企業主催の講座やイベント等にもPR講師として登壇、3年で1200名以上の起業家・経営者に指導。 <br
                                        class="sp-10th" />大手上場企業等PR案件を多数抱える他、複数のメディアでPRコラムを執筆中。</p>
                                <p class="teacherProfile__paragraph">
                                    素晴らしい商品やサービスを持つ多くの企業が、世の中から認知されず、多大な広告費やPR費を必要としている現状を打破し、全ての企業がPRの力を当たり前に使えるよう、業界の変革に取り組んでいる。
                                </p>
                                <p class="teacherProfile__paragraph">「PRは魔法であり、劇的に会社を変える力がある」 <br class="sp-10th" />が持論。</p>
                                <p class="teacherProfile__paragraph">「2019年12月、日経BP社より著書「0円PR」が発売。</p>
                            </div>
                            <div class="teacherProfile__bookFrontImage">
                                <a href="/book-anouncement" class="teacherProfile__bookLink">
                                    <figure>
                                        <img class="bookFrontImage" src="<?php echo content_url() ?>/themes/association/assets/img/book_front_shadow_rightBottom.png">
                                    </figure>
                                    <div class="teacherProfile__bookName">
                                        <span class="pc">
                                            著書<br />
                                            「0円PR」<br />
                                            (日経BP社)
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </section>
            <section class="gallery-area l-height18 concept_back">
                <h2 class="para-gallery">素晴らしい成果を次々に<br class="sp-10th" />実現し、飛躍していく<br />
                    多くの受講生が証明しています</h2>
                <div class="clear">
                    <p class="center_img"><img src="<?php echo content_url() ?>/themes/association/assets/img/proof.png"
                            alt="イメージ画像01" class="picture"></p>
                    <p class="para-ocher you">今度は、あなたの番です</p>
                </div>
            </section>
            <?php get_template_part('voiceBanner'); ?>
            <section class="post-voice">
                <p class="txt-qa">
                    <img class="pc-10th" src="<?php echo content_url() ?>/themes/association/images/10th/txt_qa_pc.jpg">
                    <img class="sp-10th" src="<?php echo content_url() ?>/themes/association/images/10th/txt_qa_sp.jpg">
                </p>
                <h2 class="pic-voice">
                    <img src="<?php echo content_url() ?>/themes/association/images/10th/pic_voice.png" alt="受講者の声">
                </h2>
                <div class="article-wrapper">
					<?php
                        $args = array(
                            'post_type' => 'post_voice',
                            'posts_per_page' => 20,
                        );
                            $the_query = new WP_Query($args); if ($the_query->have_posts()):
                    ?>
					<?php while ($the_query->have_posts()): $the_query->the_post(); ?>
					<?php $post = get_page($page_id); ?>
					<a href="/post_voice#<?php echo $post->post_name;?>">
						<div class="list-wrapper fadein">
							<span><img src="<?php the_field('excerpt_eyecatch_image'); ?>" alt=""
									class="article-img fadein"></span>
							<div class="sp-wrapper">
								<h2 class="title">
									<?php echo get_the_title(); ?>
								</h2>
								<p class="company-position"><?php the_field('CompanyAndPosition');?></p>
								<span class="graduate-name-wrapper"><em class="graduate-name"><?php the_field('name');?></em>さん</span>
								<p class="article-content pc">
									<?php the_field('voice_excerpt'); ?>
								</p>
								<button class="article-link">more ></button>
							</div>
						</div>
						<p class="article-content sp fadein">
							<?php the_field('voice_excerpt'); ?>
						</p>
					</a>
					<?php endwhile; ?>
					<?php else: ?>
                        <!-- 投稿が無い場合の処理 -->
                    <?php endif; ?>
				</div>
            </section>
            <?php get_template_part('voiceBanner'); ?>
            <section class="whats-area">
                <div class="wrapper clear">
                    <h2>PR塾生は、<br class="sp-10th" />なぜ飛躍していくのか？</h2>
                    <div class="desc-whats clear">
                        <div class="txt-whats">
                            <p>私自身も、自社スタッフも活用し、 <br />
                                そして塾生にも伝えているPRノウハウは、 <br />
                                私が2社のベンチャーのスタートアップで<br />
                                未経験からPR活動をした実践と経験を土台に、
                            </p>
                            <p>その後10年間、多くの企業様のPRプロデュースに携わり、<br />
                                常にPRの最前線で成果を生んできた<br />
                                学びを集約したものです。
                            </p>
                            <p>PR担当者としてスタートした当時の私は、PRのど素人。<br />
                                <span>「コネなし」「予算なし」「ノウハウなし」</span><br />
                                PR塾に参加される塾生と全く同じ状況でした。
                            </p>
                            <p>その状態でできることは<span>「行動」</span>のみ。</p>
                            <p>お話できないような恥ずかしい失敗も<br /> 数多く経験してきた結果、<br />大きな成果を生み出すに至ったのです。</p>
                            <p>あらゆる失敗を経てきたからこそ<br />
                                絶対に押さえるべきポイントや<br />
                                失敗しやすいポイントがわかりました。
                            </p>
                            <p>だからこそ再現性の高いコンテンツを<br />生み出すことができました。</p>
                        </div>
                        <div class="pic-whats">
                            <p>
                                <img src="<?php echo content_url() ?>/themes/association/images/10th/images/pic1.jpg"
                                    alt="イメージ画像01">
                            </p>
                            <p>
                                <img src="<?php echo content_url() ?>/themes/association/images/10th/images/pic2.jpg"
                                    alt="イメージ画像01">
                            </p>
                        </div>
                    </div>
                    <div class="desc-whats clear">
                        <div class="pic-whats pc-10th">
                            <p><img src="<?php echo content_url() ?>/uploads/2019/07/img_p1.jpg" alt="イメージ画像03"></p>
                            <p><img src="<?php echo content_url() ?>/uploads/2019/07/img_pic2.jpg" alt="イメージ画像03">
                            </p>
                        </div>
                        <div class="txt-whats">
                            <p>独立後は、講座や講演、コンサルティングの中で<br />
                                約1300人の経営者・起業家に<br />PRをお伝えしてきました。
                            </p>
                            <p>その中で、PRが持つ力をどう伝えることが<br />
                                あなたの成果に直結するのか向き合い、<br class="sp-10th" />考え続けてきました。</p>
                            <p>毎回コンテンツをブラッシュアップし続けてきた結果、<br />
                                これまで14期にわたり開催してきた<br class="sp-10th" />PR塾では、期を重ねるごとに<br />受講生の成果は数、質ともに上がり続けています。
                            </p>
                            <p>3年間330名のPR塾生たちが<br />実践し、成果を出して行く過程からは<br />
                                多岐にわたる実践例とノウハウが<br class="sp-10th" />蓄積されていきました。
                            </p>
                            <p>彼らの成果や失敗の事例が、<br />更にコンテンツに厚みを加え、<br />再現性の高いものへと変えていきました。</p>
                            <p>PR塾を支え、現在を築き上げてくれた<br />受講生には感謝しかありません。</p>
                        </div>
                        <div class="pic-whats sp-10th">
                            <p><img src="<?php echo content_url() ?>/uploads/2019/07/66497606_713464685758123_5711128261006721024_n.jpg"
                                    alt="イメージ画像04"></p>
                            <p><img src="<?php echo content_url() ?>/themes/association/images/10th/images/pic5.jpg"
                                    alt="イメージ画像05"></p>
                        </div>
                    </div>
                    <div class="desc-whats desc-whats-last clear">
                        <div class="txt-whats">
                            <p>そして、今。<br />
                                PR塾は一般社団法人<br />
                                PRプロフェッショナル協会が主宰する<br />
                                講座として再スタートします。
                            </p>
                            <p>そこには、協会代表理事を務める<br />
                                私、笹木郁乃がPR会社を経営する中で<br />
                                多数の大手企業様共に取り組み<br />
                                生み出してきた業界最新のPRノウハウと<br />
                                LITA独自の実践事例が組み込まれています。
                            </p>
                        </div>
                        <div class="pic-whats">
                            <p><img src="<?php echo content_url() ?>/uploads/2019/07/img_pic3.jpg" alt="イメージ画像03">
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="btn-confirm" style="margin-bottom: 0;">
                <div>
                    <p><a href="#appli-area">15期お申し込みはこちら ></a></p>
                </div>
                <!-- <p class="pr-learn__btn-confirmText">
                    <a href="#okane" class="link-text">>> 早期お申し込み割引2月末まで</a>
                </p> -->
                <p class="pr-learn__btn-confirmText"><a href="#date" class="link-text">>> 15期開催日程および新型コロナウイルスにおける対応はこちら</a></p>
            </section>
            <section class="fullThanks clogged">
                <h1 class="fullThanks__heading">PR塾 1期〜14期<b class="fullThanks__enclosure">満員御礼</b></h1>
                <img src="<?php echo content_url() ?>/themes/association/assets/img/fullThanks.jpg" alt="">
            </section>
            <section class="curriculum-area">
                <h2 class="tit-common"><img
                        src="<?php echo content_url() ?>/themes/association/images/10th/images/ctitle.jpg">
                    <span class="tit-txt">PRに特化したPR塾。<br />
                        「実践し、成果を導く」ための、<br class="sp-10th" />25時間の特別カリキュラム。
                    </span>
                </h2>
                <ul class="day-list pc-10th">
                    <li class="li-day clear">
                        <p class="txt-day">1日目</p>
                        <div class="detail-day" style="padding-bottom: 20px">
                            <h3 style="margin-bottom: 15px">商品の魅力を打ち出す効果的なPR設計</h3>
                            <ul>
                                <li>・選ばれるPRのポイント</li>
                                <li>・相手の心の動かす商品PR文章設計<br>
                                    <span style="font-size:0.8em;">＜あなたのサービスを一言で説明するポイント。特徴。ストーリー。自己紹介。などを文章化＞</span>
                                </li>
                                <li>・実績の1次利用、2次利用活用ノウハウと他者評価</li>
                            </ul>
                            <p class="txt-end">終了後 懇親会予定</p>
                        </div>
                    </li>
                    <li class="li-day clear">
                        <p class="txt-day">2日目</p>
                        <div class="detail-day">
                            <h3>メディアPRマスターの為のプレスリリース作成編</h3>
                            <ul>
                                <li>・メディアPR戦略</li>
                                <li style="margin-bottom: 10px">・プレスリリースの作り方</li>
                                <!--  <li style="margin-bottom: 10px">・プレスリリースのタイトル設計</li>-->
                                <li>
                                    <h3 style="margin-bottom: 0">ファンを作るSNSブランディング</h3>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="li-day clear">
                        <p class="txt-day">3日目</p>
                        <div class="detail-day">
                            <h3 style="margin-bottom: 10px">メディアPRマスターの為のプレスリリース送付編</h3>
                            <ul>
                                <li>・取材につながるプレスリリースの送り方</li>
                                <li>・メディアへのアポイントの取り方</li>
                                <!--<li style="margin-bottom: 7px">・取材対応のノウハウ</li>-->
                                <!-- <li>・メディアの心を動かす商品PRのプレゼンテーション術</li>-->
                                <li>
                                    <h3 style="margin-bottom:0px">プレスリリースの8割の鍵を握るタイトル・写真テクニック</h3>
                                </li>
                                <li>
                                    <h3 style="margin-bottom: 0">メディアリサーチ方法</h3>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="li-day clear">
                        <!-- long" style="min-height: 230px;margin-bottom: 30px;"-->
                        <p class="txt-day">4日目</p>
                        <div class="detail-day">
                            <h3 style="margin-bottom: 10px">法人企業・大学・行政へのアプローチ</h3>
                            <ul>
                                <li>・法人-PR 4つのステップ</li>
                                <li>・ターゲット企業の選び方</li>
                                <li>
                                    <h3 style="margin-bottom: 0">採用される為の企画書作成</h3>
                                </li>
                                <li>
                                    <h3 style="margin-bottom: 0">メディアの心を動かす電話・メールアプローチ</h3>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="li-day clear">
                        <p class="txt-day">5日目</p>
                        <div class="detail-day">
                            <h3 style="margin-bottom: 10px">出版実現のためのアプローチ</h3>
                            <ul>
                                <li style="margin-bottom: 0px">・出版企画書の作り方・送り方</li>
                                <li style="margin-bottom: 0px">・ベストセラーを狙うための出版PR戦略</li>
                                <li>
                                    <h3 style="margin-bottom: 0">増刷をつくるための出版PR戦略</h3>
                                </li>
                                <li>
                                    <h3 style="margin-bottom: 0">プレスリリースの実際の送付準備</h3>
                                </li>
                            </ul>
                            <p class="txt-end">終了後 懇親会予定</p>
                        </div>
                    </li>
                </ul>
                <ul class="sp-day-li sp-10th">
                    <li><img src="<?php echo content_url() ?>/themes/association/images/li_day_sp_01.png" alt="1日目">
                    </li>
                    <li><img src="<?php echo content_url() ?>/themes/association/images/li_day_sp_02.png" alt="2日目">
                    </li>
                    <li><img src="<?php echo content_url() ?>/themes/association/images/li_day_sp_03.png" alt="3日目">
                    </li>
                    <li><img src="<?php echo content_url() ?>/themes/association/images/li_day_sp_04.png" alt="4日目">
                    </li>
                    <li><img src="<?php echo content_url() ?>/themes/association/images/li_day_sp_05.png" alt="5日目">
                    </li>
                </ul>
                <div class="text2">
                    <!--<p class="copy">＼ 受講生から絶賛の嵐！ ／</p>
                            <p class="copy2">PRノウハウが詰まった<br class="sp">総ページ数 <span style="font-size: 1.4em">485</span>ページのテキスト</p>-->
                    <p class="mokuzi">PR塾 過去テキストの目次例</p>
                    <p class="ho">PR塾15期テキストは、より結果が出やすいように<br class="sp">ブラッシュアップされる予定のため、<br
                            class="sp">ページ内容が一部変わってきます。<br class="sp">ご期待ください。</p>
                    <div class="flex">
                        <div class="flexc"><img src="<?php echo content_url() ?>/themes/association/images/text1.png">
                        </div>
                        <div class="flexc"><img src="<?php echo content_url() ?>/themes/association/images/text2.png">
                        </div>
                    </div>
                    <div class="flex">
                        <div class="flexc"><img src="<?php echo content_url() ?>/themes/association/images/text3.png">
                        </div>
                        <div class="flexc"><img src="<?php echo content_url() ?>/themes/association/images/text4.png">
                        </div>
                    </div>
                </div>
                <p class="txt-caution">※本講座は、全5日カリキュラムの受講により効果が<br class="sp-10th" />上がるように設計されています。
                    <br /> やむを得ない事情を除き、全5回全ての講座にご参加ください。
                </p>
            </section>
            <section class="detail-area" id="date">
                <div>
                    <h3 class="tit-detail">PR塾15期 日程</h3>
                    <p style="color:#b91617;text-align: center;margin-bottom: 20px;font-weight: 600;font-size: 1.2em;
                line-height: 1.3;">多くのお問合せにより、<br class="sp-10th">15期開催日程決定いたしました！</p>
                    <ul class="txt-detail table-detail table">
                        <li class="clear">
                            <p class="bg-blue">第1回目</p>
                            <p class="d-detail">4月16日（木）12:00-17:00
                            </p>
                        </li>
                        <li class="clear">
                            <p class="bg-blue">第2回目</p>
                            <p class="d-detail">5月7日（木）12:00-17:00
                            </p>
                        </li>
                        <li class="clear">
                            <p class="bg-blue">第3回目</p>
                            <p class="d-detail">5月27日（水）12:00-17:00
                            </p>
                        </li>
                        <li class="clear">
                            <p class="bg-blue">第4回目</p>
                            <p class="d-detail">6月17日（水）12:00-17:00
                            </p>
                        </li>
                        <li class="clear">
                            <p class="bg-blue">第5回目</p>
                            <p class="d-detail">7月8日（水）12:00-17:00
                                <!--   <br class="sp-10th" /><span>※講義終了後、懇親会あり</span>-->
                            </p>
                        </li>
                    </ul>
                    <p class="detail-caution";>
                        <span style="color:#b91617">新型コロナウィルスにおけるPR塾15期の対応</span><br>
                        <br>
                        1回目はご参加頂く皆さまの安全や健康を第一に考え、ZOOMでの開催となりました。<br>
                        2回目以降は開催間近まで状況を確認し、対面での開催もしくはZOOMでの開催かを検討いたします。<br>
                        <br>
                        ZOOMでの開催になった場合でも、対面講座と同様の成果を出して頂けるよう、テキストを事前にご自宅に送付したり、ZOOM開催に変わってしまった回数分だけのグループコンサルを行わせていただきます。<br>
                        <br>
                        また、オンライン懇親会を随時開催し、ご参加頂く皆さまや講師の交流も積極的に図ってまいります。
                    </p>
                </div>
                <div>
                    <h3 class="tit-detail">会場</h3>
                    <p class="txt-detail">東京駅・八重洲付近の会議室
                        <br />（後日、お申込みの方にご案内いたします）
                    </p>
                </div>
                <div>
                    <h2 class="tit-detail" id="okane">受講料</h2>
                    <p class="txt-detail2 txt-detailsp fs">・PR塾対面継続講座　39万円（税別）</p>
                    <p class="txt-detail3 txt-detailsp">・再受講　29万円（税別）<br>
                        <span class="small">※再受講対象者：PR塾卒業生、経済界アカデミア女性エヴァンジェリスト 養成講座卒業生</span></p>
                    <p class="txt-detail3 txt-detailsp txt-detailsp2 fs">・PR塾オンライン講座 29万円（税別）</p>
                </div>
                <!-- <div class="earlyDiscount">
                    <h2 class="earlyDiscount__heading">早期割引特典</h2>
                    <p class="earlyDicount__readText">
                        2月末までに対面講座にお申し込みいただいた方には、<br class="pc" />早期お申し込み受講料割引の特典がございます。是非お申し込みください。
                    </p>
                    <p class="earlyDiscount__PriceText">
                        通常価格 <em class="earlyDiscount__regularPrice">390,000</em>円(税別)→ <span
                            class="earlyDiscount__discountPriceText">2月末まで早期割引<em
                                class="ealryDiscount__discountPrice">350,000</em>円(税別)</span>
                    </p>
                </div> -->
                <div class="pr-learn__paymentMethod">
                    <h3 class="tit-detail">お支払い方法</h3>
                    <p class="txt-detail  mb">講座の受講料は、<span style="color: red">銀行振込（一括/2分割/3分割）</span>およびで<span style="color: red">Paypal（一括/2分割/3分割）</span>のお支払いが可能です。
                        <!--
                                    <br /> またはクレジットカード（一括/2分割）-->
                    </p>
                    <ul class="txt-detail list">
                        <li>・原則、入金後のキャンセルによるご返金は致しません</li>
                        <li>・支払いに関してご相談希望の方は事前に問い合わせください。</li>
                        <li>・主催者側の都合や、災害での開催中止は全額返金致します。</li>
                        <li>・ご返金に関しての振込手数料はお客様負担となります。</li>
						<li>・銀行振込でお支払いの場合、振込手数料はお客様負担になります。</li>
						<li>・Paypalでのお支払いの場合、別途お支払手数料が発生いたします。</li>
                    </ul>
                </div>
                <div>
                    <h3 id="online" class="tit-detail tit-detail-online">オンライン講座</h3>
                    <div>
                        <div class="bg-chara_online">
                            <h2 class="tit-chara"><img class="sp-10th img90"
                                    src="<?php echo content_url() ?>/themes/association/images/10th/images/online_title_sp.png"
                                    alt="PRを集中してマスターできる5つの特徴"><img class="pc-10th"
                                    src="<?php echo content_url() ?>/themes/association/images/10th/images/online_title.png"
                                    alt="PRを集中してマスターできる5つの特徴"></h2>
                            <ul class="clear">
                                <li>
                                    <p class="num-circle_online"><img
                                            src="<?php echo content_url() ?>/themes/association/images/10th/images/online_t1.png">
                                    </p>
                                    <p class="txt-chara_online">最新のPRノウハウが学べるテキストと、直近に開催されたPR塾最新期の授業動画を配信します。
                                        いつでもどこでも、何度でも、ご自身のタイミングに合わせて 学習を進めることが可能です。</p>
                                </li>
                                <li>
                                    <p class="num-circle_online"><img
                                            src="<?php echo content_url() ?>/uploads/2019/07/online_t2.png"></p>
                                                                           <p class="txt-chara_online">
                                        対面講座と同様、オンライン講座についても受講期間の3ヶ月サポート付き。
                                        短期集中でPRを学んでいただいた後も、3ヶ月間のフォロー体制が充実しているので、塾での学びを確実に行動・成果に繋げていただけます。</p>
                                </li>
                                <li>
                                    <p class="num-circle_online"><img
                                            src="<?php echo content_url() ?>/themes/association/images/10th/images/online_t3.png">
                                    </p>
                                    <p class="txt-chara_online">受講期間中は、オンライン上で笹木郁乃に質問ができます。
                                        動画で学んで終わりではなく、授業動画での疑問を気軽に質問できる環境でリアルタイムに疑問や不安を解消できます。</p>
                                </li>
                                <li>
                                    <p class="num-circle_online"><img
                                            src="<?php echo content_url() ?>/themes/association/images/10th/images/online_t4.png">
                                    </p>
                                    <p class="txt-chara_online">対面講座と同様にオンライン会員限定での質問会も開催します。
                                        質問会ではプレスリリースの添削をはじめとして、講座内容や実際にPR活動を行う上での疑問点、不明点、不安に感じていることを笹木郁乃の顔を見ながら直接質問し、解決することができます。
                                        <br><span
                                            style="font-size: 0.8em">＊zoomを使ったグループコンサルのような形式で開催します。　＊日程は締め切り後に調整の上、実施します。</span>
                                    </p>
                                </li>
                            </ul>
                            <div><img
                                    src="<?php echo content_url() ?>/themes/association/images/10th/images/photo_online.png">
                            </div>
                        </div>
                        <div>
                            <p class="txt-detail02 on">オンライン受講の流れ </p>
                            <ul class="txt-detail table-detail table">
                                <li class="clear">
                                    <p class="bg-blue step-flow-01">STEP1</p>
                                    <p class="d-detail step-detail step-detail-01">
                                        お申込みフォームより、「オンライン講座」にチェックをして、お申込み・お支払い下さい。</p>
                                </li>
                                <li class="clear">
                                    <p class="bg-blue step-flow-02">STEP2</p>
                                    <p class="d-detail step-detail step-detail-02">
                                        15期の進捗に合わせ、各講義の終了後1週間以内に動画を配信いたします。テキストは、動画配信のタイミングに合わせ、ご自宅に郵送いたします。</p>
                                </li>
                                <li class="clear">
                                    <p class="bg-blue step-flow-03">STEP3</p>
                                    <p class="d-detail step-detail step-detail-03">テキストに書き込みながら、繰り返し受講いただけます。</p>
                                </li>
                                <li class="clear">
                                    <p class="bg-blue step-flow-03">STEP4</p>
                                    <p class="d-detail step-detail step-detail-03" style="padding-bottom: 20px;">
                                        授業動画の疑問は、オンライン上でいつでもご質問いただけます。</p>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <p class="txt-detail02">オンライン受講 <br class="sp-10th" />お客様の声</p>
                            <div class="online_voice">
                                <a target="_blank" href="/post_voice#tanaka_shinichi" class="onlineVoice__link">
                                    <img src="<?php echo content_url() ?>/themes/association/assets/img/graduation_tanaka-shinichi.jpg" class="onlineVoice__image">
                                    <div class="onlineVoice__text">
                                        <h3 class="onlineVoice__heading">
                                            PR未経験からNHK放送、朝日新聞・佐賀新聞・ヤフーニュースに掲載！ブログも開始2週間で1万PV超え！
                                        </h3>
                                        <h4 class="onlineVoice__positionAndName">アクシスエボリューション代表<strong class="onlineVoice__name">田中 伸一さん</strong></h4>
                                        <p class="onlineVoice__voice">「ダウン症の息子との気付きブログ」ブログ×facebookで認知拡大！開始半月で1万PV獲得！</p>
                                        <span class="onlineVoice__button">more <span class="onlineVoice__icon">></span>
                                    </div>
                                </a>
                                <a target="_blank" href="/post_voice#hayashi_misato" class="onlineVoice__link">
                                    <img src="<?php echo content_url() ?>/themes/association/assets/img/graduation_hayashi-misato.jpg" class="onlineVoice__image">
                                    <div class="onlineVoice__text">
                                        <h3 class="onlineVoice__heading">
                                            雑誌掲載・雑誌社主催のセミナー登壇・テレビ次々獲得！<br class="pc">場所・時間を選ばないオンライン受講で成果
                                        </h3>
                                        <h4 class="onlineVoice__positionAndName">女性活躍コンサルタント<strong class="onlineVoice__name">林 美里さん</strong></h4>
                                        <p class="onlineVoice__voice">スタッフ6名とメディアアプローチを続け、福井テレビの取材・放送獲得！</p>
                                        <span class="onlineVoice__button">more <span class="onlineVoice__icon">></span>
                                    </div>
                                </a>
                                <a target="_blank" href="/post_voice#tanaka_nana" class="onlineVoice__link">
                                    <img src="<?php echo content_url() ?>/themes/association/assets/img/graduation_tanaka-nana.jpg" class="onlineVoice__image">
                                    <div class="onlineVoice__text">
                                        <h3 class="onlineVoice__heading">
                                            タイ在住ブロガーとして、予想もしなかったほどの<br class="pc" />
                                            企業PR活動に携わることに！
                                        </h3>
                                        <h4 class="onlineVoice__positionAndName">人生を底上げするブログ講座 MAYAブログ塾主宰<strong class="onlineVoice__name">田中 なな(MAYA)さん</strong></h4>
                                        <p class="onlineVoice__voice">海外在住者やどうしても会場に向かうことが出来ない方の選択肢としてオンライン受講がありますが...</p>
                                        <span class="onlineVoice__button">more <span class="onlineVoice__icon">></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <h3 class="tit-detail">Q&A　よくある質問</h3>
                    <p class="balloon-about">講座の受講について</p>
                    <ul>
                        <li>
                            <h3 class="question-li"><i><img
                                        src="<?php echo content_url() ?>/themes/association/images/10th/ico-question.png"></i>現在起業、経営をしていますが、申し込みできますか？
                            </h3>
                            <p class="answer-li">PRの方向性を明確にし、効果的なPR設計を行いたい方、
                                更なる認知アップ、集客力アップを目指したい方、もしくは長期目線でPRの学びを生かしたい方は、ぜひお申し込みください。
                            </p>
                        </li>
                        <li>
                            <h3 class="question-li"><i><img
                                        src="<?php echo content_url() ?>/themes/association/images/10th/ico-question.png"></i>まだ具体的な起業活動はしていませんが、申し込みできますか？
                            </h3>
                            <p class="answer-li">
                                PRの元となる事業の方向性が決まっていて、スタートから効果高くPRできる、ノウハウ・個別の戦略を手にしたい方、スタートダッシュを切りたい方は、ぜひお申し込みください。
                            </p>
                        </li>
                        <li>
                            <h3 class="question-li"><i><img
                                        src="<?php echo content_url() ?>/themes/association/images/10th/ico-question.png"></i>企業研修として社員を参加させることはできますか？
                            </h3>
                            <p class="answer-li">LITAのPR塾は、企業様の社内研修としてもご活用いただけます。 人数規定はございませんので、何名からでもご参加ください。
                            </p>
                        </li>
                        <li>
                            <h3 class="question-li"><i><img
                                        src="<?php echo content_url() ?>/themes/association/images/10th/ico-question.png"></i>どうしても出席できない回があるのですが、フォローはありますか？
                            </h3>
                            <p class="answer-li">本講座は、全5日カリキュラムの受講で効果が上がるように設計されています。 やむを得ない事情を除き、原則全ての回にご参加ください。
                                欠席された回は、当日の講義の様子を撮影した動画でフォローいたします。
                            </p>
                        </li>
                        <li>
                            <h3 class="question-li"><i><img
                                        src="<?php echo content_url() ?>/themes/association/images/10th/ico-question.png"></i>講義の内容を録音することはできますか？
                            </h3>
                            <p class="answer-li">ご本人の復習用としてのみ、録音していただけます。 再配布などの二次利用はご遠慮ください。
                            </p>
                        </li>
                        <li>
                            <h3 class="question-li"><i><img
                                        src="<?php echo content_url() ?>/themes/association/images/10th/ico-question.png"></i>受講していることが公になるのは控えたいのですが・・・
                            </h3>
                            <p class="answer-li">講座申し込みから卒業後まで、受講生のプライバシーを守ります。 個人が公に特定されないよう配慮いたしますので、安心して参加してください。
                            </p>
                        </li>
                        <li>
                            <h3 class="question-li"><i><img
                                        src="<?php echo content_url() ?>/themes/association/images/10th/ico-question.png"></i>男性でも参加できますか？
                            </h3>
                            <p class="answer-li">はい、もちろんです。男性のご参加も積極的に受け付けています。</p>
                        </li>
                        <li>
                            <h3 class="question-li"><i><img
                                        src="<?php echo content_url() ?>/themes/association/images/10th/ico-question.png"></i>人見知りなので、場に馴染めるか心配です・・・
                            </h3>
                            <p class="answer-li">
                                それぞれが目的を持って参加する受講生が集まっておりますので、個々に集中しながら参加してくださっています。その中で受講回数を重ねるごとに、お互いを高め合う関係性に変わっていくことがほとんどですので、安心して参加してください。
                            </p>
                        </li>
                        <li>
                            <h3 class="question-li"><i><img
                                        src="<?php echo content_url() ?>/themes/association/images/10th/ico-question.png"></i>再受講制度はありますか？
                            </h3>
                            <p class="answer-li">PR塾の再受講は290,000円で受け付けています。
                                <br />※再受講は全日程受講が対象となります。単日の再受講は受け付けておりません。
                            </p>
                        </li>
                        <li>
                            <h3 class="question-li"><i><img
                                        src="<?php echo content_url() ?>/themes/association/images/10th/ico-question.png"></i>お昼の準備は必要ですか？
                            </h3>
                            <p class="answer-li mb">講座当日は、お昼休憩はありませんので、講義前に済ましていただきますようお願いいたします。
                            </p>
                        </li>
                    </ul>
                </div>
            </section>
            <section class="pr-learn__message">
                <h1 class="pr-learn__messageHeading">PR塾15期<br class="sp" />ご検討中の皆さまへ</h1>
                <div class="pr-learn__messageWrapper">
                    <ul class="pr-learn__messageImageItem">
                        <li class="pr-learn__messageImageList"><img src="<?php echo content_url() ?>/themes/association/assets/img/message01.jpg" alt=""
                            class="pr-learn__messageImage presidentImage"></li>
                        <li class="pr-learn__messageImageList"><img src="<?php echo content_url() ?>/themes/association/assets/img/message02.jpg" alt=""
                            class="pr-learn__messageImage pc"></li>
                        <li class="pr-learn__messageImageList"><img src="<?php echo content_url() ?>/themes/association/assets/img/message03.jpg" alt=""
                            class="pr-learn__messageImage pc"></li>
                        <li class="pr-learn__messageImageList"><img src="<?php echo content_url() ?>/themes/association/assets/img/message04.jpg" alt=""
                            class="pr-learn__messageImage pc"></li>
                    </ul>
                    <div class="pr-learn__messageText">
                        <p>
                            こんにちは。笹木郁乃です。<br />
                            読んでいただきありがとうございます。
                        </p>
                        <p>
                            PR塾は、
                            広告投資0円で
                            事業を世の中に広げるノウハウを学び習得する講座です。<br />
                            逆に、「最短で100万円稼ぐ方法教えます」という<br class="pc">
                            「楽に稼ぐ方法を教える塾」
                            ではないのです。
                        </p>
                        <p>
                            「楽に稼ぎたい」方ではなく、<br />
                            <span class="pr-learn__emphasis">「自分のサービスをもっと世の中に知ってほしい！」</span>
                            という方にぴったりの塾なんだと、
                            14期開講してきて思います！！<br />
                            5日間の講座と3ヶ月間の関わりの中で、
                            私の10年分のPRノウハウを、
                            是非習得頂き、
                            ビジネスに活かして頂けると私も嬉しいです。
                        </p>
                        <p>
                            PR塾に希望を持って
                            、飛び込んで来て頂いた方には、<br class="pc">
                            <span class="pr-learn__emphasis">「PR塾に入って本当に良かった！」</span>
                            と思っていただけるように、
                            今回も全力で関わらせて頂きます。
                        </p>
                        <p>
                            実は、PR塾15期以降は、
                            会社のPR代行事業も忙しくなってきたこともあり、
                            私自身の講師登壇は少しずつ引退を考えていました。<br />
                            しかし、PR塾14期でまた、
                            一人一人のメディア掲載や事業拡大などの
                            大きな変化に出会い、
                            PR塾の与える影響の大きさを感じました。
                        </p>
                        <ul class="pr-learn__messageImageItem">
                            <li class="pr-learn__messageImageList">
                                <img src="<?php echo content_url() ?>/themes/association/assets/img/message04.jpg" alt="" class="pr-learn__messageImage sp">
                            </li>
                        </ul>
                        <p>
                            そして、PR塾14期最終日には、<br />
                            <span class="pr-learn__emphasis">「本当は14期で最後にしようと思っていました。
                            けれど私は、PR塾でもっと多く方の夢を応援していきたいと思っている。」</span>
                        </p>
                        <p>
                            と話し、
                            14期のみんなより背中を押して頂き
                            15期の登壇も決断できました。
                            PRやSNSは、
                            時代により日々変化しているため、
                            ノウハウ自体、数年前のは使えないことも多いです。
                        </p>
                        <p>
                            私のPR塾では、
                            そういうこともあり、
                            毎回コンテンツを大幅ブラッシュアップしています。<br />
                            <span class="pr-learn__emphasis">＊SNSメソッドがより最新2020年版にバージョンアップ</span><br />
                            <span class="pr-learn__emphasis">＊メディアへの掲載獲得方法</span><br />
                            本業のレベルアップに伴いバージョンアップお楽しみにです！
                        </p>
                        <ul class="pr-learn__messageImageItem">
                            <li class="pr-learn__messageImageList">
                                <img src="<?php echo content_url() ?>/themes/association/assets/img/message02.jpg" alt="" class="pr-learn__messageImage sp">
                            </li>
                        </ul>
                        <p>
                            そして、このような実績を評価いただき、
                            PR塾の基礎部分限定ではありますが、
                            日経BP社より「0円PR」という一冊の本となり
                            出版されました！！<br class="pc">
                            本が出た今でも、今回も、
                            再受講希望者が多いのは、
                        </p>
                        <p>
                            <span class="pr-learn__emphasis">・受講中は質問や資料添削ができるため、<br />
                            結果が出るスピードが違う。</span><br />
                            <span class="pr-learn__emphasis">・忙しい中でも、講座中に実践ワークやシェアタイムが多くあり、
                            講座中に成果物が完成し、効率的。</span><br />
                            <span class="pr-learn__emphasis">・「当たり前」の意識レベルが高い環境の中で、
                            サボらずに、前向きに実行ができる。</span><br />
                        </p>
                        <p>
                            という点が多いようです。<br />
                            変化したい。成果を出したい。<br />
                            そう強く思っている方は、
                            是非一緒に頑張りましょう。<br />
                            お会いできること、
                            楽しみにしています！＾＾
                        </p>
                        <p class="pr-learn__messageParagraph -right">
                            2020年2月
                        </p>
                        <img src="<?php echo content_url() ?>/themes/association/assets/img/message-sign.png" alt=""
                            class="pr-learn__messageSign">
                    </div>
                </div>
            </section>
            <section id="appli-area" class="btn-area">
                <h2 class="tit-common" id="moshikomi">
                    <span class="tit-main">PR力を身に付けて、
                        <br class="sp-10th" />未来への扉を開きたいあなたへ
                    </span>
                </h2>
                <section class="sec conversion-area">
                    <?php get_template_part('conversionArea'); ?>
                </section>
            </section>
</div>

<section class="fullThanks">
    <h1 class="fullThanks__heading">PR塾 1期〜14期<b class="fullThanks__enclosure">満員御礼</b></h1>
    <img src="<?php echo content_url() ?>/themes/association/assets/img/fullThanks.jpg" alt="">
</section>
</main>
</div>
</div>
<script>
    $(document).ready(function () {
        wsize = $(window).width();
        $(".pr_seminar .pr_seminar_introduction .title").css("height", wsize / 2.4 + "px");
    });
    $(window).resize(function () {
        wsize = $(window).width();
        $(".pr_seminar .pr_seminar_introduction .title").css("height", wsize / 2.4 + "px");
    });
</script>
<script>
    $(document).ready(function () {
        h2size = $(".pr_seminar .pr_seminar_introduction .title").height();
        $(".pr_seminar .pr_seminar_introduction .title h2").css("height", h2size + "px");
        $(".pr_seminar .pr_seminar_introduction .title h2").css("width", h2size + "px");
    });
    $(window).resize(function () {
        h2size = $(".pr_seminar .pr_seminar_introduction .title").height();
        $(".pr_seminar .pr_seminar_introduction .title h2").css("height", h2size + "px");
        $(".pr_seminar .pr_seminar_introduction .title h2").css("width", h2size + "px");
    });
</script>
<script>
    $(function ($) {
        $('.pr_seminar .voice li p').each(function () {
            var $target = $(this);
            // オリジナルの文章を取得する
            var html = $target.html();
            // 対象の要素を、高さにautoを指定し非表示で複製する
            var $clone = $target.clone();
            $clone
                .css({
                    display: 'none',
                    position: 'absolute',
                    overflow: 'visible'
                })
                .width($target.width())
                .height('auto');
            // DOMを一旦追加
            $target.after($clone);
            // 指定した高さになるまで、1文字ずつ消去していく
            while ((html.length > 0) && ($clone.height() > $target.height())) {
                html = html.substr(0, html.length - 1);
                $clone.html(html + '...');
            }

            // 文章を入れ替えて、複製した要素を削除する
            $target.html($clone.html());
            $clone.remove();
        });
    });
</script>

<!-- <?php include $_SERVER["DOCUMENT_ROOT"]."/include/footer.html"; ?> -->
<!--wrapper-->

<?php
get_sidebar();
get_footer();
