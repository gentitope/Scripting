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
$sha = '809452715b84239fd1df336aed27a1174f7b1a63';

// A token generated from github for API connection

$token = 'd2a7c455a1bb8ea76ca63c2c9038be46443ff73d';

// Generate the url for curl for user api
//$curl_url = 'https://api.github.com/users/' . $user . '/repos';

// Generate the url for curl for commits api
$curl_url = 'https://api.github.com/repos/' . $owner . '/' . $repo . '/git/commits/' . $sha . '';

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


// Close the curl
curl_close($ch);

// Print the output
print_r($output);
var_dump($output);

