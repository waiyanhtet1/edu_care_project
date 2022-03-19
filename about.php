<?php $page='about'; include 'layout/header.php'; ?>

<div class="about-banner">
        <div class="about-youtube">
            <iframe width="400" height="200" src="https://www.youtube.com/embed/TJN3gJoZqlY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
</div>

    <!-- about detail  -->
    <div class="container">
        <div class="about-details row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2"> 
            <div class="col">
                <img src="img/About Us.jpg" alt="">    
            </div>
            <div class="col">
                <p><span style="color: rgb(0, 113, 188); font-size: 23px;">EDU</span><span  style="color:rgb(247, 148, 29); font-size: 23px;">CARE</span> International School is an academically focused school that wants to instill and develop strong core values in our students. We firmly believe in the importance and the power of quality education and how it can change lives, societies and countries. As a team, we are committed to educate our next generation and to prepare them to be ready for tomorrow’s world. We aim to deliver quality education to provide more opportunities and access.</p>
            </div>
            <div class="col">
                <h4>Our teacher has good experience for your kids</h4>
                <p>
                <li>Language teachers are carefully selected to ensure that their values and characters reflect that of the school.</li>    
                <li>plenty of teaching experience</li>
                <li>taught thousands of students both in person and with online courses </li>
                <li>20+ years of experience in teaching Mathematics. A strong record of countless students who have scored 90% and above in the subject and many who have scored 100%.</li>
                <li>to clear explanations which enable them to understand the subject</li>
                </p>
            </div>
            <div class="col"  data-aos="zoom-in">
                <img src="img/about/about info 1.png" alt="">
            </div>
            <div class="col">
                <img src="img/about/about info 2.jpg" alt="">
            </div>
            <div class="col">
                <h4>There are many activities in Our School</h4>
                <p>We have done many activities in last summer bootcamp like</p>
                <li>Paint and learn</li>
                <li>Balloon Olympics</li>
                <li>Gussing Game Activity</li>
                <li>Make our own shop</li>
                <li>Sing a song activity</li>
                <li><a href="activity.php">See more</a></li>
            </div>   
        </div>
    </div>
    <!-- our award  -->
    <h3 style="text-align: center;">Our Award</h3>
    <div class="our-award">
        <img src="img/about/wave1.png" alt="" style="width: 100%;" class="wave">
        <div class="container award-detail">
            <div data-aos="flip-left">
                <img src="img/about/award4.jpg" alt="">
            </div>
            <div data-aos="flip-right">
                <img src="img/about/award2.jpg" alt="">
            </div>
            <div data-aos="flip-left">
                <img src="img/about/award3.png" alt="">
            </div>
            <div data-aos="flip-right">
                <img src="img/about/award1.jpg" alt="">
            </div>
        </div>
        <img src="img/about/wave2.png" alt="" style="width: 100%;" class="wave">
    </div>
    <!-- Our teacher  -->
    <div class="container about-page">
        <h1 style="text-align: center;">Our Teacher</h1>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 our-teacher p-5">
            <div class="teacher-1">
                <div data-aos="zoom-in-right">
                    <img src="img/about/person3.jpg" alt="" style="width: 200px;">
                </div>
                <div data-aos="zoom-out-up">
                    <h5>Mr.Min Min Win</h5>
                    <small style="color:  rgb(0, 113, 188);">Algebra, Arithmetic, Geometry, Mensuration and more</small>
                    <p>Post Graduation in Applied Mathematics, Delhi University.Graduation in Mathematics Honors, Lady Shri Ram College, Delhi University.20+ years of experience in teaching Mathematics.</p>
                </div>
                <div data-aos="zoom-out-up">
                    <a href="#course.html">Course Details</a>
                </div>
            </div>
            <div class="teacher-1">
                <div data-aos="zoom-in-down">
                    <img src="img/about/person2.jpg" alt="" style="width: 200px;">
                </div>
                <div data-aos="zoom-out-up">
                    <h5>Mr.Aung Ko Ko Win</h5>
                    <small style="color:  rgb(0, 113, 188);">A course that's made for you to easily learn Physics!</small>
                    <p>a highly qualified science teacher in New York State. He has plenty of teaching experience having taught Environmental Science, Chemistry, Middle school Science, Robotics, and predominantly Physics.</p>
                </div>
                <div data-aos="zoom-out-up">
                    <a href="#course.html">Course Details</a>
                </div>
            </div>
            <div class="teacher-1">
                <div data-aos="zoom-in-left">
                    <img src="img/about/person1.jpg" alt="" style="width: 200px;">
                </div>
                <div data-aos="zoom-out-up">
                    <h5>Miss Nelson</h5>
                    <small style="color:  rgb(0, 113, 188);">Learn Well-Structured Burmese Language Program</small>
                    <p>native speakers of the Burmese language and have been specially selected to provide the most memorable experience for you.Language teachers are carefully selected to ensure that their values and characters reflect that of the school.</p>
                </div>
                <div data-aos="zoom-out-up">
                    <a href="#course.html">Course Details</a>
                </div>
            </div>
        </div>
        <div class="p-4 border-top login-signup-way" style="text-align: center;">
            <a href="signup.php">Join Now</a><span class="mx-2"><i class="fas fa-solid fa-chevron-right" aria-hidden="true"></i></span>
            <span>To access the infromation</span>
        </div>
    </div>

<?php include 'layout/footer.php'; ?>