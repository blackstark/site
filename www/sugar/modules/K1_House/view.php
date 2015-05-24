<head>
    <meta charset="utf-8">
    <title>Просмотр домов</title>
</head>
<body>
<strong>Все дома</strong>
<form name="ok1" method="post">
    Количество комнат: <input name="rooms" maxlength="25" size="40" value=""><br>
    Наличие туалета: <input name="checkbox" type="checkbox"><br>
    Наличие фотографии: <input name="imagebox" type="checkbox"><br>
    <input type="submit" name="ok" value="Показать">
</form>
</body>
<?php
$k1_house= new K1_House();
$list=$k1_house->viewlist($_POST['checkbox'],$_POST['rooms'])
?>
<table border="1">
    <tr>
        <th>Название дома</th>
        <th>Описание</th>
        <th>Количество комнат</th>
        <th>Туалет</th>
    </tr>
    <?php
  if(!empty($_POST)) {
        foreach ($list as $k => $v) {
            ?>
            <tr>
                <td><?= $v['name'] ?></td>
                <td><?= $v['description'] ?></td>
                <td><?= $v['rooms_list'] ?></td>
                <td><?= $v['wc'] ?></td>
            </tr>
        <?php
        }
    }
echo '<pre>';
print_r($_POST);
echo '</pre>';

?>
