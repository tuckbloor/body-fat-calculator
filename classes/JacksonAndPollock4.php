<?php

class JacksonAndPollock4 {

    private $gender;
    private $age;
    private $weight;
    private $abdomina;
    private $thigh;
    private $tricep;
    private $suprailiac;
    private $skin_fold;
    private $skin_fold_squared;
    public  $body_fat;
    public  $lean_weight;
    public  $fat_weight;

            public function __construct($gender, $age, $weight, $abdomina, $thigh, $tricep, $suprailiac) {

                $this->gender     = $gender;
                $this->weight     = $weight;
                $this->age        = $age;
                $this->abdomina   = $abdomina;
                $this->thigh      = $thigh;
                $this->tricep     = $tricep;
                $this->suprailiac = $suprailiac;

            }

            public function calculate() {

                //sum of skin folds
                $this->skin_fold = $this->abdomina + $this->thigh + $this->tricep + $this->suprailiac;
                $this->skin_fold_squared = $this->skin_fold * $this->skin_fold;

                if($this->gender == 'M') {

                    $part1          = 0.29288 * $this->skin_fold;
                    $part2          = 0.0005  * $this->skin_fold_squared;
                    $part3          = 0.15845 * $this->age;
                    $this->body_fat = ($part1 - $part2) + $part3 -5.76377;

                }

                else {

                    $part1          = 0.29669 * $this->skin_fold;
                    $part2          = 0.00043 * $this->skin_fold_squared;
                    $part3          = 0.02963 * $this->age;
                    $this->body_fat = ($part1 - $part2) + $part3 + 1.4072;

        }

        $fat = $this->fat_weight = $this->fatWeight($this->body_fat);

        $this->leanWeight($fat);

        $return['body_fat_percent']    = $this->body_fat;
        $return['fat_weight']          = $this->fat_weight;
        $return['lean_weight']         = $this->lean_weight;

        return $return;

    }

    public function fatWeight($fat) {
        $this->fat_weight = ($this->weight / 100) * $fat;
        return $this->fat_weight;
    }

    public function leanWeight($fat) {
        $this->lean_weight = $this->weight - $fat;
        return $this->lean_weight;
    }
}