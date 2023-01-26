<?php 
    header('Content-Type: text/xml');
    header('Cache-Control: no-cache, must-revalidate');

    include "Connect.php";
    echo '<?xml version="1.0" encoding="utf8" ?>';
    echo "<root>";
    
    $db = 'OnlineStore';
    if (isset($_POST['FirstPrice'])) $FirstPrice = $_POST['FirstPrice'];
    else $FirstPrice = '25';
    if (isset($_POST['EndPrice'])) $EndPrice = $_POST['EndPrice'];
    else $EndPrice = '200';

    try {
        $sqlSelect ="SELECT $db.items.name, $db.items.price, $db.items.quantity FROM $db.items WHERE $db.items.price BETWEEN :FirstPrice and :EndPrice";
        
        $sth = $conn->prepare($sqlSelect);
        $sth->execute(array('FirstPrice' => $FirstPrice, 'EndPrice' => $EndPrice));
        $temporary_table = $sth->fetchAll(PDO::FETCH_NUM);

        foreach ($temporary_table as $row) {
            $Name = $row[0];
            $price = $row[1];
            $quantity = $row[2];
            print " <row><Name>$Name</Name><price>$price</price><quantity>$quantity</quantity></row>";
        }
    } catch (PDOException $e) {
        
        die("Error!:" . $e->getMessage() . "<br>");
    }
    echo"</root>";
?>
