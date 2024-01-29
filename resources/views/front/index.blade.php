@extends('layout.front-layout')
@section('title', 'Home')
@section('content')
    <section class="users-sec pt-70">
        <div class="container">
            <div class="border-light-gray mt-3 mb-4"></div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 ">
                    <ul class="nav nav-pills user-tabs" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-Community-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-Community" type="button" role="tab"
                                aria-controls="pills-Community" aria-selected="true">Community</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-User-tab" data-bs-toggle="pill" data-bs-target="#pills-User"
                                type="button" role="tab" aria-controls="pills-User" aria-selected="false">User</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-Friends-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-Friends" type="button" role="tab" aria-controls="pills-Friends"
                                aria-selected="false">Friends</button>
                        </li>
                        <li>
                            <div class="dropdown">
                                <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Notifications
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12  pe-0 mb-3">
                    <div class="d-flex gap-3 justify-content-end sm-class">
                        <button class="inner-btn border-0"><i class="fa-solid fa-thumbs-up"></i> Likes</button>
                        <button class="inner-btn messages border-0 d-flex align-items-center gap-1 "><i
                                class="fa-brands fa-facebook-messenger"></i> Messages</button>
                        <button class="inner-btn messages search border-0 d-flex align-items-center"><i
                                class="fa-solid fa-magnifying-glass"></i></button>
                        <button
                            class="inner-btn messages search dots border-0 d-flex align-items-center justify-content-center gap-1 ">
                            <span class="dots-sm"></span>
                            <span class="dots-sm"></span>
                            <span class="dots-sm"></span>
                        </button>
                    </div>
                </div>
                <div class="col-md-12 pe-0 ">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-Community" role="tabpanel"
                            aria-labelledby="pills-Community-tab" tabindex="0">
                            <div class="row  ">
                                <div class="col-lg-4 col-md-10 col-sm-12">
                                    <div class="suggestion-box-wrap text-center">

                                            <h4 class="heading-lg mb-35">Suggested For You</h4>
                                            @foreach ($suggest as $user)
                                                <div
                                                    class="d-flex align-items-center gap-3 justify-content-center  text-start mb-35 ">
                                                    <div class="user-img">
                                                        <img src="{{ asset('assets/user/images/user-img.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="headings-min-w">
                                                        <h5 class="heading-lg sub-hd mb-0">{{ $user->name }}</h5>
                                                        <p class="heading-lg hd-sm">{{ $user->email }}</p>
                                                    </div>
                                                </div>
                                            @endforeach

                                        <div class="active-box-wrap position-relative ">
                                            <h4 class="heading-lg mb-35 text-start ">Active</h4>
                                            <div class="">
                                                @foreach ($suggest as $user)
                                                    <div
                                                        class="d-flex align-items-center gap-3 justify-content-center  text-start mb-35 ">
                                                        <div class="user-img">
                                                            <img src="{{ asset('assets/user/images/user-img.png') }}"
                                                                alt="">
                                                        </div>
                                                        <div class="headings-min-w">
                                                            <h5 class="heading-lg sub-hd mb-0">{{ $user->name }}</h5>
                                                            <p class="heading-lg hd-sm">{{ $user->email }}</p>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <button class="register-btn" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop">Subscribe</button>
                                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                                data-bs-keyboard="false" tabindex="-1"
                                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body text-center">
                                                            <img src="{{ asset('assets/user/images/check-icon.png') }}"
                                                                class="img-fluid mb-3" alt="">
                                                            <h4 class="modal-text">Subscribe To Access</h4>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="{{ route('user.plan') }}" class="register-btn">Ok</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                @foreach ($posts as $post)
                                    {{-- @dd($post) --}}
                                    <div class="col-lg-8 col-md-12">
                                        <div class="suggestion-box-wrap-main">
                                            <div class="suggestion-box-wrap">
                                                <div class="holder-wrp">
                                                    <div class="holder-img">
                                                        <img src="{{ asset('assets/user/images/holder-img.png') }}"
                                                            class="img-fluid" alt="">
                                                        {{-- $post->user->getFirstMediaUrl('UserProfileImage')}} --}}
                                                    </div>
                                                    <div class="holder-name">
                                                        <h4>{{ $post->user->name }}</h4>
                                                        <span>Posted on {{ $post->created_at }} . <i
                                                                class="fa-solid fa-earth-americas"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="post-content">
                                                    {!! $post->description !!}
                                                </div>
                                            </div>
                                            <div class="post-img">
                                                <img src="{{ $post->getFirstMediaUrl('PostImages') }}" class="w-100"
                                                    alt="">
                                            </div>
                                            <div
                                                class="likes-comments-wrp d-flex justify-content-between align-items-center">
                                                <div class="post-like d-flex align-items-center">
                                                    <button class="like-btn"><i
                                                            class="fa-solid fa-thumbs-up text-white"></i></button>
                                                    <button class="heart-btn"><i
                                                            class="fa-solid fa-heart text-white"></i></button>
                                                    <span class="likes-count ms-2">{{ $likes }}</span>
                                                </div>
                                                <div class="comments-share d-flex">
                                                    <span>4 Comments</span>
                                                    <span>2 Share</span>
                                                </div>
                                            </div>
                                            <div
                                                class="like-comment-main d-flex justify-content-around align-items-center">
                                                <div class="likes-btn-main">
                                                    @if(auth()->user()->likes()->where('post_id',$post->id)->exists())
                                                    <button class="like" data-post-id="{{ $post->id }}" style="background: transparent; border:none"><span class="like-color"><i class="fa-solid fa-thumbs-up mr-2" style="color: #74C0FC;"><span>Unlike</span></i></i></span></button>
                                                    @else
                                                    <button class="like" data-post-id="{{ $post->id }}" style="background: transparent; border:none"><span class="like-color"><i class="fa-solid fa-thumbs-up me-2 like-color"><span>Like</span></i></span></button>
                                                    @endif
                                                </div>
                                                <div class="comment-btn-main" id="commentBox">
                                                    <span><i class="fa-solid fa-message me-2"></i> Comments</span>
                                                </div>
                                                <div class="share-btn-main">
                                                    <span><i class="fa-solid fa-share me-2"></i> Share</span>
                                                </div>
                                            </div>
                                            <div class="comments-sec" id="commentSec">
                                                <div class="comment-top-heading">
                                                    <span>Ver mais comentários</span>
                                                </div>
                                                <div class="comments-box">
                                                    <div class="comments-box-wrp">
                                                        <div class="comments-profile">
                                                            <img src="{{ asset('assets/user/images/comments-profile.png') }}"
                                                                class="img-fluid" alt="">
                                                        </div>
                                                        <div class="comments-here">
                                                            <div class="comments-here-first">
                                                                <h5>Joana Almeida </h5>
                                                                <h5 class="d-flex align-items-center">Está fantástico!
                                                                    Parabéns
                                                                    <img src="{{ asset('assets/user/images/party-head-removebg-preview.png') }}"
                                                                        class="party-img" alt="...">
                                                                </h5>
                                                            </div>
                                                            <div class="comments-btns ">
                                                                <button class="respond-btn ps-0">Gosto</button>
                                                                <button class="respond-btn">Responder</button>
                                                                <span>10 h</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="comments-post d-flex align-items-center comment-my">
                                                        <div class="comments-holder-profile">
                                                            <img src="{{ asset('assets/user/images/comments-profile.png') }}"
                                                                alt="...">
                                                        </div>
                                                        <div
                                                            class="comments-input-wrp d-flex align-items-center justify-content-between">
                                                            <div class="comments-input">
                                                                <input type="text"
                                                                    placeholder="Escreve um comentário...">
                                                            </div>
                                                            <div
                                                                class="comments-icons d-flex justify-content-center align-items-center">
                                                                <button class="comments-additional-btn"><img
                                                                        src="{{ asset('assets/user/images/quote.PNG') }}"
                                                                        alt=""></button>
                                                                <button class="comments-additional-btn"><img
                                                                        src="{{ asset('assets/user/images/smile.PNG') }}"
                                                                        alt=""></button>
                                                                <button class="comments-additional-btn"><img
                                                                        src="{{ asset('assets/user/images/gif.PNG') }}"
                                                                        alt="">
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="subscribe-btn d-flex justify-content-center">
                                                        <a href="{{route('user.plan')}}" class="register-btn">Subscribe First</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-User" role="tabpanel" aria-labelledby="pills-User-tab"
                            tabindex="0">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="suggestion-box-wrap text-center">
                                        <h4 class="heading-lg mb-35">Suggested For You</h4>
                                        <div class="">
                                            <div
                                                class="d-flex align-items-center gap-3 justify-content-center  text-start mb-35 ">
                                                <div class="user-img">
                                                    <img src="{{ asset('assets/user/images/user-img.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="headings-min-w">
                                                    <h5 class="heading-lg sub-hd mb-0">Eddie Lobanovskiy</h5>
                                                    <p class="heading-lg hd-sm">laboanovskiy@gmail.com</p>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex align-items-center  gap-3 justify-content-center  text-start mb-35 ">
                                                <div class="user-img">
                                                    <img src="{{ asset('assets/user/images/user-img.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="headings-min-w">
                                                    <h5 class="heading-lg sub-hd mb-0">Alexey Stave</h5>
                                                    <p class="heading-lg hd-sm">alexeyst@gmail.com</p>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex align-items-center  gap-3 justify-content-center  text-start mb-35">
                                                <div class="user-img">
                                                    <img src="{{ asset('assets/user/images/user-img.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="headings-min-w">
                                                    <h5 class="heading-lg sub-hd mb-0">Anton Tkacheve</h5>
                                                    <p class="heading-lg hd-sm">tkacheveanton@gmail.com</p>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex align-items-center  gap-3 justify-content-center  text-start mb-35">
                                                <div class="user-img">
                                                    <img src="{{ asset('assets/user/images/user-img.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="headings-min-w">
                                                    <h5 class="heading-lg sub-hd mb-0">Anton Tkacheve</h5>
                                                    <p class="heading-lg hd-sm">tkacheveanton@gmail.com</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="active-box-wrap position-relative ">
                                            <h4 class="heading-lg mb-35 text-start ">Active</h4>
                                            <div class="">
                                                <div
                                                    class="d-flex align-items-center gap-3 justify-content-center  text-start mb-35 ">
                                                    <div class="user-img">
                                                        <img src="{{ asset('assets/user/images/user-img.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="headings-min-w">
                                                        <h5 class="heading-lg sub-hd mb-0">Eddie Lobanovskiy</h5>
                                                        <p class="heading-lg hd-sm">laboanovskiy@gmail.com</p>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center gap-3 justify-content-center  text-start mb-35 ">
                                                    <div class="user-img">
                                                        <img src="{{ asset('assets/user/images/user-img.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="headings-min-w">
                                                        <h5 class="heading-lg sub-hd mb-0">Eddie Lobanovskiy</h5>
                                                        <p class="heading-lg hd-sm">laboanovskiy@gmail.com</p>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center  gap-3 justify-content-center  text-start mb-35 ">
                                                    <div class="user-img">
                                                        <img src="{{ asset('assets/user/images/user-img.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="headings-min-w">
                                                        <h5 class="heading-lg sub-hd mb-0">Alexey Stave</h5>
                                                        <p class="heading-lg hd-sm">alexeyst@gmail.com</p>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center  gap-3 justify-content-center  text-start mb-35">
                                                    <div class="user-img">
                                                        <img src="{{ asset('assets/user/images/user-img.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="headings-min-w">
                                                        <h5 class="heading-lg sub-hd mb-0">Anton Tkacheve</h5>
                                                        <p class="heading-lg hd-sm">tkacheveanton@gmail.com</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="register-btn">Subscribe</button>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-8">
                                    <div class="suggestion-box-wrap-main">
                                        <div class="suggestion-box-wrap">
                                            <div class="holder-wrp">
                                                <div class="holder-img">
                                                    <img src="{{ asset('assets/user/images/holder-img.png') }}"
                                                        class="img-fluid" alt="">
                                                </div>
                                                <div class="holder-name">
                                                    <h4>Marlon Samuels</h4>
                                                    <span>Posted on 00:00 am . <i class="fa-solid fa-earth-americas"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="post-content">
                                                <p class="terms-text">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                    elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet
                                                    lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor.
                                                    Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                                                    ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis
                                                    tellus mollis orci, sed rhoncus sapien nunc eget odio. Lorem ipsum dolor
                                                    sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.
                                                    Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.
                                                    Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis
                                                    dis parturient montes, nascetur ridiculus mus. Nam fermentum,
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod
                                                    bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra
                                                    justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque
                                                    penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam
                                                    fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci,
                                                    sed rhoncus sapien nunc eget odio. Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin
                                                    gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin
                                                    sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis
                                                    parturient montes, nascetur ridiculus mus. Nam fermentum,</p>
                                            </div>
                                        </div>
                                        <div class="post-img">
                                            <img src="{{ asset('assets/user/images/Post-imagem.png') }}" class="w-100"
                                                alt="">
                                        </div>
                                        <div class="likes-comments-wrp d-flex justify-content-between align-items-center">
                                            <div class="post-like d-flex align-items-center">
                                                <button class="like-btn"><i
                                                        class="fa-solid fa-thumbs-up text-white"></i></button>
                                                <button class="heart-btn"><i
                                                        class="fa-solid fa-heart text-white"></i></button>
                                                <span class="likes-count ms-2">62</span>
                                            </div>
                                            <div class="comments-share d-flex">
                                                <span>4 Comments</span>
                                                <span>2 Share</span>
                                            </div>
                                        </div>
                                        <div class="like-comment-main d-flex justify-content-around align-items-center">
                                            <div class="likes-btn-main">
                                                <span><i class="fa-solid fa-thumbs-up me-2"></i> Likes</span>
                                            </div>
                                            <div class="comment-btn-main" id="commentBox">
                                                <span><i class="fa-solid fa-message me-2"></i> Comments</span>
                                            </div>
                                            <div class="share-btn-main">
                                                <span><i class="fa-solid fa-share me-2"></i> Share</span>
                                            </div>
                                        </div>
                                        <div class="comments-sec" id="commentSec">
                                            <div class="comment-top-heading">
                                                <span>Ver mais comentários</span>
                                            </div>
                                            <div class="comments-box">
                                                <div class="comments-box-wrp">
                                                    <div class="comments-profile">
                                                        <img src="{{ asset('assets/user/images/comments-profile.png') }}"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                    <div class="comments-here">
                                                        <div class="comments-here-first">
                                                            <h5>Joana Almeida </h5>
                                                            <h5 class="d-flex align-items-center">Está fantástico! Parabéns
                                                                <img src="{{ asset('assets/user/images/party-head-removebg-preview.png') }}"
                                                                    class="party-img" alt="...">
                                                            </h5>
                                                        </div>
                                                        <div class="comments-btns ">
                                                            <button class="respond-btn ps-0">Gosto</button>
                                                            <button class="respond-btn">Responder</button>
                                                            <span>10 h</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="comments-box-wrp">
                                                    <div class="comments-profile">
                                                        <img src="{{ asset('assets/user/images/comments-profile.png') }}"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                    <div class="comments-here">
                                                        <div class="comments-here-first">
                                                            <h5>Joana Almeida </h5>
                                                            <h5 class="d-flex align-items-center">Está fantástico! Parabéns
                                                                <img src="{{ asset('assets/user/images/party-head-removebg-preview.png') }}"
                                                                    class="party-img" alt="...">
                                                            </h5>
                                                        </div>
                                                        <div class="comments-btns ">
                                                            <button class="respond-btn ps-0">Gosto</button>
                                                            <button class="respond-btn">Responder</button>
                                                            <span>10 h</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="comments-box-wrp">
                                                    <div class="comments-profile">
                                                        <img src="{{ asset('assets/user/images/comments-profile.png') }}"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                    <div class="comments-here">
                                                        <div class="comments-here-first">
                                                            <h5>Joana Almeida </h5>
                                                            <h5 class="d-flex align-items-center">Está fantástico! Parabéns
                                                                <img src="{{ asset('assets/user/images/party-head-removebg-preview.png') }}"
                                                                    class="party-img" alt="...">
                                                            </h5>
                                                        </div>
                                                        <div class="comments-btns ">
                                                            <button class="respond-btn ps-0">Gosto</button>
                                                            <button class="respond-btn">Responder</button>
                                                            <span>10 h</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="comments-post d-flex align-items-center comment-my">
                                                    <div class="comments-holder-profile">
                                                        <img src="{{ asset('assets/user/images/comments-profile.png') }}"
                                                            alt="...">
                                                    </div>
                                                    <div
                                                        class="comments-input-wrp d-flex align-items-center justify-content-between">
                                                        <div class="comments-input">
                                                            <input type="text" placeholder="Escreve um comentário...">
                                                        </div>
                                                        <div
                                                            class="comments-icons d-flex justify-content-center align-items-center">
                                                            <button class="comments-additional-btn"><img
                                                                    src="{{ asset('assets/user/images/quote.PNG') }}"
                                                                    alt=""></button>
                                                            <button class="comments-additional-btn"><img
                                                                    src="{{ asset('assets/user/images/smile.PNG') }}"
                                                                    alt=""></button>
                                                            <button class="comments-additional-btn"><img
                                                                    src="{{ asset('assets/user/images/gif.PNG') }}"
                                                                    alt="">
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="subscribe-btn d-flex justify-content-center">
                                                    <button class="register-btn">Subscribe First</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-Friends" role="tabpanel"
                            aria-labelledby="pills-Friends-tab" tabindex="0">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="suggestion-box-wrap text-center">
                                        <h4 class="heading-lg mb-35">Suggested For You</h4>
                                        <div class="">
                                            <div
                                                class="d-flex align-items-center gap-3 justify-content-center  text-start mb-35 ">
                                                <div class="user-img">
                                                    <img src="{{ asset('assets/user/images/user-img.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="headings-min-w">
                                                    <h5 class="heading-lg sub-hd mb-0">Eddie Lobanovskiy</h5>
                                                    <p class="heading-lg hd-sm">laboanovskiy@gmail.com</p>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex align-items-center  gap-3 justify-content-center  text-start mb-35 ">
                                                <div class="user-img">
                                                    <img src="{{ asset('assets/user/images/user-img.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="headings-min-w">
                                                    <h5 class="heading-lg sub-hd mb-0">Alexey Stave</h5>
                                                    <p class="heading-lg hd-sm">alexeyst@gmail.com</p>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex align-items-center  gap-3 justify-content-center  text-start mb-35">
                                                <div class="user-img">
                                                    <img src="{{ asset('assets/user/images/user-img.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="headings-min-w">
                                                    <h5 class="heading-lg sub-hd mb-0">Anton Tkacheve</h5>
                                                    <p class="heading-lg hd-sm">tkacheveanton@gmail.com</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="active-box-wrap position-relative ">
                                            <h4 class="heading-lg mb-35 text-start ">Active</h4>
                                            <div class="">
                                                <div
                                                    class="d-flex align-items-center gap-3 justify-content-center  text-start mb-35 ">
                                                    <div class="user-img">
                                                        <img src="{{ asset('assets/user/images/user-img.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="headings-min-w">
                                                        <h5 class="heading-lg sub-hd mb-0">Eddie Lobanovskiy</h5>
                                                        <p class="heading-lg hd-sm">laboanovskiy@gmail.com</p>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center  gap-3 justify-content-center  text-start mb-35 ">
                                                    <div class="user-img">
                                                        <img src="{{ asset('assets/user/images/user-img.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="headings-min-w">
                                                        <h5 class="heading-lg sub-hd mb-0">Alexey Stave</h5>
                                                        <p class="heading-lg hd-sm">alexeyst@gmail.com</p>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center  gap-3 justify-content-center  text-start mb-35">
                                                    <div class="user-img">
                                                        <img src="{{ asset('assets/user/images/user-img.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="headings-min-w">
                                                        <h5 class="heading-lg sub-hd mb-0">Anton Tkacheve</h5>
                                                        <p class="heading-lg hd-sm">tkacheveanton@gmail.com</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="register-btn">Subscribe</button>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-8">
                                    <div class="suggestion-box-wrap-main">
                                        <div class="suggestion-box-wrap">
                                            <div class="holder-wrp">
                                                <div class="holder-img">
                                                    <img src="{{ asset('assets/user/images/holder-img.png') }}"
                                                        class="img-fluid" alt="">
                                                </div>
                                                <div class="holder-name">
                                                    <h4>Marlon Samuels</h4>
                                                    <span>Posted on 00:00 am . <i class="fa-solid fa-earth-americas"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="post-content">
                                                <p class="terms-text">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                    elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet
                                                    lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor.
                                                    Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                                                    ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis
                                                    tellus mollis orci, sed rhoncus sapien nunc eget odio. Lorem ipsum dolor
                                                    sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.
                                                    Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.
                                                    Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis
                                                    dis parturient montes, nascetur ridiculus mus. Nam fermentum,
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod
                                                    bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra
                                                    justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque
                                                    penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam
                                                    fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci,
                                                    sed rhoncus sapien nunc eget odio. Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin
                                                    gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin
                                                    sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis
                                                    parturient montes, nascetur ridiculus mus. Nam fermentum,</p>
                                            </div>
                                        </div>
                                        <div class="post-img">
                                            <img src="{{ asset('assets/user/images/Post-imagem.png') }}" class="w-100"
                                                alt="">
                                        </div>
                                        <div class="likes-comments-wrp d-flex justify-content-between align-items-center">
                                            <div class="post-like d-flex align-items-center">
                                                <button class="like-btn"><i
                                                        class="fa-solid fa-thumbs-up text-white"></i></button>
                                                <button class="heart-btn"><i
                                                        class="fa-solid fa-heart text-white"></i></button>
                                                <span class="likes-count ms-2">62</span>
                                            </div>
                                            <div class="comments-share d-flex">
                                                <span>4 Comments</span>
                                                <span>2 Share</span>
                                            </div>
                                        </div>
                                        <div class="like-comment-main d-flex justify-content-around align-items-center">
                                            <div class="likes-btn-main">
                                                <span><i class="fa-solid fa-thumbs-up me-2"></i> Likes</span>
                                            </div>
                                            <div class="comment-btn-main" id="commentBox">
                                                <span><i class="fa-solid fa-message me-2"></i> Comments</span>
                                            </div>
                                            <div class="share-btn-main">
                                                <span><i class="fa-solid fa-share me-2"></i> Share</span>
                                            </div>
                                        </div>
                                        <div class="comments-sec" id="commentSec">
                                            <div class="comment-top-heading">
                                                <span>Ver mais comentários</span>
                                            </div>
                                            <div class="comments-box">
                                                <div class="comments-box-wrp">
                                                    <div class="comments-profile">
                                                        <img src="{{ asset('assets/user/images/comments-profile.png') }}"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                    <div class="comments-here">
                                                        <div class="comments-here-first">
                                                            <h5>Joana Almeida </h5>
                                                            <h5 class="d-flex align-items-center">Está fantástico! Parabéns
                                                                <img src="{{ asset('assets/user/images/party-head-removebg-preview.png') }}"
                                                                    class="party-img" alt="...">
                                                            </h5>
                                                        </div>
                                                        <div class="comments-btns ">
                                                            <button class="respond-btn ps-0">Gosto</button>
                                                            <button class="respond-btn">Responder</button>
                                                            <span>10 h</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="comments-box-wrp">
                                                    <div class="comments-profile">
                                                        <img src="{{ asset('assets/user/images/comments-profile.png') }}"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                    <div class="comments-here">
                                                        <div class="comments-here-first">
                                                            <h5>Joana Almeida </h5>
                                                            <h5 class="d-flex align-items-center">Está fantástico! Parabéns
                                                                <img src="{{ asset('assets/user/images/party-head-removebg-preview.png') }}"
                                                                    class="party-img" alt="...">
                                                            </h5>
                                                        </div>
                                                        <div class="comments-btns ">
                                                            <button class="respond-btn ps-0">Gosto</button>
                                                            <button class="respond-btn">Responder</button>
                                                            <span>10 h</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="comments-box-wrp">
                                                    <div class="comments-profile">
                                                        <img src="{{ asset('assets/user/images/comments-profile.png') }}"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                    <div class="comments-here">
                                                        <div class="comments-here-first">
                                                            <h5>Joana Almeida </h5>
                                                            <h5 class="d-flex align-items-center">Está fantástico! Parabéns
                                                                <img src="{{ asset('assets/user/images/party-head-removebg-preview.png') }}"
                                                                    class="party-img" alt="...">
                                                            </h5>
                                                        </div>
                                                        <div class="comments-btns ">
                                                            <button class="respond-btn ps-0">Gosto</button>
                                                            <button class="respond-btn">Responder</button>
                                                            <span>10 h</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="comments-post d-flex align-items-center comment-my">
                                                    <div class="comments-holder-profile">
                                                        <img src="{{ asset('assets/user/images/comments-profile.png') }}"
                                                            alt="...">
                                                    </div>
                                                    <div
                                                        class="comments-input-wrp d-flex align-items-center justify-content-between">
                                                        <div class="comments-input">
                                                            <input type="text" placeholder="Escreve um comentário...">
                                                        </div>
                                                        <div
                                                            class="comments-icons d-flex justify-content-center align-items-center">
                                                            <button class="comments-additional-btn"><img
                                                                    src="{{ asset('assets/user/images/quote.PNG') }}"
                                                                    alt=""></button>
                                                            <button class="comments-additional-btn"><img
                                                                    src="{{ asset('assets/user/images/smile.PNG') }}"
                                                                    alt=""></button>
                                                            <button class="comments-additional-btn"><img
                                                                    src="{{ asset('assets/user/images/gif.PNG') }}"
                                                                    alt="">
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="subscribe-btn d-flex justify-content-center">
                                                    <button class="register-btn">Subscribe First</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-4">

                        </div> -->
            </div>
        </div>

    </section>
@endsection
@push('scripts')
    <script>
        let click = false;
        let box = document.getElementById('commentBox');
        box.style.cursor = 'pointer';
        let commentSec = document.getElementById('commentSec');
        commentSec.style.transition = '.5s'
        box.addEventListener('click', () => {
            click = !click
            if (click) {
                commentSec.style.display = 'block'
            } else {
                commentSec.style.display = 'none'

            }
        })
    </script>
@endpush

@push('like-scripts')
<script>
    $(document).ready(function() {
        $('.like').on('click', function(){
            var postId= $(this).data('post-id');
            console.log(postId);
            $.ajax({
                url: "{{ route('post.like') }}",
                method: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "post_id": postId
                },
                success: function(data){
                    console.log(data);
                    if(data.message==='Liked' || data.message=== 'Unliked'){
                        $('.likes-count').text(data.likeCount);
                        if(data.message==='Liked'){
                            $('.like-color').html('<i class="fa-solid fa-thumbs-up mr-2" style="color: #74C0FC;"><span>Unlike</span></i>');
                        }
                        else{
                            $('.like-color').html('<i class="fa-solid fa-thumbs-up me-2 like-color"><span>Like</span></i> ')
                        }

                    }
                }

        })

    })
})
</script>
@endpush
