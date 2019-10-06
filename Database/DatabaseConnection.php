<?php

class DatabaseConnection {
    var $connect;
    var $db;

    //constructor function
    function  __construct()
    {
        // database connection
        $this->connect =  new mysqli('localhost', 'root', '', 'attendancemanagementdb');
    }
    
    function ExeQuery($sql)
    {
        // executing the sql query passed to the function and return the result 
        return $this->connect->query($sql);
        
    }
}
