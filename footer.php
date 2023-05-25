<footer>
    <div class="wavy-line-upper">
        <div></div><div></div><div></div><div></div><div></div>
    </div>
    <div class="wavy-line-downer">
        <div></div><div></div><div></div><div></div>
    </div>
    <div class="blank"></div>
    <div class="footer__container">
        <div class="footer__wrapper">
            <h3>
                <img src="<?=get_template_directory_uri(); ?>/images/logo.svg" alt="">
            </h3>
            <h4>ディンプルディンプル</h4>
            <div class="footer__box">
                <div>
                    <p class="adress">
                        〒864-0031<br>
                        熊本県荒尾市川登1793-3
                        <a href="https://goo.gl/maps/2n94wj23tnyGwthR9" target="_blank">（Google Map）</a> <br><br>

                        ・営業時間 / 10:00 ~ 19:00<br>
                        ・定休日 / 毎週火曜日、第３月曜日
                    </p>

                    <div class="contact">
                        <div>
                            <a href="">LINEから予約</a>
                        </div>
                        <a href=""><img src="<?=get_template_directory_uri(); ?>/images/line.svg" alt=""></a>
                    </div>

                    <div class="contact">
                        <div>
                            <a href="tel:0968-68-6527">TEL.0968-68-6527</a>
                            <p>お電話から予約</p>
                        </div>
                        <img src="<?=get_template_directory_uri(); ?>/images/phone.svg" alt="">
                    </div>
                </div>

                <nav>
                    <ul>
                        <li>
                            <a href="#header">TOP</a>
                        </li>
                        <li>
                            <a href="#article">News & Diary</a>
                        </li>
                        <li>
                            <a href="#concept">Concept</a>
                        </li>
                        <li>
                            <a href="#menu">Menu</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="copyright">
                <small>©︎dimpledimple All Rights Reserved</small>
            </div>
        </div>
    </div>
</footer>

<script>
$(function () {
    // ローダー終了
    function end_loader() {
    $('.loader').fadeOut(800);
}
    // 表示
    function show_txt() {
    $('.loader p').fadeIn(400);
}
    // 非表示
    function hide_txt() {
    $('.loader p').fadeOut(400);
}

    // タイマー処理
    $(window).on('load', function () {
    // 処理①
    setTimeout(function () {
        show_txt();
    }, 1000)
    // 処理②
    setTimeout(function () {
        hide_txt();
    }, 3500)
    // 処理③
    setTimeout(function () {
        end_loader();
    }, 4500)
    })
})
</script>

<?php wp_footer(); ?>
</body>
</html>