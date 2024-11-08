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
    $se = "SELECT std.id FROM students std JOIN class cl ON cl.cId=std.class WHERE cl.cId='$cId' ";
    $q = mysqli_query($conn, $se);
    $result = mysqli_fetch_assoc($q);
    if ($result) {
        echo " <script>alert('class-kaan ardey ayaa dhigata');location='../viewClass.php'</script>";
    } else {
        $sql = "DELETE FROM class WHERE cId='$cId'";
        $d = mysqli_query($conn, $sql);
        if ($d) {
            echo " <script>alert('class Deleted Successfully');location='../viewClass.php'</script>";
        } else {
            echo "Sql Error" . mysqli_error($conn);
        }
    }
}
