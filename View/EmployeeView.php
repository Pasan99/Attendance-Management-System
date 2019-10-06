<!-- id="office_number" name="office_number"  -->
<div class="col-sm-10 jumbo" id="mainContainer4">
    <div class="container text-left">
        <h3>Add New Employee</h3>
    </div>
    <div class="jumbo" id="section1" style="margin-bottom:50px;">
        <form action="index.php" method="post" class="was-validated">
            <div class="form-group">
                <label for="email">Employee Number :</label>
                <input type="text" disabled class="form-control" id="emp_id" name="emp_id">
            </div>
            <div class="form-group">
                <label for="email">Employee Name :</label>
                <input type="text" required class="form-control" id="emp_name" name="emp_name">
            </div>
            <div class="form-group">
                <label for="email">Contact Number :</label>
                <input type="text" required class="form-control" id="emp_contact_number" name="emp_contact_number">
            </div>
            <div id="button_layout">
                <button type="submit" class="btn btn-success" id="submit_btn" name='add' value="add">Add</button>
                <button type="button" onclick="reset()" id="reset_btn" class="btn btn-outline-warning">Reset</button>
            </div>
        </form>
    </div>


    <form action="index.php" method="post" onsubmit="return deleteElement()">
        <table class="table table-success  table-hover " id="contact_table">
            <thead>
                <tr>
                    <th>Employee ID</th>
                    <th>Employee Name</th>
                    <th>Contact number</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // use EmployeeViewEntity class to fetch data from database table and add them to html table
                $model =  new EmployeeViewModel();
                //save the reult returns from the method
                $result = $model->getData();

                // 
                if ($result->num_rows > 0) {
                    // output data of each row - each row 
                    while ($row = $result->fetch_assoc()) {
                        // start row
                        echo "<tr>";
                        echo "<td>" . $row["emp_id"] . "<input type='hidden' id='hidden' name ='hidden' value='" . $row["emp_id"] . "'></input>" . "</td>";
                        echo "<td>" . $row["emp_name"] . "</td>";
                        echo "<td>" . $row["emp_contact_number"] . "</td>";
                        echo "<td>";
                        // adding remove and update button to each row
                        echo "<input class='btni' onclick='' type='submit' name = 'delete' value='Delete '> </input>";
                        echo "<input class='btnupd' onclick='move(this)' value='Update' name='update' type='button'> </input> ";
                        echo "</td>";
                        // end row
                        echo "</tr>";
                    }
                } else {
                    echo "0 results";
                }
                ?>
            </tbody>
        </table>
    </form>
</div>

<script>
    // scroll the page to top 
    function move(element) {
        // scroll to heading
        window.location.href = "#section1";

        // change text of the add button to update on registration form 
        var btn = $("#submit_btn");
        btn.text("Update");
        btn.prop('name', 'update');
        // change text of the add button to update on registration form 
        var reset_btn = $("#reset_btn");
        reset_btn.text("Cancel");
        reset_btn.attr('onclick', 'changeButton()');

        // use updateFields function to update the the registration form according to the selected row of the table
        this.updateFields(element);
    }

    // update the the registration form according to the selected row of the table
    function updateFields(element) {
        // get the table reference
        var table = $("#contact_table");
        // find the selected row
        var currow = element.closest('tr');
        // retrieve info from the row
        var employee_id = currow.cells.item(0).innerText;
        var employee_name = currow.cells.item(1).innerText;
        var employee_number = currow.cells.item(2).innerText;
        // set the input fields of the registration form with matching info
        document.getElementById("emp_id").value = employee_id;
        document.getElementById("emp_name").value = employee_name;
        document.getElementById("emp_contact_number").value = employee_number;
    }

    // set the status field on form
    function setStatus(value) {
        if (value == "Mr.") {
            $("#status").prop('value', 'Mr.');
            $('#mr_btn').prop('class', 'btn btn-dark');
            $('#dr_btn').prop('class', 'btn btn-primary');
            $('#ms_btn').prop('class', 'btn btn-primary');
        } else if (value == "Dr.") {
            $("#status").prop('value', 'Dr.');
            $('#dr_btn').prop('class', 'btn btn-dark');
            $('#mr_btn').prop('class', 'btn btn-primary');
            $('#ms_btn').prop('class', 'btn btn-primary');
        } else if (value == "Ms.") {
            $("#status").prop('value', 'Ms.');
            $('#ms_btn').prop('class', 'btn btn-dark');
            $('#dr_btn').prop('class', 'btn btn-primary');
            $('#mr_btn').prop('class', 'btn btn-primary');
        }
    }
    // reload the page
    function reload() {
        location.reload();
    }

    // ask for confirmation to delete a row 
    function deleteElement() {
        // popup box text
        var opt = confirm("Are you sure you want to delete this field");
        if (opt == true) {
            // ok is pressed
            return true;
        } else {
            // cancel is pressed
            return false;
        }
    }
</script>


<script>
    // reset all input fields
    function reset() {
        // select all input fields
        var myElements = $(".form-control");
        // set values of input fields to null
        myElements.text("");
        // set the button group to normal viewing mode (deselect all selected buttons)- blue color
        setStatusToNormal();
        // reload the page
        document.location.reload();
    }

    function changeButton() {
        // select all input fields
        var myElements = $(".form-control");
        // set values of input fields to null
        myElements.prop('value', '');
        // set the button group to normal viewing mode (deselect all selected buttons)- blue color
        setStatusToNormal();

        // change text of the update button to add on registration form 
        var btn = $("#submit_btn");
        btn.text("Add");
        btn.prop('name', 'add');
        // change text of the add button to update on registration form 
        var reset_btn = $("#reset_btn");
        reset_btn.text("Reset");
        reset_btn.attr('onclick', 'reset()');

    }

    // set the button group to normal viewing mode (deselect all selected buttons)- blue color
    function setStatusToNormal() {
        var mr_btn = $("#mr_btn");
        mr_btn.prop('class', 'btn btn-primary');
        var dr_btn = $("#dr_btn");
        dr_btn.prop('class', 'btn btn-primary');
        var ms_btn = $("#ms_btn");
        ms_btn.prop('class', 'btn btn-primary');
    }
</script>