<?php

require_once 'dbh.php';
 require_once 'functions.php';


if(isset($_POST['submit']))
 {

$bookingid=$_POST['bookingid'];
$resultref=uniqid();
$status='COMPLETED';
$testresult=$_POST['testresult'];

echo $bookingid,$resultref,$status ,$testresult;

completeResult($conn ,$bookingid,$status,$resultref ,$testresult);


}

else {

  header("../finaltestupdate/finaltestupdate.php");
}
