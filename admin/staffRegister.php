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
                            <input type="text" class="form-control" placeholder="Staff name" name="name" required>
                            <input type="email" class="form-control" placeholder="Email" name="email" required>
                            <select class="form-control" name="role" required>
                                <option value="" selected disabled>--select Role</option>
                                <option value="staff">Normal Staff</option>
                                <option>Teacher</option>
                                <option>Admin</option>

                            </select>

                            <input type="password" id="pass" class="form-control" placeholder="Password" minlength="6" maxlength="8" name="pass">
                            <input type="password" onkeydown="p_Confirm()" id="pConfirm" class="form-control" placeholder="Password Confirm" minlength="6" maxlength="8" name="pass" required>
                            <p id="msg"></p>
                            <button class="btn btn-primary" id="btnSave" name="btnSave">Save </button>
                        </form>
                    </div>
                </div>


            </section>
        </div>

    </section>
</section>

<script>
    function p_Confirm() {
        let pass = document.getElementById("pass").value;
        let pConfirm = document.getElementById("pConfirm").value;

        if (pass != pConfirm) {
            document.getElementById("msg").style.color = "red";
            document.getElementById("msg").innerHTML = "Password Mismatch";
        } else {
            document.getElementById("msg").innerHTML = "Password Valid";
            document.getElementById("msg").style.color = "green";
        }

    }
</script>