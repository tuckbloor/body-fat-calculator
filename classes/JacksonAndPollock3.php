<?php

class JacksonAndPollock3 {
    private $gender;
    private $age;
    private $weight;
    private $chest;
    private $abdomen;
    private $thigh;
    private $tricep;
    private $suprailiac;
    private $skin_fold;
    private $skin_fold_squared;
    public  $body_fat;
    public  $lean_weight;
    public  $fat_weight;

    public function __construct($gender, $age, $weight, $chest=null, $abdomen=null, $thigh, $tricep=null, $suprailiac=null) {

        $this->gender     = $gender;
        $this->age        = $age;
        $this->weight     = $weight;
        $this->chest      = $chest;
        $this->abdomen    = $abdomen;
        $this->thigh      = $thigh;
        $this->tricep     = $tricep;
        $this->suprailiac = $suprailiac;

    }

    public function calculate() {


        if($this->gender =='M') {

            $this->skin_fold = $this->abdomen + $this->thigh + $this->chest;
            $this->skin_fold_squared = $this->skin_fold * $this->skin_fold;

            $part1 = (1.10938 - (0.0008267 * ($this->skin_fold))) ;
            $part2 = (0.0000016 * $this->skin_fold_squared);
            $part3 = (0.000257 * $this->age);

        }

        else {

            $this->skin_fold = $this->suprailiac + $this->thigh + $this->tricep;
            $this->skin_fold_squared = $this->skin_fold * $this->skin_fold;

            $part1 = (1.0994921 - (0.0009929 * ($this->skin_fold))) ;
            $part2 = (0.0000023 * $this->skin_fold_squared);
            $part3 = (0.0001392 * $this->age);

        }

        $result = $part1 + $part2 - $part3;
        $this->body_fat = number_format(495 / $result - 450, 2, '.', '');

        $fat = $this->fatWeight($this->body_fat);

        $this->leanWeight($fat);

    }

    public function fatWeight($fat) {

        $this->fat_weight = number_format(($this->weight / 100) * $fat, 2, '.', '');
        return $this->fat_weight;

    }

    public function leanWeight($fat) {

        $this->lean_weight = number_format($this->weight - $fat, 2, '.', '');
        return $this->lean_weight;

    }
}