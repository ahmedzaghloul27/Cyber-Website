<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boostly</title>
    <link rel="icon" href="icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Homepage.css">
    <link rel="stylesheet" href="swiper-bundle.min.css">
</head>

<body>
    <header>
        <div id="nav">
            <div><a href="Homepage.php" class="logo">
                    <h1 id="logo-text">Boostly</h1>
                </a></div>
            <ul class="links">
                <li><a href="#HowItWorks">How it works</a></li>
                <li><a href="#freelancer">Freelance</a></li>
                <li><a href="blog.php">Blog</a></li>
                <!-- <li><a href="#">About</a></li> -->
            </ul>
            <a href="#" class="login">Sign in</a>
            <form>
                <input class="search" type="search" placeholder="search.."><a href="search-list.php"><i
                        class="fa fa-search"></i></a>
            </form>
            <div class="toggle">
                <i class="fa fa-bars"></i>
            </div>
        </div>

        <div class="dropdown">
            <li><a href="#HowItWorks">How it works</a></li>
            <li><a href="#freelancer">Freelance</a></li>
            <li><a href="blog.php">Blog</a></li>
            <!-- <li><a href="#">About</a></li> -->
            <?php
                if (isset($_SESSION['id'])){
                    echo '<li class="nav-text"> <a href="profile.php">Profile</a></li>';
                    echo '<li class="nav-text"> <a href="logout.php">Logout</a></li>';
                }
                else{
                    echo '<li><a href="#" class="login">Sign in</a></li>';
                }
            ?>
        </div>
    </header>
    <main>
    <div class="main">
        <div>
            <h1>Start.Boost.Counsel.</h1>
            <p>Boostly is the go-to place to help entrepreneurs and freelancer<br>
                succeed. We provide essential resources, consulting services,<br>
                and a supportive community of peers to help you take your<br>
                business to the next level.</p>
            <a href="#" id="login" class="book">Book now</a>
            <a href="register.php" class="setup">Setup portfolio</a>
            <a href="#popup" class="download"><i class='fa fa-apple'></i>&nbsp;<i
                    class='fa fa-windows'>&nbsp;</i>Get Boostly app</a>


            <dialog class="popup">
                <i id="closebtn" class="fa fa-times"></i>
                <span class="title">Download our mobile application.</span>
                <span class="desc">Download Boostly mobile app.</span>
                <div class="buttons">
                    <a href="#" class="buttonn">

                        <div class="buttonn-text google">
                            <span> <i class="fa fa-windows"></i> Get it on</span>
                            <span>Google Play</span>
                        </div>
                    </a>
                    <a href="#" class="buttonn">

                        <div class="buttonn-text apple">
                            <span><i class="fa fa-apple"></i> Download from</span>
                            <span>App Store</span>
                        </div>
                    </a>
                </div>
            </dialog>


        </div>
        <div>
            <img src="prototype.png" alt="app prototype">
        </div>

    </div>
    <div id="HowItWorks">
        <div class="text">
            <h1>Looking to start your business?</h1>
            <p>Explore our network of collaborators & experienced freelancers. </p>
            <a href="#" id="openpop" class="login">Book now</a>
        </div>
        <div class="circles">
            <div><img src="job.svg" alt="">
                <p>Post a job</p>
            </div>
            <div><img src="explore.svg" alt="">
                <p>Explore opportunities</p>
            </div>
            <div><img src="connect.svg" alt="">
                <p>Connect with freelancers</p>
            </div>
        </div>
        <div class="slide-container swiper">
            <div class="slider">
                <div class="wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="image">
                            <div class="card-image">
                                <img src="developer.svg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="content">
                            <h2 class="name">Development</h2>
                            <p class="info">Coders, software engineers, and specialists would help you develop your
                                company and ideas.</p>
                            <a href="search-list.php"><button class="button">View more</button></a>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image">
                            <span class="overlay"> </span>

                            <div class="card-image">
                                <img src="design.svg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="content">
                            <h2 class="name">Design</h2>
                            <p class="info">UI/UX experts help your audience navigate with the right design and
                                experience.</p>
                            <a href="search-list.php"><button class="button">View more</button></a>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image">
                            <span class="overlay"> </span>

                            <div class="card-image">
                                <img src="collab.svg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="content">
                            <h2 class="name">Collab</h2>
                            <p class="info">We have AI collaborators to ease your mind (e.g. <a
                                    href="namelix.com">Namelix</a>).</p>
                            <a href="search-list.php"><button class="button">View more</button></a>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image">
                            <span class="overlay"> </span>

                            <div class="card-image">
                                <img src="legal.svg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="content">
                            <h2 class="name">Legal</h2>
                            <p class="info">Legal professionals offer a range of services to help entrepreneurs succeed
                                in their ventures.</p>
                            <a href="search-list.html"><button class="button">View more</button></a>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image">
                            <span class="overlay"> </span>

                            <div class="card-image">
                                <img src="branding.svg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="content">
                            <h2 class="name">Branding</h2>
                            <p class="info">Distinguish your brand with a memorable logo. With creativity, and skills, a
                                brand can spark a strong connection with its audience</p>
                            <a href="search-list.html"><button class="button">View more</button></a>
                        </div>

                    </div>

                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div>
            <a class="explore" href="search-list.html">Explore all freelancers</a>

        </div>
    </div>
    <!-- <div id="features">
        <div class="block-container">
            <div class="block"><img src="construction.png" alt="" class="img">
                <h2>Build your business from scratch</h2>
                <p>
                <ul>
                    <li>> collaborators (other websites e.g. Namelix)</li>
                    <li>> hire online advisors and chat with experts (e.g.accountants,<br> lawyers, developers).</li>
                    <li>> subscribe to local business owners’ blogs with<br> similar goals and get inspiration from
                        them.</li>
                </ul>
                </p>
            </div>
            <div class="block"><img src="boost.png" alt="" class="img">
                <h2>Boost your business</h2>
                <p>
                <ul>
                    <li>> chat with experts who’ll help you grow your business.</li>
                    <li>> expand your business worldwide with our experts’ help..</li>
                </ul>
                </p>
            </div>
            <div class="block"><img src="light.png" alt="" class="img">
                <h2>Share your expertise</h2>
                <p>
                <ul>
                    <li>> create your own blog and share your expertise.</li>
                    <li>> chat with business-owners.</li>
                    <li>> find collaborators and interested parties.</li>
                </ul>
                </p>
            </div>
        </div>
        <div class="boostly">
            <span class="text first-text">Boostly </span>
            <span class="text sec-text"> Features</span>
        </div>
    </div> -->
    <div id="freelancer">
        <div class="freelancer-text">
            <h1>Are you a freelancer?</h1>
            <p>Build your portfolio to find exciting new projects and connect<br> with clients.</p>
            <a href="register.php">Join Boostly</a>
        </div>
        <!-- <div class="freelancer-img">
            <img src="freelancer2.jpg" alt="">
        </div> -->

    </div>
    <dialog class="modal">
    <div class="container">
        <i id="closebtn2" class="fa fa-times"></i>
        <input id="register_toggle" type="checkbox">
        <div class="slider">
            <form class="form" action="login.php" method="post">
                <span class="title">Sign in</span>
                <div class="form_control">
                    <input required class="input" type="email" name="email">
                    <label class="label">Email</label>
                </div>
                <div class="form_control">
                    <input required class="input" type="password" name="password">
                    <label class="label">Password</label>
                </div>
                <?php
            if (isset($_GET['loginerror'])) {
                if($_GET['loginerror'] == "emptyinput"){
                    echo    "<i class=\"fa fa-circle-info\" style=\"color:red; font-size:20px\"></i>
                    <p class=\"register-error\">Fill in all fields</p>";
                }
                else if($_GET["loginerror"] == "wronglogin"){
                    echo "<i class=\"fa fa-circle-info\" style=\"color:red; font-size:20px\"></i>
                    <p class=\"register-error\">Incorrect login information!</p>";
                }
            }
            ?>
            <style>
                .register-error{
                    display: inline;
                }
            </style>
                <button name="submit">Sign in</button>
    
                <span class="bottom_text">Don't have an account? <label class="swtich" for="register_toggle">Sign Up</label>
                </span>
            </form>
            
            <form class="form" action="signup.php" method="post">
                <span class="title">Sign Up</span>
                <div class="form_control">
                    <input required class="input" type="text" name="name">
                    <label class="label">Full name</label>
                </div>
                <div class="form_control">
                    <input required class="input" type="email" name="email">
                    <label class="label">Email</label>
                </div>
                <div class="form_control">
                    <input required class="input" type="password" name="password">
                    <label class="label">Password</label>
                </div>
                <?php
                if (isset($_GET['error'])) {
                if($_GET['error'] == "emptyinput"){
                    echo    "<i class=\"fa fa-circle-info\" style=\"color:red; font-size:20px\"></i>
                    <p class=\"register-error\"> Fill in all fields</p>";
                }
                else if($_GET["error"] == "invalidemail"){
                    echo "<i class=\"fa fa-circle-info\" style=\"color:red; font-size:20px\"></i>
                    <p class=\"register-error\">Invalid email</p>";
                }
                else if($_GET["error"] == "invalidphone"){
                    echo "<i class=\"fa fa-circle-info\" style=\"color:red; font-size:20px\"></i>
                    <p class=\"register-error\">Invalid phone number</p>";
                }
                else if($_GET['error'] == "emailexist"){
                    echo "<i class=\"fa fa-circle-info\" style=\"color:red; font-size:20px\"></i>
                    <p class=\"register-error\">Email is already registered</p>";
                }
                else if($_GET["error"] == "phoneexist"){
                    echo "<i class=\"fa fa-circle-info\" style=\"color:red; font-size:20px\"></i>
                    <p class=\"register-error\">Phone number is already registered</p>";
                }
            }
            ?>
                <button name="submit">Sign Up</button>
    
                <span class="bottom_text">Already have an account? <label class="swtich" for="register_toggle">Sign
                        In</label> </span>
            </form>
    
    
        </div>
    </div>
    </dialog>
    </main>
    <footer>
        <div class="row">
            <div class="col">
                <!-- <img src=" "  class="logo"> -->
                <h1 class="logo">Boostly </h1>
                <p>" Talent and communication are the essence of creativity - Boostly just makes the process easy."
                </p>
            </div>
            <div class="col">
                <h3>EXPLORE BOOSTLY <div class="underline"><span></span></div>
                </h3>
                <p>Boostly features</p>
                <p>Search projects</p>
                <p>Search freelancers</p>
                <p>Search Skills</p>
            </div>
    
            <div class="col">
                <h3>COMMUNITY<div class="underline"><span></span></div>
                </h3>
                <ul>
                    <li><a href=""> About us </a></li>
                    <li><a href="contact us.php"> Get in touch</a></li>
                </ul>
            </div>
    
            <div class="col">
                <h3> OVERVIEW <div class="underline"><span></span></div>
                </h3>
                <ul>
                    <li><a href="">
                            <p>FAQS </p>
                        </a></li>
                    <li><a href="">
                            <p>TERMS OF SERVICE</p>
                        </a></li>
                    <li><a href="">
                            <p> PRIVACY POLICY</p>
                        </a></li>
                    <li><a href="">
                            <p> COOKIE POLICY</p>
                        </a></li>
                </ul>
    
        
                <div class="media-icons">
                    <a href="#"><i class="fa fa-facebook-f"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-linkedin-in"></i></a>
                    <a href="#"><i class="fa fa-youtube"></i></a>
                </div>
            </div>
        </div>
        </div>
        <hr>
        <p class="copyright">copyright &#169;2023 Boostly ,All Rights Reserved </p>
    
    </footer>

    <script>
        const toggleBtn = document.querySelector('.toggle')
        const toggleBtnIcon = document.querySelector('.toggle i')
        const dropDownMenu = document.querySelector('.dropdown')
        toggleBtn.onclick = function () {
            dropDownMenu.classList.toggle('open')
            const isOpen = dropDownMenu.classList.contains('open')
            toggleBtnIcon.classList = isOpen
                ? 'fa fa-times-circle'
                : 'fa fa-bars'
        }
    </script>
    <script>
        /* When the user scrolls down, hide the navbar. When the user scrolls up, show the navbar */
        var lastScrollTop = 0;
        nav = document.getElementById("nav");
        window.addEventListener("scroll", function () {
            var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            if (scrollTop > lastScrollTop) {
                nav.style.top = "-110px";
            } else {
                nav.style.top = "0";
            }
            lastScrollTop = scrollTop;
        })
    </script>
    <script src="swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".slider", {
            slidesPerView: 3,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
    <!-- popup -->
    <script>
        const modal = document.querySelector('.popup');
        const openModal = document.querySelector('.download');
        const closeModal = document.querySelector('#closebtn');

        openModal.addEventListener('click', () => {
            modal.showModal();
        })
        closeModal.addEventListener('click', () => {
            modal.close();
        })

    </script>
    <script>
        const modal2 = document.querySelector('.modal');
        const openModal2 = document.querySelector('.login');
        const openModal3 = document.querySelector('#login');
        const openModal4 = document.querySelector('#openpop');
        const closeModal2 = document.querySelector('#closebtn2');

        openModal2.addEventListener('click', () => {
            modal2.showModal();
        })
           openModal4.addEventListener('click', () => {
                modal2.showModal();
            })
                openModal3.addEventListener('click', () => {
                        modal2.showModal();
                    })
        closeModal2.addEventListener('click', () => {
            modal2.close();
        })

    </script>

</body>

</html>