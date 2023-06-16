<form action="" method="get">
    名前を入力してください<br>
    <input type="text"  name="search"><br>
    <button type="submit" name="kensaku">検索</button><br>
</form>


@if ($messages->count()>0)
<table border="1">
    <tr>
        <th>確認ボタン</th>
        <th>ID</th>
        <th>お名前</th>
        <th>電話番号</th>
        <th>宛先</th>
        <th>伝言内容</th>
        <th>削除</th>
        <th>編集</th>
    </tr>
    @foreach ($messages as $message)
    <tr>
        <td><button type="submit" name="look">確認済みにする</button></td>
        <td>{{$message->id}}</td>
        <td>{{$message->name}}</td>
        <td>{{$message->phone}}</td>
        <td>{{$message->adress}}</td>
        <td>{{$message->detail}}</td>
        <td>
            <form action="/MessageBoard/delete/{{$message->id}}" method="post">
                <input type="submit" name="delete" value="削除">
                @csrf
            </form>
        </td>
        <td>
            <a href="/MessageBoard/edit/{{$message->id}}">編集</a>
        </td>

    </tr>

    @endforeach
</table>

@else
<p>伝言がありません</p>
@endif
