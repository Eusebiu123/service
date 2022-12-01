<?php
require 'dbcon.php';
session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location: ../login/index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Poppins&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
</head>
<body>



    <section id="banner">
        <img src="images/logo.jpg" class="logo">
        <div class="banner-text">
            <h1><?php echo "MECANIC"; ?></h1>
            <?php echo "<br>" ?>
            <h2>SERVICE AUTO</h2>
            <p>Dintre toate creațiile mâinilor umane, mașina seamănă cel mai mult cu o creatură vie.</p>
    
            <div class="banner-btn">
                <a href="../mecanic/programari.php"><span></span>Programarile Mele</a>
                <a href="../mecanic/rating.php"><span></span>Feedback</a>
            </div>
        </div>
    </section>

    <div id="sideNav">
        <nav>
            <ul>
                <li><a href="#banner">HOME</a></li>
                <li><a href="#feature">FEATURES</a></li>
                <li><a href="#service">SERVICES</a></li>
                <li><a href="#testimonial">TESTIMONIALS</a></li>
                <li><a href="#footer">MEET US</a></li>
                <li><a href="../login/logout.php">LOG OUT</a></li>
                
            </ul>
        </nav>
    </div>
    <div id="menuBtn">
        <img src="images/menu.png" id="menu">

    </div>





<!-- FEATURES -->
    <section id="feature">
        <div class="title-text">
            <p>FEATURES</p>
            <h1>Why Choose Us</h1>
        </div>
        <div class="feature-box">
            <div class="features">
                <h1>Experienced Staff</h1>
                <div class="features-desc">
                    <div class="feature-icon">
                        <i class="fa fa-shield"></i>
                    </div>
                    <div class="feature-text">
                        <p>Our staff has been working in the field of cars for over 15 years and throughout these years we have only had positive experiences.</p>
                    </div>
                </div>

                <h1>Pre Booking Online</h1>
                <div class="features-desc">
                    <div class="feature-icon">
                        <i class="fa fa-check-square-o"></i>
                    </div>
                    <div class="feature-text">
                        <p>We offer you the possibility to make an online appointment according to your possibilities.</p>
                    </div>
                </div>

                <h1>Afordable Cost</h1>
                <div class="features-desc">
                    <div class="feature-icon">
                        <i class="fa fa-inr"></i>
                    </div>
                    <div class="feature-text">
                        <p>Of all the services in our city and in our area, our services are the best in relation to price-quality.</p>
                    </div>
                </div>
            </div>
            <div class="features-img">
                <img src="images/engine.webp">
            </div>
            
        </div>

    </section>

    <!-- Service -->




    <section id="service">
        <div class="title-text">
            <p>SERVICES</p>
            <h1>We Provide Better</h1>
        </div>

        <div class="service-box">
            <div class="single-service">
                <img src="images/img1.png">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>Auto diagnosis</h3>
                    <hr>
                    <p>A good operation of your car is closely related to the safety of you and your family, and car diagnosis is the responsibility of every driver. A periodic check can not only save you from a lot of technical problems, but it can save your life, which is priceless.</p>
                </div>
            </div>
            <div class="single-service">
                <img src="images/img2.jpg">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>Ana</h3>
                    <hr>
                    <p>Ana is the only female person in our staff. Usually women want her services.</p>
                </div>
            </div>
            <div class="single-service">
                <img src="images/img3.jpg">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>Car equipment</h3>
                    <hr>
                    <p>Equipment, tools and machinery for the professional use of car service units specialized in the repair and maintenance of vehicles up to 3.5 tons.</p>
                </div>
            </div>
            <div class="single-service">
                <img src="images/img4.jpg">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>Car service tool features</h3>
                    <hr>
                    <p>These equipment are specific to the automotive field and intended for repairing the engine, suspensions and wheels, specific equipment in tinsmithing, equipment for lifting and suspending vehicles and their parts, equipment for maintenance such as greasers, lubricators, rectifiers and battery chargers, etc.</p>
                </div>
            </div>
        </div>

    </section>


    <!-- Testimonial -->




    <section id="testimonial">
        <div class="title-text">
            <p>TESTIMONIAL</p>
            <h1>What Client Says</h1>
        </div>

        <div class="testimonial-row">
            <div class="testimonial-col">
                <div class="user">
                    <img src="images/img-1.jpg">
                    <div class="user-info">
                        <h4>KEN NORMAN  <i class="fa fa-twitter"></i> </h4>
                        <small>@kennorman</small>
                    </div>
                </div>
                <p>The best service! I am totally satisfied with the services they offer. Congratulations!</p>
            </div>
            <div class="testimonial-col">
                <div class="user">
                    <img src="images/img-2.jpg">
                    <div class="user-info">
                        <h4>LIARA KARIAN  <i class="fa fa-twitter"></i> </h4>
                        <small>@liarakarian</small>
                    </div>
                </div>
                <p>The best service! I am totally satisfied with the services they offer. Congratulations!</p>
            </div>
            <div class="testimonial-col">
                <div class="user">
                    <img src="images/img-3.jpg">
                    <div class="user-info">
                        <h4>RICKY DANIEL  <i class="fa fa-twitter"></i> </h4>
                        <small>@rickydaniel</small>
                    </div>
                </div>
                <p>The best service! I am totally satisfied with the services they offer. Congratulations!</p>
            </div>
        </div>


    </section>


<!-- footer -->
    
    <section id="footer">
        <img src="images/footer.jpg" class="footer-img">
        <div class="title-text">
            <p>CONTACT</p>
            <h1>Visit Shop Today</h1>
        </div>

        <div class="footer-row">
            <div class="footer-left">
                <h1>Opening Hours</h1>
                <p><i class="fa fa-clock-o"></i>Monday to Friday - 9am to 5pm</p>
                <p><i class="fa fa-clock-o"></i>Saturday and Sunday - Closed</p>
            </div>
            <div class="footer-right">
                <h1>Get In Touch</h1>
                <p>Jud Iasi, oras Iasi, str Stefan nr 125<i class="fa fa-map-marker"></i></p>
                <p>service@website.com<i class="fa fa-paper-plane"></i></p>
                <p>+01 123456789<i class="fa fa-phone"></i></p>
            </div>
        </div>

        <div class="social-links">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-youtube-play"></i>
            <p>sebica_p</p>
        </div>

    </section>

    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <script>
        var menuBtn = document.getElementById("menuBtn")
        var sideNav = document.getElementById("sideNav")
        var menu = document.getElementById("menu")

        sideNav.style.right="-250px";

        menuBtn.onclick=function(){
            if(sideNav.style.right=="-250px"){
                sideNav.style.right="0";
                menu.src = "images/close.png";
            }
            else{
                sideNav.style.right="-250px";
                menu.src = "images/menu.png";
            }
        }

        var scroll = new SmoothScroll('a[href*="#"]', {
        speed: 1000,
        speedAsDuration: true
        });

    </script>


    <script type="text/javascript">
       
            <?php 
            $curr_data=date("y-m-d");
            $email=$_SESSION["email"];

            // $query = "SELECT * FROM raspunsuri where vazut=0 and data>='$curr_data'";
            $query = "SELECT * FROM raspunsuri where email='$email' and vazut=0 and data>='$curr_data'";
            $query_run = mysqli_query($con, $query);
            if(mysqli_num_rows($query_run) > 0){
                // if(1==1){
                $mesaj='daaa';
            }else{
                $mesaj='nuuu';
               
            }
            if($mesaj=='daaa'){
            echo "
            alertify.set('notifier', 'position', 'top-left');
            alertify.success('Ai primit raspuns la o programare!');"; 
            }
            ?>
  
</script>

</body>
</html>