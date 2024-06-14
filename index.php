<?php get_header(); ?>

<main class="l-main">

    <section class="l-fv">
        <div class="p-fv">
            <figure class="p-fv__image">
                <img src="<?php echo get_template_directory_uri(); ?>/src/img/entrance.webp" alt="クリニックエントランスの画像">
                <div class="p-fv__message">
                    <span class="p-fv__label">
                        保険適用
                    </span>
                    <h2 class="p-fv__ttl">
                        医科・歯科併設の
                        <br>
                        新しいクリニック
                    </h2>
                </div>
                <!-- /.p-fv__message -->
            </figure>
            <div class="p-fv__body">
                <div class="p-news">
                    <div class="p-news__headBox">
                        <h2 class="p-news__ttl">
                            NEWS
                        </h2>
                        <span class="p-news__subttl">
                            お知らせ
                        </span>
                    </div>
                    <!-- /.p-news__headBox -->
                    <div class="p-news__body">
                        <ul class="p-news__list">
                            <?php
                            // クエリをカスタマイズする場合は、ここで修正
                            $args = array(
                                'post_type' => 'news',
                                'posts_per_page' => 3, // 表示する投稿の数
                            );

                            $the_query = new WP_Query($args);

                            if ($the_query->have_posts()) :
                                while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                    <li class="p-news__item">
                                        <a href="<?php the_permalink(); ?>" class="p-news__link">
                                            <p class="p-news__postDate">
                                                <?php echo get_the_date('Y年m月d日'); ?>
                                            </p>
                                            <h3 class="p-news__blogttl">
                                                <?php the_title(); ?>
                                            </h3>
                                        </a>
                                    </li>
                                <?php endwhile;
                                wp_reset_postdata();
                            else : ?>
                                <li class="p-news__item">
                                    <p>投稿が見つかりませんでした。</p>
                                </li>
                            <?php endif; ?>
                        </ul>
                        <div class="p-news__btn">
                            <a href="<?php echo get_post_type_archive_link('news'); ?>" class="c-btn-cta-acc">
                                もっと見る
                            </a>
                        </div>
                        <!-- /.p-news__btn -->
                    </div>
                    <!-- /.p-news__body -->

                </div>
                <!-- /.p-news -->
            </div>
            <!-- /.p-fv__body -->
        </div>
        <!-- /.p-fv -->
    </section>

    <section class="l-aboutUs">

        <div class="p-title">
            <h2 class="p-title__ttl">
                About us
            </h2>
            <span class="p-title__subttl">
                私たちについて
            </span>
        </div>
        <!-- /.p-title -->


        <div class="l-aboutUs__content">
            <div class="p-aboutUs">
                <div class="p-aboutUs__imageFrame">
                    <figure class="p-aboutUs__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/counter.webp" alt="クリニック内のイメージ画像1">
                    </figure>
                </div>
                <!-- /.p-aboutUs__imageFrame -->
                <div class="p-aboutUs__body">
                    <h3 class="p-aboutUs__ttl">
                        日常生活や睡眠に密着したかかりつけ医を目指して
                    </h3>
                    <p class="p-aboutUs__text">
                        当クリニックは、医科と歯科が連携した新しい形態の診療所です。睡眠時無呼吸症を中心に、睡眠に特化した外来診療を行っています。医療だけでなく歯科も併設し、患者一人ひとりに総合的なサポートを提供しています。
                        <br>
                        現代人の悩みに焦点を当て、睡眠改善などの取り組みを通じて地域の皆様の心身の健康をサポートします。
                    </p>
                    <div class="p-aboutUs__btn">
                        <a href="<?php echo get_template_directory_uri(); ?>/aboutus" class="c-btn-cta-acc">
                            詳しく見る
                        </a>
                    </div>
                    <!-- /.p-aboutUs__btn -->
                </div>
                <!-- /.p-aboutUs__body -->
            </div>
            <!-- /.p-aboutUs -->
        </div>
        <!-- /.l-aboutUs__content -->

        <div class="l-aboutUs__content">
            <div class="p-aboutUs --reverse">
                <div class="p-aboutUs__imageFrame --reverse">
                    <figure class="p-aboutUs__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/plant.webp" alt="クリニック内のイメージ画像2">
                    </figure>
                </div>
                <!-- /.p-aboutUs__imageFrame -->
                <div class="p-aboutUs__body --reverse">
                    <h3 class="p-aboutUs__ttl">
                        医科診療のご案内
                    </h3>
                    <p class="p-aboutUs__text">
                        地域の皆様のかかりつけ医として、経験豊富な専門医師たちが連携し、日々の生活習慣を中心に、あらゆる患者さんを積極的に診療しています。医科と歯科が連携した睡眠外来に加えて、総合的な内科診療も提供しています。
                        <br>
                        通院が難しい患者さんには、オンライン診療など柔軟な対応を行い、安心してかかりつけ医としてご利用いただける環境を整えています。また、必要に応じて専門病院への紹介も行い、地域医療の充実を図っています。
                        <br>
                        睡眠に関する悩みを抱える患者さんには、眠気や熟睡感の欠如、いびきや睡眠中の呼吸停止などに対応し、安心して受診いただけるような環境を整えています。気軽に相談いただけるよう、簡単な検査から始めることも可能です。どうぞお気軽にご相談ください。
                    </p>
                    <div class="p-aboutUs__btn">
                        <a href="<?php echo get_template_directory_uri(); ?>/medical" class="c-btn-cta-acc">
                            詳しく見る
                        </a>
                    </div>
                    <!-- /.p-aboutUs__btn -->
                </div>
                <!-- /.p-aboutUs__body -->
            </div>
            <!-- /.p-aboutUs -->
        </div>
        <!-- /.l-aboutUs__content -->

        <div class="l-aboutUs__content">
            <div class="p-aboutUs">
                <div class="p-aboutUs__imageFrame">
                    <figure class="p-aboutUs__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/entrance.webp" alt="クリニック内のイメージ画像1">
                    </figure>
                </div>
                <!-- /.p-aboutUs__imageFrame -->
                <div class="p-aboutUs__body">
                    <h3 class="p-aboutUs__ttl">
                        歯科診療のご案内 </h3>
                    <p class="p-aboutUs__text">
                        快適な睡眠を実現するために、歯科の視点からお手伝いします。
                        <br>
                        いびきや睡眠時無呼吸でお困りの患者様、お子様からご高齢の方まで、幅広い年齢層に適切な治療をご提供いたします。
                    </p>
                    <div class="p-aboutUs__btn">
                        <a href="<?php echo get_template_directory_uri(); ?>/sleepdental" class="c-btn-cta-acc">
                            詳しく見る
                        </a>
                    </div>
                    <!-- /.p-aboutUs__btn -->
                </div>
                <!-- /.p-aboutUs__body -->
            </div>
            <!-- /.p-aboutUs -->
        </div>
        <!-- /.l-aboutUs__content -->

    </section>

    <section class="l-access">

        <div class="l-access__ttl">
            <div class="p-title">
                <h2 class="p-title__ttl">
                    Access
                </h2>
                <span class="p-title__subttl">
                    アクセス
                </span>
            </div>
            <!-- /.p-title -->
        </div>
        <!-- /.l-access__ttl -->

        <div class="l-access__data">
            <div class="p-access">

                <div class="p-access__body">
                    <h3 class="p-access__ttl">
                        医療法人清瀧会神奈川佐藤クリニック
                    </h3>
                    <p class="p-access__text">
                        神奈川県横浜市中区五番町5-5-5 イマジンビル8階
                    </p>
                    <p class="p-access__text">
                        045-XXXX-XXXX（代表）
                    </p>
                    <p class="p-access__text">
                        北浜南南北線 横北駅徒歩7分
                    </p>
                    <p class="p-access__text">
                        横北市営地下鉄ライン 中区駅徒歩3分
                    </p>
                    <p class="p-access__text">
                        横北市営地下鉄ライン 五番町駅徒歩5分
                    </p>
                </div>
                <!-- /.p-access__body -->


                <div class="p-access__figure">
                    <div class="p-access__map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3249.3446971878807!2d139.62454467562497!3d35.47101447265585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sja!2sjp!4v1717982874418!5m2!1sja!2sjp" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <!-- /.p-access__map -->
                </div>
                <!-- /.p-access__figure -->

            </div>
            <!-- /.p-access -->
        </div>
        <!-- /.l-access__data -->

    </section>

</main>

<?php get_footer(); ?>