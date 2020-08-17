<?php  include('../../template/header.php');?>
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
                    <button class="cs201 btn btn-outline-info w-100" value="physics">CS-201</button>
                </div>
                <div class=" col-sm-6 w-100 mb-3">
                    <button class="cs202 btn btn-outline-info w-100" value="cst101">CS-202</button>
                </div>
                <div class=" col-sm-6 w-100 mb-3">
                    <button class="cs203 btn btn-outline-info w-100" value="cst102">CS-203</button>
                </div>
                <div class=" col-sm-6 w-100 mb-3">
                    <button class="cs204 btn btn-outline-info w-100" value="cst103">CS-204</button>
                </div>
                
            </div>
            <a href="../admin-index.php" class="btn btn-success">BACK</a>


        </div>



        <?php include('../../template/footer.php');?>


        <script>
            $(document).ready(function(){

                // english
                $('.english').click(function(){
                  location.href = 'addsecondyeargrade.php?subject=english';
                
                });

                // 201
                $('.cs201').click(function(){
                    var value = $(this).val();
                  location.href = 'addsecondyeargrade.php?subject=cs201';
                
                });

                // cst-202
                $('.cs202').click(function(){
                    var value = $(this).val();
                  location.href = 'addsecondyeargrade.php?subject=cs202';
                
                });

                // cst-103
                $('.cs203').click(function(){
                    var value = $(this).val();
                  location.href = 'addsecondyeargrade.php?subject=cs203';
                
                });

                // cs204
                $('.cs204').click(function(){
                    var value = $(this).val();
                  location.href = 'addsecondyeargrade.php?subject=cs204';
                
                });
            });
        </script>















