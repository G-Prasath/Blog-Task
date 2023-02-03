<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];

    if(!$email == ""){
        $conn = database::getconnection();
        $sql = "SELECT `email` FROM `auth` WHERE `email` = '$email'";
        $result = $conn->query($sql);
      
        if($result->num_rows == 1){
            echo "Valid Email";
        }
        else{
            echo "Invalid Email";
        }
        exit;
        

        print_r($row);
        
    }
    else{
        echo "Enter Your Login Email";
    }
}



?>


<main class="form-signin">
  <form method="POST" action="forgot.php">

    <!-- <img class="mb-4" src="https://img.icons8.com/external-flatarticons-blue-flatarticons/2x/external-login-web-security-flatarticons-blue-flatarticons.png" alt="" width="80" height="80"> -->
    <h1 class="h3 mb-3 fw-normal">Password Reset</h1>

    <div class="form-floating">
      <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com" autocomplete="off">
      <label for="floatingInput">example@gmail.com</label>
    </div>

    <button class="w-100 btn btn-m btn-primary" type="submit" name="submit">Log in</button>
  </form>
</main>