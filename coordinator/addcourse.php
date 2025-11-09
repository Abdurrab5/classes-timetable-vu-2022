<?php
require_once "../header.php";
$page='Add Course';
				 $id="";
			  $course_name="";
			  $course_type="";
			 $isAlloted="";
			  $fac_id="";
			  $course_code="";
			  $credit="";
			  $multimedia="";
			  $semester="";
			  $department="";
			 
if(isset($_GET['id']) && $_GET['id']!=''){
$id=$_GET["id"];

}
	   if($id>0){
        $query="SELECT * FROM course where course_id='$id'   ";
		$result= mysqli_query($link,$query);
		   while( $row=mysqli_fetch_assoc($result)){
			  $id=$row['course_id'];
			  $course_name=$row['course_name'];
			  $course_type=$row['course_type'];
			 $isAlloted=$row['isAlloted'];
			  $fac_id=$row['faculty_id'];
			  $course_code=$row['course_code'];
			  $credit=$row['credit'];
			  $multimedia=$row['multimedia'];
			  $semester=$row['semester'];
			  $department=$row['department'];
			 
					}
        }else{
			 $id="";
			  $course_name="";
			  $course_type="";
			 $isAlloted="";
			  $fac_id="";
			  $course_code="";
			  $credit="";
			  $multimedia="";
			  $semester="";
			  $department="";
			 
            }


?>
 <body>
 
    <div class="main">
         


<?php
            $msg='';
	  if(isset($_POST['submit'])){
              
			  $course_name=$_POST['course_name'];
			  $course_type=$_POST['course_type'];
			  
			  $course_code=$_POST['course_code'];
			  $credit=$_POST['credit'];
			  $multimedia=$_POST['multimedia'];
			  $semester=$_POST['semester'];
			  $department=$_POST['department'];
			  
      if($id>0){
			$query="update course set course_name='$course_name',course_code='$course_code',credit='$credit',course_type='$course_type',multimedia='$multimedia',semester='$semester',department='$department'  where course_id='$id'";
			$result= mysqli_query($link, $query);
					alert("course update successfuly.");
       
					redirect_to("viewcourse.php");
 
	 }else{
			$query="INSERT into course(course_name,course_code,credit,course_type,semester,department,multimedia,isAlloted,faculty_id ) VALUES";
			$query.="('$course_name','$course_code','$credit','$course_type','$semester','$department','$multimedia','0','')";
			$result= mysqli_query($link, $query);
    if( mysqli_insert_id($link)){
				alert("course successfuly.");
       
				redirect_to("viewcourse.php");
    }else{
				$msg="course already exist";
        
    }
}
	}
?>


	<div class="container">
			
	</div>
	<div class="container" id="form">
	<h3  > Add course</h3>
	      <form action="" method="POST" >
 <div class="row">
 <div class="col-6">
    <div class="form-group">
           <label for="name">Course Name:</label>
    <input type="text" class="form-control" id="course_name" name="course_name" value="<?php echo $course_name;?>" required="" Placeholder="course_name:" >
    </div>
	</div>
	<div class="col-6">
	<div class="form-group">
           <label for="name">Course code:</label>
    <input type="text" class="form-control" id="course_code" name="course_code" value="<?php echo $course_code;?>" required="" Placeholder="course_code:" >
    </div>
	</div>
	</div>
	<div class="row">
 <div class="col-6">
	<div class="form-group">
    <label for="name">Course Type:</label>
    <select class="form-control" id="course_type" name="course_type"  required=""   >
	
	
	<?php
	
	if($id>0){
	?>
	<option value="<?php echo $course_type;?>"><?php echo $course_type;?></option>
	
	<option value=" ">Plz Select Course Type</option>
	<option value="Theory">Theory</option>
	<option value="Lab">Lab</option>
	 <?php
	}else{
		?>
	<option value=" ">Plz Select Course Type</option>
	<option value="Theory">Theory</option>
	<option value="Lab">Lab</option>
	<?php
	}
	?>
	
	</select>
  </div>
	</div>
	<div class="col-6">
  <div class="form-group">
			<label for="name">Credit:</label>
    <input type="text" class="form-control" id="credit" name="credit"  value="<?php echo $credit;?>" required="" Placeholder="credit:" >
  </div>
  </div>
	</div>
	<div class="row">
 <div class="col-6">
  <div class="form-group">
    <label for="name">Semester:</label>
    <select class="form-control" id="semester" name="semester" required=""   >
	<?php
	if($id>0){
	
	?>
	<option value="<?php echo $semester;?>"><?php echo $semester;?></option>
	
	
	<option value=" ">Plz Select Semester</option>
	<option value="semester1">Semester1</option>
	<option value="semester2">Semester2</option>
	<option value="semester3">Semester3</option>
	<option value="semester4">Semester4</option>
	<option value="semester5">Semester5</option>
	<option value="semester6">Semester6</option>
	<option value="semester7">Semester7</option>
	<option value="semester8">Semester8</option>
	<?php 
	}else{
		
		
		?>
		<option value=" ">Plz Select Semester</option>
	<option value="semester1">Semester1</option>
	<option value="semester2">Semester2</option>
	<option value="semester3">Semester3</option>
	<option value="semester4">Semester4</option>
	<option value="semester5">Semester5</option>
	<option value="semester6">Semester6</option>
	<option value="semester7">Semester7</option>
	<option value="semester8">Semester8</option>
	
	
	<?php
	}
	?>
	
	
	</select>
  </div>
  </div>
	<div class="col-6">
  <div class="form-group">
    <label for="name">Department:</label>
    <select class="form-control" id="department" name="department" required=""   >
	
	<?php
	
	if($id>0){
	?>
	<option value="<?php echo $department;?>"><?php echo $department;?></option>
	
	<option value=" ">Plz Select Department</option>
	<option value="BSCS">BSCS</option>
	<option value="BSIT">BSIT</option>
	 <?php
	}else{
		?>
	<option value=" ">Plz Select Department</option>
	<option value="BSCS">BSCS</option>
	<option value="BSIT">BSIT</option>
	<?php
	}
	?>
	 
	 
	
	
	</select>
  </div>
   </div>
	</div>
	<div class="row">
 <div class="col-6">
  <div class="form-group">
    <label for="name">Multimedia:</label>
     <select  class="form-control" type="multimedia" name="multimedia" id="multimedia" required >
  <?php if($id>0){
	  if($multimedia=="Yes"){
		   echo "
  <option value='Yes' selected>Yes</option>
  <option value='No'>No</option>";
	  }else{
		   echo "
  <option value='Yes'>Yes</option>
  <option value='No' selected>No</option>";
		  
	  }
	
  
  
  }else{
	  echo "
	  <option value='Yes'>Yes</option>
  <option value='No'>No</option> ";
  
  } ?>
  
  
  </select>
  
  
  </div>
  </div>
	 
	</div>
  <div>
   <div class="form-group">
  <input type="submit" class="btn btn-success" value="Save" name="submit" id="submit"/>
  <input type="reset" class="btn btn-danger" value="Reset" name="reset" id="reset"/>
   <div class="field_error"><?php echo $msg?></div>
</div>
</form>
</div>
 

</body>




</html>
