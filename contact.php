<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RELAX-CONTACT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/69bbcb5fd8.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Merienda&family=Poppins:wght@400;500;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        .h-line {
            width: 150 px;
            margin: 0 auto;
            height: 1.7 px;
        }

        .box:hover {
            background: lightblue;
        }

        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            /* background: #fff; */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .swiper {
            margin-left: auto;
            margin-right: auto;
        }

        .column {
            flex-direction: column;
        }

        .custom-alert {
            position: fixed;
            top: 80px;
            right: 25px;
        }
    </style>
</head>

<body class="bg-light">
    <!-- nav bar -->
    <?php require 'inc/header_registered.php' ?>

    <div class="my-5 px-4">
        <h2 class="h-font fw-bold text-center">
            Contact Us
        </h2>

        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Indulge in Unparalleled Comfort and Serenity at Relax Hotel - Your Exclusive Escape Awaits, Where Every
            Moment is Tailored to Elevate Your Experience.
        </p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-5 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
                    <iframe class="w-100 rounded" height="320 px"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3726.064392424992 5!2d79.0237998752545!3d20.949929080679734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd4c0529518230f%3A0x45b76be0621cbb88!2sIndian%20Institute%20of%20Information%20Technology%2C%20Nagpur%20(IIITN)!5e0!3m2!1sen!2sin!4v1714379168212!5m2!1sen!2sin"
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    <h5>Address</h5>
                    <a href="https://maps.app.goo.gl/MUCLbW8gJ1aRyfx56 " target="_blank"
                        class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="fa-solid fa-location-dot" style="color: #000000;"></i>Indian Institute of Information
                        Technology, Nagpur
                    </a>
                    <h5 class="mt-4">
                        Call Us
                    </h5>
                    <a href="tel:+917056244709" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="fa-solid fa-phone" style="color: #000000;"></i>+917056244709</a><br>
                    <h5 class="mt-4">
                        Call Us
                    </h5>
                    <a href="mailto: bt23cse067@iiitn.ac.in"
                        class="d-inline-block mb-2 text-decoration-none text-dark"><i class="fa-solid fa-envelope"
                            style="color: #000000;"></i>bt23cse067@iiitn.ac.in</a><br>
                </div>
            </div>
            <div class="col-lg-6 col-md-5 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
                    <form method="POST">
                        <h3 class="h-font">
                            Send a message
                        </h3>
                        <div class="mt-3">
                            <label for="name" class="form-label" style="font-wieght:500;">Name</label>
                            <input type="text" required name="name" id="name" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label for="email" class="form-label" style="font-wieght:500;">Email</label>
                            <input type="email" required name="email" id="email" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label for="subject" class="form-label" style="font-wieght:500;">Subject</label>
                            <input type="text" required name="subject" id="subject" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label for="message" class="form-label" style="font-wieght:500;">Message</label>
                            <textarea id="message" required name="message" class="form-control shadow-none" rows="5"
                                style="resize:none;"></textarea>
                        </div>
                        <button type="submit" name="send" class="btn custom-bg text-white mt-3">SEND</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <?php
    function insert($query, $values, $types)
    {
        $dsn = "mysql:host=localhost;dbname=relax";
        $dbuser = "root";
        $dbpass = "";
        try {
            $pdo = new PDO($dsn, $dbuser, $dbpass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $pdo->prepare($query);
            $stmt->execute($values);
            return 1; // Return 1 for success
        } catch (PDOException $e) {
            // Handle database errors
            return 0; // Return 0 for failure
        }
    }

    function alert($type, $msg)
    {
        $bs_class = ($type == "success") ? "alert-success" : "alert-danger";
        echo <<<alert
        <div class="alert $bs_class alert-dismissible fade show custom-alert" role="alert">
            <strong class="me-3">$msg</strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
alert;
    }

    if (isset($_POST['send'])) {
        $q = "INSERT INTO `support` (`name`, `email`, `subject`, `message`) VALUES (?, ?, ?, ?)";
        $values = [$_POST['name'], $_POST['email'], $_POST['subject'], $_POST['message']];
        $res = insert($q, $values, 'ssss');
        if ($res == 1) {
            alert('success', 'Mail Sent!');
        } else {
            alert('error', 'Server Down! Try again later.');
        }
    }
    ?>



    <!-- footer -->
    <?php require 'inc/footer.php' ?>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    <!-- <script src="index.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>

        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },

            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });

    </script>
</body>

</html>