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
                        @if ($user->getFirstMediaUrl('UserCoverImage'))
                            <img src="{{ $user->getFirstMediaUrl('UserCoverImage') }}" alt="" style="height: 350px"
                                class="w-100">
                        @else
                            <img src="{{ asset('assets/images/userDtail-cover.png') }}" alt="" class="w-100">
                        @endif
                        <button type="button" class="btn btn-primary edit-cover-btn" data-bs-toggle="modal"
                            data-bs-target="#cover">Edit Cover Photo</button>

                        <div class="modal fade" id="cover" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Upload Cover Picture</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('upload-cover') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <Label>Upload Cover Image</Label>
                                            <input type="file" name="coverImage" id="">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="profileWrap">
                        <div class="row justify-content-between">
                            <div class="col-lg-6">
                                <div class="position-relative">
                                    <div class="user-profile user-profile2">
                                        <div class="avatar-upload">
                                            <div class="avatar-edit">
                                                <input type='button' id="imageUpload" data-bs-toggle="modal"
                                                    data-bs-target="#profile" />
                                                <label for="imageUpload"></label>
                                            </div>
                                            <div class="avatar-preview">
                                                @if ($user->getFirstMediaUrl('UserProfileImage'))
                                                    <div id="imagePreview"
                                                        style="background-image: url({{ $user->getFirstMediaUrl('UserProfileImage') }});">
                                                    </div>
                                                @else
                                                    <div id="imagePreview"
                                                        style="background-image: url('./assets/images/user-profile.png');">
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <span class="account-detail">Account</span>
                                </div>
                                <div class="modal fade" id="profile" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Upload
                                                    Profile
                                                    Picture</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('upload-profile') }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <Label>Upload Profile picture</Label>
                                                    <input type="file" name="profileImage" id="">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save
                                                        changes</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-lg-6">
                                <button type="button" class="btn btn-primary">Edit Profile</button>
                            </div> --}}
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
                    <form action="{{route('user.edit')}}" method="POST">
                        @csrf
                        <div class="animated-input">
                            <input type="text" name="name" value="{{ $user->name }}" required>
                            <label>UserName</label>
                        </div>
                        <div class="animated-input eye">
                            <input type="email" name="email" value="{{ $user->email }}" required>
                            <label>Email</label>
                            <i class="fa-regular fa-eye"></i>
                        </div>
                        {{-- <div class="animated-input eye">
                            <input type="text" required>
                            <label>Password</label>
                            <i class="fa-regular fa-eye"></i>
                        </div> --}}
                        <input type="submit" value="Update" class="btn btn-primary update-btn">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
