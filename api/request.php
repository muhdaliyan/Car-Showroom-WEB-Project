<?php

include("connect.php");

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$car = $_POST['car'];
$budget = $_POST['budget'];
$pic = $_FILES['pic']['name'];
$tmp_name = $_FILES['pic']['tmp_name'];


$insert = mysqli_query($connect, "INSERT INTO cars (name, email, phone, car, budget, pic) 
VALUES ('$name','$email','$phone','$car','$budget','$pic')");
if($insert){
    echo '
    
    <script>
    alert("Request successful");
    window.location = "../routes/success.html";
    </script>
    
    ';
}else{
    echo '
    
    <script>
    alert("some error");
    window.location = "../routes/request.html";
    </script>
    
    ';
}

?>