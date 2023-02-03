<?php

include 'libs/load.php';


if(!isset($_SESSION['username'])){
    header("Location:index.php");
}

$pid = $_GET['id'];
$conn = database::getconnection();
$sql = "SELECT * FROM `post` WHERE `pid` = '$pid'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

session::set(upid, $pid);
session::set(utitle, $row['title']);
session::set(usubject, $row['subject']);
session::set(udisc, $row['disc']);
session::set(uphoto, $row['photo']);

?>

<!doctype html>
<html lang="en">

  <?php load_templates("_head");?>

  <body>
     
  <?php load_templates("_navbar");?>

<main>

<?php load_templates("_update");?>

</main>


    <script src="/project/assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
