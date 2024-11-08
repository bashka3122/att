<?php
include '../includes/connection.php';
if (isset($_POST['btnSave'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $pass = $_POST['pass'];



    $sql = "INSERT INTO staff(name, email, role,password) VALUES('$name','$email','$role','$password')";
    $q = mysqli_query($conn, $sql);
    if ($q) {
        echo " <script>alert('Staff registered Successfully');location='../staffRegister.php'</script>";
    } else {
        echo "Sql Error" . mysqli_error($conn);
    }
}
//btnUpdate
if (isset($_POST['btnUpdate'])) {
    $sId = $_POST['sId'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $pass = $_POST['pass'];
    $sql = "UPDATE staff SET name='$name', email='$email', role='$role' , password= '$pass' WHERE id='$sId'";
    $q = mysqli_query($conn, $sql);
    if ($q) {
        echo " <script>alert('Staff Updated Successfully');location='../viewStaff.php'</script>";
    } else {
        echo "Sql Error" . mysqli_error($conn);
    }
}

//delete
if (isset($_GET['sDel'])) {

    $sId = $_GET['sDel'];
    $sql = "DELETE FROM staff WHERE id='$sId'";
    $q = mysqli_query($conn, $sql);
    if ($q) {
        echo " <script>alert('class Deleted Successfully');location='../viewStaff.php'</script>";
    } else {
        echo "Sql Error" . mysqli_error($conn);
    }
}
