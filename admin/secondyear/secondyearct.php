<?php 
 include('../../template/header.php');
//  include('../../connection/db-connect.php');

//  $i = 0;

// $sql = "SELECT * FROM secondyeargrades ORDER BY total DESC";
// $result = mysqli_query($conn, $sql);


?>
<link rel="stylesheet" href="../../css/firstyear/addfirstyearsubject.css">
    <title>ADD GRADES</title>

        <div class="container grades">
            <div class="btn-group row m-auto w-100">

                <div class=" col-sm-6 w-100 mb-3">
                    <button class="english btn btn-outline-info w-100" value="english">ENGLISH</button>
                </div>
                <!-- <div class=" col-sm-6 w-100 mb-3">
                    <button class="math btn btn-outline-info w-100" value="math">MATHEMATICS</button>
                </div> -->
                <div class=" col-sm-6 w-100 mb-3">
                    <button class="cs201 btn btn-outline-info w-100" value="physics">CT-201</button>
                </div>
                <div class=" col-sm-6 w-100 mb-3">
                    <button class="cs202 btn btn-outline-info w-100" value="cst101">CT-202</button>
                </div>
                <div class=" col-sm-6 w-100 mb-3">
                    <button class="cs203 btn btn-outline-info w-100" value="cst102">CT-203</button>
                </div>
                <div class=" col-sm-6 w-100 mb-3">
                    <button class="cs204 btn btn-outline-info w-100" value="cst103">CT-204</button>
                </div>
                
            </div>
            <a href="../admin-index.php" class="btn btn-success">BACK</a>


        </div>



        <?php include('../../template/footer.php');?>


        <script>
            $(document).ready(function(){

                // english
                $('.english').click(function(){
                  location.href = 'addsecondyearctgrade.php?subject=english';
                
                });

                // 201
                $('.cs201').click(function(){
                    var value = $(this).val();
                  location.href = 'addsecondyearctgrade.php?subject=ct201';
                
                });

                // cst-202
                $('.cs202').click(function(){
                    var value = $(this).val();
                  location.href = 'addsecondyearctgrade.php?subject=ct202';
                
                });

                // cst-103
                $('.cs203').click(function(){
                    var value = $(this).val();
                  location.href = 'addsecondyearctgrade.php?subject=ct203';
                
                });

                // cs204
                $('.cs204').click(function(){
                    var value = $(this).val();
                  location.href = 'addsecondyearctgrade.php?subject=ct204';
                
                });
            });
        </script>















