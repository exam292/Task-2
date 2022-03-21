
<?php
include 'BladeOne/lib/BladeOne.php';
use eftec\bladeone\BladeOne;

$views = __DIR__ . '/views';
$cache = __DIR__ . '/cache';

$blade = new BladeOne($views,$cache,BladeOne::MODE_DEBUG);

$username="Ben";
echo $blade->run("reset-password",array("variable1"=>$username));
