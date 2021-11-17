<?php


  $name=$_POST['labname'];
  $contact=$_POST['officecontact'];
  $email=$_POST['officeemail'];
  $username= $_POST['userid'];
  $state= $_POST['state'];
  $district= $_POST['district'];
  $pincode= $_POST['pincode'];
  $proregno= $_POST['proregno'];
  $dateofreg= $_POST['dateofreg'];
	$password= $_POST['password'];
	$confirmpassword=$_POST['confirmpassword'];
  $ownername=$_POST['ownername'];
	$personalphone=$_POST['personalphone'];
  $address=$_POST['address'];
  $idcard=$_POST['idcard'];


  require_once '../labregistration/provisonal.php';
  require_once '../labregistration/governmentid.php';
  require_once 'dbh.php';
  require_once 'functions.php';


	if($fileActualExtgovernmentid!='pdf')
      {
      	header("location: ../labregistration/labreg.php?error=invalidfileextgovid");
       exit();
      }

    if($fileActualExtprovisonal!='pdf')
      {
      header("location: ../labregistration/labreg.php?error=invalidfileidextpro");

       exit();
      }

echo $name  ,$contact ,$email , $username , $state , $district, $pincode, $proregno,$dateofreg,$password,$confirmpassword,$ownername,$personalphone,$address,$idcard;


if (emptyInputLabSignup($name  ,$contact ,$email , $username , $state , $district, $pincode, $proregno,$dateofreg,$password,$confirmpassword,$ownername,$personalphone,$address,$idcard )!==false)
  {

       header("location: ../labregistration/labreg.php?error=emptyinput");
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


 createLabUser($conn,$name,$contact,$email,$username,$state,$district,$pincode,$proregno,$dateofreg,$password,$fileNameNewprovisonal,$ownername,$personalphone,$address,$idcard,$fileNameNewgovernmentid);
