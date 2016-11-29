<?php

require_once('classes/JacksonAndPollock4.php');

//$gender, $age, $abdomina, $thigh, $tricep, $suprailiac
$body_fat = new JacksonAndPollock4('F', 44, 20, 12, 12, 12);
echo $body_fat->calculate();