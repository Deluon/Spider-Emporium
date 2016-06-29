<?php


//create a select list
function createSelect ( $name, array $a, $selected_element){
    $select = '<select name="' . $name . '">';
    foreach($a as $key => $value){
        $select .= "<option";
        if( $selected_element == $value ){
            $select .= ' selected="selected"';
        }
        $select .= ">" . $value . "</option>";
    }
    $select .= "</select>";
    return $select;
}