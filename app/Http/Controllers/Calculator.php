<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function Laravel\Prompts\alert;

class Calculator extends Controller
{
    public function show()
    {
        return view('calculator.show',[
            'result' => ''
        ]);
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
                return view('/calculator.show', [
                    'result' => Calculator::add(request()->input('first_operator'),request()->input('second_operator')),]);
                break;
            case '-':
                return view('/calculator.show', [
                    'result' => Calculator::subtract(request()->input('first_operator'),request()->input('second_operator'))]);
                break;
            case '*':
                return view('/calculator.show', [
                    'result' => Calculator::multiply(request()->input('first_operator'),request()->input('second_operator'))]);
                break;
            case '/':
                if (request()->input('second_operator') == 0) {
                    return back()->with('status', "You can't divide by zero!");
//                    alert('Package installed successfully.');
                }

                else {
                    return view('/calculator.show', [
                        'result' => Calculator::divide(request()->input('first_operator'),request()->input('second_operator'))]);
                    break;
                }
        }
    }

    public function calculator_validate(){
        return request()->validate([
            'first_operator' => ['required', 'numeric'],
            'second_operator' => ['required', 'numeric'],
            'operation' => 'required'
        ]);
    }
}
