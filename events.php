<?php include "template/header.php"; ?>
<title>Events</title>


<div class="container-fluid">

    <div class="slider" >

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" style="position: absolute; width:100%; left:0; right:0; height:50%;" >
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="d-block w-100" src="photos/bg-view.jpg" alt="First slide" >
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="photos/bg2-view.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100 " src="photos/bg3-view.jpeg" alt="Third slide">
            </div>
        </div>
    </div>

    <div class="dropdwonmenu" style="position: absolute; margin-top:30%; width:50%; text-align:center; margin-left:25%; ">
        <a href="index.php" class="stretched-link card-link text-white ">Home</a>
        <!-- <span aria-hidden="true" class="text-white">&laquo;</span>
        <span class="sr-only text-white">Previous</span> -->
        <i class="fa fa-long-arrow-left text-white" aria-hidden="true"></i>
        <a href="events.php" class="stretched-link card-link text-white ">Events</a>
        <!-- <span aria-hidden="true" class="text-white">&raquo;</span>
        <span class="sr-only text-white">Next</span> -->
        <i class="fa fa-long-arrow-right text-white" aria-hidden="true" style="font-size: em;"></i>

        <a href="speech.php" class="stretched-link card-link text-white ">Speech</a>

    </div>

    </div>



    <!-- up comming events -->
    <div class="container-fluid" style="position: absolute; margin-top:40%; width:100%;">

        <div class=" m-auto" style="width: 18rem;">
            <h4 class="card-title text-center">Up Comming Event</h4>
            <img class="card-img-top" src="photos/bg-view.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Events</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="events.php" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

        <!-- lastevents -->

        <div class="container text-center my-3">
            <h2 class="font-weight-light">Last Events</h2>
            <div class="row mx-auto my-auto">
                <div id="recipeCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="photos/bg-view.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="photos/bg2-view.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="photos/bg3-view.jpeg">
                                </div>
                            </div>
                        </div>
                        
                    <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <h5 class="mt-2">Advances one slide at a time</h5>
        </div>


    </div>

</div>
















<?php include "template/footer.php"; ?>