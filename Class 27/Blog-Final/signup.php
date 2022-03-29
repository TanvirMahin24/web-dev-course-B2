<!-- Header -->
<?php
  @include './components/header.php';
  @include './database/configure.php';

  // session_start();
  // if(!isset($_SESSION["name"])) {
  //     header("Location: index.php");
  //     exit();
  // }
?>

<!-- Body -->
<div class="container-fluid h-100 signUpTreeImageFix">
  <div class="row bgLightBlue">
    <div class="col-md-6 d-flex align-items-end height100">
      <img src="./img/signupImg.svg" alt="Tree swing image" class="w-100" />
    </div>
    <div class="offset-md-1 col-md-4 signUpContent my-3">
      <div class="card">
        <div class="card-body shadow rounded">
          <h2 class="text-center textBlue">Create Account</h2>
          <hr class="w-50 mx-auto bgLightBlue" />

          <!-- Functionalities -->
          <?php
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = stripslashes($_POST["name"]);
            $name = mysqli_real_escape_string($conn, $name);
            $email = stripslashes($_POST['email']);
            $email = mysqli_real_escape_string($conn, $email);
            $password = stripslashes($_POST['password']);
            $password = mysqli_real_escape_string($conn, $password);
            $created_at = date("Y-m-d H:i:s");

            $query = "INSERT into `users` (name, email, phone, password, image, created_at)
                      VALUES ('$name', '$email', '',  '" . md5($password) . "', '', '$created_at')";
            $result = mysqli_query($conn, $query);

            if ($result) {
              echo "<div class='alert alert-success' role='alert'>
                    Registration Successfull.
                    </div>";
            } else {
                echo "<div class='alert alert-danger' role='alert'>
                      Registration Failed. Try again.  
                      </div>";
            }
          }
          ?>

          <!-- Form -->
          <form action="" method="POST">
            <div class="form-group">
              <label for="name">
                <i class="fas fa-user textBlue"></i> Name
              </label>
              <input type="text" class="form-control" id="name" name="name" required />
            </div>
            <div class="form-group">
              <label for="email">
                <i class="fas fa-envelope textBlue"></i> Email
              </label>
              <input type="text" class="form-control" id="email" name="email" required />
            </div>
            <div class=" form-group">
              <label for="password">
                <i class="fas fa-lock textBlue"></i> Password
              </label>
              <input type="text" class="form-control" id="password" name="password" required />
            </div>
            <div class="form-group">
              <label for="password2">
                <i class="fas fa-lock textBlue"></i> Retype Password
              </label>
              <input type="text" class="form-control" id="password2" name="password2" required />
            </div>
            <div class="form-group d-flex justify-content-center">
              <input type="submit" value="Sign Up" class="btn btn-primary w-50" />
            </div>
          </form>
          <div class="text-center pt-2">
            <h5 class="textBlue lead">Sign up with social account</h5>
            <div class="d-flex justify-content-center">
              <a href="#"><i class="fab fa-facebook sizeSocialIcon pr-4"></i></a>
              <a href="#"><i class="fab fa-twitter sizeSocialIcon pr-4"></i></a>
              <a href="#"><i class="fab fa-linkedin sizeSocialIcon"></i></a>
            </div>
          </div>
          <hr />
          <h6 class="text-center py-3">
            Already have an account. <a href="./signin.html">Login now</a>
          </h6>

        </div>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<?php
@include './components/footer.php';
?>