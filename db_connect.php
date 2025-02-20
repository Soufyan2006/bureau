<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "webshop";
$port = "3306";

$con = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if ($con->connect_errno) {
    echo "Failed to connect to MySQL: " . $con->connect_error;
    exit();
}

define("BASEURL", "http://localhost/webdev-base-webshop/");
define("BASEURL_CMS", "http://localhost/webdev-base-webshop/admin/");

function prettyDump($var)
{
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
}