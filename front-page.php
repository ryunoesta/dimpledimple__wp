<?php get_header() ?>
<main>

    <div class="object-2"></div>
    <div class="object-3"></div>

    <!-- fv -->
    <h2 class="fv">
        <div class="fv__text">
            <img src="<?=get_template_directory_uri(); ?>/images/title.png" alt="リラックスできるおうち美容室">
        </div>
        <div class="fv__img">
            <img src="<?=get_template_directory_uri(); ?>/images/fv.jpeg" alt="">
        </div>
    </h2>

    <div class="tea">
        <img src="<?=get_template_directory_uri(); ?>/images/tea-time.png" alt="">
    </div>
    <div class="scrolldown">
        <span>Scroll</span>
    </div>

    <div class="scroll-bar">
        <!-- <img src="" alt=""> -->
    </div>

    <!-- article -->
    <div class="article">

        <h3>
            <img src="<?=get_template_directory_uri(); ?>/images/news & diary.svg" alt="ニュース、お知らせ">
        </h3>

        <div class="changeCard">
            <ul>
                <li class="changeItem defaultList">
                    <a href="">
                        <div class="changeItemTxt"> <time class="pubdate sng-link-time dfont" itemprop="datePublished" datetime="2023年5月5日">2023年5月5日</time>
                        <p class="itemTitle">5月の空き状況について</p>
                        </div>
                    </a>
                </li>
                <li class="changeItem defaultList">
                    <a href="">
                        <div class="changeItemTxt"> <time class="pubdate sng-link-time dfont" itemprop="datePublished" datetime="2022年10月15日">2022年10月15日</time>
                        <p class="itemTitle">10月キャンペーンについて</p>
                        </div>
                    </a>
                </li>
                <li class="changeItem defaultList">
                    <a href="">
                        <div class="changeItemTxt"> <time class="pubdate sng-link-time dfont" itemprop="datePublished" datetime="2022年9月15日">2022年9月15日</time>
                        <p class="itemTitle">9月キャンペーンについて</p>
                        </div>
                    </a>
                </li>
            </ul>
        </div>

        <div class="button">
            全ての記事へ
        </div>

    </div>
    
    <!-- concept -->
    <div class="concept">
        <div>
            <img src="<?=get_template_directory_uri(); ?>/images/concept_2.jpeg" alt="">
        </div>
        <div class="concept__container">
            <h3>
                <img src="<?=get_template_directory_uri(); ?>/images/concept.svg" alt="">
            </h3>
            <div class="concept__describe">
                <h4>変わらぬ場所。おかえり。</h4>
                <p>
                お客様との出会いを大切なご縁であると感じ、<br>
                お友達のお家に遊びに来たかのように<br>
                リラックスしていただきたい。<br><br>

                ヘアに関しても、もっと悩みや希望を<br>
                相談しやすい雰囲気づくりを<br>
                心がけていきたいと思います。
                </p>
            </div>
        </div>
    </div>

    <!-- menu -->
    <div class="menu">
        <h3>
            <img src="<?=get_template_directory_uri(); ?>/images/menu.svg" alt="">
        </h3>
        <div class="menu__container">
            <ul class="menu__block-1">
                <li class="cut">
                    <h4>CUT</h4>
                    <ul>
                        <li>カット<span>￥4,000-</span></li>
                        <li>前髪カット<span>￥500 ~ 800</span></li>
                    </ul>
                </li>
                <li class="perm">
                    <h4>PERM</h4>
                    <ul>
                        <li>カット&パーマ<span>￥8,000 ~ 10,000</span></li>
                    </ul>
                </li>
                <div class="hasami">
                    <img src="<?=get_template_directory_uri(); ?>/images/hasami.svg" alt="">
                </div>
            </ul>
            <ul class="menu__block-2">
                <li class="color">
                    <h4>COLOR</h4>
                    <ul>
                        <li>カット&カラー<span>￥8,000 ~ 9,000</span></li>
                    </ul>
                </li>
                <br>
                <li class="other">
                    <h4>Other</h4>
                    <ul>
                        <li>システムトリートメント<span>￥4,000-</span></li>
                        <li>耐熱トリートメント<span>￥5,000-</span></li>
                        <li>セット<span>￥3,000 ~ 4,000</span></li>
                        <li>着付け<span>￥6,000 ~ 8,000</span></li>
                    </ul>
                    <p>
                    ※システムトリートメントは、ペースメーカーを
                    ご使用されている方はご利用できませんので、
                    ご了承ください。
                    </p>
                    
                </li>
            </ul>
        </div>
    </div>

</main>
<?php get_footer() ?>