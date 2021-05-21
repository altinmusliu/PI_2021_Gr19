<?php

$conn = new mysqli("localhost","root","","FrrokMotion");

$username=$_POST['username'];
$password_=$_POST['password'];

$sql = "SELECT * FROM register WHERE username='$username' AND password_='$password_'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    echo "<H1>Welcome   <span style=\"color:red;\">".$username."</H1>";
}
else{
    echo  "<script>alert(\"KENI GABUAR USERNAME OSE PASSOWRDIN                                           press back and try again \")</script>";
}

?>
