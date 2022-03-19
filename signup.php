<?php include 'layout/header.php' ;?>

<div class="register-box mx-auto" style="margin: 50px 0px;">
      <div class="card card-outline card-primary w-100 mx-auto">
        <div class="card-header text-center">
          <a href="#" class="h1" style="color: rgb(247, 148, 29);"> <span style="color: rgb(0, 113, 188);"><b>EDU</b></span>CARE</a>
        </div>
        <div class="card-body">
          <p class="login-box-msg">Register a new membership</p>

          <form action="include/signup.script.php" method="POST">
            <div class="input-group mb-3">
              <input
                type="text"
                class="form-control"
                name="name"
                placeholder="Full name"
              />
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input
                type="text"
                class="form-control"
                name="uid"
                placeholder="Username"
              />
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input
                type="email"
                class="form-control"
                name="email"
                placeholder="Email"
              />
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
                placeholder="Password"
              />
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input
                type="password"
                class="form-control"
                name="pwdconfirm"
                placeholder="Retype password"
              />
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <!-- /.col -->
              <div class="col-8">
                <button
                  type="submit"
                  name="submit"
                  class="form-signup"
                >
                  Register
                </button>
              </div>
              <!-- /.col -->
            </div>
          </form>
        <div class="membership-link text-center" style="margin: .5rem;">
          <a href="login.php">I already have a membership</a>
        </div>
<?php
    if(isset($_GET["error"])){
        if($_GET["error"]=="emptyinput"){
            echo "<p style=\"color:red;text-align: center\">You need to fill in all field!</p>";
        }
        else if($_GET["error"]=="invalidemail"){
            echo "<p style=\"color:red;text-align: center\">Please use proper email!</p>";
        }
        else if($_GET["error"]=="PasswordDoesn'tMatch"){
            echo "<p style=\"color:red;text-align: center\">Passwords doesn't match</p>";
        }
        else if($_GET["error"]=="Usernametaken"){
            echo "<p style=\"color:red;text-align: center\">Username already taken!</p>";
        }
        else if($_GET["error"]=="stmtfailed"){
            echo "<p style=\"color:red;text-align: center\">Something went wrong!</p>";
        }
    else if($_GET["error"]=="none"){
        echo "<p style=\"color:blue;text-align: center\">You have signed up!</p>";
    }    

}
?>
        </div>
        <!-- /.form-box -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.register-box -->



<?php include 'layout/footer.php' ;?>