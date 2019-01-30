<?php
/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 25/10/2018
 * Time: 00:02
 */
const ADDITION = '+';
const DECREASE = '-';
const MULTICIPLE = '*';
const DIVIDE = '/';
class Calculator
{
    public function calculate($firstOperand, $secondOperand, $operator) {
        switch ($operator) {
            case ADDITION:
                return $firstOperand + $secondOperand;
            case DECREASE:
                return $firstOperand - $secondOperand;
            case MULTICIPLE:
                return $firstOperand * $secondOperand;
            case DIVIDE:
                if ($secondOperand != 0) {
                    return $firstOperand / $secondOperand;
                } else {
                    echo("Can not divide by 0");
                    break;
                }
            default:
                echo ("Unsupported operation");
        }
    }
}