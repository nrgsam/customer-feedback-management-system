<?php
include("../includes/session.php");


if (
    (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) &&
        !empty($_POST['password']))
) {
    $username = $_POST['username'];
    $password = $_POST['password'];


    include("../includes/config.php");



    $qu3 = "SELECT * FROM `user` WHERE `username`='$username' AND `password`='$password' ";
    $result4 = mysqli_query($link, $qu3);
    $row = mysqli_fetch_array($result4);

    if ($row) {

        $_SESSION['state_login'] = true;
        echo ($_SESSION['state_login']);
        header("location:../index_admin.php");
    } else {

        $_SESSION["state_login"] = false;
        header("location:../login.php");
    }
} else {

    ?>

    <script>  alert(" برخی از فیلد ها مقداردهی نشده اند");   </script>

    <?php

}

?>