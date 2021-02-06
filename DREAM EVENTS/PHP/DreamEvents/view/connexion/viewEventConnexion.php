


<!-- Title -->
<section id="header-index">


<div class="container">
            <div class="row">

                <div class="col-lg-12 ">
                    <h1 id="h1-title">Let us plan your special day!</h1>
                </div>
                <div class="col-lg-12 d-none d-md-block">
                    <p> Large or small, we strive to ensure the planning and production of your event is organized, enjoyable and stress-free. We are passionate about creating striking and memorable events for our stylish clients with a "look" and "feel" that stirs the heart and is sure to "WOW" your guests...</p>
                </div>


                <div class="col-lg-12 ">
                    <a href="about.html"> <button class="myButton-title-1">LEARN MORE</button></a>



                </div>
            </div>

        </div>

    </section>




    <!-- Features -->
    <section class="white-section " id="features">

        <h5>WE DO EVERYTHING</h5>
        <h2>WELCOME TO DREAMEVENTS EVENTS AGENCY!</h2>

        <div class="row">
            <div class="feature-box col-lg-4 col-md-4 col-sm-12">
            <?php 

             if (isset($_SESSION["id"]))
                {
                ?>
                <a href='index.php?controller=reservation&action=create'><img src="./img/wedding-icon-2.png" ></a>
                <a href='index.php?controller=reservation&action=create'>
                    <h3 class="feature-title"> Weddings </h3>
                </a>
                <?php
                    }
                else{
                ?>
                <a href='index.php?controller=connexion&action=login'><img src="./img/wedding-icon-2.png" ></a>
                <a href='index.php?controller=connexion&action=login'>
                    <h3 class="feature-title"> Weddings </h3>
                </a>
                <?php
                }
                ?>
            </div>


            <div class="feature-box col-lg-4 col-md-4 col-sm-12">
            <?php 

                if (isset($_SESSION["id"]))
                 {
                ?>
                <a href='index.php?controller=reservation&action=create'><img src="./img/wedding-icon-1.png" ></a>
                <a href='index.php?controller=reservation&action=create'>
                    <h3 class="feature-title"> Birthdays </h3>
                </a>
                <?php
                    }
                else{
                ?>

                <a href='index.php?controller=connexion&action=login'><img src="./img/wedding-icon-1.png" ></a>
                <a href='index.php?controller=connexion&action=login'>
                    <h3 class="feature-title"> Birthdays </h3>
                <?php
                }
                ?>
            </div>

            <?php 

             if (isset($_SESSION["id"]))
                {
                ?>

            <div class="feature-box col-lg-4 col-md-4 col-sm-12">
                <a href='index.php?controller=reservation&action=create'><img src="./img/wedding-icon-5.png" ></a>
                <a href='index.php?controller=reservation&action=create'>
                    <h3 class="feature-title"> Conferences </h3>
                </a>
                <?php
                    }
                else{
                ?>



            <div class="feature-box col-lg-4 col-md-4 col-sm-12">
                <a href='index.php?controller=connexion&action=login'><img src="./img/wedding-icon-5.png" ></a>
                <a href='index.php?controller=connexion&action=login'>
                    <h3 class="feature-title"> Conferences </h3>
                   
                    <?php
                }
                ?>

            </div>


        </div>
    </section>








    <!-- Advantages -->


    <section class="Advantages">
        <div class="container">
            <h1>Our Advantages</h1>

            <div class="row">
                <div class="col-lg-3 col-md-12 ">
                    <figure class="adv-box">
                        <figcaption>
                            <img src="./img/price.PNG">
                            <h3>Acceptable Prices</h3>

                            <p>Our clients value our affordable pricing policy and great service.</p>
                        </figcaption>
                    </figure>
                </div>
                <div class=" col-lg-3 col-md-12 ">
                    <figure class="adv-box">
                        <figcaption>
                            <img src="./img/clock.PNG">
                            <h3>Save Time</h3>

                            <p>The services provided by our wedding planners can save you a lot of time.</p>

                        </figcaption>
                    </figure>
                </div>
                <div class=" col-lg-3 col-md-12 ">
                    <figure class="adv-box">
                        <figcaption>
                            <img src="./img/Approach.PNG">
                            <h3>Professional Approach</h3>

                            <p>We will thoroughly plan every element of your wedding.</p>

                        </figcaption>
                    </figure>
                </div>
                <div class=" col-lg-3 col-md-12 ">
                    <figure class="adv-box">
                        <figcaption>
                            <img src="./img/Team.PNG">
                            <h3>Team of Experts</h3>

                            <p>365EVENTS employs the best and the the most professional wedding experts in Tunisia.</p>

                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section>


    <!-- BUDGET -->
    <section class="budget">
        <div class="container">

            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <h1>Looking for something very special?</h1>
                    <br>
                    <h5>PLAN YOUR BUDGET AND LET’S GET STARTED!</h5>

                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="mybutton-budget">
                        <a href="#"> <button class="mybutton-budget1">Calculate Now</button></a>



                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Contact US -->
    <section id="Contact-index">
        <div class="contact-index-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 ">
                        <h1 id="h1-contact-index">Let Us Make Your Event Flawless!</h1>
                        <p>Local, affordable, and completely stress-free! Making those special events a lasting memory.</p>
                        <a href='index.php?controller=cantact'> <button class="myButton-contact-index">Contact Us Now</button></a>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- testimonials -->
    <section class="testimonials">
        <div class="container">
            <h1>testimonials</h1>

            <div class="row">
                <div class="col-lg-4">
                    <div class="testimonial">
                        <img src="./img/ramla%20ala.jpg" alt="">
                        <div class="name">Alaa & Ramla</div>
                        <p>
                            "We had a lovely experience working with DREAMEVENTS ! Their work is exceptional, and we are very happy with the finished product!"
                        </p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="testimonial">
                        <img src="./img/meriem.jpg" alt="">
                        <div class="name">Dabegh Birthday </div>
                        <p>
                            "The work that DREAMEVENTS produced provided an easy, seamless experience. I loved the high energy their team brought to the event!"
                        </p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="testimonial">
                        <img src="./img/youssef.jpg" alt="">
                        <div class="name">Youssef Chahed Conference</div>
                        <p>
                            "DREAMEVENTS Event Planning has been a pleasure to work with! They have such an eye for design and decor, and their work is just impeccable."
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>






    <!-- TEAM -->
    <section id="team">
        <div class="container">
            <h1>Our Creative Team</h1>
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-xsm-6 ">
                    <div class="team-box">
                      <img src="./img/emnaa.jpg" alt="">
                        <h3> Emna Sliti </h3>
                        <h5>AGENCY FOUNDER</h5>

                    </div>
                </div>



                <div class="col-lg-6 col-xsm-6 col-sm-6  ">
                    <div class="team-box">
                       <img src="./img/eya.jpg" alt="">
                        <h3>Eya Chatteoui</h3>
                        <h5>AGENCY FOUNDER</h5>

                    </div>
                </div>





            </div>
        </div>
    </section>



    <!-- Partners -->

    <section id="partners" class="white-section">
        <div class="container">
            <div class="row">

                <img class="partner-logo col-lg-2" src="./img/Logo_%C3%89cole_Sup%C3%A9rieure_d%E2%80%99%C3%89conomie_Num%C3%A9rique_(ESEN).png">


                <img class="partner-logo col-lg-2 img-responsive" src="./img/Attessia_TV.png">


                <img class="partner-logo col-lg-2 img-responsive" src="./img/0.png">

                <img class="partner-logo col-lg-2 img-responsive" src="./img/800px-Logo_Ifm.png">

                <img class="partner-logo col-lg-2 img-responsive" src="./img/boudinar.png">

                <img class="partner-logo col-lg-2 img-responsive" src="./img/fanta.png">

            </div>
        </div>

    </section>

