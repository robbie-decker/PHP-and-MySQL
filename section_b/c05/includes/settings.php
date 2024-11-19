<?php
define('SITE_NAME', value: 'Mountain Art Supplies');
const ADMIN_EMAIL = 'admin@eg.link';

$myNewNum = 0;

function testing_static()
{
    static $myNum = 0;
    global $myNewNum;
    // $myNum += 5;
    // return $myNum;
    $myNewNum += 5;
    return $myNewNum;
}



class MyClass {
    function print_word()
    {
        return 'hi there';
    }
}