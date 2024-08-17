<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RELAX-ROOMS</title>
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
    <?php require ('inc/header_registered.php') ?>
    <div class="my-5 px-4">
        <h2 class="h-font fw-bold text-center">
            Our Rooms
        </h2>


        <div class="container">
            <div class="row">

                <div class="col-lg-3">
                    <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                        <div class="container-fluid flex-lg-column align-items-stretch">
                            <h4 class="mt-2" >Filters</h4>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                
                            </div>
                        </div>
                    </nav>
                </div>

            </div>
        </div>



        <h2 style = "align-items: center;">This part of website is under construction</h2>


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
        <?php require ('inc/footer.php') ?>








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