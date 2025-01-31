<?php
require('../../include/db.php');
if (!isset($_SESSION['isUserLoggedIn'])) {
  echo '<script>window.location.href = "pages/samples/login.php"</script>';
}
$query = "SELECT * FROM home, icon_control, about";
$run = mysqli_query($db, $query);
$user_data = mysqli_fetch_array($run);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin | Dashboard</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- End layout styles -->
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="index.html"><img src="assets/images/logo.svg" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
      </div>
      <ul class="nav">
        <li class="nav-item profile">
          <div class="profile-desc">
            <div class="profile-pic">
              <div class="count-indicator">
                <img class="img-xs rounded-circle " src="assets/images/faces/face15.jpg" alt="">
              </div>
              <div class="profile-name">
                <h5 class="mb-0 font-weight-normal">Muhammad Faheem</h5>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item nav-category">
          <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="index.html">
            <span class="menu-icon">
              <i class="mdi mdi-speedometer"></i>
            </span>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>
      </ul>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <ul class="navbar-nav w-100">
            <li class="nav-item w-100">
              <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                <input type="text" class="form-control" placeholder="Search blogs">
              </form>
            </li>
          </ul>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown d-none d-lg-block">
              <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-toggle="dropdown" aria-expanded="false" href="#">+ Create New Blog</a>
            </li>
            <li class="nav-item dropdown border-left">
              <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-email"></i>
                <span class="count bg-success"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <h6 class="p-3 mb-0">Messages</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face4.jpg" alt="image" class="rounded-circle profile-pic">
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1">Mark send you a message</p>
                    <p class="text-muted mb-0"> 1 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face2.jpg" alt="image" class="rounded-circle profile-pic">
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1">Cregh send you a message</p>
                    <p class="text-muted mb-0"> 15 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face3.jpg" alt="image" class="rounded-circle profile-pic">
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1">Profile picture updated</p>
                    <p class="text-muted mb-0"> 18 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <p class="p-3 mb-0 text-center">4 new messages</p>
              </div>
            </li>
            <li class="nav-item dropdown border-left">
              <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                <i class="mdi mdi-bell"></i>
                <span class="count bg-danger"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <h6 class="p-3 mb-0">Notifications</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-calendar text-success"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject mb-1">Event today</p>
                    <p class="text-muted ellipsis mb-0"> Just a reminder that you have an event today </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-link-variant text-warning"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject mb-1">Launch Admin</p>
                    <p class="text-muted ellipsis mb-0"> New admin wow! </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                <div class="navbar-profile">
                  <img class="img-xs rounded-circle" src="assets/images/faces/face15.jpg" alt="">
                  <p class="mb-0 d-none d-sm-block navbar-profile-name">Muhammad Faheem</p>
                  <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                <h6 class="p-3 mb-0">Profile</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-success"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject mb-1">Settings</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-logout text-danger"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject mb-1" onclick="logout()">Log out</p>
                    <script>
                      function logout() {
                        window.location.href = "logout.php";
                      }
                    </script>

                  </div>
                </a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-format-line-spacing"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <!-- main-panel -->
      <div class="main-panel">
        <div class="content-wrapper">
          <!-- home-section-settings -->
          <div class="card-body">
            <h4 class="card-title">Home Page Settings</h4>
            <form class="forms-sample" action="../../include/admin.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="exampleInputUsername1">Headline</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username" value="<?= $user_data['title'] ?>" name="title">
              </div>
              <div class="form-group">
                <label for="exampleInputUsername1">Subtitle</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username" value="<?= $user_data['subtitle'] ?>" name="subtitle">
              </div>
              <div class="form-group">
                <label>Banner</label>
                <input type="file" id="upload-file" class="file-upload-default form-control" name="hero_image" style="display: none;">
                <div class="input-group col-xs-12">
                  <input type="text" id="upload-file-info" class="form-control file-upload-info" placeholder="<?= $user_data['hero_image'] ?>" readonly>
                  <span class="input-group-append">
                    <button class="file-upload-browse btn btn-outline-primary" type="button" onclick="document.getElementById('upload-file').click();"><i class="mdi mdi-upload btn-icon-prepend"></i>Upload</button>
                  </span>
                </div>
              </div>
              <!-- upload button functionality -->
              <script>
                $(document).ready(function() {
                  $('#upload-file').change(function() {
                    var FileName = $(this).val().split('\\').pop();
                    $('#upload-file-info').val(FileName);
                  });
                });
              </script>
              <div class="form-group form-check form-check-flat form-check-success">
                <label class="form-check-label">
                  <input
                    type="checkbox"
                    class="form-check-input"
                    name="show_social_icons"
                    id="show_social_icons"
                    <?php if ($user_data['show_social_icons'] != 0) echo 'checked'; ?>>
                  Social Icons <i class="input-helper"></i>
                </label>
              </div>
              <!-- social-icons-setting -->
              <form class="forms-sample" action="../../include/admin.php" method="post">
                <div class="row" id="social_icons" style="display: none;">
                  <div class="col-md-6 grid-margin stretch-card mt-3">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Networking and Communication</h4>
                        <div class="template-demo">
                          <!-- Form groups for social icons -->
                          <!-- Dribble -->
                          <div class="form-group">
                            <label>Dribble</label>
                            <div class="input-group col-xs-12">
                              <span class="input-group-prepend">
                                <button type="button" class="btn btn-social-icon btn-outline-dribbble" for="custom-switch-1" name="dribble"><i class="mdi mdi-dribbble"></i></button>
                              </span>
                              <input type="text" id="dribble-link" class="form-control" placeholder="<?= $user_data['dribble'] ?>" name="dribble">
                            </div>
                          </div>
                          <!-- Email -->
                          <div class="form-group">
                            <label>Email</label>
                            <div class="input-group col-xs-12">
                              <input type="text" id="email" class="form-control" placeholder="<?= $user_data['email'] ?>">
                              <span class="input-group-append">
                                <button type="button" class="btn btn-social-icon btn-outline-success" for="custom-switch-2" name="email" name="email">
                                  <i class="mdi mdi-email-open"></i>
                                </button>
                              </span>
                            </div>
                          </div>
                          <!-- LinkedIn -->
                          <div class="form-group">
                            <label>LinkedIn</label>
                            <div class="input-group col-xs-12">
                              <span class="input-group-prepend">
                                <button type="button" class="btn btn-social-icon btn-outline-linkedin" for="custom-switch-5" name="linkedin"><i class="mdi mdi-linkedin"></i></button>
                              </span>
                              <input type="text" id="linkedin-link" class="form-control" placeholder="<?= $user_data['linkedin'] ?>" name="linkedin">
                            </div>
                          </div>
                          <button type="submit" class="btn btn-warning btn-icon-text" name="update-social-icons" value="update">
                            <i class="mdi mdi-reload btn-icon-prepend" name="update-social-icons"></i> Update </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 grid-margin stretch-card mt-3">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Engagement and Branding</h4>
                        <div class="template-demo">
                          <!-- Form groups for social icons -->
                          <!-- Facebook -->
                          <div class="form-group">
                            <label>Facebook</label>
                            <div class="input-group col-xs-12">
                              <span class="input-group-prepend">
                                <button type="button" class="btn btn-social-icon btn-outline-facebook" for="custom-switch-3" name="facebook"><i class="mdi mdi-facebook"></i></button>
                              </span>
                              <input type="text" id="facebook-link" class="form-control" placeholder="<?= $user_data['facebook'] ?>" name="facebook">
                            </div>
                          </div>
                          <!-- Twitter -->
                          <div class="form-group">
                            <label>Twitter</label>
                            <div class="input-group col-xs-12">
                              <input type="text" id="twitter-link" class="form-control" placeholder="<?= $user_data['twitter'] ?>" name="twitter">
                              <span class="input-group-append">
                                <button type="button" class="btn btn-social-icon btn-outline-twitter" for="custom-switch-6" name="twitter">
                                  <i class="mdi mdi-twitter"></i>
                                </button>
                              </span>
                            </div>
                          </div>
                          <!-- Youtube -->
                          <div class="form-group">
                            <label>Youtube</label>
                            <div class="input-group col-xs-12">
                              <span class="input-group-prepend">
                                <button type="button" class="btn btn-social-icon btn-outline-youtube" for="custom-switch-7" name="youtube"><i class="mdi mdi-youtube"></i></button>
                              </span>
                              <input type="text" id="youtube-link" class="form-control" placeholder="<?= $user_data['youtube'] ?>" name="youtube">
                            </div>
                          </div>
                          <button type="submit" class="btn btn-warning btn-icon-text" name="update-social-icons" value="update">
                            <i class="mdi mdi-reload btn-icon-prepend" name="update-social-icons"></i> Update </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <script>
                  document.getElementById('show_social_icons').addEventListener('change', function() {
                    var socialIconsDiv = document.getElementById('social_icons');
                    if (this.checked) {
                      socialIconsDiv.style.display = 'flex';
                    } else {
                      socialIconsDiv.style.display = 'none';
                    }
                  });

                  // Initialize the visibility based on the checkbox state
                  document.addEventListener('DOMContentLoaded', function() {
                    var socialIconsDiv = document.getElementById('social_icons');
                    var checkbox = document.getElementById('show_social_icons');
                    socialIconsDiv.style.display = checkbox.checked ? 'flex' : 'none';
                  });
                </script>

              </form>
              <button type="submit" class="btn btn-primary btn-icon-text" name="update-home-section">
                <i class="mdi mdi-file-check btn-icon-prepend"></i> Submit
              </button>
            </form>
          </div>
          <!-- about-section-settings -->
          <div class="card-body">
            <h4 class="card-title">About Page Settings</h4>
            <center><img src="../../images/<?= $user_data['profile_picture'] ?>" class="col-2 mb-3" alt="Profile Picture"></center>
            <form class="forms-sample" action="../../include/admin.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="aboutTitle">Headline</label>
                <input
                  type="text"
                  class="form-control"
                  id="aboutTitle"
                  placeholder="Enter headline"
                  value="<?= $user_data['about_title'] ?>"
                  name="about_title"
                  required>
              </div>
              <div class="form-group">
                <label for="aboutSubtitle">Subtitle</label>
                <input
                  type="text"
                  class="form-control"
                  id="aboutSubtitle"
                  placeholder="Enter subtitle"
                  value="<?= $user_data['about_subtitle'] ?>"
                  name="about_subtitle"
                  required>
              </div>
              <div class="form-group">
                <label for="aboutDescription">Description</label>
                <textarea
                  class="form-control"
                  id="aboutDescription"
                  rows="4"
                  spellcheck="false"
                  name="about_description"
                  required><?= $user_data['about_description'] ?></textarea>
              </div>
              <div class="form-group">
                <label>Profile Picture</label>
                <input type="file" id="file-upload" class="file-upload-default form-control" name="profile_picture" style="display: none;">
                <div class="input-group col-xs-12">
                  <input type="text" id="file-upload-info" class="form-control file-upload-info" placeholder="<?= $user_data['profile_picture'] ?>" readonly>
                  <span class="input-group-append">
                    <button class="file-upload-browse btn btn-outline-primary" type="button" onclick="document.getElementById('file-upload').click();"><i class="mdi mdi-upload btn-icon-prepend"></i>Upload</button>
                  </span>
                </div>
              </div>
              <!-- upload button functionality -->
              <script>
                $(document).ready(function() {
                  $('#file-upload').change(function() {
                    var fileName = $(this).val().split('\\').pop();
                    $('#file-upload-info').val(fileName);
                  });
                });
              </script>
              <button
                type="submit"
                class="btn btn-primary btn-icon-text"
                name="update-about-section">
                <i class="mdi mdi-file-check btn-icon-prepend"></i> Submit
              </button>
            </form>
          </div>


          </form>
        </div>
      </div>
      <!-- content-wrapper ends -->
      <!-- partial -->
    </div>
    <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="assets/vendors/chart.js/Chart.min.js"></script>
  <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
  <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
  <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="assets/js/off-canvas.js"></script>
  <script src="assets/js/hoverable-collapse.js"></script>
  <script src="assets/js/misc.js"></script>
  <script src="assets/js/settings.js"></script>
  <script src="assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <script src="assets/js/dashboard.js"></script>
  <!-- End custom js for this page -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>