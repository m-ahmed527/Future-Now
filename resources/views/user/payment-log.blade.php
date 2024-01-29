@extends('layout.layout')
@section('page_title')
<div class="row p-35">
    <div class="col-12">
        <div class="tabs">
            <div class="tabs-links">
                <a href="#">
                    <h4>Dashboard <span><i class="fa-solid fa-chevron-right"></i></span></h4>
                </a>
                <a href="#">
                    <h4 class='active'>Payment Logs</h4>
                </a>

            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="user-table">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="table-hd">Users</h3>
                <label class="wrap d-flex" style="border-radius: 3.948px 0px 0px 3.948px">
                    <h4 class="table-hdc">Sort</h4>
                    <select name="Sort" id="filter" class="filter-2" style="border-radius: 0px 3.95px 3.95px 0px;">
                        <option value="Default">Default</option>
                        <option value="Yearly">Coustom</option>
                    </select>
                </label>
                <input type="date" data-date="" value="" class="to-from">
                <input type="date" data-date="" value="" class="to-from">
                <label class="wrap">
                    <select name="Monthly" id="filter" class="filter filter3">
                        <option value="Monthly">Show</option>
                        <option value="Yearly">Hide</option>
                    </select>
                </label>
                <label for="" class="search-side">
                    <input type="text" placeholder="search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </label>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="col">S.No</th>
                        <th scope="col" class="col">Name<img src="./assets/images/arrows.svg" alt=""></th>
                        <th scope="col" class="col">Email<img src="./assets/images/arrows.svg" alt=""></th>
                        <th scope="col" class="col">Date</th>
                        <th scope="col" class="col">Amount</th>
                        <th scope="col" class="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- <tr>
                        <th scope="row">1</th>
                        <td class="user-name">Mark</td>
                        <td>info@abc.com</td>
                        <td>Nov 15, 2023</td>
                        <td>$123</td>
                        <td>
                            <img src="./assets/images/more.svg" alt="">
                        </td>
                    </tr> --}}
                    @foreach ($subscriptions as $key => $subscription)
                    <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td class="user-name">{{$subscription->user->name}}</td>
                        <td>{{$subscription->user->email}}</td>
                        {{-- <td>ADCF</td> --}}
                        <td>{{$subscription->created_at}}</td>
                        <td >$ {{$subscription->asStripeSubscription()->plan->amount/100}}</td>
                        <td>
                            <img src="./assets/images/more.svg" alt="">
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <nav aria-label="Page navigation example" class="pt-5">
                <ul class="pagination">
                    {{ $subscriptions->links('vendor.pagination.custom') }}

                </ul>
            </nav>
        </div>
    </div>

</div>
@endsection
