<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/12
 * Time: 9:11
 */

for ($b = 1; $b <= 4; $b++) {
    for ($s = 1; $s <= 4; $s++) {
        for ($g = 1; $g <= 4; $g++) {
            if ($b != $s && $b != $g && $g != $s) {
                printf("%d%d%d\n", $b, $s, $g);

            }
        }
    }
}
