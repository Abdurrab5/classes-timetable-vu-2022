<?php
require_once "../header.php";
  
?>
 

 <?php
 
       
	  if(isset($_GET['clear']) && $_GET['clear']!=''){
$clear=$_GET["clear"];

cleartimetable($link);
 

} 
	 
	
?>	
<div class="main" >
<div class="container-fluid" >
<div class="container  "   >
        
      <div  >
<a href="generatetimetable.php?generate='generate'"  class="btn btn-lg btn-success" role="button" style="float:ceter;margin-top:20px;">+ Generate timetable</a>
	<div>	  
	<div  >
<a  href="generate.php?clear='clear'"  class="btn btn-lg btn-danger" role="button" style="float:center;margin-top:20px;">+ Clear timetable</a>
	<div>	  
	  