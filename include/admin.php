<?php
require('db.php');

// Home-section updation
if (isset($_POST['update-home-section'])) {
    // print_r($_POST);
    $title = mysqli_real_escape_string($db, $_POST['title']);
    $subtitle = mysqli_real_escape_string($db, $_POST['subtitle']);
    $show_social_icons = isset($_POST['show_social_icons']) ? 1 : 0;
    $imagename = time() . $_FILES['hero_image']['name'];
    $imgtemp = $_FILES['hero_image']['tmp_name'];

    if ($imgtemp == '') {
        $q = "SELECT * FROM home WHERE 1";
        $r = mysqli_query($db, $q);
        $d = mysqli_fetch_array($r);
        $imagename = $d['hero_image'];
    }
    
    move_uploaded_file($imgtemp, "../images/$imagename");

    $query = "UPDATE home SET 
              title = '$title', 
              subtitle = '$subtitle', 
              show_social_icons = '$show_social_icons',
              hero_image = '$hero_image'
              WHERE id = 1";

    $run = mysqli_query($db, $query);

    if ($run) {
        echo "<script>alert('Update successful!'); window.location.href='../admin/template/index.php';</script>";
    }
}

// About-section updation
if (isset($_POST['update-about-section'])) {
    $title = mysqli_real_escape_string($db, $_POST['about_title']);
    $subtitle = mysqli_real_escape_string($db, $_POST['about_subtitle']);
    $description = mysqli_real_escape_string($db, $_POST['about_description']);
    $imagename = time() . $_FILES['profile_picture']['name'];
    $imgtemp = $_FILES['profile_picture']['tmp_name'];

    if ($imgtemp == '') {
        $q = "SELECT * FROM about WHERE 1";
        $r = mysqli_query($db, $q);
        $d = mysqli_fetch_array($r);
        $imagename = $d['profile_picture'];
    }
    
    move_uploaded_file($imgtemp, "../images/$imagename");

    $query = "UPDATE about SET ";
    $query .= "about_title='$title', ";
    $query .= "about_subtitle='$subtitle', ";
    $query .= "profile_picture='$imagename', ";
    $query .= "about_description='$description' WHERE id=1";

    $run = mysqli_query($db, $query);

    if ($run) {
        echo "<script>alert('Update successful!'); window.location.href='../admin/template/index.php';</script>";
    }
}
