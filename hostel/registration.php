<?php
$fnam = $_POST['fname'];
$lnam = $_POST['lname'];
$emal = $_POST['eml'];
$pswd = $_POST['pwd'];

$conn = mysqli_connect('localhost','root', '016188','hosteldb');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}

    $sql = "INSERT INTO admintbl (fname, lname, email,pword) VALUES ('$fnam', '$lnam', '$emal','$pswd')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("location:login.html");
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();





?>