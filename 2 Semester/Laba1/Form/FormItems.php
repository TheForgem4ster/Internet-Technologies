<?php        
    try
    {
        $conn = new PDO("mysql:host=localhost;dbname=OnlineStore;charset=utf8",'root', '');
        
        $nameItems = $_POST['nameItems'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $quality = $_POST['quality'];
        $FID_Vendor = $_POST['FID_Vendor'];
        $FID_Category = $_POST['FID_Category'];
        

        if(empty($_POST['nameItems']))
            exit("The field Name Item is not filled!");
        if(empty($_POST['price']))
            exit("The field Price is not filled!");
        if(empty($_POST['quantity']))
            exit("The field Quantity is not filled!");
        if(empty($_POST['quality']))
            exit("The field Quality is not filled!");


        $sqlInsert = "INSERT INTO ITEMS 
        VALUES 
        (NULL, :nameItems, :price, :quantity, :quality,         
        :FID_Vendor, :FID_Category)";

        if($pace = $conn->prepare($sqlInsert))
        {
            $pace->bindParam(':nameItems',$nameItems, PDO::PARAM_STR);
            $pace->bindParam(':price', $price, PDO::PARAM_STR);
            $pace->bindParam(':quantity',$quantity, PDO::PARAM_STR);
            $pace->bindParam(':quality',$quality, PDO::PARAM_STR);
            $pace->bindParam(':FID_Vendor',$FID_Vendor, PDO::PARAM_STR);
            $pace->bindParam(':FID_Category',$FID_Category, PDO::PARAM_STR);
            $pace->execute();
        }
        unset($pace);
        print_r($_POST);
    }
    catch  (PDOException $ex)
    {
        echo $ex->GetMessage();
        print("<br>ERROR!<br>");
    }
?>