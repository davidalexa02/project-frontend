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
    <!--header-->

    <nav class="navbar navbar-expand-lg bg-black">
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
                        <a class="navo nav-link" href="index.php">Get Started</a>
                    </li>
                    <li class="iteme nav-item">
                        <a id="boldu" class="navo nav-link fw-bolder" href="tel:800-311-7340">Call Us
                            800-211-7340</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--end of header-->

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