<header class="header-secondry">
  <div class="container">
    <!-- <div class="nav-items d-flex justify-content-between ">
      <div class="logo">
        <a href="./"><img src="./assets/images/logo.png" alt=""></a>
      </div>
      <nav class="navLinks">
        <ul class="primary-nav d-flex justify-content-between align-items-center  mb-0">
          <li><a href="javascript:;">News Feed</a></li>
          <li><a href="javascript:;">Subscription</a></li>
          <li><a href="javascript:;">About us</a></li>
          <li><a href="./contact-us.php">Contact us</a></li>
        </ul>
        <div class="dropdown main-drop-down">
          <button class="dropdown-toggle d-flex align-items-center" type="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            <div class="profile-circle-wrap">
              <i class="fa-regular fa-user"></i>
            </div>
            <div>
              <span class="ps-4">Mark</span>
            </div>
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </div>
      </nav>
    </div> -->
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <div class="logo">
          <a href="./"><img src="{{asset('assets/user/images/logo.png')}}" alt=""></a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" id="navbarToggler">
          <i class="fa-solid fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse special" id="navbarNav">
          <ul class="navbar-nav ms-auto primary-nav  mb-0 align-items-center">
            <div class="nav-header d-lg-none d-md-none  d-sm-block">
              <div class="logo">
                <a href="./"><img src="{{asset('assets/user/images/logo.png')}}" alt=""></a>
              </div>
              <div class="close-btn">
              <i class="fa-regular fa-circle-xmark" style="color: #f54d81;" id="closeNav"></i>
              </div>
            </div>
            <li><a href="{{route('home')}}">News Feed</a></li>
            <li><a href="{{route('user.plan')}}">Subscription</a></li>
            <li><a href="javascript:;">About us</a></li>
            <li><a href="{{route('contact-us')}}">Contact us</a></li>
            <div class="dropdown main-drop-down">
              <button class="dropdown-toggle d-flex align-items-center" type="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <div class="profile-circle-wrap">
                  <i class="fa-regular fa-user"></i>
                </div>
                <div>
                  <span class="ps-4">Mark</span>
                </div>
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="{{route('user.logout')}}">Logout</a></li>
              </ul>
            </div>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</header>
