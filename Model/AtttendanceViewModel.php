<?php

class AttendanceViewModel
{
    // local variables
    var $selectedDate;
    var $emp_id;
    var $emp_worked_hours;
    var $worked_from;
    var $worked_to;
    var $todays_worked_hours;
    var $attendance_status;
    var $month;
    var $year;

    // set the selected date
    function setDate()
    {
        if (isset($_REQUEST['attnd_selected_date'])) {
            $this->selectedDate = strtotime($_REQUEST['attnd_selected_date']);
            $this->selectedDate = date('Y-m-d H:i:s', $this->selectedDate); //now you can save in DB
        }
        $m = date("m", strtotime($this->selectedDate));
        $this->year =  $this->getMonth($m);
        $this->year =  date("Y", strtotime($this->selectedDate));
    }

    // find whether the attendance is marked or not on selected date
    function checkMarked()
    {
        // sql query for getting data from database table
        $sql = "SELECT * FROM markedattendance where ma_date = '" . $this->selectedDate . "';";
        // use data class to execute the query
        $data =  new DatabaseConnection();
        $result = $data->ExeQuery($sql);
        // if that date available on marked attendance table return true
        if ($result->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    // get data from database table and return the result
    function getData()
    {
        if (!checkMarked()) {
            // sql query for getting data from database table
            $sql = "SELECT emp_id, emp_name, worked_hours FROM employee e 
                    join worked w on e.emp_id = w.worked_emp_id where worked_month =' " . $this->month . "' 
                    and worked_year = '" . $this->year . "';";

            // use data class to execute the query
            $data =  new DatabaseConnection();
            $result = $data->ExeQuery($sql);
        } else {
            // sql query for getting data from database table
            $sql = "SELECT * FROM employee ";

            // use data class to execute the query
            $data =  new DatabaseConnection();
            $result = $data->ExeQuery($sql);
        }

        // return the selection result 
        return $result;
    }

    // get the values from the input fields and store them in appropriate variable
    function SetValues()
    {
        if (isset($_REQUEST['contact_name'])) {
            $this->contact_name = $_REQUEST['contact_name'];
        }
        if (isset($_REQUEST['office_number'])) {
            $this->office_number = $_REQUEST['office_number'];
        }
        if (isset($_REQUEST['mobile_number'])) {
            $this->mobile_number = $_REQUEST['mobile_number'];
        }
        if (isset($_REQUEST['address'])) {
            $this->address = $_REQUEST['address'];
        }
        if (isset($_REQUEST['job_position'])) {
            $this->job_position = $_REQUEST['job_position'];
        }
        if (isset($_REQUEST['status'])) {
            $this->status = $_REQUEST['status'];
        }
        if (isset($_REQUEST['email'])) {
            $this->email = $_REQUEST['email'];
        }
        if (isset($_REQUEST['note'])) {
            $this->note = $_REQUEST['note'];
        }
    }

    function getMonth($month)
    {
        switch ($month) {
            case 1:
                return "January";
            case 2:
                return "February";
            case 3:
                return "March";
            case 4:
                return "April";
            case 5:
                return "May";
            case 6:
                return "June";
            case 7:
                return "July";
            case 8:
                return "August";
            case 9:
                return "September";
            case 10:
                return "October";
            case 11:
                return "November";
            case 12:
                return "December";
        }
    }
}
