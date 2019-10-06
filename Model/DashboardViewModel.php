<?php

class DashboardViewModel
{
    // get data from database table and return the result
    function getData()
    {
        // sql query for getting data from database table
        $sql = "SELECT * FROM employee join";

        // use data class to execute the query
        $data =  new DatabaseConnection();
        $result = $data->ExeQuery($sql);

        // return the selection result 
        return $result;
    }
}
