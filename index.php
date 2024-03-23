<!DOCTYPE html>
<html lang="en-Us">

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
  
    <!-- script icon  -->
    <title
        title="a one-page landing site created on the basis of another site; this site focused on the portfolio and minimized errors">
        codertime.site created on the basis of another site</title>
</head>

<body>
   <?php include("templates/header.php");?>
   <form action="" method="post" id="call-me" style="display: none;">
    <label for="POST-name">Name:</label>
    <input id="POST-name" type="text" name="name" />
    <input type="submit" value="Save" />
</form>
<main class="main">
    <?php include("templates/hero.php");//hero section?>
    <?php include("templates/benefit.php");//benefit section?>
    <?php include("templates/offer.php");//offer section?>
    <?php include("templates/map.php");//map section?>
    <?php include("templates/price.php");//price section?>
    <?php include("templates/order.php");//order section?>
    <?php include("templates/reviews.php");//reviews section?>
    <?php include("templates/contact.php");//reviews section?>
    <?php include("templates/copy.php");//reviews section?>
    </main>
</body>
<!-- script  -->
<script src="node_modules/@fancyapps/ui/dist/fancybox/fancybox.umd.js"></script>
<script>
  Fancybox.bind('[data-fancybox]', {
    // Custom options for all galleries
  });    
</script>
<script src="script.js"></script>

</html>