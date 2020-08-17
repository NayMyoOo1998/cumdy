<?php  include('../../template/header.php');?>
<link rel="stylesheet" href="../../css/firstyear/addfirstyearsubject.css">
    <title>ADD GRADES</title>

        <div class="container grades">
            <div class="btn-group row m-auto w-100">
                <div class=" col-sm-6 w-100 mb-3">
                    <button class="myanmar btn btn-outline-info w-100" value="myanmar">MYANMAR</button>
                </div>
                <div class=" col-sm-6 w-100 mb-3">
                    <button class="english btn btn-outline-info w-100" value="english">ENGLISH</button>
                </div>
                <!-- <div class=" col-sm-6 w-100 mb-3">
                    <button class="math btn btn-outline-info w-100" value="math">MATHEMATICS</button>
                </div> -->
                <div class=" col-sm-6 w-100 mb-3">
                    <button class="physics btn btn-outline-info w-100" value="physics">PHYSICS</button>
                </div>
                <div class=" col-sm-6 w-100 mb-3">
                    <button class="cst101 btn btn-outline-info w-100" value="cst101">CST-101</button>
                </div>
                <div class=" col-sm-6 w-100 mb-3">
                    <button class="cst102 btn btn-outline-info w-100" value="cst102">CST-102</button>
                </div>
                <div class=" col-sm-6 w-100 mb-3">
                    <button class="cst103 btn btn-outline-info w-100" value="cst103">CST-103</button>
                </div>
                <div class=" col-sm-6 w-100 mb-3">
                    <button class="cst104 btn btn-outline-info w-100" value="cst104">CST-104</button>
                </div>
                
            </div>
            <a href="../admin-index.php" class="btn btn-success">BACK</a>


        </div>



        <?php include('../../template/footer.php');?>


        <script>
            $(document).ready(function(){
                // myanmar
                $('.myanmar').click(function(){
                    var value = $(this).val();
                  location.href = 'addfirstyeargrade.php?subject=myanmar';
                
                });

                // english
                $('.english').click(function(){
                  location.href = 'addfirstyeargrade.php?subject=english';
                
                });
                // mathematic
                $('.math').click(function(){
                    var value = $(this).val();
                  location.href = 'addfirstyeargrade.php?subject=math';
                
                });

                // physics
                $('.physics').click(function(){
                    var value = $(this).val();
                  location.href = 'addfirstyeargrade.php?subject=physics';
                
                });

                // cst-101
                $('.cst101').click(function(){
                    var value = $(this).val();
                  location.href = 'addfirstyeargrade.php?subject=cst101';
                
                });

                // cst-102
                $('.cst102').click(function(){
                    var value = $(this).val();
                  location.href = 'addfirstyeargrade.php?subject=cst102';
                
                });

                // cst-103
                $('.cst103').click(function(){
                    var value = $(this).val();
                  location.href = 'addfirstyeargrade.php?subject=cst103';
                
                });

                // cst-104
                $('.cst104').click(function(){
                    var value = $(this).val();
                  location.href = 'addfirstyeargrade.php?subject=cst104';
                
                });
            });
        </script>















