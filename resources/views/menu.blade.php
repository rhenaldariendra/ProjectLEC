<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/asset/css/main.css">
    <link rel="stylesheet" href="/asset/css/menu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>Menu</title>
</head>

<body>
    <div class="container-all">
        <nav class="after">
            <div class="nav-left">
                <a class="logo" href="#">
                    <img src="/asset/img/logo.svg" alt="logo">
                </a>
            </div>

            <div class="nav-right">
                <li class="navlist-item">
                    <a href="/"
                        class="item {{ (request()->is('/'))||(request()->is('home')) ? 'active' : '' }}">Home</a>
                </li>
                <li class="navlist-item">
                    <a href="menu" class="item {{ (request()->is('menu')) ? 'active' : '' }}">Menu</a>
                </li>
                <li class="navlist-item">
                    <a href="#" class="item {{ (request()->is('aboutus')) ? 'active' : '' }}">About Us</a>
                </li>
                <li class="navlist-item">
                    <a href="reservation"
                        class="item {{ (request()->is('reservation')) ? 'active' : '' }}">Reservation</a>
                </li>
                
                @guest
                <li class="navlist-item">
                    <a href="{{ route('login') }}" class="item">Login</a>
                </li>
                @else
                <li class="navlist-item">
                    <a href="#" class="item {{ (request()->is('account')) ? 'active' : '' }}">Account</a>
                </li>
                <li class="navlist-item">
                    <a href="{{ route('signout') }}" class="item">Logout</a>
                </li>
                @endguest
            </div>
        </nav>



        <div id="top" class="menus">

            <div class="containers a">
                <div class="overlay">
                    <a href="#pasta" class="list">Pasta</a>
                </div>
            </div>
            <div class="containers b">
                <div class="overlay">
                    <a href="#pizza" class="list">Pizza</a>
                </div>
            </div>
            <div class="containers c">
                <div class="overlay">
                    <a href="#dessert" class="list">Dessert</a>
                </div>
            </div>
            <div class="containers d">
                <div class="overlay">
                    <a href="#beverage" class="list">Beverage</a>
                </div>
            </div>
        </div>

        <div id="pasta" class="menu-container pasta">

            <div class="list-menu">
                <div class="top-menu">
                    <div class="left-top">
                        <h5>SEMPLICE DE RISTORANTE</h5>
                        <div class="garis-top"></div>
                    </div>

                    <div class="center-top">
                        <img src="/asset/img/pasta.png" alt="">
                    </div>
                    <div class="right-top">
                        <h5>MENUS</h5>
                        <div class="garis-top"></div>
                    </div>
                </div>

                <div class="title">
                    <div class="garis"></div>
                    <h1>PASTA</h1>
                    <div class="garis"></div>
                </div>
                <div class="all-menu">
                    <div class="tes">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam nisi quaerat maiores
                            inventore natus fuga ipsam, illo laudantium fugiat voluptas asperiores quasi dolore atque
                            eveniet alias dolor molestias perferendis impedit.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam nisi quaerat maiores
                            inventore natus fuga ipsam, illo laudantium fugiat voluptas asperiores quasi dolore atque
                            eveniet alias dolor molestias perferendis impedit.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam nisi quaerat maiores
                            inventore natus fuga ipsam, illo laudantium fugiat voluptas asperiores quasi dolore atque
                            eveniet alias dolor molestias perferendis impedit.</p>
                    </div>
                    <div class="tes">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam nisi quaerat maiores
                            inventore natus fuga ipsam, illo laudantium fugiat voluptas asperiores quasi dolore atque
                            eveniet alias dolor molestias perferendis impedit.</p>
                    </div>
                    <div class="tes">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam nisi quaerat maiores
                            inventore natus fuga ipsam, illo laudantium fugiat voluptas asperiores quasi dolore atque
                            eveniet alias dolor molestias perferendis impedit.</p>
                    </div>
                    <div class="tes">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam nisi quaerat maiores
                            inventore natus fuga ipsam, illo laudantium fugiat voluptas asperiores quasi dolore atque
                            eveniet alias dolor molestias perferendis impedit.</p>
                    </div>


                </div>
            </div>
            <div class="totop">
                <a href="#top">
                    Back to Top
                </a>
            </div>
        </div>

        <div id="pizza" class="menu-container pizza">
            <div class="list-menu">
                <div class="top-menu">
                    <div class="left-top">
                        <h5>SEMPLICE DE RISTORANTE</h5>
                        <div class="garis-top"></div>
                    </div>

                    <div class="center-top">
                        <img src="/asset/img/pizza.png" alt="">
                    </div>
                    <div class="right-top">
                        <h5>MENUS</h5>
                        <div class="garis-top"></div>
                    </div>
                </div>

                <div class="title">
                    <div class="garis"></div>
                    <h1>PIZZA</h1>
                    <div class="garis"></div>
                </div>
                <div class="all-menu">
                    <div class="tes">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam nisi quaerat maiores
                            inventore
                            natus fuga ipsam, illo laudantium fugiat voluptas asperiores quasi dolore atque eveniet
                            alias
                            dolor molestias perferendis impedit.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam nisi quaerat maiores
                            inventore
                            natus fuga ipsam, illo laudantium fugiat voluptas asperiores quasi dolore atque eveniet
                            alias
                            dolor molestias perferendis impedit.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam nisi quaerat maiores
                            inventore
                            natus fuga ipsam, illo laudantium fugiat voluptas asperiores quasi dolore atque eveniet
                            alias
                            dolor molestias perferendis impedit.</p>
                    </div>
                    <div class="tes">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam nisi quaerat maiores
                            inventore
                            natus fuga ipsam, illo laudantium fugiat voluptas asperiores quasi dolore atque eveniet
                            alias
                            dolor molestias perferendis impedit.</p>
                    </div>
                    <div class="tes">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam nisi quaerat maiores
                            inventore
                            natus fuga ipsam, illo laudantium fugiat voluptas asperiores quasi dolore atque eveniet
                            alias
                            dolor molestias perferendis impedit.</p>
                    </div>
                    <div class="tes">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam nisi quaerat maiores
                            inventore
                            natus fuga ipsam, illo laudantium fugiat voluptas asperiores quasi dolore atque eveniet
                            alias
                            dolor molestias perferendis impedit.</p>
                    </div>


                </div>
            </div>


            <div class="totop">
                <a href="#top">
                    Back to Top
                </a>
            </div>
        </div>

        <div id="dessert" class="menu-container dessert">
            <div class="list-menu">
                <div class="top-menu">
                    <div class="left-top">
                        <h5>SEMPLICE DE RISTORANTE</h5>
                        <div class="garis-top"></div>
                    </div>

                    <div class="center-top">
                        <img src="/asset/img/gelato.png" alt="">
                    </div>
                    <div class="right-top">
                        <h5>MENUS</h5>
                        <div class="garis-top"></div>
                    </div>
                </div>

                <div class="title">
                    <div class="garis"></div>
                    <h1>DESSERT</h1>
                    <div class="garis"></div>
                </div>
                <div class="all-menu">
                    <div class="tes">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam nisi quaerat maiores
                            inventore
                            natus fuga ipsam, illo laudantium fugiat voluptas asperiores quasi dolore atque eveniet
                            alias
                            dolor molestias perferendis impedit.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam nisi quaerat maiores
                            inventore
                            natus fuga ipsam, illo laudantium fugiat voluptas asperiores quasi dolore atque eveniet
                            alias
                            dolor molestias perferendis impedit.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam nisi quaerat maiores
                            inventore
                            natus fuga ipsam, illo laudantium fugiat voluptas asperiores quasi dolore atque eveniet
                            alias
                            dolor molestias perferendis impedit.</p>
                    </div>
                    <div class="tes">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam nisi quaerat maiores
                            inventore
                            natus fuga ipsam, illo laudantium fugiat voluptas asperiores quasi dolore atque eveniet
                            alias
                            dolor molestias perferendis impedit.</p>
                    </div>
                    <div class="tes">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam nisi quaerat maiores
                            inventore
                            natus fuga ipsam, illo laudantium fugiat voluptas asperiores quasi dolore atque eveniet
                            alias
                            dolor molestias perferendis impedit.</p>
                    </div>
                    <div class="tes">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam nisi quaerat maiores
                            inventore
                            natus fuga ipsam, illo laudantium fugiat voluptas asperiores quasi dolore atque eveniet
                            alias
                            dolor molestias perferendis impedit.</p>
                    </div>


                </div>
            </div>
            <div class="totop">
                <a href="#top">
                    Back to Top
                </a>
            </div>
        </div>

        <div id="beverage" class="menu-container beverage">
            <div class="list-menu">
                <div class="top-menu">
                    <div class="left-top">
                        <h5>SEMPLICE DE RISTORANTE</h5>
                        <div class="garis-top"></div>
                    </div>

                    <div class="center-top">
                        <img src="/asset/img/wine.png" alt="">
                    </div>
                    <div class="right-top">
                        <h5>MENUS</h5>
                        <div class="garis-top"></div>
                    </div>
                </div>

                <div class="title">
                    <div class="garis"></div>
                    <h1>BEVERAGE</h1>
                    <div class="garis"></div>
                </div>
                <div class="all-menu">
                    <div class="tes">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam nisi quaerat maiores
                            inventore
                            natus fuga ipsam, illo laudantium fugiat voluptas asperiores quasi dolore atque eveniet
                            alias
                            dolor molestias perferendis impedit.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam nisi quaerat maiores
                            inventore
                            natus fuga ipsam, illo laudantium fugiat voluptas asperiores quasi dolore atque eveniet
                            alias
                            dolor molestias perferendis impedit.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam nisi quaerat maiores
                            inventore
                            natus fuga ipsam, illo laudantium fugiat voluptas asperiores quasi dolore atque eveniet
                            alias
                            dolor molestias perferendis impedit.</p>
                    </div>
                    <div class="tes">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam nisi quaerat maiores
                            inventore
                            natus fuga ipsam, illo laudantium fugiat voluptas asperiores quasi dolore atque eveniet
                            alias
                            dolor molestias perferendis impedit.</p>
                    </div>
                    <div class="tes">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam nisi quaerat maiores
                            inventore
                            natus fuga ipsam, illo laudantium fugiat voluptas asperiores quasi dolore atque eveniet
                            alias
                            dolor molestias perferendis impedit.</p>
                    </div>
                    <div class="tes">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam nisi quaerat maiores
                            inventore
                            natus fuga ipsam, illo laudantium fugiat voluptas asperiores quasi dolore atque eveniet
                            alias
                            dolor molestias perferendis impedit.</p>
                    </div>


                </div>
            </div>
            <div class="totop">
                <a href="#top">
                    Back to Top
                </a>
            </div>
        </div>




        <div class="footer">
            <div class="foot-kiri">
                <i class="far fa-copyright"></i>
                <p>Copyright Semplice De Ristorante 2021</p>
            </div>
            <div class="foot-kanan">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter-square"></i></a>
            </div>
        </div>


    </div>
</body>

</html>
