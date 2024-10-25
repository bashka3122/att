<?php include 'includes/top.php';
include 'includes/sidebar.php'; ?>

<section id="main-content">
    <section class="wrapper main-wrapper row">

        <div class="col-md-12">
            <section class="box">
                <h2> <a href="viewClass.php">View Classes</a></h2>

                <div class="card">
                    <div class="card-header">
                        <h1>Edit Class</h1>
                    </div>
                    <div class="card-body">
                        <?php
                        include 'includes/connection.php';
                        if (isset($_GET['cId'])) {
                            $cId = $_GET['cId'];
                            $sql = "SELECT * FROM class WHERE id='$cId'";
                            $q = mysqli_query($conn, $sql);
                            $r = mysqli_fetch_assoc($q);
                        }
                        ?>
                        <form method="post" action="backend/class.php">
                            <input type="text" class="form-control" placeholder="Class name" name="cname" value="<?php echo  $r['cname']; ?>">
                            <input type="text" class="form-control" placeholder="Class ID" name="cId" value="<?php echo  $r['cId']; ?>">
                            <select class="form-control" name="Faculty" required>
                                <option selected>
                                    <?php echo  $r['Faculty']; ?>
                                </option>
                                <option>Computer Science</option>
                                <option>Health</option>
                                <option>Humanities</option>

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