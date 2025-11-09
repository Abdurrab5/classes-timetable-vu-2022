<?php
require_once "../header.php";
 
  $user=$_SESSION['fac_id']; 
 $alias= "";
				
?>
 

 <?php
        $query="SELECT * FROM faculty where faculty_id='$user'   ";
		$result= mysqli_query($link,$query);
		   while( $row=mysqli_fetch_assoc($result)){
			  $facid=$row['faculty_id'];
				$alias=$row['alias'];
				
				  	
		   }
		   
	
?>	

<div  class="main">

<div class="container" >
         <h4>
         view Timetable 
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
							<th>Period 2</th>>
							 <th>Period 3</th>
							 <th>Period 4</th>
							 <th>Period 5</th>
							 
							 </tr>
					</thead>
					<tbody>
<?php	
//'".$semester."' {$user} {$alias}
             $Sql = "SELECT * FROM ".$alias ;
			
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
	?>
	</div>
	</div>
	</div>
</body>
</html>