@extends('welcome')

@section('content')
    <div class="container">
        <h2 class="form-head">Авторизация</h2>
        <form action="" method="POST" class="formLogin">
            @csrf
            <div class="form-field">
                <label for="email" class="form-label">Введите электронную почту:</label>
                <input type="email" class="form-input @error('email') is-invalid @enderror" name="email" id="email" aria-describedby="failValidation">
                @error('email')
                <div class="failValidation">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-field">
                <label for="password" class="form-label">Введите пароль:</label>
                <input type="password" class="form-input @error('password') is-invalid @enderror" name="password" id="password" aria-describedby="failValidation">
                @error('password')
                <div class="failValidation">{{ $message }}</div>
                @enderror

                <input type="submit" value="Войти" class="form-btn">
            </div>
        </form>
    </div>

@endsection
