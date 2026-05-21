<?php
$connection=mysqli_connect("185.27.134.116","if0_41984352 ","8jKXEyBwPJjC","if0_41984352_schooldb");

if($connection){
    echo "Database connected successful";
}
else {
    die "Database not connected";
}

?>