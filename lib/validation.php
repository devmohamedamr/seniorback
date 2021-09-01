<?php

function is_required($input,$msg){
    if(strlen($input) == 0){
        return $msg; 
    }
}


