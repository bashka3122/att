<?php include 'includes/top.php';
include 'includes/sidebar.php'; ?>

<section id="main-content">
    <section class="wrapper main-wrapper row">

        <div class="col-md-12">
            <section class="box">
                <h2> <a href="viewClass.php">View Classes</a></h2>

                <div class="card">
                    <div class="card-header">
                        <h1>Register New Class</h1>
                    </div>
                    <div class="card-body">
                        <form method="post" action="backend/class.php">
                            <input type="text" class="form-control" placeholder="Class name" name="cname">
                            <input type="text" class="form-control" placeholder="Class ID" name="cId">
                            <select class="form-control" name="Faculty" required>
                                <option selected disabled>--select Faculty</option>
                                <option>Computer Science</option>
                                <option>Health</option>
                                <option>Humanities</option>

                            </select>
                            <button class="btn btn-primary" name="btnSave">Save </button>
                        </form>
                    </div>
                </div>


            </section>
        </div>

    </section>
</section>


<script src="js/practice.js"></script>