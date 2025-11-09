 
<?php require '../header.php';     ?>
   

    <?php
        
        $page="dashboard";
		$labcount=countlab($link);
		$roomcount=countroom($link);
		$coursecount=countcourse($link);
		$facultycount=countfaculty($link);
		$studentcount=countstudent($link);
    ?>
</head>
<body>
     
 
                <div id="status">
                
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
 </body>
</html>