@extends('layout.layout')

@section('page_title')
    <div class="row p-35 align-items-center">
        <div class="col-lg-6">
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
        <div class="col-lg-6">
            <a href="#" class="btn btn-primary ms-auto d-block">Update Plan</a>
        </div>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="user-table">
                <div class="d-flex table-header justify-content-between align-items-center mb-4">
                    <h3 class="table-hd">Users</h3>
                    <label class="wrap d-flex" style="border-radius: 3.948px 0px 0px 3.948px">
                        <h4 class="table-hdc">Sort</h4>
                        <select name="Sort" id="filter" class="filter-2"
                            style="border-radius: 0px 3.95px 3.95px 0px;">
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
                            <th scope="col" class="col">Email</th>
                            <th scope="col" class="col">Pakage</th>
                            <th scope="col" class="col">Take On<img src="./assets/images/arrows.svg" alt="">
                            </th>
                            <th scope="col" class="col">Status<img src="./assets/images/arrows.svg" alt="">
                            </th>
                            <th scope="col" class="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $key => $user)
                            <tr>
                                <th scope="row">{{$key+1}}</th>
                                <td class="user-name">{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>ADCF</td>
                                <td>{{$user->created_at}}</td>
                                <td class="status"><span class="status-indicate"></span>{{$user->subscription('1')->stripe_status}}</td>
                                <td>
                                    <img src="./assets/images/more.svg" alt="">
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
                <nav aria-label="Page navigation example" class="pt-5">
                    <ul class="pagination">
                        {{-- <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true"><img src="./assets/images/pagination-arrow.svg" alt="">
                                    Prev 10</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                        <li class="page-item"><a class="page-link" href="#">7</a></li>
                        <li class="page-item"><a class="page-link" href="#">8</a></li>
                        <li class="page-item"><a class="page-link" href="#">9</a></li>
                        <li class="page-item"><a class="page-link" href="#">10</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">Next 10</span>
                            </a>
                        </li> --}}
                        {{ $users->links('vendor.pagination.custom') }}
                    </ul>
                </nav>
            </div>
        </div>

    </div>
@endsection
