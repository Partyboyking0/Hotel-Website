<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RELAX-ABOUT</title>
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
    </style>
</head>

<body class="bg-light">
    <!-- nav bar -->
    <?php require  'inc/header_registered.php' ?>

    <div class="my-5 px-4">
        <h2 class="h-font fw-bold text-center">
            About Us
        </h2>

        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Indulge in Unparalleled Comfort and Serenity at Relax Hotel - Your Exclusive Escape Awaits, Where Every
            Moment is Tailored to Elevate Your Experience.
        </p>
    </div>
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
                <h3 class="mb-3 h-font">Meet the Designer</h3>

                <p>
                As a designer, I had the privilege of translating the vision behind Relax Hotel into a digital experience. The hotel's commitment to providing a serene escape from life's chaos inspired the website's design. Drawing on the hotel's origins in family-owned hospitality and the owner's journey through hotel management, I crafted a site that reflects the tranquility and attention to detail that Relax Hotel offers its guests. Every element, from the soothing color palette to the intuitive navigation, is designed to mirror the calm and refreshing experience guests will find at Relax Hotel.

                </p>
            </div>
            <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
                <img src="its_me.jpg"
                    class="w-100">
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white shadow rounded p-4 border-top border-4 text-center box">
                    <img src="hotel.svg"
                        width="70 px">
                    <h4 class="mt-3">
                        100+ Rooms
                    </h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white shadow rounded p-4 border-top border-4 text-center box">
                    <img src="customers.svg"
                        width="70 px">
                    <h4 class="mt-3">
                        500+ Customers
                    </h4>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white shadow rounded p-4 border-top border-4 text-center box">
                    <img src="rating.svg"
                        width="70 px">
                    <h4 class="mt-3">
                        150+ Reviews
                    </h4>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white shadow rounded p-4 border-top border-4 text-center box">
                    <img src="staff.svg"
                        width="70 px">
                    <h4 class="mt-3">
                        200+ Staffs
                    </h4>
                </div>
            </div>
        </div>
    </div>
   





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