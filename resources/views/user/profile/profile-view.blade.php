@extends('layout.layout')
@php
    $user = auth()->user();
    // dd($user->getFirstMediaUrl('UserCoverImage'));
@endphp
@section('page_title')
    <div class="row p-35">
        <div class="col-12">
            <div class="tabs">
                <div class="tabs-links">
                    <a href="#">
                        <h3 class='dashboard-hd'>Dashboard <span><i class="fa-solid fa-chevron-right"></i></span></h3>
                    </a>
                    <a href="#">
                        <h4>Profile</h4>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="userDetailContent">
        <div class="row">
            <div class="col-12">
                <div class="user-cover user-cover2">
                    <div class="coverWrap">
                        @if ($user->getFirstMediaUrl('UserCoverImage'))
                            <img src="{{ $user->getFirstMediaUrl('UserCoverImage') }}" alt="" style="height: 350px"
                                class="w-100">
                        @else
                            <img src="{{ asset('assets/images/userDtail-cover.png') }}" alt="" class="w-100">
                        @endif
                    </div>
                    <div class="profileWrap">
                        <div class="row justify-content-between">
                            <div class="col-lg-6">
                                <div class="position-relative">
                                    <div class="user-profile user-profile2">
                                        @if ($user->getFirstMediaUrl('UserProfileImage'))
                                            <img src="{{ $user->getFirstMediaUrl('UserProfileImage') }}" alt=""
                                                style="    height: 133px;
                                        border-radius: 50%;
                                        width: 134px;">
                                        @else
                                            <img src="{{ asset('assets/images/user-profile.png') }}" alt="">
                                        @endif



                                    </div>
                                    <span class="account-detail">Account Details</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <button type="button" class="btn btn-primary"><a href="{{route('editProfile')}}">Edit Profile</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-40">
            <div class="col-lg-6 col-sm-12">
                <div class="user-form">
                    <form action="#">
                        <div class="animated-input">
                            <input type="text" value="{{ $user->name }}" required>
                            <label>UserName</label>
                        </div>
                        <div class="animated-input eye">
                            <input type="text" value="{{ $user->email }}" required>
                            <label>Email</label>
                            <i class="fa-regular fa-eye"></i>
                        </div>
                        <div class="animated-input eye">
                            <input type="text" required>
                            <label>Password</label>
                            <i class="fa-regular fa-eye"></i>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
