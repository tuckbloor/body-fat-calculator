<?php

class JacksonAndPollock3 {
    private $gender;
    private $age;
    private $chest;
    private $abdomen;
    private $thigh;
    private $tricep;
    private $suprailiac;
    private $skin_fold;
    private $skin_fold_squared;

    public function __construct($gender, $age,$chest=null, $abdomen=null, $thigh, $tricep=null, $suprailiac=null) {
        $this->gender     = $gender;
        $this->age        = $age;
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

            $part1 = (1.10938 - (0.0008267 * ($this->thigh + $this->chest + $this->abdomen))) ;
            $part2 = (0.0000016 * $this->skin_fold_squared);
            $part3 = (0.000257 * $this->age);

            $result = $part1 + $part2 - $part3;
            $body_fat = 495 / $result - 450;
        }

        else {
            $this->skin_fold = $this->suprailiac + $this->thigh + $this->tricep;
            $this->skin_fold_squared = $this->skin_fold * $this->skin_fold;

            $part1 = (1.0994921 - (0.0009929 * ($this->thigh + $this->suprailiac + $this->tricep))) ;
            $part2 = (0.0000023 * $this->skin_fold_squared);
            $part3 = (0.0001392 * $this->age);

            $result = $part1 + $part2 - $part3;
            $body_fat = 495 / $result - 450;

        }

        return $body_fat;

    }
}