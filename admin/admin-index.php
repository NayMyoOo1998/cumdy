<?php include "../template/header.php";?>
<title>dahboard</title>
<link rel="stylesheet" href="../css/admin-index.css">


    


<div class="dahboard">

        <input type="checkbox" name="" id="check">
        <label for="check">
            <i class="fa fa-bars" aria-hidden="true" id='btn'></i>
            <i class="fa fa-times" aria-hidden="true" id="cancel"></i>
        </label>

    <div class="sidebar">
        
        <header><i class="fa fa-graduation-cap pr-2" aria-hidden="true"></i>CU(MDY)</header>
        <ul>
            <li>
                <p class="text-lg btn btn-outline-info" data-toggle="collapse" data-target="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-home pr-2" aria-hidden="true"></i>DAHBOARD</p>
                <!-- <ul class="collapse mb-4" id="collapseExample">
                    <li><a href="addgrade.php">ADD GRADE</a></li>
                    <li><a href="addgrade.php">ADD GRADE</a></li>
                    <li><a href="addgrade.php">ADD GRADE</a></li>
                    
                </ul> -->
            </li>
            <li>
                <p class="text-lg btn btn-outline-info" data-toggle="collapse" data-target="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">FIRST YEAR <i class="fa fa-sort-desc pl-1" aria-hidden="true"></i></p>
                <ul class="collapse mb-2" id="collapseExample1">
                    <li><a href="firstyear/addfirstyearstudent.php">ADD STUDENTS</a></li>
                    <li><a href="firstyear/firstyearsubject.php">ADD SUBJECT GRADE</a></li>
                    <li><a href="addgrade.php">ADD EVENT</a></li>                    
                </ul>
            </li>
            <li>
                <p class="text-lg btn btn-outline-info" data-toggle="collapse" data-target="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">SECOND YEAR <i class="fa fa-sort-desc pl-1" aria-hidden="true"></i></p>
                <ul class="collapse" id="collapseExample2">
                    <li><a href="secondyear/addsecondyearstudents.php">ADD CS STUDENTS</a></li>
                    <li><a href="secondyear/addsecondyearctstudents.php">ADD CT STUDENTS</a></li>
                    <li><a href="secondyear/secondyearsubject.php">CS</a></li>
                    <li><a href="secondyear/secondyearct.php">CT</a></li>
                    <li><a href="addgrade.php">ADD EVENT</a></li>
                    
                </ul>
            </li>
            <li>
                <p class="text-lg btn btn-outline-info" data-toggle="collapse" data-target="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample">THIRD YEAR <i class="fa fa-sort-desc pl-1" aria-hidden="true"></i></p>
                <ul class="collapse" id="collapseExample3">
                    <li><a href="thirdyear/addthirdyearcsstudents.php">ADD CS STUDENTS</a></li>
                    <li><a href="thirdyear/addthirdyearctstudents.php">ADD CT STUDENTS</a></li>
                    <li><a href="thirdyear/thirdyearcssubject.php">CS</a></li>
                    <li><a href="thirdyear/thirdyearctsubject.php">CT</a></li>
                    <li><a href="addgrade.php">ADD EVENT</a></li>                  
                </ul>
            </li>
            <li>
                <p class="text-lg btn btn-outline-info" data-toggle="collapse" data-target="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample">FOURTH YEAR <i class="fa fa-sort-desc pl-1" aria-hidden="true"></i></p>
                <ul class="collapse" id="collapseExample4">
                    <li><a href="addgrade.php">ADD STUDENTS</a></li>
                    <li><a href="addgrade.php">ADD SUBJECT GRADE</a></li>
                    <li><a href="addgrade.php">ADD EVENT</a></li>                    
                </ul>
            </li>
            <li>
                <p class="text-lg btn btn-outline-info" data-toggle="collapse" data-target="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample">FINAL YEAR <i class="fa fa-sort-desc pl-1" aria-hidden="true"></i></p>
                <ul class="collapse" id="collapseExample5">
                    <li><a href="addgrade.php">ADD STUDENTS</a></li>
                    <li><a href="addgrade.php">ADD SUBJECT GRADE</a></li>
                    <li><a href="addgrade.php">ADD EVENT</a></li>                   
                </ul>
            </li>
            <li>
                <p class="text-lg btn btn-outline-info" data-toggle="collapse" data-target="#collapseExample6" role="button" aria-expanded="false" aria-controls="collapseExample">MASTER <i class="fa fa-sort-desc pl-1" aria-hidden="true"></i></p>
                <ul class="collapse" id="collapseExample6">
                    <li><a href="addgrade.php">ADD STUDENTS</a></li>
                    <li><a href="addgrade.php">ADD SUBJECT GRADE</a></li>
                    <li><a href="addgrade.php">ADD EVENT</a></li>
                </ul>
            </li>

        </ul>
       
    </div>
    <!-- <div class="dark-div bg-dark">
    </div> -->

    

    

</div>



<?php include "../template/footer.php"; ?>