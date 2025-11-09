<?php
require_once "../header.php";
 $page='View Lab';

?>
 

 <?php
       
		 
		if(isset($_GET['id']) && $_GET['id']!=''){
				$id=$_GET["id"];

				deletlab($link,$id);
                     }
?>	
<body>
<div class="main">
<div class="container-fluid" >
<div class="container" >
<div  >
<a href="addlab.php" class="btn btn-sm btn-success" role="button" style="float:right;margin-top:20px;">+Add lab</a>
	<div>	
         

          <table class="table" id="table">
                    <thead>
					       <tr>
					       </tr>
					</thead>
					 <thead>
							<tr>
							<th class="serial">s.no</th>
							<th>lab Id</th>
							 <th> lab name</th>
							<th>Capacity</th>
							<th>Multimedia</th>
							<th>Update</th>
							<th>Delete</th>
							 </tr>
					</thead>
					<tbody>
<?php	

             $busSql = "Select * from lab";
             $resultBusSql = mysqli_query($link, $busSql);
                       $i=1;
    while($row = mysqli_fetch_assoc($resultBusSql)){
		       $id=$row['lab_id'];
	          
		       $ab_name=$row['lab_name'];
		       $capacity=$row['capacity']; 
		       $multimedia=$row['multimedia'];
		       
                                    

   ?>
	

                                 <tr>
							       <td class="serial"><?php echo $i++; ?></td>
							       <td><?Php echo $id; ?></td>	 
								   <td><?Php echo $ab_name;?></td>
							       <td><?Php echo $capacity;?></td>
							       <td><?Php echo $multimedia ;?></td>
							       
							
				                   <td>
				<a href="addlab.php?id=<?php echo $id;?>" class="btn btn-sm btn-primary" role="button">Edit</a>
				                   </td>
				                    <td>
				<a href="viewlab.php?id=<?php echo $id;?>" class="btn btn-sm btn-danger" role="button">Delete</a>
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