<head>
    <meta charset="utf-8">
    <title>Изменение дома</title>
</head>
<body>
<strong>Изменение дома</strong>
<?php
global $sugar_config;
$db = DBManagerFactory::getInstance(); // получения объекта для работы с БД

$result = $db ->query('SELECT * FROM k1_house WHERE id = '.$_REQUEST["record"]); // выполнить SQL запрос
$focus = new k1_house();
$focus->retrieve($_REQUEST["record"]);
?>
<form name="ok1" method="post">
    Имя дома: <input name="text" maxlength="25" size="40" value=<?=$focus->name?>><br>
    Описание дома: <input name="textd" maxlength="25" size="40" value=<?=$focus->description?>><br>
    Количество комнат: <input name="textr" maxlength="25" size="40" value=<?=$focus->rooms_list?>><br>
    <?php if($focus->wc==true) { ?>
    Наличие туалета: <input name="checkbox" type="checkbox" checked><br>
    <?php } else { ?>
        Наличие туалета: <input name="checkbox" type="checkbox"><br>
    <?php } ?>
    Фотографии: <img src="<?=$sugar_config['real_path_image'].$focus->id?>/<?=$focus->image?>" height="64" width="64"><br>
    Добавить фотографию:<input type="file" name="file" ><br>
    <input type="submit" name="ok" value="Сохранить">
</form>
</body>
<?php
$k1_house=new K1_House();
$k1_house->change($focus,$_POST['text'],$_POST['textd'],$_POST['textr'],$_POST["checkbox"]);
echo '<pre>';
print_r($_REQUEST);
echo '</pre>';
?>
