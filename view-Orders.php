<?php
session_start();
include('includes/header.php');
?>
<!-- counting products-->
<div class="container">
    <div class="row">
    <div class="col-md-5 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="btn btn-primary btn-sm">Products Ordered :
                        <?php
                        include('dbcon.php');
                        // $ref_table = 'Orders/Pending_Orders';
                        //  = $database->getReference($ref_table)->getSnapshot()->numChildren();
                        if(isset($_GET['id']))
                            {
                            $key_child = $_GET['id'];
                            $ref_table = 'Orders/Cart';
                            $total_count= $database->getReference($ref_table)->getChild($key_child)->getChild('Products')->getSnapshot()->numChildren();;
                            echo $total_count;
                            }else{

                            }
                        
                        ?>
                    </h5>
                </div> 
            </div>
        </div>

        <div class="col-md-12">
            <?php
            if(isset($_SESSION['status']))
            {
                echo "<h5 class='alert-success'>".$_SESSION['status'],"</h5>";
                unset($_SESSION['status']);
            };
            ?>
            <div class="card">
                <div class="card">
                    <h4>Customer Ordered Products:
                    <!-- <a href="PendingOrders.php" class="btn btn-danger float-end">Back</a> -->
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>SI.no</th>
                                <th>Product id</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                
                                <!-- <th>Total Amount</th>
                                <th>Status</th>
                                <th>View</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php include('dbcon.php');
                            
                            if(isset($_GET['id']))
                            {
                            $key_child = $_GET['id'];
                            $ref_table = 'Orders/Cart';
                            $fetchdata = $database->getReference($ref_table)->getChild($key_child)->getChild('Products')->getValue();
                            if($fetchdata > 0)
                            {
                                $i=1;
                                foreach($fetchdata as $key => $row)
                                {
                                    ?>
                                    <tr>
                                        <td><?=$i++;?></td>
                                        <td><?=$row['pid'];?></td>
                                        <td><?=$row['pname'];?></td>
                                        <td><?=$row['price'];?></td>
                                        <td><?=$row['quantity'];?></td>
                                        <!-- <td><?=$row['totalAmount'];?></td> -->
                                        <!-- <td class="btn btn-primary btn-sm"><?=$row['approve'];?></td> -->
                                        <!-- <td>
                                        <a href="to-ApprovedOrders.php?id=<?=$key;?>" class="btn btn-primary btn-sm">Approve</a>
                                        </td>
                                        <td>
                                            <a href="view-pendingOrders.php?id=<?=$key;?>" class="btn btn-primary btn-sm">View</a>
                                        </td>
                                        <td>
                                             <a href="delete-employees.php" class="btn btn-danger btn-sm">Delete</a>
                                             <form action="code.php" method="POST">
                                                <button type="submit" name="decline_btn" value="<?=$key;?>" class="btn btn-danger btn-sm">Decline</button>
                                            </form>
                                        </td> --> 
                                    </tr>
                                    <?php
                                }

                            }else{
                                ?>
                                <tr>
                                    <td colspan="7">No Record Found</td>
                                </tr>
                                <?php
                            }
                        }
                            ?>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<?php
include('includes/footer.php');
?>


    