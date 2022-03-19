<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>EDU CARE</title>

    <!-- Google Font: Source Sans Pro -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
    />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css" />
    <!-- swiper css -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="plugins/ekko-lightbox/ekko-lightbox.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body class="hold-transition layout-top-nav">
    <div class="animation"><img src="img/logo.png" alt=""></div>
    <div class="wrapper">
      <!-- Navbar -->
      <nav
        class="main-header navbar navbar-expand-md navbar-light navbar-white"
       id="topheader">
        <div class="container">
          <a href="index.php" class="navbar-brand">
            <img
              src="img/logo.png"
              alt="AdminLTE Logo"
              class="brand-image"
              style="opacity: 0.8; object-fit: cover"
            />
            <span class="brand-text font-weight-light"
              ><span style="color: rgb(0, 113, 188);"
                >EDU</span
              ><span style="color: rgb(247, 148, 29);"
                >CARE</span
              ></span
            >
          </a>

          <button
            class="navbar-toggler order-1"
            type="button"
            data-toggle="collapse"
            data-target="#navbarCollapse"
            aria-controls="navbarCollapse"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
              <li class="nav-item <?php if($page=='home'){echo 'active';} ?> ">
                <a href="index.php" class="nav-link">Home</a>
              </li>
              <li class="nav-item  <?php if($page=='about'){echo 'active';} ?> ">
                <a href="about.php" class="nav-link">About Us</a>
              </li>
              <li class="nav-item dropdown <?php if($page=='mm-course'|$page=='eng-course'|$page=='all-course'|$page=='primary-course'|$page=='secondary-course'|$page=='summer-course'){echo 'active';} ?>">
                <a
                  id="dropdownSubMenu1"
                  href="#"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                  class="nav-link dropdown-toggle"
                  >Courses</a
                >
                <ul
                  aria-labelledby="dropdownSubMenu1"
                  class="dropdown-menu border-0 shadow"
                  style="width: 200%"
                >
                  <li><a
                      href="all_course.php"
                      class="dropdown-item"
                      >All Courses</a
                    ></li>
                  <li class="dropdown-divider"></li>

                  <!-- Primary Courses drop drown-->
                  <li class="dropdown-submenu dropdown-hover">
                    <a
                      id="dropdownSubMenu2"
                      href="primary_course.php"
                      aria-haspopup="true"
                      aria-expanded="false"
                      class="dropdown-item dropdown-toggle"
                      >Primary Courses</a
                    >
                    <ul
                      aria-labelledby="dropdownSubMenu2"
                      class="dropdown-menu border-0 shadow"
                    >
                      <li class="<?php if($page=='mm-course'){echo 'active';} ?>">
                        <a tabindex="-1" href="mm_course.php" class="dropdown-item"
                          >Burmese Language</a
                        >
                      </li>
                      <li class="<?php if($page=='eng-course'){echo 'active';} ?>">
                        <a href="eng_course.php" class="dropdown-item">Learn English</a></li>
                      
                    </ul>
                  </li>

                  <li class="dropdown-divider"></li>

                  <!-- Secondary Courses dropdown-->
                  <li class="dropdown-submenu dropdown-hover">
                    <a
                      id="dropdownSubMenu2"
                      href="secondary_course.php"
                      aria-haspopup="true"
                      aria-expanded="false"
                      class="dropdown-item"
                      >Secondary Courses</a
                    >
                    <!-- <ul
                      aria-labelledby="dropdownSubMenu2"
                      class="dropdown-menu border-0 shadow"
                    >
                      <li>
                        <a tabindex="-1" href="#" class="dropdown-item"
                          >level 2</a
                        >
                      </li>
                      <li><a href="#" class="dropdown-item">level 2</a></li>
                      <li><a href="#" class="dropdown-item">level 2</a></li>
                    </ul> -->
                  </li>

                  <li class="dropdown-divider"></li>

                  <!-- Summer Activities dropdown-->
                  <li class="dropdown-submenu dropdown-hover">
                    <a
                      id="dropdownSubMenu2"
                      href="summer_course.php"
                      aria-haspopup="true"
                      aria-expanded="false"
                      class="dropdown-item"
                      >Summer Activities</a
                    >
                    <!-- <ul
                      aria-labelledby="dropdownSubMenu2"
                      class="dropdown-menu border-0 shadow"
                    >
                      <li>
                        <a tabindex="-1" href="#" class="dropdown-item"
                          >level 2</a
                        >
                      </li>
                      <li><a href="#" class="dropdown-item">level 2</a></li>
                      <li><a href="#" class="dropdown-item">level 2</a></li>
                    </ul> -->
                  </li>
                  <!-- End Courses drop drown -->
                </ul>
              </li>
              <li class="nav-item  <?php if($page=='activity'){echo 'active';} ?>">
                <a href="activity.php" class="nav-link">Activities</a>
              </li>
              <li class="nav-item  <?php if($page=='contact'){echo 'active';} ?> ">
                <a href="contact.php" class="nav-link">Contact</a>
              </li>
              <?php
              
              if (isset($_SESSION["useruid"])){
                echo "<li class='nav-item'><p class='respo-welcome'>" . $_SESSION["useruid"] . "</p></li>";
                echo "<li class='nav-item'><a class='respo-logout' href='include/logout.php'>Log out</a></li>";
              }
              else {
                echo "<li class='nav-item'><a class='respo-login' href='login.php'>Log In</a></li>";
                echo "<li class='nav-item'><a class='respo-signup' href='signup.php'>Sign Up</a></li>";
              }

              ?>
              <!-- <li class="nav-item"><a class="respo-login" href="login.php">Log In</a></li>
                  <li class="nav-item"><a class="respo-signup" href="signup.php">Sign Up</a></li> -->
            </ul>
          </div>
        </div>

        <?php
        
        if (isset($_SESSION["useruid"])){
          echo "<li class='welcome-text'>" . $_SESSION["useruid"] . "</li>";
          echo "<li class='logout-text'><a href='include/logout.php'>Log Out</a></li>";
        }
        else {
          echo "<a href='login.php' class='log-a'><button class='login-btn'>Log In</button></a>";
          echo "<a href='signup.php' class='sign-a'><button class='signup-btn'>Sign Up</button></a>";
        }
        
        ?>
        <!-- <a href="login.php"><button class="login-btn">Log In</button></a> -->
        <!-- <a href="signup.php"><button class="signup-btn" >Sign Up</button></a> -->
      </nav>
      <!-- /.navbar -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">