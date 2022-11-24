<?php

$o = ['test' => 1, "test2" => 2];

print_r(array_merge($o, ['test2' => null]));