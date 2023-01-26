<?php        
    try
    {
        $conn = new PDO("mysql:host=localhost;dbname=OnlineStore;charset=utf8",'root', '');

        if(empty($_POST['nameVendors']))
            exit("The field name Vendor is not filled!");
        
        $sqlInsert = "INSERT INTO VENDORS VALUES (NULL, :nameVendors)";
        $msg = $conn->prepare($sqlInsert);
        
        $msg->execute(['nameVendors' => $_POST['nameVendors']]);
    
        print_r($_POST);

    }
    catch  (PDOException $ex)
    {
        echo $ex->GetMessage();
        print("<br>ERROR!<br>");
    }
    
?>
