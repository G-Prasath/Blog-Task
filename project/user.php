<?php
include 'libs/load.php';

if(!isset($_SESSION['username'])){
    header("Location: login.php");
  }
  
?>

<!doctype html>
<html lang="en">

    
  <?php load_templates("_head");?>


  <body>
    
  <?php load_templates("_navbar");?>


<main>

<?php load_templates("_banner");?>

<?php load_templates("_photogram");?>

</main>

<?php load_templates("_footer");?>

    <script src= "/project/assets/dist/js/bootstrap.bundle.min.js"></script>  
  </body>
</html>
