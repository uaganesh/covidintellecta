<?php
 //load_data.php
include_once '../includes/dbh.php';
 $output = '';
 if(isset($_POST["brand_id"]))
 {
      if($_POST["brand_id"] != '')
      {
           $sql = "SELECT * FROM approvedlabs WHERE district = '".$_POST["brand_id"]."'";
           $result = mysqli_query($conn, $sql);
           while($row = mysqli_fetch_array($result))
           {

                $output .= "<option value='" . $row['labname'] . "'>" . $row['labname'] . "</option>";


           }
           echo '<select name="testingcenter" id="labname" >'. $output.'</select>';

      }
      else
      {

           $output .= "<option value=''>Select Lab</option>";
           echo '<select name="labname" id="labname" >'. $output.'</select>';
      }

    }
 ?>
