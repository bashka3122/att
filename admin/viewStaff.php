<?php include 'includes/top.php';
include 'includes/sidebar.php'; ?>

<section id="main-content">
    <section class="wrapper main-wrapper row">

        <div class="col-md-12">
            <section class="box">
                <h2> <a href="staffRegister.php">Register Staff</a> </h2>

                <div class="card">
                    <div class="card-header">
                        <h1>List of Staff</h1>
                    </div>
                    <div class="card-body">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Full name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>

                                <?php
                                include 'includes/connection.php';
                                $view = "SELECT * FROM staff";
                                $q = mysqli_query($conn, $view);
                                while ($r = mysqli_fetch_assoc($q)) {
                                ?>
                                    <tr>
                                        <td><?php echo $r['id']; ?></td>
                                        <td><?php echo $r['name']; ?></td>
                                        <td><?php echo $r['email']; ?></td>
                                        <td><?php echo $r['role']; ?></td>
                                        <td>
                                            <a href=" editStaff.php?sId=<?php echo $r['id']; ?>"><button class="btn btn-info">Edit</button></a>
                                            <a href="backend/staff.php?sDel=<?php echo $r['id']; ?>"><button class="btn btn-danger" onclick=" return confirm('are you sure to delete this?');">Delete</button></a>
                                        </td>
                                    <?php
                                }
                                    ?>
                                    </tr>
                            </tbody>

                        </table>
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
            ["dhamaan", "five", "ten", 50, 100],
        ]
    });
</script>