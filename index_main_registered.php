<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RELAX-HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/69bbcb5fd8.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Merienda&family=Poppins:wght@400;500;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<?php require 'inc/link.php'?>
</head>

<body class="bg-light">
    <!-- nav bar -->
    <?php require 'inc/header_registered.php'?>

    <!-- caurasel -->
    <div class="container-fluid px-lg-4 mt-4">
        <swiper-container class="swiper-container" pagination="true" pagination-clickable="true" space-between="30"
            effect="fade" navigation="true">
            <swiper-slide>
                <img src="scroll 1.png"
                    class="w-100 d-block" />
            </swiper-slide>
            <swiper-slide>
                <img src="scroll 2.png"
                    class="w-100 d-block" />
            </swiper-slide>
            <swiper-slide>
                <img src="scroll 3.png"
                    class="w-100 d-block" />
            </swiper-slide>
            <swiper-slide>
                <img src="scroll 4.png"
                    class="w-100 d-block" />
            </swiper-slide>
            <swiper-slide>
                <img src="scroll 5.png"
                    class="w-100 d-block" />
            </swiper-slide>
            <swiper-slide>
                <img src="scroll 6.png"
                    class="w-100 d-block" />
            </swiper-slide>
        </swiper-container>
    </div>
    <!-- availability form -->
    <div class="container availability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">
                    Check Availability
                </h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight:500;">Check In</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight:500;">Check Out</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight:500;">Adult</label>
                            <select class="form-select shadow-none">
                                <option selected>-</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight:500;">Children</label>
                            <select class="form-select shadow-none">
                                <option selected>-</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mt-2 mb-lg-3">
                            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- rooms -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Rooms</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto; ">
                    <img src="room 1.jpg"
                        class="card-img-top">
                    <div class="card-body">
                        <h5>Regular</h5>
                        <h6 class="mb-4">₹500 per night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                Fully air-conditioned
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                Well-Furnished
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                Neat and Clean:Dust Free
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                Beautiful View
                            </span>

                        </div>
                        <div class="ratings mb-4">
                            <h6 class="mb-1">Ratings</h6>
                            <span class="badge bg-light">
                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto; ">
                    <img src="room 2.png"
                        class="card-img-top">
                    <div class="card-body">
                        <h5>Elite</h5>
                        <h6 class="mb-4">₹1000 per night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                Swimming Pool Access
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                4G-Wifi Access
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                Fully air-conditioned
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                and Many More...
                            </span>

                        </div>
                        <div class="ratings mb-4">
                            <h6 class="mb-1">Ratings</h6>
                            <span class="badge bg-light">
                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto; ">
                    <img src="room 3.png"
                        class="card-img-top">
                    <div class="card-body">
                        <h5>Supereme Elite</h5>
                        <h6 class="mb-4">₹2000per night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                5g wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                Simple & Special Spa
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                Special Room Services
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                And Many More....
                            </span>

                        </div>
                        <div class="ratings mb-4">
                            <h6 class="mb-1">Ratings</h6>
                            <span class="badge bg-light">
                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">
                    More Rooms>>>
                </a>

            </div>
        </div>
    </div>
    <!-- Our facilities -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Facilities</h2>
    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="wifi.svg "
                    width="80px">
                <h5 class="mt-3">
                    5g Wifi
                </h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="spa.svg"
                    width="80px">
                <h5 class="mt-3">
                    Spa/Special Spa
                </h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="ac.svg "
                    width="80px">
                <h5 class="mt-3">
                    Fully Air Conditioned
                </h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="bus.svg "
                    width="80px">
                <h5 class="mt-3">
                    Transportation
                </h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="fire.svg "
                    width="80px">
                <h5 class="mt-3">
                    Fire Proof Rooms
                </h5>
            </div>
        </div>
    </div>
    <!-- testimonials -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Testimonials</h2>
    <div class="container">
        <div class="swiper-slide bg-white p-4">
            <div class="profile">
                <h6 class="">Random User 1</h6>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt cupiditate quidem praesentium
                enim qui. Reprehenderit commodi quo alias officia in.</p>
            <div class="rating">
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
            </div>

        </div>
        <div class="swiper-slide bg-white p-4">
            <div class="profile">
                <h6 class="">Random User 1</h6>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt cupiditate quidem praesentium
                enim qui. Reprehenderit commodi quo alias officia in.</p>
            <div class="rating">
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
            </div>

        </div>
        <div class="swiper-slide bg-white p-4">
            <div class="profile">
                <h6 class="">Random User 1</h6>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt cupiditate quidem praesentium
                enim qui. Reprehenderit commodi quo alias officia in.</p>
            <div class="rating">
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
            </div>

        </div>
        <div class="swiper-pagination"></div>
    </div>

    <!-- reach us -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Reach Us</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 mb-lg-0 mb-3 bg-white rounded p-4">
                <iframe class="w-100 rounded" height="320 px"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3726.064392424992 5!2d79.0237998752545!3d20.949929080679734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd4c0529518230f%3A0x45b76be0621cbb88!2sIndian%20Institute%20of%20Information%20Technology%2C%20Nagpur%20(IIITN)!5e0!3m2!1sen!2sin!4v1714379168212!5m2!1sen!2sin"
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-4">
                <div class="bg-white p-4 rounded mb-4">
                    <h5>
                        Call Us
                    </h5>
                    <a href="tel:+917056244709" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="fa-solid fa-phone" style="color: #000000;"></i>+917056244709</a><br>
            
                </div>
                <div class="bg-white p-4 rounded mb-4">
                    <h5>
                        Follow Us
                    </h5>
                    <a href="https://www.instagram.com/parth_chakerwarti__/"
                        class="d-inline-block mb-2 text-decoration-none text-dark ">
                        <i class="fa-brands fa-instagram " style="color: #000000; "></i></i>Parth Chakerwarti</a><br>
                </div>
            </div>
        </div>
    </div>
<!-- footter -->
    <?php require 'inc/footer.php'?>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    <script src="index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new swiper("swiper-container", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            }
        });
        var swiper = new Swiper(".swiper-testimonial", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },
            pagination: {
                el: ".swiper-pagination",
            },
        });

    </script>
</body>

</html>