<?php require_once('init.php'); ?>
<?php require_once('header.php') ?>


<div class="breadcrumbs">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6 col-md-6 col-12">
<div class="breadcrumbs-content">
<h1 class="page-title">Registration</h1>
</div>
</div>
<div class="col-lg-6 col-md-6 col-12">
<ul class="breadcrumb-nav">
<li><a href="index.php"><i class="lni lni-home"></i> Home</a></li>
<li>Registration</li>
</ul>
</div>
</div>
</div>
</div>


<div class="account-login section">
<div class="container">
<div class="row">
<div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
<div class="register-form">
<div class="title">
<h3>No Account? Register</h3>
<p>Registration takes less than a minute but gives you full control over your orders.</p>
</div>
<form class="row" method="post" action="register_user.php" >
<div class="col-sm-6">
<div class="form-group">
<label for="reg-fn">First Name</label>
<input class="form-control" type="text" id="reg-fn" name="firstname" required>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label for="reg-ln">Last Name</label>
<input class="form-control" type="text" id="reg-ln" name="lastname" required>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label for="reg-email">E-mail Address</label>
<input class="form-control" type="email" id="reg-email" name="email" required>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label for="reg-phone">Phone Number</label>
<input class="form-control" type="text" id="reg-phone" name="phone_number" required>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label for="reg-pass">Password</label>
<input class="form-control" type="password" id="reg-pass" name="password" required>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label for="reg-pass-confirm">Confirm Password</label>
<input class="form-control" type="password" id="reg-pass-confirm" name="confirm_password" required>
</div>
</div>
<div class="button">
<button class="btn" type="submit" name="submit" <?php if(isset($_SESSION['id'])){ echo 'disabled'; } ?> >Register</button>
</div>
<p class="outer-link">Already have an account? <a href="login.php">Login Now</a>
</p>
</form>
</div>
</div>
</div>
</div>
</div>


<?php require_once('footer.php') ?>