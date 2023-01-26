<?php 

    $driver = 'mysql';
    $host = 'localhost';
    $db_name = 'OnlineStore';
    $db_user = 'root';
    $db_password = '';
    $charset = 'utf8';
    $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

    try
    {
        $conn = new PDO("$driver:host=$host;dbname=$db_name;charset=$charset", 
        $db_user, $db_password, $options);

    } 
    catch  (PDOException $ex)
    {
        echo $ex->GetMessage();
        print("<br>ERROR!<br>");
    }
?>