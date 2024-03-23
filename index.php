
   <?php include("templates/header.php");?>
   <?php include("templates/part/form.php");?>

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