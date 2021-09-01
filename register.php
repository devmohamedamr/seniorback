<?php

require 'lib/validation.php';
require 'lib/user.php';

if(isset($_POST['name'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // validation step
    $erorr = [];


    
    if(strlen($name) == 0){
        $erorr[] = 'name is required'; 
    }
    if(strlen($email) == 0){
        $erorr[] = 'email is required'; 
    }
    if(strlen($password) == 0){
        $erorr[] = 'password is required'; 
    }

    if(count($erorr) == 0){
        // insert

       $user =  addNew($name,$email,$password);

       if($user == 1){
        echo "register success   <a href='login.php'>login</a>";
        }else{
            echo "plz try again";
        }

    }else{
        echo "<ul>";
        foreach($erorr as $e){
            echo "<li>$e</li>"; 
        }
        echo "</ul>";
    }

}


?>

<form action="register.php" method="post">
    <input type="text" name="name" placeholder="name">
    <input type="text" name="email" placeholder="email">
    <input type="password" name="password" placeholder="password">
    <input type="submit" value="register">
</form>