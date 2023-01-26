<?php 

    include "connect.php";
    
    if (isset($_POST['Manufacturer'])) 
    $Manufacturer = $_POST['Manufacturer'];
        else $Manufacturer = 'MSI';
    $Manufacturer = $_POST['Manufacturer'];
    print "<table border ='1' align='center'>";
   
    $ManufacturerStorage = "<tr><th>Name</th><th>Product Price</th><th>Quantity</th><th>Product Category</th></tr>";   
    $coll=$tbl->find(["Manufacturer"=>$Manufacturer],["projection"=>["_id"=>0]]);
       
    foreach ($coll as $result) 
    {
        $name = $result['Name'];
        $ProductPrice = $result['Product Price'];
        $Quantity = $result['Quantity'];
        $ProductCategory = $result['ProductCategory'];
        $ManufacturerStorage = $ManufacturerStorage."<tr><td>$name</td><td>$ProductPrice</td><td>$Quantity</td><td>$ProductCategory</td></tr>";      
    }
    print $ManufacturerStorage;
    
    echo "</table>";
    print"<script>localStorage.setItem('$Manufacturer','$ManufacturerStorage')</script>";
    
    print"<input type='button' value ='Return' onclick = 'history.back(); return false;'/>";
?>