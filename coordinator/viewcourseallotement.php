<?php
require_once "../header.php";
 $page='View Course';

?>
 

 <?php
       
		 
		if(isset($_GET['id']) && $_GET['id']!=''){
				$id=$_GET["id"];

				 
                     }
?>	
<body>
<div class="main">
<div class="container-fluid" >
<div class="container" >

          

          <table class="table " id="table">
                    
					 <thead>
							<tr>
							<th>Sno</th>
							<th>Faculty</th>
							<th>course Name</th>
							 </tr>
					</thead>
					<tbody>
<?php	

             $busSql = "Select * from course where isAlloted=1";
             $resultBusSql = mysqli_query($link, $busSql);
                       $i=1;
    while($row = mysqli_fetch_assoc($resultBusSql)){
		       $courseid=$row['course_id'];
	           $course_name=$row['course_name'];
			  $fac_id=$row['faculty_id'];
			
			   
			
		                  

   ?>
	

                                 <tr>
							       
							       <td><?Php echo $i++; ?></td>	 
							       <td><?Php 
								  echo facultyname($link,$fac_id);
								   
								   ?></td>
								    <td><?Php echo  $course_name;?></td>
									
								   
									
							 
				                   
		                           </tr>
					</tbody>
	<?php
	}
	?></table>
	</div>
	</div>
	 
</body>
</html>