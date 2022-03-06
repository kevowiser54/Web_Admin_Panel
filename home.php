<?php
include('authentication.php');
include('includes/header.php');
?>
<div class="container">
    <div class="row">
        <div class="col_md_12">
            <?php
            if(isset($_SESSION['status']))
            {
                echo "<h5 class='alert alert-success'".$_SESSION['status']."</h5>";
                unset($_SESSION['status']);
            }
            ?>

            <h2>Home Page</h2>
          
        </div>
        
    <div class="container">
        <div class="row">
        <div class="col-md-2 mb-1">
                <div class="card-header border-info">
                    <i class="fas fa-users-slash " style="font-size:95px;color:lightblue;"></i>
                    <a href="customers_pending.php" class="btn text-info btn-sm"><h6>Pending Customers:</h6>
                        <h4 class="card-title text-danger">
                        <?php
                        include('dbcon.php');
                        $ref_table = 'Customers_Pending';
                        $total_count = $database->getReference($ref_table)->getSnapshot()->numChildren();
                        echo $total_count;
                        ?>
                        </h4>
                    </a>
                </div>
            </div>
            <div class="col-md-2 mb-1">
                <div class="card-header border-success">
                    <i class="fas fa-users " style="font-size:95px;color:green;"></i>
                    <a href="customers_verifed.php" class="btn text-success btn-sm"><h5>Customers:</h5>
                        <h3 class="card-title text-danger">
                        <?php
                        include('dbcon.php');
                        $ref_table = 'Customers';
                        $total_count = $database->getReference($ref_table)->getSnapshot()->numChildren();
                        echo $total_count;
                        ?>
                        </h3>
                    </a>
                </div>
            </div>
            <div class="col-md-2 mb-1">
                <div class="card-header border-secondary">
                    <i class="fas fa-cart-plus " style="font-size:95px;color:pink;"></i>
                    <a href="pendingOrders.php" class="btn text-secondary btn-sm"><h6>Pending Orders:</h6>
                        <h3 class="card-title text-danger">
                        <?php
                        include('dbcon.php');
                        $ref_table = 'Orders/Pending_Orders';
                        $total_count = $database->getReference($ref_table)->getSnapshot()->numChildren();
                        echo $total_count;
                        ?>
                        </h3>
                    </a>
                </div>
            </div>
            <div class="col-md-2 mb-1">
                <div class="card-header border-dark">
                    <i class="fas fa-luggage-cart " style="font-size:95px;color:black;"></i>
                    <a href="Approved_Orders.php" class="btn text-dark btn-sm"><h6>Approved Orders:</h6>
                        <h4 class="card-title text-danger">
                        <?php
                        include('dbcon.php');
                        $ref_table = 'Orders/Approved_Orders';
                        $total_count = $database->getReference($ref_table)->getSnapshot()->numChildren();
                        echo $total_count;
                        ?>
                        </h4>
                    </a>
                </div>
            </div>
            
            <div class="col-md-2 mb-1">
                <div class="card-header border-primary">
                    <i class="fas fa-truck-moving" style="font-size:95px;color:purple;"></i>
                    <a href="Dispatching_Orders.php" class="btn text-purple btn-sm"><h6>Dispatching Orders:</h6>
                        <h3 class="card-title text-danger">
                        <?php
                        include('dbcon.php');
                        $ref_table = 'Orders/Dispatching';
                        $total_count = $database->getReference($ref_table)->getSnapshot()->numChildren();
                        echo $total_count;
                        ?>
                        </h3>
                    </a>
                </div>
            </div>
            <div class="col-md-2 mb-1">
                <div class="card-header border-primary">
                    <i class="fas fa-store-alt " style="font-size:95px;color:lightblue;"></i>
                    <a href="Shipped_Orders.php" class="btn text-primary btn-sm"><h6>Delivered Orders:</h6>
                        <h3 class="card-title text-danger">
                        <?php
                        include('dbcon.php');
                        $ref_table = 'Orders/Shipped';
                        $total_count = $database->getReference($ref_table)->getSnapshot()->numChildren();
                        echo $total_count;
                        ?>
                        </h3>
                    </a>
                </div>
            </div>
            <div class="col-md-2 mb-1">
                <div class="card-header border-secondary">
                    <i class="fas fa-people-carry " style="font-size:95px;color:grey;"></i>
                    <a href="index.php" class="btn text-secondary btn-sm"><h5>Employees:</h5>
                        <h3 class="card-title text-danger">
                        <?php
                        include('dbcon.php');
                        $ref_table = 'Employees';
                        $total_count = $database->getReference($ref_table)->getSnapshot()->numChildren();
                        echo $total_count;
                        ?>
                        </h3>
                    </a>
                </div>
            </div>
            <div class="col-md-2 mb-1">
                <div class="card-header border-danger">
                    <i class="fas fa-hamburger" style="font-size:95px;color:red;"></i>
                    <a href="products.php" class="btn text-danger btn-sm"><h5>Products:</h5>
                        <h3 class="card-title text-danger">
                        <?php
                        include('dbcon.php');
                        $ref_table = 'All_Products/amana';
                        $total_count = $database->getReference($ref_table)->getSnapshot()->numChildren();
                        $ref_table2 = 'All_Products/cowfeed';
                        $total_count2 = $database->getReference($ref_table2)->getSnapshot()->numChildren();
                        $ref_table3 = 'All_Products/exengano';
                        $total_count3 = $database->getReference($ref_table3)->getSnapshot()->numChildren();
                        $ref_table4 = 'All_Products/famila';
                        $total_count4 = $database->getReference($ref_table4)->getSnapshot()->numChildren();
                        $ref_table5 = 'All_Products/fishfeed';
                        $total_count5 = $database->getReference($ref_table5)->getSnapshot()->numChildren();
                        $ref_table6 = 'All_Products/jogoo';
                        $total_count6 = $database->getReference($ref_table6)->getSnapshot()->numChildren();
                        $ref_table7 = 'All_Products/pigfeed';
                        $total_count7 = $database->getReference($ref_table7)->getSnapshot()->numChildren();
                        $ref_table8 = 'All_Products/poultryfeed';
                        $total_count8 = $database->getReference($ref_table8)->getSnapshot()->numChildren();
                        $total = $total_count + $total_count2 + $total_count3 + $total_count4 + $total_count5 + $total_count6 + $total_count7 + $total_count8;
                        echo $total
                        ?>
                        </h3>
                    </a>
                </div>
            </div>
            <div class="col-md-2 mb-1">
                <div class="card-header border-warning">
                    <i class="fas fa-money-check-alt " style="font-size:95px;color:brown;"></i>
                    <a href="payment.php" class="btn text-warning btn-sm"><h6>Payments Record:</h6>
                        <h4 class="card-title text-danger">
                        <?php
                        include('dbcon.php');
                        $ref_table = 'Payment';
                        $total_count = $database->getReference($ref_table)->getSnapshot()->numChildren();
                        echo $total_count;
                        ?>
                        </h4>
                    </a>
                </div>
            </div>
            <div class="col-md-2 mb-1">
                <div class="card-header border-warning">
                    <i class="fas fa-journal-whills " style="font-size:95px;color: lightgreen;"></i>
                    <a href="suppliers.php" class="btn text-success btn-sm"><h6>Suppliers Record:</h6>
                        <h4 class="card-title text-danger">
                        <?php
                        include('dbcon.php');
                        $ref_table = 'Payment';
                        $total_count = $database->getReference($ref_table)->getSnapshot()->numChildren();
                        echo $total_count;
                        ?>
                        </h4>
                    </a>
                </div>
            </div>
        </div>
    </div>
  
</div>
<?php
include('includes/footer.php');
?>