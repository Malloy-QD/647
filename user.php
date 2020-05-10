<?php
$mysqli =new mysqli("mysql.eecs.ku.edu", "wyizhou222", "aevuu7ai", "wyizhou222");
if ($mysqli->connect_errno)
{
    die("Connect failed: %s\n". $mysqli->connect_error);
}
// $uname = $_POST['uname'];
// $psw = $_POST['psw'];
// $query = "INSERT INTO USER(id) VALUES ('$uname')";
// if($user_id ==""){
//     echo('Enter a valid username');
// }
// // elseif($psw ==""){
// //     echo('Enter a valid password');
// // }
// elseif($result = $mysqli->query($query)){
//   if($row = $result->fetch_assoc()){
//     $query = "INSERT INTO USER(passwrd) VALUES ('$psw')";
//     if($result = $mysqli->query($query)){
//       echo('Successfully create account');
//     }
//   }
// }
//     $result->free();
// $mysqli->close();
?>
