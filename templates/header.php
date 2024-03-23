<!DOCTYPE html>
<html lang="ru">
<head>
<base href="https://portf.codertime.site/plit16_v1/"/>
    <meta charset="UTF-8">
    <meta name="description"
        content="site created on the basis of another site all original ones from this site have been changed to test according to the created account - this is the second site">
    <meta name="keywords" content="HTML, CSS, stylus, JavaScript, cms, wordpress, php, fansyBox">
    <meta name="codertime.site" content="plit7">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- стили -->
    <link rel="stylesheet" href="dist/font/goodPro/stylesheet.css">
    <link rel="stylesheet" href="dist/font/fontella/css/fontello.css">
    <link rel="stylesheet" href="node_modules/@fancyapps/ui/dist/fancybox/fancybox.css">
    <link rel="stylesheet" href="style.css">
    <title
        title="a one-page landing site created on the basis of another site; this site focused on the portfolio and minimized errors">
        codertime.site created on the basis of another site</title>
</head>
<body>
    <?php 
    /**
     * variable path
     */
    $dir = "templates/part/contact/"; 
    ?>
<header class="block_header flex-row">
    <div class="header_bg" style="background-image: url('/dist/image/bg_result.jpg')"></div>
    <div class="header container flex-row container">
        <div class="block_header__left flex-row">
            <div class="header__logo flex-row">
                <?php include( $dir . "logo.php" );?>
            </div>
            <div class="header__address flex-column">
                <?php include( $dir . "address.php" );?> 
            </div>
        </div>
        <div class="block_header__right flex-row">
            <div class="header__phone flex-column">
                <?php include( $dir . "phone.php" );?> 
            </div>
            <div class="header__callback callback flex-row">
                <div class="callback__callme"><button class="button"  data-fancybox data-src="#call-me">Перезвонить мне</button></div>
                <div class="callback__price">
                    <button class="button"><a href="#price">Скачать прайс-листы</a></button>
                </div>
            </div>
        </div>
    </div>
</header>