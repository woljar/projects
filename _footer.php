
<?php
$name = 'Ярослав';
$age = 25;
$email = 'ydorodnov@yandex.ru';
$city = 'Санкт-Петербург';
$info = 'Я - начинающий PHP - разработчик!';
?>
<!Doctype HTML>

<html>
<head>
  <title>Ярослав - начинающий PHP разработчик</title>
    <meta charset=utf-8>
    <style>
        body {font-family: sans-serif} d1 { color : red ; display : table-row} dt, dd {display : table-cell; padding 5px 10px}
    </style>
</head>

<body>



<?php

echo '<d1><dt> Имя </dt><dd>',$name,'</dd></d1>', PHP_EOL;



?>


echo 'Возраст'.'                          '.$age. PHP_EOL. "<br/>";
echo 'Адрес электронной почты'.'          '.$email. PHP_EOL. "<br/>";
echo 'Город'.'                            '.$city. PHP_EOL. "<br/>";
echo 'О себе'.'                           '.$info. PHP_EOL;



</body>
</html>


