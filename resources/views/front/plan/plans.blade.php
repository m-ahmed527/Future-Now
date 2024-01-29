@extends('layout.front-layout')
@section('title', 'Plans')
@section('content')
    <section class="users-sec mt-70">
        <div class="container">
            <div class="our-plan">
                <h1 class="text-center primary-hd">Your Subscription Plan</h1>
                <div class="our-planinfo">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-sm-12">
                            <img src="{{ asset('assets/user/images/subs-left.png') }}" alt="">
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="info">
                                <h4 class="primary-hd">Date Taken:</h4>
                                <span>1/1/2023</span>
                            </div>
                            <div class="info">
                                <h4 class="primary-hd">Date of Expiration:</h4>
                                <span>1/1/2023</span>
                            </div>
                            <div class="info">
                                <h4 class="primary-hd">Package:</h4>
                                <span>$00</span>
                            </div>
                            <button class="subs-btn" data-bs-toggle="modal" data-bs-target="#PackageUnsub">Unsubscribe
                                Offer
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-3 mb-4">
                <h1 class="text-center primary-hd">Simple, transparent pricing</h1>
                <p class="text-center primary-text">No contracts. No surprise fees.</p>
            </div>
            <div class="pricingTabs">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="tab-link nav-link active" id="home-tab" data-bs-toggle="tab"
                                data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                                aria-selected="true">MONTHLY
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="tab-link nav-link" id="profile-tab" data-bs-toggle="tab"
                                data-bs-target="#profile-tab-pane" type="button" role="tab"
                                aria-controls="profile-tab-pane" aria-selected="false">YEARLY
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                </ul>
                <div class="price-plans tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                         tabindex="0">
                        <div class="row price-cards">
                            @foreach ($monthly as $plan)
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="price-card">
                                        <h3>${{ $plan->price }} <span>/{{ $plan->type }}</span></h3>
                                        <h4>{{ $plan->name }}</h4>
                                        <p>{{ $plan->description }}</p>
                                        <div class="price-opts mt-3">
                                            @foreach ($plan->packages as $package)
                                                <div class="price-option">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                         viewBox="0 0 20 20" fill="none">
                                                        <path class="price-check-bg"
                                                              d="M10 0C4.47715 0 0 4.47715 0 10C0 15.5228 4.47715 20 10 20C15.5228 20 20 15.5228 20 10C19.9936 4.47982 15.5202 0.00642897 10 0Z"
                                                              fill-opacity="0.103693"/>
                                                        <path class="price-check"
                                                              d="M15.7725 6.83337L10.0683 14.5742C9.93228 14.7547 9.72942 14.873 9.50533 14.9024C9.28124 14.9319 9.05472 14.8701 8.87665 14.7309L4.80331 11.4742C4.44387 11.1866 4.38567 10.662 4.67331 10.3025C4.96096 9.94309 5.48554 9.88489 5.84498 10.1725L9.24165 12.89L14.4308 5.84754C14.601 5.5922 14.8977 5.45103 15.2032 5.48007C15.5086 5.50912 15.7734 5.70368 15.8924 5.98652C16.0114 6.26935 15.9653 6.59469 15.7725 6.83337Z"/>
                                                    </svg>
                                                    <p>{{ $package->name }}</p>
                                                </div>
                                            @endforeach
                                        </div>
                                        <button class="price-btn text-center" data-bs-toggle="modal"
                                                data-bs-target="#Packagesub">
                                            Choose plan
                                        </button>
                                    </div>

                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                         tabindex="0">
                        <div class="row price-cards">
                            @foreach ($yearly as $plan)
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="price-card">
                                        <h3>${{ $plan->price }} <span>/{{ $plan->type }}</span></h3>
                                        <h4>{{ $plan->name }}</h4>
                                        <p>{{ $plan->description }}</p>
                                        <div class="price-opts mt-3">
                                            @foreach ($plan->packages as $package)
                                                <div class="price-option">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                         viewBox="0 0 20 20" fill="none">
                                                        <path class="price-check-bg"
                                                              d="M10 0C4.47715 0 0 4.47715 0 10C0 15.5228 4.47715 20 10 20C15.5228 20 20 15.5228 20 10C19.9936 4.47982 15.5202 0.00642897 10 0Z"
                                                              fill-opacity="0.103693"/>
                                                        <path class="price-check"
                                                              d="M15.7725 6.83337L10.0683 14.5742C9.93228 14.7547 9.72942 14.873 9.50533 14.9024C9.28124 14.9319 9.05472 14.8701 8.87665 14.7309L4.80331 11.4742C4.44387 11.1866 4.38567 10.662 4.67331 10.3025C4.96096 9.94309 5.48554 9.88489 5.84498 10.1725L9.24165 12.89L14.4308 5.84754C14.601 5.5922 14.8977 5.45103 15.2032 5.48007C15.5086 5.50912 15.7734 5.70368 15.8924 5.98652C16.0114 6.26935 15.9653 6.59469 15.7725 6.83337Z"/>
                                                    </svg>
                                                    <p>{{ $package->name }}</p>
                                                </div>
                                            @endforeach
                                        </div>
                                        <button class="price-btn text-center" data-bs-toggle="modal"
                                                data-bs-target="#Packagesub">
                                            Choose plan
                                        </button>
                                    </div>

                                </div>
                            @endforeach
                        </div>
                    </div>
                    {{-- unsubscribe modal --}}
                    <div class="DoneModal modal fade" id="PackageUnsub" tabindex="-1"
                         aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                        <div class=" modal-dialog">
                            <div class="modal-content">
                                <div class="DoneModalHeader modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="{{ asset('assets/user/images/check-one.png') }}" alt="">
                                    <h1>Are you sure you want to Unsubscribe?</h5>

                                </div>
                                <div class="modal-footer justify-content-center">
                                    <button class="profile-primary-btn" style="padding: 10px 188px;"
                                            data-bs-dismiss="modal" aria-label="Close">Yes
                                    </button>
                                    <button class="profile-primary-btn"
                                            style="padding: 10px 188px; background-color: #4B7902 !important; border: 2px solid #4B7902 !important;"
                                            data-bs-dismiss="modal" aria-label="Close">Cancel
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- choose plan  modal --}}
                    <div class="modal-c DoneModal modal fade" id="Packagesub" tabindex="-1"
                         aria-labelledby="exampleModalLabel"
                         aria-hidden="true" style="--bs-modal-width: 700px; --bs-modal-height: 700px;">


                        <div class=" modal-dialog">
                            <div class="modal-content">
                                <div class="DoneModalHeader modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="{{ asset('assets/user/images/check-one.png') }}" alt="">
                                    {{-- <h1>Are you sure you want to subscribe?</h5> --}}

                                    <div class="row justify-content-center ">
                                        <div class="col-lg-12">
                                            <form action="{{route('user.payment')}}" id="form" method="POST">
                                                @csrf
                                                <div class="card-number specific">
                                                    <h1>Card Number</h1>
                                                    <input type="tel" maxlength="16"
                                                           name="card_number"
                                                           placeholder="1234  5678  9101  1121" required>
                                                </div>
                                                <div class="row specific">
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="Date expiration">
                                                            <h1>Expiration Date</h1>
                                                            <input type="date" name="expire" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="CVV expiration">
                                                            <h1>CVV</h1>
                                                            <input type="tel" name="cvv" maxlength="3" placeholder="123" required>
                                                        </div>
                                                    </div>
                                                </div>
{{--                                                <div class="details d-flex align-items-center specific">--}}
{{--                                                    <input type="checkbox" id="type" style="height: 16px; width: 16px;"--}}
{{--                                                           required>--}}
{{--                                                    <label for="type" class="save">--}}
{{--                                                        Save card details--}}
{{--                                                    </label>--}}
{{--                                                </div>--}}
                                                <div class="submit-btn d-flex justify-content-center">
                                                    <button type="submit" class="specific register-btn w-100">Pay
                                                    </button>

                                                </div>
                                                <div class="description">
                                                    <p>Your personal data will be used to process your order, support
                                                        your <br> experience throughout this website, and for other
                                                        purposes describedin our privacy policy.</p>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer justify-content-center">
                                    {{-- <button class="profile-primary-btn" style="padding: 10px 188px;"
                                        data-bs-dismiss="modal" aria-label="Close">Yes</button> --}}
                                    {{-- <button class="profile-primary-btn"
                                        style="padding: 10px 188px; background-color: #4B7902 !important; border: 2px solid #4B7902 !important;"
                                        data-bs-dismiss="modal" aria-label="Close">Cancel</button> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
