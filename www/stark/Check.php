<html>
<head>
    <meta charset="utf-8">
    <title>НАЙТИ ПОЛЬЗОВАТЕЛЯ</title>
</head>
<body>
<?php echo "Посмотреть Имя Фамилию пользователя зная Логин и пароль<br>" ?>
<form action="Check.php" enctype="multipart/form-data" method="POST" name="form_upload2">
    <label>LOGIN: <input id="checklogin" name="checklogin" type="text"/></label>
    <label>PASSWORD: <input id="checkpass" name="checkpass" type="text"/></label><br><br>
    <label><input name="button" type="submit" value="Отправить"/></label>
</form>
<?php
if (!empty($_POST)) {
    echo "По заданным параметрам найден пользователь: <br>";

    $checklogin = $_POST['checklogin'];
//    echo "$checklogin <br>";
    $checkpass = $_POST['checkpass'];
//    echo "$checkpass <br><br>";
    $f = fopen('Base.txt', 'r');
    $text = "";
    if ($f) {
        while (($buffer = fgets($f)) !== false) {
            //        echo $buffer;
            $text = "$text$buffer";
        }
        //     echo $text;
        $p = explode("----------", $text);
        count($p);
        for ($i = 0; $i < count($p); $i++) {
            $v[$i] = explode(":", $p[$i]);
        }
        for ($i = 0; $i < count($v[0]); $i++)
            //      echo $i."-".$v[0][$i]."|";
            $top = 0;
        for ($i = 0; $i < count($p); $i++) {
            if ($v[$i][1] == $checklogin) {
                $top = 1;
                if ($v[$i][3] == $checkpass) {
                    echo $v[$i][4] . " - " . $v[$i][5] . "\n" . $v[$i][6] . " - " . $v[$i][7];
                    break;
                } else {
                    echo "Логин существует, но пароль не верен.";
                }
            }
        }
        if ($top == 0) {
            echo "Такого логина не существует";
        }

        //          $v= explode(":",$p[0]);
        //       echo $v[0];
    }

}
?>
</body>
</html>