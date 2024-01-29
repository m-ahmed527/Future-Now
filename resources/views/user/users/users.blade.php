@extends('layout.layout')
{{-- {{dd( $users->links())}} --}}
@section('page_title')

    <div class="row p-35">
        <div class="col-12">
            <div class="tabs">
                <div class="tabs-links">
                    <a href="#">
                        <h4>Dashboard <span><i class="fa-solid fa-chevron-right"></i></span></h4>
                    </a>
                    <a href="#">
                        <h4 class='active'>User <span><i class="fa-solid fa-chevron-right"></i></span></h4>
                    </a>
                    <a href="#">
                        <h4>User Detail <span><i class="fa-solid fa-chevron-right"></i></span></h4>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    @livewire('users')
@endsection
