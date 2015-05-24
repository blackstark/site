<html>
<head>
    <meta charset="utf-8">
    <title>ДОБАВИТЬ ПОЛЬЗОВАТЕЛЯ</title>
</head>
<body>
<?php echo "Добавить нового пользователя<br>" ?>
<form action="AutoFile.php" enctype="multipart/form-data" method="POST" name="form_upload">
    <label>Имя: <input id="fname" name="fname" type="text"/></label>
    <label>Фамилия: <input id="sname" name="sname" type="text"/></label><br><br>
    <label>LOGIN: <input id="login" name="login" type="text"/></label>
    <label>PASSWORD: <input id="pass" name="pass" type="text"/></label><br><br>
    <label><input name="button" type="submit" value="Отправить"/></label>
</form>

<?php

if (!empty($_POST)) {
    $fname = $_POST['fname'];
    $sname = $_POST['sname'];
    $login = $_POST['login'];
    $pass = $_POST['pass'];
    if ($login != "" && $pass != "" && $fname != "" && $sname != "") {
        echo "В файл Base.txt записаны следующие данные: <br>";
        echo "$fname <br>";
        echo "$sname <br>";
        echo "$login <br>";
        echo "$pass <br><br>";


        $f = fopen('Base.txt', 'a+');
        flock($f, 2);
        fwrite($f, "Логин:" . $login . ":\n");
        fwrite($f, "Пароль:" . $pass . ":\n");
        fwrite($f, "Имя:" . $fname . ":\n");
        fwrite($f, "Фамилия:" . $sname . ":\n");
        fwrite($f, "----------\n");
        fclose($f);
    } else {
        echo "Вы заполнили не все поля!!!";
    }
    $login = "";
    $pass = "";
    $fname = "";
    $sname = "";
}

?>

</body>
</html>