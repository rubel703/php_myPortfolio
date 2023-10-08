<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio Website</title>
    <link rel="stylesheet" href="<?php asset("frontend/"); ?>css/bootstrap.css" />
    <link rel="stylesheet" href="<?php asset("frontend/"); ?>css/all.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="<?php asset("frontend/"); ?>css/style.css" />
</head>

<body>
<header>
    <nav class="navbar navbar-expand-lg bg-black navbar-dark navbar1">
        <div class="container">
            <a href="#" class="navbar-brand">
                <span class="navbar-brand-firstname">Hossain Rubel</span>
                <span class="navbar-brand-dot">.</span>
            </a>

            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mainMenu"> <i class="navbar-toggler-icon"></i> </button>

            <div class="collapse navbar-collapse" id="mainMenu">
                <ul class="navbar-nav ms-auto">
                    <li><a href="#" class="nav-link">Home</a></li>
                    <li><a href="#about" class="nav-link">About Me</a></li>
                    <li><a href="#projects" class="nav-link">Projects</a></li>
                    <li><a href="#services" class="nav-link">Services</a></li>
                    <li><a href="#blogs" class="nav-link">Blogs</a></li>
                    <li><a href="#contact" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="banner container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="banner-main-img">
                <div class="banner-main-img-upper-border"></div>
                    <img
                        src="<?php asset("frontend/"); ?>img/my img.png"
                        alt="banner-img"
                        width="280px"
                        height="560px"/>
                        <div class="banner-main-img-lower-border"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="banner-text">
                    <h4 class="banner-text-header-top">Hi, I'm</h4>
                    <h5 class="banner-text-header">HOSSAIN RUBEL</h5>
                    <h3 class="banner-text-header-bottom">
                        Full-Stack Web Developer(php&laravel)
                    </h3>
                    <p class="banner-text-paragraph">Logical and organized individual with a strong foundation in software engineering.Proficient in Java Script, PHP, Laravel seeking to raise coding and providing error free codes. </p>
                    <button class="btn btn-outline-warning"><a href="assets/files/Naimul Huda Walid_Resume.pdf"download=" " class="btn-link"><i class="fa fa-download"></i> Download CV </a></button>
                </div>
            </div>
        </div>
    </section>
</header>

<main>
    <section class="container about my-5" id="about">
        <div class="main-title">
            <h2>About <span>me</span><span class="bg-text">About me</span></h2>
        </div>
        <div class="about-container">
            <div class="left-about">
                <h4>Information About me</h4>
                <p>
                As a web developer, my objective is to create user friendly and efficient websites 
                that are visually appealing and easy to navigate. I utilize my skills in HTML, CSS, JS 
                and PHP to develop websites that meet all the requirements of the client. I am 
                confident that I can apply these skills to a web developer role, and would like the 
                opportunity to work with more complex codebases.  <br />
                    <br />
                    I additions to development, I 
                    also offer maintenance and support services to keep the website running 
                    smoothly. My ultimate goal is to provide clients with a high quality product that 
                    meets their expectations and needs.
                </p>
                <div class="">
                    <button class="btn btn-outline-warning">
                        <a href="#myModal" class="btn-link" data-bs-toggle="modal">Know More</a>
                    </button>
                </div>
            </div>
            <div class="right-about">
                <div class="about-item">
                    <div class="abt-text">
                        <p class="large-text">10+</p>
                        <p class="small-text">
                            Projects <br />
                            Completed
                        </p>
                    </div>
                </div>
                <div class="about-item">
                    <div class="abt-text">
                        <p class="large-text">1.5+</p>
                        <p class="small-text">
                            Months of <br />
                            experience
                        </p>
                    </div>
                </div>
                <div class="about-item">
                    <div class="abt-text">
                        <p class="large-text">300+</p>
                        <p class="small-text">
                            YouTube <br />
                            Subscribers
                        </p>
                    </div>
                </div>
                <div class="about-item">
                    <div class="abt-text">
                        <p class="large-text">20+</p>
                        <p class="small-text">
                            On Going <br />
                            Projects
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-stats">
            <h4 class="stat-title">My Skills</h4>
            <div class="progress-bars">
                <div class="progress-bar">
                    <p class="prog-title">html5</p>
                    <div class="progress-con">
                        <p class="prog-text">90%</p>
                        <div class="progress">
                            <span class="html"></span>
                        </div>
                    </div>
                </div>
                <div class="progress-bar">
                    <p class="prog-title">css3</p>
                    <div class="progress-con">
                        <p class="prog-text">80%</p>
                        <div class="progress">
                            <span class="css"></span>
                        </div>
                    </div>
                </div>
                <div class="progress-bar">
                    <p class="prog-title">javascript</p>
                    <div class="progress-con">
                        <p class="prog-text">65%</p>
                        <div class="progress">
                            <span class="js"></span>
                        </div>
                    </div>
                </div>
                <div class="progress-bar">
                    <p class="prog-title">Bootstrap</p>
                    <div class="progress-con">
                        <p class="prog-text">75%</p>
                        <div class="progress">
                            <span class="bootstrap"></span>
                        </div>
                    </div>
                </div>
                <div class="progress-bar">
                    <p class="prog-title">Php</p>
                    <div class="progress-con">
                        <p class="prog-text">50%</p>
                        <div class="progress">
                            <span class="php"></span>
                        </div>
                    </div>
                </div>
                <div class="progress-bar">
                    <p class="prog-title">Laravel</p>
                    <div class="progress-con">
                        <p class="prog-text">0%</p>
                        <div class="progress">
                            <span class="laravel"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h4 class="stat-title">My Timeline</h4>
        <div class="timeline">
            <div class="timeline-item">
                <div class="tl-icon">
                    <i class="fas fa-briefcase"></i>
                </div>
                <p class="tl-duration">2015 - 2016</p>
                <h5>SSC<span> - Chatar Paiya High School</span></h5>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
                    quasi vero fugit.
                </p>
            </div>
            <div class="timeline-item">
                <div class="tl-icon">
                    <i class="fas fa-briefcase"></i>
                </div>
                <p class="tl-duration">2017 - 2018</p>
                <h5>HSC<span> - Chowmuhani Govt. SA College</span></h5>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
                    quasi vero fugit.
                </p>
            </div>
            <div class="timeline-item">
                <div class="tl-icon">
                    <i class="fas fa-briefcase"></i>
                </div>
                <p class="tl-duration">2019 - 2023</p>
                <h5>CSE Degree<span> - University of South Asia</span></h5>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
                    quasi vero fugit.
                </p>
            </div>
            <div class="timeline-item">
                <div class="tl-icon">
                    <i class="fas fa-briefcase"></i>
                </div>
                <p class="tl-duration">2019 - present</p>
                <h5>Content Creator<span> - YouTube</span></h5>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
                    quasi vero fugit.
                </p>
            </div>
            <div class="timeline-item">
                <div class="tl-icon">
                    <i class="fas fa-briefcase"></i>
                </div>
                <p class="tl-duration">2021 - 2022</p>
                <h5>Front-end Web Developer<span> - Hope Tech Ltd.</span></h5>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
                    quasi vero fugit.
                </p>
            </div>
            <div class="timeline-item">
                <div class="tl-icon">
                    <i class="fas fa-briefcase"></i>
                </div>
                <p class="tl-duration">2023 - present</p>
                <h5>PHP With Laravel Framework<span> - SEIP BITM</span></h5>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
                    quasi vero fugit.
                </p>
            </div>
        </div>
    </section>

    <section class="container project my-5" id="projects">
        <div class="main-title">
            <h2>My <span>Work</span><span class="bg-text">My Work</span></h2>
        </div>
        <p class="proj-text">
            Here is some of my work that I've done in various programming
            languages.
        </p>
        <div class="projects">
            <div class="project-item">
                <div class="image">
                    <img src="<?php asset("frontend/"); ?>img/p1.jpg" alt="" />
                </div>
                <div class="hover-items">
                    <h3>Project Source</h3>
                    <div class="icons">
                        <a href="#" class="icon">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="project-item">
                <div class="image">
                    <img src="<?php asset("frontend/"); ?>img/p2.jpg" alt="" />
                </div>
                <div class="hover-items">
                    <h3>Project Source</h3>
                    <div class="icons">
                        <a href="#" class="icon">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="project-item">
                <div class="image">
                    <img src="<?php asset("frontend/"); ?>img/p3.jpg" alt="" />
                </div>
                <div class="hover-items">
                    <h3>Project Source</h3>
                    <div class="icons">
                        <a href="#" class="icon">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="project-item">
                <div class="image">
                    <img src="<?php asset("frontend/"); ?>img/p4.jpg" alt="" />
                </div>
                <div class="hover-items">
                    <h3>Project Source</h3>
                    <div class="icons">
                        <a href="#" class="icon">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="project-item">
                <div class="image">
                    <img src="<?php asset("frontend/"); ?>img/p5.jpg" alt="" />
                </div>
                <div class="hover-items">
                    <h3>Project Source</h3>
                    <div class="icons">
                        <a href="#" class="icon">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="project-item">
                <div class="image">
                    <img src="<?php asset("frontend/"); ?>img/p6.jpg" alt="" />
                </div>
                <div class="hover-items">
                    <h3>Project Source</h3>
                    <div class="icons">
                        <a href="#" class="icon">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- <div class="project-item">
                <div class="image">
                    <img src="<?php asset("frontend/"); ?>img/p7.jpg" alt="" />
                </div>
                <div class="hover-items">
                    <h3>Project Source</h3>
                    <div class="icons">
                        <a href="#" class="icon">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div> -->
        </div>
    </section>

    <section class="service my-5" id="services">
        <div class="main-title">
            <h2>
                MY <span>Services</span><span class="bg-text">My Services</span>
            </h2>
        </div>
        <p class="proj-text">
            Here is some of my Services that I am offering with quality assurance.
        </p>
        <div class="container">
            <div class="card">
                <img src="<?php asset("frontend/"); ?>img/web-design.png" alt="car" />
                <div class="intro">
                    <h1>Web Design</h1>
                    <p>
                        In this <span>Web Design</span> service Lorem ipsum dolor sit,
                        amet consectetur adipisicing elit. Exercitationem debitis error
                        magnam alias saepe quis!
                    </p>
                </div>
            </div>
            <div class="card">
                <img src="<?php asset("frontend/"); ?>img/web-development.webp" alt="car" />
                <div class="intro">
                    <h1>Web Development</h1>
                    <p>
                        In this <span>Web Development</span> service Lorem ipsum dolor
                        sit, amet consectetur adipisicing elit. Exercitationem debitis
                        error magnam alias saepe quis!
                    </p>
                </div>
            </div>
            <div class="card">
                <img src="<?php asset("frontend/"); ?>img/bug-fixing.png" alt="car" />
                <div class="intro">
                    <h1>Bug Fixing</h1>
                    <p>
                        In this <span>Bug Fixing</span> service Lorem ipsum dolor sit,
                        amet consectetur adipisicing elit. Exercitationem debitis error
                        magnam alias saepe quis!
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="container my-5" id="blogs">
        <div class="blogs-content">
            <div class="main-title b-s-1400">
                <h2>My <span>Blogs</span><span class="bg-text">My Blogs</span></h2>
            </div>
            <div class="blogs">
                <div class="blog">
                    <iframe
                        class="video"
                        width="100%"
                        height="300px"
                        src="https://www.youtube.com/embed/Q4MoUuOZQxc"
                        title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                    <div class="blog-text">
                        <h4>How to Create Your Own Website</h4>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Doloribus natus voluptas, eos obcaecati recusandae amet?
                        </p>
                    </div>
                </div>
                <div class="blog">
                    <iframe
                        class="video"
                        width="100%"
                        height="300px"
                        src="https://www.youtube.com/embed/uamCNmkFv74"
                        title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen
                    ></iframe>
                    <div class="blog-text">
                        <h4>How to Become an Expert in Web Design</h4>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Doloribus natus voluptas, eos obcaecati recusandae amet?
                        </p>
                    </div>
                </div>
                <div class="blog">
                    <iframe
                        class="video"
                        width="100%"
                        height="300px"
                        src="https://www.youtube.com/embed/PNUUxHX41PE"
                        title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen
                    ></iframe>
                    <div class="blog-text">
                        <h4>Become a Web Designer in 10 Days</h4>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Doloribus natus voluptas, eos obcaecati recusandae amet?
                        </p>
                    </div>
                </div>
                <div class="blog">
                    <img src="<?php asset("frontend/"); ?>img/blog3.jpg" alt="" />
                    <div class="blog-text">
                        <h4>Debbuging made easy with Web Inspector</h4>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Doloribus natus voluptas, eos obcaecati recusandae amet?
                        </p>
                    </div>
                </div>
                <div class="blog">
                    <img src="<?php asset("frontend/"); ?>img/port1.jpg" alt="" />
                    <div class="blog-text">
                        <h4>Get started with Web Design and UI Design</h4>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Doloribus natus voluptas, eos obcaecati recusandae amet?
                        </p>
                    </div>
                </div>
                <div class="blog">
                    <img src="<?php asset("frontend/"); ?>img/port3.jpg" alt="" />
                    <div class="blog-text">
                        <h4>This is what you need to know about Web Design</h4>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Doloribus natus voluptas, eos obcaecati recusandae amet?
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container contact my-5" id="contact">
        <div class="contact-container">
            <div class="main-title mb-5">
                <h2>Reach <span>Me</span><span class="bg-text">Reach Me</span></h2>
            </div>

            <div class="row">
                <div class="col-md-4 col-w-1320-l">
                    <div class="">
                        <ul class="nav nav-tabs">
                            <li>
                                <a
                                    href="#me"
                                    class="nav-link active contact-nav-tab"
                                    data-bs-toggle="tab"
                                >Myself</a
                                >
                            </li>
                            <li>
                                <a
                                    href="#manager"
                                    class="nav-link contact-nav-tab"
                                    data-bs-toggle="tab"
                                >Manager</a
                                >
                            </li>
                            <li>
                                <a
                                    href="#cordinator"
                                    class="nav-link contact-nav-tab"
                                    data-bs-toggle="tab"
                                >Cordinator</a
                                >
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="me">
                                <div class="left-contact">
                                    <div class="contact-info">
                                        <div class="contact-img mb-3">
                                            <img
                                                src="<?php asset("frontend/"); ?>img/my img2.jpg"
                                                alt=""
                                                width="100px"
                                                height="100px"
                                            />
                                        </div>

                                        <div class="contact-item">
                                            <div class="icon">
                                                <i class="fas fa-user"></i>
                                                <span>Name :</span>
                                            </div>
                                            <p>Hossain Rubel</p>
                                        </div>
                                        <div class="contact-item">
                                            <div class="icon">
                                                <i class="fas fa-map-marker-alt"></i>
                                                <span>Location :</span>
                                            </div>
                                            <p>Dhaka, Bangladesh</p>
                                        </div>
                                        <div class="contact-item">
                                            <div class="icon">
                                                <i class="fas fa-envelope"></i>
                                                <span>Email :</span>
                                            </div>
                                            <p>
                                                <span>hossainrubel.cse29@gmail.com</span>
                                            </p>
                                        </div>
                                        <div class="contact-item">
                                            <div class="icon">
                                                <i class="fas fa-user-graduate"></i>
                                                <span>Education :</span>
                                            </div>
                                            <p>
                                                <span>University of South Asia, Dhaka</span>
                                            </p>
                                        </div>
                                        <div class="contact-item">
                                            <div class="icon">
                                                <i class="fas fa-user-graduate"></i>
                                                <span>Mobile Number :</span>
                                            </div>
                                            <p>
                                                <span>+880 1778267062</span>
                                            </p>
                                        </div>
                                        <div class="contact-item">
                                            <div class="icon">
                                                <i class="fas fa-globe-africa"></i>
                                                <span>Languages :</span>
                                            </div>
                                            <p>
                                                <span>Bangla, English, Hindi</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="contact-icons">
                                        <div class="contact-icon">
                                            <a href="www.facebook.com" target="_blank">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                            <a href="#" target="_blank">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                            <a href="#" target="_blank">
                                                <i class="fab fa-github"></i>
                                            </a>
                                            <a href="#" target="_blank">
                                                <i class="fab fa-youtube"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="manager">
                                <div class="left-contact">
                                    <div class="contact-info">
                                        <div class="contact-img mb-3">
                                            <img
                                                src="<?php asset("frontend/"); ?>img/manager.jpg"
                                                alt=""
                                                width="100px"
                                                height="100px"
                                            />
                                        </div>

                                        <div class="contact-item">
                                            <div class="icon">
                                                <i class="fas fa-user"></i>
                                                <span>Name :</span>
                                            </div>
                                            <p>Alex Jihan</p>
                                        </div>
                                        <div class="contact-item">
                                            <div class="icon">
                                                <i class="fas fa-map-marker-alt"></i>
                                                <span>Location :</span>
                                            </div>
                                            <p>Dhaka, Bangladesh</p>
                                        </div>
                                        <div class="contact-item">
                                            <div class="icon">
                                                <i class="fas fa-envelope"></i>
                                                <span>Email :</span>
                                            </div>
                                            <p>
                                                <span>manager@gmail.com</span>
                                            </p>
                                        </div>
                                        <div class="contact-item">
                                            <div class="icon">
                                                <i class="fas fa-user-graduate"></i>
                                                <span>Education :</span>
                                            </div>
                                            <p>
                                                <span>Brac University, Dhaka</span>
                                            </p>
                                        </div>
                                        <div class="contact-item">
                                            <div class="icon">
                                                <i class="fas fa-user-graduate"></i>
                                                <span>Mobile Number :</span>
                                            </div>
                                            <p>
                                                <span>+880 1778267062</span>
                                            </p>
                                        </div>
                                        <div class="contact-item">
                                            <div class="icon">
                                                <i class="fas fa-globe-africa"></i>
                                                <span>Languages :</span>
                                            </div>
                                            <p>
                                                <span>Bangla, English, Spanis</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="contact-icons">
                                        <div class="contact-icon">
                                            <a href="www.facebook.com" target="_blank">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                            <a href="#" target="_blank">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                            <a href="#" target="_blank">
                                                <i class="fab fa-github"></i>
                                            </a>
                                            <a href="#" target="_blank">
                                                <i class="fab fa-youtube"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="cordinator">
                                <div class="left-contact">
                                    <div class="contact-info">
                                        <div class="contact-img mb-3">
                                            <img
                                                src="<?php asset("frontend/"); ?>img/cordinator.png"
                                                alt=""
                                                width="100px"
                                                height="100px"
                                            />
                                        </div>

                                        <div class="contact-item">
                                            <div class="icon">
                                                <i class="fas fa-user"></i>
                                                <span>Name :</span>
                                            </div>
                                            <p>Rakib Huda</p>
                                        </div>
                                        <div class="contact-item">
                                            <div class="icon">
                                                <i class="fas fa-map-marker-alt"></i>
                                                <span>Location :</span>
                                            </div>
                                            <p>Noakhali, Bangladesh</p>
                                        </div>
                                        <div class="contact-item">
                                            <div class="icon">
                                                <i class="fas fa-envelope"></i>
                                                <span>Email :</span>
                                            </div>
                                            <p>
                                                <span>cordinator@gmail.com</span>
                                            </p>
                                        </div>
                                        <div class="contact-item">
                                            <div class="icon">
                                                <i class="fas fa-user-graduate"></i>
                                                <span>Education :</span>
                                            </div>
                                            <p>
                                                <span>Dhaka University, Dhaka</span>
                                            </p>
                                        </div>
                                        <div class="contact-item">
                                            <div class="icon">
                                                <i class="fas fa-user-graduate"></i>
                                                <span>Mobile Number :</span>
                                            </div>
                                            <p>
                                                <span>+880 1778267062</span>
                                            </p>
                                        </div>
                                        <div class="contact-item">
                                            <div class="icon">
                                                <i class="fas fa-globe-africa"></i>
                                                <span>Languages :</span>
                                            </div>
                                            <p>
                                                <span>Bangla, English</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="contact-icons">
                                        <div class="contact-icon">
                                            <a href="www.facebook.com" target="_blank">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                            <a href="#" target="_blank">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                            <a href="#" target="_blank">
                                                <i class="fab fa-github"></i>
                                            </a>
                                            <a href="#" target="_blank">
                                                <i class="fab fa-youtube"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-w-1320-r">
                    <div class="right-contact mt-5">
                        <form action="" class="contact-form">
                            <div class="input-control i-c-2">
                                <input type="text" required placeholder="YOUR NAME" />
                                <input type="email" required placeholder="YOUR EMAIL" />
                            </div>
                            <div class="input-control">
                                <input type="text" required placeholder="ENTER SUBJECT" />
                            </div>
                            <div class="input-control">
                    <textarea
                        name=""
                        id=""
                        cols="15"
                        rows="8"
                        placeholder="Message Here..."
                    ></textarea>
                            </div>
                            <div class="submit-btn">
                                <a href="#msgModal" data-bs-toggle="modal"
                                ><input type="submit" class="btn btn-outline-warning"
                                    /></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<footer class="footer mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 f-left">
                <p>&copy; All Rights Reserved.</p>
            </div>
            <div class="col-md-6 f-right">
                <p>Design & Developed By Hossain Rubel</p>
            </div>
        </div>
    </div>
</footer>

<div class="modal fade my-mod" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content my-mod-content">
            <div class="modal-header">
                <h3>Bio-Data</h3>
                <button
                    type="button"
                    class="btn-close my-mod-btn bg-white"
                    data-bs-dismiss="modal"
                ></button>
            </div>
            <div class="modal-body">
                <div>
                    <img
                        class="my-mod-img"
                        src="<?php asset("frontend/"); ?>img/my img.png"
                        alt="profile-pic"/>
                </div>
                <p><b>Name:</b> Hossain Rubel</p>
                <p><b>Father's Name:</b> Nur Mohammed</p>
                <p><b>Mother's Name:</b> Nayan Begum</p>
                <p><b>Date of Birth:</b> 04/09/2000</p>
                <p><b>Place of Birth:</b> Noakhali</p>
                <p><b>Blood Group:</b> A+</p>
                <p><b>Religion:</b> Islam</p>
                <p><b>Nationality:</b> Bangladeshi</p>
                <p><b>Marital Status:</b> UnMarried</p>
                <p><b>Address:</b> 667/5/1, Molla Road, Mirpur-2, Dhaka-1216.</p>
            </div>
            <div class="modal-footer">Thank You.</div>
        </div>
    </div>
</div>
<div class="modal fade my-mod" id="msgModal">
    <div class="modal-dialog">
        <div class="modal-content my-mod-content">
            <div class="modal-header">
                <h3>Form Submission Successfull</h3>
                <button
                    type="button"
                    class="btn-close my-mod-btn bg-white"
                    data-bs-dismiss="modal"
                ></button>
            </div>
            <div class="modal-body">
                <h3>We will Contact You as soon as Possible.</h3>
            </div>
            <div class="modal-footer">Thank You.</div>
        </div>
    </div>
</div>

<script src="assets/frontend/js/jquery-3.6.3.js"></script>
<script src="assets/frontend/js/bootstrap.bundle.js"></script>
</body>
</html>
