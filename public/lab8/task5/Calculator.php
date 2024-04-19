<?php

class Calculator {
    public function add($a, $b) {
        if ($this->isValidNumber($a) && $this->isValidNumber($b)) {
            return $a + $b;
        } else {
            return "Недопустиме(мі) значення";
        }
    }

    public function subtract($a, $b) {
        if ($this->isValidNumber($a) && $this->isValidNumber($b)) {
            return $a - $b;
        } else {
            return "Недопустиме(мі) значення";
        }
    }

    public function multiply($a, $b) {
        if ($this->isValidNumber($a) && $this->isValidNumber($b)) {
            return $a * $b;
        } else {
            return "Недопустиме(мі) значення";
        }
    }

    public function divide($a, $b) {
        if ($this->isValidNumber($a) && $this->isValidNumber($b)) {
            if ($b == 0) {
                return "Ділення на нуль неможливе";
            } else {
                return $a / $b;
            }
        } else {
            return "Недопустиме(мі) значення";
        }
    }

    public function modulus($a, $b) {
        if ($this->isValidNumber($a) && $this->isValidNumber($b)) {
            if ($b == 0) {
                return "Ділення на нуль неможливе";
            } else {
                return $a % $b;
            }
        } else {
            return "Недопустиме(мі) значення";
        }
    }

    public function root($a, $b) {
        if ($this->isValidNumber($a) && $this->isValidNumber($b)) {
            if ($a < 0 && $b % 2 == 0) {
                return "Взяти корінь парного ступеня від від'ємного числа неможливо";
            } elseif ($b <= 0) {
                return "Ступінь кореня має бути більше нуля";
            } else {
                return pow($a, 1/$b);
            }
        } else {
            return "Недопустиме(мі) значення";
        }
    }    

    public function power($a, $b) {
        if ($this->isValidNumber($a) && $this->isValidNumber($b)) {
            return pow($a, $b);
        } else {
            return "Недопустиме(мі) значення";
        }
    }

    private function isValidNumber($num) {
        return is_numeric($num) && $num >= -1000000 && $num <= 1000000;
    }
}