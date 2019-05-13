<?php
/**
 * Created by PhpStorm.
 * User: homefolder
 * Date: 2019-05-13
 * Time: 13:17
 */

//Start session
session_start();

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the autoload file
require_once('vendor/autoload.php');

//Create an instance of the Base class
$f3 = Base::instance();

//Turn on Fat-Free error reporting
$f3->set('DEBUG', 3);

//This route links to a survey
$f3->route('GET /', function()
{
    echo "<h1>Midterm Survey</h1>";
    echo "<a href='views/survey.html'>Take my survey</a>";
});

$f3->run();