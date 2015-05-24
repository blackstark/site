<?php
class AutoRules
{
    private $id;
    private $name;
    private $color;
    private $tehspeed;
    private $wight;
    private $type;
    public $status;
    public $speed;
    CONST status_greetsa=0;
    public function setting($id, $name, $color, $tehspeed, $wight, $type)//Задаёт значения
    {
        $this->id = $id;
        $this->name = $name;
        $this->color = $color;
        $this->tehspeed = $tehspeed;
        $this->wight = $wight;
        $this->type = $type;
        echo "Был создан объект с параметрами:$id, $name , $color , $tehspeed , $wight , $type <br>";
    }

    public function  view($id)//показывает
    {
        echo "Параметры $id Машины: Имя - $this->name , Цвет - $this->color, Тех.скорость - $this->tehspeed, Вес - $this->wight, Тип - $this->type <br>";
    }

    public function AutoStatus($id, $status)//задаёт вкл/выкл
    {
            $this->status = $status;
            if ($status == 1) {
                echo "Вы включили машину<br>";
            } else {
                echo "Вы выключили машину<br>";
            }
    }

    public function checkStatus($id)//проверяет статус
    {
            if ($this->status == 1) {
                echo("Машина включена и готова к эксплуатации<br>");
            } else {
                echo("Машина выключена<br>");
            }
    }

    public function Speed($id, $speed)//задаёт скорость
    {
            if ($this->status == 1) {
                if ($this->tehspeed > $speed) {
                    $this->speed = $speed;
                    echo("Вы установили скорость равную $speed<br>");
                } else {
                    $this->speed = $this->tehspeed;
                    echo("Вы привысили предел максимальной скорости, скорость равна максимуму $this->tehspeed<br> ");}
            } else {
                echo("Машина выключена! чтобы поехать необходимо сначала включить машину<br>");
            }
    }
    public function checkSpeed($id)
    {
            echo("Машина едет со скоростью $this->speed<br>");
    }
}

?>