<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RELAX Register</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/69bbcb5fd8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href=business.css>
    <?php require ('inc/link.php') ?>
</head>

<body>
    <div class="main">
        <div class="header">
            <div class="header1">
                <div class="logo">
                    <i class="fa-solid fa-yin-yang fa-spin fa-2xl" style="color: #000000; "></i>
                </div>
                <div class="nameh">
                    <span class="h-font fw-bold">
                        RELAX
                    </span>
                </div>
                <div class="corporate">
                    <span>
                        Need hotel? Just RELAX.
                    </span>
                </div>
            </div>
            <div class="header2">
                <div class="contact">

                    <div class="contacts">
                        <div>
                            <div class="text1 ">
                                <a href="tel:+917056244709" class="d-inline-block mb-2 text-decoration-none text-dark">
                                    <i class="fa-solid fa-phone" style="color: #000000;"></i>+917056244709</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact">
                    <div class="contacts">
                        <div>
                            <div class="text1">
                                <a href="mailto: bt23cse067@iiitn.ac.in"
                                    class="d-inline-block mb-2 text-decoration-none text-dark"><i
                                        class="fa-solid fa-envelope"
                                        style="color: #000000;"></i>bt23cse067@iiitn.ac.in</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <div class="line2">
            <div class="hque">
                <h2>
                    Are you looking for best deals on hotel rooms?book now through RELAX
                </h2>
            </div>
            <div class="line21">
                <div class="lefty">
                    <div class="left">
                        <div class="logo1">
                            <img src="./relaxbrandlogo.png" alt="RELAX" height="120px">
                        </div>
                        <div class="text">
                            <div class="text1">
                                <h1>
                                    Unlock special prizes by just registering you exclusively with Relax.
                                </h1>
                            </div>
                            <div class="text2">
                                <span>
                                    Save up to 70% | Get a dedicated Relax Manager |<br> Fixed Price throughout the
                                    year.
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="lhelp">
                        <div class="logo2">
                            <i class="fa-solid fa-headset fa-2xl" style="color: #000000;"></i>
                        </div>
                        <div class="htext">
                            <div class="htext1"><span>
                                    Need Help?
                                </span></div>
                            <div class="htext2">
                                <span>
                                    <a href="contact.php" class="text-decoration-none text-dark">Contact the customer
                                        care..</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right mb-3">
                    <form class="form" action="./registered.php" method="post">
                        <div class="fhead">
                            <h1>Get Started</h1>
                        </div>
                        <div class="fname">
                            <label for="fname"></label>
                            <input type="text" name="fname" id="fname" class="finputs" placeholder="Name" required>
                        </div>
                        <div class="fcompany">
                            <label for="faddress"></label>
                            <input type="text" name="faddress" id="fname" class="finputs" placeholder="Address"
                                required>
                        </div>
                        <div class="femail">
                            <label for="femail"></label>
                            <input type="email" name="femail" id="femail" class="finputs" placeholder="Email" required>
                        </div>
                        <div class="fcity">
                            <label for="fcity"></label>
                            <input type="text" name="fcity" id="fcity" class="finputs" placeholder="City" required>
                        </div>
                        <div class="fpass">
                            <label for="fpass"></label>
                            <input type="password" name="fpass" id="fpass" class="finputs"
                                placeholder="Create Password" required>
                        </div>
                        <div class="fbutton">
                            <input type="submit" value="Register now" id="fbutton">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>