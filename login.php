<?php include 'layout/header.php' ;?>

<div class="login-box mx-auto" style="margin: 50px 0px;">
      <!-- /.login-logo -->
      <div class="card card-outline card-primary w-100 mx-auto">
        <div class="card-header text-center">
          <a href="#" class="h1" style="color: rgb(247, 148, 29)">
            <span style="color: rgb(0, 113, 188)"><b>EDU</b></span
            >CARE</a
          >
        </div>
        <div class="card-body">
          <p class="login-box-msg">Sign in here!</p>

          <form action="include/login.script.php" method="POST" class="needs-validation" novalidate>
            <div class="input-group mb-3">
              <input
                type="text"
                class="form-control"
                name="uid"
                placeholder="Username/Email" id="validationCustom01" 
              />
              <div class="invalid-feedback">
                Please provide a valid city.
              </div>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input
                type="password"
                class="form-control"
                name="pwd"
                placeholder="Password" id="validationCustom02" 
              />
              <div class="invalid-feedback">
                Please provide a valid city.
              </div>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-6">
                <!-- <div class="icheck-primary">
                  <input type="checkbox" id="remember" />
                  <label for="remember"> Remember Me </label>
                </div> -->
              </div>
              <!-- /.col -->
              <div class="col-6">
                <button
                  type="submit"
                  name="submit"
                  class="form-login"
                >
                  Sign In
                </button>
              </div>
              <!-- /.col -->
            </div>
          </form>
          <p class="my-4">
            <a href="signup.php" class="text-center">Register a new membership</a>
            <!-- error messages -->
          </p>
            <?php
                if(isset($_GET["error"])){
                    if($_GET["error"]=="emptyinput"){
                        echo "<p style=\"color:red;text-align: center\">You need to fill in all field!</p>";
                    }
                    else if($_GET["error"]=="IncorrectLogin"){
                        echo "<p style=\"color:red;text-align: center\">Incorrect Log In!</p>";
                    } 
            }
            ?>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.login-box -->
<!-- /.card -->

<?php include 'layout/footer.php' ;?>