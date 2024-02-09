<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Responsive Personal Portfolio Website Design</title>

    {{-- custom css --}}
    <link rel="stylesheet" href="/css/style3.css">

    {{-- boxicons --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    {{-- header section --}}

    <header class="header">
        <a href="#" class="logo">portfolio</a>

        <i class='bx bx-menu' id="menu-icon"></i>

        <nav class="navbar">
            <a href="#home" class="active">home</a>
            <a href="#about">about</a>
            <a href="#service">service</a>
            <a href="#portfolio">portfolio</a>
            <a href="#contact">contact</a>
        </nav>
    </header>

    {{-- end header section --}}

    {{-- home section --}}

    <section class="home" id="home">
        <div class="home-content">
            <h3>Hello, It's Me</h3>
            <h1>Kuroragi</h1>
            <h3>I'm a <span class="multiple-text"></span></h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime minima illum necessitatibus doloribus
                aperiam laborum deleniti deserunt rerum sint fugiat accusantium, iusto iste minus sit ex ad, facere,
                repellendus est.</p>
            <div class="social-media">
                <a href="#"><i class='bx bxl-facebook'></i></a>
                <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                <a href="#"><i class='bx bxl-twitter'></i></a>
                <a href="#"><i class='bx bxl-linkedin'></i></a>
            </div>
            <a href="#" class="btn">Download CV</a>
        </div>

        <div class="home-image">
            <img src="/images/3/portofolio.png" alt="">
        </div>
    </section>

    {{-- end home section --}}

    {{-- about section --}}

    <section class="about" id="about">
        <div class="about-img">
            <img src="/images/3/portofolio.png" alt="">
        </div>

        <div class="about-content">
            <h2 class="heading">About <span>Me</span></h2>
            <h3>Fullstack Developer</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id laborum recusandae suscipit rerum laboriosam
                quo labore repellendus neque hic provident expedita veniam enim voluptatibus distinctio voluptatum
                asperiores alias, dolore consectetur.</p>
            <a href="#" class="btn">read More</a>
        </div>
    </section>
    {{-- end about section --}}

    {{-- services section --}}

    <section class="service" id="service">
        <h2 class="heading">Our <span>Services</span></h2>

        <div class="service-container">
            <div class="service-box">
                <i class='bx bx-code-alt'></i>
                <h3>Fullstack Developer</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident cum possimus earum consequatur,
                    illo optio quam architecto porro unde. Modi!</p>

                <a href="#" class="btn">Read More</a>
            </div>
            <div class="service-box">
                <i class='bx bxs-paint'></i>
                <h3>Graphic Design</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident cum possimus earum consequatur,
                    illo optio quam architecto porro unde. Modi!</p>

                <a href="#" class="btn">Read More</a>
            </div>
            <div class="service-box">
                <i class='bx bx-bar-chart'></i>
                <h3>Digital Marketing</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident cum possimus earum consequatur,
                    illo optio quam architecto porro unde. Modi!</p>

                <a href="#" class="btn">Read More</a>
            </div>
        </div>
    </section>

    {{-- end services section --}}

    {{-- portfolio section --}}

    <section class="portfolio" id="portfolio">
        <h2 class="heading">Latest <span>Project</span></h2>

        <div class="portfolio-container">
            <div class="portfolio-box">
                <img src="/images/3/port1.jpg" alt="">
                <div class="portfolio-layer">
                    <h4>Web Design</h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem, enim.</p>
                    <a href="#"><i class='bx bx-link-external'></i></a>
                </div>
            </div>
            <div class="portfolio-box">
                <img src="/images/3/port2.jpg" alt="">
                <div class="portfolio-layer">
                    <h4>Web Design</h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem, enim.</p>
                    <a href="#"><i class='bx bx-link-external'></i></a>
                </div>
            </div>
            <div class="portfolio-box">
                <img src="/images/3/port3.jpg" alt="">
                <div class="portfolio-layer">
                    <h4>Web Design</h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem, enim.</p>
                    <a href="#"><i class='bx bx-link-external'></i></a>
                </div>
            </div>
            <div class="portfolio-box">
                <img src="/images/3/port4.jpg" alt="">
                <div class="portfolio-layer">
                    <h4>Web Design</h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem, enim.</p>
                    <a href="#"><i class='bx bx-link-external'></i></a>
                </div>
            </div>
            <div class="portfolio-box">
                <img src="/images/3/port5.jpg" alt="">
                <div class="portfolio-layer">
                    <h4>Web Design</h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem, enim.</p>
                    <a href="#"><i class='bx bx-link-external'></i></a>
                </div>
            </div>
            <div class="portfolio-box">
                <img src="/images/3/port6.jpg" alt="">
                <div class="portfolio-layer">
                    <h4>Web Design</h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem, enim.</p>
                    <a href="#"><i class='bx bx-link-external'></i></a>
                </div>
            </div>
        </div>
    </section>

    {{-- end portfolio section --}}

    {{-- contact secytion --}}

    <section class="contact" id="contact">
        <h2 class="heading">Contact <span>Me!</span></h2>

        <form action="#">
            <div class="input-box">
                <input type="text" placeholder="Full Name">
                <input type="email" placeholder="Email Address">
            </div>
            <div class="input-box">
                <input type="number" placeholder="Mobile Number">
                <input type="text" placeholder="Email Subject">
            </div>
            <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
            <input type="submit" value="Send Message" class="btn">
        </form>
    </section>

    {{-- end contact secytion --}}

    {{-- footer --}}

    <footer class="footer">
        <div class="footer-text">
            <p>Copyright &copy; 2024 By Kuroragi | All Rights Reserved</p>
        </div>

        <div class="footer-iconTop">
            <a href="#home"><i class='bx bx-up-arrow-alt'></i></a>
        </div>
    </footer>

    {{-- end footer --}}


    {{-- scroll reveal --}}
    <script src="https://unpkg.com/scrollreveal"></script>

    {{-- typed js --}}
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

    {{-- custom js --}}
    <script src="/js/script3.js"></script>
</body>

</html>
