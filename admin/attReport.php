<?php include 'includes/top.php';
// include 'includes/sidebar.php'; 
?>

<section id="main-content">
    <section class="wrapper main-wrapper row">

        <div class="col-md-12">
            <section class="box">


                <div class="card">
                    <div class="card-header">

                        <img src="images/lplasma.png" style="margin-left:0px" />
                        <img src="images/xariijin.PNG" width="100%" />

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
                            <h2 style="margin-left:3px; font-size: 21px;">Class: <?php echo $class;  ?>
                                &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; Subject: <?php echo $r['subject'];  ?>
                                &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Academic Year: <?php echo $r['ac_year'];  ?>
                                &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Date: <?php echo $r['date'];  ?>

                            </h2>


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

                                        $view = "SELECT * from att_records WHERE a_id='$id'";
                                        $q = mysqli_query($conn, $view);
                                        $sno = 1;
                                        while ($r = mysqli_fetch_assoc($q)) {
                                        ?>
                                            <input type="hidden" class="form-control" name="a_id[]" value=" <?php echo $id; ?>" readonly>
                                            <tr>
                                                <td><?php echo $sno; ?></td>
                                                <td>
                                                    <?php echo $r['sname']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $r['sid']; ?>

                                                </td>

                                                <td>

                                                    <?php
                                                    $st = $r['status'];
                                                    if ($st == 1) {

                                                        echo "<p style='color:green;'>Present </p>";
                                                    } else {
                                                        echo "<strong style='color:red; font-size:21px;'>Absent </strong>";
                                                    }
                                                    ?>
                                                </td>

                                            <?php
                                            $sno++;
                                        }
                                            ?>
                                            </tr>
                                    </tbody>

                                </table>
                            <?php } ?>

                            </form>
                    </div>
                </div>


            </section>
        </div>

    </section>
</section>