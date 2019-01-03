<?php
class Digital_calculator
{
    public function __construct()
    {
        $arguments              = array();
        $arr_allowed_operations = array('sum');
        $pattern                = '/[,]/';
    }

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

    public function get_calculations($arguments)
    {
        array_shift($arguments);
        $operation   = (isset($arguments) && $arguments != '') ? $arguments[0] : '';
        $arr_numbers = preg_split($pattern, $arguments[0]);

        if(!in_array($operation, $arr_allowed_operations)) {
            return 'Invalid Operation';
        } else {
            return array_sum($arr_numbers);
        }
    }
}
?> 
