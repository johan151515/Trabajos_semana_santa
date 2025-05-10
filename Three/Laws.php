
<?php
abstract class Laws {
    protected string $name;
    protected string $explanation;

    public function __construct(string $name){
        $this->name = $name;
    }
    public function getName(): string {
        return $this->name;
    }
    public function getExplanation(): string {
        return $this->explanation;
    }
    abstract public function calculateLaw(): float;
}
?>