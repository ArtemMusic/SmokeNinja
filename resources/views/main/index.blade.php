@extends('layouts.main')

@section('content')
<main class="blog">
    <div class="container">
        <h1 class="edica-page-title" data-aos="fade-up" style="color:crimson;">SmokeNinja</h1>
        
        <section class="featured-posts-section">
        <h3 class="edica-page" data-aos="fade-up">Последние посты</h3>
        <br>
            <div class="row">
            @foreach($posts as $post)
                <div class="col-md-4 fetured-post blog-post" data-aos="fade-right">
                    <div class="blog-post-thumbnail-wrapper">
                        <img src="{{'storage/' . $post->preview_image}}" alt="blog post">
                    </div>
                    <p class="blog-post-category">{{$post->category->title}}</p>
                    <a href="#!" class="blog-post-permalink">
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
                        @foreach($randomPosts as $randpost)
                        <div class="col-md-6 blog-post" data-aos="fade-up">
                            <div class="blog-post-thumbnail-wrapper">
                                <img src="{{'storage/' . $randpost->preview_image}}" alt="blog post">
                            </div>
                            <p class="blog-post-category">{{$randpost->category->title}}</p>
                            <a href="#!" class="blog-post-permalink">
                                <h6 class="blog-post-title">{{$randpost->title}}</h6>
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
                            <a href="#!" class="post-permalink media">
                                <img src="{{'storage/' . $likedPost->preview_image}}" alt="blog post">
                                <div class="media-body">
                                    <h6 class="post-title">{{$likedPost->title}}</h6>
                                </div>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="widget">
                    <h5 class="widget-title">Подборка по категориям</h5>
                    <img src="{{asset('assets/images/blog_widget_categories.jpg')}}" alt="categories" class="w-100">
                </div>
                <!-- <div class="widget">
                    <h5 class="widget-title">Tags</h5>
                    <img src="{{asset('assets/images/blog_widget_categories.jpg')}}" alt="categories" class="w-100">
                </div> -->
            </div>
        </div>
    </div>

</main>
@endsection