<?php

namespace Phroses;

function FileList($dir) {
    $files = [];
    $iterator = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($dir), \RecursiveIteratorIterator::CHILD_FIRST);
    foreach($iterator as $file) {
        if(!substr($file, strrpos($file, ".")+1)) continue;
        $files[] = $file;
    }
    return $files;
}