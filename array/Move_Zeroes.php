<?php
/*Given an array nums, write a function to move all 0's to the end of it while maintaining the relative order of the non-zero elements.

Example:

Input: [0,1,0,3,12]
Output: [1,3,12,0,0]
Note:

You must do this in-place without making a copy of the array.
Minimize the total number of operations.*/

class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {
        $slow = 0;
        $fast = 0;
        while($fast < count($nums)){
            if($nums[$fast] ==0){
                ++$fast;
            }else{
                $nums[$slow]=$nums[$fast];
                ++$slow;
                ++$fast;
            }
        }
         while($slow < count($nums)){
             $nums[$slow] = 0;
             ++$slow;
         }
    }
}