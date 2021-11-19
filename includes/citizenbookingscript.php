<?php


  $name=$_POST['name'];
  $username=$_POST['username'];
  $contact=$_POST['contact'];
  $dob=$_POST['dob'];
  $address=$_POST['address'];
  $adhaarno= $_POST['adhaarno'];
  $age= $_POST['age'];
  $district= $_POST['district'];
  $testingcenter= $_POST['testingcenter'];
  $timeslot= $_POST['timeslot'];


echo $name,$contact,$dob,$address,$adhaarno,$age,$district,$testingcenter,$timeslot;

	require_once 'dbh.php';
	require_once 'functions.php';

  if (emptyBooking($name  ,$contact ,$dob , $address , $adhaarno , $age, $district, $testingcenter,$timeslot)!==false)
  {

       header("location: ../slotbooking/slotbooking.php?error=emptyinput");
       exit();
  }
  createApplication($conn,$name,$username,$contact,$dob,$address,$adhaarno,$age,$district,$testingcenter,$timeslot);

/*
if (invalidUid($username)!==false)
{

       header("location: ../slotbooking/slotbooking.php?error=invaliduid");
       exit();
}

*/

/*if (invalidEmail($email)!==false)
{

       header("location: ../slotbooking/slotbooking.php?error=invalidemail");
       exit();
}
*/

/*if (pwdMatch($password , $confirmpassword)!==false)
{

       header("location: ../slotbooking/slotbooking.php?error=passwordsdonotmatch");
       exit();
}*/


/*if (uidExists($conn , $username , $email)!==false)
{

       header("location: ../slotbooking/slotbooking.php?error=usernametaken");
       exit();
}
*/
