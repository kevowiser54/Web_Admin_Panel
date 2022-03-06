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
                <div class="card-header">
                    <h5 class="btn btn-primary btn-sm">Orders Shipped :
                        <?php
                        include('dbcon.php');
                        $ref_table = 'Orders/Shipped';
                        $total_count = $database->getReference($ref_table)->getSnapshot()->numChildren();
                        echo $total_count;
                        ?>
                    </h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-10">
                            
                                <div class="input-group mb-3">
                                    <input type="text" id="myInput" onkeyup="myFunction()" class="form-control" name="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-success" type="submit">Search</button>
                                </div>
                            
                        </div>
                    </div>
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
                    <h4>Details of Shipped Orders:
                        <a href="Shipped_Orders.php" class="btn btn-danger float-end">Back</a>
                        <!-- <a href="add-contact.php" class="btn btn-primary float-end">Add Employee</a> -->
                    </h4>
                </div>
                <div class="card-body">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>SI.no</th>
                                <th>Order Id</th>
                                <th>Customer Name</th>
                                <th>County</th>
                                <th>Town</th>
                                <th>Amount Paid (Ksh:)</th>
                                <!-- <th>Date</th> -->
                                 <th>Shipped by</th> 
                                <th>Customer Confirmation</th>                               
                            </tr>
                        </thead>
                        <tbody>
                            <?php include('dbcon.php');
                                $ref_table = 'Orders/Shipped';
                                $fetchdata = $database->getReference($ref_table)->getValue();
                                if($fetchdata > 0)
                                {
                                    $i=1;
                                    foreach($fetchdata as $key => $row)
                                    {
                                        ?>
                                        <tr>
                                            <td><?=$i++;?></td>
                                            <td><?=$row['contact'];?></td>
                                            <td><?=$row['name'];?></td>
                                            <td><?=$row['county'];?></td>
                                            <td><?=$row['address'];?></td>
                                            <td><?=$row['totalAmount'];?></td>
                                        <!-- <td><?=$row['date'];?></td> -->
                                            <td><?=$row['driver'];?></td> 
                                            <td><?=$row['confirmation'];?></td>
                                            <td>
                                                <a href="view-Orders.php?id=<?=$key;?>" class="btn btn-primary btn-sm fas fa-eye">View</a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                }else
                                {
                                    ?>
                                    <tr>
                                        <td colspan="8">No Record Found</td>
                                    </tr>
                                    <?php
                                }
                            
                            ?>
                        </tbody>
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


    