<?php
    class Car
    {
        private $make_model;
        private $price;
        private $miles;
        private $color;
        private $image;

        function __construct($car_make, $car_price, $car_miles, $car_color, $car_image)
        {
            $this->make_model = $car_make;
            $this->price = $car_price;
            $this->miles = $car_miles;
            $this->color = $car_color;
            $this->image = $car_image;
        }

        // SETTER GETTER MAKE MODEL
        function setMake($new_make)
        {
            $this->make_model = $new_make;
        }
        function getMake()
        {
            return $this->make_model;
        }

        // SETTER GETTER PRICE
        function setPrice($new_price)
        {
            $this->price = $new_price;
        }
        function getPrice()
        {
            return $this->price;
        }

        // SETTER GETTER MILES
        function setMiles($new_miles)
        {
            $this->miles = $new_miles;
        }
        function getMiles()
        {
            return $this->miles;
        }

        // SETTER GETTER COLOR
        function setColor($new_color)
        {
            $this->color = $new_color;
        }
        function getColor()
        {
            return $this->color;
        }

        // SETTER GETTER IMAGE
        function setImage($new_image)
        {
            $this->image = $new_image;
        }
        function getImage()
        {
            return $this->image;
        }

    }
?>
