<?php 
    include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Laba 2</title>
    <script>
        function getManufacturer() {
            let Man = document.getElementById('Manufacturer').value;
            let results = localStorage.getItem(Man);
            document.getElementById('result').innerHTML = results;           
        }
        function getCategory(){
            let Quan = document.getElementById('ProductCategory').value;
            let results = localStorage.getItem(Quan);
            document.getElementById('result').innerHTML = results;
        }
        function getPrice()
        {
            let out = document.getElementById('FirstPrice').value;
            out += document.getElementById('EndPrice').value;
            let results = localStorage.getItem(out);
            document.getElementById('result').innerHTML = results;
        }
        function getAll()
        {
            let Quan = document.getElementById('Quantitys').value;
            let result = localStorage.getItem(Quan);
            document.getElementById('result').innerHTML = results;
        }
        function clearLocarStorage(){
            localStorage.clear();
        }
    </script>
</head>
<body>
    <h1>Лабораторна робота №2, КІУКІ-19-5, Жук Максим, Варіант №5 </h1>
    <div class="Forms">   
        <form action="FormFirst.php" method="post">
            <b>A list of manufacturers with which the store works&nbsp;&nbsp;</b>
            <select name='Manufacturer' id='Manufacturer' onchange onclick="getManufacturer()">
            <?php
                $coll = $tbl->find(["Manufacturer"=>['$exists'=>true]]);
                foreach ($coll as $result) 
                {

                    $Manufacturer = $result['Manufacturer'];

                    print "<option value = '$Manufacturer'>$Manufacturer</option>";
                }
            ?>
            </select>            
            <input type="submit" value="Run" >
        </form>
        <br>

        <form action="FormSecond.php" method="post" >
            <b>Goods that are not in stock&nbsp;&nbsp;</b>
            <select name='ProductCategory' id='ProductCategory' onchange onclick="getCategory()">
                <?php 

                    $coll = $tbl -> find(["Quantity" => 0],["projection"=>["ProductCategory" => 1]]); 
                  
                    foreach ($coll as $result) 
                    {
                        
                        $ProductCategory = $result['ProductCategory'];
                       
                        print "<option value = '$ProductCategory'>$ProductCategory</option>";                        
                    }
                ?>
            </select>
            <input type="submit" value="Run">
        </form>       
       
        <br>
        <form action="FormThird.php" method="post" onchange onclick="getPrice()">
            <b>Goods in the selected price range</b><br><br>
            With 
            <input name='FirstPrice' id='FirstPrice'>
            </input>
            On 
            <input name='EndPrice' id='EndPrice'>         
            </input>
            &nbsp;&nbsp;
            <input type="submit" value="Run" >
        </form>
        <br>           

        <form name='Quantitys' id='Quantitys' action="FormFourth.php" method="post" onchange onclick="getAll()">
            <b>Pull out the database &nbsp;&nbsp; </b>
            <input type="submit" value="Run">
        </form>
        <br>   
    </div>
       
    <div class="Forms">        
    <table border='1' id = "result">
    </table>
    </div>
    <button onclick="clearLocarStorage()">Очистить</button>
</body>
</html>