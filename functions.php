<?php
//to get js alert
function alert($text){
    echo "<script>alert(\"$text\");</script>";
}
//to go to locaton
function redirect_to($path){
    echo "<script>location=\"$path\";</script>";
}
//confirming right to visit
function confirm_user($user){
    if(strtolower($_SESSION['user_type']) != strtolower("$user")){
        alert("Un-Autherize Access");
        redirect_to("index.php");
    }    
}
//confirming log in
function confirm_logged_in(){
    if(isset($_SESSION['user_type'])){
        return true;
    }else{
        alert("Login Required.");
        redirect_to("login.php");
    }
}
//confirmin nt login
function confirm_not_logged_in(){
    if(isset($_SESSION['user_type'])){
        redirect_to("index.php");
    }
}
//index to user penal
function index_func(){
    if(isset($_SESSION['user_type'])){
        $path=$_SESSION['user_type']."_penal.php";
        redirect_to($path);
    }    
}
function get_safe_value($link,$str){
	if($str!=''){
		$str=trim($str);
		return mysqli_real_escape_string($link,$str);
	}
}
function countfaculty($link){
	$rtSql = "Select * from faculty";
    $resultrtSql = mysqli_query($link, $rtSql);
    $arr = array();
    if(mysqli_num_rows($resultrtSql))
        while($row = mysqli_fetch_assoc($resultrtSql))
            $arr[] = $row;
       // $routeJson = json_encode($arr);
	   return $arr;
	}
	function cleartimetable($link){
		
$days = array('monday', 'tuesday', 'wednesday', 'thursday', 'friday');
for ($i = 1; $i < 9; $i ++) {
    $database_name = "semester" . $i . " ";
    for ($j = 0; $j < 5; $j++) {
	$query = "UPDATE  {$database_name} SET  period1= 'null',period2='null',period3='null',period4='null', period5='null' WHERE day='" . $days[$j] . "' ";
    $q = mysqli_query(mysqli_connect("localhost", "root", "", "mytimetab"), $query);
    }

}
$rtSql = "Select * from faculty ";
    $resultrtSql = mysqli_query($link, $rtSql);
    $teachers_count=0;
	$fac=array();
        while($row = mysqli_fetch_assoc($resultrtSql)){
            $fac_id[] = $row['faculty_id'];
			 $teachers_count++;
		}
for ($i = 0; $i < $teachers_count; $i++) {
	$facid = $fac_id[$i];
	    $database_name= facultyalias($link, $facid);
    // echo $database_name;
     for ($j = 0; $j < 5; $j++) {
	$query = "UPDATE   {$database_name} SET period1= 'null',period2='null',period3='null',period4='null', period5='null' WHERE day='" . $days[$j] . "' ";
        $q = mysqli_query(mysqli_connect("localhost", "root", "", "mytimetab"), $query);
    } 
}
	}
	function facultyalias($link,$id){
	$rtSql = "Select * from faculty where faculty_id='$id'";
    $resultrtSql = mysqli_query($link, $rtSql);
    
        while($row = mysqli_fetch_assoc($resultrtSql)){
            $alias = $row['alias'];
		}
       // $routeJson = json_encode($arr);
	   return $alias ;
	}
	function facultyname($link,$id){
	$rtSql = "Select * from faculty where faculty_id='$id'";
    $resultrtSql = mysqli_query($link, $rtSql);
    
        while($row = mysqli_fetch_assoc($resultrtSql)){
            $username = $row['username'];
		}
       // $routeJson = json_encode($arr);
	   return $username ;
	}
	function countstudent($link){
	$rtSql = "Select * from student";
    $resultrtSql = mysqli_query($link, $rtSql);
    $arr = array();
    if(mysqli_num_rows($resultrtSql))
        while($row = mysqli_fetch_assoc($resultrtSql))
            $arr[] = $row;
       // $routeJson = json_encode($arr);
	   return $arr;
	}
	function countcoordinator($link){
	$rtSql = "Select * from coordinator";
    $resultrtSql = mysqli_query($link, $rtSql);
    $arr = array();
    if(mysqli_num_rows($resultrtSql))
        while($row = mysqli_fetch_assoc($resultrtSql))
            $arr[] = $row;
       // $routeJson = json_encode($arr);
	   return $arr;
	}
	function countcourse($link){
	$rtSql = "Select * from course";
    $resultrtSql = mysqli_query($link, $rtSql);
    $arr = array();
    if(mysqli_num_rows($resultrtSql))
        while($row = mysqli_fetch_assoc($resultrtSql))
            $arr[] = $row;
       // $routeJson = json_encode($arr);
	   return $arr;
	}
	function countroom($link){
	$rtSql = "Select * from room";
    $resultrtSql = mysqli_query($link, $rtSql);
    $arr = array();
    if(mysqli_num_rows($resultrtSql))
        while($row = mysqli_fetch_assoc($resultrtSql))
            $arr[] = $row;
       // $routeJson = json_encode($arr);
	   return $arr;
	}
	function countlab($link){
	$rtSql = "Select * from lab";
    $resultrtSql = mysqli_query($link, $rtSql);
    $arr = array();
    if(mysqli_num_rows($resultrtSql))
        while($row = mysqli_fetch_assoc($resultrtSql))
            $arr[] = $row;
       // $routeJson = json_encode($arr);
	   return $arr;
	}
	function deletfaculty($link,$id){
	$rtSql = "delete from faculty where faculty_id='$id'";
    $resultrtSql = mysqli_query($link, $rtSql);
     
	 alert("  Delete successfuly.");
       
        redirect_to("dashboard.php");} 
	 function deletstudent($link,$id){
	$rtSql = "delete from student where student_id='$id'";
    $resultrtSql = mysqli_query($link, $rtSql);
    alert("  Delete successfuly.");
       
        redirect_to("dashboard.php");
		}
	 function deletcoordinator($link,$id){
	$rtSql = "delete from coordinator where coordinator_id='$id'";
    $resultrtSql = mysqli_query($link, $rtSql);
	alert("  Delete successfuly.");
       
        redirect_to("dashboard.php");
     }
	 
	 function deletcourse($link,$id){
	$rtSql = "delete from course where course_id='$id'";
    $resultrtSql = mysqli_query($link, $rtSql);
     
	 alert("  Delete successfuly.");
       
        redirect_to("dashboard.php");} 
	 
	 function deletroom($link,$id){
	$rtSql = "delete from room where room_id='$id'";
    $resultrtSql = mysqli_query($link, $rtSql);
     
	 alert("  Delete successfuly.");
       
        redirect_to("dashboard.php");} 
		
		function deletlab($link,$id){
	$rtSql = "delete from lab where lab_id='$id'";
    $resultrtSql = mysqli_query($link, $rtSql);
     
	 alert("  Delete successfuly.");
       
        redirect_to("dashboard.php");} 
?>