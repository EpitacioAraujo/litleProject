<?php 

$email    = $_POST['email'];
$password = $_POST['password'];

if(isset($email) and isset($password)){
  $admin = json_decode(file_get_contents(__DIR__.'/banco.json'),true);
  $admin = $admin['admin'];

  if($admin['email'] == $email and $admin['password'] == $password){
    setcookie("login",$email);
    header('Location:/');
  } else {
    echo "<script>alert('Usuário não cadastrado!')</script>";
  }
};
 


