<?php
include('authentication.php');
include('includes/header.php');
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card">
                    <h4>Register new Supplier
                        <a href="suppliers.php" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST">

                        <div class="form-group mb-3">
                            <label for="">Full Name</label>
                            <input type="text" name="full_name" class="form-control">
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
                            <label for="">Material Supplied</label>
                            <input type="text" name="material" class="form-control">
                        </div> 
                        <div class="form-group mb-3">
                            <label for="">Material Quantity</label>
                            <input type="number" name="quantity" class="form-control" >
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Total Cost</label>
                            <input type="number" name="total_Price" class="form-control" >
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Reference Number</label>
                            <input type="text" name="reference" class="form-control">
                        </div>
                        <!-- <input id="date" name="date" class="input" type="hidden"/> -->
                        <div class="form-group">
                            <button type="submit" name="add_Supplier" class="btn btn-primary"><i class="fas fa-plus"></i>Add Employee</button>
                        </div>
                    </form>
                    <!-- <script>
                        var currentTime = new Date();
                        var curdate = currentTime.getDate();
                        document.getElementbyId("date").value = curdate;
                        return true;
                    </script> -->
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include('includes/footer.php');
?>