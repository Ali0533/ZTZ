@extends('welcome')

@section('content')
    <div class="container">

        @guest()
            <h2 class="form-head">Регистрация</h2>
            @if(session()->has('success'))
                <div class="alert-success">Вы успешно зарегистрировались!</div>
            @endif
            <form action="" method="POST" class="formReg">
                @csrf
                <div class="form-field">
                    <label for="surname" class="form-label">Введите фамилию:</label>
                    <input type="text" class="form-input @error('surname') is-invalid @enderror" name="surname" id="surname" aria-describedby="failValidation">
                    @error('surname')
                    <div class="failValidation">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-field">
                    <label for="name" class="form-label">Введите имя:</label>
                    <input type="text" class="form-input @error('name') is-invalid @enderror" name="name" id="name" aria-describedby="failValidation">
                    @error('name')
                    <div class="failValidation">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-field">
                    <label for="patronymic" class="form-label">Введите отчество:</label>
                    <input type="text" class="form-input @error('patronymic') is-invalid @enderror" name="patronymic" id="patronymic" aria-describedby="failValidation">
                    @error('patronymic')
                    <div class="failValidation">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-field">
                    <label for="email" class="form-label">Введите электронную почту:</label>
                    <input type="email" class="form-input @error('email') is-invalid @enderror" name="email" id="email" aria-describedby="failValidation">
                    @error('email')
                    <div class="failValidation">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-field">
                    <label for="phone" class="form-label">Введите номер телефона:</label>
                    <input type="tel" class="form-input @error('phone') is-invalid @enderror" name="phone" id="phone" aria-describedby="failValidation">
                    @error('phone')
                    <div class="failValidation">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-field">
                    <label for="birthday" class="form-label">Введите дату рождения:</label>
                    <input type="date" class="form-input @error('birthday') is-invalid @enderror" name="birthday" id="birthday" aria-describedby="failValidation">
                    @error('birthday')
                    <div class="failValidation">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-field">
                    <label for="city" class="form-label">Введите свой город:</label>
                    <input type="text" class="form-input @error('city') is-invalid @enderror" name="city" id="city" aria-describedby="failValidation">
                    @error('city')
                    <div class="failValidation">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-field">
                    <label for="company" class="form-label">Введите название компании:</label>
                    <input type="text" class="form-input @error('company') is-invalid @enderror" name="company" id="company" aria-describedby="failValidation">
                    @error('company')
                    <div class="failValidation">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-field">
                    <label for="password" class="form-label">Придумайте пароль:</label>
                    <input type="password" class="form-input @error('password') is-invalid @enderror" name="password" id="password" aria-describedby="failValidation">
                    @error('password')
                    <div class="failValidation">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-field">
                    <label for="password_confirmation" class="form-label">Повторите пароль:</label>
                    <input type="password" class="form-input @error('password_confirmation') is-invalid @enderror" name="password_confirmation" id="password_confirmation" aria-describedby="failValidation">
                    @error('password_confirmation')
                    <div class="failValidation">{{ $message }}</div>
                    @enderror
                    <div class="form-accept">
                        <input type="checkbox" class="accept @error('accept') is-invalid @enderror" name="accept" id="accept" aria-describedby="failValidation">
                        <label for="accept" class="form-label">Я даю согласие на обработку своих данных</label>
                        @error('accept')
                        <div class="failValidation">{{ $message }}</div>
                        @enderror

                        <input type="submit" value="Зарегистрироваться" class="form-btn">
                    </div>
                </div>
            </form>
        @endguest
    </div>

@endsection
