<head>
    <meta charset="utf-8">
    <title>Изменение дома</title>
</head>
<body>
<strong>Выберите дом который хотите изменить</strong>
<?php

$db = DBManagerFactory::getInstance(); // получения объекта для работы с БД

$result = $db ->query('SELECT * FROM k1_house'); // выполнить SQL запрос
$list = array();
while($row = $db->fetchByAssoc($result))
{
    $list[] = $row;
}
?>
<form name="ok1" method="post">
    Название дома:
    <select name = "checkname" form>
        <?php
        foreach ($list as $k=>$v)
        {
            ?>
                <option><?=$v['id']?></option>
        <?php
        }
        ?>
    </select><br>
    <?php
    $focus = new k1_house();
    $focus->retrieve('checkname')
    ?>
    Введите новое имя для дома: <input name="text" maxlength="40" size="40" type="text" value="<?=$focus->id?>"><br>
    Введите новое описание для дома: <input name="textd" maxlength="25" size="40" value=""><br>
    Введите новое количество комнат для дома: <input name="textr" maxlength="25" size="40" value=""><br>
    <input type="submit" name="ok" value="Изменить">
</form>
</body>
<?php

//$query = "update k1_house set name = 'Измененное название' where id = '1ccafc4a-280b-ef3e-8232-55599269d486'";
//$focus = new k1_house();
//$focus->retrieve('checkname');
;

//$focus->name = 'text';
$focus->description = 'textd';
$focus->rooms_list = 'textr';
$focus->save();
echo '<pre>';
print_r($focus->id);
echo '</pre>';
?>
