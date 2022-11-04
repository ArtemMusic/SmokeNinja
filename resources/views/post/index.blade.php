@extends('layouts.main')

@section('content')
<main class="blog">
    <div class="container">
        <h1 class="edica-page-title" data-aos="fade-up" style="padding-top: 30px;">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" style="border:1px solid rgba(0,0,0,0.1); border-radius:10px; box-shadow: 0px 10px 20px 2px rgba(0, 0, 0, 0.25);">
                    <div class="carousel-item active">
                        <img src="{{asset('dist/img/photo1.png')}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-md-block">
                            <h3>Узнай что-то новое</h3>
                            <p class="d-none d-md-block">Читай интересные посты и блоги</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('dist/img/photo2.png')}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-md-block">
                            <h3>Общайся</h3>
                            <p class="d-none d-md-block">Оставляй свои отзывы к постам</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('dist/img/photo3.jpg')}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-md-block">
                            <h3>Поделись своим опытом</h3>
                            <p class="d-none d-md-block">Расскажи другим о чем-то очень важном</p>
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
        <section class="featured-posts-section">
            <h3 class="edica-page" data-aos="fade-up">Последние посты</h3>
            <br>
            <div class="row">
                @foreach($posts as $post)
                <div class="col-md-4 fetured-post blog-post" data-aos="fade-right">
                    <div class="blog-post-thumbnail-wrapper" style="border:1px solid rgba(0,0,0,0.1); border-radius:10px; box-shadow: 0px 10px 20px 2px rgba(0, 0, 0, 0.25);">
                        <a href="{{route('post.show', $post->id)}}"><img src="{{asset('storage/' . $post->preview_image)}}" alt="blog post" style="transition: none;"></a>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="blog-post-category">{{$post->category->title}}</p>
                        @auth()
                        <form action="{{route('post.like.store', $post->id)}}" method="POST">
                            @csrf
                            <span>{{$post->comments->count()}}</span>
                            <a href="{{route('post.show', $post->id)}}" style="color: black;"><i class="far fa-comment"></i></a>
                            <button type="submit" class="border-0 bg-transparent">
                                <span>{{$post->liked_users_count}}</span>
                                @if(auth()->user()->likedPosts->contains($post->id))
                                <i class="fas fa-heart"></i>
                                @else
                                <i class="far fa-heart"></i>
                                @endif
                            </button>
                        </form>
                        @endauth()
                        @guest()
                        <div>
                            <span>{{$post->comments->count()}}</span>
                            <a href="{{route('post.show', $post->id)}}" style="color: black;"><i class="far fa-comment"></i></a>
                            <span>{{$post->liked_users_count}}</span>
                            <a href="{{route('login')}}" style="color:black;"><i class="far fa-heart"></i></a>
                        </div>
                        @endguest
                    </div>
                    <a href="{{route('post.show', $post->id)}}" class="blog-post-permalink">
                        <h6 class="blog-post-title">{{$post->title}}</h6>
                    </a>
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="mx-auto" style="margin-top: -80px;">
                    {{$posts->links()}}
                </div>
            </div>
        </section>
        <h3 class="edica-page" data-aos="fade-up">Случайные посты</h3>
        <br>
        <div class="row">
            <div class="col-md-8">
                <section>
                    <div class="row blog-post-row">
                        @foreach($randomPosts as $post)
                        <div class="col-md-6 blog-post" data-aos="fade-up">
                            <div class="blog-post-thumbnail-wrapper" style="border:1px solid rgba(0,0,0,0.1); border-radius:10px; box-shadow: 0px 10px 20px 2px rgba(0, 0, 0, 0.25);">
                                <a href="{{route('post.show', $post->id)}}"><img src="{{asset('storage/' . $post->preview_image)}}" alt="blog post" style="transition: none;"></a>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p class="blog-post-category">{{$post->category->title}}</p>
                                @auth()
                                <form action="{{route('post.like.store', $post->id)}}" method="POST">
                                    @csrf
                                    <span>{{$post->comments->count()}}</span>
                                    <a href="{{route('post.show', $post->id)}}" style="color: black;"><i class="far fa-comment"></i></a>
                                    <button type="submit" class="border-0 bg-transparent">
                                        <span>{{$post->liked_users_count}}</span>
                                        @if(auth()->user()->likedPosts->contains($post->id))
                                        <i class="fas fa-heart"></i>
                                        @else
                                        <i class="far fa-heart"></i>
                                        @endif
                                    </button>
                                </form>
                                @endauth()
                                @guest()
                                <div>
                                    <span>{{$post->comments->count()}}</span>
                                    <a href="{{route('post.show', $post->id)}}" style="color: black;"><i class="far fa-comment"></i></a>
                                    <span>{{$post->liked_users_count}}</span>
                                    <a href="{{route('login')}}" style="color:black;"><i class="far fa-heart"></i></a>
                                </div>
                                @endguest
                            </div>
                            <a href="{{route('post.show', $post->id)}}" class="blog-post-permalink">
                                <h6 class="blog-post-title">{{$post->title}}</h6>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </section>
            </div>
            <div class="col-md-4 sidebar" data-aos="fade-left">
                <div class="widget widget-post-list">
                    <h5 class="widget-title">Популярные посты</h5>
                    <ul class="post-list">
                        @foreach($likedPosts as $likedPost)
                        <li class="post">
                            <a href="{{route('post.show', $likedPost->id)}}" class="post-permalink media">
                                <img src="{{asset('storage/' . $likedPost->preview_image)}}" alt="blog post" style="border:1px solid rgba(0,0,0,0.1); border-radius:10px; box-shadow: 0px 10px 20px 2px rgba(0, 0, 0, 0.25);">
                                <div class="media-body">
                                    <h6 class="post-title">{{$likedPost->title}}</h6>
                                </div>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection