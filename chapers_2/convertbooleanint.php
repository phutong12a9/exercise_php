<?php
echo 'Boolean to Int';
$trueValueBool = true;
$falseValueBool = false;
echo 'Before type conversion:';
var_dump($trueValueBool);
var_dump($falseValueBool);
echo 'After type conversion:';
$trueValueInt = (int) ($trueValueBool);
$falseValueInt = (int) ($falseValueBool);
var_dump($trueValueInt);
var_dump($falseValueInt);