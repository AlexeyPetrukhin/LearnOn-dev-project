<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRM</title>
    <link rel="stylesheet" href="{{ asset("css/sign-in/style.css") }}">
</head>
<body>
<div class="wrapper">
    <div class="login">
        <div class="login-row">
            <div class="login-col login-col_left">
                <div class="login__logo">
                    <a href="">
                        <img src="{{ asset("img/sign-in/logo.png") }}" alt="">
                    </a>
                </div>
                <div class="login__headline">
                    <p>Последние обновления системы</p>
                </div>
                <div class="login-row">
                    <div class="card-col">
                        <div class="card_one card">
                            <div class="card-wrap">
                                <div class="card__title">
                                    <p>{{ $posts[0]->tittle }}</p>
                                </div>
                                <div class="card__subtitle">
                                    <p>{{ $posts[0]->description }}</p>
                                </div>
                                <div class="card-row">
                                    <div class="card__btn">
                                        <a href="">Подробнее</a>
                                    </div>
                                    <div class="card__date">
                                        <p>{{ $posts[0]->created_at }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-col">
                        <div class="card_two card">
                            <div class="card-wrap">
                                <div class="card__title">
                                    <p>{{ $posts[1]->tittle }}</p>
                                </div>
                                <div class="card__subtitle">
                                    <p>{{ $posts[1]->description }}</p>
                                </div>
                                <div class="card-row">
                                    <div class="card__btn">
                                        <a href="">Подробнее</a>
                                    </div>
                                    <div class="card__date">
                                        <p>{{ $posts[1]->created_at }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-col">
                    <div class="card_three">
                        <div class="card-wrap">
                            <div class="card__title">
                                <p>{{ $posts[2]->tittle }}</p>
                            </div>
                            <div class="card__subtitle">
                                <p>{{ $posts[1]->description }}</p>
                            </div>
                            <div class="card-row">
                                <div class="card__btn">
                                    <a href="">Подробнее</a>
                                </div>
                                <div class="card__date">
                                    <p>{{ $posts[1]->created_at }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="login-row">
                    <div class="card-col">
                        <div class="card_one card">
                            <div class="card-wrap">
                                <div class="card__title">
                                    <p>{{ $posts[2]->tittle }}</p>
                                </div>
                                <div class="card__subtitle">
                                    <p>{{ $posts[2]->description }}</p>
                                </div>
                                <div class="card-row">
                                    <div class="card__btn">
                                        <a href="">Подробнее</a>
                                    </div>
                                    <div class="card__date">
                                        <p>{{ $posts[2]->created_at }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-col">
                        <div class="card_two card">
                            <div class="card-wrap">
                                <div class="card__title">
                                    <p>{{ $posts[3]->tittle }}</p>
                                </div>
                                <div class="card__subtitle">
                                    <p>{{ $posts[3]->description }}</p>
                                </div>
                                <div class="card-row">
                                    <div class="card__btn">
                                        <a href="">Подробнее</a>
                                    </div>
                                    <div class="card__date">
                                        <p>{{ $posts[3]->created_at }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="login-col">

                <div class="login-wrap">
                    <div class="login__title">
                        <p>Вход в систему</p>
                    </div>

                    <form class="login__form">

                        <div class="login__tip">
                            <p>Email</p>
                        </div>
                        <input type="text" class="login__input login_signin">
                        <div class="login__tip">
                            <p>Пароль</p>
                        </div>
                        <input type="password" class="login__input login_password">
                        <div class="login-inner">
                            <input type="checkbox" id="checked" class="login__checkbox">
                            <label for="checked" class="login__checked">Запомнить меня</label>
                        </div>

                        <input type="submit" class="login__btn" value="Вход">

                    </form>

                    <div class="login__forger">
                        <a href="{{ route('recovery') }}">Забыли пароль?</a>
                    </div>
                    <div class="login__registration">
                        <a href="">Нет аккаунта? Зарегестрироваться</a>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
</body>
</html>
