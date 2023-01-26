<?php 

    include "Connect.php";
    echo "<b>Goods of the selected category</b><br><br>";
       
    $sqlSelect = "SELECT  category.name,items.name FROM items
    INNER JOIN category on items.FID_Category = category.ID_Category";

    echo "<table border='1'>";
    echo "<tr><td>Name category</td><td>Name item</td></tr>";
    foreach($conn->query($sqlSelect) as $row)
    {
        $itemName = $row['name'];
        echo "<tr><td>$itemName</td><td>$row[0]</td></tr>";
    }
    echo "</table>";
?>