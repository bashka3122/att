<?php
session_start();
if (!$_SESSION['userName']) {
    echo "<script>location='../';</script>";
}
?>
<div class="page-sidebar expandit">
    <div class="sidebar-inner" id="main-menu-wrapper">
        <div class="profile-info row ">
            <div class="profile-image ">
                <a href="ui-profile.html">

                </a>
            </div>
            <div class="profile-details">
                <h3>
                    <a href="ui-profile.html"><?php echo  $_SESSION['userName']; ?></a>
                </h3>
                <p class="profile-title">Web Developer</p>

            </div>
        </div>

        <ul class="wraplist" style="height: auto;">
            <!--          <li class="menusection">Main</li>-->
            <li><a href=""><span class="sidebar-icon"><i class="fa fa-dashboard"></i></span> <span class="menu-title">Dashboard</span></a></li>
            <li><a href=""><span class="sidebar-icon"><i class="fa fa-bullseye"></i></span> <span class="menu-title">Class management</span></a></li>
            <li><a href=""><span class="sidebar-icon"><i class="fa fa-users"></i></span> <span class="menu-title">Staff Management</span></a></li>
            <li><a href=""><span class="sidebar-icon"><i class="fa fa-calendar"></i></span> <span class="menu-title">Attendances</span></a></li>
            <li><a href=""><span class="sidebar-icon"><i class="fa fa-suitcase"></i></span> <span class="menu-title">Students</span></a></li>
            <li><a href=""><span class="sidebar-icon"><i class="fa fa-lock"></i></span> <span class="menu-title">Sign Out</span></a></li>
        </ul>
    </div>
</div>