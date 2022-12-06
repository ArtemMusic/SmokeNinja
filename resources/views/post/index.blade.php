@extends('layouts.main')

@section('content')
<main class="blog">
    <div class="container">

        <h1 class="edica-page-title" data-aos="fade-up" style="padding-top: 30px; color:#000;"><span style="text-align:center"></span>
            <h1 class="edica-page-title" data-aos="fade-up" style="padding-top: 30px; color:#000;"><span style="text-align:center"></span>
                <h1 class="edica-page-title" data-aos="fade-up" style="padding-top: 30px; color:antiquewhite;"></h1>
                <section class="featured-posts-section">
                    <h3 class="edica-page pl-1" data-aos="fade-up" style="font-size: 2; color:antiquewhite">Зверь Supsmok LUX 12000 <i class="fas fa-solid fa-fire"></i></h3>
                    <br>
                    <div class="row">
                        @foreach($posts as $post)
                        <div class="col-md-4 fetured-post blog-post" data-aos="fade-right" style="font-size: 2; color:antiquewhite;">
                            <div class="blog-post-thumbnail-wrapper" style="border:1px solid rgba(0,0,0,0.1); border-radius:10px; box-shadow: 0px 10px 20px 2px rgba(0, 0, 0, 0.25); height:400px;">

                                <a href="{{route('post.show', $post->id)}}"><img src="{{asset('storage/' . $post->preview_image)}}" alt="blog post" style="transition: none;"></a>
                                <h5><span style="padding: 0 10px;
	background: rgba(0, 0, 0, 0.8); border-radius:5px; position:relative; left:10px; top:350px">{{$post->title}}</span></h5>
                                <h5><span style="padding: 0 10px;
	background: rgba(220, 20, 60, 0.8); border-radius:5px; position:relative; top:-20px;">
                                        890
                                    </span></h5>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </section>
                <section class="featured-posts-section">
                    <h3 class="edica-page pl-1" data-aos="fade-up" style="font-size: 2; color:antiquewhite">Проверенный UDN 6500 <i class="fas fa-solid fa-bong"></i></h3>
                    <br>
                    <div class="row">
                        @foreach($likedPosts as $post)
                        <div class="col-md-4 fetured-post blog-post" data-aos="fade-right" style="font-size: 2; color:antiquewhite;">
                            <div class="blog-post-thumbnail-wrapper" style="border:1px solid rgba(0,0,0,0.1); border-radius:10px; box-shadow: 0px 10px 20px 2px rgba(0, 0, 0, 0.25); height:400px;">

                                <a href="{{route('post.show', $post->id)}}"><img src="{{asset('storage/' . $post->preview_image)}}" alt="blog post" style="transition: none;"></a>
                                <h5><span style="padding: 0 10px;
	background: rgba(0, 0, 0, 0.8); border-radius:5px; position:relative; left:10px; top:350px">{{$post->title}}</span></h5>
                                <h5><span style="padding: 0 10px;
	background: rgba(220, 20, 60, 0.8); border-radius:5px; position:relative; left:280px; top:-20px;">

                                        690
                                    </span></h5>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </section>
                <!-- <div class="row">
                    <div class="mx-auto" style="margin-top: -80px;">
                        {{$likedPosts->links()}}
                    </div>
                </div> -->
                <section class="featured-posts-section">
                    <h3 class="edica-page pl-1" data-aos="fade-up" style="font-size: 2; color:antiquewhite">Классика HQD 1500<i class="fas fa-solid fa-star"></i></h3>
                    <br>
                    <div class="row">
                        @foreach($likedPosts2 as $post)
                        <div class="col-md-4 fetured-post blog-post" data-aos="fade-right" style="font-size: 2; color:antiquewhite;">
                            <div class="blog-post-thumbnail-wrapper" style="border:1px solid rgba(0,0,0,0.1); border-radius:10px; box-shadow: 0px 10px 20px 2px rgba(0, 0, 0, 0.25); height:400px;">

                                <a href="{{route('post.show', $post->id)}}"><img src="{{asset('storage/' . $post->preview_image)}}" alt="blog post" style="transition: none;"></a>
                                <h5><span style="padding: 0 10px;
	background: rgba(0, 0, 0, 0.8); border-radius:5px; position:relative; left:10px; top:350px">{{$post->title}}</span></h5>
                                <h5><span style="padding: 0 10px;
	background: rgba(220, 20, 60, 0.8); border-radius:5px; position:relative; left:280px; top:-20px;">

                                        590
                                    </span></h5>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </section>
                <!-- <div class="row">
                    <div class="mx-auto" style="margin-top: -80px;">
                        {{$likedPosts2->links()}}
                    </div>
                </div> -->
                <section class="featured-posts-section">
                    <h3 class="edica-page pl-1" data-aos="fade-up" style="font-size: 2; color:antiquewhite">Доступный Supsmok MOTI 1500 <i class="fas fa-solid fa-money-bill"></i></h3>
                    <br>
                    <div class="row">
                        @foreach($likedPosts3 as $post)
                        <div class="col-md-4 fetured-post blog-post" data-aos="fade-right" style="font-size: 2; color:antiquewhite;">
                            <div class="blog-post-thumbnail-wrapper" style="border:1px solid rgba(0,0,0,0.1); border-radius:10px; box-shadow: 0px 10px 20px 2px rgba(0, 0, 0, 0.25); height:400px;">

                                <a href="{{route('post.show', $post->id)}}"><img src="{{asset('storage/' . $post->preview_image)}}" alt="blog post" style="transition: none;"></a>
                                <h5><span style="padding: 0 10px;
	background: rgba(0, 0, 0, 0.8); border-radius:5px; position:relative; left:10px; top:350px">{{$post->title}}</span></h5>
                                <h5><span style="padding: 0 10px;
	background: rgba(220, 20, 60, 0.8); border-radius:5px; position:relative; left:280px; top:-20px;">
                                        450</span></h5>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </section>
                <!-- <div class="row">
                    <div class="mx-auto" style="margin-top: -80px;">
                        {{$likedPosts3->links()}}
                    </div>
                </div> -->
                <div>
                    <h1 class="edica-page-title" data-aos="fade-up" style="padding-top: 30px;">
                        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>

                            </ol>
                            <div class="carousel-inner" style="border:1px solid rgba(0,0,0,0.1); border-radius:10px; box-shadow: 0px 10px 20px 2px rgba(0, 0, 0, 0.25);">
                                <div class="carousel-item active">
                                    <img src="{{asset('assets/images/9.jpg')}}" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-md-block">
                                        <h3 style="color:antiquewhite;">Для участия напишите сотруднику</h3>
                                        <p class="d-none d-md-block">Приведи друга и получи скидку</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('assets/images/23.jpg')}}" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-md-block">
                                        <h3 style="color:antiquewhite;">Для участия напишите сотруднику</h3>
                                        <p class="d-none d-md-block">Выиграй в конкурсе</p>
                                    </div>
                                </div>

                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>

                    </h1>
                </div>
                <div class="row" style="background-color:aliceblue; height:1px">

                </div>
                <div class="row pt-4">
                    <p style="text-align:center; margin:auto;"> 18+ | Согласно Федеральному закону № 15-ФЗ от 23.02.2013
                        Находясь на сайте вы подтверждаете свой возраст!

                        Сервис не продвигает курение. Мы несём лишь информативный характер.

                    </p>
                    <p style="text-align:center; margin:auto;"> Нашли ошибку или есть предложение? <a href="https://t.me/a_rtem_m"><i class="fab fa-telegram"></i></a></p>
                </div>
    </div>
    </div>

</main>
@endsection