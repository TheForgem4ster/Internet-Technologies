<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Автор: ст.гр. КИУКИ-19-5 Жук Максим
    </h1>
Калькулятор<br>
<form method="post">
    <table>
        
        <tr>
            <td></td>
            <td><input type="radio" name="group1" id ='add' value="add">+</td>  
        </tr>
        <tr>
            <td><input type="text" name="first" placeholder="0" require> <!-- require - чтобы поле было заполнено --></td>
            <td><input type="radio" name="group1" id ='subtract' value="subtract">-</td>
            <td><input type="text" name="second" placeholder="0" require> <!-- require - чтобы поле было заполнено --></td>
            <td><input type="submit" name="submit" value="Вычислить"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="radio" name="group1" id ='multiply' value="multiply">*</td>
        </tr>
        <tr>
            <td></td>
            <td><input type="radio" name="group1" id ='divide' value="divide">/</td>
        </tr>
    </table>
  
    </form>
    <?php
        error_reporting(0);
        $first = $_POST['first'];// получение первого числа
        $second = $_POST['second'];// получение второго числа
        $result = $_POST['group1']; // действия записываем

        switch($result)
        {
            case "add":
                echo "Результат выражения: ".$first + $second;
                break; 
            case "subtract":
                echo "Результат выражения: ".$first - $second;
                break;
            case "multiply":
                echo "Результат выражения: ".$first * $second;
                break; 
            case "divide":
                echo "Результат выражения: ".$first / $second;
                break;
        }          
    ?>

</body>
</html>