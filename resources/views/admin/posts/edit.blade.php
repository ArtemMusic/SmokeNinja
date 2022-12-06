@extends('layouts.admin')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактирование</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Главная</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.post.index')}}">Посты</a></li>
                        <li class="breadcrumb-item active">Редактирование</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12">
                    <form action="{{route('admin.post.update', $post->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="form-group w-25">
                            <input id="title" name="title" type="text" class="form-control" placeholder="Название (макс. 30с)" maxlength="30" value="{{$post->title}}">
                            @error('title')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <textarea id="summernote" name="content">{{$post->content}}</textarea>
                            @error('content')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="w-50 mb-2">
                            <img src="{{url('storage/' . $post->preview_image)}}" alt="preview" class="w-50">
                        </div>
                        <div class="form-group w-50">
                            <label for="exampleInputFile">Изменить превью</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="preview_image">
                                    <label class="custom-file-label">Выберите файл...</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Загрузка</span>
                                </div>
                            </div>
                            @error('preview_image')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="w-50 mb-2">
                            <img src="{{url('storage/' . $post->main_image)}}" alt="main" class="w-50">
                        </div>
                        <div class="form-group w-50">
                            <label for="exampleInputFile">Изменить главное изображение</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="main_image">
                                    <label class="custom-file-label">Выберите файл...</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Загрузка</span>
                                </div>
                            </div>
                            @error('main_image')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group w-25">
                            <label for="exampleInputFile">Изменить категорию</label>
                            <select id="category_id" class="form-control" name="category_id">
                                @foreach($categories as $category)
                                <option value="{{$category->id}}" {{$category->id == $post->category_id ? 'selected' : ''}}>{{$category->title}}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label>Изменить теги</label>
                            <select name="tag_ids[]" class="select2" multiple="multiple" data-placeholder="Выберите теги..." style="width: 50%;">
                                @foreach($tags as $tag)
                                <option {{ is_array( $post->tags->pluck('id')->toArray() ) && in_array($tag->id, $post->tags->pluck('id')->toArray() ) ? 
                                        'selected' : '' }} value="{{$tag->id}}">{{$tag->title}}</option>
                                @endforeach
                            </select>
                            @error('tag_ids')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>


                        <div class="form-group w-25">
                            <input type="submit" class="mt-3 btn btn-block btn-outline-success" value="Изменить">
                        </div>
                    </form>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
    </section>
    <!-- /.content -->
</div>
@endsection