<?php
/**
 * File q.php
 * Created by PhpStorm.
 * User: liuzhi1107
 * Date: 2019/1/24
 * Time: 16:07
 */

$data = ['a', 'b', 'c'];

foreach ($data as $key => $val) {

    echo $key . "\n";
    echo $data[$key] . "\n";
    $val = &$data[$key];
    echo $val . "\n";
    print_r($data);

}