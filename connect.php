<?php
$username = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$message = filter_input(INPUT_POST, 'Message');
if (!empty($username)){
if (!empty($email)){
if (!empty($message)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "squadperformers";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}

else{
$sql = "INSERT INTO contact (username, email, message)
values ('$username','$email','$message')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "message should not be empty";
die();
}
}
else{
echo "email should not be empty";
die();
}
}
else{
echo "username should not be empty";
die();
}
?>
 