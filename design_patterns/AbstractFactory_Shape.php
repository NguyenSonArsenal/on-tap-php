<?php

// AbstractProduct
interface Shape {
    const SQUARE = 1;
    const CIRCLE = 2;
    const RECTRANGLE = 3;

    function draw();
}

interface Color {
    function fill();
}

// ====================

// Products
class Circle implements Shape
{
    function draw()
    {
        // TODO: Implement draw() method.
        echo 'Drawwing circle';
    }
}
class Square implements Shape
{
    function draw()
    {
        // TODO: Implement draw() method.
        echo 'Drawwing square';
    }
}
class Rectangle implements Shape
{
    function draw()
    {
        // TODO: Implement draw() method.
        echo 'Drawwing rectangle';
    }
}

class Red implements Color
{
    function fill()
    {
        // TODO: Implement fill() method.
        echo 'Red color';
    }
}

class Green implements Color
{
    function fill()
    {
        // TODO: Implement fill() method.
        echo 'Green color';
    }
}

class Blue implements Color
{
    function fill()
    {
        // TODO: Implement fill() method.
        echo 'Blue color';
    }
}

// ====================

// abstract factory
// AbstractFactory

abstract class AbstractFactory
{
    abstract function getShape($type);
    abstract function getColor($color);
}

// ====================

// ConcreteFactory
class ShapeFactory extends AbstractFactory
{
    public function getShape($type)
    {
        // TODO: Implement getShape() method.
        switch ($type) {
            case Shape::SQUARE :
                return new Square(); break;
            case Shape::CIRCLE :
                return new Circle(); break;
            case Shape::RECTANGLE :
                return new Rectangle(); break;
            default:
                return null; break;
        }
    }

    function getColor($color)
    {
        // TODO: Implement getColor() method.
    }
}

class ColorFactory extends AbstractFactory
{
    public function getColor($color)
    {
        // TODO: Implement getColor() method.
        switch ($color){
            case 'red' :
                return new Red(); break;
            case 'green' :
                return new Green(); break;
            case 'blue' :
                return new Blue(); break;
            default:
                return null;
                break;
        }
        return null;
    }

    function getShape($type)
    {
        // TODO: Implement getShape() method.
    }
}

// ====================
// class to choose factory

class FactoryProducer
{
    public static function getFactory ($choice)
    {
        $choice = strtolower($choice);

        if ($choice == 'shape') {
            return new ShapeFactory();
        }
        else if ($choice == 'color')
            return new ColorFactory();
        else {
            echo 'khong ton tai';
            return null;
        }

    }
}

// ====================
// client
$shapeFactory = FactoryProducer::getFactory('shaped');
$shapeFactory->getShape(Shape::CIRCLE)->draw();

echo '<br>';

$colorFactory = FactoryProducer::getFactory('color');
$colorFactory->getColor('blue')->fill();

