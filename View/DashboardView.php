<div class="col-sm-10 jumbo" id="mainContainer">
<form class="form-inline" action="index.php" id="dashboard_fields">
    <label for="email" class="mr-sm-2">Year :</label>
    <select class="form-control" id="year" name="year" style="margin-right:20px">
        <?php
        for($x = 2019; $x <= 2097; $x++){
            echo "<option>". $x."</option>";
        }
        ?>
    </select>
    <label for="pwd" class="mr-sm-2">Month :</label>
    <select class="form-control" id="Month" name="Month" style="margin-right:20px">
        <option>January</option>
        <option>February</option>
        <option>March</option>
        <option>April</option>
        <option>May</option>
        <option>June</option>
        <option>July</option>
        <option>August</option>
        <option>September</option>
        <option>October</option>
        <option>November</option>
        <option>December</option>
    </select>
    <button type="submit" name="dashboard_view" value="search" class="btn btn-outline-dark">View</button>
</form>
<input id="dashboard_emp_name" type="text" placeholder="Employee Name" class="form-control mb-2 mr-sm-2" />
<footer class="blockquote-footer">Attendance details will show up here.</footer>

<table class="table table-success  table-hover " id="emp_attendance_table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Contact number</th>
            <th>Leaves</th>
            <th>Worked Hours</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Pasan Manohara</td>
            <td>0715634089</td>
            <td>
                <ul>
                    <li>2019/02/05</li>
                    <li>2019/04/08</li>
                    <li>2019/08/01</li>
                </ul>
            </td>
            <td><span class="badge badge-success">34</span> Hours</td>
            <td><span class="badge badge-success">Good</span></td>
        </tr>
        <tr>
            <td>2</td>
            <td>Pasan Manohara</td>
            <td>0715634089</td>
            <td>
                <ul>
                    <li>2019/02/05</li>
                    <li>2019/04/08</li>
                    <li>2019/08/01</li>
                </ul>
            </td>
            <td><span class="badge badge-success">34</span> Hours</td>
            <td><span class="badge badge-success">Good</span></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Pasan Manohara</td>
            <td>0715634089</td>
            <td>
                <ul>
                    <li>2019/02/05</li>
                    <li>2019/04/08</li>
                    <li>2019/08/01</li>
                </ul>
            </td>
            <td><span class="badge badge-success">34</span> Hours</td>
            <td><span class="badge badge-success">Good</span></td>
        </tr>
        <tr>
            <td>4</td>
            <td>Pasan Manohara</td>
            <td>0715634089</td>
            <td>
                <ul>
                    <li>2019/02/05</li>
                    <li>2019/04/08</li>
                    <li>2019/08/01</li>
                </ul>
            </td>
            <td><span class="badge badge-success">34</span> Hours</td>
            <td><span class="badge badge-success">Good</span></td>
        </tr>
        <?php
        // // use ContactEntity class to fetch data from database table and add them to html table
        // $model =  new ContactEntity();
        // // save the reult returns from the method
        // $result = $model->getData();

        // // 
        // if ($result->num_rows > 0) {
        //     // output data of each row - each row 
        //     while ($row = $result->fetch_assoc()) {
        //         // start row
        //         echo "<tr>";
        //         echo "<td>" . $row["contact_name"] . "<input type='hidden' id='hidden' name ='hidden' value='" . $row["contact_name"] . "'></input>" . "</td>";
        //         echo "<td>" . $row["office_number"] . "</td>";
        //         echo "<td>" . $row["mobile_number"] . "</td>";
        //         echo "<td>" . $row["address"] . "</td>";
        //         echo "<td>" . $row["job_position"] . "</td>";
        //         echo "<td>" . $row["status"] . "</td>";
        //         echo "<td>" . $row["email"] . "</td>";
        //         echo "<td>" . $row["note"] . "</td>";
        //         echo "<td>";
        //         // adding remove and update button to each row
        //         echo "<input class='btni' onclick='' type='submit' name = 'delete' value='Delete '> </input>";
        //         echo "<input class='btnupd' onclick='move(this)' value='Update' name='update' type='button'> </input> ";
        //         echo "</td>";
        //         // end row
        //         echo "</tr>";
        //     }
        // } else {
        //     echo "0 results";
        // }
        ?>
    </tbody>
</table>
</div>