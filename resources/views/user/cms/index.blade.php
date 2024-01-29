@extends('layout.layout')

@section('page_title')
    <div class="row pt-5 align-items-center">
        <div class="col-12">
            <div class="tabs">
                <div class="tabs-links">
                    <a href="#">
                        <h4>Dashboard <span><i class="fa-solid fa-chevron-right"></i></span></h4>
                    </a>
                    <a href="#">
                        <h4 class='active'>subscription</h4>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    @livewire('postTable')
@endsection
