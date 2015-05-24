<head>
    <meta charset="utf-8">
    <title>Создание дома</title>
</head>
<body>
    <strong>Введите данные нового дома</strong>
    <form name="ok1" method="post" enctype="multipart/form-data">
        Название дома: <input name="text" maxlength="25" size="40" value=""><br>
        Описание дома: <input name="description" maxlength="25" size="40" value=""><br>
        Количество комнат:
        <select name = "checkname">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
        </select><br>
        Наличие туалета: <input name="checkbox" type="checkbox"><br>
        Загрузка картинки:
        <input type="file" name="file" ><br>
        <input type="submit" name="ok" value="Добавить">
    </form>
</body>
<?php
$k1_house = new K1_House();
$k1_house->create($_POST["text"],$_POST["description"],$_POST["checkname"],$_POST["checkbox"],$_FILES["file"]);
/*
if($_FILES["file"]["size"] > 1024*3*1024)
{
    echo ("Размер файла превышает три мегабайта");
    exit;
}*/
// Проверяем загружен ли файл
$this->view="my";
echo '<pre>';
print_r($_POST);
echo '</pre>';
global $sugar_config;
echo '<pre>';
print_r($sugar_config);
echo '</pre>';
?>
