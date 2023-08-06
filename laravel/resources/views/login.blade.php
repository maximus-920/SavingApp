<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>landing page for users.index</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('assets/css/loginStylesheet.css')}}">
</head>
<body>
<!-- ナビゲーションバー -->
<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand ml-5 d-sm-block" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto mr-5">
            <li class="nav-item mr-5">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item mr-5">
                <a class="nav-link" href="#">How to</a>
            </li>
            <li class="nav-item mr-5">
                <a class="nav-link" href="#">Log in</a>
            </li>
        </ul>
    </div>
</nav>
<!-- ボディーパート -->
<div class="container-fluid body">
    <br>
    <div class="container-fluid login mt-5">
        <div class="container-fluid login-title mt-5 text-center">
            <h3>Login</h3>
        </div>
        <hr>
        <form action="{{route('login.post')}}" method="post">
            @csrf
            <div class="container-fluid login-info">
                <div class="container-fluid login-email mt-5 text-left">
                    <h5>Email</h5>
                    <input type="text" name="email">
                </div>
                <div class="container-fluid login-password mt-5 text-left">
                    <h5>Password</h5>
                    <input type="password" name="password">
                </div>
            </div>
            <div class="container-fluid text-center mt-5 mb-5">
                <button class="btn btn-success mb-5">Log in</button>
                <br>
                <a href="" class="mt-5">forget password?</a>
            </div>
        </form>
{{--        <div class="container-fluid login-info">--}}
{{--            <div class="container-fluid login-email mt-5 text-left">--}}
{{--                <h5>Email</h5>--}}
{{--                <input type="text">--}}
{{--            </div>--}}
{{--            <div class="container-fluid login-password mt-5 text-left">--}}
{{--                <h5>Password</h5>--}}
{{--                <input type="password">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="container-fluid text-center mt-5 mb-5">--}}
{{--            <a href="#" class="btn btn-success mb-5">Log in</a>--}}
{{--            <br>--}}
{{--            <a href="" class="mt-5">forget password?</a>--}}
{{--        </div>--}}
    </div>
    <hr>
    <div class="container-fluid footer-bottom text-center mt-5">
        <div class="row">
            <div class="col">
                <h5>企業規約</h5>
                <p>運営会社</p>
                <p>利用規約</p>
                <p>プライバシーポリシー</p>
                <p>その他の規約など</p>
            </div>
            <div class="col">
                <h5>サービス</h5>
                <p>iphone, ipad版</p>
                <p>Android版</p>
                <p>開発者向けAPI</p>
                <p>購買行動分析ツール</p>
            </div>
            <div class="col">
                <h5>利用方法</h5>
                <p>使い方</p>
                <p>よくある質問</p>
                <p>お問い合わせ</p>
                <p>ご意見・ご質問 </p>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>
