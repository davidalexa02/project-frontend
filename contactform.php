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
        $mail->Body = "<p>Name : $name <br>Email : $email <br>Message : $message<br>Newsletter: $newsletter<br>Contact method: $how </p>";
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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/swipper/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/aos/aos.css">
    <script src="assets/fontawesome/d4926dda45.js"></script>
    <link rel="icon" type="image/x-icon" href="img/Logo.png">
    <title>D & P Communications</title>
</head>

<body>
    <!--header-->

    <?php include 'header.php'; ?>

    <!--end of header-->

    <!--start of contact form-->

    <div class="firstofall head pb-5">
        <div class="primer container py-5">

            <div class="card" data-aos="fade-up">
                <div class="card-body">
                    <h1 class="font-weight-light text-center py-4">Contact Us</h1>
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="row pt-3 justify-content-center">
                                <div class="col-lg-1 offset-1 col-md-2 col-sm-2 col-2 mx-auto">
                                    <span><i class="fa-solid fa-phone"></i></span>
                                </div>
                                <div class="col-lg-10 col-md-9 col-sm-9 col-9">
                                    <h3 class="font-weight-light">Give Us A Ring</h3>
                                    <p><a class="text-danger" href="tel:800-311-7340">800-311-7340</a> <br>
                                        Mon-Fri, 8:00-22:00
                                    </p>
                                </div>
                            </div>
                            <div class="row pt-3 justify-content-center">
                                <div class="col-lg-1 offset-1 col-md-2 col-sm-2 col-2 mx-auto">
                                    <span><i class="fa-solid fa-envelope"></i></span>
                                </div>
                                <div class="col-lg-10 col-md-9 col-sm-9 col-9">
                                    <h3 class="font-weight-light">Email Us</h3>
                                    <p><a class="text-danger" href="mailto:webmaster@example.com">d&p@comms.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            <form enctype="multipart/form-data" action="#" method="POST">
                                <div class="form-row">
                                    <div class="form-group">
                                        <?= $output; ?>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-lg-6 col-md-12 col-sm-12 col-12">
                                        <label for="firstName">First name</label>
                                        <input type="text" id="firstName" name="firstName" class="form-control" placeholder="First name" required>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-12 col-sm-12 col-12">
                                        <label for="lastName">Last name</label>
                                        <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Last name" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-12">
                                        <label for="email">Email</label>
                                        <input type="Email" id="email" name="email" class="form-control" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-12">
                                        <label for="phone">Phone number</label>
                                        <input type="tel" id="phone" name="phone" class="form-control" placeholder="Phone number" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-12">
                                        <label for="message">Message</label>
                                        <textarea name="message" id="message" rows="5" class="form-control" placeholder="Write Your Message" required></textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="newsletter" name="newsletter">
                                            <label class="form-check-label" for="newsletter">
                                                Do you want to subscribe to our newsletter?
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-12">
                                        <label for="contact">How do you want to be contacted?</label>
                                        <select id="contact" name="contact" class="form-select form-control">
                                            <option value="1">Email</option>
                                            <option value="2">Phone</option>
                                            <option value="3">Message</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-12">
                                        <label for="formFile" class="form-label">Please attach your CV / resume in PDF format</label>
                                        <input type="file" name="formFile" id="formFile" onchange="return fileValidation()" accept="application/pdf,application/vnd.ms-excel" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-12">
                                        <button type="submit" name="submit" value="Send" class="btn btn-danger btn-block" id="sendBtn">Send message!</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!--end of contact form-->

    <!--footer-->

    <?php include 'footer.php'; ?>


    <!--end of footer-->

    <!-- <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script> -->

    <script src="assets/bootstrap/jquery-3.2.1.slim.min.js"></script>
    <script src="assets/bootstrap/popper.min.js"></script>
    <script src="assets/bootstrap/bootstrap.min.js"></script>
    <script src="assets/swipper/swiper.js"></script>
    <script type="text/javascript" src="main.js"></script>
    <script src="assets/aos/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>