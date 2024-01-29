@extends('layout.layout')
@section('page_title')
    <div class="row p-35">
        <div class="col-12">
            <div class="tabs">
                <div class="tabs-links">
                    <a href="#">
                        <h4 class='active'>Dashboard <span><i class="fa-solid fa-chevron-right"></i></span></h4>
                    </a>
                    <a href="#">
                        <h4>Feedbacks Management</h4>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="feedback-wrapper">
        <div class="row">
            <div class="col-lg-5 col-sm-12">
                <form action="#" class="feedback-form">
                    <div class="animated-input">
                        <input type="text" required>
                        <label>UserName</label>
                    </div>
                    <div class="animated-input eye">
                        <input type="text" required>
                        <label>Email</label>
                        <i class="fa-regular fa-eye"></i>
                    </div>
                    <div class="animated-input">
                        <input type="text" required>
                        <label>Date</label>
                    </div>
                    <div class="animated-input">
                        <input type="text" required>
                        <label>Subject</label>
                    </div>
                    <textarea name="" id="" cols="30" rows="10" class="feedback-text"></textarea>
                </form>
            </div>
        </div>
    </div>
@endsection
