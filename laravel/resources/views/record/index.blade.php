<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Record一覧</h1>
    <table>
        <tr>
            <th>record_id</th>
            <th>Note</th>
            <th>Expense</th>
            <th>Income</th>
            <th>category_id</th>
            <th>user_name</th>
        </tr>
        @foreach($records as $record)
            <tr>
                <td>{{$record->id}}</td>
                <td>{{$record->note}}</td>
                <td>{{$record->expense}}</td>
                <td>{{$record->income}}</td>
                <td>{{$record->category_id}}</td>
{{--                <td>{{$record->user->name}}</td>--}}
{{--                ログイン機能実装後ログインしているユーザーidをpostノときに渡すようにする--}}
            </tr>
        @endforeach
    </table>
</body>
</html>
