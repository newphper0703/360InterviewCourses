<?php
/**
 * File file.php
 * Created by PhpStorm.
 * User: liuzhi1107
 * Date: 2019/1/28
 * Time: 15:30
 */

$file = './hello.txt';

$handle = fopen($file, 'r');

$content = fread($handle, filesize($file));

$content = 'Hello World'. $content;

fclose($handle);

$handle = fopen($file, 'w');

fwrite($handle, $content);

fclose($handle);




