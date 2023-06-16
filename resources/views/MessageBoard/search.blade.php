{{-- <p>{{$request->search}}の結果</p> --}}
    <table border="1">
        <tr><th>ID</th>
            <th>お名前</th>
            <th>電話番号</th>
            <th>宛先</th>
            <th>伝言内容</th>
            <th>削除</th>
            <th>編集</th>
        </tr>
        @foreach ($search_members as $member)
            <tr>
                <td>{{$member->id}}</td>
                <td>{{$member->name}}</td>
                <td>{{$member->phone}}</td>
                <td>{{$member->adress}}</td>
                <td>{{$member->detail}}</td>
                <td>
                    <form action="/MessageBoard/delete/{{$member->id}}" method="post">
                        <input type="submit" name="delete" value="削除">
                        @csrf
                    </form>
                </td>
                <td>
                    <a href="/MessageBoard/edit/{{$member->id}}">編集</a>
                </td>

            </tr>

        @endforeach
        <a href="/MessageBoard/list">一覧に戻る</a>
    </table>
