<?php
class ThirdLaw extends Laws {
    private float $action;
    private float $reaction;
    private float $calculate;

    public function __construct(float $action) {
        parent::__construct("Third Law: Action and Reaction");
        $this->action = $action;
        $this->reaction = -$action;
        $this->explanation = "For every action, there is an equal and opposite reaction";
    }

    public function getAction(): float {
        return $this->action;
    }

    public function getReaction(): float {
        return $this->reaction;
    }

    public function calculateLaw(): float {
        $this->calculate = $this->reaction; // The reaction is equal in magnitude but opposite
        return $this->calculate;
    }
}
?>
