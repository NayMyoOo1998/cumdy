<?php
 include "template/header.php";
 include "connection/db-connect.php";
 $i=0;
 $sql = "SELECT * FROM secondgrades ORDER BY  total DESC";
 $result = mysqli_query($conn,$sql);

 $ctsql = "SELECT * FROM secondyearctgrades ORDER BY total DESC";
 $ctresult = mysqli_query($conn,$ctsql);

?>

<div class="container-fluid">
    <div class="slider" >

        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" style="position: absolute; width:100%; left:0; right:0; height:50%;" >
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100" src="photos/c.jpg" alt="First slide" height="500" >
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="photos/a.jpg" alt="Second slide" height="500">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100 " src="photos/b.jpg" alt="Third slide" height="500">
                </div>
            </div>
        </div>
    </div>

            <div class="dropdwonmenu" style="position: absolute; margin-top:30%; width:50%; text-align:center; margin-left:25%; ">
                <select class="browser-default custom-select custom-select-lg mb-3" id="selectYearName">
                        <option selected value = "secondyear">SECOND YEAR</option>
                        <option value="home">CU(MDY)</option>
                        <option value="firstyear">FIRST YEAR</option>
                        <option value="thirdyear">THIRD YEAR</option>
                        <option value="fourthyear">FOURTH YEAR</option>
                        <option value="finalyear">FINAL YEAR</option>
                        <option value="master">MASTER</option>
                </select>
            </div>

            <div class="card-list" style="position: absolute; padding-top:20px; margin-top:40%; width:100%;">
                <div class="row ml-3 text-center">
                    <div class="col-sm-4 mb-3 pl-5">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="photos/bg-view.jpg" alt="Card image cap" height="200">
                            <div class="card-body">
                                <h5 class="card-title">Events</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="events.php" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 mb-3 pl-5">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="photos/bg-view.jpg" alt="Card image cap" height="200">
                            <div class="card-body">
                                <h5 class="card-title">Show CS Grade</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary" id="showcsresult">show result</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 mb-3 pl-5">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="photos/bg-view.jpg" alt="Card image cap" height="200">
                            <div class="card-body">
                                <h5 class="card-title">Show CT Grade</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary" id="showctresult">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="result-table container text-center" id="csresult-table" style="position: absolute; margin-top:40%; width:100%; display:none; margin-left:5%;">

              <table class="table text-center mb-5 border">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Roll number</th>
                            <th scope="col">Name</th>
                            <th scope="col">English</th>
                            <th scope="col"> 201</th>
                            <th scope="col"> 202</th>
                            <th scope="col">203</th>
                            <th scope="col">204</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($result as $data):  ?>
                        <tr class="border">
                            <!-- English grade -->
                            <th scope="row">1CS-<?= ++$i?></th>
                            <td ><?= $data['rollno'];?></td>
                            <td ><?= $data['name'];?></td>
                            <?php if($data['english'] <= 20): ?>
                            <td class="border">E</td>
                            <?php elseif($data['english'] >20 && $data['english']<= 40):?>
                            <td class="border">D</td>
                            <?php elseif($data['english'] >40 && $data['english'] <= 60):?>
                            <td class="border">C</td>
                            <?php elseif($data['english'] >60 && $data['english'] <= 80):?>
                            <td class="border">B</td>
                            <?php elseif($data['english'] >80 && $data['english'] <= 100):?>
                            <td class="border">A</td>
                            <?php endif; ?>

                            
                            <!-- 201 grade  -->
                            <?php if($data['cs201'] <= 20): ?>
                            <td class="border">E</td>
                            <?php elseif($data['cs201'] >20 && $data['cs201']<= 40):?>
                            <td class="border">D</td>
                            <?php elseif($data['cs201'] >40 && $data['cs201'] <= 60):?>
                            <td class="border">C</td>
                            <?php elseif($data['cs201'] >60 && $data['cs201'] <= 80):?>
                            <td class="border">B</td>
                            <?php elseif($data['cs201'] >80 && $data['cs201'] <= 100):?>
                            <td class="border">A</td>
                            <?php endif; ?>

                            <!-- 202 grade  -->
                            <?php if($data['cs202'] <= 20): ?>
                            <td class="border">E</td>
                            <?php elseif($data['cs202'] >20 && $data['cs202']<= 40):?>
                            <td class="border">D</td>
                            <?php elseif($data['cs202'] >40 && $data['cs202'] <= 60):?>
                            <td class="border">C</td>
                            <?php elseif($data['cs202'] >60 && $data['cs202'] <= 80):?>
                            <td class="border">B</td>
                            <?php elseif($data['cs202'] >80 && $data['cs202'] <= 100):?>
                            <td class="border">A</td>
                            <?php endif; ?>

                            <!-- 203 grade  -->
                            <?php if($data['cs203'] <= 20): ?>
                            <td class="border">E</td>
                            <?php elseif($data['cs203'] >20 && $data['cs203']<= 40):?>
                            <td class="border">D</td>
                            <?php elseif($data['cs203'] >40 && $data['cs203'] <= 60):?>
                            <td class="border">C</td>
                            <?php elseif($data['cs203'] >60 && $data['cs203'] <= 80):?>
                            <td class="border">B</td>
                            <?php elseif($data['cs203'] >80 && $data['cs203'] <= 100):?>
                            <td class="border">A</td>
                            <?php endif; ?>

                            <!-- 204 grade  -->
                            <?php if($data['cs204'] <= 20): ?>
                            <td class="border">E</td>
                            <?php elseif($data['cs204'] >20 && $data['cs204']<= 40):?>
                            <td class="border">D</td>
                            <?php elseif($data['cs204'] >40 && $data['cs204'] <= 60):?>
                            <td class="border">C</td>
                            <?php elseif($data['cs204'] >60 && $data['cs204'] <= 80):?>
                            <td class="border">B</td>
                            <?php elseif($data['cs204'] >80 && $data['cs204'] <= 100):?>
                            <td class="border">A</td>
                            <?php endif; ?>
                            
                           


                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
                <span class="btn" style="font-size: 2em;" id="crossBtn">&times;</span>

            </div>
            <!-- end cs result  -->

            <!-- ct result -->
            <div class="result-table container text-center" id="ctresult-table" style="position: absolute; margin-top:40%; width:100%; display:none; margin-left:5%;">

              <table class="table text-center mb-5 border">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Roll number</th>
                            <th scope="col">Name</th>
                            <th scope="col">English</th>
                            <th scope="col"> 201</th>
                            <th scope="col"> 202</th>
                            <th scope="col">203</th>
                            <th scope="col">204</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($ctresult as $ctdata):  ?>
                        <tr class="border">
                            <!-- English grade -->
                            <th scope="row">2CT-<?= ++$i?></th>
                            <td ><?= $ctdata['rollno'];?></td>
                            <td ><?= $ctdata['name'];?></td>
                            <?php if($ctdata['english'] <= 20): ?>
                            <td class="border">E</td>
                            <?php elseif($ctdata['english'] >20 && $ctdata['english']<= 40):?>
                            <td class="border">D</td>
                            <?php elseif($ctdata['english'] >40 && $ctdata['english'] <= 60):?>
                            <td class="border">C</td>
                            <?php elseif($ctdata['english'] >60 && $ctdata['english'] <= 80):?>
                            <td class="border">B</td>
                            <?php elseif($ctdata['english'] >80 && $ctdata['english'] <= 100):?>
                            <td class="border">A</td>
                            <?php endif; ?>

                            
                            <!-- 201 grade  -->
                            <?php if($ctdata['ct201'] <= 20): ?>
                            <td class="border">E</td>
                            <?php elseif($ctdata['ct201'] >20 && $ctdata['ct201']<= 40):?>
                            <td class="border">D</td>
                            <?php elseif($ctdata['ct201'] >40 && $ctdata['ct201'] <= 60):?>
                            <td class="border">C</td>
                            <?php elseif($ctdata['ct201'] >60 && $ctdata['ct201'] <= 80):?>
                            <td class="border">B</td>
                            <?php elseif($ctdata['ct201'] >80 && $ctdata['ct201'] <= 100):?>
                            <td class="border">A</td>
                            <?php endif; ?>

                            <!-- 102 grade  -->
                            <?php if($ctdata['ct202'] <= 20): ?>
                            <td class="border">E</td>
                            <?php elseif($ctdata['ct202'] >20 && $ctdata['ct202']<= 40):?>
                            <td class="border">D</td>
                            <?php elseif($ctdata['ct202'] >40 && $ctdata['ct202'] <= 60):?>
                            <td class="border">C</td>
                            <?php elseif($ctdata['ct202'] >60 && $ctdata['ct202'] <= 80):?>
                            <td class="border">B</td>
                            <?php elseif($ctdata['ct202'] >80 && $ctdata['ct202'] <= 100):?>
                            <td class="border">A</td>
                            <?php endif; ?>

                            <!-- 103 grade  -->
                            <?php if($ctdata['ct203'] <= 20): ?>
                            <td class="border">E</td>
                            <?php elseif($ctdata['ct203'] >20 && $ctdata['ct203']<= 40):?>
                            <td class="border">D</td>
                            <?php elseif($ctdata['ct203'] >40 && $ctdata['ct203'] <= 60):?>
                            <td class="border">C</td>
                            <?php elseif($ctdata['ct203'] >60 && $ctdata['ct203'] <= 80):?>
                            <td class="border">B</td>
                            <?php elseif($ctdata['ct203'] >80 && $ctdata['ct203'] <= 100):?>
                            <td class="border">A</td>
                            <?php endif; ?>

                            <!-- 104 grade  -->
                            <?php if($ctdata['ct204'] <= 20): ?>
                            <td class="border">E</td>
                            <?php elseif($ctdata['ct204'] >20 && $ctdata['ct204']<= 40):?>
                            <td class="border">D</td>
                            <?php elseif($ctdata['ct204'] >40 && $ctdata['ct204'] <= 60):?>
                            <td class="border">C</td>
                            <?php elseif($ctdata['ct204'] >60 && $ctdata['ct204'] <= 80):?>
                            <td class="border">B</td>
                            <?php elseif($ctdata['ct204'] >80 && $ctdata['ct204'] <= 100):?>
                            <td class="border">A</td>
                            <?php endif; ?>
                            
                           


                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
                <span class="btn" style="font-size: 2em;" id="ctcrossBtn">&times;</span>

            </div>

            <!-- end ct  -->


</div>





<?php include "template/footer.php"; ?>

<script>
    $(document).ready(function(){
        $('#showcsresult').click(function(){
            $('#csresult-table').show(1000);
            $('.card-list').css('display','none');
           
        });

        $('#crossBtn').click(function(){
            $('#csresult-table').hide(1000);
            $('.card-list').show(1000);
            // alert('hello');
        });

        $('#showctresult').click(function(){
            $('#ctresult-table').show(1000);
            $('.card-list').css('display', 'none');
        });

        $('#ctcrossBtn').click(function(){
            $('#ctresult-table').hide(1000);
            $('.card-list').show(1000);
            // alert('hello');
        });





        $('#selectYearName').change(function(){
            var selectVal = $(this).val();
            switch(selectVal){
                case "firstyear" : location.href="firstyear.php"; break;
                case "secondyear" : location.href="secondyear.php"; break;
                case "thirdyear" : location.href = "thirdyear.php"; break;
                case "fourthyear" : location.href = "fourthyear.php"; break;
                case "finalyear" : location.href = "finalyear.php"; break;
                case "home" : location.href = "index.php"; break;
                case "master" : location.href = "master.php"; break;

            }
        });
    });
</script>