<?php
include_once './Database/DatabaseConnection.php';
include_once './Controller/RoutingController.php';
include_once './Model/EmployeeViewModel.php';
include_once './Model/DashboardViewModel.php';
include_once './Model/AtttendanceViewModel.php';
include_once './Model/LeaveViewModel.php';
?>

<!DOCTYPE html>
<html>

<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- checkbox -->
    <link href="./CSS/checkbox.css" rel="stylesheet">
    <link href="./CSS/index.css" rel="stylesheet">

    <meta charset="UTF-8">

    <title>Contact Management</title>
</head>

<body>
    <div class="row" id="mainContainerRow">
        <div class="col-sm-2">
            <div class="row">
                <div class="col">
                    <img src="./Images/attendance.png" width="50px" height="50px" class="rounded" alt="Cinque Terre">
                </div>
                <div class="col" id="heading">
                    <h2>Attendance Management System</h2>
                </div>
            </div>
            <button class="btn btn-primary btn-block" id="dash_btn" onclick="dashOnClick()"><i class="material-icons"></i> Dashboard</button>
            <button class="btn btn-outline-primary btn-block" id="attnd_btn" onclick="attndOnClick()">Attendance</button>
            <button class="btn btn-outline-primary btn-block" id="leave_btn" onclick="leaveOnClick()">Leave</button>
            <button class="btn btn-outline-primary btn-block" id="emp_btn" onclick="employeeOnClick()">Employees</button>
        </div>
        <?php
        $stdCtrl = new RoutingController();
        $stdCtrl->Run();
        ?>
    </div>

    <script>
        $("#mainContainer").ready(function() {
            $("#mainContainer4").hide();
            $("#mainContainer3").hide();
            $("#mainContainer2").hide();
        });

        function dashOnClick() {
            // buttons
            $('#dash_btn').prop('class', 'btn btn-primary btn-block');
            $('#attnd_btn').prop('class', 'btn btn-outline-primary btn-block');
            $('#leave_btn').prop('class', 'btn btn-outline-primary btn-block');
            $('#emp_btn').prop('class', 'btn btn-outline-primary btn-block');
            // Context of the page
            // showing
            $("#mainContainer").show();
            // hidding
            $("#mainContainer3").hide();
            $("#mainContainer2").hide();
            $("#mainContainer4").hide();
        }

        function attndOnClick() {
            // buttons
            $('#attnd_btn').prop('class', 'btn btn-primary btn-block');
            $('#leave_btn').prop('class', 'btn btn-outline-primary btn-block');
            $('#dash_btn').prop('class', 'btn btn-outline-primary btn-block');
            $('#emp_btn').prop('class', 'btn btn-outline-primary btn-block');
            // context of the page
            // showing
            $("#mainContainer2").show();
            // hidding
            $("#mainContainer").hide();
            $("#mainContainer3").hide();
            $("#mainContainer4").hide();
        }

        function leaveOnClick() {
            // buttons
            $('#leave_btn').prop('class', 'btn btn-primary btn-block');
            $('#attnd_btn').prop('class', 'btn btn-outline-primary btn-block');
            $('#dash_btn').prop('class', 'btn btn-outline-primary btn-block');
            $('#emp_btn').prop('class', 'btn btn-outline-primary btn-block');
            // context of the page
            // showing
            $("#mainContainer3").show();
            // hidding
            $("#mainContainer").hide();
            $("#mainContainer2").hide();
            $("#mainContainer4").hide();
        }

        function employeeOnClick() {
            // buttons
            $('#emp_btn').prop('class', 'btn btn-primary btn-block');
            $('#attnd_btn').prop('class', 'btn btn-outline-primary btn-block');
            $('#dash_btn').prop('class', 'btn btn-outline-primary btn-block');
            $('#leave_btn').prop('class', 'btn btn-outline-primary btn-block');
            // context of the page
            // showing
            $("#mainContainer4").show();
            // hidding
            $("#mainContainer").hide();
            $("#mainContainer2").hide();
            $("#mainContainer3").hide();
        }
    </script>
</body>

</html>