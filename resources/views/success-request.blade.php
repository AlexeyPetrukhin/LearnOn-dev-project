<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRM</title>
    <link rel="stylesheet" href="{{ asset('css/success-request/style.css') }}">
</head>
<body>
<div class="wrapper">
    <div class="container">
        <div class="logo">
            <a href="">
                <img src="{{ asset('img/success-request/logo.png') }}" alt="">
            </a>
        </div>
        <div class="inner">
            <div class="img">
                <img src="{{ asset('img/success-request/success.png') }}" alt="">
            </div>
            <div class="title">
                <h1>Новый пароль успешно установлен</h1>
            </div>
            <div class="btn">
                <a href="{{ route('main') }}">Вернуться</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
