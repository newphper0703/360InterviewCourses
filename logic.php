<?php
/**
 * File logic.php
 * Created by PhpStorm.
 * User: liuzhi1107
 * Date: 2019/2/18
 * Time: 15:30
 */

$a = [1, 1];

for ($i = 2; $i< 30; $i++) {
    $a[$i] = $a[$i-1] + $a[$i-2];
}

//var_dump(end($a), $a[29], $a[count($a)-1], $a);

$str = 'open_the_door';

function strHandle($str)
{
    $str_arr = explode('_', $str);

    $return  = '';
    foreach ($str_arr as $k => $v) {

         $return .=ucfirst($v);

    }

    return $return;
}
echo strHandle($str)."\n";


function str_rev($str)
{
    for ($i=0;true;$i++) {

        if (!isset($str[$i])) {
            break;
        }
    }

    $return  =  '';
    for ($j=$i-1;$j>=0;$j--) {
        $return .= $str[$j];
    }
    return $return;
}

echo str_rev($str)."\n";

function array_mer()
{
    $return =  [];
    $arrays = func_get_args();
    foreach ($arrays as $arr) {
        if (is_array($arr)) {

            foreach ($arr as $val) {
                $return[] = $val;
            }
        }
    }

    return $return;
}

var_dump(array_mer([1,2], [3], [5,6]));
