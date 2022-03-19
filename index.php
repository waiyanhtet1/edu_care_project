<?php $page='home'; include "layout/header.php"; ?>

<div class="swiper swiper-1">
      <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide" style="background-image: url(img/slider_photos/slider1.jpg);"><h3>Want to shine about your children future!</h3></div>
          <div class="swiper-slide" style="background-image: url(img/slider_photos/slider2.jpg);"><h3>From Here,you will be know after learning with us.</h3></div>
          <div class="swiper-slide" style="background-image: url(img/slider_photos/slider3.jpg);">
            <!-- <button>Explore Courses <i class="fa-solid fa-right-long"></i></button> -->
            <a href="all_course.php"><button class="btn">Explore Courses<i class="fas fa-arrow-right"></i></button></a>
          </div>
        </div>
        <div class="swiper-pagination swiper-pagination-1">
          <span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span>
        </div>  
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>

    

    <div class="intro">
    <h1 class="course-text"><span style="color:rgb(0, 113, 188);">Over</span><span style="color:rgb(247, 148, 29);"> 100</span> <span style="color:rgb(0, 113, 188);">Interactive Online Classes</span></h1>
    <p class="course-text-p">Keep kids ages 3-18 engaged with thousands of classes and camps on the topics they're most passionate about!</p>
    </div>

    <!-- banner -->
    <div class="how-we-work">
      <div class="content">
          <p>Get personalized instruction and tutoring on any subject</p>
          <button id="see_how_button">See How</button>
      </div>
      <div class="content-img">
          <img src="img/svg_img/undraw_teaching_re_g7e3.svg" alt="">
      </div>
    </div>

  <div class="content mt-4">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <!-- <h3 class="mx-5 mt-3" style="font-size: 20px; color: rgb(0, 113, 188);">Popular classes from us</h3> -->
            <div class="card-body">
              <!-- course swiper -->
              <div class="swiper mySwiper swiper-2">
                <div class="swiper-wrapper">
                  <!-- maynamr course -->
                  <div class="swiper-slide">
                    <a href="mm_course.php" class="custom-card">
                    <div class="card">
                      <img src="img/course/Burmese-Language.png" class="card-img-top">
                      <div class="card-body">
                        <div class="rating" style="display: flex;">
                          <img src="img/svg_img/full-star.svg" alt="" style="width: 19px; height: 19px;">
                          <img src="img/svg_img/full-star.svg" alt="" style="width: 19px; height: 19px;">
                          <img src="img/svg_img/half-star.svg" alt="" style="width: 19px; height: 19px;">
                          <img src="img/svg_img/empty-star.svg" alt="" style="width: 19px; height: 19px;">
                          <img src="img/svg_img/empty-star.svg" alt="" style="width: 19px; height: 19px;">   
                          <p class="mx-2 ">4.93</p>
                        </div>
                        <p style="font-weight: 600; font-size: 15px;"> Learn Well-Structured Burmese Language Program </p>
                        <div class="teacher" style="display: flex;">
                          <p class="m-2">Teach By - Miss Nelson</p>
                        </div>
                      </div>
                    </div>
                    </a>
                  </div>
                  <!-- eng course -->
                  <div class="swiper-slide">
                    <a href="eng_course.php" class="custom-card">
                    <div class="card">
                      <img src="img/course/english.jpg" class="card-img-top">
                      <div class="card-body">
                        <div class="rating" style="display: flex;">
                          <img src="img/svg_img/full-star.svg" alt="" style="width: 19px; height: 19px;">
                          <img src="img/svg_img/full-star.svg" alt="" style="width: 19px; height: 19px;">
                          <img src="img/svg_img/full-star.svg" alt="" style="width: 19px; height: 19px;">
                          <img src="img/svg_img/empty-star.svg" alt="" style="width: 19px; height: 19px;">
                          <img src="img/svg_img/empty-star.svg" alt="" style="width: 19px; height: 19px;">   
                          <p class="mx-2 ">5.03</p>
                        </div>
                        <p style="font-weight: 600; font-size: 15px;"> The complete English course: Speaking Skills, Grammar, and More…</p>
                        <div class="teacher" style="display: flex;">
                          <p class="m-2">Teach By - David Morris</p>
                        </div>
                      </div>
                    </div>
                    </a>
                  </div>
                  
                  <!-- chemistry course -->
                  <div class="swiper-slide">
                  <a href="#" class="custom-card">
                    <div class="card">
                      <img src="img/course/Chemistry.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <div class="rating" style="display: flex;">
                          <img src="img/svg_img/full-star.svg" alt="" style="width: 19px; height: 19px;">
                          <img src="img/svg_img/full-star.svg" alt="" style="width: 19px; height: 19px;">
                          <img src="img/svg_img/full-star.svg" alt="" style="width: 19px; height: 19px;">
                          <img src="img/svg_img/half-star.svg" alt="" style="width: 19px; height: 19px;">
                          <img src="img/svg_img/empty-star.svg" alt="" style="width: 19px; height: 19px;">   
                          <p class="mx-2 ">6.84</p>
                        </div>
                        <p style="font-weight: 600; font-size: 15px;"> Introduction to Chemistry</p>
                        <div class="teacher" style="display: flex;">
                          <p class="m-2">Teach By - Mr.Andrew</p>
                        </div>
                      </div>
                    </div>
                    </a>
                  </div>
                  <div class="swiper-slide">
                  <a href="#" class="custom-card">
                    <div class="card">
                      <img src="img/summer/santi-vedri-O5EMzfdxedg-unsplash.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <div class="rating" style="display: flex;">
                          <img src="img/svg_img/full-star.svg" alt="" style="width: 19px; height: 19px;">
                          <img src="img/svg_img/full-star.svg" alt="" style="width: 19px; height: 19px;">
                          <img src="img/svg_img/half-star.svg" alt="" style="width: 19px; height: 19px;">
                          <img src="img/svg_img/empty-star.svg" alt="" style="width: 19px; height: 19px;">
                          <img src="img/svg_img/empty-star.svg" alt="" style="width: 19px; height: 19px;">   
                          <p class="mx-2 ">5.43</p>
                        </div>
                        <p style="font-weight: 600; font-size: 15px;"> Painting and Drawing</p>
                        <div class="teacher" style="display: flex;">
                          <p class="m-2">Teach By - John Carlton</p>
                        </div>
                      </div>
                    </div>
                    </a>
                  </div>
                  <div class="swiper-slide">
                  <a href="#" class="custom-card">
                    <div class="card">
                      <img src="img/summer/robo-wunderkind-hLvQ4-QEBAE-unsplash.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <div class="rating" style="display: flex;">
                          <img src="img/svg_img/full-star.svg" alt="" style="width: 19px; height: 19px;">
                          <img src="img/svg_img/full-star.svg" alt="" style="width: 19px; height: 19px;">
                          <img src="img/svg_img/full-star.svg" alt="" style="width: 19px; height: 19px;">
                          <img src="img/svg_img/half-star.svg" alt="" style="width: 19px; height: 19px;">
                          <img src="img/svg_img/empty-star.svg" alt="" style="width: 19px; height: 19px;">   
                          <p class="mx-2 ">8.43</p>
                        </div>
                        <p style="font-weight: 600; font-size: 15px;"> Python For Kids</p>
                        <div class="teacher" style="display: flex;">
                          <p class="m-2">Teach By - Davis Helton</p>
                        </div>
                      </div>
                    </div>
                    </a>
                  </div>
                  <div class="swiper-slide">
                  <a href="#" class="custom-card">
                    <div class="card">
                      <img src="img/summer/charlein-gracia-06f9TZl3fQY-unsplash.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <div class="rating" style="display: flex;">
                          <img src="img/svg_img/full-star.svg" alt="" style="width: 19px; height: 19px;">
                          <img src="img/svg_img/full-star.svg" alt="" style="width: 19px; height: 19px;">
                          <img src="img/svg_img/full-star.svg" alt="" style="width: 19px; height: 19px;">
                          <img src="img/svg_img/half-star.svg" alt="" style="width: 19px; height: 19px;">
                          <img src="img/svg_img/empty-star.svg" alt="" style="width: 19px; height: 19px;">   
                          <p class="mx-2 ">7.33</p>
                        </div>
                        <p style="font-weight: 600; font-size: 15px;">Manners & Interactions</p>
                        <div class="teacher" style="display: flex;">
                          <p class="m-2">Teach By - Jane Smith</p>
                        </div>
                      </div>
                    </div>
                    </a>
                  </div>
                  <!-- math course -->
                  <div class="swiper-slide">
                  <a href="#" class="custom-card">
                    <div class="card">
                      <img src="img/course/mathematics.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <div class="rating" style="display: flex;">
                          <img src="img/svg_img/full-star.svg" alt="" style="width: 19px; height: 19px;">
                          <img src="img/svg_img/full-star.svg" alt="" style="width: 19px; height: 19px;">
                          <img src="img/svg_img/full-star.svg" alt="" style="width: 19px; height: 19px;">
                          <img src="img/svg_img/full-star.svg" alt="" style="width: 19px; height: 19px;">
                          <img src="img/svg_img/half-star.svg" alt="" style="width: 19px; height: 19px;">   
                          <p class="mx-2 ">9.58</p>
                        </div>
                        <p style="font-weight: 600; font-size: 15px;"> Algebra, Arithmetic, Geometry, Mensuration and more …</p>
                        <div class="teacher" style="display: flex;">
                          <p class="m-2">Teach By - Mr.Min Min Win</p>
                        </div>
                      </div>
                    </div>
                    </a>
                  </div>
                  <!-- physic course -->
                  <div class="swiper-slide">
                  <a href="#" class="custom-card">
                    <div class="card">
                      <img src="img/course/physics.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <div class="rating" style="display: flex;">
                          <img src="img/svg_img/full-star.svg" alt="" style="width: 19px; height: 19px;">
                          <img src="img/svg_img/full-star.svg" alt="" style="width: 19px; height: 19px;">
                          <img src="img/svg_img/full-star.svg" alt="" style="width: 19px; height: 19px;">
                          <img src="img/svg_img/full-star.svg" alt="" style="width: 19px; height: 19px;">
                          <img src="img/svg_img/half-star.svg" alt="" style="width: 19px; height: 19px;">   
                          <p class="mx-2 ">9.53</p>
                        </div>
                        <p style="font-weight: 600; font-size: 15px;"> A course that's made for you to easily learn Physics!</p>
                        <div class="teacher" style="display: flex;">
                          <p class="m-2">Teach By -  Mr. Aung Ko Ko Win</p>
                        </div>
                      </div>
                    </div>
                    </a>
                  </div>
                  <!-- biology course -->
                  <div class="swiper-slide">
                  <a href="#" class="custom-card">
                    <div class="card">
                      <img src="img/course/biology.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <div class="rating" style="display: flex;">
                          <img src="img/svg_img/full-star.svg" alt="" style="width: 19px; height: 19px;">
                          <img src="img/svg_img/full-star.svg" alt="" style="width: 19px; height: 19px;">
                          <img src="img/svg_img/half-star.svg" alt="" style="width: 19px; height: 19px;">
                          <img src="img/svg_img/empty-star.svg" alt="" style="width: 19px; height: 19px;">
                          <img src="img/svg_img/empty-star.svg" alt="" style="width: 19px; height: 19px;">   
                          <p class="mx-2 ">6.32</p>
                        </div>
                        <p style="font-weight: 600; font-size: 15px;"> General Biology</p>
                        <div class="teacher" style="display: flex;">
                          <p class="m-2">Teach By - Sophia Banton</p>
                        </div>
                      </div>
                    </div>
                    </a>
                  </div>
                 
                </div>
                <div class="swiper-pagination swiper-pagination-2">
                  <span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span>
                </div>
          
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </div>
    
<div class="content mt-4">
<div class="container-fluid">
  <div class="activity">
  <div class="row">
    <div class="col">
      <h1><span style="color:rgb(0, 113, 188);">Our activities in <br> last</span> <span style="color:rgb(247, 148, 29); font-family: ita;">summer bootcamp </span></h1>
      <a href="activity.php"><button class="btn btn-activity">Details our activities...<i class="fas fa-arrow-right"></i></button></a>
    </div>
    <div class="col">
      <div class="swiper mySwiper swiper-3" data-bs-toggle="tooltip" data-bs-placement="left" title="press and swipe me to left or right">
        <div class="swiper-wrapper">
          <div class="swiper-slide"></div>
          <div class="swiper-slide"></div>
          <div class="swiper-slide"></div>
          <div class="swiper-slide"></div>
          <div class="swiper-slide"></div>
          <div class="swiper-slide"></div>
          <div class="swiper-slide"></div>
          <div class="swiper-slide"></div>
          <div class="swiper-slide"></div>
        </div>
      </div>
    </div>
  </div>
</div>
    </div>
  </div>

  <div class="join-activity">
    <p class="text">Pre-register our next summer course will get <span>40% discount</span> <a href="contact.php"> Join Now</a></p>
  <div class="countdown-container">
        <div class="countdown-el days-c">
            <p class="big-text" id="days">0</p>
            <span>days</span>
        </div>
        <div class="countdown-el hours-c">
            <p class="big-text" id="hours">0</p>
            <span>hours</span>
        </div>
        <div class="countdown-el mins-c">
            <p class="big-text" id="mins">0</p>
            <span>mins</span>
        </div>
        <div class="countdown-el seconds-c">
            <p class="big-text" id="seconds">0</p>
            <span>seconds</span>
        </div>
    </div>
  </div>
  
  <div class="about">
        <div class="about-img">
          <img src="img/about/person1.jpg" alt="">
        </div>
      <div class="about-content">
        <div class="about-heading">
          <small style="color:rgb(146, 139, 139);">Primary Course</small>
          <h4>Learn Well-Structured Burmese Language Program with <span>Miss Nelson</span></h4>
        </div>
        <p style="padding-top: 20px;">Native speakers of the Burmese language and have been specially selected to provide the most memorable experience for you.Language teachers are carefully selected to ensure that their values and characters reflect that of the school.
        </p>
        <a href="mm_course.php">About this course</a>
      </div>
  </div>

  <div class="about-1">
      <div class="about-content-1">
        <div class="about-heading">
            <small style="color:rgb(146, 139, 139);">Secondary Course</small>
            <h4>A course that's made for you to easily learn Physics! With
             <span>Mr. Aung Ko Ko Win</span></h4>
          </div>
          <p style="padding-top: 20px;">A highly qualified science teacher in New York State. He has plenty of teaching experience having taught Environmental Science, Chemistry, Middle school Science, Robotics, and predominantly Physics.He is incredibly passionate about physics having over ten years of experience teaching high school and AP physics.

          </p>
          <a href="#">About this course</a>
      </div>  
      <div class="about-img-1">
        <img src="img/about/person2.jpg" alt="">
      </div>
  </div>

  <!-- video -->
      <div class="row video-section">
              <div class="col-5 col-sm-3">
                <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                  <a class="nav-link active" id="vert-tabs-home-tab" data-toggle="pill" href="#vert-tabs-home" role="tab" aria-controls="vert-tabs-home" aria-selected="true">See how we are teaching</a>
                  <a class="nav-link" id="vert-tabs-profile-tab" data-toggle="pill" href="#vert-tabs-profile" role="tab" aria-controls="vert-tabs-profile" aria-selected="false">Pratical with children</a>
                  <a class="nav-link" id="vert-tabs-messages-tab" data-toggle="pill" href="#vert-tabs-messages" role="tab" aria-controls="vert-tabs-messages" aria-selected="false">What we do in summer camp</a>
                  
                </div>
              </div>
              <div class="col-7 col-sm-9">
                <div class="tab-content" id="vert-tabs-tabContent">
                  <div class="tab-pane text-left fade show active text-center" id="vert-tabs-home" role="tabpanel" aria-labelledby="vert-tabs-home-tab">
                        <p>This video is for poject poupose only.</p> 
                        <a href="https://www.youtube.com/watch?v=jZKrt0r37c0" data-toggle="lightbox" data-gallery="youtubevideos" class="col-sm-4"  data-width="1280">
                          <img src="img/howweteach.png" class="img-fluid" width="350px;" data-bs-toggle="tooltip" data-bs-placement="top" title="Press me to see video">
                        </a>
                  </div>
                  <div class="tab-pane fade text-center video-section-content-2" id="vert-tabs-profile" role="tabpanel" aria-labelledby="vert-tabs-profile-tab">
                  <p>This video is for poject poupose only.</p> 
                      <a href="https://www.youtube.com/watch?v=gnArvcWaH6I" data-toggle="lightbox" data-gallery="youtubevideos" class="col-sm-4"  data-width="1280">
                          <img src="img/pratical_video.png" class="img-fluid" width="350px" data-bs-toggle="tooltip" data-bs-placement="top" title="Press me to see video">
                        </a>
                  </div>
                  <div class="tab-pane fade text-center" id="vert-tabs-messages" role="tabpanel" aria-labelledby="vert-tabs-messages-tab">
                  <p>This video is for poject poupose only.</p> 
                      <a href="https://www.youtube.com/watch?v=4mckzWx69ZM" data-toggle="lightbox" data-gallery="youtubevideos" class="col-sm-4"  data-width="1280">
                          <img src="img/summervideo.png" class="img-fluid" width="350px" data-bs-toggle="tooltip" data-bs-placement="top" title="Press me to see video">
                        </a>
                  </div>
                  <div class="tab-pane fade" id="vert-tabs-settings" role="tabpanel" aria-labelledby="vert-tabs-settings-tab">
                     Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis.
                  </div>
                </div>
              </div>
            </div>
<?php include 'layout/footer.php';?>