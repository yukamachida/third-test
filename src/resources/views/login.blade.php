<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PiGLy</title>
</head>

<body>

    <h1>PiGLy</h1>
    <h2>login</h2>
    < class="login-form_inner">
        <form method="POST" action="/weight_logs">
            @csrf
            <div class="login-form__group">
                <label class="login-form__label" for="email">メールアドレス</label>
                <input class="login-form__input" type="mail" name="email" id="email" placeholder="メールアドレスを入力">
                <p class="register-form__error-message">
                    @error('email')
                        {{ $message }}
                    @enderror
                </p>
            </div>

            <div class="login-form__group">
                <label class="login-form__label" for="password">パスワード</label>
                <input class="login-form__input" type="password" name="password" id="password" placeholder="パスワードを入力">
                <p>
                    @error('password')
                        {{ $message }}
                    @enderror
                </p>
            </div>
            <input class="login-form__btn btn" type="submit" value="ログイン">
        </form>
        </div>
        <a href="/register/step1">アカウント作成はこちら</a>
</body>
</div>

</html>