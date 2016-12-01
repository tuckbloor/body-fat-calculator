<?php
class JacksonAndPollock7 {

    private $gender;
    private $age;
    private $weight;
    private $abdomen;
    private $thigh;
    private $tricep;
    private $suprailiac;
    private $subscapular;
    private $midaxillary;
    private $skin_fold;
    private $skin_fold_squared;
    public  $body_fat;
    public  $lean_weight;
    public  $fat_weight;

    public function __construct($gender, $age, $weight, $chest, $abdomen, $thigh, $tricep, $suprailiac, $subscapular, $midaxillary) {

        $this->gender       = $gender;
        $this->age          = $age;
        $this->weight       = $weight;
        $this->chest        = $chest;
        $this->abdomen      = $abdomen;
        $this->thigh        = $thigh;
        $this->tricep       = $tricep;
        $this->suprailiac   = $suprailiac;
        $this->subscapular  = $subscapular;
        $this->midaxillary  = $midaxillary;
    }

    public function calculate() {

        $this->skin_fold = $this->chest + $this->abdomen + $this->thigh + $this->tricep + $this->suprailiac + $this->subscapular + $this->midaxillary;
        $this->skin_fold_squared = $this->skin_fold * $this->skin_fold;

        if($this->gender == 'M') {

            $part1 = 1.112 - (0.00043499 * $this->skin_fold);
            $part2 = 0.00000055 * $this->skin_fold_squared;
            $part3 = 0.00028826 * $this->age;

        }

        else {

            $part1 = 1.097 - (0.00046971 * $this->skin_fold);
            $part2 = 0.00000056 * $this->skin_fold_squared;
            $part3 = 0.00012828 * $this->age;

        }

        $result = $part1 + $part2 - $part3;

        $this->body_fat = round(495 / $result -450,2);

        $fat = $this->fatWeight($this->body_fat);

        $this->leanWeight($fat);

    }

    public function fatWeight($fat) {

        $this->fat_weight = round(($this->weight / 100) * $fat,2);
        return $this->fat_weight;

    }

    public function leanWeight($fat) {

        $this->lean_weight = round($this->weight - $fat,2);
        return $this->lean_weight;
        
    }

}