<?php
include('includes/header.php');
// include('authentication.php');
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card">
                    <h4>Shipped this Order:
                        <a href="Dispatching_Orders.php" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    
                    <?php
                    
                    include('dbcon.php');
                    if(isset($_GET['id']))
                    {
                        $key_child = $_GET['id'];
                        $ref_table = 'Orders/Dispatching';
                        $getdata = $database->getReference($ref_table)->getChild($key_child)->getValue();

                        if($getdata > 0)
                        {
                            ?>                          
                        <form action="code.php" method="POST">

                        <input type="hidden" name="key" value="<?=$key_child;?>">
                        <div class="form-group mb-3">
                            <label for="">Product ID</label>
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
                            <input type="number" name="totalAmount" value="<?=$getdata['totalAmount'];?>" class="form-control" aria-label="readonly input example" readonly>
                        </div>

                        <div class="form-group mb-3">
                            <label for="">State will Change To:</label> 
                            <select name="state" aria-label="Disabled select example" disabled> 
                                <option selected>Successfully Delivered</option>  
                            </select>
                        </div>

                        <div class="form-group" mb-3>
                            <button type="submit" name="shipped_order" class="btn btn-primary"><i class="fas fa-plus"></i>Order delivered</button>
                        </div>
                        
                    </form>
                    <?php
                        }else{
                            $_SESSION['status'] = "Invalid Order ID";
                            header('Location: Dispatching_Orders.php');
                            exit();
                        }
                    }
                    else{
                        $_SESSION['status'] = "Data Not found";
                        header('Location: Dispatching_Orders.php');
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