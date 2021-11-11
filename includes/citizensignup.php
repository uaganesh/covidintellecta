<?php

 if(isset($_POST["submit"]))
 {
  $name=$_POST['name'];
  $email=$_POST['email'];
  $username= $_POST['username'];
	$password= $_POST['password'];
	$confirmpassword=$_POST['confirmpassword'];
  $accounttype='citizen';
	require_once 'dbh.php';
	require_once 'functions.php';

  if (emptyInputSignup($name , $email , $username , $password , $confirmpassword )!==false)
  {

       header("location: ../citizenregistration/citizenreg.php?error=emptyinput");
       exit();
  }


if (invalidUid($username)!==false)
{

       header("location: ../citizenregistration/citizenreg.php?error=invaliduid");
       exit();
}


if (invalidEmail($email)!==false)
{

       header("location: ../citizenregistration/citizenreg.php?error=invalidemail");
       exit();
}


if (pwdMatch($password , $confirmpassword)!==false)
{

       header("location: ../citizenregistration/citizenreg.php?error=passwordsdonotmatch");
       exit();
}


if (uidExists($conn , $username , $email)!==false)
{

       header("location: ../citizenregistration/citizenreg.php?error=usernametaken");
       exit();
}


createUser($conn ,  $name , $username ,$email, $password ,$accounttype);
}
