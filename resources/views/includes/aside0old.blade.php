<aside class="aside" id="aside">
    <div class="side-head flex justify-content-between">
        <img src="./assets/images/logo.png" alt="logo" class="logo">
        <i class="fa-solid fa-xmark" id="close"></i>
    </div>
    <ul class="cus-nav">
        <li class="nav-item">
            <a class="nav-link active" href="{{ route('dashboard') }}"><i class="fa-regular fa-user"></i>Dashbooard</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <i class="fa-regular fa-user"></i> Users
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('users') }}">Users</a></li>
                <li><a class="dropdown-item" href="{{ route('user.detail') }}">User Detail</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="./index.php" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <i class="fa-solid fa-gift"></i> Subscriptions
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('subscription') }}">Subscriptions</a></li>
                <li><a class="dropdown-item" href="{{ route('sub-plan') }}">Subscription Plans</a></li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('payment') }}"><i class="fa-regular fa-user"></i>Payment Logs <span
                    class="ntf">2</span></a>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <i class="fa-regular fa-user"></i> Post
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('post') }}">Post Management</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <i class="fa-solid fa-gear"></i> CMS
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('posts.index') }}">CMS</a></li>
                {{-- <li><a class="dropdown-item" href="{{route('cms-pageView')}}">Page View</a></li> --}}
                <li><a class="dropdown-item" href="{{ route('posts.create') }}">Page Add</a></li>
                {{-- <li><a class="dropdown-item" href="{{route('cms-pageEdit')}}">Page Edit</a></li> --}}
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <i class="fa-solid fa-gear"></i> Feedbacks
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('feedback') }}">Feedbacks</a></li>
                <li><a class="dropdown-item" href="{{ route('manage-feedback') }}">Feedbacks Management</a></li>
            </ul>
        </li>
    </ul>
    <div class="mt-5">
        <li class="nav-item">
            <a class="nav-link nav-link2" href="{{ route('dashboard') }}"><i class="fa-regular fa-thumbs-up"></i>Help
                Center</a>
        </li>
        <li class="nav-item">
            <a class="nav-link nav-link2" href="{{ route('dashboard') }}"><i
                    class="fa-regular fa-thumbs-up"></i>Contact us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link nav-link2 logout" href="{{ route('logout') }}" data-bs-toggle="modal"
                data-bs-target="#exampleModal"><i class="fa-solid fa-right-from-bracket"></i>Log out</a>
        </li>
    </div>
</aside>
