<?php include "template/header.php";

include "connection/db-connect.php";

$i = 0;

$sql = "SELECT * FROM fgrades ORDER BY total DESC";
$result = mysqli_query($conn, $sql);




?>

<div class="container-fluid">
    <div class="slider" >

        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" style="position: absolute; width:100%; left:0; right:0; height:50%;" >
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100" src="photos/c.jpg" alt="First slide" height="500">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="photos/b.jpg" alt="Second slide" height="500">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100 " src="photos/a.jpg" alt="Third slide" height="500">
                </div>
            </div>
        </div>
    </div>

            <div class="dropdwonmenu" style="position: absolute; margin-top:30%;  width:50%; text-align:center; margin-left:25%; ">
                <select class="browser-default custom-select custom-select-lg mb-3" id="selectYearName">
                        <option selected value = "firstyear">FIRST YEAR</option>
                        <option value="home">CU(MDY)</option>
                        <option value="secondyear">SECOND YEAR</option>
                        <option value="thirdyear">THIRD YEAR</option>
                        <option value="fourthyear">FOURTH YEAR</option>
                        <option value="finalyear">FINAL YEAR</option>
                        <option value="master">MASTER</option>
                </select>
            </div>

            <div class="card-list" style="position: absolute;  padding-top:20px; margin-top:40%; width:100%;">
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
                                <h5 class="card-title">Show Grade</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary" id="showresult">show result</a>
                            </div>
                        </div>
                    </div>

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
                </div>
            </div>

            <div class="result-table container text-center" id="result-table" style="position: absolute; margin-top:40%; width:100%; display:none; margin-left:5%;">

              <table class="table text-center mb-5 border">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Roll number</th>
                            <th scope="col">Name</th>
                            <th scope="col">Myanmar</th>
                            <th scope="col">English</th>
                            <th scope="col">Physics</th>
                            <th scope="col">Mathematics</th>
                            <th scope="col">101</th>
                            <th scope="col">102</th>
                            <th scope="col">103</th>
                            <th scope="col">104</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($result as $data):  ?>
                        <tr class="border">
                            <!-- myanmar grade -->
                            <th scope="row">1CST-<?= ++$i?></th>
                            <td ><?= $data['rollno'];?></td>
                            <td ><?= $data['name'];?></td>
                            <?php if($data['myanmar'] <= 20): ?>
                            <td class="border">E</td>
                            <?php elseif($data['myanmar'] >20 && $data['myanmar']<= 40):?>
                            <td class="border">D</td>
                            <?php elseif($data['myanmar'] >40 && $data['myanmar'] <= 60):?>
                            <td class="border">C</td>
                            <?php elseif($data['myanmar'] >60 && $data['myanmar'] <= 80):?>
                            <td class="border">B</td>
                            <?php elseif($data['myanmar'] >80 && $data['myanmar'] <= 100):?>
                            <td class="border">A</td>
                            <?php endif; ?>

                            <!-- english grade -->
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

                            <!-- physics grade  -->
                            <?php if($data['physics'] <= 20): ?>
                            <td class="border">E</td>
                            <?php elseif($data['physics'] >20 && $data['physics']<= 40):?>
                            <td class="border">D</td>
                            <?php elseif($data['physics'] >40 && $data['physics'] <= 60):?>
                            <td class="border">C</td>
                            <?php elseif($data['physics'] >60 && $data['physics'] <= 80):?>
                            <td class="border">B</td>
                            <?php elseif($data['physics'] >80 && $data['physics'] <= 100):?>
                            <td class="border">A</td>
                            <?php endif; ?>

                            <!-- Mathematics grade  -->
                            <?php if($data['myanmar'] <= 20): ?>
                            <td class="border">E</td>
                            <?php elseif($data['myanmar'] >20 && $data['myanmar']<= 40):?>
                            <td class="border">D</td>
                            <?php elseif($data['myanmar'] >40 && $data['myanmar'] <= 60):?>
                            <td class="border">C</td>
                            <?php elseif($data['myanmar'] >60 && $data['myanmar'] <= 80):?>
                            <td class="border">B</td>
                            <?php elseif($data['myanmar'] >80 && $data['myanmar'] <= 100):?>
                            <td class="border">A</td>
                            <?php endif; ?>

                            <!-- 101 grade  -->
                            <?php if($data['cst101'] <= 20): ?>
                            <td class="border">E</td>
                            <?php elseif($data['cst101'] >20 && $data['cst101']<= 40):?>
                            <td class="border">D</td>
                            <?php elseif($data['cst101'] >40 && $data['cst101'] <= 60):?>
                            <td class="border">C</td>
                            <?php elseif($data['cst101'] >60 && $data['cst101'] <= 80):?>
                            <td class="border">B</td>
                            <?php elseif($data['cst101'] >80 && $data['cst101'] <= 100):?>
                            <td class="border">A</td>
                            <?php endif; ?>

                            <!-- 102 grade  -->
                            <?php if($data['cst102'] <= 20): ?>
                            <td class="border">E</td>
                            <?php elseif($data['cst102'] >20 && $data['cst102']<= 40):?>
                            <td class="border">D</td>
                            <?php elseif($data['cst102'] >40 && $data['cst102'] <= 60):?>
                            <td class="border">C</td>
                            <?php elseif($data['cst102'] >60 && $data['cst102'] <= 80):?>
                            <td class="border">B</td>
                            <?php elseif($data['cst102'] >80 && $data['cst102'] <= 100):?>
                            <td class="border">A</td>
                            <?php endif; ?>

                            <!-- 103 grade  -->
                            <?php if($data['cst103'] <= 20): ?>
                            <td class="border">E</td>
                            <?php elseif($data['cst103'] >20 && $data['cst103']<= 40):?>
                            <td class="border">D</td>
                            <?php elseif($data['cst103'] >40 && $data['cst103'] <= 60):?>
                            <td class="border">C</td>
                            <?php elseif($data['cst103'] >60 && $data['cst103'] <= 80):?>
                            <td class="border">B</td>
                            <?php elseif($data['cst103'] >80 && $data['cst103'] <= 100):?>
                            <td class="border">A</td>
                            <?php endif; ?>

                            <!-- 104 grade  -->
                            <?php if($data['cst104'] <= 20): ?>
                            <td class="border">E</td>
                            <?php elseif($data['cst104'] >20 && $data['cst104']<= 40):?>
                            <td class="border">D</td>
                            <?php elseif($data['cst104'] >40 && $data['cst104'] <= 60):?>
                            <td class="border">C</td>
                            <?php elseif($data['cst104'] >60 && $data['cst104'] <= 80):?>
                            <td class="border">B</td>
                            <?php elseif($data['cst104'] >80 && $data['cst104'] <= 100):?>
                            <td class="border">A</td>
                            <?php endif; ?>
                            
                           


                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
                <span class="btn" style="font-size: 2em;" id="crossBtn">&times;</span>

            </div>


</div>





<?php include "template/footer.php"; ?>

<script>
    $(document).ready(function(){
        $('#showresult').click(function(){
            $('#result-table').show(1000);
            $('.card-list').css('display','none');
           
        });

        $('#crossBtn').click(function(){
            $('#result-table').hide(1000);
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