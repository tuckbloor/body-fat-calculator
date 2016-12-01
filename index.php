<?php

require_once('classes/JacksonAndPollock3.php');
require_once('classes/JacksonAndPollock4.php');
require_once('classes/JacksonAndPollock7.php');
require_once('classes/ParilloMethod.php');

//$gender, $age, $abdomina, $thigh, $tricep, $suprailiac
$male = new JacksonAndPollock4('M', 44,98,12, 12, 12, 12);
$male->calculate();

echo "<h3>Male Jackson And Pollock 4</h3>";
echo "<p> Body Fat " . $male->body_fat . "%</p>";
echo "<p> kg fat weight " . $male->fat_weight . "</p>";
echo "<p> kg lean weight " . $male->lean_weight . "</p>";
echo "<hr>";

//$gender, $age, $abdomina, $thigh, $tricep, $suprailiac
$female = new JacksonAndPollock4('F', 44,98, 12, 12, 12, 12);
$female->calculate();

echo "<h3>Female Jackson And Pollock 4</h3>";
echo "<p> Body Fat " . $female->body_fat . "%</p>";
echo "<p> kg fat weight " . $female->fat_weight . "</p>";
echo "<p> kg lean weight " . $female->lean_weight . "</p>";
echo "<hr>";

//$gender, $age, $weight, $chest, $abdomen, $thigh, $tricep, $suprailiac for men
$male = new JacksonAndPollock3('M', 44 ,98,12,12,12);
$male->calculate();
echo "<h3>Male Jackson And Pollock 3</h3>";
echo "<p> Body Fat " . $male->body_fat . "%</p>";
echo "<p> kg fat weight " . $male->fat_weight . "</p>";
echo "<p> kg lean weight " . $male->lean_weight . "</p>";
echo "<hr>";

//$gender, $age, $weight,$chest, $abdomen, $thigh, $tricep, $suprailiac for women
$female = new JacksonAndPollock3('F', 44 , 98 ,null,null,12,12,12);
$female->calculate();

echo "<h3>Female Jackson And Pollock 3</h3>";
echo "<p> Body Fat " . $female->body_fat . "%</p>";
echo "<p> kg fat weight " . $female->fat_weight . "</p>";
echo "<p> kg lean weight " . $female->lean_weight . "</p>";
echo "<hr>";

$male = new JacksonAndPollock7('M', 44 ,98 ,12,12,12, 12,12,12,12);
$male->calculate();

echo "<h3>Male Jackson And Pollock 7</h3>";
echo "<p> Body Fat " . $male->body_fat . "%</p>";
echo "<p> kg fat weight " . $male->fat_weight . "</p>";
echo "<p> kg lean weight " . $male->lean_weight . "</p>";
echo "<hr>";


$male = new JacksonAndPollock7('F', 44, 98 ,12,12,12, 12,12,12,12);
$male->calculate();

echo "<h3>Female Jackson And Pollock 7</h3>";
echo "<p> Body Fat " . $male->body_fat . "%</p>";
echo "<p> kg fat weight " . $male->fat_weight . "</p>";
echo "<p> kg lean weight " . $male->lean_weight . "</p>";
echo "<hr>";

//$weight in lbs, $chest, $abdomen, $thigh, $bicep, $tricep, $subscapular, $suprailiac, $lowerback, $cal
$body_fat_parlio = new ParilloMethod(215.6, 12, 12, 12, 12, 12, 12, 12, 12, 12);
$body_fat_parlio->calculate();

echo "<h3>Parillo Method</h3>";
echo "<p> Body Fat " . $body_fat_parlio->body_fat . "%</p>";
echo "<p> lbs fat weight " . $body_fat_parlio->fat_weight . "</p>";
echo "<p> lbs lean weight " . $body_fat_parlio->lean_weight . "</p>";
echo "<hr>";