<?php
include 'includes/connection.php';
$sql = "SELECT COUNT(id) as ns from students";
$q = mysqli_query($conn, $sql);
$r = mysqli_fetch_assoc($q);
$ns = $r['ns'];
$sqlAbsents = "SELECT COUNT(ar.id) as Tabsents FROM att_records ar JOIN att_table att ON att.id=ar.a_id where att.date=CURDATE() AND ar.status=0";
$Qa = mysqli_query($conn, $sqlAbsents);
$row = mysqli_fetch_assoc($Qa);
$absents = $row['Tabsents'];
