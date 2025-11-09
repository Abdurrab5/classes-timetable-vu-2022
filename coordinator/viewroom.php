<?php
require_once "../header.php";
 $page='View Room';

?>
 

  <?php
       
		 
    if(isset($_GET['id']) && $_GET['id']!=''){
$id=$_GET["id"];

deletroom($link,$id);
 

}



?>
<div class="main">	
<div class="container-fluid" >
<div class="container" >
<h4><a style="color:lightblue" href="addroom.php">Add room</a></h4>


<table class="table" id="table">
<thead>
								<tr>
									
									
									
								</tr>
							</thead>
						 <thead>
							<tr>
							<th class="serial">s.no</th>
							<th>Room No</th>
							<th>Building</th>
							<th>Capacity</th>
							<th>Multimedia</th>
							 
							<th>Update</th>
							<th>Delete</th>
							 </tr>
						</thead>
												

						<tbody>
<?php	


 $busSql = "Select * from room";
    $resultBusSql = mysqli_query($link, $busSql);
    $i=1;
    while($row = mysqli_fetch_assoc($resultBusSql)){
		
		
		
     $id=$row['room_id'];
	 $classroom=$row['classroom'];
	$building= $row['building'];
		$capacity=$row['capacity']; 
		$multimedia=$row['multimedia'];
		 
                                    

   ?>
	

<tr>
							<td class="serial"><?php echo $i++; ?></td>
							<td><?Php echo $classroom; ?></td>	 
							<td><?Php echo $building;?></td>
							<td><?Php echo $capacity ;?></td>
							<td><?Php echo $multimedia;?></td>
							 
							
				<td><a href="addroom.php?id=<?php echo $id;?>" class="btn btn-sm btn-primary" role="button">Edit</a></td>
				<td><a href="viewroom.php?id=<?php echo $id;?>" class="btn btn-sm btn-danger" role="button">Delete</a></td>
		 
							 
	
	</tr>
		
						 </tbody>
	<?php
	}
	?>
	</div></div></div>
</body>
</html>