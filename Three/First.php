<?php
class FirstLaw extends Laws {
    private float $force;
    private float $calculate;

    public function __construct(float $force){
        parent::__construct("First Law: Inertia");
        $this->force = $force;
        $this->explanation = "an object will remain at rest or in uniform rectilinear motion unless acted upon by an external force";
    }
    public function getForce(): float {
        return $this->force;
    }
    public function calculateLaw(): float {
        $this->calculate = $this->getForce();
        return $this->calculate;
    }
}
?>