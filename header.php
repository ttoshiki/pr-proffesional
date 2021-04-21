<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<?php if (is_archive() || is_post_type_archive('column') || is_post_type_archive('post_voice') || is_post_type_archive('student_voice')) : ?>
		<meta name="description" content="PRプロフェッショナル協会">
		<meta property="og:url" content="https://pr-professional.jp/">
		<meta property="og:type" content="website">
		<meta property="og:title" content="PRプロフェッショナル協会">
		<meta property="og:image" content="https://pr-professional.jp/wp-content/uploads/2021/02/front-mv.jpg">
		<meta property="og:description" content="PRプロフェッショナル協会は、結果が出る日本最先端のPRやSNSのスキルが身につくPR塾（PRプロフェッショナル講座）を開催しています。協会代表理事・笹木郁乃が直接指導。PRプロフェッショナルの資格を取得して、あなたもPRを仕事にして活躍しませんか？">
		<meta property="og:site_name" content="一般社団法人PRプロフェッショナル協会">
		<meta property="og:locale" content="ja">
	<?php endif; ?>

	<meta name="google-site-verification" content="UbJlYhmygncZaCHiPXNZQIxrM958EGv0rh29-9Q8h7E" />
	<!-- <title>
	<?php if (is_front_page()) : ?>
	<?php echo ('一般社団法人 PRプロフェッショナル協会'); ?>
	<?php elseif (is_page('2')) : ?>
	<?php echo ('会社概要 | 一般社団法人 PRプロフェッショナル協会') ?>
	<?php elseif (is_page('18')) : ?>
	<?php echo ('PR代行サービス | 一般社団法人 PRプロフェッショナル協会') ?>
	<?php elseif (is_post_type_archive('column')) : ?>
	<?php echo ('PRコラム | 一般社団法人 PRプロフェッショナル協会') ?>
	<?php elseif (is_tax('column')) : ?>
	<?php echo ('タグ | 一般社団法人 PRプロフェッショナル協会') ?>
	<?php elseif (is_archive()) : ?>
	<?php echo ('卒業生の声 | 一般社団法人 PRプロフェッショナル協会') ?>
	<?php elseif (is_page('20')) : ?>
	<?php echo ('事例紹介 | 一般社団法人 PRプロフェッショナル協会') ?>
	<?php elseif (is_page('16')) : ?>
	<?php echo ('お問い合わせ | 一般社団法人 PRプロフェッショナル協会') ?>
	<?php endif; ?>
	</title> -->
	<meta name="google-site-verification" content="HM36XUUr3F6qhGP2P7Fn0DUXRbqDxLGCXSMaCNdXJ10" />
	<link rel="icon" type="image/x-icon" href="<?php echo content_url() ?>/themes/association/assets/img/favicon.ico">
	<?php if (is_front_page() || is_page('pr-learn') || is_page('online') || is_page('archiveonline')) { ?>
		<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
		</script>
	<?php }; ?>
	<?php if (is_page('pr-learn')) { ?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/modal-video.min.css">
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/youtubeModal.js" defer>
			< script type = "text/javascript"
			id = "www-widgetapi-script"
			src = "https://s.ytimg.com/yts/jsbin/www-widgetapi-vflS50iB-/www-widgetapi.js"
			async >
		</script>
		<script src="https://www.youtube.com/player_api" defer></script>
	<?php }; ?>
	<?php if (is_front_page()) { ?>
		<script src="<?php echo content_url(); ?>/themes/association/assets/js/newsFeed.js" async></script>
	<?php }; ?>
	<?php
	if (is_page('online') || is_page('archiveonline')) {
		wp_enqueue_style('online-style', get_template_directory_uri() . '/assets/css/style_online.css');
		wp_enqueue_script('bg-switcher', get_template_directory_uri() . '/assets/js/bgswitcher.js');
		wp_enqueue_script('online-script', get_template_directory_uri() . '/assets/js/online.js');
		wp_enqueue_script('youtubeAPI', '//www.youtube.com/player_api', '');
		wp_enqueue_script('youtubeModal', get_template_directory_uri() . '/assets/js/youtubeModal.js');
		wp_enqueue_style('modal-video', get_template_directory_uri() . '/assets/css/modal-video.min.css');
	};
	?>
	<?php
	if (is_post_type_archive('student_voice') || is_tax('student_voice_cat', array('company-pr', 'career-change', 'skill-up'))) {
		wp_enqueue_style('voice-style', get_template_directory_uri() . '/voice/css/voice.css');
	};
	?>

	<link rel="stylesheet" href="<?= esc_url( get_theme_file_uri() ); ?>/assets/custom/custom.css">

	<?php wp_head(); ?>
	<script src="<?php echo content_url() ?>/themes/association/assets/js/script.js"></script>
</head>

<body <?php body_class(); ?>>

<div class="site-header-wrapper">
        <header class="site-header">
            <div class="site-branding">
                <a href="/"><img src="<?php echo content_url() ?>/uploads/2019/07/logo.png" alt="" class="logo"></a>
            </div><!-- .site-branding -->

            <nav class="site-navigation main-navigation">
                <div class="pc-nav pc">

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
                                <li class="nav-list"><a href="/about-association">協会について</a></li>
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
