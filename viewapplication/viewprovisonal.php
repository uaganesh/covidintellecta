<?php

$file='../uploads/provisonal/'.$_GET['pdf'];
$filename=$_GET['pdf'];
echo $file;
echo $filename;

header('Content-type: application/pdf');
header('Content-Disposition:inline; filename="'.$filename.'"');
header('Content-Transfer-Encoding:binary');
header('Accept-Ranges: bytes');
@readfile($file);

?>
