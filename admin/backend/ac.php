<?php
include '../includes/connection.php';
if (isset($_POST['btnSave'])) {
    $acyear = $_POST['ac_year'];


    $sql = "INSERT INTO ac_year(ac_year) VALUES('$acyear')";
    $q = mysqli_query($conn, $sql);
    if ($q) {
        echo " <script>alert('Student registered Successfully');location='../accREgister.php'</script>";
    } else {
        echo "Sql Error" . mysqli_error($conn);
    }
}
//btnUpdate
if (isset($_POST['btnUpdate'])) {
    $acyear = $_POST['acyear'];

    $sql = "UPDATE students SET name='$sname', SID='$SID', class='$class' WHERE id='$id'";
    $q = mysqli_query($conn, $sql);
    if ($q) {
        echo " <script>alert('Student Updated Successfully');location='../viewStudent.php'</script>";
    } else {
        echo "Sql Error" . mysqli_error($conn);
    }
}

//delete
if (isset($_GET['sDel'])) {

    $sId = $_GET['sDel'];
    $sql = "DELETE FROM students WHERE id='$sId'";
    $q = mysqli_query($conn, $sql);
    if ($q) {
        echo " <script>alert('Student Deleted Successfully');location='../viewStudent.php'</script>";
    } else {
        echo "Sql Error" . mysqli_error($conn);
    }
}
