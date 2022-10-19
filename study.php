<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Study</title>
    <link rel="stylesheet" href="css/study.css"/>
	<?php include("header.php");?>
  </head>
  <body>
<br>
<br>
<br>
<br>
    <section class="showcase">
      <div class="text">
        <p class="h-1">Study at the</p>
        <p class="h-2">TOP 10 UNIVERSITY</p>
        <p class="h-3">with the best student experience</p>
      </div>
      <video src="uni.mp4" muted loop autoplay></video>
    </section>

    <section class="courses">
      <div class="course-head">
        <h1 class="course-heading">Degrees</h1>
      </div>
      <div class="course-base">
        <a href="#">
          <div class="course-ug-box">
            <div class="course-ug-1">
              <img src="pp.jpg" class="ug-i" alt="undergraduate" />
            </div>
            <div class="course-ug-2">
              <h5 class="course-head-ug-2">Undergraduate</h5>
              <p class="course-para-ug-2">
                Our passion for teaching and research excellence combined with
                our leading student experience enables our students to make an
                outstanding contribution to the world.
              </p>
            </div>
          </div>
        </a>

        <a href="pg.php">
          <div class="course-pg-box">
            <div class="course-pg-1">
              <img src="pg.jpg" class="pg-i" alt="postgraduate" />
            </div>
            <div class="course-pg-2">
              <h5 class="course-head-pg-2">Postgraduate</h5>
              <p class="course-para-pg-2">
                Our master's degrees and Diplomas are designed to challenge
                conventional ways of thinking in order to answer some of the
                world's most pressing questions.
              </p>
            </div>
          </div>
        </a>
      </div>
    </section>

    <section class="web">
      <div class="web-head">
        <h1 class="web-heading">Courses</h1>
      </div>
      <div class="web-base">
        <a href="web.php">
          <div class="top-box">
            <div class="top-1">
              <h5 class="head-top-1">Web Development</h5>
              <p class="para-top-1">
                Our in-house web development team has years of experience
                providing a full lifecycle website development service from
                concepts through to site launch and beyond.
              </p>
            </div>
            <div class="top-2">
              <img src="design.jpg" class="sec" alt="" />
            </div>
          </div>
        </a>

        <a href="video.php">
          <div class="ug-box">
            <div class="ug-1">
              <h5 class="head-ug-1">Video Production</h5>
              <p class="para-ug-1">
                With significant experience in producing engaging video content
                within Higher Education and commercially, the video team within
                Creative and Print Services offer fully featured production
                solutions.
              </p>
            </div>
            <div class="ug-2">
              <img src="video.jpg" class="sp" alt="" />
            </div>
          </div>
        </a>
      </div>
    </section>
<br>
<br>
<br>
<br>
<br>
<?php include("footer.php");?>
  </body>
</html>
