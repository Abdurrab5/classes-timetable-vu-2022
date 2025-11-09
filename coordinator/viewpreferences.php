<?php
require_once "../header.php";
 
$subjectdis="";
?>
 

 <?php
 //function sub($x){
      // global $link;
		 /*  $busSql = "Select * from course where isAlloted=0 AND fac_id=0 course_name=''  ";
             $resultBusSql = mysqli_query($link, $busSql);
                       $i=1;
    while($row = mysqli_fetch_assoc($resultBusSql)){
		       $id=$row['course_id'];
	           $subject=$row['course_name'];
			   $isAlloted=$row['isAlloted'];
			   $fac_id=$row['fac_id'];
			   if($isAlloted!=0){ 
			    $subjectdis='<button> not Alloted</button>';
			   }else{
				   $subjectdis='<button> Alloted</button>';
			   }
	}
	return  $subjectdis; */
 //} */
		if(isset($_GET['id']) && $_GET['id']!=''){
				$id=$_GET["id"];
 $busSql = "Delete from preferences where preferences_id='$id'";
             $resultBusSql = mysqli_query($link, $busSql);
				 alert("delete successfuly.");
       
        redirect_to("viewpreferences.php");
                     }
					 
					   
			if(isset($_GET['alottid']) && $_GET['alottid']!=''){
				$id=$_GET["alottid"];
				 $alottfac_id='';
				  $alottsubject='';
 $busSql = "select * from preferences where preferences_id='$id'";
             $result = mysqli_query($link, $busSql);
			 while($row=mysqli_fetch_assoc($result)){
				 $alottfac_id=$row['faculty'];
				 $alottsubject=$row['subject'];
				  
			$busSql = "update course set isAlloted=1,faculty_id='$alottfac_id' where course_name='$alottsubject'";
             $resultBusSql = mysqli_query($link, $busSql);
				 alert("updated successfuly.");
			 }
			}
				
       if(isset($_GET['notalotid']) && $_GET['notalotid']!=''){
				$id=$_GET["notalotid"];
				 $alottfac_id='';
				  $alottsubject='';
 $busSql = "select * from preferences where preferences_id='$id'";
             $result = mysqli_query($link, $busSql);
			 while($row=mysqli_fetch_assoc($result)){
				 $alottfac_id=$row['faculty'];
				 $alottsubject=$row['subject'];
				  
			$busSql = "update course set isAlloted=0,faculty_id=0 where course_name='$alottsubject'";
             $resultBusSql = mysqli_query($link, $busSql);
				 alert("updated successfuly.");
			 }
        
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
							 <th>Faculty Id</th>
							 <th>Designation</th>
							<th>Subject</th>
							<th>Date</th>
							<th>Allot</th>
							<th>Edit</th>
							<th>Delete</th>
							 </tr>
					</thead>
					<tbody>
<?php		
           
					 

            $query="SELECT preferences.*,faculty.* FROM preferences INNER JoiN faculty ON faculty.faculty_id=preferences.faculty   ";
		$result= mysqli_query($link,$query);
		$k=1;
		   while( $row=mysqli_fetch_assoc($result)){
			    $designation=$row['designation'];
					$prefid=$row['preferences_id'];	 
					$fac_id=$row['faculty'];
					$username=$row['username'];
					$subject=$row['subject'];

					$date=$row['date'];   
	 
   // if($subject
						$Professor='';
						$Professordate='';
       					$Assistance='';
						$Assistancedate='';
						$Asociate='';
						$Asociatedate='';
						$Lecturar='';
						$Lecturardate='';
								if($designation=='Professor'){
									 
									 $Professor=$subject;
									 $Professordate=$date;
									 
								 }elseif($designation=='Assistance Professor'){
									  $Assistance=$subject;
									  $Assistancedate=$date;
								 }
								 elseif($designation=='Asociate Professor'){
									  $Asociate=$subject;
									  $Asociatedate=$date;
								 }
								 elseif($designation=='Lecturar'){
									  $Lecturar=$subject;
									  $Lecturardate=$date;
								 } ;?>                                

  
	

                                 <tr>
							       <td class="serial"><?php echo $k++; ?></td>
							       <td><?Php echo $prefid; ?></td>	
									<td><?Php echo $username; ?></td>
									<td><?Php echo $designation;?></td>									
								   <td><?Php echo $subject;?></td>
							       
					 		       <td><?Php echo $date ;?></td>
			<td><?Php					   
				//	if(	$Assistance!='' &&	$Assistance==}	   
		 $busSql = "Select * from course where  course_name='$subject'  ";
             $resultBusSql = mysqli_query($link, $busSql);
                       $i=1;
    while($row = mysqli_fetch_assoc($resultBusSql)){
		       $courseid=$row['course_id'];
	           $course_name=$row['course_name'];
			   $isAlloted=$row['isAlloted'];
			   $faculty=$row['faculty_id'];
			   if($isAlloted==0){
				  
				   
				 
					 
				/* if( $Professor==$Asociate || $Professor== $Assistance || $Professor== $Lecturar ){
					
					 if($Assistance== $Professor|| $Assistance== $Lecturar||$Assistance==$Asociate){
						

							if($Asociate== $Professor|| $Asociate== $Lecturar|| $Asociate== $Assistance){
								
								
								if($Lecturar== $Professor||$Lecturar== $Asociate|| $Lecturar== $Assistance){ */
						
					 ?>
			   <a href="viewpreferences.php?alottid=<?php echo $prefid;?>" class="btn btn-sm btn-warning" role="button"><?php echo $Professor;?>alott</a>
				  
			   <?php 
					
						  
				
				
				 
			   }elseif($faculty==$fac_id){
			   ?>
			   <a href="viewpreferences.php?notalotid=<?php echo $prefid;?>" class="btn btn-sm btn-danger" role="button">Alotted </a>
				  
			   <?php
			   
}
	}						   
				?>	</td>			   
							 <td>
				<a href="preferences.php?id=<?php echo $prefid;?>" class="btn btn-sm btn-info" role="button">Edit</a>
				                   </td>
				                    <td>
				<a href="viewpreferences.php?id=<?php echo $prefid;?>" class="btn btn-sm btn-danger" role="button">Delete</a>
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