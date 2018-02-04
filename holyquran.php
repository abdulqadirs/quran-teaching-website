<!doctype html>
<html>

    <head>
        <title>Holy Quran</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans|Roboto+Slab" rel="stylesheet">
        <!-- font awesome -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
            crossorigin="anonymous">
        <!-- bootstrap cdn links -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ"
            crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
            crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
            crossorigin="anonymous"></script>
        <!-- css for header -->
        <link rel="stylesheet" href="css/header.css" />
        <!-- jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="quran.js"></script>
    </head>

    <body>
        <!-- <nav class="navbar  navbar-toggleable-md">  -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-4">
                    <img src="images/logo.png" class="img-fluid" width="250px" height="160px">
                </div>
                <div class="col-xs-1 col-sm-4 col-md-4"></div>
                <div class="col-xs-4 col-sm-4 col-md-4">
                    <ul class="top-contact" style="margin-top:20px">
                        <b>
                            <li style="color:black">
                                <span class="fa fa-registered fa-lg "></span>US Florida</li>
                        </b>
                        <li style="color:black">G10000064235</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- </nav>  -->
        <nav class="navbar navbar-toggleable-md navigation-bar  navbar-inverse">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>
            <h1 class="navbar-brand"></h1>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="courses.php">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="fee.php">Fee</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="lectures.php">Lectures</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="readquran.php">Holy Quran</a>
                        <span class="sr-only">(current)</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="faqs.php">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact us</a>
                    </li>

                </ul>
            </div>
        </nav>

        <hr style="margin:0px;padding:0px;">
        <div style="height:240px;background-color:rgba(66, 4, 236, 0.92); margin:0px;">
            <div class="container h-100">
                <div class="row h-100 justify-content-center align-items-center">
                    <ul style="color:white">
                        <li>
                            <h1>Holy Quran</h1>
                        </li>
                        <li>
                            <a href="#quran" style="color:white">
                                <span class="fa fa-angle-double-down fa-3x pl-5 ml-5"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <br>
        <br>

        <div class="container-fluid" id="quran">
            <div class="row justify-content-end">
                <div class="col-4">
                    <span class="fa fa-arrow-circle-o-left fa-3x" style="color: rgba(66, 4, 236, 0.92);"></span>
                </div>
                <div class="col-4">
                    <span class="fa fa-arrow-circle-o-right fa-3x" style="color: rgba(66, 4, 236, 0.92);"></span>
                </div>
            </div>
            <div class="row justify-content-center">
                <img src="" class="img-fluid" id="quran-page">
            </div>
            
        </div>

        <br>
        <br>

        <!-- footer -->
        <div class="container-fluid bg-light border border-default border-bottom-0 border-right-0 border-left-0 footer">
            <div class="row">
                <div class="col-12 col-md-4">
                    <ul class="bottom">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="about.php">About us</a>
                        </li>
                        <li>
                            <a href="courses.php">Courses</a>
                        </li>
                        <li>
                            <a href="fee.php">Fee</a>
                        </li>
                        <li>
                            <a href="lectures.php">Lectures</a>
                        </li>
                        <li>
                            <a href="readquran.php">Holy Quran</a>
                        </li>
                        <li>
                            <a href="faqs.php">FAQs</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact us</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-4">
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-1.5">
                            <a href="#">
                                <span class="fa fa-facebook fa-2x"></span>
                            </a>
                        </div>
                        <div class="col-1.5">
                            <a href="#">
                                <span class="fa fa-youtube fa-2x"></span>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-1.5">
                            <a href="#">
                                <span class="fa fa-twitter fa-2x"></span>
                            </a>
                        </div>
                        <div class="col-1.5">
                            <a href="#">
                                <span class="fa fa-skype fa-2x"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <ul class="contact">
                        <li>
                            <span class="fa fa-phone fa-2x" style="color:black;"></span>USA: +1-786-837-7505</li>
                    </ul>
                    <!-- <img src="images/worldmap.png" class="img-fluid"> -->
                </div>
            </div>
            <div class="row">
                <div class="col-12" style="padding:0px;">
                    <hr>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-12">
                    <p class="copyright">Copyright
                        <span class="fa fa-copyright"></span> 2018-2019 Online Quran Reciting - All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </body>

</html>