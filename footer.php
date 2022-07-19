<?php



error_reporting(0);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

$output = '';

if (isset($_POST['submit'])) {
    $name = $_POST['firstName'] . " " . $_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $checked = $_POST['newsletter'];
    $contact = $_POST['contact'];
    $fileport = $_FILES['formFile']['tmp_name'];
    $filename = $_FILES['formFile']['name'];

    if ($checked == true) {
        $newsletter = "Subscribed";
    } elseif ($checked == false) {
        $newsletter = "Unsubscribed";
    }

    if ($contact == "1") {
        $how = "Email";
    } elseif ($contact == "2") {
        $how = "Phone";
    } elseif ($contact == "3") {
        $how = "Message";
    }

    try {
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host = 'in-v3.mailjet.com';
        $mail->SMTPAuth = true;

        $mail->Username = '844eac4244e53623889a79f4fb8b1fad';

        $mail->Password = '6ff1837375b3673e6b1fa596d2212597';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;


        $mail->setFrom('adndavid8@gmail.com');

        $mail->addAddress('toxteg@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = 'Form Submission';
        $mail->Body = "<h3>Name : $name <br>Email : $email <br>Message : $message<br>Newsletter: $newsletter<br>Contact method: $how </h3>";
        $mail->addAttachment($fileport, $filename);

        $result = $mail->send();

        // var_dump(stream_resolve_include_path("Thankyou.php"));
        // echo '<pre>';
        // var_dump($result);
        // exit();
        $output = '<div class="alert alert-success">
                  <h5>Thank you for contacting us! Well get back to you soon!</h5>
                </div>';
    } catch (Exception $e) {
        $output = '<div class="alert alert-danger">
                  <h5>' . $e->getMessage() . '</h5>
                </div>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <!-- <script src="https://kit.fontawesome.com/d4926dda45.js" crossorigin="anonymous"></script> -->
    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" /> -->
    <link rel="stylesheet" href="styleform.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="swiper-bundle.min.css">
    <link rel="stylesheet" href="aos.css">
    <script src="d4926dda45.js"></script>
    <title>Document</title>
</head>

<body>

    <footer class="footer text-center text-lg-start text-muted">
        <!-- Section: Social media -->
        <section class="danu d-flex justify-content-center p-sm-4">
            <!-- Left -->
            <div class="blbat container-fluid mt-5" data-aos="fade-up">
                <div class="row justify-content-space-around pt-0 text-light">

                    <div class="col-lg-4 justify-content-center" role="group" aria-label="Basic example" onclick="location.href='tel:800-311-7340';">
                        <p class="pi"><img class="pr-5" src="img/Call.png">Call 800-311-7340</p>
                    </div>
                    <div class="col-lg-4 justify-content-center" role="group" aria-label="Basic example" onclick="location.href='index.php';">
                        <p class="pi"><img class="pr-5" src="img/Get Started.png">Get started</p>
                    </div>
                    <div class="col-lg-4 justify-content-center" role="group" aria-label="Basic example" onclick="location.href='#';">
                        <p class="pi"><img class="pr-5" src="img/Live Chat.png">Live Chat</p>
                    </div>
                </div>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="deabajo">
            <div class="container mt-5 mb-5 justify-content-center">
                <!-- Grid row -->
                <div class="row mt-3 justify-content-around align-self-center">
                    <!-- Grid column -->
                    <div class="col-lg col-xl mr-lg-5 px-1">
                        <!-- Links -->
                        <img class="img-fluid pb-3" src="img/Logofoot.png" alt="logo">
                        <p class="mb-1">
                            <img class="img-fluid pb-3 px-2 bg-light" src="img/adrianarea.png" alt="logo">
                        </p>
                        <p class="justify-content-center align-items-center">
                            <img id="efeuno" class="efe img-fluid" src="img/monroefoot.png" alt="logo">
                            <img id="efedos" class="efe img-fluid" src="img/chamberfoot.png" alt="logo">
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg col-xl mt-4">
                        <!-- Links -->
                        <div>
                            <h6 class="titfoot text-lg-left text-white fw-bold mb-4">
                                Residential
                            </h6>
                            <p class="elemsfoot text-lg-left text-center">
                                <a href="#!" class="text-lg-left text-reset text-muted">Bundles</a>
                                <br>
                                <a href="#!" class="text-lg-left text-reset text-muted">Internet</a>
                                <br>
                                <a href="#!" class="text-lg-left text-reset text-muted">TV</a>
                                <br>
                                <a href="#!" class="text-lg-left text-reset text-muted">Phone</a>
                                <br>
                                <a href="#!" class="text-lg-left text-reset text-muted">Rural Internet</a>
                                <br>
                            </p>
                        </div>

                        <div>
                            <h6 class="titfoot text-lg-left text-white fw-bold">
                                Contact
                            </h6>
                            <p class="elemsfoot text-lg-left">
                                <a href="#!" class="text-lg-left text-reset text-muted">Custommer Service</a>
                                <br>
                                <a href="#!" class="text-lg-left text-reset text-muted">Advertise with us</a>
                                <br>
                            </p>
                        </div>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg col-xl mt-4">
                        <!-- Links -->
                        <h6 class="titfoot text-lg-left tex-center text-white fw-bold mb-4">
                            Business
                        </h6>
                        <p class="elemsfoot text-lg-left">
                            <a href="#!" class="text-lg-left text-reset text-muted">SMB Solutions</a>
                            <br>
                            <a href="#!" class="text-lg-left text-reset text-muted">Large-to-enterprise Solutions</a>
                            <br>
                            <a href="#!" class="text-lg-left text-reset text-muted">Business Internet</a>
                            <br>
                            <a href="#!" class="text-lg-left text-reset text-muted">Business TV</a>
                            <br>
                            <a href="#!" class="text-lg-left text-reset text-muted">Business Phone</a>
                            <br>
                            <a href="#!" class="text-lg-left text-reset text-muted">Managed IT</a>
                            <br>
                            <a href="#!" class="text-lg-left text-reset text-muted">Phone systems</a>
                            <br>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg col-xl mt-4">
                        <!-- Links -->
                        <div>
                            <h6 class="titfoot text-lg-left text-white fw-bold mb-4">
                                Support
                            </h6>
                            <p class="elemsfoot text-lg-left">
                                <a href="#!" class="text-lg-left text-reset text-muted">Help Center</a>
                                <br>
                                <a href="#!" class="text-lg-left text-reset text-muted">Availability</a>
                                <br>
                                <a href="#!" class="text-lg-left text-reset text-muted">Service Outages</a>
                                <br>
                            </p>
                        </div>

                        <div>
                            <h6 class="titfoot text-lg-left text-white fw-bold">
                                Corporate
                            </h6>
                            <p class="elemsfoot text-lg-left">
                                <a href="#!" class="text-lg-left text-reset text-muted">Company</a>
                                <br>
                                <a href="#!" class="text-lg-left text-reset text-muted">Careers</a>
                                <br>
                                <a href="#!" class="text-lg-left text-reset text-muted">Policy Center</a>
                                <br>
                                <a href="#!" class="text-lg-left text-reset text-muted">News (Blog)</a>
                                <br>
                                <a href="#!" class="text-lg-left text-reset text-muted">Management Team</a>
                                <br>
                                <a href="#!" class="text-lg-left text-reset text-muted">Board of Directors</a>
                                <br>
                            </p>
                        </div>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg mt-4">
                        <!-- Links -->
                        <h6 class="titfoot text-lg-left text-white fw-bold mb-4 px-1">
                            Locations
                        </h6>
                        <p class="elemsfoot text-lg-left">
                            <a href="#!" class="text-lg-left text-reset text-muted">Adrian</a>
                            <br>
                            <a href="#!" class="text-lg-left text-reset text-muted">Blissfield</a>
                            <br>
                            <a href="#!" class="text-lg-left text-reset text-muted">Dundee</a>
                            <br>
                            <a href="#!" class="text-lg-left text-reset text-muted">Petersburg</a>
                            <br>
                            <a href="#!" class="text-lg-left text-reset text-muted">Tecumseh</a>
                            <br>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg col-xl mt-4">
                        <!-- Links -->
                        <a href="#">
                            <h6 class="titfoot text-lg-left text-center text-white fw-bold mb-4">
                                Get Started
                            </h6>
                        </a>
                        <h6 class="titfoot text-lg-left text-center text-white fw-bold mb-4">
                            Service Area
                        </h6>
                        <p class="text-lg-left">
                            <!-- <a href="#"> -->
                            <img class="img-fluid" src="img/YT.png" alt="logo" onclick="location.href='#';">
                            <!-- </a> -->
                            <!-- <a class="social" href="#"> -->
                            <img class="img-fluid" src="img/in.png" alt="logo" onclick="location.href='#';">
                            <!-- </a> -->
                            <!-- <a class="social" href="#"> -->
                            <img class="img-fluid" src="img/Twitter.png" alt="logo" onclick="location.href='#';">
                            <!-- </a> -->
                            <!-- <a class="social" href="#"> -->
                            <img class="img-fluid" src="img/FB.png" alt="logo" onclick="location.href='#';">
                            <!-- </a> -->
                        </p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="copy text-center border-top border-1 border-dark text-white m-auto">
            © 2019 D & P Communications. All rights reserved.
        </div>
        <!-- Copyright -->
    </footer>
    <!--end of footer-->

    <!-- <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script> -->

    <script src="jquery-3.2.1.slim.min.js"></script>
    <script src="popper.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="swiper.js"></script>
    <script type="text/javascript" src="main.js"></script>
    <script src="aos.js"></script>
    <script src="smtp.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>