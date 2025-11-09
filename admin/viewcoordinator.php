<?php
require_once "../header.php";
 $page='view Coordinator';

?>
 

 <?php
       
		 
		if(isset($_GET['id']) && $_GET['id']!=''){
				$id=$_GET["id"];

				deletcoordinator($link,$id);
                     }
?>	
<div class="main">
<div class="container-fluid" >
<div class="container" >
        <div  >
<a href="addcoordinator.php" class="btn btn-sm btn-success" role="button" style="float:right;margin-top:20px;">+Add Coordinator</a>
	<div>	
   

          <table class="table" id="table">
                    <thead>
					       <tr>
					       </tr>
					</thead>
					 <thead>
							<tr>
							<th class="serial">s.no</th>
							<th>Coordinator Id</th>
							 <th>Username</th>
							<th>Email</th>
							<th>Password</th>
							<th>Update</th>
							<th>Delete</th>
							 </tr>
					</thead>
					<tbody>
<?php	

             $busSql = "Select * from coordinator";
             $resultBusSql = mysqli_query($link, $busSql);
                       $i=1;
    while($row = mysqli_fetch_assoc($resultBusSql)){
		       $id=$row['coordinator_id'];
	          
		       $username=$row['username'];
		       $email=$row['email']; 
		       $password=$row['password'];
		       
                                    

   ?>
	

                                 <tr>
							       <td class="serial"><?php echo $i++; ?></td>
							       <td><?Php echo $id; ?></td>	 
								   <td><?Php echo $username;?></td>
							       <td><?Php echo $email;?></td>
							       <td><?Php echo $password ;?></td>
							       
							
				                   <td>
				<a href="addcoordinator.php?id=<?php echo $id;?>" class="btn btn-sm btn-primary" role="button">Edit</a>
				                   </td>
				                    <td>
				<a href="viewcoordinator.php?id=<?php echo $id;?>" class="btn btn-sm btn-danger" role="button">Delete</a>
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