<?php
require_once "../header.php";
 $fac_id=$_SESSION['fac_id'];

?>
 

 <?php
       
		 
		if(isset($_GET['id']) && $_GET['id']!=''){
				$id=$_GET["id"];
 $busSql = "Delete from daypreference where dp_id='$id'";
             $resultBusSql = mysqli_query($link, $busSql);
				 alert("delete successfuly.");
       
        redirect_to("viewdaypreferences.php");
                     }
?>	
<body>
<div class="main" >
<div class="container-fluid" >
<div class="container" >
         <div  >
<a href="daypreferences.php" class="btn btn-sm btn-success" role="button" style="float:right;margin-top:20px;">+Add preferences</a>
	<div>

          <table class="table" id="table">
                    <thead>
					       <tr>
					       </tr>
					</thead>
					 <thead>
							<tr>
							<th class="serial">s.no</th>
							<th>prefence Id</th>
							 <th>Day</th>
							<th>period1</th>
							<th>period2</th>
							<th>period3</th>
							<th>period4</th>
							<th>period5</th>
							 
							<th>Edit</th>
							<th>Delete</th>
							 </tr>
					</thead>
					<tbody>
<?php	

            $query="SELECT * FROM daypreference where fac_id='$fac_id'   ";
		$result= mysqli_query($link,$query);
		$i=1;
		   while( $row=mysqli_fetch_assoc($result)){
			   
			$id=$row['dp_id'];	 
				$fac_id=$row['fac_id'];	  
$period1=$row['period1'];
$period2=$row['period2'];
$period3=$row['period3'];
$period4=$row['period4'];
$period5=$row['period5'];
 $day=$row['day'];   
	 
    
		  
                                    

   ?>
	

                                 <tr>
							       <td class="serial"><?php echo $i++; ?></td>
							       <td><?Php echo $id; ?></td>	
									<td><?Php echo $day ;?></td>								   
								   <td><?Php echo $period1;?></td>
							       <td><?Php echo $period2;?></td>
							       <td><?Php echo $period3 ;?></td>
							       <td><?Php echo $period4;?></td>
							       <td><?Php echo $period5; ?></td>
							     
							 <td>
				<a href="daypreferences.php?id=<?php echo $id;?>" class="btn btn-sm btn-info" role="button">Edit</a>
				                   </td>
				                    <td>
				<a href="viewdaypreferences.php?id=<?php echo $id;?>" class="btn btn-sm btn-danger" role="button">Delete</a>
				                   </td>
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