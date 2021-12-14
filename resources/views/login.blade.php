<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/asset/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="cont-1">
            <img src="/asset/img/logo.svg" alt="">
            <a href="{{ route('register-user') }}">Don't Have Account?<br>Sign Up</a>
        </div>
        <div class="second-container">
            <div class="login-google">
                <a href="{{ route('google.login') }}"><i class="fab fa-google"></i> Sign in With Google</a>
            </div>
            <div class="gotohome">
                <a href="/"><img src="/asset/img/circleLogo.svg" alt=""></a>

            </div>
        </div>

        <form method="POST" action="{{ route('login.custom') }}">
            @csrf
            <div class="input-container">
                <p>Email</p>
                @if ($errors->has('email'))
                <div class="errors">
                    <span class="text-danger">dasdas</span>
                </div>
                @endif
                <input type="email" name="email" id="email" placeholder="user@user.com">
            </div>
            <div class="input-container">
                <div class="password-forgot">
                    <p>Password</p>
                    <a href="#">Forgot Password?</a>
                </div>
                @if ($errors->has('password'))
                <div class="errors">
                    <span class="text-danger">dasdas</span>
                </div>
                @endif
                <input type="password" name="password" id="password" placeholder="Password">
            </div>
            <button>
                <input class="login-btn"type="submit" value="Log In" placeholder="login">
            </button>

        </form>
    </div>

</body>
</html>
