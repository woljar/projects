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
            body {font-family: sans-serif}
            d1 { display : table-row}
            dt, dd {display : table-cell; padding : 5px 10px}
        </style>
    </head>
    <body>
        <h1> <?php echo 'Страница пользователя Ярослав'; ?> </h1>
        <d1>
            <dt> <?php echo 'Имя';?> </dt>
            <dd> <?php echo $name; ?> </dd>
        </d1>
        <d1>
            <dt> <?php echo 'Возраст';?> </dt>
            <dd> <?php echo $age; ?> </dd>
        </d1>
        <d1>
            <dt> <?php echo 'Адрес электронной почты';?> </dt>
            <dd> <?php echo '<a href="mailto:ydorodnov@yandex.ru">'.$email.'</a>'; ?> </dd>
        </d1>
        <d1>
            <dt> <?php echo 'Город';?> </dt>
            <dd> <?php echo $city; ?> </dd>
        </d1>
        <d1>
            <dt> <?php echo 'О себе';?> </dt>
            <dd> <?php echo $info; ?> </dd>
        </d1>
    </body>
</html>


