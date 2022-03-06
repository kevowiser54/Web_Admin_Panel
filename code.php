<?php
session_start();
include('dbcon.php');
//Deleting Employee data
if(isset($_POST['delete_btn'])){
    $del_id = $_POST['delete_btn'];

    $ref_table = 'Employees/'.$del_id;
    $deletequery_result = $database ->getReference($ref_table)->remove();

    if($deletequery_result)
    {
     $_SESSION['status'] = "Employee Deleted Successfully";
     header('Location: index.php');   
    }
    else{
     $_SESSION['status'] = "Failed to Delete Employee Data";
     header('Location: index.php'); 
    }
}

//Delete Customer 
if(isset($_POST['delete_customer'])){
    $del_id = $_POST['delete_customer'];

    $ref_table = 'Customers/'.$del_id;
    $deletequery_result = $database ->getReference($ref_table)->remove();

    if($deletequery_result)
    {
     $_SESSION['status'] = "Customer Deleted Successfully";
     header('Location: customers_verifed.php');   
    }
    else{
     $_SESSION['status'] = "Failed to Delete Customer";
     header('Location: customers_verifed.php'); 
    }
}

//Deleting Supplier data
if(isset($_POST['delete_supplier'])){
    $del_id = $_POST['delete_supplier'];

    $ref_table = 'Supplier/'.$del_id;
    $deletequery_result = $database ->getReference($ref_table)->remove();

    if($deletequery_result)
    {
     $_SESSION['status'] = "Supplier Deleted Successfully";
     header('Location: suppliers.php');   
    }
    else{
     $_SESSION['status'] = "Failed to Delete Supplier Data";
     header('Location: suppliers.php'); 
    }
}

//Updating employee data
if(isset($_POST['update_employees'])){
    $key = $_POST['key'];
    $username = $_POST['username'];
    $department = $_POST['department'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $password = $_POST['password'];

    $updateData =[
        'username'=>$username,
        'department'=>$department,
        'email'=>$email,
        'contact'=>$contact,
        'password'=>$password,
    ];
    $ref_table = 'Employees/'.$key;
    $updatequery_result = $database->getReference($ref_table)->update($updateData);

    if($updatequery_result)
    {
     $_SESSION['status'] = "Employee Data Updated Successfully";
     header('Location: index.php');   
    }
    else{
     $_SESSION['status'] = "Failed to Update Employee Data";
     header('Location: index.php'); 
    }
}

//Update Products in database
if(isset($_POST['update_product'])){
    $key = $_POST['key'];
    $pname = $_POST['pname'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $category= $_POST['category'];
    $quantity = $_POST['quantity'];

    $updateData =[
        'pname'=>$pname,
        'price'=>$price,
        'description'=>$description,
        'category'=>$category,
        'quantity'=>$quantity,
    ];
    $ref_table = 'Products/'.$key;
    $updatequery_result = $database->getReference($ref_table)->update($updateData);

    if($updatequery_result)
    {
     $_SESSION['status'] = "Product Updated Successfully";
     header('Location: products.php');   
    }
    else{
     $_SESSION['status'] = "Failed to Update Product";
     header('Location: products.php'); 
    }
}

//Deleting Product
if(isset($_POST['deleteproduct_btn'])){
    $del_id = $_POST['deleteproduct_btn'];

    $ref_table = 'Products/'.$del_id;
    $deletequery_result = $database ->getReference($ref_table)->remove();

    if($deletequery_result)
    {
     $_SESSION['status'] = "Product Deleted Successfully";
     header('Location: products.php');   
    }
    else{
     $_SESSION['status'] = "Failed to Delete Product Data";
     header('Location: products.php'); 
    }
}

// registering employees to database
if(isset($_POST['save_employees'])){
    $username = $_POST['username'];
    $department = $_POST['department'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $password = $_POST['password'];
    

    $postData =[
        'username'=>$username,
        'department'=>$department,
        'email'=>$email,
        'contact'=>$contact,
        'password'=>$password,
        
    ];

    // $userProperties = [
    //     'email' => $email,
    //     'emailVerified' => false,
    //     'phoneNumber' => '+254'.$contact,
    //     'password' => $password,
    //     'displayName' => $username,
    //     // 'photoUrl' => 'http://www.example.com/12345678/photo.png',
    //     'disabled' => false,
    // ];
    
    // $createdUser = $auth->createUser($userProperties);

    // if($createdUser)
    // {
    //     $_SESSION['status'] = "Employee Registered Successfully";
    //     header('Location: add-contact.php');
    //     exit();
    // }else{
    // $_SESSION['status'] = "Failed to Registered employee";
    //  header('Location: add-contact.php');
    //  exit();
    // }
    $ref_table = "Employees/$contact";
    $postRef_result = $database->getReference($ref_table)->set($postData);

    if($postRef_result)
    {
     $_SESSION['status'] = "Employee Data Added Successfully";
     header('Location: index.php');   
    }
    else{
     $_SESSION['status'] = "Failed to Add Employee data";
     header('Location: index.php'); 
    }
}

// Pending Customers to verified to database
if(isset($_POST['verify_customer'])){
    $key = $_POST['key'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $password = $_POST['password'];
    // $county = $_POST['county'];
    // $image = $_POST['image'];

    $updateData =[
        'username'=>$username,
        'email'=>$email,
        'contact'=>$contact,
        'password'=>$password,
        // 'county'=>"",
        // 'image'=>"",
    ];
    $ref_table = 'Customers/'.$key;
    $updatequery_result = $database->getReference($ref_table)->update($updateData);

    if($updatequery_result)
    { 
        $ref_tablee = 'Customers_Pending/'.$key;
        $deletequery_result = $database ->getReference($ref_tablee)->remove();
        if($deletequery_result)
        {
            $_SESSION['status'] = "Customer Approved Successfully";
            header('Location: customers_pending.php');   
        }else{

        }
    }
    else{
     $_SESSION['status'] = "Failed to Approve customer";
     header('Location: customers_pending.php'); 
    }
}


if(isset($_POST['declining_customer'])){
    $key = $_POST['key'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $password = $_POST['password'];
    // $county = $_POST['county'];
    // $image = $_POST['image'];

    $updateData =[
        'username'=>$username,
        'email'=>$email,
        'contact'=>$contact,
        'password'=>$password,
        // 'county'=>"",
        // 'image'=>"",
    ];
    $ref_tablee = 'Customers_Pending/'.$key;
    $deleteequery_result = $database ->getReference($ref_tablee)->remove();
    if($deleteequery_result)
    {
         $_SESSION['status'] = "Customer Declined Successfully";
         header('Location: customers_pending.php');   
        }
        else{
            $_SESSION['status'] = "Failed to decline";
            header('Location: customers_pending.php'); 
        }
}


// Pending orders to Approved Orders to database
if(isset($_POST['approve_order'])){
    $key = $_POST['key'];
    $contact = $_POST['contact'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $county = $_POST['county'];
    $totalAmount = $_POST['totalAmount'];
    $state = $_POST['state'];
    

    $updateData =[
        'contact'=>$contact,
        'name'=>$name,
        'address'=>$address,
        'county'=>$county,
        'totalAmount'=>$totalAmount,
        'state'=>"Approved(wait Dispatch)",
        'date'=>strftime("%b %d, %Y"),
        'time'=>strftime("%H:%M:%S"),
        
    ];
    $ref_table = 'Orders/Approved_Orders/'.$key;
    $updatequery_result = $database->getReference($ref_table)->update($updateData);

    if($updatequery_result)
    { 
        $updateeData =[
             'state'=>"Approved(wait Dispatch)",
        ];
        $ref_table = 'Shipping/'.$key;
        $updateequery_result = $database->getReference($ref_table)->update($updateeData);
        if($updateequery_result)
            {
                $ref_tablee = 'Orders/Pending_Orders/'.$key;
                $deletequery_result = $database ->getReference($ref_tablee)->remove();
                if($deletequery_result)
                {
                $_SESSION['status'] = "Order Approved Successfully";
                header('Location: pendingOrders.php');
            }else{

                }  
        }else{

        }
    }
    else{
     $_SESSION['status'] = "Failed to Approve Order";
     header('Location: pendingOrders.php'); 
    }
}
//Declining Pending Order
if(isset($_POST['declining_btn'])){
    $key = $_POST['key'];
    $contact = $_POST['contact'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $county = $_POST['county'];
    $totalAmount = $_POST['totalAmount'];
    $state = $_POST['state'];

    $updateeData =[
        'contact'=>$contact,
        'name'=>$name,
        'address'=>$address,
        'county'=>$county,
        'totalAmount'=>$totalAmount,
        'state'=>"Declined Order",
   ];
   $ref_table = 'Shipping/'.$key;
   $updatequery_result = $database->getReference($ref_table)->update($updateeData);
   if($updatequery_result)
            {
                $ref_tablee = 'Orders/Pending_Orders/'.$key;
                $deleteequery_result = $database ->getReference($ref_tablee)->remove();
                if($deleteequery_result)
                {
                    $_SESSION['status'] = "Order Declined Successfully";
                    header('Location: pendingOrders.php');   
                }
                else{
                    $_SESSION['status'] = "Failed to decline";
                    header('Location: pendingOrders.php'); 
                }
            }
            else{
                $_SESSION['status'] = "Failed try Again";
                header('Location: pendingOrders.php'); 
            }
}

// approved order to dispatch database
if(isset($_POST['dispatch_order'])){
    $key = $_POST['key'];
    $contact = $_POST['contact'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $county = $_POST['county'];
    $totalAmount = $_POST['totalAmount'];
    $driver = $_POST['driver'];
    $state = $_POST['state'];

    $updateData =[
        'contact'=>$contact,
        'name'=>$name,
        'address'=>$address,
        'county'=>$county,
        'totalAmount'=>$totalAmount,
        'driver'=>"Admin",
        'state'=>"Dispatching",

        'date'=>strftime("%b %d, %Y"),
        'time'=>strftime("%H:%M:%S"),
    ];
    $ref_table = 'Orders/Dispatching/'.$key;
    $updatequery_result = $database->getReference($ref_table)->update($updateData);

    if($updatequery_result)
    { 
        $updateeData =[
            'state'=>"Dispatching",
       ];
       $ref_table = 'Shipping/'.$key;
       $updateequery_result = $database->getReference($ref_table)->update($updateeData);
       if($updateequery_result)
           {
               $ref_tablee = 'Orders/Approved_Orders/'.$key;
               $deletequery_result = $database ->getReference($ref_tablee)->remove();
               if($deletequery_result)
               {
                   $_SESSION['status'] = "Dispatching Order Successfully";
                   header('Location: Approved_Orders.php');   
                }else{

                }
            }else{

            }
    }
    else{
     $_SESSION['status'] = "Failed to dispatch";
     header('Location: Approved_Orders.php'); 
    }
}

// dispatching order to Shipped database
if(isset($_POST['shipped_order'])){
    $key = $_POST['key'];
    $contact = $_POST['contact'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $county = $_POST['county'];
    $totalAmount = $_POST['totalAmount'];
    $driver = $_POST['driver'];
    $state = $_POST['state'];
    // $confirmation = $_POST['confirmation'];

    $postData =[
        'contact'=>$contact,
        'name'=>$name,
        'address'=>$address,
        'county'=>$county,
        'totalAmount'=>$totalAmount,
        'driver'=>"Admin",
        'state'=>"Successfully Delivered",
        'confirmation'=>" ",
        'date'=>strftime("%b %d, %Y"),
        'time'=>strftime("%H:%M:%S"),
    ];
    $ref_table = 'Orders/Shipped/'.$key;
    $updatequery_result = $database->getReference($ref_table)->set($postData);

    if($updatequery_result)
    { 
        $updateeData =[
            'state'=>"Successfully Delivered",
            'confirmation'=>" ",
       ];
       $ref_table = 'Shipping/'.$key;
       $updateequery_result = $database->getReference($ref_table)->update($updateeData);
       if($updateequery_result)
           {
               $ref_tablee = 'Orders/Dispatching/'.$key;
               $deletequery_result = $database ->getReference($ref_tablee)->remove();
               if($deletequery_result)
               {
                   $_SESSION['status'] = "Shipped Order Successfully";
                   header('Location: Dispatching_Orders.php');   
                }else{
                    
                }
            }else{

            }

    }
    else{
     $_SESSION['status'] = "Failed try again";
     header('Location: Dispatching_Orders.php'); 
    }
}

// registering Suppliers to database
if(isset($_POST['add_Supplier'])){
    $username = $_POST['full_name'];
    $material = $_POST['material'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $quantity = $_POST['quantity'];
    $price = $_POST['total_Price'];
    $reference = $_POST['reference'];

    $date = $_POST['date'];
    $time = $_POST['time']; 
    
    $postData =[
        'full_name'=>$username,
        'material'=>$material,
        'email'=>$email,
        'contact'=>$contact,
        'quantity'=>$quantity,
        'total_Price'=>$price,
        'reference'=>$reference,
        'receiver'=>"Admin",
        'date'=>strftime("%b %d, %Y"),
        'time'=>strftime("%H:%M:%S"),

        // setlocale(LC_ALL, "hu_HU.UTF8");
            
    ];
    $ref_table = "Supplier/$contact";
    $postRef_result = $database->getReference($ref_table)->set($postData);

    if($postRef_result)
    {
     $_SESSION['status'] = "Supplier Data Added Successfully";
     header('Location: suppliers.php');   
    }
    else{
     $_SESSION['status'] = "Failed to Add Supplier data";
     header('Location: suppliers.php'); 
    }
}

?>