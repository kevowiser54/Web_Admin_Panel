<?php
// include('authentication.php');
include('includes/header.php');
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card">
                    <h4>Dispatch this Order:
                        <a href="Approved_Orders.php" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    
                    <?php
                    
                    include('dbcon.php');
                    if(isset($_GET['id']))
                    {
                        $key_child = $_GET['id'];
                        $ref_table = 'Orders/Approved_Orders';
                        $getdata = $database->getReference($ref_table)->getChild($key_child)->getValue();

                        if($getdata > 0)
                        {
                            ?>                          
                        <form action="code.php" method="POST">

                        <input type="hidden" name="key" value="<?=$key_child;?>">
                        <div class="form-group mb-3">
                            <label for="">Order ID</label>
                            <input type="number" name="contact" value="<?=$getdata['contact'];?>" class="form-control" aria-label="readonly input example" readonly>
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Customer Name</label>
                            <input type="text" name="name" value="<?=$getdata['name'];?>" class="form-control" aria-label="readonly input example" readonly>
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Shipping Town</label>
                            <input type="text" name="address" value="<?=$getdata['address'];?>" class="form-control" aria-label="readonly input example" readonly>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Shipping County</label>
                            <input type="text" name="county" value="<?=$getdata['county'];?>" class="form-control" aria-label="readonly input example" readonly>
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Total Amount (Ksh.)</label>
                            <input type="number" name="totalAmount" value="<?=$getdata['totalAmount'];?>" class="form-control" class="form-control" aria-label="readonly input example" readonly>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">State will Change To:</label> 
                            <select name="state" aria-label="Disabled select example" disabled> 
                                <option selected>Dispatching</option>  
                            </select>
                        </div>

                        <div class="form-group" mb-3>
                            <button type="submit" name="dispatch_order" class="btn btn-primary"><i class="fas fa-plus"></i>Dispatch Order</button>
                        </div>
                        
                    </form>
                    <?php
                        }else{
                            $_SESSION['status'] = "Invalid id";
                            header('Location: Approved_Orders.php');
                            exit();
                        }
                    }
                    else{
                        $_SESSION['status'] = "Not found";
                        header('Location: Approved_Orders.php');
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