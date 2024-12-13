<?php
include '../includes/connection.php';
if (isset($_POST['btnSave'])) {
    $name = $_POST['name'];
    $class = $_POST['class'];
    $teacher = $_POST['teacher'];

    $sql = "INSERT INTO subjects(name, class, teacher) VALUES('$name','$class','$teacher')";
    $q = mysqli_query($conn, $sql);
    if ($q) {
        echo " <script>alert('Subject registered Successfully');location='../subjectRegister.php'</script>";
    } else {
        echo "Sql Error" . mysqli_error($conn);
    }
}
//btnUpdate
if (isset($_POST['btnUpdate'])) {
    $name = $_POST['name'];
    $class = $_POST['class'];
    $teacher = $_POST['teacher'];
    $id = $_POST['id'];
    $sql = "UPDATE subjects SET name='$name', class='$class', teacher='$teacher' WHERE id='$id'";
    $q = mysqli_query($conn, $sql);
    if ($q) {
        echo " <script>alert('subject Updated Successfully');location='../viewSubject.php'</script>";
    } else {
        echo "Sql Error" . mysqli_error($conn);
    }
}

//delete
if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "DELETE FROM subjects WHERE id='$id'";
    $d = mysqli_query($conn, $sql);
    if ($d) {
        echo " <script>alert('SUbject Deleted Successfully');location='../viewSubject.php'</script>";
    } else {
        echo "Sql Error" . mysqli_error($conn);
    }
}
