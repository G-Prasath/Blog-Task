<?php 

$signup = false;

if(isset($_POST['user']) and isset($_POST['password']) and !empty($_POST['password']) and isset($_POST['email']) and isset($_POST['phone'])){
  $user = $_POST['user'];
  $pass = $_POST['password'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];

  $conn = database::getconnection();
  $error = user::signup($user, $phone, $email, $pass);  
  $signup = true;

  }

if($signup){

  if(!$error){
    header("Location: login.php");
   }
    else{?>
    <h3>Signup Fail.</h3>
    <p>Something Wrong ... <?php echo $error?></p>
    <?php }?>

<?php }
else{
?>

<main class="form-signin">
  <form method="post" action="signup.php">

    <img class="mb-4" src="https://img.icons8.com/external-flatarticons-blue-flatarticons/2x/external-login-web-security-flatarticons-blue-flatarticons.png" alt="" width="80" height="80">
    <h1 class="h3 mb-3 fw-normal">Sing Up</h1>

    <div class="form-floating ff">
      <input name="user" type="text" class="form-control username" id="floatingInput" placeholder="name@example.com" autocomplete="off">
      <label for="floatingInput">User name</label>
    </div>

    <div class="form-floating ff">
      <input name="phone" type="int" class="form-control phone" id="floatingInput" placeholder="name@example.com" autocomplete="off">
      <label for="floatingInput">Phone No</label>
    </div>

    <div class="form-floating ff">
      <input name="email"type="email" class="form-control email" id="floatingInput" placeholder="name@example.com" autocomplete="off">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating mt-2 ff">
      <input name="password" type="password" class="form-control password" id="floatingPassword" placeholder="Password" autocomplete="off">
      <label for="floatingPassword">Password</label>
    </div>


    <div class="checkbox mt-3 mb-4">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-m btn-primary" type="submit">Sign in</button>
  </form>
</main>
<?php
}
?>