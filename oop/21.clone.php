<?php

class ConNGuoi
{
    private $name;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

$cn1 = new ConNguoi();
$cn1->setName('Nguyen Van A');
echo 'From cn1: ' . $cn1->getName() . '<br>';

echo '<br>';

$cn2 = clone $cn1;
echo 'From cn2: ' . $cn2->getName() . '<br>';