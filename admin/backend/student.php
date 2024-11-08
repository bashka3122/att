<?php
include '../includes/connection.php';
if (isset($_POST['btnSave'])) {
    $sname = $_POST['sname'];
    $sId = $_POST['sId'];
    $class = $_POST['class'];

    $sql = "INSERT INTO students(name, SID, class) VALUES('$sname','$sId','$class')";
    $q = mysqli_query($conn, $sql);
    if ($q) {
        echo " <script>alert('Student registered Successfully');location='../studentRegister.php'</script>";
    } else {
        echo "Sql Error" . mysqli_error($conn);
    }
}
//btnUpdate
if (isset($_POST['btnUpdate'])) {
    $sname = $_POST['sname'];
    $SID = $_POST['SID'];
    $class = $_POST['class'];
    $id = $_POST['id'];
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
