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
    <div class="main-wrapper">
        <div class="container-fluid">
            <div class="auth-wrapper">
                <div class="row ">
                    <div class="col-lg-3 col-sm-12">
                        <div class="auth-left">
                            <div class="logo text-center">
                                <img src="{{asset('assets/images/logo.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="left-img">
                                <img src="{{asset('assets/images/login-left.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 offset-lg-1 offset-md-0">
                        <div class="auth-right text-center">
                            <h1>Register</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod</p>
                        </div>
                        <form class="auth-form" action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="email my-4">
                                <label>Name</label>
                                <input type="name" name="name" id="email" placeholder="John Doe">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </div>
                            <div class="email my-4">
                                <label>Email address</label>
                                <input type="email" name="email" id="email" placeholder="name@company.com">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </div>
                            <div class="email my-4">
                                <label>Phone Number</label>
                                <input type="number" name="phone" id="email" placeholder="">
                                @error('phone')
                                    {{ $message }}
                                @enderror
                            </div>
                            <input type="Password" placeholder="Password" name="password" id="password">
                            @error('password')
                                {{ $message }}
                            @enderror
                            <div class="form-options d-flex justify-content-between">
                                <div class="check">
                                    <input type="checkbox" name="" id="" value="">Remember me
                                </div>
                                {{-- <a href="./forgetPassword.php">Forget Password</a> --}}
                            </div>







                            <button class="auth-btn">Register</button>
                            <p class="br">or</p>
                            <div class="signIn-opts">
                                <p>or sign in using</p>
                                <div class="icons">
                                    <a href=""> <i class="fa-brands fa-linkedin-in "></i></a>
                                    <a href=""> <i class="fa-brands fa-twitter "></i></a>
                                    <a href=""><i class="fa-brands fa-google "></i></a>
                                    <a href=""><i class="fa-brands fa-facebook-f "></i></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
