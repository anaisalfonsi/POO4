<?php

class Vehicle {

    protected $vehicleType;
    protected $color;
    protected $nbSeats;
    protected $currentSpeed;
    protected $nbWheels;
//optional
    public $name;

//CONSTRUCT
    public function __construct(string $vehicleType, string $color, int $nbSeats, int $currentSpeed)
    {
        $this->vehicleType = $vehicleType;
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->currentSpeed = $currentSpeed;
    }

//return private attibutes
    public function getVehicleType()
    {
        return $this->vehicleType;
    }
    public function getNbWheels()
    {
        return $this->nbWheels;
    }
    public function getCurrentSpeed()
    {
        return $this->currentSpeed;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function getNbSeats()
    {
        return $this->nbSeats;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setVehicleType($vehicleType)
    {
        $this->vehicleType = $vehicleType;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function start()
    {
        try {
            $this->hasParkBrake = true;
        } catch (Exception $e) {
            echo "Exception received  : ". $e->getMessage();
        } finally{
            echo '<br>' .'<br>' ."DRIVING MY CAR LIKE A 🍩" .'<br>' .'<br>' .'<img src="https://media.giphy.com/media/wKBz6El4XUdFK/giphy.gif"/>' .'<br>' .'<br>';
        }
    }
    public function forward()
    {
        $this->currentSpeed = 120;
        return "🔛Aïe, Aïe, Aïe, je suis bien, mais j'ai plus de liquide de freins. ⏩⏩⏩";
    }

    public function brake()
    {
        $this->currentSpeed = 0;
        return "🆘🆘🆘 'Can't stop, addicted to the shindig'. ";
    }
    public function dump()
    {
        var_dump($this);
    }
}