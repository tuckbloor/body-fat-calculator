<?php
class ParilloMethod {


    private $weight;
    private $chest;
    private $abdomen;
    private $thigh;
    private $bicep;
    private $tricep;
    private $subscapular;
    private $suprailiac;
    private $lowerback;
    private $calf;
    private $skin_fold;
    public  $body_fat;
    public  $lean_weight;
    public  $fat_weight;

    public function __construct($weight, $chest, $abdomen, $thigh, $bicep, $tricep, $subscapular, $suprailiac, $lowerback, $calf) {

        $this->weight      = $weight;
        $this->chest       = $chest;
        $this->abdomen     = $abdomen;
        $this->thigh       = $thigh;
        $this->bicep       = $bicep;
        $this->tricep      = $tricep;
        $this->subscapular = $subscapular;
        $this->suprailiac  = $suprailiac;
        $this->lowerback   = $lowerback;
        $this->calf        = $calf;
    }

    public function calculate() {

         $sum = $this->skin_fold = $this->chest + $this->abdomen + $this->thigh + $this->bicep + $this->tricep + $this->subscapular + $this->suprailiac + $this->lowerback + $this->calf;
         $this->body_fat = ($sum * 27) / $this->weight;

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