<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="./js/script.js" defer></script>
    <title>dimple dimple</title>
    <?php wp_head(); ?>
</head>
<body>

    <header id="header">
        <div class="header__container">
            <h1 class="header__logo">
                <div class="object-1"></div>
                <a href="<?=home_url();?>">
                    <img src="<?=get_template_directory_uri(); ?>/images/logo.svg" alt="dimpledimple">
                </a>
            </h1>
			<div class="header__line pc">
                <a href="https://lin.ee/KSdgG7w">
                    <div class="object-2 pc"></div>
                    <div>LINEからご予約</div>
                </a>
			</div>
		</div> 
    </header>
    