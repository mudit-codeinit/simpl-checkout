<?php
include(__DIR__."/include/header.php");
include(__DIR__."/actions/loginAction.php");

?>
<link href="/admin/include/css/signin.css" rel="stylesheet">
<form class="form-signin" name="login_form" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
 <input type="hidden" name="form_post" value="yes"/>
 
  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
  <label for="inputEmail" class="sr-only">Email address</label>
  <input type="text" id="inputEmail" class="form-control" name="user_name" placeholder="User Name" required="" autofocus="">
  <br/>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required="">
  <!-- <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div> -->
  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  <p class="mt-5 mb-3 text-muted">© 2019</p>
</form>

<?php
include(__DIR__."/include/footer.php");
?>
