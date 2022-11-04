<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <base href="{{ asset('/') }}"> -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>YourPost</title>
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
            <nav class="navbar navbar-expand-lg navbar-light" style="padding-right:0 ; padding-left:0 ;">

                <span class="navbar-brand h1 pl-1 pt-3"><a href="{{route('main.index')}}" style="text-decoration: none; color:#000000; font-size: 2.25rem;">YourPost</a></span>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#edicaMainNav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="edicaMainNav">
                @if( auth()->user() )
                @if(auth()->user()->role == 0)
                    <a data-toggle="modal" data-target="#modal2" style="color:#000000; text-decoration:none;" class="nav-link mr-2" href="#">Стать автором</a>
                    <div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog d-flex justify-content-center">
                            <section class="edica-footer-banner-section">
                                <div class="container">
                                    <div class="footer-banner" data-aos="fade-up">
                                        <p>Свяжитесь с разработчиком, чтобы стать автором</p>
                                        <p class="contact-details">muzychukartem.music@gmail.com</p>
                                        <nav class="footer-social-links">
                                            <a href="https://t.me/a_rtem_m"><i class="fab fa-telegram"></i></a>
                                            <a href="https://github.com/ArtemMusic"><i class="fab fa-github"></i></a>
                                            <a href="https://vk.com/artem_mk"><i class="fab fa-vk"></i></a>
                                            <a href="https://wa.me/89621216090"><i class="fab fa-whatsapp"></i></a>
                                        </nav>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    @endif
                    @endif

                    <div class="m-2 pl-1">
                        @if( auth()->user() )
                        <i data-toggle="modal" data-target="#modal" class="nav-icon far fa-user rounded-circle" style="color:black;font-size: 40px; cursor: pointer;"></i>

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
                                        <a href="{{route('personal.main.index')}}" style="text-decoration:none; color:darkslategray"><i class="mr-2 fas fa-arrow-right"></i>Личный кабинет</a>
                                        @can('view', auth()->user())
                                        <div  class="mt-3"><a href="{{route('admin.index')}}" style="text-decoration:none; color:darkslategray"><i class="mr-2 fas fa-arrow-right"></i>Кабинет автора</a></div>
                                        @endcan
                                    </div>
                                    <div class="modal-footer">
                                        <form action="{{route('logout')}}" method="post">
                                            @csrf
                                            <input type="submit" value="Выйти" class="btn btn-outline-dark">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>

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
            <div class="footer-banner" data-aos="fade-up" style="border:1px solid rgba(0,0,0,0.1); border-radius:20px; box-shadow: 0px 0px 50px 0px rgba(0, 0, 0, 0.25);">
                <p>Связь с разработчиком:</p>
                <p class="contact-details">muzychukartem.music@gmail.com</p>
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