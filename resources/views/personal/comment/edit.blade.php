@extends('layouts.personal')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Комментарии</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('personal.main.index')}}">Главная</a></li>
                        <li class="breadcrumb-item active">Комментарии</li>
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
                    <form action="{{route('personal.comment.update', $comment->id)}}" class="col-4" method="POST">
                        @method('PATCH')
                        @csrf
                        <textarea id="message" name="message" type="text" class="form-control" placeholder="Комментарий: (max 400с) " maxlength="400" cols="30" rows="10">{{$comment->message}}</textarea>
                        @error('message')
                        <p class="text-danger">Поле необходимо для заполнения</p>
                        @enderror
                        <button type="submit" class="mt-3 btn btn-block btn-outline-success">Изменить</button>
                        <button type="reset" class="btn btn-block btn-outline-secondary">Сбросить</button>
                    </form>
                </div>
            </div> <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection