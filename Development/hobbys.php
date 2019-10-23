<!doctype html>
<html class="js" lang="de">

<head>

    <meta charset="utf-8">
    <title>Qendrim Vllasa</title>
    <meta name="description" content="This is me. Qendrim Vllasa">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php require("./parts/css_imports.php");?>

  <link rel="stylesheet" href="css/hobbys.css">


</head>

<body data-spy="scroll" data-target=".navbar" data-offset="145">


<!--NAVIGATION-->
<?php require("./parts/navigation.php")?>



<?php require("./parts/hobby-header.php")?>




<main id="main-content">
    <!-- HOBBYS -->
  <?php require("./parts/hobby-container.php")?>


</main>


<footer>
  <?php require ("./parts/footer.php");?>
</footer>

<!--<script>-->
<?php require("./parts/js_imports.php");?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-150811390-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-150811390-1');
</script>
</body>

</html>
