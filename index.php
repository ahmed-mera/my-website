<?php
    ob_start();
    require "./page3/php/mangeSite.php";

    ///***********************************************( Mange CV )***********************************************\\\

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['cv'])){
        ($_POST["cv"] == "displayed") ? CV("./page3/cv/view_cv.txt" , 'CV_displayed') : CV("./page3/cv/download_cv.txt" , 'CV_downloaded');
            
    }

?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="page3/images/logo.red.pieno.png" />
    <meta name="description" content="Home page">
    <meta name="keywords" content=" To learn programming (Html, javaScript, css, php, html5, css3, ES6), frameworks(bootstrap, mdbootstrap, alertsSweet2 ) and author Ahmed Mera, school ITIS Molinari, informatica "> 
    <meta name="author" content="Ahmed Mera">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no">
    <!-- Font Awesome -->
    <link href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/css/mdb.min.css" rel="stylesheet">
    <!-- my file css -->
    <link rel="stylesheet" href="page3/css/main.css"> 
    
    <title> Home Page </title>
</head>
<body id="home">
    <!-- header start -->
    <header class="head">
        <div class="sec">
            <nav class="navbar navbar-expand-lg navbar-light fixed-top">
                <div class="container-fluid px-md-5 px-1">
                <div>
                    <a class="navbar-brand logo" href="#home">
                        <span></span><span>AM</span>
                    </a>
                </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-md-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#skills">Skills</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#page">My Works</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#blog">blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tuto">counter</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">contact me</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://gitlab.com/users/ahmed-mera/projects" class="nav-link code" target="_blank"> 
                                source <i class="fas fa-code fa-sm"></i> 
                            </a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link cv" >
                                My CV <i class="fas fa-file-download"></i>
                            </a>
                        </li> 
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            more    
                        </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="nav-link" href="#blog">blog</a>
                                <a class="nav-link" href="#tuto">counter</a>
                                <a class="nav-link" href="#contact">contact me</a>
                            </div>
                        </li> -->

                        <li class="social-media nav-item">
                            <a href="https://www.facebook.com/abo.mera.127" target="_blank"><span><i class="fab fa-facebook-f"></i></span></a>
                            <a href="https://www.youtube.com/channel/UCJT1xJ9a60EqMjlV2iruuZg?view_as=subscriber" target="_blank"><span><i class="fab fa-youtube"></i></span></a>
                            <a href="https://twitter.com/ahmedmera81136" target="_blank"><span><i class="fab fa-twitter"></i></span></a>
                            <a href="https://www.instagram.com/ahmedmera33/" target="_blank"><span><i class="fab fa-instagram"></i></span></a>
                            <a href="https://www.linkedin.com/in/ahmed-mera-096334186/" target="_blank"><span><i class="fab fa-linkedin-in"></i></span></a>
                            <a href="tel:+393428105456"><span class="call-us"> <i class="fa fa-phone"></i></span></a>
                        </li>
                    </ul>
                </div>
                </div>
            </nav>

            <p class="text-center my-title lead">pharaoh</p>
            <p class="lead txt-tit text-center">design by Ahmed Mera</p>
            <p class="text-center scroll lead">scroll down</p>
            <p class="lead scrolling-icon text-center"><i class="fas fa-angle-double-down"></i></p>
        </div>
    </header>
    <!-- header end -->
    <!-- features start -->
    <section class="features pt-3 px-md-5" id="skills">
        <div class = "row mx-auto my-5 dark-grey-text">
            <h2 class = "h1 col-12 text-center text-capitalize mt-5 my-skill"> 
                <span class ="my">My</span> <span>Skills</span>
            </h2>
            <div class = "col-md-6 col-12 mx-auto mt-5 pt-5 mb-0">
                <div class = "container mx-auto text-uppercase ">
                    <!-- ********************************************************************************************************************************** -->
                    <div class = "mt-2 position-relative mb-5 pt-2 ">
                        <span class = "language position-absolute">HTML & CSS</span>
                        <span class = "language-percent position-absolute">95%</span>
                        <div class="progress w-75 mt-2">
                            <div class="progress-bar wow slideInLeft animated" style = "width: 95%" data-percent = "90%" role="progressbar"  aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <!-- ********************************************************************************************************************************** -->

                    <!-- ********************************************************************************************************************************** -->
                    <div class = "mt-2 position-relative mb-5 pt-2">
                        <span class = "language position-absolute">JavaScript</span>
                        <span class = "language-percent position-absolute">75%</span>
                        <div class="progress w-75 mt-2">
                            <div class="progress-bar wow slideInLeft animated" style = "width: 75%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <!-- ********************************************************************************************************************************** -->

                    <!-- ********************************************************************************************************************************** -->
                    <div class = "mt-2 position-relative mb-5 pt-2">
                        <span class = "language position-absolute">Jquery</span>
                        <span class = "language-percent position-absolute">70%</span>
                        <div class="progress w-75 mt-2">
                            <div class="progress-bar wow slideInLeft animated" style = "width: 70%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <!-- ********************************************************************************************************************************** -->

                    <!-- ********************************************************************************************************************************** -->
                    <div class = "mt-3 position-relative mb-5 pt-2">
                        <span class = "language position-absolute">BootStrap</span>
                        <span class = "language-percent position-absolute">79%</span>
                        <div class="progress w-75 mt-2">
                            <div class="progress-bar wow slideInLeft animated" style = "width: 79%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <!-- ********************************************************************************************************************************** -->

                    <!-- ********************************************************************************************************************************** -->
                    <div class = "mt-2 position-relative mb-5 pt-2">
                        <span class = "language position-absolute">PHP</span>
                        <span class = "language-percent position-absolute">87%</span>
                        <div class="progress w-75 mt-2">
                            <div class="progress-bar wow slideInLeft animated" style = "width: 87%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <!-- ********************************************************************************************************************************** -->

                    <!-- ********************************************************************************************************************************** -->
                    <div class = "mt-2 position-relative mb-5 pt-2">
                        <span class = "language position-absolute">C & C++</span>
                        <span class = "language-percent position-absolute">73%</span>
                        <div class="progress w-75 mt-2">
                            <div class="progress-bar wow slideInLeft animated" style = "width: 73%" role="progressbar"  aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <!-- ********************************************************************************************************************************** -->

                </div>
            </div>
            <div class = "col-md-6 col-12 mx-auto mt-md-5">
                <div class = "container mx-auto">
                    <svg class = "w-100" id="ae5f5559-570c-4c14-9324-22f1786600a2" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="1015.12774" height="526" viewBox="0 0 1015.12774 526"><title></title><rect x="600.64726" y="143.87206" width="300.3462" height="532.4319" transform="translate(59.46229 833.98563) rotate(-74.20991)" fill="#3f3d56"/><circle cx="451.92875" cy="18.22867" r="4.24322" fill="#961a1a"/><circle cx="464.99468" cy="21.92352" r="4.24322" fill="#961a1a"/><circle cx="478.06061" cy="25.61836" r="4.24322" fill="#961a1a"/><path d="M807.41965,376.52959a49.57145,49.57145,0,0,0-20.70373.48865,49.483,49.483,0,0,0,1.46357-20.91986,49.19363,49.19363,0,0,0-18.50638,11.94255,49.193,49.193,0,0,0-9.51152-19.86558,49.48244,49.48244,0,0,0-9.70867,18.58827A49.57169,49.57169,0,0,0,733.07115,355.505s-3.09015,15.716,4.34937,28.61187c6.62151,11.47786,19.34349,16.84908,22.06311,17.8924l.06371.07642.03418-.03883c.276.10469.43054.15809.43054.15809s.05845-.30187.139-.84058c.04889-.0604.09834-.12183.15239-.18961.01056.086.02049.16416.03051.24122-.21353.50116-.32189.789-.32189.789s.15966.0354.44964.09076l.00877.051.09429-.03174c2.8634.53547,16.51408,2.622,28.16579-3.68844C801.82182,391.5365,807.41965,376.52959,807.41965,376.52959Z" transform="translate(-92.43613 -187)" fill="#961a1a"/><circle cx="689.59221" cy="138.35165" r="11.03237" fill="#961a1a"/><rect x="581.48421" y="421.57144" width="344.54948" height="7.4962" transform="translate(51.74221 -376.0588) rotate(15.79009)" fill="#961a1a"/><rect x="600.67236" y="426.50275" width="59.40508" height="59.40508" transform="translate(55.49076 -341.31883) rotate(15.79009)" fill="#961a1a"/><rect x="706.83303" y="456.52336" width="59.40508" height="59.40508" transform="translate(67.66575 -369.07379) rotate(15.79009)" fill="#961a1a"/><rect x="812.9937" y="486.54396" width="59.40508" height="59.40508" transform="translate(79.84073 -396.82874) rotate(15.79009)" fill="#961a1a"/><rect x="596.30192" y="496.12363" width="44.12949" height="5.09186" transform="translate(66.59275 -336.44884) rotate(15.79009)" fill="#961a1a"/><rect x="702.46259" y="526.14423" width="44.12949" height="5.09186" transform="translate(78.76773 -364.20379) rotate(15.79009)" fill="#961a1a"/><rect x="808.62326" y="556.16484" width="44.12949" height="5.09186" transform="translate(90.94272 -391.95875) rotate(15.79009)" fill="#961a1a"/><ellipse cx="289.60018" cy="396.5" rx="284" ry="10.5" fill="#d0cde1"/><ellipse cx="794.12774" cy="515.5" rx="221" ry="10.5" fill="#d0cde1"/><path d="M778.1721,621H841.93v26.66361H804.83571v26.6636h37.09761v26.662H778.1721Zm76.51116,0h63.75958v23.1856h-37.096v4.63679h37.096v53.32722H854.68491V677.80192h37.096v-4.63679H854.68161V621Zm76.51281,0h63.75958v23.1856h-37.096v4.63679h37.096v53.32722H931.19607V677.80192h37.096v-4.63679H931.19773V621Z" transform="translate(-92.43613 -187)" fill="#3f3d56"/><path d="M220.92612,499h26.30227v25.98626h24.061V499h26.30389v78.69291H271.291V551.342H247.23v26.3509H220.92774V499Zm111.25393,26.09646H309.02821V499h72.6254v26.09646H358.48719v52.59645H332.18492V525.09646h-.00487ZM393.17929,499h27.42535l16.87042,27.65061L454.32925,499h27.43668v78.69291H455.57061V538.6884L437.475,566.668h-.45376L418.91436,538.6884v39.00451H393.17929Zm101.67621,0h26.31038v52.68234h36.9885v26.01057H494.85389V499Z" transform="translate(-92.43613 -187)" fill="#3f3d56"/><polygon points="82.034 366.091 79.876 390.558 97.146 389.118 97.146 368.25 82.034 366.091" fill="#ffb8b8"/><polygon points="66.203 366.091 68.362 390.558 51.092 389.118 51.092 368.25 66.203 366.091" fill="#ffb8b8"/><path d="M203.9741,365.27567s5.7568,34.54079,5.7568,39.578-2.1588,37.41919-5.7568,43.89559-4.3176,9.3548-2.8784,12.2332.7196,2.15879,0,4.31759-2.1588,1.4392,0,4.3176a7.56062,7.56062,0,0,1,0,8.6352c-1.4392,2.1588,2.8784,60.44639-2.8784,64.764s-7.196,18.70959-7.196,18.70959l-18.70959-2.1588v-15.8312s-4.3176-11.51359-1.4392-18.70959,4.3176-45.33479,4.3176-45.33479-.7196-3.598,0-5.7568,0-3.598-1.4392-4.3176-2.1588-3.598-2.1588-3.598l-2.1588-52.53078L160.79811,465.3s8.6352,70.52079,0,79.87558v16.5508H142.08852l2.8784-17.99s-5.7568-16.55079-2.8784-20.14879-8.6352-61.166-7.196-63.32478.7196-2.8784,0-4.3176-2.8784-2.8784-2.1588-4.3176,0-4.3176,0-4.3176-13.6724-67.64238-7.196-74.11878S203.9741,365.27567,203.9741,365.27567Z" transform="translate(-92.43613 -187)" fill="#2f2e41"/><path d="M176.62931,568.20282s1.4392-6.90136,12.9528-4.53008c0,0,2.87839,5.96928,2.87839,8.84768s2.8784,22.30759,2.8784,22.30759,11.5136,19.4292-2.8784,19.4292-19.42919-5.0372-20.14879-10.0744.7196-6.4764-2.1588-8.6352-4.3176-2.1588-3.598-5.0372,2.1588-17.27039,2.1588-17.27039.7196-10.794,4.6774-7.9156l3.9578,2.8784" transform="translate(-92.43613 -187)" fill="#2f2e41"/><path d="M156.48051,568.20282s-1.4392-6.90136-12.95279-4.53008c0,0-2.8784,5.96928-2.8784,8.84768s-2.8784,22.30759-2.8784,22.30759-11.5136,19.4292,2.8784,19.4292,19.42919-5.0372,20.14879-10.0744-.7196-6.4764,2.1588-8.6352,4.3176-2.1588,3.598-5.0372-2.1588-17.27039-2.1588-17.27039-.7196-10.794-4.6774-7.9156l-3.9578,2.8784" transform="translate(-92.43613 -187)" fill="#2f2e41"/><circle cx="84.91278" cy="26.44011" r="19.4292" fill="#ffb8b8"/><path d="M161.51771,216.31851s-7.9156,30.94279-9.3548,31.66239,33.1016,3.598,33.1016,3.598-8.6352-26.6252,0-30.94279Z" transform="translate(-92.43613 -187)" fill="#ffb8b8"/><path d="M156.46253,235.17488l-.00093-.004L132.73372,251.5789l4.3176,128.80837s31.66239-3.598,38.85839-2.8784,30.22319-6.4764,30.22319-6.4764L196.04659,249.9967a9.94192,9.94192,0,0,0-9.20821-9.09165l-4.32176-.30476s-4.31728,10.68931-17.30682,5.17465A15.15623,15.15623,0,0,1,156.46253,235.17488Z" transform="translate(-92.43613 -187)" fill="#d0cde1"/><path d="M157.03631,234l-29.33979,13.9809-5.7568,82.754s-11.5136,49.65239-2.1588,64.04438,25.186,15.8312,25.186,15.8312,20.86839-82.754,15.11159-110.81837S157.03631,234,157.03631,234Z" transform="translate(-92.43613 -187)" fill="#575a89"/><path d="M101.79093,358.79927v10.794s-4.3176,23.74679,9.35479,23.02719,7.196-25.90559,7.196-25.90559l-4.3176-7.9156Z" transform="translate(-92.43613 -187)" fill="#ffb8b8"/><path d="M228.4405,380.38727l-1.4392,12.23319s7.196,24.4664-6.4764,25.186-3.748-25.03584-3.748-25.03584l4.46756-13.82255Z" transform="translate(-92.43613 -187)" fill="#ffb8b8"/><path d="M182.08361,238.08539h0a84.74684,84.74684,0,0,1,35.43844,18.42216l.12443.10854-10.0744,53.25038-1.4392,19.4292s26.62519,94.98717-4.3176,81.31478c0,0-26.62519-82.754-23.02719-120.89277S182.08361,238.08539,182.08361,238.08539Z" transform="translate(-92.43613 -187)" fill="#575a89"/><path d="M208.2917,255.8965c.7196-.7196,9.3548,1,9.3548,1s15.83119,55.84838,15.83119,65.20318,2.1588,62.60518,2.1588,62.60518l-18.99514,1.91474-15.37506-73.98644Z" transform="translate(-92.43613 -187)" fill="#575a89"/><path d="M132.73372,247.9809h-5.0372s-14.392,5.7568-15.1116,12.2332-20.14879,71.96-20.14879,71.96l5.0372,33.10159,18.70959-2.8784,3.598-36.69959,18.7096-40.29759Z" transform="translate(-92.43613 -187)" fill="#575a89"/><path d="M173.57432,218.8626l.74492-5.19289c.17362-1.21036.882-2.8018,2.05958-2.47264,1.00159.28,3.18376,1.13738,3.5491.87857,1.3682-.96923,3.43868.72552,4.87744-.13549.6028-.36073.996-1.13357,1.69662-1.18516a1.9326,1.9326,0,0,1,1.24551.56426,8.47721,8.47721,0,0,0,3.22412,1.75148,3.468,3.468,0,0,0,3.39423-.92517,1.80257,1.80257,0,0,1,.60022-.57537,1.34659,1.34659,0,0,1,.86308.03969l3.67611,1.00088a14.12556,14.12556,0,0,0-1.88988-11.62984,23.39121,23.39121,0,0,0-5.35422-5.24365q-3.41485-2.59788-7.04825-4.887a22.89209,22.89209,0,0,0-8.563-3.72539c-3.1-.47075-6.57114.37147-8.52107,2.827a5.48684,5.48684,0,0,1-1.97362-2.66617,2.01963,2.01963,0,0,0,.1303,3.09667l-3.109-1.98535c-.874.91767.83358,2.5817.08892,3.60711a1.89976,1.89976,0,0,1-.837.54649,14.25211,14.25211,0,0,0-4.55865,2.86924,17.01032,17.01032,0,0,0-3.59023,6.61357c-1.85261,5.31494-3.19909,11.41016-.56689,16.38533.29841.564,4.23741,9.87353,4.76219,10.23655,1.774,1.22715.61919-1.74269,1.89034,0,.9968,1.36657.81021-3.86379,2.29164-2.71572a3.693,3.693,0,0,0,4.01967.18077c.61419-.42594.41628-2.79122.08489-4.96329a2.55893,2.55893,0,0,1,3.11332-2.87895C171.7198,218.71218,173.5427,219.08306,173.57432,218.8626Z" transform="translate(-92.43613 -187)" fill="#2f2e41"/><polygon points="117.655 134.02 125.57 199.504 120.533 199.504 117.655 134.02" opacity="0.2"/><polygon points="34.181 108.834 30.179 134.02 37.779 108.834 35.62 108.834 34.181 108.834" opacity="0.2"/></svg>
                </div>
            </div>
        </div>
    </section>
    <!-- features end -->

    <!-- line sepretor -->
    <hr class = "mt-5 mb-0 mx-auto line morpheus-den-gradient shadow " />

    <!-- work start -->
    <section class="work py-md-5 mt-0" id="page">
        <h1 class="h1 text-center p-3 my-5 text-capitalize work-header pb-5 ">
            <span class ="my">My</span> <span>Works</span>
        </h1>

        <!-- *********************************************** sixth line ***********************************************  -->

        <div class ="row p-3 mx-auto mb-5">

        <!-- ********************************************** start project tree ****************************** -->
            <!-- Card -->
            <div class="card mx-auto p-0 col-md-3 col-11 mb-5  ">
                <!-- Card image -->
                <div class="view overlay">
                    <img class="card-img-top" src="page3/images/myworks/tree.jpg" alt=" Card image ">
                    <a href="http://mera.ddns.net/tree/" target="_blank">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!-- Button -->
                <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"  href="http://mera.ddns.net/tree/" target="_blank">
                    <i class="fas fa-chevron-right pl-1"></i>
                </a>

                <!-- Card content -->
                <div class="card-body mt-0">

                    <!-- Title -->
                    <h4 class="card-title">Binary Tree</h4>
                    <hr>
                    <!-- Text -->
                    <div class="accordion-container">
                        <div class="set">
                            <a href="#" >
                                Back-End
                                <i class="fa fa-plus"></i>
                            </a>
                            <div class="content">
                                <div>
                                    <span class="card-text info">
                                        ho usato il PHP per salvare l'albero binario su un file [.JSON] e leggerlo dal file, 
                                        utilizzando AJAX per la gestione le richieste al server.
                                    </span>
                                    <hr>
                                    <span class="card-text info">
                                        l'albero viene salvato come un oggetto grande che contiene altri oggetti ( che sono i nodi dell'aòbero).
                                    </span>
                                    <hr>
                                    <span class="card-text info">
                                        la gestione dell'albero viene fatta tramite il JAVASCRIPT ES6 utilizzando una OOP del JAVASCRIPT.
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="set">
                            <a href="#">
                            Front-End
                            <i class="fa fa-plus"></i> 
                            </a>
                            <div class="content">
                                <div> 
                                    <span class="card-text info">
                                        ho usato per la costruzione delle pagine [HTML, CSS, JS, PHP], le loro librerie [Bootstrap, Jquery, FontAwesome, MDBOOSTRAP, AlertSweet2].
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card footer -->
                <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
                    <ul class="list-unstyled list-inline font-small">
                        <li class="list-inline-item pr-2 white-text">
                            <i class="far fa-clock pr-1"></i>
                            29/02/2020
                        </li>
                    </ul>
                </div>

            </div>
            <!-- Card -->
        <!-- *************************************************** end project tree ******************************** -->

        <!-- ********************************************** start project library ****************************** -->
            <!-- Card -->
            <div class="card mx-auto p-0 col-md-3 offset-md-1 col-11 mb-5  ">
                <!-- Card image -->
                <div class="view overlay">
                    <img class="card-img-top" src="page3/images/myworks/library.jpg" alt=" Card image ">
                    <a href="http://mera.ddns.net/library/" target="_blank">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!-- Button -->
                <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"  href="http://mera.ddns.net/library/" target="_blank">
                    <i class="fas fa-chevron-right pl-1"></i>
                </a>

                <!-- Card content -->
                <div class="card-body mt-0">

                    <!-- Title -->
                    <h4 class="card-title">Library</h4>
                    <hr>
                    <!-- Text -->
                    <div class="accordion-container">
                        <div class="set">
                            <a href="#" >
                                Back-End
                                <i class="fa fa-plus"></i>
                            </a>
                            <div class="content">
                                <div>
                                    <span class="card-text info">
                                        ho usato il pattern architetturale MVC [MODELS, VIEWS, CONTROLLERS] per la costruzione, gestione della biblioteca, prenotazione dei libri,
                                        php per la gestione dati, le aree riservate, la sicurezza, session e i cookies per avere una gestione completa del sistema.
                                    </span>
                                    <hr>
                                    <span class="card-text info">
                                        ho usato i file con le estensione [.CSV] per salvare i dati.
                                    </span>
                                    <hr>
                                    <span class="card-text info">
                                        ho usato [Ajax] per mandare i dati al server, quando il amministratore del sistema decide di eleminare oppure modificare sia i libri sia client.
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="set">
                            <a href="#">
                            Front-End
                            <i class="fa fa-plus"></i> 
                            </a>
                            <div class="content">
                                <div> 
                                    <span class="card-text info">
                                        ho usato per la costruzione delle pagine [HTML, CSS, JS, PHP], le loro librerie [Bootstrap, Jquery, FontAwesome].
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card footer -->
                <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
                    <ul class="list-unstyled list-inline font-small">
                        <li class="list-inline-item pr-2 white-text">
                            <i class="far fa-clock pr-1"></i>
                            23/11/2019
                        </li>
                    </ul>
                </div>

            </div>
            <!-- Card -->
        <!-- *************************************************** end project library ******************************** -->

        <!-- ********************************************** start project area riservat ****************************** -->
            <!-- Card -->
            <div class="card mx-auto p-0 col-md-3 offset-md-1 col-11   mb-5">
                <!-- Card image -->
                <div class="view overlay">
                    <img class="card-img-top" src="page3/images/myworks/area_riservata.jpg" alt=" Card image ">
                    <a href="http://mera.ddns.net/page/php/login.php" target="_blank">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!-- Button -->
                <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"  href="http://mera.ddns.net/page/php/login.php" target="_blank">
                    <i class="fas fa-chevron-right pl-1"></i>
                </a>

                <!-- Card content -->
                <div class="card-body mt-0">

                    <!-- Title -->
                    <h4 class="card-title">Sito della Pizzeria</h4>
                    <hr>
                    <!-- Text -->
                    <div class="accordion-container">
                        <div class="set">
                            <a href="#" >
                                Back-End
                                <i class="fa fa-plus"></i>
                            </a>
                            <div class="content">
                                <div>
                                    <span class="card-text card-text info">
                                        ho usato php per la gestione delle aree riservate e del carrello, ho creato pagine web con le estensione [ .php ] 
                                        <a href="http://mera.ddns.net/page/php/" target="_blank">per vedere tutti i file del php </a> .
                                    </span>
                                    <hr>
                                    <span class="card-text info">
                                        ho usato i file con le estensione [ .CSV ] per salvare i dati 
                                        <a href="http://mera.ddns.net/page/php/files/" target="_blank">per vedere i file </a> .                                
                                    </span>
                                    <hr>
                                    <span class="card-text info">
                                        ho usato [ Ajax ] per mandare i dati al server, salvarli sul file, il server risonde con quanti elementi presenti nel carrello e lo posiziono con il [ DOM ] per la visulazzione.
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="set">
                            <a href="#">
                            Front-End
                            <i class="fa fa-plus"></i> 
                            </a>
                            <div class="content">
                                <div> 
                                    <span class="card-text info">
                                        ho usato per la costruzione delle pagine [ HTML, CSS, JS, PHP ], le loro librerie [ Bootstrap, Jquery, FontAwesome, Google Fonts ].                                    
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card footer -->
                <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
                    <ul class="list-unstyled list-inline font-small">
                        <li class="list-inline-item pr-2 white-text">
                            <i class="far fa-clock pr-1"></i>
                            09/11/2019
                        </li>
                    </ul>
                </div>

            </div>
            <!-- Card -->
        <!-- *************************************************** end project area riservata ******************************** -->

        </div>

        <!-- *********************************************** fifth line ***********************************************  -->

        <div class ="row p-3 mx-auto">

        <!-- ********************************************** start project tavola pitagorica ****************************** -->
            <!-- Card -->
            <div class="card mx-auto p-0 col-md-3 col-11 mb-5  ">
                <!-- Card image -->
                <div class="view overlay">
                    <img class="card-img-top" src="page3/images/myworks/tavola_pitagorica.jpg" alt=" Card image ">
                    <a href="http://mera.ddns.net/algoritmi/" target="_blank">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!-- Button -->
                <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"  href="http://mera.ddns.net/algoritmi/" target="_blank">
                    <i class="fas fa-chevron-right pl-1"></i>
                </a>

                <!-- Card content -->
                <div class="card-body mt-0">

                    <!-- Title -->
                    <h4 class="card-title text-capitalize"> Tavola Pitagorica </h4>
                    <hr>
                    <!-- Text -->
                    <div class="accordion-container">
                        <div class="set">
                            <a href="#" >
                                Back-End
                                <i class="fa fa-plus"></i>
                            </a>
                            <div class="content">
                                <div>
                                    <span class="card-text info">
                                        ho creato 2 pagine di php [ index.php , algortimi.php ], la seconda pagine di php contiene una Class che contiene una serie di funzioni per il funzionamento del programma, ma tutto questo viene gestito dalla pagina index.php in questa pagina ho creato un oggetto per gestire le funzione dentro la class 
                                        <a href="https://drive.google.com/open?id=1C78YLUXaVIUjFHHKbryTx4C1bo1cPDPU" target="_blank">per vedere il codice </a>                                    
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="set">
                            <a href="#">
                            Front-End
                            <i class="fa fa-plus"></i> 
                            </a>
                            <div class="content ">
                                <div > 
                                    <span class=" card-text info">
                                        ho usato per la costruzione delle pagine [HTML, CSS, JS , PHP].
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card footer -->
                <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
                    <ul class="list-unstyled list-inline font-small">
                        <li class="list-inline-item pr-2 white-text">
                            <i class="far fa-clock pr-1"></i>
                            12/11/2019
                        </li>
                    </ul>
                </div>

            </div>
            <!-- Card -->
        <!-- *************************************************** end project tavola pitagorica ******************************** -->
        
        <!-- ********************************************** start project  Ajax ****************************** -->
            <!-- Card -->
            <div class="card mx-auto p-0 col-md-3 offset-md-1 col-11   mb-5">
                <!-- Card image -->
                <div class="view overlay">
                    <img class="card-img-top" src="page3/images/myworks/ajax.jpg" alt=" Card image ">
                    <a href="http://mera.ddns.net/ajax/" target="_blank">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!-- Button -->
                <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"  href="http://mera.ddns.net/ajax/" target="_blank">
                    <i class="fas fa-chevron-right pl-1"></i>
                </a>

                <!-- Card content -->
                <div class="card-body mt-0">

                    <!-- Title -->
                    <h4 class="card-title">Ajax</h4>
                    <hr>
                    <!-- Text -->
                    <div class="accordion-container">
                        <div class="set">
                            <a href="#" >
                                Back-End
                                <i class="fa fa-plus"></i>
                            </a>
                            <div class="content">
                                <div>
                                    <span class="card-text info">
                                        ho usato php per fare delle richieste al server e farlo risponde come viene chiesto .                                    
                                    </span>
                                    <hr>
                                    <span class="card-text info">
                                        ho creato una tabella nel file del php, l'ho fatto rispondere con questa tabella in piu' il nome e cognome del persone che vengono inseriti dall'utente.                                    
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="set">
                            <a href="#">
                            Front-End
                            <i class="fa fa-plus"></i> 
                            </a>
                            <div class="content">
                                <div> 
                                    <span class=" card-text info">
                                    ho usato per la costruzione delle pagine [HTML, CSS, JS, PHP ] e [ AJAX ] per mandare al server e ricevere risposte del server.
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card footer -->
                <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
                    <ul class="list-unstyled list-inline font-small">
                        <li class="list-inline-item pr-2 white-text">
                            <i class="far fa-clock pr-1"></i>
                            03/11/2019
                        </li>
                    </ul>
                </div>

            </div>
            <!-- Card -->
        <!-- *************************************************** end project Ajax ******************************** -->

        <!-- ********************************************** start project Autoscuola ****************************** -->
            <!-- Card -->
            <div class="card mx-auto p-0 col-md-3 offset-md-1 col-11   mb-5">
                <!-- Card image -->
                <div class="view overlay">
                    <img class="card-img-top" src="page3/images/myworks/autoscuola.jpg" alt=" Card image ">
                    <a href="http://mera.ddns.net/autoscuola/" target="_blank">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!-- Button -->
                <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"  href="http://mera.ddns.net/autoscuola/" target="_blank">
                    <i class="fas fa-chevron-right pl-1"></i>
                </a>

                <!-- Card content -->
                <div class="card-body mt-0">

                    <!-- Title -->
                    <h4 class="card-title text-capitalize"> Sito Autoscuola Vallazze</h4>
                    <hr>
                    <!-- Text -->
                    <p class="card-text info">
                        un vetrina per un autoscuola in una pagina unica per facilitare l'uso del sito e
                        ho usato per la costruzione delle pagine [HTML, CSS, JS , PHP].
                    </p>
                </div>

                <!-- Card footer -->
                <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
                    <ul class="list-unstyled list-inline font-small">
                        <li class="list-inline-item pr-2 white-text">
                            <i class="far fa-clock pr-1"></i>
                            05/11/2019
                        </li>
                    </ul>
                </div>

            </div>
            <!-- Card -->
        <!-- *************************************************** end project autoscuola ******************************** -->

        </div>
    
        <!-- *********************************************** fouth line *********************************************** -->

        <div class ="row p-3 mx-auto">

        <!-- ********************************************** start project CODA ****************************** -->
            <!-- Card -->
            <div class="card mx-auto p-0 col-md-3 col-11 mb-5  ">
                <!-- Card image -->
                <div class="view overlay">
                    <img class="card-img-top" src="page3/images/myworks/coda.jpg" alt=" Card image ">
                    <a href="http://mera.ddns.net/coda/" target="_blank">
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>
            
            <!-- Button -->
            <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"  href="http://mera.ddns.net/coda/" target="_blank">
            <i class="fas fa-chevron-right pl-1"></i>
            </a>
            
            <!-- Card content -->
            <div class="card-body mt-0">
                
                <!-- Title -->
                <h4 class="card-title text-capitalize"> Gestione Coda</h4>
                <hr>
                <!-- Text -->
                <p class="card-text info">
                    una gestione della coda FIFO [FIRST INPUT, FIRST OUTPT]  tramite il JAVASCRIPT e
                    ho usato per la costruzione delle pagine [HTML, CSS, JS].
                </p>
            </div>
            
            <!-- Card footer -->
            <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
                <ul class="list-unstyled list-inline font-small">
                    <li class="list-inline-item pr-2 white-text">
                        <i class="far fa-clock pr-1"></i>
                        20/02/2019
                    </li>
                </ul>
            </div>
            
            </div>
            <!-- Card -->
        <!-- *************************************************** end project CODA ******************************** -->

        <!-- ********************************************** start project stack ****************************** -->
            <!-- Card -->
            <div class="card mx-auto p-0 col-md-3 offset-md-1 col-11   mb-5">
                <!-- Card image -->
                <div class="view overlay">
                    <img class="card-img-top" src="page3/images/myworks/stack.jpg" alt=" Card image ">
                    <a href="http://mera.ddns.net/stack/" target="_blank">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!-- Button -->
                <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"  href="http://mera.ddns.net/stack/" target="_blank">
                    <i class="fas fa-chevron-right pl-1"></i>
                </a>

                <!-- Card content -->
                <div class="card-body mt-0">

                    <!-- Title -->
                    <h4 class="card-title text-capitalize"> Gestione Stack</h4>
                    <hr>
                    <!-- Text -->
                    <p class="card-text info">
                        realizzazione dello STACK LIFO [LAST INPUT, FIRST OUTPUT] tramite il JAVASCRIPT e
                        ho usato per la costruzione delle pagine [HTML, CSS, JS].
                    </p>
                </div>

                <!-- Card footer -->
                <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
                    <ul class="list-unstyled list-inline font-small">
                        <li class="list-inline-item pr-2 white-text">
                            <i class="far fa-clock pr-1"></i>
                            20/02/2019
                        </li>
                    </ul>
                </div>

            </div>
            <!-- Card -->
        <!-- *************************************************** end project stack ******************************** -->

        <!-- ********************************************** start project matrice ****************************** -->
                <!-- Card -->
                <div class="card mx-auto p-0 col-md-3 offset-md-1 col-11   mb-5">
                    <!-- Card image -->
                    <div class="view overlay">
                        <img class="card-img-top" src="page3/images/myworks/matrice.jpg" alt=" Card image ">
                        <a href="http://mera.ddns.net/matrice/" target="_blank">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!-- Button -->
                    <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"  href="http://mera.ddns.net/matrice/" target="_blank">
                        <i class="fas fa-chevron-right pl-1"></i>
                    </a>
                    <!-- Card content -->
                    <div class="card-body mt-0">

                    <!-- Title -->
                    <h4 class="card-title text-capitalize"> Gestione matrice</h4>
                    <hr>
                    <!-- Text -->
                    <p class="card-text info">
                        realizzazione della matrice tramite il PHP e
                        ho usato per la costruzione delle pagine [HTML, CSS, PHP].
                    </p>
            
                </div>

                <!-- Card footer -->
                <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
                    <ul class="list-unstyled list-inline font-small">
                        <li class="list-inline-item pr-2 white-text">
                            <i class="far fa-clock pr-1"></i>
                            28/02/2019
                        </li>
                    </ul>
                </div>

            </div>
            <!-- Card -->
        <!-- *************************************************** end project matrice ******************************** -->

        </div>

        <!-- *********************************************** third line ***********************************************  -->
        
        <div class ="row p-3 mx-auto">

        <!-- ********************************************** start project scrutinio ****************************** -->
            <!-- Card -->
            <div class="card mx-auto p-0 col-md-3 col-11   mb-5">
                <!-- Card image -->
                <div class="view overlay">
                    <img class="card-img-top" src="page3/images/myworks/scrutinio.jpg" alt=" Card image ">
                    <a href="http://mera.ddns.net/scrutinio/" target="_blank">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!-- Button -->
                <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"  href="http://mera.ddns.net/scrutinio/" target="_blank">
                    <i class="fas fa-chevron-right pl-1"></i>
                </a>

                <!-- Card content -->
                <div class="card-body mt-0">

                    <!-- Title -->
                    <h4 class="card-title text-capitalize"> Scrutinio Scolastico </h4>
                    <hr>
                    <!-- Text -->
                    <p class="card-text info">
                        realizzazione dello Scrutinio Scolastico tramite il PHP e
                        ho usato per la costruzione delle pagine [HTML, CSS, PHP].
                    </p>
                </div>

                <!-- Card footer -->
                <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
                    <ul class="list-unstyled list-inline font-small">
                        <li class="list-inline-item pr-2 white-text">
                            <i class="far fa-clock pr-1"></i>
                            14/03/2019
                        </li>
                    </ul>
                </div>

            </div>
            <!-- Card -->
        <!-- *************************************************** end project scrutinio ******************************** -->

        <!-- ********************************************** start project ftp ****************************** -->
            <!-- Card -->
            <div class="card mx-auto p-0 col-md-3 col-11 offset-md-1  mb-5">
                <!-- Card image -->
                <div class="view overlay">
                    <img class="card-img-top" src="page3/images/myworks/ftp.jpg" alt=" Card image ">
                    <a href="http://mera.ddns.net/rapresentation/ftp.html" target="_blank">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!-- Button -->
                <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"  href="http://mera.ddns.net/rapresentation/ftp.html" target="_blank">
                    <i class="fas fa-chevron-right pl-1"></i>
                </a>

                <!-- Card content -->
                <div class="card-body mt-0">

                    <!-- Title -->
                    <h4 class="card-title text-capitalize"> GUIDA FTP </h4>
                    <hr>
                    <!-- Text -->
                    <p class="card-text info">
                        una rappresentazione per come installare FTP (FILE PROTOCOL SERVER) per il trasfermento dei file.
                        Ho usato per la costruzione delle pagine [HTML, CSS].
                    </p>
                </div>

                <!-- Card footer -->
                <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
                    <ul class="list-unstyled list-inline font-small">
                        <li class="list-inline-item pr-2 white-text">
                            <i class="far fa-clock pr-1"></i>
                            08/11/2018
                        </li>
                    </ul>
                </div>

            </div>
            <!-- Card -->
        <!-- *************************************************** end project ftp ******************************** -->

        <!-- ********************************************** start project codice in c ****************************** -->
            <!-- Card -->
            <div class="card mx-auto p-0 col-md-3 col-11 offset-md-1  mb-5">
                <!-- Card image -->
                <div class="view overlay">
                    <img class="card-img-top" src="page3/images/myworks/codice_c.jpg" alt=" Card image ">
                    <a href="http://ahmedmera.altervista.org/dox/documention/html/index.html" target="_blank">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!-- Button -->
                <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"  href="http://ahmedmera.altervista.org/dox/documention/html/index.html" target="_blank">
                    <i class="fas fa-chevron-right pl-1"></i>
                </a>

                <!-- Card content -->
                <div class="card-body mt-0">

                    <!-- Title -->
                    <h4 class="card-title text-capitalize"> doxygen </h4>
                    <hr>
                    <!-- Text -->
                    <p class="card-text info">
                        il Codice sorgente di alcuni programmi in [ C programming ] 
                        utilizzando il programma DOXGEN per documentare il codice.
                        per vedere il codice sorgente del C e C++ 
                        <a href="https://gitlab.com/ahmed-mera/c" target="_blank">Su Gitlab</a>
                    </p>
                </div>

                <!-- Card footer -->
                <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
                    <ul class="list-unstyled list-inline font-small">
                        <li class="list-inline-item pr-2 white-text">
                            <i class="far fa-clock pr-1"></i>
                            05/03/2018
                        </li>
                    </ul>
                </div>

            </div>
            <!-- Card -->
        <!-- *************************************************** end project codice in c ******************************** -->

        </div>

        <!-- *********************************************** second line ***********************************************  -->

        <div class ="row p-3 mx-auto">

        <!-- ********************************************** start project verifica ****************************** -->
            <!-- Card -->
            <div class="card mx-auto p-0 col-md-3 col-11   mb-5">
                <!-- Card image -->
                <div class="view overlay">
                    <img class="card-img-top" src="page3/images/myworks/verifica.jpg" alt=" Card image ">
                    <a href="http://ahmedmera.altervista.org/scuola/verifica.html" target="_blank">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!-- Button -->
                <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"  href="http://ahmedmera.altervista.org/scuola/verifica.html" target="_blank">
                    <i class="fas fa-chevron-right pl-1"></i>
                </a>

                <!-- Card content -->
                <div class="card-body mt-0">

                    <!-- Title -->
                    <h4 class="card-title text-capitalize"> Verifica su JavaScript </h4>
                    <hr>
                    <!-- Text -->
                    <p class="card-text info">
                        una verifica scolastica sulla gestione degli array con javaScript. 
                        ho usato per la costruzione delle pagine [HTML, CSS, JS].
                    </p>
                </div>

                <!-- Card footer -->
                <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
                    <ul class="list-unstyled list-inline font-small">
                        <li class="list-inline-item pr-2 white-text">
                            <i class="far fa-clock pr-1"></i>
                            27/04/2018
                        </li>
                    </ul>
                </div>

            </div>
            <!-- Card -->
        <!-- *************************************************** end project verifica ******************************** -->

        <!-- ********************************************** start project menu 2018 ****************************** -->
            <!-- Card -->
            <div class="card mx-auto p-0 col-md-3 col-11 offset-md-1  mb-5">
                <!-- Card image -->
                <div class="view overlay">
                    <img class="card-img-top" src="page3/images/myworks/menu_2018.jpg" alt=" Card image ">
                    <a href="http://mera.ddns.net/project/compito_in_class/menu_diversono/menu.html" target="_blank">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!-- Button -->
                <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"  href="http://mera.ddns.net/project/compito_in_class/menu_diversono/menu.html" target="_blank">
                    <i class="fas fa-chevron-right pl-1"></i>
                </a>

                <!-- Card content -->
                <div class="card-body mt-0">

                    <!-- Title -->
                    <h4 class="card-title text-capitalize"> Menu 2018 </h4>
                    <hr>
                    <!-- Text -->
                    <p class="card-text info">
                        realizzazione di un menu moderno.
                        Ho usato per la costruzione delle pagine [HTML, CSS].
                    </p>
                </div>

                <!-- Card footer -->
                <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
                    <ul class="list-unstyled list-inline font-small">

                        <li class="list-inline-item pr-2 white-text">
                            <i class="far fa-clock pr-1"></i>
                            20/05/2018
                        </li>
                    </ul>
                </div>

            </div>
            <!-- Card -->
        <!-- *************************************************** end project menu 2018 ******************************** -->

        <!-- ********************************************** start project login  ****************************** -->
            <!-- Card -->
            <div class="card mx-auto p-0 col-md-3 col-11 offset-md-1  mb-5">
                <!-- Card image -->
                <div class="view overlay">
                    <img class="card-img-top" src="page3/images/myworks/login_signin.jpg" alt=" Card image ">
                    <a href="http://mera.ddns.net/project/login/login_e_sign_up.html" target="_blank">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!-- Button -->
                <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"  href="http://mera.ddns.net/project/login/login_e_sign_up.html" target="_blank">
                    <i class="fas fa-chevron-right pl-1"></i>
                </a>

                <!-- Card content -->
                <div class="card-body mt-0">

                    <!-- Title -->
                    <h4 class="card-title text-capitalize"> login & register </h4>
                    <hr>
                    <!-- Text -->
                    <p class="card-text info">
                        realizzazione di un interfaccia per una area riservata. 
                        Ho usato per la costruzione delle pagine [HTML, CSS, JS].
                    </p>
                </div>

                <!-- Card footer -->
                <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
                    <ul class="list-unstyled list-inline font-small">
                        <li class="list-inline-item pr-2 white-text">
                            <i class="far fa-clock pr-1"></i>
                                05/04/2018
                        </li>
                    </ul>
                </div>

            </div>
            <!-- Card -->
        <!-- *************************************************** end project login ******************************** -->

        </div>

        <!-- *********************************************** frist line ***********************************************  -->

        <div class ="row p-3 mx-auto">

        <!-- ********************************************** start project home page 2017 ****************************** -->
            <!-- Card -->
            <div class="card mx-auto p-0 col-md-3 col-11   mb-5">
                <!-- Card image -->
                <div class="view overlay">
                    <img class="card-img-top" src="page3/images/myworks/home_page_2017.jpg" alt=" Card image ">
                    <a href="http://mera.ddns.net/my-page/" target="_blank">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!-- Button -->
                <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"  href="http://mera.ddns.net/my-page/" target="_blank">
                    <i class="fas fa-chevron-right pl-1"></i>
                </a>

                <!-- Card content -->
                <div class="card-body mt-0">

                    <!-- Title -->
                    <h4 class="card-title text-capitalize"> Home page 2017 </h4>
                    <hr>
                    <!-- Text -->
                    <p class="card-text info">
                        creazione del mio primo sito web in 2017 e
                        ho usato per la costruzione delle pagine [HTML5, CSS3, JS].
                    </p>
                </div>

                <!-- Card footer -->
                <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
                    <ul class="list-unstyled list-inline font-small">
                        <li class="list-inline-item pr-2 white-text">
                            <i class="far fa-clock pr-1"></i>
                            09/05/2017
                        </li>
                    </ul>
                </div>

            </div>
            <!-- Card -->
        <!-- *************************************************** end project home page 2017  ******************************** -->

        <!-- ********************************************** start project orologio by JS ****************************** -->
            <!-- Card -->
            <div class="card mx-auto p-0 col-md-3 col-11 offset-md-1  mb-5">
                <!-- Card image -->
                <div class="view overlay">
                    <img class="card-img-top" src="page3/images/myworks/clock.jpg" alt=" Card image ">
                    <a href="http://mera.ddns.net/project/time/time.html" target="_blank">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!-- Button -->
                <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"  href="http://mera.ddns.net/project/time/time.html" target="_blank">
                    <i class="fas fa-chevron-right pl-1"></i>
                </a>

                <!-- Card content -->
                <div class="card-body mt-0">

                    <!-- Title -->
                    <h4 class="card-title text-capitalize"> Orologio By JavaScript </h4>
                    <hr>
                    <!-- Text -->
                    <p class="card-text info">
                        una rappresentazione per un orologio tranite il JS e il DOm.
                        Ho usato per la costruzione delle pagine [JS, DOM].
                    </p>
                </div>

                <!-- Card footer -->
                <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
                    <ul class="list-unstyled list-inline font-small">
                        <li class="list-inline-item pr-2 white-text">
                            <i class="far fa-clock pr-1"></i>
                            18/11/2017
                        </li>
                    </ul>
                </div>

            </div>
            <!-- Card -->
        <!-- *************************************************** end project Orologio By JavaScript ******************************** -->

        <!-- ********************************************** start project canvas design grafic ****************************** -->
            <!-- Card -->
            <div class="card mx-auto p-0 col-md-3 col-11 offset-md-1  mb-5">
                <!-- Card image -->
                <div class="view overlay">
                    <img class="card-img-top" src="page3/images/myworks/grafic.jpg" alt=" Card image ">
                    <a href="http://mera.ddns.net/project/Canvas/prova.html" target="_blank">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!-- Button -->
                <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"  href="http://mera.ddns.net/project/Canvas/prova.html" target="_blank">
                    <i class="fas fa-chevron-right pl-1"></i>
                </a>

                <!-- Card content -->
                <div class="card-body mt-0">

                    <!-- Title -->
                    <h4 class="card-title text-capitalize"> canvas disegna grafico </h4>
                    <hr>
                    <!-- Text -->
                    <p class="card-text info">
                        ho utilizzato il CANVAS per la creazione del piano cartesiano e le linee. 
                        con un pò di calco sono riuscito a fare il piano cartesiano.
                    </p>
                </div>

                <!-- Card footer -->
                <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
                    <ul class="list-unstyled list-inline font-small">
                        <li class="list-inline-item pr-2 white-text">
                            <i class="far fa-clock pr-1"></i>
                            15/03/2017
                        </li>
                    </ul>
                </div>

            </div>
            <!-- Card -->
        <!-- *************************************************** end project canvas design grafic ******************************** -->

        </div>

    </section>
    <!-- work end -->

    <!-- line sepretor -->
    <hr class = "mt-5 mb-0 mx-auto line morpheus-den-gradient shadow " />

    <!-- blog start -->
    <section class="extensions px-md-5 px-3 pt-5 mt-0" id="blog">
        <div class="row pr-lg-5 my-5 dark-grey-text ">
            <h2 class = "h1 text-center  col-12 text-center text-capitalize mt-3 mb-0 header-blog">
                <span class ="my">My</span> <span>Blog</span>
            </h2>
            <div class="col-md-6 mb-md-4 mb-0 col-12">
                <div class="view">
                    <svg class = "w-100" id="b4ce20e6-8fe7-43d5-87f7-68602c562594" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="1061" height="742.85506" viewBox="0 0 1061 742.85506"><title></title><path d="M1118.5,516.01425c0,103.85867-61.74233,140.12223-137.90535,140.12223S842.68931,619.87292,842.68931,516.01425,980.59465,280.031,980.59465,280.031,1118.5,412.15559,1118.5,516.01425Z" transform="translate(-69.5 -78.57247)" fill="#f2f2f2"/><polygon points="906.071 561.677 907.483 474.756 966.262 367.224 907.705 461.121 908.34 422.038 948.85 344.239 908.508 411.696 908.508 411.696 909.649 341.403 953.029 279.466 909.829 330.35 910.543 201.459 906.059 372.087 906.427 365.048 862.323 297.54 905.72 378.561 901.61 457.065 901.488 454.981 850.644 383.939 901.334 462.343 900.82 472.16 900.728 472.308 900.77 473.114 890.344 672.287 904.274 672.287 905.945 569.41 956.511 491.199 906.071 561.677" fill="#3f3d56"/><path d="M831.65688,421.48618c0,134.32387-79.85341,181.22475-178.35758,181.22475S474.94172,555.81005,474.94172,421.48618s178.35758-305.205,178.35758-305.205S831.65688,287.16231,831.65688,421.48618Z" transform="translate(-69.5 -78.57247)" fill="#f2f2f2"/><polygon points="577.302 503.591 579.128 391.174 655.149 252.098 579.415 373.539 580.236 322.992 632.629 222.372 580.453 309.615 580.453 309.616 581.93 218.704 638.034 138.598 582.162 204.408 583.085 37.709 577.286 258.389 577.763 249.285 520.722 161.975 576.848 266.761 571.533 368.293 571.375 365.598 505.617 273.717 571.176 375.119 570.511 387.817 570.392 388.008 570.446 389.05 556.962 646.647 574.978 646.647 577.14 513.593 642.538 412.44 577.302 503.591" fill="#3f3d56"/><path d="M1107.47,769.93754c0,10.11-29.37988,19.55-80.13995,27.5-91.98,14.42-254.15,23.99-438.85,23.99-286.62,0-518.98-23.05-518.98-51.49,0-3.93,4.46-7.78,12.91-11.46,9.53-4.17,24.15-8.14,43.17005-11.85,39.21-7.65,97.13995-14.19,167.8-19.05,82.02-5.62994,181.21-8.98,288.21-9.11q3.435-.015,6.88995-.01,19.335,0,38.33.14,8.925.06006,17.77.16c63.02.67,122.66,2.46,176.86,5.16,2.42.12,4.83.25,7.23.37.82.04,1.64.09,2.46.13.22.01.44.02.66.04q15.975.84,31.25,1.79,5.01.3,9.93.63c31.87006,2.07,61.29,4.48,87.75,7.19q6.78.68994,13.30005,1.41c33.48,3.67,61.66992,7.84,83.38989,12.37C1089.51,754.53751,1107.47,762.0275,1107.47,769.93754Z" transform="translate(-69.5 -78.57247)" fill="#3f3d56"/><ellipse cx="752.96319" cy="688.14768" rx="113.08238" ry="26.20202" opacity="0.1"/><path d="M1107.47,769.93754c0,10.11-29.37988,19.55-80.13995,27.5-38.38-4.19-64.95-13.24-64.95-23.72,0-13.05,41.16-23.87,95.02991-25.87C1089.51,754.53751,1107.47,762.0275,1107.47,769.93754Z" transform="translate(-69.5 -78.57247)" opacity="0.1"/><path d="M632.15381,757.98614c0,17.26572-123.07592,31.25855-274.89132,31.25855-150.39039,0-272.5745-13.72617-274.85457-30.77131,29.19-12.74244,106.04-23.683,210.96763-30.9,20.50191-.5516,41.89565-.8458,63.88694-.8458C509.07789,726.7276,632.15381,740.72037,632.15381,757.98614Z" transform="translate(-69.5 -78.57247)" opacity="0.1"/><rect x="56.08151" width="456.00701" height="683.09115" fill="#3f3d56"/><rect x="83.66258" y="237.1972" width="428.42594" height="209.61613" fill="#2f2e41"/><rect x="256.50394" y="241.79404" width="423.8291" height="199.50307" fill="#3f3d56"/><rect x="282.47612" y="271.21385" width="94.695" height="34.01665" fill="#961a1a"/><rect x="305.92003" y="330.97283" width="348.44084" height="9.19369" fill="#961a1a"/><rect x="305.92003" y="354.87642" width="348.44084" height="9.19369" fill="#961a1a"/><rect x="305.92003" y="378.78002" width="348.44084" height="9.19369" fill="#961a1a"/><rect x="305.92003" y="402.68361" width="348.44084" height="9.19369" fill="#961a1a"/><rect x="86.42068" y="77.22699" width="94.695" height="34.01665" fill="#f2f2f2"/><rect x="109.86459" y="136.98598" width="348.44084" height="9.19369" fill="#f2f2f2"/><rect x="109.86459" y="160.88957" width="348.44084" height="9.19369" fill="#f2f2f2"/><rect x="109.86459" y="184.79316" width="348.44084" height="9.19369" fill="#f2f2f2"/><rect x="109.86459" y="208.69676" width="348.44084" height="9.19369" fill="#f2f2f2"/><rect x="90.09816" y="467.95881" width="94.695" height="34.01665" fill="#f2f2f2"/><rect x="113.54207" y="527.71779" width="348.44084" height="9.19369" fill="#f2f2f2"/><rect x="113.54207" y="551.62138" width="348.44084" height="9.19369" fill="#f2f2f2"/><rect x="113.54207" y="575.52498" width="348.44084" height="9.19369" fill="#f2f2f2"/><rect x="113.54207" y="599.42857" width="348.44084" height="9.19369" fill="#f2f2f2"/><path d="M792.56281,219.0309s18.90356,24.22018,16.54061,41.35153S848.092,236.753,848.092,236.753s-14.17767-29.53681-6.4981-43.71448S792.56281,219.0309,792.56281,219.0309Z" transform="translate(-69.5 -78.57247)" fill="#ffb9b9"/><path d="M858.72526,709.34191s24.81092,27.17386,20.67577,33.08122-76.7957,28.35533-85.066,27.17386-12.40546-7.08883-9.45178-8.861,21.85724-11.81472,21.85724-11.81472l15.94988-18.31282s11.81472-6.4981,11.81472-10.04252S858.72526,709.34191,858.72526,709.34191Z" transform="translate(-69.5 -78.57247)" fill="#2f2e41"/><path d="M816.783,739.46945s-9.45177,15.35914-11.224,15.94988,8.861,21.85723,8.861,21.85723L839.231,769.597l13.58693-11.224-2.95368-15.35914Z" transform="translate(-69.5 -78.57247)" fill="#ffb9b9"/><path d="M791.38134,446.46432l-11.81472,52.57552s-40.7608,91.5641-12.40546,107.514l62.02729,118.738,33.08123-14.7684-55.5292-121.69165,25.40165-140.00447Z" transform="translate(-69.5 -78.57247)" fill="#d0cde1"/><path d="M791.38134,446.46432l-11.81472,52.57552s-40.7608,91.5641-12.40546,107.514l62.02729,118.738,33.08123-14.7684-55.5292-121.69165,25.40165-140.00447Z" transform="translate(-69.5 -78.57247)" opacity="0.1"/><path d="M795.51649,454.73463h-5.99365a333.982,333.982,0,0,0,3.04,54.34772c4.13515,30.12754,14.76841,99.24367,14.76841,99.24367s-1.18148,12.9962,2.36294,17.13135,4.13515-1.18147,4.72589,8.27031,6.20273,75.167,6.20273,75.167,3.83978,13.44347-.29537,16.39715-12.40546,18.90356-6.4981,21.2665,46.66816,5.31663,48.44037,3.54442,0-112.8306,0-112.8306-1.18148-22.448-2.36295-23.62945-6.4981-17.13135-4.72589-20.67577.59074-14.17766.59074-15.94987-5.31663,0-.59074-7.67957,5.31663-69.11613,5.31663-69.11613,25.40165-38.98859,17.72208-49.0311Z" transform="translate(-69.5 -78.57247)" fill="#d0cde1"/><circle cx="739.60342" cy="110.33089" r="38.98859" fill="#ffb9b9"/><path d="M848.092,230.25489s-23.62945,5.90736-33.08122,20.085l-8.27031,1.77221v8.2703s-15.35914,49.0311-11.81472,70.2976,0,62.618-5.90737,73.842-7.67957,13.58693-4.72588,18.31282,7.08883,20.67577,4.13515,27.7646,0,14.17767,27.17386,15.94988,65.57171,1.77221,65.57171-7.67957-2.36294-36.03491,0-43.12374,3.54442-11.81472,2.36295-18.31282,2.36294-79.15864,2.36294-79.15864S886.48986,245.614,848.092,230.25489Z" transform="translate(-69.5 -78.57247)" fill="#2f2e41"/><path d="M792.56281,412.79236l-32.49049,48.44036s-34.26269,31.309-21.85723,45.48669S783.111,465.36788,783.111,465.36788l35.44417-40.17006Z" transform="translate(-69.5 -78.57247)" fill="#ffb9b9"/><path d="M813.23858,758.373s-1.18148-7.67957-5.31663-7.67957S776.0222,769.597,776.0222,769.597s-36.62564,4.13516-22.448,11.81473,101.01588,8.861,101.60661,5.90736,1.77221-32.08116-2.36294-31.99046-37.21638,6.5888-37.21638,6.5888Z" transform="translate(-69.5 -78.57247)" fill="#2f2e41"/><path d="M811.87686,168.76089a9.77913,9.77913,0,0,1-4.45607,1.00684c-1.59349.09057-3.49555-.008-4.343-1.36045a6.221,6.221,0,0,1-.54225-2.837,9.34634,9.34634,0,0,0-10.92238-7.96043,13.44458,13.44458,0,0,0,1.74051,5.54339,11.85549,11.85549,0,0,1-10.42222-1.38722l-.60006,7.95737c-2.1192,1.01275-4.834,1.224-6.68211-.2255s-1.99585-4.85139.09446-5.9225c-2.582-.5384-5.73992-1.69522-5.92989-4.32593-.17333-2.40039,2.37513-4.15727,2.84437-6.51772.38272-1.92518-.6727-4.01766.07418-5.83287.98118-2.38464,4.54365-2.99682,5.25837-5.4744.364-1.26178-.15973-2.61142-.03472-3.91869.32734-3.42283,4.63049-4.84393,8.06342-4.64939s7.17972,1.10618,10.09614-.71518c1.41407-.88311,2.40169-2.29662,3.64423-3.40818a10.82274,10.82274,0,0,1,12.568-1.09287c1.38063.85856,2.58527,2.04835,4.125,2.57019,3.151,1.06792,6.43846-.95269,9.73277-1.41848a8.0861,8.0861,0,0,1,6.77889,1.96365,5.54921,5.54921,0,0,1,1.01,6.686c1.93273-.32645,3.98079-.64221,5.8023.08175s3.21335,2.905,2.37066,4.67472a6.05576,6.05576,0,0,0-.735,1.50119c-.171,1.0296.8205,1.90986,1.82158,2.2051s2.0876.24,3.06773.59872c4.04919,1.48193,3.07759,7.95527,6.2646,10.85958a25.41622,25.41622,0,0,0,3.45482,2.11281,8.4062,8.4062,0,0,1,2.96417,10.15561c-.63881,1.41464-1.70919,2.76468-1.58024,4.3115.18086,2.1695,2.50546,3.35783,4.13683,4.79939a9.62473,9.62473,0,0,1,2.24041,11.05039c-1.49958,3.12814-4.74717,5.49944-5.07685,8.95275-.1433,1.50108.30776,2.99971.28208,4.5074a9.287,9.287,0,0,1-3.99193,7.01155,20.76464,20.76464,0,0,1-7.663,3.18852c-1.28776.30824-2.82439.79082-3.13606,2.07775-.36952,1.52585,1.33294,2.91435,1.15677,4.47439a2.59459,2.59459,0,0,1-1.0418,1.68634c-2.30448,1.80225-5.95147.25721-7.3606-2.30659s-1.229-5.67066-1.01054-8.588l.79458-10.60829c.24724-3.30077.22352-7.22049-2.46726-9.14818-2.97476-2.13114-7.30715-.40582-10.67124-1.84592-3.50523-1.50052-4.76265-5.892-4.62122-9.70232s1.23314-7.62654.60545-11.388c-.77818-4.66122-4.92422-7.794-9.11051-4.77343C814.14944,162.829,814.7847,167.05152,811.87686,168.76089Z" transform="translate(-69.5 -78.57247)" fill="#2f2e41"/><path d="M844.54759,258.61022S820.91815,268.062,820.91815,288.147s1.18147,46.66816-2.95368,55.5292-7.67957,11.81472-5.31663,18.90356,6.4981,5.90736,0,11.224-5.90736-3.54441-6.4981,5.31663,5.90736,10.04251,0,14.17767-21.2665,20.67576-14.7684,25.99239,23.62945,22.448,29.53681,15.94987,8.861-23.03871,17.13135-21.85724,9.45177,1.77221,8.2703-4.13515-6.4981-5.90736.59074-7.67957,10.04251,2.363,7.67957-3.54441-4.13516-8.27031.59073-14.76841,7.08884-8.2703,6.4981-14.7684,12.9962-64.981,12.9962-64.981S878.81029,253.88433,844.54759,258.61022Z" transform="translate(-69.5 -78.57247)" opacity="0.1"/><path d="M838.0495,257.42875S814.42,266.88053,814.42,286.96556s1.18147,46.66815-2.95368,55.5292-7.67957,11.81472-5.31663,18.90355,6.4981,5.90737,0,11.224-5.90736-3.54442-6.49809,5.31663,5.90736,10.04251,0,14.17766-21.26651,20.67577-14.76841,25.99239,23.62945,22.448,29.53681,15.94988,8.861-23.03871,17.13135-21.85724,9.45178,1.77221,8.2703-4.13515-6.49809-5.90736.59074-7.67957,10.04251,2.36294,7.67957-3.54442-4.13515-8.2703.59074-14.7684,7.08883-8.27031,6.49809-14.7684,12.9962-64.981,12.9962-64.981S872.31219,252.70286,838.0495,257.42875Z" transform="translate(-69.5 -78.57247)" opacity="0.1"/><path d="M841.00318,255.65654s-23.62945,9.45178-23.62945,29.53681,1.18147,46.66816-2.95368,55.5292-7.67957,11.81472-5.31663,18.90356,6.4981,5.90736,0,11.224-5.90736-3.54441-6.49809,5.31663,5.90736,10.04251,0,14.17767-21.26651,20.67576-14.76841,25.99239,23.62945,22.448,29.53681,15.94987,8.861-23.03871,17.13135-21.85724,9.45178,1.77221,8.2703-4.13515-6.49809-5.90736.59074-7.67957,10.04251,2.363,7.67957-3.54442-4.13515-8.2703.59074-14.7684,7.08883-8.27031,6.49809-14.7684,12.9962-64.981,12.9962-64.981S875.26587,250.93065,841.00318,255.65654Z" transform="translate(-69.5 -78.57247)" fill="#2f2e41"/><path d="M964.5,663.78694c0,51.68416,32.42393,93.50633,72.49367,93.50633" transform="translate(-69.5 -78.57247)" fill="#2f2e41"/><path d="M1036.99367,757.29327c0-52.26489,36.18322-94.557,80.89874-94.557" transform="translate(-69.5 -78.57247)" fill="#961a1a"/><path d="M990.76582,668.47219c0,49.09446,20.67613,88.82108,46.22785,88.82108" transform="translate(-69.5 -78.57247)" fill="#961a1a"/><path d="M1036.99367,757.29327c0-66.78291,41.82217-120.82279,93.50633-120.82279" transform="translate(-69.5 -78.57247)" fill="#2f2e41"/><path d="M1021.74287,757.9525s10.2808-.31664,13.37917-2.523,15.81445-4.84077,16.58308-1.30233,15.45013,17.59858,3.84316,17.6922-26.96943-1.808-30.06184-3.69167S1021.74287,757.9525,1021.74287,757.9525Z" transform="translate(-69.5 -78.57247)" fill="#a8a8a8"/><path d="M1055.75542,770.58768c-11.607.09365-26.96942-1.808-30.06184-3.69167-2.355-1.43454-3.29349-6.582-3.60749-8.9569-.21746.00935-.34322.01338-.34322.01338s.65117,8.29153,3.74358,10.17525,18.45487,3.78532,30.06184,3.69167c3.35047-.027,4.50778-1.21907,4.44423-2.9846C1059.52707,769.9015,1058.24922,770.56757,1055.75542,770.58768Z" transform="translate(-69.5 -78.57247)" opacity="0.2"/></svg>
                </div>
            </div>
            <div class="offset-md-1 col-md-5 d-flex align-items-center col-12 mx-auto px-xs-4">
                <div>
                    <h3 class="font-weight-bold mb-4">About me</h3>
                    <P class = "my-blog">
                        I'm <b class ="" > Ahmed Mera</b>, i'm <?= date("Y",time()) - 1998 ?> years old. 
                        I'm an ambitious person, who likes to work, learns quickly and also flexible. I'm well organized and good at time management.
                        <b> I learned several programming languages: MySQL, PHP, GIT, HTML, CSS, Javascript (Dom, Ajax, Jquery), C, C ++ and Bootsrap.
                        I'm able to use linux and some Windows shell commands.
                        I can create websites. 
                        </b>
                        <b> I have a driving license, category B. </b>
                    </P>
                    <div class = "container mx-auto social-media-blog pl-0 ">
                        <a href="https://www.facebook.com/abo.mera.127" target="_blank"><span><i class="fab fa-facebook-f"></i></span></a>

                        <a href="https://www.instagram.com/ahmedmera33/" target="_blank"><span><i class="fab fa-instagram"></i></span></a>
                        
                        <a href="https://www.youtube.com/channel/UCJT1xJ9a60EqMjlV2iruuZg?view_as=subscriber" target="_blank"><span><i class="fab fa-youtube"></i></span></a>
                        
                        <a href="https://api.whatsapp.com/send?phone=+393428105456"  target="_blank"><span> <i class="fab fa-whatsapp"></i></span></a>   
                        
                        <a href="https://twitter.com/ahmedmera81136" target="_blank"><span><i class="fab fa-twitter"></i></span></a>
                        
                        <a href="skype:ahmedmera9?call" target="_blank"><span><i class="fab fa-skype"></i></span></a>
                        
                        <a href="https://www.linkedin.com/in/ahmed-mera-096334186/" target="_blank"><span><i class="fab fa-linkedin-in"></i></span></a>
                        
                        <a href="https://github.com/ahmed-mera" target="_blank"><span> <i class="fab fa-github"></i></span></a>  
                        
                        <a href="https://gitlab.com/ahmed-mera" target="_blank"><span> <i class="fab fa-gitlab"></i></span></a> 

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog end -->
    <!-- counter start -->
    <section class="tutorials m-0 mx-auto px-0 " id="tuto">
        <!--Section: Content-->
        <div class="container-fluid white-text pt-2 pb-5 ">
    
            <h3 class="text-center font-weight-bold h1 mb-5 pb-2 pt-3">Counter</h3>

            <div class="row d-flex justify-content-center">
                <!--**********************************************************************************************************  -->
                <div class="col-md-3 mb-4">
                    <div class="row">
                        <div class="col-6 pr-0">
                            <h4 class="display-4 text-right mb-0 count-up project counter" data-from="0"  data-time="4000">42</h4>
                        </div>

                        <div class="col-6">
                            <p class="text-uppercase font-weight-normal mb-1">Projects</p>
                            <p class="mb-0"><i class="fas fa-briefcase fa-2x mb-0"></i></p>
                        </div>
                    </div>
                </div>
                <!--**********************************************************************************************************  -->

                <!--**********************************************************************************************************  -->
                <div class="col-md-3 mb-4">
                    <div class="row">
                        <div class="col-6 pr-0">
                            <h4 class="display-4 text-right mb-0 count1 counter" data-from="0" 
                            data-to="<?= getValue ('./page3/viewer.txt') ? getValue ('./page3/viewer.txt') : 100 ; ?>" data-time="4000">
                                <?= getValue ('./page3/viewer.txt') ? getValue ('./page3/viewer.txt') : 100 ; ?>
                            </h4>
                        </div>

                        <div class="col-6">
                            <p class="text-uppercase font-weight-normal mb-1">site view</p>
                            <p class="mb-0"><i class="far fa-eye fa-2x mb-0"></i></p>
                        </div>
                    </div>
                </div>
                <!--**********************************************************************************************************  -->


                <!--**********************************************************************************************************  -->
                <div class="col-md-3 mb-4">
                    <div class="row">
                        <div class="col-6 pr-0">
                            <h4 class="display-4 text-right mb-0 counter CV-D " data-from="0" 
                            data-to="<?= getValue ('./page3/cv/download_cv.txt') ? getValue ('./page3/cv/download_cv.txt') : 0 ; ?>" data-time="2000">
                                <?= getValue ('./page3/cv/download_cv.txt') ? getValue ('./page3/cv/download_cv.txt') : 0 ;  ?>
                            </h4>
                        </div>

                        <div class="col-6">
                            <p class="text-uppercase font-weight-normal mb-1">CV downloaded</p>
                            <p class="mb-0"><i class="fas fa-file-download fa-2x mb-0"></i></p>
                        </div>
                    </div>
                </div>
                <!--**********************************************************************************************************  -->
                
                <!--**********************************************************************************************************  -->
                <div class="col-md-3 mb-4">
                    <div class="row">
                        <div class="col-6 pr-0">
                            <h4 class="display-4 text-right mb-0 counter CV-V" data-from="0" 
                            data-to="<?= getValue ('./page3/cv/view_cv.txt') ? getValue ('./page3/cv/view_cv.txt'): 0 ; ?>" data-time="2000">
                                <?= getValue ('./page3/cv/view_cv.txt') ? getValue ('./page3/cv/view_cv.txt'): 0 ; ?>
                            </h4>
                        </div>

                        <div class="col-6">
                            <p class="text-uppercase font-weight-normal mb-1">CV displayed</p>
                            <p class="mb-0"><i class="fas fa-tv fa-2x mb-0"></i></p>
                        </div>
                    </div>
                </div>
                <!--**********************************************************************************************************  -->
                
            </div>
        </div>
        <!--Section: Content-->
    </section>
    <!-- counter end -->
    <!-- contact start -->
    <section class="contact" id="contact">
        <div class="container-fluid feat">
            <span class="letter">C</span>
            <h6 class="phrase lead text-uppercase">if You have a suggestion, an idea, so don't be shy to say it? </h6>
            <div class="container cont-contact ">
                <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                    <div class="form-row">
                        <div class="form-group offset-md-1 col-md-3">
                            <input type="text" class="form-control" id = 'fullname' name = 'fullName' placeholder="Yor Full Name"  required>
                            <div class="invalid-feedback"> <strong> Full Name </strong> must be more than <strong>6 characters</strong></div>
                        </div>
                        <div class="form-group col-md-3">
                            <input type="email" class="form-control" id = 'email' name = 'email' placeholder="Your E-mail"  required>
                            <div class="invalid-feedback"> <strong>E-mail</strong> must be  <strong>valid</strong></div>
                        </div>
                        <div class="form-group col-md-3 ">
                            <input type="text" class="form-control" id = 'titMess' name="titMess" placeholder="Title Message"  required>
                            <div class="invalid-feedback"> <strong> Title Message </strong> must be more than <strong>5 characters</strong></div>
                        </div>
                        <div class="col-md-11 col-12">
                            <textarea class="form-control" name="mess" id = 'mess' rows="7" cols="7" maxlength="500" placeholder="Your Message"  required></textarea>
                            <div class="invalid-feedback"> <strong> The Message </strong> must be more than <strong>10 characters</strong></div>
                            
                        </div>
                        <button type="submit" class="btn btn-danger float-right mt-3 offset-md-9 rounded col-md-2 col-12 send">
                            send message
                        </button>
                        <div class="col-12">
                        <div class="sk-circle">
                            <div class="sk-circle1 sk-child"></div>
                            <div class="sk-circle2 sk-child"></div>
                            <div class="sk-circle3 sk-child"></div>
                            <div class="sk-circle4 sk-child"></div>
                            <div class="sk-circle5 sk-child"></div>
                            <div class="sk-circle6 sk-child"></div>
                            <div class="sk-circle7 sk-child"></div>
                            <div class="sk-circle8 sk-child"></div>
                            <div class="sk-circle9 sk-child"></div>
                            <div class="sk-circle10 sk-child"></div>
                            <div class="sk-circle11 sk-child"></div>
                            <div class="sk-circle12 sk-child"></div>
                        </div>
                        </div>
                        <div class="mes text-center lead col-12"></div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- contact end -->
    <!-- scroll to top start -->
    <div class="top"><i class="fas fa-chevron-circle-up"></i></div>
    <!-- scroll to top end -->
    <!-- loading start -->
    <div class="loading">
        <div class="spinner">
            <div class="cube1"></div>
            <div class="cube2"></div>
        </div>
    </div>
    <!-- loading end -->
    <!-- footer start -->
    <footer class="footer">
        <div class="container">
            <!-- <div class="row"> -->
                <div class="float-left">
            <p class="lead ">
                Copyright &copy; <?= date("Y",time())?> all rights reserved
            </p>
            </div>
            <div class="float-right">
            <p class="lead">
            design : Ahmed Mera
        </p>
        </div>
        <!-- </div> -->
        </div>
    </footer>
    <!-- footer end -->

    <?php
        if (!isset($_COOKIE['viewer'])) {
            setcookie('viewer' , getValue ('./page3/viewer.txt'), time() + 2592000, '/' , FALSE, FALSE);
            setValue ( getValue ('./page3/viewer.txt') + 1, './page3/viewer.txt');
            ?>
            <div class="cookie">
            <p class="lead text-uppercase">
                <dfn>You are the person number <strong class="cookie-number"> <?= getValue ('./page3/viewer.txt') ?></strong> who saw my site :) </dfn> <br />
                This web site use the cookie for performance the web site for <a target="_blank" href="page3/php/cookie-policy.pdf"> more information click here</a>
            </p>
            <button type="button" class="accept-cookie btn btn-danger btn-block mx-auto"> Accept Cookies </button>
            </div>
    <?php } ?>

    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/js/mdb.min.js"></script>
    <!-- alert sweet 2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <!-- counterUp -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <!-- my file js -->
    <script src = 'page3/js/main.js'></script>
</body>
</html>
<!-- for getting speed site -->
<?php ob_end_flush(); ?>