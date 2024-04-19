<?php
require_once '../task5/Calculator.php';

class Dispatcher {
    private $calculator;

    public function __construct(Calculator $calculator) {
        $this->calculator = $calculator;
    }

    public function dispatch($operation, $a, $b = null) {
        switch ($operation) {
            case 'add':
                return $this->calculator->add($a, $b);
            case 'subtract':
                return $this->calculator->subtract($a, $b);
            case 'multiply':
                return $this->calculator->multiply($a, $b);
            case 'divide':
                return $this->calculator->divide($a, $b);
            case 'modulus':
                return $this->calculator->modulus($a, $b);
            case 'root':
                return $this->calculator->root($a, $b);
            case 'power':
                return $this->calculator->power($a, $b);
            default:
                return "Невідома операція";
        }
    }

    public function display($result) {
        echo "Результат: $result";
    }
}