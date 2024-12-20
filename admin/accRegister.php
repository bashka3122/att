<?php include 'includes/top.php';
include 'includes/sidebar.php'; ?>

<section id="main-content">
    <section class="wrapper main-wrapper row">

        <div class="col-md-12">
            <section class="box">
                <h2> <a href="viewAcc.php">View Academic Years</a></h2>

                <div class="card">
                    <div class="card-header">
                        <h1>Register New Academic Year</h1>
                    </div>
                    <div class="card-body">
                        <form method="post" action="backend/ac.php">

                            <input type="text" class="form-control" placeholder="Academic Year" name="ac_year">


                            <button class="btn btn-primary" name="btnSave">Save </button>
                        </form>
                    </div>
                </div>


            </section>
        </div>

    </section>
</section>