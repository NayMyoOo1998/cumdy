<?php  
    include ('../template/header.php');
    include "../connection/db-connect.php";


    if(isset($_POST['submit'])){
        echo "hello";
        echo $rollno = $_POST['rollno'];
        echo $name = $_POST['name'];
        echo $myanmar = $_POST['myanmar'];
        echo $english = $_POST['english'];

        if($myanmar != 0 && $english == 0){
            $sql = "INSERT INTO fgrades(rollno,name,myanmar)VALUES('".$rollno."','".$name."','".$myanmar."')";
            $result = mysqli_query($conn, $sql);
            var_dump($result);
            if($result){
                echo "success myanmar";
            }else{
                echo "error myanmar";
            }
        }elseif($myanmar==0 && $english != 0){
            $sql = "INSERT INTO fgrades(rollno,name,english)VALUES('".$rollno."','".$name."','".$english."')";
            $request = mysqli_query($conn, $sql);
            echo "english";
        }else{
            echo "something wrong";
        }



    }

?>


    <div class="container">

        <form class="w-75 m-auto" method="post" action="">
            
            <div class="form-group">
                <h4>FIRST YEAR ADD GRADE</h4>
            </div>

            <di class="row">
                <div class="form-group mr-2">
                    <label for="rollno">Roll Number :</label>
                    <input type="text" class="form-control" id="rollno" placeholder="i.e 1cst - 1" name="rollno">
                </div>
                <div class="form-group mr-2">
                    <label for="name">Name :</label>
                    <input type="name" class="form-control" id="name" placeholder="i.e Mg Mg" name="name">
                    
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
            <div class="from-group m-auto w-75 pl-5">
                <button type="submit" name="submit" class="btn btn-info br-3 ml-5 mr-4">ADD GRADE</button>
                <a href="admin-index.php" class="btn btn-danger">Cancel</a>
            </div>        
            
        </form>
    </div>









<?php include "../template/footer.php"; ?>