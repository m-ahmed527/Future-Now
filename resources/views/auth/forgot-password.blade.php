<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Future Now</title>
    <script src="https://kit.fontawesome.com/aba8f11519.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/auth.css')}}">
</head>

<body>
    <div class="main-wrapper forget">
        <div class="container-fluid">
            <div class="auth-wrapper">
                <div class="row ">
                    <div class="col-lg-3 col-sm-12">
                        <div class="auth-left">
                            <div class="logo text-center">
                                <img src="{{asset('assets/images/logo.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="left-img">
                                <!-- <img src="./assets/images/login-left.png" alt="" class="img-fluid"> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-sm-12 offset-lg-1 offset-md-0 align-content-center">
                        @if (session('status'))
                            <div style="height: 100%"
                                class="auth-right text-center d-flex justify-content-center align-items-baseline">
                                <h1>{{ session('status') }}
                                </h1>
                            </div>
                        @else
                            <div class="auth-right text-center">
                                <h1>Forgot Password</h1>
                                <p>Kindly enter your email address to change the password.</p>
                            </div>
                            <form class="auth-form" action="{{ route('forgot-password') }}" method="POST">
                                @csrf
                                <div class="email my-4">
                                    <label>Email address</label>
                                    <input type="email" name="email" id="email" placeholder="name@company.com">
                                </div>
                                @error('email')
                                    {{ $message }}
                                @enderror
                                <button type="submit" class="auth-btn">Continue</button>
                                <div class="signIn-opts">
                                    <a href="{{ route('login') }}">
                                        <p>Back To Login</p>
                                    </a>
                                </div>
                            </form>
                        @endif
                    </div>
                    <div class="col-lg-3 col-sm-12">
                        <div class="skip">
                            <a href="{{ route('login') }}"><p>Skip</p></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
