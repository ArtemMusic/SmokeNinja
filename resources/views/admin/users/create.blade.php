@extends('layouts.admin')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавление пользователя</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.user.index')}}">Пользователи</a></li>
                        <li class="breadcrumb-item active">UserList</li>
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
                    <form action="{{route('admin.user.store')}}" class="w-25" method="POST">
                        @csrf
                        <input id="name" name="name" type="text" class="form-control mb-2" placeholder="Имя (макс. 20с)" maxlength="20" value="{{old('name')}}">
                        @error('name')
                        <p class="text-danger">Поле необходимо для заполнения</p>
                        @enderror
                        <input id="email" name="email" type="mail" class="form-control mb-2" placeholder="Email" value="{{old('email')}}">
                        @error('email')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                        <div class="form-group">
                            <label for="exampleInputFile">Добавить роль</label>
                            <select id="role" class="form-control" name="role">
                                @foreach($roles as $id => $role)
                                <option value="{{$id}}" {{$id == old('role') ? 'selected' : ''}}>{{$role}}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('role')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                        <button type="submit" class="mt-3 btn btn-block btn-outline-success">Создать</button>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection