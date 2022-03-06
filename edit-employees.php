<?php
include('includes/header.php');
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card">
                    <h4>Edit & Update Employee Data
                        <a href="index.php" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    
                    <?php
                    
                    include('dbcon.php');
                    if(isset($_GET['id']))
                    {
                        $key_child = $_GET['id'];
                        $ref_table = 'Employees';
                        $getdata = $database->getReference($ref_table)->getChild($key_child)->getValue();

                        if($getdata > 0)
                        {
                            ?>                          
                        <form action="code.php" method="POST">

                        <input type="hidden" name="key" value="<?=$key_child;?>">
                        <div class="form-group mb-3">
                            <label for="">Username</label>
                            <input type="text" name="username" value="<?=$getdata['username'];?>" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Department</label>
                            <input type="text" name="department" value="<?=$getdata['department'];?>" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Email Address</label>
                            <input type="email" name="email" value="<?=$getdata['email'];?>" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Phone Number</label>
                            <input type="number" name="contact" value="<?=$getdata['contact'];?>" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Password</label>
                            <input type="number" name="password" value="<?=$getdata['password'];?>" class="form-control">
                        </div>

                        <div class="form-group" mb-3>
                            <button type="submit" name="update_employees" class="btn btn-primary fas fa-sync">Update Employee</button>
                        </div>
                    </form>
                    <?php
                        }else{
                            $_SESSION['status'] = "Invalid id";
                            header('Location: index.php');
                            exit();
                        }
                    }
                    else{
                        $_SESSION['status'] = "Not found";
                        header('Location: index.php');
                        exit();
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include('includes/footer.php');
?>