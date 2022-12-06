@extends('layouts.main')

@section('content')
<main class="blog-post" style="color:antiquewhite !important;">
    <div class="container">
        <h1 class="edica-page-title" data-aos="fade-up" style="color:antiquewhite;">{{$post->title}}</h1>

        <h6 class="edica-blog-post-meta" data-aos="fade-up" data-aos-delay="200" style="color:crimson; font-size: 20pt; background: rgba(0, 0, 0, 0.8); border-radius:5px; width:300px; margin:auto; padding:1%">В наличии: <span style="color:antiquewhite;">10 шт</span></h6>
        <br>

        <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
            <img src="{{asset('storage/' . $post->main_image)}}" alt="featured image" class="w-100" style="border:1px solid transparent; border-radius:10px;">

        </section>

        <section class="post-content" style="color:antiquewhite !important;">
            <div class="row">
                <div class="col-lg-9 mx-auto" data-aos="fade-up" style="color:antiquewhite;">
                    <p style="color:antiquewhite !important;">{!! $post->content !!}</p>
                </div>
            </div>
        </section>

        <div class="row mt-4">
            <div class="col-lg-9 mx-auto">
                <section class="py-3" data-aos="fade-up">
                    @if($relatedPosts->count() > 0)
                    <section class="related-posts">
                        <h2 class="section-title mb-4" data-aos="fade-up">
                            <p style="color:antiquewhite;">Похожие товары <i class="fas fa-solid fa-bomb"></i></p>
                        </h2>
                        <div class="row">
                            @foreach($relatedPosts as $relatedPost)
                            <div class="col-md-4" data-aos="fade-right" data-aos-delay="100">
                                <a href="{{route('post.show', $relatedPost->id)}}"><img src="{{asset('storage/'. $relatedPost->preview_image)}}" alt="related post" class="post-thumbnail" style="border:1px solid transparent; border-radius:10px;"></a>

                                <h5 class="post-title" style="color:antiquewhite;">{{$relatedPost->title}}</h5>
                                </a>
                            </div>
                            @endforeach
                        </div>
                        @endif
                    </section>
            </div>
        </div>
    </div>
</main>
@endsection