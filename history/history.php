<!DOCTYPE html>
<html style="font-size: 16px;">
<?php
include_once '../header/header.php';
include_once '../includes/dbh.php';
?>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="History">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>History</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Home.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery-1.9.1.min.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.1.7, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
     <style>
     #button{


    width: 115px;
    height: 25px;
    background: #248750;
    padding: 10px;
    text-align: center;
    border-radius: 5px;
    color: white;
    font-weight: bold;
    line-height: 25px;
     }
</style>
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"url": "/"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
    <link rel="canonical" href="/">
  </head>
  <body class="u-body">
    <section class="u-align-center u-clearfix u-palette-5-base u-section-1" id="carousel_86cc">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-custom-font u-font-playfair-display u-text u-text-1">History&nbsp;</h2>
        <p class="u-text u-text-2">Download RTPCR Certificate and See Past Records</p>
        <div class="u-expanded-width u-table u-table-responsive u-table-1">
          <table class="u-table-entity u-table-entity-1">
            <colgroup>
              <col width="12.5%">
              <col width="11.3%">
              <col width="27.8%">
              <col width="19.900000000000006%">
              <col width="28.400000000000006%">
            </colgroup>
            <thead class="u-align-center u-palette-5-dark-2 u-table-header u-table-header-1">
              <tr style="height: 27px;">
                <th class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-5-dark-1 u-table-cell">BOOKING iD</th>
                <th class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-5-dark-1 u-table-cell">DATE</th>
                <th class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-5-dark-1 u-table-cell">TESTING CENTER</th>
                <th class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-5-dark-1 u-table-cell">status</th>
                <th class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-5-dark-1 u-table-cell">DOWNLOAD CERTIFICATE</th>
              </tr>
            </thead>
            <tbody class="u-palette-5-dark-3 u-table-body u-table-body-1">
              <?php

                         $sql="SELECT * FROM activebooking WHERE (username='{$_SESSION['username']}' and status='PENDING') OR (username='{$_SESSION['username']}' AND status='COMPLETED') OR (username='{$_SESSION['username']}' AND status='EXPIRED')";
                         $result=mysqli_query($conn, $sql);
                         $resultCheck = mysqli_num_rows($result);

                         if($resultCheck > 0)
                             {
                                while($row = mysqli_fetch_assoc($result))
                                   {
              echo  '<tr style="height: 70px;">';
              echo  '<td class="u-align-center u-border-1 u-border-palette-5-dark-1 u-first-column u-table-cell u-table-cell-6">'.$row['bookingid'].'</td>';
              echo  '<td class="u-align-center u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-7">'.$row['date'].'</td>';
              echo  '<td class="u-align-center u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-8">'.$row['testingcenter'].'</td>';
              echo  '<td class="u-align-center u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-9">'.$row['status'].'</td>';

              if($row['status']==='COMPLETED')
              {
              echo  '<td class="u-align-center u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-10"><a id="button" target="_blank" href="../pdf/generatePHP.php?id='.$row['bookingid'].'">View Report</a></td>';
              }
              else if($row['status']==='PENDING')
              {
                echo  '<td class="u-align-center u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-10">Result Pending</td>';
              }
              else if($row['status']==='EXPIRED')
              {
                echo  '<td class="u-align-center u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-10">Report Expired</td>';
              }
            echo  '</tr>';



  }  }?>
</tbody>
</table>
  </section>
</div>
</div>




  </body>

</html>
