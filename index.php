<?php
/**
 * Date: 26.12.11
 * Author: Sergey Sokurenko
 * Title: PHP Redirection
 * Desc.: PHP script for redirecting users from a particular web page on an URL to exactly the same page on another URL
 *
 * Instructions:
 * 1) Update the $new_url variable with the address of your new website
 * 2) Upload the updated index.php file to the root folder of your web-server with PHP support
 * 3) Upload the attached .htaccess file to the root folder to redefine website settings
 */

// Setting the new URL address for redirection
$new_url = 'sokurenko.com';

// Getting the current URI
$uri = $_SERVER['REQUEST_URI'];

// Sending the header with the updated URL
$url = 'http://' . $new_url . $uri;
header("Location: $url");
?>