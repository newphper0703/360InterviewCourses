<?php
/**
 * File regex.php
 * Created by PhpStorm.
 * User: liuzhi1107
 * Date: 2019/1/28
 * Time: 10:48
 */

$str1 = '13912345678';

$pattern1 = '/^139\d{8}$/';
preg_match($pattern1, $str1, $match1);
var_dump($match1);
$str = '中文';

$pattern = '/[\x{4e00}-\x{9fa5}]+/u';

//pattern = '/['.chr(0xb0).'-'.chr(0xf7).']['.chr(0xa1).'-'.chr(0xfe).']/';

preg_match($pattern, $str, $match);

var_dump($match);

$str2 = '<img alt="" id="av" src="av.jpg" />';

$pattern2 ='/<img.*?src="(.*?)".*?\/?>/i';

preg_match($pattern2, $str2, $match2);

var_dump($match2);

