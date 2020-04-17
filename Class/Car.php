<?php
require_once 'Vehicle.php';

class Car extends Vehicle
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
        ];
    // Do not modify the rest of the file
    private $energy;
    private $energyLevel;
    protected $hasParkBrake;

    //CONSTRUCT
    public function __construct(string $vehicleType, string $color, int $nbSeats, int $currentSpeed, string $energy)
    {
        parent::__construct($vehicleType, $color, $nbSeats, $currentSpeed);
        $this->energy = $energy;
    }

    public function getEnergy()
    {
        return $this->energy;
    }
    public function getEnergyLevel()
    {
        return $this->energyLevel;
    }
    public function getHasParkBrake() : bool
    {
        return $this->hasParkBrake;
    }
    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }
    public function setEnergyLevel($energyLevel)
    {
        $this->energyLevel = $energyLevel;
    }
    public function addVehicle($car) {
    }

}
