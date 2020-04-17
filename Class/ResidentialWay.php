<?php
require_once 'HighWay.php';
require_once 'Vehicle.php';

final class ResidentialWay extends HighWay {
    const ALLOWED_VEHICLES = ['car', 'truck', 'bike', 'skate', 'spaceship'];

    public function __construct(int $nbLane, int $maxSpeed)
    {
        parent::__construct($nbLane, $maxSpeed);
    }
    public function addVehicle($vehicle) : object
    {
        if (in_array($vehicle->getVehicleType(), self::ALLOWED_VEHICLES)) {
            $this->currentVehicles[] = $vehicle;
            return "🚗 🚛 🚴‍ 🏂";
        } else {
            return "⛔️";
        }
    }
}