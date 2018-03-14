<?php

class Computer {
    public function getElectricShock()
    {
        echo 'Ouch!';
    }

    public function makeSound()
    {
        echo 'Beep Beep';
    }

    public function showLoadingScreen()
    {
        echo 'Loading ...';
    }

    public function bam()
    {
        echo 'Ready to be used';
    }

    public function sooth()
    {
        echo 'Zzzz';
    }

    public function closeEveryThing()
    {
        echo 'Byp bup bup buzzzz';
    }

    public function pullCurrent()
    {
        echo 'Haaah';
    }
}

class ComputerFacede
{
    public $computer;

    public function __construct(Computer $computer)
    {
        $this->computer = $computer;
    }

    public function turnOn()
    {
        $this->computer->getElectricShock();
        $this->computer->makeSound();
        $this->computer->showLoadingScreen();
        $this->computer->bam();
    }

    public function turnOff()
    {
        $this->computer->closeEveryThing();
        $this->computer->pullCurrent();
        $this->computer->sooth();
    }
}

$objComputer = new ComputerFacede(new Computer());
$objComputer->turnOn();
echo '<br>';
$objComputer->turnOff();