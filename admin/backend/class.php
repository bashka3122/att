<?php
include '../includes/connection.php';
if (isset($_POST['btnSave'])) {
    $cname = $_POST['cname'];
    $cId = $_POST['cId'];
    $Faculty = $_POST['Faculty'];

    $sql = "INSERT INTO class(cname, cId, Faculty) VALUES('$cname','$cId','$Faculty')";
    $q = mysqli_query($conn, $sql);
    if ($q) {
        echo " <script>alert('class registered Successfully');location='../classRegister.php'</script>";
    } else {
        echo "Sql Error" . mysqli_error($conn);
    }
}
//btnUpdate
if (isset($_POST['btnUpdate'])) {
    $cname = $_POST['cname'];
    $cId = $_POST['cId'];
    $Faculty = $_POST['Faculty'];

    $sql = "UPDATE class SET cname='$cname', cId='$cId', Faculty='$Faculty' WHERE cId='$cId'";
    $q = mysqli_query($conn, $sql);
    if ($q) {
        echo " <script>alert('class Updated Successfully');location='../viewClass.php'</script>";
    } else {
        echo "Sql Error" . mysqli_error($conn);
    }
}

//delete
if (isset($_GET['cDel'])) {

    $cId = $_GET['cDel'];
    $sql = "DELETE FROM class WHERE id='$cId'";
    $q = mysqli_query($conn, $sql);
    if ($q) {
        echo " <script>alert('class Deleted Successfully');location='../viewClass.php'</script>";
    } else {
        echo "Sql Error" . mysqli_error($conn);
    }
}
