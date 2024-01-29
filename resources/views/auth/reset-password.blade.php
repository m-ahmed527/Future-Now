<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Future Now</title>
    <script src="https://kit.fontawesome.com/aba8f11519.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}">
</head>

<body>
    <div class="main-wrapper forget">
        <div class="container-fluid">
            <div class="auth-wrapper">
                <div class="row ">
                    <div class="col-lg-3 col-sm-12">
                        <div class="auth-left">
                            <div class="logo text-center">
                                <img src="{{ asset('assets/images/logo.png') }}" alt="" class="img-fluid">
                            </div>
                            <div class="left-img">
                                <!-- <img src="./assets/images/login-left.png" alt="" class="img-fluid"> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-sm-12 offset-lg-1 offset-md-0">
                       
                        <div class="auth-right text-center">
                            <h1>New password</h1>
                            <p>Kindly enter the new password.</p>
                        </div>
                        {{-- @dd($request->input('email')) --}}
                        <form class="auth-form" action="{{ url('/reset-password') }}" method="POST">
                            @csrf
                            <input type="hidden" name="token" value="{{ request()->route('token') }}">

                            <div class="email my-4">
                                <label>Enter Email:*:*</label>
                                <input type="hidden" name="email" id="email" placeholder="email"
                                    value="{{ $request->input('email') }}">
                            </div>
                            <br>
                            @error('email')
                                {{ $message }}
                            @enderror
                            <div class="email my-4">
                                <label>New Password:*:*</label>
                                <input type="password" name="password" id="email" placeholder="passowrd"
                                    value="{{ old('password') }}">
                            </div>
                            <br>
                            @error('password')
                                {{ $message }}
                            @enderror
                            <div class="email my-4">
                                <label>Confirm Password:*:*</label>
                                <input type="password" name="password_confirmation" id="email"
                                    placeholder="confirmed" value="{{ old('password_confirmation') }}">
                            </div>
                            <br>
                            @error('password_confirmation')
                                {{ $message }}
                            @enderror
                            <button type="submit" class="auth-btn">Update</button>
                            <div class="signIn-opts">

                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 col-sm-12">
                        <div class="skip">
                            <p>Skip</p>
                        </div>
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
