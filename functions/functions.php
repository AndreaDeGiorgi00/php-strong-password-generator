<?php 

function getPassword($n){
    $allcharacters = "1234567890qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM!£$%&/()=?^[]*@#";
    $password = "";
    for($i = 0 ; $i < $n ; $i++){
        $password .= $allcharacters[random_int(0 , strlen($allcharacters))];
    };

    session_start();
    $_SESSION['password'] = $password;

    return $password;
}
?>
