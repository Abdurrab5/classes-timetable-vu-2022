<?php
require_once "../header.php";
 $page='View Student';

?>
 

 <?php
       
		 
?>	

<div class="main">

<div class="container" >
         

          <table class="table" id="table">
                    <thead>
					       <tr>
					       </tr>
					</thead>
					 <thead>
							<tr>
							<th class="serial">s.no</th>
							<th>Student Id</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Username</th>
							<th>Email</th>
							<th>Password</th>
							<th>Address</th>
							<th>Semester</th>
							<th>Gender</th>
							<th>Phone</th>
							 
							 </tr>
					</thead>
					<tbody>
<?php	

             $busSql = "Select * from student";
             $resultBusSql = mysqli_query($link, $busSql);
                       $i=1;
    while($row = mysqli_fetch_assoc($resultBusSql)){
		       $id=$row['student_id'];
	           $first_name= $row['first_name'];
		       $last_name=$row['last_name']; 
		       $username=$row['username'];
		       $email=$row['email']; 
		       $password=$row['password'];
		       $designation=$row['address']; 
		       $gender=$row['gender'];
		       $phone=$row['phone'];
			   $semester=$row['semester'];
                                    

   ?>
	

                                 <tr>
							       <td class="serial"><?php echo $i++; ?></td>
							       <td><?Php echo $id; ?></td>	 
							       <td><?Php echo $first_name;?></td>
							       <td><?Php echo $last_name ;?></td>
							       <td><?Php echo $username;?></td>
							       <td><?Php echo $email;?></td>
							       <td><?Php echo $password ;?></td>
							       <td><?Php echo $designation;?></td>
								   <td><?Php echo $semester;?></td>
							       <td><?Php echo  $gender;?></td>
							       <td><?Php echo $phone;?></td>
							
				                   
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