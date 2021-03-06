<!-- Signup / Login page for Students & Teachers -->

<?php
    include 'BladeOne/lib/BladeOne.php';
    use eftec\bladeone\BladeOne;

    $views = __DIR__ . '/views';
    $cache = __DIR__ . '/cache';

    $blade = new BladeOne($views,$cache,BladeOne::MODE_DEBUG);

    echo $blade->run("teacherstudentsignup", array("page" => "signup"));