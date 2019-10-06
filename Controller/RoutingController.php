<?php

class RoutingController
{
    // main function - starting point
    function Run()
    {
        // when a form is submited to add a record - index.php?add
        if (isset($_REQUEST['dashboard_view'])) {
            // create object from model class
            $model =  new AttendanceViewModel();
            // get all input field values
            $model->setDate();
        }
        // when no form is submited (normal page loading) -index.php
        else {
            include "./View/DashboardView.php";
            include "./View/AttendanceView.php";
            include "./View/LeaveView.php";
            include "./View/EmployeeView.php";
        }
    }
}
