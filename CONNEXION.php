<?php

$conn=mysqli_connect("localhost","root","","i2s_base");
if(mysqli_connect_errno())
{
    echo"erreur";
}else{
    echo"cnx avec sucess";
}