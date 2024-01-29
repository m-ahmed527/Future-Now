@extends('layout.front-layout')
@section('title','Contact Us')
@section('content')
<div class="container">
    <div class="contact-form-main position-relative">
        <div class="row">
            <div class="col-md-6">
                <div class="contact-text">
                    <h1>Let us discuss your <br /> marketing strategy!</h1>
                </div>
                <div class="address">
                    <p>Org.nr: 559264-1871</p>
                    <p>Lunar Holding LDA</p>
                    <p>info@lunarstrategy.com</p>
                    <p>+467-20478390</p>
                    <div class="icons">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-linkedin"></i>
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                    <button class="contact-btn">
                        Book a free consultation
                    </button>
                </div>
            </div>
            <div class="col-md-5 col-sm-12">
                <div class="contact-from">
                    <p>Or you can also contact us here</p>
                    <form action="#">
                        <input type="text" placeholder="name">
                        <input type="text" placeholder="Email">
                        <input type="text" placeholder="Subject">
                        <textarea class="contact-textArea" placeholder="Message"></textarea>
                        <button data-bs-toggle="modal" data-bs-target="#sendMessage">Send</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="DoneModal modal fade" id="sendMessage" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class=" modal-dialog">
                <div class="modal-content">
                    <div class="DoneModalHeader modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="{{asset('assets/user/images/check-one.png')}}" alt="">
                        <h1>Message sent successfully!</h5>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button class="profile-primary-btn modal-primary-btn elegant" style=" padding: 13px 170px;" data-bs-dismiss="modal" aria-label="Close">oK</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
