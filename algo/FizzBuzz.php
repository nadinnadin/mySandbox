<?php

/*Write a program that outputs the string representation of numbers from 1 to n.

But for multiples of three it should output “Fizz” instead of the number and for the multiples of five output “Buzz”. For numbers which are multiples of both three and five output “FizzBuzz”.*/

class Solution {
    /**
     * @param Integer $n
     * @return String[]
     */
    function fizzBuzz($n) {
        for($i=1;$i<=$n;$i++){
            $arr[$i-1] =(($i%3==0)&&($i%5==0))?"FizzBuzz":(($i%5==0)?"Buzz":(($i%3==0)?"Fizz":"$i"));    
        }
        return $arr;
    }
}