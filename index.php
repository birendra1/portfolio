<?php
// Configuration
$db_host = 'localhost';
$db_username = 'root';
$db_password = 'Abhi@0978';
$db_name = 'warzones';

// Connect to MySQL
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  // Validate form data
  if (empty($name) || empty($email) || empty($phone) || empty($message)) {
    echo "Please fill out all fields.";
  } else {
    // Insert data into MySQL
    $sql = "INSERT INTO users (name, email, phone, message) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $name, $email, $phone, $message);
    $stmt->execute();

    // Check if data inserted successfully
    if ($stmt->affected_rows == 1) {
      echo "Data inserted successfully.";
    } else {
      echo "Error inserting data.";
    }

    $stmt->close();
  }
}

// Close MySQL connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Abhilash Tripathy, portfolio, abhi, full stack dev, personal portfolio lifecodes, portfolio design, portfolio website, personal portfolio" />
    <meta name="description" content="Welcome to abhi's Portfolio. Full-Stack Web Developer and Android App Developer" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Favicon -->
    <link id='favicon' rel="shortcut icon" href="./assets/images/favicon.png" type="image/x-png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <title>Portfolio | Abhilash Tripathy</title>
</head>
<body oncontextmenu="return false">

<!-- pre loader -->
<!-- <div class="loader-container">
  <img draggable="false" src="./assets/images/preloader.gif" alt="">
</div> -->

<!-- navbar starts -->
<header>
        <a href="/" class="logo">
          <img src="./assets/images/logo.webp" alt="" srcset="" style="width:35px;height:35px">
          <span style="line-height: 10px;">CloudZone</span>
        </a>
        

        <div id="menu" class="fas fa-bars"></div>
        <nav class="navbar">
            <ul>
            <li><a class="active" href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#education">Education</a></li>
            <li><a href="#work">Work</a></li>
            <li><a href="#experience">Experience</a></li>
            <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
</header>
<!-- navbar ends -->


<!-- hero section starts -->
<section class="home" id="home">
    <div id="particles-js"></div>

    <div class="content">
    <h2>Hi There,<br/> I'm Abhilash <span>Tripathy</span></h2>
    <p>i am into <span class="typing-text"></span></p>
    <a href="#about" class="btn"><span>About Me</span>
      <i class="fas fa-arrow-circle-down"></i>
    </a>
    <div class="socials">
        <ul class="social-icons">
          <li><a class="linkedin" aria-label="LinkedIn" href="https://www.linkedin.com/in/abhilash-tripathy-9b0089261/" target="_blank"><i class="fab fa-linkedin"></i></a></li> 
          <li><a class="github" aria-label="GitHub" href="https://github.com/AbhiWarzone" target="_blank"><i class="fab fa-github"></i></a></li>
        </ul>
      </div>
    </div>
</section>
<!-- hero section ends -->


<!-- about section starts -->
<section class="about" id="about">
    <h2 class="heading"><i class="fas fa-user-alt"></i> About <span>Me</span></h2>
    
    <div class="row">

    <div class="image">
        <img draggable="false" class="tilt" src="./assets/images/abhi.jpg" alt="">
    </div>
    <div class="content">
        <h3>I'm Abhilash</h3>
        <span  style="font-size: 18px;font-weight: bold;">Cloud Engineer</span>
        
        <p>IT experience with expertise in areas of DevOps, AWS operation, CI & CD, Application Support, Terraform, Linux System Administration and Networking.</p>
        <p>My certification from Amazon Web Services validates my in-depth knowledge of AWS services, architecture best practices, and proficiency in creating solutions tailored to meet business objectives.</p>
        <p style="font-size: 14px;">
          AWS Certified Solutions Architect - Associate
          <br>
          October 2022 to October 2025
          <br>
          Validation– SCDQHQT1TJVEQ5S1
          <br>
          Validate - <a href="https://aws.amazon.com/verification" style="text-decoration: none;"> https://aws.amazon.com/verification </a>
        </p>
        <div class="box-container">
            <!-- <div class="box">
              <p><span> age: </span> 20</p>
              <p><span> phone : </span> +91 XXX-XXX-XXXX</p>
            </div> -->
            <div class="box">
              <p><span> email : </span> 
                <a href="mailto:warzoneaws@gmail.com" class="" aria-label="Mail" target="_blank" style="text-decoration: none;">warzoneaws@gmail.com</a></p>
              <p><span> place : </span> Jajpur, India - 755011</p>
            </div>
        </div>
        
        <div class="resumebtn">
            <a href="https://drive.google.com/file/d/1LrWQbaDUlFPdR76S-ElvOOk6tWmZSNpH/view?usp=drive_link" target="_blank" class="btn"><span>Resume</span>
                <i class="fas fa-chevron-right"></i>
            </a>
        </div>

    </div>
    </div>
</section>
<!-- about section ends -->

<!-- skills section starts -->
<section class="skills" id="skills">

    <h2 class="heading"><i class="fas fa-laptop-code"></i> Skills & <span>Abilities</span></h2>

    <div class="container">
          <div class="row" id="skillsContainer">

            <div class="bar">
              <div class="info">
                <img src="./assets/images/icons8-amazon-aws-32.png" height="50" width="auto"/>
                <span >AWS</span>
              </div>
            </div>

            <div class="bar">
              <div class="info">
                <img src="./assets/images/icons8-linux-48.png" height="50" width="auto"/>
                <span>Linux Admin</span>
              </div>
            </div>
            <div class="bar">
              <div class="info">
                <img src="./assets/images/icons8-terraform-48.png" height="50" width="auto"/>
                <span>Terraform</span>
              </div>
            </div>

            <div class="bar">
              <div class="info">
                <img src="./assets/images/icons8-ansible-48.png" height="50" width="auto"/>
                <span>Ansible</span>
              </div>
            </div>

            <div class="bar">
              <div class="info">
                <img src="./assets/images/icons8-jenkins-48.png" height="50" width="auto"/>
                <span>Jenkins</span>
              </div>
            </div>

            <div class="bar">
              <div class="info">
                <img src="./assets/images/icons8-git-48.png" height="50" width="auto"/>
                <span>Git</span>
              </div>
            </div>

            <div class="bar">
              <div class="info">
                <img src="./assets/images/icons8-docker-48.png" height="50" width="auto"/>
                <span>Docker</span>
              </div>
            </div>

            <div class="bar">
              <div class="info">
                <img src="./assets/images/icons8-kubernetes-48.png" height="50" width="auto"/>
                <span>Kubernetes</span>
              </div>
            </div>

            <div class="bar">
              <div class="info">
                <img src="./assets/images/icons8-maven-ios-50.png" height="50" width="auto"/>
                <span>Maven</span>
              </div>
            </div>

            <div class="bar">
              <div class="info">
                <img src="./assets/images/icons8-bash-64.png" height="50" width="auto"/>
                <span>Shell Script</span>
              </div>
            </div>


            <div class="bar">
              <div class="info">
                <img src="./assets/images/icons8-grafana-48.png" height="50" width="auto"/>
                <span>Grafana</span>
              </div>
            </div>

            <div class="bar">
              <div class="info">
                <img src="./assets/images/icons8-postgre-sql-a-free-and-open-source-relational-database-management-system-24.png" height="50" width="auto"/>
                <span>Postgre Sql</span>
              </div>
            </div>

      </div>
</div>
</section>
<!-- skills section ends -->


<!-- education section starts -->
<section class="education" id="education">

  <h1 class="heading"><i class="fas fa-graduation-cap"></i> My <span>Education</span></h1>

    <p class="qoute">Education is not the learning of facts, but the training of the mind to think.</p>

    <div class="box-container">

    <div class="box">
        <div class="image">
        <img draggable="false" src="./assets/images/cet_edu.jpg" alt="">
        </div>
        <div class="content">
        <h3>Master Of Computer Application</h3>
        <p>CET (OUTR), Bhubaneswar</p>
        <h4>2017-2020 | Odisha</h4>
        </div>
    </div>



</div>
</section>
<!-- education section ends -->



<!-- work project section starts -->


 <section class="container-fluid section-6" id="work">
 <h2 class="heading"><i class="fas fa-laptop-code"></i> Projects </h2>

  <div class="row section-6-inner mx-auto mt-5">
      <div class="col-lg-6 sec-6-left  pe-0 pe-lg-4">
          <div class="section-6-heading">
              <span class="fw-bold">Apollo HealthCare
          </div>
          <div class="section-6-para">
            Worked in application support as well as in system administration in Providing 24*7 support to clients for application running on production servers as well as support to scheduled Backend jobs running on production both on-premises and on AWS cloud platform and have hands on with wide range of DevOps tools.
          </div>
          <div class="section-6-button">
              <a class="sec6-btn text-uppercase fw-bold" onclick="location.href='#'">View Project</a>
          </div>
      </div>
      <div class="col-lg-6 sec-6-right mt-lg-0 mt-5">
          <a href="#"><img src="./assets/images/Apollo.jpg" class="img-fluid sec6-image" alt=""></a>
      </div>
  </div>
  <!-- <div class="row section-6-inner mx-auto mt-5">
      <div class="col-lg-6 sec-6-left  pe-0 pe-lg-4">
          <div class="section-6-heading">
              <span class="fw-bold">Coffee Cup</span> Website
          </div>
          <div class="section-6-para">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse, saepe adipisci distinctio
              repellendus aliquam pariatur. Reiciendis quam nisi fugiat molestias asperiores. Eius, veritatis?
              Corrupti nesciunt aperiam voluptates placeat, libero itaque?
          </div>
          <div class="section-6-button">
              <a class="sec6-btn text-uppercase fw-bold" onclick="location.href='#'">View Project</a>
          </div>
      </div>
      <div class="col-lg-6 sec-6-right mt-lg-0 mt-5">
          <a href="#"><img src="./images/coffee-cup-website.png" class="img-fluid sec6-image" alt=""></a>
      </div>
  </div> -->
</section>



<!-- work project section ends -->
<hr>
<!-- experience section starts -->
<section class="experience" id="experience">

  <h2 class="heading"><i class="fas fa-briefcase"></i> Experience </h2>

  <div class="timeline">

    <!-- <div class="container right">
      <div class="content">
        <div class="tag">
          <h2>Self Employed</h2>
        </div>
        <div class="desc">
            <h3>Full Stack Developer</h3>
            <p>Oct 2021 - present</p>
        </div>
      </div>
    </div>

    <div class="container left">
      <div class="content">
        <div class="tag">
          <h2>Mapstreak Flyseas</h2>
        </div>
        <div class="desc">
            <h3>Web Developer | Internship</h3>
            <p>June 2021 - Dec 2021</p>
        </div>
      </div>
    </div>

    <div class="container right">
      <div class="content">
        <div class="tag">
          <h2>The Spark Foundation</h2>
        </div>
        <div class="desc">
            <h3>Website Developer | Internship</h3>
            <p>May 2021 - June 2021</p>
        </div>
      </div>
    </div>

    <div class="container left">
      <div class="content">
        <div class="tag">
          <h2>The Spark Foundation</h2>
        </div>
        <div class="desc">
            <h3>Mobile Application Developer | Internship</h3>
            <p>April 2021 - May 2021</p>
        </div>
      </div>
    </div>

    -->



    <div class="container left">
      <div class="content">
        <div class="tag">
          <h2>Taashee Linux Service</h2>
        </div>
        <div class="desc">
            <h3>Cloud Engineer</h3>
            <p>Nov 2021 - Present</p>
        </div>
      </div>
    </div>
  </div>

  <div class="container right">
    <div class="content">
      <div class="tag">
        <h2>Odisha Computer Application Center</h2>
      </div>
      <div class="desc">
          <h3>A Level</h3>
          <p>May 2016 - April 2017</p>
      </div>
    </div>
  </div>

  <!-- <div class="morebtn">
    <a href="/experience" class="btn"><span>View All</span>
      <i class="fas fa-arrow-right"></i>
  </a>
  </div> -->

</div>

</section>
<!-- experience section ends -->

<!-- contact section starts -->
<section class="contact" id="contact">
  
  <h2 class="heading"><i class="fas fa-headset"></i> Get in <span>Touch</span></h2>

  <div class="container">
    <div class="content">
      <div class="image-box">
        <img draggable="false" src="./assets/images/contact1.png" alt="">
      </div>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      
      <div class="form-group">
        <div class="field">
          <input type="text" name="name" placeholder="Name" required>
          <i class='fas fa-user'></i>
        </div>
        <div class="field">
          <input type="text" name="email" placeholder="Email" required>
          <i class='fas fa-envelope'></i>
        </div>
        <div class="field">
          <input type="text" name="phone" placeholder="Phone">
          <i class='fas fa-phone-alt'></i>
        </div>
        <div class="message">
        <textarea placeholder="Message" name="message" required></textarea>
        <i class="fas fa-comment-dots"></i>
        </div>
        </div>
      <div class="button-area">
        <button type="submit">
          Submit <i class="fa fa-paper-plane"></i></button>
      </div>
    </form>
  </div>
  </div>
</section>
<!-- contact section ends -->


<!-- footer section starts -->
<section class="footer">

  <div class="box-container">

      <div class="box">
          <h3>Abhi's Portfolio</h3>
          <p>Thank you for visiting my personal portfolio website. Connect with me over socials. <br/> <br/></p>
      </div>

      <div class="box">
          <h3>quick links</h3>
          <a href="#home"><i class="fas fa-chevron-circle-right"></i> home</a>
          <a href="#about"><i class="fas fa-chevron-circle-right"></i> about</a>
          <a href="#skills"><i class="fas fa-chevron-circle-right"></i> skills</a>
          <a href="#education"><i class="fas fa-chevron-circle-right"></i> education</a>
          <a href="#work"><i class="fas fa-chevron-circle-right"></i> work</a>
          <a href="#experience"><i class="fas fa-chevron-circle-right"></i> experience</a>
      </div>

      <div class="box">
          <h3>contact info</h3>
          <!-- <p> <i class="fas fa-phone"></i>+91 XXX-XXX-XXXX</p> -->
          <p> <i class="fas fa-envelope"></i>warzoneaws@gmail.com</p>
          <p> <i class="fas fa-map-marked-alt"></i>Jajpur, India-755011</p>
          <div class="share">

              <a href="https://www.linkedin.com/in/abhilash-tripathy-9b0089261/" class="fab fa-linkedin" aria-label="LinkedIn" target="_blank"></a>
              <a href="https://github.com/AbhiWarzone" class="fab fa-github" aria-label="GitHub" target="_blank"></a>
              <a href="mailto:warzoneaws@gmail.com" class="fas fa-envelope" aria-label="Mail" target="_blank"></a>
          </div>
      </div>
  </div>

</section>
<!-- footer section ends -->


<!-- scroll top btn -->
<a href="#home" aria-label="ScrollTop" class="fas fa-angle-up" id="scroll-top"></a>
<!-- scroll back to top -->


<!-- ==== ALL MAJOR JAVASCRIPT CDNS STARTS ==== -->
<!-- jquery cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- typed.js cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.5/typed.min.js" integrity="sha512-1KbKusm/hAtkX5FScVR5G36wodIMnVd/aP04af06iyQTkD17szAMGNmxfNH+tEuFp3Og/P5G32L1qEC47CZbUQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- particle.js links -->
<script src="./assets/js/particles.min.js"></script>
<script src="./assets/js/app.js"></script>

<!-- vanilla tilt.js links -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.0/vanilla-tilt.min.js" integrity="sha512-SttpKhJqONuBVxbRcuH0wezjuX+BoFoli0yPsnrAADcHsQMW8rkR84ItFHGIkPvhnlRnE2FaifDOUw+EltbuHg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- scroll reveal anim -->
<script src="https://unpkg.com/scrollreveal"></script>

<script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/emailjs-com@3/dist/email.min.js"
    ></script>

<!-- ==== ALL MAJOR JAVASCRIPT CDNS ENDS ==== -->

<script src="./assets/js/script.js"></script>

</body>
</html>



