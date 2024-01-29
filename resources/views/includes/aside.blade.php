<aside class="aside" id="aside">
    <div class="side-head flex justify-content-between">
        <img src="{{asset('assets/images/logo.png')}}" alt="logo" class="logo">
        <i class="fa-solid fa-xmark" id="close" ></i>
    </div>
    <ul class="cus-nav">
        <li class="nav-item">
            <a class="nav-link active" href="{{ route('dashboard') }}"><i class="fa-regular fa-user"></i><span>Dashbooard</span></a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-regular fa-user"></i><span> Users</span>
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('users') }}">Users</a></li>
                <li><a class="dropdown-item" href="{{ route('user.detail') }}">User Detail</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="/future-now-network/dashboard.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-gift"></i> <span>Subscriptions</span>
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('subscription') }}">Subscriptions</a></li>
                <li><a class="dropdown-item" href="{{ route('sub-plan') }}">Subscription Plans</a></li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('payment') }}"><i class="fa-regular fa-user"></i><span>Payment Logs</span> <span class="ntf">2</span></a>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-regular fa-user"></i> <span>Post</span>
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('post') }}">Post Management</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-gear"></i> <span>CMS</span>
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('posts.index') }}">CMS</a></li>
                <li><a class="dropdown-item" href="{{ route('posts.create') }}">Page Add</a></li>
                {{-- <li><a class="dropdown-item" href="/future-now-network/cmsPageEdit.php">Page Edit</a></li> --}}
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-gear"></i> <span>Feedbacks</span>
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('feedback') }}">Feedbacks</a></li>
                <li><a class="dropdown-item" href="{{ route('manage-feedback') }}">Feedbacks Management</a></li>
            </ul>
        </li>
    </ul>
    <div class="mt-5">
        <li class="nav-item">
            <a class="nav-link nav-link2" href="{{ route('dashboard') }}"><i class="fa-regular fa-thumbs-up"></i><span>Help Center</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link nav-link2" href="{{ route('dashboard') }}"><i class="fa-regular fa-thumbs-up"></i><span>Contact us</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link nav-link2 logout" href="{{ route('logout') }}" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-right-from-bracket"></i><span>Log out</span></a>
        </li>
    </div>
</aside>
<script>

//     let closeNav = document.getElementById('close');
// closeNav.addEventListener('click' , ()=>{
//     sidebar.style.display = 'none';
// })
</script>
