<?php
get_header();
?>

<div class="online">
    <main>
        <div class="online__mainVisual pc">
            <h1 class="online__mainCatchCopy">
                在宅<br />
                PR塾、<br />
                始まる。
            </h1>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/main_visual_box.png" alt="在宅PR塾2期 満席御礼！ 次回10月募集開始" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/online/main_visual_box@2x.png 2x" alt="在宅PR塾募集スタート！" class="online__mainVisualArrow">
            <p class="online__mainVisualSub">
                時間も場所も自由に選べる<br />
                <em class="online__mainVisualEmphasis">
                    自立した生き方を<br />
                    PRスキルで、手に入れる。
                </em>
            </p>
        </div>
        <div class="online__mainVisual sp">
            <h1 class="online__mainCatchCopy">
                <span class="online__mainCatchCopySpan">在宅</span>
                <span class="online__mainCatchCopySpan">PR塾、</span>
                <span class="online__mainCatchCopySpan">始まる。</span>
            </h1>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/main_visual_box.png" alt="在宅PR塾2期 満席御礼！ 次回10月募集開始" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/online/main_visual_box@2x.png 2x" alt="在宅PR塾募集スタート！" class="online__mainVisualArrow">
            <span class="online__mainVisualSub">
                時間も場所も<br />自由に選べる<br />
                <em class="online__mainVisualEmphasis">
                    自立した生き方を<br />
                    PRスキルで、手に入れる。
                </em>
            </span>
            <span class="online__mainVisualSubImage"></span>
        </div>
        <section class="online__movie">
            <p class="online__movieParagraph">
                <strong class="online__dot">在</strong><strong class="online__dot">宅</strong><strong class="online__dot">P</strong><strong class="online__dot">R</strong><strong class="online__dot">塾</strong>が<strong class="online__dot">5</strong><strong class="online__dot">分</strong>でわかる！
            </p>
            <h1 class="online__MovieHeading">インタビュー動画を<br class="sp">公開中！</h1>
            <div class="youtube">
                <a class="youtubeModalOpen youtubeThumbnail" id="onlineYTPlay" data-video-id="cSEHDVnjxYk">
                    <img src="<?php echo content_url() ?>/themes/association/assets/img/online/icon_play.png" alt="" class="online__youtubeThubmnailIcon">
                    <img src="<?php echo content_url() ?>/themes/association/assets/img/online/youtube_thumb.jpg" alt="インタビュー動画" class="online__youtubeThubmnail">
                </a>
                <div id="onlineMovie" class="mobilePlayer"></div>
            </div>
        </section>
        <section id="onversionArea" class="online__conversionArea top">
            <h1 class="online__conversionAreaHeading">
                <strong class="online__marker">まずは無料体験</strong>から<br />
                はじめましょう
            </h1>
            <div class="online__conversionAreaButtons">
                <div class="online__conversionAreaWrapper">
                    <p class="online__conversionAreaParagraph reserve">在宅PR塾 2期満席御礼<br>※次回 2020年10月 募集開始、11月 実施予定</p>
                    <a href="//ws.formzu.net/fgen/S34220173/" class="online__conversionButton reserve">
                        無料体験申込み
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/icon_reservation.png" alt="">
                    </a>
                </div>
                <div class="online__conversionAreaWrapper">
					<p class="online__conversionAreaParagraph application">在宅PR塾 2期満席御礼<br>※次回 2020年10月 募集開始、11月 実施予定</p>
                    <a href="//ws.formzu.net/fgen/S86504297/" class="online__conversionButton application">
                        講座申込み
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/icon_application.png" alt="">
                    </a>
                </div>
            </div>
        </section>
        <?php get_template_part('template-parts/online/template-full-thanks'); ?>
        <div class="online__links">
            <ul class="online__linksList">
                <li class="online__linksItem"><a href="#online-graduate">卒業生の声</a></li>
                <li class="online__linksItem"><a href="#online-support">お仕事あっせん<br class="sp">サポート</a></li>
                <li class="online__linksItem"><a href="#online-recommend">こんな方にオススメ</a></li>
                <li class="online__linksItem"><a href="#online-reason">結果が出る4つの理由</a></li>
                <li class="online__linksItem"><a href="#online-lecturer">講師紹介</a></li>
                <li class="online__linksItem"><a href="#online-fullSupport">充実サポート</a></li>
                <li class="online__linksItem"><a href="#online-flow">受講の流れ</a></li>
                <li class="online__linksItem"><a href="#online-qa">Q&A</a></li>
            </ul>
            <ul class="online__linksCourseList">
                <li class="online__linksCourseItem"><a href="#online-workCourse">「在宅PRお仕事コース」概要<br class="sp">(日程／料金／内容)</a></li>
                <li class="online__linksCourseItem"><a href="#online-proCourse">「広報PRプロコース」概要<br class="sp">(日程／料金／内容)</a></li>
            </ul>
        </div>
        <section class="online__chosenPrSchool">
            <h1 class="online__chosenPrSchoolHeading">
                <strong class="online__dot">選</strong><strong class="online__dot">ば</strong><strong class="online__dot">れ</strong><strong class="online__dot">て</strong><strong class="online__dot">き</strong><strong class="online__dot">た</strong>PR塾
            </h1>
            <ul class="online__chosenPrSchoolList">
                <li class="online__chosenPrSchoolItem">
                    <h2 class="online__chosenPrSchoolItemHeading">
                        <strong class="online__marker">PR塾メソッドが書籍に。</strong><br />
                        日経BP社より発売中
                    </h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/chosen_pr_school01.jpg" alt="">
                    <p class="online__chosenPrSchoolParagraph">
                        PR塾のエッセンスが、1冊の書籍「0円PR」となり日経BP社より発売。即重版。アマゾンランキング　3部門カテゴリー1位。
                        <small>※SNS入門書、eコマース、広告・宣伝部門で獲得</small>
                    </p>
                </li>
                <li class="online__chosenPrSchoolItem">
                    <h2 class="online__chosenPrSchoolItemHeading">
                        メディアでも<strong class="online__marker">多数紹介</strong>
                    </h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/chosen_pr_school02.jpg" alt="">
                    <p class="online__chosenPrSchoolParagraph">
                        PR塾メソッド凝縮の「0円PR」は多くのメディアで紹介。<br />
                        経済界、日経ビジネスオンライン、日経トップリーダー、創業手帳　他
                    </p>
                </li>
                <li class="online__chosenPrSchoolItem">
                    <h2 class="online__chosenPrSchoolItemHeading">
                        1期〜15期<strong class="online__marker">全て満席</strong>
                    </h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/chosen_pr_school03.jpg" alt="">
                    <p class="online__chosenPrSchoolParagraph">
                        PR塾1期〜15期　対面講座・オンライン講座合わせ370名が受講。全国で活躍中。セミナーは累計1300名が受講。
                    </p>
                </li>
            </ul>
        </section>
        <section class="online__graduate" id="online-graduate">
            <h1 class="online__graduateMainHeading">
                <strong class="online__marker">在宅PRの仕事で活躍</strong><br class="sp" />しているPR塾卒業生
            </h1>
            <ul class="online__graduateList">
                <li class="online__graduateItem">
                    <div class="online__graduateItemImageContent">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/graduate_a-okita.png" alt="" class="online__graduateImage">
                        <div class="online__graduateItemContent">
                            <span class="online__graduateItemBefore">専業主婦</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/icon_angle.png" alt="" class="online__graduateAngle">
                            <p class="online__graduateItemAfter"><strong class="online__graduatePickUpItemMarker">PRプロデューサー</strong></p>
                            <p class="online__graduateItemAfter"><strong class="online__graduatePickUpItemMarker">NPO法人代表</strong></p>
                        </div>
                    </div>
                    <p class="online__graduateContent">NHK、中日新聞など<br class="pc" />多くのメディアに出演。<br />PRはやりがいも<br class="pc" />プライベートも<br />大事にしたいママに<br class="pc" />オススメの仕事</p>
                    <button data-modal-link="graduate_a-okita" class="online__graduateButton"><span class="online__graduateButtonText">もっと読む</span><span class="online__graduateButtonArrow">→</span></button>
                </li>
                <li class="online__graduateItem">
                    <div class="online__graduateItemImageContent">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/graduate_y-ueda.png" alt="" class="online__graduateImage">
                        <div class="online__graduateItemContent">
                            <span class="online__graduateItemBefore">通販会社経営</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/icon_angle.png" alt="" class="online__graduateAngle">
                            <p class="online__graduateItemAfter"><strong class="online__graduatePickUpItemMarker">PR Web Marketer</strong></p>
                        </div>
                    </div>
                    <p class="online__graduateContent">PR経験０からPRを<br class="pc" />事業の柱の一つに！<br />PR塾の学びはシンプルで<br class="pc" />実践しやすい</p>
                    <button data-modal-link="graduate_y-ueda" class="online__graduateButton"><span class="online__graduateButtonText">もっと読む</span><span class="online__graduateButtonArrow">→</span></button>
                </li>
                <li class="online__graduateItem">
                    <div class="online__graduateItemImageContent">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/graduate_h-hachiman.png" alt="" class="online__graduateImage">
                        <div class="online__graduateItemContent">
                            <span class="online__graduateItemBefore">web制作会社勤務</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/icon_angle.png" alt="" class="online__graduateAngle">
                            <p class="online__graduateItemAfter"><strong class="online__graduatePickUpItemMarker">フリーランスの</strong></p>
                            <p class="online__graduateItemAfter"><strong class="online__graduatePickUpItemMarker">PRプランナー</strong></p>
                        </div>
                    </div>
                    <p class="online__graduateContent">全くの初心者から<br class="pc" />PRの虜に<br />地方在住でも紹介だけで<br class="pc" />５社担当</p>
                    <button data-modal-link="graduate_h-hachiman" class="online__graduateButton"><span class="online__graduateButtonText">もっと読む</span><span class="online__graduateButtonArrow">→</span></button>
                </li>
                <li class="online__graduateItem">
                    <div class="online__graduateItemImageContent">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/graduate_y-terao.png" alt="" class="online__graduateImage">
                        <div class="online__graduateItemContent">
                            <span class="online__graduateItemBefore">フリーランスの<br class="sp" />文章講座講師</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/icon_angle.png" alt="" class="online__graduateAngle">
                            <p class="online__graduateItemAfter"><strong class="online__graduatePickUpItemMarker">PRプロデューサー</strong></p>
                        </div>
                    </div>
                    <p class="online__graduateContent">自由だけでなく固定契約で<br class="pc" />安定も手に入るPRは、<br />何歳からでも始められる！</p>
                    <button data-modal-link="graduate_y-terao" class="online__graduateButton"><span class="online__graduateButtonText">もっと読む</span><span class="online__graduateButtonArrow">→</span></button>
                </li>
                <li class="online__graduateItem">
                    <div class="online__graduateItemImageContent">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/graduate_k-takenouchi.png" alt="" class="online__graduateImage">
                        <div class="online__graduateItemContent">
                            <span class="online__graduateItemBefore">会社員育休中</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/icon_angle.png" alt="" class="online__graduateAngle">
                            <p class="online__graduateItemAfter"><strong class="online__graduatePickUpItemMarker">ビジネス構築</strong></p>
                            <p class="online__graduateItemAfter"><strong class="online__graduatePickUpItemMarker">プロデューサー</strong></p>
                        </div>
                    </div>
                    <p class="online__graduateContent">起業塾に通わずに起業できて<br />長期で10社契約中</p>
                    <button data-modal-link="graduate_k-takenouchi" class="online__graduateButton"><span class="online__graduateButtonText">もっと読む</span><span class="online__graduateButtonArrow">→</span></button>
                </li>
                <li class="online__graduateItem">
                    <div class="online__graduateItemImageContent">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/graduate_s-nakatani.png" alt="" class="online__graduateImage">
                        <div class="online__graduateItemContent">
                            <span class="online__graduateItemBefore">大手専門商社のweb担当</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/icon_angle.png" alt="" class="online__graduateAngle">
                            <p class="online__graduateItemAfter"><strong class="online__graduatePickUpItemMarker">フリーランス企業PR</strong></p>
                        </div>
                    </div>
                    <p class="online__graduateContent">未経験でもテレビ・新聞・<br class="pc" />雑誌<br class="sp"> 計９社のメディア<br class="pc" />掲載ゲット！<br />18年勤務の会社から独立、PRプロデューサーに</p>
                    <button data-modal-link="graduate_s-nakatani" class="online__graduateButton"><span class="online__graduateButtonText">もっと読む</span><span class="online__graduateButtonArrow">→</span></button>
                </li>
                <li class="online__graduateItem">
                    <div class="online__graduateItemImageContent">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/graduate_y-naha.png" alt="" class="online__graduateImage">
                        <div class="online__graduateItemContent">
                            <span class="online__graduateItemBefore">協会所属のコーチ</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/icon_angle.png" alt="" class="online__graduateAngle">
                            <p class="online__graduateItemAfter"><strong class="online__graduatePickUpItemMarker">PRを生かした</strong></p>
                            <p class="online__graduateItemAfter"><strong class="online__graduatePickUpItemMarker">Webプロデューサー</strong></p>
                        </div>
                    </div>
                    <p class="online__graduateContent">９割口コミで仕事が途切れないのは、<br class="sp">PR塾で学んだから。コロナでも収入は<br class="sp">減らずに<br class="pc" />忙しくしています。</p>
                    <button data-modal-link="graduate_y-naha" class="online__graduateButton"><span class="online__graduateButtonText">もっと読む</span><span class="online__graduateButtonArrow">→</span></button>
                </li>
                <li class="online__graduateItem">
                    <div class="online__graduateItemImageContent">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/graduate_s-tanaka.png" alt="" class="online__graduateImage">
                        <div class="online__graduateItemContent">
                            <span class="online__graduateItemBefore">研修講師、プロコーチ、<br />人材育成<br class="sp">コンサルタント</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/icon_angle.png" alt="" class="online__graduateAngle">
                            <p class="online__graduateItemAfter"><strong class="online__graduatePickUpItemMarker">人材育成<br class="sp">コンサルタント、<br />プロコーチ</strong></p>
                        </div>
                    </div>
                    <p class="online__graduateContent">PR未経験からNHK、<br />朝日他、掲載多数<br />ブログ開始2週間で1万PV超え</p>
                    <button data-modal-link="graduate_s-tanaka" class="online__graduateButton"><span class="online__graduateButtonText">もっと読む</span><span class="online__graduateButtonArrow">→</span></button>
                </li>
                <li class="online__graduateItem">
                    <div class="online__graduateItemImageContent">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/graduate_c-kano.png" alt="" class="online__graduateImage">
                        <div class="online__graduateItemContent">
                            <span class="online__graduateItemBefore">歯科医院<br class="sp">事務、託児所運営</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/icon_angle.png" alt="" class="online__graduateAngle">
                            <p class="online__graduateItemAfter"><strong class="online__graduatePickUpItemMarker">団体代表</strong></p>
                        </div>
                    </div>
                    <p class="online__graduateContent">SNSを一度もやったこと<br class="pc" />なかった私が、<br class="sp">今ではSNS<br class="pc" />フル活用。団体も立ち上げ、<br class="sp">県知事から表彰も<br /></p>
                    <button data-modal-link="graduate_c-kano" class="online__graduateButton"><span class="online__graduateButtonText">もっと読む</span><span class="online__graduateButtonArrow">→</span></button>
                </li>
                <li class="online__graduateItem">
                    <div class="online__graduateItemImageContent">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/graduate_k-shiraki.png" alt="" class="online__graduateImage">
                        <div class="online__graduateItemContent">
                            <span class="online__graduateItemBefore">IT企業アドバイザー</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/icon_angle.png" alt="" class="online__graduateAngle">
                            <p class="online__graduateItemAfter"><strong class="online__graduatePickUpItemMarker">企業・出版PR担当者</strong></p>
                        </div>
                    </div>
                    <p class="online__graduateContent">PRを新たな自分の軸に！<br />４社と契約し活躍<br />一歩踏み出して良かった！</p>
                    <button data-modal-link="graduate_k-shiraki" class="online__graduateButton"><span class="online__graduateButtonText">もっと読む</span><span class="online__graduateButtonArrow">→</span></button>
                </li>
                <li class="online__graduateItem">
                    <div class="online__graduateItemImageContent">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/graduate_n-mase.png" alt="" class="online__graduateImage">
                        <div class="online__graduateItemContent">
                            <span class="online__graduateItemBefore">会社員　営業職</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/icon_angle.png" alt="" class="online__graduateAngle">
                            <p class="online__graduateItemAfter"><strong class="online__graduatePickUpItemMarker">会社員</strong></p>
                            <p class="online__graduateItemAfter"><strong class="online__graduatePickUpItemMarker">営業＋広報と副業でPR</strong></p>
                        </div>
                    </div>
                    <p class="online__graduateContent">営業しか取り柄のなかった<br class="pc" />私が<br class="sp" />営業＋PRで<br class="pc" />キャリアアップ<br />副業でPR支援し<br class="pc" />収入の柱が複数できた</p>
                    <button data-modal-link="graduate_n-mase" class="online__graduateButton"><span class="online__graduateButtonText">もっと読む</span><span class="online__graduateButtonArrow">→</span></button>
                </li>
                <li class="online__graduateItem">
                    <div class="online__graduateItemImageContent">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/graduate_h-futaki.png" alt="" class="online__graduateImage">
                        <div class="online__graduateItemContent">
                            <span class="online__graduateItemBefore">個人向け起業塾主宰</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/icon_angle.png" alt="" class="online__graduateAngle">
                            <p class="online__graduateItemAfter"><strong class="online__graduatePickUpItemMarker">法人向け 広報・</strong></p>
                            <p class="online__graduateItemAfter"><strong class="online__graduatePickUpItemMarker">マーケティング</strong></p>
                            <p class="online__graduateItemAfter"><strong class="online__graduatePickUpItemMarker">プロデューサー</strong></p>
                        </div>
                    </div>
                    <p class="online__graduateContent">島根でのPR支援、10社以上<br />地元経済誌に<br />インタビューも掲載</p>
                    <button data-modal-link="graduate_h-futaki" class="online__graduateButton"><span class="online__graduateButtonText">もっと読む</span><span class="online__graduateButtonArrow">→</span></button>
                </li>
            </ul>
            <h2 class="online__graduateSubHeading">Pick up</h2>
            <ul class="online__graduatePickUpList">
                <li class="online__graduatePickUpItem">
                    <div class="online__graduatePickUpOverview">
                        <p class="online__graduatePickUpCatchCopy">NHK、中日新聞など多くのメディアに出演。<br class="pc" />PRはやりがいもプライベートも<br class="pc" />大事にしたいママにオススメの仕事</p>
                        <div class="online__graduatePickUpProfile pc">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/graduate_a-okita.png" alt="" class="online__graduatePickUpImage">
                            <div class="online__graduatePickUpProfileText">
                                <p class="online__graduatePickUpName">沖田厚子さん</p>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/pickup_before_after_a-okita.png" alt="" class="online__graduatePickUpBeforeAfter">
                            </div>
                        </div>
                        <div class="online__graduatePickUpProfile sp">
                            <div class="online__graduatePickUpProfileImageWrapper">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/graduate_a-okita.png" alt="" class="online__graduatePickUpImage">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/pickup_before_after_a-okita.png" alt="" class="online__graduatePickUpBeforeAfter">
                            </div>
                            <p class="online__graduatePickUpName">沖田厚子さん</p>
                        </div>
                    </div>
                    <div class="online__graduatePickUpContent">
                        <p class="online__graduatePickUpContentText">結婚出産のタイミングで仕事を辞め、<strong class="online__graduatePickUpItemMarker">７年間専業主婦</strong>をしていました。<strong class="online__graduatePickUpItemMarker">今はPRの仕事と、ママ向け支援団体の代表を両立。</strong>メディアに掲載されやすい切り口から逆算して、自分の団体を作ったので、これまでNHKや毎日新聞、中日新聞など沢山のメディアから取材を頂くことができました。PRはお客様の数で仕事のボリュームを調整することも出来るので、<strong class="online__graduatePickUpItemMarker">ライフステージによって使える時間に変化がある女性にオススメしたい仕事</strong>です。</p>
                        <button data-modal-link="graduate_a-okita" class="online__graduateButton"><span class="online__graduateButtonText">ロングインタビューはこちら</span><span class="online__graduateButtonArrow">→</span></button>
                    </div>
                </li>
                <li class="online__graduatePickUpItem">
                    <div class="online__graduatePickUpOverview">
                        <p class="online__graduatePickUpCatchCopy">PR経験０からPRを事業の柱の一つに！<br />PR塾の学びはシンプルで実践しやすい</p>
                        <div class="online__graduatePickUpProfile pc">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/graduate_y-ueda.png" alt="" class="online__graduatePickUpImage">
                            <div class="online__graduatePickUpProfileText">
                                <p class="online__graduatePickUpName">植田雄一さん</p>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/pickup_before_after_y-ueda.png" alt="" class="online__graduatePickUpBeforeAfter">
                            </div>
                        </div>
                        <div class="online__graduatePickUpProfile sp">
                            <div class="online__graduatePickUpProfileImageWrapper">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/graduate_y-ueda.png" alt="" class="online__graduatePickUpImage">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/pickup_before_after_y-ueda.png" alt="" class="online__graduatePickUpBeforeAfter">
                            </div>
                            <p class="online__graduatePickUpName">植田雄一さん</p>
                        </div>
                    </div>
                    <div class="online__graduatePickUpContent">
                        <p class="online__graduatePickUpContentText">
                            元々は自社で通販をしていました。その仕事の中で広告やPRを外部の会社に委託してお願いしていたのですが、PR塾に通ってPRを学ぶことで、実は自分自身がPRを依頼される側となり、今では<strong class="online__graduatePickUpItemMarker">PRをもう一つの事業の柱として、複数の企業＆自治体と契約して仕事を行なっています。<br />
                            PR塾での学びを忠実に実践するだけで、実際に仕事としてPRを行うことができて、</strong>自分でもびっくりです。成果が出ると楽しいですし、どうやっているの？誰に教わったの？とお付き合いのある方々に聞かれて。そこで、PR塾でも学んだように「実績を見せる」を心がけてお話をすると仕事に繋がるんです。
                        </p>
                        <button data-modal-link="graduate_y-ueda" class="online__graduateButton"><span class="online__graduateButtonText">ロングインタビューはこちら</span><span class="online__graduateButtonArrow">→</span></button>
                    </div>
                </li>
                <li class="online__graduatePickUpItem">
                    <div class="online__graduatePickUpOverview">
                        <p class="online__graduatePickUpCatchCopy">全くの初心者からPRの虜に<br />地方在住でも紹介だけで５社担当</p>
                        <div class="online__graduatePickUpProfile pc">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/graduate_h-hachiman.png" alt="" class="online__graduatePickUpImage">
                            <div class="online__graduatePickUpProfileText">
                                <p class="online__graduatePickUpName">八幡英子さん</p>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/pickup_before_after_h-hachiman.png" alt="" class="online__graduatePickUpBeforeAfter">
                            </div>
                        </div>
                        <div class="online__graduatePickUpProfile sp">
                            <div class="online__graduatePickUpProfileImageWrapper">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/graduate_h-hachiman.png" alt="" class="online__graduatePickUpImage">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/pickup_before_after_h-hachiman.png" alt="" class="online__graduatePickUpBeforeAfter">
                            </div>
                            <p class="online__graduatePickUpName">八幡英子さん</p>
                        </div>
                    </div>
                    <div class="online__graduatePickUpContent">
                        <p class="online__graduatePickUpContentText"><strong class="online__graduatePickUpItemMarker">全くPRをやったことのないド素人</strong>でしたが、「会社や商品を愛さないとPRは出来ない」という言葉に、それなら私にも出来る！楽しい！と思いながら学びました。<strong class="online__graduatePickUpItemMarker">ずっとやりたかったことを見つけられた</strong>感じがして、自分でPRの仕事をすると決断。今では北海道に住みながら、SNSや広く学んだスキルで、認知向上の支援をしていて、<strong class="online__graduatePickUpItemMarker">紹介だけで５社のサポート</strong>をさせて頂いています。PR塾同期との繋がりが今も支えになっています。</p>
                        <button data-modal-link="graduate_h-hachiman" class="online__graduateButton"><span class="online__graduateButtonText">ロングインタビューはこちら</span><span class="online__graduateButtonArrow">→</span></button>
                    </div>
                </li>
                <li class="online__graduatePickUpItem">
                    <div class="online__graduatePickUpOverview">
                        <p class="online__graduatePickUpCatchCopy">未経験でもテレビ・新聞・雑誌 <br />計９社のメディア掲載ゲット！<br />18年勤務の会社から独立、PRプロデューサーに</p>
                        <div class="online__graduatePickUpProfile pc">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/graduate_s-nakatani.png" alt="" class="online__graduatePickUpImage">
                            <div class="online__graduatePickUpProfileText pc">
                                <p class="online__graduatePickUpName">中谷早織さん</p>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/pickup_before_after_s-nakatani.png" alt="" class="online__graduatePickUpBeforeAfter">
                            </div>
                        </div>
                        <div class="online__graduatePickUpProfile sp">
                            <div class="online__graduatePickUpProfileImageWrapper">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/graduate_s-nakatani.png" alt="" class="online__graduatePickUpImage">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/pickup_before_after_s-nakatani.png" alt="" class="online__graduatePickUpBeforeAfter">
                            </div>
                            <p class="online__graduatePickUpName">中谷早織さん</p>
                        </div>
                    </div>
                    <div class="online__graduatePickUpContent">
                        <p class="online__graduatePickUpContentText">私は専門商社で18年間広報を担当し、主にwebを利用した販促活動をしていました。商品に魅力があっても、<strong class="online__graduatePickUpItemMarker">伝え方や表現を間違えると届けたいお客様に届かない</strong>ことを感じ、webとPRを使ったらもっと世の中に広がっていくんじゃないかと、PR塾受講中にフリーランス広報としての独立を決意。今、自分が独立して、楽しんで仕事が出来ていることは、<strong class="online__graduatePickUpItemMarker">働く姿を子供に見せる上でも、本当に良いこと</strong>だなと思っています。</p>
                        <button data-modal-link="graduate_s-nakatani" class="online__graduateButton"><span class="online__graduateButtonText">ロングインタビューはこちら</span><span class="online__graduateButtonArrow">→</span></button>
                    </div>
                </li>
                <li class="online__graduatePickUpItem">
                    <div class="online__graduatePickUpOverview">
                        <p class="online__graduatePickUpCatchCopy">PR未経験からNHK、朝日他、掲載多数<br />ブログ開始2週間で1万PV超え</p>
                        <div class="online__graduatePickUpProfile pc">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/graduate_s-tanaka.png" alt="" class="online__graduatePickUpImage">
                            <div class="online__graduatePickUpProfileText pc">
                                <p class="online__graduatePickUpName">田中伸一さん</p>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/pickup_before_after_s-tanaka.png" alt="" class="online__graduatePickUpBeforeAfter">
                            </div>
                        </div>
                        <div class="online__graduatePickUpProfile sp">
                            <div class="online__graduatePickUpProfileImageWrapper">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/graduate_s-tanaka.png" alt="" class="online__graduatePickUpImage">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/pickup_before_after_s-tanaka.png" alt="" class="online__graduatePickUpBeforeAfter">
                            </div>
                            <p class="online__graduatePickUpName">田中伸一さん</p>
                        </div>
                    </div>
                    <div class="online__graduatePickUpContent">
                        <p class="online__graduatePickUpContentText">私は元々銀行員だったのですが、息子が生まれてダウン症だと分かったことをきっかけに、転勤のない会社に転職、そこでコーチングや人材育成のノウハウを学び、プロコーチとして独立しました。<br />
                            PR塾に入ったのは、自分の仕事以外で息子から教わったことについての講演活動をやっていきたいと思っていて、そのために出版をしたい。しかし、個人の体験談の本は売れないからと出版がすぐには決まらなかったんです。そこで、<strong class="online__graduatePickUpItemMarker">出版をするために、まず個人としての認知度をあげたいと考え、PR塾に通うことを決めました。</strong>
                        </p>
                        <button data-modal-link="graduate_s-tanaka" class="online__graduateButton"><span class="online__graduateButtonText">ロングインタビューはこちら</span><span class="online__graduateButtonArrow">→</span></button>
                    </div>
                </li>
                <li class="online__graduatePickUpItem">
                    <div class="online__graduatePickUpOverview">
                        <p class="online__graduatePickUpCatchCopy">９割口コミで仕事が途切れないのは、<br class="pc" />PR塾で学んだから。<br class="sp">コロナでも<br class="pc" />収入は減らずに<br class="sp" />忙しくしています。</p>
                        <div class="online__graduatePickUpProfile pc">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/graduate_y-naha.png" alt="" class="online__graduatePickUpImage">
                            <div class="online__graduatePickUpProfileText">
                                <p class="online__graduatePickUpName">那波佑香さん</p>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/pickup_before_after_y-naha.png" alt="" class="online__graduatePickUpBeforeAfter">
                            </div>
                        </div>
                        <div class="online__graduatePickUpProfile sp">
                            <div class="online__graduatePickUpProfileImageWrapper">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/graduate_y-naha.png" alt="" class="online__graduatePickUpImage">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/pickup_before_after_y-naha.png" alt="" class="online__graduatePickUpBeforeAfter">
                            </div>
                            <p class="online__graduatePickUpName">那波佑香さん</p>
                        </div>
                    </div>
                    <div class="online__graduatePickUpContent">
                        <p class="online__graduatePickUpContentText">私にとっての<strong class="online__graduatePickUpItemMarker">ターニングポイントは間違いなくPR塾。</strong>今まで経験値でやってきたことが、ロジカルに学んだことで、自信を持ってお客様にサービス提供できるようになりました。<br />クライアントもHPから集客できるようになったり、メディア出演を獲得できたりと<strong class="online__graduatePickUpItemMarker">成果が出るようになった</strong>のは、PR塾のおかげです。<br />毎月、仕事の<strong class="online__graduatePickUpItemMarker">９割が口コミの紹介</strong>で埋まっていて、ありがたいことにコロナの状況でも収入に影響を受けていません。</p>
                        <button data-modal-link="graduate_y-naha" class="online__graduateButton"><span class="online__graduateButtonText">ロングインタビューはこちら</span><span class="online__graduateButtonArrow">→</span></button>
                    </div>
                </li>
            </ul>
            <div class="modal graduate_a-okita">
                <div class="modal__inner">
                    <div class="modal__bg"></div>
                    <div class="modal__cont pc">
                        <div class="modal__contOverview">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/modal_a-okita.jpg" alt="" class="modal__graduatePhoto">
                            <?php get_template_part('template-parts/online/modal-a-okita-overview'); ?>
                        </div>
                        <div class="modal__contCotents">
                            <?php get_template_part('template-parts/online/modal-a-okita-contents'); ?>
                        </div>
                        <div class="modal__closeButton"></div>
                    </div>
                    <div class="modal__cont sp">
                        <div class="modal__closeButton"></div>
                        <div class="modal__contOverview">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/modal_a-okita.jpg" alt="" class="modal__graduatePhoto">
                            <?php get_template_part('template-parts/online/modal-a-okita-contents'); ?>
                        </div>
                        <div class="modal__contCotents">
                            <?php get_template_part('template-parts/online/modal-a-okita-overview'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal graduate_y-ueda">
                <div class="modal__inner">
                    <div class="modal__bg"></div>
                    <div class="modal__cont pc">
                        <div class="modal__contOverview">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/modal_y-ueda.jpg" alt="" class="modal__graduatePhoto">
                            <?php get_template_part('template-parts/online/modal-y-ueda-overview'); ?>
                        </div>
                        <div class="modal__contCotents">
                            <?php get_template_part('template-parts/online/modal-y-ueda-contents'); ?>
                        </div>
                        <div class="modal__closeButton"></div>
                    </div>
                    <div class="modal__cont sp">
                        <div class="modal__closeButton"></div>
                        <div class="modal__contOverview">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/modal_y-ueda.jpg" alt="" class="modal__graduatePhoto">
                            <?php get_template_part('template-parts/online/modal-y-ueda-contents'); ?>
                        </div>
                        <div class="modal__contCotents">
                            <?php get_template_part('template-parts/online/modal-y-ueda-overview'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal graduate_h-hachiman">
                <div class="modal__inner">
                    <div class="modal__bg"></div>
                    <div class="modal__cont pc">
                        <div class="modal__contOverview">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/modal_h-hachiman.jpg" alt="" class="modal__graduatePhoto">
                            <?php get_template_part('template-parts/online/modal-h-hachiman-overview'); ?>
                        </div>
                        <div class="modal__contCotents">
                            <?php get_template_part('template-parts/online/modal-h-hachiman-contents'); ?>
                        </div>
                        <div class="modal__closeButton"></div>
                    </div>
                    <div class="modal__cont sp">
                        <div class="modal__closeButton"></div>
                        <div class="modal__contOverview">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/modal_h-hachiman.jpg" alt="" class="modal__graduatePhoto">
                            <?php get_template_part('template-parts/online/modal-h-hachiman-contents'); ?>
                        </div>
                        <div class="modal__contCotents">
                            <?php get_template_part('template-parts/online/modal-h-hachiman-overview'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal graduate_y-terao">
                <div class="modal__inner">
                    <div class="modal__bg"></div>
                    <div class="modal__cont pc">
                        <div class="modal__contOverview">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/modal_y-terao.jpg" alt="" class="modal__graduatePhoto">
                            <?php get_template_part('template-parts/online/modal-y-terao-overview'); ?>
                        </div>
                        <div class="modal__contCotents">
                            <?php get_template_part('template-parts/online/modal-y-terao-contents'); ?>
                        </div>
                        <div class="modal__closeButton"></div>
                    </div>
                    <div class="modal__cont sp">
                        <div class="modal__closeButton"></div>
                        <div class="modal__contOverview">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/modal_y-terao.jpg" alt="" class="modal__graduatePhoto">
                            <?php get_template_part('template-parts/online/modal-y-terao-contents'); ?>
                        </div>
                        <div class="modal__contCotents">
                            <?php get_template_part('template-parts/online/modal-y-terao-overview'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal graduate_k-takenouchi">
                <div class="modal__inner">
                    <div class="modal__bg"></div>
                    <div class="modal__cont pc">
                        <div class="modal__contOverview">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/modal_k-takenouchi.jpg" alt="" class="modal__graduatePhoto">
                            <?php get_template_part('template-parts/online/modal-k-takenouchi-overview'); ?>
                        </div>
                        <div class="modal__contCotents">
                            <?php get_template_part('template-parts/online/modal-k-takenouchi-contents'); ?>
                        </div>
                        <div class="modal__closeButton"></div>
                    </div>
                    <div class="modal__cont sp">
                        <div class="modal__closeButton"></div>
                        <div class="modal__contOverview">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/modal_k-takenouchi.jpg" alt="" class="modal__graduatePhoto">
                            <?php get_template_part('template-parts/online/modal-k-takenouchi-contents'); ?>
                        </div>
                        <div class="modal__contCotents">
                            <?php get_template_part('template-parts/online/modal-k-takenouchi-overview'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal graduate_s-nakatani">
                <div class="modal__inner">
                    <div class="modal__bg"></div>
                    <div class="modal__cont pc">
                        <div class="modal__contOverview">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/modal_s-nakatani.jpg" alt="" class="modal__graduatePhoto">
                            <?php get_template_part('template-parts/online/modal-s-nakatani-overview'); ?>
                        </div>
                        <div class="modal__contCotents">
                            <?php get_template_part('template-parts/online/modal-s-nakatani-contents'); ?>
                        </div>
                        <div class="modal__closeButton"></div>
                    </div>
                    <div class="modal__cont sp">
                        <div class="modal__closeButton"></div>
                        <div class="modal__contOverview">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/modal_s-nakatani.jpg" alt="" class="modal__graduatePhoto">
                            <?php get_template_part('template-parts/online/modal-s-nakatani-contents'); ?>
                        </div>
                        <div class="modal__contCotents">
                            <?php get_template_part('template-parts/online/modal-s-nakatani-overview'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal graduate_y-naha">
                <div class="modal__inner">
                    <div class="modal__bg"></div>
                    <div class="modal__cont pc">
                        <div class="modal__contOverview">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/modal_y-naha.jpg" alt="" class="modal__graduatePhoto">
                            <?php get_template_part('template-parts/online/modal-y-naha-overview'); ?>
                        </div>
                        <div class="modal__contCotents">
                            <?php get_template_part('template-parts/online/modal-y-naha-contents'); ?>
                        </div>
                        <div class="modal__closeButton"></div>
                    </div>
                    <div class="modal__cont sp">
                        <div class="modal__closeButton"></div>
                        <div class="modal__contOverview">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/modal_y-naha.jpg" alt="" class="modal__graduatePhoto">
                            <?php get_template_part('template-parts/online/modal-y-naha-contents'); ?>
                        </div>
                        <div class="modal__contCotents">
                            <?php get_template_part('template-parts/online/modal-y-naha-overview'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal graduate_s-tanaka">
                <div class="modal__inner">
                    <div class="modal__bg"></div>
                    <div class="modal__cont pc">
                        <div class="modal__contOverview">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/modal_s-tanaka.jpg" alt="" class="modal__graduatePhoto">
                            <?php get_template_part('template-parts/online/modal-s-tanaka-overview'); ?>
                        </div>
                        <div class="modal__contCotents">
                            <?php get_template_part('template-parts/online/modal-s-tanaka-contents'); ?>
                        </div>
                        <div class="modal__closeButton"></div>
                    </div>
                    <div class="modal__cont sp">
                        <div class="modal__closeButton"></div>
                        <div class="modal__contOverview">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/modal_s-tanaka.jpg" alt="" class="modal__graduatePhoto">
                            <?php get_template_part('template-parts/online/modal-s-tanaka-contents'); ?>
                        </div>
                        <div class="modal__contCotents">
                            <?php get_template_part('template-parts/online/modal-s-tanaka-overview'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal graduate_c-kano">
                <div class="modal__inner">
                    <div class="modal__bg"></div>
                    <div class="modal__cont pc">
                        <div class="modal__contOverview">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/modal_c-kano.jpg" alt="" class="modal__graduatePhoto">
                            <?php get_template_part('template-parts/online/modal-c-kano-overview'); ?>
                        </div>
                        <div class="modal__contCotents">
                            <?php get_template_part('template-parts/online/modal-c-kano-contents'); ?>
                        </div>
                        <div class="modal__closeButton"></div>
                    </div>
                    <div class="modal__cont sp">
                        <div class="modal__closeButton"></div>
                        <div class="modal__contOverview">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/modal_c-kano.jpg" alt="" class="modal__graduatePhoto">
                            <?php get_template_part('template-parts/online/modal-c-kano-contents'); ?>
                        </div>
                        <div class="modal__contCotents">
                            <?php get_template_part('template-parts/online/modal-c-kano-overview'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal graduate_k-shiraki">
                <div class="modal__inner">
                    <div class="modal__bg"></div>
                    <div class="modal__cont pc">
                        <div class="modal__contOverview">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/modal_k-shiraki.jpg" alt="" class="modal__graduatePhoto">
                            <?php get_template_part('template-parts/online/modal-k-shiraki-overview'); ?>
                        </div>
                        <div class="modal__contCotents">
                            <?php get_template_part('template-parts/online/modal-k-shiraki-contents'); ?>
                        </div>
                        <div class="modal__closeButton"></div>
                    </div>
                    <div class="modal__cont sp">
                        <div class="modal__closeButton"></div>
                        <div class="modal__contOverview">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/modal_k-shiraki.jpg" alt="" class="modal__graduatePhoto">
                            <?php get_template_part('template-parts/online/modal-k-shiraki-contents'); ?>
                        </div>
                        <div class="modal__contCotents">
                            <?php get_template_part('template-parts/online/modal-k-shiraki-overview'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal graduate_n-mase">
                <div class="modal__inner">
                    <div class="modal__bg"></div>
                    <div class="modal__cont pc">
                        <div class="modal__contOverview">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/modal_n-mase.jpg" alt="" class="modal__graduatePhoto">
                            <?php get_template_part('template-parts/online/modal-n-mase-overview'); ?>
                        </div>
                        <div class="modal__contCotents">
                            <?php get_template_part('template-parts/online/modal-n-mase-contents'); ?>
                        </div>
                        <div class="modal__closeButton"></div>
                    </div>
                    <div class="modal__cont sp">
                        <div class="modal__closeButton"></div>
                        <div class="modal__contOverview">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/modal_n-mase.jpg" alt="" class="modal__graduatePhoto">
                            <?php get_template_part('template-parts/online/modal-n-mase-contents'); ?>
                        </div>
                        <div class="modal__contCotents">
                            <?php get_template_part('template-parts/online/modal-n-mase-overview'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal graduate_h-futaki">
                <div class="modal__inner">
                    <div class="modal__bg"></div>
                    <div class="modal__cont pc">
                        <div class="modal__contOverview">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/modal_h-futaki.jpg" alt="" class="modal__graduatePhoto">
                            <?php get_template_part('template-parts/online/modal-h-futaki-overview'); ?>
                        </div>
                        <div class="modal__contCotents">
                            <?php get_template_part('template-parts/online/modal-h-futaki-contents'); ?>
                        </div>
                        <div class="modal__closeButton"></div>
                    </div>
                    <div class="modal__cont sp">
                        <div class="modal__closeButton"></div>
                        <div class="modal__contOverview">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/modal_h-futaki.jpg" alt="" class="modal__graduatePhoto">
                            <?php get_template_part('template-parts/online/modal-h-futaki-contents'); ?>
                        </div>
                        <div class="modal__contCotents">
                            <?php get_template_part('template-parts/online/modal-h-futaki-overview'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="online__after">
            <div class="online__afterWrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/after_photo01.jpg" alt="" class="online__afterImage">
                <div>
                    <h1 class="online__afterHeading">在宅PRスキルが<br />身につくと・・・</h1>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/after01.png" alt="" class="online__afterSpeechBubble">
                    <p class="online__afterParagraph">在宅PRのスキルが身につくと、「SNS」「テレビや新聞といったマスメディア」「販促物・HP・レター」「各種口コミ」を通して企業や個人事業主の方の「知ってもらう活動」をサポートすることができます。</p>
                </div>
            </div>
            <div class="online__afterWrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/after_photo02.jpg" alt="" class="online__afterImage">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/after02.png" alt="" class="online__afterSpeechBubble">
                    <p class="online__afterParagraph">
                        経験は必要ありません。<br />
                        PRによって、周りの埋もれているサービス、頑張っている人を、沢山の人に知ってもらうサポートをしたい！という、あなたの想いと行動力があれば、大丈夫です。
                    </p>
                    <p class="online__afterParagraph">
                        PRは、自宅で完結できるお仕事です。決められた時間に会社に行って働くのではないからこそ、家族や趣味、副業など、仕事以外のことも大切にした生き方が出来ます。
                    </p>
                    <p class="online__afterParagraph">
                        働き方を変えることは、生き方を変えること。新しいライフとキャリアを手にするきっかけにしていただけたらこれまで、対面講座と動画講座で3年間にわたり開催してきたPR塾が、お家で繋がりながら学ぶ、「在宅PR塾」となってパワーアップします。
                    </p>
                </div>
            </div>
        </section>
        <section class="online__support">
            <div class="online__supportInner" id="online-support">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/icon_handshake.png" alt="" class="online__supportIcon">
                <h1 class="online__supportHeading">お仕事あっせん<br />積極サポート付き</h1>
                <p class="online__supportParagraph">申込みされた方には、在宅PRお仕事マッチングのfacebookページへご招待いたします。<br />こちらで、<strong class="online__graduatePickUpItemMarker">積極的にお仕事の仲介やご紹介</strong>をさせて頂きます。</p>
                <p class="online__supportParagraph">身に付けた在宅PRのスキルを生かせるよう、より多くのお仕事と出会う機会を増やします。<br />ぜひ、多くの企業に貢献していきましょう。</p>
                <h2 class="online__supportSubHeading">賛同企業　一部ご紹介</h2>
                <ul class="online__supportCompanyList">
                    <li class="online__supportCompanyItem">
                        <div class="online__supportCompanyOverview">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/logo_advantage.png" alt="" class="online__supportLogo">
                            <a href="//ad-vantage.jp" class="online__supportCompanyLink">サイトはこちら<span class="online__lecturerButtonArrow">→</span></a>
                        </div>
                        <div class="online__supportComanyContents">
                            <h3 class="online__supportCompanyHeading">株式会社アドヴァンテージ様のご紹介</h3>
                            <p class="online__supportCompanyContent"><strong class="online__graduatePickUpItemMarker">上場企業から中小企業まで支援実績1000社以上<br />創業15年目の採用マーケティング会社</strong></p>
                            <p class="online__supportCompanyContent">アドヴァンテージの「誰もが活躍できる世の中にしたい」という想いと、在宅PR塾のコンセプトに共通点を感じています。一人ひとりが自分の仕事を通して輝くような、明るくて華やかな日本になると良いですね。</p>
                            <p class="online__supportCompanyContent">株式会社アドヴァンテージ　<br class="sp" />代表取締役社長　中野 尚範</p>
                        </div>
                    </li>
                    <li class="online__supportCompanyItem">
                        <div class="online__supportCompanyOverview">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/logo_cozre.png" alt="" class="online__supportLogo">
                            <a href="//cozre.co.jp" class="online__supportCompanyLink">サイトはこちら<span class="online__lecturerButtonArrow">→</span></a>
                        </div>
                        <div class="online__supportComanyContents">
                            <h3 class="online__supportCompanyHeading">株式会社コズレ様のご紹介</h3>
                            <p class="online__supportCompanyContent"><strong class="online__graduatePickUpItemMarker">60万件の世帯が会員。月間340万人利用。<br />子育てマッチングプラットフォーム「COZRE」</strong></p>
                            <p class="online__supportCompanyContent">子育てに悩んでいるご家族のお役にたてるITを活用したサービス展開をしています。育児に関わる全ての人にとって 最高に「わくわくする」世界を実現していきたいと思っています。</p>
                            <p class="online__supportCompanyContent">株式会社コズレ　<br class="sp">代表取締役　田中 穣二郎</p>
                        </div>
                    </li>
                </ul>
                <p class="online__supportParagraph"><strong class="online__marker">マッチング費用はかかりません。</strong><br class="pc" />皆さんのご活躍と人生が豊かになることを願っています。</p>
                <p class="online__supportParagraph online__supportSubHeading"><strong class="online__marker">＜収入の目安・案件の主な流れ＞</strong></p>
                <p class="online__supportParagraph">企業と打ち合わせ→PR戦略立案→プレスリリース作成→メディアアプローチ・郵送<br />その他、メディアアプローチ以外に SNS、メルマガ、HP作成などのサポートなど</p>
                <p class="online__supportParagraph -withCaution">
                    例）未経験だったAさん　週50時間の稼働で月10案件実施、月収50万円〜<br />
                    経験があったBさん　週8時間の稼働で月4案件実施、月収45万円〜<br />
                </p>
                <span class="online__supportSpan">※実際のPR塾卒業生の声となります。</span>
                <p class="online__supportCaution">
                    ※講座終了後、<br>
                    <strong>質問できるPR塾卒業生限定の「PR塾サポートサロン」</strong>のご用意があります。<br />
                    皆さんのPRのお仕事をLITAがバックアップする環境となります。（月額制）
                </p>
            </div>
        </section>
        <section class="online__recommend" id="online-recommend">
            <h1 class="online__recommendHeading">こんな方に<strong class="online__dot">オ</strong><strong class="online__dot">ス</strong><strong class="online__dot">ス</strong><strong class="online__dot">メ</strong><br class="sp" />です</h1>
            <ul class="online__recommendList">
                <li class="online__recommendItem">
                    <span class="online__recommendImageWrapper"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/recommend01.png" alt="" class="online__recommendImage"></span>
                    <p class="online__recommendParagraph"><strong class="online__graduatePickUpItemMarker">自宅でできる、</strong>やりがいのある<br class="pc" />仕事のスキルを身につけたい</strong></p>
                </li>
                <li class="online__recommendItem">
                    <span class="online__recommendImageWrapper"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/recommend02.png" alt="" class="online__recommendImage"></span>
                    <p class="online__recommendParagraph"><strong class="online__graduatePickUpItemMarker">自分で稼ぐ力</strong>をつけたい<br class="pc" />キャリアチェンジしたい</strong></p>
                </li>
                <li class="online__recommendItem">
                    <span class="online__recommendImageWrapper"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/recommend03.png" alt="" class="online__recommendImage"></span>
                    <p class="online__recommendParagraph">PRの仕事を副業として、<br class="pc" /><strong class="online__graduatePickUpItemMarker">収入の柱を増やしたい</strong></p>
                </li>
                <li class="online__recommendItem">
                    <span class="online__recommendImageWrapper"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/recommend04.png" alt="" class="online__recommendImage"></span>
                    <p class="online__recommendParagraph">企業広報として、<br class="pc" /><strong class="online__graduatePickUpItemMarker">更にスキルアップ</strong>したい</p>
                </li>
                <li class="online__recommendItem">
                    <span class="online__recommendImageWrapper"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/recommend05.png" alt="" class="online__recommendImage"></span>
                    <p class="online__recommendParagraph">経営者として、PR広報の<br class="pc" /><strong class="online__graduatePickUpItemMarker">最新のスキル</strong>を身につけたい</p>
                </li>
            </ul>
        </section>
        <section class="online__course">
            <div class="online__courseHeadingWrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/course01.jpg" alt="" class="online__courseHeadingBg">
                <div class="online__courseLabel">
                    <span class="online__courseLabelSpan">おすすめ</span>
                    <span class="online__courseLabelSpan">初心者・未経験でも大丈夫</span>
                </div>
                <h1 class="online__courseHeading">選べる２つのコース</h1>
            </div>
            <div class="online__courseWrapper">
                <div class="online__courseInner top" id="online-workCourse">
                    <?php get_template_part('template-parts/online/template-course-header') ?>
                    <h2 class="online__courseName isOpen"><span class="online__courseNameSpan">在宅PR お仕事コース<span class="online__courseTriangle"></span></span></h2>
                    <div class="online__courseContentDetail">
                        <h3 class="online__courseSubHeading">こんな方へ</h3>
                        <ul class="online__courseList">
                            <li class="online__courseItem">初めてPRを学ぶ方</li>
                            <li class="online__courseItem">自宅でPRの仕事をしたい方</li>
                            <li class="online__courseItem">自分自身の自立のためにPRを学びたい方</li>
                        </ul>
                        <h3 class="online__courseSubHeading">在宅PR　お仕事コースの流れ</h3>
                        <p class="online__courseFlowText">PRの仕事の依頼を受けて、喜んで頂けるサービス提供が出来るようになるために<br class="pc" />必要なスキルを、丸ごとつめこみました。</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/course_chart.png" alt="" class="online__courseChart pc">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/course_chart_sp.png" alt="" class="online__courseChart sp">
                        <h4 class="online__courseDay">１日目：PR基礎知識とPR設計</h4>
                        <p class="online__courseContent">
                            活躍している先輩紹介　３ヶ月後の自分をイメージ<br />
                            そもそもPRとは？広告との違いや必要性 基礎知識<br />
                            商品やサービスの魅力を打ち出すPR設計前半
                        </p>
                        <h4 class="online__courseDay">２日目：PR設計活用法 プレスリリース基礎編</h4>
                        <p class="online__courseContent">
                            商品やサービスの魅力を打ち出すPR設計を完成<br />
                            PR設計の活用法（SNSプロフィール、自己紹介）<br />
                            プレスリリース基礎編
                        </p>
                        <h4 class="online__courseDay">３日目：メディアPR　プレスリリース作成</h4>
                        <p class="online__courseContent">
                            テレビ、新聞、雑誌などで紹介されるメディアアプローチとは<br />
                            プレスリリースの書き方 読んでもらえるタイトルの付け方
                        </p>
                        <h4 class="online__courseDay">４日目：メディアPR　メディアアプローチ</h4>
                        <p class="online__courseContent">
                            メディアリストの作り方<br />
                            プレスリリースの送り方
                        </p>
                        <h4 class="online__courseDay">５日目：SNS設計</h4>
                        <p class="online__courseContent">
                            SNS各ツールごとの活用法<br />
                            ファンを増やすSNS投稿術<br />
                            SNSを活用した集客術<br />
                            メルマガ文章設計とポイント<br />
                            自分らしさを生かしたブランディング・世界観構築
                        </p>
                        <h4 class="online__courseDay">６日目：「PRディレクター」 としてのスキル 仕事の進め方</h4>
                        <p class="online__courseContent">
                            企業へのPR案件の獲得方法と金額提案について<br />
                            PRの仕事の進め方、戦略構築<br />
                            ★「PRディレクター」認定のための資格試験実施
                        </p>
                        <h3 class="online__courseScheduleHeading">在宅PR<br class="sp"> お仕事コース2期</h3>
                        <h4 class="online__courseScheduleSubHeading">日程</h4>
                        <table class="online__courseScheduleTable">
                            <tr>
                                <th>第1回目</th>
                                <td>
                                    9月10日(木)　13:00〜16:00
                                   
                                </td>
                            </tr>
                            <tr>
                                <th>第2回目</th>
                                <td>9月24日(木)　13:00〜16:00</td>
                            </tr>
                            <tr>
                                <th>第3回目</th>
                                <td>10月8日(木)　13:00〜16:00</td>
                            </tr>
                            <tr>
                                <th>第4回目</th>
                                <td>10月22日(木)　13:00〜16:00</td>
                            </tr>
                            <tr>
                                <th>第5回目</th>
                                <td>11月5日(木)　13:00〜16:00</td>
                            </tr>
                            <tr>
                                <th>第6回目</th>
                                <td>11月19日(木)　13:00〜16:00</td>
                            </tr>
                        </table>
                        <small class="online__courseScheduleCaution">
                            ※最終回の講義後 懇親会予定<br />
                            （コロナウイルスの影響によりオンラインとなります）
                        </small>
                        <h4 class="online__courseScheduleSubHeading">内容</h4>
                        <ul class="online__courseScheduleList">
                            <li class="online__courseScheduleItem">
                                3時間　オンラインリアルタイム<br class="sp">授業　× ６日
                                <span class="online__courseScheduleItemCaution">※授業の様子は動画で共有するので、子供がいながらでも安心</span>
                            </li>
                            <li class="online__courseScheduleItem">
                                テキスト付き
                            </li>
                            <li class="online__courseScheduleItem">
                                2.5ヶ月の質問フォロー
                            </li>
                            <li class="online__courseScheduleItem">
                                笹木郁乃との４対１グルコン1時間付き
                            </li>
                            <li class="online__courseScheduleItem">
                                コンテンツボリューム総ページ 約200ページ
                            </li>
                        </ul>
                    </div>
                </div>
                <p class="online__courseInterval">より広報の専門性を高め、広報のプロとしてスキルを磨きたい方は・・</p>
                <div class="online__courseInner" id="online-proCourse">
                    <?php get_template_part('template-parts/online/template-course-header') ?>
                    <h2 class="online__courseName isOpen"><span class="online__courseNameSpan">広報PR　プロコース<span class="online__courseTriangle"></span></span></h2>
                    <div class="online__courseContentDetail">
                        <h3 class="online__courseSubHeading">こんな方へ</h3>
                        <ul class="online__courseList">
                            <li class="online__courseItem">企業広報の方</li>
                            <li class="online__courseItem">PRフリーランスの方</li>
                            <li class="online__courseItem">経営者の方</li>
                        </ul>
                        <h3 class="online__courseSubHeading">在宅PR プロコースの流れ</h3>
                        <p class="online__courseFlowText -proCourse">
                            日々変わっていく最新のPRノウハウが学べる、PRスキルに特化した内容で構成されています。<br />
                            「実践し、成果を導く」ための24時間。
                        </p>
                        <h4 class="online__courseDay">１日目：PR設計</h4>
                        <p class="online__courseContent">
                            「売れる・選ばれる」効果的なPR設計
                        </p>
                        <h4 class="online__courseDay">２日目：メディアPR①</h4>
                        <p class="online__courseContent">
                            メディアへの掲載率が高まるプレスリリースの作り方と作成実践<br />
                            メディアへの長尺獲得に有効な自社紹介資料の作り方と作成実践
                        </p>
                        <h4 class="online__courseDay">３日目：メディアPR②</h4>
                        <p class="online__courseContent">
                            テレビ、新聞、雑誌、WEB　各媒体ごとのメディアアプローチ方法<br />
                            掲載確率を高めるメディア記者のリサーチ術と実践選定練習<br />
                            掲載確率を高めるメディアへの電話アプローチ
                        </p>
                        <h4 class="online__courseDay">４日目：SNS設計</h4>
                        <p class="online__courseContent">
                            SNS各ツールごとの活用法<br />
                            ファンを増やすSNS投稿術<br />
                            自社SNSアカウントと個人SNSアカウントの活用法と相乗効果術<br />
                            SNSインフルエンサーを活用した認知活動のステップ
                        </p>
                        <h4 class="online__courseDay">５日目：法人・行政PR・企画書づくり</h4>
                        <p class="online__courseContent">
                            法人向け提案企画書の作り方と送り方<br />
                            掲載確率高めるメディアへのプレゼン術<br />
                            魅力を100％伝えるための取材対応術と実践練習<br />
                            掲載確率高めるメディアアプローチ応用術（電話・企画書）
                        </p>
                        <h4 class="online__courseDay">６日目：メディアPR③、出版PR　</h4>
                        <p class="online__courseContent">
                            ベストセラーを狙うための出版PR戦略<br />
                            狙いたいテレビで紹介されるための企画書作成<br />
                            売上拡大のためのメディア戦略　考え方と構築法<br />
                            自宅でも取材を獲得できるメディアアプローチ方法<br />
                            ★「PRプロデューサー」認定のための資格試験実施<br />
                            企業へのPR案件の獲得方法と金額提案について<br />
                            PRの仕事の進め方、戦略構築
                        </p>
                        <h3 class="online__courseScheduleHeading">広報PRプロコース2期</h3>
                        <h4 class="online__courseScheduleSubHeading">日程</h4>
                        <table class="online__courseScheduleTable">
                            <tr>
                                <th>第1回目</th>
                                <td>
                                    9月17日(木)　13:00〜17:00
                                    
                                </td>
                            </tr>
                            <tr>
                                <th>第2回目</th>
                                <td>10月1日(木)　13:00〜17:00</td>
                            </tr>
                            <tr>
                                <th>第3回目</th>
                                <td>10月21日(水)　13:00〜17:00</td>
                            </tr>
                            <tr>
                                <th>第4回目</th>
                                <td>11月12日(木)　13:00〜17:00</td>
                            </tr>
                            <tr>
                                <th>第5回目</th>
                                <td>12月3日(木)　13:00〜17:00</td>
                            </tr>
                            <tr>
                                <th>第6回目</th>
                                <td>12月23日(水)　13:00〜17:00</td>
                            </tr>
                        </table>
                        <small class="online__courseScheduleCaution">
                            ※初回と最終回の講義後 懇親会予定<br />
                            （コロナウイルスの影響によりオンラインとなります）
                        </small>
                        <h4 class="online__courseScheduleSubHeading">内容</h4>
                        <ul class="online__courseScheduleList">
                            <li class="online__courseScheduleItem">
                                ４時間 オンラインリアルタイム<br class="sp">授業　× ６日
                                <span class="online__courseScheduleItemCaution">※授業の様子は動画で共有します</span>
                            </li>
                            <li class="online__courseScheduleItem">
                                テキスト付き
                            </li>
                            <li class="online__courseScheduleItem">
                                3ヶ月の質問フォロー
                            </li>
                            <li class="online__courseScheduleItem">
                                笹木郁乃との個別相談会 20分付き
                            </li>
                            <li class="online__courseScheduleItem">
                                コンテンツボリューム　お仕事コースの150%増し（総300ページ）
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="online__conversionArea middle">
            <h1 class="online__conversionAreaHeading">
                <strong class="online__marker">まずは無料体験</strong>から<br />
                はじめましょう
            </h1>
            <div class="online__conversionAreaButtons">
                <div class="online__conversionAreaWrapper">
                    <p class="online__conversionAreaParagraph reserve">※無料体験は7月28日/31日に開催致します<br />無料体験のご登録はコチラ</p>
                    <a href="//ws.formzu.net/fgen/S34220173/" class="online__conversionButton reserve">
                        無料体験申込み
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/icon_reservation.png" alt="">
                    </a>
                </div>
                <div class="online__conversionAreaWrapper">
                    <p class="online__conversionAreaParagraph application">※在宅PR塾/広報PRプロコース <br>お申込みはこちら</p>
                    <a href="//ws.formzu.net/fgen/S86504297/" class="online__conversionButton application">
                        講座申込み
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/icon_application.png" alt="">
                    </a>
                </div>
            </div>
        </section>
        <?php get_template_part('template-parts/online/template-full-thanks'); ?>
        <section class="online__reason" id="online-reason">
            <h1 class="online__reasonHeading">お家で<strong class="online__dot">学</strong><strong class="online__dot">び</strong><strong class="online__dot">な</strong><strong class="online__dot">が</strong><strong class="online__dot">ら</strong><br class="sp" /><strong class="online__dot">結</strong><strong class="online__dot">果</strong><strong class="online__dot">が</strong><strong class="online__dot">出</strong><strong class="online__dot">る</strong>4つの理由</h1>
            <ul class="online__reasonList">
                <li class="online__reasonItem">
                    <h2 class="online__reasonItemHeading">
                        <span class="online__reasonNumber">01</span>
                        <span>繋がりながら<strong class="online__underline">リアルタイム</strong>で</span>
                    </h2>
                    <p class="online__reasonContent">
                        講師と繋がりながら学ぶためその場で質問やワークを完成させることが出来ます。<br />
                        万が一欠席の際も、動画を共有するのでそちらで学んでいただけます。お子さんが泣いてしまって聞き逃した！という時も安心。<br />
                        家事の合間に動画を聞き流すなど、復習することで更に身に付く仕組みです。
                    </p>
                </li>
                <li class="online__reasonItem">
                    <h2 class="online__reasonItemHeading">
                        <span class="online__reasonNumber">02</span>
                        <span>自宅にテキストが届き、<br class="sp" />テキストを見ながら<br class="sp"><strong class="online__underline">体系的に学べる</strong></span>
                    </h2>
                    <p class="online__reasonContent">
                        使用するテキストは製本された状態でご自宅へ届きます。ご自身で印刷する必要もなく、細かく丁寧に作られたテキストなので、後からでも分かりやすく、ワークの内容などを書き込みながら受講していただくことで、PRのお仕事を進めていく上でのバイブルになります。
                    </p>
                </li>
                <li class="online__reasonItem">
                    <h2 class="online__reasonItemHeading">
                        <span class="online__reasonNumber">03</span>
                        <span>質問スレッドがあり、<br class="sp"><strong class="online__underline">不安解消</strong></span>
                    </h2>
                    <p class="online__reasonContent">
                        オンライン授業中に質問ができなかった場合でも大丈夫。Facebookグループ内のスレッドで、３ヶ月間質問し放題。どんな小さな疑問も、お気軽にぶつけてきてください。共に学ぶ仲間と、気づきを共有することでさらなるスキルアップが望めます。
                    </p>
                </li>
                <li class="online__reasonItem">
                    <h2 class="online__reasonItemHeading">
                        <span class="online__reasonNumber">04</span>
                        <span>最後に試験があり<br class="sp" /><strong class="online__underline">実力がわかる</strong></span>
                    </h2>
                    <p class="online__reasonContent">
                        一般社団法人PRプロフェッショナル協会認定の資格試験を受けていただきます。（在宅PRお仕事コースでは「PRディレクター」広報PRプロコースでは「PRプロデューサー」の資格取得試験）<br />
                        この試験を受験することで、ご自身の３ヶ月間の習熟度が分かり、今後仕事を引き受けていくための一つの指標となる資格を取得できます。名刺や履歴書などにも記載いただける資格となります。（合格には一定の基準あり）
                    </p>
                </li>
            </ul>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/reason_arrow.png" alt="" class="online__reasonArrow">
            <p class="online__reasonCatch">
                <strong class="online__graduatePickUpItemMarker">お家で学び、<br class="sp" />お家で仕事を</strong><br />
                <strong class="online__graduatePickUpItemMarker">実現する環境が<br class="sp" />ここにあります。</strong>
            </p>
        </section>
        <section class="online__lecturer" id="online-lecturer">
            <h1 class="online__lecturerHeading">講師紹介</h1>
            <ul class="online__lecturerList">
                <li class="online__lecturerItem">
                    <div class="online__lecturerItemInner">
                        <div class="online__lecturerItemContent">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/lecturer01.jpg" alt="三木佳世子" class="online__lecturerPhoto">
                            <div>
                                <h2 class="online__lecturerName">三木佳世子<span class="online__lecturerRole">全授業を担当</span></h2>
                                <span class="online__lecturerPosition">元NHKディレクター／（株）LITA CHO ／一般社団法人PRプロフェッショナル協会代表理事</span>
                                <p class="online__lecturerCarrer">
                                    慶應義塾大学総合政策学部卒業後、NHKに入局。報道番組のディレクターとして12年間に渡って、有名無名問わず2000人以上を取材。「NHKスペシャル」や「クローズアップ現代」「おはよう日本」「あさイチ」「目撃！日本列島」等、100本以上の番組を制作し、2014年には、NHKスペシャル「認知症行方不明者１万人〜知られざる徘徊の実態〜」で、菊池寛賞・NHK会長賞など受賞。幻冬舎から書籍も出版。息子出産後、時短で復職するも、仕事と育児の両立に葛藤を抱えるようになり、天職だと思っていたテレビディレクターの仕事を離れる決意をする。<br />
                                    2018年、サイボウズ株式会社へ転職し、企業の組織開発コンサルティング、学校向けチームワーク授業を担当。同時に、個人で起業。MiraiE PR代表として、PRプロデュース、セミナー講師、Webのライターなどの仕事を並行して行う、パラレルキャリアを邁進する。<br />
                                    メディアPRのコンサルでは、NHKの経験から「どのような要素があれば取材されやすいか？」の具体的なアドバイスに定評。社会の流れやタイミングに合わせた、メディア視点の戦略立案・プレスリリースの作成代行でクライアントの取材を獲得。（NHKおはよう日本、テレビ埼玉「ニュース930」、神奈川新聞、AbemaTVなど）動画撮影とインタビューメソッドで「対面で伝える力」を磨く講座はFacebookの告知だけで毎回満席。早稲田大学社会人向け講座でも開催、年齢性別問わずご参加いただき好評を得る。パラレルキャリア実践者として、講演会やトークイベントへの登壇や取材多数。<br />
                                    2020年4月から、株式会社LITAのCHO/シニアPRコンサルタントに就任。<br />
                                    今の目標は、女性がライフステージの変化に合わせて、自発的にキャリアを選び、人生を創っていける学びや気づきの場創り。そして、PRの力・発信力を使って、良いものが沢山の人に知られる世の中を作ること。<br />
                                    NHKで技術研究に打ち込む夫、ヒーローものが大好きなヤンチャ息子（4歳）、実母との４人暮らし。
                                </p>
                            </div>
                        </div>
                        <p class="online__lecturerCtaMessage">講師のメッセージ動画はこちら</p>
                        <a href="//youtu.be/_hQ0QXxYMvU" class="online__lecturerButton"><span class="online__lecturerButtonText">SEE MORE</span><span class="online__lecturerButtonArrow">→</span></a>
                    </div>
                </li>
                <li class="online__lecturerItem">
                    <div class="online__lecturerItemInner">
                        <div class="online__lecturerItemContent">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/president_img.jpg" alt="笹木郁乃" class="online__lecturerPhoto">
                            <div>
                                <h2 class="online__lecturerName">
                                    <span>笹木郁乃</span>
                                    <div class="online__lecturerRoleWrapper">
                                        <span class="online__lecturerRole">在宅PRコースの初日と最終日／広報PRプロコースの全日を担当</span><span class="online__lecturerRole">学長</span>
                                    </div>
                                </h2>
                                <span class="online__lecturerPosition">株LITA 代表取締役 /　一般社団法人PRプロフェッショナル協会　代表理事</span>
                                <p class="online__lecturerCarrer">
                                    株式会社LITA 代表取締役　PR事業に携わり、10年。　会社員時代、創業期2社のPRを担当。株式会社エアウィーヴ 5年で1億→120億　<br />
                                    愛知トビー株式会社（バーミキュラ製造販売） 2年で11億→44億<br />
                                    と、PRの力で急成長に貢献。その後、企業価値にPRの力を加えることで、会社が劇的に変化するということを多くの経営者に伝えるべく、PR代行事業を立ち上げる。 これまで大手企業含め30社のPRプロデュースに携わる。また、自身の10年間のPR経験より構築した独自のPR理論をコンテンツとするPR塾を主宰。延べ330人以上の起業家、経営者、PR担当者にPRを指導、15期連続満席にて開催。<br />
                                    その他企業主催の講座やイベント等にもPR講師として登壇、3年で1200名以上の起業家・経営者に指導。大手上場企業等PR案件を多数抱える他、複数のメディアでPRコラムを執筆中。<br />
                                    素晴らしい商品やサービスを持つ多くの企業が、世の中から認知されず、多大な広告費やPR費を必要としている現状を打破し、全ての企業がPRの力を当たり前に使えるよう、業界の変革に取り組んでいる。<br />
                                    「PRは魔法であり、劇的に会社を変える力がある」が持論。<br />
                                    経営者向け雑誌で複数PRコラム連載を持つなど、メディア出演多数。<br />
                                    2019年12月、日経BP社より著書「0円PR」が発売。<br />
                                    6歳の息子と旦那の3人暮らし。子育てしながらも、思いっきり人生挑戦したいと考え、独立。
                                </p>
                            </div>
                        </div>
                        <p class="online__lecturerCtaMessage">講師のインタビュー記事はこちら</p>
                        <a href="/column/zaitakupr/" class="online__lecturerButton"><span class="online__lecturerButtonText">SEE MORE</span><span class="online__lecturerButtonArrow">→</span></a>
                    </div>
                </li>
            </ul>
        </section>
        <section class="online__fullSupport" id="online-fullSupport">
            <h1 class="online__fullSupportHeading">充実のサポート</h1>
            <ul class="online__fullSupportList">
                <li class="online__fullSupportItem">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/support01.jpg" alt="">
                    <p class="online__fullSupportContent"><span class="online__fullSupportContentSpan">充実の</span><span class="online__fullSupportContentSpan"><strong class="online__marker">200ページ以上</strong>の</span>テキスト</p>
                </li>
                <li class="online__fullSupportItem">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/support02.jpg" alt="">
                    <p class="online__fullSupportContent"><span class="online__fullSupportContentSpan">3ヶ月間</span><span class="online__fullSupportContentSpan">講師にオンラインで</span><span class="online__fullSupportContentSpan"><strong class="online__marker">質問し放題</strong></span></p>
                </li>
                <li class="online__fullSupportItem">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/support03.jpg" alt="">
                    <p class="online__fullSupportContent"><span class="online__fullSupportContentSpan">講師との1：1</span><span class="online__fullSupportContentSpan"><strong class="online__marker">個別コンサル付き</strong></span></p>
                </li>
                <li class="online__fullSupportItem">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/support04.jpg" alt="">
                    <p class="online__fullSupportContent"><span class="online__fullSupportContentSpan">フォロー動画で</span><span class="online__fullSupportContentSpan"><strong class="online__marker">繰り返し</strong>学べる</span></p>
                </li>
                <li class="online__fullSupportItem">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/support05.jpg" alt="">
                    <p class="online__fullSupportContent"><span class="online__fullSupportContentSpan">講義中も</span><span class="online__fullSupportContentSpan">zoomチャット上で</span><span class="online__fullSupportContentSpan"><strong class="online__marker">気軽に質問</strong></span></p>
                </li>
                <li class="online__fullSupportItem">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/support06.jpg" alt="">
                    <p class="online__fullSupportContent"><span class="online__fullSupportContentSpan">横の絆をつくる</span><span class="online__fullSupportContentSpan"><strong class="online__marker">オンライン懇親会</strong></span><span class="online__fullSupportContentSpan">開催</span></p>
                </li>
                <li class="online__fullSupportItem">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/support07.jpg" alt="">
                    <p class="online__fullSupportContent"><span class="online__fullSupportContentSpan">最終日試験があり</span><span class="online__fullSupportContentSpan"><strong class="online__marker">合格したら資格発行</strong>で</span><span class="online__fullSupportContentSpan">お仕事に有利</span></p>
                </li>
            </ul>
        </section>
        <section class="online__flow" id="online-flow">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/flow01.png" alt="" class="online__flowImage pc">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/flow01_sp.png" alt="" class="online__flowImage sp">
        </section>
        <section class="online__qa" id="online-qa">
            <h1 class="online__qaHeading">Q&A</h1>
            <ul class="online__qaList">
                <li class="online__qaItem">
                    <p class="online__qaQuestion"><span class="online__qaQuestionInner">PRは全くの初心者ですが、申し込みできますか？</span></p>
                    <p class="online__qaAnswer">
                        <span class="online__qaAnswerInner">もちろん、大丈夫です。今回の在宅PR お仕事習得コースは、全くの初心者の方を想定して作ったコースになります。世の中の良いものや取り組みが沢山の人に知られるお手伝いをしたい、時間や場所にとらわれず自立したキャリアを作っていきたいという想いと行動力がある方なら、どなたでもお申し込みできます。</span>
                    </p>
                </li>
                <li class="online__qaItem">
                    <p class="online__qaQuestion"><span class="online__qaQuestionInner">無料体験は必ず参加しないといけないですか？</span></p>
                    <p class="online__qaAnswer">
                        <span class="online__qaAnswerInner">いいえ、無料体験をお申し込み頂かなくても大丈夫です。無料体験会では、担当する講師陣からPRという仕事についての紹介、３ヶ月間のカリキュラムについて詳しくお話をさせていただきます。
                    </p>
                </li>
                <li class="online__qaItem">
                    <p class="online__qaQuestion"><span class="online__qaQuestionInner">企業研修として社員を参加させることはできますか？ </span></p>
                    <p class="online__qaAnswer">
                        <span class="online__qaAnswerInner">企業様の社内研修としてもご活用いただけます。 人数規定はございませんので、何名からでもご参加ください。
                    </p>
                </li>
                <li class="online__qaItem">
                    <p class="online__qaQuestion"><span class="online__qaQuestionInner">子どもがそばにいても平気ですか？</span></p>
                    <p class="online__qaAnswer">
                        <span class="online__qaAnswerInner">はい、お子さまとご一緒にご受講いただけます。お子さまの様子を見ながらのご受講は大変かも知れませんが、途中やむを得ず中座をしたとしても講義の内容は後日動画で共有しますので、ご安心下さい。
                    </p>
                </li>
                <li class="online__qaItem">
                    <p class="online__qaQuestion"><span class="online__qaQuestionInner">Zoomを使ったことが無いので不安です。</span></p>
                    <p class="online__qaAnswer">
                        <span class="online__qaAnswerInner">ZoomはURLをクリックするだけの、初めての方でも簡単にお使いいただける無料のシステムです。講義開始前に一度、事務局と接続テストも設けてあり、サポートもさせて頂きますのでご安心ください。講義中も、Zoomのチャットを活用し、講師への質問をすることも出来ます。
                    </p>
                </li>
                <li class="online__qaItem">
                    <p class="online__qaQuestion"><span class="online__qaQuestionInner">PR塾との違いはどこですか？</span></p>
                    <p class="online__qaAnswer">
                        <span class="online__qaAnswerInner">これまで笹木郁乃が15期に渡り開催しているPR塾は、5時間×5日間で実施される対面受講のコースと、録画された動画を見て学ぶオンライン受講のコースに分かれています。今回の在宅PR塾は、そのどちらとも異なり「Zoomを活用したリアルタイムオンライン受講」となります。<br />内容は、広報PRプロコースは現在のPR塾に近いものとなりますが、在宅PRお仕事習得コースは今回新しく作られた内容になります。PRを仕事にするために必要なスキルを、基礎からしっかり学びたい方は在宅PRお仕事習得コースがオススメです。
                    </p>
                </li>
                <li class="online__qaItem">
                    <p class="online__qaQuestion"><span class="online__qaQuestionInner">どうしても出席できない回があるのですが、フォローはありますか？</span></p>
                    <p class="online__qaAnswer">
                        <span class="online__qaAnswerInner">本講座は、全6日カリキュラムの受講で効果が上がるように設計されています。 全ての回にご参加いただきたいと考えておりますが、欠席された回は、当日の講義の様子を撮影した動画でフォローいたしますのでご安心ください。
                    </p>
                </li>
                <li class="online__qaItem">
                    <p class="online__qaQuestion"><span class="online__qaQuestionInner">現在起業、経営をしていますが、申し込みできますか？</span></p>
                    <p class="online__qaAnswer">
                        <span class="online__qaAnswerInner">PRの方向性を明確にし、効果的なPR設計を行いたい方、 更なる認知アップ、集客力アップを目指したい方、もしくは長期目線でPRの学びを生かしたい方は、ぜひお申し込みください。
                    </p>
                </li>
                <li class="online__qaItem">
                    <p class="online__qaQuestion"><span class="online__qaQuestionInner">受講していることが公になるのは控えたいのですが・・・</span></p>
                    <p class="online__qaAnswer">
                        <span class="online__qaAnswerInner">講座申し込みから卒業後まで、受講生のプライバシーを守ります。 個人が公に特定されないよう配慮いたしますので、安心して参加してください。
                    </p>
                </li>
                <li class="online__qaItem">
                    <p class="online__qaQuestion"><span class="online__qaQuestionInner">男性でも参加できますか？</span></p>
                    <p class="online__qaAnswer">
                        <span class="online__qaAnswerInner">はい、もちろんです。男性のご参加も積極的に受け付けています。
                    </p>
                </li>
                <li class="online__qaItem">
                    <p class="online__qaQuestion"><span class="online__qaQuestionInner">人見知りなので、場に馴染めるか心配です・・・</span></p>
                    <p class="online__qaAnswer">
                        <span class="online__qaAnswerInner">それぞれが目的を持って参加する受講生が集まっておりますので、個々に集中しながら参加してくださっています。その中で受講回数を重ねるごとに、お互いを高め合う関係性に変わっていくことがほとんどです。横のつながりを作るためのオンライン懇親会も予定しておりますので、安心して参加してください。
                    </p>
                </li>
                <li class="online__qaItem">
                    <p class="online__qaQuestion"><span class="online__qaQuestionInner">卒業後、どうすればPRの仕事を紹介してもらえますか？</span></p>
                    <p class="online__qaAnswer">
                        <span class="online__qaAnswerInner">講座の最終回で受験いただく資格試験に合格された方に限り、お仕事紹介のfacebookページにご招待いたします。そちらで、企業からの案件をご紹介しマッチングをしていきます。マッチング費用はかかりません。
                    </p>
                </li>
            </ul>
        </section>
        <section class="online__conversionArea footer">
            <h1 class="online__conversionAreaHeading">
                <strong class="online__marker">まずは無料体験</strong>から<br />
                はじめましょう
            </h1>
            <table class="online__conversionAreaTable">
                <tr class="online__conversionAreaSubHeading">
                    <th rowspan="2"><strong class="online__marker">＜2期日程＞</strong></th>
                    <!-- <td>
                        5月8日（金）11:00~12:15<br />
                        5月12日（火）21:00~22:15<br />
                    </td> -->
                    <td class="online__conversionAreaTableData">
						<strong class="online__conversionAreaTableDataStrong">7月28日(月)10:00~12:00<br/>
							7月31日(金)10:00~12:00<br/>
                           
                        </strong>
                    </td>
                </tr>
                <tr>
                    <!-- <td>※ご都合に合わせて日程をお選びください。</td> -->
                    <td class="online__conbersionAreaTableDataCaution">
                        ※ご都合に合わせて日程をお選びください。<br />
                        無料体験会へ参加ご希望の方は下記の<br />
                        「無料体験申込み」ボタンより先行案内にご登録ください
                    </td>
                </tr>
            </table>
            <table class="online__conversionAreaTable">
                <tr class="online__conversionAreaSubHeading">
                    <th rowspan="2"><strong class="online__marker">＜内容＞</strong></th>
                    <td>
                        <ul class="online__conversionAreaList">
                            <li class="online__conversionAreaItem">やりがいと自由を両立する「PR」という仕事の可能性</li>
                            <li class="online__conversionAreaItem">「PR」でフリーランス、副業、転職を実現した先輩たちの声紹介</li>
                            <li class="online__conversionAreaItem">人や物、サービスの魅力を最大限に伝えるために必要なこと</li>
                            <li class="online__conversionAreaItem">在宅PR塾、内容やスケジュールのご紹介</li>
                            <li class="online__conversionAreaItem">質問タイム</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>
                        在宅PR塾の講師２名によるZoomでの体験会。<br />
                        ぜひお気軽にご参加ください。
                    </td>
                </tr>
            </table>
            <div class="online__conversionAreaButtons">
                <div class="online__conversionAreaWrapper">
                    <p class="online__conversionAreaParagraph reserve">無料体験の先行案内ご登録はコチラ</p>
                    <a href="//ws.formzu.net/fgen/S34220173/" class="online__conversionButton reserve">
                        無料体験申込み
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/icon_reservation.png" alt="">
                    </a>
                </div>
                <div class="online__conversionAreaWrapper">
                    <p class="online__conversionAreaParagraph application">※在宅PR塾/広報PRプロコース <br>お申込みはこちら</p>
                    <a href="//ws.formzu.net/fgen/S86504297/" class="online__conversionButton application">
                        講座申込み
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/icon_application.png" alt="">
                    </a>
                </div>
            </div>
        </section>
    </main>
    <aside class="online__fixedButton">
        <a href="#onversionArea" class="online__conversionButton reserve">
            無料体験予約
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/icon_reservation.png" alt="">
        </a>
        <a href="#onversionArea" class="online__conversionButton application">
            お申し込み
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online/icon_application.png" alt="">
        </a>
    </aside>
</div>

<?php
get_sidebar();
get_footer();
