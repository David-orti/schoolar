<?
include('../config/database.php'); // invocar 

// crear datos
$fname = $_POST['f_name'];
$Lname = $_POST['l_name'];
$email = $_POST['e_mail'];
$passwd = $_POST['passw'];


$sql = "INSERT INTO users (firstname, lastname, email, pasword)
  VALUES('$fname','$Lname','$email','$passwd')

";

$res = pg_query($conn, $sql);
if($res){
    echo "users has been created succesfully";
}
   else{
    echo "error";
   }


?>