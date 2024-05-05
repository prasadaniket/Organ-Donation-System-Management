<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Vision</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <!-- custom css file link -->
    <link rel="stylesheet" href="css/vision.css">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>

<body>
    <!-- header section starts -->
    <header class="header">
        <a href="index.php" class="logo">
            <img src="img/logo.png" alt="">
        </a>

        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="#vision">Our Vision</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </header>
    <!-- header section ends -->

    <!-- vision section starts -->

    <section class="vision" id="vision">

        <h1 class="heading"><span>Our</span> Vision </h1>

        <div class="row">
            <div class="image">
                <img src="img/life2.jpg" alt="">
            </div>

            <div class="content">
                <p>Our vision for Organ Donation is grounded in the belief that every individual should
                    have the opportunity to make a lasting impact through the selfless act of donation,
                    leaving behind a legacy of life and hope. We aspire to create a world where awareness
                    and understanding about organ donation are not only prevalent but ingrained in the
                    societal consciousness, cultivating a culture characterized by empathy and altruism.</p>

                <p>Education serves as a cornerstone of our approach, empowering individuals with the knowledge
                    needed to make informed decisions about organ donation. Through advocacy efforts, we seek to
                    dismantle misconceptions and barriers surrounding donation, fostering an environment where
                    altruistic giving is embraced and encouraged.</p>

            </div>
        </div>

        <div class="row">
            <div class="content">
                <p>Central to our vision is the establishment of accessible pathways to donation, ensuring that
                    those in need of life-saving organs have equitable opportunities to receive them. By bridging
                    the gap between potential donors and recipients, we strive to mitigate disparities in access to
                    transplantation services, ultimately saving lives and improving health outcomes for countless
                    individuals.</p>

                <p>In realizing our vision, we envision a future where organ donation is not merely tolerated but
                    celebrated as a profound act of generosity and compassion. Each donation represents a beacon of
                    hope, transcending societal boundaries and affirming the interconnectedness of humanity. Through
                    the gift of organ donation, donors and their families leave an enduring legacy of kindness and
                    compassion, touching the lives of recipients and their loved ones in profound ways.</p>
            </div>
        </div>
    </section>

    <section class="vis" id="vis">
        <div class="cont">

            <h1>Terms and Conditions:</h1>
            <p>1. Organ donation is voluntary and without coercion.</p>
            <p>2. Donors must be of legal age or have parental consent if minors.</p>
            <p>3. Medical suitability for donation will be determined by qualified healthcare professionals.</p>
            <p>4. Donors have the right to withdraw consent at any stage of the donation process.</p>
            <p>5. Recipients will be prioritized based on medical urgency and compatibility.</p>
            <p>6. The allocation of organs will adhere to established ethical and medical guidelines.</p>
            <p>7. Donor anonymity will be respected unless otherwise specified by the donor.</p>
            <p>8. The confidentiality of donor and recipient information will be maintained in accordance
                with applicable laws and regulations.</p>
            <p>9. Organ donation does not involve any financial compensation for donors.</p>
            <p>10. The organization reserves the right to modify these terms and conditions as necessary to
                ensure compliance with legal and ethical standards.</p>
        </div>

    </section>

    <!-- vision section ends -->

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
</body>