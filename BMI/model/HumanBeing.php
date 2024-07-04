<?php
include "./model/BmiIndexer.php";
include "./model/HealthAnalyzer.php";

class HumanBeing {
    private $weight;
    private $height;
    private $bmi;

    private function getHeight() {
        return $this->height;
    }

    private function getWeight() {
        return $this->weight;
    }

    public function setWeight($weight) {
        $this->weight = $weight;
    }

    public function setHeight($height) {
        $this->height = $height;
    }

    public function getBmi() {
        return $this->bmi;
    }

    private function setBmi($bmi) {
        $this->bmi = $bmi;
    }

    public function calculateBMI() {
        $this->setBmi(calculateBMI($this->getHeight(), $this->getWeight()));
    }

    public function analyzeBmi() {
        return analyzerBmi($this->getBmi());
    }
}
?>
