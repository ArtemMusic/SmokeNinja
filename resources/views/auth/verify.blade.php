@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Подтвердите вашу почту') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Новое письмо было отправлено.') }}
                        </div>
                    @endif

                    {{ __('Для подтверждения профиля проверьте вашу почту.') }}
                    <br>
                    {{ __('Я ничего не получил') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Отправить еще раз') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
