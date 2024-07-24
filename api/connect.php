<?php

$connect = mysqli_connect("localhost", "root", "", "cars");
if($connect){echo "connected";}
else{"not connect";}

?>