<?php include 'includes/top.php';
include 'includes/sidebar.php'; ?>

<section id="main-content">
    <section class="wrapper main-wrapper row">

        <div class="col-md-12">
            <section class="box">
                <h2> <a href="viewStaff.php">View Stff</a></h2>

                <div class="card">
                    <div class="card-header">
                        <h1>Register New Staff</h1>
                    </div>
                    <div class="card-body">
                        <form method="post" action="backend/staff.php">
                            <input type="text" class="form-control" placeholder="Staff name" name="name">
                            <input type="email" class="form-control" placeholder="Email" name="email">
                            <select class="form-control" name="role" required>
                                <option selected disabled>--select Role</option>
                                <option value="staff">Normal Staff</option>
                                <option>Teacher</option>
                                <option>Admin</option>

                            </select>

                            <input type="password" class="form-control" placeholder="Password" name="pass">
                            <button class="btn btn-primary" name="btnSave">Save </button>
                        </form>
                    </div>
                </div>


            </section>
        </div>

    </section>
</section>


<script src="js/practice.js"></script>