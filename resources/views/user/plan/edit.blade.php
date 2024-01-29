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
                        <h4>Subscription Plans</h4>
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
                <form action="{{ route('plan.update', $plan->slug) }}" method="POST" class="feedback-form">
                    @csrf
                    <div class="animated-input">
                        <input type="text" name="name" value="{{ $plan->name }}" required>
                        <label>Plan Name</label>
                    </div>
                    <div class="animated-input ">
                        <input type="number" name="price" value="{{ $plan->price }}" required>
                        <label>Price</label>

                    </div>
                    <div class="animated-input position-relative d-flex justify-content-between">
                        <i class="fa-solid fa-caret-down drop-icon"></i>
                        <select name="type" id="">
                            <option value="Monthly" {{ $plan->type == 'Monthly' ? 'selected' : '' }}>Monthly</option>
                            <option value="Yearly" {{ $plan->type == 'Yearly' ? 'selected' : '' }}>Yearly</option>
                        </select>


                    </div>
                    <div class="animated-input">
                        <textarea name="description" id="" class="feedback-text" cols="30" rows="10">{{ $plan->description }}</textarea>
                        <label>Decsription</label>
                    </div>

                    <div class=" row">
                        <div class="form-group pages_section col-sm-6">
                            <label for="Book Name">Number Of Packages</label>
                            <input type="number" name="pages" value="" class="form-control variant mt-2"
                                id="exampleInputpage" placeholder="Enter Number of Packages">
                            <span class="text-danger">
                                {{-- @error('name')
                                    {{ $message }}
                                @enderror --}}
                            </span>
                            @foreach ($plan->packages as $key => $package)
                                <div style="margin-bottom:40px;">
                                </div>

                                <div class="animated-input"><input type="text" name="package[]" value="{{$package->name}}" required><label>Package
                                        Name</label></div>
                            @endforeach
                        </div>
                        <div class="form-group col-sm-2">
                            <button class="btn-danger " id="page_numbers">
                                Add Packages
                            </button>
                        </div>
                    </div>
                    <button type="submit" class="btn-primary"> Update plan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            let j = 0
            $(document).on('click', '#page_numbers', function(e) {
                e.preventDefault();
                let pages = $('#exampleInputpage').val();
                // let fields = '<div style="margin-bottom:40px;">'+
                // '</div><h4>Page#'+pages+
                // '</h4>'+'<div class="form-group"><label for="Book Name">page title</label><input type="text" name="page_title[]" required  }}"class="form-control variant mt-2" id="exampleInputEmail1" placeholder="Enter Page Ttile"><span class="text-danger"></span><textarea name="page_content"  placeholder="Enter Page content" id="" cols="128" rows="10"></textarea><span class="text-danger"></span></div>';


                for (i = 1; i <= pages; i++) {
                    j++;
                    $('.pages_section').append('<div style="margin-bottom:40px;">' +
                        '</div><div class="animated-input"><input type="text" name="package[]" required><label>Package Name</label></div>'
                    );
                }

            });

        });
    </script>
@endpush
