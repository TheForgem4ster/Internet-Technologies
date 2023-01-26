<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лаба_1</title>
</head>
<body>
    <h1>Лабораторна робота №1, КІУКІ-19-5, Жук Максим, Варіант №5 </h1>
    <form method='post'>
        <input type="submit" value="Create Database" name="button" />
        <input type="submit" value="Create Table" name="button" />
        <input type="submit" value="DROP Database" name="button" />
        <input type="submit" value="Filling Table" name="button" />
        <input type="submit" value="Selection" name="button" />
    </form>
    <?php

        $driver = 'mysql';
        $host = 'localhost';
        $db_user = 'root';
        $db_password = '';
        $charset = 'utf8';
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        
        error_reporting(0);
        $result = $_POST['button'];
        try 
        {
            $conn = new PDO("$driver:host=$host;charset=$charset", 
            $db_user, $db_password, $options);
            
            print("Connected to database! <br>");

            switch($result)
            {
                case 'Create Database':
                    $sql = "CREATE DATABASE OnlineStore";
                    print("Database has been created!<br>");
                    $conn->exec($sql);

                    break;
                    
                case 'Create Table':
                    include "CreateTable.php";

                    break;

                case 'DROP Database':
                    $sql = "DROP DATABASE OnlineStore;";
                    $conn->exec($sql);
                    
                    print("DROP DATABASE OnlineStore <br>");
                    break;
                case 'Filling Table':
                    
                    include "FillingTable.php";
                    break;
                case 'Selection':
                    
                    include "SelectManufacturer.php";
                    break; 
            }
            
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $ex)
        {
            echo $ex->GetMessage();
            print("<br>ERROR!<br>");
        }
        $conn = null;
    ?>

</body>
</html>

