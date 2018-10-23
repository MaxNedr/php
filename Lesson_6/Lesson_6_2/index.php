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
            width: 170px;
            height: 20px;
            padding-left: 5px;
        }

        .form button, .form select {
            width: 179px;
            height: 24px;
            padding-left: 5px;
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

function result (int $first, int $second, string $operation) {
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

};
?>
<div class="form">
    <form action="index.php" method="post" enctype="multipart/form-data">
        <input type="number" name="firstNumber" id="" value="<?php echo $first ?>">
        <button name="plus">+</button>
        <button name="minus">-</button>
        <button name="multiplication">*</button>
        <button name="divide">/</button>
        <input type="number" name="secondNumber" id="" value="<?php echo $second ?>">
        <input type="text" name="result" readonly
               value="<?php echo 'Результат = '.result($first, $second, $operation)?>">
    </form>
</div>

</body>
</html>

