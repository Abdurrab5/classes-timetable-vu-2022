<?php 
require_once "../header.php";
 
$fac_id=$_SESSION['fac_id'];
$day="";
$peri1="";
$peri2="";
$peri3="";
$peri4="";
$peri5="";
$dayprefid="";
$selectday="";
$msg="";	
if(isset($_GET['id']) && $_GET['id']!=''){
$dayprefid=$_GET["id"];



}
 if($dayprefid>0){
           $query="SELECT * FROM daypreference where dp_id='$dayprefid'   ";
		$result= mysqli_query($link,$query);
		   while( $row=mysqli_fetch_assoc($result)){
			   
				 
	$selectday=$row['day'];			 
$peri1=$row['period1'];
$peri2=$row['period2'];
$peri3=$row['period3'];
$peri4=$row['period4'];
$peri5=$row['period5'];
    
	 
    
		   }
        }else{
		$day="";	
$period1="";
$period2="";
$period3="";
$period4="";
$period5="";
            
        }
if(isset($_POST['submit'])){
   
 
 $day=$_POST['day'];
$busSql = "Select * from daypreference where day='$day' AND fac_id='$fac_id'";
             $resultBusSql = mysqli_query($link, $busSql);
                       $j=0;
    while($rows = mysqli_fetch_assoc($resultBusSql)){
		$todays=$rows['day'];
		$j++;
		
	}
	if(isset($_POST['period1'])){
$period1=$_POST['period1'];
	}
	if(isset($_POST['period2'])){
$period2=$_POST['period2'];
	}
if(isset($_POST['period3'])){
$period3=$_POST['period3'];
}if(isset($_POST['period4'])){
$period4=$_POST['period4'];
}if(isset($_POST['period5'])){
$period5=$_POST['period5'];
}

if($dayprefid>0){
	if($todays!=$selectday && $j>0){ 
	$msg= "day is already selected";
	}else{
    $query="update daypreference set day='$day',period1='$period1',period2='$period2',period3='$period3',period4='$period4',period5='$period5' where dp_id='$dayprefid'";
    
 $result= mysqli_query($link, $query);
  alert("preference update successfuly.");
       
        redirect_to("viewdaypreferences.php");
	
	}
}else{
$busSql = "Select * from daypreference where fac_id='$fac_id'";
             $resultBusSql = mysqli_query($link, $busSql);
                       $i=0;
    while($rows = mysqli_fetch_assoc($resultBusSql)){
	$count=$rows['dp_id']; 
	 
	
	$i++;
	} 
	
	if($j>0){ 
	$msg= "day is already selected";
	}elseif($i>=2){
		$msg= "you can select only 2 days";
		
	
	}else{  
		
   $date=date("Y-m-d");
    $query="INSERT into daypreference(fac_id,day,period1,period2,period3,period4,period5) VALUES";
    $query.="('$fac_id','$day','$period1','$period2','$period3','$period4','$period5')";
    $result= mysqli_query($link, $query);
    if( mysqli_insert_id($link)){
        alert("preference add successfuly.");
       
        redirect_to("viewdaypreferences.php");
    }else{
			$msg="day already exist";
        
    }
	



	}
} 
		
}
?>

 <div class="container">
		<h3> Add Preferences</h3>
	</div>
	<div class="container" id="form">
	<form action="" method="POST" >
	<div class="form-group">
    <div  for="name">Day:</div>
    <select type="text" class="form-control" id="day" name="day" required=""  >
  <?php 
  if($dayprefid>0){
	  
		   
			  ?>
			  
			<option value='<?php echo $selectday;?>'><?php echo $selectday;?> </option> 
			  <option value=" "><--Plz Select Course--></option>   
			  <option value='monday'>monday </option> 
			  <option value=' tuesday'>tuesday </option> 
			  <option value='wednesday'>wednesday</option> 
			  <option value='thursday'>thursday </option> 
			  <option value='friday'>friday </option> 
			  
		    
			  
			  <?php
		  
	  
  }else{
	  ?>
  
    <option value=" "><--Plz Select Course--></option>   
			  <option value='monday'>monday </option> 
			  <option value=' tuesday'>tuesday </option> 
			  <option value='wednesday'>wednesday</option> 
			  <option value='thursday'>thursday </option> 
			  <option value='friday'>friday </option> 
  
	 <?php   
  }
		  ?>
		 
</select> </div>
<div class="form-group">
<?php 
  if($dayprefid>0){
	  
		   
			  ?>
			  <div class="form-group">
			  <input type="checkbox" id="period1" name="period1" value="0900-0800" <?php if($peri1!=''){
			  echo 'checked';} ?>>
  <label for="period1"> period1</label><br> 
  </div>
<div class="form-group">
  <input type="checkbox" id="period2" name="period2" value="0930-1100" <?php if($peri2!=''){
			  echo 'checked';} ?>>
  <label for="period2"> period2</label><br>
  </div>
<div class="form-group">
  <input type="checkbox" id="period3" name="period3" value="1100-1230" <?php if($peri3!=''){
			  echo 'checked';} ?>>
  <label for="period3"> period3</label><br><br>
  </div>
<div class="form-group">
  <input type="checkbox" id="period4" name="period4" value="1230-1400" <?php if($peri4!=''){
			  echo 'checked';} ?>>
   <label for="period4"> period4</label><br>
   </div>
<div class="form-group">
  <input type="checkbox" id="period5" name="period5" value="1400-1530" <?php if($peri5!=''){
			  echo 'checked';} ?>>
  <label for="period5"> period5</label><br><br>
  </div>
			  
		<?php 
  
	  
  }else{ 
			  ?>
			  	  
			<div class="form-group">  
  <input type="checkbox" id="period1" name="period1" value="0900-0800">
  <label for="period1"> period1</label><br> 
  </div>
<div class="form-group">
  <input type="checkbox" id="period2" name="period2" value="0930-1100">
  <label for="period2"> period2</label><br>
  </div>
<div class="form-group">
  <input type="checkbox" id="period3" name="period3" value="1100-1230">
  <label for="period3"> period3</label><br>
  </div>
<div class="form-group">
  <input type="checkbox" id="period4" name="period4" value="1230-1400">
   <label for="period4"> period4</label><br>
   </div>
<div class="form-group">
  <input type="checkbox" id="period5" name="period5" value="1400-1530">
  <label for="period5"> period5</label><br><br>
  </div>
  	<?php 
  
	  
  }
			  ?>
<div class="form-group">
  <input type="submit" class="btn btn-success" value="Save" name="submit" id="submit"/>
  <input type="reset" class="btn btn-danger" value="Reset" name="reset" id="reset"/>
  <div class="field_error text-danger"><?php echo $msg?></div>
  </div>
</form> 
</div>