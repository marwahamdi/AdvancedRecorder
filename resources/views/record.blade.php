@extends('layouts.master')
@extends('layouts.records')
@extends('layouts.class')

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>advanced recorder</title>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />

</head>
<body id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container" >
        <i class="	fas fa-microphone fa-2x mb-2 text-white"></i>
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Advanced Recorder</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>


        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#record">Let's Record</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Records</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#projects">Classifications</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#signup">Search</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Masthead-->
<header class="masthead">
    <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center">
            <h1 class="mx-auto my-0 text-uppercase">record voice</h1>
            <h2 class="text-white-50 mx-auto mt-2 mb-5">Let's Record A Voice And Convert It To Text Easily.</h2>

        </div>
    </div>
</header>
<section class="about-section " id="record">
    <div class="container">
        <div class="row">
            <a class="btn btn-primary js-scroll-trigger" href="#record">start record</a>
        </div>

    </div>
</section>
<!-- About-->
<section class="about-section text-center" id="about">

    <div class="container">

        <div class="row">
            <div class="col-lg-8 mx-auto" >
                <div class="list-group " >
                    <button type="button" class="list-group-item list-group-item-action text-left  list-group-item-secondary font-weight-bold" style="font-size:200%;margin:3px" >Record. <br/><i class="fas fa-trash-alt fa-xs  "  ></i>   <i class="fas fa-share-alt fa-xs mb-10  "></i>   <i class="fas fa-pen fa-xs mb-10 "></i>   <i class="fas fa-info-circle fa-xs mb-10  "></i></button>
                    <button type="button" class="list-group-item list-group-item-action text-left list-group-item-secondary font-weight-bold" style="font-size:200%;margin: 3px">Record..  <br/><i class="fas fa-trash-alt fa-xs mb-2  "></i>   <i class="fas fa-share-alt fa-xs  mb-2  "></i>   <i class="fas fa-pen fa-xs mb-2 "></i>   <i class="fas fa-info fa-xs mb-2 "></i></button>
                    <button type="button" class="list-group-item list-group-item-action text-left list-group-item-secondary font-weight-bold" style="font-size:200%;margin: 3px">Record... <br/> <i class="fas fa-trash-alt fa-xs mb-2  "></i>   <i class="fas fa-share-alt fa-xs  mb-2  "></i>   <i class="fas fa-pen fa-xs mb-2 "></i>  <i class="fas fa-info fa-xs mb-2 "></i></button>
                    <button type="button" class="list-group-item list-group-item-action text-left list-group-item-secondary font-weight-bold" style="font-size:200%;margin: 3px">Record....<br/> <i class="fas fa-trash-alt fa-xs mb-2  "></i>   <i class="fas fa-share-alt fa-xs  mb-2  "></i>   <i class="fas fa-pen fa-xs mb-2 "></i> <i class="fas fa-info fa-xs mb-2 "></i></button>
                    <button type="button" class="list-group-item list-group-item-action text-left  list-group-item-secondary font-weight-bold" style="font-size:200%;margin: 3px">Record..... <br/> <i class="fas fa-trash-alt fa-xs mb-2  "></i>   <i class="fas fa-share-alt fa-xs  mb-2  "></i>   <i class="fas fa-pen fa-xs mb-2 "></i>  <i class="fas fa-info fa-xs mb-2 "></i></button>
                    <button type="button" class="list-group-item list-group-item-action list-group-item-primary text-left  font-weight-bold"style="margin: 3px">  <i class="fas fa-sort-alpha-up fa-2x mb-2 " ></i>  <i class="fas fa-sort-alpha-up-alt fa-2x mb-2 "></i> </button>
                </div>
                <p class="text-white-50">
                    <!--  <a href="https://startbootstrap.com/theme/grayscale/">the preview page</a>-->
                 </p>
             </div>
         </div>
     </div>
 </section>
 <!-- classifications-->
<section class="projects-section bg-light" id="projects" >
    <!--first class-->
    <div class="btn-group">
        <button type="button" class="btn btn-dark" >level 1  semester 1</button>
        <button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="sr-only">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item " href="#">intro to cs</a>
            <a class="dropdown-item" href="#">intro to is</a>
            <a class="dropdown-item" href="#">intro to it</a>
            <a class="dropdown-item" href="#">English1</a>
            <a class="dropdown-item" href="#">Math1</a>
        </div>
    </div>
    <!--second class-->
    <div class="btn-group">
        <button type="button" class="btn btn-dark">level 1 semester 2</button>
        <button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="sr-only">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">PL1</a>
            <a class="dropdown-item" href="#">IT</a>
            <a class="dropdown-item" href="#">State1</a>
            <a class="dropdown-item" href="#">English2</a>
            <a class="dropdown-item" href="#">Math2</a>
        </div>
    </div>
    <!--third class-->
    <div class="btn-group">
        <button type="button" class="btn btn-dark">level 2 semester 1</button>
        <button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="sr-only">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">PL2</a>
            <a class="dropdown-item" href="#">DC</a>
            <a class="dropdown-item" href="#">Logic</a>
            <a class="dropdown-item" href="#">OR</a>
            <a class="dropdown-item" href="#">DS</a>
        </div>
    </div>
    <!--fourth class-->
    <div class="btn-group">
        <button type="button" class="btn btn-dark">level 2 semester 2</button>
        <button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="sr-only">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Algorithms</a>
            <a class="dropdown-item" href="#">IR</a>
            <a class="dropdown-item" href="#">SA1</a>
            <a class="dropdown-item" href="#">DSS</a>
            <a class="dropdown-item" href="#">MIS</a>
        </div>
    </div>


</section>
<!-- Signup-->
<section class="signup-section" id="signup">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto text-center">
                <i class="fas fa-search fa-2x mb-2 text-white"></i>
                <h2 class="text-white mb-5 font-weight-bolder ">search in records</h2>
                <form class="form-inline d-flex">
                    <input class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputname" type="text" placeholder="Enter record name..." />
                    <button class="btn btn-primary mx-auto " type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Contact-->
<section class="contact-section bg-black">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">Address</h4>
                        <hr class="my-4" />
                        <div class="small text-black-50">4923 Market Street, Orlando FL</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-envelope text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">Email</h4>
                        <hr class="my-4" />
                        <div class="small text-black-50"><a href="#!">hello@yourdomain.com</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-mobile-alt text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">Phone</h4>
                        <hr class="my-4" />
                        <div class="small text-black-50">+1 (555) 902-8832</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="social d-flex justify-content-center">
            <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
            <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
            <a class="mx-2" href="#!"><i class="fab fa-github"></i></a>
        </div>
    </div>
</section>
<!-- Footer-->
<footer class="footer bg-black small text-center text-white-50"><div class="container">Copyright &copy; Your Website 2021</div></footer>
<!-- Bootstrap core JS-->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>
</html>
