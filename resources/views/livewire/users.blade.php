<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
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
                    <input type="date" wire:model="from" wire:change="refreshComponent" class="to-from">
                    <input type="date" wire:model="to" wire:change="refreshComponent" class="to-from">

                    <label class="wrap">
                        <select name="Monthly" id="filter" class="filter filter3">
                            <option value="Monthly">Show</option>
                            <option value="Yearly">Hide</option>
                        </select>
                    </label>
                    <label for="" class="search-side">
                        <input type="text" wire:model="search" wire:change="refreshComponent" placeholder="search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </label>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" class="col">S.No</th>
                            <th scope="col" class="col">Name<img src="./assets/images/arrows.svg" alt="">
                            </th>
                            <th scope="col" class="col">Date</th>
                            <th scope="col" class="col">Type</th>
                            <th scope="col" class="col">Email<img src="./assets/images/arrows.svg" alt="">
                            </th>
                            <th scope="col" class="col">Status<img src="./assets/images/arrows.svg"
                                    alt="">
                            </th>
                            <th scope="col" class="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $key => $user)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td class="user-name">{{ $user->name }}</td>
                                <td>{{ $user->created_at->format('d M Y') }}</td>
                                <td>
                                    @if ($user->subscribed('1'))
                                        {{-- {{dd($user->subscription('1')->asStripeSubscription())}} --}}
                                        <p> Subscribed</p>
                                        {{-- <p>{{date('Y-m-d H:i:s',$user->subscription()->asStripeSubscription('1')->current_period_end)}}</p>
                                        <p>{{date('Y-m-d H:i:s',$user->subscription()->asStripeSubscription('1')->current_period_start)}}</p> --}}
                                    @else
                                        {{-- {{dd($user->subscription()->asStripeSubscription())}} --}}
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
                {{-- <nav aria-label="Page navigation example" class="pt-5"> --}}
                    {{-- <ul class="pagination"> --}}



                        {{ $users->links() }}
                    {{-- </ul> --}}
                {{-- </nav> --}}
            </div>
        </div>

    </div>
</div>
