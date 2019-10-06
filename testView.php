<?php
include_once './Database/DatabaseConnection.php';
include_once './Controller/RoutingController.php';
include_once './Model/EmployeeViewModel.php';
include_once './Model/DashboardViewModel.php';
include_once './Model/AtttendanceViewModel.php';
include_once './Model/LeaveViewModel.php';

// use controller to display the views
$stdCtrl = new RoutingController();
$stdCtrl->Run();
?>
