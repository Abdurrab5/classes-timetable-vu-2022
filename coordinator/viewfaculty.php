<?php
require_once "../header.php";
 $page='View Faculty';

?>
 

  <?php
       
		 
    if(isset($_GET['id']) && $_GET['id']!=''){
$id=$_GET["id"];

deletfaculty($link,$id);
 

}



?>	
<div class="main">
<div class="container-fluid" >
<div class="container" >
 <h4 style="text-align:center;color:darkblue"> Faculty</h4>

<table class="table" id="table">
<thead>
								<tr>
									
									
									
								</tr>
							</thead>
						 <thead>
							<tr>
							<th class="serial">s.no</th>
							<th>Faculty Id</th>
							 
							<th>Username</th>
							<th>Alias</th>
							<th>Email</th>
							<th>Password</th>
							<th>Designation</th>
							
							 
							 
							 </tr>
						</thead>
												

						<tbody>
<?php	


 $busSql = "Select * from faculty";
    $resultBusSql = mysqli_query($link, $busSql);
    $i=1;
    while($row = mysqli_fetch_assoc($resultBusSql)){
		
		
		
     $id=$row['faculty_id'];
	  
				$alias=$row['alias'];
				
				 $username=$row['username'];
				$email=$row['email'];
				$password=$row['password'];
				 
				$designation=$row['designation']; 
                                    

   ?>
	

<tr>
							<td class="serial"><?php echo $i++; ?></td>
							<td><?Php echo $id; ?></td>	 
							 
							
							<td><?Php echo $username;?></td>
							<td><?Php echo $alias ;?></td>
							<td><?Php echo $email;?></td>
							<td><?Php echo $password ;?></td>
							<td><?Php echo $designation;?></td>
							 
						 
							
				 
	
	</tr>
		
						 </tbody>
	<?php
	}
	?>
	</div></div></div>
</body>
</html>