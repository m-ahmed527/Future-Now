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
                        <h4 class='active'>Post</h4>
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
                <div class="d-flex align-items-center justify-content-between mb-5">
                    <h3 class="table-hd mb-0">Users</h3>
                    <div class="d-flex justify-content-end align-items-center gap-4">
                        <label class="wrap d-flex after-none" style="border-radius: 3.948px 0px 0px 3.948px">
                            <h4 class="table-hdc">Admin</h4>
                            <h4 class="user">User</h4>
                        </label>
                        <div class="sortby">
                            <span>Sort by:</span>
                            <select name="" id="" style="border: none;" class="cus-select">
                                <option></option>
                                <option value="Month">Month</option>
                                <option value="Year">Year</option>
                            </select>
                        </div>
                        <label for="" class="search-side">
                            <input type="text" placeholder="search">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </label>
                    </div>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" class="col">S.No</th>
                            <th scope="col" class="col">Name<img src="./assets/images/arrows.svg" alt=""></th>
                            <th scope="col" class="col">Email<img src="./assets/images/arrows.svg" alt="">
                            </th>
                            <th scope="col" class="col">Date</th>
                            <th scope="col" class="col">Amount</th>
                            <th scope="col" class="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td class="user-name">Mark</td>
                            <td>info@abc.com</td>
                            <td>Nov 15, 2023</td>
                            <td>$123</td>
                            <td>
                                <img src="./assets/images/more.svg" alt="">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td class="user-name">Mark</td>
                            <td>info@abc.com</td>
                            <td>Nov 15, 2023</td>
                            <td>$123</td>
                            <td>
                                <img src="./assets/images/more.svg" alt="">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td class="user-name">Mark</td>
                            <td>info@abc.com</td>
                            <td>Nov 15, 2023</td>
                            <td>$123</td>
                            <td>
                                <img src="./assets/images/more.svg" alt="">
                            </td>
                        </tr>
                    </tbody>
                </table>
                <nav aria-label="Page navigation example" class="pt-5">
                    <ul class="pagination">
                        <li class="page-item">
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
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

    </div>
@endsection
