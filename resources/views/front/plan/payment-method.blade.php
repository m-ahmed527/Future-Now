@extends('layout.front-layout')
@section('title','Payment Gateway')
@section('content')
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-6">
                    <form action="#" id="form">
                        <div class="payment">
                            <h1>Payment</h1>
                            <input type="text" placeholder="You won't be charged until you make a purchase." required>
                        </div>
                        <div class="Pay">
                            <h1>Pay With:</h1>
                            <div class="d-flex" style="gap: 19px;">
                                <div class="d-flex align-items-center" style="gap: 8px;">
                                    <input type="radio" style="width: 16px; height: 16px;" name="fav_language" value="card" id="card" >
                                    <label for="card" class="radio-label">Card</label>
                                </div>
                                <div class="d-flex align-items-center" style="gap: 8px;">
                                    <input type="radio" style="width: 16px; height: 16px;" name="fav_language" value="Bank" id="Bank" >
                                    <label for="Bank" class="radio-label">Bank</label>
                                </div>
                                <div class="d-flex align-items-center" style="gap: 8px;">
                                    <input type="radio" style="width: 16px; height: 16px;" name="fav_language" value="Transfer" id="Transfer" >
                                    <label for="Transfer" class="radio-label">Transfer</label>
                                </div>
                            </div>
                        </div>
                        <div class="card-number specific">
                            <h1>Card Number</h1>
                            <input type="number" placeholder="1234  5678  9101  1121" required>
                        </div>
                        <div class="row specific">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="Date expiration">
                                    <h1>Expiration Date</h1>
                                    <input type="date" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="CVV expiration">
                                    <h1>CVV</h1>
                                    <input type="tel" maxlength="3" placeholder="123" required>
                                </div>
                            </div>
                        </div>
                        <div class="details d-flex align-items-center specific">
                            <input type="checkbox" id="type" style="height: 16px; width: 16px;" required>
                            <label for="type" class="save">
                                Save card details
                            </label>
                        </div>
                        <div class="submit-btn d-flex justify-content-center">
                        <button type="submit" class="specific register-btn w-100">Pay</button>

                        </div>
                        <div class="description">
                            <p>Your personal data will be used to process your order, support your <br> experience throughout this website, and for other purposes describedin our privacy policy.</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
