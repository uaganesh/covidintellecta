<?php

    $filegovernmentid=$_FILES['governmentid'];
    $fileNamegovernmentid=$_FILES['governmentid']['name'];
	$fileTmpNamegovernmentid=$_FILES['governmentid']['tmp_name'];
	$fileSizegovernmentid=$_FILES['governmentid']['size'];
	$fileErrorgovernmentid=$_FILES['governmentid']['error'];
	$fileTypegovernmentid=$_FILES['governmentid']['type'];


   $fileExtgovernmentid=explode('.', $fileNamegovernmentid);
   $fileActualExtgovernmentid = strtolower(end($fileExtgovernmentid));


   $allowedgovernmentid = array('pdf');

   if(in_array($fileActualExtgovernmentid, $allowedgovernmentid))
  {

         if($fileErrorgovernmentid===0)
         {

              if($fileSizegovernmentid < 10000000)
              {

                $fileNameNewgovernmentid= uniqid('',true).".".$fileActualExtgovernmentid;


                $fileDestination = '../uploads/governmentid/'.$fileNameNewgovernmentid;

                move_uploaded_file($fileTmpNamegovernmentid, $fileDestination);

                /*$sql = "INSERT into test(title,filename) VALUES('$fileName','$fileNameNew')";

                  if(mysqli_query($conn,$sql))
                   {

                    echo "File Sucessfully uploaded";
                   }
                  else
                  {
                    echo "Error";
                  }



                header("Location: test.php?uploadsucess ");*/

               }
              else
                {

                    echo"Your File is too big!";

                }

           }

         else
            {
      	       echo "There was an error uploading your file ";
            }

  }
