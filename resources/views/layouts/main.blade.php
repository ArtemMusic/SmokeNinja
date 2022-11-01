<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <base href="{{ asset('/') }}"> -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>YouBlog</title>
    <link rel="stylesheet" href="{{asset('assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/font-awesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/aos/aos.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <script src="{{asset('assets/vendors/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/loader.js')}}"></script>
</head>

<body>
    <div class="edica-loader"></div>
    <header class="edica-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse justify-content-end" id="edicaMainNav">
                    @if( auth()->user() )
                    <img src="dist/img/user1-128x128.jpg" class="rounded-circle z-depth-0" alt="avatar image" height="80" width="80" data-toggle="modal" data-target="#modal" style="cursor: pointer;">

                    <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{Auth::user()->name}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <a href="{{route('personal.main.index')}}">Личный кабинет</a>
                                    @can('view', auth()->user())
                                    <br>
                                    <a href="{{route('admin.index')}}">Админ панель</a>
                                    @endcan
                                </div>
                                <div class="modal-footer">
                                    <form action="{{route('logout')}}" method="post">
                                        @csrf
                                        <input type="submit" value="Выйти" class="btn btn-outline-primary">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif


                    @if( !(auth()->user()) )
                    <ul class="nav">
                        <li class="nav-item dropdown" style="border-bottom: 2px solid grey;">
                            <a style="color:#000000; text-decoration:none;" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">Авторизация</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{url('/login')}}">Войти</a>
                                <a class="dropdown-item" href="{{url('/register')}}">Регистрация</a>
                            </div>
                        </li>
                    </ul>
                    @endif
                </div>
            </nav>
        </div>
    </header>

    @yield('content')

    <section class="edica-footer-banner-section">
        <div class="container">
            <div class="footer-banner" data-aos="fade-up">
                <!-- <h1 class="banner-title">Download it now.</h1>
                <div class="banner-btns-wrapper">
                    <button class="btn btn-success"> <img src="assets/images/apple@1x.svg" alt="ios" class="mr-2"> App Store</button>
                    <button class="btn btn-success"> <img src="assets/images/android@1x.svg" alt="android" class="mr-2"> Google Play</button>
                </div>
                <p class="banner-text">Add some helper text here to explain the finer details of your <br> product or service.</p> -->
                <p class="contact-details">muzychukartem.music@gmail.com</p>
                <p class="contact-details">+79621216090</p>
                <nav class="footer-social-links">
                    <a href="https://t.me/a_rtem_m"><i class="fab fa-telegram"></i></a>
                    <a href="https://github.com/ArtemMusic"><i class="fab fa-github"></i></a>
                    <a href="https://vk.com/artem_mk"><i class="fab fa-vk"></i></a>
                    <a href="https://wa.me/89621216090"><i class="fab fa-whatsapp"></i></a>
                </nav>
            </div>
        </div>
        <br>
        <br>
    </section>
    <script src="{{asset('assets/vendors/popper.js/popper.min.js')}}"></script>
    <script src="{{asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/vendors/aos/aos.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script>
        AOS.init({
            duration: 1000
        });
    </script>
</body>

</html>