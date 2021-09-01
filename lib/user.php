<?php


function addNew($name,$email,$password){
    $connection = mysqli_connect("localhost","root","","senior");
    mysqli_query($connection,"INSERT INTO `user` (`name`,`email`,`password`) VALUES ('$name','$email','$password')");
    if(mysqli_affected_rows($connection) == 1){
        return true;
    }else{
        return false;
    }
}

function CheckIfEmailExit($email){
    $connection = mysqli_connect("localhost","root","","senior");
    $q = mysqli_query($connection,"SELECT * FROM `user` WHERE `email`  = '$email' ");
    return mysqli_num_rows($q);
}