<?php 
    include "Connect.php";
    
    echo "<b>Goods of the selected manufacturer</b><br><br>";

    $sqlSelect = "SELECT items.name, vendors.name FROM items
    INNER JOIN vendors on items.FID_Vendor = vendors.ID_Vendors";

    echo "<table border='1'>";
    echo "<tr><td>Name items</td><td>Name vendor</td></tr>";
    foreach($conn->query($sqlSelect) as $row)
    {
        $itemName = $row['name'];
        echo "<tr><td>$row[0]</td><td>$itemName</td></tr>";
    }
    echo "</table>";
?>
