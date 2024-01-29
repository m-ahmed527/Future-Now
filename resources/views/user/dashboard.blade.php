@extends('layout.layout')
@section('page_title')
    <h2 class="dashboard-hd">Dashboard</h2>
@endsection
@section('content')

    <div class="cardsWrapper">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5>{{$users_count}}</h5>
                        <div class="user-icon">
                            <img src="./assets/images/users.svg" alt="">
                        </div>
                    </div>
                    <p class="users">Total users</p>
                    <p><img src="./assets/images/up.svg" alt=""><span>10.2</span>+1.01% this week</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card2">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5>{{$subscribers}}</h5>
                        <div class="user-icon">
                            <img src="./assets/images//users.svg" alt="">
                        </div>
                    </div>
                    <p class="users">Subscribed users</p>
                    <p><img src="./assets/images/up.svg" alt=""><span>10.2</span>+1.01% this week</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5>{{$unsubscribers}}</h5>
                        <div class="user-icon">
                            <img src="./assets/images//users.svg" alt="">
                        </div>
                    </div>
                    <p class="users">Un Subscribed users</p>
                    <p><img src="./assets/images/up.svg" alt=""><span>10.2</span>+1.01% this week</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-9">
            <div class="graph">
                <div class="d-flex justify-content-between align-items-center mb-5">
                    <h3 class="table-hd">Latest Users</h3>
                    <div class="d-flex justify-content-end align-items-center gap-4">
                        <div class="status status1"><span class="status-indicate"></span>Offline orders</div>
                        <div class="status"><span class="status-indicate"></span>Online orders</div>
                        <label class="wrap">
                            <select name="Monthly" id="filter" class="filter">
                                <option value="Monthly">Monthly</option>
                                <option value="Yearly">Yearly</option>
                                <option value="Monthly">Monthly</option>
                                <option value="Monthly">Monthly</option>
                            </select>
                        </label>
                    </div>
                </div>
                <div>
                    <canvas id="line-chart" class="w-full" height="103"></canvas>
                </div>

            </div>
        </div>
        <div class="col-lg-3">
            <div class="donut">
                <div class="d-flex justify-content-between align-items-center mb-5">
                    <h3 class="table-hd">Earnings</h3>
                    <img src="./assets/images/more.svg" alt="">
                </div>
                <img src="./assets/images/doughnut.svg" alt="" width="100%">
                <div class="d-flex justify-content-between align-items-center gap-4 mt-5">
                    <div class="status status1"><span class="status-indicate"></span>Offline</div>
                    <div class="status"><span class="status-indicate inactive"></span>Online</div>
                    <div class="status"><span class="status-indicate trade"></span>Online</div>
                </div>
            </div>
        </div>
    </div>
    <div class="user-table mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="table-hd">Latest Users</h3>
            <label class="wrap">
                <select name="Monthly" id="filter" class="filter">
                    <option value="Monthly">Monthly</option>
                    <option value="Yearly">Yearly</option>
                    <option value="Monthly">Monthly</option>
                    <option value="Monthly">Monthly</option>
                </select>
            </label>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" class="col">S.No</th>
                    <th scope="col" class="col">Name<img src="./assets/images/arrows.svg" alt=""></th>
                    <th scope="col" class="col">Date</th>
                    <th scope="col" class="col">Type</th>
                    <th scope="col" class="col">Email<img src="./assets/images/arrows.svg" alt=""></th>
                    <th scope="col" class="col">Status<img src="./assets/images/arrows.svg" alt=""></th>
                    <th scope="col" class="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $key => $user)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td class="user-name">{{ $user->name }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>
                        @if ($user->subscribed('1'))
                            <p> Subscribed</p>
                        @else
                            <p> Not subscribed.</p>
                        @endif
                    </td>
                    <td>{{ $user->email }}</td>
                    @if ($user->active == 1)
                        <td class="status"><a href="{{ route('users.status.toggle', $user) }}"><span
                                    class="status-indicate"></span>Active</a></td>
                    @else
                        <td class="status"> <a href="{{ route('users.status.toggle', $user) }}"><span
                                    class="status-indicate inactive"></span>Inactive</a></td>
                    @endif
                    <td>
                        <a href="{{ route('user.detail', $user) }}"><img src="./assets/images/more.svg"
                                alt=""></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
