<?php
include '../includes/connection.php';
//Attendance Table Save
if (isset($_POST['btnSave'])) {
    $class = $_POST['class'];
    $subject = $_POST['subject'];

    $ac_year = $_POST['ac_year'];

    $sql = "INSERT INTO att_table(class,subject,ac_year) 
    VALUES('$class','$subject','$ac_year')";
    $q = mysqli_query($conn, $sql);
    if ($q) {
        echo " <script>alert('Attendance registered Successfully');location='../attendanceRegister.php'</script>";
    } else {
        echo "Sql Error" . mysqli_error($conn);
    }
}
//btnUpdate Attendance Table
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

//Attendance Records Save and Update
if (isset($_POST['btnAtt'])) {

    extract($_POST);
    $aid = $_POST['a_id'][0];
    $sqlcheck = "SELECT a_id FROM att_records WHERE a_id='$aid' ";
    $qcheck = mysqli_query($conn, $sqlcheck);
    $r = mysqli_fetch_assoc($qcheck);
    if ($r) {
        $del = "DELETE FROM att_records WHERE a_id='$aid'";
        $qdel = mysqli_query($conn, $del);

        $id = count($_POST['sid']);
        for ($i = 0; $i < $id; $i++) {

            $sql = "INSERT INTO att_records(a_id,sid,sname,status) 
    VALUES('$a_id[$i]','$sid[$i]','$sname[$i]','$status[$i]')";
            $q = mysqli_query($conn, $sql);
        }
        if ($q) {
            echo " <script>alert('Attendance Updated Successfully');location='../attendanceRegister.php'</script>";
        } else {
            echo "Sql Error" . mysqli_error($conn);
        }
    } else {

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
