<?php

$l = $_POST["login"];
$p = $_POST['password'];

include("cfg.php");
$mysqli = mysqli_query("SELECT * FROM users WHERE (login = '$l') AND (password = '$p')")
if (mysqli_num_rows($result) > 0){
    echo "GOOOOOD!!!!";
}
else{
    echo "BYE BYE";
}


?>