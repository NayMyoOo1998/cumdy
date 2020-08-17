
<?php include "template/header.php";?>
<title>Grade system</title>

    <div class="container-fluid">
        
        <div class="slider" >

            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" style="position: absolute; width:100%; left:0; right:0; height:50%;" >
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img class="d-block" src="photos/c.jpg" alt="First slide" width="100%" height="500">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block" src="photos/b.jpg" alt="Second slide" width="100%" height="500"> 
                    </div>
                    <div class="carousel-item">
                    <img class="d-block " src="photos/a.jpg" alt="Third slide" width="100%" height="500">
                    </div>
                </div>
            </div>

            <div class="dropdwonmenu" style="position: absolute; margin-top:30%; width:50%; text-align:center; margin-left:25%; ">
                <select class="browser-default custom-select custom-select-lg mb-3" id="selectYearName">
                    <option selected>CU(MDY)</option>
                    <option value="firstyear">FIRST YEAR</option>
                    <option value="secondyear">SECOND YEAR</option>
                    <option value="thirdyear">THIRD YEAR</option>
                    <option value="fourthyear">FOURTH YEAR</option>
                    <option value="finalyear">FINAL YEAR</option>
                    <option value="master">MASTER</option>
                </select>
            </div>

        </div>


        <div class="card-list" style="position: absolute; margin-top:38%; padding-top:20px; width:100%;" id="card-list">
            <div class="row ml-3 text-center">
                <div class="col-sm-4 mb-3 pl-5">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="photos/event.jpg" alt="Card image cap" height="200">
                        <div class="card-body">
                            <h5 class="card-title">Events</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="events.php" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 mb-3 pl-5">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="photos/speech.jpg" alt="Card image cap" height="200">
                        <div class="card-body">
                            <h5 class="card-title">Speech</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 mb-3 pl-5">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="photos/speech1.jpg" alt="Card image cap" height="200">
                        <div class="card-body">
                            <h5 class="card-title">Knowledge sharing</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 mb-3 pl-5">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="photos/course2.jpg" alt="Card image cap" height="200">
                        <div class="card-body">
                            <h5 class="card-title">Courses</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 mb-3 pl-5">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="photos/bg-view.jpg" alt="Card image cap" height="200">
                        <div class="card-body">
                            <h5 class="card-title">Department</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 mb-3 pl-5">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="photos/bg-view.jpg" alt="Card image cap" height="200">
                        <div class="card-body">
                            <h5 class="card-title">Clubs</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 mb-3 pl-5">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="photos/bg-view.jpg" alt="Card image cap" height="200">
                        <div class="card-body">
                            <h5 class="card-title">About us</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 mb-3 pl-5">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="photos/bg-view.jpg" alt="Card image cap" height="200">
                        <div class="card-body">
                            <h5 class="card-title">Contact us</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

<?php include "template/footer.php";?>

<script>
    $(document).ready(function(){
 $('#selectYearName').change(function(){
                        var selectVal = $(this).val();
                        switch(selectVal){
                            case "firstyear" : location.href="firstyear.php"; break;
                            case "secondyear" : location.href="secondyear.php"; break;
                            case "thirdyear" : location.href = "thirdyear.php"; break;
                            case "fourthyear" : location.href = "fourthyear.php"; break;
                            case "finalyear" : location.href = "finalyear.php"; break;
                            case "master" : location.href = "master.php"; break;

                        }
                    });
    });
</script>