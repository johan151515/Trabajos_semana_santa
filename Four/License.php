<?php
abstract class License {
    private string $type;
    private float $cost;
    private int $duration; // In years

    public function __construct(string $type, float $cost, int $duration) {
        $this->type = $type;
        $this->cost = $cost;
        $this->duration = $duration;
    }

    public function getType(): string {
        return $this->type;
    }

    public function getCost(): float {
        return $this->cost;
    }

    public function getDuration(): int {
        return $this->duration;
    }

    abstract public function calculateTotalCost(): float;
}
?>