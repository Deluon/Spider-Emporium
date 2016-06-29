<?php

function form_errors($errors=array()) {
    $output = "";
    if (!empty($errors)) {
        $output .= "<div class=\"error\">";
        $output .= "Please fix the following errors:";
        $output .= "<ul>";
        foreach ($errors as $key => $error) {
            $output .= "<li>{$error}</li>";
        }
        $output .= "</ul>";
        $output .= "</div>";
    }
    return $output;      //returning value from the function held in the $output array
    // return  is like break in a switch statement... "lets stop what we are doing and return this value"
    // look at function returns on php.net http://www.php.net/manual/en/functions.returning-values.php
    //http://www.php.net/manual/en/function.return.php
}

?>