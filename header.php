<!DOCTYPE HTML>
<html lang="ja-JP">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">

    <!-- from here is TDK -->
    <title>神奈川佐藤クリニック</title>
    <!-- to here is TDK -->

    <!-- from here is css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/ress.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <!-- to here is css -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
    
    <?php wp_head(); ?>
</head>

<body>

    <div class="p-fixed">
        <div class="p-fixed-gray">
            <a href="https://clinics-app.com/" class="p-fixed__link">
                医科診療予約
            </a>
        </div>
        <div class="p-fixed-yellow">
            <a href="https://clinics-app.com/" class="p-fixed__link">
                歯科診療予約
            </a>
        </div>
        <div class="p-fixed-green">
            <a href="tel:0312345678" class="p-fixed__link">
                TEL
            </a>
        </div>
    </div>
    <!-- /.p-fixed -->


    <header class="l-header">
        <div class="l-header__inner">

            <div class="l-header__upper">

                <div class="l-header__logo">
                    <h1 class="p-logo">
                        <a href="<?php echo home_url(); ?>" class="p-logo__link">
                            <img src="<?php echo get_template_directory_uri(); ?>/src/img/clinic_black.svg" alt="ロゴ画像">
                            <span class="p-logo__text">神奈川佐藤クリニック</span>
                        </a>
                    </h1>
                </div>
                <!-- /.l-header__logo -->


                <div class="l-header__address">
                    <div class="p-address">
                        <span class="p-address__addr">
                            東京都千代田区六番町5番地5 飯田ビル3階
                        </span>
                        <span class="p-address__tel">
                            <img src="<?php echo get_template_directory_uri(); ?>/src/img/tel_black.svg" alt="電話のアイコン">
                            <span class="p-address__number">03-6261-0263</span>
                        </span>
                    </div>
                    <!-- /.p-address -->
                </div>
                <!-- /.l-header__address -->

            </div>
            <!-- /.l-header__upper -->


            <div class="l-header__lower">

                <div class="l-header__nav">
                    <div class="p-nav">
                        <ul class="p-nav__list">
                            <li class="p-nav__item">
                                <a href="<?php echo get_template_directory_uri(); ?>/aboutus" class="p-nav__link">
                                    <span class="p-nav__text">About</span>
                                    <span class="p-nav__text">当院について</span>
                                </a>
                            </li>
                            <li class="p-nav__item">
                                <a href="<?php echo get_template_directory_uri(); ?>/medical" class="p-nav__link">
                                    <span class="p-nav__text">Medical</span>
                                    <span class="p-nav__text">医科診療について</span>
                                </a>
                            </li>
                            <li class="p-nav__item">
                                <a href="<?php echo get_template_directory_uri(); ?>/sleepdental" class="p-nav__link">
                                    <span class="p-nav__text">Dental</span>
                                    <span class="p-nav__text">睡眠歯科について</span>
                                </a>
                            </li>
                            <li class="p-nav__item">
                                <a href="<?php echo get_template_directory_uri(); ?>/acupuncture" class="p-nav__link">
                                    <span class="p-nav__text">Acupuncture</span>
                                    <span class="p-nav__text">はり灸治療について</span>
                                </a>
                            </li>
                            <li class="p-nav__item">
                                <a href="<?php echo get_template_directory_uri(); ?>/access" class="p-nav__link">
                                    <span class="p-nav__text">Access</span>
                                    <span class="p-nav__text">アクセス</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.p-nav -->
                </div>
                <!-- /.l-header__nav -->


                <div class="l-header__bg-switch">
                    <div class="p-bg-switch">
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/moon.svg" alt="背景色を切り替えるアイコン" class="bg-switch__icon">
                    </div>
                    <!-- /.bg-switch -->
                </div>
                <!-- /.l-header__bg-switch -->


                <div class="l-header__btns">
                    <a href="https://clinics-app.com/" class="c-btn-cta-color3">
                        医科診療予約
                    </a>
                    <a href="https://clinics-app.com/" class="c-btn-cta-color2">
                        歯科診療予約
                    </a>
                </div>
                <!-- /.l-header__btns -->

                <div class="l-header__openbtn">
                    <div class="openbtn">
                        <button id="openbtn" class="openbtn__btn">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>

                        <div id="overlay" class="openbtn__overlay">
                            <nav class="openbtn__nav">
                                <ul class="openbtn__list">
                                    <li class="openbtn__item">
                                        <a href="<?php echo home_url(); ?>" class="openbtn__link">
                                            <span class="openbtn__text">HOME</span>
                                            <span class="openbtn__subtext">ホーム</span>
                                        </a>
                                    </li>
                                    <li class="openbtn__item">
                                        <a href="<?php echo get_template_directory_uri(); ?>/aboutus" class="openbtn__link">
                                            <span class="openbtn__text">About</span>
                                            <span class="openbtn__subtext">当院について</span>
                                        </a>
                                    </li>
                                    <li class="openbtn__item">
                                        <a href="<?php echo get_template_directory_uri(); ?>/medical" class="openbtn__link">
                                            <span class="openbtn__text">Medical</span>
                                            <span class="openbtn__subtext">医科診療について</span>
                                        </a>
                                    </li>
                                    <li class="openbtn__item">
                                        <a href="<?php echo get_template_directory_uri(); ?>/sleepdental" class="openbtn__link">
                                            <span class="openbtn__text">Dental</span>
                                            <span class="openbtn__subtext">歯科診療について</span>
                                        </a>
                                    </li>
                                    <li class="openbtn__item">
                                        <a href="<?php echo get_template_directory_uri(); ?>/acupuncture" class="openbtn__link">
                                            <span class="openbtn__text">はり灸治療について</span>
                                            <span class="openbtn__subtext">Acupuncture</span>
                                        </a>
                                    </li>
                                    <li class="openbtn__item">
                                        <a href="<?php echo get_template_directory_uri(); ?>/access" class="openbtn__link">
                                            <span class="openbtn__text">アクセス</span>
                                            <span class="openbtn__subtext">Access</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- /#overlay.overlay -->
                    </div>
                    <!-- /.openbtn -->
                </div>
                <!-- /.l-header__openbtn -->

            </div>
            <!-- /.l-header__lower -->


        </div>
        <!-- /.l-header__inner -->
    </header>