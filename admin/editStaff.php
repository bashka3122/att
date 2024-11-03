<?php include 'includes/top.php';
include 'includes/sidebar.php'; ?>

<section id="main-content">
    <section class="wrapper main-wrapper row">

        <div class="col-md-12">
            <section class="box">
                <h2> <a href="viewStaff.php">View Staff</a></h2>

                <div class="card">
                    <div class="card-header">
                        <h1>Edit Staff</h1>
                    </div>
                    <div class="card-body">
                        <?php
                        include 'includes/connection.php';
                        if (isset($_GET['sId'])) {
                            $sId = $_GET['sId'];
                            $sql = "SELECT * FROM staff WHERE id='$sId'";
                            $q = mysqli_query($conn, $sql);
                            $r = mysqli_fetch_assoc($q);
                        }
                        ?>
                        <form method="post" action="backend/staff.php">
                            <input type="hidden" class="form-control" name="sId" value="<?php echo  $r['id']; ?>">
                            <input type="text" class="form-control" placeholder="Full name" name="name" value="<?php echo  $r['name']; ?>">
                            <input type="text" class="form-control" placeholder="Email address" name="email" value="<?php echo  $r['email']; ?>">
                            <select class="form-control" name="role" required>
                                <option selected>
                                    <?php echo  $r['role']; ?>
                                </option>
                                <option value="staff">Normal Staff</option>
                                <option>Teacher</option>
                                <option>Admin</option>

                            </select>
                            <input type="password" class="form-control" placeholder="Password" name="pass" value="<?php echo  $r['password']; ?>">
                            <button class="btn btn-info" name="btnUpdate">Update </button>
                        </form>
                    </div>
                </div>


            </section>
        </div>

    </section>
</section>


<script src="js/practice.js"></script>