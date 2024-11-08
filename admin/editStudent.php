<?php include 'includes/top.php';
include 'includes/sidebar.php'; ?>

<section id="main-content">
    <section class="wrapper main-wrapper row">

        <div class="col-md-12">
            <section class="box">
                <h2> <a href="viewStudent.php">View Students</a></h2>

                <div class="card">
                    <div class="card-header">
                        <h1>Edit Student</h1>
                    </div>
                    <div class="card-body">
                        <?php
                        include 'includes/connection.php';
                        if (isset($_GET['sId'])) {
                            $sId = $_GET['sId'];

                            $sql = "SELECT * FROM students WHERE id='$sId'";
                            $q = mysqli_query($conn, $sql);
                            $r = mysqli_fetch_assoc($q);
                        }
                        ?>
                        <form method="post" action="backend/student.php">
                            <input type="hidden" class="form-control" name="id" value="<?php echo  $r['id']; ?>">
                            <input type="text" class="form-control" placeholder="Student  name" name="sname" value="<?php echo  $r['name']; ?>">
                            <input type="text" class="form-control" placeholder="Student ID" name="SID" value="<?php echo  $r['SID']; ?>">
                            <select class="form-control" name="class" required>
                                <option selected>
                                    <?php echo  $r['class']; ?>
                                </option>
                                <?php
                                include 'includes/connection.php';
                                $sql = "SELECT * FROM class";
                                $q = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($q)) {
                                ?>
                                    <option value="<?php echo $row['cId']; ?>"><?php echo $row['cname']; ?></option>
                                <?php
                                }
                                ?>

                            </select>
                            <button class="btn btn-info" name="btnUpdate">Update </button>
                        </form>
                    </div>
                </div>


            </section>
        </div>

    </section>
</section>