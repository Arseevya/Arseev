<?php
class  people
{
    public $name;
    public $age;
    public function go(){
        echo "$this->name go".'<br>';
        $this->age++;
        echo $this->age;
    }

}
