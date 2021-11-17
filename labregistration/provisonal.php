<?php

    $fileprovisonal=$_FILES['provisonal'];
    $fileNameprovisonal=$_FILES['provisonal']['name'];
	$fileTmpNameprovisonal=$_FILES['provisonal']['tmp_name'];
	$fileSizeprovisonal=$_FILES['provisonal']['size'];
	$fileErrorprovisonal=$_FILES['provisonal']['error'];
	$fileTypeprovisonal=$_FILES['provisonal']['type'];


   $fileExtprovisonal=explode('.', $fileNameprovisonal);
   $fileActualExtprovisonal = strtolower(end($fileExtprovisonal));


   $allowedprovisonal = array('pdf');

   if(in_array($fileActualExtprovisonal, $allowedprovisonal))
  {

         if($fileErrorprovisonal===0)
         {

              if($fileSizeprovisonal < 10000000)
              {

                $fileNameNewprovisonal= uniqid('',true).".".$fileActualExtprovisonal;


                $fileDestination = '../uploads/provisonal/'.$fileNameNewprovisonal;

                move_uploaded_file($fileTmpNameprovisonal, $fileDestination);

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
