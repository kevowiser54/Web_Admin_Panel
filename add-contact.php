<?php
include('authentication.php');
include('includes/header.php');
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card">
                    <h4>Register new Employee
                        <a href="index.php" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST">

                        <div class="form-group mb-3">
                            <label for="">Full Name</label>
                            <input type="text" name="username" class="form-control">
                        </div>

                       <div class="form-group mb-3">
                            <label for="">Department</label>
                            <input type="text" name="department" class="form-control">
                        </div> 

                        <div class="form-group mb-3">
                            <label for="">Email Address</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Phone Number</label>
                            <input type="number" name="contact" class="form-control" >
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Password</label>
                            <input type="number" name="password" class="form-control">
                        </div>

                        <div class="form-group">
                            <button type="submit" name="save_employees" class="btn btn-primary"><i class="fas fa-plus"></i>Add Employee</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include('includes/footer.php');
?>