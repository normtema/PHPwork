<!DOCTYPE html>
<html lang="ukr">
<head>
    <meta charset="UTF-8">
    <title>Aboutkidscamera</title>
    <link rel="shortcut icon" href="img/icon.png" type="image/png">
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
    <style type="text/css">
        body {background: #FAE4F0;}
        .cl {
            text-align: center;
            font-size: 30px;
            font-family: 'Muli Regular Roman', sans-serif;
        }
    </style>
</head>
<body>
<div class="cl">
    <?php
    $_POST["first_name"] = strip_tags($_POST["first_name"]);
    $_POST["telephone"] = strip_tags($_POST["telephone"]);
    $_POST["email"] = strip_tags($_POST["email"]);
    if (!empty($_POST["first_name"]) && !empty($_POST["telephone"]) && !empty($_POST["email"])) {
        echo "Благодарим за вашу заявку!<br>";
        echo "В заявке указано:<br>";
        echo "Ваше имя - ".$_POST["first_name"];
        echo "<br>";
        echo "Ваш телефон - ".$_POST["telephone"];
        echo "<br>";
        echo "Ваша электронная пошта - ".$_POST["email"];
        if (!empty($_POST["info"])) {
            echo "<br>";
            echo "Дополнительная информация - ".$_POST["info"];
        }
    }
    else {
        echo "Деяких данних не знайдено, спробуйте ще раз!<br>";
    }
    ?>
    <a href="index.html"><br>На главную страницу.</a>
</div>
</body>
</html>
