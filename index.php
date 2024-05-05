<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REVO - Life Share</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- header section starts  -->

    <header class="header">
        <a href="#" class="logo">
            <img src="img/logo.png" alt="">
        </a>

        <div>
            <ul id="navbar">
                <li><a href="#home">Home</a></li>
                <li><a href="#vision">Our Vision</a></li>
                <li><a href="#services">services</a></li>
                <li><a href="#faqs">FAQ's</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#blogs">Blogs</a></li>
            </ul>
        </div>
    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="content">
            <h3 class="save">Building a <span>Legacy of Life</span>, DONATE <span>ORGAN</span> SAVE A LIFE</h3>
            <p>One Donor Can Save 8 Lives. Give the gift of life, <br> Become an organ donor!</p>
            <a href="login.php" class="btn"> Register for Pledge <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="image">
            <img src="img/home-img.svg" alt="">
        </div>

    </section>

    <!-- home section ends -->

    <!-- icons section starts  -->

    <section class="icons-container">

        <div class="icons">
            <i class="fas fa-user-md"></i>
            <h3>150+</h3>
            <p>doctors at work</p>
        </div>

        <div class="icons">
            <i class="fas fa-users"></i>
            <h3>15000+</h3>
            <p>Total Pledger Count</p>
        </div>

        <div class="icons">
            <i class="fas fa-users"></i>
            <h3>60+</h3>
            <p>available Donors </p>
        </div>

        <div class="icons">
            <i class="fas fa-hospital"></i>
            <h3>100+</h3>
            <p>available hospitals</p>
        </div>

    </section>

    <!-- icons section ends -->

    <!-- about section starts  -->

    <section class="vision" id="vision">

        <h1 class="heading"> <span>Our</span> Vision </h1>

        <div class="row">

            <div class="image">
                <img src="img/about-img.svg" alt="">
            </div>

            <div class="content">
                <h3>Empowering Organ Donation for a Brighter Tomorrow</h3>
                <p>Our vision for Organ Donation is a world where every individual has the opportunity to leave
                    a lasting legacy of life and hope through the selfless act of donation. We envision a society
                    where awareness and understanding about organ donation are widespread, fostering a culture of
                    empathy and altruism. </p>
                <p>Through education, advocacy, and accessible pathways to donation, we
                    aim to bridge the gap between those in need and those willing to give, ensuring equitable access
                    to life-saving organs for all. Our vision encompasses a future where organ donation is not
                    only accepted but celebrated as a profound gift that transcends boundaries, saving and
                    enhancing countless lives while honoring the generosity and compassion of donors and
                    their families.</p>
                <a href="vision.php" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>

        </div>

    </section>

    <!-- about section ends -->

    <!-- services section starts  -->

    <section class="services" id="services">

        <h1 class="heading"> our <span>services</span> </h1>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-notes-medical"></i>
                <h3>Request for Organ</h3>
                <p>Requesting organs to save lives. Your gift can bring hope, healing, and a brighter future
                    to those in need</p>
                <a href="#" class="btn"> Request <span class="fas fa-chevron-right"></span> </a>
            </div>

            <div class="box">
                <i class="fas fa-ambulance"></i>
                <h3>Donate a Organ</h3>
                <p>Be the hero someone is waiting for. Your decision can transform lives and inspire others to
                    give the gift of life.</p>
                <a href="#" class="btn"> Donate <span class="fas fa-chevron-right"></span> </a>
            </div>

            <div class="box">
                <i class="fas fa-heartbeat"></i>
                <h3>Donation Record</h3>
                <p>Record of Organ Donations, Saving Countless Futures with Generosity, Compassion, and Lasting 
                    Legacies of Hope</p>
                <a href="#" class="btn"> Records <span class="fas fa-chevron-right"></span> </a>
            </div>

        </div>

    </section>

    <!-- services section ends -->

    <!-- faqs section starts -->

    <section class="faqs" id="faqs">

        <h1 class="heading"> ORGAN AND<span> TISSUE DONATION</span></h1>

        <div class="box-container">

            <div class="box">
                <img src="img/faqs/pic1.jpg" alt="" class="user">
                <h4>WHAT IS ORGAN AND TISSUE DONATION?</h4>
                <p>Organ Donation is the gift of an organ to a person with end stage organ disease and who
                    needs a transplant. The donated organ may be from a deceased donor or a living donor.</p>
            </div>

            <div class="box">
                <img src="img/faqs/pic2.jpg" alt="" class="user">
                <h4>WHAT IS TRANSPLANTATION?</h4>
                <p>Surgical operation in which a failing or damaged organ in the human body is removed and replaced with
                    a functioning one.</p>
            </div>

            <div class="box">
                <img src="img/faqs/pic3.jpg" alt="" class="user">
                <h4>WHO CAN PLEDGE TO DONATE ORGANS?</h4>
                <p>Any person not less than 18 years of age, who voluntarily authorizes the removal of any of his organ
                    and/or tissue…</p>
            </div>
        </div>

    </section>

    <!-- faqs section ends -->

    <!-- contact section starts   -->

    <section class="contact" id="contact">

        <h1 class="heading"> <span>Contact</span> now </h1>

        <div class="row">

            <div class="image">
                <img src="img/appointment-img.svg" alt="">
            </div>

            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <?php
                if (isset($message)) {
                    foreach ($message as $message) {
                        echo '<p class ="message">' . $message . '</p>';
                    }
                }
                ?>

                <h3>get in touch</h3>
                <div class="inputBox">
                    <span class="fas fa-user"></span>
                    <input type="text" placeholder="Your Name">
                </div>
                <div class="inputBox">
                    <span class="fas fa-envelope"></span>
                    <input type="email" placeholder="Email Address">
                </div>
                <div class="inputBox">
                    <span class="fas fa-phone"></span>
                    <input type="number" placeholder="Phone Number">
                </div>
                <input type="submit" value="contact now" class="btn">
            </form>

        </div>

    </section>

    <!-- contact section ends -->

    <!-- blogs section starts  -->

    <section class="blogs" id="blogs">

        <h1 class="heading"> our <span>blogs</span> </h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="img/blogs/Astha/astha.jpg" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> February 8, 2023 </a>
                        <a href="#"> <i class="fas fa-user"></i> by Astha </a>
                    </div>
                    <h3>blog title win coder goes here</h3>
                    <p>I am Astha living in Khurja, Uttar Pradesh with my loving family. Leading a normal and good life.
                        Did I mention that I’m a heart transplant recipient? Life is full of surprises and that is what are
                        realised in 2014. I realised that whenever I put a little bit extra energy into anything that I did,
                        I got more...</p>
                    <a href="blog1.php" class="btn"> Read more <span class="fas fa-chevron-right"></span> </a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                <img src="img/blogs/Pooja/Pooja.jpg" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> April 29, 2022 </a>
                        <a href="#"> <i class="fas fa-user"></i> by Pooja Bijarnia </a>
                    </div>
                    <h3>It’s The Act of Humanity, Not Gender, That Matters</h3>
                    <p>A family of content consisting of Papa, Mumma, four daughters, and a son. Our parents never stated 
                        their daughters as Beti, they instead call Betu as they never believed in tagging a child as a daughter
                        ...</p>
                    <a href="blog2.php" class="btn"> Read more <span class="fas fa-chevron-right"></span> </a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                <img src="img/blogs/Sunetra/Sunetra.jpg" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> April 12, 2018 </a>
                        <a href="#"> <i class="fas fa-user"></i> by win coder </a>
                    </div>
                    <h3>Keep the faith… always</h3>
                    <p>The only change I have noted in myself over the past two months has been greatly increased swelling in my 
                        legs and feeling slightly out of breath on my morning walks. I ascribe this to a possible heart condition 
                        and decide to get a whole-body check at Indraprastha Apollo Hospital, Delhi. The results are...</p>
                    <a href="blog3.php" class="btn"> Read more <span class="fas fa-chevron-right"></span> </a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                <img src="img/blogs/Gulati/Gulati.jpg" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> November 29, 2018 </a>
                        <a href="#"> <i class="fas fa-user"></i> by win coder </a>
                    </div>
                    <h3>4 Doctors and a ‘Yes’ to Organ Donation</h3>
                    <p>I come from a family of Doctors. My father Dr. Inderjit Gulati, my sisters Dr. Rachna and Dr. Ruchi (who 
                        lives in Australia) and myself. My mother, Mrs. Sharda Gulati was the odd one out, but she was the pillar 
                        of our house as well as our pathology lab which she managed with...</p>
                    <a href="blog4.php" class="btn"> Read more <span class="fas fa-chevron-right"></span> </a>
                </div>
            </div>

        </div>

    </section>

    <!-- blogs section ends -->

    <!-- newsletter section starts -->

    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletters</h4>
            <p>Stay informed about our latest organ donation updates and <span>special opportunities to save
                    lives.</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address">
            <button class="normal">Sign Up</button>
        </div>
    </section>

    <!-- newsletter section ends -->

    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a href="index.php"> <i class="fas fa-chevron-right"></i> home </a>
                <a href="vision.php"> <i class="fas fa-chevron-right"></i> our vision </a>
                <a href="#services"> <i class="fas fa-chevron-right"></i> services </a>
                <a href="#faqs"> <i class="fas fa-chevron-right"></i> faq's </a>
                <a href="#contact"> <i class="fas fa-chevron-right"></i> Contact </a>
                <a href="#blogs"> <i class="fas fa-chevron-right"></i> blogs </a>
            </div>

            <div class="box">
                <h3>our services</h3>
                <a href="#"> <i class="fas fa-chevron-right"></i> My Account </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> donate organ </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> request organ </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> Records </a>
                <a href="vision.php"> <i class="fas fa-chevron-right"></i> Terms and Conditions </a>
            </div>

            <div class="box">
                <h3>appointment info</h3>
                <a href="#"> <i class="fas fa-phone"></i> (+91) 22555 33555 </a>
                <a href="#"> <i class="fas fa-phone"></i> (+91) 23355 23355 </a>
                <a href="#"> <i class="fas fa-envelope"></i> revo.lifeshare@gmail.com </a>
                <a href="#"> <i class="fas fa-envelope"></i> revo.life@gmail.com </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> Borivali, Street 14, Mumbai, Maharashtra </a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#"> <i class="fab fa-facebook"></i> facebook </a>
                <a href="#"> <i class="fab fa-x"></i> X </a>
                <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
                <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
                <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
            </div>

        </div>

        <div class="credit"> © 2024. <span>REVO - Life Share</span> | all rights reserved </div>

    </section>

    <!-- footer section ends -->


    <!-- js file link  -->
    <script src="js/script.js"></script>

</body>

</html>
