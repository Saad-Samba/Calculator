<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Calculator extends Controller
{
    static function add($first_operator, $second_operator){
        return $first_operator + $second_operator;
    }

    static function subtract($first_operator, $second_operator){
        return $first_operator - $second_operator;
    }

    static function multiply($first_operator, $second_operator){
        return $first_operator * $second_operator;
    }

    static function divide($first_operator, $second_operator){
        return $first_operator / $second_operator;
    }
}
