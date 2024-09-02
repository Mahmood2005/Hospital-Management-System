<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title>June Hospital</title>
  <meta name="title" content="June Hospital">
  <meta name="description" content="This is an hospital website made by Pollpilot">
  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./hand-holding-heart-solid.svg" type="image/svg+xml">
  

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;700&family=Rubik:wght@400;500;700&display=swap"
    rel="stylesheet">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-banner.png">
  <link rel="preload" as="image" href="./assets/images/hero-bg.png">
  <script src="https://kit.fontawesome.com/351bd8eff1.js" crossorigin="anonymous"></script>
</head>

<body id="top">

  <!-- 
    - #PRELOADER
  -->

  <div class="preloader" data-preloader>
    <div class="circle"></div>
  </div>





  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">
      <a href="./index.php" class="logo">
        <!-- <img src="./assets/images/logo.svg" width="136" height="46" alt=""> -->
        <h1>June Hospital</h1>
      </a>

      <nav class="navbar" data-navbar>

        <div class="navbar-top">

          <a href="#" class="logo">
            <!-- <img src="./assets/images/logo.svg" width="136" height="46" alt=""> -->
          </a>

          <button class="nav-close-btn" aria-label="clsoe menu" data-nav-toggler>
            <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
          </button>

        </div>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="./index.php" class="navbar-link title-md">Home</a>
          </li>

          <!-- <li class="navbar-item">
            <a href="./Forms/Signup.php" class="navbar-link title-md">E-portal</a>
          </li> -->

          <li class="dropdown"><a><span class="navbar-link title-md">E-portal</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="./Forms/Login.php">PATIENT</a></li>
              <li><a href="#">STAFF</a></li>
            </ul>
          </li>

          <li class="navbar-item">
            <a href="#services" class="navbar-link title-md">Services</a>
          </li>

          <li class="navbar-item">
            <a href="#aboutus" class="navbar-link title-md">About Us</a>
          </li>

          <li class="navbar-item">
            <a href="#footerbrand" class="navbar-link title-md">Contact</a>
          </li>

        </ul>

        <ul class="social-list">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-pinterest"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
          </li>

        </ul>

      </nav>

      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <a href="./Forms//Appointment_request_form.php" class="btn has-before title-md">Make Appointment</a>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero"  aria-label="home">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle has-before" data-reveal="left">Welcome To June Hospital</p>

            <h1 class="headline-lg hero-title" data-reveal="left">
              Find Nearest <br>
              Doctor.
            </h1>

            <div class="hero-card" data-reveal="left">

              <p class="title-lg card-text">
                Search doctors, Departments online. etc.
              </p>

              <div class="wrapper">

                <div class="input-wrapper title-lg">
                  <input type="text" name="location" placeholder="Departments or Doctors" class="input-field">

                  <ion-icon name="location"></ion-icon>
                </div>

                <!-- <button class="btn has-before">
                  <ion-icon name="search"></ion-icon>
                  <span class="span title-md">Find Now</span>
                </button> -->

              </div>

            </div>

          </div>

          <figure class="hero-banner" data-reveal="right">
            <img src=".//assets//images//June Hospital.jpeg" style="width: 590px; height: 517; border-radius: 30px;" loading="eager" alt="hero banner"
              class="w-100">
          </figure>

          <!-- <a href="#" class="btn2 has-before title-md" style="margin-top: 50px;">Make Appointment</a> -->

        </div>
      </section>





      <!-- 
        - #SERVICE
      -->

      <section class="service" aria-label="service">
        <div class="container">

          <ul class="service-list">

            <li>
              <div class="service-card" data-reveal="bottom">

                <div class="card-icon">
                  <img src=".//assets//images//Optometry.jpeg" width="71" height="71" loading="lazy" alt="icon">
                </div>

                <h3 class="headline-sm card-title">
                  <a href="#">Optometry</a>
                </h3>

                <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing
                </p>

                <button class="btn-circle" aria-label="read more about psychiatry">
                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </button>

              </div>
            </li>

            <li>
              <div class="service-card" data-reveal="bottom">

                <div class="card-icon">
                  <img src=".//assets//images//Realstethoscope.png" width="71" height="71" loading="lazy" alt="icon">
                  <!-- <i class="fa-solid fa-stethoscope" width="" height=""></i> -->
                </div>

                <h3 class="headline-sm card-title">
                  <a href="#">Gynecology</a>
                </h3>

                <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing
                </p>

                <button class="btn-circle" aria-label="read more about Gynecology">
                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </button>

              </div>
            </li>

            <li>
              <div class="service-card" data-reveal="bottom">

                <div class="card-icon">
                  <img src=".//assets//images//Hospitalcross.jpg" width="71" height="71" loading="lazy" alt="icon">
                </div>

                <h3 class="headline-sm card-title">
                  <a href="#">Pulmonology</a>
                </h3>

                <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing
                </p>

                <button class="btn-circle" aria-label="read more about Pulmonology">
                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </button>

              </div>
            </li>

            <li>
              <div class="service-card" data-reveal="bottom">

                <div class="card-icon">
                  <img src=".//assets//images//Heart3.png" width="71" height="71" loading="lazy" alt="icon">
                </div>

                <h3 class="headline-sm card-title">
                  <a href="#">Orthopedics</a>
                </h3>

                <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing
                </p>

                <button class="btn-circle" aria-label="read more about Orthopedics">
                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </button>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="section about" aria-labelledby="about-label" id="aboutus">
        <div class="container">

          <div class="about-content">

            <p class="section-subtitle title-lg has-after" id="about-label" data-reveal="left" style="color: white;">About Us</p>

            <h2 class="headline-md" data-reveal="left" style="color: white;">Experienced Workers</h2>

            <p class="section-text" data-reveal="left" style="color: white;">
              Aliquam faucibus, odio nec commodo aliquam, neque felis placerat dui, a porta ante lectus dapibus est.
              Aliquam
            </p>

            <ul class="tab-list" data-reveal="left">

              <li>
                <button class="tab-btn active">Vision</button>
              </li>

              <li>
                <button class="tab-btn">Mission</button>
              </li>

              <li>
                <button class="tab-btn">Strategy</button>
              </li>

            </ul>

            <p class="tab-text" data-reveal="left" style="color: white;">
              Aliquam faucibus, odio nec commodo aliquam, neque felis placerat dui, a porta ante lectus dapibus est.
              Aliquam a bibendum mi, sed condimentum
            </p>

            

          </div>

          <figure class="about-banner" data-reveal="right" >
            <img src=".//assets//images//June(9).jpg" width="554" height="678" loading="lazy" alt="about banner"
              class="w-100" style=" border-radius: 20px;">
          </figure>

        </div>
      </section>





      <!-- 
        - #LISTING
      -->

      <section class="section listing" aria-labelledby="listing-label" id="services">
        <div class="container">

          <ul class="grid-list">

            <li>
              <p class="section-subtitle title-lg" id="listing-label" data-reveal="left">Doctors Listing</p>

              <h2 class="headline-md" data-reveal="left">Browse by specialist</h2>
            </li>

            <li>
              <div class="listing-card" data-reveal="bottom">

                <div class="card-icon">
                  <img src=".//assets//images//icon-1.png" width="71" height="71" loading="lazy" alt="icon">
                </div>

                <div>
                  <h3 class="headline-sm card-title">Optometry</h3>

                  <p class="card-text">Porta velit</p>
                </div>

              </div>
            </li>

            <li>
              <div class="listing-card" data-reveal="bottom">

                <div class="card-icon">
                  <img src=".//assets//images//icon-2.png" width="71" height="71" loading="lazy" alt="icon">
                </div>

                <div>
                  <h3 class="headline-sm card-title">Gynecology</h3>

                  <p class="card-text">Mattis augue</p>
                </div>

              </div>
            </li>

            <li>
              <div class="listing-card" data-reveal="bottom">

                <div class="card-icon">
                  <img src=".//assets//images//icon-4.png" width="71" height="71" loading="lazy" alt="icon">
                </div>

                <div>
                  <h3 class="headline-sm card-title">Pulmonology</h3>

                  <p class="card-text">Mauris laoreet</p>
                </div>

              </div>
            </li>

            <li>
              <div class="listing-card" data-reveal="bottom">

                <div class="card-icon">
                  <img src=".//assets//images//icon-5.png" width="71" height="71" loading="lazy" alt="icon">
                </div>

                <div>
                  <h3 class="headline-sm card-title">Orthopedics</h3>

                  <p class="card-text">Convallis vulputate</p>
                </div>

              </div>
            </li>

            <li>
              <div class="listing-card" data-reveal="bottom">

                <div class="card-icon">
                  <img src=".//assets//images//icon-6.png" width="71" height="71" loading="lazy" alt="icon">
                </div>

                <div>
                  <h3 class="headline-sm card-title">Pediatrics</h3>

                  <p class="card-text">Posuere maecenas</p>
                </div>

              </div>
            </li>

            <li>
              <div class="listing-card" data-reveal="bottom">

                <div class="card-icon">
                  <img src=".//assets//images//June(9).jpg" width="71" height="71" loading="lazy" alt="icon" style="border-radius: 10px;">
                </div>

                <div>
                  <h3 class="headline-sm card-title">Dental</h3>

                  <p class="card-text">Nisi nullam</p>
                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #BLOG
      -->

      <section class="section blog" aria-labelledby="blog-label">
        <div class="container">

          <p class="section-subtitle title-lg text-center" id="blog-label" data-reveal="bottom">
            Our Partners
          </p>

          <h2 class="section-title headline-md text-center" data-reveal="bottom">Latest Partners</h2>

          <ul class="grid-list">

            <li>
              <div class="blog-card has-before has-after" data-reveal="bottom">

                <div class="meta-wrapper">

                  <div class="card-meta">
                    <ion-icon name="person-outline"></ion-icon>

                    <span class="span">By Admin</span>
                  </div>

                  <div class="card-meta">
                    <ion-icon name="folder-outline"></ion-icon>

                    <span class="span">Specialist</span>
                  </div>

                </div>

                <h3 class="headline-sm card-title">Could intermittent fasting reduce breast cancer</h3>

                <time class="title-sm date" datetime="2022-01-28">28 June, 2023</time>

                <p class="card-text">
                  Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                  labore et dolore magna aliquyam erat
                </p>

                <a href="#" class="btn-text title-lg">Read More</a>

              </div>
            </li>

            <li>
              <div class="blog-card has-before has-after" data-reveal="bottom">

                <div class="meta-wrapper">

                  <div class="card-meta">
                    <ion-icon name="person-outline"></ion-icon>

                    <span class="span">By Admin</span>
                  </div>

                  <div class="card-meta">
                    <ion-icon name="folder-outline"></ion-icon>

                    <span class="span">Specialist</span>
                  </div>

                </div>

                <h3 class="headline-sm card-title">Give children more autonomy during the pandemic</h3>

                <time class="title-sm date" datetime="2022-01-28">28 June, 2023</time>

                <p class="card-text">
                  Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                  labore et dolore magna aliquyam erat
                </p>

                <a href="#" class="btn-text title-lg">Read More</a>

              </div>
            </li>

            <li>
              <div class="blog-card has-before has-after" data-reveal="bottom">

                <div class="meta-wrapper">

                  <div class="card-meta">
                    <ion-icon name="person-outline"></ion-icon>

                    <span class="span">By Admin</span>
                  </div>

                  <div class="card-meta">
                    <ion-icon name="folder-outline"></ion-icon>

                    <span class="span">Specialist</span>
                  </div>

                </div>

                <h3 class="headline-sm card-title">How do binge eating and drinking impact the liver?</h3>

                <time class="title-sm date" datetime="2022-01-28">28 June, 2023</time>

                <p class="card-text">
                  Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                  labore et dolore magna aliquyam erat
                </p>

                <a href="#" class="btn-text title-lg">Read More</a>

              </div>
            </li>

          </ul>

        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer" id="footerbrand">
    <div class="container">

      <div class="section footer-top">

        <div class="footer-brand" data-reveal="bottom">

          <a href="#" class="logo">
            <!-- <img src="./assets/images/logo.svg" width="136" height="46" loading="lazy" alt="Doclab home"> -->
            <h1>June Hospital</h1>
          </a>

          <ul class="contact-list has-after">

            <li class="contact-item">

              <div class="item-icon">
                <ion-icon name="mail-open-outline"></ion-icon>
              </div>

              <div>
                <p>
                  Main Email : <a href="mailto:contact@website.com" class="contact-link">contact@website.com</a>
                </p>

                <p>
                  Inquiries : <a href="mailto:Info@mail.com" class="contact-link">Info@mail.com</a>
                </p>
              </div>

            </li>

            <li class="contact-item">

              <div class="item-icon">
                <ion-icon name="call-outline"></ion-icon>
              </div>

              <div>
                <p>
                  Office Telephone : <a href="tel:+234 805 143 3077" class="contact-link">+234 805 143 3077</a>
                </p>

                <p>
                  Mobile : <a href="tel:+234 805 143 3077" class="contact-link">+234 805 143 3077</a>
                </p>
              </div>

            </li>

          </ul>

        </div>

        <div class="footer-list" data-reveal="bottom">

          <p class="headline-sm footer-list-title">About Us</p>

          <p class="text">
            June Hospital Adex Bus Stop Iwo Road is an hospital located at 3,Dejo Dairo Street off Adex Bus Stop Monatan, Iwo Road, Ibadan, NG.
            The hospital is listed under dentist, hospital, optometrist category. It has received 9 reviews with an average rating of 3.6 stars.
          </p>

          <address class="address">
            <ion-icon name="location"></ion-icon>

            <span class="text">
              3,Dejo Dairo Street <br>
              off Adex Bus Stop Monatan, Iwo Road, Ibadan, NG
            </span>
          </address>

        </div>

        <ul class="footer-list" data-reveal="bottom">

          <li>
            <p class="headline-sm footer-list-title">Services</p>
          </li>

          <li>
            <a href="#" class="text footer-link">Ultrasound Scanning</a>
          </li>

          <li>
            <a href="#" class="text footer-link">Physioterapy</a>
          </li>

          <li>
            <a href="#" class="text footer-link">Laboratory Service</a>
          </li>

          <li>
            <a href="#" class="text footer-link">Gym & Fitness Center</a>
          </li>

          <li>
            <a href="#" class="text footer-link">Surgery/Dental</a>
          </li>

          <li>
            <a href="#" class="text footer-link">Ante/Post Natal Care</a>
          </li>

          <li>
            <a href="#" class="text footer-link">ECG & X-Ray</a>
          </li>

          <li>
            <a href="#" class="text footer-link">Child Welfare/Immunization</a>
          </li>

          <li>
            <a href="#" class="text footer-link">Ambulance Services</a>
          </li>

        </ul>

        <ul class="footer-list" data-reveal="bottom">

          <li>
            <p class="headline-sm footer-list-title">Useful Links</p>
          </li>

          <li>
            <a href="#" class="text footer-link">Conditions</a>
          </li>

          <li>
            <a href="#" class="text footer-link">Terms of Use</a>
          </li>

          <li>
            <a href="#" class="text footer-link">Our Services</a>
          </li>

          <li>
            <a href="#" class="text footer-link">Join as a Doctor</a>
          </li>

          <li>
            <a href="#" class="text footer-link">New Guests List</a>
          </li>

          <li>
            <a href="#" class="text footer-link">The Team List</a>
          </li>

        </ul>

        <div class="footer-list" data-reveal="bottom">

          <p class="headline-sm footer-list-title">Subscribe</p>

          <form action="" class="footer-form">
            <input type="email" name="email" placeholder="Email" class="input-field title-lg">

            <button type="submit" class="btn has-before title-md">Subscribe</button>
          </form>

          <p class="text">
            Get the latest updates via email. Any time you may unsubscribe
          </p>

        </div>

      </div>

      <div class="footer-bottom">

        <p class="text copyright">
          &copy; June Hospital 2023 | All Rights Reserved by Pollpilot
        </p>

        <ul class="social-list">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-google"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-pinterest"></ion-icon>
            </a>
          </li>

        </ul>

      </div>

    </div>
  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>