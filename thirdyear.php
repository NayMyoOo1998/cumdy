<?php include "template/header.php";?>

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

            <div class="dropdwonmenu" style="position: absolute; margin-top:30%; width:50%; text-align:center; margin-left:25%; ">
                <select class="browser-default custom-select custom-select-lg mb-3" id="selectYearName">
                        <option selected value = "thirdyear">THIRD YEAR</option>
                        <option value="home">CU(MDY)</option>
                        <option value="firstyear">FIRST YEAR</option>
                        <option value="secondyear">SECOND YEAR</option>
                        <option value="fourthyear">FOURTH YEAR</option>
                        <option value="finalyear">FINAL YEAR</option>
                        <option value="master">MASTER</option>
                </select>
            </div>

            <div class="card-list" style="position: absolute; padding-top:20px; margin-top:40%; width:100%;">
                <div class="row ml-3 text-center">
                    <div class="col-sm-4 mb-3 pl-5">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="photos/bg-view.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Events</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="events.php" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 mb-3 pl-5">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="photos/bg-view.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Show Grade</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary" id="showresult">show result</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 mb-3 pl-5">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="photos/bg-view.jpg" alt="Card image cap">
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
                            <th scope="col">101</th>
                            <th scope="col">102</th>
                            <th scope="col">103</th>
                            <th scope="col">104</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border">
                        <th scope="row">1</th>
                        <td >1cs-1</td>
                        <td >Mg Mg</td>
                        <td class="border">A</td>
                        <td class="border">A</td>
                        <td class="border">A</td>
                        <td class="border">A</td>
                        <td class="border">A</td>
                        <td class="border">A</td>
                        <td class="border">A</td>


                        </tr>
                        <tr>
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