<?php
require_once "../header.php";
  
?>
 

 
<div class="main " >
<div class="container " >
<div class="row text-dark">
<div class="col-6"> 
<form method="get" action="">
<label>faculty</label>
<select id="fac" name="fac">
<?php
  $Sql = "SELECT * FROM faculty";
  $result = mysqli_query($link, $Sql);
  $f=0;
 while($row = mysqli_fetch_assoc($result)){
?>
<option value="<?php echo $row['alias'];?> "><?php echo $row['alias'];?></option>

<?php
$f++;
}
?>
</select>
	<button class="btn btn-info" type="submit">Search </button>
</form>
</div>
<div class="col-6"> 
<form method="get" action="">
<label>Semester</label>
<select id="semester" name="semester">
<option value="semester1">Semester1</option>
<option value="semester2">Semester2</option>
<option value="semester3">Semester3</option>
<option value="semester4">Semester4</option>
<option value="semester5">Semester5</option>
<option value="semester6">Semester6</option>
<option value="semester7">Semester7</option>
<option value="semester8">Semester8</option>
</select>
 
		<button class="btn btn-info" type="submit">Search </button>
		 
</form>
</div></div></div>
<div class="container text-dark" >
         <h4>
         View Timetable 
		 </h4>

          <table class="table" id="table">
                    <thead>
					       <tr>
					       </tr>
					</thead>
					 <thead>
							<tr>
							<th>Day</th>
							<th>Period 1</th>
							<th>Period 2</th>
							 <th>Period 3</th>
							 <th>Period 4</th>
							 <th>Period 5</th>
							 
							 </tr>
					</thead>
					<tbody>
<?php	
//'".$semester."'{$semester}
if(isset($_GET['fac']) && $_GET['fac']!=''){
				$fac=$_GET["fac"];
             $Sql = "SELECT * FROM {$fac}";
             $result = mysqli_query($link, $Sql);
                       $i=1;
    while($row = mysqli_fetch_assoc($result)){
		       $day=$row['day'];
	           $period1= $row['period1'];
		       $period2=$row['period2']; 
		       $period3=$row['period3'];
		       $period4=$row['period4']; 
		       $period5=$row['period5'];
		        
                                    

   ?>
	

                                 <tr>
							        <td><?Php echo $day; ?></td>	 
							       <td><?Php echo $period1; ?></td>	 
							       <td><?Php echo $period2;?></td>
							       <td><?Php echo $period3 ;?></td>
							       <td><?Php echo $period4;?></td>
							       <td><?Php echo $period5;?></td>
							        
							
				                    
		                           </tr>
					</tbody>
	<?php
	}
}
if(isset($_GET['semester']) && $_GET['semester']!=''){
				$semester=$_GET["semester"];
             $Sql = "SELECT * FROM {$semester}";
             $result = mysqli_query($link, $Sql);
                       $i=1;
    while($row = mysqli_fetch_assoc($result)){
		       $day=$row['day'];
	           $period1= $row['period1'];
		       $period2=$row['period2']; 
		       $period3=$row['period3'];
		       $period4=$row['period4']; 
		       $period5=$row['period5'];
		        
                                    

   ?>
	

                                 <tr>
							        <td><?Php echo $day; ?></td>	 
							       <td><?Php echo $period1; ?></td>	 
							       <td><?Php echo $period2;?></td>
							       <td><?Php echo $period3 ;?></td>
							       <td><?Php echo $period4;?></td>
							       <td><?Php echo $period5;?></td>
							        
							
				                    
		                           </tr>
					</tbody>
	<?php
	}
}
	?>
	</div>
	</div>
	</div>
</body>
</html>