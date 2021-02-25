<?php

spl_autoload_register(function ($class) {
    $root = $_SERVER['DOCUMENT_ROOT'];

    $sources = array("$root/$class.php", "$root/dto/$class.php");

    foreach ($sources as $source) {
        if (file_exists($source)) {
            require_once $source;
        }
    }
});

