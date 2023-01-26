<?php 
    include "Connect.php";

    $db = 'OnlineStore';
    $Manufacturer = $_POST['Manufacturer'];
    try{
        $sqlSelect = "SELECT $db.vendors.name, $db.items.name FROM items INNER JOIN vendors on 
        $db.items.FID_Vendor = $db.vendors.ID_Vendors WHERE $db.vendors.name=:Manufacturer";
        
        $sth = $conn->prepare($sqlSelect);

        $sth->execute(array(':Manufacturer' => $Manufacturer));
        $temporary_table = $sth->fetchAll(PDO::FETCH_NUM);

        foreach ($temporary_table as $row) {
            print " <tr><td>$row[0]</td><td>$row[1]</td></tr>";
          }

    } catch (PDOException $e) {
        die("Error!:" . $e->getMessage() . "<br>");
    }
    
?>
