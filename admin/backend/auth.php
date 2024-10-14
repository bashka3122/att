<?php
session_start();
if (isset($_POST['btnLogin'])) {
    include '../includes/connection.php';
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM staff WHERE email='$email' AND password= '$password'";
    $q = mysqli_query($conn, $sql);
    $result = mysqli_fetch_assoc($q);
    if ($result) {

        $_SESSION['userName'] = $result['name'];
        echo "<script>location='../';</script>";
    } else {
        echo "<script>alert('wrong credentails');</script>";
    }
}
