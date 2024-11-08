<?php include 'includes/top.php';
include 'includes/sidebar.php'; ?>

<section id="main-content">
    <section class="wrapper main-wrapper row">

        <div class="col-md-12">
            <section class="box">
                <h2> <a href="viewStudent.php">View Students</a></h2>

                <div class="card">
                    <div class="card-header">
                        <h1>Register New Student</h1>
                    </div>
                    <div class="card-body">
                        <form method="post" action="backend/student.php">
                            <input type="text" class="form-control" placeholder="Student name" name="sname">
                            <input type="text" class="form-control" placeholder="Student ID" name="sId">
                            <select class="form-control" name="class" required>
                                <option selected disabled>--select class</option>
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

                            <button class="btn btn-primary" name="btnSave">Save </button>
                        </form>
                    </div>
                </div>


            </section>
        </div>

    </section>
</section>