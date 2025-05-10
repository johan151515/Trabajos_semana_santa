<?php
class SecondLaw extends Laws {
    private float $force;
    private float $mass;
    private float $acceleration;
    private float $calculate;

    public function __construct(float $force, float $mass, float $acceleration){
        parent::__construct("Second Law: Force = Mass x Acceleration");
        $this->force = $force;
        $this->mass = $mass;
        $this->acceleration = $acceleration;
        $this->explanation = "The acceleration of an object is directly proportional to the net force acting on the object and inversely proportional to its mass.";
    }
    public function getForce(): float {
        return $this->force;
    }
    public function getMass(): float {
        return $this->mass;
    }
    public function getAcceleration(): float {
        return $this->acceleration;
    }
    public function calculateLaw(): float{
        $this->calculate = $this->getMass() * $this->getAcceleration();
        return $this->calculate;
    }
}
?>