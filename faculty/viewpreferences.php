<?php
require_once "../header.php";
 $fac_id=$_SESSION['fac_id'];

?>
 

 <?php
       
		 
		if(isset($_GET['id']) && $_GET['id']!=''){
				$id=$_GET["id"];
 $busSql = "Delete from preferences where preferences_id='$id'";
             $resultBusSql = mysqli_query($link, $busSql);
				 alert("delete successfuly.");
       
        redirect_to("viewpreferences.php");
                     }
?>	<div class="main">
<div class="container-fluid" >
<div class="container" >
        <div  >
<a href="preferences.php" class="btn btn-sm btn-success" role="button" style="float:right;margin-top:20px;">+Add preferences</a>
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
							 
							<th>Subject</th>
							
							<th>Date</th>
							<th>Edit</th>
							<th>Delete</th>
							 </tr>
					</thead>
					<tbody>
<?php	

            $query="SELECT * FROM preferences where faculty='$fac_id'   ";
		$result= mysqli_query($link,$query);
		$i=1;
		   while( $row=mysqli_fetch_assoc($result)){
			   
			$id=$row['preferences_id'];	 
				 
$subject=$row['subject'];

 $date=$row['date'];   
	 
    
		  
                                    

   ?>
	

                                 <tr>
							       <td class="serial"><?php echo $i++; ?></td>
							       <td><?Php echo $id; ?></td>	 
								   <td><?Php echo $subject;?></td>
							       
							       <td><?Php echo $date ;?></td>
							 <td>
				<a href="preferences.php?id=<?php echo $id;?>" class="btn btn-sm btn-info" role="button">Edit</a>
				                   </td>
				                    <td>
				<a href="viewpreferences.php?id=<?php echo $id;?>" class="btn btn-sm btn-danger" role="button">Delete</a>
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