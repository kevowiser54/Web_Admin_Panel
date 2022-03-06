<?php
include('includes/header.php');
// include('authentication.php');
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card">
                    <h4>Verify this Pending Customer
                        <a href="customers_pending.php" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    
                    <?php
                    
                    include('dbcon.php');
                    if(isset($_GET['id']))
                    {
                        $key_child = $_GET['id'];
                        $ref_table = 'Customers_Pending';;
                        $getdata = $database->getReference($ref_table)->getChild($key_child)->getValue();

                        if($getdata > 0)
                        {
                            ?>                          
                        <form action="code.php" method="POST">

                        <input type="hidden" name="key" value="<?=$key_child;?>">

                        <div class="form-group mb-3">
                            <label for="">Phone Number</label>
                            <input type="number" name="contact" value="<?=$getdata['contact'];?>" class="form-control" aria-label="readonly input example" readonly>
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Username</label>
                            <input type="text" name="username" value="<?=$getdata['username'];?>" class="form-control" aria-label="readonly input example" readonly>
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Email Address</label>
                            <input type="email" name="email" value="<?=$getdata['email'];?>" class="form-control" aria-label="readonly input example" readonly>
                        </div>
                        <div class="form-group mb-3">
                            <label for="" >Password</label>
                            <input type="hidden" name="password" value="<?=$getdata['password'];?>" class="form-control" aria-label="readonly input example" readonly>
                        </div>
                        <div class="form-group" mb-3>
                            <button type="submit" name="verify_customer" class="btn btn-primary float-start"><i class="fas fa-plus"></i>Verify Customer</button> 
                            <button type="submit" name="declining_customer" class="btn btn-danger float-end"><i class="fas fa-trash-alt"></i>Decline</button>
                        </div>
                    </form>
                    <?php
                        }else{
                            $_SESSION['status'] = "Invalid id";
                            header('Location: customers_pending.php');
                            exit();
                        }
                    }
                    else{
                        $_SESSION['status'] = "Not found";
                        header('Location: customers_pending.php');
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