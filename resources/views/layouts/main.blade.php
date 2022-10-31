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
                <div class="collapse navbar-collapse" id="edicaMainNav">
                    <ul class="navbar-nav">
                        <li class="nav-item mr-2">
                            <a href="{{route('login')}}" class="btn btn-outline-primary">Войти</a>
                        </li>
                        <li class="nav-item">
                            <form action="{{route('logout')}}" method="post">
                                @csrf
                                <input type="submit" value="Выйти" class="btn btn-outline-primary">
                            </form>
                        </li>
                    </ul>
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
                    <a href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a href="#!"><i class="fab fa-twitter"></i></a>
                    <a href="#!"><i class="fab fa-behance"></i></a>
                    <a href="#!"><i class="fab fa-dribbble"></i></a>
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