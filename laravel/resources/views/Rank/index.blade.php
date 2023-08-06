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
    <link rel="stylesheet" href="{{asset('assets/css/RankStyle.css')}}">
</head>
<body>
<!-- ナビゲーションバー -->
{{--<nav class="navbar navbar-expand-lg">--}}
{{--    <a class="navbar-brand ml-5 d-sm-block" href="#">Navbar</a>--}}
{{--    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--        <span class="navbar-toggler-icon"></span>--}}
{{--    </button>--}}
{{--    <div class="collapse navbar-collapse" id="navbarNav">--}}
{{--        <ul class="navbar-nav ml-auto mr-5">--}}
{{--            <li class="nav-item mr-5">--}}
{{--                <p>  </p>--}}
{{--                <p class="nav-link" href="#">User Name</p><p>Rank:</p><p>Golden Saver</p>--}}
{{--            </li>--}}
{{--            <li class="nav-item mt-3">--}}
{{--                <img src="../../img/icons8-ライトニングボルト-50.png" alt="">--}}
{{--            </li>--}}
{{--            <li class="nav-item mr-5">--}}
{{--                <p>  </p>--}}
{{--                <p class="nav-link" href="#">Goal Streak</p><p>x days</p>--}}
{{--            </li>--}}
{{--            <li class="nav-item mr-5">--}}
{{--                <p>  </p>--}}
{{--                <a class="nav-link" href="#">Setting</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item mr-5">--}}
{{--                <p>  </p>--}}
{{--                <a class="nav-link" href="#">Log out</a>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--</nav>--}}
<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand ml-5 d-sm-block" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto mr-5">
            <li class="nav-item mr-5">
                <p>  </p>
                <p class="nav-link" href="#">UserName: <span>{{Illuminate\Support\Facades\Auth::user()->name}}</span></p><p>Rank:</p>{{$rankName}}<p></p>
            </li>
            <li class="nav-item mt-3">
                <img src="{{asset('assets/img/icons8-ライトニングボルト-50.png')}}" alt="">
            </li>
            <li class="nav-item mr-5">
                <p>  </p>
                <p class="nav-link">Goal Streak</p><p>{{$user->streakNum}} month</p>
            </li>
            <li class="nav-item mr-5">
                <p>  </p>
                <a class="nav-link" href="#">Setting</a>
            </li>
            <li class="nav-item mr-5">
                <p>  </p>
                <a class="nav-link" href="{{route('logout')}}">Log out</a>
            </li>
        </ul>
    </div>
</nav>
<!-- ボディーパート -->
<div class="container-fluid text-center body">
    <div class="container-fluid contents">
        <div class="row">
            <div class="col content-left">
                <h4>Ranking</h4>
                <img src="{{asset('assets/img/ranking.png')}}" alt="" style="width: 100%; height:100%;">
            </div>
            <div class="col content-right">
                <h4>Challenge</h4>
                <p class="text-left mt-5">3month Streak</p>
                <div class="progress">
                    <div class="progress-bar" id="Challenge1" role="progressbar" style="width: {{$goal1_archive}}%;" aria-valuenow="{{$goal1_archive}}" aria-valuemin="0" aria-valuemax="100">{{$goal1_archive}}%</div>
                </div>
                <p class="text-left mt-5">6month Streak</p>
                <div class="progress">
                    <div class="progress-bar" id="Challenge1" role="progressbar" style="width: {{$goal2_archive}}%;" aria-valuenow="{{$goal2_archive}}" aria-valuemin="0" aria-valuemax="100">{{$goal2_archive}}%</div>
                </div>
                <p class="text-left mt-5">9month Streak</p>
                <div class="progress">
                    <div class="progress-bar" id="Challenge1" role="progressbar" style="width: {{$goal3_archive}}%;" aria-valuenow="{{$goal3_archive}}" aria-valuemin="0" aria-valuemax="100">{{$goal3_archive}}%</div>
                </div>
                <p class="text-left mt-5">12month Streak</p>
                <div class="progress">
                    <div class="progress-bar" id="Challenge1" role="progressbar" style="width: {{$goal4_archive}}%;" aria-valuenow="{{$goal4_archive}}" aria-valuemin="0" aria-valuemax="100">{{$goal4_archive}}%</div>
                </div>
                <p class="text-left mt-5">15month Streak</p>
                <div class="progress">
                    <div class="progress-bar" id="Challenge1" role="progressbar" style="width: {{$goal5_archive}}%;" aria-valuenow="{{$goal5_archive}}" aria-valuemin="0" aria-valuemax="100">{{$goal5_archive}}%</div>
                </div>

                <p class="text-left mt-5">18month Streak</p>
                <div class="progress">
                    <div class="progress-bar" id="Challenge1" role="progressbar" style="width: {{$goal6_archive}}%;" aria-valuenow="{{$goal6_archive}}" aria-valuemin="0" aria-valuemax="100">{{$goal6_archive}}%</div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="container-fluid footer fixed-bottom">
    <nav class="navbar navbar-expand-lg ml-5">
        <div class="container-fluid footer ml-5">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center ml-5" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item ml-5 mr-5">
                        <img src="{{asset('assets/img/icons8-総勘定元帳-50.png')}}" alt="">
                        <a class="nav-link active" aria-current="page" href="{{route('record.create')}}">Expenses</a>
                    </li>
                    <li class="nav-item ml-5 mr-5">
                        <img src="{{asset('assets/img/icons8-複合グラフ-80.png')}}" alt="" height="50">
                        <a class="nav-link" href="{{route('chart.index')}}">Report&Analysis</a>
                    </li>
                    <li class="nav-item ml-5 mr-5">
                        <img src="{{asset('assets/img/icons8-rank-64.png')}}" alt="" height="50"z>
                        <a class="nav-link" href="{{route('rank')}}">Rank&Challenge</a>
                    </li>
                    <li class="nav-item ml-5 mr-5">
                        <img src="{{asset('assets/img/icons8-ユーザー-50.png')}}" alt="" height="50">
                        <a class="nav-link disabled" href="{{route('user.myPage')}}" tabindex="-1" aria-disabled="true">MyPage</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
</body>
</html>
