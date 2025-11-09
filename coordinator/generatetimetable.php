<?php
require_once "../header.php";



?>
 <div class="main">

 <?php



if(isset($_GET['generate']) && $_GET['generate']!=''){
				$id=$_GET["generate"];

 class Subject
{
    public $code; //Subject code
    public $classes = 0; //No. of classes
    public $semester; //semester of subject
    public $alias; //alias for subject teacher
     public $subjectteacher; //faculty number of teacher1
   
}

/**Class to store teachers details**/
class Teacher
{
    public $id; //faculty number
    public $days = array(); //schedule
    public $classroom_names = array(); //classroom names
}
$subjectslots = array(); //subjects slots for all semesters
$aliasslots = array(); //alias slots corresponding to each subject


$busSql = "Select * from course";
$result = mysqli_query($link, $busSql);
$subjects[] = new Subject(); //to store theory subjects
$practicals[] = new Subject(); //to store practical subjects

$count = 0;
while ($row = mysqli_fetch_assoc($result)) {
     if ($row['course_type'] == 'Lab')
        continue; 
    $temp = new Subject();
    $temp->code = $row['course_code'];
    $temp->semester = $row['semester'];
    $temp->subjectteacher = $row['faculty_id'];
    if (isset($temp->subjectteacher)) {
		  $teacheralias_query = mysqli_query(mysqli_connect("localhost", "root", "", "mytimetab"),
            "SELECT * FROM faculty WHERE faculty_id='$temp->subjectteacher'");
        $row = mysqli_fetch_assoc($teacheralias_query);
        $temp->alias = $row['alias'];
        /* $Sql = "Select * from faculty where faculty_id='$temp->subjectteacher'";
         $BusSql = mysqli_query($link, $Sql);
        $temp->alias = $row['alias']; */
    }
    $subjects[$count++] = $temp;
}
$subjects_count = $count;
 $busSql = "Select * from faculty  ";
$resultBusSql = mysqli_query($link, $busSql);


$teachers[] = new Teacher();
$count = 0;
while ($row = mysqli_fetch_assoc($resultBusSql)) {
    $temp = new Teacher();
    $temp->id = $row['faculty_id'];
    $teachers[$count++] = $temp;
}
$teachers_count = $count;
$r = -1;

/** Genrating timetable for theory courses, with maximum class for each subject equal to 4 */
/* for ($I = 0; $I < $subjects_count * 2; $I++) {
    $i = $I % $subjects_count;
    $sem =0;
	$checsem=$subjects[$i]->semester;
	if($checsem=='semester1'){
		$sem =1;
	}elseif($checsem=='semester2'){
		$sem =2;
	}elseif($checsem=='semester3'){
		$sem =3;
	}elseif($checsem=='semester4'){
		$sem =4;
	}elseif($checsem=='semester5'){
		$sem =5;
	}elseif($checsem=='semester6'){
		$sem =6;
	}elseif($checsem=='semester7'){
		$sem =7;
	}elseif($checsem=='semester8'){
		$sem =8;
	}
	 

   $busSql = "Select * from room where room_id='$sem'  ";
$resultBusSql = mysqli_query($link, $busSql);
    $row = mysqli_fetch_assoc($resultBusSql);
    $classroom = $row['classroom'];
    for ($j = 0; $j < 25; $j++) {
        $subject_teacher;
        for ($z = 0; $z < $count; $z++) {
            if ($teachers[$z]->id == $subjects[$i]->subjectteacher) {
                $tindex = $z;
                break;
            }
        }
        if ($j % 6 == 0)
            $r++;
        if (isset($subjectslots[$sem][$r % 6][$j % 5])) {
            //check if subjectslot is empty
            continue;
        } else if (isset($teachers[$tindex]->days[$sem % 2][$r % 6][$j % 5])) {
            //check if subject teacher is free
			 
            continue;
        } else {
            //check if existing in same day
            $already = false;
            for ($z = 0; $z < 5; $z++) {
                if (isset($subjectslots[$sem][$r % 6][$z])) {
                    if ($z == ($j % 5)) {
                        continue;
                    }
                    if ($subjectslots[$sem][$r % 6][$z] == $subjects[$i]->code) {
                        $already = true;
                    }
                }
            }
            if ($already) {
                continue;
            }
            // set subject
            $subjects[$i]->classes++;
            $subjectslots[$sem][$r % 6][$j % 5] = $subjects[$i]->code;
            $aliasslots[$sem][$r % 6][$j % 5][0] = $subjects[$i]->alias;
            $teachers[$tindex]->days[$sem % 2][$r % 6][$j % 5] = $subjects[$i]->code;
            $teachers[$tindex]->classroom_names[$sem % 2][$r % 6][$j % 5] = $classroom;
            break;
        }
    }
}
for ($i = 1; $i < 9; $i ++) {
    for ($k = 0; $k < 6; $k++) {
        for ($j = 0; $j < 5; $j++) {

            if (isset($subjectslots[$i][$k][$j % 5])) {
            } else {
                $subjectslots[$i][$k][$j % 5] = "-";
                $aliasslots[$i][$k][$j % 5][0] = "-";
            }

        }
    }
}
 
for ($i = 1; $i < $count; $i++) {
    for ($k = 0; $k < 6; $k++) {
        for ($j = 0; $j < 5; $j++) {

            if (isset($teachers[$i]->days[1][$k][$j])) {
            } else {
                $teachers[$i]->days[1][$k][$j] = "-";
                $teachers[$i]->classroom_names[1][$k][$j] = "-";
            }
        }
    }
}
for ($i = 1; $i < $count; $i++) {
    for ($k = 0; $k < 6; $k++) {
        for ($j = 0; $j < 5; $j++) {

            if (isset($teachers[$i]->days[1][$k][$j])) {
            } else {
                $teachers[$i]->days[1][$k][$j] = "-";
                $teachers[$i]->classroom_names[1][$k][$j] = "-";
            }
        }
    }
}
 */
/* echo "<pre>";
   print_r($teachers);
   echo ""; */
/*   
for ($i = 1; $i < $count; $i++) {
    for ($k = 0; $k < 6; $k++) {
        for ($j = 0; $j < 5; $j++) {

            if (isset($teachers[$i]->days[1][$k][$j])) {
            } else {
                $teachers[$i]->days[1][$k][$j] = "-";
                $teachers[$i]->classroom_names[1][$k][$j] = "-";
            }
        }
    }
} */
/* echo "<pre>";
   print_r($subjectslots);
   echo ""; */  
 
 for ($I = 0; $I < $subjects_count * 2; $I++) {
    $i = $I % $subjects_count;
	 
    $sem =0;
	$checsem=$subjects[$i]->semester;
	
	//echo  $checsem."</br>";
	if($checsem=='semester1'){
		$sem =1;
	}elseif($checsem=='semester2'){
		$sem =2;
	}elseif($checsem=='semester3'){
		$sem =3;
	}elseif($checsem=='semester4'){
		$sem =4;
	}elseif($checsem=='semester5'){
		$sem =5;
	}elseif($checsem=='semester6'){
		$sem =6;
	}elseif($checsem=='semester7'){
		$sem =7;
	}elseif($checsem=='semester8'){
		$sem =8;
	}
	  $year = ($sem + 1) / 2;

   $busSql = "Select * from room where room_id='$sem'  ";
$resultBusSql = mysqli_query($link, $busSql);
    $row = mysqli_fetch_assoc($resultBusSql);
    $classroom = $row['classroom'];
    for ($j = 0; $j < 25; $j++) {
        $subject_teacher;
		echo $subjects[$i]->subjectteacher ."<br>";
        for ($z = 0; $z < $count; $z++) {
            if ($teachers[$z]->id == $subjects[$i]->subjectteacher) {
                $tindex = $z;
				//echo $tindex ."<br>";
                break;
            }
        }
        if ($j % 5 == 0)
            $r++;
	 
		 
        if (isset($subjectslots[$sem][$r % 5][$j % 5])) {
            //check if subjectslot is empty
			 
            continue;
        } else if (isset($teachers[$tindex]->days[1][$r % 5][$j % 5])) {
            //check if subject teacher is free  
			//else if (isset($teachers[$tindex]->days[$sem % 2][$r % 5][$j % 5])) {
           
			 
            continue;
        } else {
            //check if existing in same day
            $already = false;
            for ($z = 0; $z < 5; $z++) {
                if (isset($subjectslots[$sem][$r % 5][$z])) {
                    if ($z == ($j % 5)) {
                        continue;
                    }
                    if ($subjectslots[$sem][$r % 5][$z] == $subjects[$i]->code) {
                        $already = true;
                    }
                }
            }
            if ($already) {
                continue;
            }
            // set subject
            $subjects[$i]->classes++;
            $subjectslots[$sem][$r % 5][$j % 5] = $subjects[$i]->code;
            $aliasslots[$sem][$r % 5][$j % 5][0] = $subjects[$i]->alias;
            $teachers[$tindex]->days[1][$r % 5][$j % 5] = $subjects[$i]->code;
            $teachers[$tindex]->classroom_names[$sem % 2][$r % 5][$j % 5] = $classroom;
            break;
        }
    }
}
/* echo "<pre>";
   print_r($subjectslots);
   echo ""; */
/**********************check for empty slots in semester's timetable*******************************/
for ($i = 1; $i < 9; $i ++) {
    for ($k = 0; $k < 5; $k++) {
        for ($j = 0; $j < 5; $j++) {

            if (isset($subjectslots[$i][$k][$j % 4])) {
            } else {
                $subjectslots[$i][$k][$j % 4] = "-";
                $aliasslots[$i][$k][$j % 4][0] = "-";
            }

        }
    }
}
/**********************check for empty slots in teacher's timetable*******************************/
for ($i = 0; $i < $count; $i++) {
    for ($k = 0; $k < 5; $k++) {
        for ($j = 0; $j < 5; $j++) {

            if (isset($teachers[$i]->days[1][$k][$j])) {
            } else {
                $teachers[$i]->days[1][$k][$j] = "-";
                $teachers[$i]->classroom_names[1][$k][$j] = "-";
            }
        }
    }
}
/**Fetching info of practical courses **/

$query = mysqli_query(mysqli_connect("localhost", "root", "", "mytimetab"), "SELECT * FROM course ");
$count = 0;
while ($row = mysqli_fetch_assoc($query)) {
    if (!($row['course_type'] == 'Lab'))
        continue;
    $temp = new Subject();
    $temp->code = $row['course_code'];
    $temp->semester = $row['semester'];
    $temp->subjectteacher = $row['faculty_id'];
    if (isset($temp->subjectteacher)) {
		  $teacheralias_query = mysqli_query(mysqli_connect("localhost", "root", "", "mytimetab"),
            "SELECT * FROM faculty WHERE faculty_id='$temp->subjectteacher'");
        $row = mysqli_fetch_assoc($teacheralias_query);
        $temp->alias = $row['alias'];
    
    /* $teacheralias_query = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
        "SELECT * FROM teachers WHERE faculty_number='$temp->subjectteacher'");
    $row = mysqli_fetch_assoc($teacheralias_query);
    $temp->alias = $row['alias'];
    $teacheralias_query = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
        "SELECT * FROM teachers WHERE faculty_number='$temp->subjectteacher2'");
    $row = mysqli_fetch_assoc($teacheralias_query);
    $temp->alias2 = $row['alias'];
    $teacheralias_query = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
        "SELECT * FROM teachers WHERE faculty_number='$temp->subjectteacher3'");
    $row = mysqli_fetch_assoc($teacheralias_query);
    $temp->alias3 = $row['alias']; */
	}
    $practicals[$count++] = $temp;
}

for ($I = 0; $I < 2 * $count; $I++) {
    $i = $I % $count;
     
	 $sem =0;
	$checsem=$practicals[$i]->semester;
	
	if($checsem=='semester1'){
		$sem =1;
	}elseif($checsem=='semester2'){
		$sem =2;
	}elseif($checsem=='semester3'){
		$sem =3;
	}elseif($checsem=='semester4'){
		$sem =4;
	}elseif($checsem=='semester5'){
		$sem =5;
	}elseif($checsem=='semester6'){
		$sem =6;
	}elseif($checsem=='semester7'){
		$sem =7;
	}elseif($checsem=='semester8'){
		$sem =8;
	}
    $tindex = -1;
    //$tindex2 = -1;
   // $tindex3 = -1;
    for ($z = 0; $z < $teachers_count; $z++) {
        if (isset($practicals[$i]->subjectteacher)) {
            if ($teachers[$z]->id == $practicals[$i]->subjectteacher) {
                $tindex = $z;
            }
        }
        /* if (isset($practicals[$i]->subjectteacher2)) {
            if ($teachers[$z]->id == $practicals[$i]->subjectteacher2) {
                $tindex2 = $z;
            }
        }
        if (isset($practicals[$i]->subjectteacher3)) {
            if ($teachers[$z]->id == $practicals[$i]->subjectteacher3) {
                $tindex3 = $z;
            }
        } */
    }

    //checking if all three teachers are free
    for ($j = 0; $j < 5; $j++) {
        if (isset($subjectslots[$sem][$j][4])) {
            continue;
        } else if (isset($teachers[$tindex]->days[$sem % 2][$j][4]) ) {
            continue;
        } else {
            //if free then assign practical
            $practicals[$i]->classes++;
            $subjectslots[$sem][$j][4] = $practicals[$i]->code;
            $aliasslots[$sem][$j][4][0] = $practicals[$i]->alias;
            //$aliasslots[$sem][$j][4][1] = $practicals[$i]->alias2;
           // $aliasslots[$sem][$j][5][2] = $practicals[$i]->alias3;
            $teachers[$tindex]->days[1][$j][4] = $practicals[$i]->code;
         //   $teachers[$tindex2]->days[$sem % 2][$j][5] = $practicals[$i]->code;
          //  $teachers[$tindex3]->days[$sem % 2][$j][5] = $practicals[$i]->code;
            break;
        }
    }
}

/**checks for empty slot**/
for ($i = 1; $i < 9; $i ++) {
    for ($j = 0; $j < 5; $j++) {
        if (isset($subjectslots[$i][$j][4])) {}
        else {
            $subjectslots[$i][$j][4] = '-';
            $aliasslots[$i][$j][4][0] = '-';
            $aliasslots[$i][$j][4][1] = '-';
            $aliasslots[$i][$j][4][2] = '-';
        }
    }
}

for ($i = 0; $i < $teachers_count; $i++) {
    for ($k = 0; $k < 5; $k++) {

        if (isset($teachers[$i]->days[1][$k][4])) {}
        else {
            $teachers[$i]->days[1][$k][4] = "-";
        }
    }
}
 $days = array('monday', 'tuesday', 'wednesday', 'thursday', 'friday');
  
 

for ($i = 1; $i < 9; $i ++) {
    $database_name = "semester" . $i . " ";
    for ($j = 0; $j < 5; $j++) {
	$query = "UPDATE  {$database_name} SET  period1= '" . $subjectslots[$i][$j][0] . "-" . $aliasslots[$i][$j][0][0] . "',period2='" . $subjectslots[$i][$j][1] . "-" . $aliasslots[$i][$j][1][0] . "',period3='" . $subjectslots[$i][$j][2] . "-" . $aliasslots[$i][$j][2][0] . "',period4='" . $subjectslots[$i][$j][3] . "-" . $aliasslots[$i][$j][3][0] . "', period5='" . $subjectslots[$i][$j][4] . "-" . $aliasslots[$i][$j][4][0] . "' WHERE day='" . $days[$j] . "' ";
    $q = mysqli_query(mysqli_connect("localhost", "root", "", "mytimetab"), $query);
    }

}  
for ($i = 0; $i < $teachers_count; $i++) {
	$facid =$teachers[$i]->id;
	    $database_name= facultyalias($link, $facid); 
   // echo $database_name;
      for ($j = 0; $j < 5; $j++) {
		  
	   $query = "UPDATE  {$database_name} SET  period1= '" . $teachers[$i]->days[1][$j][0]."',period2='" . $teachers[$i]->days[1][$j][1] . "',period3='" . $teachers[$i]->days[1][$j][2] . "',period4='" . $teachers[$i]->days[1][$j][3] .  "', period5='" . $teachers[$i]->days[1][$j][4] . "' WHERE day='" . $days[$j] . "' ";
        $q = mysqli_query(mysqli_connect("localhost", "root", "", "mytimetab"), $query);
    }
}  
 redirect_to("viewtimetable.php");

} 
	
?>	
  
</body>
</html>