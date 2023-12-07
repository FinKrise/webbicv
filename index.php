<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>WebbiCV</title>
  <link rel="icon" href="img/ktwm2.svg" type="image/gif">

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.typekit.net/mcx2deb.css">

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">

  <!-- Navigation -->
<?php
require "pages/nav.php";
?>

<!-- Page Content -->
<div class="container">
  <div class="card border-0">

<!-- Profiili -->
<?php
require "pages/profiili.php";
?>

<!-- Projektit -->
<?php
require "pages/projektit.php";
?>

<!-- Mediasisalto -->
<?php
//require "pages/media.php";
?>

    </div>
  </div>
</div>
  
<!-- Yhteystiedot -->
<?php
require "pages/footer.php";
?>

  <!-- Bootstrap core JavaScript -->
  <script src="jquery/jquery.slim.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>

</html>
