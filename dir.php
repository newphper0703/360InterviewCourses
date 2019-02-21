<?php
/**
 * File dir.php
 * Created by PhpStorm.
 * User: liuzhi1107
 * Date: 2019/1/28
 * Time: 15:51
 */
$dir = './test';

function loopDir($dir)
{
    $handle = opendir($dir);

    while (false !== ($file = readdir($handle))) {

        if ($file != '.' && $file != '..') {

            echo $file . "\n";
            if (filetype($dir . '/'. $file) == 'dir') {

                loopDir($dir. '/'. $file);
            }
        }
    }
}

loopDir($dir);

