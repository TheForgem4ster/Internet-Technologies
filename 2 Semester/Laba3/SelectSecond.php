<?php 
    header('Content-Type: application/json'); 
    header('Cache-Control: no-cache, must-revalidate');
    include "Connect.php";
       
    $db = 'OnlineStore';
    if (isset($_POST['ProductCategory'])) $ProductCategory = $_POST['ProductCategory'];
    else $ProductCategory = 'Meat';

    try {

        $sqlSelect = "SELECT $db.category.name,$db.items.name FROM  $db.items INNER JOIN $db.category on $db.items.FID_Category = $db.category.ID_Category 
        WHERE $db.category.name = :ProductCategory";

        $sth = $conn->prepare($sqlSelect);
        $sth->execute(array(':ProductCategory' => $ProductCategory));
        $temporary_table = $sth->fetchAll(PDO::FETCH_NUM);

        echo json_encode($temporary_table);
    } catch (PDOException $e) {
        
        die("ERROR!:" . $e->getMessage() . "<br>");
    }
?>