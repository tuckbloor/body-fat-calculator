<?php

require_once('classes/JacksonAndPollock3.php');
require_once('classes/JacksonAndPollock4.php');

//$gender, $age, $abdomina, $thigh, $tricep, $suprailiac
$male = new JacksonAndPollock4('M', 44, 20, 12, 12, 12);
echo "<p>" . $male->calculate() . "</p>";

//$gender, $age, $abdomina, $thigh, $tricep, $suprailiac
$female = new JacksonAndPollock4('F', 44, 20, 12, 12, 12);
echo "<p>" . $female->calculate() . "</p>";

//$gender, $age,$chest, $abdomen, $thigh, $tricep, $suprailiac for men
$male = new JacksonAndPollock3('M', 44 ,12,12,12);
echo "<p>" . $male->calculate(). "</p>";

//$gender, $age,$chest, $abdomen, $thigh, $tricep, $suprailiac for women
$female = new JacksonAndPollock3('F', 44 ,null,null,12,12,12);
echo "<p>" . $female->calculate(). "</p>";