<?php
/**
 * File a.php
 * Created by PhpStorm.
 * User: liuzhi1107
 * Date: 2019/1/25
 * Time: 17:15
 */
$a =  0;
$b = 0;

//优先级：> || =

if ($a = 3 > 0 || $b = 3> 0) {

    //$a = true,$b = 0
    $a++;
    $b++;
    echo $a."\n";
    echo $b."\n";
}