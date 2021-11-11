<?php
// Login Checking Function //
function loginUser($conn,$username,$password)
{

$uidExists= uidExists($conn , $username ,$username);

if($uidExists === false)
  {
    header("location: ../login/login.php?error=useridnotexist");
    exit();
  }

$pwdHashed=$uidExists["password"];
$checkPwd =password_verify($password,$pwdHashed);
$sql="SELECT usertype,accountstatus FROM registration WHERE username='$username' or email='$username';";
     $result=mysqli_query($conn, $sql);
     $resultCheck = mysqli_num_rows($result);

     if($resultCheck > 0)
        {
          while($row = mysqli_fetch_assoc($result))
           {

              $GLOBALS['usertype']=$row['usertype'];
							$GLOBALS['accountstatus']=$row['accountstatus'];

              echo $GLOBALS['usertype'];
          }

          }
          //Just for demo//
if($pwdHashed==$password)
{
$checkPwd=true;
}
else {
$checkPwd=false;
}
/*if($checkPwd===false)*/
if($pwdHashed!=$password)
{
   header("location: ../login/login.php?error=wrongloginpassword");

    exit();
}


else if ($checkPwd===true  and $GLOBALS['usertype']==='citizen')
{
   if($GLOBALS['accountstatus']==='DISABLED')
	 {
    header("location:../login/login.php?error=disabled");
	 }

  else if($GLOBALS['accountstatus']==='ENABLED')
   {
   session_start();
   $_SESSION["userid"]= $uidExists["userid"];
   $_SESSION["useruid"]= $uidExists["username"];
   $_SESSION['loggedin'] = true;
   $_SESSION['citizen'] = true;
   $_SESSION['username'] = $username;
   header("location: ../citizendashboard/citizen.php");
   exit();
   }
}

else if ($checkPwd===true and $GLOBALS['usertype']==='admin')
{

   session_start();
   $_SESSION["userid"]= $uidExists["userid"];
   $_SESSION["useruid"]= $uidExists["username"];
   $_SESSION['loggedin'] = true ;
   $_SESSION['superadmin'] = true ;
   $_SESSION['username'] = $username;
   $_SESSION['check']=true;
   header("location: ../admindashboard/admindashboard.php");
   exit();
}


else if ($checkPwd===true and $GLOBALS['usertype']==='lab')
{

   session_start();
   $_SESSION["userid"]= $uidExists["userid"];
   $_SESSION["useruid"]= $uidExists["username"];
   $_SESSION['loggedin'] = true;
   $_SESSION['lab'] = true;
   $_SESSION['username'] = $username;
   $_SESSION['check']=true;
   header("location: ../labdashboard/labdashboard.php");
   exit();
}

}

// Checking Password From Database//

function pwdMatch($password , $confirmpassword)
{

	$result;

    if($password!==$confirmpassword)
     {

       $result=true;

     }
     else
     {
     	$result=false;
     }

     return $result;
}

// Checking User Name From Database//

function uidExists($conn , $username ,$email)
{
   $sql="SELECT * FROM registration WHERE username = ? OR email = ?;";

   $stmt=mysqli_stmt_init($conn);

   if(!mysqli_stmt_prepare($stmt, $sql))
   {
     header("location: ../citizenregistration/citizenreg.php?error=stmtfailed");
     exit();


   }

   mysqli_stmt_bind_param($stmt, "ss" , $username , $email);
   mysqli_stmt_execute($stmt);

   $resultData=mysqli_stmt_get_result($stmt);

	if($row = mysqli_fetch_assoc($resultData))
	{

       return $row;

	}
	else
	{
		$result=false;
        return $result;
	}

	mysqli_stmt_close($stmt);
}


// Checking Empty Fields //
function emptyInputLogin($username , $password)
{

  $result;

    if(empty($username)||empty($password))
     {

       $result=true;

     }
     else
     {
      $result=false;
     }

     return $result;
}


//empty input validation in signup script//

function emptyInputSignup($name , $email , $username , $password , $confirmpassword)
{

	$result;

    if(empty($name)||empty($email)||empty($username)||empty($password)||empty($confirmpassword))
     {

       $result=true;

     }
     else
     {
     	$result=false;
     }

     return $result;
}

function invalidUid($username)
{

	$result;

    if(!preg_match("/^[a-zA-Z0-9]*$/", $username))
     {

       $result=true;

     }
     else
     {
     	$result=false;
     }

     return $result;
}


function invalidEmail($email)
{

	$result;

    if(!filter_var($email,FILTER_VALIDATE_EMAIL))
     {

       $result=true;

     }
     else
     {
     	$result=false;
     }

     return $result;
}

   // Creaing User //
   function createUser($conn , $name , $username ,$email, $password,$accounttype)
   {
      $sql="INSERT INTO registration(name,username,email,password,usertype) VALUES (? ,? ,?,?,?);";

      $stmt=mysqli_stmt_init($conn);

      if(!mysqli_stmt_prepare($stmt, $sql))
      {
        header("location: ../citizenregistration/citizenreg.php?error=stmtfailed");
        exit();


      }

       $hashedPwd = password_hash($password,PASSWORD_DEFAULT);




      mysqli_stmt_bind_param($stmt, "sssss" , $name , $username  , $email , $hashedPwd , $accounttype);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_close($stmt);
      header("location: ../citizenregistration/citizenreg.php?error=none");




   }


   // Lab Signup Script Functions//

   function createLabUser($conn,$name,$contact,$email,$username,$state,$district,$pincode,$proregno,$dateofreg,$password,$ownername,$personalphone,$address,$idcard)
   {

     $sql="INSERT INTO labapplications(labname,officecontact,officeemail,userid,state,district,pincode,proregno,dateofreg,password,ownername,personalphone,address,idcard) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

     $stmt=mysqli_stmt_init($conn);

     if(!mysqli_stmt_prepare($stmt, $sql))
     {
       header("location: ../citizenregistration/citizenreg.php?error=stmtfailed");
       exit();


     }

      $hashedPwd = password_hash($password,PASSWORD_DEFAULT);



     mysqli_stmt_bind_param($stmt, "ssssssssssssss" , $name,$contact,$email,$username,$state,$district,$pincode,$proregno,$dateofreg,$password,$ownername,$personalphone,$address,$idcard);
     mysqli_stmt_execute($stmt);
     mysqli_stmt_close($stmt);
     header("location: ../labregistration/labreg.php?error=none");

   }

/// Lab Registration validation Functions //

function emptyInputLabSignup($name  ,$contact ,$email , $username , $state , $district, $pincode, $proregno,$dateofreg,$password,$confirmpassword,$ownername,$personalphone,$address,$idcard )
{
  $result;

    if(empty($name)||empty($contact)||empty($email)||empty($username)||empty($state)||empty($district)||empty($pincode)||empty($proregno)||empty($dateofreg)||empty($password)||empty($confirmpassword)||empty($ownername)||empty($personalphone)||empty($address)||empty($idcard))
     {

       $result=true;

     }
     else
     {
     	$result=false;
     }

     return $result;  
}
