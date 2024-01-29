<aside class="aside">
    <div>
        <img src="{{asset('assets/user/images/logo.png')}}" alt="logo" class="logo">
    </div>
    <ul class="cus-nav">
        <li class="nav-item">
            <a class="nav-link active" href="./index.php"><i class="fa-regular fa-user"></i>Dashbooard</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-regular fa-user"></i> Users
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="./users.php">Users</a></li>
                <li><a class="dropdown-item" href="./userDetail.php">User Detail</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="./index.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-gift"></i> Subscriptions
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="./subscription.php">Subscriptions</a></li>
                <li><a class="dropdown-item" href="./subscriptionPlans.php">Subscription Plans</a></li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./PaymentLogs.php"><i class="fa-regular fa-user"></i>Payment Logs <span class="ntf">2</span></a>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-regular fa-user"></i> Post
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="./postManagement.php">Post Management</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-gear"></i> CMS
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="./CMS.php">CMS</a></li>
                <li><a class="dropdown-item" href="./cmsPageView.php">Page View</a></li>
                <li><a class="dropdown-item" href="./cmsPageEdit.php">Page Edit</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-gear"></i> Feedbacks
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="./feedbacks.php">Feedbacks</a></li>
                <li><a class="dropdown-item" href="./feedbackDetail.php">Feedbacks Management</a></li>
            </ul>
        </li>
    </ul>
    <div class="mt-5">
        <li class="nav-item">
            <a class="nav-link nav-link2" href="./index.php"><i class="fa-regular fa-thumbs-up"></i>Help Center</a>
        </li>
        <li class="nav-item">
            <a class="nav-link nav-link2" href="./index.php"><i class="fa-regular fa-thumbs-up"></i>Contact us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link nav-link2 logout" href="./index.php" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-right-from-bracket"></i>Log out</a>
        </li>
    </div>
</aside>
