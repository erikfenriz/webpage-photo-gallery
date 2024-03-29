<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <title>Личный сайт студента GeekBrains</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="content">
        <div id="header">
            <a href="#">Главная</a>/
            <a href="venice.html">Венеция</a>/
            <a href="paris.html">Париж</a>/
        </div>
        <h1>Личный сайт студента GeekBrains</h1>
        <div id="center">
            <img src="img/photo.png" id="avatar">
            <div id="box_text">
                <p>Добрый день. Меня зовут <b>Василий Пупкин</b>. Я - <i>начинающий программист</i>. Я совсем недавно встал на этот путь, но уже успел написать свой первый сайт.</p>

                <p>В этом мне помог IT-портал <a href="https://geekbrains.ru" target="_blank">GeekBrains</a></p>
                <p>Я очень люблю путешествовать. На этом сайте вы найдете мои самые любимые фотографии из <a href="venice.html">Венеции</a> и <a href="paris.html">Парижа</a></p>
            </div>
        </div>
    </div>
    <div id="footer">
        Copyright &copy;
        <?php echo date("Y"); ?> <a href="https://geekbrains.ru/" target="_blank">GeekBrains</a>
    </div>
</body>

</html>
