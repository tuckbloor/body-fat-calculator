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
         $body_fat = ($sum * 27) / $this->weight;

         return $$body_fat;

    }
}