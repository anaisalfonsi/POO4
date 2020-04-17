<?php
require_once 'HighWay.php';
require_once 'Vehicle.php';

final class MotorWay extends HighWay {
    const ALLOWED_VEHICLES = ['car', 'truck'];

    public function __construct(int $nbLane, int $maxSpeed)
    {
        parent::__construct($nbLane, $maxSpeed);
        $this->nbLane = 4;
        $this->maxSpeed = 130;
    }
    public function addVehicle($vehicle) : object
    {
        if (in_array($vehicle->getVehicleType(), self::ALLOWED_VEHICLES)) {
            $this->currentVehicles[] = $vehicle;
            echo "🚗 🚛";
        } else {
            echo "⛔️";
        }
    }
}
