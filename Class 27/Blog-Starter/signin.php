<!-- Header -->
<?php
  @include './components/header.php';
  @include './database/configure.php';
?>

<!-- Body -->
<div class="container-fluid h-100 signUpTreeImageFix mt-5 pt-5">
  <div class="row bgLightBlue">
    <div class="col-md-6 d-flex align-items-end height100">
      <img src="./img/loginImg.svg" alt="Tree swing image" style="transform :scale(-1,1);" class="w-100" />
    </div>
    <div class="offset-md-1 col-md-4 signUpContent my-3">
      <div class="card">
        <div class="card-body shadow rounded">
          <h2 class="text-center textBlue">Login</h2>
          <hr class="w-50 mx-auto bgLightBlue" />
          <form action="#">
            <div class="form-group">
              <label for="email">
                <i class="fas fa-envelope textBlue"></i> Email
              </label>
              <input type="text" class="form-control" id="email" required />
            </div>
            <div class="form-group">
              <label for="password">
                <i class="fas fa-lock textBlue"></i> Password
              </label>
              <input type="text" class="form-control" id="password" required />
            </div>
            <div class="form-group d-flex justify-content-center">
              <input type="submit" value="Login Now" class="btn btn-primary w-50" />
            </div>
            <div class="form-group d-block">
              <div class="row">
                <div class="col-6">
                  <input type="checkbox" name="rememberMe" id="rememberMe">
                  <label for="rememberMe" class="textBlue">Remember me</label>
                </div>
                <div class="col-6">
                  <span class="text-right d-block">
                    <a href="#">Forget password</a>
                  </span>
                </div>
              </div>
            </div>
          </form>
          <h6 class="text-center pb-3">
            Don't have an account. <a href="./signup.html">Sign Up now</a>
          </h6>
          <hr>
          <div class="text-center py-2">
            <h5 class="textBlue lead">Login with social account</h5>
            <div class="d-flex justify-content-center">
              <a href="#"><i class="fab fa-facebook sizeSocialIcon pr-4"></i></a>
              <a href="#"><i class="fab fa-twitter sizeSocialIcon pr-4"></i></a>
              <a href="#"><i class="fab fa-linkedin sizeSocialIcon"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<?php
@include './components/footer.php';
?>