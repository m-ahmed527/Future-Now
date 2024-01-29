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
                    <h4>CMS <span><i class="fa-solid fa-chevron-right"></i></span></h4>
                </a>
                <a href="#">
                    <h4>ABOUT US <span><i class="fa-solid fa-chevron-right"></i></span></h4>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="cms-wrapper">
    <div class="row">
        <div class="col-12">
            <div class="text-center">
                <h2>{{$post->name}}</h2>
                <br><br><br>
            </div>
            <div class="cmsPageView">
                <img src="{{$post->getFirstMediaUrl('PostImages')}}" alt="" height="500"  class="w-100">
                <div class="edit-btn">
                    {{-- <form action="{{ route('posts.edit', $post) }}" method="get"> --}}
                         <a href="{{ route('posts.edit', $post) }}"><button class="cover-edit"> Edit</button></a>
                    {{-- </form> --}}

                </div>
            </div>
        </div>
    </div>
    <div class="row my-40">
        <div class="col-12">
            <h4>
                {{$post->title}}
            </h4>
            <div class="cmsPage-text">
                {{-- <p class="mb-2"> --}}
                    {!! $post->description !!}
                {{-- </p> --}}
                {{-- <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum,
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum,
                </p> --}}
            </div>
        </div>
    </div>
</div>
@endsection
