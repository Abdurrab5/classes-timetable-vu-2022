<?php

   require_once "connection.php";
   require_once "functions.php"; 
   
   session_start();
   
   
      $header=$_SESSION['role'];
	  
	   require_once "navbar.php"; 
?>
 

     <!DOCTYPE html>
<html>
<head>
	<title></title>  
   <meta name="viewport" content="width=device-width, initial-scale=1.0">	
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../style.css">

   
    <link href="../assets/datatables/css/jquery.dataTables.min.css" rel="stylesheet" />

    
    <link href="../assets/fontawesome/css/all.css" rel="stylesheet" />
	 <link href="../assets/fontawesome/css/all.min" rel="stylesheet" />

    <script src="../assets/bootstrap/js/jquery-3.3.1.slim.min.js"></script>
    <script src="../assets/bootstrap/js/popper.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
   
</head>

<body  >
   <div class="container-fluid"  >
   <div class="container">
   <div class="sidebar"> 
 <?php 
  
     if($header=='ADMIN'){?>
                  
 
 <a  href="dashboard.php"  class="active  <?php if($page=='Dashbord'){ echo 'active';}?>"  ><i class="fa-solid fa-gauge"></i> Dashbord</a>
 <a  href="addcoordinator.php"    class="active <?phpif($page=='Add Coordinator'){ echo 'active';}?>" ><i class="fa fa-user-circle" aria-hidden="true"></i> Add Coordinator</a>
 <a  href="addfaculty.php"   class="<?phpif($page=='Add Faculty'){ echo 'active';}?>"  ><i class="fa fa-user-circle" aria-hidden="true"></i> Add Faculty</a>
<a  href="addstudent.php"   class="<?phpif($page=='Add Studen'){ echo 'active';}?>"  ><i class="fa fa-graduation-cap" aria-hidden="true"></i> Add Student</a>
<a  href="viewcoordinator.php"  class="<?phpif($page=='view Coordinator'){ echo 'active';}?>" > <i class="fa fa-graduation-cap" aria-hidden="true"></i>View Coordinator</a>
<a  href="viewfaculty.php"   class="<?phpif($page=='View Faculty'){ echo 'active';}?>"  ><i class="fa fa-user-circle" aria-hidden="true"></i> View Faculty</a>
<a  href="viewstudent.php"   class="<?phpif($page=='View Student'){ echo 'active';}?>" ><i class="fa fa-graduation-cap" aria-hidden="true"></i> View Student</a>
	 
	    
   
	 
 <?php  
 
 
    }elseif($header=='COORDINATOR'){ 

  ?>
	 
	             
	 
	 	     <a  href="dashboard.php"   class="<?phpif($page=='Dashbord'){ echo 'active';}?>"  ><i class="fa-solid fa-gauge"></i> Dashbord</a>
		     <a  href="addroom.php"   class="<?phpif($page=='Add Room'){ echo 'active';}?>"  ><i class="fa-solid fa-people-roof"></i> Add Room</a>
			  <a  href="viewroom.php"   class="<?phpif($page=='View Room'){ echo 'active';}?>"  ><i class="fa-solid fa-people-roof"></i>View Room</a>
		    
			 <a  href="addlab.php"   class="<?phpif($page=='Add Lab'){ echo 'active';}?>"  ><i class="fa-sharp fa-solid fa-flask-vial"></i> Add Lab</a>
			  <a  href="viewlab.php"    class="<?phpif($page=='View Lab'){ echo 'active';}?>" ><i class="fa-sharp fa-solid fa-flask-vial"></i> View Lab</a>
		    
			 <a  href="addcourse.php"  class="<?phpif($page=='Add Course'){ echo 'active';}?>"  ><i class="fa-solid fa-book"></i> Add Course</a>
			 <a  href="viewcourse.php"   class="<?phpif($page=='View Course'){ echo 'active';}?>"  ><i class="fa-solid fa-book"></i> View Course</a>
			   <a  href="viewcourseallotement.php"   class="<?phpif($page=='View Course'){ echo 'active';}?>"  ><i class="fa-solid fa-book"></i> View Course Allotment</a>
			
		     <a  href="viewfaculty.php"   class="<?phpif($page=='View Faculty'){ echo 'active';}?>"  ><i class="fa fa-user-circle" aria-hidden="true"></i> View Faculty</a> 
			   <a  href="viewdaypreferences.php"   class="<?phpif($page=='Preferences'){ echo 'active';}?>"  > <i class="fa-solid fa-calendar-day"></i>Day Preferences</a>
			 
			  <a  href="viewpreferences.php"  class="<?phpif($page=='View Preferences'){ echo 'active';}?>" ><i class="fa-solid fa-book"></i>Course Preferences</a>
			 
		     <a  href="viewstudent.php"  class="<?phpif($page=='View Student'){ echo 'active';}?>"  ><i class="fa fa-graduation-cap" aria-hidden="true"></i> View Student</a>
			 <a  href="generate.php"    class="<?phpif($page=='Generate Timetable'){ echo 'active';}?>" ><i class="fa fa-user-circle" aria-hidden="true"></i> Generate Timetable</a> 
		     <a  href="viewtimetable.php"  class="<?phpif($page=='View Timetable'){ echo 'active';}?>"  ><i class="fa fa-graduation-cap" aria-hidden="true"></i> View Timetable</a>
			 
			  
	    
<?php 
     }elseif($header=='FACULTY'){
		 
		 
?>
	            
	 
	         <a  href="dashboard.php"    class="<?phpif($page=='Dashboard'){ echo 'active';}?>" ><i class="fa-solid fa-gauge"></i>Dashboard</a>
			 <a  href="preferences.php"   class="<?phpif($page=='Preferences'){ echo 'active';}?>"  > Subject Preferences</a>
			 <a  href="viewpreferences.php"  class="<?phpif($page=='View Preferences'){ echo 'active';}?>" >View Subject Preferences</a>
			 
			  <a  href="daypreferences.php"   class="<?phpif($page=='Preferences'){ echo 'active';}?>"  >Day Preferences</a>
			 <a  href="viewdaypreferences.php"  class="<?phpif($page=='View Preferences'){ echo 'active';}?>" >View Day Preferences</a>
			 <a  href="viewtimetable.php"   class="<?phpif($page=='View Timetable'){ echo 'active';}?>" > View Timetable</a>
	  
	  
	   
 <?php 
 
    }elseif($header=='STUDENT'){  
 ?>
 
                 
	 	       <a  href="dashboard.php"   class="<?phpif($page=='Dashboard'){ echo 'active';}?>" ><i class="fa-solid fa-gauge"></i>Dashboard</a>
			   <a  href="viewtimetable.php"   class="<?phpif($page=='View Timetable'){ echo 'active';}?>" > View Timetable</a>
			    
       
	
	 
	 
      <?php }
 
 ?></div> 
	   