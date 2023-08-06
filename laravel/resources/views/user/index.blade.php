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
    <link rel="stylesheet" href="{{asset('assets/css/stylesheet.css')}}">
</head>
<body>
<!-- ナビゲーションバー -->
<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand ml-5 d-sm-block" href="#">Sage's Saving</a>
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
                <a class="nav-link" href="{{(route('login'))}}">Log in</a>
            </li>
        </ul>
    </div>
</nav>
<!-- ボディーパート -->
<div class="container-fluid text-center body">
    <div class="row mb-5">
        <div class="col">
            <h2>“Savings revolution.<br>
                Gameify your path to<br>
                financial bliss!"
            </h2>
        </div>
        <div class="col">
            <img src="{{asset('assets/img/poorGuy.png')}}" alt="poorGuy" height="225" width="180">
            <img src="{{asset('assets/img/normalguy2.png')}}" alt="normalGuy" height="225" width="180">
            <img src="{{asset('assets/img/richman.png')}}" alt="richman" height="225" width="180">
        </div>
    </div>
    <a href="{{route('record.create')}}" class="btn btn-success mt-5 mb-5">Start</a>
    <hr>
    <div class="row mt-5 mb-5">
        <div class="col-4">
            <img src="{{asset('assets/img/foods.png')}}" alt="" height="320" width="380">
        </div>
        <div class="col-8">
            <h2>Record your expenses and<br>incomes for the daily<br> grocery and so on</h2>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-8">
            <h2>Visualize your money<br>

                flow. Make it easy<br>

                to track your money</h2>
        </div>
        <div class="col-4">
            <img src="{{asset('assets/img/coinsflow.png')}}" width="380" height="320" alt="">
        </div>
    </div>
    <div class="row mt-5 mb-5">
        <div class="col-4">
            <img src="{{asset('assets/img/graph.png')}}" alt="" height="320" width="380">
        </div>
        <div class="col-8">
            <h2>produce the stats and<br>

                archive your goals<br>

                step by steps</h2>
        </div>
    </div>
    <hr>
    <div class="gamification">
        <h1>Gamify your saving and make it fun!</h1>
    </div>
    <div class="row gamification-row ml-5 mb-5">
        <div class="col">
            <div class="card" style="width: 15rem; height: 15rem;">
                <img class="card-img-top" src="{{asset('assets/img/flag.png')}}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Set the goal</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 15rem; height: 15rem  ; ">
                <img class="card-img-top" src="{{asset('assets/img/medal.png')}}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">archive goal</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 15rem; height: 15rem;">
                <img class="card-img-top" src="{{asset('assets/img/ランキングピラミッド.png')}}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Aiming ranks</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid users-voice">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 20rem; height: 20rem  ; ">
                    <img class="card-img-top" src="{{asset('assets/img/icons8-ユーザー-50.png')}}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">it was easy to keep archiving my goal</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 20rem; height: 20rem  ; ">
                    <img class="card-img-top" src="{{asset('assets/img/icons8-ユーザー-50.png')}}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Easy to make my dicipline</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 20rem; height: 20rem  ; ">
                    <img class="card-img-top" src="{{asset('assets/img/icons8-ユーザー-50.png')}}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">fun to save my money now</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid footer-upper text-center">
        <h1 class="text-center mt-5">Start Your Journey</h1>
        <a href="{{route('record.create')}}" class="btn btn-primary mt-5" role="button">Start</a>
    </div>
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
<!-- <div class="container-fluid footer-upper text-center">
    <h1 class="text-center mt-5">Start Your Journey</h1>
    <a href="#" class="btn btn-primary mt-5" role="button">Start</a>
</div>
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
</div> -->

</body>
</html>
