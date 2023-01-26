<?php        
    try
    {
        $conn = new PDO("mysql:host=localhost;dbname=OnlineStore;charset=utf8",'root', '');
        
        if(empty($_POST['nameCategory']))
            exit("The field Name Category is not filled!");
        
        $sqlInsert = "INSERT INTO CATEGORY VALUES (NULL, :nameCategory)";
        $msg = $conn->prepare($sqlInsert);

        $msg->execute(['nameCategory' => $_POST['nameCategory']]);
 
        print_r($_POST);

    }
    catch  (PDOException $ex)
    {
        echo $ex->GetMessage();
        print("<br>ERROR!<br>");
    }

?>
