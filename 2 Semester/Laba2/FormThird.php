<?php 

    include "connect.php";

    $FirstPrice = $_POST["FirstPrice"];
    $EndPrice = $_POST["EndPrice"];

    print "<table border ='1' align='center'>";
    $PriceStorage = "<tr><th>Name</th><th>Product Price</th><th>Quantity</th> <th>Manufacturer</th><th>Product Category</th><th>reviews</th></tr>";
    $coll = $tbl->find(["Product Price"=>['$gte' => (int)$FirstPrice,'$lte' => (int)$EndPrice]]);
            
    foreach ($coll as $result) {
        $Name = $result['Name'];
        $Price = $result['Product Price'];
        $Quantity = $result['Quantity'];
        $Manufacturer = $result['Manufacturer'];
        $Category = $result['ProductCategory'];
        $reviews = $result['reviews'];

        $PriceStorage = $PriceStorage." <tr><td>$Name</td><td>$Price</td><td>$Quantity</td> <td>$Manufacturer</td><td>$Category</td><td>$reviews</td> </tr>";
    }
    print $PriceStorage;
    $Price = $FirstPrice.$EndPrice;   
    print"</table>";
    
    print"<script>localStorage.setItem('$Price','$PriceStorage')</script>";
    print"<input type='button' value ='Return' onclick = 'history.back(); return false;'/>";
?>
