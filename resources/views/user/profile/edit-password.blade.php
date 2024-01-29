@extends('layout.layout')
@section('page_title')
    <div class="row p-35">
        <div class="col-12">
            <div class="tabs">
                <div class="tabs-links">
                    <a href="#">
                        <h3 class='dashboard-hd'>Dashboard <span><i class="fa-solid fa-chevron-right"></i></span></h3>
                    </a>
                    <a href="#">
                        <h4>Edit Profile</h4>
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
                        @if (auth()->user()->getFirstMediaUrl('UserCoverImage'))
                            <img src="{{ auth()->user()->getFirstMediaUrl('UserCoverImage') }}" alt=""
                                style="height: 350px" class="w-100">
                        @else
                            <img src="{{ asset('assets/images/userDtail-cover.png') }}" alt="" class="w-100">
                        @endif
                    </div>
                    <div class="profileWrap">
                        <div class="row justify-content-between">
                            <div class="col-lg-6">
                                <div class="position-relative">
                                    <div class="user-profile user-profile2">
                                        @if (auth()->user()->getFirstMediaUrl('UserProfileImage'))
                                            <img src="{{ auth()->user()->getFirstMediaUrl('UserProfileImage') }}"
                                                alt=""
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
                                <button type="button" class="btn btn-primary"><a href="{{ route('editProfile') }}">Edit
                                        Profile</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-40">
            <div class="col-lg-6 col-sm-12">
                <div class="user-form">
                    @if (\Session::has('success'))
                        <div class="alert alert-success text-center">
                            {!! \Session::get('success') !!}
                        </div>
                    @endif
                    <form action="{{ route('password.update') }}" method="POST">
                        @csrf
                        <div class="animated-input">
                            <input type="password" name="current_password" value="{{ old('current_password') }}">
                            <label>Current Password:*</label>
                        </div>
                        @error('current_password')
                            {{ $message }}
                        @enderror
                        <div class="animated-input eye">
                            <input type="password" name="new" value="{{ old('new') }}">
                            <label>New Password:*</label>
                            <i class="fa-regular fa-eye"></i>
                        </div>
                        @error('new')
                            {{ $message }}
                        @enderror
                        <div class="animated-input eye">
                            <input type="password" name="new_confirmation" value="{{ old('new_confirmation') }}">
                            <label>Confitm Password:*</label>
                            <i class="fa-regular fa-eye"></i>
                        </div>
                        @error('new_confirmation')
                            {{ $message }}
                        @enderror
                        <input type="submit" value="Update" class="btn btn-primary update-btn">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
