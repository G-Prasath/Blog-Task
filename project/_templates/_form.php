<?php

$uid = $_SESSION['uid'];

if(isset($_POST['submit'])){
  $random = rand(1000, 10000);

    $errors= array();
    $file_size = $_FILES['photo']['size'];
    $file_tmp = $_FILES['photo']['tmp_name'];
    $file_type = $_FILES['photo']['type'];
    $file_ext=strtolower(end(explode('.',$_FILES['photo']['name'])));
    $file_name = basename($_FILES['photo']['name'],".".$file_ext)."-".$random.".".$file_ext;
  
   
    $extensions= array("jpeg","jpg","png");
    
    if(in_array($file_ext,$extensions)=== false){
        $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    }
    if($file_size > 2097152) {
        $errors[]='File size must be less than 2 MB';
    }
    if(empty($errors)==true) {
        move_uploaded_file($file_tmp,"images/".$file_name);
        // echo "Img Success";
    }else{
        print_r($errors);
    }    
    
    $title = $_POST['title'];
    $subject = $_POST['subject'];
    $description = $_POST['disc'];
    $img = $file_name;
    $date = date("Y-m-d H:i:s");

    $conn = database::getconnection();
    $sql = "INSERT INTO `post` (`uid`,`title`, `subject`, `disc`, `photo`, `date`) VALUES ('$uid','$title', '$subject', '$description', '$img', '$date')";
    $result = $conn->query($sql);

    if ($result === TRUE) {
        header("location:user.php");
    } else {
        print($conn->error);
    } 
}
    
?>

<main class="form-signin maintaine">
  <form method="post" action="form.php" enctype= multipart/form-data>

    <h1 class="h3 mb-3 fw-bold">ADD Content</h1>

    <div class="form-floating ff">
      <input name="title" type="text" class="form-control username" id="floatingInput" placeholder="name@example.com" autocomplete="off">
      <label for="floatingInput">Title</label>
    </div>

    <div class="form-floating ff">
      <input name="subject" type="int" class="form-control phone" id="floatingInput" placeholder="name@example.com" autocomplete="off">
      <label for="floatingInput">Subject</label>
    </div>

    <div class="form-floating ff">
    <textarea name="disc" type="text" class="phone mb-0" rows="4" cols="38"></textarea>
      <label for="floatingInput">Discription</label>
    </div>

    <div class="form-floating mt-2 ff">
      <input name="photo" type="file" class=" password pt-3" id="floatingPassword" placeholder="Password" autocomplete="off">
      <label for="floatingPassword"></label>
    </div>

    <button class="w-100 btn btn-m mt-4 btn-success" type="submit" name="submit">Add Memories</button>
  </form>
</main>