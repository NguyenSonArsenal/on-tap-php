<?php

interface Door {
    public function getWidth();
    public function getHeight();
}

class WoodenDoor implements Door {
    protected $width;
    protected $height;

    public function __construct(float $width, float $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function getWidth()
    {
        // TODO: Implement getWidth() method.
        return $this->width;
    }

    public function getHeight()
    {
        // TODO: Implement getHeight() method.
        return $this->height;
    }
}

class DoorFactory {
    public static function makeDoor($width, $height)
    {
        return new WoodenDoor($width, $height);
    }
}

$door = DoorFactory::makeDoor(100, 200);
echo 'Width: ' . $door->getWidth() . '<br>';
echo 'Height: ' . $door->getHeight();