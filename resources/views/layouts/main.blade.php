<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(window).on('scroll', function(){
            if($(window).scrollTop()){
                $('nav').removeClass('before').addClass('after');
            }
            else{
                $('nav').removeClass('after').addClass('before');
            }
        })
    </script>
    <link rel="stylesheet" href="/asset/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>@yield('title')</title>
</head>
<body>
    <nav class="before">
        {{-- <div class="navbar"> --}}
        <div class="nav-left">
            <a class="logo" href="#">
                <img src="/asset/img/logo.svg" alt="logo">
            </a>
        </div>

        <div class="nav-right">
            <li class="navlist-item">
                <a href="/" class="item {{ (request()->is('/'))||(request()->is('home')) ? 'active' : '' }}">Home</a>
            </li>
            <li class="navlist-item">
                <a href="menu" class="item {{ (request()->is('menu')) ? 'active' : '' }}">Menu</a>
            </li>
            <li class="navlist-item">
                <a href="" class="item {{ (request()->is('aboutus')) ? 'active' : '' }}">About Us</a>
            </li>
            <li class="navlist-item">
                <a href="reservation" class="item {{ (request()->is('reservation')) ? 'active' : '' }}">Reservation</a>
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
        {{-- </div> --}}
    </nav>

    <div class="container">
        @yield('content')
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    {{-- <script>
        $ $(function(){
        $('.nav-right li a').filter(function(){return this.href==location.href}).parent().addClass('active').siblings().removeClass('active')
        $('.nav-right li a').click(function(){
            $(this).parent().addClass('active').siblings().removeClass('active')
        })
    });
    </script> --}}
</body>
</html>

