<?php 
    include "connect.php";
    echo "<table border='1' align='center'>";
    $Names = $_POST['Name'];

    $DataStorage = print "<tr><td>Name</td>
                      <td>Product Price</td>
                      <td>Quantity</td>
                      <td>Manufacturer</td>
                      <td>Product Category</td>
                      <td>reviews</td>
                      <td>Condition</td></tr>";
    $coll = $tbl -> find();
    foreach ($coll as $result) 
    {
        $Name = $result['Name'];
        $ProductPrice = $result['Product Price'];
        $Quantity = $result['Quantity'];
        $Manufacturer = $result['Manufacturer'];
        $ProductCategory = $result['ProductCategory'];
        $reviews = $result['reviews'];
        $Condition = $result['Condition'];
        
        
        $DBStorage = $DBStorage."<tr><td>$Name</td><td>$ProductPrice</td><td>$Quantity</td><td>$Manufacturer</td><td>$ProductCategory</td><td>$reviews</td><td>$Condition</td></tr>";
    }
    print $DBStorage;
    echo "</table>";
    
    print"<script>localStorage.setItem('$Names','$DBStorage')</script>";
    print"<input type='button' value ='Return' onclick = 'history.back(); return false;'/>";
?>