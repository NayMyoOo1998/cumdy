<?php
    include ('../../template/header.php');
    $subject = $_GET['subject'];
    
?>

<link rel="stylesheet" href="../../css/firstyear/firstyearaddgrade.css">

    <div class="container">
        <!-- ..english  -->
        <?php if($subject=='english'): ?>
        
        <form class="w-75 m-auto" method="post" action="addcsgrades.php">
            
            <div class="form-group">
                <h4>THIRD YEAR CS ADD GRADE</h4>
            </div>

            <div class="">
                <div class="form-group mr-2 ">
                    <label for="rollno">Roll Number :</label>
                    <input type="text" class="form-control" id="rollno" placeholder="i.e 3cs-1" name="rollno" required>
                </div>
                <!-- <div class="form-group mr-2">
                    <label for="name">Name :</label>
                    <input type="text" class="form-control" id="name" placeholder="i.e Mg Mg" name="name">
                    
                </div> -->
                <div class="form-group mr-2">
                    <label for="english">ENGLISH :</label>
                    <input type="name" class="form-control" id="english" placeholder="i.e 97" name="englishmark" required>
                    
                </div>
            </div>
            <div class="from-group m-auto w-75 pl-5">
                <button type="submit" name="english" class="btn btn-info br-3 ml-5 mr-4">ADD GRADE</button>
                <a href="thirdyearcssubject.php" class="btn btn-danger">Cancel</a>
            </div>        
            
        </form>
        <?php elseif($subject=="cs301"): ?>
        <!-- end english -->

        <!-- cs201 -->
        <form class="w-75 m-auto" method="post" action="addcsgrades.php">
            
            <div class="form-group">
                <h4>THIRD YEAR CS ADD GRADE</h4>
            </div>

            <div class="">
                <div class="form-group mr-2 ">
                    <label for="rollno">Roll Number :</label>
                    <input type="text" class="form-control" id="rollno" placeholder="i.e 3cs - 1" name="rollno" required>
                </div>
                <!-- <div class="form-group mr-2">
                    <label for="name">Name :</label>
                    <input type="text" class="form-control" id="name" placeholder="i.e Mg Mg" name="name">
                    
                </div> -->
                <div class="form-group mr-2">
                    <label for="cs301">CS-301 :</label>
                    <input type="text" class="form-control" id="cs201" placeholder="i.e 97" name="cs301mark" required>
                    
                </div>
            </div>
            <div class="from-group m-auto w-75 pl-5">
                <button type="submit" name="cs301" class="btn btn-info br-3 ml-5 mr-4">ADD GRADE</button>
                <a href="thirdyearcssubject.php" class="btn btn-danger">Cancel</a>
            </div>        
            
        </form>
        <!-- end cs201 -->

        <!-- mathematic -->
        <!-- <form class="w-75 m-auto" method="post" action="addgrades.php">
            
            <div class="form-group">
                <h4>FIRST YEAR ADD GRADE</h4>
            </div>

            <div class="">
                <div class="form-group mr-2 ">
                    <label for="rollno">Roll Number :</label>
                    <input type="text" class="form-control" id="rollno" placeholder="i.e 1cst - 1" name="rollno">
                </div>
                <div class="form-group mr-2">
                    <label for="name">Name :</label>
                    <input type="text" class="form-control" id="name" placeholder="i.e Mg Mg" name="name">
                    
                </div>
                <div class="form-group mr-2">
                    <label for="math">Mathematic :</label>
                    <input type="text" class="form-control" id="math" placeholder="i.e 97" name="math">
                    
                </div>
            </div>
            <div class="from-group m-auto w-75 pl-5">
                <button type="submit" name="math" class="btn btn-info br-3 ml-5 mr-4">ADD GRADE</button>
                <a href="firstyearsubject.php" class="btn btn-danger">Cancel</a>
            </div>        
            
        </form> -->
        <!-- end mathematic -->
        <!-- cs202 -->
        <?php elseif($subject=="cs302"):?>
        <form class="w-75 m-auto" method="post" action="addcsgrades.php">
            
            <div class="form-group">
                <h4>THIRD YEAR CS ADD GRADE</h4>
            </div>

            <div class="">
                <div class="form-group mr-2 ">
                    <label for="rollno">Roll Number :</label>
                    <input type="text" class="form-control" id="rollno" placeholder="i.e 3cs - 1" name="rollno" required>
                </div>
                <!-- <div class="form-group mr-2">
                    <label for="name">Name :</label>
                    <input type="text" class="form-control" id="name" placeholder="i.e Mg Mg" name="name">
                    
                </div> -->
                <div class="form-group mr-2">
                    <label for="cs302">CS-302 :</label>
                    <input type="text" class="form-control" id="cs302" placeholder="i.e 97" name="cs302mark" required>
                    
                </div>
            </div>
            <div class="from-group m-auto w-75 pl-5">
                <button type="submit" name="cs302" class="btn btn-info br-3 ml-5 mr-4">ADD GRADE</button>
                <a href="thirdyearcssubject.php" class="btn btn-danger">Cancel</a>
            </div>        
            
        </form>
        <!-- end cs202  -->
        <!-- cs203-->
        <?php elseif($subject=="cs303"):?>
        <form class="w-75 m-auto" method="post" action="addcsgrades.php">
            
            <div class="form-group">
                <h4>THIRD YEAR CS ADD GRADE</h4>
            </div>

            <div class="">
                <div class="form-group mr-2 ">
                    <label for="rollno">Roll Number :</label>
                    <input type="text" class="form-control" id="rollno" placeholder="i.e 3cs - 1" name="rollno" required>
                </div>
                <!-- <div class="form-group mr-2">
                    <label for="name">Name :</label>
                    <input type="text" class="form-control" id="name" placeholder="i.e Mg Mg" name="name">
                    
                </div> -->
                <div class="form-group mr-2">
                    <label for="cs303">CS-303 :</label>
                    <input type="text" class="form-control" id="cs303" placeholder="i.e 97" name="cs303mark" required>
                    
                </div>
            </div>
            <div class="from-group m-auto w-75 pl-5">
                <button type="submit" name="cs303" class="btn btn-info br-3 ml-5 mr-4">ADD GRADE</button>
                <a href="thirdyearcssubject.php" class="btn btn-danger">Cancel</a>
            </div>        
            
        </form>
        <!-- end cs203 -->
        <!-- cs 204 -->
        <?php elseif($subject=="cs304"):?>
        <form class="w-75 m-auto" method="post" action="addcsgrades.php">
            
            <div class="form-group">
                <h4>THIRD  YEAR CS ADD GRADE</h4>
            </div>

            <div class="">
                <div class="form-group mr-2 ">
                    <label for="rollno">Roll Number :</label>
                    <input type="text" class="form-control" id="rollno" placeholder="i.e 3cs - 1" name="rollno" required>
                </div>
                <!-- <div class="form-group mr-2">
                    <label for="name">Name :</label>
                    <input type="text" class="form-control" id="name" placeholder="i.e Mg Mg" name="name">
                    
                </div> -->
                <div class="form-group mr-2">
                    <label for="cs304">CS 204 :</label>
                    <input type="text" class="form-control" id="cs304" placeholder="i.e 97" name="cs304mark" required>
                    
                </div>
            </div>
            <div class="from-group m-auto w-75 pl-5">
                <button type="submit" name="cs304" class="btn btn-info br-3 ml-5 mr-4">ADD GRADE</button>
                <a href="thirdyearcssubject.php" class="btn btn-danger">Cancel</a>
            </div>        
            
        </form>
        <!-- end cs204 -->
       
        <?php endif;?>

        
    
    </div>


    <?php include ('../../template/footer.php');?>
