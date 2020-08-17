<?php
    include ('../../template/header.php');
    $subject = $_GET['subject'];
    
?>

<link rel="stylesheet" href="../../css/firstyear/firstyearaddgrade.css">

    <div class="container">
        <!-- ..myanmar  -->
        <?php if($subject=='myanmar'): ?>
        
        <form class="w-75 m-auto" method="post" action="addgrades.php">
            
            <div class="form-group">
                <h4>FIRST YEAR ADD GRADE</h4>
            </div>

            <div class="">
                <div class="form-group mr-2 ">
                    <label for="rollno">Roll Number :</label>
                    <input type="text" class="form-control" id="rollno" placeholder="i.e 1cst - 1" name="rollno" required>
                </div>
                <!-- <div class="form-group mr-2">
                    <label for="name">Name :</label>
                    <input type="text" class="form-control" id="name" placeholder="i.e Mg Mg" name="name">
                    
                </div> -->
                <div class="form-group mr-2">
                    <label for="myanmar">Myanmar :</label>
                    <input type="name" class="form-control" id="myanmar" placeholder="i.e 97" name="myanmarmark" required>
                    
                </div>
            </div>
            <div class="from-group m-auto w-75 pl-5">
                <button type="submit" name="myanmar" class="btn btn-info br-3 ml-5 mr-4">ADD GRADE</button>
                <a href="firstyearsubject.php" class="btn btn-danger">Cancel</a>
            </div>        
            
        </form>
        <?php elseif($subject=="english"): ?>
        <!-- end myamar -->

        <!-- english -->
        <form class="w-75 m-auto" method="post" action="addgrades.php">
            
            <div class="form-group">
                <h4>FIRST YEAR ADD GRADE</h4>
            </div>

            <div class="">
                <div class="form-group mr-2 ">
                    <label for="rollno">Roll Number :</label>
                    <input type="text" class="form-control" id="rollno" placeholder="i.e 1cst - 1" name="rollno">
                </div>
                <!-- <div class="form-group mr-2">
                    <label for="name">Name :</label>
                    <input type="text" class="form-control" id="name" placeholder="i.e Mg Mg" name="name">
                    
                </div> -->
                <div class="form-group mr-2">
                    <label for="english">English :</label>
                    <input type="text" class="form-control" id="myanmar" placeholder="i.e 97" name="englishmark" required>
                    
                </div>
            </div>
            <div class="from-group m-auto w-75 pl-5">
                <button type="submit" name="english" class="btn btn-info br-3 ml-5 mr-4">ADD GRADE</button>
                <a href="firstyearsubject.php" class="btn btn-danger">Cancel</a>
            </div>        
            
        </form>
        <!-- end english -->

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
        <!-- physics -->
        <?php elseif($subject=="physics"):?>
        <form class="w-75 m-auto" method="post" action="addgrades.php">
            
            <div class="form-group">
                <h4>FIRST YEAR ADD GRADE</h4>
            </div>

            <div class="">
                <div class="form-group mr-2 ">
                    <label for="rollno">Roll Number :</label>
                    <input type="text" class="form-control" id="rollno" placeholder="i.e 1cst - 1" name="rollno" required>
                </div>
                <!-- <div class="form-group mr-2">
                    <label for="name">Name :</label>
                    <input type="text" class="form-control" id="name" placeholder="i.e Mg Mg" name="name">
                    
                </div> -->
                <div class="form-group mr-2">
                    <label for="math">Physics :</label>
                    <input type="text" class="form-control" id="physics" placeholder="i.e 97" name="physicsmark" required>
                    
                </div>
            </div>
            <div class="from-group m-auto w-75 pl-5">
                <button type="submit" name="physics" class="btn btn-info br-3 ml-5 mr-4">ADD GRADE</button>
                <a href="firstyearsubject.php" class="btn btn-danger">Cancel</a>
            </div>        
            
        </form>
        <!-- end physics  -->
        <!-- cst101 -->
        <?php elseif($subject=="cst101"):?>
        <form class="w-75 m-auto" method="post" action="addgrades.php">
            
            <div class="form-group">
                <h4>FIRST YEAR ADD GRADE</h4>
            </div>

            <div class="">
                <div class="form-group mr-2 ">
                    <label for="rollno">Roll Number :</label>
                    <input type="text" class="form-control" id="rollno" placeholder="i.e 1cst - 1" name="rollno" required>
                </div>
                <!-- <div class="form-group mr-2">
                    <label for="name">Name :</label>
                    <input type="text" class="form-control" id="name" placeholder="i.e Mg Mg" name="name">
                    
                </div> -->
                <div class="form-group mr-2">
                    <label for="cst101">CST-101 :</label>
                    <input type="text" class="form-control" id="cst101" placeholder="i.e 97" name="cst101mark" required>
                    
                </div>
            </div>
            <div class="from-group m-auto w-75 pl-5">
                <button type="submit" name="cst101" class="btn btn-info br-3 ml-5 mr-4">ADD GRADE</button>
                <a href="firstyearsubject.php" class="btn btn-danger">Cancel</a>
            </div>        
            
        </form>
        <!-- end cst101 -->
        <!-- cst 102 -->
        <?php elseif($subject=="cst102"):?>
        <form class="w-75 m-auto" method="post" action="addgrades.php">
            
            <div class="form-group">
                <h4>FIRST YEAR ADD GRADE</h4>
            </div>

            <div class="">
                <div class="form-group mr-2 ">
                    <label for="rollno">Roll Number :</label>
                    <input type="text" class="form-control" id="rollno" placeholder="i.e 1cst - 1" name="rollno" required>
                </div>
                <!-- <div class="form-group mr-2">
                    <label for="name">Name :</label>
                    <input type="text" class="form-control" id="name" placeholder="i.e Mg Mg" name="name">
                    
                </div> -->
                <div class="form-group mr-2">
                    <label for="cst102">CST 102 :</label>
                    <input type="text" class="form-control" id="cst102" placeholder="i.e 97" name="cst102mark" required>
                    
                </div>
            </div>
            <div class="from-group m-auto w-75 pl-5">
                <button type="submit" name="cst102" class="btn btn-info br-3 ml-5 mr-4">ADD GRADE</button>
                <a href="firstyearsubject.php" class="btn btn-danger">Cancel</a>
            </div>        
            
        </form>
        <!-- end cst 102 -->
        <!-- cst 103 -->
        <?php elseif($subject=="cst103"):?>
        <form class="w-75 m-auto" method="post" action="addgrades.php">
            
            <div class="form-group">
                <h4>FIRST YEAR ADD GRADE</h4>
            </div>

            <div class="">
                <div class="form-group mr-2 ">
                    <label for="rollno">Roll Number :</label>
                    <input type="text" class="form-control" id="rollno" placeholder="i.e 1cst - 1" name="rollno" required>
                </div>
                <!-- <div class="form-group mr-2">
                    <label for="name">Name :</label>
                    <input type="text" class="form-control" id="name" placeholder="i.e Mg Mg" name="name">
                    
                </div> -->
                <div class="form-group mr-2">
                    <label for="cst103">CST 103 :</label>
                    <input type="text" class="form-control" id="cst103" placeholder="i.e 97" name="cst103mark" required>
                    
                </div>
            </div>
            <div class="from-group m-auto w-75 pl-5">
                <button type="submit" name="cst103" class="btn btn-info br-3 ml-5 mr-4">ADD GRADE</button>
                <a href="firstyearsubject.php" class="btn btn-danger">Cancel</a>
            </div>        
            
        </form>
        <!-- end cst 103 -->

        <!-- cst 104 -->
        <?php elseif($subject=="cst104"):?>
        <form class="w-75 m-auto" method="post" action="addgrades.php">
            
            <div class="form-group">
                <h4>FIRST YEAR ADD GRADE</h4>
            </div>

            <div class="">
                <div class="form-group mr-2 ">
                    <label for="rollno">Roll Number :</label>
                    <input type="text" class="form-control" id="rollno" placeholder="i.e 1cst - 1" name="rollno" required>
                </div>
                <!-- <div class="form-group mr-2">
                    <label for="name">Name :</label>
                    <input type="text" class="form-control" id="name" placeholder="i.e Mg Mg" name="name">
                    
                </div> -->
                <div class="form-group mr-2">
                    <label for="cst104">CST 104 :</label>
                    <input type="text" class="form-control" id="cst104" placeholder="i.e 97" name="cst104mark" required>
                    
                </div>
            </div>
            <div class="from-group m-auto w-75 pl-5">
                <button type="submit" name="cst104" class="btn btn-info br-3 ml-5 mr-4">ADD GRADE</button>
                <a href="firstyearsubject.php" class="btn btn-danger">Cancel</a>
            </div>        
            
        </form>
        <!-- cst 104 -->
        <?php endif;?>

        
    
    </div>


    <?php include ('../../template/footer.php');?>
