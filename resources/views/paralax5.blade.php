<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Device Website Design</title>
    {{-- custom css --}}
    <link rel="stylesheet" href="/css/style5.css">

    {{-- fontawesome cdnj --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    {{-- swiper css --}}
    <link rel="stylesheet" href="/css/swiper.bundle.min.css">

    {{-- boxicons --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --}}
</head>

<body>

    <header class="header">
        <a href="#" class="logo">faaz<span>celluler</span></a>

        <i class='bx bx-menu' id="menu-icon"></i>

        <nav class="navbar">
            <a href="#home" class="active">home</a>
            <a href="#about">tentang kami</a>
            <a href="#review">review</a>
            <a href="#contact">kontak</a>
            <a href="#blog">blog</a>
        </nav>
    </header>

    {{-- home section --}}
    <section class="home" id="home">
        <div class="content">
            <img src="/images/5/home-phone.png" alt="" id="home-phone">
            <h1>Jual beli HP, Harga Menarik!</h1>
            <ul class="list-benefit">
                <li>cek harga item gratis</li>
                <li><span>harga maksimal, cepat, dan tepat</span></li>
                <li>tempat jual dekat dan terjangkau</li>
            </ul>
            <a href="#" class="btn"><i class="fa fa-magnifying-glass"></i> Hubungi Kami Sekarang</a>
        </div>
    </section>

    {{-- acceptable section --}}
    <section class="accept" id="accept">
        <div class="accept-container">
            <div id="accept-slide">
                <div class="accept-item" style="background-image: url(/images/5/accept1.jpg)">
                    <div class="accept-content">
                        <h3 class="accept-name">LUNDEX</h3>
                        <p class="accept-description">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem corporis omnis nisi ipsa
                            perspiciatis consequuntur odio, pariatur voluptates necessitatibus aperiam.
                        </p>
                        {{-- <button>See More</button> --}}
                    </div>
                </div>
                <div class="accept-item" style="background-image: url(/images/5/accept2.jpg)">
                    <div class="accept-content">
                        <h3 class="accept-name">LUNDEX</h3>
                        <p class="accept-description">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem corporis omnis nisi ipsa
                            perspiciatis consequuntur odio, pariatur voluptates necessitatibus aperiam.
                        </p>
                        {{-- <button>See More</button> --}}
                    </div>
                </div>
                <div class="accept-item" style="background-image: url(/images/5/accept3.jpg)">
                    <div class="accept-content">
                        <h3 class="accept-name">LUNDEX</h3>
                        <p class="accept-description">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem corporis omnis nisi ipsa
                            perspiciatis consequuntur odio, pariatur voluptates necessitatibus aperiam.
                        </p>
                        {{-- <button>See More</button> --}}
                    </div>
                </div>
                <div class="accept-item" style="background-image: url(/images/5/accept4.jpg)">
                    <div class="accept-content">
                        <h3 class="accept-name">LUNDEX</h3>
                        <p class="accept-description">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem corporis omnis nisi ipsa
                            perspiciatis consequuntur odio, pariatur voluptates necessitatibus aperiam.
                        </p>
                        {{-- <button>See More</button> --}}
                    </div>
                </div>
            </div>
            <div class="accept-header">
                <h1 class="accept-heading">Kami Juga menerima Item Lain</h1>
            </div>
            <div class="accept-buttons">
                <button id="accept-prev"><i class="fa fa-angle-left"></i></button>
                <button id="accept-next"><i class="fa fa-angle-right"></i></button>
            </div>
        </div>
        <div class="sm-accept-container">
            <div class="sm-accept-slide">
                <div class="sm-accept-img">
                    <img src="/images/5/accept1.jpg" alt="">
                    <p class="sm-accept-des">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam, alias.
                    </p>
                </div>
            </div>
            <div class="sm-accept-slide">
                <div class="sm-accept-img">
                    <img src="/images/5/accept2.jpg" alt="">
                    <p class="sm-accept-des">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam, alias.
                    </p>
                </div>
            </div>
            <div class="sm-accept-slide">
                <div class="sm-accept-img">
                    <img src="/images/5/accept3.jpg" alt="">
                    <p class="sm-accept-des">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam, alias.
                    </p>
                </div>
            </div>
            <div class="sm-accept-slide">
                <div class="sm-accept-img">
                    <img src="/images/5/accept4.jpg" alt="">
                    <p class="sm-accept-des">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam, alias.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- portfolio section --}}

    <section class="portfolio" id="portfolio">
        <h2 class="heading">Kelebihan <span>Kami</span></h2>

        <div class="portfolio-container">
            <div class="portfolio-box">
                <img src="/images/5/adv1.jpg" alt="">
                <div class="portfolio-layer">
                    <h4>Web Design</h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem, enim.</p>
                    <a href="#"><i class='bx bx-link-external'></i></a>
                </div>
            </div>
            <div class="portfolio-box">
                <img src="/images/5/adv2.jpg" alt="">
                <div class="portfolio-layer">
                    <h4>Web Design</h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem, enim.</p>
                    <a href="#"><i class='bx bx-link-external'></i></a>
                </div>
            </div>
            <div class="portfolio-box">
                <img src="/images/5/adv3.jpg" alt="">
                <div class="portfolio-layer">
                    <h4>Web Design</h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem, enim.</p>
                    <a href="#"><i class='bx bx-link-external'></i></a>
                </div>
            </div>
        </div>
    </section>

    {{-- about section --}}
    {{-- <section class="advantage" id="advantage">
        <h1 class="heading">Kelebihan <span>Kami</span></h1>
        <div class="adv-container">
            <div class="adv-box">
                <img src="" alt="">
                <div class="des">Tepat Harganya</div>
            </div>
        </div>
        <img src="/images/5/kelebihan.jpg" alt="">
    </section> --}}

    {{-- review section --}}

    {{-- <section class="review" id="review">
        <h1 class="heading"><span>Komentar</span> Pelanggan</h1>
        <div class="cont">
            <div class="container swiper">
                <div class="ccontent">
                    <div class="swiper-wrapper">
                        <article class="article swiper-slide">
                            <div class="image">
                                <img src="/images/5/pic1.jpg" alt="images" class="img">
                                <div class="shadow"></div>
                            </div>
                            <div class="data">
                                <h3 class="name">john doe</h3>
                                <p class="description">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus aliquam animi
                                    dolor
                                    dicta. Pariatur ullam molestiae placeat, impedit magni labore?
                                </p>

                                <a href="#" class="button">view more</a>
                            </div>
                        </article>
                        <article class="article swiper-slide">
                            <div class="image">
                                <img src="/images/5/pic2.jpg" alt="images" class="img">
                                <div class="shadow"></div>
                            </div>
                            <div class="data">
                                <h3 class="name">john doe</h3>
                                <p class="description">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus aliquam animi
                                    dolor
                                    dicta. Pariatur ullam molestiae placeat, impedit magni labore?
                                </p>

                                <a href="#" class="button">view more</a>
                            </div>
                        </article>
                        <article class="article swiper-slide">
                            <div class="image">
                                <img src="/images/5/pic3.jpg" alt="images" class="img">
                                <div class="shadow"></div>
                            </div>
                            <div class="data">
                                <h3 class="name">john doe</h3>
                                <p class="description">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus aliquam animi
                                    dolor
                                    dicta. Pariatur ullam molestiae placeat, impedit magni labore?
                                </p>

                                <a href="#" class="button">view more</a>
                            </div>
                        </article>
                        <article class="article swiper-slide">
                            <div class="image">
                                <img src="/images/5/pic4.jpg" alt="images" class="img">
                                <div class="shadow"></div>
                            </div>
                            <div class="data">
                                <h3 class="name">john doe</h3>
                                <p class="description">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus aliquam animi
                                    dolor
                                    dicta. Pariatur ullam molestiae placeat, impedit magni labore?
                                </p>

                                <a href="#" class="button">view more</a>
                            </div>
                        </article>
                    </div>
                </div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev">
                    <i class="fa fa-greater-than"></i>
                </div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section> --}}

    {{-- blog section --}}
    <section class="blogs" id="blogs">
        <h1 class="heading">our <span>blogs</span></h1>

        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="/images/2/blog-1.jpg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="title">tasty and refreshing coffee</a>
                    <span>by admin / 21st may, 2021</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, blanditiis.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="/images/2/blog-2.jpg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="title">tasty and refreshing coffee</a>
                    <span>by admin / 21st may, 2021</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, blanditiis.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="/images/2/blog-3.jpg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="title">tasty and refreshing coffee</a>
                    <span>by admin / 21st may, 2021</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, blanditiis.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="/images/2/blog-1.jpg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="title">tasty and refreshing coffee</a>
                    <span>by admin / 21st may, 2021</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, blanditiis.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="/images/2/blog-2.jpg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="title">tasty and refreshing coffee</a>
                    <span>by admin / 21st may, 2021</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, blanditiis.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="/images/2/blog-3.jpg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="title">tasty and refreshing coffee</a>
                    <span>by admin / 21st may, 2021</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, blanditiis.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>
        </div>
    </section>

    {{-- contact secytion --}}

    <section class="contact" id="contact">
        <h2 class="heading">Hubungi <span>Kami!</span></h2>
        <div class="contact-form">

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
        </div>
        <h2 class="heading">WA Kami</h2>
        <div class="whatsapp">
            <a href="http://wa.me/082261317274" target="_blank" rel="noopener noreferrer">
                <button class="whatsapp-btn"><i class="fab fa-whatsapp"></i> Hubungi Kami</button>
            </a>
        </div>
    </section>

    {{-- footer --}}

    <footer class="footer">
        <div class="footer-text">
            <p>Copyright &copy; 2024 By Kuroragi | All Rights Reserved</p>
        </div>

        <div class="footer-iconTop">
            <a href="#home"><i class='fa fa-arrow-up'></i></a>
        </div>
    </footer>

    {{-- scroll reveal --}}
    <script src="https://unpkg.com/scrollreveal"></script>

    {{-- typed js --}}
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

    {{-- swiper js --}}
    <script src="/js/swiper-bundle.min.js"></script>
    <script src="/js/main5.js"></script>

    {{-- custom js --}}
    <script src="/js/script5.js"></script>
</body>

</html>
