
<?php
    $name = 'Ярослав';
    $age = 25;
    $email = 'ydorodnov@yandex.ru';
    $city = 'Санкт-Петербург';
    $info = 'Я - начинающий PHP - разработчик!';

echo "<pre>";
echo "<p style= font-family:sans-serif;>";
echo '<h1> Страница пользователя Ярослав</h1>';

    echo "<p style= font-size:20px;>";
        echo 'Имя'.'                             ',$name . PHP_EOL ;
        echo 'Возраст'.'                          '.$age. PHP_EOL;
        echo 'Адрес электронной почты'.'          '.$email. PHP_EOL;
        echo 'Город'.'                            '.$city. PHP_EOL;
        echo 'О себе'.'                           '.$info;
    echo "</p>";
echo "</p>";
echo "</pre>";


?>

