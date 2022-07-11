<?php

$emal = $_POST['eml'];
$pswd = $_POST['pwd'];

$conn = mysqli_connect('localhost','root', '016188','hosteldb');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    $choic = "select * from admintbl where email='$emal' && pword='$pswd'";
    $chosen = mysqli_query($conn,$choic);
    $ab = mysqli_num_rows($chosen);
    if($ab == TRUE){
        echo '<script>alert ("Login successful")</script>';
        header('location:hostel.html');
    }else{
        echo '<script>alert ("Invalid username or password")</script>';
        
    }

}

?>

