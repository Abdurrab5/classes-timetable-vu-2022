<?php
require_once "../header.php";
 $fac_id="";

$course="";
$msg='';
$subject="";

$prefid="";				 
if(isset($_GET['id']) && $_GET['id']!=''){
$prefid=$_GET["id"];

 $query="SELECT * FROM preferences where preferences_id='$prefid'   ";
		$result= mysqli_query($link,$query);
		   while( $row=mysqli_fetch_assoc($result)){
			   
		$fac_id=$row['faculty'];		 
				 
$subject=$row['subject'];

	 
    
		   }

}
	  
    if($prefid>0){
           $query="SELECT * FROM preferences where preferences_id='$prefid'   ";
		$result= mysqli_query($link,$query);
		   while( $row=mysqli_fetch_assoc($result)){
			   
				 
				 
$subject=$row['subject'];

    
	 
    
		   }
        }else{
			
			
$subject="";

            
        }



	if(isset($_POST['submit'])){
  
 
 $fac_id=$_POST['faculty'];			 
$subject=$_POST['subject'];


if($prefid>0){
	
    $query="update preferences set subject='$subject',faculty='$fac_id' where preferences_id='$prefid'";
    
 $result= mysqli_query($link, $query);
  alert("preference update successfuly.");
       
        redirect_to("viewpreferences.php");
	
	
}else{

	   $busSql = "Select * from preferences where faculty='$fac_id'";
             $resultBusSql = mysqli_query($link, $busSql);
                       $i=0;
    while($rows = mysqli_fetch_assoc($resultBusSql)){
	$facid=$rows['preferences_id']; 
	$i++;
	}
	
	if($i>=5){
		$msg= "Preference Already Present";
	}else{ 
		
   $date=date("Y-m-d");
    $query="INSERT into preferences(faculty,subject,date) VALUES";
    $query.="('$fac_id','$subject','$date')";
    $result= mysqli_query($link, $query);
    if( mysqli_insert_id($link)){
       alert("preference add successfuly.");
       
        redirect_to("viewpreferences.php");
    }else{
			$msg="room already exist";
        
    }
	



	}

	}	
}
	 
	 
	
?>

 
 <div class="container">
		<h3 style="color:lightblue"> Add Preferences</h3>
	</div>
	<div class="container" id="form">
	<form action="" method="POST" >
	<div class="form-group">
    <div  for="name">Faculty:</div>
    <select type="text" class="form-control" id="faculty" name="faculty" required=""  >
  <?php 
  if($prefid>0){
	  
		   
			  ?>
			  
			<option value='<?php echo $fac_id;?>'><?php echo $fac_id;?> </option> 
			  <option value=" "><--Plz Select Course--></option>   
			  <?php  
			  
		    $query="SELECT * FROM faculty    ";
		$result= mysqli_query($link,$query);
		   while( $row=mysqli_fetch_assoc($result)){
			 $fac_id=$row['faculty_id'];
			  $username=$row['username'];
			   ?>  
  <option value='<?php echo $fac_id;?>'><?php echo  $username;?> </option> 
			  
			  <?php
		  
	  }
  }else{
	  ?>
  
  <option  class="text-danger" value=" "><--Plz Select Course--> </option><?php  
   $query="SELECT * FROM faculty    ";
		$result= mysqli_query($link,$query);
		   while( $row=mysqli_fetch_assoc($result)){
			 $fac_id=$row['faculty_id'];
			  $username=$row['username'];
			   ?>  
  <option value='<?php echo $fac_id;?>'><?php echo  $username;?> </option> 
  
	 <?php   }
  }
		  ?>
		 
</select> </div>

	<div class="form-group">
    <div  for="name">subject :</div>
    <select type="text" class="form-control" id="subject" name="subject" required=""  >
  <?php 
  if($prefid>0){
	  
		   
			  ?>
			  
			<option value='<?php echo $subject;?>'><?php echo $subject;?> </option> 
			  <option value=" "><--Plz Select Course--></option>   
			  <?php  
			  
		    $query="SELECT * FROM course    ";
		$result= mysqli_query($link,$query);
		   while( $row=mysqli_fetch_assoc($result)){
			  $id=$row['course_id'];
			  $subject=$row['course_name'];
			   ?>  
  <option value='<?php echo $subject;?>'><?php echo $subject;?> </option> 
			  
			  <?php
		  
	  }
  }else{
	  ?>
  
  <option  class="text-danger" value=" "><--Plz Select Course--> </option><?php  
   $query="SELECT * FROM course    ";
		$result= mysqli_query($link,$query);
		   while( $row=mysqli_fetch_assoc($result)){
			  $id=$row['course_id'];
			  $subject=$row['course_name'];
			   ?>  
  <option value='<?php echo $subject;?>'><?php echo $subject;?> </option> 
  
	 <?php   }
  }
		  ?>
		 
</select> </div>


  <input type="submit" class="btn btn-success" value="Save" name="submit" id="submit"/>
  <input type="reset" class="btn btn-danger" value="Reset" name="reset" id="reset"/>
   <div class="field_error text-danger"><?php echo $msg?></div>
</div>
</form>
</div>
 

</body>
