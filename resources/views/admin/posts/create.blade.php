@extends('layouts.admin')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавление поста</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.post.index')}}">Посты</a></li>
                        <li class="breadcrumb-item active">PostList</li>
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
                    <form action="{{route('admin.post.store')}}" method="POST">
                        @csrf
                        <div class="form-group w-25">
                            <input id="title" name="title" type="text" class="form-control" placeholder="Название (макс. 20с)" maxlength="20"
                            value="{{old('title')}}">
                            @error('title')
                            <p class="text-danger">Поле необходимо для заполнения</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <textarea id="summernote" name="content">{{old('content')}}</textarea>
                            @error('content')
                            <p class="text-danger">Поле необходимо для заполнения</p>
                            @enderror
                        </div>
                        <div class="form-group w-25">
                            <input type="submit" class="mt-3 btn btn-block btn-outline-success" value="Создать">
                            <button type="reset" class="btn btn-block btn-outline-secondary">Сбросить</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection