<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <base href="{{ asset('/') }}"> -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SmokeNinja</title>
    <link rel="stylesheet" href="{{asset('assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/font-awesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/aos/aos.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <script src="{{asset('assets/vendors/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/loader.js')}}"></script>
    <style>
        .faq:hover {
            color: crimson;
        }

        @media (min-height:500px) {
            body {
                background-image: url("{{asset('assets/images/13.png')}}");

                /* Путь к фоновому изображению */
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-position: center;
                background-size: cover;
                /* background-size: 100% 100%; */
                /* background-position-y: -80px; */
                background-color: #000;
            }

            p {
                color: antiquewhite !important;
            }

        }


        @media (min-width:1920px) {
            body {
                background-image: url("{{asset('assets/images/13.png')}}");

                /* Путь к фоновому изображению */
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-position: center;
                background-size: cover;
                /* background-size: 100% 100%; */
                background-position-y: -90px;
                background-color: #000;
            }
        }

        @media (max-width:1022px) {
            body {
                background-image: url("{{asset('assets/images/13.png')}}");
                /* Путь к фоновому изображению */
                background-repeat: no-repeat;
                background-attachment: fixed;
                /* background-position: center; */
                background-size: cover;
                /* background-size: 100% 100%; */
                background-position-x: -20px;
                background-color: #000;
            }
        }



        /* @media (max-width: 770px){
            body {
                background-repeat: no-repeat;
                background-size: 120% 60%;
                background-color: #000;
                background-attachment: fixed;
                background-position-y: 110px;
                background-position-x: -50px;
            }
        }

        @media (min-width: 771px) and (max-width: 1000px) {
            body {
                background-repeat: no-repeat;
                background-size: 100% 60%;
                background-color: #000;
                background-attachment: fixed;
                    background-position-y: 110px;
                    background-position-x: -50px; 
            }
        } */
    </style>
</head>

<body>
    <div class="edica-loader"></div>

    <header class="edica-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light" style="padding-right:0 ; padding-left:0 ;">
                <span class="navbar-brand h1 pl-1 pt-3"><a href="{{route('main.index')}}" style="text-decoration: none; color:#000000; font-size: 3rem; color:crimson;">SmokeNinja <i class="fas fa-thin fa-user-ninja"></i></a></span>
                @auth()
                <form action="{{route('logout')}}" method="post">
                    @csrf
                    <input type="submit" value="Выйти" class="btn btn-outline-dark">
                </form>
                <form class="ml-2" action="{{route('admin.index')}}" method="get">
                    @csrf
                    <input type="submit" value="Админка" class="btn btn-outline-dark">
                </form>
                @endauth
                <div class="collapse navbar-collapse justify-content-end" id="modal">
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style=" border-radius:20px;">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content ">
                                <div class="edica-footer-banner-section" style=" border-radius:50px;">
                                    <div class="footer-banner" data-aos="fade-up">
                                        <p class="mb-4" style="color:#000000 !important;">За покупкой обращаться:</p>
                                        <hr>
                                        <p class="contact-details" style="color:#000000 !important;">Оптом:
                                            <a href="https://t.me/a_rtem_m"><i class="fab fa-telegram"></i></a>
                                            <a href="https://wa.me/89621216090"><i class="fab fa-whatsapp"></i></a>
                                        </p>
                                        <p class="contact-details" style="color:#000000 !important;">Общежите Дальневосточное:
                                            <a href="https://t.me/a_rtem_m"><i class="fab fa-telegram"></i></a>
                                            <a href="https://wa.me/89621216090"><i class="fab fa-whatsapp"></i></a>
                                        </p>
                                        <p class="contact-details" style="color:#000000 !important;">Общежите Рыбацкое:
                                            <a href="https://t.me/a_rtem_m"><i class="fab fa-telegram"></i></a>
                                            <a href="https://wa.me/89621216090"><i class="fab fa-whatsapp"></i></a>
                                        </p>
                                        <p class="contact-details" style="color:#000000 !important;">Общежите СПБГAУ:
                                            <a href="https://t.me/a_rtem_m"><i class="fab fa-telegram"></i></a>
                                            <a href="https://wa.me/89621216090"><i class="fab fa-whatsapp"></i></a>
                                        </p>
                                        <p class="contact-details" style="color:#000000 !important;">Иное:
                                            <a href="https://t.me/a_rtem_m"><i class="fab fa-telegram"></i></a>
                                            <a href="https://wa.me/89621216090"><i class="fab fa-whatsapp"></i></a>
                                        </p>
                                        <hr>
                                        <br>
                                        <p style="color:#000000 !important;">Связь, сотрудничество, предложения:</p>
                                        <p class="contact-details" style="color:#000000 !important;"></p>

                                        <nav class="footer-social-links">
                                            <a href="https://t.me/a_rtem_m"><i class="fab fa-telegram"></i></a>
                                            <a href="https://github.com/ArtemMusic"><i class="fab fa-github"></i></a>
                                            <a href="https://vk.com/artem_mk"><i class="fab fa-vk"></i></a>
                                            <a href="https://wa.me/89621216090"><i class="fab fa-whatsapp"></i></a>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="collapse navbar-collapse justify-content-end" id="modal2">
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true" style=" border-radius:20px;">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content ">
                                <div class="edica-footer-banner-section" style=" border-radius:50px;">
                                    <div class="footer-banner" data-aos="fade-up">
                                        <p class="mb-4" style="color:#000000 !important;">Чтобы найти товар листай вниз по сайту!</p>
                                        <ul>
                                        <li><p class="mb-4" style="color:#000000 !important;">Supsmok lux 12000</p></li>
                                        <p>🍑🍏🥃🍓🥭🍉🫐🧊</p>
                                        <li><p class="mb-4" style="color:#000000 !important;">UDN Gen 6500</p></li>
                                        <p>🧊🍉🫐🍋🍑🥃⚡</p>
                                        <li><p class="mb-4" style="color:#000000 !important;">HQD Cuvie plus 1500</p></li>
                                        <p>🥃🍓🚬🍌</p>
                                        <li><p class="mb-4" style="color:#000000 !important;">Supsmok Moti</p></li>
                                        <p>🍓🥭🧊🍏🍑🥃⚡</p>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pl-1" style="padding-right:0;"><a data-toggle="modal" data-target="#exampleModal2" style="color:#000000; text-decoration:none; font-size: 1.5rem; color:antiquewhite;" class="nav-link" href="#" ><span class="faq">Каталог </span>|</a></div>
                <div class="row pl-1" style="padding-left:0;"><a data-toggle="modal" data-target="#exampleModal" style="color:#000000; text-decoration:none; font-size: 1.5rem; color:antiquewhite;" class="nav-link" href="#"><span class="faq">Как купить?</span></a></div>
                <!-- <form class="form-inline pr-3">
                    <input class="form-control" type="search" placeholder="Название: " aria-label="Search" style="border-radius: 100px; width:200px;">
                </form> -->
            </nav>
        </div>
    </header>

    @yield('content')


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