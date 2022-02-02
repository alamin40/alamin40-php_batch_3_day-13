<?php
require_once 'vendor/autoload.php';
use App\classes\Calculator;

if(isset($_POST['operator']))
{
    $calculator = new Calculator($_POST);
    $result = $calculator->index();
//    $f_name = $calculator->firstNumber;
//    $s_name = $calculator->secondNumber;
    include  'index.php';
}
else
{
    header('Location: index.php');
}



