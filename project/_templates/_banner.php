<?php
if(isset($_SESSION['username'])){?>

<section class="py-3 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Welcome <?= $_SESSION['username'] ?></h1>
        <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
        <p>
          <a href="form.php" class="btn btn-success my-2">Add Story</a>
          <a href="logout.php" class="btn btn-danger my-2">Logout</a>
        </p>
      </div>
    </div>
  </section>

<?php
}
else{
?>
  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">BLOG</h1>
        <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
        <p>
          <a href="signup.php" class="btn btn-primary my-2">Registration</a>
          <a href="login.php" class="btn btn-success my-2">Login</a>
        </p>
      </div>
    </div>
  </section>
<?php
}
?>