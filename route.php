<?php

require_once('config.php');
$current_url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
echo $current_url;

//Requested page = Current URL - Site URL
//Requested page = something
$request = str_replace($site_url, '', $current_url);

//Replacing extra back slash at the end
$request = str_replace('/', '', $request);

//Converting the request to lowercase
$request = strtolower($request);
