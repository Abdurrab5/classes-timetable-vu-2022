<?php
require_once "../header.php";
$page='Add Coordinator';
   $id='';
	  $username="";
	 $email="";
	$password="";
if(isset($_GET['id']) && $_GET['id']!=''){
$id=$_GET["id"];



}
	  
    if($id>0){
           $query="SELECT * FROM coordinator where coordinator_id='$id'   ";
		$result= mysqli_query($link,$query);
		   while( $row=mysqli_fetch_assoc($result)){
			  $id=$row['coordinator_id'];
				
				
				 $username=$row['username'];
				$email=$row['email'];
				$password=$row['password'];
		   }
        }else{
			
			     $id='';
            	 $username="";
				$email="";
				$password="";
            
        }



?>
 
 <body>
 
    <div >
    
    


	<?php
	$msg='';
	if(isset($_POST['submit'])){
     
    $username=$_POST['username'];
	$email=$_POST['email'];
    $password=$_POST['password'];
	 
   if($id>0){

    
	
    $query="update coordinator set username='$username',email='$email',password='$password' where coordinator_id='$id'";
    
 $result= mysqli_query($link, $query);
  alert("coordinator update successfuly.");
       
        redirect_to("viewcoordinator.php");
 
		   }else{
            	 
    $query="INSERT into coordinator(username,email,password) VALUES";
    $query.="('$username','$email','$password')";
    $result= mysqli_query($link, $query);
    if( mysqli_insert_id($link)){
       alert("Coordinator add successfuly.");
       
        redirect_to("dashboard.php");
    }else{
			$msg="already exist";
        
    }
}
	}
?>


  <div class="container">
		<h3> Add Coordinator</h3>
	</div>
	<div class="container" id="form">
	<form action="" method="POST" >
 
 <div class="form-group">
    <label for="name">User Name:</label>
    <input type="text" class="form-control" id="username" name="username" required=""  value="<?php echo $username;?>" Placeholder="username:" >
  </div>
   <div class="form-group">
    <label for="name">e-Mail:</label>
    <input type="email" class="form-control" id="email" name="email" required="" value="<?php echo $email;?>" Placeholder="Enter e-Mail add:">
  </div> 
    <div class="form-group">
    <label for="name">Password:</label>
    <input type="password" class="form-control" id="password" name="password" required="" value="<?php echo $password;?>" Placeholder="Enter password:">
  </div>
  
   
   
  <input type="submit" class="btn btn-primary" value="Click to Register" name="submit" id="submit"/>
  <input type="reset" class="btn btn-danger" value="Reset" name="reset" id="reset"/>
   <div class="field_error"><?php echo $msg?></div>
 
</form>
</div>
 

</body>




 
