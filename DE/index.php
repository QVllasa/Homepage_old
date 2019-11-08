<!doctype html>
<!--suppress ALL -->
<html class="js" lang="de">
<head>
  <meta charset="utf-8">

  <title>Qendrim Vllasa - This is me</title>
  <meta
    content="Economics Engineer, Webdesigner, Software Developer und Media/Content Designer. Erfahre mehr über meine Projekte auf meiner offiziellen Homepage.
     "
    name="description">
  <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
  <link rel="alternate" hreflang="de-DE" href="https://www.qendrimvllasa.de/"/>
  <link rel="alternate" hreflang="en-US" href="https://www.qendrimvllasa.com/"/>


  <!--  <meta http-equiv="Cache-control: max-age=31557600" content="public">-->

  <?php require("./parts/css_imports.php"); ?>


</head>
<body data-offset="145" data-spy="scroll" data-target=".navbar">

<?php require("./parts/loader.php"); ?>


<?php require("./parts/navigation.php") ?>



<?php require("./parts/header.php"); ?>


<main id="main-content">
  <?php require("./parts/language.php"); ?>
  <?php require("./parts/infobox.php"); ?>

  <?php require("./parts/about.php"); ?>
  <?php require("./parts/best.php"); ?>
  <?php require("./parts/projects.php"); ?>
  <?php require("./parts/skills.php"); ?>
  <?php require("./parts/freelancer.php"); ?>
  <?php require("./parts/resume.php"); ?>
  <?php require("./parts/company.php"); ?>
  <?php require("./parts/contact.php"); ?>
</main>
<footer>
  <?php require("./parts/footer.php"); ?>
</footer>

<!--<script>-->

<?php require("./parts/js_imports.php"); ?>
<script defer src="js/progressbars.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-150811390-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-150811390-1');
</script>


</body>
</html>

