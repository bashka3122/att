<?php
session_start();
unset($_SESSION['userName']);
echo "<script>location='../';</script>";
