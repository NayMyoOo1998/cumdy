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
                    <button class="cs301 btn btn-outline-info w-100" value="physics">CS-301</button>
                </div>
                <div class=" col-sm-6 w-100 mb-3">
                    <button class="cs302 btn btn-outline-info w-100" value="cs302">CS-302</button>
                </div>
                <div class=" col-sm-6 w-100 mb-3">
                    <button class="cs303 btn btn-outline-info w-100" value="cs303">CS-303</button>
                </div>
                <div class=" col-sm-6 w-100 mb-3">
                    <button class="cs304 btn btn-outline-info w-100" value="cs304">CS-304</button>
                </div>
                
            </div>
            <a href="../admin-index.php" class="btn btn-success">BACK</a>


        </div>



        <?php include('../../template/footer.php');?>


        <script>
            $(document).ready(function(){

                // english
                $('.english').click(function(){
                  location.href = 'addthirdyearcsgrade.php?subject=english';
                
                });

                // 301
                $('.cs301').click(function(){
                    var value = $(this).val();
                  location.href = 'addthirdyearcsgrade.php?subject=cs301';
                
                });

                // cs3202
                $('.cs302').click(function(){
                    var value = $(this).val();
                  location.href = 'addthirdyearcsgrade.php?subject=cs302';
                
                });

                // cs-303
                $('.cs303').click(function(){
                    var value = $(this).val();
                  location.href = 'addthirdyearcsgrade.php?subject=cs303';
                
                });

                // cs304
                $('.cs304').click(function(){
                    var value = $(this).val();
                  location.href = 'addthirdyearcsgrade.php?subject=cs304';
                
                });
            });
        </script>















