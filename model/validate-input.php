<?php
/**
 * Created by PhpStorm.
 * User: homefolder
 * Date: 2019-05-13
 * Time: 14:20
 */
function validForm()
{
    global $f3;
    $isValid = true;

    if(!validName($f3->get('fname')))
    {
        $isValid = false;
        $f3->set("errors['fname']", "Enter a valid name");
    }

    if(!validCheck($f3->get('result')))
    {
        $isValid = false;
        $f3->set("errors['result']", "Enter at least one value");
    }
    return $isValid;
}

function validName($name)
{
    return $name !=null && ctype_alpha($name);
}

function validCheck($array)
{
    return !empty($array);
}