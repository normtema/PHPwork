<!DOCTYPE html>
<html lang="ukr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Aboutkdscamera</title>
    <link rel="shortcut icon" href="img/icon.png" type="image/png">
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
    <style type="text/css">
        {box-sizing: border-box;}
        body {background: #FAE4F0;}
        .decor {
            position: relative;
            max-width: 400px;
            margin: 50px auto 0;
            background: white;
            border-radius: 30px;
        }

        .form-inner {padding: 50px;}
        .form-inner input,
        .form-inner textarea {
            display: block;
            width: 100%;
            padding: 0 20px;
            margin-bottom: 10px;
            background: #E4FDF9;
            line-height: 40px;
            border-width: 0;
            border-radius: 20px;
            font-family: 'Roboto', sans-serif;
        }
        .form-inner input[type="submit"] {
            margin-top: 30px;
            background-color: #9BC6D7;
            border: 2px solid #588498;
            border-radius: 20px;
            color: #fff;
            font-size: 25px;
        }
        .form-inner textarea {resize: none;}
        .form-inner h3 {
            margin-top: 0;
            font-family: 'Roboto', sans-serif;
            font-weight: 500;
            font-size: 24px;
            color: #707981;
        }
        </style>
</head>
<body>
<form method="post" action="form.php" class="decor">


    <div class="form-inner">
        <h3>Оставить заявку</h3>
        <input name="first_name" type="text" placeholder="Ваше имя">
        <input name="email" type="email" placeholder="Ваш Email">
        <input name="telephone" type="text" placeholder="Ваш телефон">
        <textarea name="info" placeholder="Ваши пожелания" rows="3"></textarea>
        <input type="submit" value="Отправить">
    </div>
</form>
</body>
</html>