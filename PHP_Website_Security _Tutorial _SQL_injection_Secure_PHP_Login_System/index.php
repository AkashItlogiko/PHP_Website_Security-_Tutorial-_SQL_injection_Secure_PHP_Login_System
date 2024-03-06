
<!-- https://youtu.be/aF-rhQ7dPHw?si=ASb06aPAoqLWWR_u -->
<?php
$connected = mysqli_connect('localhost','root','','phptestDB');



$sql = "SELECT * FROM users WHERE username='ak'||1=1";

$query = mysqli_query($connected,$sql);

if(isset($_POST['submit'])){
 $username = $_POST['username'];
 $password = $_POST['password'];

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

<form action="index.php" method="POST">
Username<br>
<input type="text" name="username"><br><br>
PASSWORD<br>
<input type="password" name="password"><br><br>
<button type="submit" name="submit" value="submit">Login</button>

</form>