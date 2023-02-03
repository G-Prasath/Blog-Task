<?php

if(isset($_SESSION['username'])){?>

<div class="container">
      <div class="row">

<?php  
  $uid = $_SESSION['uid'];
  $author = $_SESSION['username'];

  $conn = database::getconnection();
  $query = "SELECT * FROM `post` WHERE `uid` = '$uid'";
  $result = $conn->query($query);
  
  if($result->num_rows > 0){

    while($row = $result->fetch_assoc()){
      $pid = $row['pid'];
      $title = $row['title'];
      $subject = $row['subject'];
      $disc = $row['disc'];
      $date = $row['date'];
      $img = $row['photo'];
      $date = date('d-m-Y',strtotime($date));
      ?>
      
    <div class="col-md-4 p-4">

    
    
      <div style="box-shadow: 0 0  20px #ddd;">
        <div class="position-relative" style="height: 320px; background-image: url(./images/<?php echo $img ?>);    background-position: center; background-size: cover;">
        
          <div class="position-absolute px-3" style="background: rgba(0, 0, 0, .5); right: 0; bottom: 0; left: 0;">
            <h3 class="h6"><a href="#" class="text-white" style="line-height: 1.6;"><?= $title ?></a></h3>
            <div class="mt-2 d-flex justify-content-between">
              <a href="#" class="pl-2 text-white" style="border-left: 3px solid #9B5DE5;"><small><?= $subject?></small></a>
              <a href="#" class="text-white"><small><?= $author ?></small></a>
            </div>
            <p class="pt-2" style="color:#fff;"><?= $disc?></p>
          </div>
        </div>
        <div class="p-3">
          <div class="d-flex align-items-center mr-4">
            <div class="btn-group">
                  <a type="button" class="btn btn-sm btn-outline-primary" href="update.php?id=<?php echo $pid; ?>">Edit</a>
                  <a type="button" class="btn btn-sm btn-outline-danger" href="delete.php?id=<?php echo $pid; ?>">Delete</a>
            </div>
            <small class="mt-1" style="color: #9B5DE5; margin-left: 130px"><?= $date ?></small>
          </div>
        </div>
      </div>
    </div>

    <?php
    }
    ?>
  </div>
      </div>  
  <?php
  }
  else
  {
    return FALSE;
  }

  ?>
<?php
}else{ 
?>
  <div class="container">
    <div class="row">
    <div class="col-md-4 p-4">
      <div style="box-shadow: 0 0  20px #ddd;">
        <div class="position-relative" style="height: 320px; background-image: url(https://wallpaperaccess.com/full/1209397.jpg); background-position: center; background-size: cover;">
          <div class="position-absolute px-3 py-4" style="background: rgba(0, 0, 0, .5); right: 0; bottom: 0; left: 0;">
            <h3 class="h6"><a href="#" class="text-white" style="line-height: 1.6;">Lorem ipsum dolor consectetur adipisicing elit. Commodi, ad!</a></h3>
            <div class="mt-2 d-flex justify-content-between">
              <a href="#" class="pl-2 text-white" style="border-left: 3px solid #9B5DE5;"><small>Travel</small></a>
              <a href="#" class="text-white"><small>Sara Faizi</small></a>
            </div>
          </div>
        </div>
        <div class="p-3">
          <div class="d-flex align-items-center mr-4">
            <small class="mt-1" style="color: #9B5DE5; margin-left: 130px">6 min ago</small>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 p-4">
      <div style="box-shadow: 0 0  20px #ddd;">
        <div class="position-relative" style="height: 320px; background-image: url(https://wallpaperaccess.com/full/767033.jpg); background-position: center; background-size: cover;">
          <div class="position-absolute px-3 py-4" style="background: rgba(0, 0, 0, .5); right: 0; bottom: 0; left: 0;">
            <h3 class="h6"><a href="#" class="text-white" style="line-height: 1.6;">Lorem ipsum dolor consectetur adipisicing elit. Commodi, ad!</a></h3>
            <div class="mt-2 d-flex justify-content-between">
              <a href="#" class="pl-2 text-white" style="border-left: 3px solid #9B5DE5;"><small>Food</small></a>
              <a href="#" class="text-white"><small>Sara Faizi</small></a>
            </div>
          </div>
        </div>
        <div class="p-3">
          <div class="d-flex align-items-center mr-4">
            <small class="mt-1" style="color: #9B5DE5; margin-left: 130px">6 min ago</small>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 p-4">
      <div style="box-shadow: 0 0  20px #ddd;">
        <div class="position-relative" style="height: 320px; background-image: url(https://c4.wallpaperflare.com/wallpaper/676/293/313/programmer-wallpaper-preview.jpg); background-position: center; background-size: cover;">
          <div class="position-absolute px-3 py-4" style="background: rgba(0, 0, 0, .5); right: 0; bottom: 0; left: 0;">
            <h3 class="h6"><a href="#" class="text-white" style="line-height: 1.6;">Lorem ipsum dolor consectetur adipisicing elit. Commodi, ad!</a></h3>
            <div class="mt-2 d-flex justify-content-between">
              <a href="#" class="pl-2 text-white" style="border-left: 3px solid #9B5DE5;"><small>Technology</small></a>
              <a href="#" class="text-white"><small>Sara Faizi</small></a>
            </div>
          </div>
        </div>
        <div class="p-3">
          <div class="d-flex align-items-center mr-4">
            <small class="mt-1" style="color: #9B5DE5; margin-left: 130px">6 min ago</small>
          </div>
        </div>
      </div>
    </div>
  </div>

  
<?php
}
?>