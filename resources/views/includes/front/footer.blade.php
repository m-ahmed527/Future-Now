<footer class="footer position-relative ">
    <div class="footer-bottom-circle-img">
        <img src="{{asset('assets/user/images/bootom-after.png')}}" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h4 class="hd-md">About</h4>
                <ul class="secondry-navs">
                    <li><a href="javascript:;">About us</a></li>
                    <li><a href="javascript:;">Blog</a></li>
                    <li><a href="javascript:;">Careers</a></li>
                    <li><a href="javascript:;">Jobs</a></li>
                    <li><a href="javascript:;">In Press</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h4 class="hd-md">Support</h4>
                <ul class="secondry-navs">
                    <li><a href="javascript:;">Contact us</a></li>
                    <li><a href="javascript:;">Online Chat</a></li>
                    <li><a href="javascript:;">Whatsapp</a></li>
                    <li><a href="javascript:;">Telegram</a></li>
                    <li><a href="javascript:;">Ticketing</a></li>
                </ul>
            </div>
            <div class="col-md-6">
                <h4 class="hd-md mb-3">Newsletter</h4>
                <p class="para mb-5">Be the first one to know about discounts, offers and events. Unsubscribe whenever
                    you like.</p>
                <form action="javascript:;">
                    <div class="position-relative ">
                        <input type="text" class="w-100" placeholder='Enter your email'>
                        <div class="email-icon">
                            <i class="fa-regular fa-envelope"></i>
                        </div>
                        <button class="primary-btn submit-btn">submit</button>
                    </div>
                </form>
                <ul class="social-icons d-flex gap-4 mt-4 ps-5 align-items-center">
                    <li class="linkedin-icon"><a href="javascript:;"><i class="fa-brands fa-linkedin-in"></i></a></li>
                    <li class="twitter-icon"><a href="javascript:;"><i class="fa-brands fa-twitter"></i></a></li>
                    <li class="google-icon"><a href="javascript:;"><img src="{{asset('assets/user/images/google-icon.png')}}"
                                alt=""></a></li>
                    <li class="facebook-icon"><a href="javascript:;"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="javascript:;"><img src="{{asset('assets/user/images/google-play-store.png')}}" alt=""></a></li>
                    <li><a href="javascript:;"><img src="{{asset('assets/user/images/app-store.png')}}" alt=""></a></li>
                </ul>
            </div>
            <div class="col-md-12">
                <div class="footer-bottom d-flex justify-content-center mt-5">
                    <p class="para">© 2000-2023, All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>


        let navbarToggler =document.getElementById('navbarToggler')
        navbarToggler.onclick = ()=>{
            navbarToggler.style.display = 'none'
        }
        let closeNav = document.getElementById('closeNav');
        let navbar = document.querySelector('.navbar-collapse')
        closeNav.addEventListener('click', () => {
             navbar.classList.remove('show');
             navbarToggler.style.display ='block'
        })



    </script>

</footer>
