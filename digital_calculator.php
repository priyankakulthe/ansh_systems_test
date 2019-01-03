<?php
/**
 * Digital calculator is command line program in PHP which accepts the operation and numbers as an argument and returns the result 
 */

class Digital_calculator
{
    public function __construct()
    {
        $arguments              = array();
        $arr_allowed_operations = array('sum', 'add');
        $pattern                = '/[,\n;]/';
    }

    /** 
     *  This function is called by default when we run this file
     * @param  [array] comma array of operation and numbers
     * @return [number] sum of arguments if correct and proper message if wrong args 
     */
    public function index($arguments)
    {
        if (!isset($arguments) && sizeof($arguments) == 0) {
            print_r('Invalid arguments');
        } else {
            if (!get_calculations($arguments))
                print_r(0);
            else
                print_r(get_calculations($arguments));
        }
    }

    /**
     * This function will actually perform the operation supplied to function
     * @param  [array] array of arguments like operation and numbers
     * @return [number] returns the sum of numbers or as operation specified
     */
    public function get_calculations($arguments)
    {
        array_shift($arguments);
        $operation   = (isset($arguments) && $arguments != '') ? $arguments[0] : '';
        $arr_numbers = preg_split($pattern, $arguments[0]);

        if(!in_array($operation, $arr_allowed_operations)) {
            print_r('Invalid Operation');
        } else {
            if (min($arr_numbers) < 0)
                print_r("Error: Negative numbers not allowed.");
            else
                print_r(array_sum($arr_numbers));
        }
    }
}
/**
 * Developer Name: Priyanka Kulthe
 */
?> 
