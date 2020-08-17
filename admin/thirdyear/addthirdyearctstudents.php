<?php  
    include "../../template/header.php";
    include "../../connection/db-connect.php";


    if(isset($_POST['submit'])){
         $rollno = $_POST['rollno'];
         $name = $_POST['name'];

         $sql = "INSERT INTO thirdyearctgrades(rollno,name) VALUES('".$rollno."', '".$name."')";
         $result = mysqli_query($conn,$sql);

        //  var_dump($result);

        
       
    }

?>

    <link rel="stylesheet" href="../../css/firstyear/firstyear.css">


    <div class="container">

        <form class="w-75 m-auto border" method="post" action="">
            
            <div class="form-group">
                <h4>ADD THIRD YEAR CT STUDENTS</h4>
            </div>

            <di class="row">
                <div class="form-group col-sm-4 w-100">
                    <label for="rollno">Roll Number :</label>
                    <input type="text" class="form-control" id="rollno" placeholder="i.e 3ct-1" name="rollno" required>
                </div>
                <div class="form-group col-sm-4 offset-2">
                    <label for="name">Name :</label>
                    <input type="name" class="form-control" id="name" placeholder="i.e Mg Mg" name="name" required>
                    
                </div>
                <!-- <div class="form-group mr-2">
                    <label for="myanmar">Myanmar :</label>
                    <input type="number" class="form-control" id="myanmar" placeholder="i.e 99" name='myanmar'>
                </div>
                <div class="form-group mr-2">
                    <label for="english">English :</label>
                    <input type="number" class="form-control" id="english" placeholder="i.e 80" name="english">
                </div> -->
                <!-- <div class="form-group mr-2">
                    <label for="physics">Physics :</label>
                    <input type="number" class="form-control" id="physics" placeholder="i.e 80">
                </div>
                <div class="form-group mr-2">
                    <label for="mathematic">Mathematic :</label>
                    <input type="number" class="form-control" id="mathematic" placeholder="i.e 80">
                </div>
                <div class="form-group mr-2">
                    <label for="cst101">CST-101 :</label>
                    <input type="number" class="form-control" id="cst101" placeholder="i.e 80">
                </div>
                <div class="form-group mr-2">
                    <label for="cst102">CST-102 :</label>
                    <input type="number" class="form-control" id="cst-102" placeholder="i.e 80">
                </div>
                <div class="form-group mr-2">
                    <label for="cst103">CST-104 :</label>
                    <input type="number" class="form-control" id="cst103" placeholder="i.e 80">
                </div>
                <div class="form-group">
                    <label for="cst104">CST-104 :</label>
                    <input type="number" class="form-control" id="cst104" placeholder="i.e 80">
                </div>
               
            </div> -->
            <div class="from-group w-75 ml-5">
                <button type="submit" name="submit" class="btn btn-info br-3 mr-4">ADD GRADE</button>
                <a href="../admin-index.php" class="btn btn-danger">Cancel</a>
            </div>        
            
        </form>
    </div>









<?php include "../../template/footer.php"; ?>