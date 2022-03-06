<?php
include('includes/header.php');
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card">
                    <h4>Edit & Update Product Data
                        <a href="products.php" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    
                    <?php
                    
                    include('dbcon.php');
                    if(isset($_GET['id']))
                    {
                        $key_child = $_GET['id'];
                        $ref_table = 'All_Products/amana';
                        $getdata = $database->getReference($ref_table)->getChild($key_child)->getValue();

                        if($getdata > 0)
                        {
                            ?>                          
                        <form action="code.php" method="POST">

                        <input type="hidden" name="key" value="<?=$key_child;?>">

                        <div class="form-group mb-3">
                            <label for="">Product Name</label>
                            <input type="text" name="pname" value="<?=$getdata['pname'];?>" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Product Quantity</label>
                            <input type="text" name="quantity" value="<?=$getdata['quantity'];?>" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Product Price</label>
                            <input type="number" name="price" value="<?=$getdata['price'];?>" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Product Description</label>
                            <input type="text" name="description" value="<?=$getdata['description'];?>" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Product Category</label>
                            <input type="text" name="category" value="<?=$getdata['category'];?>" class="form-control">
                        </div>

                        <div class="form-group" mb-3>
                            <button type="submit" name="update_product" class="btn btn-primary fas fa-sync">Update Product</button>
                        </div>
                    </form>
                    <?php
                        }else{
                            $_SESSION['status'] = "Invalid id";
                            header('Location: index.php');
                            exit();
                        }
                        
                    
                    $key_child2 = $_GET['id'];
                        $ref_table2 = 'All_Products/cowfeed';
                        $getdata = $database->getReference($ref_table2)->getChild($key_child2)->getValue();

                        if($getdata2 > 0)
                        {
                            ?>                          
                        <form action="code.php" method="POST">

                        <input type="hidden" name="key" value="<?=$key_child;?>">

                        <div class="form-group mb-3">
                            <label for="">Product Name</label>
                            <input type="text" name="pname" value="<?=$getdata['pname'];?>" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Product Quantity</label>
                            <input type="text" name="quantity" value="<?=$getdata['quantity'];?>" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Product Price</label>
                            <input type="number" name="price" value="<?=$getdata['price'];?>" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Product Description</label>
                            <input type="text" name="description" value="<?=$getdata['description'];?>" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Product Category</label>
                            <input type="text" name="category" value="<?=$getdata['category'];?>" class="form-control">
                        </div>

                        <div class="form-group" mb-3>
                            <button type="submit" name="update_product" class="btn btn-primary fas fa-sync">Update Product</button>
                        </div>
                    </form>
                    <?php
                        }else{
                            $_SESSION['status'] = "Invalid id";
                            header('Location: index.php');
                            exit();
                        }
                    
                    
                    $key_child3 = $_GET['id'];
                        $ref_table3 = 'All_Products/exengano';
                        $getdata3 = $database->getReference($ref_table3)->getChild($key_child3)->getValue();

                        if($getdata3 > 0)
                        {
                            ?>                          
                        <form action="code.php" method="POST">

                        <input type="hidden" name="key" value="<?=$key_child;?>">

                        <div class="form-group mb-3">
                            <label for="">Product Name</label>
                            <input type="text" name="pname" value="<?=$getdata['pname'];?>" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Product Quantity</label>
                            <input type="text" name="quantity" value="<?=$getdata['quantity'];?>" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Product Price</label>
                            <input type="number" name="price" value="<?=$getdata['price'];?>" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Product Description</label>
                            <input type="text" name="description" value="<?=$getdata['description'];?>" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Product Category</label>
                            <input type="text" name="category" value="<?=$getdata['category'];?>" class="form-control">
                        </div>

                        <div class="form-group" mb-3>
                            <button type="submit" name="update_product" class="btn btn-primary fas fa-sync">Update Product</button>
                        </div>
                    </form>
                    <?php
                        }else{
                            $_SESSION['status'] = "Invalid id";
                            header('Location: index.php');
                            exit();
                        }
                    
                    
                    $key_child4 = $_GET['id'];
                        $ref_table4 = 'All_Products/famila';
                        $getdata4 = $database->getReference($ref_table4)->getChild($key_child4)->getValue();

                        if($getdata4 > 0)
                        {
                            ?>                          
                        <form action="code.php" method="POST">

                        <input type="hidden" name="key" value="<?=$key_child;?>">

                        <div class="form-group mb-3">
                            <label for="">Product Name</label>
                            <input type="text" name="pname" value="<?=$getdata['pname'];?>" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Product Quantity</label>
                            <input type="text" name="quantity" value="<?=$getdata['quantity'];?>" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Product Price</label>
                            <input type="number" name="price" value="<?=$getdata['price'];?>" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Product Description</label>
                            <input type="text" name="description" value="<?=$getdata['description'];?>" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Product Category</label>
                            <input type="text" name="category" value="<?=$getdata['category'];?>" class="form-control">
                        </div>

                        <div class="form-group" mb-3>
                            <button type="submit" name="update_product" class="btn btn-primary fas fa-sync">Update Product</button>
                        </div>
                    </form>
                    <?php
                        }else{
                            $_SESSION['status'] = "Invalid id";
                            header('Location: index.php');
                            exit();
                        }
                
                    $key_child5 = $_GET['id'];
                        $ref_table5 = 'All_Products/fishfeed';
                        $getdata5 = $database->getReference($ref_table5)->getChild($key_child5)->getValue();

                        if($getdata5 > 0)
                        {
                            ?>                          
                        <form action="code.php" method="POST">

                        <input type="hidden" name="key" value="<?=$key_child;?>">

                        <div class="form-group mb-3">
                            <label for="">Product Name</label>
                            <input type="text" name="pname" value="<?=$getdata['pname'];?>" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Product Quantity</label>
                            <input type="text" name="quantity" value="<?=$getdata['quantity'];?>" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Product Price</label>
                            <input type="number" name="price" value="<?=$getdata['price'];?>" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Product Description</label>
                            <input type="text" name="description" value="<?=$getdata['description'];?>" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Product Category</label>
                            <input type="text" name="category" value="<?=$getdata['category'];?>" class="form-control">
                        </div>

                        <div class="form-group" mb-3>
                            <button type="submit" name="update_product" class="btn btn-primary fas fa-sync">Update Product</button>
                        </div>
                    </form>
                    <?php
                        }else{
                            $_SESSION['status'] = "Invalid id";
                            header('Location: index.php');
                            exit();
                        }
                    
                    $key_child6 = $_GET['id'];
                        $ref_table6 = 'All_Products/jogoo';
                        $getdata6 = $database->getReference($ref_table6)->getChild($key_child6)->getValue();

                        if($getdata6 > 0)
                        {
                            ?>                          
                        <form action="code.php" method="POST">

                        <input type="hidden" name="key" value="<?=$key_child;?>">

                        <div class="form-group mb-3">
                            <label for="">Product Name</label>
                            <input type="text" name="pname" value="<?=$getdata['pname'];?>" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Product Quantity</label>
                            <input type="text" name="quantity" value="<?=$getdata['quantity'];?>" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Product Price</label>
                            <input type="number" name="price" value="<?=$getdata['price'];?>" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Product Description</label>
                            <input type="text" name="description" value="<?=$getdata['description'];?>" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Product Category</label>
                            <input type="text" name="category" value="<?=$getdata['category'];?>" class="form-control">
                        </div>

                        <div class="form-group" mb-3>
                            <button type="submit" name="update_product" class="btn btn-primary fas fa-sync">Update Product</button>
                        </div>
                    </form>
                    <?php
                        }else{
                            $_SESSION['status'] = "Invalid id";
                            header('Location: index.php');
                            exit();
                        }
                    
                    $key_child7 = $_GET['id'];
                        $ref_table7 = 'All_Products/pigfeed';
                        $getdata7 = $database->getReference($ref_table7)->getChild($key_child7)->getValue();

                        if($getdata7 > 0)
                        {
                            ?>                          
                        <form action="code.php" method="POST">

                        <input type="hidden" name="key" value="<?=$key_child7;?>">

                        <div class="form-group mb-3">
                            <label for="">Product Name</label>
                            <input type="text" name="pname" value="<?=$getdata['pname'];?>" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Product Quantity</label>
                            <input type="text" name="quantity" value="<?=$getdata['quantity'];?>" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Product Price</label>
                            <input type="number" name="price" value="<?=$getdata['price'];?>" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Product Description</label>
                            <input type="text" name="description" value="<?=$getdata['description'];?>" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Product Category</label>
                            <input type="text" name="category" value="<?=$getdata['category'];?>" class="form-control">
                        </div>

                        <div class="form-group" mb-3>
                            <button type="submit" name="update_product" class="btn btn-primary fas fa-sync">Update Product</button>
                        </div>
                    </form>
                    <?php
                        }else{
                            $_SESSION['status'] = "Invalid id";
                            header('Location: index.php');
                            exit();
                        }
                
                    $key_child8 = $_GET['id'];
                        $ref_table8 = 'All_Products/poultryfeed';
                        $getdata8 = $database->getReference($ref_table8)->getChild($key_child8)->getValue();

                        if($getdata8 > 0)
                        {
                            ?>                          
                        <form action="code.php" method="POST">

                        <input type="hidden" name="key" value="<?=$key_child8;?>">

                        <div class="form-group mb-3">
                            <label for="">Product Name</label>
                            <input type="text" name="pname" value="<?=$getdata['pname'];?>" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Product Quantity</label>
                            <input type="text" name="quantity" value="<?=$getdata['quantity'];?>" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Product Price</label>
                            <input type="number" name="price" value="<?=$getdata['price'];?>" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Product Description</label>
                            <input type="text" name="description" value="<?=$getdata['description'];?>" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Product Category</label>
                            <input type="text" name="category" value="<?=$getdata['category'];?>" class="form-control">
                        </div>

                        <div class="form-group" mb-3>
                            <button type="submit" name="update_product" class="btn btn-primary fas fa-sync">Update Product</button>
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