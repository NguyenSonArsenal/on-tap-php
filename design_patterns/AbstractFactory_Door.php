<?php

// abstractFactory
interface DoorFactory
{
    public function makeDoor();
    public function makeFittingExpect();
}

// concertFactory
class WoodenDoorFactory implements DoorFactory
{

    public function makeDoor()
    {
        // TODO: Implement makeDoor() method.
        return new WoodenDoor();
    }

    public function makeFittingExpect()
    {
        // TODO: Implement makeFittingExpect() method.
        return new Welder();
    }
}

class IronDoorFactory implements DoorFactory
{

    public function makeDoor()
    {
        // TODO: Implement makeDoor() method.
        return new IronDoor();
    }

    public function makeFittingExpect()
    {
        // TODO: Implement makeFittingExpect() method.
        return new Carpenter();

    }
}

// AbstractProduct
interface DoorAbstractProduct
{
    public function getDescription();
}

interface DoorFittingExpect
{
    public function getDescription();
}

// products
class WoodenDoor implements DoorAbstractProduct
{
    public function getDescription()
    {
        echo 'I am a woodenDoor';
    }
}

class IronDoor implements DoorAbstractProduct
{
    public function getDescription()
    {
        echo 'I am an irondoor';
    }
}

class Carpenter implements DoorFittingExpect
{
    public function getDescription()
    {
        echo 'i can only fit irondoor';
    }
}

class Welder implements DoorFittingExpect
{
    public function getDescription()
    {
        echo 'I can only fit woodendoor';
    }
}

// client
$woodenFactory = new WoodenDoorFactory();
$door = $woodenFactory->makeDoor();
$expect = $woodenFactory->makeFittingExpect();

$door->getDescription();
echo '---';
$expect->getDescription();
echo '<br>';

$ironFactory = new IronDoorFactory();
$door = $ironFactory->makeDoor();
$expect = $ironFactory->makeFittingExpect();

$door->getDescription();
echo '---';
$expect->getDescription();




