<?php 
    include "Connect.php";

    echo "<b>All items</b><br><br>";
    
    $sqlSelect ="SELECT items.name,items.price FROM items";
    echo "<table border='1'>";
    echo "<tr><td>Name items</td><td>Price items</td></tr>";
    foreach($conn->query($sqlSelect) as $row)
    {
        $itemName = $row['name'];
        echo "<tr><td>$itemName</td><td>$row[1]</td></tr>";
    }
    echo "</table>";
    
    echo "<br><b>Items above $30</b><br><br>";
    $sqlSelect ="SELECT items.name,items.price FROM items
    WHERE items.price > 30";

    echo "<table border='1'>";
    echo "<tr><td>Name items</td><td>Price items</td></tr>";
    foreach($conn->query($sqlSelect) as $row)
    {
        $itemName = $row['name'];
        echo "<tr><td>$itemName</td><td>$row[1]</td></tr>";
    }
    echo "</table>";

?>
