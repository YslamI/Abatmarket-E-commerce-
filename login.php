<?php require_once('header.php') ?>


<div class="breadcrumbs">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6 col-md-6 col-12">
<div class="breadcrumbs-content">
<h1 class="page-title">Login</h1>
</div>
</div>
</div>
</div>
</div>


<div class="account-login section">
<div class="container">
<div class="row">
<div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
<form class="card login-form" method="post" action="login_user.php" style="margin-top: 20px;">
<?php

  if(isset($_GET['registered']))
  {

?>
<div class="new_registered">
  Successfully registered!
</div>
<?php } ?>
<div class="form-group input-group">
<label for="reg-fn">Email or phone number</label>
<input class="form-control" type="text" id="reg-email" name="emailnumber" required>
</div>
<div class="form-group input-group">
<label for="reg-fn">Password</label>
<input class="form-control" type="password" id="reg-pass" name="password" required>
</div>
<div class="d-flex flex-wrap justify-content-between bottom-content">
<div class="form-check">
<input type="checkbox" class="form-check-input width-auto" id="exampleCheck1">
<label class="form-check-label">Remember me</label>
</div>
<a class="lost-pass" href="">Forgot password?</a>
</div>
<div class="button">
<button class="btn" type="submit" name="submit" <?php if(isset($_SESSION['id'])){ echo 'disabled'; } ?> >Login</button>
</div>
<p class="outer-link">Don't have an account? <a href="register.php">Register here </a>
</p>
</div>
</form>
</div>
</div>
</div>
</div>


<?php require_once('footer.php') ?>