<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRM</title>
    <link rel="stylesheet" href="{{ asset("css/recovery/style.css") }}">
</head>
<body>
<div class="wrapper">
    <div class="container">
        <div class="logo">
            <a href="{{ route('main') }}">
                <img src="../../img/recovery/logo.png" alt="">
            </a>
        </div>
        <div class="inner">
            <div class="title">
                <h1>Восстановление</h1>
            </div>
            <div class="text">
                <p>Ввдетие e-mail аккаунта, к которому потерян доступ. На данный
                    адрес будет отправлено письмо для восстановления доступа.</p>
            </div>
            <form>
                <div class="tip">
                    <p>E-mail</p>
                </div>
                <input class="input" type="text">
                <input class="btn" type="submit" value="Восстановить">
            </form>
        </div>
    </div>
</div>
</body>
</html>
