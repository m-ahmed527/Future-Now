@extends('layout.front-layout')
@section('title','Reset Password')
@section('content')
        <div class="login-form-main position-relative">
            <div class="container container-c">
                <div class="row">
                    <div class="col-10 mx-auto">
                        <div class="login-form p-login-page mb-24">
                            <div class="form-head d-flex flex-column justify-content-center align-items-center">
                                <h1 class="form-top-heading">Forget Password</h1>
                                <p class="form-bottom-heading">Set new password for your account.</p>
                            </div>
                            <form action="./editPassword.php" class="form">
                                <label for="#" class="label-field mt-4 ">Enter new password *</label>
                                <input type="password" placeholder="Enter your password" required class="input-field my-3 py-3 px-4">
                                <label for="#" class="label-field">Confirm password *</label>
                                <input type="password" placeholder="Confirm your password" required class="input-field my-3 py-3 px-4">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="register-btn mb-2">Continue</button>
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body text-center">
                                                <img src="./assets/images/check-icon.png" class="img-fluid mb-3" alt="">
                                                <h4 class="modal-text">Password updated successfull!</h4>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="register-btn">Ok</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
