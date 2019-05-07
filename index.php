<?php
include('classes/DB.php');
$id = $_GET['id'];
$link = DB::query('SELECT * FROM urls WHERE id=:id', array(':id'=>$id))[0]['link'];
echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $link . '">';
?>
