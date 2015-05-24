<html>
<head>
    <meta charset="utf-8">
    <title>СУРОВЫЕ ГОНКИ!!!!!!!</title>
</head>
<body>
<?php
function __autoload($class_name) {
    include_once($class_name . ".php");
}
#include "AutoRules.php"
//require_once "AutoRules.php";
$Player1 = new AutoRules();
$Player1->setting(1, "Priora", "Red", 165, 1500, "light");
$Player1->view(1);
$Player1->AutoStatus(1, 1);
echo $Player1->checkStatus(1);
$Player1->Speed(1, 225);

$Player2 = new AutoRules();
$Player2->setting(2, "Granta", "Blue", 176, 1300, "light");
$Player2->view(2);
$Player2->AutoStatus(2, 1);
echo $Player2->checkStatus(2);
$Player2->Speed(2, 233);

$Player3 = new AutoRules();
$Player3->setting(3, "Kamaz", "Black", 129, 5200, "Cargo");
$Player3->view(3);
$Player3->AutoStatus(3, 1);
echo $Player3->checkStatus(3);
$Player3->Speed(3, 145);

//Кто из них быстрее -
$count = $Player1->speed;
if ($count < $Player2->speed) {
    $count = $Player2->speed;
}
if ($count < $Player3->speed) {
    $count = $Player3->speed;
}
switch ($count) {
    case $Player1->speed;
        echo "<br>Выйграли ";$Player1->view(1);
        break;
    case $Player2->speed;
        echo "Выйграли ";$Player2->view(2);
        break;
    case $Player3->speed;
        echo "Выйграли ";$Player3->view(3);
        break;
}



?>
</body>

</html>
