<?php
    include ('../../template/header.php');
    $subject = $_GET['subject'];
    
?>

<link rel="stylesheet" href="../../css/firstyear/firstyearaddgrade.css">

    <div class="container">
        <!-- ..english  -->
        <?php if($subject=='english'): ?>
        
        <form class="w-75 m-auto" method="post" action="addctgrades.php">
            
            <div class="form-group">
                <h4>SECOND YEAR CT ADD GRADE</h4>
            </div>

            <div class="">
                <div class="form-group mr-2 ">
                    <label for="rollno">Roll Number :</label>
                    <input type="text" class="form-control" id="rollno" placeholder="i.e 2ct-1" name="rollno" required>
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
                <a href="secondyearct.php" class="btn btn-danger">Cancel</a>
            </div>        
            
        </form>
        <?php elseif($subject=="ct201"): ?>
        <!-- end english -->

        <!-- cs201 -->
        <form class="w-75 m-auto" method="post" action="addctgrades.php">
            
            <div class="form-group">
                <h4>SECOND YEAR CT ADD GRADE</h4>
            </div>

            <div class="">
                <div class="form-group mr-2 ">
                    <label for="rollno">Roll Number :</label>
                    <input type="text" class="form-control" id="rollno" placeholder="i.e 2ct - 1" name="rollno" required>
                </div>
                <!-- <div class="form-group mr-2">
                    <label for="name">Name :</label>
                    <input type="text" class="form-control" id="name" placeholder="i.e Mg Mg" name="name">
                    
                </div> -->
                <div class="form-group mr-2">
                    <label for="ct201">CT-201 :</label>
                    <input type="text" class="form-control" id="ct201" placeholder="i.e 97" name="ct201mark" required>
                    
                </div>
            </div>
            <div class="from-group m-auto w-75 pl-5">
                <button type="submit" name="ct201" class="btn btn-info br-3 ml-5 mr-4">ADD GRADE</button>
                <a href="secondyearct.php" class="btn btn-danger">Cancel</a>
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
        <?php elseif($subject=="ct202"):?>
        <form class="w-75 m-auto" method="post" action="addctgrades.php">
            
            <div class="form-group">
                <h4>SECOND YEAR CT ADD GRADE</h4>
            </div>

            <div class="">
                <div class="form-group mr-2 ">
                    <label for="rollno">Roll Number :</label>
                    <input type="text" class="form-control" id="rollno" placeholder="i.e 2ct - 1" name="rollno" required>
                </div>
                <!-- <div class="form-group mr-2">
                    <label for="name">Name :</label>
                    <input type="text" class="form-control" id="name" placeholder="i.e Mg Mg" name="name">
                    
                </div> -->
                <div class="form-group mr-2">
                    <label for="ct202">CT-202 :</label>
                    <input type="text" class="form-control" id="cs202" placeholder="i.e 97" name="ct202mark" required>
                    
                </div>
            </div>
            <div class="from-group m-auto w-75 pl-5">
                <button type="submit" name="ct202" class="btn btn-info br-3 ml-5 mr-4">ADD GRADE</button>
                <a href="secondyearct.php" class="btn btn-danger">Cancel</a>
            </div>        
            
        </form>
        <!-- end cs202  -->
        <!-- cs203-->
        <?php elseif($subject=="ct203"):?>
        <form class="w-75 m-auto" method="post" action="addctgrades.php">
            
            <div class="form-group">
                <h4>SECOND YEAR CT ADD GRADE</h4>
            </div>

            <div class="">
                <div class="form-group mr-2 ">
                    <label for="rollno">Roll Number :</label>
                    <input type="text" class="form-control" id="rollno" placeholder="i.e 2ct - 1" name="rollno" required>
                </div>
                <!-- <div class="form-group mr-2">
                    <label for="name">Name :</label>
                    <input type="text" class="form-control" id="name" placeholder="i.e Mg Mg" name="name">
                    
                </div> -->
                <div class="form-group mr-2">
                    <label for="ct203">CT-203 :</label>
                    <input type="text" class="form-control" id="ct203" placeholder="i.e 97" name="ct203mark" required>
                    
                </div>
            </div>
            <div class="from-group m-auto w-75 pl-5">
                <button type="submit" name="ct203" class="btn btn-info br-3 ml-5 mr-4">ADD GRADE</button>
                <a href="secondyearct.php" class="btn btn-danger">Cancel</a>
            </div>        
            
        </form>
        <!-- end cs203 -->
        <!-- cs 204 -->
        <?php elseif($subject=="ct204"):?>
        <form class="w-75 m-auto" method="post" action="addctgrades.php">
            
            <div class="form-group">
                <h4>SECOND  YEAR CT ADD GRADE</h4>
            </div>

            <div class="">
                <div class="form-group mr-2 ">
                    <label for="rollno">Roll Number :</label>
                    <input type="text" class="form-control" id="rollno" placeholder="i.e 2ct - 1" name="rollno" required>
                </div>
                <!-- <div class="form-group mr-2">
                    <label for="name">Name :</label>
                    <input type="text" class="form-control" id="name" placeholder="i.e Mg Mg" name="name">
                    
                </div> -->
                <div class="form-group mr-2">
                    <label for="ct204">CT 204 :</label>
                    <input type="text" class="form-control" id="ct204" placeholder="i.e 97" name="ct204mark" required>
                    
                </div>
            </div>
            <div class="from-group m-auto w-75 pl-5">
                <button type="submit" name="ct204" class="btn btn-info br-3 ml-5 mr-4">ADD GRADE</button>
                <a href="secondyearct.php" class="btn btn-danger">Cancel</a>
            </div>        
            
        </form>
        <!-- end cs204 -->
       
        <?php endif;?>

        
    
    </div>


    <?php include ('../../template/footer.php');?>
