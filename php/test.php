<?php

$array = file("repos.txt");
foreach ($array as $item) {
    //list($RepoName) = explode('/', $item, 4);
echo $item;
$pattern = '/.*\/.*$/';
preg_match($pattern, $item, $matches);
print_r($matches);

    #$data = [];
   // print_r($item);
}