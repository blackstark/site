<html>
<head>
    <meta charset="utf-8">
    <title>Страница с примером передачи переменных с помощью Post</title>
</head>
<body>
<?php
echo '<pre>';
print_r($_FILES["userfile"]);
echo '</pre>';
?>
<form name="upload" action="hello.php" method="POST" ENCTYPE="multipart/form-data">
    Выберите файл для загрузки:
    <input type="file" name="userfile">
    <input type="submit" name="upload" value="Загрузить">
</form>
<img src="<?php echo $_FILES["userfile"]["name"]; ?>" >
</body>

</html>
<?php
$array = array("foo", "bar", "hello", "world");
var_dump($array);
echo '<pre>';
print_r($array);
echo '</pre>';
?>