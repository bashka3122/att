<?php include 'includes/top.php';
include 'includes/sidebar.php'; ?>

<section id="main-content">
    <section class="wrapper main-wrapper row">

        <div class="col-md-12">
            <section class="box">
                <h2> <a href="classRegister.php">Register Classes</a></h2>

                <div class="card">
                    <div class="card-header">
                        <h1>List of Classes</h1>
                    </div>
                    <div class="card-body">
                        <table class="table table_responsive">
                            <tr>
                                <th>#</th>
                                <th>C name</th>
                                <th>Cid</th>
                                <th>Faculty</th>
                                <th>Actions</th>
                            </tr>

                            <tbody>

                                <?php
                                include 'includes/connection.php';
                                $view = "SELECT * FROM class";
                                $q = mysqli_query($conn, $view);
                                while ($r = mysqli_fetch_assoc($q)) {
                                ?>
                                    <tr>
                                        <td><?php echo $r['id']; ?></td>
                                        <td><?php echo $r['cname']; ?></td>
                                        <td><?php echo $r['cId']; ?></td>
                                        <td><?php echo $r['Faculty']; ?></td>
                                        <td>
                                            <a href=" editClass.php?cId=<?php echo $r['id']; ?>"><button class="btn btn-secondary">Edit</button></a>
                                            <a href="backend/class.php?cDel=<?php echo $r['id']; ?>"><button class="btn btn-danger" onclick=" return confirm('are you sure');">Delete</button></a>
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


<script src="js/practice.js"></script>