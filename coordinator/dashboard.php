 
<?php require '../header.php';     ?>
   

    <?php
        $page='Dashbord';
        
		
		$labcount=countlab($link);
		$roomcount=countroom($link);
		$coursecount=countcourse($link);
		$facultycount=countfaculty($link);
		$studentcount=countstudent($link);
    ?>

<body>
   
<div class="main">
                
                <div id="status">
                    <div id="faculty" class="info-box status-item">
                        <div class="heading">
                            <h5>Faculty</h5>
                            <div class="info">
                                <i class="fas fa-ticket-alt"></i>
                            </div>
                        </div>
                        <div class="info-content text-primary">
                            <p>Total faculty</p>
                            <p class="num "  >
                                <?php 
                                 echo count($facultycount) ;
                                ?>
                            </p>
                        </div>
                        <a href="./viewfaculty.php">View More <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div id="student" class="info-box status-item">
                        <div class="heading">
                            <h5>Student</h5>
                            <div class="info">
                                <i class="fas fa-bus"></i>
                            </div>
                        </div>
                        <div class="info-content text-success">
                            <p>Total Student</p>
                            <p class="num" data-target="<?php 
                                     
                                ?>">
                                <?php 
                                 echo count($studentcount) ;
                                ?>
                            </p>
                        </div>
                        <a href="./viewstudent.php">View More <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div id="course" class="info-box status-item">
                        <div class="heading">
                            <h5>course</h5>
                            <div class="info">
                                <i class="fas fa-road"></i>
                            </div>
                        </div>
                        <div class="info-content text-danger">
                            <p>Total Courses</p>
                            <p class="num" data-target="<?php 
                                      
                                ?>">
                                <?php 
                                    echo count($coursecount) ; 
                                ?>
                            </p>
                        </div>
                        <a href="./viewcourse.php">View More <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div id="room" class="info-box status-item">
                        <div class="heading">
                            <h5>Rooms</h5>
                            <div class="info">
                                <i class="fas fa-th"></i>
                            </div>
                        </div>
                        <div class="info-content text-warning">
                            <p>Total Rooms</p>
                            <p class="num" data-target="<?php 
                                     
                                ?>">
                               <?php 
                                     echo count($roomcount) ; 
                                ?>
                            </p>
                        </div>
                        <a href="./viewroom.php">View More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- <h3>User</h3> -->
                <div id="user">
                    <div id="Customer" class="info-box user-item">
                        <div class="heading">
                            <h5>Labs</h5>
                            <div class="info">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                        <div class="info-content">
                            <p>Total Passenger</p>
                            <p class="num" data-target="<?php 
                                        
                                    ?>"> 
                                 <?php 
                                     echo count($labcount) ; 
                                ?>
                            </p>
                        </div>
                        <a href="./viewlab.php">View More <i class="fas fa-arrow-right"></i></a>
                    </div>
                   
                       

                    
 
                    <?php 
                     
                    ?>
                </div>
            
                
        </div>
     </div>
 </body>
 