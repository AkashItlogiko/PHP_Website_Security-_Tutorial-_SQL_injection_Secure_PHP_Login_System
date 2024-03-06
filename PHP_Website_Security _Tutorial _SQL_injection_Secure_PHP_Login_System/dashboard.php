<?php
$connected = mysqli_connect('localhost','root','','phptestDB');

if(isset($_POST['submit'])){
  ($username = $_POST['username']);
 $password = $_POST['password'];

 $username = mysqli_real_escape_string($connected,$username);
echo "<br>";
$username = mysqli_real_escape_string($connected,$password);

 $sql = "SELECT *FROM users WHERE username='$username' AND password='$password'";

$query = mysqli_query($connected, $sql );

if(mysqli_num_rows($query)>0){
  echo "Loging Successful"; 
  header('location:dashboard.php');
}else{
  echo "Loging Not successful";
}

}   

// if(mysqli_num_rows($query) > 0) {
//   echo 'found';
// }else{
//   echo "Not found";
// }
?>