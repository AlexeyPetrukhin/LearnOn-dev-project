<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRM</title>
    <link rel="stylesheet" href="{{ asset("css/send-letter/style.css") }}">
</head>
<body>
<div class="wrapper">
    <div class="container">
        <div class="logo">
            <a href="{{ route('main') }}">
                <img src="img/send-letter/logo.png" alt="">
            </a>
        </div>
        <div class="inner">
            <div class="img">
                <img src="img/send-letter/mail.png" alt="">
            </div>
            <div class="title">
                <h1>Письмо отправлено</h1>
            </div>
            <div class="text">
                <p>На указанный адрес отправлено письмо с дальнейшими инструкциями.</p>
            </div>
                <div class="btn">
                    <a href="{{ route('main') }}">Вернуться</a>
                </div>
        </div>
    </div>
</div>
</body>
</html>
