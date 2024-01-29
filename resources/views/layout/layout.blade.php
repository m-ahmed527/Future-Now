<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../assets/vendor/vendor.css">
    <link rel="stylesheet" href="../assets/vendor/fonts.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:wght@200;300;400;500;600;700;800;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @livewireStyles
    @livewireScripts
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>future now</title>
</head>

<body>
    <div class="mainWrapper">
        @include('includes.aside')
        <main class="main">

            <div class="container-fluid">
                @include('includes.header')
                <h2 class="dashboard-hd">@yield('page_title')</h2>
                @yield('content')
            </div>
        </main>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content text-center">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <img src="{{ asset('assets/images/check-one.svg') }}" alt="" width="65px" height="65px">
                    <p>Are you sure you wish to logout?</p>

                </div>
                <button type="button" class="btn btn-primary" style="background-color: #EF6179 !important;"
                    data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#exampleModal2">Yes</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content text-center">
                {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                <div class="modal-body">
                    <img src="{{ asset('assets/images/check-one.svg') }}" alt="" width="65px" height="65px">
                    <p>Activated/Inactivated Successfully!</p>

                </div>
                <form action="{{ route('logout') }}" method="get">
                    @csrf
                    <button type="submit" class="btn btn-primary" style="background: #169BD5 !important;"
                        data-bs-dismiss="modal">Ok</button>
                </form>
                {{-- <a href="{{route('logout')}}">Logout</a> --}}
            </div>
        </div>
    </div>
    <footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var lineChart = document.getElementById("line-chart").getContext('2d');

        var options = {
            borderWidth: 2,
            cubicInterpolationMode: 'monotone',
            pointRadius: 2,
            pointHoverRadius: 5,
            pointHoverBackgroundColor: '#fff',
            pointHoverBorderWidth: 1,
        }

        var gradientOne = lineChart.createLinearGradient(0, 0, 0, lineChart.canvas.clientHeight);
        gradientOne.addColorStop(0, 'rgba(51, 169, 247, 0.3)');
        gradientOne.addColorStop(1, 'rgba(0, 0, 0, 0)');

        var gradientTwo = lineChart.createLinearGradient(0, 0, 0, lineChart.canvas.clientHeight);
        gradientTwo.addColorStop(0, 'rgba(195, 113, 239, 0.15)');
        gradientTwo.addColorStop(1, 'rgba(0, 0, 0, 0)');

        new Chart(
            lineChart, {
                type: 'line',
                data: {
                    labels: ['May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov'],
                    datasets: [{
                            label: 'Spending',
                            data: [310, 300, 370, 295, 350, 300, 230],
                            ...options,
                            borderColor: '#FF9500',
                        },
                        {
                            label: 'Emergency',
                            data: [150, 230, 195, 260, 220, 300, 320],
                            ...options,
                            borderColor: '#347AE2',
                        }
                    ]
                },
                options: {
                    plugins: {
                        legend: {
                            display: false,
                        },
                        tooltip: {
                            backgroundColor: 'rgba(53, 27, 92, 0.8)',
                            caretPadding: 1,
                            boxWidth: 1,
                            usePointStyle: 'triangle',
                            boxPadding: 0
                        }
                    },
                    scales: {
                        x: {
                            grid: {
                                display: false
                            },
                            beginAtZero: true
                        },
                        y: {
                            ticks: {
                                callback: function(value, index, values) {
                                    return [0, 20, 40, 60, 80, 100][index];
                                },
                                max: 100,
                                beginAtZero: true
                            }
                        }
                    }
                }
            }
        );


        let navMEnu = document.querySelector('.nav-icon')
        let sidebar = document.querySelector('.aside');
        navMEnu.style.display = 'none'
        // $(window).resize(()=>{
        if ($(window).width() < 991) {
            sidebar.style = 'none';
            $('.nav-icon').css('display', 'block')
            $('.nav-icon').click(function() {
                $('.aside').toggle(() => {
                    $('.aside').addClass('nav-hide');
                    $('.aside').removeClass('nav-hide');
                })
            })
            $('.main').css('width', '100%')
        }
        let navIcon = document.querySelector('.nav-menu');
        let closeNav = document.getElementById('close');
                closeNav.addEventListener('click', () => {
                    sidebar.style.display = 'none';
                    console.log('zia');
                })
        // $(window).resize(()=>{
        if ($(window).width() < 768) {
            // sidebar.style.display = 'none';
            // navIcon.style.display = 'flex'
            // console.log("window");
            // $('.nav-icon').click(function() {
            //     sidebar.style.display = 'block';
            // })
        }
        window.addEventListener('resize', () => {
            let body = $('body').width();
            if (body < 768) {


                sidebar.style.display = 'none';
                navIcon.style.display = 'flex'
                console.log("window");
                $('.nav-icon').click(function() {
                    sidebar.style.display = 'block';
                })
                console.log(body)
            }
        })
    </script>
    @stack('scripts') 
</body>


</html>
