<?php
include '../includes/connection.php';
if (isset($_POST['btnSave'])) {
    // $Aid = $_POST['Aid'];
    // $Sid[] = $_POST['Sid'];
    // $status[] = $_POST['status'];
    // $Sname[] = $_POST['Sname'];
    extract($_POST);
    $id = count($_POST['sid']);
    for ($i = 0; $i < $id; $i++) {

        $sql = "INSERT INTO att_records(a_id,sid,sname,status) 
    VALUES('$a_id[$i]','$sid[$i]','$sname[$i]','$status[$i]')";
        $q = mysqli_query($conn, $sql);
    }
    if ($q) {
        echo " <script>alert('Attendance registered Successfully');location='../attendanceRegister.php'</script>";
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
