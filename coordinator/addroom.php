<?php
require_once "../header.php";
$page='Add Room';
   $id="";
				$building="";
				$capacity="";
				 $multimedia="";
				 $classroom="";
if(isset($_GET['id']) && $_GET['id']!=''){
$id=$_GET["id"];



}
	  
    if($id>0){
           $query="SELECT * FROM room where room_id='$id'   ";
		$result= mysqli_query($link,$query);
		   while( $row=mysqli_fetch_assoc($result)){
			  $id=$row['room_id'];
				$building=$row['building'];
				$capacity=$row['capacity'];
				 $multimedia=$row['multimedia'];
				 $classroom=$row['classroom'];
	 
    
	 
    
		   }
        }else{
			
			     $id="";
				$building="";
				$capacity="";
				 $multimedia="";;
            $classroom="";
        }



?>
 

 
    <body>
 
   <div class="main">
   


	<?php
	$msg='';
	if(isset($_POST['submit'])){
    $building=$_POST['building'];
	$capacity=$_POST['capacity'];
    $multimedia=$_POST['multimedia'];
	  $classroom=$_POST['classroom'];
    if($id>0){

    
	
    $query="update room set classroom='$classroom',building='$building',capacity='$capacity',multimedia='$multimedia'  where room_id='$id'";
    
 $result= mysqli_query($link, $query);
  alert("room update successfuly.");
       
        redirect_to("viewroom.php");
 
		   }else{
    $query="INSERT into room(classroom,building,capacity,multimedia) VALUES";
    $query.="('$classroom','$building','$capacity','$multimedia')";
    $result= mysqli_query($link, $query);
    if( mysqli_insert_id($link)){
       alert("room successfuly.");
       
        redirect_to("dashboard.php");
    }else{
			$msg="room already exist";
        
    }
}
	}
?>


  <div class="container">
		<h3 style="color:lightblue"> Add room</h3>
	</div>
	<div class="container" id="form">
	<form action="" method="POST" >
 
 <div class="form-group">
    <div  for="name">Building:</div>
    <select type="text" class="form-control" id="building" name="building" value="<?php echo $building;?>" required="" Placeholder="building:" >
  <?php  
   if($id>0){
	 
		 ?>  
  <option value='<?php echo $building;?> ' selected><?php echo $building;?> </option> 
  <option value=" block1"> block1</option>
	<option value="block2">block2</option>
<option value="block3">block3</option>
<option value="block4">block4</option>
	 <?php    }else{
		  ?>
		  <option value=" block1"> block1</option>
	<option value="block2">block2</option>
<option value="block3">block3</option>
<option value="block4">block4</option>
 <?php }?>
</select> </div>
<div class="form-group">
    <div  for="name">Room No:</div>
    <select type="text" class="form-control" id="classroom" name="classroom" value="<?php echo $classroom;?>" required="" Placeholder="classroom:" >
 <?php 
 if($id>0){
	 ?>
		   
  <option value='<?php echo $classroom;?> ' selected><?php echo $classroom;?> </option>  
<option value=" B1-F0-01">B1-F0-01</option>
     <option value=" B1-F0-02">B1-F0-02</option>
	   <option value=" B1-F0-03">B1-F0-03</option>
	     <option value=" B1-F0-04">B1-F0-04</option>
		   <option value=" B1-F0-05">B1-F0-05</option>
		     <option value=" B1-F0-06">B1-F0-06</option>
			   <option value=" B1-F0-07">B1-F0-07</option>
			     <option value=" B1-F0-08">B1-F0-08</option>
	 <?php   }else{
		  ?>
		  
	  

  <option value=" B1-F0-01">B1-F0-01</option>
     <option value=" B1-F0-02">B1-F0-02</option>
	   <option value=" B1-F0-03">B1-F0-03</option>
	     <option value=" B1-F0-04">B1-F0-04</option>
		   <option value=" B1-F0-05">B1-F0-05</option>
		     <option value=" B1-F0-06">B1-F0-06</option>
			   <option value=" B1-F0-07">B1-F0-07</option>
			     <option value=" B1-F0-08">B1-F0-08</option>
	  <?php }?>
</select> </div>
  <div class="form-group">
    <div for="capacity">Capacity:</div>
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
  <option value='No'>No</option> ";
  
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
