<?php

interface Shape {
    const SQUARE = 1;
    const CIRCLE = 2;
    const RECTANGLE = 3;

    function draw();
}

class Circle implements Shape {
    public function draw()
    {
        // TODO: Implement draw() method.
        echo 'Draw circle';
    }
}

class Square implements Shape {
    public function draw()
    {
        // TODO: Implement draw() method.
        echo 'Draw square';
    }
}

class Rectangle implements Shape {
    public function draw()
    {
        // TODO: Implement draw() method.
        echo 'Draw rectangle';
    }
}

class ShapeFactory {

    // Factory method
    public function getShape ($type)
    {
        switch ($type) {
            case Shape::SQUARE:
                return new Square(); break;
            case Shape::CIRCLE:
                return new Circle(); break;
            case Shape::RECTANGLE:
                return new Rectangle(); break;
            default:
                return null;
                break;
        }
    }
}

$shape = new ShapeFactory();
$result = $shape->getShape(Shape::SQUARE);
if ($result != null) {
    $result->draw();
} else {
    echo 'xxxddd';
}

//class ShapeFactory
//{
//    public function getShape($type) {
//        switch ($type) {
//            case Shape::SQUARE:
//                return new Square;
//                break;
//            case Shape::CIRCLE:
//                return new Circle;
//                break;
//
//            case Shape::RECTANGLE:
//                return new Rectangle;
//                break;
//            default:
//                return null
//                break;
//        }
//        return null;
//    }
//}