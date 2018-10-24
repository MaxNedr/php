<!--2. Создать калькулятор, который будет определять тип выбранной пользователем операции,
 ориентируясь на нажатую кнопку.-->


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .form {
            display: flex;
            flex-flow: column wrap;
            width: 170px;
            justify-content: center;
            margin-left: 459px;
        }

        .form input {
            border-radius: 5px;
            width: 170px;
            height: 20px;
            padding-left: 5px;
        }

         .form select {
             border-radius: 5px;
            width: 179px;
            height: 24px;
            padding-left: 5px;
        }
        .button{
            display: flex;
            flex-flow: row nowrap;
            justify-content: space-around;
        }
        .button button{
            border-radius: 20px;
            padding: 3px;
            text-align: center;
            outline: none;
        }
        .button button span{
            display: flex;
            font-size: 20px;
            justify-content: center;
            align-items: center;
            padding: 5px;
        }

    </style>
</head>
<body>
<?php
$first = $_POST['firstNumber'];
$second = $_POST['secondNumber'];
$operation = '+';
if (isset($_POST['plus'])) {
    $operation = '+';
};
if (isset($_POST['minus'])) {
    $operation = '-';
};
if (isset($_POST['multiplication'])) {
    $operation = '*';
};
if (isset($_POST['divide'])) {
    $operation = '/';
};

function result(int $first, int $second, string $operation)
{
    $error = 'ошибка';
    if ($operation == "+") {
        return $result = $first + $second;
    } elseif ($operation == "-") {
        return $result = $first - $second;
    } elseif ($operation == "*") {
        return $result = $first * $second;
    } elseif ($operation == "/") {
        if ($second == 0) {
            return $error;
        } else {
            return $result = $first / $second;
        }

    }

}

;
?>
<div class="form">
    <form action="index.php" method="post" enctype="multipart/form-data">
        <label for="first">Введите первое число</label>
        <input type="number" name="firstNumber" id="first" value="<?php echo $first ?>">
        <label for="second">Введите второе число</label>
        <input type="number" name="secondNumber" id="second" value="<?php echo $second ?>">
        <p>Выберите операцию</p>
        <div class="button">
            <button name="plus"><span>+</span></button>
            <button name="minus"><span>-</span></button>
            <button name="multiplication"><span>*</span></button>
            <button name="divide"><span>/</span></button>
        </div>
        <label for="result">Результат</label>
        <input type="text" name="result" readonly id="result"
               value="<?php echo result($first, $second, $operation) ?>">
    </form>
</div>

</body>
</html>

