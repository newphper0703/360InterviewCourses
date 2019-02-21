<?php
/**
 * File func.php
 * Created by PhpStorm.
 * User: liuzhi1107
 * Date: 2019/1/25
 * Time: 17:36
 */
$count = 5;
function get_count()
{
    static $count;
    return $count++;
}
echo $count;
++$count;

echo get_count();
echo get_count();

$outer = 'str';
function myfunc()
{
    global $outer;
    $GLOBALS['outer'];
    echo $outer;
}

echo myfunc();

function my_func()
{
    static $a = 1;
    echo $a++;
}
echo my_func();
echo my_func();
echo my_func();

$a = 1;
function myFun($a)
{
    $a = 2;
}
myFun($a);
echo $a;

$a = 1;
function myFun1(&$a)
{
    $a = 2;
}
myFun1($a);
echo $a;

function &myFunct()
{
    static $b = 10;
    return $b;
}

$a = myFunct();
$a = &myFunct();
$a = 100;
echo myFunct();

