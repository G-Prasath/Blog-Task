<?php

if(isset($_POST['submit'])){
  
    $email = $_POST['email'];
    $pass = $_POST['password'];
 
    $conn = database::getconnection();
    $result = user::login($email, $pass);

    session::set(username, $result['username']);    
    session::set(uid, $result['uid']);

    
}    

if(session::isset(username)){
    header('location: user.php');
}
else{
?>

<main class="form-signin">
  <form method="POST" action="login.php">

    <img class="mb-4" src="https://img.icons8.com/external-flatarticons-blue-flatarticons/2x/external-login-web-security-flatarticons-blue-flatarticons.png" alt="" width="80" height="80">
    <h1 class="h3 mb-3 fw-normal">Login</h1>

    <div class="form-floating">
      <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com" autocomplete="off">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating mt-2">
      <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password" autocomplete="off">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mt-3 mb-4">
      <label>
        <a href="forgot.php">Forgot Password</a>
      </label>
    </div>
    <button class="w-100 btn btn-m btn-primary" type="submit" name="submit">Log in</button>
  </form>
</main>

<?php
}
?>