<?php include 'sendemail.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UFT-8">
    <meta name="viewport" content="width=device-width" , initial-scale=1>
    <!-- CSS -->
    <link rel="stylesheet" href="styles/styles.css">
    <!--BOX ICONS-->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <title>Personal Website | Chay Gadpan</title>
</head>

<body>
    <!--HEADER-->
    <header class="l-header">
        <nav class="nav bd-grid">
            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>

            <div>
                <a href="#" class="nav__logo">CHAY</a>
            </div>

            <div class="nav__menu" id="nav-menu">
                <div class="nav__close" id="nav-close">
                    <i class='bx bx-x' ></i>
                </div>

                <ul class="nav__list">
                    <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
                    <li class="nav__item"><a href="#about" class="nav__link ">About</a></li>
                    <li class="nav__item"><a href="#languages" class="nav__link">Languages</a></li>
                    <li class="nav__item"><a href="#skills" class="nav__link">Skills</a></li>
                    <li class="nav__item"><a href="#works" class="nav__link">Works</a></li>
                    <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main class="l-main">
        <!--HOME-->
        <section class="home" id="home">
            <div class="home__container bd-grid">
                <div class="home__data">
                    <div class="home__img">
                        <img src="img/profile.png" alt="">
                    </div>

                    <h1 class="home__title">Chay Gadpan</h1>
                    <span class="home__profession">Web Master</span>

                    <div class="home__social">
                        <a href="https://www.linkedin.com/in/chay-gadpan-536046208/" class="home__social-link"><i class='bx bxl-linkedin'></i></a>
                        <a href="https://github.com/Chay1993" class="home__social-link"><i class='bx bxl-github'></i></a>
                        <a href="https://dribbble.com/chay1993?onboarding=true" class="home__social-link"><i class='bx bxl-dribbble'></i></a>
                        <a href="https://www.behance.net/chaygadpan" class="home__social-link"><i class='bx bxl-behance'></i></a>
                    </div>

                    <a download="Profile_Webmaster" href="Download_Resume/Profile_Webmaster.pdf" target="_blank" class="button home__button">Download Resume</a>
                </div>
            </div>
        </section>

        <!--ABOUT-->
        <section class="about section" id="about">
            <span class="section-subtitle">My intro</span>
            <h2 class="section-title">About Me</h2>
            <div class="about__container bd-grid">
                <div class="about__data">
                    <p class="about__description">Hi, I'm Webmaster. I'm interested and passionate about creating a
                        website. I created this website to present my portfolio. I also created my e-commerce website
                        and a blog.<br>...</br>My website: <a
                            href="https://www.toolscools.com">www.toolscools.com</a></br>My blog: <a
                            href="https://nuumner.blogspot.com/">www.nuumner.blogspot.com</a></p>
                    <img src="img/about.jpg" alt="" class="about__img">
                </div>

                <div>
                <!--INFORMATION-->
                <div class="about__information">
                    <h3 class="about__information-title">Information</h3>

                    <div class="about__information-data">
                        <i class='bx bx-user about__information-icon'></i>
                        <span>Chay Gadpan</span>
                    </div>

                    <div class="about__information-data">
                        <i class='bx bx-phone about__information-icon'></i>
                        <span>063-8015368</span>
                    </div>

                    <div class="about__information-data">
                        <i class='bx bx-envelope about__information-icon'></i>
                        <span>chaygadpan@gmail.com</span>
                    </div>
                </div>

                <!--EXPERIENCE-->
                <div class="about__information">
                    <h3 class="about__information-title">Experience</h3>

                    <div class="about__information-data">
                        <i class='bx bx-support about__information-icon'></i>
                        <div>
                            <span class="about__information-subtitle">IT Helpdesk</span>
                            <span class="about__information-subtitle-small">4 Months Job</span>
                        </div>
                    </div>

                    <div class="about__information-data">
                        <i class='bx bxs-wrench about__information-icon'></i>
                        <div>
                            <span class="about__information-subtitle">IT Support</span>
                            <span class="about__information-subtitle-small">2 Years Job</span>
                        </div>
                    </div>

                    <div class="about__information-data">
                        <i class='bx bx-code-block about__information-icon'></i>
                        <div>
                            <span class="about__information-subtitle">Webmaster</span>
                            <span class="about__information-subtitle-small">1 Year E-commerce Website</span>
                        </div>
                    </div>

                    <div class="about__information-data">
                        <i class='bx bxs-edit about__information-icon'></i>
                        <div>
                            <span class="about__information-subtitle">Web Administrator</span>
                            <span class="about__information-subtitle-small">4 Months Internship</span>
                        </div>
                    </div>
                    
                    <div class="about__information-data">
                        <i class='bx bx-briefcase about__information-icon'></i>
                        <div>
                            <span class="about__information-subtitle">UX/UI Design</span>
                            <span class="about__information-subtitle-small">2 Months UX/UI Design Course</span>
                        </div>
                    </div>
                </div>
                
                </div>
            </div>
        </section>

        <!--EDUCATION-->
        <section class="education section">
            <span class="section-subtitle">Qualification</span>
            <h2 class="section-title">My Education</h2>

            <div class="education__container bd-grid">
                <div class="education__content">
                    <div>
                        <h3 class="education__year">2013 - 2016</h3>
                        <span class="education__university">Sripatum University</span>
                    </div>

                    <div class="education__time">
                        <span class="education__rounder"></span>
                        <span class="education__line"></span>
                    </div>

                    <div>
                        <h3 class="education__race">Bachelor degree of Information Technology</h3>
                        <span class="education__specialty">Business Computer</span>
                    </div>
                </div>

                <div class="education__content">
                    <div>
                        <h3 class="education__year">2005 - 2011</h3>
                        <span class="education__university">Thungkhanan Wittaya</span>
                    </div>

                    <div class="education__time">
                        <span class="education__rounder"></span>
                        <span class="education__line"></span>
                    </div>

                    <div>
                        <h3 class="education__race">Maths-Science Program</h3>
                        <span class="education__specialty">Graduated from Thungkhanan Wittaya School at
                            Chantaburi</span>
                    </div>
                </div>
            </div>
        </section>

        <!--lANGUAGES-->
        <section class="languages section" id="languages">
            <span class="section-subtitle">Language Skills</span>
            <h2 class="section-title">My Language Levels</h2>

            <div class="languages__container bd-grid">
                <div class="languages__content">
                    <h3 class="languages__subtitle">THAI</h3>

                    <div class="languages__data">
                        <span class="languages__name">Speaking</span>
                        <span class="languages__number">90%</span>
                        <span class="languages__bar languages__thspeaking"></span>
                    </div>

                    <div class="languages__data">
                        <span class="languages__name">Listening</span>
                        <span class="languages__number">80%</span>
                        <span class="languages__bar languages__thlistening"></span>
                    </div>

                    <div class="languages__data">
                        <span class="languages__name">Reading</span>
                        <span class="languages__number">80%</span>
                        <span class="languages__bar languages__threading"></span>
                    </div>

                    <div class="languages__data">
                        <span class="languages__name">Writing</span>
                        <span class="languages__number">70%</span>
                        <span class="languages__bar languages__thwriting"></span>
                    </div>
                </div>

                <div class="languages__content">
                    <h3 class="languages__subtitle">ENGLISH</h3>

                    <div class="languages__data">
                        <span class="languages__name">Speaking</span>
                        <span class="languages__number">70%</span>
                        <span class="languages__bar languages__enspeaking"></span>
                    </div>

                    <div class="languages__data">
                        <span class="languages__name">Listening</span>
                        <span class="languages__number">80%</span>
                        <span class="languages__bar languages__enlistening"></span>
                    </div>

                    <div class="languages__data">
                        <span class="languages__name">Reading</span>
                        <span class="languages__number">80%</span>
                        <span class="languages__bar languages__enreading"></span>
                    </div>

                    <div class="languages__data">
                        <span class="languages__name">Writing</span>
                        <span class="languages__number">60%</span>
                        <span class="languages__bar languages__enwriting"></span>
                    </div>
                </div>
            </div>
        </section>

        <!--SKILLS-->
        <section class="skills section" id="skills">
            <span class="section-subtitle">What I Can Do</span>
            <h2 class="section-title">My Skills</h2>

            <div class="skills__container bd-grid">
                <div class="skills__content">
                    <i class='bx bxl-wordpress skills__icon'></i>
                    <h3 class="skills__title">Content Management System</h3>
                    <p class="skills__description">Experienced and able to use Wordpress and Joomla to designing and managing business website. Skilled in development, implementing themes and plugins.</p>
                </div>

                <div class="skills__content">
                    <i class='bx bx-pen skills__icon'></i>
                    <h3 class="skills__title">Design</h3>
                    <p class="skills__description">Be able to design layout for the website. Design website banner, advertisement banner, design web layout with Adobe Dreamweaver, and design User Experience and User Interface.</p>
                </div>

                <div class="skills__content">
                    <i class='bx bx-pencil skills__icon'></i>
                    <h3 class="skills__title">Content Writing</h3>
                    <p class="skills__description">Experienced create content for blog, article, and company website. Knowledgeable of content management systems.</p>
                </div>

                <div class="skills__content">
                    <i class='bx bx-server skills__icon'></i>
                    <h3 class="skills__title">Frontend Development</h3>
                    <p class="skills__description">Basic understanding of server-side and client-side script such as HTML, CSS, JavaScript, PHP.
                        Knowledge of image authoring tools such as Photoshop, Gimp.</p>
                </div>

                <div class="skills__content">
                    <i class='bx bx-data skills__icon'></i>
                    <h3 class="skills__title">Database</h3>
                    <p class="skills__description">Understanding of Database management and knowledge of SQL, Oracle, and Linux OS.</p>
                </div>

                <div class="skills__content">
                    <i class='bx bx-line-chart skills__icon'></i>
                    <h3 class="skills__title">Marketing</h3>
                    <p class="skills__description">Knowledgeable of Online Marketing and SEO. Experienced on Google tools such as Google AdSense, Adwords, Keyword Planner, Analytics.</p>
                </div>

            </div>
        </section>

        <!--OBJECTIVE-->
        <section class="objective section">
            <div class="objective__container bd-grid">
                <div class="objective__data">
                    <h2 class="section-title objective__title">Objective</h2>
                    <p class="objective__description">Use skills and experience from internships Web Administrator position and Webmaster of my own website. Apply these skills to work an assigned as best as possible and make maximize benefits for the company.</p>
                </div>

                <img src="img/objective.png" alt="" class="objective__img">
            </div>
        </section>

        <!--WORKS-->
        <section class="works section" id="works">
            <span class="section-subtitle">My portfolio</span>
            <h2 class="section-title">Recent Works</h2>

            <div class="works__container bd-grid">
                <div class="works__img">
                    <img src="img/portfolio/thumbnail/wordpress.jpg" alt="">

                    <div class="works__data">
                        <a href="https://toolscools.com/" class="works__link"><i class='bx bx-link-alt'></i></a>
                        <span class="works__title">Wordpress</span>
                    </div>
                </div>

                <div class="works__img">
                    <img src="img/portfolio/thumbnail/web_design.png" alt="">

                    <div class="works__data">
                        <a href="#" class="works__link"><i class='bx bx-link-alt'></i></a>
                        <span class="works__title">Web Design</span>
                    </div>
                </div>

                <div class="works__img">
                    <img src="img/portfolio/thumbnail/Banner.png" alt="">

                    <div class="works__data">
                        <a href="#" class="works__link"><i class='bx bx-link-alt'></i></a>
                        <span class="works__title">Banner Design</span>
                    </div>
                </div>

                <div class="works__img">
                    <img src="img/portfolio/thumbnail/ui_design.png" alt="">

                    <div class="works__data">
                        <a href="#" class="works__link"><i class='bx bx-link-alt'></i></a>
                        <span class="works__title">UI Design</span>
                    </div>
                </div>

                <div class="works__img">
                    <img src="img/portfolio/thumbnail/Infographic.png" alt="">

                    <div class="works__data">
                        <a href="#" class="works__link"><i class='bx bx-link-alt'></i></a>
                        <span class="works__title">Infographic</span>
                    </div>
                </div>

                <div class="works__img">
                    <img src="img/portfolio/thumbnail/content_writing.jpg" alt="">

                    <div class="works__data">
                        <a href="https://nuumner.blogspot.com/" class="works__link"><i class='bx bx-link-alt'></i></a>
                        <span class="works__title">Content Writing</span>
                    </div>
                </div>
            </div>


        </section>

            <!--alert message start-->
            <?php echo $alert; ?>
            <!--alert message end-->

        <!--CONTACT-->
        <section class="contact section" id="contact">
            <span class="section-subtitle">Contact</span>
            <h2 class="section-title">Get In Touch</h2>

            <div class="contact__container bd-grid">
                <form action="" class="contact__form" action="" method="post">
                    <div class="contact__inputs">
                        <input type="text" name="name" placeholder="Name" class="contact__input">
                        <input type="mail" name="email" placeholder="Email" class="contact__input">
                    </div>

                    <textarea name="message" id="" cols="0" rows="10" placeholder="Message" class="contact__input"></textarea>

                    <input type="submit" name="submit" value="Send Message" class="button contact__button">
                </form>
                <div>
                    <div class="contact__info">
                        <h3 class="contact__subtitle">Call me</h3>
                        <span class="contact__text">063-8015368</span>
                    </div>

                    <div class="contact__info">
                        <h3 class="contact__subtitle">E-mail</h3>
                        <span class="contact__text">chaygadpan@gmail.com</span>
                    </div>

                    <div class="contact__info">
                        <h3 class="contact__subtitle">Address</h3>
                        <span class="contact__text">1016 petchkasem rd. Nong Kham, Nong Khaem District, Bangkok
                            10160</span>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!--FOOTER-->
    <footer class="footer section">
        <div class="footer__container bd-grid">
            <h1 class="footer__title">CHAY</h1>
            <p class="footer__description">I am Chay Gadpan and this is my personal website.</p>

            <div class="footer__social">
                <a href="https://www.facebook.com/ShY.gadpan/" class="footer__link"><i class='bx bxl-facebook'></i></a>
                <a href="https://www.instagram.com/chychychychychychychy/" class="footer__link"><i class='bx bxl-instagram'></i></a>
                <a href="https://twitter.com/?lang=en" class="footer__link"><i class='bx bxl-twitter'></i></a>
            </div>

            <p class="footer__copy">All right reserved - 2021</p>
        </div>
    </footer>



    <!--MAIN JS-->
    <script type="text/javascript">
    if(window.history.replaceState){
        window.history.replaceState(null, null, window.location.href);
    }
    </script>
    <script src="main.js">


    </script>


</body>








</html>