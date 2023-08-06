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
    <link rel="stylesheet" href="{{asset('assets/css/expensesStyle.css')}}">
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
                <p>  </p>
                <p class="nav-link" href="#">UserName: <span>{{Illuminate\Support\Facades\Auth::user()->name}}</span></p><p>Rank:</p><p>{{$rankName}}</p>
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
<!-- phpではformでくくる -->
<div class="container-fluid text-center body">
    <div class="container-fluid contents">
        <div class="row">
            <div class="col content-left">
                <div class="container-fluid">
                    <h4>Date</h4>
                    <p>2023/07/06</p>
                </div>
                <form action="{{route('record.store')}}" method="post">
                    @csrf
                    <div class="container-fluid mt-5">
                        <h4>Note</h4>
                        <input type="text" name="note" style="width: 100%; height: 5rem;">
                    </div>
                    <table class="mt-5 ml-4">
                        <tr>
                            <th><label for="expense">Expense</label></th>
                            <td><input type="number" id="expense" name="expense"></td>
                        </tr>
                        <tr>
                            <th class="pt-5"><label for="income">Income</label></th>
                            <td class="pt-5"><input type="number" id="income" name="income"></td>
                        </tr>
                        <tr>
                            <th class="pt-5"><label for="category">Category</label></th>
                            <td class="pt-5">
                                <select name="category_id" id="category">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="pt-5"><a href="{{route('category.show')}}">add category</a></td>
                        </tr>
                    </table>
                    <button class="btn btn-success mt-5">Submit</button>
                </form>
            </div>
            <div class="col content-right">
                <div class="container-fluid">
                    <h4>Recent Records</h4>
                </div>
                <table class="table table-striped">
                    <tr>
                        <th class="pl-3">Date</th>
                        <th class="pl-3">Note</th>
                        <th class="pl-3">Expense</th>
                        <th class="pl-3">Income</th>
                    </tr>
                    @foreach($records as $record)
                        <tr>
                            <td>{{$record->created_at}}</td>
                            <td>{{$record->note}}</td>
                            <td>${{$record->expense}}</td>
                            <td>${{$record->income}}</td>
                        </tr>
                    @endforeach
{{--                    <tr>--}}
{{--                        <td>2023/07/11</td>--}}
{{--                        <td>disney  </td>--}}
{{--                        <td>$10</td>--}}
{{--                        <td>$50</td>--}}
{{--                        <td><a href="#">edit</a></td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td>2023/07/12</td>--}}
{{--                        <td>coffee</td>--}}
{{--                        <td>$5</td>--}}
{{--                        <td>$0</td>--}}
{{--                        <td><a href="#">edit</a></td>--}}
{{--                    </tr>--}}
                </table>
                <a href="{{route('record.show')}}" >more&edit</a>
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
                        <img src="{{asset('assets/img/icons8-rank-64.png')}}" alt="" height="50">
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
