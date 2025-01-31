<?php
require('include/db.php');
$query = "SELECT * FROM home, icon_control, about";
$run = mysqli_query($db, $query);
$user_data = mysqli_fetch_array($run);
?>

<!doctype html>
<html lang="en">

<head>
  <title><?= $user_data['title'] ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="description" content="">
  <meta name="keywords" content="html, css, javascript, jquery">
  <meta name="author" content="">

  <link rel="stylesheet" href="css/vendor/icomoon/style.css">
  <link rel="stylesheet" href="css/vendor/owl.carousel.min.css">
  <link rel="stylesheet" href="css/vendor/animate.min.css">
  <link rel="stylesheet" href="css/vendor/aos.css">
  <link rel="stylesheet" href="css/vendor/bootstrap.min.css">
  <link rel="stylesheet" href="css/vendor/jquery.fancybox.min.css">


  <!-- Theme Style -->
  <link rel="stylesheet" href="css/style.css">

</head>

<body data-spy="scroll" data-target=".site-nav-target" data-offset="200">

  <nav class="unslate_co--site-mobile-menu">
    <div class="close-wrap d-flex">
      <a href="#" class="d-flex ml-auto js-menu-toggle">
        <span class="close-label">Close</span>
        <div class="close-times">
          <span class="bar1"></span>
          <span class="bar2"></span>
        </div>
      </a>
    </div>
    <div class="site-mobile-inner"></div>
  </nav>


  <div class="unslate_co--site-wrap">

    <div class="unslate_co--site-inner">

      <div class="lines-wrap">
        <div class="lines-inner">
          <div class="lines"></div>
        </div>
      </div>
      <!-- END lines -->

      <nav class="unslate_co--site-nav site-nav-target">

        <div class="container">

          <div class="row align-items-center justify-content-between text-left">
            <div class="col-md-5 text-right">
              <ul class="site-nav-ul js-clone-nav text-left d-none d-lg-inline-block">
                <li class="has-children">
                  <a href="#home-section" class="nav-link">Home</a>
                  <ul class="dropdown">
                    <li>
                      <a href="index.html">Hero Image BG</a>
                    </li>
                    <li>
                      <a href="index-video.html">Video BG</a>
                    </li>
                    <li>
                      <a href="index-hero-slider.html">Hero Slider</a>
                    </li>
                    <li>
                      <a href="index-sidebar-menu.html">Sidebar Menu</a>
                    </li>
                    <li>
                      <a href="index-right-menu.html">Right Menu</a>
                    </li>
                  </ul>
                </li>
                <li><a href="#about-section" class="nav-link">About</a></li>
                <li><a href="#skills-section" class="nav-link">Blog</a></li>
              </ul>
            </div>
            <div class="site-logo pos-absolute">
              <a href="index.html" class="unslate_co--site-logo">Unfold<span>.</span></a>
            </div>
            <div class="col-md-5 text-right text-lg-left">
              <ul class="site-nav-ul js-clone-nav text-left d-none d-lg-inline-block">
                <li><a href="#contact-section" class="nav-link">Contact</a></li>
                <li><a href="#contact-section" class="nav-link">Desclaimer</a></li>
                <li><a href="#contact-section" class="nav-link">Privacy Policy</a></li>
              </ul>

              <ul class="site-nav-ul-none-onepage text-right d-inline-block d-lg-none">
                <li><a href="#" class="js-menu-toggle">Menu</a></li>
              </ul>

            </div>
          </div>
        </div>

      </nav>
      <!-- END nav -->

      <div class="cover-v1 jarallax" style="background-image: url('images/<?= $user_data['hero_image'] ?>');" id="home-section">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-md-7 mx-auto text-center">
              <h1 class="heading gsap-reveal-hero"><?= $user_data['title'] ?></h1>
              <h2 class="subheading gsap-reveal-hero"><?= $user_data['subtitle'] ?></h2>
            </div>

          </div>
        </div>
      </div>
      <!-- END .cover-v1 -->

      <div class="unslate_co--section" id="about-section">
        <div class="container">
          <div class="section-heading-wrap text-center mb-5">
            <h2 class="heading-h2 text-center divider"><span class="gsap-reveal"><?= $user_data['about_title'] ?></span></h2>
            <span class="gsap-reveal">
              <img src="images/divider.png" alt="divider" width="76">
            </span>
          </div>
          <div class="row mt-5 justify-content-between">
            <div class="col-lg-7 mb-5 mb-lg-0">
              <figure class="dotted-bg gsap-reveal-img ">
                <img src="images/<?= $user_data['profile_picture'] ?>" alt="Image" class="img-fluid">
              </figure>
            </div>
            <div class="col-lg-4 pr-lg-5">
              <h3 class="mb-4 heading-h3"><span class="gsap-reveal"><?= $user_data['about_subtitle'] ?></span></h3>
              <p class="lead gsap-reveal"><?= $user_data['about_description'] ?></p>
            </div>
          </div>
        </div>
      </div>

      <div class="unslate_co--section" id="journal-section">
        <div class="container">
          <div class="section-heading-wrap text-center mb-5">
            <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">Blog</span></h2>
            <span class="gsap-reveal"><img src="images/divider.png" alt="divider" width="76"></span>
          </div>


          <div class="row gutter-v4 align-items-stretch">
            <div class="col-sm-6 col-md-6 col-lg-8 blog-post-entry" data-aos="fade-up" data-aos-delay="0">

              <a href="blog-single.html" class="grid-item blog-item w-100 h-100">
                <div class="overlay">
                  <div class="portfolio-item-content">
                    <h3>A Mounteering Guide For Beginners</h3>
                    <p class="post-meta">By Joefrey <span class="small">&bullet;</span> 5 mins read</p>
                  </div>
                </div>
                <img src="images/post_1.jpg" class="lazyload" alt="Image" />
              </a>


            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 blog-post-entry" data-aos="fade-up" data-aos-delay="100">
              <a href="blog-single.html" class="grid-item blog-item w-100 h-100">
                <div class="overlay">
                  <div class="portfolio-item-content">
                    <h3>A Mounteering Guide For Beginners</h3>
                    <p class="post-meta">By Joefrey <span class="small">&bullet;</span> 5 mins read</p>
                  </div>
                </div>
                <img src="images/post_2.jpg" class="lazyload" alt="Image" />
              </a>
            </div>


            <div class="col-sm-6 col-md-6 col-lg-4 blog-post-entry" data-aos="fade-up" data-aos-delay="0">

              <a href="blog-single.html" class="grid-item blog-item w-100 h-100">
                <div class="overlay">
                  <div class="portfolio-item-content">
                    <h3>A Mounteering Guide For Beginners</h3>
                    <p class="post-meta">By Joefrey <span class="small">&bullet;</span> 5 mins read</p>
                  </div>
                </div>
                <img src="images/post_3.jpg" class="lazyload" alt="Image" />
              </a>


            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 blog-post-entry" data-aos="fade-up" data-aos-delay="100">
              <a href="blog-single.html" class="grid-item blog-item w-100 h-100">
                <div class="overlay">
                  <div class="portfolio-item-content">
                    <h3>A Mounteering Guide For Beginners</h3>
                    <p class="post-meta">By Joefrey <span class="small">&bullet;</span> 5 mins read</p>
                  </div>
                </div>
                <img src="images/post_4.jpg" class="lazyload" alt="Image" />
              </a>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-4 blog-post-entry" data-aos="fade-up" data-aos-delay="200">
              <a href="blog-single.html" class="grid-item blog-item w-100 h-100">
                <div class="overlay">
                  <div class="portfolio-item-content">
                    <h3>A Mounteering Guide For Beginners</h3>
                    <p class="post-meta">By Joefrey <span class="small">&bullet;</span> 5 mins read</p>
                  </div>
                </div>
                <img src="images/post_5.jpg" class="lazyload" alt="Image" />
              </a>
            </div>


          </div>

        </div>
      </div>
      <!-- END blog posts -->


      <div class="unslate_co--section" id="contact-section">
        <div class="container">
          <div class="section-heading-wrap text-center mb-5">
            <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">Post a Comment</span></h2>
            <span class="gsap-reveal"><img src="images/divider.png" alt="divider" width="76"></span>
          </div>


          <div class="row justify-content-between">

            <div class="col-md-6">
              <form method="post" class="form-outline-style-v1" id="contactForm">
                <div class="form-group row mb-0">

                  <div class="col-lg-6 form-group gsap-reveal">
                    <label for="name">Name</label>
                    <input name="name" type="text" class="form-control" id="name">
                  </div>
                  <div class="col-lg-12 form-group gsap-reveal">
                    <label for="message">Enter Comment</label>
                    <textarea name="message" id="message" cols="30" rows="7" class="form-control"></textarea>
                  </div>
                </div>
                <div class="form-group row gsap-reveal">
                  <div class="col-md-12 d-flex align-items-center">
                    <input type="submit" class="btn btn-outline-pill btn-custom-light mr-3" value="PUBLISH">
                    <span class="submitting"></span>
                  </div>
                </div>
              </form>
              <div id="form-message-warning" class="mt-4"></div>
              <div id="form-message-success">
                Your message was sent, thank you!
              </div>

            </div>

          </div>
        </div>
      </div>
    </div> <!-- END .unslate_co-site-inner -->

    <footer class="unslate_co--footer unslate_co--section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7">

            <div class="footer-site-logo"><a href="#">Unfold<span>.</span></a></div>

            <?php
            if ($user_data['show_social_icons']) {
            ?>
              <ul class="footer-site-social">
                <?php
                if ($user_data['linkedin'] != '') {
                ?>
                  <li><a href="<?= $user_data['linkedin'] ?>">LinkedIn</a></li>
                <?php
                }
                ?>
                <?php
                if ($user_data['twitter'] != '') {
                ?>
                  <li><a href="<?= $user_data['twitter'] ?>">Twitter</a></li>
                <?php
                }
                ?>
                <?php
                if ($user_data['facebook'] != '') {
                ?>
                  <li><a href="<?= $user_data['facebook'] ?>">Facebook</a></li>
                <?php
                }
                ?>
                <?php
                if ($user_data['youtube'] != '') {
                ?>
                  <li><a href="<?= $user_data['youtube'] ?>">YouTube</a></li>
                <?php
                }
                ?>
                <?php
                if ($user_data['email'] != '') {
                ?>
                  <li><a href="mailto:<?= $user_data['email'] ?>">Email</a></li>
                <?php
                }
                ?>
                <?php
                if ($user_data['dribble'] != '') {
                ?>
                  <li><a href="<?= $user_data['dribble'] ?>">Dribble</a></li>
                <?php
                }
                ?>
              </ul>
            <?php
            }
            ?>

          </div>
        </div>
      </div>
    </footer>


  </div>


  <!-- Loader -->
  <div id="unslate_co--overlayer"></div>
  <div class="site-loader-wrap">
    <div class="site-loader"></div>
  </div>

  <script src="js/scripts-dist.js"></script>
  <script src="js/main.js"></script>

</body>

</html>