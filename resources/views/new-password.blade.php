<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRM</title>
    <link rel="stylesheet" href="{{ asset('css/new-password/style.css') }}">
</head>
<body>
<div class="wrapper">
    <div class="container">
        <div class="logo">
            <a href="{{ route('main') }}">
                <img src="{{ asset("img/new-password/logo.png") }}" alt="">
            </a>
        </div>
        <div class="inner">
            <div class="title">
                <h1>Задать новый пароль</h1>
            </div>
            <form>
                <div class="tip">
                    <p>Новый пароль</p>
                </div>
                <input class="input" type="text">
                <div class="tip">
                    <p>Повторите пароль</p>
                </div>
                <input class="input" type="text">
                <input class="btn" type="submit" value="Новый пароль">
            </form>
        </div>
    </div>
</div>
</body>
</html>
