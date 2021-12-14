<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="/asset/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <div class="cont-1">
            <img src="/asset/img/logo.svg" alt="">
        </div>
        <div class="second-container">
            <div class="login-google">
                <a href="{{ route('login') }}"><i class="fas fa-backward"></i>Back to Sign In</a>
            </div>
            <div class="gotohome">
                <a href="/"><img src="/asset/img/circleLogo.svg" alt=""></a>

            </div>
        </div>

        <form action="{{ route('register.custom') }}" method="POST">
            @csrf
            <div class="input-container">
                <p>Fullname</p>
                <input type="text" name="name" id="fullname" placeholder="Fullname"  value="{{ old('name') }}"autofocus>
                @if ($errors->has('name'))
                <div class="errors">
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                </div>
                @endif
            </div>
            <div class="input-container">
                <p>Phone Number</p>
                <input type="text" name="phone" id="phone" placeholder="081111222333" value = "{{old('phone')}}" required>
                @if ($errors->has('phone'))
                <div class="errors">
                    <span class="text-danger">{{$errors->first('phone')}}</span>
                </div>
                @endif
            </div>
            <div class="input-container">
                <p>Email</p>
                <input type="email" name="email" id="email" placeholder="user@user.com" value="{{ old('email') }}"autofocus>
                @if ($errors->has('email'))
                <div class="errors">
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                </div>
                @endif
            </div>
            <div class="input-container">
                <p>Password</p>
                <input type="password" name="password" id="password" placeholder="Password" required>
                @if ($errors->has('password'))
                <div class="errors">
                    <span class="text-danger">{{$errors->first('password')}}</span>
                </div>
                @endif
            </div>

            <div class="input-container">
                <p>Confirm Password</p>
                <input type="password" name="confirmation" id="confpassword" placeholder="Confirm Password" required>
                @if ($errors->has('confirmation'))
                <div class="errors">
                    <span class="text-danger">{{$errors->first('confirmation')}}</span>
                </div>
                @endif
            </div>
            <button>
                <input class="login-btn"type="submit" value="Sign Up" placeholder="Sign up">
            </button>

        </form>
    </div>
</body>
</html>
