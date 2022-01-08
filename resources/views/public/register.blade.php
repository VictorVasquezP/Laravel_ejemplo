<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
</head>

<body>
    <section class="login">
        <div class="login-container">
            <div class="login-row">
                <div class="login-wrap">
                    <div class="login-image">

                    </div>
                    <div class="login-data">
                        <div class="login-header">
                            <h3 class="title">Sign Up</h3>
                        </div>
                        <div class="login-form">
                            <form action="{{route('registroUser')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Nombre</label>
                                    <input type="text" name="name" id="name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Usuario</label>
                                    <input type="text" name="email" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="text" name="password" id="password">
                                </div>
                                <div class="form-group">
                                    <label for="confirm_password">Confirm Password</label>
                                    <input type="text" name="confirm_password" id="confirm_password">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn-submit">Sign In</button>
                                </div>
                                <div class="form-group flex">
                                    <div class="check-remember w-50">
                                        <label class="checkbox checkbox-primary">Remember Me
                                            <input type="checkbox" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="login-forgot w-50">
                                        <a href="#">Forgot Password</a>
                                    </div>
                                </div>
                            </form>
                            <p class="text-center">- o -</p>
                            <div class="buttons-login">
                                <div class="google">
                                    <!-- google	 -->
                                    <div>
                                        <a class="btn-google" href="">
                                            <div class="google-content">
                                                <div class="logo">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48">
                                                        <defs>
                                                            <path id="a"
                                                                d="M44.5 20H24v8.5h11.8C34.7 33.9 30.1 37 24 37c-7.2 0-13-5.8-13-13s5.8-13 13-13c3.1 0 5.9 1.1 8.1 2.9l6.4-6.4C34.6 4.1 29.6 2 24 2 11.8 2 2 11.8 2 24s9.8 22 22 22c11 0 21-8 21-22 0-1.3-.2-2.7-.5-4z" />
                                                        </defs>
                                                        <clipPath id="b">
                                                            <use xlink:href="#a" overflow="visible" />
                                                        </clipPath>
                                                        <path clip-path="url(#b)" fill="#FBBC05" d="M0 37V11l17 13z" />
                                                        <path clip-path="url(#b)" fill="#EA4335"
                                                            d="M0 11l17 13 7-6.1L48 14V0H0z" />
                                                        <path clip-path="url(#b)" fill="#34A853"
                                                            d="M0 37l30-23 7.9 1L48 0v48H0z" />
                                                        <path clip-path="url(#b)" fill="#4285F4"
                                                            d="M48 48L17 24l-4-3 35-10z" />
                                                    </svg>
                                                </div>
                                                <p>Sign in with Google</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="facebook">
                                    <!-- facebook	 -->
                                    <div>
                                        <a class="btn-fb" href="">
                                            <div class="fb-content">
                                                <div class="logo">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                        viewBox="0 0 32 32" version="1">
                                                        <path fill="#FFFFFF"
                                                            d="M32 30a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h28a2 2 0 0 1 2 2v28z" />
                                                        <path fill="#4267b2"
                                                            d="M22 32V20h4l1-5h-5v-2c0-2 1.002-3 3-3h2V5h-4c-3.675 0-6 2.881-6 7v3h-4v5h4v12h5z" />
                                                    </svg>
                                                </div>
                                                <p>Sign in with Facebook</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <p class="text-center">Ya tienes cuenta? <a class="sign-up" href="{{route('login')}}">Sign In</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>