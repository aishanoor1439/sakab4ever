<?php
require('../../../../include/db.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin Dashboard | Login</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="../../assets/css/style.css">
  <!-- End layout styles -->
  <!-- <link rel="shortcut icon" href="../../assets/images/favicon.png" /> -->
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="row w-100 m-0">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
          <div class="card col-lg-4 mx-auto">
            <div class="card-body px-5 py-5">
              <h3 class="card-title text-left mb-3">Login</h3>
              <form method="post">
                <div class="form-group">
                  <label>Email *</label>
                  <input type="email" class="form-control p_input" name="email" required>
                </div>
                <div class="form-group">
                  <label>Password *</label>
                  <input type="password" class="form-control p_input" name="password" required>
                </div>
                <div class="text-center">
                  <button type="submit" name="login" class="btn btn-primary btn-block enter-btn">Login</button>
                </div>
              </form>
              <?php
              if (isset($_POST['login'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];
              
                $query = "SELECT * FROM admin WHERE email = '$email' AND password = '$password'";
                $run = mysqli_query($db, $query);
              
                $data = mysqli_fetch_array($run);
                if ($data) {
                  $_SESSION['isUserLoggedIn'] = true;
                  $_SESSION['emailId'] = $_POST['email']; 
                  echo '<script>window.location.href = "../../index.php"</script>';
                } else {
                echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
                  echo '<script>
                    Swal.fire({
                      icon: "error",
                      text: "Incorrect Credentials!",
                    });
                  </script>';
                }
              }
              ?>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../assets/js/off-canvas.js"></script>
  <script src="../../assets/js/hoverable-collapse.js"></script>
  <script src="../../assets/js/misc.js"></script>
  <script src="../../assets/js/settings.js"></script>
  <script src="../../assets/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>