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
    <link rel="icon" href="dist/image/small/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="dist/font/goodPro/stylesheet.css">
    <link rel="stylesheet" href="dist/font/fontella/css/fontello.css">
    <link rel="stylesheet" href="node_modules/@fancyapps/ui/dist/fancybox/fancybox.css">
    <link rel="stylesheet" href="style.min.css">
    <title
        title="a one-page landing site created on the basis of another site; this site focused on the portfolio and minimized errors">
        codertime.site created on the basis of another site</title>
</head>
<body>
    <?php $dir = "templates/part/contact/"; //variable path ?>

    <header class="block_header flex-row">
        <div class="header_bg" style="background-image: url('/dist/image/bg_result.jpg')"></div>
        <div class="header container flex-row container">
            <div class="block_header__left flex-row">
                    <?php include( $dir . "logo.php" );?>
                    <?php include( $dir . "address.php" );?> 
            </div>
            <div class="block_header__right flex-row">
                <?php include( $dir . "phone.php" );?> 
                <?php include( $dir . "button.php" );?> 
            </div>
        </div>
    </header>