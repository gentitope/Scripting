<?php
/**
 * Created by IntelliJ IDEA.
 * User: temitope.oteyowo
 * Date: 3/4/17
 * Time: 6:41 PM
 */

// Github Vars
$user = 'gentitope';
$owner = 'gentitope';
$repo = 'pyes2csv';
$branch = 'Production';
$sha = 'd2a7c455a1bb8ea76ca63c2c9038be46443ff73d';

// A token generated from github for API connection

$token = 'f1d35d9fa3b5a814393a01760067927a0ba2004f';

// Generate the url for curl for user api
$curl_url = 'https://api.github.com/users/' . $user . '/repos';

// Generate the url for curl for commits api
//$curl_url = 'https://api.github.com/repos/' . $owner . '/' . $repo . '/git/commits/' . $sha . '';

// Generate the url for curl for branch api
//$curl_url = 'https://api.github.com/repos/' . $owner . '/' . $repo . '/git/refs/heads/' . $branch . '';

// Header part for the token
$curl_token_auth = 'Authorization: token ' . $token;

//make the actual curl initialization
$ch = curl_init($curl_url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// curl headers
curl_setopt($ch, CURLOPT_HTTPHEADER, array('User-Agent: ' . $owner . '', $curl_token_auth));

// Execute the curl
$output = curl_exec($ch);
if ($output = 0) {
    echo "command executed";
} else {
    die("Error: Token is invalid.");
}

// Close the curl
curl_close($ch);

//Get data output
$output = json_decode($output, true);
//print_r($output);

file_put_contents("$owner.txt", print_r($output, true));


$repo = array_column($output, 'url');

file_put_contents("repos.txt", print_r($repo, true));


