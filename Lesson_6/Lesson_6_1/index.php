<!--1. Создать форму-калькулятор с операциями: сложение, вычитание, умножение, деление. Не забыть обработать
деление на ноль! Выбор операции можно осуществлять с помощью тега <select>.-->


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .form{
            display: flex;
            flex-flow: column wrap;
            width: 170px;
            justify-content: center;
        }
        .form input{
            width: 170px;
            height: 20px;
            padding-left: 5px;
        }
        .form button, .form select{
            width: 179px;
            height: 24px;
            padding-left: 5px;
        }

    </style>
</head>
<body>
<form action="calc.php" method="post" class="form">
    <input type="number" name="firstNumber" id="">
    <select  name="operation" id="">
        <option  value="+"> + (Сложение) </option>
        <option  value="-"> - (Вычитание)</option>
        <option  value="*"> * (Умножение)</option>
        <option  value="/"> / (Деление)</option>
    </select>
    <input type="number" name="secondNumber" id="">
    <button type="submit"> = </button>
    <input type="text" name="result" readonly>
</form>
<?php

?>
</body>
</html>

