<?php 
include '../../function/user_session.php';
include '../../function/user_function.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../../assets/img/tab-ico.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
    Local Hiphop Music Channel
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <?php include '../../includes/link/css_link.php'?>
<style>
    
.ml15 {
  font-weight: 800;
  font-size: 3.8em;
  text-transform: uppercase;
  letter-spacing: 0.5em;
}

.ml15 .word {
  display: inline-block;
  line-height: 1em;
  font-family: 'Bevan', cursive;
}

.ml12 {
  font-weight: 200;
  font-size: 1.8em;
  text-transform: uppercase;
  letter-spacing: 0.5em;
}

.ml12 .letter {
  display: inline-block;
  line-height: 1em;
}

</style>
</head>

<body class="landing-page sidebar-collapse">

    <?php include '../../includes/navbar.php' ?>

    <div class="wrapper">
        <div class="page-header">
          <div class="page-header-image" data-parallax="true">
            <video autoplay muted loop id="myVideo" style="position: fixed; right: 0; bottom: 0; min-width: 100%; min-height: 100%;">
                <source src="../../assets/video/local.mp4" type="video/mp4">
            </video>
          </div>
            <div class="content-center col-sm-8">
                <h1 class="ml15">
                    <span class="word">Local</span>
                    <span class="word">HipHop</span>
                </h1>
                <h1 class="ml15">
                    <span class="word">Music</span>
                </h1>
            </div>
            <div class="content-center col-sm-9">
                <h1 class="ml12">Support the Local Artists
                </h1>
            </div>
        </div>

        <div class="section section-about-us">
            <div class="container-fluid">
                <div class="row justify-content-between jumbotron" style="background-image: url('../../assets/img/jumbutron.jpg');">
                    <div class="card col-md-3">
                        <img class="card-img-top" src="../../assets/img/hiphop_card.png" alt="Card image cap">
                        <div class="card-body">
                            LOCAL is a community and platform that promotes local music from underground artists. We started back in 2017 and our vision is to put local artists on the pedestal to be successful and be heard by a wider audience.
                        </div>
                    </div>
                    <div class="card col-md-3">
                        <img class="card-img-top" src="../../assets/img/hiphop_card2.jpg" alt="Card image cap">
                        <div class="card-body">
                            We will continue to work with only the best! Be on the look out for new exciting releases and projects that we will drop in the future!
                        </div>
                    </div>
                    <div class="card col-md-3">
                        <img class="card-img-top" src="../../assets/img/hiphop_card.png" alt="Card image cap">
                        <div class="card-body">
                            LOCAL is a community and platform that promotes local music from underground artists. We started back in 2017 and our vision is to put local artists on the pedestal to be successful and be heard by a wider audience.
                        </div>
                    </div>
                </div>
            </div>
          
            <div class="container-fluid content row">

                <div id="carouselExampleIndicators" class="carousel slide col-lg-8" data-aos="fade-right"  data-ride="carousel" >
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <img src="../../assets/img/shotsfired.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption blockquote">
                                <h1 style="color: #ffffff" align="left">Shots Fired Cartel<br>
                                    <small>Don G Reunites Shots Fired</small>
                                </h1>
                                <button class="btn btn-primary">Read Now</button>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="../../assets/img/kartellem.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption blockquote">
                                <h1 style="color: #ffffff" align="right">Kartell'em <br>
                                    <small>Stranded: La Union Tour</small>
                                </h1>
                                <button class="btn btn-primary">Read Now</button>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="../../assets/img/pricetagg.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption blockquote">
                                <h1 style="color: #ffffff"  align="left">Pricetagg<br>
                                <small>MV Shoot for "Kontrabida"</small>
                                </h1>
                                <button class="btn btn-primary">Watch Now</button>
                            </div>
                        </div>

                    </div>

                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>


                <div class="container border border-secondary col-lg-4" data-aos="fade-left">
                    <h2 class="title " style="margin: 0px">Latest Release</h2>
                    <div class="ad column">

                        <div class="ad row" style="margin-top: 15px">
                            <div class="ad-image col-sm-4" >
                                <img src="../../assets/img/clr.jpg" alt="Thumbnail Image" class="rounded-circle img-raised">
                            </div>
                            <div class="ad-about col-sm-8" style="padding: 0px">
                                <p class="" style="margin-bottom: 0px">CLR</p>
                                <div class="typography-line" style="padding-left: 0px; margin-bottom: 0px">"A STARVING ARTIST"
                                </div>
                                <button class="btn btn-primary btn-icon btn-round" type="button" style="margin: 0px">
                                    <i class='fas fa-headphones' style='font-size:22px'></i>
                                </button>
                            </div>
                        </div>

                        <div class="ad row" style="margin-top: 15px">
                            <div class="ad-image col-sm-4">
                                <img src="../../assets/img/waiian.jpg" alt="Thumbnail Image" class=" rounded-circle img-raised">
                            </div>
                            <div class="ad-about col-sm-8" style="padding: 0px">
                                <p class="" style="margin-bottom: 0px">Waiian</p>
                                <div class="typography-line" style="padding-left: 0px; margin-bottom: 0px">"SOLO MISSION"
                                </div>
                                <button class="btn btn-primary btn-icon btn-round" type="button" style="margin: 0px">
                                <i class='fas fa-headphones' style='font-size:22px'></i>
                                </button>
                            </div>
                        </div>

                        <div class="ad row" style="margin-top: 15px">
                            <div class="ad-image col-sm-4">
                                <img src="../../assets/img/tiny.jpg" alt="Thumbnail Image" class="rounded-circle img-raised">
                            </div>
                            <div class="ad-about col-sm-8" style="padding: 0px">
                                <p class="" style="margin-bottom: 0px">Tiny Montana</p>
                            <div class="typography-line" style="padding-left: 0px; margin-bottom: 0px">"RANDOM THOUGHTS"
                            </div>
                            <button class="btn btn-primary btn-icon btn-round" type="button" style="margin: 0px ">
                            <i class='fas fa-headphones' style='font-size:22px'></i> 
                            </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <div class="container"  style="background-color: #2c2c2c;">
            <div class="separator separator-primary">
            </div>
            <div class="row  justify-content-around" >
                <div class="container">
                    <div class="text-center">
                        <h1 style="color: #ffffff" data-aos="fade-down">Latest News</h1>
                    </div>
                    <div class="container">
                        <div class="card-columns">
                            <div class="card" data-aos="fade-up-right">
                                <a href="#">
                                <div class="inner">
                                    <img class="card-img-top" src="../../assets/img/news1.jpg">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title" style="color: #2c2c2c">Lorem ipsum dolor sit amet.</h5>
                                    <p class="card-text" style="color: #2c2c2c">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium ad alias, aliquid amet aspernatur atque culpa cum debitis dicta doloremque, dolorum ea eos et excepturi explicabo facilis harum illo impedit incidunt laborum laudantium...
                                    </p>
                                </div>
                                </a>
                            </div>
                            <div class="card" data-aos="fade-up-right">
                                <a href="#">
                                <div class="inner">
                                    <img class="card-img-top" src="../../assets/img/news2.png">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title" style="color: #2c2c2c">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, doloremque!</h5>
                                    <p class="card-text" style="color: #2c2c2c">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio iusto maxime nemo omnis praesentium similique.</p>
                                </div>
                                </a>
                            </div>
                            <div class="card" data-aos="fade-up">
                                <a href="#">
                                <div class="inner">
                                    <img class="card-img-top" src="../../assets/img/news3.jpg">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title" style="color: #2c2c2c">Lorem ipsum dolor sit amet, consectetur.</h5>
                                    <p class="card-text" style="color: #2c2c2c">Amet commodi deleniti enim laboriosam odio placeat praesentium quis ratione rerum suscipit.</p>
                                </div>
                                </a>
                            </div>
                            <div class="card" data-aos="fade-up">
                                <a href="#">
                                <div class="inner">
                                    <img class="card-img-top" src="../../assets/img/news4.jpg">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title" style="color: #2c2c2c">Lorem ipsum dolor sit amet, consectetur.</h5>
                                    <p class="card-text" style="color: #2c2c2c">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                                </a>
                            </div>
                            <div class="card" data-aos="fade-up-left">
                                <a href="#">
                                    <div class="inner">
                                        <img class="card-img-top" src="../../assets/img/news5.jpg">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: #2c2c2c">Lorem ipsum dolor sit amet.</h5>
                                        <p class="card-text" style="color: #2c2c2c">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, consequatur culpa cumque deserunt dignissimos error explicabo fugiat harum ipsam magni minus mollitia nemo perferendis qui repellendus rerum saepe vel voluptate voluptatem voluptatum!
                                        Aperiam, labore, molestiae!..</p>
                                    </div>
                                </a>
                            </div>
                            <div class="card" data-aos="fade-up-left">
                                <a href="#">
                                    <div class="inner">
                                        <img class="card-img-top" src="../../assets/img/news6.jpg">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: #2c2c2c">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h5>
                                        <p class="card-text" style="color: #2c2c2c">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque commodi debitis eaque explicabo fuga maiores necessitatibus, neque omnis optio vel!</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div> 
    <div class="section section-team text-center">
        <div class="container">

        <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'Kontrabando Clo.')">Kontrabando Clo.</button>
            <button class="tablinks" onclick="openCity(event, 'Paris')">Paris</button>
            <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button>
            <button class="tablinks" onclick="openCity(event, 'Kalmado Clo.')">Kalmado Clo.</button>
            <button class="tablinks" onclick="openCity(event, 'tshirt5')">tshirt5</button>
            <button class="tablinks" onclick="openCity(event, 'Kalmado')">Wake N Bake</button>
        </div>
        <!-- Tab content -->
        <div id="Kontrabando Clo." class="tabcontent">
            <img src="../../assets/img/tshirt/tshirt1.jpg">
        </div>
        <div id="Paris" class="tabcontent">
            <img src="../../assets/img/tshirt/tshirt2.jpg">
        </div>
        <div id="Tokyo" class="tabcontent">
            <img src="../../assets/img/tshirt/tshirt3.jpg">
        </div>
        <div id="Kalmado Clo." class="tabcontent">
            <img src="../../assets/img/tshirt/tshirt4.jpg">
        </div>
        <div id="tshirt5" class="tabcontent">
            <img src="../../assets/img/tshirt/tshirt5.jpg">
        </div>
        <div id="Kalmado" class="tabcontent">
            <img src="../../assets/img/tshirt/tshirt6.jpg">
        </div>
        <!-- end tab content -->
        </div>
    </div>
    <div class="section section-contact-us text-center">
        <div class="container">
            <h2 class="title">Want to work with us?</h2>
            <p class="description">Your project is very important to us.</p>
            <div class="row">
                <div class="col-lg-6 text-center col-md-8 ml-auto mr-auto">
                    <div class="input-group input-lg">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="now-ui-icons users_circle-08"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" placeholder="First Name...">
                    </div>
                    <div class="input-group input-lg">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="now-ui-icons ui-1_email-85"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" placeholder="Email...">
                    </div>
                    <div class="textarea-container">
                        <textarea class="form-control" name="name" rows="4" cols="80" placeholder="Type a message..."></textarea>
                    </div>
                    <div class="send-button">
                        <a href="#pablo" class="btn btn-primary btn-round btn-block btn-lg">Send Message</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include '../../includes/footer.php' ?>
    <?php include '../../includes/link/js_link.php'?>
</body>

</html>
<?php 
user_logout();
?>


