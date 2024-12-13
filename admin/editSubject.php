<?php include 'includes/top.php';
include 'includes/sidebar.php'; ?>

<section id="main-content">
    <section class="wrapper main-wrapper row">

        <div class="col-md-12">
            <section class="box">
                <h2> <a href="viewSubject.php">View Subjects</a></h2>

                <div class="card">
                    <div class="card-header">
                        <h1>Edit Subject</h1>
                    </div>
                    <div class="card-body">
                        <?php
                        include 'includes/connection.php';
                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];
                            $sql = "SELECT * FROM subjects WHERE id='$id'";
                            $q = mysqli_query($conn, $sql);
                            $r = mysqli_fetch_assoc($q);
                        }
                        ?>
                        <form method="post" action="backend/subject.php">
                            <input type="text" class="form-control" placeholder="subject name" name="name" value="<?php echo  $r['name']; ?>">
                            <input type="hidden" class="form-control" placeholder="ID" name="id" value="<?php echo  $r['id']; ?>">
                            <select class="form-control" name="class" required>
                                <!-- <option><?php echo $r['class']   ?></option> -->
                                <option selected disabled>--select class</option>
                                <?php
                                include 'includes/connection.php';
                                $sql2 = "SELECT * FROM class";
                                $q2 = mysqli_query($conn, $sql2);
                                while ($row = mysqli_fetch_assoc($q2)) {
                                ?>
                                    <option value="<?php echo $row['cId']; ?>"><?php echo $row['cname']; ?></option>
                                <?php
                                }
                                ?>

                            </select>
                            <select class="form-control" name="teacher" required>
                                <option selected disabled>--select Teacher</option>
                                <?php
                                include 'includes/connection.php';
                                $sql1 = "SELECT * FROM staff";
                                $q1 = mysqli_query($conn, $sql1);
                                while ($row = mysqli_fetch_assoc($q1)) {
                                ?>
                                    <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
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


<script src="js/practice.js"></script>