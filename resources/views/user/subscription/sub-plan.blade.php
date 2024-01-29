@extends('layout.layout')
@section('page_title')
    <h2 class="dashboard-hd">dashboard</h2>
    <div class="row mt-4 justify-content-between align-items-center">
        <div class="col-lg-7">
            <h3 class="update-hd">Update Subscription Plan</h3>
        </div>
        <div class="col-lg-4">
            {{-- <button type="button" class="btn btn-primary ms-auto d-block">Update Plan</button> --}}
            <a href="{{ route('plan.create') }}" class="btn btn-primary ms-auto d-block">Create Plan</a>
        </div>
        <div class="col-lg-7 mt-3">
            <p class="update-desc">Discover How Our Innovative Approach Can Save You Money and Boost Your Business
                Performance!</p>
        </div>
        <div class="col-lg-4 mt-3">
            <div class="d-flex justify-content-end align-items-center gap-3">
                <span class="update-desc bill">Billed Monthly</span>
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
                <span class="update-desc bill">Billed Yearly</span>
                <span class="update-desc save">Save upto 20%</span>
            </div>
        </div>

    </div>
    <hr>
@endsection
@section('content')
    <div class="row">
        @foreach ($plans as $plan)
            <div class="col-lg-3">
                <div class="pakage-box ">
                    <span class="title">starter</span>
                    <p class="price"><sub>$</sub>{{$plan->price}}<sub>/{{$plan->type}}</sub></p>
                    <p class="pakage-desc">{{$plan->description}}</p>

                    <ul>
                        @foreach ($plan->packages as $package)
                            <li class="mb-3">
                                 {{ $package->name }}
                            </li>
                        @endforeach
                    </ul>
                    <a href="{{route('plan.edit', $plan->slug)}}" class="price-btn">Edit Plan</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
