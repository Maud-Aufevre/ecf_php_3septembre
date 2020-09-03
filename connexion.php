<?php

$connex = mysqli_connect('localhost','root','','ecf_php_maud');

if($connex){
    echo "";
}else{
    echo "mysqli_connect_error($connex) mysqli_connect_erno($connex)";
}

?>