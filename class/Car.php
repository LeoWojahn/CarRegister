<?php 

class Car {
    private string $fab;
    private string $model;
    private string $version;
    private int $year;
    private string $color;

    // Obter o valor dos atributos
    public function getFab() {
        return $this->fab;
    }
    public function getModel() {
        return $this->model;
    }
    public function getVersion() {
        return $this->version;
    }
    public function getYear() {
        return $this->year;
    }
    public function getColor() {
        return $this->color;
    }

    // Setar valor dos atributos
    public function setFab($fab) {
        $this->fab = $fab;
    }
    public function setModel($model) {
        $this->model = $model;
    }
    public function setVersion($version) {
        $this->version = $version;
    }
    public function setYear($year) {
        $this->year = $year;
    }
    public function setColor($color) {
        $this->color = $color;
    }
}