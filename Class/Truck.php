<?php
require_once 'Vehicle.php';

class Truck extends Vehicle
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    // Do not modify the rest of the file
    private $energy;
    private $energyLevel;
    //truck specific :
    private $storageCapacity;
    private $loadState = 0;

    public function __construct(string $vehicleType, string $color, int $nbSeats, int $currentSpeed, string $energy, int $storageCapacity)
    {
        parent::__construct($vehicleType, $color, $nbSeats, $currentSpeed);
        $this->energy = $energy;
        $this->storageCapacity= $storageCapacity;
    }
    public function getEnergy()
    {
        return $this->energy;
    }
    public function getEnergyLevel()
    {
        return $this->energyLevel;
    }
    public function getStorageCapicity()
    {
        return $this->storageCapacity;
    }
    public function getLoadState()
    {
        return $this->loadState;
    }
    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }
    public function setEnergyLevel(int $energyLevel)
    {
        $this->energyLevel = $energyLevel;
    }
    public function setStorageCapacity(int $storageCapacity)
    {
        $this->storageCapacity = $storageCapacity;
    }
    public function setLoadState(int $loadState)
    {
        $this->loadState = $loadState;
    }
    public function store()
    {
        if ($this->loadState < $this->storageCapacity){
        return "In filling";
        } elseif ($this->loadState >= $this->storageCapacity) {
            return "full" .'<br>' .'<br>' ."<img src='https://media.giphy.com/media/lmIqGhMyHyf7O/giphy.gif'/>";
        }
    }
}