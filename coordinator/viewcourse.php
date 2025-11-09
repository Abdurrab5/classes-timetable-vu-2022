<?php
require_once "../header.php";
 $page='View Course';
$username="";
?>
 

 <?php
       
		 
		if(isset($_GET['id']) && $_GET['id']!=''){
				$id=$_GET["id"];

				deletcourse($link,$id);
                     }
?>	
  <div class="main">
 <div class="container">
<div class="card">
<div class="body">
<div class="row">
<div class="col">
<div>
<a href="addcourse.php" class="btn btn-sm btn-success" role="button" style="float:right;margin-top:10px;">+Add course</a>
	</div>	
          

          <table class="table  width="80%" id="table">
                    <thead>
					       <tr>
					       </tr>
					</thead>
					 <thead>
							<tr>
							 	<th>Sno</th>
							<th>Course Id</th>
							<th>course Name</th>
							<th>course Code</th>
							<th>course Type</th>
							<th>Credit Hour</th>
							<th>multimedia</th>
							<th>semester</th>
							<th>department</th>
							<th>Is Alloted</th>
							<th>Alloted To</th>
							<th>Update</th>
							<th>Delete</th>
							 </tr>
					</thead>
					<tbody>
<?php	

             $busSql = "Select * from course";
             $resultBusSql = mysqli_query($link, $busSql);
                       $i=1;
    while($row = mysqli_fetch_assoc($resultBusSql)){
		       $id=$row['course_id'];
	           $course_name=$row['course_name'];
			  $course_type=$row['course_type'];
			 
			  $course_code=$row['course_code'];
			  $credit=$row['credit'];
			  $multimedia=$row['multimedia'];
			  $semester=$row['semester'];
			  $department=$row['department'];
			$fac_id=$row['faculty_id'];
			  $isAlloted=$row['isAlloted'];
		       
                                    

   ?>
	

                                 <tr>
							       <td><?Php echo $i++;?></td>	
							       <td><?Php echo $id; ?></td>	 
							       <td><?Php echo $course_name;?></td>
								    <td><?Php echo $course_code;?></td>
									<td><?Php echo $course_type;?></td>
							       <td><?Php echo $credit ;?></td>
							        <td><?Php echo $multimedia; ?></td>	 
							       <td><?Php echo $semester;?></td>
								    <td><?Php echo $department;?></td>
								
								    <td><?Php echo $isAlloted;?></td>
								<td><?Php if($fac_id>0){ echo facultyname($link,$fac_id); 
								}else{
								echo $fac_id;}									?></td>	
				                   <td>
				<a href="addcourse.php?id=<?php echo $id;?>" class="btn btn-sm btn-primary" role="button">Edit</a>
				                   </td>
				                    <td>
				<a href="viewcourse.php?id=<?php echo $id;?>" class="btn btn-sm btn-danger" role="button">Delete</a>
				                   </td>
		                           </tr>
					</tbody>
	<?php
	}
	?>
	</div>
	</div>
	</div></div></div></div></div></div>
</body>
</html>