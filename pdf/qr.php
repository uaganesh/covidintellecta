<?php
require_once("phpqrcode/qrlib.php");
QRcode::png('http://localhost/covidintellecta/pdf/generatephp.php?id='.$_GET["id"].'');


 ?>
