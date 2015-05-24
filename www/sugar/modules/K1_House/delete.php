<head>
    <meta charset="utf-8">
    <title>Удаление дома</title>
</head>
<body>
<strong>Удаление дома</strong>
</body>
<?php
$k1_house=new K1_House();
$k1_house->delete($_REQUEST["record"]);
?>
