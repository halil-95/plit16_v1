<?php include("templates/header.php");//hero section?>
<?php include("templates/part/form.php");//form section?>
<main class="main">
    <?php $name_files = array("hero","benefit","offer","map","price","order","reviews","contact","order","map","copy");?>
    <?php foreach ($name_files as $file): $files = "templates/".$file.".php";?>
        <?php include($files);//hero section?>
    <?php endforeach;?>
</main>
<?php include("templates/footer.php");//footer section?>
