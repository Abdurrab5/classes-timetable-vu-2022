<?php
require_once "../header.php";

$page='Add Lab';
   $id="";
				$lab_name="";
				$capacity="";
				 $multimedia="";
				 
if(isset($_GET['id']) && $_GET['id']!=''){
$id=$_GET["id"];



}
	  
    if($id>0){
           $query="SELECT * FROM lab where lab_id='$id'   ";
		$result= mysqli_query($link,$query);
		   while( $row=mysqli_fetch_assoc($result)){
			  $id=$row['lab_id'];
				$lab_name=$row['lab_name'];
				$capacity=$row['capacity'];
				 $multimedia=$row['multimedia'];
				 
	 
    
	 
    
		   }
        }else{
			
			     $id="";
				$lab_name="";
				$capacity="";
				 $multimedia="";;
            
        }



?>
 

 
    <body>
 
<div class="main">
    


	<?php
	$msg='';
	if(isset($_POST['submit'])){
    $lab_name=$_POST['lab_name'];
	$capacity=$_POST['capacity'];
    $multimedia=$_POST['multimedia'];
	 
    if($id>0){

    
	
    $query="update lab set lab_name='$lab_name',capacity='$capacity',multimedia='$multimedia'  where lab_id='$id'";
    
 $result= mysqli_query($link, $query);
  alert("lab update successfuly.");
       
        redirect_to("viewlab.php");
 
		   }else{
    $query="INSERT into lab(lab_name,capacity,multimedia) VALUES";
    $query.="('$lab_name','$capacity','$multimedia')";
    $result= mysqli_query($link, $query);
    if( mysqli_insert_id($link)){
       alert("lab successfuly.");
       
        redirect_to("dashboard.php");
    }else{
			$msg="lab already exist";
        
    }
}
	}
?>


  <div class="container">
		<h3 style="color:lightblue"> Add lab</h3>
	</div>
	<div class="container" id="form">
	<form action="" method="POST" >
 
 <div class="form-group">
    <label for="name">Lab Name:</label>
    <input type="text" class="form-control" id="lab_name" name="lab_name" value="<?php echo $lab_name;?>" required="" Placeholder="lab_name:" >
  </div>
  <div class="form-group">
    <label for="capacity">Capacity:</label>
    <input type="text" class="form-control" id="capacity" name="capacity" value="<?php echo $capacity;?>" required="" Placeholder="capacity:" >
  </div>
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
  <option value='No'>No</option>";
  } ?>
  
  </select>
  
  
  </div>
   
  <div>
  <input type="submit" class="btn btn-success" value="Save" name="submit" id="submit"/>
  <input type="reset" class="btn btn-danger" value="Reset" name="reset" id="reset"/>
   <div class="field_error"><?php echo $msg?></div>
</div>
</form>
</div>
 

</body>




</html>
