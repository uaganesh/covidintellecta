<?php

require_once 'dbh.php';
require_once 'functions.php';

if(isset($_POST['approve']))
 {
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
   $ownername=$_POST['ownername'];
   $personalphone=$_POST['personalphone'];
   $address=$_POST['address'];
   $idcard=$_POST['idcard'];
   $provisonalcertificate=$_POST['proregfilename'];
   $governmentid=$_POST['govidfilename'];
   $applicationstatus='ACCEPTED';
   $usertype='lab';

//echo $name , $contact,$email,$username,$state,$district,$pincode,$proregno,$dateofreg,$password,$ownername,$personalphone,$address,$idcard,$provisonalcertificate,$governmentid,$applicationstatus;


approvelabapplication($conn , $name , $contact,$email,$username,$state,$district,$pincode,$proregno,$dateofreg,$password,$ownername,$personalphone,$address,$idcard,$provisonalcertificate,$governmentid,$applicationstatus,$usertype);



}

elseif(isset($_POST['rejectapplication']))
{

$regno=$_POST['vehicleregisterno'];
$remarks=$_POST['reason'];
$applicationstatus='REJECTED';
rejectapplication($conn ,$applicationstatus,$regno, $remarks);

}

else
{

  header("location: ../login/login.php");
  exit();
}
