<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Calculator extends Controller
{
    public function show()
    {
        return view('calculator.show');
    }

    static function add($first_operator, $second_operator)
    {
        return $first_operator + $second_operator;
    }

    static function subtract($first_operator, $second_operator)
    {
        return $first_operator - $second_operator;
    }

    static function multiply($first_operator, $second_operator)
    {
        return $first_operator * $second_operator;
    }

    static function divide($first_operator, $second_operator)
    {
        return $first_operator / $second_operator;
    }

    public function calculate(){
        $this->calculator_validate();
//        print request()->input('first_operator');
//        switch ()
//        return $result;
        switch (request()->input('operation')){
            case '+':
                return Calculator::add(request()->input('first_operator'),request()->input('second_operator'));
                break;
            case '-':
                return Calculator::subtract(request()->input('first_operator'),request()->input('second_operator'));
                break;
            case '*':
                return Calculator::multiply(request()->input('first_operator'),request()->input('second_operator'));
                break;
            case '/':
                return Calculator::divide(request()->input('first_operator'),request()->input('second_operator'));
                break;
        }
    }

    public function calculator_validate(){
        return request()->validate([
            'first_operator' => 'required',
            'second_operator' => 'required',
            'operation' => 'required'
        ]);
    }
}
