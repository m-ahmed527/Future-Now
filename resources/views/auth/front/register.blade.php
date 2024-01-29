@extends('layout.front-layout')
@section('title','Sign Up')
@section('content')
        <div class="login-form-main position-relative">
            <div class="container container-c">
                <div class="row">
                    <div class="col-10 mx-auto">
                        <div class="login-form p-login-page mb-24">
                            <div class="form-head d-flex flex-column justify-content-center align-items-center">
                                <h1 class="form-top-heading">Sign Up</h1>
                                <p class="form-bottom-heading">Enter your email and password to sign in</p>
                            </div>
                            <form action="{{route('user.register')}}" method="POST" class="form">
                                @csrf
                                {{-- <label for="#" class="label-field mt-4">First name</label>
                                <input type="text" placeholder="Enter your Name" required class="input-field my-3 py-3 px-4"> --}}
                                <label for="#" class="label-field ">Name</label>
                                <input type="text" name="name" placeholder="Enter your Name" required class="input-field my-3 py-3 px-4">
                                @error('name')
                                    {{ $message }}
                                @enderror
                                <label for="#" class="label-field ">Enter email *</label>
                                <input type="email" name="email" placeholder="Enter your email" required class="input-field my-3 py-3 px-4">
                                @error('email')
                                    {{ $message }}
                                @enderror
                                <label for="#" class="label-field ">Enter password *</label>
                                <input type="password" name="password" placeholder="Enter your password" required class="input-field my-3 py-3 px-4">
                                @error('password')
                                    {{ $message }}
                                @enderror
                                <label for="#" class="label-field ">Confirm password *</label>
                                <input type="password" name="passsword_confirmation" placeholder="Confirm your password" required class="input-field my-3 py-3 px-4">
                                @error('passsword_confirmation')
                                    {{ $message }}
                                @enderror
                                <label for="#" class="label-field mb-3">Enter phone number *</label>
                                <div class="form-group">
                                    <div class="input-group input-group-sm">
                                        <input id="mobile" type="tel" name="phone" placeholder="707070" name="mobile" class="form-control input-field my-3 py-3 px-4" autofocus required >
                                    </div>
                                </div>
                                <div class="links-wrapper d-flex justify-content-between">
                                    <div class="remember my-3 d-flex justif-content-center text-center align-items-center" style="margin: auto;">
                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider round"></span>
                                        </label>
                                        <span class="singnUpRemember">Remember me</span>
                                    </div>
                                </div>
                                <button type="submit" class="register-btn my-3">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@push('scripts')


    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.6/js/intlTelInput.min.js"></script>
    <script>
         $(function () {
            var code = "";
            $('#mobile').val(code);
            $('#mobile').intlTelInput({
                autoHideDialCode: true,
                autoPlaceholder: "ON",
                dropdownContainer: document.body,
                formatOnDisplay: true,
                initialCountry: "us",
                placeholderNumberType: "MOBILE",
                preferredCountries: ['us','gb','in'],
                separateDialCode: true
            });
            $('#btn-submit').on('click', function () {
                var code = $("#mobile").intlTelInput("getSelectedCountryData").dialCode;
                var phoneNumber = $('#mobile').val();
                document.getElementById("code").innerHTML = code;
                document.getElementById("mobile-number").innerHTML = phoneNumber;
            });
        });



    </script>
@endpush
