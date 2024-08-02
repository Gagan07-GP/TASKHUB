
<?php
$sever ="localhost";
$username ="root";
$password ="";
$dbname ="Gagan";

$con= mysqli_connect($sever, $username, $password, $dbname);

if(!$con)
{
    echo "not connected";
}

$Uname=$_POST['username'];
$pass =$_POST['password'];

$sql = "INSERT INTO `ramesh`(`username`, `password`) VALUES ('$username','$password ]')";
// $result= mysqli_query($con ,$sql);
// if($result)
// {
//     echo "data submited";
// }
// else{
//     echo "error";
// }
?>

