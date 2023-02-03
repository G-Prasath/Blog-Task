<?php
include 'libs/load.php';

if(!isset($_SESSION['username'])){
    header("Location:index.php");
}

$pid = $_GET['id'];
$conn = database::getconnection();

// ---------- Delete Folder Image -----------------

$sql = "SELECT `photo` FROM `post` WHERE `pid` = '$pid'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$path = "./images/".$row['photo'];

// ----------------- Delete Records ------------------
$query = "DELETE FROM `post` WHERE `pid` = '$pid'";
$delete = $conn->query($query);

if($delete === True){
    if(is_file($path)){
        unlink($path);
    }
    else{
        echo "File Not Found";
    }
    header("Location:user.php");
}
else{
    echo "Deleting Failer";
}

?>