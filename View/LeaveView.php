<div class="col-sm-10 jumbo" id="mainContainer3">
    <form class="was-validated" action="index.php" id="dashboard_fields">
        <div class="form-group">
            <label for="email" class="mr-sm-2">Date :</label>
            <input required class="form-control mr-sm-2" type="date" name="bday">
        </div>
        <div class="form-group" style="margin-top:20px">
            <label for="uname">Id:</label>
            <input type="text" class="form-control" id="uname" placeholder="Enter ID" name="uname" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group" style="margin-top:20px">
            <label for="uname">Username:</label>
            <input disabled type="text" class="form-control" id="uname" placeholder="Ex : Pasan Manohara" name="uname" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
    </form>

    <footer class="blockquote-footer" style="margin-top:20px">Leave information will be added to your account</footer>

    <div class="row">
        <div class="col">
        </div>
        <div class="col-sm-4">
            <div class="row">
                <div class="col">
                    <button type="button" class="btn btn-outline-dark btn-block">FIND EMPLOYEE</button>
                </div>
                <div class="col">
                    <button visibility="hidden" class="btn btn-success btn-block" id="leave_btn" onclick="" disabled>SAVE</button>
                </div>
            </div>
        </div>
    </div>
</div>