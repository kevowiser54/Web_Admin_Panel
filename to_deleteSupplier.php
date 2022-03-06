<?php
include('includes/header.php');
// include('authentication.php');
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card">
                    <h4>Delete this Supplier
                        <a href="suppliers.php" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    
                    <?php
                    
                    include('dbcon.php');
                    if(isset($_GET['id']))
                    {
                        $key_child = $_GET['id'];
                        $ref_table = 'Supplier';
                        $getdata = $database->getReference($ref_table)->getChild($key_child)->getValue();

                        if($getdata > 0)
                        {
                            ?>                          
                        <form action="code.php" method="POST">

                        <input type="hidden" name="key" value="<?=$key_child;?>">

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
                        <div class="form-group" mb-3>
                             <button type="submit" name="delete_supplier" class="btn btn-danger float-end"><i class="fas fa-trash-alt"></i>Confirm Delete</button>
                        </div>
                    </form>
                    <?php
                        }else{
                            $_SESSION['status'] = "Invalid id";
                            header('Location: suppliers.php.php');
                            exit();
                        }
                    }
                    else{
                        $_SESSION['status'] = "Not found";
                        header('Location: suppliers.php');
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