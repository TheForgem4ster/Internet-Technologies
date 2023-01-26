<?php 
    include "Connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <p> <b>Fill in the table Vendors</b> </p><br>
    <!-- Vendors -->
    <form action="Form/FormVendors.php" method='post'>
        Name Vendors:
        <input type="text" name="nameVendors" placeholder="type string"><br>        
        <input type="submit" value ="Send Vendors" name ="buttonTable" >
    </form>
    <br>

            
    <p> <b> Fill in the table Category </b> </p> <br>
    <!-- Category -->  
    <form action="Form/FormCategory.php" method="post">
        Name Category:
        <input type="text" name="nameCategory" placeholder="type string"><br>        
        <input type="submit" name ="submit" value ="Send">
    </form>
    <br>


    <p> <b> Fill in the table Items </b> </p> <br> 
    
    <!-- Iteams -->
    <form action="Form/FormItems.php" method="post">
      
        Name Iteam: 
        <input type="text" name="nameItems" placeholder="type string"><br>
        Price:
        <input type="text" name ="price" placeholder="type int"><br>
        Quantity:
        <input type="text" name="quantity" placeholder="type int"><br> 
        Quality:
        <input type="text" name ="quality" placeholder="type string"><br>
        FID_Vendor:
        
        <select name='FID_Vendor'>
            <?php 
                try
                {
                    $sql = 'SELECT * FROM vendors';
                    foreach($conn->query($sql) as $row)
                    {
                        $sqlVendorsId = $row[0];
                        print "<option >$sqlVendorsId</option>";
                    }
                } 
                catch(PDOException $ex)
                {
                    print "ERROR!".$ex->getMessage();
                    die();
                }
            ?>
        </select>
        <br>        
        FID_Category: 
        
        <select name='FID_Category'>
            <?php 
                try
                {
                    $sql = 'SELECT * FROM category';
                    foreach($conn->query($sql) as $row)
                    {
                        $sqlCategoryId = $row[0];
                        print "<option >$sqlCategoryId</option>";
                    }
                } 
                catch(PDOException $ex)
                {
                    print "ERROR!".$ex->getMessage();
                    die();
                }
            ?>
        </select>
        <br>
        <input type="submit" name ="submit" value ="Send">
    </form>  

</body>
</html>
