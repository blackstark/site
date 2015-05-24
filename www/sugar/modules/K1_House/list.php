<head>
    <meta charset="utf-8">
    <title>Изменение дома</title>
</head>
<body>
<strong>Выберите дом который хотите изменить</strong>
<?php
$db = DBManagerFactory::getInstance(); // получения объекта для работы с БД
$result = $db ->query('SELECT * FROM k1_house WHERE deleted=FALSE '); // выполнить SQL запрос
$list = array();
while($row = $db->fetchByAssoc($result))
{
    $list[] = $row;
}
?>
<form name="ok1" method="post">
    Название дома:
<?php
foreach ($list as $k=>$v)
{
    ?>
    <tr>
        <td><?=$v['name']?><a href=<?='http://localhost/sugar/index.php?module=K1_House&action=edit1&record='.$v['id']?> ><img src="modules/K1_House/edit.jpg" height="16" width="16"></a><a href=<?='http://localhost/sugar/index.php?module=K1_House&action=delete&record='.$v['id']?> ><img src="modules/K1_House/delete.png" height="16" width="16"></a></td>
    </tr>
<?php
}
?>
</form>
</body>
<?php

echo '<pre>';
//print_r($focus->id);
echo '</pre>';
?>
