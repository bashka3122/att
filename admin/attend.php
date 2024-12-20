<?php include 'includes/top.php';
include 'includes/sidebar.php'; ?>

<section id="main-content">
    <section class="wrapper main-wrapper row">

        <div class="col-md-12">
            <section class="box">
                <h2> <a href="studentRegister.php">Register Students</a> </h2>

                <div class="card">
                    <div class="card-header">
                        <h1>Daily Attendances</h1>
                        logo
                    </div>
                    <div class="card-body">

                        <?php
                        if (isset($_GET['Aid'])) {
                            $id = $_GET['Aid'];
                            include 'includes/connection.php';
                            $s = "SELECT * from att_table  WHERE id='$id'";
                            $q1 = mysqli_query($conn, $s);
                            $r = mysqli_fetch_assoc($q1);
                            $class = $r['class'];
                        ?>
                            <?php echo $class;  ?>
                            <?php echo $r['subject'];  ?>
                            <form action="backend/attendance.php" method="post">


                                <table class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Student name</th>
                                            <th>Student iD</th>
                                            <th>Status</th>


                                        </tr>
                                    </thead>

                                    <tbody>

                                        <?php

                                        $view = "SELECT * from students WHERE class='$class'";
                                        $q = mysqli_query($conn, $view);
                                        $sno = 1;
                                        while ($r = mysqli_fetch_assoc($q)) {
                                        ?>
                                            <input type="hidden" class="form-control" name="a_id[]" value=" <?php echo $id; ?>" readonly>
                                            <tr>
                                                <td><?php echo $sno; ?></td>
                                                <td>
                                                    <input type="text" class="form-control" name="sname[]" value=" <?php echo $r['name']; ?>" readonly>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="sid[]" value=" <?php echo $r['SID']; ?>" readonly>

                                                </td>

                                                <td><select name="status[]" class="form-control">
                                                        <option value='1'>Present</option>
                                                        <option value='0'>Absent</option>
                                                    </select></td>

                                            <?php
                                            $sno++;
                                        }
                                            ?>
                                            </tr>
                                    </tbody>

                                </table>
                            <?php } ?>
                            <button class="btn btn-primary" name="btnSave">Save </button>
                            </form>
                    </div>
                </div>


            </section>
        </div>

    </section>
</section>
<script>
    new DataTable('#example', {
        lengthMenu: [
            [-1, 5, 10, 50, 100, ],
            [" dhamaan", "five", "ten", 50, 100],
        ]
    });
</script>

<script src="js/practice.js"></script>