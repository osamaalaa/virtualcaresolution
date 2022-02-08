<!DOCTYPE html>
<html lang="en">

<!--- Sidemenu -->

<div id="sidebar-menu">
    <ul id="side-menu">
        <!-- <li class="menu-title"> <a href="dashboard.php">VCS</a></li> -->
        <li>
            <a href="dashboard.php">
                <i data-feather="airplay"></i>
                <span class="badge bg-success rounded-pill float-end">1</span>
                <span> Dashboard </span>
            </a>
        </li>

        <li class="menu-title mt-2">Apps</li>
        <li>
            <a href="appointments.php">
                <i data-feather="users"></i>
                <span> Appointments </span>
            </a>
        </li>
        <li>
            <a href="sessions.php">
                <i data-feather="video"></i>
                <span> Sessions </span>
            </a>
        </li>
        <li>
            <a href="patients.php">
                <i data-feather="calendar"></i>
                <span> VMR </span>
            </a>
        </li>
        <li>
            <a href="patientlist.php">
                <i data-feather="activity"></i>
                <span> Patients </span>
            </a>
        </li>
        <li>
            <a href="lab_request.php">
                <i data-feather="clipboard"></i>
                <span> Lab Request </span>
            </a>
        </li>
        <li>
            <a href="PayMyBill.php">
                <i data-feather="user-check"></i>
                <span> Checkout </span>
            </a>
        </li>


        <!-- --------------------------------------Admin------------------------------------->

        <?php
        $role = $_SESSION["role_id"];
        if ($role == 4){ ?>

            <li class="menu-title mt-2">Admin</li>
            <li>
                <a href="admin-dashboard.php">
                    <i data-feather="airplay"></i>
                    <span> Dashboard </span>
                </a>
            </li>
            <li>
                <a href="admin_users.php">
                    <i data-feather="users"></i>
                    <span> Users </span>
                </a>
            </li>
            <li>
                <a href="admin-notifications.php">
                    <i><span class="mdi mdi-notification-clear-all"></span></i>
                    <span> Notifications </span>
                </a>
            </li>


        <?php } ?>
       
        <!-- ----------------------------------------------------------------------------------------    -->
        <li class="menu-title mt-2">Patient</li>
            <li>
                <a href="patient/patient_dashboard.php">
                    <i data-feather="airplay"></i>
                    <span> Patient Dashboard </span>
                </a>
            </li>
            <li>
                <a href="admin_users.php">
                    <i data-feather="users"></i>
                    <span> Users </span>
                </a>
            </li>



            <!--------------------------------Receptionist----------------------------------------------  -->


            <li class="menu-title mt-2">Receptionist</li>
            <li>
                <a href="404.php">
                    <i><span class="mdi mdi-desktop-mac-dashboard"></span></i>
                    <span> Dahsboard </span>
                </a>
            </li>
            <li>
                <a href="404.php">
                    <i><span class="mdi mdi-doctor"></span></i>
                    <span> Physicians </span>
                </a>
            </li>
            <li>
                <a href="404.php">
                    <i data-feather="notification"><span class="mdi mdi-av-timer"></span></i>
                    <span> Appointments </span>
                </a>
            </li>
            <li>
                <a href="404.php">
                    <i><span class="mdi mdi-notification-clear-all"></span></i>
                    <span> Notification System </span>
                </a>
            </li>
            <li>
                <a href="404.php">
                    <i><span class="mdi mdi-chat"></span></i>
                    <span> Messages </span>
                </a>
            </li>
            <li>
                <a href="404.php">
                    <i><span class="mdi mdi-contacts"></span></i>
                    <span> Contacts </span>
                </a>
            </li>
            <!-- ----------------------------------------------------------------------------------------- -->



    </ul>
</div>

<!-- End Sidebar -->