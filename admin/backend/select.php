<select class="form-control" name="subject" required>
    <option selected disabled>--select subject</option>
    <?php
    $c_id = $_POST['c_id'];
    echo $c_id;
    include '../includes/connection.php';
    $sql1 = "SELECT * FROM subjects WHERE class='$c_id' ";
    $q1 = mysqli_query($conn, $sql1);
    while ($r = mysqli_fetch_assoc($q1)) {
    ?>
        <option value="<?php echo $r['name']; ?>"><?php echo $r['name']; ?></option>
    <?php
    }
    ?>
</select>