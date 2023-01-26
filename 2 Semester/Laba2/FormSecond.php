<?php 

    include "connect.php";
    echo "<table border='1' align='center'>";
    $ProductCategory = $_POST['ProductCategory'];

    $QuantityStorage = "<tr><td>Name</td><td>Product Price</td><td>Quantity</td><td>Product Category</td></tr>";

    $coll = $tbl->find(["ProductCategory"=> $ProductCategory, "Quantity" => 0],["projection"=>["_id"=>0]]);
    foreach ($coll as $result) 
    {
        $name = $result['Name'];
        $ProductPrice = $result['Product Price'];
        $Quantity = $result['Quantity'];
        $ProductCategory = $result['ProductCategory'];
        $QuantityStorage = $QuantityStorage."<tr><td>$name</td><td>$ProductPrice</td><td>$Quantity</td><td>$ProductCategory</td></tr>";
     
    }
    print $QuantityStorage;

    echo "</table>";
    print"<script>localStorage.setItem('$ProductCategory','$QuantityStorage')</script>";
    
    print"<input type='button' value ='Return' onclick = 'history.back(); return false;'/>";

?>