<div class="col-sm-10 jumbo" id="mainContainer2">
    <form class="form-inline" action="index.php" id="dashboard_fields">
        <label for="email" class="mr-sm-2">Date :</label>
        <input class="form-control mr-sm-2" type="date" name="attnd_selected_date">
        <input type="submit" name="dashboard_view" value="View" class="btn btn-outline-dark"></button>
    </form>

    <footer class="blockquote-footer">Attendance details will show up here.</footer>
    <table class="table table-success  table-hover " id="emp_attendance_table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Contact number</th>
                <th>From</th>
                <th>To</th>
                <th>Hours</th>
                <th>Attendance</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Pasan Manohara</td>
                <td>0715634089</td>
                <td><input class="form-control mr-sm-2" type="time" name="attnd_from" onchange="calculateHours(this)" placeholder="From"></td>
                <td><input class="form-control mr-sm-2" type="time" name="attnd_to" onchange="calculateHours(this)" placeholder="To"></td>
                <td><span id = "hel" class="badge badge-success">6</span> Hours</td>
                <td>
                    <label class="container center">
                        <input type="checkbox" onchange="setRequired(this)">
                        <span class="checkmark"></span>
                    </label>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Pasan Manohara</td>
                <td>0715634089</td>
                <td><input class="form-control mr-sm-2" type="time" name="attnd_from" placeholder="From"></td>
                <td><input class="form-control mr-sm-2" type="time" name="attnd_to" placeholder="To"></td>
                <td><span class="badge badge-success">6</span> Hours</td>
                <td>
                    <label class="container center">
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Pasan Manohara</td>
                <td>0715634089</td>
                <td><input class="form-control mr-sm-2" type="time" name="attnd_from" placeholder="From"></td>
                <td><input class="form-control mr-sm-2" type="time" name="attnd_to" placeholder="To"></td>
                <td><span class="badge badge-success">6</span> Hours</td>
                <td>
                    <label class="container center">
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>Pasan Manohara</td>
                <td>0715634089</td>
                <td><input class="form-control mr-sm-2" type="time" name="attnd_from" placeholder="From"></td>
                <td><input class="form-control mr-sm-2" type="time" name="attnd_to" placeholder="To"></td>
                <td><span class="badge badge-success">6</span> Hours</td>
                <td>
                    <label class="container center">
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                </td>
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
    <div class="row">
        <div class="col">
        </div>
        <div class="col-sm-4">
            <div class="row">
                <div class="col">
                    <button type="button" class="btn btn-outline-dark btn-block" disabled>Edit</button>
                </div>
                <div class="col">
                    <button visibility="hidden" class="btn btn-success btn-block" id="leave_btn" onclick="">SAVE</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function setRequired(element) {
        if (element.checked) {
            // find the selected row
            var currow = element.closest('tr');
            // retrieve info from the row
            var from = currow.cells.item(3);
            var to = currow.cells.item(4);

            from.prop('required', 'required');
            from.to('required', 'required');
        } else {

        }
    }

    function calculateHours(element) {
        // find the selected row
        var currow = element.closest('tr');
        // retrieve info from the row
        var from = currow.cells.item(4);
        var to = currow.cells.item(3);
        var hours = currow.cells.item(5);

        var c = from.childNodes;
        var d = to.childNodes;
        var e = hours.childNodes;
        var i;
        for (i = 0; i < c.length; i++) {
            from = c[i].value;
            to = d[i].value;
            hours = e[i];
        }
        from = parseInt(from.substring(0,2));
        to = parseInt(to.substring(0,2));
        var total = from - to;
        if (total <= 4 ){
            hours.innerText = hours;
            hours.removeClass('badge badge-success badge-danger badge-warning').addClass('badge badge-danger');
        }
        else if (total > 4 && total <8 ){
            hours.innerText = from - to;
            hours.removeClass('badge badge-success badge-danger badge-warning').addClass('badge badge-warning');
        }
        else if (total >= 8){
            hours.innerText = total;
            hours.removeClass('badge badge-success badge-danger badge-warning').addClass('badge badge-success');
        }
    }
</script>