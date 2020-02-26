<html>
    <head>
        <meta charset = "utf-8">
        <!-- タイトルロゴ画像埋め込み -->
        <title>家計簿アプリ</title>
        <link rel="stylesheet" href="{{ asset('/css/top.css') }}">
    </head>

    <body>
        <h1 class=img>
            <img src="asset/images/titlelogo.png">
        </h1>
        <!-- ログイン画面移動ボタン -->
        <form method="post" action="" name="top">
            <p>↓会員の方はこちら↓</p>
            <button>ログインする</button>
        </form>
        <!-- 会員登録画面移動ボタン -->
        <form method="post" action="" name="top2">
            <p>↓新規の方はこちら↓</p>
            <button>会員登録する</button>
        </form>

        <footer>
            <!-- 問い合わせフォームリンク -->
            <a href="">問い合わせ</a>
            <p>&copy; IWATA 2020</p>
        </footer>
    </body>
</html>