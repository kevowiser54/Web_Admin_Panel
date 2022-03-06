<?php
// session_start();
include('authentication.php');
include('includes/header.php');
?>
<!-- counting products-->
<div class="container">
    <div class="row">
        <div class="col-md-15 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="btn btn-primary btn-sm">Products :
                        <?php
                        include('dbcon.php');
                        $ref_table = 'Products';
                        $total_count = $database->getReference($ref_table)->getSnapshot()->numChildren();
                        echo $total_count;
                        ?>
                    </h5>
                    <div class="input-group mb-3">
                         <input id="myInput" onkeyup="myFunction()" class="form-control" type ="text" placeholder="Search product name" aria-label="Search">
                         <button class="btn btn-outline-success" type="submit">Search</button>
                    </div>
                </div> 
            </div>
        </div>

        <div class="col-md-12 mb-3">
            <?php
            if(isset($_SESSION['status']))
            {
                echo "<h5 class='alert-success'>".$_SESSION['status'],"</h5>";
                unset($_SESSION['status']);
            };
            ?>
            <div class="card">
                <div class="card">
                    <h4>Products In StocK:
                        <a href="products.php" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>SI.no</th>
                                <th>Product ID</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Category</th>
                                <th>Quantity</th>
                                <!-- <th>Image</th>                                 -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php include('dbcon.php');
                            // if($ref_table = 'All_Products/amana'){
                            $ref_table = 'All_Products/amana';
                            $fetchdata = $database->getReference($ref_table)->getValue();
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
                                        <td><?=$row['description'];?></td>
                                        <td><?=$row['category'];?></td>
                                        <td><?=$row['quantity'];?></td>
                                        <!-- <td><?=$row['image'];?></td> -->
                                        <!-- <td>
                                            <a href="products_view.php?id=<?=$key;?>" class="btn btn-primary btn-sm "><i class="fas fa-edit"></i>Edit</a>
                                        </td> -->
                                        <!-- <td>
                                            <form action="code.php" method="POST">
                                                <button type="submit" name="deleteproduct_btn" value="<?=$key;?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i>Delete</button>
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
                        // }else if($ref_table = 'All_Products/cowfeed'){
                            $ref_table2 = 'All_Products/cowfeed';
                            $fetchdata2 = $database->getReference($ref_table2)->getValue();
                            if($fetchdata2 > 0)
                            {
                                $i=1;
                                foreach($fetchdata2 as $key => $row)
                                {
                                    ?>
                                    <tr>
                                        <td><?=$i++;?></td>
                                        <td><?=$row['pid'];?></td>
                                        <td><?=$row['pname'];?></td>
                                        <td><?=$row['price'];?></td>
                                        <td><?=$row['description'];?></td>
                                        <td><?=$row['category'];?></td>
                                        <td><?=$row['quantity'];?></td>
                                        <!-- <td><?=$row['image'];?></td> -->
                                        <!-- <td>
                                            <a href="products_view.php?id=<?=$key;?>" class="btn btn-primary btn-sm "><i class="fas fa-edit"></i>Edit</a>
                                        </td> -->
                                        <!-- <td>
                                            <form action="code.php" method="POST">
                                                <button type="submit" name="deleteproduct_btn" value="<?=$key;?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i>Delete</button>
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

                        // }else if($ref_table = 'All_Products/exengano'){
                            $ref_table3 = 'All_Products/exengano';
                            $fetchdata3 = $database->getReference($ref_table3)->getValue();
                            if($fetchdata3 > 0)
                            {
                                $i=1;
                                foreach($fetchdata3 as $key => $row)
                                {
                                    ?>
                                    <tr>
                                        <td><?=$i++;?></td>
                                        <td><?=$row['pid'];?></td>
                                        <td><?=$row['pname'];?></td>
                                        <td><?=$row['price'];?></td>
                                        <td><?=$row['description'];?></td>
                                        <td><?=$row['category'];?></td>
                                        <td><?=$row['quantity'];?></td>
                                        <!-- <td><?=$row['image'];?></td> -->
                                        <!-- <td>
                                            <a href="products_view.php?id=<?=$key;?>" class="btn btn-primary btn-sm "><i class="fas fa-edit"></i>Edit</a>
                                        </td> -->
                                        <!-- <td>
                                            <form action="code.php" method="POST">
                                                <button type="submit" name="deleteproduct_btn" value="<?=$key;?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i>Delete</button>
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

                        // }else if($ref_table = 'All_Products/famila'){
                            $ref_table4 = 'All_Products/famila';
                            $fetchdata4 = $database->getReference($ref_table4)->getValue();
                            if($fetchdata4 > 0)
                            {
                                $i=1;
                                foreach($fetchdata4 as $key => $row)
                                {
                                    ?>
                                    <tr>
                                        <td><?=$i++;?></td>
                                        <td><?=$row['pid'];?></td>
                                        <td><?=$row['pname'];?></td>
                                        <td><?=$row['price'];?></td>
                                        <td><?=$row['description'];?></td>
                                        <td><?=$row['category'];?></td>
                                        <td><?=$row['quantity'];?></td>
                                        <!-- <td><?=$row['image'];?></td> -->
                                        <!-- <td>
                                            <a href="products_view.php?id=<?=$key;?>" class="btn btn-primary btn-sm "><i class="fas fa-edit"></i>Edit</a>
                                        </td> -->
                                        <!-- <td>
                                            <form action="code.php" method="POST">
                                                <button type="submit" name="deleteproduct_btn" value="<?=$key;?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i>Delete</button>
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

                        // }else if($ref_table = 'All_Products/fishfeed'){
                            $ref_table5 = 'All_Products/fishfeed';
                            $fetchdata5 = $database->getReference($ref_table5)->getValue();
                            if($fetchdata5 > 0)
                            {
                                $i=1;
                                foreach($fetchdata5 as $key => $row)
                                {
                                    ?>
                                    <tr>
                                        <td><?=$i++;?></td>
                                        <td><?=$row['pid'];?></td>
                                        <td><?=$row['pname'];?></td>
                                        <td><?=$row['price'];?></td>
                                        <td><?=$row['description'];?></td>
                                        <td><?=$row['category'];?></td>
                                        <td><?=$row['quantity'];?></td>
                                        <!-- <td><?=$row['image'];?></td> -->
                                        <!-- <td>
                                            <a href="products_view.php?id=<?=$key;?>" class="btn btn-primary btn-sm "><i class="fas fa-edit"></i>Edit</a>
                                        </td> -->
                                        <!-- <td>
                                            <form action="code.php" method="POST">
                                                <button type="submit" name="deleteproduct_btn" value="<?=$key;?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i>Delete</button>
                                            </form> -->
                                        <!-- </td> -->
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

                        // }else if($ref_table = 'All_Products/jogoo'){
                            $ref_table6 = 'All_Products/jogoo';
                            $fetchdata6 = $database->getReference($ref_table6)->getValue();
                            if($fetchdata6 > 0)
                            {
                                $i=1;
                                foreach($fetchdata6 as $key => $row)
                                {
                                    ?>
                                    <tr>
                                        <td><?=$i++;?></td>
                                        <td><?=$row['pid'];?></td>
                                        <td><?=$row['pname'];?></td>
                                        <td><?=$row['price'];?></td>
                                        <td><?=$row['description'];?></td>
                                        <td><?=$row['category'];?></td>
                                        <td><?=$row['quantity'];?></td>
                                        <!-- <td><?=$row['image'];?></td> -->
                                        <!-- <td>
                                            <a href="products_view.php?id=<?=$key;?>" class="btn btn-primary btn-sm "><i class="fas fa-edit"></i>Edit</a>
                                        </td> -->
                                        <!-- <td>
                                            <form action="code.php" method="POST">
                                                <button type="submit" name="deleteproduct_btn" value="<?=$key;?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i>Delete</button>
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

                        // }else if($ref_table7 = 'All_Products/pigfeed'){
                            $ref_table7 = 'All_Products/pigfeed';
                            $fetchdata7 = $database->getReference($ref_table7)->getValue();
                            if($fetchdata7 > 0)
                            {
                                $i=1;
                                foreach($fetchdata7 as $key => $row)
                                {
                                    ?>
                                    <tr>
                                        <td><?=$i++;?></td>
                                        <td><?=$row['pid'];?></td>
                                        <td><?=$row['pname'];?></td>
                                        <td><?=$row['price'];?></td>
                                        <td><?=$row['description'];?></td>
                                        <td><?=$row['category'];?></td>
                                        <td><?=$row['quantity'];?></td>
                                        <!-- <td><?=$row['image'];?></td> -->
                                        <!-- <td>
                                            <a href="products_view.php?id=<?=$key;?>" class="btn btn-primary btn-sm "><i class="fas fa-edit"></i>Edit</a>
                                        </td> -->
                                        <!-- <td>
                                            <form action="code.php" method="POST">
                                                <button type="submit" name="deleteproduct_btn" value="<?=$key;?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i>Delete</button>
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

                        // }else if($ref_table8 = 'All_Products/poultryfeed'){
                            $ref_table8 = 'All_Products/poultryfeed';
                            $fetchdata8 = $database->getReference($ref_table8)->getValue();
                            if($fetchdata8 > 0)
                            {
                                $i=1;
                                foreach($fetchdata8 as $key => $row)
                                {
                                    ?>
                                    <tr>
                                        <td><?=$i++;?></td>
                                        <td><?=$row['pid'];?></td>
                                        <td><?=$row['pname'];?></td>
                                        <td><?=$row['price'];?></td>
                                        <td><?=$row['description'];?></td>
                                        <td><?=$row['category'];?></td>
                                        <td><?=$row['quantity'];?></td>
                                        <!-- <td><?=$row['image'];?></td> -->
                                        <!-- <td>
                                            <a href="products_view.php?id=<?=$key;?>" class="btn btn-primary btn-sm "><i class="fas fa-edit"></i>Edit</a>
                                        </td> -->
                                        <!-- <td>
                                            <form action="code.php" method="POST">
                                                <button type="submit" name="deleteproduct_btn" value="<?=$key;?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i>Delete</button>
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

                        // }
                            ?>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<script>
function myFunction(){
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");

    for(i = 0; i < tr.length; i++){
        td = tr[i].getElementsByTagName("td")[2];
        if(td){
            txtValue = td.textContent || td.innerText;
            if(txtValue.toUpperCase().indexOf(filter) > -1){
                tr[i].style.dsplay = "";
            }else{
                tr[i].style.display = "none";
            }
        }
    }
}
</script>
<?php
include('includes/footer.php');
?>


    