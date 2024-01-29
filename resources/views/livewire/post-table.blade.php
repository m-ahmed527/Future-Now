<div>
    <div class="row">
        <div class="col-12">
            <div class="user-table">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="table-hd">Content Management System</h3>
                    <label class="wrap d-flex" style="border-radius: 3.948px 0px 0px 3.948px">
                        <h4 class="table-hdc table-hdc2">Status</h4>
                        <select name="Sort" id="filter" class="filter-2"
                            style="border-radius: 0px 3.95px 3.95px 0px;">
                            <option value="Default">Select</option>
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
                        <input type="text" wire:model="search" wire:change="refreshComponent"  placeholder="search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </label>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" class="col">S.No</th>
                            <th scope="col" class="col">Name<img src="./assets/images/arrows.svg" alt="">
                            </th>
                            <th scope="col" class="col">Email</th>
                            <th scope="col" class="col">Pakage</th>
                            <th scope="col" class="col">Take On<img src="./assets/images/arrows.svg"
                                    alt="">
                            </th>
                            <th scope="col" class="col">Status<img src="./assets/images/arrows.svg"
                                    alt="">
                            </th>
                            <th scope="col" class="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $key => $post)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td class="user-name">{{ $post->user->name }}</td>
                                <td>{{ $post->user->email }}</td>
                                <td>ADCF</td>
                                <td>{{ $post->created_at }}</td>
                                @if ($post->status == 1)
                                    <td class="status"><a href="{{ route('post.status', $post) }}"><span
                                                class="status-indicate"></span>Active</a></td>
                                @else
                                    <td class="status"> <a href="{{ route('post.status', $post) }}"><span
                                                class="status-indicate inactive"></span>Inactive</a></td>
                                @endif
                                <td>

                                    <div class="select">
                                        <ul class="user-dropDown ">
                                            <li class="">
                                                <a class="nav-link dropdown-toggle user-drop " href="#"
                                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <img src="./assets/images/more.svg" alt="">
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('posts.show', $post) }}">View</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('posts.edit', $post) }}">Edit</a></li>
                                                    <li>
                                                        <form action="{{ route('posts.destroy', $post) }}"
                                                            method="post">

                                                            @method('DELETE')
                                                            @csrf
                                                            <button type="submit" class="dropdown-item">
                                                                Remove
                                                            </button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                {{-- <nav aria-label="Page navigation example" class="pt-5">
                    <ul class="pagination"> --}}

                        {{ $posts->links() }}
                    {{-- </ul>
                </nav> --}}
            </div>
        </div>

    </div>
</div>
