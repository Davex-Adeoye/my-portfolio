
<?php include 'database.php'?>

<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- --------- UNICONS ---------- -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    <!-- --------- CSS ---------- -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="icon" href="key.jpg" type="image/icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

<!-- 
    <!-- --------- FAVICON ---------- -->
    <!-- <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon"> -->

    <title>Alchemax || David</title>
</head>

<body>
   <div class="container">
    <!-- --------------- HEADER --------------- -->
      <nav id="header">
        <div class="nav-logo">
            <p class="nav-name">Alchemax ++</p>
            <span></span>
        </div>
        <div class="nav-menu" id="myNavMenu">
            <ul class="nav_menu_list">
                <li class="nav_list">
                    <a href="#home" class="nav-link active-link">Home</a>
                    <div class="circle"></div>
                </li>
                <li class="nav_list">
                    <a href="#about" class="nav-link">About</a>
                    <div class="circle"></div>
                </li>
                <li class="nav_list">
                    <a href="#projects" class="nav-link">Projects</a>
                    <div class="circle"></div>
                </li>
                <li class="nav_list">
                    <a href="#contact" class="nav-link">Contact</a>
                    <div class="circle"></div>
                </li>
            </ul>
        </div>
        <div class="nav-button">
            <button class="btn">My Skills <i class="uil uil-file-alt"></i></button>
        </div>
        <div class="nav-menu-btn">
            <i class="uil uil-arrow" onclick="myMenuFunction()"></i>
        </div>
      </nav>


    <!-- -------------- MAIN ---------------- -->
     <main class="wrapper">
       <!-- -------------- FEATURED BOX ---------------- -->
       <section class="featured-box" id="home">
          <div class="featured-text">
            <div class="featured-text-card">
                <span>David Adeoye</span>
            </div>
            <div class="featured-name">
                
                <p>I'm A <span class="typedText"></span></p>
            </div>
            <div class="featured-text-info">
                <p>Experienced Back-end developer with a passion for creating visually stunning
                   and user-friendly websites.
                </p>
            </div>
            <div class="featured-text-btn" >
                <button class="btn blue-btn" ><p><a href="https://wa.me/qr/WO2QCJFSG3NYF1">Hire me</a></p></button>
                <button class="btn">My Skills <i class="uil uil-file-alt"></i></button>
            </div>
            <div class="social_icons">

               <div class="icon"><a href="https://www.instagram.com/davi_s5109?igsh=YzljYTk1ODg3Zg==" style="color: black;"><i class="uil uil-instagram"></i></a></div>

                <div class="icon"><a href="https://www.facebook.com/profile.php?id=100088191777850   "  style="color: black;" ><i class="uil uil-facebook"></i></a></div>


                <div class="icon"><a href="https://wa.me/qr/WO2QCJFSG3NYF1"  style="color: black;"><i class="uil uil-whatsapp"></i></a></div>

                <div class="icon"><a href="https://x.com/WargsEvents?s=08"  style="color: black;"><i class="uil uil-twitter"></i></a></div>

                  <div class="icon"><a href="https://x.com/ObohAdeoye?t=TUQVn-PFBJykMkgyuPhYGQ&s=09"  style="color: black;"><i class="uil uil-github"></i></a></div>


            </div>
          </div>
          <div class="featured-image">
            <div class="image">
                <img src="assets/images/becca.jpg"alt="becca">
            </div>
          </div>
          <div class="scroll-icon-box">
            <a href="#about" class="scroll-btn">
                <i class="uil uil-mouse-alt"></i>
                <p>Scroll Down</p>
            </a>
          </div>

       </section>
       <!-- -------------- ABOUT BOX ---------------- -->
       <section class="section" id="about">
          <div class="top-header">
            <h1>About Me</h1>
          </div>
          <div class="row">
            <div class="col">
                <div class="about-info">
                    <h3>My introduction</h3>
                    <p>I am well-versed in HTML, CSS and JavaScript , and other cutting edge
                       frameworks and libraries,which allows me to implement interactive features.
                       Additionally, I have experirence working with content management systems (CMS) like
                       WordPress along side my expertise in back-end development, I am proficient in PHP, Python, and Java, enabling me to build robust server-side applications.
                    </p>
                    <div class="about-btn">
                        <button class="btn">My Skills<i class="uil uil-arrow"></i></button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="skills-box">
                    <div class="skills-header">
                        <h3>Frontend</h3>
                    </div>
                    <div class="skills-list">
                        <span>HTML</span>
                        <span>CSS</span>
                        <span>Bootstrap</span>
                        <span>JavaScript</span>
                        <!-- <span></span> -->
                        <span>React</span>
                        <!-- <span></span> -->
                    </div>
                </div>
                <div class="skills-box">
                    <div class="skills-header">
                        <h3>Backend</h3>
                    </div>
                    <div class="skills-list">
                        <span>PHP</span>
                        <span>JAVA</span>
                        <span>Python</span>
                        <span>C++</span>
                    </div>
                </div>
                <div class="skills-box">
                    <div class="skills-header">
                        <h3>Database</h3>
                    </div>
                    <div class="skills-list">
                        <span>MySQL</span>
                        <span>PostgreSQL</span>
                        <span>MongoDB</span>
                    </div>
                </div>
            </div>
          </div>
       </section>

       <!-- -------------- PROJECT BOX ---------------- -->

       <section class="section" id="projects">
          <div class="top-header">
              <h1>Projects</h1>
          </div>
          <div class="project-container">
            <div class="project-box">
                <i class="uil uil-briefcase-alt"></i>
                <h3>Completed</h3>
                <label>7+ Finished Projects</label>
            </div>
            <div class="project-box">
                <i class="uil uil-users-alt"></i>
                <h3>Clients</h3>
                <label>3+ Happy Clients</label>
            </div>
            <div class="project-box">
                <i class="uil uil-award"></i>
                <h3>Experience</h3>
                <label>2+ Years in the field</label>
            </div>
          </div>
       </section>

       <!-- -------------- CONTACT BOX ---------------- -->

       <section class="section" id="contact">

        <form action="save_message.php" method="POST">
          <div class="top-header">
            <h1>Get in touch</h1>
            <span>Do you have a project in your mind, contact me here</span>
          </div>
          <div class="row">
             <div class="col">
                <div class="contact-info">
                    <h2>Find Me <i class="uil uil-corner-right-down"></i></h2>
                    <p><i class="uil uil-envelope"></i>obohadeoye@gmail.com</p>
                    <p><i class="uil uil-phone"></i> Tel: +2349079514130</p>
                     <p><i class="uil uil-linkedin"></i>@adeoyeoboh</p>
                    <p><i class="uil uil-instagram"></i>@adeoyeoboh</p>
                    <p><i class="uil uil-github"></i>@Davex-Adeoye</p>
                    
                </div>
             </div>
             
             
             <div class="col">
                <div class="form-control">
                    <div class="form-inputs">
                        <input type="text"  name = "name" class="input-field" placeholder=" Your Name" required>
                        <input type="email"  name = "email" class="input-field" placeholder=" Your Email" required>
                    </div>
                    <div class="text-area">
                        <textarea placeholder="Message"  name = "message" required ></textarea >
                    </div>
                    <div class="form-button">
                        <button class="btn" type="submit">Send <i class="uil uil-message"></i></button>
                    </div>
                </div>
             </div>
          </div>
          </form>
       </section>

    


    <!-- --------------- FOOTER --------------- -->
    <footer>
        <div class="top-footer">
            <p>David adeoye.</p>
        </div>
        <div class="middle-footer">
            <ul class="footer-menu">
                <li class="footer_menu_list">
                    <a href="#home">Home</a>
                </li>
                <li class="footer_menu_list">
                    <a href="#about">About</a>
                </li>
                <li class="footer_menu_list">
                    <a href="#projects">Projects</a>
                </li>
                <li class="footer_menu_list">
                    <a href="#contact">Contact</a>
                </li>
            </ul>
        </div>
       <div class="footer-social-icons">
               <div class="icon"><a href="https://www.instagram.com/davi_s5109?igsh=YzljYTk1ODg3Zg==" style="color: black;"><i class="uil uil-instagram"></i></a></div>

                <div class="icon"><a href="https://www.facebook.com/profile.php?id=100088191777850   "  style="color: black;" ><i class="uil uil-facebook"></i></a></div>


                <div class="icon"><a href="https://wa.me/qr/WO2QCJFSG3NYF1"  style="color: black;"><i class="uil uil-whatsapp"></i></a></div>

                <div class="icon"><a href="https://x.com/WargsEvents?s=08"  style="color: black;"><i class="uil uil-twitter"></i></a></div>

                  <div class="icon"><a href="https://x.com/ObohAdeoye?t=TUQVn-PFBJykMkgyuPhYGQ&s=09"  style="color: black;"><i class="uil uil-github"></i></a></div>

        </div>
        <div class="bottom-footer">
            <p>Copyright &copy; -<a href="#home"  style= "color: black;" >David adeoye</a> - All rights reserved</p>
        </div>
    </footer>

    </div>




    <!-- ----- TYPING JS Link ----- -->
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

       <!-- ----- SCROLL REVEAL JS Link----- -->
    <script src="https://unpkg.com/scrollreveal"></script>
    

    <!-- ----- MAIN JS ----- -->
    <script src="assets/js/main3.js"></script>
    <script src="assets/js/main3.js?v=1.0.1"></script>
    <!-- <script>
  setTimeout(() => {
    let alerts = document.querySelectorAll("div[style]");
    alerts.forEach(el => el.style.display = "none");
  }, 4000); // hide after 4 seconds
</script> -->


   


</body>

</html>