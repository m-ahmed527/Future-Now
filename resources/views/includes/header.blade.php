<div class="header">
    <div class="container-fluid p-0">
      <div class="row justify-content-between">
        <div class="col-6">
            <div class="nav-menu">
                <i class="fa-solid fa-bars-staggered nav-icon"></i>
              </div>
          <div class="header-heading">
            <h1>Welcome Back, {{auth()->user()->name}}</h1>
          </div>
        </div>
        <div class="col-6">
          <div class="icons-wrp d-flex justify-content-end align-items-center gap-5">
            <div class="icons">
              <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
            </div>

            <div class="dropdown">
              <button class="dropdown-toggle notification-dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="icons">
                  <a href="#"><i class="fa-regular fa-bell"></i></a>
                  <img src="{{asset('assets/images/indicator.png')}}" class="unread-dot" alt="">
                </div>
              </button>
              <ul class="dropdown-menu">
                <div class="notification-body">
                  <div class="notification-header">
                    <p>Notifications</p>
                  </div>
                  <div class="notification-content">
                    <div class="content-head d-flex justify-content-between">
                      <div class="unread">
                        <p>Unread</p>
                      </div>
                      <div class="mark-read  rounded-2">
                        <button>mark as read</button>
                      </div>
                    </div>
                    <div class="notify-main">
                      <div class="first d-flex">
                        <div class="dot">
                          .
                        </div>
                        <div class="image pl-2">
                          <img src="https://onlinedevelopmentserver.com/kc-autoconnect/public/assets/images/Avatar.png" alt="kc">
                        </div>
                        <div class="notify-title">
                          <p class="px-2">Stewie Griffin invited you to Resources_ Product_Growth_Org Design.paper</p>
                          <div class="notify-file d-flex px-2">
                            <img src="https://onlinedevelopmentserver.com/kc-autoconnect/public/assets/images/dropbox.png" alt="kc">
                            <p class="pl-2">Resources_ Product_Growth_Org Design....</p>
                          </div>
                          <p class="notify-time text-secondary mt-2">3 months ago</p>
                        </div>
                      </div>
                    </div>
                    <h3 class="px-3">Recent</h3>
                    <div class="notify-main">
                      <div class="first d-flex">
                        <div class="image pl-2">
                          <img src="https://onlinedevelopmentserver.com/kc-autoconnect/public/assets/images/Avatar -2.png" alt="kc">
                        </div>
                        <div class="notify-title">
                          <p class="px-2">Meg Griffin invited you to edit the folder Logo graphics</p>
                          <div class="notify-file d-flex px-2">
                            <img src="https://onlinedevelopmentserver.com/kc-autoconnect/public/assets/images/file-2.png" alt="kc">
                            <p class="pl-2">Files</p>
                          </div>
                          <p class="notify-time text-secondary mt-2">july 1,2023</p>
                        </div>
                      </div>
                    </div>

                  </div>
                  <a href="{{route('notification')}}" class="text-secondary notify-link">View More</a>
                </div>
              </ul>
            </div>

            <div class="user-img-wrp">
              <div class="userImageSelect">
                @if (auth()->user()->getFirstMediaUrl('UserProfileImage'))
                <a href="#"><img src="{{auth()->user()->getFirstMediaUrl('UserProfileImage')}}" alt="" style="border-radius: 50%; height:30px;width:30px;"></a>
                @else
                <a href="#"><img src="{{asset('assets/images/user.png')}}" alt=""></a>
                @endif
              </div>
              <div class="select">
                <ul class="user-dropDown">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle user-drop" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      {{auth()->user()->name}}
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{route('profile')}}">Profile</a></li>
                      <li><a class="dropdown-item" href="{{route('editProfile')}}">Edit Profile</a></li>
                      <li><a class="dropdown-item" href="{{route('edit-password')}}">Edit Password</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
