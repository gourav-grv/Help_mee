<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <!-- <link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.css"> -->
    <style>
    body{
    background-color: white;
    font-family: 'Baloo Bhai 2', cursive;
}
    </style>

    <title>Contact</title>
</head>
<?php
  require 'navbar.php';
  
?>
<body>


    <section class="breadcrumps-section">
        <div class="container-fluid p-1 p-sm-3">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center text-dark">CONTACT US</h1>

                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container ">
            <div class="row ">
                <div class="col-12">
                    <p><b>We are always here to help .If your requirement/queries about our services; fill up the
                            contact form below and we'll do our best to reply within 24 hours
                            Alternatetively
                            simply pickup the phone and give us call . <b>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="form-section">
        <div class="container ">
            <div class="row">
                <div class="col-md-6">
                    <form action="contactprocess.php" method="post">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" placeholder="Full Name" name="name" required>
                            </div>

                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" placeholder="Email ID" name="email" required>
                            </div>

                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-6 ">
                                <input type="phone Number" class="form-control" placeholder="Phone Number" name="phone"
                                    required>
                            </div>

                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" placeholder="Subject" name="subject" required>
                            </div>

                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <textarea id="" rows="7" class="form-control" name="message"
                                    placeholder="Type Your Message Here..." required></textarea>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12 text-center">
                                <button type="submit" class="btn btn-primary" name="submit"><i
                                        class="fas fa-paper-plane"></i>Send Message </button>
                            </div>
                        </div>

                    </form>

                </div>

                <div class="col-md-6 address">
                    <h5>Call Us / Whatsapp </h5>

                    <p><a href="tel:7247020941" class="p-1"><i class="fas fa-phone"></i> +7247020941</a><br></p>
                    <h5>Email / Website </h5>

                    <a href="mailto:+grvshrivastava456@gmail.com" class="p-1"><i class="fas fa-envelope"></i>
                        grvshrivastava456@gmail.com</a><br>

                    <a href="https:" class="p-1"><i class="fas fa-globe"></i> www.helpme.com</a><br><br>

                    <h5>Working Hours</h5>
                    <p>
                        Mon - Sat :8am-10pm(IST)
                    </p>




                </div>


            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117350.24977340168!2d77.33585147489323!3d23.199551984967442!2m3!1f0!2f0!3f0!3m2!
        1i1024!2i768!4f13.1!3m3!1m2!1s0x397c428f8fd68fbd%3A0x2155716d572d4f8!2sBhopal%2C%20Madhya%20Pradesh!5e0!3m2!1sen!2sin!4v1603101619726!5m2!1sen
        !2sin" frameborder="0" width="100%" height="300px" style="border:0"></iframe>
        </div>
    </section>



    <script src="bootstrap/js/jquery-3.5.1.slim.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>