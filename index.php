<?php

function dm($data)
{
    echo "<pre>" . print_r($data, 1) . "</pre>";
}

$array = ['Аргентина'=>['Буэнос-Айрес', 'Кордова', 'Росарио', 'Мендоса'], 'Беларусь'=>['Минск', 'Могилев', 'Гомель', 'Витебск', 'Брест'], 'Украина' => ['Киев', 'Одесса', 'Херсон', 'Бердянск'], 'Россия' => ['Москва', 'Санкт-Петербург', 'Калининград', 'Пенза']];


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Test 3</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
</head>
<body>

<ul id="nav">
    <?php foreach ($array as $key=>$value): ?>
    <li><a href="#"><?php echo $key; ?></a>
    <ul>
        <?php foreach ($array[$key] as $value2): ?>
            <li><a href="#"><?php echo $value2; ?></a></li>
        <?php endforeach; ?>
    </ul>
    </li>
    <?php endforeach; ?>
</ul>

</body>
</html>



