<?php
include 'libs/load.php';

if(!isset($_SESSION['username'])){
    header("Location:index.php");
}
else{
    session::destroy();
    header("Location:index.php");
}
?>


