<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="Script.js"></script>
    <title>Лаба_1</title>
</head>
<body>
    <h1>Лабораторна робота №3, КІУКІ-19-5, Жук Максим, Варіант №5 </h1>
    <?php
        include "Connect.php"; 
    ?>
    <!-- 1 Request -->
    <div class="Forms">

    <div class="CellForm">   
    <!-- <form  action = "SelectFirst.php" method='post'></b> -->
    <br>
        <b>Goods of the selected manufacturer
        <select name='Manufacturer' id='Manufacturer'>
            <?php 
            try 
            {
                $sql = 'SELECT name FROM OnlineStore.vendors';
                foreach ($conn->query($sql) as $result) 
                {
                    $name = $result[0];
                    print "<option value = '$name'>$name</option>";
                }

            } catch (PDOException $e) {

                die("Error!:" . $e->GetMessage() . "<br>");
            }
            ?>
        </select>
        <input type = "submit" value ="Run" onclick="Functions1()">

    <!-- </form> -->
    </div>
    <br><br>
    <!-- 2 Request -->
    <div class="CellForm">
    <!-- <form action = "SelectSecond.php" method='post'> -->
        <b>Goods of the selected category</b>
        <select name ='ProductCategory' id='ProductCategory'>
            <?php 
            try {
                $sql = 'SELECT name FROM OnlineStore.category';

                foreach ($conn->query($sql) as $result) 
                {
                    $name = $result[0];
                    print "<option value = '$name'>$name</option>";
                }

            } catch (PDOException $e) {

                die("Error!:" . $e->GetMessage() . "<br>");
            }
            ?>
        </select>
        <input type = "submit" value ="Run" onclick="Functions2()">

    <!-- </form> -->
    </div>
    <br><br>
    <!-- 3 Request -->
    <div class="CellForm">
    <!-- <form action = "SelectThird.php" method='post'> -->
        <b>Goods in the selected price range</b><br><br>
            With 
            <input name='FirstPrice' id='FirstPrice'>
            </input>
            On 
            <input name='EndPrice' id='EndPrice'>         
            </input>
            &nbsp;&nbsp;
            <!-- <input type="submit" value="Run"> -->
        <input type = "submit" value ="Run" onclick="Functions3()">
    <!-- </form> -->
    </div>
    </div>
    <br><br>
    
    <div class="Forms">
    <table border='1' id='result'>

    </table>   
    </div>

</body>
</html>

