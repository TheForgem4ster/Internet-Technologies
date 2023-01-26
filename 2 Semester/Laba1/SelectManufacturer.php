<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 1 Request -->
    <form  action="SelectFirst.php" method='post'>
        <br>
        Goods of the selected manufacturer
        <input type="submit" value ="Select Manufacturer" name ="button"><br><br>
    </form>
    <!-- 2 Request -->
    <form action="SelectSecond.php" method='post'>
        Goods of the selected category
        <input type="submit" value ="Select Category" name ="button" ><br><br>
    </form>
    <!-- 3 Request -->
    <form action="SelectThird.php" method='post'>
        Goods in the selected price range
        <input type="submit" value ="Select Price" name ="button"><br><br>
    </form>

</body>
</html>
