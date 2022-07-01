<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../public/css/style.css">
    <title>Загорский Трубный Завод</title>
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="header-inner">
                <img src="../resources/media/img/logo_ztz.png" alt="Logo" class="logo">
                <div class="null"></div>
                    <div class="nav">
                        <a href="{{ route('main') }}">Главная</a>
                        <a href="#">Каталог</a>
                        <a href="#">Новости</a>
                        @auth()
                            @if(Auth::user()->role == 'admin')
                                <a href="adminAccount">Личный кабинет</a>
                            @endif
                            @if(Auth::user()->role == 'user')
                                    <a href="account">Личный кабинет</a>
                                @endif
                            <a href="{{ route('logout') }}">Выход</a>
                        @endauth
                        @guest()
                            <a href="{{ route('register') }}">Регистрация</a>
                            <a href="{{ route('login') }}">Авторизация</a>
                        @endguest
                    </div>
            </div>
        </div>
    </div>
    @yield('content')

</body>
</html>

