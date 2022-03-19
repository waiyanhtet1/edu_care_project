<?php $page='mm-course'; include 'layout/header.php'; ?>

<div class="about">
      <div class="about-content">
        <div class="about-heading">
          <small style="color:rgb(146, 139, 139);">Primary Course</small>
          <h4>Learn Well-Structured Burmese Language Program </h4>
        </div>
        <p style="padding-top: 20px;"><span style="color: rgb(247, 148, 29); font-weight: bold; font-size: 18px; margin-right: 10px;">Course Info</span>
         All courses and syllabus will be constantly reviewed and restructured to keep up with our ever changing environment.
        </p>
        <p style="padding-top: 20px;"><span style="color: rgb(247, 148, 29); font-weight: bold; font-size: 18px; margin-right: 10px;"> Teach By</span>
        Miss Nelson
        <img src="img/about/person1.jpg" alt="" style="width: 100px;height: 100px;border-radius: 50%; margin-left: 10px;">
        </p>
      </div>
      
        <div class="about-img">
          <img src="img/course/Burmese-Language.png" alt="">
        </div>

        <?php 
            if(isset($_SESSION["userid"])){
            echo "
            <div class='course-unlock' style='margin-left: -80px; padding: 0px 10px;'>
            <p><span style='color: rgb(247, 148, 29); font-weight: bold; font-size: 18px; margin-right: 10px;'> Benefit</span>
            When you start your Burmese language course, you will join an inspiring community of students and teachers from around the world. With plenty of opportunities to practice your conversational skills and interact in a variety of social contexts
            </p>
            <p><span style='color: rgb(247, 148, 29); font-weight: bold; font-size: 18px; margin-right: 10px;'> What’ll you Learn</span>
            <ul>
                <li>You will learn over 1000 vital Burmese words, expressions and idioms, and how to use them in real life.</li>
                <li>You will learn to think in Burmese and to speak Burmese fluently. (in Intermediate level)</li>
                <li>You will learn to read in Burmese and to spell Burmese words intuitively.</li>
            </ul>
            </p>
            <div class='video text-center' style='margin-bottom: 50px;'>
              <li><a href='https://www.youtube.com/watch?v=LmNEOzQoFtA&t=4s'>Part 1 - Learn Burmese: 30 Phrases for Beginners 💬🇲🇲</a></li>
              <li><a href='https://www.youtube.com/watch?v=59G9YKD4aSk'>Part 2 - 40 Burmese Phrases for Beginners</a></li>
              <li>Next part Comming soon........</li>
            </div>
          </div>
            ";
            }else {
                echo "<p class='mx-auto' style='font-size: 18px; margin: 100px 0px;'>You have to login in to see what include in this course. <a href='login.php' style='margin-left: 10px;'>Join now</a></p>";
            }
        
        ?>
        <!-- <div class='course-unlock' style='margin-left: -80px; padding: 0px 10px;'>
        <p><span style='color: rgb(247, 148, 29); font-weight: bold; font-size: 18px; margin-right: 10px;'> Benefit</span>
        When you start your Burmese language course, you will join an inspiring community of students and teachers from around the world. With plenty of opportunities to practice your conversational skills and interact in a variety of social contexts
        </p>
        <p><span style='color: rgb(247, 148, 29); font-weight: bold; font-size: 18px; margin-right: 10px;'> What’ll you Learn</span>
        <ul>
            <li>You will learn over 1000 vital Burmese words, expressions and idioms, and how to use them in real life.</li>
            <li>You will learn to think in Burmese and to speak Burmese fluently. (in Intermediate level)</li>
            <li>You will learn to read in Burmese and to spell Burmese words intuitively.</li>
        </ul>
        </p>
        <div class='video text-center' style='margin-bottom: 50px;'>
          <li><a href='https://www.youtube.com/watch?v=LmNEOzQoFtA&t=4s'>Part 1 - Learn Burmese: 30 Phrases for Beginners 💬🇲🇲</a></li>
          <li><a href='https://www.youtube.com/watch?v=59G9YKD4aSk'>Part 2 - 40 Burmese Phrases for Beginners</a></li>
          <li>Next part Comming soon........</li>
        </div>
      </div> -->
      
  </div>


<?php include 'layout/footer.php'; ?>