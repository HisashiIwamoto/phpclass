<?php
class Human
{

    public $age = 0;

    public $name = "";

    public $gender;

    public $firstname;

    public function __construct($name, $gender)
    {
        $this->setName($name);
        $this->firstname = $name;
        $this->gender = $gender;
    }

    public function say()
    {
        echo $this->name . "hello" . $this->age . "\n";
    }

    public function birth()
    {
        $this->age++;
    }

    public function wedding($rename)
    {
        if ($this->gender !== "otoko") {
           $this->setName($rename);
        }
    }

    public function rikon()
    {
       $this->setName($this->firstname);
    }
    private function setName($name){
        $this->name = $name;
    }

    public function eat(){
        echo "full";
    }
}

$human = new Human("nanasi", "otoko");
$human1 = new Human("nanasi1", "onna");
$human->say();
$human->birth();
$human->say();
$human->wedding("iwamoto");
$human->eat();
$human->say();

$human1->say();
$human1->birth();
$human1->say();
$human1->wedding("iwamoto");
$human1->say();

$human1->rikon();
$human1->say();
