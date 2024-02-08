<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Complete Responsive Cofee Shop Website Design</title>

    {{-- fontawesome cdns link --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    {{-- custome style --}}
    <link rel="stylesheet" href="/css/style2.css">
</head>

<body>
    {{-- header --}}
    <header class="header">
        <a href="#" class="logo">
            <img src="/images/2/logo.jpg" alt="">
        </a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#menu">menu</a>
            <a href="#products">products</a>
            <a href="#review">review</a>
            <a href="#contact">contact</a>
            <a href="#blogs">blogs</a>
        </nav>

        <div class="icons">
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-shopping-cart" id="cart-btn"></div>
            <div class="fas fa-bars" id="menu-btn"></div>
        </div>

        <div class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </div>

        <div class="cart-item-container">
            <div class="cart-item">
                <span class="fas fa-times"></span>
                <img src="/images/2/cappucino.jpg" alt="">
                <div class="content">
                    <h3>cart item 01</h3>
                    <div class="price">$15.99</div>
                </div>
            </div>
            <a href="#" class="btn">Checkout Now</a>
        </div>
    </header>
    {{-- end header --}}

    {{-- home section --}}
    <section class="home" id="home">
        <div class="content">
            <h3>fresh cofee in the morning</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis velit maiores vitae ipsum. Quibusdam, illo
                inventore magni ullam quisquam corporis maiores? Ducimus unde dolore assumenda.</p>
            <a href="#" class="btn">get yours now</a>
        </div>
    </section>
    {{-- end home section --}}

    {{-- about section --}}
    <section class="about" id="about">
        <h1 class="heading">
            <span>about </span> us
        </h1>

        <div class="row">
            <div class="image">
                <img src="/images/2/about.jpg" alt="">
            </div>

            <div class="content">
                <h3>what make our cofee special?</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, impedit? Facilis amet pariatur
                    nihil, corrupti dolores vero qui repellat possimus rem mollitia tempore praesentium omnis quos.
                    Excepturi quasi non voluptates?</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut eum non nulla cumque, itaque aperiam.
                </p>
                <a href="#" class="btn">learn more</a>
            </div>
        </div>

    </section>
    {{-- end about section --}}

    {{-- menu section --}}

    <section class="menu" id="menu">
        <h1 class="heading">our <span>menu</span></h1>
        <div class="box-container">
            <div class="box">
                <img src="/images/2/cappucino.jpg" alt="">
                <h3>Tasty and Healthy</h3>
                <div class="price">$15.99 <span>20.99</span></div>
                <a href="#" class="btn">Add to cart</a>
            </div>
            <div class="box">
                <img src="/images/2/cappucino.jpg" alt="">
                <h3>Tasty and Healthy</h3>
                <div class="price">$15.99 <span>20.99</span></div>
                <a href="#" class="btn">Add to cart</a>
            </div>
            <div class="box">
                <img src="/images/2/cappucino.jpg" alt="">
                <h3>Tasty and Healthy</h3>
                <div class="price">$15.99 <span>20.99</span></div>
                <a href="#" class="btn">Add to cart</a>
            </div>
            <div class="box">
                <img src="/images/2/cappucino.jpg" alt="">
                <h3>Tasty and Healthy</h3>
                <div class="price">$15.99 <span>20.99</span></div>
                <a href="#" class="btn">Add to cart</a>
            </div>
            <div class="box">
                <img src="/images/2/cappucino.jpg" alt="">
                <h3>Tasty and Healthy</h3>
                <div class="price">$15.99 <span>20.99</span></div>
                <a href="#" class="btn">Add to cart</a>
            </div>
            <div class="box">
                <img src="/images/2/cappucino.jpg" alt="">
                <h3>Tasty and Healthy</h3>
                <div class="price">$15.99 <span>20.99</span></div>
                <a href="#" class="btn">Add to cart</a>
            </div>
        </div>
    </section>

    {{-- end menu section --}}

    {{-- products section --}}

    <section class="products" id="products">
        <h1 class="heading">our <span>products</span></h1>
        <div class="box-container">
            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="/images/2/cofeepack.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Tasty and Healthy</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <div class="price">$15.99 <span>20.99</span></div>
                <a href="#" class="btn">Add to cart</a>
            </div>
            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="/images/2/cofeepack2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Tasty and Healthy</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <div class="price">$15.99 <span>20.99</span></div>
                <a href="#" class="btn">Add to cart</a>
            </div>
            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="/images/2/cofeepack.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Tasty and Healthy</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <div class="price">$15.99 <span>20.99</span></div>
                <a href="#" class="btn">Add to cart</a>
            </div>
            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="/images/2/cofeepack2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Tasty and Healthy</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <div class="price">$15.99 <span>20.99</span></div>
                <a href="#" class="btn">Add to cart</a>
            </div>
            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="/images/2/cofeepack.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Tasty and Healthy</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <div class="price">$15.99 <span>20.99</span></div>
                <a href="#" class="btn">Add to cart</a>
            </div>
            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="/images/2/cofeepack2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Tasty and Healthy</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <div class="price">$15.99 <span>20.99</span></div>
                <a href="#" class="btn">Add to cart</a>
            </div>
        </div>
    </section>

    {{-- end products section --}}


    {{-- custome js --}}
    <script src="/js/script2.js"></script>
</body>

</html>
