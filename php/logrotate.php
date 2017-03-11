<?php
/**
 * Created by IntelliJ IDEA.
 * User: temitope.oteyowo
 * Date: 3/8/17
 * Time: 10:31 PM
 */

// Iterate on all the files in a directory and get the file size and date created
$dir_file = new DirectoryIterator('/tmp');
foreach ($dir_file as $fileinfo) {
    if ($fileinfo->isFile()) {
        #echo $fileinfo->getFilename() . " " . $fileinfo->getSize() . " " . $fileinfo->getCTime() . "\n";
        if ($fileinfo->getSize() == 2048000 AND $fileinfo->getCTime() < (strtotime("7   March 2017"))   ) {
            echo 'file size not to be rotated' . "\n" ;
        }
    }
}