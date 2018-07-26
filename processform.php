<?php 
include "include/dbconfig.php";

$user_email = $_POST['mailings'];

//check connection from include/dbconfig
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";


$sql = INSERT INTO `mail_portfolio` (`form_id`, `form_email`) VALUES (NULL, '$user_email');

if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>


