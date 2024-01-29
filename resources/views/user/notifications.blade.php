@extends('layout.layout')
@section('page_title')
<div class="row p-35">
    <div class="col-12">
        <div class="n-head">
            <p class="d-flex align-items-center"><img src="./assets/images/bell-icon.png" class="w-100" style="max-width: 20px; height: 20px;" alt=""> <strong class="strong ms-5 me-2">Turn on push notifications</strong> to know when your video has been watched and interacted with.</p>
            <div class="btns d-flex">
            <button class="notification-btn me-3">Allow push notifications</button>
            <button class="notification-btn-dismiss">Dismiss</button>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="notification">
            <h2>Notification</h2>
        </div>
    </div>
    <div class="col-12">
        <ul class="nav nav-tabs mb-35" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active py-3 mx-14" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Home</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link py-3 mx-14" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Profile</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link py-3 mx-14" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Contact</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show n-head active mb-35" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                <p class="d-flex align-items-center mb-14 position-relative"> <span class="dot-sec">.</span> <img src="./assets/images/party-head-removebg-preview.png" class="w-100 ms-5 me-3" style="max-width: 25px; height: 20px;" alt="">  First view on <strong class="strong ms-2"> Peter’s Big Cool Idea</strong></p>
                <p><img src="./assets/images/Avatar.svg" class="me-3" alt=""> <strong class="strong">Someone</strong>  watched・about 13 hours ago </p>
            </div>
            <div class="tab-pane fade show n-head active mb-35" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                <p class="d-flex align-items-center mb-14 position-relative"> <span class="dot-sec">.</span> <img src="./assets/images/party-head-removebg-preview.png" class="w-100 ms-5 me-3" style="max-width: 25px; height: 20px;" alt="">  First view on <strong class="strong ms-2"> Peter’s Big Cool Idea</strong></p>
                <p><img src="./assets/images/Avatar.svg" class="me-3" alt=""> <strong class="strong">Someone</strong>  watched・about 13 hours ago </p>
            </div>
            <div class="tab-pane fade show n-head active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                <p class="d-flex align-items-center mb-14 position-relative"> <span class="dot-sec">.</span> <img src="./assets/images/party-head-removebg-preview.png" class="w-100 ms-5 me-3" style="max-width: 25px; height: 20px;" alt="">  First view on <strong class="strong ms-2"> Peter’s Big Cool Idea</strong></p>
                <p><img src="./assets/images/Avatar.svg" class="me-3" alt=""> <strong class="strong">Someone</strong>  watched・about 13 hours ago </p>
            </div>
            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
            <p class="d-flex align-items-center mb-14 position-relative"> <span class="dot-sec">.</span> <img src="./assets/images/party-head-removebg-preview.png" class="w-100 ms-5 me-3" style="max-width: 25px; height: 20px;" alt="">  First view on <strong class="strong ms-2"> Peter’s Big Cool Idea</strong></p>
                <p><img src="./assets/images/Avatar.svg" class="me-3" alt=""> <strong class="strong">Someone</strong>  watched・about 13 hours ago </p>
            </div>
            <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">

            </div>
        </div>
    </div>
</div>
@endsection
