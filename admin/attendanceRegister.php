<?php include 'includes/top.php';
include 'includes/sidebar.php'; ?>
<script>
    $(document).ready(function() {
        $("#selectedClass").change(function() {
            var c_id = $(this).val();
            if (c_id != '') {
                $.ajax({
                    type: "POST",
                    url: "backend/select.php",
                    data: "c_id=" + c_id,
                    success: function(option) {
                        $("#subjectList").html(option);
                    }
                });
            }

        });
    });
</script>
<section id="main-content">
    <section class="wrapper main-wrapper row">

        <div class="col-md-12">
            <section class="box">
                <h2> <a href="viewAttendance.php">View Attendances</a></h2>

                <div class="card">
                    <div class="card-header">
                        <h1>Register New Attendance</h1>
                    </div>
                    <div class="card-body">
                        <form method="post" action="backend/attendance.php">

                            <select class="form-control" id="selectedClass" name="class" required>
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

                            <select class="form-control" name="ac_year" required>
                                <option selected disabled>--select Academic Year</option>
                                <?php
                                include 'includes/connection.php';
                                $sql = "SELECT * FROM ac_year";
                                $q = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($q)) {
                                ?>
                                    <option value="<?php echo $row['ac_year']; ?>"><?php echo $row['ac_year']; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                            <div id="subjectList">

                            </div>
                            <button class="btn btn-primary" name="btnSave">Save </button>
                        </form>
                    </div>
                </div>


            </section>
        </div>

    </section>
</section>


<script src="js/practice.js"></script>