<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <!-- <script src="https://kit.fontawesome.com/d4926dda45.js" crossorigin="anonymous"></script> -->
    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" /> -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="swiper-bundle.min.css">
    <link rel="stylesheet" href="aos.css">
    <script src="d4926dda45.js"></script>
    <title>Document</title>
</head>

<body>

    <button onclick="topFunction()" data-aos="fade-up" id="myBtn" title="Go to top"><i class="fa-solid fa-arrow-up"></i></button>

    <!--header-->

    <?php include 'header.php';?>

    <!-- <nav class="navbar navbar-expand-lg bg-black">
        <div class="cont1 container-fluid">
            <a class="navbar-brand"><img src="img/Logo.png" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbarNavDropdown navbar-collapse collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="iteme nav-item dropdown">
                        <a class="navu nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Locations
                            <i class="fa-solid fa-angle-down"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="iteme nav-item dropdown">
                        <a class="navu nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Support
                            <i class="fa-solid fa-angle-down"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="iteme nav-item dropdown">
                        <a class="navu nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Corporate
                            <i class="fa-solid fa-angle-down"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="iteme nav-item dropdown">
                        <a class="navu nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Contact
                            <i class="fa-solid fa-angle-down"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="contactform.php">Email</a>
                            <a class="dropdown-item" href="tel:800-311-7340">Phone</a>
                            <a class="dropdown-item" href="#">Live Chat</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <nav class="navbar2 navbar-expand-lg">
        <div class="cont2 container-fluid">
            <div class="navbarNavDropdown navbar-collapse collapse w-100 justify-content-end mx-auto">
                <ul class="navbar-nav">
                    <li class="iteme nav-item dropdown position-relative">
                        <a class="navo nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Residential
                            <i class="fa-solid fa-angle-down"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="iteme nav-item dropdown">
                        <a class="navo nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Business
                            <i class="fa-solid fa-angle-down"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="iteme nav-item">
                        <a class="navo nav-link" href="#">Service Area</a>
                    </li>
                    <li class="iteme nav-item">
                        <a class="navo nav-link" href="#">Success Stories</a>
                    </li>
                    <li class="iteme nav-item">
                        <a class="navo nav-link" href="#">Get Started</a>
                    </li>
                    <li class="iteme nav-item">
                        <a id="boldu" class="navo nav-link fw-bolder" href="tel:800-311-7340">Call Us
                            800-211-7340</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> -->

    <!--end of header-->
    <div class="first">
        <div class="primer container">

            <div class="row text-center pt-5">
                <div class="col-md-12">
                    <h6 data-aos="fade-up" id="welcome">WELCOME TO D & P COMMUNICATIONS</h6>
                </div>
            </div>

            <div class="row pb-lg-5 justify-content-lg-center text-lg-left text-center align-self-center mb-5">
                <div id="d1" class="col-lg-6 align-self-center mx-0">
                    <b data-aos="fade-up" class="izquierdo">Connecting You to What Matters</b>
                </div>
                <div id="derecho" class="col-lg-6 mx-0 align-self-center p-0">
                    <p data-aos="fade-up">D & P Communications serves residents and
                        businesses with a full suite of communication & techonology services, including high-speed
                        Internet, video entertainment, phone systems, and network management.</p>
                </div>
            </div>

        </div>

        <section class="danu d-flex justify-content-center px-sm-4">
            <div class="blbat container-fluid mt-sm-2">
                <div class="row justify-content-space-around pt-0 text-light" data-aos="fade-up">

                    <div class="col-lg-4 justify-content-center align-items-center" role="group" aria-label="Basic example" onclick="location.href='tel:800-311-7340';">
                        <p class="pi"><img src="img/Call.png">Call 800-311-7340</p>
                    </div>
                    <div class="col-lg-4 justify-content-center align-items-center" role="group" aria-label="Basic example" onclick="location.href='index.php';">
                        <p class="pi"><img src="img/Get Started.png">Get started</p>
                    </div>
                    <div class="col-lg-4 justify-content-center align-items-center" role="group" aria-label="Basic example" onclick="location.href='#';">
                        <p class="pi"><img src="img/Live Chat.png">Live Chat</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="second overflow-auto">

        <div class="sec container overflow-auto">
            <div class="row text-md-left text-center">
                <div class="col-md-7">
                    <h6 class="redtitle" data-aos="fade-up">FIBER OPTICS</h6>
                </div>
            </div>
            <div class="row text-md-left text-center py-4">
                <div class="col-md-7">
                    <b class="mid1" data-aos="fade-up">Enjoy the Most Advanced Technology Available with Fiber Optics</b>
                </div>
            </div>
            <div class="row text-md-left text-center overflow-auto">
                <div class="col-md-9">
                    <p id="yo" class="para1" data-aos="fade-up">We are continuously expanding and maintaining
                        thousands of miles of fiber optic cabelbring woven together by a grid of dozens of points of
                        presence and data centers housing
                        smart carrier grade switches and routers, connecting the communities we serve to each other and
                        to people and places around the globe. We are connected to the Internet backbone at multiple
                        peering points in Chicago, Southfiels, and Toledo.</p>
                </div>
            </div>

            <img id="red" class="img-fluid float-right overflow-auto" src="img/imgseconddiv.png" alt="">
        </div>

        <section id="call-action">
            <div class="nope1 container-fluid justify-content-center">
                <div class="row text-md-left text-center overflow-auto position-relative mx-auto">
                    <div class="col-md">
                        <div class="maintxt justify-content-center">
                            <img src="img/Casa.png" class="img-responsive">
                            <div class="yapi1 container-fluid">
                                <div class="row">
                                    <div class="col-lg">
                                        <p>
                                        <h6 class="redtitle" data-aos="fade-up">HOMES SERVED</h6>
                                        </p>
                                        <p class="mid2" data-aos="fade-up"><b>Serving Over 50,000 Residential
                                                Users</b></p>
                                        <p class="para2" data-aos="fade-up">We are happy to serve over 9,000 homes
                                            and
                                            20,000 residents with Internet, video entertainment, and phone services.
                                            This includes residents
                                            in the towns of Lenawee and Western Monroe counties, as well as remote
                                            residences and farms
                                            throughout the area. We currently offer up to 500 Mbps Internet download
                                            speeds in the towns and
                                            up to 50 Mbps Internet download speeds in remote areas. For video
                                            entertainment, we offer many
                                            options for every budget and viewing style.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <div class="third" id="puntouno">

        <div id="localbus" class="localbus container-fluid text-center">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <h6 class="redtitle" data-aos="fade-up">LOCAL BUSINESS SERVED</h6>
                </div>
            </div>
            <div class="row py-4">
                <div class="col-md-6 mx-auto">
                    <b class="mid2" data-aos="fade-up">Serving Over 1,300 Businesses</b>
                </div>
            </div>
            <div class="resizedcols row text-center float-none mx-auto">
                <div class="col-md-7 mx-auto">
                    <p class="para2" data-aos="fade-up">We are proud to serve over 1,300 commercial entities in the
                        local area, including small-to-large businesses, hospital systems, K-12 school districts, higher
                        education, non-profits, manufacturing and municipalities including:</p>
                </div>
            </div>

            <div class="row mx-auto" data-aos="fade-up">
                <div class="col-md-11 justify-content-space-around mx-auto" style="filter:grayscale(1); opacity: 0.45;">
                    <div id="sw1" class="swiper justify-content-center py-5">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img class="prom img-fluid" src="img/Promedica.png" alt=""></div>
                            <div class="swiper-slide"><img class="prom img-fluid" src="img/Promedica.png" alt=""></div>
                            <div class="swiper-slide"><img class="prom img-fluid" src="img/Promedica.png" alt=""></div>
                            <div class="swiper-slide"><img class="prom img-fluid" src="img/Promedica.png" alt=""></div>
                            <div class="swiper-slide"><img class="prom img-fluid" src="img/Promedica.png" alt=""></div>
                            <div class="swiper-slide"><img class="prom img-fluid" src="img/Promedica.png" alt=""></div>
                            <div class="swiper-slide"><img class="prom img-fluid" src="img/Promedica.png" alt=""></div>
                            <div class="swiper-slide"><img class="prom img-fluid" src="img/Promedica.png" alt=""></div>
                            <div class="swiper-slide"><img class="prom img-fluid" src="img/Promedica.png" alt=""></div>
                            <div class="swiper-slide"><img class="prom img-fluid" src="img/Promedica.png" alt=""></div>
                        </div>
                    </div>
                    <div id="nextbut1" class="swiper-button-next"></div>
                    <div id="prevbut1" class="swiper-button-prev"></div>
                    <!-- Add Pagination -->
                </div>
            </div>

        </div>
    </div>

    <div class="third" id="puntodos">

        <div id="compar" class="container-fluid text-center mx-auto">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <h6 class="redtitle" data-aos="fade-up">COMMUNITY PARTNERS</h6>
                </div>
            </div>
            <div class="row py-4">
                <div class="col-md-6 mx-auto">
                    <b class="mid2" data-aos="fade-up">Connecting to Our Community</b>
                </div>
            </div>
            <div class="resizedcols row text-center float-none mx-auto">
                <div class="col-md-7 mx-auto">
                    <p class="para2" data-aos="fade-up">Our community partners are a key element of our brand. D & P Communications is honored to work with over 200 local organizations and associations,
                        including:</p>
                </div>
            </div>

            <div class="row mx-auto" data-aos="fade-up">
                <div class="col-md-11 justify-content-space-around align-self-center mx-auto">
                    <div id="sw2" class="swiper">
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper-slide"><img class="img-fluid mx-auto align-self-center" src="img/Goodwill_Industries_Logo.svg.png" alt=""></div>
                            <div class="swiper-slide"><img class="img-fluid mx-auto align-self-center" src="img/lenaweelogo2016.png" alt=""></div>
                            <div class="swiper-slide"><img class="img-fluid mx-auto align-self-center" src="img/1200px-The_Salvation_Army.svg.png" alt=""></div>
                            <div class="swiper-slide"><img class="img-fluid mx-auto align-self-center" src="img/CIS_Petersburg_4PMS.png" alt=""></div>
                            <div class="swiper-slide"><img class="img-fluid mx-auto align-self-center" src="img/MDA_logo_2019.png" alt=""></div>
                            <div class="swiper-slide"><img class="img-fluid mx-auto align-self-center" src="img/1200px-Habitat_for_humanity.svg.png" alt=""></div>
                            <div class="swiper-slide"><img class="img-fluid mx-auto align-self-center" src="img/6ff871a4873aa95265a8908df0081ece.png" alt=""></div>
                        </div>
                    </div>
                    <div id="nextbut2" class="swiper-button-next" style="filter:grayscale(1);"></div>
                    <div id="prevbut2" class="swiper-button-prev" style="filter:grayscale(1);"></div>
                    <!-- Add Pagination -->
                </div>
            </div>

        </div>
    </div>

    <div class="third" id="puntotres">

        <div id="fib" class="container-fluid text-center mx-auto px-3">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <h6 class="redtitle" data-aos="fade-up">FIBER OPTICS</h6>
                </div>
            </div>
            <div class="row py-4">
                <div class="col-md-5 mx-auto">
                    <b class="mid1" data-aos="fade-up">Bringing You a Faster, More Reliable Network with Fiber Optics</b>
                </div>
            </div>
            <div class="row text-center float-none">
                <div class="col-md-6 mx-auto">
                    <p class="para1" data-aos="fade-up">You deserve the highest levels of availability and
                        performance - and we're here to exceed your expectations. Welcome to D & P Communications.</p>
                </div>
            </div>

            <div class="dap container-fluid">
                <div class="row pt-5 justify-content-center">
                    <div id="forhome" class="col-md" data-aos="fade-up" onclick="location.href='#';">
                        <p class="for btn btn-light px-5">For Homes</p>
                    </div>
                    <div id="forbusiness" class="col-md" data-aos="fade-up" onclick="location.href='#';">
                        <p class="for btn btn-light px-5">For Businesses</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="third" id="puntocuatro">

        <div id="locallyinv" class="container text-center mx-auto pr-3 pl-3">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <h6 class="redtitle" data-aos="fade-up">LOCALLY INVESTED</h6>
                </div>
            </div>
            <div class="row py-4">
                <div class="col-md-6 mx-auto">
                    <b class="mid1" data-aos="fade-up">We're In Your Neighbourhood</b>
                </div>
            </div>
            <div class="resizedcols row text-center float-none mx-auto">
                <div class="col-md-6 mx-auto">
                    <p class="para1" data-aos="fade-up">You deserve the highest levels of availability and
                        performance - and we're here to exceed your expectations. Welcome to D & P Communications.</p>
                </div>
            </div>

            <!-- <div class="container text-center pt-3 mx-auto"> -->
            <div id="rou" class="row pt-5 justify-content-around">
                <div class="cities col-sm col-md col-lg col-xl px-0 justify-content-center m-1" onclick="location.href='#';" data-aos="fade-up">
                    <img src="img/adriancity.png" alt="">
                    <div class="loc">ADRIAN</div>
                </div>
                <div class="cities col-sm col-md col-lg col-xl px-0 justify-content-center m-1" onclick="location.href='#';" data-aos="fade-up">
                    <img src="img/blissfieldcity.png" alt="">
                    <div class="loc">BLISSFIELD</div>
                </div>
                <div class="cities col-sm col-md col-lg col-xl px-0 justify-content-center m-1" onclick="location.href='#';" data-aos="fade-up">
                    <img src="img/dundeecity.png" alt="">
                    <div class="loc">DUNDEE</div>
                </div>
                <div class="cities col-sm col-md col-lg col-xl px-0 justify-content-center m-1" onclick="location.href='#';" data-aos="fade-up">
                    <img src="img/petersburcity.png" alt="">
                    <div class="loc">PETERSBURG</div>
                </div>
                <div class="cities col-sm col-md col-lg col-xl px-0 justify-content-center m-1" onclick="location.href='#';" data-aos="fade-up">
                    <img src="img/tecumsehcity.png" alt="">
                    <div class="loc">TECUMSEH</div>
                </div>
            </div>
            <!-- </div> -->
        </div>
    </div>
    <div class="section-call">
        <div class="fourth">
            <div id="succst" class="container-fluid text-center pr-3 pl-3">
                <div class="row">
                    <div class="col-md-5 m-auto">
                        <h6 class="redtitle" data-aos="fade-up">SUCCESS STORIES</h6>
                    </div>
                </div>
                <div class="row py-4">
                    <div class="col-md-6 m-auto">
                        <b class="mid2" data-aos="fade-up">Find Out What People Are Saying About D & P Communications</b>
                    </div>
                </div>
                <div class="resizedcols row text-center float-none mx-auto">
                    <div class="col-md-7 mx-auto">
                        <p class="para2" data-aos="fade-up">Our mission is to serve you. It's all about our
                            community.
                            Find out what others are saying about their experiences with D & P Communications.</p>
                    </div>
                </div>
                <div class="row pt-5 justify-content-center">
                    <a type="button" id="read" class="for btn btn-light px-5" href="" data-aos="fade-up">Read testimonials</a>
                </div>
                <div id="succstrow" class="row row-cols-3 mt-5 justify-content-center mx-auto">
                    <div class="col-sm col-md col-lg col-xl mb-4">
                        <div class="card" data-aos="fade-up">
                            <img src="img/card1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">"I Can Use Multiple Devices without Interruption"</h5>
                                <h6 class="card-subtitle">Review from Lexi Murray</h6>
                                <p class="card-text">D & P Communications has been my service provider for several years
                                    following their buyout of TC3net. They have excellent customer service at their
                                    local
                                    service locations. They have great Internet service, which is reliable and with the
                                    new
                                    fiber optic lines installed and high DSL, I am able to work from home for my clients
                                    without interruptions and run multiple devices on my home Wi-Fi systems without lag
                                    time.
                                    <br>
                                    <br>
                                    The folks at D & P are knowleadgeable and very customer service orientated. I would
                                    recommend their services to anyone new to the area!
                                </p>
                            </div>
                        </div>
                        <div class="card" data-aos="fade-up">
                            <img src="img/card3.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">"Great Reliable Service"</h5>
                                <h6 class="card-subtitle">Review from Kevon Binder</h6>
                                <p class="card-text">We have D & P for our home in Blissfield. Great reliable service!
                                    Also
                                    have a business account in Tecumseh for symmetrical fiber, and it's been almost 100%
                                    without interruption. The one time we slowed speed for a couple hours, we were
                                    warned
                                    48hrs in advance. Great company!
                                </p>
                            </div>
                        </div>
                        <div class="card" data-aos="fade-up">
                            <img src="img/card1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">"I Can Use Multiple Devices without Interruption"</h5>
                                <h6 class="card-subtitle">Review from Lexi Murray</h6>
                                <p class="card-text">D & P Communications has been my service provider for several years
                                    following their buyout of TC3net. They have excellent customer service at their
                                    local
                                    service locations. They have great Internet service, which is reliable and with the
                                    new
                                    fiber optic lines installed and high DSL, I am able to work from home for my clients
                                    without interruptions and run multiple devices on my home Wi-Fi systems without lag
                                    time.
                                    <br>
                                    <br>
                                    The folks at D & P are knowleadgeable and very customer service orientated. I would
                                    recommend their services to anyone new to the area!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm col-md col-lg col-xl mb-4">
                        <div class="card" data-aos="fade-up">
                            <img src="img/card2.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">"Wish I'd Switched to D & P Sooner"</h5>
                                <h6 class="card-subtitle">Review from Robert S.</h6>
                                <p class="card-text">Fantastic! D&P advertised 110 MBPS download. I am getting - through
                                    my
                                    router 107 MBPS. Updload speed is 23 MBPS. Can't argue with that can you? Compare to
                                    Frontier DSL which was 3.5 MBPS download (they promised 10 I think) and 0.25 MBPS
                                    upload. Pathetic! They started out with at about 8.5 MBPS and then after a couple
                                    weeks
                                    I was lucky to hit 4 MBPS! This was after they begged for me to stay with them! Well
                                    finally I switched. I wish I would have done it sooner! D&P came out, installed the
                                    equipment quickly an efficiently. The installer was knowleadgeable and professional.
                                    They arrived around the time they said they would - a little earlier actually. I'm
                                    so
                                    happy! I'll update later if anything changes but, freak'n awesome so far...</p>
                            </div>
                        </div>
                        <div class="card" data-aos="fade-up">
                            <img src="img/card2.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">"Wish I'd Switched to D & P Sooner"</h5>
                                <h6 class="card-subtitle">Review from Robert S.</h6>
                                <p class="card-text">Fantastic! D&P advertised 110 MBPS download. I am getting - through
                                    my
                                    router 107 MBPS. Updload speed is 23 MBPS. Can't argue with that can you? Compare to
                                    Frontier DSL which was 3.5 MBPS download (they promised 10 I think) and 0.25 MBPS
                                    upload. Pathetic! They started out with at about 8.5 MBPS and then after a couple
                                    weeks
                                    I was lucky to hit 4 MBPS! This was after they begged for me to stay with them! Well
                                    finally I switched. I wish I would have done it sooner! D&P came out, installed the
                                    equipment quickly an efficiently. The installer was knowleadgeable and professional.
                                    They arrived around the time they said they would - a little earlier actually. I'm
                                    so
                                    happy! I'll update later if anything changes but, freak'n awesome so far...</p>
                            </div>
                        </div>
                        <div class="card" data-aos="fade-up">
                            <img src="img/card2.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">"Wish I'd Switched to D & P Sooner"</h5>
                                <h6 class="card-subtitle">Review from Robert S.</h6>
                                <p class="card-text">Fantastic! D&P advertised 110 MBPS download. I am getting - through
                                    my
                                    router 107 MBPS. Updload speed is 23 MBPS. Can't argue with that can you? Compare to
                                    Frontier DSL which was 3.5 MBPS download (they promised 10 I think) and 0.25 MBPS
                                    upload. Pathetic! They started out with at about 8.5 MBPS and then after a couple
                                    weeks
                                    I was lucky to hit 4 MBPS! This was after they begged for me to stay with them! Well
                                    finally I switched. I wish I would have done it sooner! D&P came out, installed the
                                    equipment quickly an efficiently. The installer was knowleadgeable and professional.
                                    They arrived around the time they said they would - a little earlier actually. I'm
                                    so
                                    happy! I'll update later if anything changes but, freak'n awesome so far...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm col-md col-lg col-xl mb-4">
                        <div class="card" data-aos="fade-up">
                            <img src="img/card3.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">"Great Reliable Service"</h5>
                                <h6 class="card-subtitle">Review from Kevon Binder</h6>
                                <p class="card-text">We have D & P for our home in Blissfield. Great reliable service!
                                    Also
                                    have a business account in Tecumseh for symmetrical fiber, and it's been almost 100%
                                    without interruption. The one time we slowed speed for a couple hours, we were
                                    warned
                                    48hrs in advance. Great company!</p>
                            </div>
                        </div>
                        <div class="card" data-aos="fade-up">
                            <img src="img/card1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">"I Can Use Multiple Devices without Interruption"</h5>
                                <h6 class="card-subtitle">Review from Lexi Murray</h6>
                                <p class="card-text">D & P Communications has been my service provider for several years
                                    following their buyout of TC3net. They have excellent customer service at their
                                    local
                                    service locations. They have great Internet service, which is reliable and with the
                                    new
                                    fiber optic lines installed and high DSL, I am able to work from home for my clients
                                    without interruptions and run multiple devices on my home Wi-Fi systems without lag
                                    time.
                                    <br>
                                    <br>
                                    The folks at D & P are knowleadgeable and very customer service orientated. I would
                                    recommend their services to anyone new to the area!
                                </p>
                            </div>
                        </div>
                        <div id="este" class="card" data-aos="fade-up">
                            <img src="img/card3.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">"Great Reliable Service"</h5>
                                <h6 class="card-subtitle">Review from Kevon Binder</h6>
                                <p class="card-text">We have D & P for our home in Blissfield. Great reliable service!
                                    Also
                                    have a business account in Tecumseh for symmetrical fiber, and it's been almost 100%
                                    without interruption. The one time we slowed speed for a couple hours, we were
                                    warned
                                    48hrs in advance. Great company!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="call-action">
        <div class="nope container-fluid justify-content-center" data-aos="fade-up">
            <div class="row text-md-left text-center overflow-auto position-relative">
                <div class="col-md">
                    <div class="maintxt justify-content-center">
                        <img src="img/cs.png" class="img-responsive">
                        <div class="yapi container-fluid">
                            <h3 class="mb-4 text-dark font-weight-bold" class="mid2">How May We Help You</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <p><a href="#">Check Availability</a></p>
                                    <p><a href="#">Service Outages</a></p>
                                    <p><a href="#">Get Started</a></p>
                                    <p><a href="#">Help Center</a></p>
                                </div>
                                <div class="col-md-6">
                                    <p><a href="#">News</a></p>
                                    <p><a href="#">Careers at D & P</a></p>
                                    <p><a href="#">Locations</a></p>
                                    <p><a href="#">Custommer Service</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--footer-->

    <?php include 'footer.php';?>

    
    <!--end of footer-->

    <!-- <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script> -->

    <script src="jquery-3.2.1.slim.min.js"></script>
    <script src="popper.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="swiper.js"></script>
    <script type="text/javascript" src="main.js"></script>
    <script src="aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>