<nav class="navbar nav-pills navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Unga Company AdminPanel Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                </li>

                <!-- <li class="nav-item">
                    <a class="nav-link" href="a">About</a>
                </li> -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Orders</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="pendingOrders.php">Pending Orders</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="Approved_orders.php">Approved Orders</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="Dispatching_Orders.php">Dispatching Orders</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="Shipped_Orders.php">Shipped Orders</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Customers</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="customers_pending.php">Pending Customers</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="customers_verifed.php">Verified Customers</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Employees</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="add-contact.php">Register Employee</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="index.php">Registered Employees</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="products.php">Products</a>
                </li>
            
                <li class="nav-item">
                    <a class="nav-link" href="payment.php">Payment Made</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Suppliers</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="add_Supplier.php">Register Supplier</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="suppliers.php">Registered Suppliers</a></li>
                    </ul>
                </li>
<!--             
                <li class="nav-item">
                    <a class="nav-link" href="suppliers.php">Suppliers</a>
                </li> -->

            <?php 
            if(!isset($_SESSION['verified_user_id'])) : ?>
                <li class="nav-item">
                    <a class="nav-link" href="loginAdmin.php">Login</a>
                </li>
                
            <?php else : ?> 
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li>
                <?php endif; ?>

            </ul>
        </div>
    </div>
</nav>

    